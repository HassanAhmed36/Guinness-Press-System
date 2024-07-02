<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ApproveSubmission;
use App\Mail\RejectSubmission;
use App\Models\JournalBoardMember;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubmissionController extends Controller
{
    public function index()
    {
        $submissions  = Submission::with('user.user_basic_info')->get();
        return view('admin.submission.index', compact('submissions'));
    }


    public function show($id)
    {
        $submission = Submission::with(['user', 'keywords', 'files', 'authors', 'statusHistory'])->first();
        $members = JournalBoardMember::where('journal_id' , $submission->id)->get(); 
        return view('admin.submission.show', compact('submission', 'members'));
    }


    public function updateStatus(Request $request, $id)
    {
        $submission = Submission::with('statusHistory')->find($id);
        $submission->update([
            "current_stage" => $request->stage,
            "current_status" => $request->status
        ]);
        $submission->statusHistory()->create([
            'status' => $request->status,
            'stage' => $request->stage,
        ]);
        return back()->with('success', 'Submission Status and Stage Updated Successfully!');
    }

    
}
