@extends('user.layouts.template')
@section('title', 'Streamlined Publication Procedure at Guinness Press')
@section('keywords', 'Guinness Press publication procedure')
@section('description', 'Discover the efficient publication procedure at Guinness Press, designed to expedite the
    dissemination of scholarly work. Learn how we prioritize quality and timeliness in every step.')

@section('banner')
    <section class="main_banner inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_content white_text">
                        <h3 class="cocogoose_light">
                            Procedure
                        </h3>
                        <h1 class="cocogoose_light">
                            Publication Procedure
                        </h1>
                        <p class="poppins_fonts">
                            Publication Procedure
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('body')
    <section class="sec_3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec_3_content">
                        <img src="{{ asset('assets/images/publication-procedure/image.png') }}" class="img-fluid">
                        <h5>Manuscript Submission:</h5>
                        <p class="poppins_fonts">Authors initiate the submission process by logging in to the Guinness Press
                            Website.</p>
                        <p class="poppins_fonts">Enter manuscript information, including journal, title, abstract, and
                            keywords.</p>
                        <p class="poppins_fonts">Upload manuscript files (MS Word or PDF format), figures, tables, and
                            supplementary materials. After selecting all files, click "Save & Continue".</p>
                        <h5>Editorial Review:</h5>
                        <p class="poppins_fonts">Guinness Press will receive an alert for new submissions.</p>
                        <p class="poppins_fonts">Guinness Press will assign suitable reviewers to evaluate the manuscript.
                        </p>
                        <p class="poppins_fonts">Reviewers will conduct peer review.</p>
                        <h5>Peer Review Process:</h5>
                        <p class="poppins_fonts">Reviewers may accept or decline the manuscript.</p>
                        <p class="poppins_fonts">Reviewers provide feedback and recommendations.</p>
                        <h5>Publication Location:</h5>
                        <p class="poppins_fonts">Situated within the United States, our publications are proudly rooted in
                            the nation.</p>
                        <h5>Editorial Decision:</h5>
                        <p class="poppins_fonts">Authors will receive a notification with the decision.</p>
                        <h5>Proceed For Revisions (If Required):</h5>
                        <p class="poppins_fonts">If revisions are requested, authors submit a revised manuscript with a
                            response letter.</p>
                        <h5>EiC Final Review:</h5>
                        <p class="poppins_fonts">Revised manuscripts undergo a final review by Reviewers and EiC.</p>
                        <h5>Communication Of Decision:</h5>
                        <p class="poppins_fonts">Guinness Press will communicate the final editorial decision to the
                            authors.</p>
                        <h5>In House Publication Process:</h5>
                        <p class="poppins_fonts">Accepted manuscripts will be prepared for publication, including
                            formatting, language editing, figure improvement, and proofreading.</p>
                        <h5>Publication Release:</h5>
                        <p class="poppins_fonts">Manuscripts are published in the designated journal.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
