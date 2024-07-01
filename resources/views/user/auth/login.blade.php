@extends('user.layouts.template')
@section('body')
    <style>
        .form-label,
        .form-control .font- {
            font-family: Poppins !important;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8 col-sm-12 col-12 col-lg-6">
                <div>
                    <h2 class="mb-4 cocogoose_light fw-bold">Login</h2>
                </div>
                <div class="my-5">
                    <form action="{{ route('submit.login') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12 mb-4">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter your email"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="col-12 mb-4">
                                <label for="" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                    placeholder="Enter your password">
                                @error('password')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="col-12 mb-4 font-">
                                Don't Have an Account? <a href="{{ route('user.register') }}">Register</a>
                            </div>
                            <div class="col-12 mb-4">
                                <button class="btn btn-light btn-blue red-btn pe-4 ms-0" type="submit">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
