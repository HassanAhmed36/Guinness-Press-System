<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use League\ISO3166\ISO3166;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */

    public function index()
    {
        $iso3166 = new ISO3166();
        $countries = $iso3166->all();
        return view('user.pages.profile', compact('countries'));
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'affiliation' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'password' => 'sometimes|confirmed'
        ]);
        DB::beginTransaction();
        try {
            $user = $request->user();
            $user->update([
                'email' => $request->email,
                'role_id' => 3,
                'is_active' => true
            ]);
            if ($request->filled('password')) {
                $user->password = Hash::make($request->password);
                $user->save();
            }
            $user->user_basic_info()->update([
                'name' => $request->name,
                'surname' => $request->surname,
                'affiliation' => $request->affiliation,
                'country' => $request->country,
            ]);
            DB::commit();
            return redirect('/')->with('success', 'Profile updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'An error occurred while updating the profile');
        }
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
