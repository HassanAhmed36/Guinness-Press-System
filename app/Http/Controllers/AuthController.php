<?php

namespace App\Http\Controllers;

use App\Mail\SendVerificationMail;
use App\Models\Submission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function loginAfterSubmission()
    {
        return view('user.auth.login-after-submission');
    }

    public function submitLoginAfterSubmission()
    {
        request()->validate([
            'email' => 'required|email'
        ]);
        $user = User::create([
            'email' => request('email'),
            'password' => '',
            'role_id' => 3,
            'is_active' => false,
            'remember_token' => Str::random(10),
        ]);

        Mail::to(request('email'))->send(
            new SendVerificationMail($user)
        );

        return redirect()->route('after.verify.email')->with('success', 'Verification email sent successfully. Please check your inbox and verify your email address.');
    }

    public function VerifyEmail($token)
    {
        $user = User::where('remember_token', $token)->first();
        if (!$user) {
            abort(403);
        }
        $user->email_verified_at = now();
        $user->save();
        return view('user.auth.login-password', compact('user'));
    }

    public function submitLoginAfterSubmissionPassword()
    {
        request()->validate([
            'password' => 'required'
        ]);
        try {
            $user = User::where('id', request('user_id'))->first();
            $user->update([
                'password' => Hash::make(request('password')),
                'is_active' => 1
            ]);
            $submission = Submission::where('menuscript_id', session()->get('manuscript_id'))->first();
            $submission->update([
                'user_id' => $user->id
            ]);
            session()->forget('manuscript_id');
            Auth::login($user);
            return redirect('/')->with('message', 'Please complete your Profile');
        } catch (\Throwable $th) {
            return back()->with('message', 'Please copy a link and open htis page in sabe browser');
        }
    }

    public function login()
    {
        return view('user.auth.login');
    }
    public function SubmitLogin()
    {
        $credentials = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();
            if (Auth::user()->role_id == 1) {
                Auth::logout();
                return redirect()->route('admin.login');
            }
            if (auth()->user()->user_basic_info()->exists()) {
                return redirect()->intended('/');
            } else {
                return redirect()->intended('/')->with('message', 'Please complete your profile first');
            }
        }

        return back()->withErrors([
            'email' => 'Invalid Credentials',
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function register()
    {
        return view('user.auth.register');
    }

    public function SubmitRegister()
    {
        request()->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed'],
            'title' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'current_job_title' => ['required', 'string', 'max:255'],
            'department' => ['required', 'string', 'max:255'],
            'institution' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'contact_number' => ['required', 'string', 'max:255'],
        ]);
        try {
            $user =  User::create([
                'email' => request()->email,
                'password' => Hash::make(request()->password),
                'title' => request()->title,
                'first_name' => request()->first_name,
                'last_name' => request()->last_name,
                'current_job_title' => request()->current_job_title,
                'department' => request()->department,
                'institution' => request()->institution,
                'country' => request()->country,
                'contact_number' => request()->contact_number,
                'role_id' => 3
            ]);
            Auth::login($user);
            return redirect('/')->with('success', 'user login successfully');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('error', 'User Created Failed');
        }
    }
}
