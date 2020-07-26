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
                            <!-- {{$data = \App\Setting::getAddress()}} -->
                            @if(strlen($data)>0)
                             {!! $data !!}
                            @else 
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
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            @include('view.rightcategorycolumn')
        </div>
    </div>
</section>
@endsection
