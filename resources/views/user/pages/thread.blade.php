@extends('user.layouts.template')

@section('title', 'Home Page')

@section('banner')
    <section class="main_banner inner_banner"
        style="position: relative; min-height: 35vh; background-image: url('https://img.freepik.com/free-vector/gradient-style-network-connection-background_23-2148891675.jpg?size=626&ext=jpg&ga=GA1.1.2113030492.1720224000&semt=ais_user'); background-size: fill; background-position: center;">
        <div class="overlay"></div>
        <div class="container" style="position: relative; z-index: 1;">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_content white_text">
                        <h3 class="cocogoose_light fs-2 fw-bold mb-4">
                            Blogs
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
            background: #184888ae;
            z-index: 0;
        }
    </style>

@endsection
@section('body')
    <div class="container" style="min-height: 100vh">
        <div class="row mt-5">
            <div class="mb-5">
                <h3 class="cocogoose_light fw-bold fs-3 ps-2">Blogs</h3>
            </div>
            <div>
                <div class="row">
                    {{-- @foreach ($blogs as $b)
                        <div class="col-12 mb-4">
                            <div class="card bg-transparent">
                                <img src="https://media.istockphoto.com/id/1159199214/vector/abstract-technology-or-medical-background-with-hexagons-shape-pattern-concepts-and-ideas-for.jpg?s=612x612&w=0&k=20&c=jQXehVyWkaZkkf8--52VP0j8Sks5lPK_c6o2arBctMQ=" class="card-img-top" style="height:35vh;" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title mb-4  cocogoose_light fw-bold fs-6">{{ $b->title }} </h5>

                                    <p class="poppins_fonts">Published At :
                                        {{ \Carbon\Carbon::parse($b->published_at)->format('Y, M d, H:i:s') }} </p>
                                    <a href="{{ route('blog.detail', ['slug' => $b->slug]) }}" class="=py-2">read now</a>
                                </div>
                            </div>
                        </div>
                    @endforeach --}}
                    <style>
                        .page-item.active>.page-link {
                            background-color: #184888 !important;
                            border: 1px solid #184888 !important;
                        }
                    </style>
                    <div class="col-12">
                        {{-- {{ $blogs->links() }} --}}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
