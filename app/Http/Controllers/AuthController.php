<?php

namespace App\Http\Controllers;

use App\Mail\SendVerificationMail;
use App\Models\Submission;
use App\Models\User;
use App\Models\UserBasicInfo;
use App\Services\CustomService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use League\ISO3166\ISO3166;

class AuthController extends Controller
{
    public function login()
    {
        return Auth::check() ? back() : view('user.auth.login');
    }

    public function SubmitLogin()
    {
        $credentials = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();
            CustomService::createLoginHistory(Auth::user()->id);
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
        return Auth::check()  ? back() : view('user.auth.register', compact('countries'));
    }

    public function SubmitRegister()
    {
        request()->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'affiliation' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'agree_data_privacy' => 'required|accepted',
            'notify_new_publications' => 'required|boolean',
            'review_submissions' => 'required|boolean',
        ]);
        DB::beginTransaction();
        try {
            $user = User::create([
                'email' => request()->email,
                'password' => Hash::make(request()->password),
                'role_id' => 3,
                'is_active' => true
            ]);
            $user->user_basic_info()->create([
                'name' => request()->name,
                'surname' => request()->surname,
                'affiliation' => request()->affiliation,
                'country' => request()->country,
                'announcement_notify' => request()->has('notify_new_publications'),
                'primary_author' => request()->has('review_submissions'),
            ]);
            DB::commit();
            CustomService::createLoginHistory($user->id);
            Auth::login($user);
            return redirect()->route('after.register')->with('success', 'user login successfully');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('error', 'User Created Failed');
        }
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
