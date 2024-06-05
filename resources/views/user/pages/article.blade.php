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

                        {{ $journal->description }}
                    </div>
                    <div class="btn-group">
                        <a href="javascript:;" data-fancybox="" data-src="#submitArticlePopup"
                            class="btn btn-light btn-blue red-btn ">Submit Your Article</a>
                        <a href="{{ url('/journal', ['journal_name' => $journal->acronym, 'journal_p' => 'editorial-board']) }}"
                            class="btn btn-light btn-blue">Editorial Board</a>
                    </div>
                </div>
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
                                        </ul>



                                    </div>
                                    <div class="col-md-6 col-xl-6 col-sm-12">
                                        <div class="article-sec1">
                                            <h3>{{ $article->article_type }}</h3>
                                            <h1>{{ $article->title }}</h1>
                                            <ul class="article-authors">
                                                @foreach ($article->author as $a)
                                                    <li class="article-corres-author">
                                                        <a href="@if ($a->email != '') mailto: {{ $a->email }} @else javascript:; @endif "
                                                            class="author_name">
                                                            {{ $a->name }}
                                                        </a>
                                                        @if ($article->orcid_id != '')
                                                            <span class="orcid-link">
                                                                <a href="https://orcid.org/{{ $article->author->orcid_id }}"
                                                                    style="-webkit-user-select: none;
                                             -webkit-touch-callout: none;
                                             -moz-user-select: none;
                                             -ms-user-select: none;
                                             user-select: none;"
                                                                    oncontextmenu="return false;" target="_blank">
                                                                </a>
                                                            </span>
                                                        @endif

                                                    </li>
                                                @endforeach
                                            </ul>

                                            <div class="article_vol">
                                                <p>Volume {{ $article->volume->name ?? '' }}</p>
                                                <p>Issue {{ $article->issue->name ?? '' }}</p>
                                                <p>Page: [{{ $article->first_page }} - {{ $article->last_page }}]</p>

                                            </div>
                                            <div class="published_date">
                                                <p>Published Online: {{ $article->published_date }}</p>
                                            </div>
                                            <ul class="article-informations">
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
                                            </div>
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
                            <div class="article-sec2">
                                <div class="row">

                                    <div class="col-md-8 col-xl-8 col-sm-12 col_article_bordered">
                                        <ul class="nav nav-pills search-journal-nav-pills article-nav-pills">
                                            <li class="nav-item"> <a class="nav-link active" data-bs-toggle="pill"
                                                    href="#full-article" role="tab" aria-controls="pills-full-article"
                                                    aria-selected="true">Abstract</a>
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
                                                            <p>
                                                                {!! $article->article !!}
                                                            </p>


                                                            <div class="keywords_article">
                                                                <p><b>Keywords:</b>
                                                                    @foreach ($article->keywords as $k)
                                                                        {{ $k->keyword }},
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
                                                                <li> {!! $article->article_details->references !!}</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            {{-- <div class="tab-pane fade" id="citations" role="tabpanel"
                                                aria-labelledby="instructions-tab">
                                                <ul class="search-results">
                                                    <li>
                                                        <div class="article-titles">
                                                            @if (!(($article_array['journal_abbr'] == 'cli' && $article_array['article_code'] == '5242906') || ($article_array['journal_abbr'] == 'seer' && $article_array['article_code'] == '5243101')))
                                                                <h2>To cite this article</h2>
                                                                <p>
                                                                    <span class="author_name">

                                                                        @foreach ($article_array['authors_detail'] as $author_detail)
                                                                            {{ $author_detail['name'] }}
                                                                            {!! $loop->remaining ? ', ' . '&nbsp;' : '' !!}
                                                                        @endforeach
                                                                    </span>
                                                                    (2023). <span
                                                                        class="a_title">{!! $article_array['article_title'] !!}</span>. <i
                                                                        class="jtitle">{{ $article_array['journal_title'] }}</i>,
                                                                    <i>{{ $article_vol_value ?? '' }}</i>({{ $article_array['issue_no'] }}),
                                                                    {{ $article_array['pages'] }}.
                                                                    doi.org/10.59762/{{ $article_array['journal_abbr'] }}{{ $article_array['issn'] }}{{ $article_array['vol_no'] }}{{ $article_array['issue_no'] }}{{ $article_array['timestamp'] }}
                                                                </p>
                                                            @endif
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div> --}}
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
                                                                        <span
                                                                            class="value">{{ $article->views_count }}</span>
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
                                                        href="http://twitter.com/share?text={!! $article->title !!}&amp;url={{ url()->current() }}">
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
