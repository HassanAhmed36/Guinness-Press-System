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
        if ($request->filled('other_check')) {
            $user = User::create([
                'email' => $request->email,
                'password' => Hash::make($newGeneratedPassword),
                'role_id' => 2,
                'is_active' => true
            ]);
            PeerReviewAssignment::create([
                'submission_file_id' => $request->submissionfile_id,
                'status' => 0,
                'user_id' => $user->id
            ]);
            Mail::to($user->email)->send(new SendPeerReview($user, $newGeneratedPassword));
            return redirect()->back()->with('success', 'Submission Assigned and mail sent successfully');
        } else {
            foreach ($request->boardmember as $memberID) {
                $boardmember = JournalBoardMember::find($memberID);
                $user = User::create([
                    'email' => $boardmember->email,
                    'password' => Hash::make($newGeneratedPassword),
                    'role_id' => 2,
                    'is_active' => true
                ]);
                PeerReviewAssignment::create([
                    'submission_file_id' => $request->submissionfile_id,
                    'status' => 0,
                    'user_id' => $user->id
                ]);
                Mail::to($user->email)->send(new SendPeerReview($user, $newGeneratedPassword));
            }
            return redirect()->back()->with('success', 'Submission Assigned and mail sent successfully');
        }
    }
}
