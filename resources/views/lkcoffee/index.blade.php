@extends('lkcoffee.layouts.master')

@section('title', setting('lkcoffee.title'))
@section('description', setting('lkcoffee.description'))

@section('fb_url', route('lkcoffee'))
@section('fb_type', 'website')
@section('fb_title', setting('lkcoffee.title'))
@section('fb_des', setting('lkcoffee.description'))
@section('fb_img', '')

@section('style')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

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
        @php
            $all_galleries = getAllGalleries();
        @endphp
        @if($all_galleries)
        <div class="row">
            <div class="col-md-12">
                <div class="portfolio-menu text-center">
                    @foreach($all_galleries as $k => $v)
                        @php
                            if($k == 0){
                                $first_slug = $v->slug;
                            }
                        @endphp
                    <button data-filter="{{ $v->slug }}" class="{{ ($k==0)?'active':'' }}">{{ $v->name }}</button>
                    @endforeach
                </div>
            </div>
        </div>		
        <div class="row">
            <div class="col-md-12">
                <div id="image-grid"></div>
            </div>
        </div>
        @endif
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
                <a class="view-blog" data-id="{{ $v->id }}" href="#">
                    <img class="img-fluid" src="{{ Voyager::image($v->image) }}" alt="">
                </a>
                <a class="view-blog" data-id="{{ $v->id }}" href="#">
                    <h4 class="pt-10">{{ $v->title }}</h4>
                </a>
                <div class="description" style="max-height: 65px;overflow: hidden;">
                    {!! $v->body !!}
                </div>
                
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

<!-- Begin Popup Blog Detail -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="exampleModalImg" style="float:left; width: 50%; padding: 0 10px 0 0;"></div>
        <div id="exampleModalBody"></div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
<!-- Begin Popup Blog Detail -->
@endsection

@section('script')
    <!-- Insert script here -->
    @php
        $gallery_coffee = getGalleryBySlug($first_slug);
        if($gallery_coffee){
            $galleries = json_decode($gallery_coffee->gallery);
        }
        else{
            $galleries = [];
        }
    @endphp
    <script>
        // Default Gallery
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
        // END Default Gallery

        // Ajax Gallery
        $(".portfolio-menu button").on('click', function(e){
            e.preventDefault();

            var slug = $(this).data('filter');
            $(this).addClass('active').siblings().removeClass('active');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '{{ route('post.getGalleryBySlug') }}',
                method: 'POST',
                data: {
                    slug: slug
                },
                success: function(data) {
                    // console.log(data.data);
                    if(data.status == true){
                        var obj = data.data;
                        $(function() {
                            $('#image-grid').imagesGrid({
                                images: obj
                            });
                        });
                    }
                }
            });
        });
        // END Ajax Gallery

        // AJAX Read Blog
        $(".view-blog").on('click', function(e){
            e.preventDefault();
            var id = $(this).data("id");

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '{{ route('post.getBlogById') }}',
                method: 'POST',
                data: {
                    id: id
                },
                success: function(data) {
                    console.log(data.data);
                    if(data.status == true){
                        $("#exampleModalLongTitle").html(data.data.title);
                        $("#exampleModalImg").html('<img  src="'+ data.data.image +'" alt="" class="img-fluid">');
                        $("#exampleModalBody").html(data.data.body);
                        $("#exampleModalCenter").modal('show');
                    }
                }
            });
        });
        // END AJAX Read Blog
    </script>
@endsection