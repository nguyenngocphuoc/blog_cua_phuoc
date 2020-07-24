@extends('view.masterPage')

@section('title')
{{ $newssingle->title }}
@endsection

@section('description')
{!! str_limit(strip_tags($newssingle->details),300) !!}
@endsection

@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay"
    style="background-image: url('{{ asset('images/'.$newssingle->image) }}');">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2></h2>
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
                        <li class="breadcrumb-item"><a href="/"><i class="fa fa-home" aria-hidden="true"></i> Trang
                                chủ</a></li>
                        {{-- <li class="breadcrumb-item"><a href="#">Features</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Single Post</li> --}}
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Post Details Area Start ##### -->
<section class="post-details-area">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Post Details Content Area -->
            <div class="col-12 col-xl-8">
                <div class="post-details-content bg-white mb-30 p-30 box-shadow">
                    <div class="blog-thumb mb-30">
                        <img src="img/bg-img/50.jpg" alt="">
                    </div>
                    <div class="blog-content">
                        <h1 class="post-title h4">{{ $newssingle->title }}</h1>
                        <!-- Post Meta -->
                        <div class="post-meta-2">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $newssingle->view_count }}</a>
                            <!--<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>-->
                            <!--<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>-->
                        </div>
                        {!! $newssingle->details !!}

                    </div>
                    <!-- Like Dislike Share -->
                    
                    <div class="like-dislike-share my-5">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{\urlencode(url('page/news/'.$newssingle->slug))}}" class="facebook" target="_blank">>
                            <i class="fa fa-facebook" aria-hidden="true"></i> 
                            Share on Facebook
                        </a>
                        <a href="http://twitter.com/share?text={{$newssingle->title}}&url={{\urlencode(url('page/news/'.$newssingle->slug))}}" target="_blank" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i> Share on
                            Twitter</a>
                    </div>
                    <!-- submit info -->
                    <hr />
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>Liên hệ với chúng tôi</h5>
                    </div>
                    <div class="contact-form-area">

                        @include('view/contactForm')
                    </div>
                </div>

                <!-- {{$categoryId = $newssingle->category_id}} -->
                @include('view.relativepostbottom')
            </div>

            @include('view.rightcategorycolumn')
        </div>
    </div>
</section>
@endsection
