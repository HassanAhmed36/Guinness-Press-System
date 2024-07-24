@extends('user.layouts.template')
@section('title', 'Explore Guinness Press Journals: Leading Open Access Research Journals')
@section('keywords',
    'Open access research journals,Guinness Press journals,Online academic journals,Online scholarly
    journals')
@section('description',
    'Discover a wealth of online scholarly journals at Guinness Press. Explore our esteemed
    collection of open access research journals for cutting-edge academic insights.')

@section('banner')
    <section class="main_banner inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_content white_text">
                        <h1 class="cocogoose_light">
                            Search Journals and Articles
                        </h1>
                        <p class="poppins_fonts">
                            Delve Into Our Comprehensive Array of Scholarly, Peer-Reviewed, Open Access articles at Guinness
                            Press. Guinness Press provides a platform for researchers, scholars, and academics to share
                            their research and Insights with the global community.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('body')
    <section class="journal_sections">
        <div class="container">
            <div class="row">
                <div class="col-md-4 filter_box">
                    <h3>INDEXING BODIES</h3>
                    <div class="">
                        <ul class="row mt-5">
                            @foreach ($indexing_bodies as $i)
                                <li class="mb-2 col-lg-4">
                                    <a href="{{ $i->link }}"> <img src="{{ asset($i->image) }}" class="img-fluid"
                                            alt="Index Body Image"
                                            style="height: 100px; width:100px; border-radius:50%; border:1px solid lightgrey;">
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="journal_list">
                        <ul class="nav nav-pills mb-3 pills_class" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#aims" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Journals</button>
                            </li>

                        </ul>
                        <div class="tab-content mt-3 ">
                            <div class="tab-pane fade show active" id="aims" role="tabpanel"
                                aria-labelledby="aims-tab">
                                <div class="journals_all_list">
                                    @foreach ($journals as $j)
                                        <div class="journal_box {{ $loop->odd ? 'striped' : '' }}">
                                            <ul>
                                                <li>
                                                    <a
                                                        href="{{ url('/publication/journal', ['journal_name' => $j->acronym]) }}">
                                                        <img src="{{ asset($j->image) }}" class="img-fluid" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="anchor_details"
                                                        href="{{ url('/publication/journal', ['journal_name' => $j->acronym]) }}">
                                                        <h3 class="cocogoose_light">{{ $j->name }}</h3>
                                                        <div class="access_type">
                                                            <div class="left_access">
                                                                <h5 class="text-uppercase">
                                                                    ISSN NO : {{ $j->issn_no }}
                                                                </h5>
                                                            </div>
                                                            <div class="right_access right_access_2">
                                                                <img src="https://www.guinnesspress.org/bkp/assets/img/open-access-logo.png"
                                                                    class="img-fluid" />
                                                            </div>
                                                        </div>
                                                        <p class="text-black">
                                                            {{ $j->description }}
                                                        </p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
