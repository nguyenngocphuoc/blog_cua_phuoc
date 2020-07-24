<!-- Sidebar Widget -->
<div class="col-12 col-md-6 col-lg-5 col-xl-4">
    <div class="sidebar-area bg-white mb-30 box-shadow">

        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget p-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Chủ Đề</h5>
            </div>
            <!-- {{ $categories = \App\GroupCategory::get() }} -->
            <!-- Catagory Widget -->
            <ul class="catagory-widgets">
                @foreach($categories as $category)
                <li>
                    <a href="{{url('/page/category/'.$category->slug)}}">
                        <span>
                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                            {{ $category->name }}
                        </span>
                        <!-- {{ $count = \App\Category::where('group_categories_id', $category->id)->count() }} -->
                        <span>{{$count}}</span>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>

        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget p-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Tin Tuyển Dụng Hot</h5>
            </div>

            <!-- Single YouTube Channel -->
            <!-- {{ $news = \App\ReWork::latest()->where('status',1)->take(10)->get() }} -->
            @foreach($news as $new)
            <div class="single-youtube-channel d-flex">
                <div class="youtube-channel-thumbnail">
                    <img src="{{ asset('images/'.$new->image) }}" alt="{{ $new->title }}" title="{{ $new->title }}">
                </div>
                <div class="youtube-channel-content">
                    <a href="{{ url('page/rework/'.$new->slug) }}" title="{{ $new->title }}" class="one-line-title channel-title">{{ $new->title }}</a>
                    <a href="{{ url('page/rework/'.$new->slug) }}" title="{{ $new->title }}" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i>
                        Xem</a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Sidebar Widget 
        <div class="single-sidebar-widget p-30">
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
        //-->
    </div>
</div>