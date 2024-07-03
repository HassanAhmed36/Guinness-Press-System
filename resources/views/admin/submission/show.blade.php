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
                                <li>
                                    <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                        data-bs-target="#updateStatus">
                                        Update Status
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                        data-bs-target="#AssignToPeerReviewed">
                                        Assign to peer review
                                    </button>
                                </li>
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
                    <h5 class="mb-4">Peer Reviewd</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Assign AtDate</th>
                                <th>Status</th>
                                <th>Feedback</th>
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
                                                        <input type="hidden" name="file_id"
                                                            value="{{ $file->id }}">
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
    <div class="modal fade" id="updateStatus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('update.submission.status', ['id' => $submission->id]) }}" method="post">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Submission Status</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="stage" class="form-label">Stage</label>
                                <select name="stage" id="stage" class="form-select">
                                    <option value="0">Initail QA</option>
                                    <option value="1">APC</option>
                                    <option value="2">Peer Reviewed</option>
                                    <option value="3">Publication</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" id="status" class="form-select">
                                    <option value="0">Pending</option>
                                    <option value="1">Aproved</option>
                                    <option value="2">Rejected</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Status</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#emailInput').hide();
            $('#boardMemberSelect').show();
            if ($('#assignOtherCheck').prop('checked')) {
                $('#emailInput').show();
                $('#boardMemberSelect').hide();
            } else {
                $('#emailInput').hide();
                $('#boardMemberSelect').show();
            }
            $('#assignOtherCheck').change(function() {
                if ($(this).prop('checked')) {
                    $('#emailInput').show();
                    $('#boardMemberSelect').hide();
                } else {
                    $('#emailInput').hide();
                    $('#boardMemberSelect').show();
                }
            });
        });
    </script>
    <div class="modal fade" id="AssignToPeerReviewed" tabindex="-1" aria-labelledby="AssignToPeerReviewed"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('assign.peer.reviewed', ['id' => $submission->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="submissionfile_id" value="{{ $file->id }}">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Assign to Peer Reviewed
                        </h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="assignOtherCheck"
                                        name="other_check">
                                    <label class="form-check-label" for="assignOtherCheck">
                                        Assign other
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 mb-3" id="emailInput">
                                <label for="boardmember" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="col-12 mb-3" id="boardMemberSelect">
                                <label for="boardmember" class="form-label">Boardmember</label>
                                <select name="boardmember[]" id="boardmember" class="form-select select2 select2-search"
                                    multiple>
                                    @foreach ($members as $member)
                                        <option value="{{ $member->id }}">
                                            {{ $member->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="boardmember" class="form-label">Upload File</label>
                                <input type="file" class="form-control" name="file" id="boardmember">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Assign</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
