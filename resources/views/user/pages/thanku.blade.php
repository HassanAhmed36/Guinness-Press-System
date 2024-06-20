@extends('user.layouts.thank-you-template')

@section('title', 'Guinness Press - Article Submission')

@section('banner')
    <section class="main_banner inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_content white_text">
                        <h3 class="cocogoose_light">
                            Thank You
                        </h3>
                        <h1 class="cocogoose_light">
                            GUINNESS PRESS
                        </h1>
                        <p class="poppins_fonts">
                            Together, let us contribute to the collective pursuit of knowledge and make a meaningful impact
                            on the world through the dissemination of high-quality research and scholarly insights.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('body')

    <section class="sec-2 thanku-sec">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-12 text-center">
                        <div class="thanku_img">
                            <img src="{{ asset('assets/images/thanku_image.png') }}" title="Thank You"
                                alt="Thank You" loading="lazy">
                        </div>

                        <div class="thanku_txt">
                            <h2>Thank You For Reaching Out</h2>
                            <p> We will get back to you </p>
                        </div>


                        <div class="sec-btns">
                            <a href="{{ URL('') }}" class="btn1">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
