<?php

namespace App\Services;

use App\Mail\APCMail;
use App\Mail\PrePublicationFileUploaded;
use App\Mail\SendPeerReview;
use App\Mail\SubmissionStatusUpdate;
use App\Models\JournalBoardMember;
use App\Models\JournalBoardMemberSubmissionFile;
use App\Models\PeerReviewAssignment;
use App\Models\PrePublicationFile;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Submission;
use App\Models\SubmissionAuthor;
use App\Models\SubmissionFile;
use App\Models\SubmissionStatusHistory;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use PDO;

class SubmissionService
{

    public static function getSubmissionStatus(int $status): string
    {
        switch ($status) {
            case 0:
                return "Pending";
            case 1:
                return "Approved";
            case 2:
                return "Rejected";
            default:
                return "Unknown";
        }
    }

    public static function getSubmissionStage(int $stage): string
    {
        switch ($stage) {
            case 0:
                return "Initial QA";
            case 1:
                return "APC";
            case 2:
                return "Peer Reviewed";
            case 3:
                return "Publication";
            default:
                return "Unknown";
        }
    }

    public static function getPeerReviewStatus(int $status): string
    {
        switch ($status) {
            case 0:
                return "Pending";
            case 1:
                return "Approved";
            case 2:
                return "Reject";
            default:
                return "Unknown";
        }
    }

    public function sendPaypalEmail($id)
    {
        $authors = SubmissionAuthor::with('submission')->where('submission_id', $id)->get();
        foreach ($authors as $author) {
            if ($author->is_primary_contact) {
                Mail::to($author->email)->send(new APCMail($author));
            }
        }

        return back()->with('message', 'Paypal link send to your mail please');
    }

    public function assignPeerReviewed(Request $request)
    {
        $newGeneratedPassword = Str::random(6);
        DB::beginTransaction();
        try {
            $name = uniqid() . '.' . $request->file->getClientOriginalExtension();
            $request->file->move(public_path('peer-review/'), $name);
            $peer_review_file_path = 'peer-review/' . $name;

            if ($request->filled('other_check')) {
                $user = $this->getUser($request->email, $newGeneratedPassword);
                PeerReviewAssignment::create([
                    'submission_id' => $request->submission_id,
                    'status' => 0,
                    'user_id' => $user->id,
                    'file_path' => $peer_review_file_path
                ]);
                Mail::to($user->email)->send(new SendPeerReview($user, $newGeneratedPassword));
            } else {
                foreach ($request->boardmember as $memberID) {
                    $boardmember = JournalBoardMember::findOrFail($memberID);
                    $user = $this->getUser($boardmember->email, $newGeneratedPassword);
                    PeerReviewAssignment::create([
                        'submission_id' => $request->submission_id,
                        'status' => 0,
                        'user_id' => $user->id,
                        'file_path' => $peer_review_file_path
                    ]);
                    Mail::to($user->email)->send(new SendPeerReview($user, $newGeneratedPassword));
                }
            }
            DB::commit();
            return redirect()->back()->with('success', 'Submission Assigned and mail sent successfully');
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollBack();
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    private function getUser($email, $newGeneratedPassword)
    {
        $user = User::where('email', $email)->first();
        if ($user) {
            $user->password = Hash::make($newGeneratedPassword);
            $user->save();
        } else {
            $user = User::create([
                'email' => $email,
                'password' => Hash::make($newGeneratedPassword),
                'role_id' => 2,
                'is_active' => true
            ]);
        }
        return $user;
    }

    public function submitPeerReviewFeedback(Request $request)
    {
        $request->validate([
            "peer_review_id" => "required",
            "status" => "required",
            "feedback" => "required",
        ]);
        try {
            PeerReviewAssignment::where('id', $request->peer_review_id)->update([
                'status' => $request->status,
                'feedback' => $request->feedback
            ]);
            return back()->with('success', 'Feedback submitted successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Feedback submitted Failed');
        }
    }

    public function sendFileToAuthor(Request $request)
    {
        $request->validate([
            'submission_id' => 'required',
            'file' => 'required|file'
        ]);

        try {
            $file_name = Str::random(8) . '.' . $request->file('file')->getClientOriginalExtension();
            $request->file('file')->move(public_path('/pre-publication-file'), $file_name);
            $path = "/pre-publication-file/" . $file_name;
            $submission = Submission::with('user')->findOrFail($request->submission_id);
            $submission->pre_publications()->create([
                'submission_id' => $request->submission_id,
                'path' =>  $path
            ]);
            Mail::to($submission->user->email)->send(new PrePublicationFileUploaded($submission));
            return back()->with('success', 'Pre-publication file sent successfully');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'File could not be uploaded. Please try again.'])->withInput();
        }
    }

    public function postPrePublication(Request $request)
    {
        $request->validate([
            'pre_publication_id' => 'required',
            'status' => 'required',
            'comment' => 'nullable'
        ]);
        try {
            PrePublicationFile::find($request->pre_publication_id)
                ->update([
                    'status' => $request->status,
                    'comment' => $request->comment
                ]);
            Mail::raw('Author updated the pre-publication file.', function ($message) {
                $message->to('ahmed280045@gmail.com')
                    ->subject('Pre-publication File Update');
            });
            return back()->with('success', 'Pre-publication file status submitted successfully!');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('error', 'Pre-publication status failed to update.');
        }
    }
}
