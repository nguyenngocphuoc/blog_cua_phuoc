@extends('view.masterPage')
@section('content')
<section class="breadcrumb-area bg-img bg-overlay"
    style="background-image: url('{{url('images/'.$groupCategory->image)}}')">
    <div class=" container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>{{$groupCategory->name}}</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcrumb Area End ##### -->
<script>
    var croppieRatio = 16/9;
</script>
<!-- ##### Breadcrumb Area Start ##### -->
<div class="mag-breadcrumb py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/"><i class="fa fa-home" aria-hidden="true"></i> Trang
                                chủ</a>
                        </li>
                        {{-- <li class="breadcrumb-item"><a href="#">Feature</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Archive by Category “TRAVEL”</li> --}}
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Archive Post Area Start ##### -->
<div class="archive-post-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-8">
                <div class="archive-posts-area bg-white p-30 mb-30 box-shadow">
                    <!-- Single Catagory Post -->
                    @foreach($arr as $value)
                    <div class="breadcrumb-content">
                        <h4 style="text-align: center; padding-bottom: 15px; color: #158351"><b
                                style="text-transform: uppercase;">{{$value['categoryInfo']->name}}</b>
                        </h4>
                    </div>
                    @foreach($value['list'] as $rework)
                    <div class="single-catagory-post d-flex flex-wrap">
                        <div class="post-thumbnail bg-img"
                            style="background-image: url('{{url('images/'.$rework->image)}}')">
                            <a href="{{url('page/rework/'.$rework->slug)}}"><i class="fa fa-play"></i></a>
                        </div>

                        <div class="post-content">
                            <a href="{{url('page/rework/'.$rework->slug)}}" class="post-title">{{$rework->title}}</a>
                            <div class="post-meta-2">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                            </div>
                            <p>{!!str_limit(strip_tags($rework->details ),200) !!}</p>
                        </div>
                    </div>
                    @endforeach
                    @endforeach

                    <!-- Pagination -->
                    {!! $listCategory->links() !!}
                    {{-- <nav>
                        <ul class="pagination">
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="ti-angle-right"></i></a></li>
                        </ul>
                    </nav> --}}

                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                <div class="sidebar-area bg-white mb-30 box-shadow">
                    <!-- Sidebar Widget -->
                    <div class="single-sidebar-widget p-30">
                        <!-- Social Followers Info -->
                        <div class="social-followers-info">
                            <!-- Facebook -->
                            <a href="#" class="facebook-fans"><i class="fa fa-facebook"></i> 4,360 <span>Fans</span></a>
                            <!-- Twitter -->
                            <a href="#" class="twitter-followers"><i class="fa fa-twitter"></i> 3,280
                                <span>Followers</span></a>
                            <!-- YouTube -->
                            <a href="#" class="youtube-subscribers"><i class="fa fa-youtube"></i> 1250
                                <span>Subscribers</span></a>
                            <!-- Google -->
                            <a href="#" class="google-followers"><i class="fa fa-google-plus"></i> 4,230
                                <span>Followers</span></a>
                        </div>
                    </div>

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
                            <h5>Hot Channels</h5>
                        </div>

                        <!-- Single YouTube Channel -->
                        <div class="single-youtube-channel d-flex">
                            <div class="youtube-channel-thumbnail">
                                <img src="img/bg-img/14.jpg" alt="">
                            </div>
                            <div class="youtube-channel-content">
                                <a href="single-post.html" class="channel-title">TV Show</a>
                                <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o"
                                        aria-hidden="true"></i> Subscribe</a>
                            </div>
                        </div>

                        <!-- Single YouTube Channel -->
                        <div class="single-youtube-channel d-flex">
                            <div class="youtube-channel-thumbnail">
                                <img src="img/bg-img/15.jpg" alt="">
                            </div>
                            <div class="youtube-channel-content">
                                <a href="single-post.html" class="channel-title">Game Channel</a>
                                <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o"
                                        aria-hidden="true"></i> Subscribe</a>
                            </div>
                        </div>

                        <!-- Single YouTube Channel -->
                        <div class="single-youtube-channel d-flex">
                            <div class="youtube-channel-thumbnail">
                                <img src="img/bg-img/16.jpg" alt="">
                            </div>
                            <div class="youtube-channel-content">
                                <a href="single-post.html" class="channel-title">Sport Channel</a>
                                <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o"
                                        aria-hidden="true"></i> Subscribe</a>
                            </div>
                        </div>

                        <!-- Single YouTube Channel -->
                        <div class="single-youtube-channel d-flex">
                            <div class="youtube-channel-thumbnail">
                                <img src="img/bg-img/17.jpg" alt="">
                            </div>
                            <div class="youtube-channel-content">
                                <a href="single-post.html" class="channel-title">Travel Channel</a>
                                <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o"
                                        aria-hidden="true"></i> Subscribe</a>
                            </div>
                        </div>

                        <!-- Single YouTube Channel -->
                        <div class="single-youtube-channel d-flex">
                            <div class="youtube-channel-thumbnail">
                                <img src="img/bg-img/18.jpg" alt="">
                            </div>
                            <div class="youtube-channel-content">
                                <a href="single-post.html" class="channel-title">LifeStyle Channel</a>
                                <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o"
                                        aria-hidden="true"></i> Subscribe</a>
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
</div>
@endsection
