@extends('admin.Layout.master')
@section('main_section')
<div class="page-header d-xl-flex d-block my-0">
    <div class="page-left header my-0 py-0">
        <h4 class="page-title"><span class="font-weight-bold ms-2 my-0 py-0">Dashboard</span></h4>
    </div>
</div>
<div class="row">
    <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <div class="mt-0 text-start"><span class="font-weight-semibold">Journals</span>
                            <h3 class="mb-0 mt-1 text-warning mb-2">
                                100
                            </h3>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="icon1 bg-warning my-auto float-end"><i class="las la-umbrella-beach"></i></div>
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
                        <div class="mt-0 text-start"><span class="font-weight-semibold">Submissions</span>
                            <h3 class="mb-0 mt-1 text-info mb-2">
                                100
                            </h3>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="icon1 bg-info my-auto float-end"><i class="las la-umbrella"></i></div>
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
                        <div class="mt-0 text-start"><span class="font-weight-semibold">Users</span>
                            <h3 class="mb-0 mt-1 text-secondary mb-2">
                                100
                            </h3>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="icon1 bg-secondary my-auto float-end"><i class="las la-notes-medical"></i></div>
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
                        <div class="mt-0 text-start"><span class="font-weight-semibold">Articles</span>
                            <h3 class="mb-0 mt-1 text-success mb-2">100</h3>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="icon1 bg-success my-auto float-end"><i class="las la-money-bill-wave"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection