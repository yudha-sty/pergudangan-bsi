<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard Pergudangan BSI</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="DashboardKit is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
    <meta name="keywords" content="DashboardKit, Dashboard Kit, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Free Bootstrap Admin Template">
    <meta name="author" content="DashboardKit ">


    <!-- Favicon icon -->
    <link rel="icon" href="{{url ('template/dist/assets/images/favicon.svg') }}" type="image/x-icon">

    <!-- font css -->
    <link rel="stylesheet" href="{{url ('template/dist/assets/fonts/feather.css') }}">
    <link rel="stylesheet" href="{{url ('template/dist/assets/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{url ('template/dist/assets/fonts/material.css') }}">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{url ('template/dist/assets/css/style.css') }}" id="main-style-link">
</head>

<body class="">

	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>

    	<!-- [ Mobile header ] start -->
	<div class="pc-mob-header pc-header">
		<div class="pcm-logo">
			<img src="{{url ('template/dist/assets/images/logo.svg') }}" alt="" class="logo logo-lg">
		</div>
		<div class="pcm-toolbar">
			<a href="#!" class="pc-head-link" id="mobile-collapse">
				<div class="hamburger hamburger--arrowturn">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
			</a>
			<a href="#!" class="pc-head-link" id="headerdrp-collapse">
				<i data-feather="align-right"></i>
			</a>
			<a href="#!" class="pc-head-link" id="header-collapse">
				<i data-feather="more-vertical"></i>
			</a>
		</div>
	</div>
	<!-- [ Mobile header ] End -->
        @include('layouts/header');
        @include('layouts/navbar');
        
<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pcoded-content">
        @yield('content');
    </div>
</div>


  <!-- Required Js -->
  <script src="{{url ('template/dist/assets/js/vendor-all.min.js') }}"></script>
  <script src="{{url ('template/dist/assets/js/plugins/bootstrap.min.js') }}"></script>
  <script src="{{url ('template/dist/assets/js/plugins/feather.min.js') }}"></script>
  <script src="{{url ('template/dist/assets/js/pcoded.min.js') }}"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script> -->
  <script src="{{url ('template/dist/assets/js/plugins/clipboard.min.js') }}"></script>
  <script src="{{url ('template/dist/assets/js/uikit.min.js') }}"></script> -->

<!-- Apex Chart -->
<script src="{{url ('template/dist/assets/js/plugins/apexcharts.min.js') }}"></script>
<!-- custom-chart js -->
<script src="{{url ('template/dist/assets/js/pages/dashboard-sale.js') }}"></script>

</body>
</html>