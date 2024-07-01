<?php

namespace App\Http\Controllers;

use App\Mail\SendVerificationMail;
use App\Mail\SubmissionNotifyOwn;
use App\Mail\SubmissionThankyou;
use App\Models\Journal;
use App\Models\Submission;
use App\Models\SubmissionKeyword;
use App\Models\SubmissionStatusHistory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Number;
use Illuminate\Support\Str;


class SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $submissions = Auth::user()->submissions()->paginate(10);
        return view('user.pages.our-submission', compact('submissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.pages.submission', [
            'journals' => Journal::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->toArray());
        $keywordsJson = $request->input('keywords');
        $keywordsArray = json_decode($keywordsJson, true);

        $keywordValues = array_map(function ($keyword) {
            return $keyword['value'];
        }, $keywordsArray);
        DB::beginTransaction();
        try {
            $submission = Submission::create([
                'submission_id' => $this->create_submission_id(),
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'abstract' => $request->abstract,
                'references' => $request->references,
                'current_status' => 0, 
                'current_stage' => 0, 
                'user_id' => Auth::id()
            ]);
            $submission_history = SubmissionStatusHistory::where('submission_id', $submission->id)->latest()->first();
            $submission_status = $submission_history ? $submission_history->status : 0;
            $submission_stage = $submission_history ? $submission_history->stage : 0;

            $submission->current_status = $submission_status;
            $submission->current_stage = $submission_stage;
            $submission->save();

            foreach ($keywordValues as $keyword) {
                $submission->keywords()->create([
                    'keyword' => $keyword
                ]);
            }

            foreach ($request->author as $author) {
                $submission->authors()->create([
                    'name' => $author['name'],
                    'email' => $author['email'],
                    'orcid' => $author['orcid'],
                    'is_primary_contact' => isset($author['is_primary_contact']),
                ]);
            }

            foreach ($request->file as $fileData) {
                $file = $fileData['file'];
                $fileType = $fileData['filetype'];

                $name = uniqid() . '.' . $file->getClientOriginalExtension();
                $manuscript_path = $file->move(public_path('submissions/'), $name);

                $submission->files()->create([
                    'file_path' => 'submissions/' . $name,
                    'file_type' => $fileType,
                    'feedback' => '',
                    'status' => 0,
                    'stage' => 0, // Set stage as needed
                ]);
            }


            $submission->statusHistory()->create([
                'status' => 0,
                'stage' => $submission_stage,
            ]);

            DB::commit();
            return to_route('submission.index')->with('success', 'Submission Submitted successfully');
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            return back()->with('error', 'Submission submitted failed');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $submission =  Submission::with(['keywords', 'authors', 'statusHistory', 'user', 'files'])->find($request->id);
        return view('modals.view-submission', compact('submission'))->render();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'submission_id' => 'required|exists:submissions,id',
            'status' => 'required|in:0,1',
            'reviewer_message' => 'required|string',
        ]);

        $submission = Submission::with('reviewer')->findOrFail($request->submission_id);
        if (Auth::user()->role_id == 1) {
            $submission->update([
                'admin_status' => $request->status == "0" ? 2 : 1,
                'admin_message' => $request->reviewer_message,
            ]);
        } else {
            $submission->update([
                'reviewer_status' => $request->status == "0" ? 2 : 1,
                'reviewer_message' => $request->reviewer_message,
                'reviewer_id' => Auth::id()
            ]);
        }
        if (Auth::user()->role_id != 1) {
            $user = User::find(1);
        } else {
            $user = $submission->user;
        }
        $subject = $request->status == "0" ? "Submission Rejected" : "Submission Approved";
        $statusText = $request->status == '0' ? 'Rejected' : 'Approved';
        if (Auth::user()->role_id == 1) {
            Mail::send('mail.admin-approve', ['user' => $user, 'submission' => $submission, 'statusText' => $statusText], function ($m) use ($user, $subject) {
                $m->to($user->email)->subject($subject);
            });
        } else {
            Mail::send('mail.send-status', ['user' => $user, 'submission' => $submission, 'statusText' => $statusText], function ($m) use ($user, $subject) {
                $m->to($user->email)->subject($subject);
            });
        }
        return back()->with('success', 'Status Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    private function create_submission_id()
    {
        $lastSubmission = Submission::orderByDesc('id')->first();
        $id = $lastSubmission ? $lastSubmission->id + 1 : 1;
        return 'GP-' . str_pad($id, 4, '0', STR_PAD_LEFT);
    }
}
