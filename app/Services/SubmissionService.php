<?php

namespace App\Services;

use App\Mail\APCMail;
use App\Mail\SendPeerReview;
use App\Mail\SubmissionStatusUpdate;
use App\Models\JournalBoardMember;
use App\Models\JournalBoardMemberSubmissionFile;
use App\Models\PeerReviewAssignment;
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
        $submissionFileId = $request->submissionfile_id;

        DB::beginTransaction();
        try {
            $name = uniqid() . '.' . $request->file->getClientOriginalExtension();
            $request->file->move(public_path('peer-review/'), $name);
            $peer_review_file_path = 'peer-review/' . $name;

            if ($request->filled('other_check')) {
                $user = $this->getUser($request->email, $newGeneratedPassword);
                PeerReviewAssignment::create([
                    'submission_file_id' => $submissionFileId,
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
                        'submission_file_id' => $submissionFileId,
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
}
