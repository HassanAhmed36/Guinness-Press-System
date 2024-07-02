@extends('user.layouts.template')
@section('title', 'Editorial Board')
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
                    <img src="{{asset($journal->image)}}"
                        class="img-fluid" alt="">
                </div>
                <div class="col-md-10 col-sm-12">
                    <div class="details_content">
                        <h3 class="cocogoose_light text-uppercase">
                            {{ $journal->name }}
                        </h3>
                        <p class="my-4">
                            {!! $journal->description !!}
                        </p>
                    </div>
                    <div class="btn-group">
                        <a href="javascript:;" data-fancybox="" data-src="#submitArticlePopup"
                            class="btn btn-light btn-blue red-btn">Submit Your Article</a>
                        <a href="{{ url('/journal', ['journal_name' => $journal->acronym, 'journal_p' => 'editorial-board']) }}"
                            class="btn btn-light btn-blue">Editorial Board</a>
                        <a href="{{ url('/publication/journal', ['journal_name' => $journal->acronym]) }}"
                            class="btn btn-light btn-blue">Journal Home</a>
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
    <section class="sec_3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec_3_content">
                        <h2 class="cocogoose_light text-uppercase fs-3">
                            Join Our Editor's Board
                        </h2>
                        <p class=" my-3 poppins_fonts">
                            At Guinness Press, we are all about academic excellence, integrity, and ethical publishing. Our
                            Editorial Board is like the backbone of our scholarly work, guiding our publication through a
                            journey focused on quality and fairness. Our board members are top-notch experts who are
                            passionate about ensuring that the research we share is top-notch and trustworthy. They are the
                            ones who help us keep our commitment to excellence and honesty in academic publishing alive and
                            well.
                        </p>
                        <h2 class="fw-semibold my-4 fs-5 cocogoose_light">
                            I. Editorial Board Diversity
                        </h2>
                        <p class=" my-3 poppins_fonts"> Diversity is crucial within an Editorial Board, especially in scientific
                            publishing. It's not just about ticking boxes; it's about fostering academic excellence and
                            ethical practices. A diverse board brings together a rich tapestry of expertise, experiences,
                            and backgrounds, offering a holistic perspective that's essential for robust research
                            evaluation.
                            Here at Guinness Press, we're committed to ensuring our Editorial Boards reflect this diversity.
                            We bring together individuals from various geographical regions, each with their unique
                            expertise, experiences, and backgrounds. This ensures a wide spectrum of viewpoints and
                            insights, enriching the evaluation process of research submissions.
                            In line with our dedication to diversity, Guinness Press adheres to COPE guidelines, further
                            bolstering the breadth and depth of our Editorial Boards.
                        </p>
                        <h2 class="fw-semibold my-4 fs-5 cocogoose_light">
                            II. Editorial Board Criteria
                        </h2>
                        <p class=" my-3 poppins_fonts"> To join our Editorial Board, candidates should:</p>
                        <p class=" my-3 poppins_fonts"> • Demonstrate deep expertise in the journal's subject area.</p>
                        <p class=" my-3 poppins_fonts"> • Hold key positions at respected institutions.</p>
                        <p class=" my-3 poppins_fonts"> • Possess a PhD degree in the relevant field.</p>
                        <p class=" my-3 poppins_fonts"> • Have a strong publication and citation record.</p>
                        <p class=" my-3 poppins_fonts"> • Exhibit a commitment to research integrity and ethical publishing
                            practices.</p>

                        <h2 class="fw-semibold my-4 fs-5 cocogoose_light"> III. Responsibilities of the Editorial Board</h2>
                        <p class=" my-3 poppins_fonts"> • Editorial Standards: Ensuring top-tier articles through rigorous
                            editorial standards.</p>
                        <p class=" my-3 poppins_fonts"> • Special Issue Topics: Proposing diverse topics to enrich the journal's
                            scope. </p>
                        <p class=" my-3 poppins_fonts"> • Research Ethics: Addressing ethical issues and publication misconduct.
                        </p>
                        <p class=" my-3 poppins_fonts"> • Progress Meetings: Participating in journal development discussions.
                        </p>
                        <p class=" my-3 poppins_fonts"> • Manuscript Contribution: Contributing or soliciting at least one
                            manuscript annually. </p>
                        <p class=" my-3 poppins_fonts"> • Peer Review: Assisting in reviewer selection and conducting 2-3 reviews
                            per year. </p>
                        <p class=" my-3 poppins_fonts"> • Promotion: Editorial Board members actively promote the journal within
                            researchers, institutions, and scientific communities to encourage submissions and readership.
                        </p>

                        <h2 class="my-4 fw-semibold fs-5 cocogoose_light"> IV. Contract Term: </h2>
                        <p class=" my-3 poppins_fonts">Initial term of 2 years, renewable upon mutual agreement.</p>

                        <h2 class="fw-semibold my-4 fs-5 cocogoose_light"> V. Benefits of Editorial Board Membership</h2>
                        <p class=" my-3 poppins_fonts"> Building Connections: Being part of the journal's board isn't just about
                            titles; it's about connecting with fellow academics, researchers, and professionals who share
                            your passions. These connections can blossom into collaborations, research ventures, and
                            friendships that enrich both your personal and professional life.</p>
                        <p class=" my-3 poppins_fonts"> Personal Growth: Serving on the board offers more than just a line on
                            your CV; it's an opportunity for personal growth and development. You'll gain hands-on
                            experience in academic publishing, refining your skills in critical thinking, decision-making,
                            and communication along the way.</p>
                        <p class=" my-3 poppins_fonts"> Staying Ahead: As a board member, you'll have the inside track on the
                            latest research and breakthroughs in your field. This means staying ahead of the curve, keeping
                            up with emerging trends, methodologies, and discoveries that can inspire your own research and
                            teaching endeavors.</p>
                        <p class=" my-3 poppins_fonts"> Shaping the Narrative: Your role on the board isn't just about being a
                            passive observer; it's about actively shaping the scholarly landscape. Through editorial
                            decisions, peer reviews, and strategic planning, you have a direct hand in guiding the direction
                            and quality of the journal, contributing to the ongoing advancement of scholarship in your
                            field.</p>
                        <p class=" my-3 poppins_fonts"> Guardians of Knowledge: Joining the Editorial Board isn't just a title –
                            it's a responsibility. You become a gatekeeper of the scholarly record, entrusted with the task
                            of selecting, shaping, and curating high-quality research. In doing so, you become a vital
                            guardian of knowledge, ensuring that valuable insights reach the wider academic community.</p>

                        <p class=" my-3 poppins_fonts"> If you are interested in joining the editorial board of Guinness Press
                            Journals, we encourage you to select a journal and submit your request. The Journal Editor will
                            review your profile, and the decision will be communicated to you by the Editorial Office. </p>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="detailing_form">
        <div class="container">
            <div class="details_form">
                <div class="detail_data">
                </div>
                <form action="{{ route('send.joinboard') }}" method="POST" class="cmxform web-package-form"
                    id="articleSub_form" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <select class="form-control detail_form" name="journal_name">
                                <option>Select Journal</option>
                                <option>International Journal of Empirical Research Methods</option>
                                <option>Cultural Landscapes Insights</option>
                                <option>Advanced Chemistry Insights</option>
                                <option>Sustainable Energy and Environment Review</option>
                                <option>Strategic Financial Reviews</option>
                                <option>Journal of Business Leadership and Management</option>
                                <option>Current Integrative Engineering</option>
                                <option>Medical Spectrum Review</option>
                                <option>Pharmaceutical Breakthroughs</option>
                                <option>Recent Educational Research</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control detail_form" name="name" placeholder="Name *"
                                required>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control detail_form" name="email" placeholder="Email *"
                                required>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control detail_form" name="affiliation"
                                placeholder="Affiliation *" required>
                        </div>
                        <!--<div class="col-md-6">-->
                        <!--	<input type="text" class="form-control detail_form" name="scopus_id" placeholder="SCOPUS ID">-->
                        <!--</div>-->
                        <!--<div class="col-md-6">-->
                        <!--	<input type="text" class="form-control detail_form" name="scholar_id" placeholder="GOOGLE SCHOLAR ID">-->
                        <!--</div>-->
                        <div class="col-md-12">
                            <label>Upload Picture</label>
                            <input type="file" class="form-control detail_form" name="picture[]"
                                placeholder="UPLOAD PICTURE *" required>
                        </div>
                        <div class="col-md-12">
                            <label>Enter Biography (250-300 Words)</label>
                            <textarea rows="5" class="form-control detail_form" name="biography"
                                placeholder="Enter Biography (250-300 Words) *"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-info btn-green">Submit</button>
                </form>
            </div>
        </div>
    </section>



@endsection
