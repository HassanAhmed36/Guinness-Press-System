@extends('user.layouts.template')

@section('title', 'Expert Research Paper & Scientific Manuscript Editing Services')
@section('keywords', 'research paper editing, scientific manuscript editing services')
@section('description',
    'Get top-notch editing services for your research papers and scientific manuscripts. Our experts
    ensure precision and clarity for impactful publication.')


@section('banner')
    <section class="main_banner inner_banner"
        style="min-height: 45vh; background: url('{{ asset('service.png') }}') no-repeat center center / cover;">
        <div class="container py-5">
            <div class="banner_content white_text" style="text-align: left !important">
                <h3 class="cocogoose_light mb-4">
                    Our Services
                </h3>
                <h1 class="cocogoose_light mb-4">
                    KNOWLEDGE ACROSS VARIOUS
                </h1>
                <p class="poppins_fonts ms-0">
                    At Guinness Press, we recognize the importance of supporting authors throughout the publishing journey.
                    Our tailored services are designed to enhance the quality and impact of your research.
                </p>
            </div>
        </div>
    </section>

@endsection
@section('body')
    <section class="sec_3 sec_3_3 services_sec_3">
        <div class="container">
            <div class="sec_3_content">
                <div class="text-center">
                    <h3 class="text-uppercase cocogoose_light mb-4 fw-semibold">
                        Our Services
                    </h3>
                    <h1 class="cocogoose_light text-uppercase mb-4 fw-bold fs-1">
                        KNOWLEDGE ACROSS VARIOUS
                    </h1>
                    <p class="poppins_fonts mb-4">
                        At Guinness Press, we recognize the importance of supporting authors throughout the publishing
                        journey. Our tailored services are designed to enhance the quality and impact of your research.
                        Here are some of the services we offer:
                    </p>
                </div>
                <div class="listbar">
                    <ul class="row">
                        <li class="col-12 col-sm-12  col-md-12 col-lg-6">
                            <div class="bar_1">
                                <div class="blue_box" style="">
                                    <h4 class="poppins_fonts">
                                        01
                                    </h4>
                                </div>
                            </div>
                            <div class="bar_2">
                                <h3 class="cocogoose_light text-capitalize">
                                    Language Editing
                                </h3>
                                <p class="poppins_fonts">
                                    Our team of language experts provides comprehensive language editing services to
                                    ensure that your manuscript is clear, concise, and adheres to the highest
                                    standards of academic writing. We address issues related to grammar, syntax,
                                    punctuation, and overall coherence.
                                </p>
                            </div>
                        </li>
                        <li class="col-12 col-sm-12  col-md-12 col-lg-6">
                            <div class="bar_1">
                                <div class="blue_box">
                                    <h4 class="poppins_fonts">
                                        02
                                    </h4>
                                </div>
                            </div>
                            <div class="bar_2">
                                <h3 class="cocogoose_light text-capitalize">
                                    Figure Enhancements
                                </h3>
                                <p class="poppins_fonts">
                                    Visual representation is crucial in conveying your research findings
                                    effectively. Our skilled graphic designers work with you to enhance the clarity
                                    and visual impact of your figures, tables, and images. We ensure that they meet
                                    industry-standard guidelines, making your research more accessible and
                                    impactful.
                                </p>
                            </div>
                        </li>
                        <li class="col-12 col-sm-12  col-md-12 col-lg-6">
                            <div class="bar_1">
                                <div class="blue_box">
                                    <h4 class="poppins_fonts">
                                        03
                                    </h4>
                                </div>
                            </div>
                            <div class="bar_2">
                                <h3 class="cocogoose_light text-capitalize">
                                    Inclusion in Reputable Databases
                                </h3>
                                <p class="poppins_fonts">
                                    We actively work towards indexing our journals in major academic databases,
                                    further increasing the visibility and impact of your research.
                                </p>
                            </div>
                        </li>
                        <li class="col-12 col-sm-12  col-md-12 col-lg-6">
                            <div class="bar_1">
                                <div class="blue_box">
                                    <h4 class="poppins_fonts">
                                        04
                                    </h4>
                                </div>
                            </div>
                            <div class="bar_2">
                                <h3 class="cocogoose_light text-capitalize">
                                    DOI and CrossRef Registration
                                </h3>
                                <p class="poppins_fonts">
                                    We provide your published work with a Digital Object Identifier (DOI) and
                                    register it with CrossRef, enhancing its discoverability and citation potential.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="d-flex gap-3 justify-content-center">
                    <a href="{{ url('/journals') }}" class="btn btn-light btn-blue">Find Your Journals</a>
                    <a href="{{ url('/submit-your-article') }}" class="btn btn-light btn-blue">Submit your
                        Article</a>
                </div>
            </div>
        </div>
    </section>
    <section class="sec_5">
        <div class="row">
            <div class="col-md-12">
                <div class="sec_5_rightbar">
                    <div class="container">
                        <div class="sec_5_rightbar_content">

                            <h2 class="text-uppercase white_text mb-4">
                                What Can Guinness Press Do?
                            </h2>
                            <h4 class="text-uppercase white_text cocogoose_light text-white mb-4">
                                Our journals
                            </h4>
                            <p class="white_text poppins_fonts mb-4">
                                Through peer-reviewed articles, editorials, and other scholarly content, our journals
                                contribute to the advancement of knowledge and the promotion of academic excellence
                                worldwide.
                            </p>
                            <h4 class="text-uppercase white_text cocogoose_light text-white mb-4">
                                Why choose us?
                            </h4>
                            <p class="white_text poppins_fonts mb-4">
                                Think of us as your go-to online library for accessing thought-provoking content that
                                expands your knowledge and understanding. We curate and publish academic papers written by
                                experts in various fields, aiming to foster a culture of learning and discovery.
                            </p>
                            <div class="btn-group">
                                <a href="{{ url('/journals') }}" class="btn btn-light btn-blue">Find Your Journals</a>
                                <a href="{{ url('/submit-your-article') }}" class="btn btn-light btn-blue">Submit your
                                    Article</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
