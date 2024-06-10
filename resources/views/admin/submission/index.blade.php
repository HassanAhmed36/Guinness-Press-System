@extends('admin.Layout.master')
@section('main_section')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $error }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endforeach
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Author Submissions</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="responsive-datatable" class="table table-bordered nowrap w-100">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>ManuScript ID</th>
                                    <th>Journal name</th>
                                    <th>Author Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($submissions as $s)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $s->menuscript_id }}</td>
                                        <td>{{ $s->journal->name }}</td>
                                        <td>{!! $s->user->email ?? '<span class="badge badge-warning">Guest User</span>' !!}</td>
                                        <td>{{ $s->admin_status == 0 ? 'submitted' : ($s->admin_status == 1 ? 'approved' : 'rejected') }}</td>
                                        <td>
                                            <!-- View Button -->
                                            <button class="btn btn-warning btn-sm edit-btn" data-bs-toggle="modal"
                                                data-bs-target="#editModal" data-id="{{ $s->id }}">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <!-- Approve Button -->
                                            <button class="btn btn-success btn-sm approve-btn" data-bs-toggle="modal"
                                                data-bs-target="#approveModal" data-id="{{ $s->id }}">
                                                <i class="fa fa-check"></i>
                                            </button>
                                            <!-- Reject Button -->
                                            <button class="btn btn-danger btn-sm reject-btn" data-bs-toggle="modal"
                                                data-bs-target="#rejectModal" data-id="{{ $s->id }}">
                                                <i class="fa fa-times"></i>
                                            </button>
                                            <!-- Download Button -->
                                            <a href="{{ asset($s->manuscript_path) }}" target="_blank" class="btn btn-info btn-sm" download="{{ $s->manuscript_name }}">
                                                <i class="fa fa-download"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Approve Modal -->
    <div class="modal fade" id="approveModal" tabindex="-1" aria-labelledby="approveModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="approveModalLabel">Approve Submission</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="approveForm" method="POST" action="">
                        @csrf
                        <input type="hidden" name="submission_id" id="approve_submission_id">
                        <div class="form-group">
                            <label for="approve_comments">Review Comments</label>
                            <textarea id="approve_comments" name="review_comments" class="form-control" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Approve</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Reject Modal -->
    <div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="rejectModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rejectModalLabel">Reject Submission</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="rejectForm" method="POST" action="">
                        @csrf
                        <input type="hidden" name="submission_id" id="reject_submission_id">
                        <div class="form-group">
                            <label for="reject_comments">Review Comments</label>
                            <textarea id="reject_comments" name="review_comments" class="form-control" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Reject</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.approve-btn').on('click', function() {
                var submissionId = $(this).data('id');
                $('#approve_submission_id').val(submissionId);
                $('#approveForm').attr('action', '{{ url("admin/admin-approve-submission") }}/' + submissionId);
            });

            $('.reject-btn').on('click', function() {
                var submissionId = $(this).data('id');
                $('#reject_submission_id').val(submissionId);
                $('#rejectForm').attr('action', '{{ url("admin/admin-reject-submission") }}/' + submissionId);
            });
        });
    </script>
@endsection
