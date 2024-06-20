<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'SPONGE') }} @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Common CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

    <!-- Essential Form CSS -->
    <link href="{{ asset('plugins/timepicker/bootstrap-timepicker.min.css') }}" rel=" stylesheet">
    <link href="{{ asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />

    <!-- Additional CSS -->
    @yield('styles')

</head>


<body>

    <!-- Begin page -->
    <div class="accountbg"></div>
    <div class="wrapper-page">
        <div class="panel panel-color panel-primary panel-pages">

            <div class="panel-body">
                <h3 class="text-center m-t-0 m-b-30">
                    <span class=""><img src="assets/images/logo_dark.png" alt="logo" height="32"></span>
                </h3>
                <h4 class="text-muted text-center m-t-0"><b>Sign In</b></h4>

                @yield('form')
            </div>

        </div>
    </div>

    <!-- Form Plugin js -->
    <script src="{{ asset('plugins/timepicker/bootstrap-timepicker.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}" type="text/javascript"></script>

    <!-- jQuery  -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/modernizr.min.js') }}"></script>
    <script src="{{ asset('js/detect.js') }}"></script>
    <script src="{{ asset('js/fastclick.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('js/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('js/waves.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>

    <script src="{{ asset('plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Sweet-Alert  -->
    <script src="{{ asset('plugins/bootstrap-sweetalert/sweet-alert.min.js') }}"></script>
    <script src="{{ asset('pages/sweet-alert.init.js') }}"></script>

    <!-- Parsleyjs -->
    <script type="text/javascript" src="{{ asset('plugins/parsleyjs/parsley.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>

    <!-- <script src="{{ asset('pages/dashborad.js') }}"></script> -->
    <script src="{{ asset('js/app2.js') }}"></script>

    <!-- Additional Script -->
    @yield('scripts')

</body>

</html>