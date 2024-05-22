@extends('layouts.app')
@section('main_section')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-10">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4 class="mb-4">Our Submissions</h4>
                    </div>
                    <div>
                        <a href="{{ route('submission.create') }}" class="btn btn-dark"><i
                                class="bi bi-plus-circle text-white me-2"></i>New
                            Submission</a>
                    </div>
                </div>
                <div class="my-4">
                    <table class="table table-bordered ">
                        <thead class="table-light">
                            <tr>
                                <td>Submission Details</td>
                                <td>Status</td>
                                <td>Author File</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span>MenuScript ID: Demo-0-0 35(Invited)</span><br>
                                    <span>Type</span><br>
                                    <span>Jhon Deo</span><br>
                                    <span>Not Submitted</span><br>
                                </td>
                                <td>Status</td>
                                <td>
                                    <a class="btn btn-dark p-0 px-1">
                                        <i class="bi bi-download"></i>
                                    </a>
                                </td>
                                <td>Action</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
