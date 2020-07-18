@extends('view.masterPage')
@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url('{{ asset('images/'.$newssingle->image) }}');">
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
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Features</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Single Post</li>
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
                        <!-- Like Dislike Share -->
                        <div class="like-dislike-share my-5">
                            <h4 class="share">240<span>Share</span></h4>
                            <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i> Share on Facebook</a>
                            <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i> Share on Twitter</a>
                        </div>

                        <!-- Post Author -->
                        <div class="post-author d-flex align-items-center">
                            <div class="post-author-thumb">
                                <img src="https://image.thanhnien.vn/660/uploaded/ngocthanh/2020_07_13/ngoctrinhmuonsinhcon1_swej.jpg" alt="">
                            </div>
                            <div class="post-author-desc pl-4">
                                <a href="#" class="author-name">Alan Shaerer</a>
                                <p>Duis tincidunt turpis sodales, tincidunt nisi et, auctor nisi. Curabitur vulputate sapien eu metus ultricies fermentum nec vel augue. Maecenas eget lacinia est.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Related Post Area -->
                <div class="related-post-area bg-white mb-30 px-30 pt-30 box-shadow">
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>Related Post</h5>
                    </div>

                    <div class="row">
                        <!-- Single Blog Post -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single-blog-post style-4 mb-30">
                                <div class="post-thumbnail">
                                    <img src="img/bg-img/29.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">Dentists Are Smiling Over Painless Veneer</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single-blog-post style-4 mb-30">
                                <div class="post-thumbnail">
                                    <img src="img/bg-img/30.jpg" alt="">
                                    <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                                    <span class="video-duration">09:27</span>
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">Will The Democrats Be Able To Reverse</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single-blog-post style-4 mb-30">
                                <div class="post-thumbnail">
                                    <img src="img/bg-img/28.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">A Guide To Rocky Mountain Vacations</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Sidebar Widget -->
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
                            <h5>Hot Channels</h5>
                        </div>

                        <!-- Single YouTube Channel -->
                        <div class="single-youtube-channel d-flex">
                            <div class="youtube-channel-thumbnail">
                                <img src="img/bg-img/14.jpg" alt="">
                            </div>
                            <div class="youtube-channel-content">
                                <a href="single-post.html" class="channel-title">TV Show</a>
                                <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                            </div>
                        </div>

                        <!-- Single YouTube Channel -->
                        <div class="single-youtube-channel d-flex">
                            <div class="youtube-channel-thumbnail">
                                <img src="img/bg-img/15.jpg" alt="">
                            </div>
                            <div class="youtube-channel-content">
                                <a href="single-post.html" class="channel-title">Game Channel</a>
                                <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                            </div>
                        </div>

                        <!-- Single YouTube Channel -->
                        <div class="single-youtube-channel d-flex">
                            <div class="youtube-channel-thumbnail">
                                <img src="img/bg-img/16.jpg" alt="">
                            </div>
                            <div class="youtube-channel-content">
                                <a href="single-post.html" class="channel-title">Sport Channel</a>
                                <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                            </div>
                        </div>

                        <!-- Single YouTube Channel -->
                        <div class="single-youtube-channel d-flex">
                            <div class="youtube-channel-thumbnail">
                                <img src="img/bg-img/17.jpg" alt="">
                            </div>
                            <div class="youtube-channel-content">
                                <a href="single-post.html" class="channel-title">Travel Channel</a>
                                <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                            </div>
                        </div>

                        <!-- Single YouTube Channel -->
                        <div class="single-youtube-channel d-flex">
                            <div class="youtube-channel-thumbnail">
                                <img src="img/bg-img/18.jpg" alt="">
                            </div>
                            <div class="youtube-channel-content">
                                <a href="single-post.html" class="channel-title">LifeStyle Channel</a>
                                <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                            </div>
                        </div>

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
