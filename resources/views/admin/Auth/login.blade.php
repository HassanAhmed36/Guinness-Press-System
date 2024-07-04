@extends('admin.Layout.auth-master')
@section('main_sction')
    <div class="page login-bg">
        <div class="page-single">
            <div class="container">
                <div class="row">
                    <div class="col mx-auto">
                        <div class="row justify-content-center">
                            <div class="col-md-7 col-lg-5">
                                <div class="card">
                                    <div class="p-4 pt-6 text-center">
                                        <h1 class="mb-2">
                                            <img src="https://guinnesspress.org/assets/images/logo-dark.png" alt="">
                                        </h1>
                                        <p class="text-muted">Sign In to your account</p>
                                    </div>
                                    <form class="card-body pt-3" action="{{ route('admin.submit.login') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <div class="input-group mb-4">
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="fe fe-mail" aria-hidden="true"></i>
                                                    </span>
                                                    <input class="form-control" placeholder="Email" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Password</label>
                                            <div class="input-group mb-4">
                                                <div class="input-group" id="Password-toggle">
                                                    <a href="" class="input-group-text">
                                                        <i class="fe fe-eye-off" aria-hidden="true"></i>
                                                    </a>
                                                    <input class="form-control" type="password" placeholder="Password"
                                                        name="password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1"
                                                    value="option1">
                                                <span class="custom-control-label">Remeber me</span>
                                            </label>
                                        </div>
                                        <div class="submit">
                                            <button class="btn btn-primary btn-block" type="submit">Login</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
