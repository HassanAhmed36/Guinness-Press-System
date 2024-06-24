@extends('admin.Layout.master')
@section('main_section')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Submission Details</h4>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-start">
                <div class="my-4">
                    <p><b>Manuscript: </b> {{ $submission->manuscript_id }}</p>
                    <p><b>Name: </b> {{ $submission->user->name }}</p>
                    <p><b>Email: </b> {{ $submission->user->email }}</p>
                    <p><b>Submission Status: </b> {{ App\Services\CustomService::getAdminStatus($submission->status) }}</p>
                </div>
                <div class="btn-group mt-2 mb-2">
                    <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Action <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#updateStatusModal">Update Status</a>
                        </li>
                    </ul>
                </div>

            </div>
            <hr>
            <div class="my-10">
                <h4>Submissions</h4>
                <table class="table table-bordered mt-5">
                    <thead>
                        <tr>
                            <th>SNo</th>
                            <th class="w-50">File</th>
                            <th>Submitted Date</th>
                            <th>Initaial Status</th>
                            <th>APC Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($submission->submission_files as $file)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="w-50">{{ $file->file_name }}</td>
                                <td>{{ $submission->created_at->format('M d, Y') }}</td>
                                <td>
                                    <p>
                                        @if ($file->initial_feedback)
                                            {{ $file->initial_feedback->initial_status == 1 ? 'Approved' : 'Rejected' }}
                                        @else
                                            -
                                        @endif
                                    </p>
                                </td>
                                <td>
                                    <p>-</p>
                                </td>
                                <td>
                                    <div>
                                        <div class="btn-group mt-2 mb-2">
                                            <button class="btn btn-primary dropdown-toggle btn-sm" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Action <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#" class="initial-qa-modal"
                                                        data-id="{{ $file->id }}">Initial Q/A</a>
                                                </li>
                                                <li><a href="#" class="peer-review-modal"
                                                        data-id="{{ $file->id }}">Assign to Peer
                                                        Review</a></li>
                                            </ul>
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

    <div class="modal fade" id="initialQaModal" tabindex="-1" aria-labelledby="initialQaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="initialQaModalLabel">Initial Q/A</h5>
                    <button type="button" class="btn-close text-black" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('update.initial.feedback.article') }}">
                        @csrf
                        <input type="hidden" id="initail_submission_file_id" name="submission_file_id">
                        <div class="mb-4">
                            <label class="form-label">Feedback</label>
                            <select class="form-select" name="initial_status" required>
                                <option value="1">Approve</option>
                                <option value="0">Rejected</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="qaFeedback" class="form-label">Feedback</label>
                            <textarea class="form-control" rows="8" name="feedback_message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Peer Review Modal -->
    <div class="modal fade" id="peerReviewModal" tabindex="-1" aria-labelledby="peerReviewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="peerReviewModalLabel">Assign to Peer Review</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="peer_review_submission_file_id">
                    <form>
                        <div class="mb-3">
                            <label for="reviewer" class="form-label">Reviewer</label>
                            <select class="form-select" id="reviewer">
                                <option selected>Select Reviewer</option>
                                @foreach ($submission->journal->board_member as $board_member)
                                    <option value="{{ $board_member->id }}">{{ $board_member->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Assign</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Update Status Modal -->
    <div class="modal fade" id="updateStatusModal" tabindex="-1" aria-labelledby="updateStatusModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateStatusModalLabel">Update Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Your form for status update -->
                    <form>
                        <!-- Add form fields here -->
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status">
                                <option selected>Select Status</option>
                                <option value="0">Pending</option>
                                <option value="1">Approved</option>
                                <option value="2">Rejected</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $('.peer-review-modal').on('click', function() {
            let submissionFileId = $(this).data('id');
            $('#peer_review_submission_file_id').val(submissionFileId);
            $('#peer_review_submission_file_id').val(submissionFileId);
            $('#peerReviewModal').modal('show');
        });
        $('.initial-qa-modal').on('click', function() {
            let submissionFileId = $(this).data('id');
            $('#initail_submission_file_id').val(submissionFileId);
            $('#initialQaModal').modal('show');
        });
    </script>
@endsection
