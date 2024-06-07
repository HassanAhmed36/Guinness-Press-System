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
                        <table id="responsive-datatable" class="table table-bordered  nowrap w-100">
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
                                        <td>{{ $s->user->email }}</td>
                                        <td>{{ $s->admin_status == 0 ? 'submitted' : ($s->admin_status == 1 ? 'approved' : 'rejected') }}
                                        </td>
                                        <td>
                                            <!-- View Button -->
                                            <button class="btn btn-warning btn-sm edit-btn" data-bs-toggle="modal"
                                                data-bs-target="#editModal" data-id="{{ $s->id }}">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <a class="btn btn-success btn-sm"
                                                href="{{ route('admin.approve.submission', ['id' => $s->id]) }}">
                                                <i class="fa fa-check"></i>
                                            </a>
                                            <a class="btn btn-danger btn-sm"
                                                href="{{ route('admin.reject.submission', ['id' => $s->id]) }}">
                                                <i class="fa fa-times"></i>
                                            </a>
                                            <a href="{{ asset($s->manuscript_path) }}" target="_blank"
                                                class="btn btn-info btn-sm" download="{{ $s->manuscript_name }}">
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

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Submission</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modal-body">
                    <!-- Modal content will be loaded dynamically -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).on('click', '.edit-btn', function(e) {
            e.preventDefault();
            $('#modal-body').html('<div class="text-center"><div class="spinner-border"></div></div>');
            let id = $(this).data('id');
            $.ajax({
                type: "GET",
                url: "{{ route('view.submission') }}",
                data: {
                    id: id
                },
                success: function(response) {
                    $('#modal-body').html(response);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    </script>
@endsection
