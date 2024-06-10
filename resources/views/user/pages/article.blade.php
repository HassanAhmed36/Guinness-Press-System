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
                                                <h6>129</h6>
                                                <span>Views</span>
                                            </li>
                                            {{-- <li class="article-corres-author">
                                                @php
                                                    $response = Http::get(
                                                        'https://api.crossref.org/works/10.59762/' .
                                                            $journal->acronym.
                                                            $journal->issn_no .
                                                            $article_vol_value ?? '' .
                                                            $jouenal->issue_no .
                                                            $article_array['timestamp'],
                                                    );

                                                    $jsonData = $response->json();

                                                    $crossref_citations = $jsonData
                                                        ? $jsonData['message']['is-referenced-by-count']
                                                        : '0';

                                                @endphp
                                                <h6>{{ $crossref_citations }}</h6>
                                                <span>CrossRef citations to date</span>
                                            </li> --}}
                                            <!--<li class="article-corres-author">-->
                                            <!--   <h6>44</h6>-->
                                            <!--   <span>Altmetric</span>-->
                                            <!--</li>-->
                                        </ul>

                                        @if (
                                            !(
                                                ($journal->acronym == 'cli' && $article_array['article_code'] == '5242906') ||
                                                ($journal->acronym == 'seer' && $article_array['article_code'] == '5243101')
                                            ))
                                            {{-- <!-- Start of Dimensions  -->
                                            <span class="__dimensions_badge_embed__"
                                                data-doi="10.59762/{{ $journal->journal_abbr }}{{ $journal->issn_no }}{{ $article_vol_value ?? '' }}{{ $article_array['issue_no'] }}{{ $article_array['timestamp'] }}"
                                                data-style="small_circle" data-legend="hover-bottom"
                                                data-hide-zero-citations="false"></span>
                                            <script async src="https://badge.dimensions.ai/badge.js" charset="utf-8"></script> --}}
                                            <!-- End of Dimensions -->


                                            <!-- Start Crossmark Snippet v2.0 -->
                                            <script src="https://crossmark-cdn.crossref.org/widget/v2.0/widget.js"></script>
                                            <a data-target="crossmark">
                                                <img src="https://crossmark-cdn.crossref.org/widget/v2.0/logos/CROSSMARK_Color_square.svg"
                                                    width="70" loading="lazy" />
                                            </a>
                                            <!-- End Crossmark Snippet -->
                                        @endif




                                    </div>
                                    <div class="col-md-6 col-xl-6 col-sm-12">
                                        <div class="article-sec1">
                                            <h3>{{ $article_array['article_type'] }}</h3>
                                            <h1>{!! $article_array['article_title'] !!}</h1>
                                            <ul class="article-authors">
                                                @foreach ($article_array['authors_detail'] as $author_detail)
                                                    <li class="article-corres-author">
                                                        <a href="@if ($author_detail['email'] != '') mailto: {{ $author_detail['email'] }} @else javascript:; @endif "
                                                            class="author_name">
                                                            {{ $author_detail['name'] }} <sup> {{ $loop->iteration }}
                                                                @if ($author_detail['corresponding'])
                                                                    *
                                                                @endif
                                                            </sup>
                                                        </a>
                                                        @if (array_key_exists('orcid_id', $author_detail) && $author_detail['orcid_id'] != '')
                                                            <span class="orcid-link">
                                                                <a href="https://orcid.org/{{ $author_detail['orcid_id'] }}"
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
                                            <p class="author_bio">
                                                @foreach ($article_array['authors_detail'] as $author_detail)
                                                    @if ($author_detail['bio'] != '')
                                                        <sup>{{ $loop->iteration }}</sup> {{ $author_detail['bio'] }}
                                                        {!! $loop->remaining ? '&nbsp;' . ' | ' . '&nbsp;' : '' !!}
                                                    @endif
                                                @endforeach
                                            </p>
                                            <div class="article_vol">
                                                <p>Volume {{ $article_array['vol_no'] }}</p>
                                                <p>Issue {{ $article_array['issue_no'] }}</p>
                                                <p>Page: [{{ $article_array['pages'] }}]</p>
                                            </div>
                                            <div class="published_date">
                                                <p>Published Online: {{ $article_array['published_date'] }}</p>
                                            </div>
                                            <ul class="article-informations">
                                                <li class="article-citation">
                                                    <!--<a href="{{ URL::asset('assets/articles/pdf/') }}/{{ $article_array['article_pdf'] }}" download>-->
                                                    <!--    <img src="{{ URL::asset('assets/img/official-article/download.png') }}">-->
                                                    <!--Download Citation</a>-->
                                                    DOI: &nbsp;
                                                    <a class="doi-link"
                                                        href="https://doi.org/10.59762/{{ $article_array['journal_abbr'] }}{{ $article_array['issn'] }}{{ $article_vol_value ?? '' }}{{ $article_array['issue_no'] }}{{ $article_array['timestamp'] }}"
                                                        style="-webkit-user-select: none;
                                     -webkit-touch-callout: none;
                                     -moz-user-select: none;
                                     -ms-user-select: none;
                                     user-select: none;"
                                                        oncontextmenu="return false;" id="copyDoiToClipboard">
                                                        <!--<img src="{{ URL::asset('assets/img/official-article/doi.png') }}">-->
                                                        10.59762/{{ $article_array['journal_abbr'] }}{{ $article_array['issn'] }}{{ $article_vol_value ?? '' }}{{ $article_array['issue_no'] }}{{ $article_array['timestamp'] }}</a>
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

                                            <a href="{{ URL::asset('assets/articles/pdf/') }}/{{ $article_array['article_pdf'] }}"
                                                target="_blank">Download Full Article</a>
                                            @if ($article_array['article_code'] == '5246025')
                                                <a href="{{ URL::asset('assets/articles/pdf/') }}/5-52471-Gleemoore-C-Makie-Supporting-Material.pdf"
                                                    target="_blank">Supporting Material</a>
                                            @endif
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
                                    <!--<div class="col-md-2 col-xl-2 col-sm-12">-->
                                    <!--   <div class="article_inner_nav article_left_sidebar">-->
                                    <!--<div class="div_menu">-->
                                    <!--   <ul class="menu_list">-->
                                    <!--      <li><a href="">ABSTRACT</a></li>-->
                                    <!--      <li><a href="">Introduction</a></li>-->
                                    <!--      <li><a href="">Materials and methods</a></li>-->
                                    <!--      <li><a href="">Results</a></li>-->
                                    <!--      <li><a href="">Discussion</a></li>-->
                                    <!--      <li><a href="">Acknowledgements</a></li>-->
                                    <!--      <li><a href="">References</a></li>-->
                                    <!--   </ul>-->
                                    <!--</div>-->
                                    <!--   </div>-->
                                    <!--</div>-->
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
                                                    <!--  <li>-->
                                                    <!--      <div class="article_filesbtn">-->

                                                    <!--        <a href="{{ URL::asset('assets/articles/pdf/') }}/{{ $article_array['article_pdf'] }}" target="_blank">View Full Article</a>-->

                                                    <!--        </div>-->
                                                    <!--</li>-->
                                                    <li>
                                                        <div class="article-titles">
                                                            @if (
                                                                !(
                                                                    ($article_array['journal_abbr'] == 'cli' && $article_array['article_code'] == '5242906') ||
                                                                    ($article_array['journal_abbr'] == 'seer' && $article_array['article_code'] == '5243101')
                                                                ))
                                                                <h2>Abstract</h2>
                                                            @endif

                                                            <p>
                                                                {!! $article_array['abstract'] !!}
                                                            </p>

                                                            @if (
                                                                !(
                                                                    ($article_array['journal_abbr'] == 'cli' && $article_array['article_code'] == '5242906') ||
                                                                    ($article_array['journal_abbr'] == 'seer' && $article_array['article_code'] == '5243101')
                                                                ))
                                                                <div class="keywords_article">
                                                                    <p><b>Keywords:</b>
                                                                        {{ $article_array['article_keywords'] }} </p>
                                                                </div>
                                                            @endif
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
                                                            @if (
                                                                !(
                                                                    ($article_array['journal_abbr'] == 'cli' && $article_array['article_code'] == '5242906') ||
                                                                    ($article_array['journal_abbr'] == 'seer' && $article_array['article_code'] == '5243101')
                                                                ))
                                                                <h2>References</h2>
                                                            @endif
                                                            <ul class="reference-content">
                                                                @foreach ($article_array['article_references'] as $article_reference)
                                                                    <li> {{ $article_reference }}</li>
                                                                @endforeach
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
                                                            @if (
                                                                !(
                                                                    ($article_array['journal_abbr'] == 'cli' && $article_array['article_code'] == '5242906') ||
                                                                    ($article_array['journal_abbr'] == 'seer' && $article_array['article_code'] == '5243101')
                                                                ))
                                                                <h2>To cite this article</h2>
                                                                <p>
                                                                    <span class="author_name">
                                                                        {{-- {{$article_citation}} --}}

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
                                                                        <span class="value">129 </span>
                                                                    </div>
                                                                </div>

                                                                <!--<div class="section citations">-->
                                                                <!--   <h3 class="title">Citations</h3>-->
                                                                <!--   <a href="javascript:;" class="circle crossRef disableLink" target="_blank">-->
                                                                <!--   <span>Crossref</span>-->
                                                                <!--   <span class="value">0</span>-->
                                                                <!--   </a>-->
                                                                <!--   <a href="javascript:;" target="_blank" class="circle webOfScience disableLink">-->
                                                                <!--   <span>Web of Science</span>-->
                                                                <!--   <span class="value">0</span>-->
                                                                <!--   </a>-->
                                                                <!--   <a href="javascript:;" target="_blank" class="circle scopus disableLink">-->
                                                                <!--   <span>Scopus</span>-->
                                                                <!--   <span class="value">0</span>-->
                                                                <!--   </a>-->
                                                                <!--</div>-->
                                                                <!--<div class="section altmetric-container">-->
                                                                <!--   <h3 class="title">Altmetric</h3>-->
                                                                <!--   <script type="text/javascript" src="https://d1bxh8uas1mnw7.cloudfront.net/assets/embed.js" async=""></script>-->
                                                                <!--   <div class="metrics-badge" data-score-behaviour="linkToPopup">-->
                                                                <!--      <div class="altmetric-embed" data-badge-type="medium-donut" data-badge-details="right" data-condensed="true" data-template="routledge" data-hide-no-mentions="false" data-doi="10.1080/08985626.2022.2121859" data-uuid="483052fb-4513-1b20-b179-48dc9dc4b2f4">-->
                                                                <!--         <div style="overflow:hidden;">-->
                                                                <!--            <div class="altmetric-condensed-legend">-->
                                                                <!--               <a target="_self" href="https://www.altmetric.com/details.php?domain=guinnesspress.com&amp;citation_id=137838532&amp;template=routledge" style="display:inline-block;">-->
                                                                <!--               <img alt="Article has an altmetric score of 3" src="https://badges.altmetric.com/?size=240&amp;score=3&amp;types=tttttttt" width="120" height="120" style="border:0; margin:0; max-width: none;">-->
                                                                <!--               </a>-->
                                                                <!--               <p class="altmetric-see-more-details" style="padding-top: 10px; text-align: center;"><a target="_self" href="https://www.altmetric.com/details.php?domain=guinnesspress.com&amp;citation_id=137838532&amp;template=routledge">See more details</a></p>-->
                                                                <!--            </div>-->
                                                                <!--            <div id="_altmetric_popover_el_483052fb-4513-1b20-b179-48dc9dc4b2f4" class="altmetric-embed right" style="margin:0; padding:0; display:inline-block; float:left; position:relative;">-->
                                                                <!--               <div class="altmetric_container">-->
                                                                <!--                  <div class="altmetric-embed altmetric-popover-inner right">-->
                                                                <!--                     <div style="padding:0; margin: 0;" class="altmetric-embed altmetric-popover-content">-->
                                                                <!--                        <div style="padding-left: 10px; line-height:18px; border-left: 16px solid #74CFED;">-->
                                                                <!--                           <a class="link-to-altmetric-details-tab" target="_self" href="https://www.altmetric.com/details.php?domain=guinnesspress.com&amp;citation_id=137838532&amp;template=routledge&amp;tab=twitter">-->
                                                                <!--                           Twitter (4)-->
                                                                <!--                           </a>-->
                                                                <!--                        </div>-->
                                                                <!--                        <div class="altmetric-embed readers" style="margin-top: 10px;">-->
                                                                <!--                           <div class="altmetric-embed tip_mendeley" style="padding-left: 10px; line-height:18px; border-left: 16px solid #A60000;">-->
                                                                <!--                              Mendeley (47)-->
                                                                <!--                           </div>-->
                                                                <!--                        </div>-->
                                                                <!--                     </div>-->
                                                                <!--                  </div>-->
                                                                <!--               </div>-->
                                                                <!--            </div>-->
                                                                <!--         </div>-->
                                                                <!--      </div>-->
                                                                <!--   </div>-->
                                                                <!--</div>-->
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
                                        <!--<section class="purchasing-section aos-init aos-animate" data-aos="zoom-in">-->
                                        <!--   <div class="container-fluid">-->
                                        <!--      <div class="container">-->
                                        <!--         <div class="row">-->
                                        <!--            <div class="col-md-11 col-xl-11 col-sm-12 m-xl-auto m-md-auto">-->
                                        <!--<div class="row purchasing-mat">-->
                                        <!--   <div class="col-md-6 col-lg-6 col-sm-12 purchasing-mat1">-->
                                        <!--      <h1>Log in via your institution</h1>-->
                                        <!--      <div class="seperator"></div>-->
                                        <!--      <div class="inst-login">-->
                                        <!--         <a href="https://guinnesspress.org/publication/login-member/" target="_blank">-->
                                        <!--            <h3><i class="fas fa-greater-than"></i>Access through your institution</h3>-->
                                        <!--            <h2>Log in to Guinness Press Online</h2>-->
                                        <!--         </a>-->
                                        <!--      </div>-->
                                        <!--      <div class="seperator"></div>-->
                                        <!--      <div class="content-login">-->
                                        <!--         <a href="https://guinnesspress.org/publication/login-member/" target="_blank">-->
                                        <!--            <h3><i class="fas fa-greater-than"></i>Log in</h3>-->
                                        <!--            <h2>Restore content access</h2>-->
                                        <!--         </a>-->
                                        <!--      </div>-->
                                        <!--      <div class="seperator"></div>-->
                                        <!--   </div>-->
                                        <!--   <div class="col-md-6 col-lg-6 col-sm-12 purchasing-mat2">-->
                                        <!--      <div class="p1">-->
                                        <!--         <h1>Purchase options</h1>-->
                                        <!--         <h3>* Save for later</h3>-->
                                        <!--      </div>-->
                                        <!--      <div class="purchasing-options">-->
                                        <!--         <h4>PDF download + Online access</h4>-->
                                        <!--         <ul class="purchasing-options-one">-->
                                        <!--            <li>-->
                                        <!--               48 hours access to article PDF &amp; online version-->
                                        <!--            </li>-->
                                        <!--            <li>-->
                                        <!--               Article PDF can be downloaded-->
                                        <!--            </li>-->
                                        <!--            <li>-->
                                        <!--               Article PDF can be printed-->
                                        <!--            </li>-->
                                        <!--            <li>-->
                                        <!--               <ul class="purchasing-options-two">-->
                                        <!--                  <li>-->
                                        <!--                     <a href="https://guinnesspress.org/publication/register/" target="_blank">USD 50.00</a>-->
                                        <!--                  </li>-->
                                        <!--                  <li>-->
                                        <!--                     <a href="https://guinnesspress.org/publication/register/" target="_blank">Buy Now</a>-->
                                        <!--                  </li>-->
                                        <!--               </ul>-->
                                        <!--            </li>-->
                                        <!--         </ul>-->
                                        <!--      </div>-->
                                        <!--   </div>-->
                                        <!--</div>-->
                                        <!--               <div class="row purchasing-details">-->
                                        <!--                  <div class="col-md-12 col-lg-12 col-sm-12">-->
                                        <!--<h2>Acknowledgements</h2>-->
                                        <!--<p>We thank Bowls NSW and the many contacts who assisted with data and images as well as the journal’s two anonymous reviewers for their constructive suggestions.</p>-->
                                        <!--                     <div class="seperator2"></div>-->
                                        <!--                     <h2>Disclosure statement</h2>-->
                                        <!--                     <p>No potential conflict of interest was reported by the author(s).</p>-->
                                        <!--                     <div class="seperator2"></div>-->
                                        <!--                     <h2>Additional information</h2>-->
                                        <!--                     <h4>Notes on contributors</h4>-->

                                        <!--                     <p class="author_bio">{{ $article_array['author_bio'] }}</p>-->
                                        <!--                  </div>-->
                                        <!--               </div>-->
                                        <!--            </div>-->
                                        <!--         </div>-->
                                        <!--      </div>-->
                                        <!--</section>-->
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
                                                        href="http://twitter.com/share?text={!! $article_array['article_title'] !!}&amp;url={{ url()->current() }}">
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
                                        <!--      <div class="tab-pane fade" id="most-citied" role="tabpanel" aria-labelledby="most-citied-tab">-->
                                        <!-- Get Journals -->
                                        <!--         <ul class="search-results explore-list">-->
                                        <!--            <li>-->
                                        <!--               <div class="article-titles">-->
                                        <!--                  <h2><a href="https://guinnesspress.org/publication/doi/full/10.59762/91127553-2023-8631540">A THEORETICAL PERSPECTIVE ON HOW DIGITALIZATION HAS EVOLVED ORGANIZATIONAL CULTURE</a></h2>-->
                                        <!--                  <p>Through technology, the way of doing business has changed a lot, as automation is added in routine tasks and permitted work from home. It has also changed the culture of...</p>-->
                                        <!--                  <div class="article-btn">-->
                                        <!--                     <p>Article | Published Online: 19 May 2023 | Views: 402 | Citations: 2</p>-->
                                        <!--<a href="https://guinnesspress.org/publication/doi/full/10.59762/91127553-2023-8631540" class="btn1">Read More</a>-->
                                        <!--                  </div>-->
                                        <!--               </div>-->
                                        <!--               <div class="article-titles">-->
                                        <!--                  <h2><a href="https://guinnesspress.org/publication/doi/full/10.59762/24693245-2023-3906837">MORTGAGING PROPERTY UNDER FRENCH AND VIETNAMESE LEGISLATION: CONTRAST AND COMPARISON</a></h2>-->
                                        <!--                  <p>The purpose of this paper was to effectively compare and contrast on mortgaged property law in Vietnamese laws and French laws and recommend some modification for Vietnamese to effectively protect...</p>-->
                                        <!--                  <div class="article-btn">-->
                                        <!--                     <p>Article | Published Online: 19 May 2023 | Views: 402 | Citations: 2</p>-->
                                        <!--<a href="https://guinnesspress.org/publication/doi/full/10.59762/24693245-2023-3906837" class="btn1">Read More</a>-->
                                        <!--                  </div>-->
                                        <!--               </div>-->
                                        <!--               <div class="article-titles">-->
                                        <!--                  <h2><a href="https://guinnesspress.org/publication/doi/full/10.59762/73875394-2023-8238665">Malaysia Construction Worker Perception On Heat Stress And Its Impact On Work Performance</a></h2>-->
                                        <!--                  <p>Global climate change has gradually increased Malaysia average temperature. This situation increases the risk of heat stress for Malaysia construction workers which mostly work under the sun. Thus, this study...</p>-->
                                        <!--                  <div class="article-btn">-->
                                        <!--                     <p>Article | Published Online: 19 May 2023 | Views: 402 | Citations: 2</p>-->
                                        <!--<a href="https://guinnesspress.org/publication/doi/full/10.59762/73875394-2023-8238665" class="btn1">Read More</a>-->
                                        <!--                  </div>-->
                                        <!--               </div>-->
                                        <!--               <div class="article-titles">-->
                                        <!--                  <h2><a href="https://guinnesspress.org/publication/doi/full/10.59762/34592846-2023-7793476">The Effect Of Soil Reinforcement On Strength Of The Soil</a></h2>-->
                                        <!--                  <p>This paper explores soil reinforcement’s effects on the strength of the soil. Different soil reinforcement techniques are discussed, and their effects on soil strength are analyzed. The paper further examines...</p>-->
                                        <!--                  <div class="article-btn">-->
                                        <!--                     <p>Article | Published Online: 19 May 2023 | Views: 402 | Citations: 2</p>-->
                                        <!--<a href="https://guinnesspress.org/publication/doi/full/10.59762/34592846-2023-7793476" class="btn1">Read More</a>-->
                                        <!--                  </div>-->
                                        <!--               </div>-->
                                        <!--            </li>-->
                                        <!--         </ul>-->
                                        <!--      </div>-->
                                        <!--      <div class="tab-pane fade" id="trending" role="tabpanel" aria-labelledby="trending-tab">-->
                                        <!-- Get Journals -->
                                        <!--         <ul class="search-results explore-list">-->
                                        <!--            <li>-->
                                        <!--               <div class="article-titles">-->
                                        <!--                  <h2><a href="https://guinnesspress.org/publication/doi/full/10.59762/91127553-2023-8631540">A THEORETICAL PERSPECTIVE ON HOW DIGITALIZATION HAS EVOLVED ORGANIZATIONAL CULTURE</a></h2>-->
                                        <!--                  <p>Through technology, the way of doing business has changed a lot, as automation is added in routine tasks and permitted work from home. It has also changed the culture of...</p>-->
                                        <!--                  <div class="article-btn">-->
                                        <!--                     <p>Article | Published Online: 19 May 2023 | Views: 402 | Citations: 2</p>-->
                                        <!--<a href="https://guinnesspress.org/publication/doi/full/10.59762/91127553-2023-8631540" class="btn1">Read More</a>-->
                                        <!--                  </div>-->
                                        <!--               </div>-->
                                        <!--               <div class="article-titles">-->
                                        <!--                  <h2><a href="https://guinnesspress.org/publication/doi/full/10.59762/24693245-2023-3906837">MORTGAGING PROPERTY UNDER FRENCH AND VIETNAMESE LEGISLATION: CONTRAST AND COMPARISON</a></h2>-->
                                        <!--                  <p>The purpose of this paper was to effectively compare and contrast on mortgaged property law in Vietnamese laws and French laws and recommend some modification for Vietnamese to effectively protect...</p>-->
                                        <!--                  <div class="article-btn">-->
                                        <!--                     <p>Article | Published Online: 19 May 2023 | Views: 402 | Citations: 2</p>-->
                                        <!--<a href="https://guinnesspress.org/publication/doi/full/10.59762/24693245-2023-3906837" class="btn1">Read More</a>-->
                                        <!--                  </div>-->
                                        <!--               </div>-->
                                        <!--               <div class="article-titles">-->
                                        <!--                  <h2><a href="https://guinnesspress.org/publication/doi/full/10.59762/73875394-2023-8238665">Malaysia Construction Worker Perception On Heat Stress And Its Impact On Work Performance</a></h2>-->
                                        <!--                  <p>Global climate change has gradually increased Malaysia average temperature. This situation increases the risk of heat stress for Malaysia construction workers which mostly work under the sun. Thus, this study...</p>-->
                                        <!--                  <div class="article-btn">-->
                                        <!--                     <p>Article | Published Online: 19 May 2023 | Views: 402 | Citations: 2</p>-->
                                        <!--<a href="https://guinnesspress.org/publication/doi/full/10.59762/73875394-2023-8238665" class="btn1">Read More</a>-->
                                        <!--                  </div>-->
                                        <!--               </div>-->
                                        <!--               <div class="article-titles">-->
                                        <!--                  <h2><a href="https://guinnesspress.org/publication/doi/full/10.59762/34592846-2023-7793476">The Effect Of Soil Reinforcement On Strength Of The Soil</a></h2>-->
                                        <!--                  <p>This paper explores soil reinforcement’s effects on the strength of the soil. Different soil reinforcement techniques are discussed, and their effects on soil strength are analyzed. The paper further examines...</p>-->
                                        <!--                  <div class="article-btn">-->
                                        <!--                     <p>Article | Published Online: 19 May 2023 | Views: 402 | Citations: 2</p>-->
                                        <!--<a href="https://guinnesspress.org/publication/doi/full/10.59762/34592846-2023-7793476" class="btn1">Read More</a>-->
                                        <!--                  </div>-->
                                        <!--               </div>-->
                                        <!--            </li>-->
                                        <!--         </ul>-->
                                        <!--      </div>-->
                                        <!--   </div>-->
                                        <!--</div>-->
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
