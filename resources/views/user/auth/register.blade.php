@extends('user.layouts.template')
@section('body')
    <style>
        .form-label,
        .form-control .font- {
            font-family: Poppins !important;
        }
    </style>
    
    <div class="container mt-5" style="min-height: 60vh !important">
        <h4 class="cocogoose_light mb-4 fw-bold fs-3">Register Yourself!</h4>
        <form action="{{ route('submit.register') }}" method="post">
            @csrf
            <div class="row">
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
                <div class="form-group mb-4 col-4">
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

                <!-- Phone Number -->
                <div class="form-group mb-3 col-4">
                    <label class="form-label" for="phone_number">Phone Number</label>
                    <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror"
                        name="phone_number" value="{{ old('phone_number') }}" placeholder="Enter your phone number">
                    @error('phone_number')
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
                            <option value="{{ $c['name'] }}" @selected(old('country') == $c['name'])>{{ $c['name'] }}</option>
                        @endforeach
                    </select>
                    @error('country')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="col-12 mb-3 font-">
                    Already Have an Account? <a href="{{ route('user.login') }}">Login</a>
                </div>
                <div class="form-group mb-3 col-12">
                    <button class="btn btn-light btn-blue red-btn mx-2 ms-0">Register</button>
                </div>
            </div>
        </form>
    </div>
@endsection
