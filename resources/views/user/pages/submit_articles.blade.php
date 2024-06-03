@extends('user.layouts.template')

@section('title', 'Submit Articles')

@section('banner')
    <section class="main_banner inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_content white_text">
                        <h3 class="cocogoose_light">Articles</h3>
                        <h1 class="cocogoose_light">Submit Your Article</h1>
                        <p class="poppins_fonts">
                            We Welcome Submissions From Researchers, Scholars, And Academics Across Diverse Disciplines.
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
                        <h3 class="cocogoose_light fw-bold mb-3">Submit Articles</h3>
                        <h1 class="cocogoose_light my-4">Submission Guidelines</h1>
                        <p class="poppins_fonts">
                            Before submitting your article, please ensure it meets the following criteria:
                        </p>
                        <p class="fw-semibold text-dark fs-6 mt-1 mb-2">Originality</p>
                        <p class="poppins_fonts">
                            Your work should be original and not previously published elsewhere.
                        </p>
                        <p class="fw-semibold text-dark fs-6 mt-1 mb-2">Relevance</p>
                        <p class="poppins_fonts">
                            Ensure that your research aligns with our journals' scope and focus areas. Review the specific
                            guidelines for each journal for more detailed information.
                        </p>
                        <p class="fw-semibold text-dark fs-6 mt-1 mb-2">Ethical Considerations</p>
                        <p class="poppins_fonts">
                            Adhere to ethical guidelines, including properly citing sources and avoiding plagiarism.
                        </p>
                        <p class="fw-semibold text-dark fs-6 mt-1 mb-2">Peer Review Process</p>
                        <p class="poppins_fonts">
                            Be prepared for a rigorous peer review process, where experts will evaluate your work for
                            quality and contribution to the field.
                        </p>
                        <h1 class="cocogoose_light my-4">Submission Process</h1>
                        <p class="fw-semibold text-dark fs-6 mt-1 mb-2">Find a journal</p>
                        <p class="poppins_fonts">
                            Find out the journals that could be best matched for publishing your research.
                        </p>
                        <p class="fw-semibold text-dark fs-6 mt-1 mb-2">Prepare Your Manuscript</p>
                        <p class="poppins_fonts">
                            Make certain that your manuscript adheres to the formatting guidelines specified by the
                            particular journal you are submitting to.
                        </p>
                        <p class="fw-semibold text-dark fs-6 mt-1 mb-2">Submit Your Manuscript</p>
                        <p class="poppins_fonts">
                            Proceed to the website's "Submit Your Article" portal to upload your manuscript. Ensure you
                            provide all the required information during the submission process.
                        </p>
                        <p class="fw-semibold text-dark fs-6 mt-1 mb-2">Peer Review</p>
                        <p class="poppins_fonts">
                            Once submitted, your manuscript will be thoroughly reviewed. This may take some time, and you
                            will receive updates on the progress.
                        </p>
                        <p class="fw-semibold text-dark fs-6 mt-1 mb-2">Revision and Finalization</p>
                        <p class="poppins_fonts">
                            If necessary, you may be asked to make revisions based on the feedback from the reviewers.
                        </p>
                        <p class="fw-semibold text-dark fs-6 mt-1 mb-2">Acceptance and Publication</p>
                        <p class="poppins_fonts">
                            Your article will be accepted for publication upon successful peer review and any necessary
                            revisions.
                        </p>
                        <a href="{{ route('submit.manuscript') }}" class="btn btn-light btn-blue red-btn mt-5 ms-0">Submit
                            Your Article</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
