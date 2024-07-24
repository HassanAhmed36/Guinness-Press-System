@extends('user.layouts.template')

@section('title', 'Home Page')

@section('body')
    <div class="container" style="min-height: 100vh">
        <div class="row mt-4    ">
            <div class="col-12">

            </div>
            <div class="col-12 col-lg-8 col-md-8 col-sm-12 py-5">
                <div class="row">
                    <div class="col-12">
                        <h3 class="cocogoose_light fs-2 fw-bold mb-4">
                            {{ $blog->title }}
                        </h3>
                        <p class="pt-4">Published At :
                            {{ \Carbon\Carbon::parse($blog->published_at)->format('Y, M d, H:i:s') }}
                        </p>
                        @if (!in_array($blog->category , ['researh study' , 'case study']))
                        <div>
                            <img class="img-fluid w-100"
                                src="{{ $blog->thumbnail ? asset($blog->thumbnail) : 'https://media.istockphoto.com/id/1159199214/vector/abstract-technology-or-medical-background-with-hexagons-shape-pattern-concepts-and-ideas-for.jpg?s=612x612&w=0&k=20&c=jQXehVyWkaZkkf8--52VP0j8Sks5lPK_c6o2arBctMQ=' }}">
                        </div>
                        @endif

                    </div>

                    <div class="col-12 my-5">
                        <div class="content-section mb-4 poppins_fonts">
                            {!! $blog->body !!}
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="d-flex gap-3 flex-wrap">
                            @foreach ($blog->tags as $t)
                                <div class="px-3 py-1 border border-secondary rounded-3">{{ $t->name }}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-12 py-5">
                <div class="mb-4">
                    <div class="card text-white" style="background-color: #184888; border-raduis:10px;">
                        <div class="card-body">
                            <h5 class="cocogoose_light fs-5 fw-bold mb-4">Subscribe to our newsletter!</h5>
                            <p>1 million debut and bestselling authors have made Reedsy their home to learn more about book
                                publishing,marketing tips and all things <a href="https://guinnesspress.org"
                                    class="text-white">guinnesspress.org</a></p>
                            <input type="email" class="form-control mb-2" placeholder="Enter your email..">
                            <button class="btn btn-light w-100 py-2 ms-0">Subscribe</button>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="card">
                        <img src="{{ asset('blog-side.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="cocogoose_light fw-semibold mb-4 fw-bold">Connect with Us</h5>
                            <p class="poppins_fonts">Stay updated by connecting with us on social media:</p>
                            <div class="d-flex gap-1">
                                <a href="https://www.facebook.com" class="btn btn-blue btn-light w-50">
                                    <i class="fab fa-facebook-f "></i>&nbsp; Facebook
                                </a>
                                <a href="https://www.linkedin.com" class="btn btn-blue btn-light w-50">
                                    <i class="fab fa-linkedin-in "></i>&nbsp; LinkedIn
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>


@endsection
