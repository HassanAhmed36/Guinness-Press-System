@extends('user.layouts.article-template')
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
                <div class="col-md-2">
                    <img src="{{ asset($journal->image) }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-10">
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
                            {!! $journal->description !!}
                        </p>
                    </div>
                    <div class="btn-group">
                        <a href="{{ url('/submit-your-article') }}" class="btn btn-light btn-blue red-btn ">Submit Your
                            Article</a>
                        <a href="{{ url('/journal', ['journal_name' => $journal->acronym, 'journal_p' => 'editorial-board']) }}"
                            class="btn btn-light btn-blue">Editorial Board</a>
                    </div>
                </div>
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
                    <img src="https://www.guinnesspress.org/lp/assets/images/index_1.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://www.researchgate.net/">
                    <img src="https://www.guinnesspress.org/lp/assets/images/index_2.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://www.crossref.org/">
                    <img src="https://www.guinnesspress.org/lp/assets/images/index_3.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://www.dimensions.ai/">
                    <img src="https://www.guinnesspress.org/lp/assets/images/index_4.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://www.academia.edu/">
                    <img src="https://www.guinnesspress.org/lp/assets/images/index_5.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://www.mendeley.com/">
                    <img src="https://www.guinnesspress.org/lp/assets/images/index_6.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://scholar.google.com/">
                    <img src="https://www.guinnesspress.org/lp/assets/images/index_7.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://www.crossref.org/">
                    <img src="https://www.guinnesspress.org/lp/assets/images/index_8.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://jgateplus.com/home/">
                    <img src="https://www.guinnesspress.org/lp/assets/images/index_9.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://europub.co.uk/">
                    <img src="https://www.guinnesspress.org/lp/assets/images/index_10.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://www.semanticscholar.org/">
                    <img src="https://www.guinnesspress.org/lp/assets/images/index_11.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://www.lens.org/">
                    <img src="https://www.guinnesspress.org/lp/assets/images/index_12.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://www.scilit.net/">
                    <img src="https://www.guinnesspress.org/lp/assets/images/index_13.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://discovery.researcher.life/">
                    <img src="https://www.guinnesspress.org/lp/assets/images/index_14.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://ouci.dntb.gov.ua/en/">
                    <img src="https://www.guinnesspress.org/lp/assets/images/index_15.png" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://www.connectedpapers.com/">
                    <img src="https://www.guinnesspress.org/lp/assets/images/index_16.png" class="img-fluid">
                </a>
            </div>

        </div>
    </section>
@endsection
@section('body')
    <section class="search-journal-filters journal-overview article-overview aos-init aos-animate" data-aos="zoom-in">
        <div class="container-fluid">
            <div class="container">
                <div class="row search-titles article-title">
                    <div class="col-md-11 col-xl-11 col-sm-12 m-xl-auto m-md-auto">
                        <div class="article-row">
                            <div class="journal-details">
                                <div class="row">
                                    <div class="col-md-2 col-xl-2 col-sm-12">

                                        <ul class="article-views">

                                            <li class="article-corres-author">
                                                <h6>{{ $article->views_count }}</h6>
                                                <span>Views</span>
                                            </li>
                                            <li class="article-corres-author">
                                                @php
                                                    $response = Http::get(
                                                        'https://api.crossref.org/works/10.59762/' .
                                                            $journal->acronym .
                                                            $journal->issn_no .
                                                            $article->volume->name .
                                                            $article->issue->name .
                                                            $article->timestamp,
                                                    );
                                                    $jsonData = $response->json();
                                                    $crossref_citations = $jsonData
                                                        ? $jsonData['message']['is-referenced-by-count']
                                                        : '0';

                                                @endphp
                                                <h6>{{ $crossref_citations }}</h6>
                                                <span>CrossRef citations to date</span>
                                            </li>
                                        </ul>


                                        <!-- Start of Dimensions  -->
                                        <span class="__dimensions_badge_embed__" data-doi="{{ $article->dio }}"
                                            data-style="small_circle" data-legend="hover-bottom"
                                            data-hide-zero-citations="false"></span>
                                        <script async src="https://badge.dimensions.ai/badge.js" charset="utf-8"></script>
                                        <!-- End of Dimensions -->
                                        <!-- Start Crossmark Snippet v2.0 -->
                                        <script src="https://crossmark-cdn.crossref.org/widget/v2.0/widget.js"></script>
                                        <a data-target="crossmark">
                                            <img src="https://crossmark-cdn.crossref.org/widget/v2.0/logos/CROSSMARK_Color_square.svg"
                                                width="70" loading="lazy" />
                                        </a>
                                        <!-- End Crossmark Snippet -->
                                    </div>
                                    <div class="col-md-5 col-xl-6 col-sm-12">
                                        <div class="article-sec1">
                                            {{-- <h3>{{ $article->article_type }}</h3> --}}
                                            <h1>{{ $article->title }}</h1>
                                            <ul class="article-authors">
                                                @foreach ($article->author as $author)
                                                    <li class="article-corres-author">
                                                        <a href="@if ($author->email != '') mailto: {{ $author->email }} @else javascript:; @endif "
                                                            class="author_name">
                                                            {{ $author->first_name }} {{ $author->last_name }} <sup>
                                                                {{ $loop->iteration }}
                                                                @if ($loop->iteration == 1)
                                                                    *
                                                                @endif
                                                            </sup>
                                                        </a>
                                                        <span class="orcid-link">
                                                            <a href="https://orcid.org/{{ $author->orcid_id }}"
                                                                style="-webkit-user-select: none;
                                                                    -webkit-touch-callout: none;
                                                                    -moz-user-select: none;
                                                                    -ms-user-select: none;
                                                                    user-select: none;"
                                                                oncontextmenu="return false;" target="_blank">
                                                            </a>
                                                        </span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                            <p class="author_bio">
                                                @foreach ($article->affiliation as $affiliation)
                                                    @if ($affiliation->name != '')
                                                        <sup>{{ $loop->iteration }}</sup> {{ $affiliation->name }}
                                                        {!! $loop->remaining ? '&nbsp;' . ' | ' . '&nbsp;' : '' !!}
                                                    @endif
                                                @endforeach
                                            </p>
                                            <div class="article_vol">
                                                <p>Volume {{ $article->volume->name }}</p>
                                                <p>Issue {{ $article->issue->name }}</p>
                                                @php
                                                    $totalPageNumber = $article->last_pages - $article->first_page + 1;
                                                @endphp
                                                <p>Page: [{{ $totalPageNumber }}]</p>
                                            </div>
                                            <div class="published_date">
                                                <p>Published Online: {{ $article->published_date }}</p>
                                            </div>
                                            {{-- <ul class="article-informations">
                                                <li class="article-citation">
                                                    DOI: &nbsp;
                                                    <a class="doi-link" href="https://doi.org/{{ $article->dio }}"
                                                        style="-webkit-user-select: none;
                                                            -webkit-touch-callout: none;
                                                            -moz-user-select: none;
                                                            -ms-user-select: none;
                                                            user-select: none;"
                                                        oncontextmenu="return false;" id="copyDoiToClipboard">
                                                        <!--<img src="{{ URL::asset('assets/img/official-article/doi.png') }}">-->
                                                        {{ $article->dio }}
                                                        <button class="copy-btn" id="copyButton" onclick="copydoi()"><i
                                                                class="far fa-copy"></i></button>
                                                </li>
                                            </ul>
                                            <div id="copieddoi-success" class="copied">
                                                <span></span>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xl-4 col-sm-12">
                                        <div class="article_filesbtn">
                                            <a href="{{ asset($article->file_path) }}" target="_blank">Download Full
                                                Article</a>
                                        </div>

                                        <div class="accessLogo">
                                            <i class="fa-solid fa-unlock"></i>
                                            <p id="logo-text">Open access</p>
                                        </div>

                                        <div class="creative_lisence">

                                            <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank">
                                                <img src="https://mirrors.creativecommons.org/presskit/buttons/88x31/png/by.png"
                                                    alt="Creative Commons" width="100" />
                                            </a>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="article-sec2 mt-4">
                                <div class="row">

                                    <div class="col-md-8 col-xl-8 col-sm-12 col_article_bordered">
                                        <ul class="nav nav-pills search-journal-nav-pills article-nav-pills">
                                            <li class="nav-item"> <a class="nav-link active" data-bs-toggle="pill"
                                                    href="#full-article" role="tab"
                                                    aria-controls="pills-full-article" aria-selected="true">Abstract</a>
                                            </li>
                                            <!--<li class="nav-item"> <a class="nav-link" data-bs-toggle="pill" href="#figures" role="tab" aria-controls="pills-figures" aria-selected="false">Figures &amp; data </a> </li>-->
                                            <li class="nav-item"> <a class="nav-link" data-bs-toggle="pill"
                                                    href="#references" role="tab" aria-controls="pills-references"
                                                    aria-selected="true"> References</a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-bs-toggle="pill"
                                                    href="#citations" role="tab" aria-controls="pills-citations"
                                                    aria-selected="false">Citations </a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-bs-toggle="pill"
                                                    href="#metrics" role="tab" aria-controls="pills-metrics"
                                                    aria-selected="false">Metrics </a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-bs-toggle="pill"
                                                    href="#copyrights_permissions" role="tab"
                                                    aria-controls="pills-permissions" aria-selected="false">Copyright
                                                    &amp; Permissions </a> </li>
                                        </ul>
                                        <div class="tab-content mt-3 aos-init aos-animate" data-aos="zoom-in">
                                            <div class="tab-pane fade show active" id="full-article" role="tabpanel"
                                                aria-labelledby="metrics-tab">
                                                <ul class="search-results">
                                                    <li>
                                                        <div class="article-titles">
                                                            <p><b>Abstract:</b><br>

                                                                {!! $article->article_details->abstract !!}
                                                            </p>
                                                            <div class="keywords_article">
                                                                <p><b>Keywords:</b>
                                                                    @foreach ($article->keywords as $keyword)
                                                                        {{ $keyword->keyword }},
                                                                    @endforeach
                                                                </p>
                                                            </div>
                                                        </div>

                                                    </li>

                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="figures" role="tabpanel"
                                                aria-labelledby="aims-tab">
                                                <ul class="search-results">
                                                    <li>
                                                        <div class="article-titles">
                                                            <h2>Figures</h2>
                                                            <p>
                                                                <a href="">
                                                                    <img src="" alt="Figure Image" />
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="references" role="tabpanel"
                                                aria-labelledby="editorial-tab">
                                                <ul class="search-results">
                                                    <li>
                                                        <div class="article-titles">

                                                            <h2>References</h2>
                                                            <ul class="reference-content">
                                                                <p>{!! $article->article_details->references !!}</p>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="citations" role="tabpanel"
                                                aria-labelledby="instructions-tab">
                                                <ul class="search-results">
                                                    <li>
                                                        <div class="article-titles">

                                                            <h2>To cite this article</h2>
                                                            <p>
                                                                <span class="author_name">
                                                                    {{-- {{$article_citation}} --}}

                                                                    @foreach ($article->author as $author)
                                                                        {{ $author->name }}
                                                                        {!! $loop->remaining ? ', ' . '&nbsp;' : '' !!}
                                                                    @endforeach
                                                                </span>
                                                                (2023). <span
                                                                    class="a_title">{{ $article->title }}</span>.
                                                                <i class="jtitle">{{ $article->title }}</i>,
                                                                <i>{{ $article->volume->name }}</i>({{ $article->issue->name }}),
                                                                {{ $article->last_pages }} - {{ $article->first_pages }}.
                                                                doi.org/{{ $article->dio }}
                                                            </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="metrics" role="tabpanel"
                                                aria-labelledby="instructions-tab">
                                                <ul class="search-results">
                                                    <li>
                                                        <div class="article-titles">
                                                            <div class="content fullView">
                                                                <h2>
                                                                    Article Metrics
                                                                </h2>
                                                                <div class="section views">
                                                                    <h3 class="title">Views</h3>
                                                                    <div class="circle">
                                                                        <span class="value">{{ $article->views_count }}
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="copyrights_permissions" role="tabpanel"
                                                aria-labelledby="instructions-tab">
                                                <ul class="search-results">
                                                    <li>
                                                        <div class="article-titles">
                                                            <h2>Copyright and Permissions</h2>
                                                            <p>At Guinness Press, authors retain the copyright for all
                                                                articles published in our journals. These articles are
                                                                licensed under the open-access Creative Commons CC BY 4.0
                                                                license, granting free access for reading and download.
                                                                Additionally, the original published version must be
                                                                appropriately cited when reusing or quoting the article.
                                                                These terms ensure widespread accessibility while ensuring
                                                                proper attribution to the authors.</p>
                                                            <p>All content published by Guinness Press is safeguarded by
                                                                international copyright and intellectual property
                                                                regulations. We kindly request that you honor these
                                                                protections when utilizing our materials. </p>
                                                            <p>For further information, please contact us at
                                                                info@guinnesspress.org.</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4 col-xl-4 col-sm-12">
                                        <div class="socialshare_links">
                                            <ul>
                                                <li>
                                                    <a class="share_facebook" rel="nofollow noopener" target="_blank"
                                                        href="http://www.facebook.com/sharer.php?u={{ url()->current() }}">
                                                        <i class="fa-brands fa-facebook" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="share_twitter" rel="nofollow noopener" target="_blank"
                                                        href="http://twitter.com/share?text={{ $article->title }}&amp;url={{ url()->current() }}">
                                                        <i class="fa-brands fa-twitter" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="share_linkedin" rel="nofollow noopener" target="_blank"
                                                        href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{ url()->current() }}">
                                                        <i class="fa-brands fa-linkedin" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--<div class="related_research_article article_right_sidebar">-->
                                        <ul class="nav nav-pills search-journal-nav-pills explore-pills">
                                            <!--<li class="nav-item"> <a class="nav-link active" data-bs-toggle="pill" href="#most-read" role="tab" aria-controls="pills-most-read" aria-selected="false">People Also Read</a> </li>-->
                                            <li class="nav-item"> <a class="nav-link active" data-bs-toggle="pill"
                                                    href="#trending" role="tab" aria-controls="pills-trending"
                                                    aria-selected="false">Recommended Articles</a> </li>
                                            <!--<li class="nav-item"> <a class="nav-link" data-bs-toggle="pill" href="#most-citied" role="tab" aria-controls="pills-most-citied" aria-selected="false">Cited by</a> </li>-->
                                        </ul>
                                        <div class="tab-content mt-3">
                                            <div class="tab-pane fade show active" id="trending" role="tabpanel"
                                                aria-labelledby="most-trending">
                                                <ul class="search-results explore-list">
                                                    <li>
                                                        <div class="article-titles">
                                                            <h2><a
                                                                    href="{{ url('') }}/publication/journal/ijerm/1024923">A
                                                                    THEORETICAL PERSPECTIVE ON HOW DIGITALIZATION HAS
                                                                    EVOLVED ORGANIZATIONAL CULTURE</a></h2>
                                                            <p>Author(s): Munzallin Munaf</p>
                                                            <div class="article-btn">
                                                                <p>Article | Published Online: 05 Oct 2023 | Pages [1 - 8]
                                                                </p>
                                                                <a href="{{ url('') }}/publication/journal/ijerm/1024923"
                                                                    class="btn1">Read More</a>
                                                            </div>
                                                        </div>

                                                        <div class="article-titles">
                                                            <h2><a
                                                                    href="{{ url('') }}/publication/journal/ijerm/1024925">ADAPTATION
                                                                    OF SOCRATIVE APPLICATION AS ONLINE TEACHING PLATFORM
                                                                    DURING THE COVID-19 PANDEMIC</a></h2>
                                                            <p>Author(s): Mark Treve</p>
                                                            <div class="article-btn">
                                                                <p>Article | Published Online: 05 Oct 2023 | Pages [17 - 26]
                                                                </p>
                                                                <a href="{{ url('') }}/publication/journal/ijerm/1024925"
                                                                    class="btn1">Read More</a>
                                                            </div>
                                                        </div>
                                                        <div class="article-titles">
                                                            <h2><a
                                                                    href="{{ url('') }}/publication/journal/jblm/5243017">UTILIZING
                                                                    NET PROMOTER SCORE TO ASSESS CUSTOMER SATISFACTION AND
                                                                    BRAND LOYALTY IN THE REAL ESTATE INDUSTRY OF
                                                                    THAILAND</a></h2>
                                                            <p>Author(s): Nilubon Sivabrovornvatana</p>
                                                            <div class="article-btn">
                                                                <p>Article | Published Online: 09 Oct 2023 | Pages [56 - 66]
                                                                </p>
                                                                <a href="{{ url('') }}/publication/journal/jblm/5243017"
                                                                    class="btn1">Read More</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
