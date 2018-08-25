<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
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
    <meta property="og:site_name"     content="{{ setting('lkcoffee.title') }}"/>

    <link rel="shortcut icon" type="image/png" href="">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{ asset('lkcoffee/css/linearicons.css') }}">
        <link rel="stylesheet" href="{{ asset('lkcoffee/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('lkcoffee/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('lkcoffee/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('lkcoffee/css/nice-select.css') }}">					
        <link rel="stylesheet" href="{{ asset('lkcoffee/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('lkcoffee/css/owl.carousel.css') }}">
        <!-- Image Grid  -->
        <link rel="stylesheet" href="{{ asset('lkcoffee/css/images-grid.css') }}">
        <link rel="stylesheet" href="{{ asset('lkcoffee/css/main.css') }}">
    </head>
    <body>
        <header id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                    <a href="#"><img src="{{ Voyager::image(setting('lkcoffee.logo')) }}" alt="" title="" /></a>
                    </div>
                    <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="#home">Trang chủ</a></li>
                        <li><a href="#about">Giới thiệu</a></li>
                        <li><a href="#coffee">Menu</a></li>
                        <li><a href="#review">Thông điệp</a></li>
                        <li><a href="#blog">Blog</a></li>
                    </ul>
                    </nav><!-- #nav-menu-container -->		    		
                </div>
            </div>
        </header><!-- #header -->


        @yield('content')
        

        <!-- start footer Area -->		
        <footer class="footer-area section-gap" style="background: url({{ Voyager::image(setting('lkcoffee.footer_st_bg')) }}) center; background-size: cover; padding: 200px 0 50px 0;">
            <div class="container">
                <!-- <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Về chúng tôi</h6>
                            <p>
                                LK COFFEE luôn muốn mang đến cho bạn một không gian yên tĩnh, đồ uống tuyệt vời để các bạn tận hưởng một ngày mới tràn năng lượng.
                            </p>
                            <p class="footer-text">
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Thiết kế <i class="fa fa-heart-o" aria-hidden="true"></i> bởi <a href="https://webdepnhatrang.com" target="_blank">KaTiSoft</a>
                            </p>								
                        </div>
                    </div>
                    <div class="col-lg-5  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Liên hệ</h6>
							<div>
								<p><i class="fa fa-home"></i> Nha Trang, Khánh Hòa, Việt Nam</p>
								<p><i class="fa fa-envelope"></i> email@gmail.com</p>
								<p><i class="fa fa-phone"></i> (+84) 974 974 567</p>
							</div>
                        </div>
                    </div>						
                    <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                        <div class="single-footer-widget">
                            <h6>Follow Us</h6>
                            <p>Let us be social</p>
                            <div class="footer-social d-flex align-items-center">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>							
                </div> -->
                {!! setting('lkcoffee.footer_st_content') !!}
                <p class="footer-text">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Thiết kế <i class="fa fa-heart-o" aria-hidden="true"></i> bởi <a href="https://webdepnhatrang.com" target="_blank">KaTiSoft</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>		
            </div>
        </footer>	
        <!-- End footer Area -->	

        <script src="{{ asset('lkcoffee/js/vendor/jquery-2.2.4.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js') }}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="{{ asset('lkcoffee/js/vendor/bootstrap.min.js') }}"></script>			
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="{{ asset('lkcoffee/js/easing.min.js') }}"></script>			
        <script src="{{ asset('lkcoffee/js/hoverIntent.js') }}"></script>
        <script src="{{ asset('lkcoffee/js/superfish.min.js') }}"></script>	
        <script src="{{ asset('lkcoffee/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('lkcoffee/js/jquery.magnific-popup.min.js') }}"></script>	
        <script src="{{ asset('lkcoffee/js/owl.carousel.min.js') }}"></script>			
        <script src="{{ asset('lkcoffee/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('lkcoffee/js/jquery.nice-select.min.js') }}"></script>			
        <script src="{{ asset('lkcoffee/js/parallax.min.js') }}"></script>	
        <script src="{{ asset('lkcoffee/js/waypoints.min.js') }}"></script>
        <!-- Images Grid -->
        <script src="{{ asset('lkcoffee/js/images-grid.js') }}"></script>
        <script src="{{ asset('lkcoffee/js/jquery.counterup.min.js') }}"></script>					
        <!-- <script src="js/mail-script.js"></script>	 -->
        <script src="{{ asset('lkcoffee/js/main.js') }}"></script>	
        @yield('script')
        <script>
            
                function openCity(evt, cityName) {
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }
                    document.getElementById(cityName).style.display = "block";
                    evt.currentTarget.className += " active";
                }
            document.getElementById("tabdefault").click();
        </script>
        
    </body>
</html>