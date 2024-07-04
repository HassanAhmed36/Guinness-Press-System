<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <!-- Title -->
    <title>Guinness Press System</title>

    <!--Favicon -->
    <link rel="icon" href="../../assets/images/brand/favicon.ico" type="image/x-icon" />

    <link href="{{ asset('admin_assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/css/boxed.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/css/dark.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/css/skin-modes.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/css/animated.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/css/icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/plugins/p-scrollbar/p-scrollbar.css') }}" rel="stylesheet" />
</head>

<body class="">
    @yield('main_sction')
    <script src="{{ asset('admin_assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/p-scrollbar/p-scrollbar.js') }}"></script>
    <script src="{{ asset('admin_assets/js/custom.js') }}"></script>
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
</body>

</html>
