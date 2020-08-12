                        @foreach($newslist as $key => $topnews)
                        <div class="col-md-12">
                            <div class="blog-entry-2 ftco-animate fadeInUp ftco-animated">
                                <a href="{{ url('page/news/'.$topnews->slug) }}" class="img"
                                    style="background-image: url({{ asset('images/'.$topnews->image) }});"></a>
                                <div class="text pt-4">
                                    <h3 class="mb-4"><a href="{{ url('page/news/'.$topnews->slug) }}">{{  $topnews->title }}</a></h3>
                                    <p class="mb-4">{!!  str_limit(strip_tags($topnews->details), 300) !!}</p>
                                    <div class="meta-wrap d-md-flex align-items-center">
                                        <div class="half order-md-last text-md-right">
                                            <p class="meta">
                                                <span><i class="icon-eye"></i>{{ $topnews->view_count }} Lượt Xem</span>
                                                <!--<span><i class="icon-comment"></i>5</span>-->
                                            </p>
                                        </div>
                                        <div class="half">
                                            <p><a href="{{ url('page/news/'.$topnews->slug) }}" class="btn btn-primary p-3 px-xl-4 py-xl-3">Chi Tiết</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
