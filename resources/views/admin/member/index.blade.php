@extends('admin.Layout.master')
@section('main_section')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $error }}
                <button type="button" class="btn -close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endforeach
    @endif
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div>
                <h3 class="card-title fw-semibold">Editorial Board Member</h3>
            </div>
            <div class=" d-flex align-items-center">
                <div class="mt-4">
                    <select id="journalSelect" class="form-select" name="journal_id">
                        <option selected disabled>Choose Journal</option>
                        <option value="ijerm" @selected(request('journal') == 'ijerm')>ijerm</option>
                        <option value="cli" @selected(request('journal') == 'cli')>cli</option>
                        <option value="seer" @selected(request('journal') == 'seer')>seer</option>
                        <option value="cie" @selected(request('journal') == 'cie')>cie</option>
                        <option value="jblm" @selected(request('journal') == 'jblm')>jblm</option>
                        <option value="rer" @selected(request('journal') == 'rer')>rer</option>
                        <option value="pb" @selected(request('journal') == 'pb')>pb</option>
                        <option value="msr" @selected(request('journal') == 'msr')>msr</option>
                        <option value="sfr" @selected(request('journal') == 'sfr')>sfr</option>
                        <option value="aci" @selected(request('journal') == 'aci')>aci</option>
                    </select>

                </div>
                <div class="mt-4 ms-4">
                    <button data-bs-toggle="modal" data-bs-target="#myModal"
                        class="btn  btn-primary waves-effect waves-light">
                        Add Board Member
                    </button>
                </div>

                <div class="mt-4 ms-2">
                    <button id="clearFilters" class="btn  btn-primary waves-effect waves-light">
                        Clear All Filters
                    </button>
                </div>
                <div class="mt-4 ms-2">
                    <button class="btn  btn-secondary" id="update-order-btn">Update Order</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="responsive-datatable" class="table table-bordered nowrap w-100">
                            <thead>
                                <tr>
                                    <th style="width: 10% !important">S.No</th>
                                    <th class="w-25">Name</th>
                                    <th>Journal name</th>
                                    <th>Country</th>
                                    <th class="w-25">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($members as $m)
                                    <tr data-id="{{ $m->id }}">
                                        <td>
                                            <input type="number" class="form-control sno-input"
                                                value="{{ $m->order_id }}">
                                        </td>
                                        <td>{{ $m->name }}</td>
                                        <td>{{ $m->journal->acronym }}</td>
                                        <td>{{ $m->country }}</td>
                                        <td>
                                            <button class="btn  btn-primary edit-btn" data-bs-toggle="modal"
                                                data-bs-target="#editModal" data-id="{{ $m->id }}">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <a class="btn  btn-danger"
                                                href="{{ route('editorial.member.delete', ['id' => $m->id]) }}">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No data found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div>
        <!-- Add Board Member Modal -->
        <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Add New Board Member</h5>
                        <button type="button" class="btn -close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('editorial.member.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body row">
                            <div class="col-4 mb-4">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="Enter name" name="name" required>
                            </div>
                            <div class="col-4 mb-4">
                                <label for="" class="form-label">Country</label>
                                <select id="" class="form-select" name="country" required>
                                    <option selected disabled>Choose Country</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country['name'] }}">{{ $country['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-4 mb-4">
                                <label for="" class="form-label">Journal</label>
                                <select id="" class="form-select" name="journal_id" required>
                                    <option selected disabled>Choose Journal</option>
                                    <option value="ijerm">ijerm</option>
                                    <option value="cli">cli</option>
                                    <option value="seer">seer</option>
                                    <option value="cie">cie</option>
                                    <option value="jblm">jblm</option>
                                    <option value="rer">rer</option>
                                    <option value="pb">pb</option>
                                    <option value="msr">msr</option>
                                    <option value="sfe">sfe</option>
                                    <option value="aci">aci</option>
                                </select>
                            </div>
                            <div class="col-4 mb-4">
                                <label for="" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image" id="imageInput" required>
                            </div>
                            <div class="col-4 mb-4">
                                <label for="" class="form-label">Google Scholars</label>
                                <input type="text" name="google_scholar" class="form-control"
                                    placeholder="enter google scholars link">
                            </div>
                            <div class="col-4 mb-4">
                                <label for="" class="form-label">Orchid</label>
                                <input type="text" name="orcid" class="form-control"
                                    placeholder="enter Orchid link">
                            </div>
                            <div class="col-4 mb-4">
                                <label for="" class="form-label">Scopus</label>
                                <input type="text" name="scopus" class="form-control"
                                    placeholder="enter Scopus link">
                            </div>
                            <div class="col-4 mb-4">
                                <label for="" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control"
                                    placeholder="enter Email Address">
                            </div>
                            <div class="col-12 mb-4">
                                <label for="" class="form-label">Affiliation</label>
                                <input type="text" name="affiliation" class="form-control"
                                    placeholder="Enter Affiliation" required>
                            </div>
                            <div class="col-12">
                                <label for="" class="form-label">Biography</label>
                                <textarea id="biography" cols="30" rows="10" name="biography" class="form-control"
                                    placeholder="Enter Biography"></textarea>
                            </div>
                            <style>
                                .card-img-top {
                                    width: 100px;
                                    height: auto;
                                    object-fit: cover;
                                    aspect-ratio: 1;
                                    border-radius: 50%;
                                }
                            </style>
                            <div class="col-12 mb-4 imag_member">
                                <img id="imagePreview" style="object-fit: cover;" class="card-img-top" alt="Member">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn  btn-secondary waves-effect" data-bs-dismiss="modal">Close
                            </button>
                            <button class="btn  btn-primary waves-effect waves-light" type="submit">Add
                                Member
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Board Member Modal -->
        <div id="editModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" id="modal-body">
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#update-order-btn').click(function() {
                let data = [];

                $('#responsive-datatable tbody tr').each(function() {
                    let id = $(this).data('id');
                    let order_id = $(this).find('.sno-input').val();

                    data.push({
                        id: id,
                        order_id: order_id
                    });
                });

                $.ajax({
                    type: "GET",
                    url: "{{ route('editorial.member.updateOrder') }}",
                    data: {
                        data: data
                    },
                    success: function(response) {
                        console.log(response);
                        alert('Order updated successfully');
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        alert('Error updating order. Please try again.');
                    }
                });
            });
        });


        $('.edit-btn').click(function(e) {
            $('#modal-body').html(
                `<div class="d-flex justify-content-center">
            <div class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>`
            );
            e.preventDefault();
            var memberId = $(this).data('id');
            var url = "{{ route('editorial.member.edit') }}";
            $.ajax({
                url: url,
                method: "GET",
                data: {
                    id: memberId
                },
                success: function(response) {
                    $('#modal-body').html('');
                    $('#modal-body').html(response);
                    CKEDITOR.replace('biography-edit');
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });

        document.getElementById('imageInput').addEventListener('change', function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('imagePreview');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        });

        document.getElementById('clearFilters').addEventListener('click', function() {
            var currentUrl = new URL(window.location.href);
            currentUrl.searchParams.delete('journal');
            window.location.href = currentUrl.href;
        });
    </script>



    <script>
        document.querySelector('select[name="journal_id"]').addEventListener('change', function() {
            var selectedValue = this.value;
            if (selectedValue) {
                var currentUrl = new URL(window.location.href);
                currentUrl.searchParams.set('journal', selectedValue);
                window.location.href = currentUrl.href;
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#update-order-btn').click(function() {
                let data = [];

                $('#responsive-datatable tbody tr').each(function() {
                    let id = $(this).data('id');
                    let order_id = $(this).find('.sno-input').val();

                    data.push({
                        id: id,
                        order_id: order_id
                    });
                });

                $.ajax({
                    type: "GET",
                    url: "{{ route('editorial.member.updateOrder') }}",
                    data: {
                        data: data
                    },
                    success: function(response) {
                        console.log(response);
                        alert('Order updated successfully');
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        alert('Error updating order. Please try again.');
                    }
                });
            });
        });


        $('.edit-btn').click(function(e) {
            $('#modal-body').html(
                `<div class="d-flex justify-content-center">
                <div class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>`
            );
            e.preventDefault();
            var memberId = $(this).data('id');
            var url = "{{ route('editorial.member.edit') }}";
            $.ajax({
                url: url,
                method: "GET",
                data: {
                    id: memberId
                },
                success: function(response) {
                    $('#modal-body').html('');
                    $('#modal-body').html(response);
                    CKEDITOR.replace('biography-edit');
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });

        document.getElementById('imageInput').addEventListener('change', function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('imagePreview');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        });

        document.getElementById('clearFilters').addEventListener('click', function() {
            var currentUrl = new URL(window.location.href);
            currentUrl.searchParams.delete('journal');
            window.location.href = currentUrl.href;
        });
    </script>
    <script>
        document.querySelector('select[name="journal_id"]').addEventListener('change', function() {
            var selectedValue = this.value;
            if (selectedValue) {
                var currentUrl = new URL(window.location.href);
                currentUrl.searchParams.set('journal', selectedValue);
                window.location.href = currentUrl.href;
            }
        });
    </script>
@endsection
