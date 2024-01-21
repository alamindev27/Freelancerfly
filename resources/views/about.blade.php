@extends('layouts.app_user')
@section('content')
<div class="page-content">

    <div class="wt-bnr-inr overlay-wraper bg-center"
        style="background-image:url({{ asset('assets/frontend/user/images/banner/1.jpg') }});">
        <div class="overlay-main site-bg-white opacity-01"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">About Us</h2>
                    </div>
                </div>


                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="index.html">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>


            </div>
        </div>
    </div>



    <div class="section-full p-t70 p-b70 site-bg-gray twm-job-categories-area2">

        <div class="section-head center wt-small-separator-outer pb-4">
            <div class="wt-small-separator site-text-primary">
                <div>Jobs by Categories</div>
            </div>
            <h2 class="wt-title">Choose the category according to your skills</h2>
        </div>


        <div class="container">

            <div class="twm-job-categories-section-2 m-b30">

                <div class="job-categories-style1 m-b30">
                    <div class="row">
                        @foreach ($cagtegories as $cagtegory)
                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="job-categories-block-2 m-b30">
                                    <div class="twm-media">
                                        <div class="flaticon-dashboard"></div>
                                    </div>
                                    <div class="twm-content">
                                        <div class="twm-jobs-available">{{ $cagtegory->total_jobs }} Jobs</div>
                                        <a href="#">{{ $cagtegory->category_name }}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

                <div class="text-center job-categories-btn">
                    <a href="{{ route('frontend.categories') }}" class=" site-button">All Categories</a>
                </div>

            </div>

        </div>

    </div>



    <div class="section-full p-t100 p-b40 site-bg-white twm-how-it-work-area2" id="howitwork">

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">

                    <div class="section-head left wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                            <div>How It Works </div>
                        </div>
                        <h2 class="wt-title">Follow our steps we will help you.</h2>
                        <p>Post a job to tell us about your project. We'll quickly match you with the right
                            freelancers.</p>
                    </div>
                    <ul class="description-list">
                        <li>
                            <i class="feather-check"></i>
                            Trusted & Quality Job
                        </li>
                        <li>
                            <i class="feather-check"></i>
                            International Job
                        </li>
                        <li>
                            <i class="feather-check"></i>
                            No Extra Charge
                        </li>
                        <li>
                            <i class="feather-check"></i>
                            Top Companies
                        </li>
                    </ul>

                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="twm-w-process-steps-2-wrap">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="twm-w-process-steps-2">
                                    <div
                                        class="twm-w-pro-top bg-clr-sky-light bg-sky-light-shadow block-gradient">
                                        <span class="twm-large-number text-clr-white">01</span>
                                        <div class="twm-media">
                                            <span><img src="{{ asset('assets/frontend/user/images/work-process/icon1.png') }}"
                                                    alt="icon1"></span>
                                        </div>
                                        <h4 class="twm-title">Register<br>Your Account</h4>
                                        <p>You need to create an account if you want to earn income by working
                                            and getting others to work for you.</p>
                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="twm-w-process-steps-2">
                                    <div
                                        class="twm-w-pro-top bg-clr-yellow-light bg-yellow-light-shadow block-gradient-2">
                                        <span class="twm-large-number text-clr-white">02</span>
                                        <div class="twm-media">
                                            <span><img src="{{ asset('assets/frontend/user/images/work-process/icon4.png') }}"
                                                    alt="icon1"></span>
                                        </div>
                                        <h4 class="twm-title">Search <br>
                                            Your Job</h4>
                                        <p>You can search and find jobs according to the content you need and
                                            your skills.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="twm-w-process-steps-2">
                                    <div
                                        class="twm-w-pro-top bg-clr-pink-light bg-pink-light-shadow block-gradient-3">
                                        <span class="twm-large-number text-clr-white">03</span>
                                        <div class="twm-media">
                                            <span><img src="{{ asset('assets/frontend/user/images/work-process/icon3.png') }}"
                                                    alt="icon1"></span>
                                        </div>
                                        <h4 class="twm-title">Apply <br>For Dream Job</h4>
                                        <p>You can start earning by applying your skills to complete jobs.</p>
                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="twm-w-process-steps-2">
                                    <div
                                        class="twm-w-pro-top bg-clr-green-light bg-clr-light-shadow block-gradient-4">
                                        <span class="twm-large-number text-clr-white">04</span>
                                        <div class="twm-media">
                                            <span><img src="{{ asset('assets/frontend/user/images/work-process/icon3.png') }}"
                                                    alt="icon1"></span>
                                        </div>
                                        <h4 class="twm-title">Upload <br>Your Resume</h4>
                                        <p>By uploading your requirements, you can get the work done by skilled
                                            people.</p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <div class="twm-how-it-work-section">

            </div>
        </div>

    </div>



    <div class="section-full p-t70 p-b70 twm-explore-area bg-cover "
        style="background-image: url({{ asset('images/background/bg-1.html') }});">
        <div class="container">

            <div class="section-content">
                <div class="row">

                    <div class="col-lg-4 col-md-12">
                        <div class="twm-explore-media-wrap">
                            <div class="twm-media">
                                <img src="assets/user/images/gir-large.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-12">
                        <div class="twm-explore-content-outer">
                            <div class="twm-explore-content">

                                <div class="twm-l-line-1"></div>
                                <div class="twm-l-line-2"></div>

                                <div class="twm-r-circle-1"></div>
                                <div class="twm-r-circle-2"></div>

                                <div class="twm-title-small">Explore New Life</div>
                                <div class="twm-title-large">
                                    <h2>Remember, exploring a new life as a freelancer requires patience,
                                        persistence, and a willingness to adapt.</h2>
                                    <p>Don’t just find. be found
                                        put your CV in front of
                                        great employers </p>
                                </div>
                                <div class="twm-upload-file">
                                    <button type="button" class="site-button"
                                        onclick="window.open('login.html', '_blank')">Sign Up</button>
                                </div>


                            </div>
                            <div class="twm-bold-circle-right"></div>
                            <div class="twm-bold-circle-left"></div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>



    <div class="section-full p-t70 p-b70 site-bg-white twm-companies-wrap">

        <div class="section-head center wt-small-separator-outer mb-4">
            <div class="wt-small-separator site-text-primary">
                <div>Payment Gateway</div>
            </div>
            <h2 class="wt-title">Our Payment Partner's</h2>
        </div>


        <div class="container">
            <div class="section-content">
                <div class="owl-carousel home-client-carousel2 owl-btn-vertical-center">
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                                <a href="javascript:void(0);"><img
                                        src="uploads/payment-gateway/logo/1688628617.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                                <a href="javascript:void(0);"><img
                                        src="uploads/payment-gateway/logo/1697487192.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                                <a href="javascript:void(0);"><img
                                        src="uploads/payment-gateway/logo/1697516139.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                                <a href="javascript:void(0);"><img
                                        src="uploads/payment-gateway/logo/1697516114.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                                <a href="javascript:void(0);"><img
                                        src="uploads/payment-gateway/logo/1688629279.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                                <a href="javascript:void(0);"><img
                                        src="uploads/payment-gateway/logo/1688629331.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>

@endsection
