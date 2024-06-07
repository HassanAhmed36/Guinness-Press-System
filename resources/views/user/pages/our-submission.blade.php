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
                                        @if ($submission->admin_status == 1)
                                            <button type="button" class="btn btn-primary btn-sm ">
                                                Pay ACP
                                            </button>
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

    <!-- Modal -->
    <!-- Modal -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
