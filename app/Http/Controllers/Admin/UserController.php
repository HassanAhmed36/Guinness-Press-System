<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use League\ISO3166\ISO3166;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $role = $request->has('role') ? ($request->input('role') == 'admin' ? 1 : 3) : null;
        $users = User::with('role')->when($role !== null, function ($query) use ($role) {
            $query->where('role_id', $role);
        })->get();
        $countries = $this->getCountries();
        return view('admin.user.index', compact('users', 'countries'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'email|required|unique:users,email',
            'password' => 'required|confirmed',
            'phone_number' => 'required',
            'country' => 'required',
        ]);
        try {
            User::create([
                'name' => request('name'),
                'email' => request('email'),
                'password' => Hash::make(request('password')),
                'role_id' => request('role_id'),
                'phone_number' => request('phone_number'),
                'country' => request('country'),
                'is_active' => true
            ]);
            return back()->with('success', 'user Created successfully');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('error', 'User Created Failed');
        }
    }

    public function edit()
    {
        $user = User::find(request('id'));
        $roles = Role::all();
        $countries = $this->getCountries();
        return view('admin.modals.edit-user', compact('user', 'roles', 'countries'));
    }

    public function destroy($id)
    {
        try {
            User::find($id)->delete();
            return back()->with('success', 'User deleted successfully!');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('error', 'User Deleted Failed');
        }
    }

    public function getCountries()
    {
        $iso3166 = new ISO3166();
        return $iso3166->all();
    }

    public function update($id)
    {
        $validatedData = request()->validate([
            'name' => 'required',
            'email' => 'email|required|unique:users,email,' . $id,
            'password' => 'sometimes|confirmed',
            'phone_number' => 'required',
            'country' => 'required',
            'role_id' => 'sometimes', // Add role_id to the validation rules
        ]);

        $user = User::findOrFail($id);

        $updateData = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone_number' => $validatedData['phone_number'],
            'country' => $validatedData['country'],
            'is_active' => true,
        ];

        if (!empty($validatedData['password'])) {
            $updateData['password'] = Hash::make($validatedData['password']);
        }

        $user->update($updateData);

        if (!empty($validatedData['role_id'])) {
            $user->role_id = $validatedData['role_id'];
            $user->save();
        }

        return back()->with('success', 'User updated successfully');
    }

    public function profile()
    {
        $countries  = $this->getCountries();
        return view('admin.user.profile', compact('countries'));
    }
}
