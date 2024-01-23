@extends('layouts.app_user')
@section('styles')
    <style>
        .twm-home2-banner-section {
            padding-top: 0px !important;
        }
    </style>
@endsection
@section('content')
    <div class="page-content">



        <div class="section-full  p-t50 p-b40 bg-white">
            <div class="container">
                <div class="page-notice-wrapper">
                    <p class="notice-text">
                        <marquee behavior="scroll" direction="left">Happy New Year BOOM OFFER FOR JOB POSTERS! Main Balance
                            Ads Funds $100=125$ or $50=65$ or $20=25$ from 01.01.2024 to 30.01.2024 will get Bonus.
                        </marquee>
                    </p>
                </div>

                <div class="section-content">
                    <div class="twm-job-detail-2-wrap">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-4 col-md-12 rightSidebar">

                                <div class="side-bar custom mb-4">
                                    <h4 class="text-center choose-plan">Choose your plan</h4>
                                    <ul class="nav nav-tabs project-tab justify-content-center" id="project-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#basic-gigs" type="button" role="tab" aria-controls="home" aria-selected="false">Basic</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#standard-gigs" type="button" role="tab" aria-controls="profile" aria-selected="false">Standard</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link " id="contact-tab" data-bs-toggle="tab" data-bs-target="#premium-gigs" type="button" role="tab" aria-controls="contact" aria-selected="true">Premium</button>
                                        </li>
                                    </ul>

                                </div>
                                <div class="gigs-package">
                                    <div class="tab-content" id="myTab3Content">

                                        <div class="tab-pane fade active show" id="basic-gigs" role="tabpanel"
                                            aria-labelledby="Monthly">
                                            <div class="gig-wrapper">
                                                <div
                                                    class="top-gig-content d-flex justify-content-between align-items-center">
                                                    <h5>Bssic monetize your channel</h5>
                                                    <p class="gig-price">$ {{ $gig->basic_price }}</p>
                                                </div>
                                                <div class="gig-main-content">
                                                    <h2 class="gig-title">{{$gig->basic_package_name}}</h2>
                                                    <div class="gig-basic-info d-flex align-items-center mt-3">
                                                        <p class="mb-0 me-3"><span><i class="feather-clock me-2"></i></span>{{ $gig->basic_delivery_time }} Days Delivery
                                                        </p>
                                                        @if ($gig->basic_unlimited_revision == 'yes')
                                                            <p class="mb-0"><span> <i class="feather-refresh-ccw me-2"></i></span>Unlimited Revision </p>
                                                        @else
                                                            <p class="mb-0"><span> <i class="feather-refresh-ccw me-2"></i></span>{{ $gig->basic_total_revision }} Revision </p>
                                                        @endif
                                                    </div>
                                                    <div class="gig-feature-list">
                                                        <ul class="description-list-2">
                                                            @foreach (BasicFeature($gig->id) as $feature)
                                                                <li class="checked">
                                                                    <span><i class="feather-check"></i></span>
                                                                    {{ $feature->feature }}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="gig-pay-btn">
                                                        <input type="hidden" id="package_price" value="{{ $gig->basic_price }}">
                                                        <input type="hidden" id="package_name" value="Basic">
                                                        <input type="hidden" id="package_type" value="0">
                                                        <input type="hidden" id="delivery_day" value="{{ $gig->basic_delivery_time }}">

                                                        <a role="button" class="d-block continue-btn order-now-btn">Order Now <span><i class="feather-arrow-right"></i></span></a>

                                                        <div class="service_user_info row">
                                                            <div class="col-md-6">
                                                                <a href="javascript:void(0)" onclick="send_message({{ auth()->user()->id }}, {{ $gig->user_id }})" class="d-block compare-btn">Contact Seller <span><i class="fa fa-inbox"></i></span></a>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <a href="#" class="d-block compare-btn">View Profile <span> <i class="fa fa-user"></i></span></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="tab-pane fade" id="standard-gigs" role="tabpanel"
                                            aria-labelledby="Monthly">
                                            <div class="gig-wrapper">
                                                <div
                                                    class="top-gig-content d-flex justify-content-between align-items-center">
                                                    <h5>Standard monetize your channel</h5>
                                                    <p class="gig-price">$ {{ $gig->standard_price }}</p>
                                                </div>
                                                <div class="gig-main-content">
                                                    <h2 class="gig-title">{{$gig->standard_package_name}}</h2>
                                                    <div class="gig-basic-info d-flex align-items-center mt-3">
                                                        <p class="mb-0 me-3"><span><i class="feather-clock me-2"></i></span>{{ $gig->standard_delivery_time }} Days Delivery
                                                        </p>
                                                        @if ($gig->standard_unlimited_revision == 'yes')
                                                            <p class="mb-0"><span> <i class="feather-refresh-ccw me-2"></i></span>Unlimited Revision </p>
                                                        @else
                                                            <p class="mb-0"><span> <i class="feather-refresh-ccw me-2"></i></span>{{ $gig->standard_total_revision }} Revision </p>
                                                        @endif
                                                    </div>
                                                    <div class="gig-feature-list">
                                                        <ul class="description-list-2">
                                                            @foreach (StandardFeature($gig->id) as $feature)
                                                                <li class="checked">
                                                                    <span><i class="feather-check"></i></span>
                                                                    {{ $feature->feature }}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="gig-pay-btn">
                                                        <input type="hidden" id="package_price" value="{{ $gig->standard_price }}">
                                                        <input type="hidden" id="package_name" value="Standard">
                                                        <input type="hidden" id="package_type" value="1">
                                                        <input type="hidden" id="delivery_day" value="{{ $gig->standard_delivery_time }}">

                                                        <a role="button" class="d-block continue-btn order-now-btn">Order Now <span><i class="feather-arrow-right"></i></span></a>
                                                        <div class="service_user_info row">
                                                            <div class="col-md-6">
                                                                <a href="javascript:void(0)" onclick="send_message({{ auth()->user()->id }}, {{ $gig->user_id }})" class="d-block compare-btn">Contact Seller <span><i class="fa fa-inbox"></i></span></a>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <a href="#" class="d-block compare-btn">View Profile <span> <i class="fa fa-user"></i></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="tab-pane fade" id="premium-gigs" role="tabpanel" aria-labelledby="Monthly">
                                            <div class="gig-wrapper">
                                                <div
                                                    class="top-gig-content d-flex justify-content-between align-items-center">
                                                    <h5>Premium monetize your channel</h5>
                                                    <p class="gig-price">$ {{ $gig->premium_price }}</p>
                                                </div>
                                                <div class="gig-main-content">
                                                    <h2 class="gig-title">{{$gig->premium_package_name}}</h2>
                                                    <div class="gig-basic-info d-flex align-items-center mt-3">
                                                        <p class="mb-0 me-3"><span><i class="feather-clock me-2"></i></span>{{ $gig->premium_delivery_time }} Days Delivery
                                                        </p>
                                                        @if ($gig->premium_unlimited_revision == 'yes')
                                                            <p class="mb-0"><span> <i class="feather-refresh-ccw me-2"></i></span>Unlimited Revision </p>
                                                        @else
                                                            <p class="mb-0"><span> <i class="feather-refresh-ccw me-2"></i></span>{{ $gig->premium_total_revision }} Revision </p>
                                                        @endif
                                                    </div>
                                                    <div class="gig-feature-list">
                                                        <ul class="description-list-2">
                                                            @foreach (PremiumFeature($gig->id) as $feature)
                                                                <li class="checked">
                                                                    <span><i class="feather-check"></i></span>
                                                                    {{ $feature->feature }}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="gig-pay-btn">
                                                        <input type="hidden" id="package_price" value="{{ $gig->premium_price }}">
                                                        <input type="hidden" id="package_name" value="Premium">
                                                        <input type="hidden" id="package_type" value="2">
                                                        <input type="hidden" id="delivery_day" value="{{ $gig->premium_delivery_time }}">


                                                        <a role="button" class="d-block continue-btn order-now-btn">Order Now <span><i class="feather-arrow-right"></i></span></a>

                                                        <div class="service_user_info row">
                                                            <div class="col-md-6">
                                                                <a href="javascript:void(0)" onclick="send_message({{ auth()->user()->id }}, {{ $gig->user_id }})"
                                                                    class="d-block compare-btn">Contact Seller <span><i
                                                                            class="fa fa-inbox"></i></span></a>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <a href="#"
                                                                    class="d-block compare-btn">View Profile <span> <i
                                                                            class="fa fa-user"></i></span></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-8 col-md-12">

                                <div class="cabdidate-de-info">
                                    <h2 class="gig-title-01">{{$gig->title}}</h2>

                                    <div class="gig-top-rating-wrapper mb-3">
                                        <div class="gig-rating-star d-flex align-items-center">
                                            {{-- <div class="g-star-list">
                                                <span class="rating-icon "> <i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star-half-stroke"></i>
                                                </span>
                                            </div>
                                            <div class="total-g-star ms-1">
                                                <span class="r-average">4.7</span>
                                                <span>( 11 )</span>
                                            </div> --}}
                                            <div class="gig-order-list ms-2">
                                                <p class="mb-0"><span>12</span> Orders in Queue</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div id="gig-image-wrapper" class="carousel slide" data-bs-ride="carousel">


                                        <div class="carousel-indicators">
                                        </div>


                                        <div class="carousel-inner">
                                            @foreach (banners($gig->id) as $banner)
                                                <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}">
                                                    <img src="{{ asset($banner->banner) }}" alt="Los Angeles" class="d-block" style="width:100%">
                                                </div>
                                            @endforeach


                                        </div>


                                    </div>

                                    <div class="gig-description mt-4">
                                        <h4 class="custom-h4">About This Service</h4>
                                        Hi,<br />
                                        {{$gig->description}}
                                    </div>


                                    {{-- <h4 class="section-head-small mb-3">Reviews</h4>
                                    <div class="row justify-content-center customer-rating">
                                        <div class=" col-12 mb-5">

                                            <div class="gig-rating-star custom d-flex align-items-center mb-3">
                                                <p class="mb-0 me-2"><span>11</span> reviews for this Service</p>
                                                <div class="g-star-list">
                                                    <span class="rating-icon "> <i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star-half-stroke"></i>
                                                    </span>
                                                </div>
                                                <div class="total-g-star ms-1">
                                                    <span class="r-average">4.7</span>
                                                </div>
                                            </div>

                                            <div class="card custom">
                                                <div class="row justify-content-left d-flex">
                                                    <div class="col-md-4 d-flex flex-column">
                                                        <div class="rating-box">
                                                            <h1 class="pt-4">4.7</h1>
                                                            <p class="">out of 5.0</p>
                                                        </div>
                                                        <div
                                                            class="g-star-list custom d-flex justify-content-center align-items-center">
                                                            <span class="rating-icon "> <i class="fa fa-star"></i><i
                                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                                    class="fa fa-star"></i><i
                                                                    class="fa fa-star-half-stroke"></i> </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="rating-bar0 justify-content-center">

                                                            <table class="text-left mx-auto">
                                                                <tr>
                                                                    <td class="rating-label">Excellent</td>
                                                                    <td class="rating-bar">
                                                                        <div class="bar-container">
                                                                            <div class="bar-5"
                                                                                style="width:72.727272727273%"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">8</td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="rating-label">Good</td>
                                                                    <td class="rating-bar">
                                                                        <div class="bar-container">
                                                                            <div class="bar-4"
                                                                                style="width:27.272727272727%"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">3</td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="rating-label">Average</td>
                                                                    <td class="rating-bar">
                                                                        <div class="bar-container">
                                                                            <div class="bar-3" style="width:0%"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">0</td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="rating-label">Poor</td>
                                                                    <td class="rating-bar">
                                                                        <div class="bar-container">
                                                                            <div class="bar-2" style="width:0%"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">0</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="rating-label">Terrible</td>
                                                                    <td class="rating-bar">
                                                                        <div class="bar-container">
                                                                            <div class="bar-1" style="width:0%"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">0</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="customer-review-wrapper">


                                                <div class="customer-review-item">
                                                    <div class="client-img-box-wrap d-flex">
                                                        <div class="client-img me-3">
                                                            <img src="https://gpsfreelancer.com/uploads/User/Picture/1688042354.jpg"
                                                                alt="">
                                                        </div>

                                                        <div class="client-info">
                                                            <h4 class="">Harry Johan</h4>
                                                            <p class="mb-0">Bangladesh</p>
                                                        </div>

                                                    </div>
                                                    <div class="client-comment-box mt-2">
                                                        <div class="gig-rating-star custom d-flex align-items-center mb-1">
                                                            <div class="g-star-list">
                                                                <span class="rating-icon "><i class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i></span>

                                                            </div>
                                                            <div class="total-g-star ms-1">
                                                                <span class="r-average">(5.0)</span>
                                                            </div>
                                                            <p class="mb-0 ms-2"></p>
                                                        </div>
                                                        <div class="comment-content">
                                                            <p>This seller is great at what he does. I ordered him to
                                                                promote my youtube channel and videos so that I could get my
                                                                YouTube channel monetized. In less than a week, I had more
                                                                than enough subscribers and watch hours to qualify for the
                                                                YouTube partner program. If you&#039;re looking to get
                                                                monetized quickly, I would highly recommend this seller!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="customer-review-item">
                                                    <div class="client-img-box-wrap d-flex">
                                                        <div class="client-img me-3">
                                                            <img src="https://gpsfreelancer.com/uploads/User/Picture/1687971096.jpg"
                                                                alt="">
                                                        </div>

                                                        <div class="client-info">
                                                            <h4 class="">Moazam PD</h4>
                                                            <p class="mb-0">Malaysia</p>
                                                        </div>

                                                    </div>
                                                    <div class="client-comment-box mt-2">
                                                        <div class="gig-rating-star custom d-flex align-items-center mb-1">
                                                            <div class="g-star-list">
                                                                <span class="rating-icon "><i class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i></span>

                                                            </div>
                                                            <div class="total-g-star ms-1">
                                                                <span class="r-average">(5.0)</span>
                                                            </div>
                                                            <p class="mb-0 ms-2"></p>
                                                        </div>
                                                        <div class="comment-content">
                                                            <p>I hired &quot;zohaibkhan760&quot; to help me monetize my
                                                                YouTube channel, and overall, it was a positive experience.
                                                                While there were some initial issues with incomplete views,
                                                                the freelancer resolved them promptly. Once the job was
                                                                complete, my channel was successfully monetized. I recommend
                                                                this freelancer, but be sure to confirm completion before
                                                                accepting the order.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="customer-review-item">
                                                    <div class="client-img-box-wrap d-flex">
                                                        <div class="client-img me-3">
                                                            <img src="https://gpsfreelancer.com/uploads/User/Picture/1692894471.jpg"
                                                                alt="">
                                                        </div>

                                                        <div class="client-info">
                                                            <h4 class="">Sajal Jobless</h4>
                                                            <p class="mb-0">Eritrea</p>
                                                        </div>

                                                    </div>
                                                    <div class="client-comment-box mt-2">
                                                        <div class="gig-rating-star custom d-flex align-items-center mb-1">
                                                            <div class="g-star-list">
                                                                <span class="rating-icon "><i class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i></span>

                                                            </div>
                                                            <div class="total-g-star ms-1">
                                                                <span class="r-average">(5.0)</span>
                                                            </div>
                                                            <p class="mb-0 ms-2"></p>
                                                        </div>
                                                        <div class="comment-content">
                                                            <p>Mrs helped me achieve success on YouTube beyond my
                                                                expectations. Throughout the entire project, she was
                                                                professional, responsive, and a pleasure to work with.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="customer-review-item">
                                                    <div class="client-img-box-wrap d-flex">
                                                        <div class="client-img me-3">
                                                            <img src="https://gpsfreelancer.com/uploads/User/Picture/1687669543.jpg"
                                                                alt="">
                                                        </div>

                                                        <div class="client-info">
                                                            <h4 class="">Pallab work</h4>
                                                            <p class="mb-0">Malaysia</p>
                                                        </div>

                                                    </div>
                                                    <div class="client-comment-box mt-2">
                                                        <div class="gig-rating-star custom d-flex align-items-center mb-1">
                                                            <div class="g-star-list">
                                                                <span class="rating-icon "><i class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i></span>

                                                            </div>
                                                            <div class="total-g-star ms-1">
                                                                <span class="r-average">(5.0)</span>
                                                            </div>
                                                            <p class="mb-0 ms-2"></p>
                                                        </div>
                                                        <div class="comment-content">
                                                            <p>i will definitely be using mrs gull services in the future
                                                                thanks for coming thru for me mrs gull!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="customer-review-item">
                                                    <div class="client-img-box-wrap d-flex">
                                                        <div class="client-img me-3">
                                                            <img src="https://gpsfreelancer.com/uploads/User/Picture/1688021668.png"
                                                                alt="">
                                                        </div>

                                                        <div class="client-info">
                                                            <h4 class="">Allegro P</h4>
                                                            <p class="mb-0">Malaysia</p>
                                                        </div>

                                                    </div>
                                                    <div class="client-comment-box mt-2">
                                                        <div class="gig-rating-star custom d-flex align-items-center mb-1">
                                                            <div class="g-star-list">
                                                                <span class="rating-icon "><i class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa-regular fa-star"></i></span>

                                                            </div>
                                                            <div class="total-g-star ms-1">
                                                                <span class="r-average">(4.0)</span>
                                                            </div>
                                                            <p class="mb-0 ms-2"></p>
                                                        </div>
                                                        <div class="comment-content">
                                                            <p>This seller delivered my order and did exactly as we
                                                                discussed. His job was great on my channel, and I have no
                                                                complaints so I will patronize in future. Communication was
                                                                also good. I highly recommend this seller. Thank you</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="customer-review-item">
                                                    <div class="client-img-box-wrap d-flex">
                                                        <div class="client-img me-3">
                                                            <img src="https://gpsfreelancer.com/uploads/User/Picture/1688021043.jpg"
                                                                alt="">
                                                        </div>

                                                        <div class="client-info">
                                                            <h4 class="">Ana SEO Agency</h4>
                                                            <p class="mb-0">Malaysia</p>
                                                        </div>

                                                    </div>
                                                    <div class="client-comment-box mt-2">
                                                        <div class="gig-rating-star custom d-flex align-items-center mb-1">
                                                            <div class="g-star-list">
                                                                <span class="rating-icon "><i class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa-regular fa-star"></i></span>

                                                            </div>
                                                            <div class="total-g-star ms-1">
                                                                <span class="r-average">(4.0)</span>
                                                            </div>
                                                            <p class="mb-0 ms-2"></p>
                                                        </div>
                                                        <div class="comment-content">
                                                            <p>Great work. i am very heppy to work with the Seller . She
                                                                work very hard and fastand love work again see you very
                                                                Mahnoor and thanks</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="customer-review-item">
                                                    <div class="client-img-box-wrap d-flex">
                                                        <div class="client-img me-3">
                                                            <img src="https://gpsfreelancer.com/uploads/User/Picture/1688027002.jpg"
                                                                alt="">
                                                        </div>

                                                        <div class="client-info">
                                                            <h4 class="">Asim Ali</h4>
                                                            <p class="mb-0">Bangladesh</p>
                                                        </div>

                                                    </div>
                                                    <div class="client-comment-box mt-2">
                                                        <div class="gig-rating-star custom d-flex align-items-center mb-1">
                                                            <div class="g-star-list">
                                                                <span class="rating-icon "><i class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i></span>

                                                            </div>
                                                            <div class="total-g-star ms-1">
                                                                <span class="r-average">(5.0)</span>
                                                            </div>
                                                            <p class="mb-0 ms-2"></p>
                                                        </div>
                                                        <div class="comment-content">
                                                            <p>It’s a very nice experience, very responsive to my concerns
                                                                and did an amazing job I highly recommended to anyone who is
                                                                interested in getting their YouTube channel Monetized</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="customer-review-item">
                                                    <div class="client-img-box-wrap d-flex">
                                                        <div class="client-img me-3">
                                                            <img src="https://gpsfreelancer.com/uploads/User/Picture/1688030675.jpg"
                                                                alt="">
                                                        </div>

                                                        <div class="client-info">
                                                            <h4 class="">Nayab A</h4>
                                                            <p class="mb-0">Bangladesh</p>
                                                        </div>

                                                    </div>
                                                    <div class="client-comment-box mt-2">
                                                        <div class="gig-rating-star custom d-flex align-items-center mb-1">
                                                            <div class="g-star-list">
                                                                <span class="rating-icon "><i class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i></span>

                                                            </div>
                                                            <div class="total-g-star ms-1">
                                                                <span class="r-average">(5.0)</span>
                                                            </div>
                                                            <p class="mb-0 ms-2"></p>
                                                        </div>
                                                        <div class="comment-content">
                                                            <p>I can honestly just say wow! Whatever she dud has worked
                                                                amazingly for my channel which I&#039;m now working on
                                                                actively uploading every week! Thank you for meeting and
                                                                exceeding my expectations. I will definitely recommend
                                                                Elizabeth and will surely return here for more services for
                                                                my channel!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="customer-review-item">
                                                    <div class="client-img-box-wrap d-flex">
                                                        <div class="client-img me-3">
                                                            <img src="https://gpsfreelancer.com/uploads/User/Picture/1688033393.jpg"
                                                                alt="">
                                                        </div>

                                                        <div class="client-info">
                                                            <h4 class="">Artem V.</h4>
                                                            <p class="mb-0">Bangladesh</p>
                                                        </div>

                                                    </div>
                                                    <div class="client-comment-box mt-2">
                                                        <div class="gig-rating-star custom d-flex align-items-center mb-1">
                                                            <div class="g-star-list">
                                                                <span class="rating-icon "><i class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa-regular fa-star"></i></span>

                                                            </div>
                                                            <div class="total-g-star ms-1">
                                                                <span class="r-average">(4.0)</span>
                                                            </div>
                                                            <p class="mb-0 ms-2"></p>
                                                        </div>
                                                        <div class="comment-content">
                                                            <p>Eliza is a very clear and efficient person in carrying out
                                                                her work commitments to you. She is very efficient and above
                                                                all fast. She completed her work ahead of schedule and
                                                                answered any questions I had very quickly. I am personally
                                                                very happy with her work and highly recommend and encourage
                                                                others to work with her. Thank you very much for your help
                                                                Eliza!!!!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="customer-review-item">
                                                    <div class="client-img-box-wrap d-flex">
                                                        <div class="client-img me-3">
                                                            <img src="https://gpsfreelancer.com/uploads/User/Picture/1688035685.jpg"
                                                                alt="">
                                                        </div>

                                                        <div class="client-info">
                                                            <h4 class="">Khalil S.</h4>
                                                            <p class="mb-0">Bangladesh</p>
                                                        </div>

                                                    </div>
                                                    <div class="client-comment-box mt-2">
                                                        <div class="gig-rating-star custom d-flex align-items-center mb-1">
                                                            <div class="g-star-list">
                                                                <span class="rating-icon "><i class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i></span>

                                                            </div>
                                                            <div class="total-g-star ms-1">
                                                                <span class="r-average">(5.0)</span>
                                                            </div>
                                                            <p class="mb-0 ms-2"></p>
                                                        </div>
                                                        <div class="comment-content">
                                                            <p>Very satisfied what how this experience was working with
                                                                Elizabeth. Communication was very well and she was very
                                                                helpful to me with everything. Definitely got what I was
                                                                looking for. I really appreciate your help with getting my
                                                                channel monetize very quickly in a timely manner.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="customer-review-item">
                                                    <div class="client-img-box-wrap d-flex">
                                                        <div class="client-img me-3">
                                                            <img src="https://gpsfreelancer.com/uploads/User/Picture/1688040225.jpg"
                                                                alt="">
                                                        </div>

                                                        <div class="client-info">
                                                            <h4 class="">Hori Chad</h4>
                                                            <p class="mb-0">Bangladesh</p>
                                                        </div>

                                                    </div>
                                                    <div class="client-comment-box mt-2">
                                                        <div class="gig-rating-star custom d-flex align-items-center mb-1">
                                                            <div class="g-star-list">
                                                                <span class="rating-icon "><i class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i><i
                                                                        class="fa fa-star"></i></span>

                                                            </div>
                                                            <div class="total-g-star ms-1">
                                                                <span class="r-average">(5.0)</span>
                                                            </div>
                                                            <p class="mb-0 ms-2"></p>
                                                        </div>
                                                        <div class="comment-content">
                                                            <p>The seller was professional and trustworthy, helpful and did
                                                                what was to be done I am grateful. I recommend this seller.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="widget tw-sidebar-tags-wrap">
                                        <h4 class="section-head-small mb-4">Related Tags</h4>
                                        <div class="tagcloud">
                                            @php
                                                $tags = explode(',', $gig->tags);
                                            @endphp
                                            @foreach ($tags as $tag)
                                                <a href="#">{{ $tag }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


@endsection
@section('scripts')



    <script>
        function send_message(sender_id, resiver_id) {
            $('#sender_id').val(sender_id);
            $('#resiver_id').val(resiver_id);
            $('#send_message').modal('show');
        }

        $(document).on('click', '.active_mobile_menu_btn', function() {
            $('.active_mobile_menu').slideToggle();
        });

        $(document).ready(function() {
            var text = $('.active_mobile_menu').find('.active').text();
            $('.active_mobile_btn_text').text(text);
        });
    </script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {



            }, 300);
        });
    </script>

    <script>
        $(document).ready(function() {
            $('input[name="order_type"]').change(function() {
                if ($(this).val() == "1") {
                    $('.defualt-order-price').slideUp();
                    $('.custom-order-price').slideDown();
                } else {
                    $('.custom-order-price').slideUp();
                    $('.defualt-order-price').slideDown();
                }
            });
        });


        // set data in order modal
        $(document).on('click', '.order-now-btn', function() {

            var package_name = $(this).parent('.gig-pay-btn').find('#package_name').val();
            var package_type = $(this).parent('.gig-pay-btn').find('#package_type').val();
            var price = $(this).parent('.gig-pay-btn').find('#package_price').val();
            var delivery_day = $(this).parent('.gig-pay-btn').find('#delivery_day').val();

            if (parseInt(delivery_day) > 1) {
                var day = delivery_day + " Days"
            } else if (parseInt(delivery_day) == 1) {
                var day = delivery_day + " Day"
            } else {
                var day = "Unlimited"
            }

            $('#modal_package_name').text(package_name);
            $('#modal_package_price').text("$ " + parseInt(price).toFixed(2));
            $('#modal_delivery_date').text(day);

            $('[name="price"]').val(price);
            $('[name="delivery_time"]').val(day);
            $('[name="package_type"]').val(package_type);
            $('[name="service_id"]').val({{ $gig->id }});
            $('[name="package_name"]').val(package_name);

            $('#final-price').modal('show');
        })
    </script>

@endsection
