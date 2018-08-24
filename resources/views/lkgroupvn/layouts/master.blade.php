<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">

		<!-- Site title
		================================================== -->
		<title>@yield('description') | @yield('title')</title>

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
					@if(setting('site.logo'))
						<img src="{{ Voyager::image( setting('site.logo') ) }}" alt="LK GROUPVN" style="width: 130px;">
					@else
						<h1 class="wow fadeIn" data-wow-delay="1.6s">{{ setting('site.title') }}</h1>
					@endif
					<h3 class="wow fadeInUp" data-wow-delay="1.9s">{{ setting('site.description') }}</h3>
				</div>
					</div>
				</div>
			</div>		
		</section>

		@yield('content')

		<!-- Footer section
		================================================== -->
		


		<!-- start footer Area -->		
		<footer class="footer-area section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h3>Về chúng tôi</h3>
							<p>
								LK COFFEE luôn muốn mang đến cho bạn một không gian yên tĩnh, đồ uống tuyệt vời để các bạn tận hưởng một ngày mới tràn năng lượng.
							</p>
							<p class="footer-text">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Thiết kế <i class="fa fa-heart-o" aria-hidden="true"></i> bởi <a href="https://webdepnhatrang.com" target="_blank">KaTiSoft</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</p>								
						</div>
					</div>
					<div class="col-lg-5  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h3>Đăng ký voucher</h3>
							<p>Để lại thông tin cho chúng tôi</p>
							<div class="" id="mc_embed_signup">
								<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
									<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
										<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
										<div style="position: absolute; left: -5000px;">
											<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
										</div>

									<div class="info pt-20"></div>
								</form>
							</div>
						</div>
					</div>						
					<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
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
		</footer>	
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