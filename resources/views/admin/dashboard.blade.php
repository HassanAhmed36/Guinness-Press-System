@extends('admin.Layout.master')

@section('main_section')
    <div class="page-header d-xl-flex d-block my-0">
        <div class="page-left header my-0 py-0 mb-4">
            <h4 class="page-title">{{ auth()->user()->role->name }}<span
                    class="font-weight-bold ms-2 my-0 py-0">Dashboard</span></h4>
        </div>
    </div>
    <div class="row">
        @if (Auth::user()->role_id == 1)
            <!-- Admin Dashboard Tiles -->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="mt-0 text-start">
                                    <span class="font-weight-semibold">Total Leads</span>
                                    <h3 class="mb-0 mt-1 text-warning mb-2">
                                        {{ $lead_counts }}
                                    </h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="icon1 bg-warning my-auto float-end">
                                    <i class="las la-users"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="mt-0 text-start">
                                    <span class="font-weight-semibold">Total Converted Leads</span>
                                    <h3 class="mb-0 mt-1 text-success mb-2">
                                        {{ $converted_lead_counts }}
                                    </h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="icon1 bg-success my-auto float-end">
                                    <i class="las la-check-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="mt-0 text-start">
                                    <span class="font-weight-semibold">On Board Paper</span>
                                    <h3 class="mb-0 mt-1 text-success mb-2">
                                        {{ $lead_counts }}
                                    </h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="icon1 bg-success my-auto float-end">
                                    <i class="las la-check-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="mt-0 text-start">
                                    <span class="font-weight-semibold">Journals</span>
                                    <h3 class="mb-0 mt-1 text-info mb-2">
                                        {{ $journal_count }}
                                    </h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="icon1 bg-info my-auto float-end">
                                    <i class="las la-book"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="mt-0 text-start">
                                    <span class="font-weight-semibold">Submissions</span>
                                    <h3 class="mb-0 mt-1 text-primary mb-2">
                                        {{ $submission_count }}
                                    </h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="icon1 bg-primary my-auto float-end">
                                    <i class="las la-file-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="mt-0 text-start">
                                    <span class="font-weight-semibold">Users</span>
                                    <h3 class="mb-0 mt-1 text-secondary mb-2">
                                        {{ $user_count }}
                                    </h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="icon1 bg-secondary my-auto float-end">
                                    <i class="las la-user"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="mt-0 text-start">
                                    <span class="font-weight-semibold">Articles</span>
                                    <h3 class="mb-0 mt-1 text-danger mb-2">
                                        {{ $article_count }}
                                    </h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="icon1 bg-danger my-auto float-end">
                                    <i class="las la-newspaper"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <!-- Non-Admin Dashboard Tiles -->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="mt-0 text-start">
                                    <span class="font-weight-semibold">Peer Reviews</span>
                                    <h3 class="mb-0 mt-1 text-success mb-2">
                                        {{ $peer_review_count }}
                                    </h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="icon1 bg-success my-auto float-end">
                                    <i class="las la-comment"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
