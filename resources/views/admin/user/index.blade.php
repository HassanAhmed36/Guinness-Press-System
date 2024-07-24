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
                <div class="card-header d-flex justify-content-between">
                    <div>
                        <h3 class="card-title fs-5">Users</h3>
                    </div>
                    <div class="d-flex">
                        <select name="role" id="roleSelect" class="form-select mx-1">
                            <option value="" selected disabled>Select Role</option>
                            <option value="admin">Admin</option>
                            <option value="author">Author</option>
                        </select>
                        <button type="button" class="btn btn-primary mx-1" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Add New User
                        </button>
                        <button type="button" id="clear-filter" class="btn btn-secondary mx-1">
                            Clear Filter
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="responsive-datatable" class="table table-bordered  nowrap w-100">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $u)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $u->name }}</td>
                                        <td>{{ $u->email }}</td>
                                        <td>{{ $u->role->name }}</td>
                                        <td>
                                            <button class="btn btn-primary btn-sm edit-btn" data-bs-toggle="modal"
                                                data-bs-target="#editModal" data-id="{{ $u->id }}">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <a class="btn btn-light btn-blue btn-sm"
                                                href="{{ route('admin.user.delete', ['id' => $u->id]) }}">
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
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ route('admin.user.store') }}" method="post">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="row">
                            <!-- Name -->
                            <div class="form-group mb-3 col-4">
                                <label class="form-label" for="name">Name</label>
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" autocomplete="name" placeholder="Enter your name">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Email -->
                            <div class="form-group mb-3 col-4">
                                <label class="form-label" for="email">Email</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" autocomplete="email" placeholder="Enter your email">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Password -->
                            <div class="form-group mb-3 col-4">
                                <label class="form-label" for="password">Password</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    autocomplete="new-password" placeholder="Enter your password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Confirm Password -->
                            <div class="form-group mb-4 col-4">
                                <label class="form-label" for="password_confirmation">Confirm Password</label>
                                <input id="password_confirmation" type="password"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    name="password_confirmation" autocomplete="new-password"
                                    placeholder="Confirm your password">
                                @error('password_confirmation')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Phone Number -->
                            <div class="form-group mb-3 col-4">
                                <label class="form-label" for="phone_number">Phone Number</label>
                                <input id="phone_number" type="text"
                                    class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"
                                    value="{{ old('phone_number') }}" placeholder="Enter your phone number">
                                @error('phone_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Country -->
                            <div class="form-group mb-3 col-4">
                                <label class="form-label" for="country">Country</label>
                                <select id="country" class="form-select @error('country') is-invalid @enderror"
                                    name="country">
                                    <option value="">Select Country</option>
                                    @foreach ($countries as $c)
                                        <option value="{{ $c['name'] }}" @selected(old('country') == $c['name'])>
                                            {{ $c['name'] }}</option>
                                    @endforeach
                                </select>
                                @error('country')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-4">
                                <label class="form-label" for="role">Role</label>
                                <select id="role" class="form-select @error('role') is-invalid @enderror"
                                    name="role_id">
                                    <option value="">Select Role</option>
                                    <option value="1">Admin</option>
                                    <option value="3">Author</option>
                                </select>
                                @error('role')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="edit-modal-content">

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.edit-btn').click(function() {
                let user_id = $(this).data('id');
                $.ajax({
                    type: "GET",
                    url: `{{ route('admin.user.edit') }}`,
                    data: {
                        id: user_id
                    },
                    success: function(response) {
                        $('#edit-modal-content').html('');
                        $('#edit-modal-content').html(response);
                    }
                });
            })
        });
        $(document).ready(function() {
            // Handle change event for roleSelect
            $('#roleSelect').change(function() {
                updateURLParameterAndRefresh('role', $(this).val());
            });

            // Handle click event for clear-filter button
            $('#clear-filter').click(function() {
                clearAllFiltersAndRefresh();
            });

            function updateURLParameterAndRefresh(param, value) {
                var url = new URL(window.location.href);
                url.searchParams.set(param, value);
                window.location.href = url.href;
            }

            function clearAllFiltersAndRefresh() {
                var url = new URL(window.location.href);
                var params = url.searchParams;
                params.forEach(function(value, key) {
                    params.delete(key);
                });
                window.location.href = url.href;
            }
        });
    </script>
@endsection
