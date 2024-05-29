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
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="card-title fs-4 fw-semibold">Journal Volumes</h3>
                        <div>
                            <button data-bs-toggle="modal" data-bs-target="#myModal"
                                class="btn btn-primary waves-effect waves-light">
                                <i class="fa fa-plus-circle me-2"></i>Add new Volumes</button>
                        </div>
                    </div>
                    <hr>
                    <br>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Volume name</th>
                                <th>Journal name</th>
                                <th>Year</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($volums as $v)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $v->name }}</td>
                                    <td>{{ $v->journal->name }}</td>
                                    <td>{{ $v->created_at->format('Y') }}</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm edit-btn" data-bs-toggle="modal"
                                            data-bs-target="#editModal" data-id="{{ $v->id }}">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <a class="btn btn-danger btn-sm"
                                            href="{{ route('admin.volume.destroy', ['id' => $v->id]) }}">
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
                        <h5 class="modal-title" id="myModalLabel">Add New Volume</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('admin.volume.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body row">
                            <div class="col-6 mb-4">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="Enter Volume name" name="name"
                                    required>
                            </div>
                            <div class="col-6 mb-4 pt-4">
                                <div class="form-check form-switch form-switch-md mb-3" dir="ltr">
                                    <input class="form-check-input" type="checkbox" id="SwitchCheckSizemd" checked
                                        name="is_active" value="1">
                                    <label class="form-check-label" for="SwitchCheckSizemd">is active</label>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <label for="" class="form-label">Journal</label>
                                <select id="" class="form-select" name="journal_id">
                                    <option selected disabled>Choose Journal</option>
                                    @foreach ($journals as $j)
                                        <option value="{{ $j->id }}">{{ $j->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect"
                                data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary waves-effect waves-light" type="submit">Add
                                Volume</button>
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
            var url = "{{ route('admin.volume.edit') }}";
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
    </script>
@endsection