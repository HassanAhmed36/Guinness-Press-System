<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
        // dd($request->toArray());
            $request->validate([
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($request->user()->id)],
                'password' => ['sometimes', 'confirmed'],
                'title' => ['required', 'string', 'max:255'],
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'current_job_title' => ['required', 'string', 'max:255'],
                'department' => ['required', 'string', 'max:255'],
                'institution' => ['required', 'string', 'max:255'],
                'country' => ['required', 'string', 'max:255'],
                'contact_number' => ['required', 'string', 'max:255'],
            ]);

           $user_data =  $request->user();
           $user_data->update([
                'email' => $request->email,
                'title' => $request->title,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'current_job_title' => $request->current_job_title,
                'department' => $request->department,
                'institution' => $request->institution,
                'country' => $request->country,
                'contact_number' => $request->contact_number,
            ]);

            if($request->filled('password')){
                $user_data->password = Hash::make($request->password);
                $user_data->save();
            }
            return redirect()->back()->with('success', 'Profile Updated successfully!');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);
        $user = $request->user();
        Auth::logout();
        $user->delete();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return Redirect::to('/');
    }
}