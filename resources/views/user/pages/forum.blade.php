@extends('user.layouts.template')

@section('title', 'Home Page')

@section('banner')
    <section class="main_banner inner_banner"
        style="position: relative; min-height: 35vh; background-image: url('https://i.pngimg.me/thumb/f/720/comrawpixel3828297.jpg'); background-size: fill; background-position: center;">
        <div class="overlay"></div>
        <div class="container" style="position: relative; z-index: 1;">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_content white_text">
                        <h3 class="cocogoose_light fs-2 fw-bold mb-4">
                            Forum
                        </h3>
                        <p class="poppins_fonts">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                            nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .main_banner::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:#0a3f94d7;
            z-index: 0;
        }
    </style>

@endsection
@section('body')
    <div class="container" style="min-height: 100vh">
        <div class="row mt-5">
            <div class="mb-5 d-flex justify-content-between ">
                <div>
                    <h3 class="cocogoose_light fw-bold fs-3 ps-2">Threads</h3>
                </div>
                <div>
                    <button id="newThreadBtn" class="btn btn-blue btn-light" data-bs-toggle="modal"
                        data-bs-target="#newThreadModal">New Thread</button>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-12">
                        <div id="editor" style="height: 300px;">
                            @foreach ($threads as $thread)
                                <div class="col-12 mb-4">
                                    <div class="card bg-transparent">
                                        <a href="{{ route('thread.detail', ['thread' => $thread]) }}" class="text-dark">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <h5 class="card-title mb-4  cocogoose_light fw-bold fs-6">
                                                            {{ $thread->title }} </h5>
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <i class="fa fa-eye me-2"></i> {{ $thread->views }} Views
                                                        </div>
                                                        <div>
                                                            <i class="fa fa-comment me-2"></i>
                                                            {{ $thread->thread_comments_count }} Comments
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="poppins_fonts">
                                                    Posted By:
                                                    @if (Auth::check())
                                                        {{ Auth::user()->user_basic_info->name }}
                                                    @else
                                                        Guest User
                                                    @endif
                                                    | Posted At:
                                                    {{ \Carbon\Carbon::parse($thread->created_at)->format('Y, M d, H:i:s') }}
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="newThreadModal" tabindex="-1" aria-labelledby="newThreadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="newThreadModalLabel">New Thread</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('thread.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="threadTitle" class="form-label">Title</label>
                            <input type="text" class="form-control" id="threadTitle" name="title" required
                                placeholder="Enter Thread Body..">
                        </div>
                        <div class="mb-4">
                            <label for="threadBody" class="form-label">Body</label>
                            <textarea name="body" class="form-control" rows="10" placeholder="Enter Thread Body.."></textarea>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-blue btn-light">Create Thread</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
