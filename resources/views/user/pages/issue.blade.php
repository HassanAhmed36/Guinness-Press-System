@extends('user.layouts.template')
{{-- @section('title', $title) --}}
{{-- @section('keywords', $keywords) --}}
{{-- @section('description', $description) --}}
@section('banner')
    <section class="detail_bread_crumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bread_crumb">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="journal_detail_section">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-12">
                    <img src="{{ asset($journal->image) }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-10 col-sm-12">
                    <div class="details_content">
                        <h3 class="cocogoose_light text-uppercase">
                            {{ $journal->name }}
                        </h3>
                        <div class="access_type">
                            <div class="left_access">
                                <h5 class="text-uppercase my-2">
                                    ISSN NO : {{ $journal->issn_no }}
                                </h5>
                            </div>
                            <div class="right_access">
                                <img src="https://www.guinnesspress.org/bkp/assets/img/open-access-logo.png"
                                    class="img-fluid" />
                            </div>
                        </div>
                        <p class="my-3">
                            {{ $journal->description }}
                        </p>
                    </div>
                    <div class="btn-group">
                        <a href="javascript:;" data-fancybox="" data-src="#submitArticlePopup"
                            class="btn btn-light btn-blue red-btn">Submit Your Article</a>
                        <a href="{{ url('/journal', ['journal_name' => $journal->acronym, 'journal_p' => 'editorial-board']) }}"
                            class="btn btn-light btn-blue">Editorial Board</a>
                    </div>
                </div>
                <div class="col-6 col-lg-2">

                    <!--<a href="{{ url('/submit-articles') }}" class="btn btn-light btn-blue">Submit your Article</a>-->
                </div>
                <div class="col-6 col-lg-2">

                </div>
            </div>
            <div class="row">


            </div>
        </div>
    </section>
    <section class="slider_bar">
        <div class="slider_bar_header">
            <h3>INDEXING BODIES</h3>
        </div>
        <div class="owl-carousel" id="slider_1">
            <div class="item">
                <a href="https://www.doi.org/">
                    <img src="https://www.guinnesspress.org/lp//assets/images/index_1.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://www.researchgate.net/">
                    <img src="https://www.guinnesspress.org/lp//assets/images/index_2.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://www.crossref.org/">
                    <img src="https://www.guinnesspress.org/lp//assets/images/index_3.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://www.dimensions.ai/">
                    <img src="https://www.guinnesspress.org/lp//assets/images/index_4.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://www.academia.edu/">
                    <img src="https://www.guinnesspress.org/lp//assets/images/index_5.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://www.mendeley.com/">
                    <img src="https://www.guinnesspress.org/lp//assets/images/index_6.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://scholar.google.com/">
                    <img src="https://www.guinnesspress.org/lp//assets/images/index_7.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://www.crossref.org/">
                    <img src="https://www.guinnesspress.org/lp//assets/images/index_8.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://jgateplus.com/home/">
                    <img src="https://www.guinnesspress.org/lp//assets/images/index_9.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://europub.co.uk/">
                    <img src="https://www.guinnesspress.org/lp//assets/images/index_10.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://www.semanticscholar.org/">
                    <img src="https://www.guinnesspress.org/lp//assets/images/index_11.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://www.lens.org/">
                    <img src="https://www.guinnesspress.org/lp//assets/images/index_12.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://www.scilit.net/">
                    <img src="https://www.guinnesspress.org/lp//assets/images/index_13.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://discovery.researcher.life/">
                    <img src="https://www.guinnesspress.org/lp//assets/images/index_14.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://ouci.dntb.gov.ua/en/">
                    <img src="https://www.guinnesspress.org/lp//assets/images/index_15.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://www.connectedpapers.com/">
                    <img src="https://www.guinnesspress.org/lp//assets/images/index_16.png" class="img-fluid">
                </a>
            </div>

        </div>
    </section>
@endsection
@section('body')
    <section class="search-journal-filters search-results explore_jarticles_sec issues_articles_sec">
        <div class="container-fluid">
            <div class="container">
                <div class="row search-titles issues_row_titles">
                    <!--<div class="col-md-1 col-xl-1 col-sm-12"></div>-->
                    <div class="col-md-11 col-xl-11 col-sm-12 m-xl-auto m-md-auto">
                        <h3 class="explore-h">Volume @if (
                            $journal->volume->first()->issue->first()->issue_id == 2001 ||
                                $journal->volume->first()->issue->first()->issue_id == 2002)
                                2
                            @else
                                1
                            @endif @isset($year)
                            {!! $year !!}
                            @endisset, Issue @if ($journal->volume->first()->issue->first()->issue_id == 1001)
                                1
                            @elseif($journal->volume->first()->issue->first()->issue_id == 1002)
                                2
                            @elseif($journal->volume->first()->issue->first()->issue_id == 2001)
                                1
                            @elseif($journal->volume->first()->issue->first()->issue_id == 2002)
                                2
                            @endif
                        </h3>
                        <!--<h1 class="explore-h">Explore articles</h1>-->
                    </div>
                    <!--<div class="col-md-5 col-xl-4 col-sm-12">-->
                    <!--</div>-->
                </div>
                <div class="row search-journal-row">
                    <!--<div class="col-md-1 col-xl-1 col-sm-12 m-xl-auto m-md-auto"></div>-->
                    <div class="col-md-11 col-xl-11 col-sm-12 m-xl-auto m-md-auto">
                        @forelse  ($articles as $a)
                            <ul class="search-results explore-list">
                                <li>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $a->journal->acronym }}/{{ $a->article_code }}">{{ $a->title }}</a>
                                        </h2>
                                        <p>Author(s): @foreach ($a->article_details->authors as $author)
                                                {{ $author['firstname'] }}
                                                {{ $author['middlename'] ?? '' }}
                                                {{ $author['lastname'] ?? '' }}
                                                @if (!$loop->last)
                                                  |   
                                                @endif
                                            @endforeach
                                        </p>
                                        <div class="article-btn">
                                            <p>Article | Published Online:
                                                {{ $a->published_date }} | Pages [{{ $a->first_page }} -
                                                {{ $a->last_page }}]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $a->journal->acronym }}/{{ $a->article_code }}"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        @empty
                            <h5>No Articles</h5>
                        @endforelse
                    </div>
                </div>
            </div>
    </section>
@endsection
