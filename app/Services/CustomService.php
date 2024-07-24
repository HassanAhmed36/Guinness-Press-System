<?php

namespace App\Services;

use App\Mail\NewsLetterVerification;
use App\Models\Article;
use App\Models\Journal;
use App\Models\JournalVolume;
use App\Models\LoginHistory;
use App\Models\Submission;
use App\Models\SubmissionFile;
use App\Models\SubmissionStatusHistory;
use App\Models\VolumeIssue;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use App\Services\SubmissionService;
use App\Mail\SubmissionStatusUpdate;
use App\Models\Lead;
use App\Models\NewsLetter;
use App\Models\Tag;

class CustomService
{
    public function fetchVolumes(Request $request)
    {
        $journalId = $request->get('journal_id');
        $volumes = JournalVolume::where('journal_id', $journalId)->get();
        session()->forget('fetch_volume');
        session()->put('fetch_volume', $volumes);
        return view('admin.partials.volume-selectbox', compact('volumes'))->render();
    }

    public function fetchIssue(Request $request)
    {
        $volume_id = $request->volume_id;
        $issues = VolumeIssue::where('volume_id', $request->volume_id)->get();
        session()->forget('issue_id');
        session()->put('fetch_issue', $issues);
        return view('admin.partials.issue-selectbox', compact('issues'))->render();
    }
    public function fetchVolumesdoi(Request $request)
    {
        $journalId = $request->get('journal_id');
        $volumes = JournalVolume::where('journal_id', $journalId)->get();
        return view('admin.partials.doi.volume-selectbox', compact('volumes'))->render();
    }

    public function fetchIssuedoi(Request $request)
    {
        $volume_id = $request->volume_id;
        $issues = VolumeIssue::where('volume_id', $volume_id)->get();
        return view('admin.partials.doi.issue-selectbox', compact('issues'))->render();
    }
    public function getDownloadCount()
    {
        $article = Article::find(request('id'));
        return $article->download_count;
    }

    public function increaseDownloadCount()
    {
        $article = Article::find(request('id'));
        $article->increment('download_count');
        return $article->download_count;
    }

    public function downloadBibCitation($id)
    {
        $article = Article::with('journal', 'issue', 'volume', 'article_details')->findOrFail($id);
        $bibContent = $this->generateBibCitation($article);

        return Response::make($bibContent, 200, [
            'Content-Type' => 'application/x-bibtex',
            'Content-Disposition' => 'attachment; filename="citation.bib"',
        ]);
    }

    public function downloadRisCitation($id)
    {
        $article = Article::with('journal', 'issue', 'volume',  'article_details')->findOrFail($id);
        $risContent = $this->generateRisCitation($article);

        return Response::make($risContent, 200, [
            'Content-Type' => 'application/x-research-info-systems',
            'Content-Disposition' => 'attachment; filename="citation.ris"',
        ]);
    }


    private function generateBibCitation(Article $article)
    {
        $authors = collect($article->article_details->authors)->map(function ($author) {
            return $author['lastname'] . ', ' . $author['firstname'];
        })->join(' and ');

        // Strip HTML tags from the abstract
        $abstract = strip_tags($article->article_details->abstract);

        return "@Article{" . $article->article_code . ",
                    AUTHOR = {" . $authors . "},
                    TITLE = {" . $article->title . "},
                    JOURNAL = {" . $article->journal->name . "},
                    VOLUME = {" . $article->volume->name . "},
                    YEAR = {" . Carbon::parse($article->published_date)->format('Y') . "},
                    NUMBER = {" . $article->issue->name . "},
                    ARTICLE-NUMBER = {" . $article->article_code . "},
                    URL = {" . URL::to('/publication/journal/' . $article->journal->acronym . '/' . $article->article_code) . "},
                    ISSN = {" . $article->journal->issn_no . "},
                    ABSTRACT = {" . $abstract . "},
                    DOI = {" . $article->dio . "}
                    }";
    }

    private function generateRisCitation(Article $article)
    {
        // Convert authors array to collection and format them correctly
        $authors = collect($article->article_details->authors)->map(function ($author) {
            return "AU  - " . $author['lastname'] . ", " . $author['firstname'];
        })->join("\n");

        // Strip HTML tags from the abstract
        $abstract = strip_tags($article->article_details->abstract);

        return "TY  - EJOUR
                " . $authors . "
                TI  - " . $article->title . "
                T2  - " . $article->journal->name . "
                PY  - " . Carbon::parse($article->published_date)->format('Y') . "
                VL  - " . $article->volume->name . "
                IS  - " . $article->issue->name . "
                SN  - " . $article->journal->issn_no . "
                AB  - " . $abstract . "
                KW  - " . $article->keywords->pluck('keyword')->join('; ') . "
                DO  - " . $article->dio . "
                UR  - " . URL::to('/publication/journal/' . $article->journal->acronym . '/' . $article->article_code) . "
                ER  -";
    }

    public function downloadTxt(Article $article)
    {
        $citation = $this->generateTxtCitation($article);
        $fileName = $article->article_code . '.txt';

        return Response::make($citation, 200, [
            'Content-Type' => 'text/plain',
            'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
        ]);
    }

    private function generateTxtCitation(Article $article)
    {
        $authors = collect($article->article_details->authors)->map(function ($author) {
            return $author['lastname'] . ', ' . $author['firstname'];
        })->join('; ');

        $abstract = strip_tags($article->article_details->abstract);

        return "Article Code: " . $article->article_code . "\n" .
            "Authors: " . $authors . "\n" .
            "Title: " . $article->title . "\n" .
            "Journal: " . $article->journal->name . "\n" .
            "Volume: " . $article->volume->name . "\n" .
            "Year: " . Carbon::parse($article->published_date)->format('Y') . "\n" .
            "Issue: " . $article->issue->name . "\n" .
            "Article Number: " . $article->article_code . "\n" .
            "URL: " . URL::to('/publication/journal/' . $article->journal->acronym . '/' . $article->article_code) . "\n" .
            "ISSN: " . $article->journal->issn_no . "\n" .
            "Abstract: " . $abstract . "\n" .
            "DOI: " . $article->dio . "\n";
    }
    public static function createLoginHistory($user_id = null)
    {
        $client = new Client();
        $response = $client->get('https://api.ipify.org?format=json');
        $data = json_decode($response->getBody(), true);
        $ip  = $data['ip'];
        LoginHistory::create([
            'ip_address' => $ip,
            'user_id' => $user_id
        ]);
        return response("success", 200);
    }

    public function submitFeedback(Request $request)
    {
        $request->validate([
            "submission_id" => "required",
            "file_id" => "required",
            "stage" => "required",
            "status" => "required",
            "feedback" => 'sometimes',
        ]);

        DB::beginTransaction();

        try {
            $feedback = $request->feedback;
            $currentStage = (int) $request->stage;
            $currentStatus = (int) $request->status;
            $message = '';

            // Determine the new stage, status, and message based on current status
            if ($currentStatus == 2) { // Rejected
                $newStatus = 2;
                $newStage = $currentStage;
                $message = 'Your submission has been rejected. Please review the feedback and resubmit.';
            } elseif ($currentStatus == 1) { // Approved
                if ($currentStage == 2) {
                    $newStage = 0;
                    $newStatus = 3;
                    $message = 'Your submission has been approved for publication. Details will be sent via email.';
                } else {
                    $newStage = $currentStage + 1;
                    $newStatus = 0;
                    $message = 'Your submission has been approved and moved to the next stage.';
                }
            } else { // Pending
                $newStage = $currentStage;
                $newStatus = $currentStatus;
            }

            // Update SubmissionFile
            $submissionFile = SubmissionFile::find($request->file_id);
            $submissionFile->update([
                "stage" => $newStage,
                "status" => $newStatus,
                "feedback" => $feedback,
            ]);

            // Log the update in SubmissionStatusHistory
            SubmissionStatusHistory::create([
                "submission_id" => $request->submission_id,
                "stage" => $newStage,
                "status" => $newStatus,
                "feedback" => $feedback,
            ]);

            // Update Submission
            $submission = Submission::with('authors')->find($request->submission_id);
            $submission->update([
                "current_stage" => $newStage,
                "current_status" => $newStatus,
            ]);
            foreach ($submission->authors as $author) {
                if ($author->is_primary_contact) {
                    Mail::to($author->email)->send(new SubmissionStatusUpdate(
                        $submission,
                        $submissionFile,
                        $feedback,
                        SubmissionService::getSubmissionStage($newStage),
                        SubmissionService::getSubmissionStatus($newStatus),
                        $message
                    ));
                }
            }

            DB::commit();
            return back()->with('success', 'Submission updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            return back()->with('error', 'Submission update failed: ' . $e->getMessage());
        }
    }

    public function searchArticle(Request $request)
    {
        $query = $request->input('query');
        $articles = Article::with('journal')
            ->where('title', 'like', '%' . $query . '%')
            ->get();
        return view('user.partials.search', ['articles' => $articles])->render();
    }

    public function subscribeEmail(Request $request)
    {
        $data = NewsLetter::create([
            'email' => $request->email
        ]);
        Mail::to($data->email)->send(new NewsLetterVerification($data));
        return redirect('/thank-you');
    }

    public function subscribeEmailVerification($id)
    {
        $NewsLetter = NewsLetter::findOrFail($id);
        $NewsLetter->update([
            'is_verified' => true
        ]);
        return redirect('/thank-you');
    }

    public function verifyLead($id)
    {
        $lead = Lead::findOrFail($id);
        $lead->update([
            'is_verified' => true
        ]);
        return redirect('/thank-you');
    }
    
    
        public function markAsConverted($id)
    {
        $lead = Lead::findOrFail($id);
        $lead->update(['is_conversion' => true]);

        return back()->with('success', 'Lead converted successfully');
    }
}
