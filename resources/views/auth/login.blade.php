@extends('layouts.app')
@section('body')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <!-- Session Status -->
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email Address -->
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" class="form-control  @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}"
                             autofocus autocomplete="username">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!-- Password -->
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" class="form-control  @error('password') is-invalid @enderror" type="password" name="password"
                            autocomplete="current-password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!-- Remember Me -->
                    <div class="form-check mb-3">
                        <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                        <label for="remember_me" class="form-check-label">Remember me</label>
                    </div>
                    <div class="form-group mb-3">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm text-gray-600">Forgot your
                                password?</a>
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark">Log in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
