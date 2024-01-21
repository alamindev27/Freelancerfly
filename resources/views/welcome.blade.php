@extends('layouts.app_user')
@section('content')
    <div class="page-content">
        <div class="twm-home2-banner-section site-bg-gray bg-cover">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-xl-6 col-lg-6 col-md-12 order-2 order-md-1 z-index-5">
                        <div class="twm-bnr-left-section">
                            <div class="twm-bnr-title-small">We Have <span class="site-text-secondry">50,000+</span>
                                Live Jobs</div>
                            <div class="twm-bnr-title-large">{{ $banner->heading_part_1 }} <span class="site-text-primary">{{ $banner->heading_part_2 }} </span>
                                {{ $banner->heading_part_3 }} </div>
                            <div class="twm-bnr-discription">{{ $banner->text }}</div>
                            <a href="login.html" class="site-button">Get Started</a>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12 twm-bnr-right-section order-1 order-md-2">
                        <div class="twm-bnr2-right-content">

                            <div class="twm-img-bg-circle-area2">
                                <div class="twm-outline-ring-wrap">
                                    <div class="twm-outline-ring-dott-wrap">
                                        <span class="outline-dot-1"></span>
                                        <span class="outline-dot-2"></span>
                                        <span class="outline-dot-3"></span>

                                        <div class="twm-small-ring-l scale-up-center"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="twm-home-2-bnr-images">
                                <div class="bnr-image-1">
                                    <img src="{{ asset($banner->image_rounded) }}" alt="">
                                </div>
                                <div class="bnr-image-2">
                                    <img src="{{ asset($banner->image_circle) }}" alt="">
                                </div>
                                <div class="twm-small-ring-2 scale-up-center"></div>
                            </div>


                            <div class="twm-bnr-blocks twm-bnr-blocks-position-1">
                                <div class="twm-icon">
                                    <img src="{{ asset('assets/frontend/user/images/main-slider/slider2/icon-1.png') }}" alt="">
                                </div>
                                <div class="twm-content">
                                    <div class="tw-count-number text-clr-sky">
                                        <span class="counter">120</span>K+
                                    </div>
                                    <p class="icon-content-info">Companies Jobs</p>
                                </div>
                            </div>


                            <div class="twm-bnr-blocks twm-bnr-blocks-position-2">
                                <div class="twm-icon pink">
                                    <img src="{{ asset('assets/frontend/user/images/main-slider/slider2/icon-2.png') }}" alt="">
                                </div>
                                <div class="twm-content">
                                    <div class="tw-count-number text-clr-pink">
                                        <span class="counter">98</span> +
                                    </div>
                                    <p class="icon-content-info">Job For Countries </p>
                                </div>
                            </div>


                            <div class="twm-bnr-blocks-3 twm-bnr-blocks-position-3">
                                <div class="twm-pics">
                                    <span><img src="{{ asset('assets/frontend/user/images/main-slider/slider2/user/u-1.jpg') }}"
                                            alt=""></span>
                                    <span><img src="{{ asset('assets/frontend/user/images/main-slider/slider2/user/u-2.jpg') }}"
                                            alt=""></span>
                                    <span><img src="{{ asset('assets/frontend/user/images/main-slider/slider2/user/u-3.jpg') }}"
                                            alt=""></span>
                                    <span><img src="{{ asset('assets/frontend/user/images/main-slider/slider2/user/u-4.jpg') }}"
                                            alt=""></span>
                                    <span><img src="{{ asset('assets/frontend/user/images/main-slider/slider2/user/u-5.jpg') }}"
                                            alt=""></span>
                                    <span><img src="{{ asset('assets/frontend/user/images/main-slider/slider2/user/u-6.jpg') }}"
                                            alt=""></span>
                                </div>
                                <div class="twm-content">
                                    <div class="tw-count-number text-clr-green2">
                                        <span class="counter">30</span>K+
                                    </div>
                                    <p class="icon-content-info">Jobs Done</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="twm-search-bar-2-wrap mobile_display_none">
            <div class="container">
                <div class="twm-search-bar-2-inner">

                    <div class="row">

                        <div class="col-lg-12 col-md-12">
                            <div class="twm-bnr-search-bar">
                                <form method="GET" action="{{ route('frontend.search.job') }}">
                                  
                                    <div class="row">

                                        <div class="form-group col-lg-3 col-md-6">
                                            <label>Type</label>
                                            <select class="wt-search-bar-select selectpicker select_job_type" onchange="categoryChange()" name="job_type" required>
                                                <option value="">Select Type</option>
                                                <option value="group_job">Group Jobs</option>
                                                <option value="service">Gig</option>
                                            </select>
                                        </div>


                                        <div class="form-group col-lg-3 col-md-6">
                                            <label>Category</label>
                                            <select class="wt-search-bar-select selectpicker" name="category" id="search-category">
                                                <option value="">Select Category</option>
                                                @foreach ($cagtegories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="form-group col-lg-3 col-md-6">
                                            <label>Job Keywords</label>
                                            <div class="twm-inputicon-box">
                                                <input type="text" class="form-control" name="keyword" placeholder="Keywords">
                                                <i class="twm-input-icon fa fa-key"></i>
                                            </div>
                                        </div>


                                        <div class="form-group col-lg-3 col-md-6">
                                            <button type="submit" class="site-button">Find Jobs</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>

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
                            <h2 class="wt-title">{{ $step->heading }}</h2>
                            <p>{{$step->text}}</p>
                        </div>
                        <ul class="description-list">
                            <li>
                                <i class="feather-check"></i>
                                {{ $step->check_1 }}
                            </li>
                            <li>
                                <i class="feather-check"></i>
                                {{ $step->check_2 }}
                            </li>
                            <li>
                                <i class="feather-check"></i>
                                {{ $step->check_3 }}
                            </li>
                            <li>
                                <i class="feather-check"></i>
                                {{ $step->check_4 }}
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
                                                <span><img src="{{ asset($step->step_one_icon) }}"
                                                        alt="icon1"></span>
                                            </div>
                                            <h4 class="twm-title">{{ $step->step_one_title }}</h4>
                                            <p>{{ $step->step_one_text }}</p>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="twm-w-process-steps-2">
                                        <div
                                            class="twm-w-pro-top bg-clr-yellow-light bg-yellow-light-shadow block-gradient-2">
                                            <span class="twm-large-number text-clr-white">02</span>
                                            <div class="twm-media">
                                                <span><img src="{{ asset($step->step_one_icon) }}"
                                                        alt="icon1"></span>
                                            </div>
                                            <h4 class="twm-title">{{ $step->step_one_title }}</h4>
                                            <p>{{ $step->step_one_text }}</p>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="twm-w-process-steps-2">
                                        <div
                                            class="twm-w-pro-top bg-clr-pink-light bg-pink-light-shadow block-gradient-3">
                                            <span class="twm-large-number text-clr-white">03</span>
                                            <div class="twm-media">
                                                <span><img src="{{ asset($step->step_one_icon) }}"
                                                        alt="icon1"></span>
                                            </div>
                                            <h4 class="twm-title">{{ $step->step_one_title }}</h4>
                                            <p>{{ $step->step_one_text }}</p>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="twm-w-process-steps-2">
                                        <div
                                            class="twm-w-pro-top bg-clr-green-light bg-clr-light-shadow block-gradient-4">
                                            <span class="twm-large-number text-clr-white">04</span>
                                            <div class="twm-media">
                                                <span><img src="{{ asset($step->step_one_icon) }}"
                                                        alt="icon1"></span>
                                            </div>
                                            <h4 class="twm-title">{{ $step->step_one_title }}</h4>
                                            <p>{{ $step->step_one_text }}</p>
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





        <div class="section-full p-t80 p-b70 site-bg-gray twm-bg-ring-wrap2">
            <div class="twm-bg-ring-right"></div>
            <div class="twm-bg-ring-left"></div>
            <div class="container">

                <div class="wt-separator-two-part">
                    <div class="row wt-separator-two-part-row">
                        <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-left">

                            <div class="section-head left wt-small-separator-outer">
                                <div class="wt-small-separator site-text-primary">
                                    <div>All Jobs Post</div>
                                </div>
                                <h2 class="wt-title">Find Your Career You Deserve it</h2>
                            </div>

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-right text-right">
                            <ul class="nav nav-tabs project-tab justify-content-md-end justify-content-start"
                                id="project-tab" role="tablist" style="width:184px">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">Group Jobs</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                                        aria-selected="false">Gig</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                </div>

                <div class="section-content mt-3">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="twm-jobs-grid-wrap">
                                <div class="row">
                                    @foreach ($jobs as $job)
                                        @include('partials.job-post')
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="twm-jobs-grid-wrap">
                                <div class="row">
                                    @foreach ($jobs as $job)
                                        @include('partials.job-post')
                                    @endforeach
                                    {{-- <div class="col-12">
                                        <ul>
                                            <li style="list-style: none;  margin-bottom: 20px;">
                                                <div class="twm-jobs-list-style1  custom">
                                                    <div class="twm-mid-content project" style="padding-left: 0">
                                                        <small class="labled-job">Logo &amp; Brand Identity Design/ Link Marketing</small>
                                                        <a href="personal-job-details/cpl-lead-generation-startacareertoday-youtube-video-editor.html"
                                                            class="twm-job-title">
                                                            <h4>CPL Lead Generation: StartACareerToday - YouTube Video Editor</h4>
                                                        </a>
                                                        <p class="project-content">আমরা দক্ষ লিঙ্ক মার্কেটিং কর্মীনিয়োগ করতে চাই। আমাদের উদ্যমশীল টিমে যোগদান করে, আপনিUnited States বাসীদের মধ্যে ফেসবুক গ্রুপের মাধ্যমেআমাদের লিঙ্ক প্রমোশন করতে সাহায্য করবেন। তবে কাজটিআপনারা বুঝতে না পেরে আবেদন সাবমিট করছেন, কাজ না বুঝে কেউআবেদন করবেন না😍&lt;br /&gt;&lt;br /&gt;▶▶ এই কাজে আপনাকে United States লোকেশনে All devices,E-mail Submit লিড জেনারেশন করতে হবে, প্রতি লিডের জন্যআপনি পাবেন&gt; $1.83&lt;br /&gt;&lt;br /&gt;▶▶ আপনার টার্গেট হবে মাত্র 12 টি লিড জেনারেট করা।($1.83×12) = $22.00&lt;br /&gt;&lt;br /&gt;▶▶ কাজটি কিভাবে সম্পন্ন করবেন?- https://t.ly/KyNl0[লিংকটি ব্রাউজারে সার্চ করুন]&lt;br /&gt;&lt;br /&gt;▶▶ কাজের লিংক পেতে এখনই এপ্লাই করুন।&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;Offer Details,&lt;br /&gt;&lt;br /&gt;(US) United States&lt;br /&gt;&lt;br /&gt;Offer tittel: StartACareerToday - YouTube Video Editor&lt;br /&gt;offer Description:Become a YouTube video editor!&lt;br/&gt;Category: E-mail Submit&lt;br /&gt;Device: All devices&lt;br /&gt;Incentive: No&lt;br /&gt;Converts on: E-mail Submit&lt;br /&gt;&lt;br /&gt;Converts Taget: 12&lt;br /&gt;Payout: $22.00&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;😍নতুন এ যারা কাজটি বুঝতে পারছেন না, তাদের জন্য রয়েছেভিডিওর ব্যবস্থা, লিংকটাকে কপি করে যে কোন ব্রাউজ এ গিয়েসার্চ করুন এই কাজটি আরো ভালোভাবে বুঝতে পারবেন।&lt;br/&gt;👉https://t.ly/BRevD&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;আপনার যোগ্যতা:&lt;br /&gt;● আপনার 10 টিরও বেশি ফেসবুক একাউন্ট থাকতে হবে।&lt;br/&gt;● আপনি টার্গেট অডিয়েন্সের কর্মক্ষেত্রে লিঙ্ক প্রমোশনকরার উপায়ে আগ্রহী হতে হবে।&lt;br /&gt;● আপনার উচ্চ মানের কাজের মানসিকতা এবং প্রতিনিয়তইপ্রায়োন করা সাধ্য হতে হবে।&lt;br /&gt;● আপনার সর্বপ্রথম টার্গেট লিড অ্যাপ্লাই হতে ধারাবাহিকটার্গেট লিড সম্পন্ন করার নিগুর মানসিকতা থাকতে হবে।&lt;br
                                                            /&gt;
                                                            &lt;br /&gt;
                                                            সুবিধাসমূহ:&lt;br /&gt;
                                                            ● আপনি চাইলে আমাদের সাথে লাইফটাইম কাজ করতে পারবেন।&lt;br
                                                            /&gt;
                                                            ● প্রফেশনাল এবং স্বান্তত্ত উদ্যমী পরিবেশে কাজ করতে আপনার
                                                            সুবিধামত স্বাধীনতা প্রদান হবে।&lt;br /&gt;
                                                            ● আমাদের দেওয়া লিংকে কোন ধরনের ল্যান্ডিং পেজ ব্যবহার
                                                            করতে হবে না, আপনি চাইলে ডিরেক্ট লিঙ্ক মার্কেটিং করতে
                                                            পারবেন।&lt;br /&gt;
                                                            ● স্পেশাল ম্যানেজার সাপোর্ট, আপনাকে হায়ার করার সাথে
                                                            সাথে WhatsApp পেয়ে যাবেন। BD[10.00AM - 10.OOPM]&lt;br
                                                            /&gt;
                                                            ● আপনি চাইলে আপনার ম্যানেজার WhatsApp থেকে প্রতিনিয়ত
                                                            নতুন লিংক নিয়ে কাজ করে যেতে পারবেন টার্গেট সম্পূর্ণ না
                                                            হওয়া পর্যন্ত।&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            অর্থ প্রদান:&lt;br /&gt;
                                                            ● একজন কর্মীর প্রথম এপ্লাই টার্গেট লিড অ্যামাউন্ট হতে
                                                            ধারাবাহিক এপ্লাই টার্গেটে অর্থ উপার্জন করতে সক্ষম
                                                            হবেন।&lt;br /&gt;
                                                            ● আপনার লিট জেনারেশন টার্গেট সম্পূর্ণ হয়ে যাওয়ার সাথে
                                                            সাথে GPS freelancer wallet এ আপনার উপার্জিত অর্থ দেখতে
                                                            পাবেন।&lt;br /&gt;
                                                            ● লিড জেনারেশন টার্গেট সম্পূর্ণ হওয়ার পূর্বে আপনার
                                                            ম্যানেজারের কাছ থেকে পাওয়া প্রতিটি লিংকের লিড ইনকাম,
                                                            লিড সংখ্যা, ক্লিক সংখ্যা &#039;লিড লিস্টে&#039; দেখতে
                                                            পাবেন।&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            &lt;br /&gt;
                                                            💌 যদি আপনি আমাদের চ্যালেঞ্জ গ্রহণ করার জন্য প্রস্তুত
                                                            এবং উপরে উল্লিখিত যোগ্যতা সম্পন্ন হন, তাহলে আমরা আপনার
                                                            সাথে সাক্ষাৎ করার জন্য অপেক্ষা করছি। আপনার সফলতা এবং
                                                            আগ্রহের প্রতিক্রিয়া আমাদের প্রাথমিক আকর্ষণ তৈরি
                                                            করেছে।&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            👉 আপনার আবেদন আমাদের প্রয়োজনীয়তা পূর্ণ করলে 12/24
                                                            ঘণ্টার মধ্যে আপনার ইনবক্সে ফিরে আসবো আপনার ম্যানেজার
                                                            WhatsApp ঠিকানা নিয়ে।💌&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            ◆বিশেষ দ্রষ্টব্য◆ আপনি পূর্বে এই কাজটির জন্য অ্যাপ্লাই
                                                            করে এখনো কাজ সম্পন্ন করতে না পারলে, আপনার ম্যানেজারের
                                                            সাথে যোগাযোগ করুন।😍</p>
                                                        <div
                                                            class="project-item-wrapper d-flex justify-content-start align-items-center mt-2 flex-wrap">

                                                            <div class="project-item me-2">
                                                                <p class="mb-0"><span class="me-1 icon"><i
                                                                            class="fa-solid fa-sack-dollar"></i></span>Spent:<span
                                                                        class="ms-1">0 Coins</span></p>
                                                            </div>
                                                            <div class="project-item">
                                                                <p class="mb-0"><span class="me-1 icon"><i
                                                                            class="fa-regular fa-clock"></i></span>Posted
                                                                    2 weeks ago</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="twm-right-content">
                                                        <div class="twm-jobs-category mobile_display_none green">
                                                            <span class="twm-bg-green">Project</span></div>
                                                        <div class="twm-jobs-amount custom"><span>Est.Budgets</span>
                                                            $ 22.00 </div>
                                                        <a href="personal-job-details/cpl-lead-generation-startacareertoday-youtube-video-editor.html"
                                                            class="twm-jobs-browse site-text-primary">Apply Now</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li style="list-style: none;  margin-bottom: 20px;">
                                                <div class="twm-jobs-list-style1  custom">

                                                    <div class="twm-mid-content project" style="padding-left: 0">
                                                        <small class="labled-job">Digital Social Marketing/ Link
                                                            Marketing</small>
                                                        <a href="personal-job-details/cpl-lead-generation-startacareertoday-work-from-home-disney-job-us.html"
                                                            class="twm-job-title">
                                                            <h4>CPL Lead Generation: StartACareerToday - Work From
                                                                Home Disney Job - (US)</h4>
                                                        </a>
                                                        <p class="project-content">আমরা দক্ষ লিঙ্ক মার্কেটিং কর্মী
                                                            নিয়োগ করতে চাই। আমাদের উদ্যমশীল টিমে যোগদান করে, আপনি
                                                            United States বাসীদের মধ্যে ফেসবুক গ্রুপের মাধ্যমে
                                                            আমাদের লিঙ্ক প্রমোশন করতে সাহায্য করবেন। তবে কাজটি
                                                            আপনারা বুঝতে না পেরে আবেদন সাবমিট করছেন, কাজ না বুঝে কেউ
                                                            আবেদন করবেন না😍&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            ▶▶ এই কাজে আপনাকে United States লোকেশনে All devices,
                                                            E-mail Submit লিড জেনারেশন করতে হবে, প্রতি লিডের জন্য
                                                            আপনি পাবেন&gt; $1.00&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            ▶▶ আপনার টার্গেট হবে মাত্র 2 টি লিড জেনারেট করা।
                                                            ($1.00×2) = $2.00&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            ▶▶ কাজটি কিভাবে সম্পন্ন করবেন?- https://t.ly/KyNl0
                                                            [লিংকটি ব্রাউজারে সার্চ করুন]&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            ▶▶ কাজের লিংক পেতে এখনই এপ্লাই করুন।&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            &lt;br /&gt;
                                                            Offer Details,&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            (US) United States&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            Offer tittel: StartACareerToday - Work From Home Disney
                                                            Job - (US)&lt;br /&gt;
                                                            offer Description: Work from home for Disney!&lt;br
                                                            /&gt;
                                                            Category: E-mail Submit&lt;br /&gt;
                                                            Device: All devices&lt;br /&gt;
                                                            Incentive: No&lt;br /&gt;
                                                            Converts on: E-mail Submit&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            Converts Taget: 02&lt;br /&gt;
                                                            Payout: $2.00&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            &lt;br /&gt;
                                                            😍নতুন এ যারা কাজটি বুঝতে পারছেন না, তাদের জন্য রয়েছে
                                                            ভিডিওর ব্যবস্থা, লিংকটাকে কপি করে যে কোন ব্রাউজ এ গিয়ে
                                                            সার্চ করুন এই কাজটি আরো ভালোভাবে বুঝতে পারবেন।&lt;br
                                                            /&gt;
                                                            👉https://t.ly/BRevD&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            &lt;br /&gt;
                                                            আপনার যোগ্যতা:&lt;br /&gt;
                                                            ● আপনার 10 টিরও বেশি ফেসবুক একাউন্ট থাকতে হবে।&lt;br
                                                            /&gt;
                                                            ● আপনি টার্গেট অডিয়েন্সের কর্মক্ষেত্রে লিঙ্ক প্রমোশন
                                                            করার উপায়ে আগ্রহী হতে হবে।&lt;br /&gt;
                                                            ● আপনার উচ্চ মানের কাজের মানসিকতা এবং প্রতিনিয়তই
                                                            প্রায়োন করা সাধ্য হতে হবে।&lt;br /&gt;
                                                            ● আপনার সর্বপ্রথম টার্গেট লিড অ্যাপ্লাই হতে ধারাবাহিক
                                                            টার্গেট লিড সম্পন্ন করার নিগুর মানসিকতা থাকতে হবে।&lt;br
                                                            /&gt;
                                                            &lt;br /&gt;
                                                            সুবিধাসমূহ:&lt;br /&gt;
                                                            ● আপনি চাইলে আমাদের সাথে লাইফটাইম কাজ করতে পারবেন।&lt;br
                                                            /&gt;
                                                            ● প্রফেশনাল এবং স্বান্তত্ত উদ্যমী পরিবেশে কাজ করতে আপনার
                                                            সুবিধামত স্বাধীনতা প্রদান হবে।&lt;br /&gt;
                                                            ● আমাদের দেওয়া লিংকে কোন ধরনের ল্যান্ডিং পেজ ব্যবহার
                                                            করতে হবে না, আপনি চাইলে ডিরেক্ট লিঙ্ক মার্কেটিং করতে
                                                            পারবেন।&lt;br /&gt;
                                                            ● স্পেশাল ম্যানেজার সাপোর্ট, আপনাকে হায়ার করার সাথে
                                                            সাথে WhatsApp পেয়ে যাবেন। BD[10.00AM - 10.OOPM]&lt;br
                                                            /&gt;
                                                            ● আপনি চাইলে আপনার ম্যানেজার WhatsApp থেকে প্রতিনিয়ত
                                                            নতুন লিংক নিয়ে কাজ করে যেতে পারবেন টার্গেট সম্পূর্ণ না
                                                            হওয়া পর্যন্ত।&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            অর্থ প্রদান:&lt;br /&gt;
                                                            ● একজন কর্মীর প্রথম এপ্লাই টার্গেট লিড অ্যামাউন্ট হতে
                                                            ধারাবাহিক এপ্লাই টার্গেটে অর্থ উপার্জন করতে সক্ষম
                                                            হবেন।&lt;br /&gt;
                                                            ● আপনার লিট জেনারেশন টার্গেট সম্পূর্ণ হয়ে যাওয়ার সাথে
                                                            সাথে GPS freelancer wallet এ আপনার উপার্জিত অর্থ দেখতে
                                                            পাবেন।&lt;br /&gt;
                                                            ● লিড জেনারেশন টার্গেট সম্পূর্ণ হওয়ার পূর্বে আপনার
                                                            ম্যানেজারের কাছ থেকে পাওয়া প্রতিটি লিংকের লিড ইনকাম,
                                                            লিড সংখ্যা, ক্লিক সংখ্যা &#039;লিড লিস্টে&#039; দেখতে
                                                            পাবেন।&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            &lt;br /&gt;
                                                            💌 যদি আপনি আমাদের চ্যালেঞ্জ গ্রহণ করার জন্য প্রস্তুত
                                                            এবং উপরে উল্লিখিত যোগ্যতা সম্পন্ন হন, তাহলে আমরা আপনার
                                                            সাথে সাক্ষাৎ করার জন্য অপেক্ষা করছি। আপনার সফলতা এবং
                                                            আগ্রহের প্রতিক্রিয়া আমাদের প্রাথমিক আকর্ষণ তৈরি
                                                            করেছে।&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            👉 আপনার আবেদন আমাদের প্রয়োজনীয়তা পূর্ণ করলে 12/24
                                                            ঘণ্টার মধ্যে আপনার ইনবক্সে ফিরে আসবো আপনার ম্যানেজার
                                                            WhatsApp ঠিকানা নিয়ে।💌&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            ◆বিশেষ দ্রষ্টব্য◆ আপনি পূর্বে এই কাজটির জন্য অ্যাপ্লাই
                                                            করে এখনো কাজ সম্পন্ন করতে না পারলে, আপনার ম্যানেজারের
                                                            সাথে যোগাযোগ করুন।😍</p>
                                                        <div
                                                            class="project-item-wrapper d-flex justify-content-start align-items-center mt-2 flex-wrap">

                                                            <div class="project-item me-2">
                                                                <p class="mb-0"><span class="me-1 icon"><i
                                                                            class="fa-solid fa-sack-dollar"></i></span>Spent:<span
                                                                        class="ms-1">0 Coins</span></p>
                                                            </div>
                                                            <div class="project-item">
                                                                <p class="mb-0"><span class="me-1 icon"><i
                                                                            class="fa-regular fa-clock"></i></span>Posted
                                                                    3 weeks ago</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="twm-right-content">
                                                        <div class="twm-jobs-category mobile_display_none green">
                                                            <span class="twm-bg-green">Project</span></div>
                                                        <div class="twm-jobs-amount custom"><span>Est.Budgets</span>
                                                            $ 2.00 </div>
                                                        <a href="personal-job-details/cpl-lead-generation-startacareertoday-work-from-home-disney-job-us.html"
                                                            class="twm-jobs-browse site-text-primary">Apply Now</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li style="list-style: none;  margin-bottom: 20px;">
                                                <div class="twm-jobs-list-style1  custom">

                                                    <div class="twm-mid-content project" style="padding-left: 0">
                                                        <small class="labled-job">Digital Social Marketing/ Link
                                                            Marketing</small>
                                                        <a href="personal-job-details/cpl-lead-generation-startacareertoday-walmart-us.html"
                                                            class="twm-job-title">
                                                            <h4>CPL Lead Generation: StartACareerToday - Walmart -
                                                                (US)</h4>
                                                        </a>
                                                        <p class="project-content">আমরা দক্ষ লিঙ্ক মার্কেটিং কর্মী
                                                            নিয়োগ করতে চাই। আমাদের উদ্যমশীল টিমে যোগদান করে, আপনি
                                                            United States বাসীদের মধ্যে ফেসবুক গ্রুপের মাধ্যমে
                                                            আমাদের লিঙ্ক প্রমোশন করতে সাহায্য করবেন। তবে কাজটি
                                                            আপনারা বুঝতে না পেরে আবেদন সাবমিট করছেন, কাজ না বুঝে কেউ
                                                            আবেদন করবেন না😍&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            ▶▶ এই কাজে আপনাকে United States লোকেশনে All devices,
                                                            E-mail Submit লিড জেনারেশন করতে হবে, প্রতি লিডের জন্য
                                                            আপনি পাবেন&gt; $1.33&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            ▶▶ আপনার টার্গেট হবে মাত্র 3 টি লিড জেনারেট করা।
                                                            ($1.33×3) = $4.00&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            ▶▶ কাজটি কিভাবে সম্পন্ন করবেন?- https://t.ly/KyNl0
                                                            [লিংকটি ব্রাউজারে সার্চ করুন]&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            ▶▶ কাজের লিংক পেতে এখনই এপ্লাই করুন।&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            &lt;br /&gt;
                                                            Offer Details,&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            (US) United States&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            Offer tittel: StartACareerToday - Walmart - (US)&lt;br
                                                            /&gt;
                                                            offer Description: Get your job at Walmart!&lt;br /&gt;
                                                            Category: E-mail Submit&lt;br /&gt;
                                                            Device: All devices&lt;br /&gt;
                                                            Incentive: No&lt;br /&gt;
                                                            Converts on: E-mail Submit&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            Converts Taget: 03&lt;br /&gt;
                                                            Payout: $4.00&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            &lt;br /&gt;
                                                            😍নতুন এ যারা কাজটি বুঝতে পারছেন না, তাদের জন্য রয়েছে
                                                            ভিডিওর ব্যবস্থা, লিংকটাকে কপি করে যে কোন ব্রাউজ এ গিয়ে
                                                            সার্চ করুন এই কাজটি আরো ভালোভাবে বুঝতে পারবেন।&lt;br
                                                            /&gt;
                                                            👉https://t.ly/BRevD&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            &lt;br /&gt;
                                                            আপনার যোগ্যতা:&lt;br /&gt;
                                                            ● আপনার 10 টিরও বেশি ফেসবুক একাউন্ট থাকতে হবে।&lt;br
                                                            /&gt;
                                                            ● আপনি টার্গেট অডিয়েন্সের কর্মক্ষেত্রে লিঙ্ক প্রমোশন
                                                            করার উপায়ে আগ্রহী হতে হবে।&lt;br /&gt;
                                                            ● আপনার উচ্চ মানের কাজের মানসিকতা এবং প্রতিনিয়তই
                                                            প্রায়োন করা সাধ্য হতে হবে।&lt;br /&gt;
                                                            ● আপনার সর্বপ্রথম টার্গেট লিড অ্যাপ্লাই হতে ধারাবাহিক
                                                            টার্গেট লিড সম্পন্ন করার নিগুর মানসিকতা থাকতে হবে।&lt;br
                                                            /&gt;
                                                            &lt;br /&gt;
                                                            সুবিধাসমূহ:&lt;br /&gt;
                                                            ● আপনি চাইলে আমাদের সাথে লাইফটাইম কাজ করতে পারবেন।&lt;br
                                                            /&gt;
                                                            ● প্রফেশনাল এবং স্বান্তত্ত উদ্যমী পরিবেশে কাজ করতে আপনার
                                                            সুবিধামত স্বাধীনতা প্রদান হবে।&lt;br /&gt;
                                                            ● আমাদের দেওয়া লিংকে কোন ধরনের ল্যান্ডিং পেজ ব্যবহার
                                                            করতে হবে না, আপনি চাইলে ডিরেক্ট লিঙ্ক মার্কেটিং করতে
                                                            পারবেন।&lt;br /&gt;
                                                            ● স্পেশাল ম্যানেজার সাপোর্ট, আপনাকে হায়ার করার সাথে
                                                            সাথে WhatsApp পেয়ে যাবেন। BD[10.00AM - 10.OOPM]&lt;br
                                                            /&gt;
                                                            ● আপনি চাইলে আপনার ম্যানেজার WhatsApp থেকে প্রতিনিয়ত
                                                            নতুন লিংক নিয়ে কাজ করে যেতে পারবেন টার্গেট সম্পূর্ণ না
                                                            হওয়া পর্যন্ত।&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            অর্থ প্রদান:&lt;br /&gt;
                                                            ● একজন কর্মীর প্রথম এপ্লাই টার্গেট লিড অ্যামাউন্ট হতে
                                                            ধারাবাহিক এপ্লাই টার্গেটে অর্থ উপার্জন করতে সক্ষম
                                                            হবেন।&lt;br /&gt;
                                                            ● আপনার লিট জেনারেশন টার্গেট সম্পূর্ণ হয়ে যাওয়ার সাথে
                                                            সাথে GPS freelancer wallet এ আপনার উপার্জিত অর্থ দেখতে
                                                            পাবেন।&lt;br /&gt;
                                                            ● লিড জেনারেশন টার্গেট সম্পূর্ণ হওয়ার পূর্বে আপনার
                                                            ম্যানেজারের কাছ থেকে পাওয়া প্রতিটি লিংকের লিড ইনকাম,
                                                            লিড সংখ্যা, ক্লিক সংখ্যা &#039;লিড লিস্টে&#039; দেখতে
                                                            পাবেন।&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            &lt;br /&gt;
                                                            💌 যদি আপনি আমাদের চ্যালেঞ্জ গ্রহণ করার জন্য প্রস্তুত
                                                            এবং উপরে উল্লিখিত যোগ্যতা সম্পন্ন হন, তাহলে আমরা আপনার
                                                            সাথে সাক্ষাৎ করার জন্য অপেক্ষা করছি। আপনার সফলতা এবং
                                                            আগ্রহের প্রতিক্রিয়া আমাদের প্রাথমিক আকর্ষণ তৈরি
                                                            করেছে।&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            👉 আপনার আবেদন আমাদের প্রয়োজনীয়তা পূর্ণ করলে 12/24
                                                            ঘণ্টার মধ্যে আপনার ইনবক্সে ফিরে আসবো আপনার ম্যানেজার
                                                            WhatsApp ঠিকানা নিয়ে।💌&lt;br /&gt;
                                                            &lt;br /&gt;
                                                            ◆বিশেষ দ্রষ্টব্য◆ আপনি পূর্বে এই কাজটির জন্য অ্যাপ্লাই
                                                            করে এখনো কাজ সম্পন্ন করতে না পারলে, আপনার ম্যানেজারের
                                                            সাথে যোগাযোগ করুন।😍</p>
                                                        <div
                                                            class="project-item-wrapper d-flex justify-content-start align-items-center mt-2 flex-wrap">

                                                            <div class="project-item me-2">
                                                                <p class="mb-0"><span class="me-1 icon"><i
                                                                            class="fa-solid fa-sack-dollar"></i></span>Spent:<span
                                                                        class="ms-1">0 Coins</span></p>
                                                            </div>
                                                            <div class="project-item">
                                                                <p class="mb-0"><span class="me-1 icon"><i
                                                                            class="fa-regular fa-clock"></i></span>Posted
                                                                    3 weeks ago</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="twm-right-content">
                                                        <div class="twm-jobs-category mobile_display_none green">
                                                            <span class="twm-bg-green">Project</span></div>
                                                        <div class="twm-jobs-amount custom"><span>Est.Budgets</span>
                                                            $ 4.00 </div>
                                                        <a href="personal-job-details/cpl-lead-generation-startacareertoday-walmart-us.html"
                                                            class="twm-jobs-browse site-text-primary">Apply Now</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="twm-jobs-grid-wrap">
                                <div class="row">
                                    @foreach ($gigs as $key => $gig)
                                        @include('partials.gig')
                                    @endforeach
                                    {{-- <div class="col-lg-4 col-md-12 m-b10 ">
                                        <div class="gigs-wrapper">
                                            <div class="gigs-image">

                                                <div id="demo-32" class="carousel slide" data-bs-ride="carousel"
                                                    data-bs-interval="false" data-bs-pause="hover">


                                                    <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#demo-32"
                                                            data-bs-slide-to="0" class="active"></button>
                                                    </div>


                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="{{ asset('assets/frontend/service/banner/1687584836_8306e31a.png') }}"
                                                                alt="Los Angeles" class="d-block"
                                                                style="width:100%">
                                                        </div>
                                                    </div>


                                                    <button class="carousel-control-prev" type="button"
                                                        data-bs-target="#demo-32" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon"></span>
                                                    </button>

                                                    <button class="carousel-control-next" type="button"
                                                        data-bs-target="#demo-32" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon"></span>
                                                    </button>
                                                </div>

                                            </div>
                                            <div class="gigs-content">
                                                <a href="#"
                                                    class="twm-job-title">
                                                    <h4>I Will Create A Short Video For YouTube Short/TikTok (Up to
                                                        1 Min)</h4>
                                                </a>
                                                <div class="gigs-rating-wrap">
                                                    <p><span class="rating-icon me-1"><i
                                                                class="fa-solid fa-star"></i></span><span
                                                            class="rating-averge">5</span><span
                                                            class="total-rating">(2)</span></p>
                                                </div>
                                            </div>
                                            <div
                                                class="gigs-footer d-flex justify-content-between align-items-center">
                                                <div class="gigs-content-left">
                                                </div>
                                                <div class="gigs-content-right">
                                                    <span><small>STARTING AT</small> $ 4.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 m-b10 ">
                                        <div class="gigs-wrapper">
                                            <div class="gigs-image">

                                                <div id="demo-21" class="carousel slide" data-bs-ride="carousel"
                                                    data-bs-interval="false" data-bs-pause="hover">


                                                    <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#demo-21"
                                                            data-bs-slide-to="0" class="active"></button>
                                                    </div>


                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="{{ asset('assets/frontend/service/banner/1687521688_c5ab92e9.jpg') }}"
                                                                alt="Los Angeles" class="d-block"
                                                                style="width:100%">
                                                        </div>
                                                    </div>


                                                    <button class="carousel-control-prev" type="button"
                                                        data-bs-target="#demo-21" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon"></span>
                                                    </button>

                                                    <button class="carousel-control-next" type="button"
                                                        data-bs-target="#demo-21" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon"></span>
                                                    </button>
                                                </div>

                                            </div>
                                            <div class="gigs-content">
                                                <a href="service-details/i-will-remove-10-image-background.html"
                                                    class="twm-job-title">
                                                    <h4>I Will Remove 10 Image background</h4>
                                                </a>
                                                <div class="gigs-rating-wrap">
                                                    <p><span class="rating-icon me-1"><i
                                                                class="fa-solid fa-star"></i></span><span
                                                            class="rating-averge">5</span><span
                                                            class="total-rating">(1)</span></p>
                                                </div>
                                            </div>
                                            <div
                                                class="gigs-footer d-flex justify-content-between align-items-center">
                                                <div class="gigs-content-left">
                                                </div>
                                                <div class="gigs-content-right">
                                                    <span><small>STARTING AT</small> $ 4.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 m-b10 ">
                                        <div class="gigs-wrapper">
                                            <div class="gigs-image">

                                                <div id="demo-10" class="carousel slide" data-bs-ride="carousel"
                                                    data-bs-interval="false" data-bs-pause="hover">


                                                    <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#demo-10"
                                                            data-bs-slide-to="0" class="active"></button>
                                                    </div>


                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="{{ asset('assets/frontend/service/banner/1687508763_YouTube%20(1).jpg') }}"
                                                                alt="Los Angeles" class="d-block"
                                                                style="width:100%">
                                                        </div>
                                                    </div>


                                                    <button class="carousel-control-prev" type="button"
                                                        data-bs-target="#demo-10" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon"></span>
                                                    </button>

                                                    <button class="carousel-control-next" type="button"
                                                        data-bs-target="#demo-10" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon"></span>
                                                    </button>
                                                </div>

                                            </div>
                                            <div class="gigs-content">
                                                <a href="service-details/i-will-give-300-subscribe-veiws-like-500-minute-watch-time.html"
                                                    class="twm-job-title">
                                                    <h4>I will give 300 Subscribe, veiws, like &amp; 500 minute
                                                        watch time</h4>
                                                </a>
                                                <div class="gigs-rating-wrap">
                                                    <p><span class="rating-icon me-1"><i
                                                                class="fa-solid fa-star"></i></span><span
                                                            class="rating-averge">4.7</span><span
                                                            class="total-rating">(7)</span></p>
                                                </div>
                                            </div>
                                            <div
                                                class="gigs-footer d-flex justify-content-between align-items-center">
                                                <div class="gigs-content-left">
                                                </div>
                                                <div class="gigs-content-right">
                                                    <span><small>STARTING AT</small> $ 20.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 m-b10 ">
                                        <div class="gigs-wrapper">
                                            <div class="gigs-image">

                                                <div id="demo-49" class="carousel slide" data-bs-ride="carousel"
                                                    data-bs-interval="false" data-bs-pause="hover">


                                                    <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#demo-49"
                                                            data-bs-slide-to="0" class="active"></button>
                                                    </div>


                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="{{ asset('assets/frontend/service/banner/1688061661_offer961639663429.jpg') }}"
                                                                alt="Los Angeles" class="d-block"
                                                                style="width:100%">
                                                        </div>
                                                    </div>


                                                    <button class="carousel-control-prev" type="button"
                                                        data-bs-target="#demo-49" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon"></span>
                                                    </button>

                                                    <button class="carousel-control-next" type="button"
                                                        data-bs-target="#demo-49" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon"></span>
                                                    </button>
                                                </div>

                                            </div>
                                            <div class="gigs-content">
                                                <a href="service-details/i-will-give-you-1000-hours-of-organic-youtube-watchtime.html"
                                                    class="twm-job-title">
                                                    <h4>I will give you 1000 hours of Organic YouTube WatchTime</h4>
                                                </a>
                                                <div class="gigs-rating-wrap">
                                                    <p><span class="rating-icon me-1"><i
                                                                class="fa-solid fa-star"></i></span><span
                                                            class="rating-averge">4.7</span><span
                                                            class="total-rating">(6)</span></p>
                                                </div>
                                            </div>
                                            <div
                                                class="gigs-footer d-flex justify-content-between align-items-center">
                                                <div class="gigs-content-left">
                                                </div>
                                                <div class="gigs-content-right">
                                                    <span><small>STARTING AT</small> $ 17.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 m-b10 ">
                                        <div class="gigs-wrapper">
                                            <div class="gigs-image">

                                                <div id="demo-14" class="carousel slide" data-bs-ride="carousel"
                                                    data-bs-interval="false" data-bs-pause="hover">


                                                    <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#demo-14"
                                                            data-bs-slide-to="0" class="active"></button>
                                                        <button type="button" data-bs-target="#demo-14"
                                                            data-bs-slide-to="1" class=""></button>
                                                    </div>


                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="{{ asset('assets/frontend/service/banner/1687514220_SEO%20Friendly%20(1).jpg') }}"
                                                                alt="Los Angeles" class="d-block"
                                                                style="width:100%">
                                                        </div>
                                                        <div class="carousel-item ">
                                                            <img src="{{ asset('assets/frontend/service/banner/1687514220_c60f5310.jpg') }}"
                                                                alt="Los Angeles" class="d-block"
                                                                style="width:100%">
                                                        </div>
                                                    </div>


                                                    <button class="carousel-control-prev" type="button"
                                                        data-bs-target="#demo-14" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon"></span>
                                                    </button>

                                                    <button class="carousel-control-next" type="button"
                                                        data-bs-target="#demo-14" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon"></span>
                                                    </button>
                                                </div>

                                            </div>
                                            <div class="gigs-content">
                                                <a href="#"
                                                    class="twm-job-title">
                                                    <h4>I Will Design One Attractive Thumbnail</h4>
                                                </a>
                                                <div class="gigs-rating-wrap">
                                                    <p><span class="rating-icon me-1"><i
                                                                class="fa-solid fa-star"></i></span><span
                                                            class="rating-averge">5</span><span
                                                            class="total-rating">(2)</span></p>
                                                </div>
                                            </div>
                                            <div
                                                class="gigs-footer d-flex justify-content-between align-items-center">
                                                <div class="gigs-content-left">
                                                </div>
                                                <div class="gigs-content-right">
                                                    <span><small>STARTING AT</small> $ 2.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <div class="section-full p-t60 p-b60 twm-for-employee-area site-bg-white">
            <div class="container">

                <div class="section-content">
                    <div class="row">

                        <div class="col-lg-5 col-md-12">
                            <div class="twm-explore-media-wrap">
                                <div class="twm-media">
                                    <img src="{{ asset($about->image) }}" alt="{{ $about->title }}">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-12">
                            <div class="twm-explore-content-outer-3">

                                <div class="twm-explore-content-3">
                                    <div class="twm-title-small">About Us</div>
                                    <div class="twm-title-large">
                                        <h2>{{ $about->title }}</h2>
                                        <p>{{ $about->description }}</p>
                                    </div>
                                    <div class="twm-upload-file">
                                        <button type="button" class="site-button">Read More <i class="feather-chevron-right"></i></button>
                                    </div>

                                </div>

                                <div class="twm-l-line-1"></div>
                                <div class="twm-l-line-2"></div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>





        <div class="section-full p-t80 p-b80 site-bg-gray twm-testimonial-2-area">


            <div class="section-head center wt-small-separator-outer">
                <div class="wt-small-separator site-text-primary">
                    <div>Clients Testimonials</div>
                </div>
                <h2 class="wt-title">What Our Customers Say About Us</h2>
            </div>


            <div class="container">

                <div class="section-content">

                    <div class="owl-carousel twm-testimonial-2-carousel owl-btn-bottom-center ">

                        @foreach ($testimonials as $testimonial)
                            <div class="item ">
                                <div class="twm-testimonial-2">
                                    <div class="twm-testimonial-2-content">
                                        <div class="twm-testi-media">
                                            <img src="{{ asset($testimonial->image) }}" alt="{{ $testimonial->name }}">
                                        </div>
                                        <div class="twm-testi-content">
                                            <div class="twm-quote">
                                                <img src="{{ asset('assets/frontend/user/images/quote-dark.png') }}" alt="">
                                            </div>
                                            <div class="twm-testi-info">{{ $testimonial->description }}</div>
                                            <div class="twm-testi-detail">
                                                <div class="twm-testi-name">{{ $testimonial->name }}</div>
                                                <div class="twm-testi-position">{{ $testimonial->title }}</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>



        <div class="section-full p-t60 p-b60 site-bg-white twm-companies-wrap">

            <div class="section-head center wt-small-separator-outer mb-2 mb-md-5">
                <div class="wt-small-separator site-text-primary">
                    <div>Payment Gateway</div>
                </div>
                <h2 class="wt-title">Our Payment Partner's</h2>
            </div>
            <div class="container">
                <div class="section-content">
                    <div class="owl-carousel home-client-carousel2 owl-btn-vertical-center">
                        @foreach ($getways as $getway)
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);">
                                            <img src="{{ asset($getway->logo) }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



