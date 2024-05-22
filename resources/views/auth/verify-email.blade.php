@extends('layouts.app')
@section('main_section')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="mb-4 text-sm text-gray-600">
                    Thanks for signing up! Before getting started, could you verify your email address by clicking on the
                    link we just emailed to you? If you didn't receive the email, we will gladly send you another.
                </div>
                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        A new verification link has been sent to the email address you provided during registration.
                    </div>
                @endif
                <div class="mt-4 d-flex justify-content-between">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf

                        <div>
                            <button type="submit" class="btn btn-dark">{{ __('Resend Verification Email') }}</button>
                        </div>
                    </form>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-link">Log Out</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
