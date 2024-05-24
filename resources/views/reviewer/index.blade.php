@extends('layouts.app')
@section('main_section')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-10">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4 class="fw-semibold mb-4">Reviewer Requests</h4>
                    </div>
                </div>
                <div class="my-4">
                    <table class="table table-bordered ">
                        <thead class="table-light">
                            <tr>
                                <td>S.No</td>
                                <td>Name</td>
                                <td>Insitute</td>
                                <td>Department</td>
                                <td>Job Title</td>
                                <td>Country</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($reviewers as $r)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $r->title }} {{ $r->first_name }} {{ $r->last_name }}</td>
                                    <td>{{ $r->institution }}</td>
                                    <td>{{ $r->department }}</td>
                                    <td>{{ $r->current_job_title }}</td>
                                    <td>{{ $r->country }}</td>
                                    <td><a href="{{ route('reviewer.update', ['id' => $r->id]) }}"
                                            class="btn btn-success btn-sm">Approve</a>
                                    </td>
                                @empty
                                <tr class="text-center">
                                    <td colspan="7">No Request Found!</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

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
