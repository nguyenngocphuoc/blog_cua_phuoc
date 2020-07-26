@extends('view.masterPage')
@section('content')
<!-- ##### About Us Area Start ##### -->
<section class="about-us-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-8">
                <!-- About Us Content -->
                <div class="about-us-content bg-white mb-30 p-30 box-shadow">

                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>Giới thiệu</h5>
                    </div>
                    <div>{!! $setting->about_us !!}</div>
                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur mauris id
                        scelerisque eleifend. Nunc vestibulum cursus quam at scelerisque. Aliquam quis varius orci,
                        vel tincidunt est. Proin ac tincidunti, atmots interdum erat. Maecenas neque lorem, aliquet
                        in tempus non, efficitur ac neque.</p>
                    <p>Phasellus elefend odio quis dolor pretium condimentu. Morbi quis mauris ipsum urna eu
                        fermentum bentons Suspendisse auctor magna ac porta ornare. Fusce finibus nibh at lacinia
                        lobortis.</p>
                    <ul>
                        <li><i class="fa fa-check"></i> Vivamus starlord finibus, dictum massa eget, suscipit metus
                            nami at tristique elit started.</li>
                        <li><i class="fa fa-check"></i> Cras ipsum libero, suscipit vitamin tellus vitae, feugiat
                            ultricies purus praesent gamora.</li>
                        <li><i class="fa fa-check"></i> Proin ex sem, ultrices drax the sit amet, facilisis
                            destroyer et odio profession risusest.</li>
                        <li><i class="fa fa-check"></i> Morbi maximus mauris eget groot dignissim, in laoreet justo
                            facilisis.</li>
                    </ul> --}}
                    {{-- <img class="mt-15" src="img/bg-img/35.jpg" alt=""> --}}

                    <!-- Team Member Area -->
                    {{-- <div class="section-heading mt-30">
                        <h5>Our Team</h5>
                    </div>

                    <!-- Single Team Member -->
                    <div class="single-team-member d-flex align-items-center">
                        <div class="team-member-thumbnail">
                            <img src="img/bg-img/36.jpg" alt="">
                            <div class="social-btn">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="team-member-content">
                            <h6>Mrs. Susan Monroe</h6>
                            <span>Reporter</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur mauris id
                                scelerisque eleifend. Nunc vestibulum cursea quam at scelerisque.</p>
                        </div>
                    </div>

                    <!-- Single Team Member -->
                    <div class="single-team-member d-flex align-items-center">
                        <div class="team-member-thumbnail">
                            <img src="img/bg-img/37.jpg" alt="">
                            <div class="social-btn">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="team-member-content">
                            <h6>Mr. Luke Garner</h6>
                            <span>Editor in Chief</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur mauris id
                                scelerisque eleifend. Nunc vestibulum cursea quam at scelerisque.</p>
                        </div>
                    </div>

                    <!-- Single Team Member -->
                    <div class="single-team-member d-flex align-items-center">
                        <div class="team-member-thumbnail">
                            <img src="img/bg-img/38.jpg" alt="">
                            <div class="social-btn">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="team-member-content">
                            <h6>Ms. Elena Korikova</h6>
                            <span>Marketer</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur mauris id
                                scelerisque eleifend. Nunc vestibulum cursea quam at scelerisque.</p>
                        </div>
                    </div>

                    <!-- Single Team Member -->
                    <div class="single-team-member d-flex align-items-center">
                        <div class="team-member-thumbnail">
                            <img src="img/bg-img/39.jpg" alt="">
                            <div class="social-btn">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="team-member-content">
                            <h6>Mr. Tom Wellington</h6>
                            <span>Photographer</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur mauris id
                                scelerisque eleifend. Nunc vestibulum cursea quam at scelerisque.</p>
                        </div>
                    </div> --}}
                </div>
            </div>

            @include('view.rightcategorycolumn')
        </div>
    </div>
</section>
<!-- ##### About Us Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="footer-widget">
                    <!-- Logo -->
                    <a href="index.html" class="foo-logo"><img src="img/core-img/logo2.png" alt=""></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                    <div class="footer-social-info">
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            @endsection
