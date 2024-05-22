<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'title' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'current_job_title' => ['required', 'string', 'max:255'],
            'department' => ['required', 'string', 'max:255'],
            'institution' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'contact_number' => ['required', 'string', 'max:255'],
        ]);

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'title' => $request->title,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'current_job_title' => $request->current_job_title,
            'department' => $request->department,
            'institution' => $request->institution,
            'country' => $request->country,
            'contact_number' => $request->contact_number,
        ]);

        event(new Registered($user));

        Auth::login($user);
        return redirect(route('verification.notice', absolute: false));
    }
}