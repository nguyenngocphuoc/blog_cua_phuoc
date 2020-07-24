@extends('view.masterPage')
@section('content')
<div class="hero-area owl-carousel">
    <!-- Single Blog Post -->
    <div class="hero-blog-post bg-img" style="background-image: url(img/bg-img/1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Post Contetnt -->
                    <div class="post-content text-center">
                        <a href="#" class="post-title" data-animation="fadeInUp" data-delay="300ms">Góc Nhìn Hàn
                            Quốc</a>
                        {{-- <a href="#" class="video-play" data-animation="bounceIn" data-delay="500ms"><i
                                class="fa fa-play"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Single Blog Post -->
    <div class="hero-blog-post bg-img" style="background-image: url(img/bg-img/2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Post Contetnt -->
                    <div class="post-content text-center">
                        <a href="#" class="post-title" data-animation="fadeInUp" data-delay="300ms">Bắt đầu cuộc hành
                            trình</a>
                        {{-- <a href="#" class="video-play" data-animation="bounceIn" data-delay="500ms"><i
                                class="fa fa-play"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Single Blog Post -->
    <div class="hero-blog-post bg-img" style="background-image: url(img/bg-img/3.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Post Contetnt -->
                    <div class="post-content text-center">
                        <div class="post-meta" data-animation="fadeInUp" data-delay="100ms"></div>
                        <a href="#" class="post-title" data-animation="fadeInUp" data-delay="300ms">Khám phá nước
                            Hàn</a>
                        {{-- <a href="#" class="video-play" data-animation="bounceIn" data-delay="500ms"><i
                                class="fa fa-play"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Hero Area End ##### -->

<!-- ##### Mag Posts Area Start ##### -->
<section class="mag-posts-area d-flex flex-wrap">
    <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow"
        style="max-width: 100% !important; width: 100% !important">
        <!-- Trending Now Posts Area -->
        <div class="trending-now-posts mb-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>BÀI ĐĂNG GẦN ĐÂY</h5>
            </div>

            <div class="trending-post-slides owl-carousel">
                <!-- Single Trending Post -->
                @foreach($newestlist as $key => $topnews)
                <div class="single-trending-post">
                    <img src="{{ asset('images/'.$topnews->image) }}" alt="" style="height: 200px; width: 350px;">
                    <div class="post-content">
                        <a href="{{ url('page/news/'.$topnews->slug) }}" class="post-cata">{{ $topnews->title }}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Feature Video Posts Area -->
        <div class="feature-video-posts mb-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>TIN NÓNG</h5>
            </div>

            <div class="featured-video-posts">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <!-- Single Featured Post -->
                        <div class="single-featured-post">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail mb-50">
                                <img src="https://tienghancoban.edu.vn/images/2018/03/13/du-hoc-han-quoc.jpg"
                                    width="100%" alt="">
                            </div>
                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <div class="post-meta"> </div>
                                <a href="#" class="post-title">NHU CẦU CỦA BẠN?</a>
                                <p>Đơn hàng xuất khẩu lao động đi làm việc tại Hàn Quốc của chúng tôi được tìm kiếm dựa
                                    trên sự tham vấn của chuyên gia, phù hợp với tiêu chí mà nhà tuyển dụng tìm kiếm ở
                                    nguồn nhân lực thế hệ mới. Hãy cho chúng tôi biết, nhu cầu của bạn là gì?</p>
                            </div>
                            <!-- Post Share Area -->
                            <div class="post-share-area d-flex align-items-center justify-content-between">
                                <!-- Post Meta -->
                                <div class="post-meta pl-3">
                                </div>
                                <!-- Share Info -->
                                <div class="share-info">
                                    <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                    <!-- All Share Buttons -->
                                    <div class="all-share-btn d-flex">
                                        <a href="https://www.facebook.com/sharer/sharer.php?caption=du học nào các bạn ơi &u={{\urlencode(url('/'))}}" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="http://twitter.com/share?text=du học nào các bạn ơi &url={{\urlencode(url('/'))}}" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-5">
                        <!-- Featured Video Posts Slide -->
                        <div class="featured-video-posts-slide owl-carousel">

                            <div class="single--slide">
                                <!-- Single Blog Post -->
                                @foreach($topnewslist as $key => $topnews)
                                <div class="single-blog-post d-flex style-3">
                                    <div class="post-thumbnail">
                                        <img src="{{ asset('images/'.$topnews->image) }}" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="{{ url('page/news/'.$topnews->slug) }}"
                                            class="post-title">{{ $topnews->title }}</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i>
                                                {{ $topnews->view_count }}</a>
                                            <!--<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>-->
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Most Viewed Videos -->
        <div class="most-viewed-videos mb-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Công việc vừa đăng</h5>
            </div>

            <div class="most-viewed-videos-slide owl-carousel">
                @foreach($reworks as $key => $rework)
                <!-- Single Blog Post -->
                <div class="single-blog-post style-4">
                    <div class="post-thumbnail">
                        <img src="{{ asset('images/'.$rework->image) }}" alt="" style="width: 550px; height: 450px">
                    </div>
                    <div class="post-content">
                        <a href="{{ url('page/rework/'.$rework->slug) }}" class="post-title">{{ $rework->title }}</a>
                        <div class="post-meta d-flex">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $rework->view_count }}</a>
                            <!--<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>-->
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

        <!-- Sports Videos -->
        {{-- <div class="sports-videos-area">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Sports Videos</h5>
            </div>

            <div class="sports-videos-slides owl-carousel mb-30">
                @foreach($reworks as $key => $rework)
                <!-- Single Featured Post -->
                <div class="single-featured-post">
                    <!-- Thumbnail -->
                    <div class="post-thumbnail mb-50">
                        <img src="{{ asset('images/'.$rework->image) }}" alt="" style="width: 550px; height: 450px">
    </div>
    <!-- Post Contetnt -->
    <div class="post-content">
        <a href="{{ url('page/rework/'.$rework->slug) }}" class="post-title">{{ $rework->title }}</a>
        <p>{!!\substr($rework->details, 0, 100)!!}</p>
    </div>
    <!-- Post Share Area -->
    <div class="post-share-area d-flex align-items-center justify-content-between">
        <!-- Post Meta -->
        <div class="post-meta pl-3">
            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $rework->view_count }}</a>
            <!--<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>-->
        </div>
        <!-- Share Info -->
        <div class="share-info">
            <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
            <!-- All Share Buttons -->
            <div class="all-share-btn d-flex">
                <a href="https://www.facebook.com/sharer/sharer.php?caption=du học nào các bạn ơi &u={{\urlencode(url('/'))}}" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="http://twitter.com/share?text=du học nào các bạn ơi &url={{\urlencode(url('/'))}}" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    </div>
    @endforeach
    </div> --}}

    {{-- <div class="row">
        <div class="col-12 col-lg-6">
            <div class="single-blog-post d-flex style-3 mb-30">
                <div class="post-thumbnail">
                    <img src="img/bg-img/31.jpg" alt="">
                </div>
                <div class="post-content">
                    <a href="single-post.html" class="post-title">From Wetlands To Canals And Dams Amsterdam Is
                        Alive</a>
                    <div class="post-meta d-flex">
                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6">
            <div class="single-blog-post d-flex style-3 mb-30">
                <div class="post-thumbnail">
                    <img src="img/bg-img/32.jpg" alt="">
                </div>
                <div class="post-content">
                    <a href="single-post.html" class="post-title">From Wetlands To Canals And Dams Amsterdam Is
                        Alive</a>
                    <div class="post-meta d-flex">
                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6">
            <div class="single-blog-post d-flex style-3 mb-30">
                <div class="post-thumbnail">
                    <img src="img/bg-img/33.jpg" alt="">
                </div>
                <div class="post-content">
                    <a href="single-post.html" class="post-title">From Wetlands To Canals And Dams Amsterdam Is
                        Alive</a>
                    <div class="post-meta d-flex">
                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6">
            <div class="single-blog-post d-flex style-3 mb-30">
                <div class="post-thumbnail">
                    <img src="img/bg-img/34.jpg" alt="">
                </div>
                <div class="post-content">
                    <a href="single-post.html" class="post-title">From Wetlands To Canals And Dams Amsterdam Is
                        Alive</a>
                    <div class="post-meta d-flex">
                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    </div>
    </div>
</section>
@endsection
