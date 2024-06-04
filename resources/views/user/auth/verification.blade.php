@extends('user.layouts.template')
@section('body')
<div>
    <div class="container my-3">
        @session('success')
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $value }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endsession
        @session('error')
        <div class="alert alert-error alert-dismissible fade show" role="alert">
            {{ $value }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endsession
    </div>
    <div class="container poppins_font fs-5 " style="height: 50vh !important;">
        <div class=" row justify-content-center mt-5">
            <div class="col-md-6 mt-5">
                <div class="mb-4 text-sm text-gray-600">
                    Thanks for signing up! Before getting started, could you verify your email address by clicking on
                    the
                    link we just emailed to you? If you didn't receive the email, we will gladly send you another.
                </div>
                <div class="mt-4 d-flex justify-content-between">
                    {{-- <form method="POST" action="">
                        @csrf
                        <div>
                            <button type="submit" class="btn btn-dark">{{ __('Resend Verification Email') }}</button>
                </div>
                </form> --}}
            </div>
        </div>
    </div>
</div>
@endsection