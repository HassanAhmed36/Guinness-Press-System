<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.Auth.login');
    }
    public function Submitlogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->with('error', 'Invalid Credentials');
        }
        if ($user->is_active == false) {
            return back()->with('error', 'your account is deacivated');
        }
        if (!Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Invalid Credentials');
        }
        Auth::login($user);
        return redirect()->route('dashboard')->with('success', 'login successfully!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('success', 'logout successfully!');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
