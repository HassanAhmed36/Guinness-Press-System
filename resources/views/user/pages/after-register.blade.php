@extends('user.layouts.template')
@section('body')
    <style>
        .form-label,
        .form-control .font- {
            font-family: Poppins !important;
        }
    </style>
    <div class="container" style="padding: 10vh 0">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8 col-sm-12 col-12 col-lg-6">
                <div>
                    <h2 class="mb-4 cocogoose_light fw-bold">Registered Successfully</h2>
                </div>
                <div class="my-5">
                    <p>Thanks for registration what would like to next?</p>
                    <ul class="ms-2">
                        <li><a href="{{ route('submission.index') }}">View Submission</a></li>
                        <li><a href="{{ route('submit.article') }}">Make new Submission</a></li>
                        <li><a href="">Edit My Profile</a></li>
                        <li><a href="/">Continue Browsing</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
