<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ApproveSubmission;
use App\Mail\InitialFeedBack as InitialFeedbackMail;
use App\Mail\RejectSubmission;
use App\Models\InitialFeedBack;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubmissionController extends Controller
{
    public function index()
    {
        $submissions = Submission::with(['journal' => function ($q) {
            $q->select('id', 'name');
        }, 'user' => function ($q) {
            $q->select('id', 'email');
        }])->get();
        return view('admin.submission.index', compact('submissions'));
    }

    public function approveSubmission(Request $request, $id)
    {
        $submission = Submission::with('user')->find($id);
        $submission->update([
            'admin_status' => 1,
            'admin_message' => $request->review_comments
        ]);

        Mail::to($submission->user->email)->send(new ApproveSubmission($submission));
        return back()->with('success', 'Submission Approved Successfully');
    }
    public function rejectSubmission(Request $request, $id)
    {
        $submission = Submission::with('user')->find($id);
        $submission->update([
            'admin_status' => 3,
            'admin_message' => $request->review_comments
        ]);
        Mail::to($submission->user->email)->send(new RejectSubmission($submission));
        return back()->with('success', 'Submission Reject Successfully');
    }
    public function destroy($id)
    {
        Submission::find($id)->delete();
        return back()->with('success', 'Submission Deleted Successfully');
    }

    public function show($id)
    {
        $submission = Submission::with([
            'user', 'submission_files' => function ($q) {
                $q->latest();
            },
            'journal' => function ($q) {
                $q->with('board_member');
            },
            'submission_files' => function ($q) {
                $q->with('initial_feedback');
            }
        ])->find($id);
        return view('admin.submission.show', compact('submission'));
    }

    public function updateInitialFeedback(Request $request)
    {
        $request->validate([
            'submission_file_id' => 'required|exists:submission_files,id',
            'initial_status' => 'required|boolean',
            'feedback_message' => 'required|string',
        ]);

        try {
            $initialFeedback = InitialFeedBack::create($request->all());
            $status = $initialFeedback->initial_status == 1 ? 1 : 2;
            $initialFeedback->submission_file->submission->update([
                'status' => $status
            ]);
            $email = $initialFeedback->submission_file->submission->user->email;
            $statusMessage = $initialFeedback->initial_status == 1
                ? 'Your submission has been approved. Please check the review feedback after logging into your account. Your submission details will be visible under your account.'
                : 'Your submission has been rejected. Please check the review feedback after logging into your account for more details. Your submission details will be visible under your account.';
            $data = [
                'subject' => 'Initial Feedback Received',
                'message' => $statusMessage,
            ];
            Mail::to($email)->send(new InitialFeedbackMail($data));
            return back()->with('success', 'Initial Feedback Updated Successfully');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('success', 'Initial Feedback Updated Failed');
        }
    }
}