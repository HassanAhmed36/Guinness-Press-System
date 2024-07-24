@extends('user.layouts.template')
@section('title', 'Peer Review Excellence: Publish Your Work in Credible Journals')
@section('keywords', 'peer review publication, peer reviewed articles')
@section('description',
    'Submit your articles for rigorous peer review publication at Guinness Press. Elevate your
    research with peer-reviewed articles of unparalleled quality.')

@section('body')
    <section class="main_banner inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_content white_text">
                        <h3 class="cocogoose_light">
                            pROCESS
                        </h3>
                        <h1 class="cocogoose_light">
                            Peer Review Process
                        </h1>
                        <p class="poppins_fonts">
                            Peer review evaluates manuscript quality for publication based on originality, validity, and
                            significance. Independent experts assess submissions to aid journal editors in their
                            decision-making process.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec_3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec_3_content">
                        <h3 class="cocogoose_light">
                            Process
                        </h3>
                        <h1 class="cocogoose_light mb-4">
                            PEER REVIEW PROCESS
                        </h1>
                        <p class="poppins_fonts mb-4">
                            Peer review is a vital process used to evaluate the quality of a manuscript before it is
                            published. Independent experts in the relevant research field assess submitted manuscripts for
                            originality, validity, and significance. This aids editors in deciding whether a manuscript
                            should be published in their journal.s
                        </p>
                        <h5 class="cocogoose_light mb-4">
                            Here Is How It Operates:
                        </h5>
                        <p class="poppins_fonts mb-4">
                            When a manuscript is submitted, it undergoes an initial assessment to determine if it meets the
                            submission criteria. If so, the editorial team selects potential peer reviewers within the
                            research area to evaluate the manuscript and provide recommendations.
                        </p>
                        <p class="poppins_fonts mb-4">
                            In a double-blind review, the reviewers do not know the authors' names, and conversely, the
                            authors do not know who reviewed their manuscript.
                        </p>
                        <p class="poppins_fonts mb-4">
                            The purpose of peer review is to validate the manuscript's integrity. Peer reviewers are
                            experienced professionals who volunteer their time to enhance the manuscripts they review. This
                            process makes manuscripts more robust, easier to comprehend, and more valuable to others in the
                            field.
                        </p>
                        <p class="poppins_fonts mb-4">
                            The duration of the review process depends on the responsiveness of the reviewers. The initial
                            round of the process typically takes about six weeks, with a maximum of three months. In cases
                            where reviewers report conflict or are unreasonably delayed, additional expert opinions may be
                            sought. In rare instances where finding a second referee is exceptionally challenging, a
                            decision may be made by the handling Editor based on only one referee report.
                        </p>
                        <p class="poppins_fonts mb-4">
                            Revised manuscripts are generally returned to the initial reviewer for reevaluation, who may
                            request further revisions.
                        </p>
                        <img src="{{ asset('assets/images/peer-review-process/image.jpg') }}" class="img-fluid mt-5" />
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
