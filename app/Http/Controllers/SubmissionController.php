<?php

namespace App\Http\Controllers;

use App\Mail\SendVerificationMail;
use App\Mail\SubmissionNotifyOwn;
use App\Mail\SubmissionThankyou;
use App\Models\Journal;
use App\Models\Submission;
use App\Models\SubmissionFile;
use App\Models\SubmissionKeyword;
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
        if (!Auth::check()) {
            return back();
        }

        $submissions = Submission::with(['user', 'submission_files' => function ($q) {
            $q->latest();
        }])
            ->where('user_id', Auth::id())
            ->paginate(10);

        return view('user.pages.our-submission', compact('submissions'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.pages.submission', [
            'journals' => Journal::all(),
            'manuscript_id' => $this->create_manuscript_id()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            if (User::where('email', $request->email_address)->exists()) {
                $user  = User::where('email', $request->email_address)->first();
            } else {
                $user = Auth::user();
                if (!Auth::check()) {
                    $user =  User::create([
                        'name' => $request->first_name,
                        'email' => $request->email_address,
                        'password' => "",
                        'role_id' => 3,
                        'remember_token' => Str::random(10),
                        'phone_number' => $request->phone_number,
                        'country' => $request->country,
                        'is_active' => false
                    ]);
                }
            }
            $submission = Submission::create([
                'manuscript_id' => $this->create_manuscript_id(),
                'journal_id' => $request->journal_id,
                'initial_feedback' => null,
                'status' => 0,
                'user_id' => $user->id,
            ]);
            if ($request->manuscript) {
                $name = $request->file('manuscript')->getClientOriginalName();
                $path = 'storage/' . $request->file('manuscript')->store('manuscripts', 'public');
                SubmissionFile::create([
                    'file_name' => $name,
                    'file_path' => $path,
                    'submission_id' => $submission->id,
                ]);
            }
            session()->put('user_id', $user->id);
            DB::commit();
            Mail::to($user->email)->send(new SubmissionThankyou());
            Mail::to('developertesting132@gmail.com')->send(new SubmissionNotifyOwn($submission , $user));
            if (!Auth::check()) {
                Mail::to($user->email)->send(new SendVerificationMail($user));
                return redirect()->route('after.verify.email')->with('success', 'Verification email sent successfully. Please check your inbox and verify your email address.');
            }
            return redirect()->route('submission.index')->with('success', 'Submitted Successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            return back()->with('error', 'Submission Failed!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $submission =  Submission::find($request->id);
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

    private function create_manuscript_id()
    {
        $lastSubmission = Submission::orderByDesc('id')->first();
        $id = $lastSubmission ? $lastSubmission->id + 1 : 1;
        return 'MS-' . str_pad($id, 4, '0', STR_PAD_LEFT);
    }
}
