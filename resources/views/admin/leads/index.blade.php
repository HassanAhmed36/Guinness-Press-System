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
                        <h4 class="card-title fs-5 fw-semibold">Leads From Landing Page</h4>
                    </div>
                </div>
                <div class="card-body">
                    <table id="file-datatable" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Country</th>
                                <th>Is Verified</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Download Manuscript</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $leads = App\Models\Lead::all();
                            @endphp
                            @foreach ($leads as $lead)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $lead->name }}</td>
                                    <td>{{ $lead->email }}</td>
                                    <td>{{ $lead->phone_number }}</td>
                                    <td>{{ $lead->country }}</td>
                                    <td>{{ $lead->is_verified ? 'Verified' : 'Not Verified' }}</td>
                                    <td>{{ $lead->is_conversion ? 'Converted' : 'Not Converted' }}</td>
                                    <td>{{ $lead->created_at->format('M d, Y') }}</td>
                                    <td>
                                        <a href="{{ asset($lead->manuscript_path) }}" class="btn btn-primary btn-sm"
                                            download>
                                            <i class="fa fa-download"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href="{{ route('mark.converted', ['id' => $lead->id]) }}">Mark as
                                                        Converted</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
