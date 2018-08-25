<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		

		<!-- Site title
		================================================== -->
		<title>@yield('description') | @yield('title')</title>

		<meta name="description" content="@yield('description')">
        <meta name="keywords" content="@yield('keywords')">
        <meta name="author" content="KaTiSoft" />
        <meta http-equiv="content-language" content="{{ app()->getLocale() }}" />
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="3 days">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- FB Open Graph Tags -->
        <meta property="fb:app_id"        content="" />
        <meta property="og:url"           content="@yield('fb_url')" />
        <meta property="og:type"          content="@yield('fb_type')" />
        <meta property="og:title"         content="@yield('fb_title')" />
        <meta property="og:description"   content="@yield('fb_des')" />
        <meta property="og:image"         content="@yield('fb_img')" />
        <meta property="og:site_name"     content="{{ setting('home.title') }}"/>

        <link rel="shortcut icon" type="image/png" href="">
        <!-- Place favicon.ico in the root directory -->

		<!-- Bootstrap CSS
		================================================== -->
		<link rel="stylesheet" href="{{ asset('lkgroupvn/css/bootstrap.min.css') }}">
		<!-- Animate CSS
		================================================== -->
		<link rel="stylesheet" href="{{ asset('lkgroupvn/css/animate.min.css') }}">
		<!-- Font Icons CSS
		================================================== -->
		<link rel="stylesheet" href="{{ asset('lkgroupvn/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('lkgroupvn/css/ionicons.min.css') }}">
		<!-- Main CSS
		================================================== -->
		<link rel="stylesheet" href="{{ asset('lkgroupvn/css/style.css') }}">
		<!-- Google web font 
		================================================== -->	
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!-- Preloader section
		================================================== -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-pulse"></div>
		</div>
		<!-- Header section
		================================================== -->
		<section id="header" class="header-one">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
				<div class="header-thumb">
					@if(setting('home.logo'))
						<img class="wow fadeIn" data-wow-delay="1s" src="{{ Voyager::image( setting('home.logo') ) }}" alt="LK GROUPVN" style="width: 130px;">
					@else
						<h1 class="wow fadeIn" data-wow-delay="1s">{{ setting('home.title') }}</h1>
					@endif
					<h3 class="wow fadeInUp" data-wow-delay="1.3s">{{ setting('home.description') }}</h3>
				</div>
					</div>
				</div>
			</div>		
		</section>

		@yield('content')

		<!-- Footer section
		================================================== -->
		


		<!-- start footer Area -->		
		<!-- <footer class="footer-area section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h3>Về chúng tôi</h3>
							<p>
								LK COFFEE luôn muốn mang đến cho bạn một không gian yên tĩnh, đồ uống tuyệt vời để các bạn tận hưởng một ngày mới tràn năng lượng.
							</p>						
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h3>Liên hệ</h3>
							<div>
								<p><i class="fa fa-home"></i> Nha Trang, Khánh Hòa, Việt Nam</p>
								<p><i class="fa fa-envelope"></i> email@gmail.com</p>
								<p><i class="fa fa-phone"></i> (+84) 974 974 567</p>
							</div>
						</div>
					</div>						
					<div class="col-lg-3 col-md-6 col-sm-6 social-widget">
						<div class="single-footer-widget">
							<h3>Theo dõi chúng tôi</h3>
							<div class="footer-social d-flex align-items-center">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
							</div>
						</div>
					</div>							
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 text-center">
						<p class="wow fadeInUp"  data-wow-delay="0.3s">Copyright © 2018 LK GROUP - Thiết kế bởi <a href="http://webdepnhatrang.com">KaTiSoft</a></p>
					</div>
				</div>
			</div>
		</footer>	 -->
		{!! setting('home.footer') !!}
		<!-- End footer Area -->	


		<!-- Javascript 
		================================================== -->
		<script src="{{ asset('lkgroupvn/js/jquery.js') }}"></script>
		<script src="{{ asset('lkgroupvn/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('lkgroupvn/js/isotope.js') }}"></script>
		<script src="{{ asset('lkgroupvn/js/imagesloaded.min.js') }}"></script>
		<script src="{{ asset('lkgroupvn/js/wow.min.js') }}"></script>
		<script src="{{ asset('lkgroupvn/js/custom.js') }}"></script>
	</body>
</html>