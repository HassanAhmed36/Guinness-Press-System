<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ApproveSubmission;
use App\Mail\RejectSubmission;
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

    public function approveSubmission($id)
    {
        $submission = Submission::with('user')->find($id);
        $submission->update([
            'admin_status' => 1
        ]);

        Mail::to($submission->user->email)->send(
            new ApproveSubmission($submission)
        );

        return back()->with('success', 'Submission Approved Successfully');
    }
    public function rejectSubmission($id)
    {
        $submission = Submission::with('user')->find($id);
        $submission->update([
            'admin_status' => 3
        ]);

        Mail::to($submission->user->email)->send(
            new RejectSubmission($submission)
        );

        return back()->with('success', 'Submission Reject Successfully');
    }
}
