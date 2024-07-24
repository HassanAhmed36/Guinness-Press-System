@extends('user.layouts.template')

@section('title', 'Blogs Guinness Press: Your Premier Academic Publisher')

@section('banner')
    <section class="main_banner inner_banner"
        style="position: relative; min-height: 35vh; background-image: url('https://media.istockphoto.com/id/1150203445/photo/businessman-using-mobile-online-banking-and-payments-digital-marketing-finance-and-banking.jpg?b=1&s=612x612&w=0&k=20&c=OwTMWti0VWKGpNBNOVXDApZz41EE2-s7HyG_Qxchk70='); background-size: fill; background-position: center;">
        <div class="overlay"></div>
        <div class="container" style="position: relative; z-index: 1;">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_content white_text">
                        <h3 class="cocogoose_light fs-2 fw-bold mb-4">
                            Research Studies
                        </h3>
                        <p class="poppins_fonts">
                            Guinness Press equips learners, thinkers, and achievers with reliable knowledge that propels
                            research and enhances lives. Explore our blog to uncover the newest research, insights, and
                            analyses from Guinness Press authors and collaborators.
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
            background: #0a3f94d7;

            z-index: 0;
        }
    </style>

@endsection
@section('body')
    <div class="container" style="min-height: 100vh">
        <div class="row mt-5">
            <div class="col-12">
                <div class="mb-4">

                </div>
            </div>
            <div class="col-lg-8 col-12 col-md-8 col-sm-12  py-5">
                <div class="mb-5">
                    <h3 class="cocogoose_light fw-bold fs-3 ps-2">Reasearch Studies</h3>
                </div>
                <div>
                    <div class="row">
                        @foreach ($blogs as $b)
                        <a href="{{ route('blog.detail', ['slug' => $b->slug]) }}" class="py-2 text-dark">
                            <div class="col-12 mb-4">
                                <div class="card bg-transparent">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4  cocogoose_light fw-bold fs-6">{{ $b->title }} </h5>

                                        <p class="poppins_fonts">Published At :
                                            {{ \Carbon\Carbon::parse($b->published_at)->format('Y, M d, H:i:s') }} </p>
                                          <small> read now..</small>
                                    </div>
                                </div>
                            </div>
                            </a>
                        @endforeach
                        <style>
                            .page-item.active>.page-link {
                                background-color: #184888 !important;
                                border: 1px solid #184888 !important;
                            }
                        </style>
                        <div class="col-12">
                            {{ $blogs->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 col-md-4 col-sm-12 py-5">
                <div class="mb-4">
                    <div class="card text-white" style="background-color: #184888; border-raduis:10px;">
                        <div class="card-body">
                            <h5 class="cocogoose_light fs-5 fw-bold mb-4">Subscribe to our newsletter!</h5>
                            <p>Don’t miss out on the opportunity to be a part of the Guinness Press family. Subscribe to our
                                newsletter today and stay at the forefront of academic excellence.</p>
                            <input type="email" class="form-control mb-2" placeholder="Enter your email..">
                            <button class="btn btn-light w-100 py-2 ms-0">Subscribe</button>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="card">
                        <img src="https://img.freepik.com/free-vector/connected-world-concept-illustration_114360-3027.jpg?size=338&ext=jpg&ga=GA1.1.2008272138.1721001600&semt=sph"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="cocogoose_light fw-semibold mb-4 fw-bold">Connect with Us</h5>
                            <p class="poppins_fonts">Stay updated by connecting with us on social media:</p>
                            <div class="d-flex gap-1">
                                <a href="https://www.facebook.com/groups/1011564960476786/"
                                    class="btn btn-blue btn-light w-50">
                                    <i class="fab fa-facebook-f "></i>&nbsp; Facebook
                                </a>
                                <a href="https://www.linkedin.com/groups/9859605/" class="btn btn-blue btn-light w-50">
                                    <i class="fab fa-linkedin-in "></i>&nbsp; LinkedIn
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
