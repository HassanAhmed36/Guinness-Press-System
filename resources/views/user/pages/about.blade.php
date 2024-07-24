@extends('user.layouts.template')
@section('title', 'About Guinness Press: Your Premier Academic Publisher')
@section('keywords', 'academic publisher, open access journals, publish in open access')
@section('description',
    'Learn about Guinness Press, dedicated to open access journals. Publish your research in open
    access formats for global accessibility and impact.')

@section('banner')
    <section class="main_banner inner_banner py-5" style="background-image: url({{ asset('about.png') }}); min-height:60vh;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_content white_text">
                        <h3 class="cocogoose_light mb-4">
                            ABOUT US
                        </h3>
                        <h1 class="cocogoose_light mb-4">
                            ABOUT GUINNESS PRESS
                        </h1>
                        <p class="poppins_fonts">
                            Together, let us contribute to the collective pursuit of knowledge and make a meaningful impact
                            on the world through the dissemination of high-quality research and scholarly insights.
                        </p>
                    </div>
                    <div class="text-white text-center">
                        <h1 class="fw-bold mb-4 cocogoose_light fs-2" style="text-transform: capitalize">What about the
                            Guinness Press</h1>
                        <p class="mb-5 poppins_fonts">At Guinness Press, we are committed to the advancement of knowledge
                            through the publication of high-quality, peer-reviewed open access journals. Our mission is to
                            support researchers and scholars by providing a platform that ensures their work reaches a
                            global audience without barriers. Our diverse range of publications covers multiple disciplines,
                            fostering an inclusive community for knowledge exchange and innovation.</p>
                        <p class="mb-5 poppins_fonts">Our commitment to open access ensures that everyone, regardless of
                            their location or institutional affiliation, can access and benefit from the latest research
                            findings. We believe that by making knowledge freely available, we contribute to the collective
                            growth of the academic community and society at large.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('body')
    <section class="py-5 container">
        <div class="row">
            <div class="col-12 col-lg-6 ">
                <h1 class="cocogoose_light mb-5 fs-2 fw-bold">Our Vision and Mission</h1>
                <p class="mb-5 poppins_fonts">At Guinness Press, our vision is to lead the way in academic publishing by
                    promoting open access to high-quality research. We aim to empower researchers by providing them with a
                    platform that supports the dissemination of their work to a global audience. Our mission is to
                    facilitate the exchange of knowledge across disciplines and to foster innovation and collaboration
                    within the academic community.</p>
                <p class="mb-5 poppins_fonts">We strive to uphold the highest standards of integrity, transparency, and
                    excellence in everything we do. Our dedicated team works tirelessly to ensure that each publication
                    meets rigorous quality criteria and contributes meaningfully to the body of academic knowledge.</p>
            </div>
            <div class="col-lg-1 col-0"></div>
            <div class="col-12 col-lg-5">
                <div class="">
                    <svg width="407" height="56" viewBox="0 0 407 56" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="114" y="22.9193" width="293" height="11" rx="5.5" fill="#154986" />
                        <path
                            d="M24.752 56.0046H0L23.296 0.919312H39.0693L24.752 56.0046ZM64.064 56.0046H39.312L62.608 0.919312H78.3813L64.064 56.0046Z"
                            fill="#154986" />
                    </svg>
                    <p class="fs-4 fw-semibold text-center my-5">
                        "Empowering research and fostering innovation through open access publishing."
                    </p>
                    <svg width="407" height="56" viewBox="0 0 407 56" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect width="293" height="11" rx="5.5" transform="matrix(-1 0 0 1 293 22.9193)"
                            fill="#154986" />
                        <path
                            d="M382.248 56.0046H407L383.704 0.919312H367.931L382.248 56.0046ZM342.936 56.0046H367.688L344.392 0.919312H328.619L342.936 56.0046Z"
                            fill="#154986" />
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <section class="sec_4" style="background-image: url('{{ asset('about.png') }}'); min-height: 60vh; background-repeat: no-repeat; background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec_4_content">
                        <h2 class="cocogoose_light text-uppercase text-white">
                            What Sets Us Apart
                        </h2>
                        <p class="poppins_fonts text-white">
                            We prioritize quality, integrity, and accessibility in all our publications, fostering a global
                            community of knowledge exchange and collaboration.
                        </p>
                    </div>
                </div>
                <style>
                    .box_item.box_item_3:hover {
                        background-color: white !important;
                        color: #184888 !important;
                    }
                </style>
                <div class="sec_4_boxes">
                    <div class="row">
                        <div class="col-md-3 overflow-hidden">
                            <div class="box_item box_item_3"
                                style="background: transparent; color:white; border:1px solid white">
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
                                        science to humanities and the arts to technology, Guinness Press is a home for a
                                        wide range of academic disciplines.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 overflow-hidden">
                            <div class="box_item box_item_3"
                                style="background: transparent; color:white; border:1px solid white">
                                <div class="box_header">
                                    <div class="box_icon">
                                        <img src="{{ asset('assets/images/about/1.png') }}" class="img-fluid" />
                                    </div>
                                    <div class="box_content">
                                        <h3>Peer-Reviewed Excellence</h3>
                                    </div>
                                </div>
                                <div class="box_body mb-4">
                                    <p>
                                        Every article published by Guinness Press undergoes a rigorous peer-review process,
                                        ensuring the highest standards of quality and credibility. Our esteemed panel of
                                        expert reviewers assesses submissions based on originality, significance, and
                                        methodological.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 overflow-hidden">
                            <div class="box_item box_item_3"
                                style="background: transparent; color:white; border:1px solid white">
                                <div class="box_header">
                                    <div class="box_icon">
                                        <img src="{{ asset('assets/images/about/2.png') }}" class="img-fluid" />
                                    </div>
                                    <div class="box_content">
                                        <h3>Open Access Commitment</h3>
                                    </div>
                                </div>
                                <div class="box_body">
                                    <p>
                                        We firmly believe that knowledge should be freely accessible to all, regardless of
                                        geographical location or institutional affiliation. All our articles are accessible
                                        to anyone with an internet connection, promoting global inclusivity and the
                                        democratization of knowledge.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 overflow-hidden">
                            <div class="box_item box_item_3"
                                style="background: transparent; color:white; border:1px solid white">
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
                                        personalized guidance and assistance to ensure that every author's work is
                                        presented in the best possible light.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <a href="{{ url('/journals') }}" class="btn btn-light mx-2">Find Your Journal</a>
                        <a href="{{ url('/submit-your-article') }}" class="btn btn-light mx-2">Submit Your Paper</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
