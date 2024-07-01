@extends('admin.Layout.master')
@section('main_section')
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card">
                <div class="card-header  border-0 d-flex justify-content-between">
                    <div class='d-flex align-items-center gap-2'>
                        <div>
                            <h4 class="card-title fs-5">Submission Information
                            </h4>
                        </div>
                        <div>
                            <b>{{ App\Services\SubmissionService::getSubmissionStage($submission->current_stage) }}
                                ({{ App\Services\SubmissionService::getSubmissionStatus($submission->current_status) }})</b>
                        </div>
                    </div>
                    <div>
                        <div class="btn-group mt-2 mb-2">
                            <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Action <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu" style="">
                                <li><a href="#">Update Status</a></li>
                                <li><a href="#">Assign to Peer Review</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-borderlerss">
                        <tbody>
                            <tr>
                                <td class="ps-0 "><b>Title</b></td>
                                <td>{{ $submission->title }}</td>
                            </tr>
                            @if ($submission->subtitle)
                                <tr>
                                    <td class="ps-0 "><b>Subtitle</b></td>
                                    <td>{{ $submission->subtitle }}</td>
                                </tr>
                            @endif
                            <tr>
                                <td class="ps-0 "><b>Abstraction</b></td>
                                <td>{{ $submission->abstract }}</td>
                            </tr>
                            <tr>
                                <td class="ps-0 "><b>Submited</b></td>
                                <td>{{ $submission->created_at->format('Y , M d') }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <h5>Keywords</h5>
                    <p class="my-5">
                        @foreach ($submission->keywords as $keyword)
                            <span class="badge badge-success-light">{{ $keyword->keyword }}</span>
                        @endforeach
                    </p>
                    <br>
                    <h5 class="mb-4">Author Information</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Orcid ID</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($submission->authors as $author)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $author->name }}</td>
                                    <td>{{ $author->email }}</td>
                                    <td>{{ $author->orcid }}</td>
                                    <td>{{ $author->is_primary_contact ? 'Author' : 'Co-Author' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <h5 class="mb-4">Submitted Files</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Submitted At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($submission->files as $file)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $file->file_type }}</td>
                                    <td>{{ App\Services\SubmissionService::getSubmissionStage($file->stage) }}
                                        ({{ App\Services\SubmissionService::getSubmissionStatus($file->status) }})
                                    </td>
                                    <td>{{ $file->created_at->format('Y , M d') }}</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#fileModal{{ $loop->iteration }}">
                                            view feedback
                                        </button>
                                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#feedbackModal{{ $loop->iteration }}">
                                            Add Feedback
                                        </button>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="feedbackModal{{ $loop->iteration }}" tabindex="-1"
                                    aria-labelledby="fileModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="{{ route('submission.feedback') }}" method="POST">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="fileModalLabel">Add Feedback</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    @csrf
                                                    <div class="row">
                                                        <input type="hidden" name="submission_id"
                                                            value="{{ $submission->id }}">
                                                        <input type="hidden" name="file_id" value="{{ $file->id }}">
                                                        <div class="col-12 mb-3">
                                                            <label for="stage" class="form-label">Stage</label>
                                                            <select name="stage" class="form-select" id="stage">
                                                                <option selected
                                                                    value="{{ App\Services\SubmissionService::getSubmissionStage($file->stage) }}">
                                                                    {{ App\Services\SubmissionService::getSubmissionStage($file->stage) }}
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 mb-3">
                                                            <label for="status" class="form-label">Status</label>
                                                            <select name="status" class="form-select" id="status">
                                                                <option selected
                                                                    value="{{ App\Services\SubmissionService::getSubmissionStatus($file->status) }}">
                                                                    {{ App\Services\SubmissionService::getSubmissionStatus($file->status) }}
                                                                </option>
                                                                <option value="1">Approved</option>
                                                                <option value="2">Rejected</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 mb-3">
                                                            <label for="feedback" class="form-label">Feedback</label>
                                                            <textarea name="feedback" id="feedback" rows="5" placeholder="Enter your feedback" class="form-control"></textarea>
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
                                <div class="modal fade" id="fileModal{{ $loop->iteration }}" tabindex="-1"
                                    aria-labelledby="fileModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="fileModalLabel">Feedback</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{ $file->feedback ?? '' }}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <h5 class="mb-4">References</h5>
                    <p>{{ $submission->references }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
