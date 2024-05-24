<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class ReviewerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(in_array(Auth::user()->role_id , [2,3])){
            return back()->with('error' , 'Unauthorized!');
        }
        $reviewers = User::where('role_id', 2)
            ->where('is_active', false)
            ->get();
        return view('reviewer.index', compact('reviewers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reviewer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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

        User::create([
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
            'role_id' => 2,
            'is_active' => false
        ]);
        return back()->with('success', 'Your request has been submitted. Further approval information will be sent to your email.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update($id)
    {
        try {
            User::find($id)->update([
                'is_active' => true
            ]);
            return back()->with('success', 'request accepted successfully!');
        } catch (\Throwable $th) {
            return back()->with('error', 'Something wents wrong. Please try again letter!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
