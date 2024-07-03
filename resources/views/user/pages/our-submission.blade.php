@extends('user.layouts.template')
@section('body')
    <div class="container" style="min-height:70vh !important">
        <div class="row justify-content-center mt-5">
            <div class="col-md-10">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4 class="mb-4 cocogoose_light fw-bold">Our Submissions</h4>
                    </div>
                </div>
                <div class="my-4">
                    @session('message')
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ $value }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endsession
                </div>
                <div class="my-4">
                    <table class="table table-bordered poppins_fonts">
                        <thead class="table-light">
                            <tr>
                                <td>Submission Details</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($submissions as $submission)
                                <tr>
                                    <td class="w-50">
                                        <span class="my-0"><span class="fw-semibold "> MenuScript ID:</span>
                                            {{ $submission->submission_id }}</span><br>
                                    </td>
                                    <td class="w-25">
                                        {{ App\Services\SubmissionService::getSubmissionStage($submission->current_stage) }}({{ App\Services\SubmissionService::getSubmissionStatus($submission->current_status) }})
                                    </td>
                                    <td class="w-25">
                                        <a class="btn btn-warning btn-sm view_btn"
                                            href="{{ route('view.submission', ['id' => $submission->id]) }}">
                                            view
                                        </a>
                                        @if ($submission->current_stage == 1)
                                            <a class="btn btn-info btn-sm view_btn"
                                                href="{{ route('send.paypal.mail', ['id' => $submission->id]) }}">
                                                APC
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr class="text-center">
                                    <td colspan="4">No Data Found!</td>
                                </tr>
                            @endforelse
                        </tbody>
                        {{ $submissions->links() }}
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 cocogoose_light" id="exampleModalLabel">Submission Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="edit_modal_body">
                    ...
                </div>

            </div>
        </div>
    </div>
@endsection
