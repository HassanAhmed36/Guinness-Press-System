@extends('admin.Layout.master')
@section('main_section')
    <div class="card">
        <div class="card-header">
            <h4 class="title">Peer review</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Assign Date</th>
                        <th>Status</th>
                        <th>File</th>
                        <th>review</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($submission as $s)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $s->created_at->format('M d, Y') }}</td>
                            <td>{{ App\Services\SubmissionService::getPeerReviewStatus($s->status) }}</td>
                            <td>
                                <a href="{{ asset($s->submission_file->file_path) }}" class="btn btn-sm btn-info"
                                    download="">download</a>
                            </td>
                            <td>
                                @if ($s->status == 0)
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#feedbackModal{{ $loop->iteration }}">
                                        Add Feedback
                                    </button>
                                @else
                                    <p>Feedback submitted..</p>
                                @endif
                            </td>
                        </tr>
                        <div class="modal fade" id="feedbackModal{{ $loop->iteration }}" tabindex="-1"
                            aria-labelledby="fileModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{ route('submit.peer.review.feedback') }}" method="POST">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="fileModalLabel">Add Feedback</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            @csrf
                                            <div class="row">
                                                <input type="hidden" name="peer_review_id" value="{{ $s->id }}">
                                                <div class="col-12 mb-3">
                                                    <label for="status" class="form-label">Status</label>
                                                    <select name="status" class="form-select" id="status" required>
                                                        <option value="1">Approved</option>
                                                        <option value="2">Rejected</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <label for="feedback" class="form-label">Feedback</label>
                                                    <textarea name="feedback" id="feedback" required rows="5" placeholder="Enter your feedback" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
