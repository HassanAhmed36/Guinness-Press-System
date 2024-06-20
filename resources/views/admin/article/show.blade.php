@extends('admin.Layout.master')
@section('main_section')
    <!--Page header-->

    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card">
                <div class="card-header  border-0">
                    <h4 class="card-title fs-5">{{ $article->title }}</h4>
                </div>
                <div class="card-body">
                    <div class="mb-5">
                        <h5>Keywords</h5>
                        <p class="my-5">
                            @foreach ($article->keywords as $keyword)
                                <span class="badge badge-success-light">{{ $keyword->keyword }}</span>
                            @endforeach
                        </p>
                        <div class="my-5">
                            <h5 class="mb-3">Authors & Affiliations</h5>
                            <div>
                                <ul class="mb-0 d-md-flex">
                                    @foreach ($article->article_details->authors as $author)
                                        <li class="me-5">
                                            <a class="icons" href="#">
                                                <i class="si si-user  me-1"></i>
                                                First Name: {{ $author['firstname'] }}
                                            </a>
                                        </li>
                                        @if (!empty($author['middle_name']))
                                            <li class="me-5">
                                                <a class="icons" href="#">
                                                    <i class="si si-user  me-1"></i>
                                                    Middle Name: {{ $author['middle_name'] }}
                                                </a>
                                            </li>
                                        @endif
                                        @if (!empty($author['lastname']))
                                            <li class="me-5">
                                                <a class="icons" href="#">
                                                    <i class="si si-user  me-1"></i>
                                                    Last Name: {{ $author['lastname'] }}
                                                </a>
                                            </li>
                                        @endif
                                        <li class="me-5">
                                            <a class="icons" href="#">
                                                <i class="si si-envelope  me-1"></i>
                                                Email: {{ $author['email'] }}
                                            </a>
                                        </li>
                                        @if (!empty($author['orchid_id']))
                                            <li class="me-5">
                                                <a class="icons" href="#">
                                                    <i class="si si-id-badge  me-1"></i>
                                                    Orchid ID: {{ $author['orchid_id'] }}
                                                </a>
                                            </li>
                                        @endif
                                        <li class="me-5">
                                            <a class="icons" href="#">
                                                <i class="si si-briefcase  me-1"></i>
                                                Affiliations:
                                                @foreach ($author['affiliation'] as $a)
                                                    {{ $loop->first ? '' : ', ' }}
                                                    {{ $a }}
                                                @endforeach
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>


                        <h5 class="mb-3 mt-5 font-weight-semibold">Details</h5>

                        <div class="row">
                            <div class="mt-3 col-4">
                                <p class="mb-0"><strong>Article Number:</strong> <span
                                        class="">{{ $article->article_code }}</span></p>
                            </div>
                            <div class="mt-3 col-4">
                                <p class="mb-0"><strong>First Page:</strong> <span
                                        class="">{{ $article->first_page }}</span></p>
                            </div>
                            <div class="mt-3 col-4">
                                <p class="mb-0"><strong>Last Page:</strong> <span
                                        class="">{{ $article->last_page }}</span></p>
                            </div>
                            <div class="mt-3 col-4">
                                <p class="mb-0"><strong>Article Dio:</strong> <span
                                        class="">{{ $article->dio }}</span></p>
                            </div>
                            <div class="mt-3 col-4">
                                <p class="mb-0"><strong>Article Type:</strong> <span
                                        class="">{{ $article->article_type }}</span></p>
                            </div>
                            <div class="mt-3 col-4">
                                <p class="mb-0"><strong>Created At:</strong>
                                    @if ($article->created_at->diffInMinutes() < 60)
                                        {{ $article->created_at->diffForHumans() }}
                                    @else
                                        {{ $article->created_at->format('M d, Y') }}
                                    @endif
                                </p>
                            </div>
                            @if (!empty($article->received_date))
                                <div class="mt-3 col-4">
                                    <p class="mb-0"><strong>Recived Date:</strong>
                                        {{ $article->received_date }}
                                    </p>
                                </div>
                            @endif
                            @if (!empty($article->revised_date))
                                <div class="mt-3 col-4">
                                    <p class="mb-0"><strong>Revised Date:</strong>
                                        {{ $article->revised_date }}
                                    </p>
                                </div>
                            @endif
                            @if (!empty($article->accepted_date))
                                <div class="mt-3 col-4">
                                    <p class="mb-0"><strong>Accepted Date:</strong>
                                        {{ $article->accepted_date }}
                                    </p>
                                </div>
                            @endif
                            @if (!empty($article->published_date))
                                <div class="mt-3 col-4">
                                    <p class="mb-0"><strong>Published Date:</strong>
                                        {{ $article->published_date }}
                                    </p>
                                </div>
                            @endif
                        </div>
                        <br>
                        <div class="my-5">
                            <h5 class="mb-4">Files</h5>
                            
                            <div class="mb-3 border border-red p-2 d-flex align-items-center">
                                <div class="flex-grow-1">{{ $article->file_name }}</div>
                                <div>
                                    <a href="{{ asset($article->file_path) }}" download="{{ $article->file_name }}">
                                        <i class="si si-cloud-download"></i>
                                    </a>
                                </div>
                            </div>
                            @if ($article->supplementary_file_name)
                                <div class="mb-3 border border-red p-2 d-flex align-items-center">
                                    <div class="flex-grow-1">{{ $article->supplementary_file_name }}</div>
                                    <div>
                                        <a href="{{ asset($article->supplementary_file_path) }}"
                                            download="{{ $article->supplementary_file_name }}">
                                            <i class="si si-cloud-download"></i>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>


                        <h5 class="mb-4 font-weight-semibold">Abstract</h5>
                        <ul class="list-style-disc mb-5">
                            <p>{!! $article->article_details->abstract !!}</p>
                        </ul>
                        <h5 class="mb-4 font-weight-semibold">Reference</h5>
                        <ul class="list-style-disc mb-5">
                            <p>{!! $article->article_details->references !!}</p>
                        </ul>

                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
