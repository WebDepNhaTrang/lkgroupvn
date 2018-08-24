@extends('lkcoffee.layouts.master')

@section('title', setting('lkcoffee.title'))
@section('description', setting('lkcoffee.description'))

@section('fb_url', route('lkcoffee'))
@section('fb_type', 'website')
@section('fb_title', setting('lkcoffee.title'))
@section('fb_des', setting('lkcoffee.description'))
@section('fb_img', '')

@section('content')
<!-- start banner Area -->
<section class="banner-area" id="home">	
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-start">
            <div class="banner-content col-lg-7">
                <h6 class="text-white text-uppercase">Cảm hứng cho ngày mới</h6>
                <h1>
                    Bắt đầu ngày mới <br>
                    với cà phê				
                </h1>
                <!--a href="#" class="primary-btn text-uppercase">Buy Now</a-->
            </div>											
        </div>
    </div>
</section>
<!-- End banner Area -->	

<!-- Start video-sec Area -->
<section class="video-sec-area pb-100 pt-40" id="about">
    <div class="container">
        <div class="row justify-content-start align-items-center">
            <div class="col-lg-6 video-right justify-content-center align-items-center d-flex">
                <div class="overlay overlay-bg"></div>
                <a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid" src="{{ asset('lkcoffee/img/play-icon.png') }}" alt=""></a>
            </div>						
            <div class="col-lg-6 video-left">
                <h6>Live Coffee making process.</h6>
                <h1>LK COFFEE</h1>
                <p><span>Chúng tôi ở đây để lắng nghe và mang đến cho bạn ly cà phê tuyệt vời nhất, bạn sẽ
                có một ngày làm việc tuyệt vời với một ly cà phê chất lượng.</span></p>
                <img class="img-fluid" src="{{ asset('lkcoffee/img/signature.png') }}" alt="">
            </div>
        </div>
    </div>	
</section>
<!-- End video-sec Area -->

<!-- Start menu Area -->
<section class="menu-area section-gap" id="coffee">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                                <h1 class="mb-10">Menu hàng ngày của chúng tôi</h1>
                                <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>		
                    <!-- Tab links -->
            <div class="tab">
                <button class="tablinks" id="tabdefault" onclick="openCity(event, 'London')">Đồ uống</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">Thức ăn nhanh</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')">Xuân</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo1')">Hạ</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo2')">Thu</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo3')">Đông</button>
            </div>

            <!-- Tab content -->
            <div id="London" class="tabcontent">
                            <div class="row">
                                    <div class="col-lg-4">
                                        <div class="single-menu">
                                            <div class="title-div justify-content-between d-flex">
                                                <h4>Cappuccino</h4>
                                                <p class="price float-right">
                                                    $49
                                                </p>
                                            </div>
                                            <p>
                                                Usage of the Internet is becoming more common due to rapid advance.
                                            </p>								
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-menu">
                                            <div class="title-div justify-content-between d-flex">
                                                <h4>Americano</h4>
                                                <p class="price float-right">
                                                    $49
                                                </p>
                                            </div>
                                            <p>
                                                Usage of the Internet is becoming more common due to rapid advance.
                                            </p>								
                                        </div>
                                    </div><div class="col-lg-4">
                                        <div class="single-menu">
                                            <div class="title-div justify-content-between d-flex">
                                                <h4>Cappuccino</h4>
                                                <p class="price float-right">
                                                    $49
                                                </p>
                                            </div>
                                            <p>
                                                Usage of the Internet is becoming more common due to rapid advance.
                                            </p>								
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-menu">
                                            <div class="title-div justify-content-between d-flex">
                                                <h4>Americano</h4>
                                                <p class="price float-right">
                                                    $49
                                                </p>
                                            </div>
                                            <p>
                                                Usage of the Internet is becoming more common due to rapid advance.
                                            </p>								
                                        </div>
                                    </div><div class="col-lg-4">
                                        <div class="single-menu">
                                            <div class="title-div justify-content-between d-flex">
                                                <h4>Cappuccino</h4>
                                                <p class="price float-right">
                                                    $49
                                                </p>
                                            </div>
                                            <p>
                                                Usage of the Internet is becoming more common due to rapid advance.
                                            </p>								
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-menu">
                                            <div class="title-div justify-content-between d-flex">
                                                <h4>Americano</h4>
                                                <p class="price float-right">
                                                    $49
                                                </p>
                                            </div>
                                            <p>
                                                Usage of the Internet is becoming more common due to rapid advance.
                                            </p>								
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-menu">
                                            <div class="title-div justify-content-between d-flex">
                                                <h4>Ristretto</h4>
                                                <p class="price float-right">
                                                    $49
                                                </p>
                                            </div>
                                            <p>
                                                Usage of the Internet is becoming more common due to rapid advance.
                                            </p>								
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-menu">
                                            <div class="title-div justify-content-between d-flex">
                                                <h4>Affogato</h4>
                                                <p class="price float-right">
                                                    $49
                                                </p>
                                            </div>
                                            <p>
                                                Usage of the Internet is becoming more common due to rapid advance.
                                            </p>								
                                        </div>
                                    </div>			
                            </div>
            </div>
            <div id="Paris" class="tabcontent">
                            <div class="row">
                                    <div class="col-lg-4">
                                        <div class="single-menu">
                                            <div class="title-div justify-content-between d-flex">
                                                <h4>Cappuccino</h4>
                                                <p class="price float-right">
                                                    $49
                                                </p>
                                            </div>
                                            <p>
                                                Usage of the Internet is becoming more common due to rapid advance.
                                            </p>								
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-menu">
                                            <div class="title-div justify-content-between d-flex">
                                                <h4>Americano</h4>
                                                <p class="price float-right">
                                                    $49
                                                </p>
                                            </div>
                                            <p>
                                                Usage of the Internet is becoming more common due to rapid advance.
                                            </p>								
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-menu">
                                            <div class="title-div justify-content-between d-flex">
                                                <h4>Cappuccino</h4>
                                                <p class="price float-right">
                                                    $49
                                                </p>
                                            </div>
                                            <p>
                                                Usage of the Internet is becoming more common due to rapid advance.
                                            </p>								
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-menu">
                                            <div class="title-div justify-content-between d-flex">
                                                <h4>Americano</h4>
                                                <p class="price float-right">
                                                    $49
                                                </p>
                                            </div>
                                            <p>
                                                Usage of the Internet is becoming more common due to rapid advance.
                                            </p>								
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-menu">
                                            <div class="title-div justify-content-between d-flex">
                                                <h4>Cappuccino</h4>
                                                <p class="price float-right">
                                                    $49
                                                </p>
                                            </div>
                                            <p>
                                                Usage of the Internet is becoming more common due to rapid advance.
                                            </p>								
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-menu">
                                            <div class="title-div justify-content-between d-flex">
                                                <h4>Americano</h4>
                                                <p class="price float-right">
                                                    $49
                                                </p>
                                            </div>
                                            <p>
                                                Usage of the Internet is becoming more common due to rapid advance.
                                            </p>								
                                        </div>
                                    </div>
                            </div>
            </div>
            <div id="Tokyo" class="tabcontent">
                            <div class="row">
                                    
                                    <div class="col-lg-4">
                                        <div class="single-menu">
                                            <div class="title-div justify-content-between d-flex">
                                                <h4>Americano</h4>
                                                <p class="price float-right">
                                                    $49
                                                </p>
                                            </div>
                                            <p>
                                                Usage of the Internet is becoming more common due to rapid advance.
                                            </p>								
                                        </div>
                                    </div>
                                    
                            </div>														
            </div>
            <div id="Tokyo1" class="tabcontent">
                <div class="col-lg-4">
                    <div class="single-menu">
                        <div class="title-div justify-content-between d-flex">
                            <h4>Cappuccino</h4>
                            <p class="price float-right">
                                $49
                            </p>
                        </div>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advance.
                        </p>								
                    </div>
                </div>
            </div>
            <div id="Tokyo2" class="tabcontent">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-menu">
                            <div class="title-div justify-content-between d-flex">
                                <h4>Macchiato</h4>
                                <p class="price float-right">
                                    $49
                                </p>
                            </div>
                            <p>
                                Usage of the Internet is becoming more common due to rapid advance.
                            </p>								
                        </div>
                    </div>
                </div>
            </div>
            <div id="Tokyo3" class="tabcontent">
                <div class="col-lg-4">
                    <div class="single-menu">
                        <div class="title-div justify-content-between d-flex">
                            <h4>Americano</h4>
                            <p class="price float-right">
                                $49
                            </p>
                        </div>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advance.
                        </p>								
                    </div>
                </div>
            </div>
    </div>	
</section>
<!-- End menu Area -->

<!-- Start gallery Area -->
<section class="gallery-area section-gap" id="gallery">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">GELLARY</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>						
        <div class="row">
            <div class="col-lg-4">
                <a href="img/g1.jpg" class="img-pop-home">
                    <img class="img-fluid" src="{{ asset('lkcoffee/img/g1.jpg') }}" alt="">
                </a>	
                <a href="img/g2.jpg" class="img-pop-home">
                    <img class="img-fluid" src="{{ asset('lkcoffee/img/g2.jpg') }}" alt="">
                </a>	
            </div>
            <div class="col-lg-8">
                <a href="img/g3.jpg" class="img-pop-home">
                    <img class="img-fluid" src="{{ asset('lkcoffee/img/g3.jpg') }}" alt="">
                </a>	
                <div class="row">
                    <div class="col-lg-6">
                        <a href="img/g4.jpg" class="img-pop-home">
                            <img class="img-fluid" src="{{ asset('lkcoffee/img/g4.jpg') }}" alt="">
                        </a>	
                    </div>
                    <div class="col-lg-6">
                        <a href="img/g5.jpg" class="img-pop-home">
                            <img class="img-fluid" src="{{ asset('lkcoffee/img/g5.jpg') }}" alt="">
                        </a>	
                    </div>
                </div>
            </div>
        </div>
    </div>	
</section>
<!-- End gallery Area -->

<!-- Start review Area -->
<section class="review-area section-gap" id="review">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">Danh ngôn về cà phê</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>						
        <div class="row">
            <div class="col-lg-6 col-md-6 single-review">
                <img src="{{ asset('lkcoffee/img/r1.png') }}" alt="">
                <div class="title d-flex flex-row">
                    <h4>Khuyết danh</h4>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>								
                    </div>
                </div>
                <p>
                    Một ly cà phê ngon là phải vừa ngọt vừa đắng. Một tình yêu lý tưởng là một tình yêu vừa ngọt ngào, vừa đắng cay.
                </p>
            </div>	
            <div class="col-lg-6 col-md-6 single-review">
                <img src="{{ asset('lkcoffee/img/r2.png') }}" alt="">
                <div class="title d-flex flex-row">
                    <h4>Jonathan Swift</h4>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>								
                    </div>
                </div>
                <p>
                    Cà phê khiến ta mạnh mẽ, nghiêm nghị và thông thái.
                </p>
            </div>	
        </div>
    </div>	
</section>
<!-- End review Area -->

<!-- Start blog Area -->
<section class="blog-area section-gap" id="blog">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">Ý tưởng cho ngày mới</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>						
        <div class="row">
            <div class="col-lg-6 col-md-6 single-blog">
                <img class="img-fluid" src="{{ asset('lkcoffee/img/b1.jpg') }}" alt="">
                <ul class="post-tags">
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Life Style</a></li>
                </ul>
                <a href="#"><h4>Ralph Waldo Emerson</h4></a>
                <p>
                    Một ly cà phê ngon là phải vừa ngọt vừa đắng. Một tình yêu lý tưởng là một tình yêu vừa ngọt ngào, vừa đắng cay.

                </p>
                <p class="post-date">
                    31st January, 2018
                </p>
            </div>
            <div class="col-lg-6 col-md-6 single-blog">
                <img class="img-fluid" src="{{ asset('lkcoffee/img/b2.jpg') }}" alt="">
                <ul class="post-tags">
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Life Style</a></li>
                </ul>
                <a href="#"><h4>Portable latest Fashion for young women</h4></a>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
                </p>
                <p class="post-date">
                    31st January, 2018
                </p>
            </div>						
        </div>
    </div>	
</section>
<!-- End blog Area -->
@endsection