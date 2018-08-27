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
<section class="banner-area" id="home" style="background: url({{ Voyager::image( setting('lkcoffee.banner_st_background') ) }}) center; background-size: cover;">	
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-start">
            <div class="banner-content col-lg-7">
                <h6 class="text-white text-uppercase">{{ setting('lkcoffee.banner_st_heading') }}</h6>
                <h1>
                    {{ setting('lkcoffee.banner_st_title') }}
                </h1>
                <!--a href="#" class="primary-btn text-uppercase">Buy Now</a-->
            </div>											
        </div>
    </div>
</section>
<!-- End banner Area -->	

<!-- Start video-sec Area -->
<section class="video-sec-area pt-40" id="about">
    <div class="container">
        <div class="row justify-content-start align-items-center">
            <div class="col-lg-6 video-right justify-content-center align-items-center d-flex" style="background: url({{ Voyager::image(setting('lkcoffee.about_st_video_bg')) }}) no-repeat center; background-size: cover;">
                <div class="overlay overlay-bg"></div>
                <a class="play-btn" href="{{ setting('lkcoffee.about_st_video_link') }}"><img class="img-fluid" src="{{ asset('lkcoffee/img/play-icon.png') }}" alt=""></a>
            </div>						
            <div class="col-lg-6 video-left">
                <h6>{{ setting('lkcoffee.about_st_heading') }}</h6>
                <h1>{{ setting('lkcoffee.about_st_title') }}</h1>
                {!! setting('lkcoffee.about_st_content') !!}
                @if(setting('lkcoffee.about_st_signature'))
                <img class="img-fluid" src="{{ Voyager::image(setting('lkcoffee.about_st_signature')) }}" alt="">
                @endif
            </div>
        </div>
    </div>	
</section>
<!-- End video-sec Area -->

<!-- Start menu Area -->
<section class="menu-area section-gap" id="coffee" style="padding: 100px 0 0 0;">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-20 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">{{ setting('lkcoffee.menu_st_title') }}</h1>
                    <p>{{ setting('lkcoffee.menu_st_description') }}</p>
                </div>
            </div>
        </div>		
                    <!-- Tab links -->
            <div class="tab">
                <button class="tablinks" id="tabdefault" onclick="openCity(event, 'London')">Đồ uống</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">Thức ăn nhanh</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')">Mùa Xuân</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo1')">Mùa Hạ</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo2')">Mùa Thu</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo3')">Mùa Đông</button>
            </div>

            <!-- Tab content -->
            <div id="London" class="tabcontent">
                @php 
                    $menu_1 = getMenuCoffeeByCateId('*', 'created_at', 'asc', 1);
                @endphp
                @if($menu_1->count() > 0)
                    <div class="row">
                        @foreach($menu_1 as $v)
                            <div class="col-lg-3">
                                <div class="single-menu">
                                    <div class="title-div justify-content-between d-flex">
                                        <h4>{{ $v->name }}</h4>
                                    </div>
                                    <p class="price">
                                        {{ number_format($v->price, 0, '.', '.') }} VNĐ
                                    </p>
                                    {!! $v->body !!}								
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
            <div id="Paris" class="tabcontent">
                @php 
                    $menu_2 = getMenuCoffeeByCateId('*', 'created_at', 'asc', 2);
                @endphp
                @if($menu_2->count() > 0)
                    <div class="row">
                        @foreach($menu_2 as $v)
                            <div class="col-lg-3">
                                <div class="single-menu">
                                    <div class="title-div justify-content-between d-flex">
                                        <h4>{{ $v->name }}</h4>
                                        
                                    </div>
                                    <p class="price">
                                        {{ number_format($v->price, 0, '.', '.') }} VNĐ
                                    </p>
                                    {!! $v->body !!}								
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
            <div id="Tokyo" class="tabcontent">
                @php 
                    $menu_3 = getMenuCoffeeByCateId('*', 'created_at', 'asc', 3);
                @endphp
                @if($menu_3->count() > 0)
                    <div class="row">
                        @foreach($menu_3 as $v)
                            <div class="col-lg-3">
                                <div class="single-menu">
                                    <div class="title-div justify-content-between d-flex">
                                        <h4>{{ $v->name }}</h4>
                                        
                                    </div>
                                    <p class="price">
                                        {{ number_format($v->price, 0, '.', '.') }} VNĐ
                                    </p>
                                    {!! $v->body !!}								
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif													
            </div>
            <div id="Tokyo1" class="tabcontent">
                @php 
                    $menu_4 = getMenuCoffeeByCateId('*', 'created_at', 'asc', 4);
                @endphp
                @if($menu_4->count() > 0)
                    <div class="row">
                        @foreach($menu_4 as $v)
                            <div class="col-lg-3">
                                <div class="single-menu">
                                    <div class="title-div justify-content-between d-flex">
                                        <h4>{{ $v->name }}</h4>
                                        
                                    </div>
                                    <p class="price">
                                        {{ number_format($v->price, 0, '.', '.') }} VNĐ
                                    </p>
                                    {!! $v->body !!}								
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
            <div id="Tokyo2" class="tabcontent">
                @php 
                    $menu_5 = getMenuCoffeeByCateId('*', 'created_at', 'asc', 5);
                @endphp
                @if($menu_5->count() > 0)
                    <div class="row">
                        @foreach($menu_5 as $v)
                            <div class="col-lg-3">
                                <div class="single-menu">
                                    <div class="title-div justify-content-between d-flex">
                                        <h4>{{ $v->name }}</h4>
                                    </div>
                                    <p class="price">
                                        {{ number_format($v->price, 0, '.', '.') }} VNĐ
                                    </p>
                                    {!! $v->body !!}								
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
            <div id="Tokyo3" class="tabcontent">
                @php 
                    $menu_6 = getMenuCoffeeByCateId('*', 'created_at', 'asc', 6);
                @endphp
                @if($menu_6->count() > 0)
                    <div class="row">
                        @foreach($menu_6 as $v)
                            <div class="col-lg-3">
                                <div class="single-menu">
                                    <div class="title-div justify-content-between d-flex">
                                        <h4>{{ $v->name }}</h4>
                                        
                                    </div>
                                    <p class="price">
                                        {{ number_format($v->price, 0, '.', '.') }} VNĐ
                                    </p>
                                    {!! $v->body !!}								
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
    </div>	
</section>
<!-- End menu Area -->

<!-- Start gallery Area -->
<section class="gallery-area section-gap" id="gallery" style="padding: 100px 0 0 0; margin-bottom: 20px">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-20 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">{{ setting('lkcoffee.gallery_st_title') }}</h1>
                    <p>{{ setting('lkcoffee.gallery_st_description') }}</p>
                </div>
            </div>
        </div>						
        <div class="row">
            <div class="col-md-12">
                <div id="image-grid"></div>
            </div>
            
        </div>
    </div>	
</section>
<!-- End gallery Area -->

<!-- Start review Area -->
<section class="review-area section-gap" id="review" style="padding: 50px 0 50px 0;">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-20 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">{{ setting('lkcoffee.maxim_st_title') }}</h1>
                    <p>{{ setting('lkcoffee.maxim_st_description') }}</p>
                </div>
            </div>
        </div>		
        @php
            $maxims = getMaximCoffee('*', 'created_at', 'desc', 4);
        @endphp		
        @if($maxims->count() >0)		
        <div class="row">
            @foreach($maxims as $v)
            <div class="col-lg-4 col-md-4 single-review pb-30">
                <!--img src="{{ Voyager::image($v->logo) }}" alt=""-->
                <div class="title d-flex flex-row">
                    <h4>{{ $v->name }}</h4>
                    <div class="star">
                        {!! renderStar($v->star) !!}					
                    </div>
                </div>
                {!! $v->body !!}
            </div>
            @endforeach
        </div>
        @endif
    </div>	
</section>
<!-- End review Area -->

<!-- Start blog Area -->
<section class="blog-area section-gap" id="blog" style="padding: 100px 0 50px 0;">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-20 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">{{ setting('lkcoffee.blog_st_title') }}</h1>
                    <p>{{ setting('lkcoffee.blog_st_description') }}</p>
                </div>
            </div>
        </div>					
        @php
            $blogs = getBlogCoffee('*', 'created_at', 'desc', 2);
        @endphp	
        @if($blogs->count()>0)
        <div class="row">
            @foreach($blogs as $v)
            <div class="col-lg-6 col-md-6 single-blog">
                <img class="img-fluid" src="{{ Voyager::image($v->image) }}" alt="">
                <!-- <ul class="post-tags">
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Life Style</a></li>
                </ul> -->
                <!-- <a href="#"> -->
                    <h4 class="pt-10">{{ $v->title }}</h4>
                <!-- </a> -->
                {!! $v->body !!}
                <p class="post-date">
                    {{ $v->created_at->format('d-m-Y') }}
                </p>
            </div>
            @endforeach					
        </div>
        @endif
    </div>	
</section>
<!-- End blog Area -->
@endsection

@section('script')
    <!-- Insert script here -->
    @php
        $gallery_coffee = getGalleryBySlug('gallery-for-lkcoffee-page');
        if($gallery_coffee){
            $galleries = json_decode($gallery_coffee->gallery);
        }
        else{
            $galleries = [];
        }
    @endphp
    <script>
        var images = [
            @foreach($galleries as $v)
                '{{ Voyager::image($v) }}',
            @endforeach
        ];
        $(function() {
            $('#image-grid').imagesGrid({
                images: images
            });
        });
    </script>
@endsection