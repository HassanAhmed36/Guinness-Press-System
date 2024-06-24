<?php

namespace App\Http\Controllers;

use App\Mail\SendVerificationMail;
use App\Mail\SubmissionNotifyOwn;
use App\Mail\SubmissionThankyou;
use App\Models\Submission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use League\ISO3166\ISO3166;

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

        Mail::to(request('email'))->send(new SendVerificationMail($user));
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
        $user = User::where('id', request('user_id'))->first();
        $user->update([
            'email_verified_at' => now(),
            'password' => Hash::make(request('password')),
            'is_active' => 1
        ]);

        session()->forget('user_id');
   
        Auth::login($user);
        return redirect('/');
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
            return redirect()->intended('/');
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
        $iso3166 = new ISO3166();
        $countries = $iso3166->all();
        return view('user.auth.register', compact('countries'));
    }

    public function SubmitRegister()
    {
        request()->validate([
            'name' => 'required',
            'email' => 'email|required|unique:users,email',
            'password' => 'required|confirmed',
            'phone_number' => 'required',
            'country' => 'required',
        ]);
        try {
            $user =  User::create([
                'name' => request('name'),
                'email' => request('email'),
                'password' => Hash::make(request('password')),
                'role_id' => 3,
                'phone_number' => request('phone_number'),
                'country' => request('country'),
                'is_active' => true
            ]);
            Auth::login($user);
            return redirect('/')->with('success', 'user login successfully');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('error', 'User Created Failed');
        }
    }


    public function resend(Request $request)
    {
        try {
            $user =  User::find($request->user_id);
            $user->update([
                'remember_token' => Str::random(10),
            ]);
            Mail::to($user->email)->send(new SendVerificationMail($user));
            return redirect()->route('after.verify.email')->with('success', 'Verification email sent successfully. Please check your inbox and verify your email address.');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('error', 'something wents wrong, Please try again letter');
        }
    }
}
