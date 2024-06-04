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
                                        <td>
                                            <!-- View Button -->
                                            <button class="btn btn-warning btn-sm edit-btn" data-bs-toggle="modal"
                                                data-bs-target="#viewModal" data-id="{{ $s->id }}">
                                                <i class="fa fa-eye"></i>
                                            </button>

                                            <!-- Approve Button -->
                                            <button class="btn btn-success btn-sm edit-btn" data-bs-toggle="modal"
                                                data-bs-target="#approveModal" data-id="{{ $s->id }}">
                                                <i class="fa fa-check"></i>
                                            </button>

                                            <!-- Reject Button -->
                                            <button class="btn btn-danger btn-sm edit-btn" data-bs-toggle="modal"
                                                data-bs-target="#rejectModal" data-id="{{ $s->id }}">
                                                <i class="fa fa-times"></i>
                                            </button>

                                            <!-- Download Button -->
                                            <a href="{{ asset($s->manuscript_path) }}" target class="btn btn-info btn-sm edit-btn"
                                                download="{{ $s->manuscript_name }}" sda>
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
    <div>


        <div id="editModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" id="modal-body">

                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('.edit-btn').click(function(e) {
            $('#modal-body').html(
                `<div class="d-flex justify-content-center">
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>`
            );
            e.preventDefault();
            var Member = $(this).data('id');
            var url = "{{ route('editorial.member.edit') }}";
            $.ajax({
                url: url,
                method: "GET",
                data: {
                    id: Member
                },
                success: function(response) {
                    $('#modal-body').html('');
                    $('#modal-body').html(response);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    </script>
@endsection
