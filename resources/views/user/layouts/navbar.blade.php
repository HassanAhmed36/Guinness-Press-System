<header class="header" style="z-index: 9999999; position: relative;">
    <div class="top_bar">
        <div class="container">
            <div class="top_head row">
                <div class="left_bar col-6 col-md-4 col-lg-4">
                    <ul class="top_contact gap-0">
                        <li>
                            <a class="poppins_fonts white_text">
                                <i class="fa fa-envelope fa-mail-icon"></i>
                                info@guinnesspress.org
                            </a>
                        </li>
                        <li>
                            <a class="poppins_fonts white_text">
                                <i class="fa fa-phone fa-phone-icon"></i>
                                +1 (602) 649-5530
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="right_bar  col-6 col-md-4 col-lg-4">
                    <ul class="top_contact top_contact_2 white_text poppins_fonts">
                        <li class="d-flex gap-3 align-items-center">
                            <div data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa fa-search"></i>
                            </div>
                            <div>
                                <a href="{{ url('/submit-your-article') }}" class="btn btn-light btn-blue ">Submit your
                                    Article</a>
                            </div>
                            @guest
                                <div>
                                    <a href="{{ route('user.login') }}" class="btn btn-light btn-blue btn-sm mx-2">Login</a>
                                </div>
                            @endguest
                            @auth
                                <div class="dropdown">
                                    <button class="btn btn-light btn-blue btn-sm dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Account <i class="fa fa-account"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('user.own.profile') }}">My Profile</a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('submission.index') }}">My Submission</a></li>
                                        <li><a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a></li>
                                    </ul>
                                </div>
                            @endauth
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nav_bar_class">
        <div class="container">
            <div class="row">
                <div class="col-9 col-md-3 col-sm-6">
                    <div class="logo-bar">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/logo-dark.png') }}" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-3 col-md-9 col-sm-6">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"
                                            href="https://www.guinnesspress.org/about-us">About</a>
                                        <div class="dropdown-menu dropdown-menu-single"
                                            aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ url('/about-us') }}">About Us</a>
                                            <!--<a class="dropdown-item" href="/career">Careers</a>-->
                                            <!--<a class="dropdown-item" href="/contact-us">Locations</a>-->
                                            <a class="dropdown-item" href="{{ url('/peer-review-process') }}">Peer
                                                Review Process</a>
                                            <a class="dropdown-item" href="{{ url('/archival-practices') }}">Archival
                                                Practices</a>
                                            <a class="dropdown-item" href="{{ url('/publication-fees') }}">Publication
                                                Fees</a>
                                            <a class="dropdown-item" href="{{ url('/repository-policy') }}">Repository
                                                Policy</a>
                                            <a class="dropdown-item" href="{{ url('/crossmark-policy') }}">Crossmark
                                                Policy</a>
                                            <a class="dropdown-item" href="{{ url('/article-correction') }}">Articles
                                                Correction</a>
                                            <a class="dropdown-item" href="{{ url('/article-retraction') }}">Articles
                                                Retraction</a>
                                            <a class="dropdown-item"
                                                href="{{ url('/publication-procedure') }}">Publication
                                                Procedure</a>
                                            <a class="dropdown-item"
                                                href="{{ url('/policies-and-statements') }}">Policies and
                                                Statements</a>
                                            <a class="dropdown-item" href="{{ url('/copyright-agreement') }}">Copyright
                                                Agreement</a>
                                            <a class="dropdown-item" href="{{ url('/disclaimer') }}">Disclaimer</a>
                                            <a class="dropdown-item" href="{{ url('/mission-vision') }}">Mission
                                                Vission and Values</a>
                                            <a class="dropdown-item"
                                                href="{{ url('/publication-ethics-statement') }}">Publication
                                                Ethics Statement</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page"
                                            href="{{ url('/services') }}">Services</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"
                                            href="https://www.guinnesspress.org/about-us">Resources</a>
                                        <div class="dropdown-menu dropdown-menu-single"
                                            aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item"
                                                href="{{ url('/benefits-of-being-a-reviewer') }}">Benefits of
                                                Being A Reviewer</a>
                                            <a class="dropdown-item"
                                                href="{{ url('/reviewer-guidelines') }}">Reviewer Guidelines</a>
                                            <a class="dropdown-item" href="{{ url('/authors-guidelines') }}">Authors
                                                Guidelines</a>
                                            <a class="dropdown-item"
                                                href="{{ url('/librarian-resource-center') }}">Librarian Resource
                                                Center</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page"
                                            href="{{ url('/journals') }}">Journals</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/contact-us') }}">Contact</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" href="#">More</a>
                                        <div class="dropdown-menu dropdown-menu-single"
                                            aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ url('/blogs') }}">Blog</a>
                                            <a class="dropdown-item" href="{{ url('/research-study') }}">Research
                                                Study</a>
                                            <a class="dropdown-item" href="{{ url('/case-study') }}">Case Study</a>
                                        </div>
                                    </li>
                                    <!--<li class="nav-item">-->
                                    <!--    <a class="nav-link" href="{{ route('thread.index') }}">Forum</a>-->
                                    <!--</li>-->

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<header class="mbl_header">
    <div class="top_bar">
        <div class="container">
            <div class="top_head">
                <div class="left_bar">
                    <ul class="top_contact">
                        <li>
                            <a class="poppins_fonts white_text">
                                <i class="fa fa-envelope fa-mail-icon"></i>
                                info@guinnesspress.org
                            </a>
                        </li>
                        <li>
                            <a class="poppins_fonts white_text">
                                <i class="fa fa-phone fa-phone-icon"></i>
                                +1 (602) 649-5530
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="right_bar">
                    <ul class="top_contact top_contact_2 white_text poppins_fonts">
                        <li>
                            <a href="{{ url('/submit-your-article') }}" class="btn btn-light btn-blue">Submit
                                your Article</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nav_bar_class">
        <div class="container">
            <div class="row">
                <div class="col-9 col-md-9 col-sm-6">
                    <div class="logo-bar">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/logo-dark.png') }}" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-3 col-md-3 col-sm-6">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </nav>
                </div>
                <div class="col-12 col-md-12 col-sm-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page"
                                            href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"
                                            href="https://www.guinnesspress.org/about-us">About</a>
                                        <div class="dropdown-menu dropdown-menu-single"
                                            aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ url('/about-us') }}">About Us</a>
                                            <!--<a class="dropdown-item" href="/career">Careers</a>-->
                                            <!--<a class="dropdown-item" href="/contact-us">Locations</a>-->
                                            <a class="dropdown-item" href="{{ url('/peer-review-process') }}">Peer
                                                Review Process</a>
                                            <a class="dropdown-item" href="{{ url('/archival-practices') }}">Archival
                                                Practices</a>
                                            <a class="dropdown-item"
                                                href="{{ url('/publication-fees') }}">Publication Fees</a>
                                            <a class="dropdown-item"
                                                href="{{ url('/repository-policy') }}">Repository Policy</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page"
                                            href="{{ url('/services') }}">Services</a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"
                                            href="https://www.guinnesspress.org/about-us">Resources</a>
                                        <div class="dropdown-menu dropdown-menu-single"
                                            aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item"
                                                href="{{ url('/benefits-of-being-a-reviewer') }}">Benefits of
                                                Being A Reviewer</a>
                                            <a class="dropdown-item"
                                                href="{{ url('/reviewer-guidelines') }}">Reviewer Guidelines</a>
                                            <a class="dropdown-item" href="{{ url('/authors-guidelines') }}">Authors
                                                Guidelines</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page"
                                            href="{{ url('/journals') }}">Journals</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/blogs') }}">Blogs</a>
                                    </li>

                                    @guest
                                        <li class="nav-item">
                                            <a href="{{ route('user.login') }}"
                                                class="btn btn-light btn-blue mx-2">Login</a>
                                        </li>
                                    @endguest
                                    @auth
                                        <li>
                                            <a href="{{ url('/submit-your-article') }}"
                                                class="btn btn-light btn-blue">Submit
                                                your Article</a>
                                        </li>
                                        <li class="nav-item">
                                            <div class="dropdown">
                                                <button class="btn btn-light btn-blue btn-sm dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Account <i class="fa fa-account"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('user.own.profile') }}">My Profile</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('submission.index') }}">My Submission</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('user.logout') }}">Logout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    @endauth
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#search-article').on('input', function() {
            var query = $(this).val();
            $.ajax({
                type: "GET",
                url: "{{ route('search.article') }}",
                data: {
                    query: query
                },
                success: function(response) {
                    $('#search-result').html(response);
                    // console.log(response);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
    });
</script>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Search Article..</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="height: 50vh; overflow-y:scroll; ">
                <div>
                    <div class="mb-0 pb-0">
                        <input type="text" class="form-control" placeholder="Search Article.."
                            id="search-article">
                    </div>
                    <div class="mt-0 pt-3" id="search-result">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
