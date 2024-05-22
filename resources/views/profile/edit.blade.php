@extends('layouts.app')
@section('main_section')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <h4 class="mb-4">User Profile</h4>
                <form method="POST" action="{{ route('update.profile') }}">
                    @csrf
                    <div class="row">
                        <!-- Email -->
                        <div class="form-group mb-4 col-4">
                            <label class="form-label" for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ $user->email }}"  autocomplete="email"
                                placeholder="Enter your email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Title -->
                        <div class="form-group mb-4 col-4">
                            <label class="form-label" for="title">Title</label>
                            <input id="title" type="text" class="form-control" name="title"
                                value="{{ $user->title }}"  @error('title') is-invalid @enderror
                                placeholder="Enter your title">
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- First Name -->
                        <div class="form-group mb-4 col-4">
                            <label class="form-label" for="first_name">First Name</label>
                            <input id="first_name" type="text" class="form-control" name="first_name"
                                value="{{ $user->first_name }}" @error('first_name') is-invalid @enderror
                                placeholder="Enter your First name">
                            @error('first_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Last Name -->
                        <div class="form-group mb-4 col-4">
                            <label class="form-label" for="last_name">Last Name</label>
                            <input id="last_name" type="text" class="form-control" name="last_name"
                                value="{{ $user->last_name }}" @error('last_name') is-invalid @enderror
                                placeholder="Enter your last name">
                            @error('last_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Current Job Title -->
                        <div class="form-group mb-4 col-4">
                            <label class="form-label" for="current_job_title">Current Job Title</label>
                            <input id="current_job_title" type="text" class="form-control" name="current_job_title"
                                value="{{ $user->current_job_title }}" @error('current_job_title') is-invalid @enderror
                                placeholder="Enter your Current Job Title">
                            @error('current_job_title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Department -->
                        <div class="form-group mb-4 col-4">
                            <label class="form-label" for="department">Department</label>
                            <input id="department" type="text" class="form-control" name="department"
                                value="{{ $user->department }}" @error('department') is-invalid @enderror
                                placeholder="Enter your Department">
                            @error('department')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Institution -->
                        <div class="form-group mb-4 col-4">
                            <label class="form-label" for="institution">Institution</label>
                            <input id="institution" type="text" class="form-control" name="institution"
                                value="{{ $user->institution }}" @error('institution') is-invalid @enderror
                                placeholder="Enter your Institution">
                            @error('institution')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Country -->
                        <div class="form-group mb-4 col-4">
                            <label class="form-label" for="country">Country</label>
                            <select id="country" class="form-control" name="country"
                                @error('country') is-invalid @enderror>
                                <option value="">Select Country</option>
                                <option value="USA" @selected($user->country == 'USA')>USA</option>
                                <option value="Canada" @selected($user->country == 'Canada')>Canada</option>
                                <option value="UK" @selected($user->country == 'UK')>UK</option>
                            </select>
                            @error('country')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Contact Number -->
                        <div class="form-group mb-4 col-4">
                            <label class="form-label" for="contact_number">Contact Number</label>
                            <input id="contact_number" type="text" class="form-control" name="contact_number"
                                value="{{ $user->contact_number }}" @error('contact_number') is-invalid @enderror
                                placeholder="Enter your Contact Number">
                            @error('contact_number')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Password -->
                        <div class="form-group mb-4 col-4">
                            <label class="form-label" for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password"
                                autocomplete="new-password" @error('password') is-invalid @enderror
                                placeholder="Enter your Password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Confirm Password -->
                        <div class="form-group mb-4 col-4">
                            <label class="form-label" for="password_confirmation">Confirm Password</label>
                            <input id="password_confirmation" type="password" class="form-control"
                                name="password_confirmation"  autocomplete="new-password"
                                @error('password_confirmation') is-invalid @enderror placeholder="Confirm Password">
                            @error('passwpassword_confirmationord_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-4 col-12">
                            <button type="submit" class="btn btn-dark">Update Profile</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
