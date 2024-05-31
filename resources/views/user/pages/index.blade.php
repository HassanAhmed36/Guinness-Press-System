@extends('user.layouts.template')
@section('title', 'Guinness Press: Peer-Reviewed Journals for Research Papers')
@section('keywords', 'peer reviewed journals, peer reviewed academic journal, journals to publish research papers')
@section('description',
    'Discover trusted peer-reviewed academic journals at Guinness Press. Submit your research for
    scholarly recognition. Join us in advancing knowledge.')
@section('banner')
    <section class="main_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_content white_text">
                        <h3 class="cocogoose_light">
                            Guinness Press
                        </h3>
                        <h1 class="cocogoose_light">
                            A Distinguished Publisher of Academic Journals
                            <span>Dedicated to disseminating high-quality, open-access scholarly articles.</span>
                        </h1>
                        <p class="poppins_fonts">
                            Founded to nurture intellectual curiosity and advance academic excellence, Guinness Press
                            provides a platform for researchers, scholars, and academics to share their insights and
                            discoveries with the global community.
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
                <div class="col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <img src="./assets/images/women-banner.png" class="img-fluid women_img">
                </div>
                <div class="col-12 col-lg-6 col-md-12 col-xs-12">
                    <div class="sec_3_content">
                        <h3 class="text-uppercase cocogoose_light">
                            Our Mission
                        </h3>
                        <h2 class="cocogoose_light text-uppercase">
                            Ideas and Knowledge Across Various Academic Disciplines.
                        </h2>
                        <p class="poppins_fonts">
                            Our driving forces are a steadfast commitment to academic integrity, inclusivity, and
                            accessibility. Through our open-access publishing model, we strive to dismantle barriers to
                            information, ensuring that state-of-the-art research is accessible to all.
                        </p>
                        <div class="listbar">
                            <ul>
                                <li>
                                    <div class="bar_1">
                                        <div class="blue_box">
                                            <h4 class="poppins_fonts">
                                                01
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="bar_2">
                                        <h3 class="cocogoose_light text-capitalize">
                                            JOURNALS
                                        </h3>
                                        <p class="poppins_fonts">
                                            Each journal is meticulously curated to showcase cutting-edge research and
                                            foster intellectual discourse within specific fields of study.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="bar_1">
                                        <div class="blue_box">
                                            <h4 class="poppins_fonts">
                                                02
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="bar_2">
                                        <h3 class="cocogoose_light text-capitalize">
                                            EDITING SERVICES
                                        </h3>
                                        <p class="poppins_fonts">
                                            Our expert editors precisely review and enhance your manuscript for clarity,
                                            consistency, and adherence to academic standards.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="bar_1">
                                        <div class="blue_box">
                                            <h4 class="poppins_fonts">
                                                03
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="bar_2">
                                        <h3 class="cocogoose_light text-capitalize">
                                            BOOK PUBLISHING
                                        </h3>
                                        <p class="poppins_fonts">
                                            We work closely with eminent authors and researchers to facilitate peer review
                                            during the publication process with the goal of high-quality ebooks
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <a href="{{ url('/journals') }}" class="btn btn-light btn-blue">Find Your Journals</a>
                            <a href="{{ url('/submit-your-article') }}" class="btn btn-light btn-blue red-btn">Submit your
                                Article</a>
                            <!--<button class="btn btn-light btn-blue">Submit your Article</button>-->
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
                        <h3 class="cocogoose_light text-uppercase">
                            Subjects
                        </h3>
                        <h2 class="cocogoose_light text-uppercase">
                            Subject Areas Disciplines
                        </h2>
                        <p class="poppins_fonts">
                            Our main focus is to deliver high-quality research-based written documents at par with the best
                            journals in the respective fields.
                        </p>
                    </div>
                </div>
                <div class="sec_4_boxes">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="box_item box_item_2">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-3 box_img">
                                        <img src="{{ asset('assets/images/category/1.png') }}" class="img-fluid">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                        <h3 class="cocogoose_light text-capitalize">
                                            Business
                                        </h3>
                                        <p class="poppins_fonts">
                                            Our publications cover business, information technology, economics, and more.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="box_item box_item_2">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-3 box_img">
                                        <img src="{{ asset('assets/images/category/2.png') }}" class="img-fluid">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                        <h3 class="cocogoose_light text-capitalize">
                                            Multidisciplinary
                                        </h3>
                                        <p class="poppins_fonts">
                                            Our publications include clinical research, public health, and pharmaceutical
                                            sciences.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="box_item box_item_2">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-3 box_img">
                                        <img src="{{ asset('assets/images/category/3.png') }}" class="img-fluid">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                        <h3 class="cocogoose_light text-capitalize">
                                            Social Sciences
                                        </h3>
                                        <p class="poppins_fonts">
                                            Through our social science books, you may learn about the complexities of human
                                            behavior and society.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="box_item box_item_2">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-3 box_img">
                                        <img src="{{ asset('assets/images/category/3.png') }}" class="img-fluid">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                        <h3 class="cocogoose_light text-capitalize">
                                            Engineering
                                        </h3>
                                        <p class="poppins_fonts">
                                            Our engineering publications cover a diverse array of disciplines.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="box_item box_item_2">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-3 box_img">
                                        <img src="{{ asset('assets/images/category/3.png') }}" class="img-fluid">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                        <h3 class="cocogoose_light text-capitalize">
                                            Science
                                        </h3>
                                        <p class="poppins_fonts">
                                            Our science publications delve into physics, chemistry, biology, astronomy, and
                                            beyond.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="box_item box_item_2">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-3 box_img">
                                        <img src="{{ asset('assets/images/category/6.png') }}" class="img-fluid">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                        <h3 class="cocogoose_light text-capitalize">
                                            Humanities
                                        </h3>
                                        <p class="poppins_fonts">
                                            Learn with our thought-provoking essays, historical explorations, and creative
                                            expressions.
                                        </p>
                                    </div>
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
    <section class="sec_5">
        <div class="row">
            <div class="col-md-5">
                <div class="sec_5_leftbar">
                    <div class="container">
                        <div class="sec_5_leftbar_content">
                            <img src="./assets/images/logo-light.png" class="img-fluid">
                            <p class="poppins_fonts white_text">
                                Guinness Press, an open-access academic publisher, dedicated to advancing research to a
                                global scale. We work deliberating to be a friendly bridge to share important discoveries
                                with the world.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="sec_5_rightbar">
                    <div class="container">
                        <div class="sec_5_rightbar_content">

                            <h2 class="text-uppercase white_text">
                                CONTENT AND RESEARCH PLATFORM
                            </h2>
                            <p class="white_text poppins_fonts">
                                At Guinness Press, our process is straightforward and filled with personal attention,
                                ensuring your academic work gets the recognition it deserves. From the initial submission to
                                the final publication, we're here to guide you every step of the way.
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
    <section class="sec_6">
        <div class="row">
            <div class="col-md-12">
                <div class="sec_6_header sec_4_content">
                    <h3 class="cocogoose_light text-uppercase">
                        OUR WORK
                    </h3>
                    <h2 class="cocogoose_light text-uppercase">
                        JOURNALS PUBlished
                    </h2>
                    <p class="poppins_fonts">Guinness Press Offers Various Academic Journals Tailored To Distinct
                        Disciplines And Subfields. These Platforms Allow Researchers To Present Their Work And Interact With
                        The Wider Academic Audience.</p>
                </div>
            </div>
            <div class="owl-carousel" id="slider_2">
                @foreach ($journals as $journal)
                    <div class="item">
                        <a href="{{ url('/publication/journal', ['journal_name' => $journal->acronym]) }}">
                            <img src="{{ asset($journal->image) }}" class="img-fluid">
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="btn-group row_btn">
                <a href="{{ url('/journals') }}" class="btn btn-light btn-blue">Find Your Journals</a>
                <a href="{{ url('/submit-your-article') }}" class="btn btn-light btn-blue red-btn">Submit your
                    Article</a>
            </div>
        </div>
    </section>
@endsection
