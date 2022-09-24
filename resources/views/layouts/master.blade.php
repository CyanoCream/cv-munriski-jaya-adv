<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Font Awesome Icons -->
	{{-- <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}"> --}}
	<!-- Theme style -->
	<link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    {{-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> --}}
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	@yield('addCss')
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
	<div class="wrapper">

		@include('layouts.navbar')
		@include('layouts.sidebar')

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			@yield('content')
		</div>
		<!-- /.content-wrapper -->

		@include('layouts.footer')
	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED SCRIPTS -->

	<!-- jQuery -->
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<!-- Bootstrap 4 -->
	<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
	<!-- AdminLTE App -->
	<script src="{{asset('js/adminlte.min.js')}}"></script>
	<!-- Sweetalert -->
	<script src="{{asset('js/sweetalert.min.js')}}"></script>

	@yield('addJavascript')
</body>

</html>
