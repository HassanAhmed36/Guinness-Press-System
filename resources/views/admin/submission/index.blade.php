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
                        <table id="responsive-datatable" class="table table-bordered nowrap w-100">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>ManuScript ID</th>
                                    <th>User name</th>
                                    <th>Author Email</th>
                                    <th>Status</th>
                                    <th>Submission Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($submissions as $s)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $s->submission_id }}</td>
                                        <td>{{ $s->user->user_basic_info->name }}</td>
                                        <td>{!! $s->user->email ?? '<span class="badge badge-warning">Guest User</span>' !!}</td>
                                        <td>{{ App\Services\SubmissionService::getSubmissionStage($s->current_stage) }}
                                            ({{ App\Services\SubmissionService::getSubmissionStatus($s->current_status) }})
                                        </td>
                                        <td>
                                            {{ $s->created_at->format('M d, Y') }}
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-sm "
                                                href="{{ route('submission.show', ['id' => $s->id]) }}">
                                                <i class="fa fa-eye"></i>
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
@endsection
