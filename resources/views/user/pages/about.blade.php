@extends('user.layouts.template')
@section('title', 'About Guinness Press: Your Premier Academic Publisher')
@section('keywords', 'academic publisher, open access journals, publish in open access')
@section('description', 'Learn about Guinness Press, dedicated to open access journals. Publish your research in open
    access formats for global accessibility and impact.')

@section('banner')
    <section class="main_banner inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_content white_text">
                        <h3 class="cocogoose_light">
                            ABOUT US
                        </h3>
                        <h1 class="cocogoose_light">
                            ABOUT GUINNESS PRESS
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
    <section class="sec_3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="./assets/images/women_img_3.png" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <div class="sec_3_content">
                        <h3 class="text-uppercase cocogoose_light">
                            ABOUT US
                        </h3>
                        <h2 class="cocogoose_light text-uppercase">
                            About Guinness Press
                        </h2>
                        <p class="poppins_fonts">
                            Welcome To Guinness Press, A Distinguished Academic Journal Publisher Committed To Advancing
                            Knowledge Through The Dissemination Of High-Quality, Open-Access Scholarly Articles. Established
                            With A Vision To Foster Intellectual Curiosity And Promote Academic Excellence, Guinness Press
                            Is Dedicated To Providing A Platform For Researchers, Scholars, And Academics To Share Their
                            Insights And Discoveries With The Global Community.
                        </p>
                        <p class="poppins_fonts text-capitalize">
                            Our commitment to academic excellence is reflected in our rigorous peer-review process, ensuring
                            that only the most impactful and well-researched articles are published. By upholding stringent
                            standards of quality and integrity, we aim to contribute to the advancement of knowledge and
                            drive innovation across various fields of study.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec_5">
        <div class="row">
            <div class="col-md-5 sec_5_leftbar">
                <div class="">
                    <div class="container">
                        <div class="sec_5_leftbar_content">
                            <img src="./assets/images/logo-light.png" class="img-fluid">
                            <p class="poppins_fonts white_text">
                                At Guinness Press, our mission is to facilitate the free exchange of ideas and knowledge
                                across diverse academic disciplines. A commitment to academic integrity, accessibility, and
                                inclusivity drives us. Through our open-access publishing model, we aim to break down
                                barriers to information, ensuring that cutting-edge research is available to all.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="sec_5_rightbar">
                    <div class="container">
                        <div class="sec_5_rightbar_content">
                            <h3 class="text-uppercase white_text cocogoose_light">
                                What Can Guinness Press Do?
                            </h3>
                            <h3 class="text-uppercase white_text cocogoose_light">
                                Our journals
                            </h3>
                            <p class="white_text poppins_fonts">
                                Through peer-reviewed articles, editorials, and other scholarly content, our journals
                                contribute to the advancement of knowledge and the promotion of academic excellence
                                worldwide.
                            </p>
                            <h3 class="text-uppercase white_text cocogoose_light">
                                Why choose us?
                            </h3>
                            <p class="white_text poppins_fonts">
                                • Our articles undergo rigorous peer review processes, ensuring the highest standards of
                                quality and reliability in scientific research are published.
                            </p>
                            <p class="white_text poppins_fonts">
                                • With an extensive and experienced Board of Members overseeing our journals, we guarantee
                                authoritative oversight and guidance, contributing to the credibility and relevance of our
                                publications.
                            </p>
                            <p class="white_text poppins_fonts">
                                • Our journals are indexed in reputable indexing agencies, enhancing the visibility and
                                accessibility of your research to a global audience, thereby maximizing its impact and
                                reach.
                            </p>
                            <div class="btn-group">
                                <a href="{{ url('/journals') }}" class="btn btn-light btn-blue">Find Your Journals</a>
                                <a href="{{ url('/submit-your-article') }}" class="btn btn-light btn-blue red-btn">Submit
                                    your Article</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec_4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec_4_content">
                        <h2 class="cocogoose_light text-uppercase">
                            What Sets Us Apart
                        </h2>
                        <p class="poppins_fonts">
                            We prioritize quality, integrity and accessibility in all our publications, fostering a global
                            community of knowledge exchange and collaboration.
                        </p>
                    </div>
                </div>
                <div class="sec_4_boxes">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="box_item box_item_3">
                                <div class="box_header">
                                    <div class="box_icon">
                                        <img src="{{ asset('assets/images/about/1.png') }}" class="img-fluid" />
                                    </div>
                                    <div class="box_content">
                                        <h3>Diversity of Content</h3>
                                    </div>
                                </div>
                                <div class="box_body">
                                    <p>
                                        We take pride in the vast diversity of topics covered in our publications. From
                                        Science to Humanities and the arts to technology, Guinness Press is a home for a
                                        wide range of academic disciplines.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="box_item box_item_3">
                                <div class="box_header">
                                    <div class="box_icon">
                                        <img src="{{ asset('assets/images/about/1.png') }}" class="img-fluid" />
                                    </div>
                                    <div class="box_content">
                                        <h3>Peer-Reviewed Superiority</h3>
                                    </div>
                                </div>
                                <div class="box_body">
                                    <p>
                                        Every article published by Guinness Press undergoes a rigorous peer-review process,
                                        ensuring the highest standards of quality and credibility. Our esteemed panel of
                                        expert reviewers assesses submissions based on originality, methodology, and
                                        contribution to the field.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="box_item box_item_3">
                                <div class="box_header">
                                    <div class="box_icon">
                                        <img src="{{ asset('assets/images/about/2.png') }}" class="img-fluid" />
                                    </div>
                                    <div class="box_content">
                                        <h3>Open Access Pledge</h3>
                                    </div>
                                </div>
                                <div class="box_body">
                                    <p>
                                        We firmly believe that knowledge should be freely accessible to all, regardless of
                                        geographical location or institutional affiliation. All our articles are accessible
                                        to anyone with an internet connection, promoting global inclusivity and fostering a
                                        vibrant academic community.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="box_item box_item_3">
                                <div class="box_header">
                                    <div class="box_icon">
                                        <img src="{{ asset('assets/images/about/3.png') }}" class="img-fluid" />
                                    </div>
                                    <div class="box_content">
                                        <h3>Author-Centered Approach</h3>
                                    </div>
                                </div>
                                <div class="box_body">
                                    <p>
                                        We understand the importance of supporting authors throughout the publication
                                        process. Our dedicated team of editors and publishing professionals provides
                                        personalized guidance and assistance, ensuring a smooth and enriching experience for
                                        every author.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <a href="{{ url('/journals') }}" class="btn btn-light btn-blue">Find Your Journals</a>
                        <a href="{{ url('/submit-your-article') }}" class="btn btn-light btn-blue red-btn">Submit your
                            Article</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
