@extends('view.masterPage')
@section('content')
<div class="hero-area owl-carousel">
@foreach($heroImg as $img)
        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url({{url('Images/'.$img->image)}});">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                            </div>
                            <a href="video-post.html" class="post-title" data-animation="fadeInUp" data-delay="300ms">{{$img->title}}</a>
                            <a href="video-post.html" class="video-play" data-animation="bounceIn" data-delay="500ms"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endforeach
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Mag Posts Area Start ##### -->
    <section class="row d-flex flex-wrap">

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Left Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Most Popular</h5>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/4.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">Global Travel And Vacations Luxury Travel</a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/5.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">Cruising Destination Ideas</a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/6.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">The Luxury Of Traveling With</a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/7.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">Choose The Perfect Accommodations</a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/8.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">A Guide To Rocky Mountain Vacations</a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Latest Videos</h5>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/9.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">Coventry City Guide Including Coventry</a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/10.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">Choose The Perfect Accommodations</a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/11.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">Get Ready Fast For Fall Leaf Viewing</a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/12.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">Global Resorts Network Grn Putting</a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/13.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title">Travel Prudently Luggage And Carry</a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
             Main Posts Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
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
                        <img src="{{ asset('images/'.$topnews->image) }}" alt="">
                        <div class="post-content">
                            <a href="{{ url('page/news/'.$topnews->slug) }}" class="post-title" style="text-transform: uppercase;">{{  str_limit(strip_tags($topnews->title),30) }}</a>
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
                                            <a href="https://www.facebook.com/sharer/sharer.php?caption=du học nào các bạn ơi &u={{\urlencode(url('/'))}}"
                                                class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="http://twitter.com/share?text=du học nào các bạn ơi &url={{\urlencode(url('/'))}}"
                                                class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-5">
                                <!-- Featured Video Posts Slide -->
                                <div class="featured-video-posts-slide owl-carousel">
                                    <div class="single--slide">
                                    @foreach($topnewslist as $key => $topnews)
                                        <!--{{$i = $loop->index + 1}} -->
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post d-flex style-3">
                                            <div class="post-thumbnail">
                                                <img src="{{ asset('images/'.$topnews->image) }}" alt="{{ $topnews->title }}">
                                            </div>
                                            <div class="post-content">
                                                <a href="{{ url('page/news/'.$topnews->slug) }}" class="post-title" title="{{ $topnews->title }}">{{ str_limit(strip_tags($topnews->title),50) }}</a>
                                                <div class="post-meta d-flex">
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i>
                                                {{ $topnews->view_count }} Lượt Xem</a>
                                                </div>
                                            </div>
                                        </div>
                                        @if($i % 5 == 0 && $i < count($topnewslist) - 1)
                                        </div>
                                        <div class="single--slide">
                                        @endif
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
                    <!-- Single Blog Post -->
                    @foreach($reworks as $key => $rework)
                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="{{ asset('images/'.$rework->image) }}" alt="" >
                        </div>
                        <div class="post-content">
                            <a href="{{ url('page/rework/'.$rework->slug) }}" class="post-title">{{ str_limit(strip_tags($rework->title),50) }}</a>
                            <p>{{str_limit(strip_tags($rework->details), 150)}}</p>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $rework->view_count }}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Right Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->

        @include('view.rightcategorycolumn', ['class'=> 'post-sidebar-area right-sidebar mt-30 mb-30 box-shadow'])
    </section>
@endsection
