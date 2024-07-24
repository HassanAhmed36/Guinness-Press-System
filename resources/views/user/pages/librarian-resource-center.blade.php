@extends('user.layouts.template')
@section('title', 'Empower Your Library: Access Guinness Press Librarian Resources')
@section('keywords', 'Guinness Press librarian resources')
@section('description', 'Discover valuable librarian resources tailored for academic excellence at Guinness Press. Enhance your library`s offerings with our comprehensive collection.')

@section('body')
<section class="main_banner inner_banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner_content white_text">
                    <h3 class="cocogoose_light">
                        Librarians
                    </h3>
                    <h1 class="cocogoose_light">
                        LIBRARIAN RESOURCE CENTER
                    </h1>
                    <p class="poppins_fonts">
                        At Guinness press, we aim to provide a comprehensive array of tools, information, and resources to empower librarians in their pursuit of creating dynamic, vibrant library spaces.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec_3 sec_3_3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="sec_3_content">
                    <h3 class="text-uppercase cocogoose_light">
                        Librarians
                    </h3>
                    <h2 class="cocogoose_light text-uppercase">
                        Librarian Resource Center
                    </h2>
                    <p class="poppins_fonts">
                        The Guinness Press Librarian Resource Center Is A Dedicated Space Tailored to Support Librarians. Here, We Aim To Provide A Comprehensive Array Of Tools, Information, And Resources To Empower Librarians In Their Pursuit Of Creating Dynamic, Vibrant Library Spaces.
                    </p>
                    <h2 class="cocogoose_light text-uppercase">
                        What You Will Find
                    </h2>
                    <p class="poppins_fonts">
                        Catalogs and Publications: Access our latest catalogs and publications, showcasing a diverse range of titles across various genres and disciplines. Stay updated with the newest additions to our collection.
                    </p>
                    <p class="poppins_fonts">
                        Educational Materials: Discover a wealth of educational resources, including study guides, lesson plans, and supplementary materials designed to support educational programs within your library.
                    </p>
                    <p class="poppins_fonts">
                        Diverse Collection Recommendations: Explore curated lists of diverse titles spanning various genres, ensuring inclusivity and representation within your library's collection.
                    </p>
                    <h2 class="cocogoose_light text-uppercase">Get Involved</h2>
                    <p class="poppins_fonts">
                        We value your expertise and insights. If you have resources or ideas you would like to contribute to the Librarian Resource Center, please do not hesitate to Contact Us.
                    </p>
                    <div class="btn-group">
                        <a href="{{url('/journals')}}" class="btn btn-light btn-blue">Find Your Journals</a>
                        <a href="{{url('/submit-your-article')}}" class="btn btn-light btn-blue">Submit your Article</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="./assets/images/discussion.png" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<section class="sec_5">
    <div class="row">
        <div class="col-md-12">
            <div class="sec_5_rightbar">
                <div class="container">
                    <div class="sec_5_rightbar_content">
                        <h3 class="text-uppercase white_text cocogoose_light">
                            Research Services
                        </h3>
                        <h2 class="text-uppercase white_text">
                            Content and Research Platforms
                        </h2>
                        <p class="white_text poppins_fonts">
                            Get your book published by experts; as a publishing house, we also work on books and you can have proofreading and editing services and affordable book marketing services to achieve all the goals you have set in your timeline.Get your book published by experts; as a publishing house, we also work on books and you can have proofreading and editing services and affordable book marketing services to achieve all the goals you have set in your timeline.
                        </p>
                        <div class="btn-group">
                            <a href="{{url('/journals')}}" class="btn btn-light btn-blue">Find Your Journals</a>
                        <a href="{{url('/submit-your-article')}}" class="btn btn-light btn-blue">Submit your Article</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
