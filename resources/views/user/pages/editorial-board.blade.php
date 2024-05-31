@extends('user.layouts.template')
@section('title', 'Editorial Board')
@section('banner')
    @php
        $journalname = '';
        $short_description = '';
        $abbs = session('abbs');
        $jsonArray = '';
        $journal_id = '';
        $journal_path = '';
        $editorialTeam = '';
    @endphp
    @foreach ($journals as $journal)
        @php
            if ($journal->path == $abbs) {
                $journal_path = $journal->path;
                $journal_id = $journal->journal_id;
                foreach ($journal->settings as $detail) {
                    if ($detail->setting_name == 'acronym' && $detail->locale == 'en') {
                        $journalname = $detail->setting_value;
                    }
                    if ($detail->setting_name == 'description' && $detail->locale == 'en') {
                        $short_description = $detail->setting_value;
                    }
                    if ($detail->setting_name == 'journalThumbnail') {
                        $jsonArray = json_decode($detail->setting_value, true);
                    }
                    if ($detail->setting_name == 'editorialTeam') {
                        $editorialTeam = $detail->setting_value;
                    }
                }
            }
        @endphp
    @endforeach
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
                    <img src="https://newversion.guinnesspress.org/ojs/public/journals/{{ $journal_id }}/{{ $jsonArray['uploadName'] }}"
                        class="img-fluid" alt="">
                </div>
                <div class="col-md-10 col-sm-12">
                    <div class="details_content">
                        <h3 class="cocogoose_light text-uppercase">
                            {{ $journalname }}
                        </h3>
                        <div class="access_type">
                            <div class="left_access">
                                <h5 class="text-uppercase">
                                    ISSN NO : {{ $array['journal_issn'] }}
                                </h5>
                            </div>
                            <div class="right_access">
                                <img src="https://www.guinnesspress.org/bkp/assets/img/open-access-logo.png"
                                    class="img-fluid" />
                            </div>
                        </div>
                        {!! $short_description !!}
                    </div>
                    <div class="btn-group">
                        <a href="javascript:;" data-fancybox="" data-src="#submitArticlePopup"
                            class="btn btn-light btn-blue red-btn">Submit Your Article</a>
                        <a href="{{ url('/publication/journal', ['journal_name' => $journal_path]) }}"
                            class="btn btn-light btn-blue">Journal Home</a>
                        <a href="{{ url('/journal', ['journal_name' => $journal_path, 'journal_p' => 'join-board']) }}"
                            class="btn btn-light btn-blue">Join Our Editors Board</a>
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

    <section class="editorial_boardsec">
        <div class="container-fluid">
            <div class="container">

                <div class="divcontainer">
                    <div class="sectionhead">
                        <h4>Editorial Board</h4>
                    </div>

                    <div class="rowdiv">


                        @foreach ($array['board_members'] as $board_member)
                            <div class="coldiv">
                                <div class="card member_box">
                                    <div class="imag_member">
                                        <img style="object-fit: cover;" class="card-img-top"
                                            src="@if ($board_member['profile_pic'] != '') {{ URL::asset('bkp/assets/members/') }}/{{ $array['journal_abbr'] }}/{{ $board_member['profile_pic'] }} @else  {{ URL::asset('assets/members/') }}/dummy450x450.jpg @endif"
                                            alt="Member">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title member_name">{{ $board_member['name'] }}</h5>
                                        <h6 class="member_affiliation">{{ $board_member['affilation'] }}</h6>
                                        <h6 class="member_city">{{ $board_member['city'] }}
                                            {{ $board_member['country'] }}</h6>
                                        <!--<h6 class="member_country"></h6>-->
                                        <p class="card-text"></p>
                                        <!-- Small modal -->

                                        @isset($board_member['biography'])
                                            <a type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target=".biography_modal_{{ $loop->index }}">Biography</a>
                                            <div class="modal fade biography_modal biography_modal_{{ $loop->index }}"
                                                tabindex="-1" role="dialog" aria-labelledby="biography_modal"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content">

                                                        <div class="modal-header">
                                                            <h5 class="modal-title">
                                                                Biography
                                                            </h5>
                                                        </div>

                                                        <div class="modal-body">

                                                            {!! $board_member['biography'] !!}

                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn" data-bs-dismiss="modal">
                                                                Close
                                                            </button>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        @endisset
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection