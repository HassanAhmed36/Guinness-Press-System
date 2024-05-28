@extends('layouts.app')
@section('body')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <form method="POST" action="{{ route('password.store') }}">
                    @csrf
                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    <!-- Email Address -->
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" type="email" name="email"
                            value="{{ old('email', $request->email) }}" required autofocus autocomplete="username">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Password -->
                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" type="password" name="password" required
                            autocomplete="new-password">
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Confirm Password -->
                    <div class="form-group mb-3">
                        <label for="password_confirmation">Confirm Password</label>
                        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation"
                            required autocomplete="new-password">
                        @error('password_confirmation')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-dark">Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
