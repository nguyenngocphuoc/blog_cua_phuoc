@extends('view.masterPage')
@section('content')
<section class="contact-area">
    <style>
        em {
            color: red;
        }
    </style>
    <div class="container">

        <!-- ##### Breadcrumb Area Start ##### -->
        <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/40.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2>Liên hệ với chúng tôi</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### Breadcrumb Area End ##### -->

        <!-- ##### Breadcrumb Area Start ##### -->
        <div class="mag-breadcrumb py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../"><i class="fa fa-home"
                                            aria-hidden="true"></i>Trang Chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-xl-8">
                <div class="contact-content-area bg-white mb-30 p-30 box-shadow">



                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>Liên hệ với chúng tôi</h5>
                    </div>

                    <!-- Contact Form Area -->
                    <div class="contact-form-area">

                        @include('view/contactForm')

                        <br />
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>THÔNG TIN LIÊN LẠC</h5>
                        </div>

                        <div class="contact-information mb-30">

                            <!-- Single Contact Info -->
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="icon mr-15">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <div class="text">
                                    <p>Địa chỉ:</p>
                                    <h6>Số 06 - Ngõ 112 - Đ.Nguyễn Trãi - Tp.Vinh</h6>
                                </div>
                            </div>

                            <!-- Single Contact Info -->
                            <!-- <div class="single-contact-info d-flex align-items-center">
                                <div class="icon mr-15">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="text">
                                    <p>Email:</p>
                                    <h6>infodeercreative@gmail.com</h6>
                                </div>
                            </div> -->

                            <!-- Single Contact Info -->
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="icon mr-15">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <div class="text">
                                    <p>Tel:</p>
                                    <h6>0977 466 919 (Mr. Hồng) <br /><br /> 09078 619 697 (Mr. Quân) <br /><br /> 0962
                                        276 316 (Mr. Tuấn)</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                <div class="sidebar-area bg-white mb-30 box-shadow">


                    <!-- Sidebar Widget -->
                    <div class="single-sidebar-widget p-30">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Categories</h5>
                        </div>

                        <!-- Catagory Widget -->
                        <ul class="catagory-widgets">
                            <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Life
                                        Style</span> <span>35</span></a></li>
                            <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        Travel</span> <span>30</span></a></li>
                            <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        Foods</span> <span>13</span></a></li>
                            <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        Game</span> <span>06</span></a></li>
                            <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        Sports</span> <span>28</span></a></li>
                            <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        Football</span> <span>08</span></a></li>
                            <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> TV
                                        Show</span> <span>13</span></a></li>
                        </ul>
                    </div>

                    <!-- Sidebar Widget -->
                    <div class="single-sidebar-widget">
                        <a href="#" class="add-img"><img src="img/bg-img/add2.png" alt=""></a>
                    </div>

                    <!-- Sidebar Widget -->
                    <div class="single-sidebar-widget p-30">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Newsletter</h5>
                        </div>

                        <div class="newsletter-form">
                            <p>Subscribe our newsletter gor get notification about new updates, information discount,
                                etc.</p>
                            <form action="#" method="get">
                                <input type="search" name="widget-search" placeholder="Enter your email">
                                <button type="submit" class="btn mag-btn w-100">Subscribe</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
