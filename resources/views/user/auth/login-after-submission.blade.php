@extends('user.layouts.template')
@section('body')
    <style>
        .form-label,
        .form-control {
            font-family: Poppins !important;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8 col-sm-12 col-12 col-lg-6">
                <div>
                    <h3 class="mb-4 cocogoose_light fw-bold">Login</h3>
                </div>
                <div class="my-5">
                    <form action="{{ route('submit.login.after.submission') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 mb-4">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter your email"
                                    required>
                                @error('email')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="col-12 mb-4">
                                <button class="btn btn-light btn-blue red-btn pe-4 ms-0">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
