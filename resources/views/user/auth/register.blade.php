@extends('user.layouts.template')

@section('body')
    <style>
        .form-label,
        .form-control,
        .font- {
            font-family: Poppins !important;
        }
    </style>

    <div class="container mt-5" style="padding: 5vh 0 !important;">
        <h4 class="cocogoose_light mb-4 fw-bold fs-4">Register Yourself!</h4>
        <form action="{{ route('submit.register') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-12">
                    <h5 class="poppins my-4">Profile Information</h5>
                </div>
                <!-- Name -->
                <div class="form-group mb-3 col-4">
                    <label class="form-label" for="name">Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" autocomplete="name" placeholder="Enter your name">
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
                        name="surname" value="{{ old('surname') }}" autocomplete="surname" placeholder="Enter your surname">
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
                            <option value="{{ $c['name'] }}" {{ old('country') == $c['name'] ? 'selected' : '' }}>
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
                    <input id="affiliation" type="text" class="form-control @error('affiliation') is-invalid @enderror"
                        name="affiliation" value="{{ old('affiliation') }}" autocomplete="affiliation"
                        placeholder="Enter your affiliation">
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
                        name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Enter your email">
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
                <div class="col-12 mb-4 mt-5">
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="agreeDataPrivacy" name="agree_data_privacy"
                            required value="1" @checked(old('agree_data_privacy'))>
                        <label class="form-check-label" for="agreeDataPrivacy">
                            I agree that my collected data may be stored according to the <a
                                href="/policies-and-statements">privacy policy</a>.
                        </label>
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="notifyNewPublications"
                            name="notify_new_publications" value="1" @checked(old('notify_new_publications'))>
                        <label class="form-check-label" for="notifyNewPublications">
                            I would like to be notified of new publications and announcements.
                        </label>
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="reviewSubmissions" name="review_submissions"
                            value="1" @checked(old('review_submissions'))>
                        <label class="form-check-label" for="reviewSubmissions">
                            I would like to be contacted for requests to review submissions to this journal.
                        </label>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    Already Have an Account? <a href="{{ route('user.login') }}">Login</a>
                </div>
                <!-- Register Button -->
                <div class="form-group mb-3 col-12">
                    <button class="btn btn-light btn-blue red-btn mx-2 ms-0">Register</button>
                </div>
            </div>
        </form>
    </div>
@endsection
