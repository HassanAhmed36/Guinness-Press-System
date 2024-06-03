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
                <div class="card-title">
                    <h3 class="">Author Submissions</h3>
                </div>
                <div class="card-body">
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
                                {{-- @foreach ($members as $m)
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
                                @endforeach --}}
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
