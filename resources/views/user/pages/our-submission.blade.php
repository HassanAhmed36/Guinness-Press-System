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
                    @if (session('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
                <div class="my-4">
                    <table class="table table-bordered poppins_fonts">
                        <thead class="table-light">
                            <tr>
                                <th>Submission Details</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($submissions as $submission)
                                <tr>
                                    <td class="w-50">
                                        <p class="my-0"><span class="fw-semibold">MenuScript ID:</span>
                                            {{ $submission->submission_id }}</p>
                                    </td>
                                    <td class="w-25">
                                        {{ App\Services\SubmissionService::getSubmissionStage($submission->current_stage) }}
                                        ({{ App\Services\SubmissionService::getSubmissionStatus($submission->current_status) }})
                                    </td>
                                    <td class="w-25">
                                        <a class="btn btn-warning btn-sm view_btn"
                                            href="{{ route('view.submission', ['id' => $submission->id]) }}">
                                            View
                                        </a>
                                        @if ($submission->current_stage == 1)
                                            <a class="btn btn-info btn-sm view_btn"
                                                href="{{ route('send.paypal.mail', ['id' => $submission->id]) }}">
                                                APC
                                            </a>
                                        @endif
                                        @if ($submission->current_stage == 3)
                                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#PrePublicationModal{{ $loop->iteration }}">
                                                Pre Publication Files
                                            </button>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <div class="modal fade" id="PrePublicationModal{{ $loop->iteration }}"
                                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" style="height: 100vh">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Pre Publication Files
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        @php
                                                            $recentFile = null;
                                                            $previousFiles = [];
                                                        @endphp
                                                        @foreach ($submission->pre_publications as $index => $p)
                                                            @if ($p->status === 0)
                                                                @php
                                                                    $recentFile = $p;
                                                                @endphp
                                                            @else
                                                                @php
                                                                    $previousFiles[] = $p;
                                                                @endphp
                                                            @endif
                                                        @endforeach

                                                        @if ($recentFile)
                                                            <h5 class="mb-4">Recently Sent File</h5>
                                                            <form action="{{ route('post.pre.publication') }}"
                                                                method="POST" class="row">
                                                                @csrf
                                                                <input type="hidden" name="pre_publication_id"
                                                                    value="{{ $recentFile->id }}">
                                                                <div class="col-12 mb-4">
                                                                    <div class="border d-flex justify-content-between px-2 align-items-center py-2"
                                                                        style="border-radius: 8px">
                                                                        <div><i class="fa fa-file me-3"></i>Pre Publication
                                                                            File</div>
                                                                        <div>
                                                                            <a href="{{ $recentFile->path }}"
                                                                                class="btn btn-info btn-sm"
                                                                                download="{{ $recentFile->path }}">
                                                                                <i class="fa fa-download"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 mb-4">
                                                                    <label for="status" class="form-label">Status</label>
                                                                    <select name="status" id="status"
                                                                        class="form-select" required>
                                                                        <option value="0" selected>Pending</option>
                                                                        <option value="1">Approve</option>
                                                                        <option value="2">Rejected</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-12 mb-4">
                                                                    <label for="comment"
                                                                        class="form-label">Comments</label>
                                                                    <textarea name="comment" id="comment" rows="5" class="form-control"></textarea>
                                                                </div>
                                                                <div class="col-12 mb-4">
                                                                    <button class="btn btn-primary"
                                                                        type="submit">Submit</button>
                                                                </div>
                                                            </form>
                                                        @endif

                                                        @if (count($previousFiles) > 0)
                                                            <h5 class="mb-4">Previously Sent Files</h5>
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Sno</th>
                                                                        <th>File</th>
                                                                        <th>Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($previousFiles as $index => $file)
                                                                        <tr>
                                                                            <td>{{ $index + 1 }}</td>
                                                                            <td>
                                                                                <a class="btn btn-sm btn-primary"
                                                                                    href="{{ asset($file->path) }}"
                                                                                    download="">
                                                                                    <i
                                                                                        class="fa fa-download text-white"></i>
                                                                                </a>
                                                                            </td>
                                                                            <td>{{ App\Services\SubmissionService::getPeerReviewStatus($file->status) }}
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        @endif
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
