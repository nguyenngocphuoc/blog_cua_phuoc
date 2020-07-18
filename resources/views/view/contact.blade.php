@extends('view.masterPage')
@section('content')
<section class="contact-area">
    <div class="container">

        <!-- ##### Breadcrumb Area Start ##### -->
        <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/40.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2>Contact Us</h2>
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
                                <li class="breadcrumb-item"><a href="../"><i class="fa fa-home" aria-hidden="true"></i>Trang Chủ</a></li>
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

                        <form action="{{ route('contact') }}" method="post">
                            @csrf
                            <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input type="text" name="name" class="form-control" placeholder="Họ và tên" value="{{ old('name') }}">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <em>{{ $errors->first('name') }}</em>
                                </span>
                                @endif
                            </div>
                            <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <em>{{ $errors->first('email') }}</em>
                                </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
                                <input style="padding-right: 5px;" type="date" name="date_of_birth" class="form-control" placeholder="Ngày sinh" value="{{ old('date_of_birth') }}">
                                @if ($errors->has('date_of_birth'))
                                <span class="help-block">
                                    <em>{{ $errors->first('date_of_birth') }}</em>
                                </span>
                                @endif
                            </div>
                            <div style="margin: 5px;">Đăng ký tư vấn chương trình</div>
                            <div class="form-group has-feedback{{ $errors->has('orders') ? ' has-error' : '' }}">
                                <select id="orders" name="orders" class="form-control has-feedback{{ $errors->has('orders') ? ' has-error' : '' }}">
                                    @foreach($arrCategory as $key => $topnews)
                                    @if (old('orders') == $topnews)
                                    <option selected value="{{$topnews}}">{{$topnews}}</option>
                                    @endif
                                    @if (old('orders')!= $topnews)
                                    <option value="{{$topnews}}">{{$topnews}}</option>
                                    @endif
                                    @endforeach
                                </select>
                                @if ($errors->has('orders'))
                                <span class="help-block">
                                    <em>{{ $errors->first('orders') }}</em>
                                </span>
                                @endif
                            </div>
                            <div class="form-group has-feedback{{ $errors->has('address') ? ' has-error' : '' }}">
                                <input type="address" name="address" class="form-control" placeholder="Địa chỉ" value="{{ old('address') }}">
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                @if ($errors->has('address'))
                                <span class="help-block">
                                    <em>{{ $errors->first('address') }}</em>
                                </span>
                                @endif
                            </div>
                            <div class="form-group has-feedback{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <input type="phone" name="phone" class="form-control" placeholder="Số điện thoại" value="{{ old('phone') }}">
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                @if ($errors->has('phone'))
                                <span class="help-block">
                                    <em>{{ $errors->first('phone') }}</em>
                                </span>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <button class="btn mag-btn mt-30" type="submit">Send</button>
                                </div>
                            </div>

                        </form>
                        <br />
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Contact Info</h5>
                        </div>

                        <div class="contact-information mb-30">

                            <!-- Single Contact Info -->
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="icon mr-15">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <div class="text">
                                    <p>Our Office:</p>
                                    <h6>5520 Quebec Place, Brooklyn, NY , USA 10000</h6>
                                </div>
                            </div>

                            <!-- Single Contact Info -->
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="icon mr-15">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="text">
                                    <p>Email:</p>
                                    <h6>infodeercreative@gmail.com</h6>
                                </div>
                            </div>

                            <!-- Single Contact Info -->
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="icon mr-15">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <div class="text">
                                    <p>Phone:</p>
                                    <h6>(+88) 012-3455-0028</h6>
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
                            <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Life Style</span> <span>35</span></a></li>
                            <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Travel</span> <span>30</span></a></li>
                            <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Foods</span> <span>13</span></a></li>
                            <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Game</span> <span>06</span></a></li>
                            <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Sports</span> <span>28</span></a></li>
                            <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Football</span> <span>08</span></a></li>
                            <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> TV Show</span> <span>13</span></a></li>
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
                            <p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
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
