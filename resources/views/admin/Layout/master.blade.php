<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <!-- Title -->
    <title>Guinness Press System</title>

    <link rel="icon" href="{{ asset('admin_assets/images/brand/favicon.ico') }}" type="image/x-icon" />
    <link href="{{ asset('admin_assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/css/boxed.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/css/dark.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/css/skin-modes.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/css/animated.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/plugins/p-scrollbar/p-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/css/icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/plugins/datatable/css/dataTables.bootstrap5.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/plugins/datatable/css/buttons.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_assets/plugins/datatable/responsive.bootstrap5.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/plugins/wysiwyag/richtext.css') }}" rel="stylesheet" />

    <style>
        .form-control::placeholder {
            color: rgba(0, 0, 0, 0.820) !important;
        }
    </style>

</head>

<body class="app sidebar-mini">

    <!---Global-loader-->
    <div id="global-loader">
        <img src="{{ asset('admin_assets/images/svgs/loader.svg') }}" alt="loader">
    </div>

    <div class="page">
        <div class="page-main">
            @include('admin.partials.sidebar')
            @include('admin.partials.app_header')
            <div class="app-content main-content">
                <div class="side-app">
                    <div class="pt-5">
                        @yield('main_section')
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
                        Copyright © 2021 <a href="#">Dayone</a>. Designed with <span
                            class="fa fa-heart text-danger"></span> by <a href="#">Spruko Technologies
                            Pvt.Ltd</a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer-->

        <!--sidebar-right-->
        <div class="sidebar sidebar-right sidebar-animate">
            <div class="card-header border-bottom pb-5">
                <h4 class="card-title">Notifications </h4>
                <div class="card-options">
                    <a href="#" class="btn btn-sm btn-icon btn-light  text-primary" data-bs-toggle="sidebar-right"
                        data-bs-target=".sidebar-right"><i class="feather feather-x"></i> </a>
                </div>
            </div>
            <div class="">
                <div class="list-group-item  align-items-center border-0">
                    <div class="d-flex">
                        <span class="avatar avatar-lg brround me-3"
                            style="background-image: url(../../assets/images/users/4.jpg)"></span>
                        <div class="mt-1">
                            <a href="#" class="font-weight-semibold fs-16">Liam <span
                                    class="text-muted font-weight-normal">Sent Message</span></a>
                            <span class="clearfix"></span>
                            <span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>30
                                mins ago</span>
                        </div>
                        <div class="ms-auto">
                            <a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="feather feather-more-horizontal"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                <li><a href="#"><i class="feather feather-eye me-2"></i>View</a></li>
                                <li><a href="#"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
                                <li><a href="#"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
                                <li><a href="#"><i class="feather feather-settings me-2"></i>More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--/sidebar-right-->
    </div>

    <a href="#top" id="back-to-top"><span class="feather feather-chevrons-up"></span></a>
    <script src="{{ asset('admin_assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/othercharts/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/sidemenu/sidemenu.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/p-scrollbar/p-scrollbar.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/p-scrollbar/p-scroll1.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/sidebar/sidebar.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/custom.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/datatables.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/wysiwyag/jquery.richtext.js') }}"></script>
    <link href="{{ asset('admin_assets/plugins/wysiwyag/richtext.css') }}" rel="stylesheet" />
    <script src="{{ asset('admin_assets/js/formelementadvnced.js') }}"></script>
    <script src="{{ asset('admin_assets/js/form-elements.js') }}"></script>
    <script src="{{ asset('admin_assets/js/select2.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.content').each(function() {
                $(this).richText({
                    bold: true,
                    italic: true,
                    underline: false,
                    strikeThrough: false,
                    ol: false,
                    ul: false,
                    heading: false,
                    fontColor: false,
                    fontSize: true,
                    imageUpload: false,
                    fileUpload: false,
                    videoEmbed: false,
                    urls: false,
                    table: false,
                    removeStyles: false,
                    code: false,
                    youtube: false,
                    align: true,
                    leftAlign: true,
                    centerAlign: true,
                    rightAlign: true,
                    justify: true,
                });
            });

            $('#datatable').DataTable();
            $('#responsive-datatable').DataTable();
        })
    </script>


</body>

</html>
