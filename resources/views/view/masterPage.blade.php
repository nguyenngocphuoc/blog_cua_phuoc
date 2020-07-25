<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="@yield('description',\App\Setting::getDescription())">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>@yield('title',\App\Setting::getTitle())</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset(\App\Setting::getIcon())}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('style.css')}}">

</head>

<body>
    <div id="messageDivId">
        @if ( session()->has('messageSuccess') )
        <div class="alert alert-success alert-dismissable">{{ session()->get('messageSuccess') }}</div>
        @endif
    </div>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Navbar Area -->
        <div class="mag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="magNav">

                    <!-- Nav brand -->
                    <a href="/" class="nav-brand"><img src="{{ asset(\App\Setting::getLogo())}}" width="74" height="29"
                            alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Nav Content -->
                    <div class="nav-content d-flex align-items-center">
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="/">Trang chủ</a></li>
                                    <li><a href="#">GIỚI THIỆU</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ url('/page/about') }}">Về chúng tôi</a></li>
                                            {{-- <li><a href="archive.html">Bản tin công ty</a></li>
                                            <li><a href="">Góc Hàn Quốc</a></li> --}}
                                        </ul>
                                    </li>

                                    <li><a href="#">HỌC TẬP & VIỆC LÀM</a>
                                        <div class="megamenu">
                                            <!-- {{$arrGroupCategory = \App\GroupCategory::latest()->get()}} -->
                                            @foreach($arrGroupCategory as $key => $group)
                                            <ul class="single-mega cn-col-4">
                                                <a
                                                    href="{{ url('/page/category-group/'.$group->slug) }}"><b>{{$group->name}}</b></a>
                                                <!-- {{$categorys = \App\Category::where("group_categories_id",$group->id)->get()}} -->
                                                @foreach($categorys as $key => $category)
                                                <li><a
                                                        href="{{ url('/page/category/'.$category->slug) }}">{{$category->name}}</a>
                                                </li>
                                                @endforeach
                                                <!-- <li><a href="archive.html">Cơ hội việc làm</a></li>
                                                    <li><a href="index.html">Thông tin chương trình</a></li>
                                                    <li><a href="archive.html">Top các trường ĐH Hàn Quốc</a></li>
                                                    <li><a href="archive.html">Các trường đào tạo ngôn ngữ Hàn</a></li> -->
                                            </ul>
                                            @endforeach
                                            <!-- <ul class="single-mega cn-col-4">
                                                <a><b>THÔNG TIN</b></a>
                                                <li><a href="archive.html">Cơ hội việc làm</a></li>
                                                <li><a href="index.html">Thông tin chương trình</a></li>
                                                <li><a href="archive.html">Top các trường ĐH Hàn Quốc</a></li>
                                                <li><a href="archive.html">Các trường đào tạo ngôn ngữ Hàn</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <a><b>NGÀNH ĐÀO TẠO</b></a>
                                                <li><a href="archive.html">Công Nghệ Thông Tin</a></li>
                                                <li><a href="single-post.html">Công Nghệ Ô Tô</a></li>
                                                <li><a href="contact.html">Nhà Hàng - Khách Sạn</a></li>
                                                <li><a href="single-post.html">Quản Trị Kinh Doanh</a></li>
                                                <li><a href="single-post.html">Thủy Sản</a></li>
                                                <li><a href="video-post.html">Cơ khí</a></li>
                                                <li><a href="video-post.html">Truyền Thông</a></li>
                                                <li><a href="video-post.html">Thẩm mỹ & Sắc đẹp</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <a><b>TIN TỨC VIỆC LÀM</b></a>
                                                <li><a href="index.html">Kỹ sư </a></li>
                                                <li><a href="login.html">Công xưởng</a></li>
                                                <li><a href="archive.html">Ngành công nghệ thông tin</a></li>
                                                <li><a href="video-post.html">Ngành kỹ thuật</a></li>
                                                <li><a href="single-post.html">Ngành nghệ thuật</a></li>
                                                <li><a href="{{url('contact')}}">Ngành truyền thông</a></li>
                                                <li><a href="contact.html">Ngành thẩm mỹ và Nghệ thuật làm đẹp</a></li>
                                                <li><a href="login.html">Ngành kinh tế</a></li>
                                            </ul> -->
                                        </div>
                                    </li>
                                    <li><a
                                            href="{{url('contact')}}">{{ Config::get('properties.contact.signup_advice')}}</a>
                                    </li>
                                    <li><a href="contact.html">{{ Config::get('properties.contact.ask')}}</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <div class="top-meta-data d-flex align-items-center">
                            <!-- Top Search Area -->
                            <div class="top-search-area">
                                <form action="{{ route('page.search') }}" method="GET" enctype="multipart/form-data"
                                    role="form">
                                    @csrf
                                    @method('GET')
                                    <input type="search" name="resultSearch" id="topSearch" placeholder="Tìm Kiếm...">
                                    <button type="submit" class="btn"><i class="fa fa-search"
                                            aria-hidden="true"></i></button>
                                </form>
                            </div>
                            <!-- Login -->
                            {{-- <a href="login.html" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a> --}}
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>


    @yield('content')

    <!-- ##### Mag Posts Area End ##### -->

    <div class="hotline-phone-ring-wrap">
        <div class="hotline-phone-ring">
            <div class="hotline-phone-ring-circle"></div>
            <div class="hotline-phone-ring-circle-fill"></div>
            <div class="hotline-phone-ring-img-circle">
                <a href="tel:0987654321" class="pps-btn-img">
                    <img src="https://nguyenhung.net/wp-content/uploads/2019/05/icon-call-nh.png" alt="Gọi điện thoại"
                        width="50">
                </a>
            </div>
        </div>
        <div class="hotline-bar">
            <a href="tel:{{\App\Setting::getPhoneNumber()}}">
                <span class="text-hotline">{{\App\Setting::getPhoneNumber()}}</span>
            </a>
        </div>
    </div>


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-6">
                    <div class="footer-widget">
                        <!-- Logo -->
                        <a href="/" class="foo-logo"><img src="img/core-img/logo2.png" alt=""></a>
                        <p>CÔNG TY TNHH TƯ VẤN GIÁO DỤC HỒNG QUÂN</p>
                        <P>ĐC: Số 06 - Ngõ 112 - Đ.Nguyễn Trãi - TP. Vinh</P>
                        <p>Tel: <a href="tel:0977466919" style="color: #158351">0977 466
                                919 (Mr. Hồng)</a> - <a href="tel:0978619697" style="color: #158351">0978 619
                                697(Mr. Quân)</a> - <a href="tel:0962276316" style="color: #158351">0962 276 316(Mr.
                                Tuấn)</a></p>
                        <div class="footer-social-info">
                            <a href="{{\App\Setting::getFacebook()}}" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="{{\App\Setting::getYoutube()}}" class="youtube" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="{{\App\Setting::getTwitter()}}" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="{{\App\Setting::getLinkedin()}}" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-6">
                    <div class="footer-widget">
                        <h6 class="widget-title">Công việc Hàn Quốc</h6>
                        <nav class="footer-widget-nav">
                            <ul>
                                <!--{{ $categoris = \App\Category::where("status","1")->get() }}-->
                                @foreach($categoris as $key => $topnews)
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        {{$topnews->name}}</a></li>
                                @endforeach

                                {{-- <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Life
                                        Style</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Tech</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Travel</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Music</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Foods</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Fashion</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Game</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Football</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Sports</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> TV Show</a>
                                </li> --}}
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                {{-- <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Sport Videos</h6>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-2 d-flex">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/12.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">Take A Romantic Break In A Boutique
                                    Hotel</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-2 d-flex">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/13.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">Travel Prudently Luggage And Carry On</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <!-- Footer Widget Area -->
                {{-- <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Channels</h6>
                        <ul class="footer-tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Fashionista</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">DESIGN</a></li>
                            <li><a href="#">NEWS</a></li>
                            <li><a href="#">TRENDING</a></li>
                            <li><a href="#">VIDEO</a></li>
                            <li><a href="#">Game</a></li>
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Foods</a></li>
                            <li><a href="#">TV Show</a></li>
                            <li><a href="#">Twitter Video</a></li>
                            <li><a href="#">Playing</a></li>
                            <li><a href="#">clips</a></li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-sm-6">
                        <p class="copywrite-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());

                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    {{-- <div class="col-12 col-sm-6">
                        <nav class="footer-nav">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Advertisement</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div> --}}
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{ asset('js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{ asset('js/active.js')}}"></script>
    <script>
        setInterval(closeMessage, 5000);

        function closeMessage() {
            $("#messageDivId").remove()
        }

        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('realtime').innerHTML = h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i
            }; // add zero in front of numbers < 10
            return i;
        }

    </script>
</body>

</html>