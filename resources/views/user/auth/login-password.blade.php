@extends('user.layouts.template')
@section('body')
    <style>
        .form-label,
        .form-control {
            font-family: Poppins !important;
        }
    </style>
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $error }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endforeach
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8 col-sm-12 col-12 col-lg-6">
                <div>
                    <h3 class="mb-4 cocogoose_light fw-bold">Login</h3>
                </div>
                <div class="my-5">
                    <form action="{{ route('submit.login.after.submission.password') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <div class="col-12 mb-4">
                                <label for="" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Enter your password" required>
                                @error('password')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="col-12 mb-4">
                                <button class="btn btn-light btn-blue red-btn pe-4 ms-0">save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
