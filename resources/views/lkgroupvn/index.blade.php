@extends('lkgroupvn.layouts.master')

@section('title', setting('home.title'))
@section('description', setting('home.description'))

@section('fb_url', route('homepage'))
@section('fb_type', 'website')
@section('fb_title', setting('home.title'))
@section('fb_des', setting('home.description'))
@section('fb_img', '')

@section('content')
<!-- Portfolio section
================================================== -->
<section id="portfolio">
   <div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">     
				<!-- iso section -->
				<div class="iso-section wow fadeInUp" data-wow-delay="1.6s">
						<!-- iso box section -->
						<div class="iso-box-section wow fadeInUp" data-wow-delay="1s">
							<div class="iso-box-wrapper col4-iso-box">
								<div class="iso-box photoshop branding col-md-4 col-sm-6">
									<div class="portfolio-thumb">
										<img src="{{ Voyager::image( setting('home.box1_image') ) }}" class="img-responsive" alt="Portfolio">
										<div class="portfolio-display">
											<div class="portfolio-item">
												<h2> {{ setting('home.box1_title') }}</h2>	
											</div>
										</div>
										<div class="portfolio-overlay">
											<div class="portfolio-item">
												<a href="{{ setting('home.box1_link_to') }}"><i class="fa fa-link"></i></a>
												<h2>{{ setting('home.box1_title') }}</h2>
												</div>
										</div>
									</div>
								</div>
								<div class="iso-box graphic template col-md-4 col-sm-6">
									<div class="portfolio-thumb">
										<img src="{{ Voyager::image( setting('home.box2_image') ) }}" class="img-responsive" alt="Portfolio">
										<div class="portfolio-display">
											<div class="portfolio-item">
												<h2> {{ setting('home.box2_title') }}</h2>	
											</div>
										</div>
										<div class="portfolio-overlay">
											<div class="portfolio-item">
												<a href="{{ setting('home.box2_link_to') }}"><i class="fa fa-link"></i></a>
												<h2> {{ setting('home.box2_title') }}</h2>
											</div>
										</div>
									</div>
								</div>
								<div class="iso-box template graphic col-md-4 col-sm-6">
									<div class="portfolio-thumb">
										<img src="{{ Voyager::image( setting('home.box3_image') ) }}" class="img-responsive" alt="Portfolio">
										<div class="portfolio-display">
											<div class="portfolio-item">
												<h2> {{ setting('home.box3_title') }}</h2>	
											</div>
										</div>
										<div class="portfolio-overlay">
											<div class="portfolio-item">
												<a href="{{ setting('home.box3_link_to') }}"><i class="fa fa-link"></i></a>
												<h2>{{ setting('home.box3_title') }}</h2>
												</div>
										</div>
									</div>
								</div>
								<div class="iso-box graphic template col-md-2 hidden-sm hidden-xs"></div>
								<div class="iso-box graphic template col-md-4 col-sm-6">
									<div class="portfolio-thumb">
										<img src="{{ Voyager::image( setting('home.box4_image') ) }}" class="img-responsive" alt="Portfolio">
										<div class="portfolio-display">
											<div class="portfolio-item">
												<h2> {{ setting('home.box4_title') }}</h2>	
											</div>
										</div>
										<div class="portfolio-overlay">
											<div class="portfolio-item">
												<a href="{{ setting('home.box4_link_to') }}"><i class="fa fa-link"></i></a>
												<h2>{{ setting('home.box4_title') }}</h2>
												</div>
										</div>
									</div>
								</div>
								<div class="iso-box photoshop branding col-md-4 col-sm-6">
									<div class="portfolio-thumb">
										<img src="{{ Voyager::image( setting('home.box5_image') ) }}" class="img-responsive" alt="Portfolio">
										<div class="portfolio-display">
											<div class="portfolio-item">
												<h2> {{ setting('home.box5_title') }}</h2>	
											</div>
										</div>
										<div class="portfolio-overlay">
											<div class="portfolio-item">
												<a href="{{ setting('home.box5_link_to') }}"><i class="fa fa-link"></i></a>
												<h2>{{ setting('home.box5_title') }}</h2>
												</div>
										</div>
									</div>
								</div>
								<div class="iso-box graphic template col-md-2 hidden-sm hidden-xs"></div>
							</div>
						</div>
				</div>
			</div>
		</div>
   </div>
</section>
@endsection