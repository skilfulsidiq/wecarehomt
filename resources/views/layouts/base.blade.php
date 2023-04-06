<!DOCTYPE html>
<html lang="en">
<head>


    <!-- Favicons -->
    {{-- <link rel="apple-touch-icon" sizes="57x57" href="{{asset('favicons/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('favicons/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('favicons/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('favicons/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('favicons/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('favicons/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('favicons/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('favicons/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicons/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('favicons/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('favicons/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('favicons/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('favicons/ms-icon-144x144.png')}}"> --}}
    <meta name="theme-color" content="#ffffff">
    <title>HouseBox</title>






    {{-- <meta name="msapplication-config" content="../../assets/img/favicons/browserconfig.xml"> --}}
    <meta name="msapplication-config" content="{{asset('favicons/browserconfig.xml')}}">

    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

    	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
    <link type="text/css" href="{{asset('assets/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/highcharts/css/highcharts.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{asset('assets/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/dark-theme.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/semi-dark.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/header-colors.css')}}" />



    @yield('styles')
    @livewireStyles
    @vite(['resources/sass/app.scss'])
</head>

<body>


        {{ $slot }}











    <!-- Core -->

	<!--plugins-->
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
      {{-- <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script> --}}
      <script src="{{asset('assets/js/popper.js')}}"></script>
      <script src="{{asset('assets/js/bootstrap.js')}}"></script>
	<script src="{{asset('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
	<script src="{{asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{asset('assets/plugins/highcharts/js/highcharts.js')}}"></script>
	<script src="{{asset('assets/plugins/highcharts/js/exporting.js')}}"></script>
	<script src="{{asset('assets/plugins/highcharts/js/variable-pie.js')}}"></script>
	<script src="{{asset('assets/plugins/highcharts/js/export-data.js')}}"></script>
	<script src="{{asset('assets/plugins/highcharts/js/accessibility.js')}}"></script>
	<script src="{{asset('assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
	{{-- <script src="{{asset('assets/js/index2.js')}}"></script> --}}
	<!--app JS-->
	<script src="{{asset('assets/js/main_app.js')}}"></script>
	{{-- <script>
		new PerfectScrollbar('.customers-list');
		new PerfectScrollbar('.store-metrics');
		new PerfectScrollbar('.product-list');
	</script> --}}

     @livewireScripts
      {{-- @powerGridScripts --}}
    {{-- <x-livewire-alert::scripts /> --}}
    @vite(['resources/js/app.js'])

</script>
<script>
$(document).ready(function() {

    // $('.select2').select2();

});


</script>

@stack('custom_script')
</body>

</html>
