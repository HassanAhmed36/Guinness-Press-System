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
                                <h5 class="text-uppercase">
                                    ISSN NO : {{ $journal->issn_no }}
                                </h5>
                            </div>
                            <div class="right_access">
                                <img src="https://www.guinnesspress.org/bkp/assets/img/open-access-logo.png"
                                    class="img-fluid" />
                            </div>
                        </div>
                        <p class="my-4">
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
@endsection
@section('body')
    <section class="search-journal-filters search-results explore_jarticles_sec issues_articles_sec">
        <div class="container-fluid">
            <div class="container">
                <div class="row search-titles issues_row_titles">
                    <!--<div class="col-md-1 col-xl-1 col-sm-12"></div>-->
                    <div class="col-md-11 col-xl-11 col-sm-12 m-xl-auto m-md-auto">
                        <h3 class="explore-h mb-3">
                            @php
                                $volume_number = in_array($issue->issue_id, ['1001', '1002']);
                            @endphp
                            Volume {{ $volume_number ? 1 : 2 }} , Issue {{ $issue->name }}
                        </h3>
                        <!--<h1 class="explore-h">Explore articles</h1>-->
                    </div>
                    <!--<div class="col-md-5 col-xl-4 col-sm-12">-->
                    <!--</div>-->
                </div>
                <div class="row search-journal-row">
                    <!--<div class="col-md-1 col-xl-1 col-sm-12 m-xl-auto m-md-auto"></div>-->
                    <div class="col-md-11 col-xl-11 col-sm-12 m-xl-auto m-md-auto">
                        @if (count($articles->toArray()) !== 0)
                            <ul class="search-results explore-list my-4">
                                @foreach ($articles as $a)
                                    <li>
                                        <div class="article-titles">
                                            <h2><a
                                                    href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/{{ $a->article_code }}">
                                                    {{ $a->title }}</a></h2>

                                            <p>Author(s):
                                                @foreach ($a->author as $author)
                                                    <span class="">{{ $author->first_name }}</span>,
                                                @endforeach
                                            </p>
                                            <div class="article-btn">
                                                <p>Article | Published Online: {{ $a->published_date }} | Pages
                                                    [{{ $a->first_page }} - {{ $a->last_page }}]</p>
                                                <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/{{ $a->article_code }}"
                                                    class="btn1">Read More</a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <h5 class="my-5">No Articles</h5>
                        @endif
                    </div>
                </div>
            </div>
    </section>
@endsection
