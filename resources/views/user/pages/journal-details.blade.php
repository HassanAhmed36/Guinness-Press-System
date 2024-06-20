@extends('user.layouts.template')
{{--
@section('title', $title)
@section('keywords', $keywords)
@section('description', $description) --}}
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
                <div class="col-md-6 col-sm-12">
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
                        {!! $journal->description !!}
                    </div>
                    <div class="btn-group">
                        <a href="javascript:;" data-fancybox="" data-src="#submitArticlePopup"
                            class="btn btn-light btn-blue red-btn">Submit Your Article</a>
                        <a href="{{ url('/journal', ['journal_name' => $journal->acronym, 'journal_p' => 'editorial-board']) }}"
                            class="btn btn-light btn-blue">Editorial Board</a>
                        <a href="{{ url('/journal', ['journal_name' => $journal->acronym, 'journal_p' => 'join-board']) }}"
                            class="btn btn-light btn-blue">Join Our Editors Board</a>
                    </div>
                </div>
                <!--<div class="col-6 col-lg-2">-->

                <!--<a href="{{ url('/submit-articles') }}" class="btn btn-light btn-blue">Submit your Article</a>-->
                <!--</div>-->
                <!--<div class="col-6 col-lg-2">-->

                <!--</div>-->
                <div class="col-md-4 col-sm-12">
                    <div class="journal_metrics_box">
                        <div class="metrics_header">
                            <i class="fas fa-chart-bar"></i>
                            <span>Journal Metrics</span>
                        </div>
                        <div class="actual-metrics-container has-metrics">
                            <div class="journalcard__metrics border">
                                <span class="metrics_label">Acceptance rate</span>
                                <span class="metrics_value">{{ $journal->journal_matrix->acceptance_rate }}%</span>
                            </div>
                            <div class="journalcard__metrics border">
                                <span class="metrics_label">Submission to final decision</span>
                                <span
                                    class="metrics_value">{{ $journal->journal_matrix->submission_to_final_decision }} days</span>
                            </div>
                            <div class="journalcard__metrics border">
                                <span class="metrics_label">Acceptance to publication</span>
                                <span
                                    class="metrics_value">{{ $journal->journal_matrix->acceptance_to_publication }} days</span>
                            </div>
                            <div class="journalcard__metrics border">
                                <span class="metrics_label">DOI Prefix</span>
                                <span class="metrics_value">{{ $journal->journal_matrix->dio_prefix }}</span>
                            </div>
                            <div class="journalcard__metrics border">
                                <span class="metrics_label">Publication Type</span>
                                <span class="metrics_value">{{ $journal->journal_matrix->publication_type }}</span>
                            </div>
                            <div class="journalcard__metrics border">
                                <span class="metrics_label">Publishing Model</span>
                                <span class="metrics_value">{{ $journal->journal_matrix->publishing_model }}</span>
                            </div>
                            <div class="journalcard__metrics border">
                                <span class="metrics_label">Journal Category</span>
                                <span class="metrics_value">{{ $journal->journal_matrix->journal_category }}</span>
                            </div>
                        </div>
                        <div class="journalcard__footer">
                            <div class="apc_label_value">
                                <span class="apc_labels">APC</span>
                                <span class="apc_data">${{ $journal->journal_matrix->acp }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="row">-->

            <!--</div>-->
        </div>
    </section>

    {{-- <section class="slider_bar">
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
    </section> --}}
@endsection
@section('body')
    <section class="journal_description">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="cocogoose_light text-uppercase other_css_3">
                        Journal overview
                    </h2>
                    <div class="over_view">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link " id="pills-manuscript-tab" data-bs-toggle="pill"
                                    data-bs-target="#manuscript_tab" type="button" role="tab"
                                    aria-controls="manuscript-tab" aria-selected="true">Manuscript Preparation -
                                    Guidelines</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#aims"
                                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">Aims and
                                    scope</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#editorial_policies" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Editorial Policies</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#instructions" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Author's Guidelines</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#eic" type="button" role="tab" aria-controls="pills-contact"
                                    aria-selected="false">Role of EIC </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#eb" type="button" role="tab" aria-controls="pills-contact"
                                    aria-selected="false">Role of EBM</button>
                            </li>
                        </ul>
                        <div class="tab-content mt-3 ">
                            <div class="tab-pane fade" id="manuscript_tab" role="tabpanel"
                                aria-labelledby="manuscript-tab">
                                <ul class="search-results">
                                    <li>
                                        {!! $journal->journal_overview->manuscript_prepation_guideline ?? '' !!}
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="aims" role="tabpanel" aria-labelledby="aims-tab">
                                <ul class="search-results">
                                    {!! $journal->journal_overview->aims_and_scope ?? '' !!}
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="editorial_policies" role="tabpanel"
                                aria-labelledby="editorial-tab">
                                <ul class="search-results">
                                    {!! $journal->journal_overview->editorial_polices ?? '' !!}
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="editorial" role="tabpanel" aria-labelledby="editorial-tab">
                                <ul class="search-results">
                                    {{-- {!! $journal->journal_overview->author_guideline ?? '' !!} --}}
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="instructions" role="tabpanel"
                                aria-labelledby="instructions-tab">
                                <ul class="search-results">
                                    {!! $journal->journal_overview->author_guideline ?? '' !!}
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="eic" role="tabpanel"
                                aria-labelledby="instructions-tab">
                                <ul class="search-results">
                                    {!! $journal->journal_overview->role_of_eic !!}
                                </ul>
                            </div>
                            <div class="tab-pane fade show" id="eb" role="tabpanel"
                                aria-labelledby="instructions-tab">
                                <ul class="search-results">
                                    {!! $journal->journal_overview->role_of_ebm !!}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <section class="search-journal-filters search-results explore_jarticles_sec">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row search-titles">
                            <div class="col-md-11 col-xl-11 col-sm-12 m-xl-auto m-md-auto">
                                <h1 class="explore-h">Explore articles</h1>
                            </div>
                        </div>
                        <div class="row search-journal-row">
                            <div class="col-md-11 col-xl-11 col-sm-12 m-xl-auto m-md-auto pt-5">
                                @forelse ($journal->volume as $volume)
                                    <div id="explore_jaccourdian" class="explore_jaccourdian">
                                        <div class="card border-0">
                                            <div class="card-header p-0 border-0" id="heading-{{ $volume->id }}">
                                                <button class="btn btn-link accordion-title border-0 collapse"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-{{ $volume->id }}" aria-expanded="true"
                                                    aria-controls="collapse-{{ $volume->id }}">
                                                    <span class="vol_no">
                                                        Volume {{ $volume->name }}
                                                        ({{ \Carbon\Carbon::parse($volume->created_at)->format('Y') }})
                                                    </span>
                                                    <i
                                                        class="fas fa-minus text-center d-flex align-items-center justify-content-center h-100"></i>
                                                </button>
                                            </div>
                                            <div id="collapse-{{ $volume->id }}" class="collapse show"
                                                aria-labelledby="heading-{{ $volume->id }}"
                                                data-bs-parent="#explore_jaccourdian">
                                                @foreach ($volume->issue as $issue)
                                                    <div class="card-body accordion-body">
                                                        <div class="issues_ofvolume">
                                                            <a href="{{ url('publication/journal/' . $journal->acronym . '/issue/' . $issue->issue_id) }}"
                                                                class="issue_link">Issue {{ $issue->name }}:</a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <h5>No Articles</h5>
                                @endforelse
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection
