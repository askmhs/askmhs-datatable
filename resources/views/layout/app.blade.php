<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title> ASKMHS DATATABLE </title>

	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
	<!-- IonIcons -->
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

	@stack("style")
</head>
<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		<!-- Top Navbar -->
		@include('layout.topnavbar')
		
		<!-- Sidebar -->
		@include('layout.sidebar')
	</div>

	<div class="content-wrapper">
		@yield("content")
	</div>

	<!-- jQuery -->
	<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<!-- AdminLTE -->
	<script src="{{ asset('js/adminlte.js') }}"></script>

	<!-- OPTIONAL SCRIPTS -->
	{{-- <script src="plugins/chart.js/Chart.min.js"></script> --}}
	<script src="{{ asset('js/demo.js') }}"></script>
	{{-- <script src="js/pages/dashboard3.js"></script> --}}

	@stack('scripts')
</body>
</html>