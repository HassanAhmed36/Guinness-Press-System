@extends('user.layouts.template')
@section('title', 'Guinness Press: Peer-Reviewed Journals for Research Papers')
@section('keywords', 'peer reviewed journals, peer reviewed academic journal, journals to publish research papers')
@section('description',
    'Discover trusted peer-reviewed academic journals at Guinness Press. Submit your research for
    scholarly recognition. Join us in advancing knowledge.')
@section('banner')
    <section class="main_banner" style="position: relative;">
        <div style="position: relative; width: 100%; height: 85vh; overflow: hidden;">
            <video src="{{ asset('main-section.mp4') }}" autoplay loop muted
                style="width: 100%; height: 100%; object-fit: cover; filter: brightness(75%) contrast(120%) sepia(10%);"></video>
        </div>
        <div class="container position-absolute top-50 start-50 translate-middle" style="z-index: 1;">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_content white_text">
                        <h3 class="cocogoose_light mb-4 fs-4 fw-bold">
                            Guinness Press
                        </h3>
                        <h1 class="cocogoose_light mb-4">
                            A Distinguished Publisher of Academic Journals
                        </h1>
                        <p class="fs-5">Dedicated to disseminating high-quality, open-access scholarly
                            articles.</p>

                        <p class="poppins_fonts mb-4">
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
    <section class="">
        <div class="col-10 mx-auto mt-5 " style="z-index: 0">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec_6_header sec_4_content mb-5">
                        <h2 class="cocogoose_light text-uppercase text-dark fs-2">
                            OPEN ACCESS PEER REVIEWED JOURNALS LIST
                        </h2>
                        <p class="poppins_fonts text-dark fw-bold fs-5">Trending journal</p>
                    </div>
                </div>
            </div>
            <br>
            <style>
                @media screen and (min-width: 1300px) and (max-width: 1600px) {
                    .jounal-heading {
                        font-size: 15px !important;
                        font-weight: 500 !important
                    }

                    .jounal-para {
                        font-size: 12px !important;
                    }
                }

                @media screen and (min-width: 1024px) and (max-width: 1285px) {
                    .jounal-heading {
                        font-size: 14px !important;
                        font-weight: 600 !important
                    }

                    .jounal-para {
                        font-size: 10px !important;
                    }

                    .issn-no {
                        font-size: 10px !important;
                    }

                    .journal-image {
                        height: 25vh
                    }
                }
                
                @media screen and (min-width: 1285px) and (max-width: 1301px) {
                    .jounal-heading {
                        font-size: 14px !important;
                        font-weight: 600 !important
                    }

                    .jounal-para {
                        font-size: 10px !important;
                    }

                    .issn-no {
                        font-size: 10px !important;
                    }

                    .journal-image {
                        height: 30vh
                    }
                }
                
                @media screen and (min-width: 539px) and (max-width: 541px) {
                                    .journal-image {
                                        height: 32vh !important;
                                    }
                }

                @media screen and (min-width:886px) and (max-width: 1000px) {
                    .jounal-heading {
                        font-size: 14px !important;
                        font-weight: 600 !important
                    }

                    .jounal-para {
                        font-size: 10px !important;
                    }

                    .issn-no {
                        font-size: 10px !important;
                    }

                    .journal-image {
                        height: 15.5vh !important;
                    }
                }
                
                @media screen and (min-width:1000px) and (max-width: 1024px) {
                    .journal-image {
                        height: 25vh !important;
                    }
                }
                
                @media screen and (min-width:748px) and (max-width: 886px) {
                    .jounal-heading {
                        font-size: 14px !important;
                        font-weight: 600 !important
                    }

                    .jounal-para {
                        font-size: 10px !important;
                    }

                    .issn-no {
                        font-size: 10px !important;
                    }

                    .journal-image {
                        height: 16vh !important;
                    }
                    
                    a.btn.btn-light.btn-blue {
                        background: #184888;
                        color: #FFF;
                        font-family: Poppins;
                        font-size: 13px;
                        font-style: normal;
                        font-weight: 500;
                        line-height: 19.5px;
                        border-radius: 5px;
                        background: #184888;
                        border-top-right-radius: 5px !important;
                        border-bottom-right-radius: 5px !important;
                        border: none;
                        padding: 10px 20px;
                        margin: 2px 6px;
                        color: #FFF;
                        font-family: Poppins;
                        font-size: 14px;
                        font-style: normal;
                        font-weight: 500;
                        line-height: 13.5px;
                        border-radius: 5px;
                        background: #184888;
                        border-top-right-radius: 5px !important;
                        border-bottom-right-radius: 5px !important;
                        border: none;
                        padding: 10px 20px;
                        margin: 2px 6px;
                    }
                }
                
                @media screen and (min-width:748px) and (max-width: 770px) {
                    .jounal-heading {
                        font-size: 14px !important;
                        font-weight: 600 !important
                    }

                    .jounal-para {
                        font-size: 10px !important;
                    }

                    .issn-no {
                        font-size: 10px !important;
                    }

                    .journal-image {
                        height: 19vh !important;
                    }
                    
                    a.btn.btn-light.btn-blue {
                        background: #184888;
                        color: #FFF;
                        font-family: Poppins;
                        font-size: 13px;
                        font-style: normal;
                        font-weight: 500;
                        line-height: 19.5px;
                        border-radius: 5px;
                        background: #184888;
                        border-top-right-radius: 5px !important;
                        border-bottom-right-radius: 5px !important;
                        border: none;
                        padding: 10px 20px;
                        margin: 2px 6px;
                        color: #FFF;
                        font-family: Poppins;
                        font-size: 14px;
                        font-style: normal;
                        font-weight: 500;
                        line-height: 13.5px;
                        border-radius: 5px;
                        background: #184888;
                        border-top-right-radius: 5px !important;
                        border-bottom-right-radius: 5px !important;
                        border: none;
                        padding: 10px 20px;
                        margin: 2px 6px;
                    }
                }
                
                @media screen and (min-width:450px) and (max-width: 748px) {
                    .jounal-heading {
                        font-size: 20px !important;
                        font-weight: 600 !important
                    }

                    .jounal-para {
                        font-size: 14px !important;
                    }

                    .issn-no {
                        font-size: 14px !important;
                    }

                    .journal-image {
                        height:18vh;
                        width: 100%;
                    }
                }

                @media screen and (max-width:450px) {
                    .jounal-heading {
                        font-size: 14px !important;
                        font-weight: 600 !important
                    }

                    .jounal-para {
                        font-size: 12px !important;
                    }

                    .issn-no {
                        font-size: 12px !important;
                    }

                    .journal-image {
                        height: 100%;
                        width: 100%;
                    }

                    .main-card-div {
                        flex-direction: column;
                        gap: 2rem
                    }

                    .first-col,
                    .second-col {
                        width: 100%;
                    }

                }
            </style>
         
            <div class="owl-carousel owl-theme" id="slider_2">
                @foreach ($journals as $journal)
                    <div class="item d-flex mx-2 card">
                        <div class="card-body d-flex align-items-center main-card-div"
                            style="min-height: 300px !important;">
                            <div class="col-5 me-3 first-col">
                                <a href="{{ url('/publication/journal', ['journal_name' => $journal->acronym]) }}">
                                    <img data-src="{{ asset($journal->image) }}"
                                        class="img-fluid rounded-2 journal-image lazyload">
                                </a>
                            </div>
                            <div class="col-lg-7 pe-2 second-col">
                                <h5 class="jounal-heading">{{ Str::limit($journal->name, 40) }}</h5>
                                <p class="issn-no">ISSN No: {{ $journal->issn_no }}</p>
                                <p style="margin-bottom: 10px;" class="jounal-para">
                                    {{ Str::limit($journal->description, 100) }}
                                </p>
                                <a href="{{ url('/publication/journal', ['journal_name' => $journal->acronym]) }}"
                                    class="btn btn-blue btn-light btn-sm p-2 px-3 ms-0">View Journal</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <section class="py-5 container">
        <div class="mb-4 py-5">
            <h2 class="text-center cocogoose_light fs-2 fw-bold">Indexed In</h2>

        </div>
        <div>
            <div class="d-flex flex-wrap gap-4 justify-content-center">
                @foreach ($indexing_bodies as $i)
                    <div class="item">
                        <a href="{{ $i->link }}">
                            <img data-src="{{ asset($i->image) }}" class="img-fluid lazyload"
                                style="height: 100px; width:100px; border-radius:50%; border:1px solid grey;"
                                alt="Indexing Body Logo">
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <section class="sec_3 pb-0 mb-0">
        <div class="row">
            <div class="col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12 py-5 row"
                style="background-image: url({{ asset('about.png') }});">
                <div class="col-10 mx-auto text-white py-5">
                    <h1 class="cocogoose_light fw-bold fs-2 mb-4">Recent Articles</h1>
                    <ul class="ps-3">
                        @foreach ($articles as $a)
                            <li class="py-4 fs-5 text-white" style="border-bottom: 2px dotted white; list-style: disc">
                                <div>
                                    <a href="{{ url('/publication/journal/' . $a->journal->acronym . '/' . $a->article_code) }}"
                                        class="text-white">
                                        <h5 class="poppins_fonts  fs-6">{{ $a->title }}</h5>
                                        <small class="fs-6 poppins_fonts mb-4">Journal Name: {{ $a->journal->acronym }}
                                            |
                                            Volume No: {{ $a->volume->name }} | Issue
                                            No: {{ $a->issue->name }}</small>

                                    </a>
                                </div>
                                <a href="{{ url('/publication/journal/' . $a->journal->acronym . '/' . $a->article_code) }}"
                                    class="text-white fs-6" style="text-decoration:underline">view article</a>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
            <div class="col-12 col-lg-5 max-auto col-md-12 col-xs-12 py-5">
                <div class="sec_3_content col-10 mx-auto">
                    <h3 class="text-uppercase cocogoose_light text-dark fw-semibold">
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
                                <div class="bar_2 ps-3 py-2">
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
                                <div class="bar_2 ps-3 py-2">
                                    <h3 class="cocogoose_light text-capitalize">
                                        EDITING SERVICES
                                    </h3>
                                    <p class="poppins_fonts">
                                        Our expert editors precisely review and enhance your manuscript for clarity,
                                        consistency, and adherence to academic standards.
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="btn-group">
                        <a href="{{ url('/journals') }}" class="btn btn-light btn-blue">Find Your Journals</a>
                        <a href="{{ url('/submit-your-article') }}" class="btn btn-light btn-blue">Submit your
                            Article</a>
                        <!--<button class="btn btn-light btn-blue">Submit your Article</button>-->
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
                                        <img src="{{ asset('assets/images/category/1.png') }}" class="img-fluid lazyload">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                        <a href="{{ url('/journals?category=business') }}" class="category-link">
                                            <h3 class="cocogoose_light text-capitalize text-dark">
                                                Business
                                            </h3>
                                        </a>
                                        <p class="poppins_fonts ">
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
                                        <img src="{{ asset('assets/images/category/2.png') }}"
                                            class="img-fluid lazyload">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                        <a href="{{ url('/journals?category=multidisciplinary') }}"
                                            class="category-link">
                                            <h3 class="cocogoose_light text-capitalize text-dark">
                                                Multidisciplinary
                                            </h3>
                                        </a>
                                        <p class="poppins_fonts ">
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
                                        <img src="{{ asset('assets/images/category/3.png') }}"
                                            class="img-fluid lazyload">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                        <a href="{{ url('/journals?category=social-sciences') }}" class="category-link">
                                            <h3 class="cocogoose_light text-capitalize text-dark">
                                                Social Sciences
                                            </h3>
                                        </a>
                                        <p class="poppins_fonts ">
                                            Through our social science books, you learn about the complexities of human
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
                                        <img src="{{ asset('assets/images/category/4.png') }}"
                                            class="img-fluid lazyload">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                        <a href="{{ url('/journals?category=engineering') }}" class="category-link">
                                            <h3 class="cocogoose_light text-capitalize text-dark">
                                                Engineering
                                            </h3>
                                        </a>
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
                                        <img src="{{ asset('assets/images/category/5.png') }}"
                                            class="img-fluid lazyload">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                        <a href="{{ url('/journals?category=sciences') }}" class="category-link">
                                            <h3 class="cocogoose_light text-capitalize text-dark">
                                                Sciences
                                            </h3>
                                        </a>
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
                                        <img src="{{ asset('assets/images/category/6.png') }}"
                                            class="img-fluid lazyload">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                        <a href="{{ url('/journals?category=humanities') }}" class="category-link">
                                            <h3 class="cocogoose_light text-capitalize text-dark">
                                                Humanities
                                            </h3>
                                        </a>
                                        <p class="poppins_fonts ">
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
                        <a href="{{ url('/submit-your-article') }}" class="btn btn-light btn-blue">Submit your
                            Article</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 container">
        <div class="d-flex justify-content-center py-5 flex-column">
            <div class="text-center d-flex align-items-center justify-content-center gap-3">
                <h2>Excellent</h2>
                <img src="https://cdn.worldvectorlogo.com/logos/stars-5-1.svg" alt="" class="text-left lazyload"
                    style="width:200px">
            </div>
            <a href="https://www.trustpilot.com/review/guinnesspress.org" class="text-dark" target="_blank">
                <div class=" mb-4  fs-2 d-flex align-items-center justify-content-center">
                    <div class="text-center">
                        <h4 class="poppins_fonts fs-5">
                            See All 9  Reviews on
                        </h4>
                    </div>
                    <div class="text-center">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHxDKwkYuCvS_2xfziOLC9PtFPin5cOTdi6A&s"
                            alt="" style="width: 150px; margin-bottom:15px;">
                    </div>
                </div>
            </a>
        </div>



        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card h-100 bg-light shadow mb-4 d-flex flex-column">
                    <div class="card-body container d-flex flex-column">
                        <div class="mb-4">
                            <div class="d-flex justify-content-between gap-4 align-items-center">
                                <img src="https://cdn.worldvectorlogo.com/logos/stars-5-1.svg" alt=""
                                    class="text-left lazyload" style="width:170px">
                                <h5 class="cocogoose_light fs-6">Morena Enage</h5>
                            </div>
                            <div>
                                <p>May 29, 2024</p>
                            </div>
                        </div>
                        <p class="poppins_fonts"><b>Nice</b>
                            <b>Fair and Friendly Editorial Board</b>
                            This publication caters academic and other publishable papers without descrimination or
                            prejudice. The Editorial Team willingly assists diverse authors to make their research be known
                            globally.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-light shadow mb-4 d-flex flex-column">
                    <div class="card-body container d-flex flex-column">
                        <div class="mb-4">
                            <div class="d-flex justify-content-between gap-4 align-items-center">
                                <img src="https://cdn.worldvectorlogo.com/logos/stars-5-1.svg" alt=""
                                    class="text-left lazyload" style="width:170px">
                                <h5 class="cocogoose_light fs-6">ALAN Nebrida</h5>
                            </div>
                            <div>
                                <p>Jan 23, 2024</p>
                            </div>
                        </div>
                        <p class="poppins_fonts"><b>Efficient, Professional, and Seamless: My Publication Experience with
                                Guinness Press</b>
                            I like how my work has been handled with professionalism and efficiency, from the first
                            submission
                            to the last proofreading. For me as an author, the process has been smooth because of the prompt
                            and
                            clear communication that has persisted throughout.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-light shadow mb-4 d-flex flex-column">
                    <div class="card-body container d-flex flex-column">
                        <div class="mb-4">
                            <div class="d-flex justify-content-between gap-4 align-items-center">
                                <img src="https://cdn.worldvectorlogo.com/logos/stars-5-1.svg" alt=""
                                    class="text-left lazyload" style="width:170px">
                                <h5 class="cocogoose_light fs-6">gary wills</h5>
                            </div>
                            <div>
                                <p>Jun 8, 2023</p>
                            </div>
                        </div>
                        <p class="poppins_fonts">
                            <b>Guinness Press is an amazing research…</b>
                            Guinness Press is an amazing research platform. I can publish my research paper in their journal
                            and
                            actually sell them for money.
                            The only issue I have with them is their support team took 1-2 days in replying to me.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-light shadow mb-4 d-flex flex-column">
                    <div class="card-body container d-flex flex-column">
                        <div class="mb-4">
                            <div class="d-flex justify-content-between gap-4 align-items-center">
                                <img src="https://cdn.worldvectorlogo.com/logos/stars-5-1.svg" alt=""
                                    class="text-left lazyload" style="width:170px">
                                <h5 class="cocogoose_light fs-6">Mercy Toni</h5>
                            </div>
                            <div>
                                <p>December 18, 2023</p>
                            </div>
                        </div>
                        <p class="poppins_fonts">
                            <b>Exceptional publishing experience.</b>
                            Exceptional publishing experience. The publisher demonstrated, professionalism and efficiency. A pleasure to work with. Highly recommend their services.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="https://www.trustpilot.com/review/guinnesspress.org"
                class="btn btn-light btn-blue mt-5 text-center" target="_blank">View more
                reviews</a>
        </div>


    </section>
    <style>
        #ul {
            list-style-type: none;
            /* Remove default list styles */
            padding-left: 15px;
            /* Remove default padding */
        }

        #ul li:before {
            content: ">";
            /* Insert ">" before each list item */
            margin-bottom: 17px;
        }
    </style>
    <div class="row">
        <div class="col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12 py-4">
            <div class="sec_3_content col-10 mx-auto">
                <h2 class="cocogoose_light fs-3 fw-bold ps-2 mb-4"><b>Join Our Community</b></h3>
                    <p class="poppins_fonts py-4 ps-2">Become part of a vibrant academic network. Connect with fellow
                        researchers, stay updated with the latest trends, and participate in stimulating discussions.</p>
                    <p class="poppins_fonts ps-2 fs-5 text-dark">Why Choose Guinness Press?</p>
                    <div class="listbar">
                        <ul id="ul">
                            <li class="px-2">
                                <div class="bar_2 ps-3">

                                    <p class="poppins_fonts">
                                        Wide Range of Journals: Explore our extensive portfolio of journals across various
                                        research areas.
                                    </p>
                                </div>
                            </li>
                            <li class="px-2">
                                <div class="bar_2 ps-3">
                                    <p class="poppins_fonts">
                                        Rigorous Peer Review: Benefit from our stringent peer review process, ensuring the
                                        credibility and quality of your work.
                                    </p>
                                </div>
                            </li>
                            <li class="px-2">
                                <div class="bar_2 ps-3">
                                    <p class="poppins_fonts">
                                        Global Reach: Enhance the visibility of your research through our international
                                        distribution network.
                                    </p>
                                </div>
                            </li>
                            <li class="px-2">
                                <div class="bar_2 ps-3">
                                    <p class="poppins_fonts">
                                        Supportive Community: Join our thriving community of scholars on Facebook and
                                        LinkedIn for networking, collaboration, and support.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
            </div>
        </div>
        <div
            class="col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12 py-4 position-relative d-flex flex-column justify-content-center  custom-background">
            <div class="background-overlay flip-horizontal" style="background-image: url({{ asset('comunity-bg.jpg') }});"></div>
            <div class="col-12 my-5 my-lg-3">
                <h2 class="cocogoose_light fs-3 fw-bold ps-2 mb-4 text-white ps-3" style="line-height:2.8rem ">Together, let's push the boundaries of
                    knowledge and make a lasting impact.</h2>
            </div>
            <br>
            <div class="pe-4 col-12 col-9 col-md-10 col-sm-12 mx-lg-4 mx-1 mx-md-3 mx-sm-1 py-0"
                style="margin-bottom:50px; background-color: #1877F2; border-radius:15px">
                <div class="row align-items-center ">
                    <div class="col-8  pe-2 row d-flex align-items-center">
                        <div class="col-4">
                            <img src="{{ asset('Facebook-logo.png') }}"
                                alt="" class="img-fluid lazyload" style="max-width:75%;">
                        </div>
                        <div class="col-8">
                            <h4 class="text-white fw-bold fs-1 poppins_fonts" style="">FaceBook</h4>
                        </div>
                    </div>
                    <div class="col-4 ">
                        <a href="https://www.facebook.com/groups/1011564960476786/" target="_blank">
                        <h4 class="text-white fw-semibold py-2 ps-4 " style="border-left: 2px solid white; ">Join Our
                            <br>Comunity +
                        </h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="pe-4 col-12 col-9 col-md-10 col-sm-12 mx-lg-4 mx-1 mx-md-3 mx-sm-1 py-0"
                style="margin-bottom:50px; background-color: #2697CF; border-radius:15px">
                <div class="row align-items-center ">
                    <div class="col-8 pe-2 row d-flex align-items-center">
                        <div class="col-4">
                            <img src="{{ asset('linkedin-logo.png') }}"
                                alt="" class="img-fluid lazyload" style="max-width:75%;">
                        </div>
                        <div class="col-8">
                            <h4 class="text-white fw-bold fs-1 poppins_fonts" style="">LinkedIn</h4>
                        </div>
                    </div>
                    <div class="col-4">
                        <a href="https://www.linkedin.com/groups/9859605/" target="_blank">
                        <h4 class="text-white fw-semibold py-2 ps-4 " style="border-left: 2px solid white; ">Join Our
                            <br>Comunity +
                        </h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .background-overlay {
                background-size: cover;
                background-position: center;
                position: relative;
                filter: brightness(40%) opacity(4);
                width: 100%;
                height: 100%;
                position: absolute;
                z-index: -1;
            }

            .flip-horizontal {
                transform: scaleX(-1);
            }
        </style>
    </div>
    <div class="row  mx-auto align-items-center position-relative" style="padding:80px 0px ">
        <div class="background-overlay-1" style="background-image: url({{ asset('email-bg.jpg') }})"></div>
        <div class="col-lg-10 col-12 row mx-auto align-items-center gap-lg-0 gap-3 gap-sm-0 gap-md-0">
            <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                <div class="mb-5">
                    <h3 class="my-4 cocogoose_light fs-2 fw-bold">Suscribe Our News Letter!</h3>
                    <p class="my-4 poppins_fonts">
                        Don’t miss out on the opportunity to be a part of the Guinness Press family. Subscribe to our newsletter today and stay at the forefront of academic excellence.
                    </p>
                </div>
                <form action="/subscribe-email" method="post">
                    @csrf
                    <div class="d-flex align-items-center">
                        <input type="text" class="form-control" placeholder="Enter your email" name="email"
                            required><button class="btn btn-light btn-blue" style="submit">Send</button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 text-center">
                <img src="https://img.freepik.com/premium-vector/illustration-vector-graphic-cartoon-character-email-marketing_516790-626.jpg"
                    alt="" class="img-fluid lazyload">
            </div>
        </div>
        <style>
            .background-overlay-1 {
                background-size: cover;
                background-position: center;
                position: absolute;
                width: 100%;
                height: 100%;
                z-index: -1;
                opacity: 0.05;
                background-color: rgba(255, 255, 255, 0.6);
            }
        </style>
    </div>
@endsection
