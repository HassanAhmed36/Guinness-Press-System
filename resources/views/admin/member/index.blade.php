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
                        <h3 class="card-title fs-4 fw-semibold">Editorial Board Member</h3>
                        <div>
                            <button data-bs-toggle="modal" data-bs-target="#myModal"
                                class="btn btn-primary waves-effect waves-light">
                                <i class="fa fa-plus-circle me-2"></i>Add new Board Member</button>
                        </div>
                    </div>
                    <hr>
                    <br>
                    <div class="table-responsive">
                        <table id="responsive-datatable" class="table table-bordered  nowrap w-100">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Affiliation</th>
                                    <th>Country</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($members as $m)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $m->name }}</td>
                                        <td>{{ $m->affliation }}</td>
                                        <td>{{ $m->country }}</td>
                                        <td>
                                            <button class="btn btn-primary btn-sm edit-btn" data-bs-toggle="modal"
                                                data-bs-target="#editModal" data-id="{{ $m->id }}">
                                                <i class="fa fa-edit"></i></button>
                                            <a class="btn btn-danger btn-sm"
                                                href="{{ route('editorial.member.delete', ['id' => $m->id]) }}">
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
    </div>
    <div>

        <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Add New Board Member</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('editorial.member.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body row">
                            <div class="col-6 mb-4">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="Enter Department name"
                                    name="name" required>
                            </div>
                            <div class="col-6 mb-4">
                                <label for="" class="form-label">Country</label>
                                <select id="" class="form-select" name="country">
                                    <option selected disabled>Choose Country</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country['name'] }}">{{ $country['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6 mb-4">
                                <label for="" class="form-label">Journal</label>
                                <select id="" class="form-select" name="journal_id">
                                    <option selected disabled>Choose Journal</option>
                                    @foreach ($journals as $j)
                                        <option value="{{ $j->id }}">{{ $j->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6 mb-4">
                                <label for="" class="form-label">Image</label>
                                <input type="file" class="form-control" placeholder="Enter Department name"
                                    name="image" required>
                            </div>
                            <div class="col-12 mb-4">
                                <label for="" class="form-label">Affliation</label>
                                <input type="text" name="affliation" class="form-control"
                                    placeholder="Enter Affiliateion" required>
                            </div>

                            <div class="col-12">
                                <label for="" class="form-label">Biography</label>
                                <textarea id="" cols="30" rows="10" name="biography" class="form-control"
                                    placeholder="Enter Biography"></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect"
                                data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary waves-effect waves-light" type="submit">Add
                                Memeber</button>
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
