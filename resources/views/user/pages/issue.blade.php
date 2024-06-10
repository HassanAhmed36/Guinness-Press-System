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
                                    ISSN NO : {{ $journal->journal_issn }}
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
                        <h3 class="explore-h">Volume @if ($journal->volume->first()->issue->first()->issue_id == 2001 || $journal->volume->first()->issue->first()->issue_id == 2002)
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
                        @if ($journal->acronym == 'ijerm' && $journal->volume->first()->issue->first()->issue_id == 1001)
                            <ul class="search-results explore-list">
                                <li>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1024923">A
                                                THEORETICAL PERSPECTIVE ON HOW DIGITALIZATION HAS EVOLVED ORGANIZATIONAL
                                                CULTURE</a></h2>
                                        <p>Author(s): Munzallin Munaf</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Oct 2023 | Pages [1 - 8]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1024923"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1024924">INTOLERANCE
                                                OF MARITAL RELATIONSHIP BETWEEN HUSBAND AND WIFE (PSYCHOLOGICAL CASE STUDY
                                                OF MARITAL RAPE)</a></h2>
                                        <p>Author(s): Dewi Ulfah Arini, Khairunnisa</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Oct 2023 | Pages [9 - 16]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1024924"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1024925">ADAPTATION
                                                OF SOCRATIVE APPLICATION AS ONLINE TEACHING PLATFORM DURING THE COVID-19
                                                PANDEMIC</a></h2>
                                        <p>Author(s): Mark Treve</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Oct 2023 | Pages [17 - 26]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1024925"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1024926">A
                                                COMPARISON OF THE RIGHT TO VISIT CHILDREN AFTER DIVORCE</a></h2>
                                        <p>Author(s): Dr. Nguyen Thi Bao Anh, Lam Ba Khanh Toan</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Oct 2023 | Pages [27 - 39]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1024926"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1024927">EXAMINING
                                                THE IMPACT OF USING AUTHENTIC MATERIALS ON ESL/EFL LEARNERS</a></h2>
                                        <p>Author(s): Mark Treve</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Oct 2023 | Pages [40 - 50]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1024927"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1024928">THE
                                                OFFENCE OF INFANTICIDE TO VIETNAMESE CRIMINAL CODE COMPARISON WITH OTHER
                                                COUNTRIES IN THE WORLD</a></h2>
                                        <p>Author(s): Dr. Nguyen Thi Bao Anh, MSC. Cao Thanh Thuy</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Oct 2023 | Pages [51 - 65]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1024928"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1024929">DEPLOYMENT
                                                OF LEAN SIX SIGMA IN THE PLANTATION SECTOR</a></h2>
                                        <p>Author(s): Noor Azam Bin MD Saad</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Oct 2023 | Pages [66 - 73]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1024929"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        @elseif($journal->acronym == 'ijerm' && $journal->volume->first()->issue->first()->issue_id == 1002)
                            <ul class="search-results explore-list">
                                <li>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1122141">Deployment
                                                of Lean Six Sigma in Transportation Sector</a></h2>
                                        <p>Author(s): Noor Azam Bin MD Saad</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Dec 2023 | Pages [74 - 80]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1122141"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1122142">Conceptualization
                                                Of Circular Economy And Sustainability At The Business Level. Circular
                                                Economy And Sustainable Development</a></h2>
                                        <p>Author(s): Mercy Toni</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Dec 2023 | Pages [81 - 89]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1122142"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1122143">A
                                                Narrative on the Patterns, Dynamics, and Issues on the Traditional Health
                                                System at Tapaz, Capiz, Philippines</a></h2>
                                        <p>Author(s): Ronilo G. Berondo</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Dec 2023 | Pages [90 - 94]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1122143"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1122144">Integrative
                                                Review on the Ethical Perspectives in 3D Printing: Imperatives on Nursing
                                                Science</a></h2>
                                        <p>Author(s): Ronnell D. Dela Rosa</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Dec 2023 | Pages [95 - 115]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1122144"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1122145">Covid-
                                                19 Vaccine Confidence, Hesit Ancy And Refusal Among Hh Heads Of Municipality
                                                Of Pontevedra, Capiz</a></h2>
                                        <p>Author(s): Honey Lee E. Casa</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Dec 2023 | Pages [116 - 137]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1122145"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <!--<div class="article-titles">-->
                                    <!--          <h2><a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1122146">Isdaanon Ballad: A Descriptive Analysis of the Verbal Arts of the River Fisherfolks in Capiz, Philippines</a></h2>-->
                                    <!--          <p>Author(s): Leo Andrew B. Biclar</p>-->
                                    <!--          <div class="article-btn">-->
                                    <!--              <p>Article | Published Online: 05 Dec 2023 | Pages [138 - 149]</p>-->
                                    <!--              <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1122146" class="btn1">Read More</a>-->
                                    <!--          </div>-->
                                    <!--       </div>-->
                                </li>
                            </ul>
                        @elseif($journal->acronym == 'ijerm' && $journal->volume->first()->issue->first()->issue_id == 2001)
                            <ul class="search-results explore-list">
                                <li>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5246021">Unveiling
                                                the Determinants of Actual Use among Google Drive Users: A Comprehensive
                                                Analysis</a></h2>
                                        <p>Author(s): Surahman Surahman, Himanshu Shee, Bela Barus, Sugeng Hariyadi,
                                            Afrillia Syailendra, Sarlivia </p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 March 2024 | Pages [1 - 15]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5246021"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5246022">Motivation
                                                And Engagement Towards Face-To-Face Classes Of Indigenous Students Of
                                                Aglalana Integrated School</a></h2>
                                        <p>Author(s): Marie Jean P. Penson</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 March 2024 | Pages [16 - 39]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5246022"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5246023">Client’s
                                                Satisfaction with the Services Offered by (Rural Health Units) RHU’s in the
                                                Province of Capiz</a></h2>
                                        <p>Author(s): Jennifer P. Benliro, Jay Ann B. Gregorio</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 March 2024 | Pages [40 - 45]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5246023"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5246024">Some
                                                Characterizations of Total Outer-connected Domination in Graphs</a></h2>
                                        <p>Author(s): Lorelie C. Canada</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 March 2024 | Pages [46 - 52]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5246024"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5246025">Dissemination
                                                of the Vision, Mission, Goals, and Objectives of Urdaneta City University:
                                                Ethical Implications to Integrity, Teamwork, Competence and
                                                Transcendence</a></h2>
                                        <p>Author(s): Gleemoore C. Makie</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 March 2024 | Pages [53 - 71]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5246025"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5246026">Balancing
                                                Work and Family Commitments: Adaptive Strategies of Dual Income Couples</a>
                                        </h2>
                                        <p>Author(s): Jesselyn C. Mortejo</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 March 2024 | Pages [72 - 78]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5246026"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5246027">Psychosocial
                                                and Physical Risks: Retelling the Stories of the Orphans</a></h2>
                                        <p>Author(s): Jinky Lynn B. Contreras</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 March 2024 | Pages [79 - 95]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5246027"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        @elseif($journal->acronym == 'jblm' && $journal->volume->first()->issue->first()->issue_id == 1001)
                            <!--<ul class="nav nav-pills search-journal-nav-pills explore-pills">-->
                            <!--   <li class="nav-item"> <a class="nav-link active" data-toggle="pill" href="#latest" role="tab" aria-controls="pills-latest" aria-selected="true">Vol 01, Issue 01</a> </li>-->
                            <!--<li class="nav-item"> <a class="nav-link" data-toggle="pill" href="#open-access" role="tab" aria-controls="pills-open-access" aria-selected="false">Open access</a> </li>-->
                            <!--<li class="nav-item"> <a class="nav-link" data-toggle="pill" href="#most-read" role="tab" aria-controls="pills-most-read" aria-selected="false">Most Read</a> </li>-->
                            <!--<li class="nav-item"> <a class="nav-link" data-toggle="pill" href="#most-citied" role="tab" aria-controls="pills-most-citied" aria-selected="false">Most Citied</a> </li>-->
                            <!--<li class="nav-item"> <a class="nav-link" data-toggle="pill" href="#trending" role="tab" aria-controls="pills-trending" aria-selected="false">Trending</a> </li>-->
                            <!--</ul>-->
                            <!--<div class="tab-content mt-3 ">-->
                            <!--   <div class="tab-pane fade show active" id="latest" role="tabpanel" aria-labelledby="latest-tab">-->
                            <ul class="search-results explore-list">
                                <li>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243012">Examining
                                                Thermal Comfort Levels and Physical Performance in Malaysian Settings: A
                                                Simulation Chamber Experiment</a></h2>
                                        <p>Author(s): Che Mohammad Nizam, Ahmad Rasdan Ismail, Norlini Husshin</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 09 Oct 2023 | Pages [1 - 8]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243012"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243013">MALAYSIA
                                                CONSTRUCTION WORKER PERCEPTION ON HEAT STRESS AND ITS IMPACT ON WORK
                                                PERFORMANCE</a></h2>
                                        <p>Author(s): Che Mohammad Nizam, Ahmad Rasdan Ismail, Norlini Husshin</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 09 Oct 2023 | Pages [9 - 16]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243013"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243014">THE
                                                ROLE OF FINANCIAL INSTITUTIONS IN PROMOTING ENTREPRENEURSHIP AND ECONOMIC
                                                GROWTH</a></h2>
                                        <p>Author(s): Dr. Mercy Tony</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 09 Oct 2023 | Pages [17 - 25]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243014"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243015">OPTIMIZING
                                                THE EFFICIENCY AND COST OF ENTERPRISE LOGISTICS WAREHOUSE: FROM THE
                                                PERSPECTIVE OF GREEN SUPPLY CHAIN MANAGEMENT</a></h2>
                                        <p>Author(s): Yunlin Chen</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 09 Oct 2023 | Pages [26 - 46]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243015"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243016">CLIMATE
                                                CHANGE VARIATION AND FARMER’S VIEWPOINT ON AGRICULTURE IN SEMI-ARID
                                                REGION</a></h2>
                                        <p>Author(s): A. S. Said, P. Jeevaragagam, S. Harun</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 09 Oct 2023 | Pages [47 - 55]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243016"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243017">UTILIZING
                                                NET PROMOTER SCORE TO ASSESS CUSTOMER SATISFACTION AND BRAND LOYALTY IN THE
                                                REAL ESTATE INDUSTRY OF THAILAND</a></h2>
                                        <p>Author(s): Nilubon Sivabrovornvatana</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 09 Oct 2023 | Pages [56 - 66]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243017"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243018">ECONOMIC
                                                INEQUALITY AND ITS EFFECTS ON THE DECISION-MAKING OF ENTREPRENEURS IN
                                                EMERGING ECONOMIES</a></h2>
                                        <p>Author(s): Dr. Mercy Tony</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 09 Oct 2023 | Pages [67 - 73]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243018"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- </div>-->
                            <!--</div>  -->
                        @elseif($journal->acronym == 'jblm' && $journal->volume->first()->issue->first()->issue_id == 1002)
                            <!--<ul class="nav nav-pills search-journal-nav-pills explore-pills">-->
                            <!--   <li class="nav-item"> <a class="nav-link active" data-toggle="pill" href="#latest" role="tab" aria-controls="pills-latest" aria-selected="true">Vol 01, Issue 01</a> </li>-->
                            <!--<li class="nav-item"> <a class="nav-link" data-toggle="pill" href="#open-access" role="tab" aria-controls="pills-open-access" aria-selected="false">Open access</a> </li>-->
                            <!--<li class="nav-item"> <a class="nav-link" data-toggle="pill" href="#most-read" role="tab" aria-controls="pills-most-read" aria-selected="false">Most Read</a> </li>-->
                            <!--<li class="nav-item"> <a class="nav-link" data-toggle="pill" href="#most-citied" role="tab" aria-controls="pills-most-citied" aria-selected="false">Most Citied</a> </li>-->
                            <!--<li class="nav-item"> <a class="nav-link" data-toggle="pill" href="#trending" role="tab" aria-controls="pills-trending" aria-selected="false">Trending</a> </li>-->
                            <!--</ul>-->
                            <!--<div class="tab-content mt-3 ">-->
                            <!--   <div class="tab-pane fade show active" id="latest" role="tabpanel" aria-labelledby="latest-tab">-->
                            <ul class="search-results explore-list">
                                <li>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5245001">Teachers’
                                                Research Engagement And Challenges: Bases For Mentoring Program</a></h2>
                                        <p>Author(s): Ronilo G. Berondo</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 25 Dec 2023 | Pages [74 - 79]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5245001"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5245002">The
                                                Mode Choice Model of Civil Servant Commuters in Makassar City</a></h2>
                                        <p>Author(s): Muhammad Isran Ramli, Muhammad Ikhsan Sabil, Sakti Adji Adisasmita,
                                            Muralia Hustim</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 25 Dec 2023 | Pages [80 - 87]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5245002"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5245003">The
                                                Role of Incoterms and Relational Resources on Competitive Advantage: A Study
                                                of Freight Forwarders Company in Indonesia</a></h2>
                                        <p>Author(s): Ahmad Sugiono, Agus Rahayu, Lili Adi Wibowo, Ratih Hurriyati</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 25 Dec 2023 | Pages [88 - 95]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5245003"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5245004">Development
                                                Of The Emergent Theory In Fostering Caring And Leadership Resiliency In
                                                Times Of Public Health Emergencies</a></h2>
                                        <p>Author(s): Ronnell D. Dela Rosa</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 25 Dec 2023 | Pages [96 - 103]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5245004"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5245005">Frequency
                                                Analysis Of Rainfall In Johor State Using Probability Distribution</a></h2>
                                        <p>Author(s): Aminu Saad Said, Isma’il Mahmud Umar, Ponselvi Jeevaragagam, Sobri
                                            Harun</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 25 Dec 2023 | Pages [104 - 113]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5245005"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- </div>-->
                            <!--</div>  -->
                        @elseif($journal->acronym == 'cli' && $journal->volume->first()->issue->first()->issue_id == 1001)
                            <ul class="search-results explore-list">
                                <li>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5242901">Vulnerable
                                                Amalgamation of Loneliness And Spirituality: An Analysis Of 'The Rabbit
                                                Hutch' By Tess Gunty</a></h2>
                                        <p>Author(s): Donny Syofyan</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 17 Oct 2023 | Pages [1 - 15]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5242901"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5242902">Discovering
                                                Self-Identity and Confronting Racism in the Novel, 'Indian No More' by
                                                Charlene Willing McManis and Traci Sorell</a></h2>
                                        <p>Author(s): Donny Syofyan</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 17 Oct 2023 | Pages [16 - 26]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5242902"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5242903">Study
                                                Of The Market Potential Of Rubber Pillows For Community Enterprises Nakhon
                                                Si Thammarat Province</a></h2>
                                        <p>Author(s): Nilubon Sivabrovornvat</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 17 Oct 2023 | Pages [27 - 32]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5242903"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5242904">Implementation
                                                Of Capacity Building At Salatiga City Regional Civil Service Agency</a></h2>
                                        <p>Author(s): Meida Rachmawati, Adhi Susano, Masayu Endang Apriyanti, Dona Fitria,
                                            Sri Iswati</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 17 Oct 2023 | Pages [33 - 41]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5242904"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5242905">The
                                                Construction Of Reyogponorogo Monument And Museum To Promote Historical
                                                Literacy And Cultural Tourism</a></h2>
                                        <p>Author(s): Abdul Rohim, Nurweni Saptawuryandari, Khairul Fuad, Asep Supriadi,
                                            Saefuddin, Agus Yulianto</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 17 Oct 2023 | Pages [42 - 50]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5242905"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <!--<div class="article-titles">-->
                                    <!--   <h2><a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5242906">The Impact of Influencer Components on Generation Z's Green Purchase Intentions: The Mediating Role of Green Attitude and Subjective Norms</a></h2>-->
                                    <!--   <p>Author(s): Trinh Le Tan, Tran Minh Tung, Nguyen Duc Quang</p>-->
                                    <!--   <div class="article-btn">-->
                                    <!--       <p>Article | Published Online: 17 Oct 2023 | Pages [51 - 65]</p>-->
                                    <!--       <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5242906" class="btn1">Read More</a>-->
                                    <!--   </div>-->
                                    <!--</div>-->
                                </li>
                            </ul>
                        @elseif($journal->acronym == 'cli' && $journal->volume->first()->issue->first()->issue_id == 1002)
                            <ul class="search-results explore-list">
                                <li>
                                    <!--<div class="article-titles">-->
                                    <!--    <h2><a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5245011">Enabling the Cultural and Heritage Management Practices of the Indigenous Peoples</a></h2>-->
                                    <!--    <p>Author(s): Leo Andrew B. Biclar</p>-->
                                    <!--    <div class="article-btn">-->
                                    <!--        <p>Article | Published Online: 05 Dec 2023 | Pages [51 - 61]</p>-->
                                    <!--        <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5245011" class="btn1">Read More</a>-->
                                    <!--    </div>-->
                                    <!-- </div>-->
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5245011">Encouraging
                                                Investment Through Sustainable Tourism And The Development Of Local Culture,
                                                In West Papua</a></h2>
                                        <p>Author(s): Rully Novie Wurarah, Ismael Sarfefa, Roni Bawole, Ridwan Sala,
                                            Syafrudin Raharjo</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Dec 2023 | Pages [51 - 56]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5245011"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5245012">The
                                                Impact of Socio – economic and Traditional Practices of the Local Folks in
                                                the Tourism Industry</a></h2>
                                        <p>Author(s): Ronilo G. Berondo</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Dec 2023 | Pages [57 - 63]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5245012"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5245013">Language
                                                and Culture Interconnectedness: A Case Study Of a Chinese College Student
                                                Nurtured in the Cordilleras</a></h2>
                                        <p>Author(s): Chasuna Li</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Dec 2023 | Pages [64 - 71]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5245013"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5245014">Development
                                                Of An Augustinian Recollect Whole Learner Framework As A School
                                                Transformation Model</a></h2>
                                        <p>Author(s): Sr. Rhena Sherra H. Caranzo, A.R</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Dec 2023 | Pages [72 - 85]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5245014"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5245015">Cultural
                                                Diplomacy’s Hidden Potential: Exploring Goals through Indonesian’s
                                                Scholarship Program</a></h2>
                                        <p>Author(s): Sofia Trisni, Teuku Rezasyah, Junita Budi Rachman, Chandra Purnamad
                                        </p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Dec 2023 | Pages [86 - 97]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5245015"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <!--<div class="article-titles">-->
                                    <!--   <h2><a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5242906">The Impact of Influencer Components on Generation Z's Green Purchase Intentions: The Mediating Role of Green Attitude and Subjective Norms</a></h2>-->
                                    <!--   <p>Author(s): Trinh Le Tan, Tran Minh Tung, Nguyen Duc Quang</p>-->
                                    <!--   <div class="article-btn">-->
                                    <!--       <p>Article | Published Online: 17 Oct 2023 | Pages [51 - 65]</p>-->
                                    <!--       <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5242906" class="btn1">Read More</a>-->
                                    <!--   </div>-->
                                    <!--</div>-->
                                </li>
                            </ul>
                        @elseif($journal->acronym == 'cli' && $journal->volume->first()->issue->first()->issue_id == 2001)
                            <ul class="search-results explore-list">
                                <li>
                                    <!--<div class="article-titles">-->
                                    <!--    <h2><a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5245011">Enabling the Cultural and Heritage Management Practices of the Indigenous Peoples</a></h2>-->
                                    <!--    <p>Author(s): Leo Andrew B. Biclar</p>-->
                                    <!--    <div class="article-btn">-->
                                    <!--        <p>Article | Published Online: 05 Dec 2023 | Pages [51 - 61]</p>-->
                                    <!--        <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5245011" class="btn1">Read More</a>-->
                                    <!--    </div>-->
                                    <!-- </div>-->
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5250901">Organizational
                                                Justice & Work Climate of Hotel Employees in Sarawak, Malaysia</a></h2>
                                        <p>Author(s): Mark Kasa, Zaiton Hassan</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 01 April 2024 | Pages [1 - 7]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5250901"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5250902">Public
                                                Interest Litigation for the protection of vulnerable segment of the society
                                                and the achievement of social justice for them: Bangladesh Perspective</a>
                                        </h2>
                                        <p>Author(s): Kalim Ullah</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 01 April 2024 | Pages [8 - 23]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5250902"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5250903">Relationship
                                                of digital tourism strategies and performance of beach and water-themed
                                                resorts in MISAMIS ORIENTAL amidst the new normal</a></h2>
                                        <p>Author(s): Bert Anthony S. Bade</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 01 April 2024 | Pages [24 - 33]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5250903"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5250904">Application
                                                of the Levinisian Face-to-Face Dialogue among Local Government Units: Basis
                                                of Trendsetting Organizational Communication</a></h2>
                                        <p>Author(s): Renebeth Gatudan Donguiz</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 01 April 2024 | Pages [34 - 42]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5250904"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5250905">Interpret
                                                The Conversation of The Lord Jesus in the Gospel of John Heuristic
                                                Approach</a></h2>
                                        <p>Author(s): Edward Sitepu, Slamet Triadi, Stefanus Djoko Budianto, Mathias A</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 01 April 2024 | Pages [43 - 53]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5250905"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5250906">DISCOVERING
                                                VULNERABLE EXPERIENCE: SEXUAL ABUSE, AND TRAUMATIC LIFE OF MAGGIE SULLIVAN
                                                IN JENNIFER DOWN’S BODIES OF LIGHT</a></h2>
                                        <p>Author(s): Donny Syofyan</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 01 April 2024 | Pages [54 - 64]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5250906"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <!--<div class="article-titles">-->
                                    <!--   <h2><a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5242906">The Impact of Influencer Components on Generation Z's Green Purchase Intentions: The Mediating Role of Green Attitude and Subjective Norms</a></h2>-->
                                    <!--   <p>Author(s): Trinh Le Tan, Tran Minh Tung, Nguyen Duc Quang</p>-->
                                    <!--   <div class="article-btn">-->
                                    <!--       <p>Article | Published Online: 17 Oct 2023 | Pages [51 - 65]</p>-->
                                    <!--       <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5242906" class="btn1">Read More</a>-->
                                    <!--   </div>-->
                                    <!--</div>-->
                                </li>
                            </ul>
                        @elseif($journal->acronym == 'cie' && $journal->volume->first()->issue->first()->issue_id == 1001)
                            <ul class="search-results explore-list">
                                <li>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5230401">THE
                                                AWARENESS OF IMPLEMENTING BUILDING INFORMATION MODELLING (BIM) FOR EDUCATORS
                                                IN MALAYSIA TVET INSTITUTIONS: A SYSTEMATIC LITERATURE REVIEW</a></h2>
                                        <p>Author(s): Nurul Hazalia Ismail, Dr. Ernawati Mustafa Kamal</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 31 Oct 2023 | Pages [1 - 22]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5230401"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5230402">ARTIFICIAL
                                                INTELLIGENCE AND MACHINE LEARNING FOR SUPPLY CHAIN RESILIENCE</a></h2>
                                        <p>Author(s): Ghada Elkady, Ahmed hesham Sedky</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 31 Oct 2023 | Pages [23 - 28]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5230402"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5230403">CALORIES
                                                BURNT PREDICTION USING MACHINE LEARNING APPROACH</a></h2>
                                        <p>Author(s): Mohammad Tarek Aziz, Sudheesh R, Renzon Daniel Cosme Pecho, Nayeem
                                            Uddin Ahmed Khan, Akba Ull Hasna Era, MD. Abir Chowdhury</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 31 Oct 2023 | Pages [29 - 36]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5230403"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5230404">IMPLEMENTATION
                                                OF SAFETY MANAGEMENT OF SELECTED CONSTRUCTION COMPANIES IN MANILA</a></h2>
                                        <p>Author(s): Reynaldo C. Carolino</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 31 Oct 2023 | Pages [37 - 77]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5230404"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5230405">A
                                                COMPARATIVE STUDY OF RELIABILITY-CENTERED MAINTENANCE AND NEW-BASED
                                                MAINTENANCE APPROACHES ON A WORKING-HOURS ENGINE: A CASE STUDY</a></h2>
                                        <p>Author(s): Duarte da Costa Sarmento</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 31 Oct 2023 | Pages [78 - 91]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5230405"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        @elseif($journal->acronym == 'seer' && $journal->volume->first()->issue->first()->issue_id == 1001)
                            <ul class="search-results explore-list">
                                <li>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243101">Retraction
                                                Notice</a></h2>
                                        <p>Author(s):</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 03 Nov 2023 | Pages [1 - 15]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243101"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243102">Climate
                                                Change Impact On Upper Layang Reservoir Operation</a></h2>
                                        <p>Author(s): Nur Nabilah Farhana Mohammad Fathilah, Aminu Sa’ad Sa’id, Ponselvi
                                            Jeevaragagam, Kamarul Azlan Mohd Nasir</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 03 Nov 2023 | Pages [16 - 26]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243102"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243103">Forest
                                                Fire Incident Forecasting System In Permanent Reserved Forest In Peninsular
                                                Malaysia Using Big Data Analytics</a></h2>
                                        <p>Author(s): Mazzlida Mat Deli</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 03 Nov 2023 | Pages [27 - 39]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243103"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243104">Sustainable
                                                Ecotourism: The Case of the Riverine Communities in Capiz, Philippines</a>
                                        </h2>
                                        <p>Author(s): Leo Andrew B. Bicla, Efren L. Linan, Rodyard B. Madiclum, Ruel F.
                                            Olapane</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 03 Nov 2023 | Pages [40 - 49]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243104"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243105">Chemical
                                                Composition And Surface Images Of Untreated And Urea-Treated Rice Straw As
                                                Influenced By Days After Threshing</a></h2>
                                        <p>Author(s): Emely J. Escala</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 03 Nov 2023 | Pages [50 - 56]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243105"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243106">Linking
                                                the Coconut Farmers in the Philippines to Better Market Opportunities
                                                through Community-based Participatory Action Research</a></h2>
                                        <p>Author(s): Rodyard B. Madiclum</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 03 Nov 2023 | Pages [57 - 67]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243106"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243107">THE
                                                EFFECT OF SOIL REINFORCEMENT ON STRENGTH OF THE SOIL</a></h2>
                                        <p>Author(s): Mahmoud Al Khazaleh</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 03 Nov 2023 | Pages [68 - 79]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243107"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        @elseif($journal->acronym == 'seer' && $journal->volume->first()->issue->first()->issue_id == 2001)
                            <ul class="search-results explore-list">
                                <li>

                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5242201">Floral
                                                Attributes And Toddy Yield Of Selected Dwarf Coconut Varieties As Affected
                                                By Tapping Season</a></h2>
                                        <p>Author(s): Salvacion J. Legaspi</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 07 May 2024 | Pages [1 - 7]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5242201"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>

                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5242202">Microplastic
                                                Status Of Bivalves In The Coastal Zones Of Capiz</a></h2>
                                        <p>Author(s): Mae Ann L. Launio, Stephanie S. Pimentel</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 07 May 2024 | Pages [8 - 14]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5242202"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>

                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5242203">Heavy
                                                Metals In Bivalves From Coastal Municipalities Of Capiz,Philippines</a></h2>
                                        <p>Author(s): Stephanie S. Pimentel</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 07 May 2024 | Pages [15 - 21]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5242203"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>

                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5242204">Access
                                                To The Agri Negosyo Loan Program Of Dairy Buffalo Entrepreneurs In Nueva
                                                Ecija, Philippines</a></h2>
                                        <p>Author(s): Joel F. Cabading, Maria Victoria Gummert, Ronnie D. Domingo, Ericson
                                            N. Dela Cruz</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 07 May 2024 | Pages [22 - 47]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5242204"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>

                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5242205">Narrative
                                                Analysis Of European Union Deforestation Regulations On Indonesian And
                                                Malaysian Palm Oil Commodities</a></h2>
                                        <p>Author(s): Ros tamaji Korniawan</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 07 May 2024 | Pages [48 - 53]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5242205"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>

                                </li>
                            </ul>
                        @elseif($journal->acronym == 'pb' && $journal->volume->first()->issue->first()->issue_id == 1001)
                            <ul class="search-results explore-list">
                                <li>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243201">Comparison
                                                Of Contraceptive Injection Between Monthly, Bimonthly And TriMonthly
                                                Combination Of Medroxyprogesterone Acetate With Estradiol Cypionate:
                                                Hemodynamic Effect, Weight Gain And Compliance Of Multicenter Clinical
                                                Trials, Phase III Randomization Study</a></h2>
                                        <p>Author(s): Ichwanul Adenin, Ashon Sa’adi, Muhammad Fidel Siregar, Hilma Putri
                                            Lubis, Indri Adriztina</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 10 Nov 2023 | Pages [1 - 7]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243201"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243202">Umbilical
                                                Cord Stem Cell Stem Cell Therapy For Rare Genetic Disease Prader-Willi
                                                Syndrome</a></h2>
                                        <p>Author(s): Deby Susanti Vinski, Natasha Cinta Vinski</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 10 Nov 2023 | Pages [8 - 16]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243202"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243203">Breakthrough
                                                Stem Cells Therapy For Children With Autism</a></h2>
                                        <p>Author(s): Deby Susanti Vinski, Natasha Cinta Vinski</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 10 Nov 2023 | Pages [17 - 23]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243203"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243204">Investigation
                                                of Biological Activities Catalytic Activity Antioxidant
                                                Activity of Silver Nanoparticles Synthesized By Using Mulberry
                                                (Morus) Leaf Extract</a></h2>
                                        <p>Author(s): Shabir Ahmad wani, Bibi Ahmadi Khatoon, Farhath Khanum</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 10 Nov 2023 | Pages [24 - 36]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243204"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243205">Synthesis
                                                And Characterisation of Copper Nanoparticles Using
                                                Aqueous Leaf Extract of Lagerstreomia Speciose and Their
                                                Biological, Antioxidant and catalytic activities</a></h2>
                                        <p>Author(s): Shabir Ahmad wani, Rashmi Venkatesh, Bibi Ahmadi Khatoon, Farhath
                                            Khanum</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 10 Nov 2023 | Pages [37 - 49]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5243205"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        @elseif($journal->acronym == 'rer' && $journal->volume->first()->issue->first()->issue_id == 1001)
                            <ul class="search-results explore-list">
                                <li>

                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5244301">Economic
                                                Inequality Academic Stress, Optimism, And Mental
                                                Health Among Students In Response To Going Back To Offline School
                                                After Covid-19 Pandemic</a></h2>
                                        <p>Author(s): Anissa Lestari Kadiyono, Aryo Bima Fathoni Cahyono</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 17 Nov 2023 | Pages [1 - 8]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5244301"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>

                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5244302">Knowledge
                                                on Life Saving Skills Among Employees and Students of CAPSU Pilar</a></h2>
                                        <p>Author(s): Jennifer P. Benliro</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 17 Nov 2023 | Pages [9 - 12]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5244302"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>

                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5244303">COVID-19
                                                Constructs of College Students and New Normal Learning Delivery Modalities
                                                in Higher Education</a></h2>
                                        <p>Author(s): Louis Placido F. Lachica</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 17 Nov 2023 | Pages [13 - 18]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5244303"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>

                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5244304">Analyzing
                                                Science Communication Discourses in a Global Society: A Case Study of a
                                                Graduate School Classroom</a></h2>
                                        <p>Author(s): Louis Placido F. Lachica, Giselle D. Arintoc</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 17 Nov 2023 | Pages [19 - 30]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5244304"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>

                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5244305">Level
                                                of Writing Apprehension and Factors Affecting the Writing
                                                Performance: Perspectives of the English Major Students</a></h2>
                                        <p>Author(s): Roland A. Niez</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 17 Nov 2023 | Pages [31 - 45]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5244305"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>

                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5244306">Speech
                                                Profile Of Pre-Service Teachers:
                                                Input To Speech Enhancement Program And Innovations</a></h2>
                                        <p>Author(s): Anna May E. Candelario</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 17 Nov 2023 | Pages [46 - 55]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5244306"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>

                                </li>
                            </ul>
                        @elseif($journal->acronym == 'sfr' && $journal->volume->first()->issue->first()->issue_id == 1001)
                            <ul class="search-results explore-list">
                                <li>

                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1122701">An
                                                Analysis Of The Relationship Between Oil Prices And Inflation In
                                                Oil-Dependent Economies: With Special Reference To OMAN</a></h2>
                                        <p>Author(s): Mercy Toni</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 15 Feb 2024 | Pages [1 - 9]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1122701"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1122702">The
                                                Life Cycle And Dividend Premium Toward Dividend-Paying Behavior In
                                                Manufacturing Sector Companies</a></h2>
                                        <p>Author(s): Mellyza Silvy, I Made Narsa, Windijarto, Priest Pujiantoro</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 15 Feb 2024 | Pages [10 - 20]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1122702"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1122703">Financial
                                                Distress During the COVID-19 Pandemic: Altman and Springate Model
                                                Prediction</a></h2>
                                        <p>Author(s): Ekayana Sangkasari Paranita, Andri Herdiansah</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 15 Feb 2024 | Pages [21 - 35]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1122703"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1122704">Impact
                                                of financial contagion on developed and emerging economies in the wake of
                                                the covid-19 pandemic and the Russia-Ukraine conflict</a></h2>
                                        <p>Author(s): Hung Quang Phung</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 15 Feb 2024 | Pages [36 - 50]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1122704"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1122705">Learning
                                                Appreciation By Innovation (L.A.B.I.) Model: BANKING ON THE ATMs OF SPEECH
                                                WRITING</a></h2>
                                        <p>Author(s): Adamson N. Labi</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 15 Feb 2024 | Pages [51 - 57]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1122705"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1122706">Moral
                                                Hazard Versus Adverse Selection On The People’s Business Credit Program In
                                                Indonesia</a></h2>
                                        <p>Author(s): Wayan Widnyana, Sapta Rini Widyawati, Wayan Sukadana</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 15 Feb 2024 | Pages [58 - 66]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/1122706"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>


                                </li>
                            </ul>
                        @elseif($journal->acronym == 'rer' && $journal->volume->first()->issue->first()->issue_id == 1002)
                            <ul class="search-results explore-list">
                                <li>

                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248601">Oral
                                                Discourse In English Of Second Language Teachers: An Analysis</a></h2>
                                        <p>Author(s): Maria Morena E. Dela Peña</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 20 Dec 2023 | Pages [56 - 69]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248601"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>

                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248602">A
                                                Comparison Of Bachelor Of Physical Education In Philippines: Input To
                                                Curriculum Development</a></h2>
                                        <p>Author(s): Alonzo L Mortejo, Jesselyn C. Mortejo</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 20 Dec 2023 | Pages [70 - 76]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248602"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>

                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248603">Differential
                                                Effects Of Mother Tongue And English Language As A Medium Of Instruction On
                                                Pupil’s Numeracy Skills</a></h2>
                                        <p>Author(s): Angeline S. Gaspar</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 20 Dec 2023 | Pages [77 - 118]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248603"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>

                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248604">Linguistic
                                                Errors In Written Discourse</a></h2>
                                        <p>Author(s): Maria Morena E. Dela Peña</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 20 Dec 2023 | Pages [119 - 140]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248604"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>

                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248605">Comparing
                                                The Effectiveness Of Distance Learning And Onsite Learning In Pre-Medical
                                                Course</a></h2>
                                        <p>Author(s): Pongkit Ekvitayavetchanukul, Patraporn Ekvitayavetchanukul</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 20 Dec 2023 | Pages [141 - 147]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248605"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>

                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248606">Enhancing
                                                Math Problem-Solving Skills in Secondary 1 (Grade 7) Students through the
                                                Integration of KWDL Technique and BAR Model in Learning Activities</a></h2>
                                        <p>Author(s): Aldrin B. Boca, Asst Prof Rossarin Jermtaisong</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 20 Dec 2023 | Pages [148 - 165]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248606"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>

                                </li>
                            </ul>
                        @elseif($journal->acronym == 'cie' && $journal->volume->first()->issue->first()->issue_id == 2001)
                            <ul class="search-results explore-list">
                                <li>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248801">Fiberglass
                                                Ferrocement Roof Reinforced</a></h2>
                                        <p>Author(s): Ukrit Najampa, Jeerawan Jeenno, Oraphan Thongkam</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Feb 2024 | Pages [1 - 6]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248801"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248802">Analysis
                                                The Effect Of Magnet Structure On The Unbalance Magnetic Pull Of Fractional
                                                Slot Number Type In Permanent Magnet Machine</a></h2>
                                        <p>Author(s): Tajuddin Nur, Chairul G. Irianto, Syamsir Abduh, Herlina, Pudji
                                            Irasari, Eduard Muljadi</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Feb 2024 | Pages [7 - 14]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248802"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248803">Analytical
                                                Hierarchy Process (AHP) and Superdecisions to Select Building Material for
                                                Housing Construction at New Capital Nusantara (IKN), East Kalimantan,
                                                Indonesia</a></h2>
                                        <p>Author(s): Elisa Haryonugroho, AAB Dinariyana</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Feb 2024 | Pages [15 - 30]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248803"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248804">Effect
                                                of Glass Fiber and Rubber on the Properties of Expansive Soil and Its
                                                Utilization as Subgrade Reinforcement in Road Application</a></h2>
                                        <p>Author(s): Mahmoud Al Khazaleh, Dua’a Omran Al Masri, Mohamad Hussen Saleh
                                            Alkhodari, Diya’ Ali Yousef Hamdan, Ala’a Ali Yousef Hamdan, Mohammad Nasr
                                            Mohammad Bani Atta</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Feb 2024 | Pages [31 - 41]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248804"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248805">Characterization
                                                Of Resonant Coupled Inductor In A Wireless Power Transfer System</a></h2>
                                        <p>Author(s): Alan P. Nebrida</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Feb 2024 | Pages [42 - 59]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248805"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        @elseif($journal->acronym == 'jblm' && $journal->volume->first()->issue->first()->issue_id == 2001)
                            <ul class="search-results explore-list">
                                <li>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5246301">How
                                                Thai Universities Can Better Prepare Graduates For The Workplace</a></h2>
                                        <p>Author(s): Mariano Carrera</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Feb 2024 | Pages [1 - 9]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5246301"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5246302">The
                                                Effect Of Work Motivation And Transformative Leadership On Freelancer
                                                Innovative Behaviour In The Oil And Gas Mining Industry Mediated By
                                                Absorptive Capacity</a></h2>
                                        <p>Author(s): Eduard Sinaga, Suparto Wijoyo, Yetty Dwi Lestary, Adrid Indaryanto,
                                            Bambang Dwi Harijadi</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Feb 2024 | Pages [10 - 24]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5246302"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5246303">The
                                                Impact Of Social Media And Online Networking On The Shopping Behavior Of
                                                Young Adults In Ho Chi Minh City</a></h2>
                                        <p>Author(s): Huynh Quoc Anh</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Feb 2024 | Pages [25 - 29]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5246303"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5246304">Evaluating
                                                The Bachelor Of Sciences In Office Administration Practicum Program: A
                                                Comprehensive Assessment Of Student Profiles, Host Evaluations, And Student
                                                Feedback</a></h2>
                                        <p>Author(s): Walter B. Juera</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Feb 2024 | Pages [30 - 47]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5246304"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5246305">Unveiling
                                                the Augmented Realm: Exploring the Dynamic Relationship between Augmented
                                                Reality Technology and Consumer Engagement for Enhanced Purchase
                                                Behavior</a></h2>
                                        <p>Author(s): Nguyen Ngoc Bao Tran</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Feb 2024 | Pages [48 - 58]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5246305"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5246306">The
                                                Forgotten Legacy: Three Important Words In Stewardship</a></h2>
                                        <p>Author(s): Edward Sitepu, Slamet Triadi, Sostenis Nggebu</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 05 Feb 2024 | Pages [59 - 69]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5246306"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        @elseif($journal->acronym == 'rer' && $journal->volume->first()->issue->first()->issue_id == 2001)
                            <ul class="search-results explore-list">
                                <li>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248901">Conceptual
                                                Understanding Of Bsed Science Major Students Using The Molecular Models In
                                                Inorganic Chemistry</a></h2>
                                        <p>Author(s): Ma. Victoria D. Naboya</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 25 March 2024 | Pages [1 - 7]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248901"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248902">Augustinian
                                                Recollect Student Crusaders’ Response to Educational Disruption at Colegio
                                                De Santa Rita De San Carlos, Inc.: Basis for a Matatag Student Activity
                                                Model</a></h2>
                                        <p>Author(s): Ma.Theresa C.Fernandez</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 25 March 2024 | Pages [8 - 17]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248902"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248903">Math
                                                Anxiety and Development of an Instructional Material to Improve Performance
                                                in Mathematics</a></h2>
                                        <p>Author(s): Gemma F. Quintana</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 25 March 2024 | Pages [18 - 30]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248903"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248904">Project-Based
                                                Learning in Developing Children’s Social-Emotional Skills at Public
                                                Kindergarten 9 Samarinda</a></h2>
                                        <p>Author(s): Hasbi Sjamsir, Almira Tasya Vania, Heppy Liana</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 25 March 2024 | Pages [31 - 39]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248904"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248905">The
                                                Correlation Between Language Anxiety And Foreign Language Achievement Among
                                                Undergraduate Students At The University Of Tabuk</a></h2>
                                        <p>Author(s): Dheifallah Hussein Falah Altamimi</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 25 March 2024 | Pages [40 - 53]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248905"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                    <div class="article-titles">
                                        <h2><a
                                                href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248906">The
                                                Reality Of Marketing In Arab University Libraries Using Social Media
                                                Platforms And Its Impact On Information Services From The Point Of View Of
                                                Faculty Members</a></h2>
                                        <p>Author(s): Ibrahim Khleel Khader</p>
                                        <div class="article-btn">
                                            <p>Article | Published Online: 25 March 2024 | Pages [54 - 69]</p>
                                            <a href="{{ url('') }}/publication/journal/{{ $journal->acronym }}/5248906"
                                                class="btn1">Read More</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        @else
                            <h5>No Articles</h5>
                        @endif
                    </div>
                </div>
            </div>
    </section>
@endsection
