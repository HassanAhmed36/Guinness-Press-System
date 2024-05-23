<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use App\Models\SubmissionKeyword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Number;

class SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $submissions = Submission::with(['user', 'submision_keywords']);
        if (Auth::user()->role_id == 3) {
            $submissions = $submissions->where('user_id', Auth::id());
        }
        $submissions = $submissions->get();
        return view('submission.index', compact('submissions'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('submission.create' , [
            'menuscript_id' => $this->create_menuscript_id()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'abstract' => 'required|string',
            'keywords' => 'string',
            'journal' => 'required|string',
            'manuscript' => 'required|file',
            'cover_letter' => 'required|file',
            'author_message' => 'sometimes|string'
        ]);
        DB::beginTransaction();
        try {
            $keywordsArray = explode(',', $data['keywords']);
            $keywordsArray = array_map('trim', $keywordsArray);

            if ($request->hasFile('manuscript')) {
                $name = uniqid() . '.' . $request->manuscript->getClientOriginalName();
                $manuscript_name = $request->manuscript->getClientOriginalName();
                $request->manuscript->move(public_path('manuscripts/'), $name);
                $manuscript_path = 'manuscript/' . $name;
            }
            if ($request->hasFile('cover_letter')) {
                $name = uniqid() . '.' . $request->cover_letter->getClientOriginalName();
                $cover_letter_name = $request->cover_letter->getClientOriginalName();
                $request->cover_letter->move(public_path('cover_letter/'), $name);
                $cover_letter_path = 'cover_letter/' . $name;
            }

            $submission = Submission::create([
                'menuscript_id' => $this->create_menuscript_id(),
                'title' => $request->title,
                'abstract' => $request->abstract,
                'journal' => $request->journal,
                'manuscript_name' => $manuscript_name,
                'manuscript_path' => $manuscript_path,
                'cover_letter_name' => $cover_letter_name,
                'cover_letter_path' => $cover_letter_path,
                'author_message' => $request->author_message,
                'status' => 0,
                'user_id' => Auth::id()
            ]);

        foreach ($keywordsArray as $key => $value) {
           SubmissionKeyword::create([
                'keyword' => $value,
                'submission_id' => $submission->id
           ]);
        }
            DB::commit();
            return redirect()->route('submission.index')->with('success' , 'Submitted Successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            return back()->with('error' , 'Submission Failed!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $submission =  Submission::with('submision_keywords')->find($request->id);
        return view('modals.view-submission' , compact('submission'))->render();
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

        $submission = Submission::findOrFail($request->submission_id);
        $submission->update([
            'status' => $request->status == "0" ? 2 : 1,
            'reviewer_message' => $request->reviewer_message,
        ]);

        $user = $submission->user;
        $subject = $request->status == "0" ? "Submission Rejected" : "Submission Approved";
        $statusText = $request->status == '0' ? 'Rejected' : 'Approved';

        Mail::send('mail.send-status', ['user' => $user, 'submission' => $submission , 'statusText' => $statusText ], function ($m) use ($user, $subject) {
            $m->to($user->email)->subject($subject);
        });

        return back()->with('success', 'Status Updated Successfully!');
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    private function create_menuscript_id(){
        $lastSubmission = Submission::orderByDesc('id')->first();
        $id = $lastSubmission ? $lastSubmission->id + 1 : 1;
        return 'MS-' . str_pad($id, 4, '0', STR_PAD_LEFT);
    }
}