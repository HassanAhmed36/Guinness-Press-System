<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JournalBoardMember;
use App\Models\PeerReviewAssignment;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SubmissionController extends Controller
{
    public function index()
    {
        $submissions  = Submission::with('user.user_basic_info')->get();
        return view('admin.submission.index', compact('submissions'));
    }

    public function show($id)
    {
        $submission = Submission::with([
            'user',
            'keywords',
            'files' => function ($q) {
                $q->OrderByDesc('id');
            },
            'authors',
            'statusHistory',
            'peer_review' => function ($q) {
                $q->OrderByDesc('id');
            },
            'journal',
            'pre_publications' => function ($q) {
                $q->OrderByDesc('id');
            }
        ])->find($id);
        $members = JournalBoardMember::where('journal_id', $submission->journal_id)->get();
        return view('admin.submission.show', compact('submission', 'members'));
    }


    public function updateStatus(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $submission = Submission::with('statusHistory')->find($id);
            $submission->update([
                "current_stage" => $request->stage,
                "current_status" => $request->status
            ]);
            $submission->statusHistory()->create([
                'status' => $request->status,
                'stage' => $request->stage,
            ]);
            DB::commit();
            return back()->with('success', 'Submission Status and Stage Updated Successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Submission Status and Stage Updated failed!');
        }
    }

    public function PeerReview()
    {
        $submission = PeerReviewAssignment::with('submission_file')->where('user_id', Auth::id())->get();
        return view('boardmember.peer-review', compact('submission'));
    }
}
