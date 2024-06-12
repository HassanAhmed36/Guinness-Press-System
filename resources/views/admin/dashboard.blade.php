@extends('admin.Layout.master')
@section('main_section')
    <div class="page-header d-xl-flex d-block my-0">
        <div class="page-left header my-0 py-0">
            <h4 class="page-title">{{ auth()->user()->role->name }}<span
                    class="font-weight-bold ms-2 my-0 py-0">Dashboard</span></h4>
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
                                    {{ $journal_count }}
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
                                    {{ $submission_count }}
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
                                    {{ $user_count }}
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
                                <h3 class="mb-0 mt-1 text-success mb-2">
                                    {{ $article_count }}
                                </h3>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="icon1 bg-success my-auto float-end"><i class="las la-money-bill-wave"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card custom-card overflow-hidden">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title fs-5">Lastest Submission</h4>
            </div>
            <div class="card-body pt-2 p-0">
                <div class="table-responsive ">
                    <table class="table table-stripe" >
                        <thead>
                            <tr>
                                <th class="">Task</th>
                                <th class="">Start Date</th>
                                <th class="">Work Status</th>
                                <th class="w-5p"></th>
                                <th class="">Deadline</th>
                                <th class="">Team Status</th>
                                <th class="wd-25p">E-mail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="text-dark fw-semibold">Mobile Application</span></td>
                                <td>14 Jun 2020</td>
                                <td>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-primary w-55"></div>
                                    </div>
                                </td>
                                <td><span class="text-primary fs-15">57%</span></td>
                                <td>16 Jun 2020</td>
                                <td>
                                  
                                </td>
                                <td><span class="text-primary">Active</span></td>
                            </tr>
        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
