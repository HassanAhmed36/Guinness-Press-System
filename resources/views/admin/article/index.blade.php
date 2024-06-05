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
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="card-title fs-5 fw-semibold">Articles</h4>
                    </div>
                    <div>
                        <a href="{{ route('admin.article.create') }}" class="btn btn-primary waves-effect waves-light">
                            <i class="fa fa-plus-circle me-2"></i>Add new Articles</a>
                    </div>
                </div>
                <div class="card-body">

                    <hr>
                    <br>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Article ID</th>
                                <th>title</th>
                                <th>DIO</th>
                                <th>Published Date</th>
                                <th>Journal</th>
                                <th>Issue</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $a)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        {{ $a->article_code }}
                                    </td>
                                    <td>{{ $a->title }}</td>
                                    <td>{{ $a->dio }}</td>
                                    <td>{{ $a->published_date }}</td>
                                    <td>{{ $a->journal->acronym }}</td>
                                    <td>Issue {{ $a->issue->name }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm edit-department" href="{{ asset($a->file_path) }}"
                                            download="{{ $a->file_name }}">
                                            <i class="fa fa-download"></i></a>
                                        <a class="btn btn-danger btn-sm"
                                            href="{{ route('admin.article.delete', ['id' => $a->id]) }}">
                                            <i class="fa fa-trash"></i></a>
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
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Add New Journal</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="POST">
                        @csrf
                        <div class="modal-body row">
                            <div class="col-6">
                                <label for="" class="form-label">Department name</label>
                                <input type="text" name="department_name" class="form-control"
                                    placeholder="Enter Department name" required>
                            </div>
                            <div class="col-6 mt-4 pt-2">
                                <div class="form-check form-switch form-switch-md mb-3" dir="ltr">
                                    <input class="form-check-input" type="checkbox" id="SwitchCheckSizemd" checked
                                        name="is_active" value="1">
                                    <label class="form-check-label" for="SwitchCheckSizemd">is active</label>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect"
                                data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary waves-effect waves-light" type="submit">Add
                                Department</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="editModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Edit Department</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="POST">
                        @csrf
                        <input type="hidden" name="id" id="d_id">
                        <div class="modal-body row">
                            <div class="col-6">
                                <label for="" class="form-label">Department name</label>
                                <input type="text" name="department_name" class="form-control"
                                    placeholder="Enter Department name" required id="department_name">
                            </div>
                            <div class="col-6 mt-4 pt-2">
                                <div class="form-check form-switch form-switch-md mb-3" dir="ltr">
                                    <input class="form-check-input is_active" type="checkbox" id="SwitchCheckSizemd"
                                        name="is_active" value="1">
                                    <label class="form-check-label" for="SwitchCheckSizemd">is active</label>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect"
                                data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary waves-effect waves-light" type="submit">update
                                Department</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
