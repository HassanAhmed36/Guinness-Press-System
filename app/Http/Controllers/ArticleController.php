<?php

namespace App\Http\Controllers;

use App\Mail\LandingPage;
use App\Mail\LeadVerifyMail;
use App\Models\IndexBody;
use App\Models\Journal;
use App\Models\Submission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use League\ISO3166\ISO3166;
use App\Models\Article;
use App\Models\Lead;

class ArticleController extends Controller
{
    public function submitArticle()
    {
        $countries = $this->getCountries();
        $journals = Journal::all();
        return view('user.pages.submit_articles', compact('journals', 'countries'));
    }

    public function lpView()
    {
        $indexing_bodies = IndexBody::all();
        $journals = Journal::with('journal_matrix')->where('issn_no', '!=', '')->get();
        $countries = $this->getCountries();
        return view('user.lp.index', compact('indexing_bodies', 'journals', 'countries'));
    }

    public function getCountries()
    {
        $iso3166 = new ISO3166();
        return  $iso3166->all();
    }

    public function submitLp(Request $request)
    {

              $request->validate([
                    'first_name' => 'required',
                    'email_address' => 'required',  
                    'phone_number' => 'required', 
                    'country' => 'required',
                    'journal' => 'required'
                ]);
           try {
                           
            $name = uniqid() . '.' . $request->attachement->getClientOriginalExtension();
            $manuscript_name = $request->attachement->getClientOriginalName();
            $request->attachement->move(public_path('lp-files/'), $name);
            $manuscript_path = 'lp-files/' . $name;
    
            $journal_name = Journal::find($request->journal);
            if (!$journal_name) {
                throw new \Exception('Journal not found.');
            }
    
            $data = [
                'name' => $request->first_name,
                'email' => $request->email_address,
                'number' => $request->phone_number,
                'country' => $request->country,
                'journal' => $journal_name->name
            ];
    
            Mail::to('submission@guinnesspress.org')->send(new LandingPage($manuscript_name, $manuscript_path, $data, $request->url));
            // Mail::to('hassanahmed3652@gmail.com')->send(new LandingPage($manuscript_name, $manuscript_path, $data, $request->url));
    
            $lead = Lead::create([
                'name' => $request->first_name,
                'phone_number' => $request->phone_number,
                'country' => $request->country,
                'email' => $request->email_address,
                'journal_id' => $request->journal,
                'manuscript_path' => $manuscript_path
            ]);
    
            Mail::to($lead->email)->send(new LeadVerifyMail($lead));
    
            return redirect('/thank-you');
        } catch (\Exception $e) {
            dd($e->getMessage);
            \Log::error('Error in submitLp method: ' . $e->getMessage());
            return back();
        }
    }

    private function create_menuscript_id()
    {
        $lastSubmission = Submission::orderByDesc('id')->first();
        $id = $lastSubmission ? $lastSubmission->id + 1 : 1;
        return 'MS-' . str_pad($id, 4, '0', STR_PAD_LEFT);
    }

    public function incrementView(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->increment('views_count');
        return response()->json(['success' => true]);
    }
}
