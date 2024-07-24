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
                <div class="card-header border-bottom-0 d-flex justify-content-between">
                    <div>
                        <h4 class="card-title fs-4 fw-semibold">Issues</h4>
                    </div>
                    <div class="d-flex align-items-center">
                        <div>
                            <select id="journalSelect" class="form-select" name="journal_id">
                                <option selected disabled>Choose Journal</option>
                                @foreach ($journals as $j)
                                    <option value="{{ $j->acronym }}" @selected(request('journal' == $j->acronym))>{{ $j->acronym }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="ms-2">
                            <button data-bs-toggle="modal" data-bs-target="#myModal"
                                class="btn btn-primary waves-effect waves-light">
                                <i class="fa fa-plus-circle me-2"></i>Add new Issue</button>
                        </div>
                        <div class=" ms-2">
                            <button id="clearFilters" class="btn btn-secondary waves-effect waves-light">
                                Clear All Filters
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Issue name</th>
                                <th>Volume name</th>
                                <th>Journal name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($issues as $i)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>Issue {{ $i->name }}</td>
                                    <td>Volume {{ $i->volume->name }}</td>
                                    <td>{{ $i->journal->name }}</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm edit-btn" data-bs-toggle="modal"
                                            data-bs-target="#editModal" data-id="{{ $i->id }}">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <a class="btn btn-light btn-blue btn-sm"
                                            href="{{ route('admin.issue.delete', ['id' => $i->id]) }}">
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
                        <h5 class="modal-title" id="myModalLabel">Add New Issue</h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <form action="{{ route('admin.issue.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body row">
                            <div class="col-6 mb-4">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="Enter Issue name" name="name"
                                    required>
                            </div>
                            <div class="col-6 mb-4 pt-4">
                                <div class="form-group pt-4">
                                    <label class="custom-switch">
                                        <input type="checkbox" class="custom-switch-input" name="is_active" value="1"
                                            checked="">
                                        <span class="custom-switch-indicator custom-switch-indicator-lg"></span>
                                        <span class="custom-switch-description me-2">Is Active</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 mb-4">
                                <label for="journal" class="form-label">Journal</label>
                                <select id="journal" class="form-select" name="journal_id"
                                    data-url="{{ route('volumes.fetch') }}" required>
                                    <option selected disabled>Choose Journal</option>
                                    @foreach ($journals as $journal)
                                        <option value="{{ $journal->id }}">{{ $journal->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6 mb-4">
                                <label for="volume" class="form-label">Volume</label>
                                <select id="volume" class="form-select" name="volume_id" required>
                                    <option selected disabled>Choose Volume</option>
                                    <!-- Options will be populated by JavaScript -->
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect"
                                data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary waves-effect waves-light" type="submit">Add
                                Issue</button>
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
            var url = "{{ route('admin.issue.edit') }}";
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
        document.querySelector('select[name="journal_id"]').addEventListener('change', function() {
            var selectedValue = this.value;
            if (selectedValue) {
                var currentUrl = new URL(window.location.href);
                currentUrl.searchParams.set('journal', selectedValue);
                window.location.href = currentUrl.href;
            }
        });
        document.getElementById("clearFilters").addEventListener("click", function() {
            let baseUrl = window.location.origin + window.location.pathname;
            window.location.href = baseUrl;
        });
    </script>
@endsection
