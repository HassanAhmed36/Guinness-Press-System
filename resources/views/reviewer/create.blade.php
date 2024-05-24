@extends('layouts.app')
@section('main_section')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <h4 class="mb-4 fw-semibold">Reviewer Request</h4>
                <form method="POST" action="{{ route('submit.reviewer.request') }}">
                    @csrf
                    <div class="row">
                        <!-- Email -->
                        <div class="form-group mb-4 col-4">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                placeholder="Enter your email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Title -->
                        <div class="form-group mb-4 col-4">
                            <label for="title">Title</label>
                            <select id="title" class="form-control" name="title" required>
                                <option value="">Select Title</option>
                                <option value="Prof." {{ old('title') == 'Prof.' ? 'selected' : '' }}>Prof.</option>
                                <option value="Dr." {{ old('title') == 'Dr.' ? 'selected' : '' }}>Dr.</option>
                                <option value="Ms." {{ old('title') == 'Ms.' ? 'selected' : '' }}>Ms.</option>
                                <option value="Mrs." {{ old('title') == 'Mrs.' ? 'selected' : '' }}>Mrs.</option>
                            </select>
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- First Name -->
                        <div class="form-group mb-4 col-4">
                            <label for="first_name">First Name</label>
                            <input id="first_name" type="text" class="form-control" name="first_name"
                                value="{{ old('first_name') }}" @error('first_name') is-invalid @enderror
                                placeholder="Enter your First name">
                            @error('first_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Last Name -->
                        <div class="form-group mb-4 col-4">
                            <label for="last_name">Last Name</label>
                            <input id="last_name" type="text" class="form-control" name="last_name"
                                value="{{ old('last_name') }}" @error('last_name') is-invalid @enderror
                                placeholder="Enter your last name">
                            @error('last_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Current Job Title -->
                        <div class="form-group mb-4 col-4">
                            <label for="current_job_title">Current Job Title</label>
                            <input id="current_job_title" type="text" class="form-control" name="current_job_title"
                                value="{{ old('current_job_title') }}" @error('current_job_title') is-invalid @enderror
                                placeholder="Enter your Current Job Title">
                            @error('current_job_title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Department -->
                        <div class="form-group mb-4 col-4">
                            <label for="department">Department</label>
                            <input id="department" type="text" class="form-control" name="department"
                                value="{{ old('department') }}" @error('department') is-invalid @enderror
                                placeholder="Enter your Department">
                            @error('department')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Institution -->
                        <div class="form-group mb-4 col-4">
                            <label for="institution">Institution</label>
                            <input id="institution" type="text" class="form-control" name="institution"
                                value="{{ old('institution') }}" @error('institution') is-invalid @enderror
                                placeholder="Enter your Institution">
                            @error('institution')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Country -->
                        <div class="form-group mb-4 col-4">
                            <label for="country">Country</label>
                            <select id="country" class="form-control" name="country"
                                @error('country') is-invalid @enderror>
                                <option value="">Select Country</option>
                                <option value="USA" {{ old('country') == 'USA' ? 'selected' : '' }}>USA</option>
                                <option value="Canada" {{ old('country') == 'Canada' ? 'selected' : '' }}>Canada</option>
                                <option value="UK" {{ old('country') == 'UK' ? 'selected' : '' }}>UK</option>
                            </select>
                            @error('country')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Contact Number -->
                        <div class="form-group mb-4 col-4">
                            <label for="contact_number">Contact Number</label>
                            <input id="contact_number" type="text" class="form-control" name="contact_number"
                                value="{{ old('contact_number') }}" @error('contact_number') is-invalid @enderror
                                placeholder="Enter your Contact Number">
                            @error('contact_number')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Password -->
                        <div class="form-group mb-4 col-4">
                            <label for="password">Password</label>
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
                            <label for="password_confirmation">Confirm Password</label>
                            <input id="password_confirmation" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password"
                                @error('password_confirmation') is-invalid @enderror placeholder="Confirm Password">
                            @error('passwpassword_confirmationord_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-4 col-12">
                            <button type="submit" class="btn btn-dark">Submit Request</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
