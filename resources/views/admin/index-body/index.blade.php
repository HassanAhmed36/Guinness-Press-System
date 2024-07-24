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
                <div class="card-header border-bottom-0 d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="card-title fs-5 fw-semibold">Indexing Bodies</h4>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="ms-2">
                            <button data-bs-toggle="modal" data-bs-target="#myModal"
                                class="btn btn-primary waves-effect waves-light">
                                <i class="fa fa-plus-circle me-2"></i>Add new IndexBody</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($index_bodies as $i)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset($i->image) }}" style="width:5rem" alt="">
                                    </td>
                                    <td>
                                        {{ $i->name }}
                                    </td>
                                    <td>
                                        <button class="btn btn-primary btn-sm edit-btn" data-bs-toggle="modal"
                                            data-bs-target="#editModal" data-id="{{ $i->id }}">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <a class="btn btn-light btn-blue btn-sm"
                                            href="{{ route('index.body.destroy', ['id' => $i->id]) }}">
                                            <i class="fa fa-trash"></i>
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
    <div>
        <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Add New Indexing Body</h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <form action="{{ route('index.body.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body row">
                            <div class="col-6 mb-4">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="Enter Indexing Bodies name"
                                    name="name" required>
                            </div>
                            <div class="col-6 mb-4">
                                <label for="" class="form-label">Link</label>
                                <input type="url" class="form-control" placeholder="Enter Indexing Bodies Link"
                                    name="link" required>
                            </div>
                            <div class="col-6 mb-4">
                                <label for="" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image"
                                    onchange="document.querySelector('#output').src=window.URL.createObjectURL(this.files[0])"
                                    required>
                            </div>
                            <img src="" alt="" class="img-fluid"
                                style="border-radius: 50%; width:25% !important; height: 8rem" id="output">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect"
                                data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary waves-effect waves-light" type="submit">Add Indexing
                                Body</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
                `<div class=" p-4 d-flex justify-content-center">
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>`
            );
            e.preventDefault();
            var volume = $(this).data('id');
            var url = "{{ route('index.body.edit') }}";
            $.ajax({
                url: url,
                method: "GET",
                data: {
                    id: volume
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

        $(document).ready(function() {
            $('#journal').change(function() {
                var journalId = $(this).val();
                var url = $(this).data('url');
                if (journalId) {
                    $.ajax({
                        url: url,
                        type: 'GET',
                        data: {
                            journal_id: journalId
                        },
                        success: function(data) {
                            $('#volume').html(data);
                        }
                    });
                } else {
                    $('#volume').empty().append('<option selected disabled>Choose Volume</option>');
                }
            });
        });
    </script>
@endsection
