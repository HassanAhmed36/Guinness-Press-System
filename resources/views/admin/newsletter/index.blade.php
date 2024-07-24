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
                        <h4 class="card-title fs-5 fw-semibold">Suschribe News Letter</h4>
                    </div>

                </div>
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>email</th>
                                <th>is verified</th>
                                <th>date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $news_letter = App\Models\NewsLetter::all();
                            @endphp
                            @foreach ($news_letter as $n)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $n->email }}</td>
                                    <td>{{ $n->is_verified ? 'verified' : 'not verified' }}</td>
                                    <td>{{ $n->created_at->format('M d, Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
 

@endsection
