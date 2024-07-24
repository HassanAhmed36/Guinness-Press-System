<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>@yield('title')</title>
    <meta name="title" content="@yield('title')" />
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:url" content="{{ URL::current() }}">
    <meta property="og:image" content="@yield('journal_image')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:site_name" content="https://guinnesspress.org/">
    <meta name="citation_title" content="@yield('title')">
    @yield('citation_author')
    @yield('meta_tags')
    <meta name="citation_publication_date" content="@yield('citation_publication_date')">
    <meta name="citation_year" content="@yield('citation_year')">
    <meta name="citation_journal_title" content="@yield('journal_title')">
    <meta name="citation_publisher" content="Guinness Press">
    <meta name="citation_issn" content="@yield('issn')">
    <meta name="citation_pdf_url" content="{{ URL::current() }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="index,follow">
    <meta name="dc.identifier" content ="doi:@yield('articledoi')">
    <meta name="google-site-verification" content="GEDfJNdAWrE28DNjaW_qM8nEv8aqs8wth6M8h-TBn3Y" />
    <link rel="apple-touch-icon" sizes="180x180" href="https://guinnesspress.org/lp/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://guinnesspress.org/lp/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://guinnesspress.org/lp/favicon-16x16.png">
    <link rel="manifest" href="https://guinnesspress.org/lp/site.webmanifest">
    <link rel="mask-icon" href="https://guinnesspress.org/lp/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.6.1/css/iziModal.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/owl-carousel/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '362843969490645');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=362843969490645&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

</head>

<body>
   
    @include('user.layouts.navbar')
    @yield('banner')
    @yield('body')
      <div class="wabtn" id="wabutton">
      <style> [wa-tooltip] { position: relative; cursor: default;  &:hover { &::before { content: attr(wa-tooltip); font-size: 16px; text-align: center; position: absolute; display: block; right: null; left: calc(0% + 100px); min-width: 200px; max-width: 200px; bottom: calc(100% + 10px); transform: translate(-50%); animation: fade-in 500ms ease; background: #00E785; border-radius: 4px; padding: 10px; color: #ffffff; z-index: 1; } } }  @keyframes pulse { 0% { transform: scale(1); } 50% { transform: scale(1.1); } 100% { transform: scale(1); } }  [wa-tooltip] {  }  @keyframes fade-in { from { opacity: 0; } to { opacity: 1; } }</style>
      <a wa-tooltip="We are available! Click here to chat" target="_self" href="https://wa.me/16026495530?text=Hi!%20I'm%20interested%20in%20your%20services%20and%20would%20love%20to%20know%20more%20about%20it.%20Could%20you%20please%20send%20me%20more%20information?%20Thank%20you!" style=" cursor: pointer;height: 62px;width: auto;padding: 10px 10px 10px 10px;position: fixed !important;color: #fff;bottom: 20px;right: unset;display: flex;font-size: 18px;font-weight: 600;align-items: center;z-index: 999999999 !important;background-color: #00E785;box-shadow: 4px 5px 10px rgba(0, 0, 0, 0.4);border-radius: 100px;animation: pulse 2.5s ease infinite;left: 20px;">
        <svg width="42" height="42" style="padding: 5px;" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_1024_354)"><path d="M23.8759 4.06939C21.4959 1.68839 18.3316 0.253548 14.9723 0.0320463C11.613 -0.189455 8.28774 0.817483 5.61565 2.86535C2.94357 4.91323 1.10682 7.86244 0.447451 11.1638C-0.21192 14.4652 0.351026 17.8937 2.03146 20.8109L0.0625 28.0004L7.42006 26.0712C9.45505 27.1794 11.7353 27.7601 14.0524 27.7602H14.0583C16.8029 27.7599 19.4859 26.946 21.768 25.4212C24.0502 23.8965 25.829 21.7294 26.8798 19.1939C27.9305 16.6583 28.206 13.8682 27.6713 11.1761C27.1367 8.48406 25.8159 6.01095 23.8759 4.06939ZM14.0583 25.4169H14.0538C11.988 25.417 9.96008 24.8617 8.1825 23.8091L7.7611 23.5593L3.3945 24.704L4.56014 20.448L4.28546 20.0117C2.92594 17.8454 2.32491 15.2886 2.57684 12.7434C2.82877 10.1982 3.91938 7.80894 5.67722 5.95113C7.43506 4.09332 9.76045 2.87235 12.2878 2.48017C14.8152 2.08799 17.4013 2.54684 19.6395 3.78457C21.8776 5.02231 23.641 6.96875 24.6524 9.3179C25.6638 11.6671 25.8659 14.2857 25.2268 16.7622C24.5877 19.2387 23.1438 21.4326 21.122 22.999C19.1001 24.5655 16.6151 25.4156 14.0575 25.4157L14.0583 25.4169Z" fill="#E0E0E0"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M10.6291 7.98363C10.3723 7.41271 10.1019 7.40123 9.85771 7.39143C9.65779 7.38275 9.42903 7.38331 9.20083 7.38331C9.0271 7.3879 8.8562 7.42837 8.69887 7.5022C8.54154 7.57602 8.40119 7.68159 8.28663 7.81227C7.899 8.17929 7.59209 8.62305 7.38547 9.11526C7.17884 9.60747 7.07704 10.1373 7.08655 10.6711C7.08655 12.3578 8.31519 13.9877 8.48655 14.2164C8.65791 14.4452 10.8581 18.0169 14.3425 19.3908C17.2382 20.5327 17.8276 20.3056 18.4562 20.2485C19.0848 20.1913 20.4843 19.4194 20.7701 18.6189C21.056 17.8183 21.0557 17.1323 20.9701 16.989C20.8844 16.8456 20.6559 16.7605 20.3129 16.5889C19.9699 16.4172 18.2849 15.5879 17.9704 15.4736C17.656 15.3594 17.4275 15.3023 17.199 15.6455C16.9705 15.9888 16.3139 16.7602 16.1137 16.9895C15.9135 17.2189 15.7136 17.2471 15.3709 17.0758C14.3603 16.6729 13.4275 16.0972 12.6143 15.3745C11.8648 14.6818 11.2221 13.8819 10.7072 13.0007C10.5073 12.6579 10.6857 12.472 10.8579 12.3007C11.0119 12.1472 11.2006 11.9005 11.3722 11.7003C11.5129 11.5271 11.6282 11.3346 11.7147 11.1289C11.7603 11.0343 11.7817 10.9299 11.7768 10.825C11.7719 10.7201 11.7409 10.6182 11.6867 10.5283C11.6001 10.3566 10.9337 8.66151 10.6291 7.98363Z" fill="white"></path><path d="M23.7628 4.02445C21.4107 1.66917 18.2825 0.249336 14.9611 0.0294866C11.6397 -0.190363 8.35161 0.804769 5.70953 2.82947C3.06745 4.85417 1.25154 7.77034 0.600156 11.0346C-0.051233 14.299 0.506321 17.6888 2.16894 20.5724L0.222656 27.6808L7.49566 25.7737C9.50727 26.8692 11.7613 27.4432 14.0519 27.4434H14.0577C16.7711 27.4436 19.4235 26.6392 21.6798 25.1321C23.936 23.6249 25.6947 21.4825 26.7335 18.9759C27.7722 16.4693 28.0444 13.711 27.5157 11.0497C26.9869 8.38835 25.6809 5.94358 23.7628 4.02445ZM14.0577 25.1269H14.0547C12.0125 25.1271 10.0078 24.5782 8.25054 23.5377L7.8339 23.2907L3.51686 24.4222L4.66906 20.2143L4.39774 19.7831C3.05387 17.6415 2.4598 15.1141 2.70892 12.598C2.95804 10.082 4.03622 7.72013 5.77398 5.88366C7.51173 4.04719 9.81051 2.84028 12.3089 2.45266C14.8074 2.06505 17.3638 2.5187 19.5763 3.74232C21.7888 4.96593 23.5319 6.89011 24.5317 9.21238C25.5314 11.5346 25.7311 14.1233 25.0993 16.5714C24.4675 19.0195 23.0401 21.1883 21.0414 22.7367C19.0427 24.2851 16.5861 25.1254 14.0577 25.1255V25.1269Z" fill="white"></path></g><defs><clipPath id="clip0_1024_354"><rect width="27.8748" height="28" fill="white" transform="translate(0.0625)"></rect></clipPath></defs></svg>
        <span class="button-text"></span>
      </a>
    </div>
    <footer>
        <div class="footer_navbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="footer_bar">
                            <!--<ul>-->
                            <!--	<li>Accessibility</li>-->
                            <!--	<li>Privacy Center</li> -->
                            <!--	<li>Cookies</li> -->
                            <!--	<li>Contact</li>-->
                            <!--	<li>Terms & Conditions</li>-->
                            <!--</ul>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="disclaimer">
            <div class="container">
                <div class="row main-footer-row-one">
                    <div class="col col-lg-3 col-md-3 fcol2">
                        <a href="https://www.guinnesspress.org">
                            <img src="{{ asset('assets/images/logo-dark.png') }}" title="Guinness Press"
                                alt="Guinness Press" loading="lazy">
                        </a>
                        <!--<p>Guinness Press is The Largest Online Library for Researchers where they can publish their research, Journals, magazines, and books to sell them.</p>-->
                        <!--<form action="" method="POST">-->
                        <!--     <input type="text" name="email" placeholder="Email Address">-->
                        <!--     <input type="submit" name="subscribe-newsletter">-->
                        <!--     <input type="hidden" class="client_ip" name="ip_address" value=""/>-->
                        <!--     <input type="hidden" class="client_country" name="country" value=""/>-->
                        <!--     <input type="hidden" class="pageurl" name="pageurl" value=""/>-->
                        <!--</form>-->
                        <!--<p>Lorem Ipsum is simply dummy text of </p>-->
                        <ul class="social_icons">
                            <li><a href="https://www.facebook.com/guinnesspressofficial" aria-label="Facebook"
                                    target="_blank">
                                    <i class="fab fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.pinterest.co.uk/guinness_press/" aria-label="Pinterest"
                                    target="_blank">
                                    <i class="fab fa-pinterest"></i>
                                </a></li>
                            <!--<li><a href="https://www.instagram.com/" aria-label="Instagram" target="_blank" >-->
                            <!--    <i class="fab fa-instagram"></i>-->
                            <!--</a></li>-->
                            <li><a href="https://www.linkedin.com/company/guinnesspress/" target="_blank"
                                    aria-label="Linkedin">
                                    <i class="fab fa-linkedin"></i>
                                </a></li>
                            <!--<li><a href="https://www.linkedin.com/company/guinnesspress/ " aria-label="Linkedin" >-->
                            <!--    <i class="fab fa-rocket-launch"></i>-->
                            <!--</a></li>-->
                            <!--<li><a href="https://www.sitejabber.com/reviews/guinnesspress.org " aria-label="Linkedin" >-->
                            <!--    <img src="assets/img/social-icons/sitejabber.png"/>-->
                            <!--</a></li>-->
                            <!--<li><a href="https://www.trustpilot.com/review/guinnesspress.com" aria-label="Linkedin" >-->
                            <!--    <img src="assets/img/social-icons/trustpilot.png"/>-->
                            <!--</a></li>-->
                            <!--<li><a href="https://www.goodfirms.co/company/guinness-press" aria-label="Linkedin" >-->
                            <!--    <img src="assets/img/social-icons/good-firms.webp"/>-->
                            <!--</a></li>-->
                        </ul>
                        <ul class="contactinfo">
                            <li>
                                <a href="tel:+1 (602) 649-5530">
                                    <i class="fa fa-phone"></i><span>+1 (602) 649-5530</span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto: info@guinnesspress.org">
                                    <i class="fa fa-envelope"></i><span>info@guinnesspress.org</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://maps.app.goo.gl/Fm3HJTDZVVXiwCLE9">
                                    <i class="fa fa-location"></i><span>16192 Coastal Highway Lewes, DE 19958,
                                        USA</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col col-12 col-xl-3 fcol2">
                        <h6>Browse</h6>
                        <ul>
                            <!--<li>-->
                            <!--    <a href="/book-publishing-services"><i class="fa fa-check"></i><span>Books</span></a>-->
                            <!--</li>-->
                            <li>
                                <a href="{{ url('/journals') }}"><i class="fa fa-check"></i><span>Journals</span></a>
                            </li>

                        </ul>
                    </div>
                    <div class="col col-12 col-xl-3 fcol2">
                        <h6>Resources</h6>
                        <ul>
                            <!--<li>-->
                            <!--    <a href="/instructors"><i class="fa fa-check"></i><span>Instructors Book Authors/Editors</span></a>-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--    <a href="/book-authors"><i class="fa fa-check"></i><span>Journal Authors/Editors/Reviewers</span></a>-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--    <a href="/journal-authors"><i class="fa fa-check"></i><span>Chinese Journal Authors </span></a>-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--    <a href="/students"><i class="fa fa-check"></i><span>Students</span></a>-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--    <a href="/researches"><i class="fa fa-check"></i><span>Researchers</span></a>-->
                            <!--</li>-->
                            <li>
                                <a href="{{ url('/librarian-resource-center') }}"><i
                                        class="fa fa-check"></i><span>Librarians</span></a>
                            </li>
                            <!--<li>-->
                            <!--    <a href="/booksellers"><i class="fa fa-check"></i><span>Booksellers</span></a>-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--    <a href="/advertisers"><i class="fa fa-check"></i><span>Advertisers</span></a>-->
                            <!--</li>-->
                            <li>
                                <a href="{{ url('/reviewer-guidelines') }}"><i
                                        class="fa fa-check"></i><span>Reviewers</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/authors-guidelines') }}"><i class="fa fa-check"></i><span>Author's
                                        Guidelines</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/crossmark-policy') }}"><i class="fa fa-check"></i><span>Crossmark
                                        Policy</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/article-correction') }}"><i class="fa fa-check"></i><span>Article
                                        Correction</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/article-retraction') }}"><i class="fa fa-check"></i><span>Article
                                        Retraction</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/publication-procedure') }}"><i
                                        class="fa fa-check"></i><span>Publication Procedure</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col col-12 col-xl-3 fcol2">
                        <h6>About</h6>
                        <ul>
                            <li>
                                <a href="{{ url('/about-us') }}"><i class="fa fa-check"></i><span>About
                                        Guinness</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/contact-us') }}"><i class="fa fa-check"></i><span>Contact
                                        Us</span></a>
                            </li>
                            <!--<li>-->
                            <!--    <a href="blog"><i class="fa fa-check"></i><span>News</span></a>-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--    <a href="/accessibility"><i class="fa fa-check"></i><span>Accessibility</span></a>-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--    <a href="/modern-slavery-statement"><i class="fa fa-check"></i><span>Modern Slavery Statement</span></a>-->
                            <!--</li>-->
                            <li>
                                <a href="{{ url('/policies-and-statements') }}"><i
                                        class="fa fa-check"></i><span>Policies and Statements</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/peer-review-process') }}"><i class="fa fa-check"></i><span>Peer
                                        Review Process</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/copyright-agreement') }}"><i
                                        class="fa fa-check"></i><span>Copyright Agreement</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/archival-practices') }}"><i class="fa fa-check"></i><span>Archival
                                        Practices</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/publication-fees') }}"><i class="fa fa-check"></i><span>Publication
                                        Fees</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/repository-policy') }}"><i class="fa fa-check"></i><span>Repository
                                        Policy</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--<div class="row">-->
                <!--    <div class="col-md-6">-->
                <!--        <div class="footer_logo">-->
                <!--            <img class="img-fluid" src="{{ asset('assets/images/logo-dark.png') }}" alt="">-->
                <!--        </div>-->
                <!--        <ul class="address">-->
                <!--            <li>-->
                <!--               <a>-->
                <!--               <i class="fa fa-phone"></i>-->
                <!--               +1 (346) 980 4345-->
                <!--               </a>-->
                <!--            </li>-->
                <!--            <li>-->
                <!--               <a>-->
                <!--               <i class="fa fa-envelope"></i>-->
                <!--               info@guinnesspress.org-->
                <!--               </a>-->
                <!--            </li>-->
                <!--            <li>-->
                <!--               <a>-->
                <!--               <i class="fa fa-location"></i>-->
                <!--               16192 Coastal Highway Lewes, DE 19958, USA-->
                <!--               </a>-->
                <!--            </li>-->
                <!--        </ul>-->
                <!--    </div>-->
                <!--    <div class="col-md-7">-->
                <!--        <h3>-->
                <!--            COPYRIGHT 2024. Guinness Press, ALL RIGHTS RESERVED.-->
                <!--        </h3>-->
                <!--<p>-->
                <!--	We not only let you explore but also offer helpful resources so that you can learn from them-->
                <!--</p>-->
                <!--    </div>-->
                <!--    <div class="col-md-5">-->
                <!--<div class="footer_logo">-->
                <!--	<img class="img-fluid" src="{{ asset('assets/images/logo-dark.png') }}" alt="">-->
                <!--</div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"
        integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/TextPlugin.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.6.1/js/iziModal.min.js"
        integrity="sha512-lR/2z/m/AunQdfBTSR8gp9bwkrjwMq1cP0BYRIZu8zd4ycLcpRYJopB+WsBGPDjlkJUwC6VHCmuAXwwPHlacww=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Include js plugin -->
    <script src="{{ asset('assets/owl-carousel/owl.carousel.js') }}"></script>
    <script>
        $("#slider_1").owlCarousel({
            items: 10,
            itemsDesktop: [1500, 6],
            itemsDesktopSmall: [1200, 6],
            itemsTablet: [1000, 6],
            itemsTablet: [768, 5],
            itemsMobile: [425, 5],
            loop: true,
            autoPlay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true
        });
        $("#slider_2").owlCarousel({
            items: 5,
            itemsDesktop: [1500, 6],
            itemsDesktopSmall: [1200, 4],
            itemsTablet: [1000, 2],
            itemsTablet: [768, 3],
            itemsMobile: [425, 2],
            loop: true,
            autoPlay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true
        });
        $("#slider_3").owlCarousel({
            items: 6,
            itemsDesktop: [1500, 6],
            itemsDesktopSmall: [1200, 4],
            itemsTablet: [1000, 3],
            itemsTablet: [768, 3],
            loop: true,
            autoPlay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true
        });
        /*Megamenu DropDown*/
        jQuery(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu-single', this).addClass("show-mega");
                    $('.dropdown-show-mega').removeClass("show-mega-main");
                },
                function() {
                    $('.dropdown-menu-single', this).removeClass("show-mega");
                    $('.dropdown-menu-double').removeClass("show-mega");
                });
            $(".dropdown-nested").hover(

                function() {
                    $('.dropdown-menu-double').addClass("show-mega");
                }

            );
            $(".dropdown-main-mega").hover(
                function() {
                    $('.dropdown-show-mega').addClass("show-mega-main");
                }

            );
            $(".banner").hover(
                function() {
                    $('.dropdown-show-mega').removeClass("show-mega-main");
                }

            );
        });
    </script>
    <script>
        function copydoi() {
            let copyText = document.getElementById("copyDoiToClipboard");
            let copySuccess = document.getElementById("copieddoi-success");
            let text = copyText.getAttribute("href");
            //copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(text);

            copySuccess.style.opacity = "1";
            setTimeout(function() {
                copySuccess.style.opacity = "0"
            }, 500);
        }
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var query = $(this).val();
                $.ajax({
                    url: "{{ route('search') }}",
                    type: "GET",
                    data: {
                        'query': query
                    },
                    success: function(data) {
                        if (data == '') {
                            $('#search_result_list').html('');
                            $('#search_result_list').append(
                                '<li><a href="">No Data Found</a></li>');
                            $(".search_result").css({
                                "display": "block"
                            });
                        } else {
                            $('#search_result_list').html('');
                            $.each(data, function(index, post) {

                                console.log(post.setting_value);
                                $('#search_result_list').append(
                                    '<li><a href="journal-details/' + post.path +
                                    '">' + post.setting_value + '</a></li>');
                                $(".search_result").css({
                                    "display": "block"
                                });
                            });
                        }

                    }
                })
            });
        });
    </script>
    <div style="display: none;" class="popupform submitArticlePopup" id="submitArticlePopup">
        <div class="alert alert-success success-signup" role="alert" style="display:none">
            Sent Successfully
        </div>
        <h2>Submit Your Article</h2>
        <!--<p>Fill the below fields</p>-->
        <form action="{{ route('send.articlemail') }}" method="POST" class="cmxform web-package-form"
            id="articleSub_form" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <h4 class="fcol_head">Article Detail:</h4>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <input type="text" required placeholder="Manuscript Title *" id ="wnm"
                                        name="manuscript_title">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li>
                                    <!--<i class="fa fa-envelope" aria-hidden="true"></i>-->
                                    <select name="journal" required placeholder="Journal *" id="sa_journal">
                                        <option value="none" selected disabled hidden>Journal</option>
                                        <option value="International Journal Of Empirical Research Methods">
                                            International Journal Of Empirical Research Methods</option>
                                        <option value="Journal Of Business Leadership And Management">Journal Of
                                            Business Leadership And Management</option>
                                        <option value="Cultural Landscape Insights">Cultural Landscape Insights
                                        </option>
                                        <option value="Current Integrative Engineering">Current Integrative Engineering
                                        </option>
                                        <option value="Sustainable Energy And Environment Review">Sustainable Energy
                                            And Environment Review</option>
                                        <option value="Recent Educational Research">Recent Educational Research
                                        </option>
                                        <option value="Pharmaceutical Breakthroughs">Pharmaceutical Breakthroughs
                                        </option>
                                        <option value="Medical Spectrum Review">Medical Spectrum Review</option>
                                        <option value="Strategic Financial Review">Strategic Financial Review</option>
                                        <option value="Advanced Chemistry Insights">Advanced Chemistry Insights
                                        </option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li>
                                    <!--<i class="fa fa-phone" aria-hidden="true"></i>-->
                                    <!--<input type="file" id="inputArticle-files" hidden="hidden" multiple/>-->
                                    <!--  <button type="button" id="articlesub-button">CHOOSE FILES</button>-->
                                    <!--  <span id="articlesub-text">No file Selected.</span>-->
                                    <label for="article_fileattachment">
                                        <a class="btn btn-primary text-light articlesub-button" role="button"
                                            id="articlesub-button" aria-disabled="false">Choose Files</a>
                                    </label>
                                    <input type="file" required name="article_fileattachment[]"
                                        accept=".png,.docx,jpeg,.pdf,.xlsx" id="article_fileattachment"
                                        style="opacity: 0;" multiple max-size="2048" />
                                    <div id="files-area">
                                        <span id="filesList">
                                            <span id="files-names"></span>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h4 class="fcol_head">Corresponding Authors Detail:</h4>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <input type="text" required placeholder="Full Name *" id ="wnm"
                                        name="author_name">
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <input type="number" required minlength="10" required placeholder="Phone No. *"
                                        id="wpn" name="author_number">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <input type="email" required placeholder="Email Address *" id="wem"
                                        name="author_email">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <input type="text" required placeholder="Country *" id ="wnm"
                                        name="author_country">
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <input type="text" required placeholder="Affiliation *" id ="wnm"
                                        name="affiliation">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="submit_button">
                <ul>
                    <li>
                        <input type="submit" value="Submit" id="your-article-submit" name="your-article-submit"
                            placeholder="Submit Your Article" required>
                    </li>
                </ul>
            </div>
        </form>
    </div>

    <script>
        const dt = new DataTransfer(); // Permet de manipuler les fichiers de l'input file

        jQuery("#article_fileattachment").on('change', function(e) {
            const maxFileSizeInMB = 2;
            const maxFileSizeInKB = 1024 * 1024 * maxFileSizeInMB;

            // this.files.forEach(
            //     function(singlefile){
            //       if (singlefile.size > maxFileSizeInKB) {
            //           alert("Maximum of 2 MB File is allowed");
            //       }
            //     }
            //     );

            if (parseInt(this.files.length) > 3) {
                alert("You can only upload a maximum of 3 files");
            } else {
                for (var i = 0; i < this.files.length; i++) {
                    let fileBloc = $('<span/>', {
                            class: 'file-block'
                        }),
                        fileName = $('<span/>', {
                            class: 'name',
                            text: this.files.item(i).name
                        });
                    fileBloc.append('<span class="file-delete"><span>+</span></span>')
                        .append(fileName);
                    $("#filesList > #files-names").append(fileBloc);
                };
                // Ajout des fichiers dans l'objet DataTransfer
                for (let file of this.files) {
                    dt.items.add(file);
                }
                // Mise à jour des fichiers de l'input file après ajout
                this.files = dt.files;
            }
            // EventListener pour le bouton de suppression créé
            jQuery('span.file-delete').click(function() {
                let name = $(this).next('span.name').text();
                // Supprimer l'affichage du nom de fichier
                jQuery(this).parent().remove();
                for (let i = 0; i < dt.items.length; i++) {
                    // Correspondance du fichier et du nom
                    if (name === dt.items[i].getAsFile().name) {
                        // Suppression du fichier dans l'objet DataTransfer
                        dt.items.remove(i);
                        continue;
                    }
                }
                // Mise à jour des fichiers de l'input file après suppression
                document.getElementById('article_fileattachment').files = dt.files;
            });
        });
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6581a87c07843602b803a7c1/1hi17ka3q';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @session('success')
        <script>
            toastr.success("{{ session('success') }}");
        </script>
    @endsession
    @session('error')
        <script>
            toastr.error("{{ session('error') }}");
        </script>
    @endsession

    <script>
        $('form').each(function() {
            $(this).on('submit', function() {
                var button = $(this).find('button[type="submit"]');
                button.prop('disabled', true).html(`
                <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
            `);
                return true;
            });
        });
    </script>
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16632897206"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16632897206');
</script>
</body>

</html>
