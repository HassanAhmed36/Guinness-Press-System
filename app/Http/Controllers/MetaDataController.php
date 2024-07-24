<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SimpleXMLElement;
use Carbon\Carbon;

class MetaDataController extends Controller
{
    public function index()
    {
        $journals = Journal::all();
        return view('admin.meta_data.index', compact('journals'));
    }

   
    public function postMetaData(Request $request)
    {
        $request->validate([
            "journal_id" => "required",
            "volume_id" => "required",
            "issue_id" => "required",
        ]);
    
        $journal_id = $request->journal_id;
        $volume_id = $request->volume_id;
        $issue_id = $request->issue_id;
    
        $journal = Journal::with(['volume' => function ($query) use ($volume_id, $issue_id) {
            $query->where('id', $volume_id)
                ->with(['issue' => function ($query) use ($issue_id) {
                    $query->where('id', $issue_id)
                        ->with('articles.article_details');
                }]);
        }])
            ->find($journal_id);
    
        // dd($journal->toArray());
    
        $journalData = $journal->toArray();
        $volumeData = $journalData['volume'][0];
        $issueData = $volumeData['issue'][0];
    
        // Generate DOI batch ID dynamically
        $doiBatchId =  $journalData['acronym'] . $volumeData['name'] .  $issueData['name'] .  now()->format('YmdHis');
    
        $dom = new \DOMDocument('1.0', 'UTF-8');
        $dom->formatOutput = true;
    
        $doi_batch = $dom->createElement('doi_batch');
        $doi_batch->setAttribute('xmlns', 'http://www.crossref.org/schema/4.4.2');
        $doi_batch->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
        $doi_batch->setAttribute('xmlns:jats', 'http://www.ncbi.nlm.nih.gov/JATS1');
        $doi_batch->setAttribute('version', '4.4.2');
        $doi_batch->setAttribute('xsi:schemaLocation', 'http://www.crossref.org/schema/4.4.2 http://www.crossref.org/schema/deposit/crossref4.4.2.xsd');
    
        $head = $dom->createElement('head');
        $head->appendChild($dom->createElement('doi_batch_id', $doiBatchId));
        $head->appendChild($dom->createElement('timestamp', now()->format('YmdHisv')));
        $depositor = $dom->createElement('depositor');
        $depositor->appendChild($dom->createElement('depositor_name', 'munzallin.munaf@gmail.com:guip'));
        $depositor->appendChild($dom->createElement('email_address', 'saifuddin@guinnesspress.org'));
        $head->appendChild($depositor);
        $head->appendChild($dom->createElement('registrant', 'Guinness Press'));
        $doi_batch->appendChild($head);
    
        $body = $dom->createElement('body');
        $journalXML = $dom->createElement('journal');
    
        // Add journal metadata
        
        
        $journal_metadata = $dom->createElement('journal_metadata');
        
        $fullTitle = ucwords(strtolower($journalData['name']));
        $journal_metadata->appendChild($dom->createElement('full_title', $fullTitle));
        $journal_metadata->appendChild($dom->createElement('abbrev_title', $journalData['acronym']));
        
        $cleanedIssn = str_replace('-', '', $journalData['issn_no']);
        $issn = $dom->createElement('issn', $cleanedIssn);
        $issn->setAttribute('media_type', 'electronic');
        $journal_metadata->appendChild($issn);
        $doi_data = $dom->createElement('doi_data');
        $doi_data->appendChild($dom->createElement('doi', '10.59762/' . $journalData['acronym']));
        $doi_data->appendChild($dom->createElement('resource', 'https://guinnesspress.org/publication/journal/' . $journalData['acronym']));
        $journal_metadata->appendChild($doi_data);
        $journalXML->appendChild($journal_metadata);
    
        foreach ($journalData['volume'] as $volume) {
            $journal_issue = $dom->createElement('journal_issue');
            $publication_date = $dom->createElement('publication_date');
            $publication_date->setAttribute('media_type', 'online');
            $publication_date->appendChild($dom->createElement('month', '05'));
            $publication_date->appendChild($dom->createElement('day', '13'));
            $publication_date->appendChild($dom->createElement('year', '2024'));
            $journal_issue->appendChild($publication_date);
    
            $journal_volume = $dom->createElement('journal_volume');
            $journal_volume->appendChild($dom->createElement('volume', $volume['name']));
            $journal_issue->appendChild($journal_volume);
            $journal_issue->appendChild($dom->createElement('issue', $volume['issue'][0]['name']));
            $journalXML->appendChild($journal_issue);
    
            // Add comment here
            $comment = $dom->createComment(' ============== ');
            $journalXML->appendChild($comment);
    
            foreach ($volume['issue'][0]['articles'] as $article) {
                $journal_article = $dom->createElement('journal_article');
                $journal_article->setAttribute('publication_type', 'full_text');
    
                $titles = $dom->createElement('titles');
                $titleText = htmlspecialchars($article['title'], ENT_XML1, 'UTF-8');
                $titles->appendChild($dom->createElement('title', $titleText));
                $journal_article->appendChild($titles);
                    
                $contributors = $dom->createElement('contributors');
                $i = 1;
                foreach ($article['article_details']['authors'] as $author) {
                    foreach($author['affiliation'] as $affiliation)  {  
                        // Trim trailing commas and whitespace from the affiliation string
                        $affiliation = rtrim($affiliation, ', ');
                        $organization = $dom->createElement('organization', htmlspecialchars($affiliation));
                        $organization->setAttribute('sequence', $i == 1 ? 'first' : 'additional');
                        $organization->setAttribute('contributor_role', 'author');
                        $contributors->appendChild($organization);
                    }
                    $person_name = $dom->createElement('person_name');
                    $person_name->setAttribute('sequence', $i == 1 ? 'first' : 'additional');
                    $person_name->setAttribute('contributor_role', 'author');
                    $person_name->appendChild($dom->createElement('given_name', $author['firstname']));
                    $person_name->appendChild($dom->createElement('surname', $author['lastname']));
                    if (!empty($author['orchid_id'])) {
                        $person_name->appendChild($dom->createElement('ORCID', 'https://orcid.org/'.$author['orchid_id']));
                    }
                    $contributors->appendChild($person_name);
                    $i++;
                }
                $journal_article->appendChild($contributors);
    
                $dirty_html = $article['article_details']['abstract'];
                $cleaned_abstract = $this->cleanAbstract($dirty_html);
    
                $abstract = $dom->createElement('jats:abstract');
                $p = $dom->createElement('jats:p', htmlspecialchars($cleaned_abstract));
                $abstract->appendChild($p);
                $abstract->setAttribute('xml:lang', 'en');
                $journal_article->appendChild($abstract);
    
                $publication_date = $dom->createElement('publication_date');
                $publication_date->setAttribute('media_type', 'online');
                $publication_date->appendChild($dom->createElement('month', date('m', strtotime($article['published_date']))));
                $publication_date->appendChild($dom->createElement('day', date('d', strtotime($article['published_date']))));
                $publication_date->appendChild($dom->createElement('year', date('Y', strtotime($article['published_date']))));
                $journal_article->appendChild($publication_date);
    
                $pages = $dom->createElement('pages');
                $pages->appendChild($dom->createElement('first_page', $article['first_page']));
                $pages->appendChild($dom->createElement('last_page', $article['last_page']));
                $journal_article->appendChild($pages);
                
                          // Create the <crossmark> element
            $crossmark = $dom->createElement('crossmark');
            
            // Add <crossmark_version> and <crossmark_policy> elements
            $crossmark->appendChild($dom->createElement('crossmark_version', '1'));
            $crossmark->appendChild($dom->createElement('crossmark_policy', '10.59762/gp.cp'));
            
            // Create <crossmark_domains> element
            $crossmark_domains = $dom->createElement('crossmark_domains');
            
            // Create <crossmark_domain> element
            $crossmark_domain = $dom->createElement('crossmark_domain');
            
            // Create <domain> element with the URL and append it to <crossmark_domain>
            $domain = $dom->createElement('domain', 'www.guinnesspress.org');
            $crossmark_domain->appendChild($domain);
            
            // Append <crossmark_domain> to <crossmark_domains>
            $crossmark_domains->appendChild($crossmark_domain);
            
            // Append <crossmark_domains> to <crossmark>
            $crossmark->appendChild($crossmark_domains);
            
            // Add <crossmark_domain_exclusive> element
            $crossmark->appendChild($dom->createElement('crossmark_domain_exclusive', 'false'));
            
            // Append <crossmark> to the parent element
            $journal_article->appendChild($crossmark);
    
                $doi_data = $dom->createElement('doi_data');
                $doi_data->appendChild($dom->createElement('doi', $article['dio']));
                $doi_data->appendChild($dom->createElement('resource', 'https://guinnesspress.org/publication/journal/'. $journalData['acronym'] . '/' . $article['article_code']));
                $journal_article->appendChild($doi_data);
    
                $journalXML->appendChild($journal_article);
    
                // Add comment here
                $comment = $dom->createComment(' ============== ');
                $journalXML->appendChild($comment);
            }
        }
    
        $body->appendChild($journalXML);
        $doi_batch->appendChild($body);
        $dom->appendChild($doi_batch);
    
        return response($dom->saveXML(), 200, [
            'Content-Type' => 'application/xml',
            'Content-Disposition' => 'attachment; filename="doi_batch.xml"',
        ]);
    }


   
    private function cleanAbstract($html)
    {
        $html = html_entity_decode($html);
        $cleaned_abstract = strip_tags($html);
        $cleaned_abstract = htmlspecialchars($cleaned_abstract);
        return $cleaned_abstract;
    }

}
