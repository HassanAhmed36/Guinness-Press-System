@extends('layouts.app')
@section('main_section')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-10">
                <div class="d-flex justify-content-between">
                    <div>
                        @if (Auth::user()->role_id == 3)
                            <h4 class="mb-4">Our Submissions</h4>
                        @else
                            <h4 class="mb-4">All Submissions</h4>
                        @endif

                    </div>
                    @if (Auth::user()->role_id == 3)
                        <div>
                            <a href="{{ route('submision.guideline') }}" class="btn btn-dark"><i
                                    class="bi bi-plus-circle text-white me-2"></i>New
                                Submission</a>
                        </div>
                    @endif
                </div>
                <div class="my-4">
                    <table class="table table-bordered ">
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
                                            {{ $submission->menuscript_id }}</span><br>
                                    </td>
                                    @if (Auth::user()->role_id == 2)
                                        <td>{{ $submission->reviewer_status == 0 ? 'Submitted' : ($submission->reviewer_status == 1 ? 'Approved' : 'Rejected') }}
                                        </td>
                                    @else
                                        <td>{{ $submission->admin_status == 0 ? 'Submitted' : ($submission->admin_status == 1 ? 'Approved' : 'Rejected') }}
                                        </td>
                                    @endif
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm view_btn"
                                            data-id="{{ $submission->id }}" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            view
                                        </button>
                                        @if (Auth::user()->role_id == 2)
                                            <button class="btn btn-success btn-sm approveBtn" data-bs-toggle="modal"
                                                data-bs-target="#StatusModal" data-id="{{ $submission->id }}"
                                                data-status="1">Approve</button>
                                            <button class="btn btn-danger btn-sm approveBtn" data-bs-toggle="modal"
                                                data-bs-target="#StatusModal" data-id="{{ $submission->id }}"
                                                data-status="0">Reject</button>
                                        @endif
                                        @if (Auth::user()->role_id == 1)
                                            <button class="btn btn-success btn-sm approveBtn" data-bs-toggle="modal"
                                                data-bs-target="#StatusModal" data-id="{{ $submission->id }}"
                                                data-status="1">Approve</button>
                                            <button class="btn btn-danger btn-sm approveBtn" data-bs-toggle="modal"
                                                data-bs-target="#StatusModal" data-id="{{ $submission->id }}"
                                                data-status="0">Reject</button>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr class="text-center">
                                    <td colspan="4">No Data Found!</td>
                                </tr>
                            @endforelse
                        </tbody>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Submission Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="edit_modal_body">
                    ...
                </div>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <!-- Modal -->
    <div class="modal fade" id="StatusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Submission Status</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('update.submission') }}" method="post">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="submission_id" id="submission_id">
                        <input type="hidden" name="status" id="submission_status">
                        <textarea name="reviewer_message" rows="5" class="form-control"
                            placeholder="Enter reviewer comment for this submission..."></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-dark">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).on('click', '.view_btn', function(e) {
            e.preventDefault();
            $('#edit_modal_body').html('<div class="text-center"><div class="spinner-border"></div></div>');
            let id = $(this).data('id');
            $.ajax({
                type: "GET",
                url: "{{ route('view.submission') }}",
                data: {
                    id: id
                },
                success: function(response) {
                    $('#edit_modal_body').fadeOut('fast', function() {
                        $(this).html(response).fadeIn('slow');
                    });
                }
            });
        });
        $(document).ready(function() {
            $('.approveBtn').click(function() {
                let status = $(this).data('status');
                let id = $(this).data('id');
                $('#submission_status').val(status);
                $('#submission_id').val(id);
            });
        });
    </script>
@endsection
