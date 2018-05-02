<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dashboard/images/favicon.png') }}">
    <title>Ela - Bootstrap Admin Dashboard Template</title>

    <link href="{{ asset('dashboard/css/lib/chartist/chartist.min.css') }}" rel="stylesheet">
	<link href="{{ asset('dashboard/css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard/css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('dashboard/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('dashboard/css/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/dashboard.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body class="fix-header fix-sidebar">
    
    @yield('body')

    <!-- All Jquery -->
    <script src="{{ asset('dashboard/js/lib/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('dashboard/js/lib/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('dashboard/js/jquery.slimscroll.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dashboard/js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ asset('dashboard/js/lib/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>


    {{-- <script src="js/lib/datamap/d3.min.js"></script>
    <script src="js/lib/datamap/topojson.js"></script>
    <script src="js/lib/datamap/datamaps.world.min.js"></script>
    <script src="js/lib/datamap/datamap-init.js"></script>
 --}}
    {{-- <script src="js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="js/lib/weather/weather-init.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script> --}}


    {{-- <script src="{{ asset('dashboard/js/lib/chartist/chartist.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/lib/chartist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/lib/chartist/chartist-init.js') }}"></script> --}}
    <!--Custom JavaScript -->
    <script src="{{ asset('dashboard/js/custom.min.js') }}"></script>
    @yield('js')
</body>

</html>