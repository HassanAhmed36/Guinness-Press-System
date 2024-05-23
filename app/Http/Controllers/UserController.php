<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(){
        if(in_array(Auth::user()->role_id , [2,3])){
            return back()->with('error' , 'Unauthorized!');
        }
        $users = User::with('role')->get();
        $roles = Role::all();
        return view('users.index' , compact('users' , 'roles'));
    }

    public function store(Request $request){
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Password::defaults()],
            'title' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'current_job_title' => ['required', 'string', 'max:255'],
            'department' => ['required', 'string', 'max:255'],
            'institution' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'contact_number' => ['required', 'string', 'max:255'],
            'role_id' => 'required'
        ]);
        try {
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
                'role_id' => $request->role_id
            ]);
            return back()->with('success' , 'User Created Successfully');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('error' , 'User Created Failed');
        }
     }


     public function edit(Request $request)
    {
        return view('modals.edit-user' , [
            'user' => User::find($request->id),
            'roles' => Role::all(),
        ])->render();
    }

    public function update(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users,email,' . $request->id,
            'password' => ['sometimes', 'confirmed'],
            'title' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'current_job_title' => ['required', 'string', 'max:255'],
            'department' => ['required', 'string', 'max:255'],
            'institution' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'contact_number' => ['required', 'string', 'max:255'],
            'role_id' => 'required'
        ]);

        $user = User::find($request->id);

        $user->update([
            'email' => $request->email,
            'title' => $request->title,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'current_job_title' => $request->current_job_title,
            'department' => $request->department,
            'institution' => $request->institution,
            'country' => $request->country,
            'contact_number' => $request->contact_number,
            'role_id' => $request->role_id
        ]);

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
            $user->save();
        }

        return redirect()->back()->with('success', 'User updated successfully!');
    }


    public function delete($id){
        try {
          User::find($id)->delete();
          return back()->with('success' , 'User Deleted Successfully!');
        } catch (\Throwable $th) {
            return back()->with('error' , 'User Deleted Failed!');
        }
    }
}
