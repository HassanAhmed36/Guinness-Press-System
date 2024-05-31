@extends('user.layouts.template')
@section('title', 'Join Our Reviewer Community: Unlock the Benefits of Being a Reviewer')
@section('keywords', 'become a reviewer')
@section('description', 'Discover the perks of becoming a reviewer at Guinness Press. Contribute to scholarly integrity and gain recognition in your field.')

@section('banner')
<section class="main_banner inner_banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner_content white_text">
                    <h3 class="cocogoose_light">
                        BENEFITS
                    </h3>
                    <h1 class="cocogoose_light">
                        Benefits of Being A Reviewer
                    </h1>
                    <p class="poppins_fonts">
                        There are several advantages to becoming a reviewer, including the opportunity to assess cutting-edge research in your field at an early stage and to contribute to the overall credibility of scientific research and its published documentation.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('body')
<section class="sec_3 sec_3_3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="sec_3_content">
                    <h3 class="text-uppercase cocogoose_light">
                        Benefits
                    </h3>
                    <h2 class="cocogoose_light text-uppercase">
                        BENEFITS OF BEING A REVIEWER
                    </h2>
                    <p class="poppins_fonts">
                        There are several advantages to becoming a reviewer, including the opportunity to assess cutting-edge research in your field at an early stage and to contribute to the overall credibility of scientific research and its published documentation. Additionally:
                    </p>
                    <p class="poppins_fonts">
                        •	Reviewers who submit their articles may have the chance to publish their content at discounted rates or even free of charge.
                    </p>
                    <p class="poppins_fonts">
                        •	Outstanding reviewers are promoted to Editorial Board Members
                    </p>
                    <p class="poppins_fonts">
                        •	Discounts on “Graphics Enhancement: and “Language Editing Services”
                    </p>
                    <p class="poppins_fonts">
                        If you are enthusiastic about becoming a “Guinness Press” reviewer? Kindly contact the editorial office at info@guinnesspress.org
                    </p>
                    <div class="btn-group">
                        <a href="{{url('/journals')}}" class="btn btn-light btn-blue">Find Your Journals</a>
                        <a href="{{url('/submit-your-article')}}" class="btn btn-light btn-blue red-btn">Submit your Article</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="./assets/images/vecotr-img.png" class="img-fluid">
            </div>
        </div>
    </div>
</section>
@endsection
