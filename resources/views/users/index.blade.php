@extends('layouts.app')
@section('main_section')
    <div class="container">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endforeach
        @endif
        <div class="row justify-content-center mt-5">
            <div class="col-md-10">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4 class="mb-4">Users</h4>
                    </div>
                    <div>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-plus-circle text-white me-2"></i> Add New User
                        </button>
                    </div>
                </div>
                <div class="my-4">
                    <table class="table table-bordered ">
                        <thead class="table-light">
                            <tr>
                                <td>id</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Country</td>
                                <td>Role</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->country }}</td>
                                    <td>{{ $user->role->name }}</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" data-id="{{ $user->id }}" id="edit-btn"
                                            data-bs-toggle="modal" data-bs-target="#editModal">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <a class="btn btn-danger btn-sm" href="{{ route('user.delete', ['id' => $user->id]) }}">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </td>

                                </tr>
                            @empty
                                <tr class="text-center">
                                    <td colspan="4">No Data Found!</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-lg ">
            <div class="modal-content">
                <form action="{{ route('user.store') }}" method="post">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add new User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <!-- Email -->
                            <div class="form-group mb-4 col-4">
                                <label for="email">Email</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" autocomplete="email" placeholder="Enter your email">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Title -->
                            <div class="form-group mb-4 col-4">
                                <label for="title">Title</label>
                                <select id="title" class="form-control" name="title">
                                    <option value="">Select Title</option>
                                    <option value="Prof." {{ old('title') == 'Prof.' ? 'selected' : '' }}>Prof.
                                    </option>
                                    <option value="Dr." {{ old('title') == 'Dr.' ? 'selected' : '' }}>Dr.</option>
                                    <option value="Ms." {{ old('title') == 'Ms.' ? 'selected' : '' }}>Ms.</option>
                                    <option value="Mrs." {{ old('title') == 'Mrs.' ? 'selected' : '' }}>Mrs.</option>
                                </select>
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- First Name -->
                            <div class="form-group mb-4 col-4">
                                <label for="first_name">First Name</label>
                                <input id="first_name" type="text" class="form-control" name="first_name"
                                    value="{{ old('first_name') }}" @error('first_name') is-invalid @enderror
                                    placeholder="Enter your First name">
                                @error('first_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Last Name -->
                            <div class="form-group mb-4 col-4">
                                <label for="last_name">Last Name</label>
                                <input id="last_name" type="text" class="form-control" name="last_name"
                                    value="{{ old('last_name') }}" @error('last_name') is-invalid @enderror
                                    placeholder="Enter your last name">
                                @error('last_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Current Job Title -->
                            <div class="form-group mb-4 col-4">
                                <label for="current_job_title">Current Job Title</label>
                                <input id="current_job_title" type="text" class="form-control" name="current_job_title"
                                    value="{{ old('current_job_title') }}" @error('current_job_title') is-invalid @enderror
                                    placeholder="Enter your Current Job Title">
                                @error('current_job_title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Department -->
                            <div class="form-group mb-4 col-4">
                                <label for="department">Department</label>
                                <input id="department" type="text" class="form-control" name="department"
                                    value="{{ old('department') }}" @error('department') is-invalid @enderror
                                    placeholder="Enter your Department">
                                @error('department')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Institution -->
                            <div class="form-group mb-4 col-4">
                                <label for="institution">Institution</label>
                                <input id="institution" type="text" class="form-control" name="institution"
                                    value="{{ old('institution') }}" @error('institution') is-invalid @enderror
                                    placeholder="Enter your Institution">
                                @error('institution')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Country -->
                            <div class="form-group mb-4 col-4">
                                <label for="country">Country</label>
                                <select id="country" class="form-select" name="country"
                                    @error('country') is-invalid @enderror>
                                    <option value="">Select Country</option>
                                    <option value="USA" {{ old('country') == 'USA' ? 'selected' : '' }}>USA
                                    </option>
                                    <option value="Canada" {{ old('country') == 'Canada' ? 'selected' : '' }}>Canada
                                    </option>
                                    <option value="UK" {{ old('country') == 'UK' ? 'selected' : '' }}>UK</option>
                                </select>
                                @error('country')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Contact Number -->
                            <div class="form-group mb-4 col-4">
                                <label for="contact_number">Contact Number</label>
                                <input id="contact_number" type="text" class="form-control" name="contact_number"
                                    value="{{ old('contact_number') }}" @error('contact_number') is-invalid @enderror
                                    placeholder="Enter your Contact Number">
                                @error('contact_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Password -->
                            <div class="form-group mb-4 col-4">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control" name="password"
                                    autocomplete="new-password" @error('password') is-invalid @enderror
                                    placeholder="Enter your Password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Confirm Password -->
                            <div class="form-group mb-4 col-4">
                                <label for="password_confirmation">Confirm Password</label>
                                <input id="password_confirmation" type="password" class="form-control"
                                    name="password_confirmation" autocomplete="new-password"
                                    @error('password_confirmation') is-invalid @enderror placeholder="Confirm Password">
                                @error('passwpassword_confirmationord_confirmation')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-4 col-4">
                                <label for="country">Role</label>
                                <select id="country" class="form-select" name="role_id"
                                    @error('role_id') is-invalid @enderror>
                                    <option value="">Select Role</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}"
                                            {{ old('role_id') == $role->id ? 'selected' : '' }}>{{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('role_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-dark" type="submit">Add User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="edit_modal_body">
                    <!-- Content will be loaded here -->
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).on('click', '#edit-btn', function(e) {
            e.preventDefault();
            $('#edit_modal_body').html('<div class="text-center"><div class="spinner-border"></div></div>');
            let id = $(this).data('id');
            $.ajax({
                type: "GET",
                url: "{{ route('user.edit') }}",
                data: {
                    id: id
                },
                success: function(response) {
                    $('#edit_modal_body').fadeOut('fast', function() {
                        $(this).html(response).fadeIn('slow');
                    });
                }
            });
        });
    </script>

@endsection
