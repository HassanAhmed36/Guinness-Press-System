@extends('user.layouts.template')

@section('title', 'Guinness Press Publication Policies: Upholding Academic Standards')
@section('keywords', 'Guinness Press publication policies')
@section('description',
    'Explore Guinness Press`s comprehensive publication policies, ensuring adherence to rigorous
    academic standards. Trust in our commitment to integrity and excellence.')


@section('banner')
    <section class="main_banner inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_content white_text py-5">
                        <h1 class="cocogoose_light">
                            Update Profile
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('body')
    <section class="sec_3">
        <div class="container mt-3">
            <form action="{{ route('update.profile') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <h5 class="poppins my-4">Profile Information</h5>
                    </div>
                    <!-- Name -->
                    <div class="form-group mb-3 col-4">
                        <label class="form-label" for="name">Name</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name', Auth::user()->user_basic_info->name) }}"
                            autocomplete="name" placeholder="Enter your name">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!-- Surname -->
                    <div class="form-group mb-3 col-4">
                        <label class="form-label" for="surname">Surname</label>
                        <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror"
                            name="surname" value="{{ old('surname', Auth::user()->user_basic_info->surname) }}"
                            autocomplete="surname" placeholder="Enter your surname">
                        @error('surname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!-- Country -->
                    <div class="form-group mb-3 col-4">
                        <label class="form-label" for="country">Country</label>
                        <select id="country" class="form-select @error('country') is-invalid @enderror" name="country">
                            <option value="">Select Country</option>
                            @foreach ($countries as $c)
                                <option value="{{ $c['name'] }}"
                                    {{ old('country', Auth::user()->user_basic_info->country) == $c['name'] ? 'selected' : '' }}>
                                    {{ $c['name'] }}
                                </option>
                            @endforeach
                        </select>
                        @error('country')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-4 col-12">
                        <label class="form-label" for="affiliation">Affilaition</label>
                        <input id="affiliation" type="text"
                            class="form-control @error('affiliation') is-invalid @enderror" name="affiliation"
                            value="{{ old('affiliation', Auth::user()->user_basic_info->affiliation) }}"
                            autocomplete="affiliation" placeholder="Enter your affiliation">
                        @error('affiliation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <h5 class="poppins my-4">Login Credentials</h5>
                    </div>
                    <!-- Email -->
                    <div class="form-group mb-3 col-4">
                        <label class="form-label" for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email', Auth::user()->email) }}" autocomplete="email"
                            placeholder="Enter your email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!-- Password -->
                    <div class="form-group mb-3 col-4">
                        <label class="form-label" for="password">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" autocomplete="new-password" placeholder="Enter your password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!-- Confirm Password -->
                    <div class="form-group mb-3 col-4">
                        <label class="form-label" for="password_confirmation">Confirm Password</label>
                        <input id="password_confirmation" type="password"
                            class="form-control @error('password_confirmation') is-invalid @enderror"
                            name="password_confirmation" autocomplete="new-password" placeholder="Confirm your password">
                        @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!-- Register Button -->
                    <div class="form-group mb-3 col-12 mt-5">
                        <button class="btn btn-light btn-blue red-btn mx-2 ms-0">Update Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
