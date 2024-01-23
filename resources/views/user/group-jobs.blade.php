@extends('layouts.app_user')
@section('content')
    <div class="page-content">
        <div class="wt-bnr-inr overlay-wraper bg-center"
            style="background-image:url({{ asset('assets/frontend/user/images/banner/1.jpg)') }}">
            <div class="overlay-main site-bg-white opacity-01"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h2 class="wt-title">The Most Exciting Group Job</h2>
                        </div>
                    </div>
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="index.html">Home</a></li>
                            <li>Group Job List</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>




        <div class="section-full p-t70  p-70 site-bg-white">


            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-12 rightSidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1628.5px;">
                        <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: absolute; transform: translateY(695.219px); width: 525.984px; top: 0px;">
                            <div class="side-bar">
                                <div class="sidebar-elements search-bx">
                                    <form action="{{ route('user.filter.job') }}" method="GET">
                                        <div class="form-group mb-4">
                                            <h4 class="section-head-small mb-4">Category</h4>
                                            <div class="dropdown bootstrap-select wt-select-bar-large filter_item">
                                                <select id="category" name="category_id" class="wt-select-bar-large selectpicker filter_item" data-live-search="true" data-bv-field="size">
                                                    <option value="">All Category</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                    @endforeach
                                                </select>

                                                <div class="dropdown-menu ">
                                                    <div class="bs-searchbox">
                                                        <input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-1" aria-autocomplete="list"></div>
                                                    <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
                                                        <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-4 mobile_display_none">
                                            <h4 class="section-head-small mb-4">Keyword</h4>
                                            <div class="input-group">
                                                <input id="keyword" type="text" name="keyword" class="form-control filter_item"
                                                    value="" placeholder="Job Title or Keyword">
                                                <button class="btn" type="button"><i
                                                        class="feather-search"></i></button>
                                            </div>
                                        </div>

                                        <div class="twm-sidebar-ele-filter mobile_display_none">
                                            <h4 class="section-head-small mb-4">Date Posts</h4>
                                            <ul>
                                                <li>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input filter_item" value="0" id="last_hour" name="date_post">
                                                        <label class="form-check-label" for="last_hour">Last hour</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input filter_item" value="1" id="1_day" name="date_post">
                                                        <label class="form-check-label" for="1_day">Last 24
                                                            hours</label>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input filter_item" value="7" id="7_day" name="date_post">
                                                        <label class="form-check-label" for="7_day">Last 7 days</label>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input filter_item" value="14" id="14_day" name="date_post">
                                                        <label class="form-check-label" for="14_day">Last 14
                                                            days</label>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input filter_item" value="30" id="30_day" name="date_post">
                                                        <label class="form-check-label" for="30_day">Last 30
                                                            days</label>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input filter_item" value="all" id="all_day" name="date_post">
                                                        <label class="form-check-label" for="all_day">All</label>
                                                    </div>
                                                </li>

                                            </ul>
                                            <button class="site-button" type="submit">Filter</button>
                                        </div>
                                    </form>

                                </div>

                            </div>
                            <div class="twm-advertisment mobile_display_none">
                                <div class="owl-carousel ads-carousel owl-loaded owl-drag">

                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="transform: translate3d(-1397px, 0px, 0px); transition: all 0.25s ease 0s; width: 3262px;">
                                            {{-- <div class="owl-item cloned" style="width: 465.984px;">
                                                <div class="item ads-content-item">
                                                    <div class="aci-inner"
                                                        onclick="window.open('https://youtu.be/sNzgEIZH_d4?si=6XiwAwH3rGvh9AJs', '_blank')">
                                                        <div class="twm-tesi-top-ads">
                                                            <span class="span">Ads</span>
                                                        </div>
                                                        <div class="ads-content-wrap"
                                                            style="background-image: url('https://gpsfreelancer.com/uploads/userSave/ads/banner/1704050862.jpg')">
                                                            <div class="twm-testi-detail">
                                                                <div class="twm-testi-name">Service Post</div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 465.984px;">
                                                <div class="item ads-content-item">
                                                    <div class="aci-inner"
                                                        onclick="window.open('https://youtu.be/vs65pUmhCQ4', '_blank')">
                                                        <div class="twm-tesi-top-ads">
                                                            <span class="span">Ads</span>
                                                        </div>
                                                        <div class="ads-content-wrap"
                                                            style="background-image: url('https://gpsfreelancer.com/uploads/userSave/ads/banner/1694613070.png')">
                                                            <div class="twm-testi-detail">
                                                                <div class="twm-testi-name">Withdraw GPS Freelancer</div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 465.984px;">
                                                <div class="item ads-content-item">
                                                    <div class="aci-inner"
                                                        onclick="window.open('https://sites.google.com/view/workerupport/home', '_blank')">
                                                        <div class="twm-tesi-top-ads">
                                                            <span class="span">Ads</span>
                                                        </div>
                                                        <div class="ads-content-wrap"
                                                            style="background-image: url('https://gpsfreelancer.com/uploads/userSave/ads/banner/1696910608.png')">
                                                            <div class="twm-testi-detail">
                                                                <div class="twm-testi-name">ওয়ার্কারদের সমস্যা সমাধানে
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}

                                            @foreach (advertisements() as $slide)
                                                <div class="owl-item cloned" style="width: 465.984px;">
                                                    <div class="item ads-content-item">
                                                        <div class="aci-inner"
                                                            onclick="window.open('{{ $slide->link }}', '_blank')">
                                                            <div class="twm-tesi-top-ads">
                                                                <span class="span">Ads</span>
                                                            </div>
                                                            <div class="ads-content-wrap"
                                                                style="background-image: url('{{ asset($slide->image) }}')">
                                                                <div class="twm-testi-detail">
                                                                    <div class="twm-testi-name">{{ $slide->title }}</div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="owl-item" style="width: 465.984px;">
                                                    <div class="item ads-content-item">
                                                        <div class="aci-inner"
                                                            onclick="window.open('https://sites.google.com/view/workerupport/home', '_blank')">
                                                            <div class="twm-tesi-top-ads">
                                                                <span class="span">Ads</span>
                                                            </div>
                                                            <div class="ads-content-wrap"
                                                                style="background-image: url('https://gpsfreelancer.com/uploads/userSave/ads/banner/1696910608.png')">
                                                                <div class="twm-testi-detail">
                                                                    <div class="twm-testi-name">ওয়ার্কারদের সমস্যা সমাধানে
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            @endforeach
                                        </div>
                                    </div>
                                    {{-- <div class="owl-nav disabled"><button type="button" role="presentation"
                                            class="owl-prev"><span aria-label="Previous">‹</span></button><button
                                            type="button" role="presentation" class="owl-next"><span
                                                aria-label="Next">›</span></button></div>
                                    <div class="owl-dots"><button role="button"
                                            class="owl-dot"><span></span></button><button role="button"
                                            class="owl-dot active"><span></span></button><button role="button"
                                            class="owl-dot"><span></span></button></div> --}}
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-8 col-md-12">

                        <div class="row" id="table_data">
                            @foreach ($jobs as $job)
                                @include('partials.job-post')
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 5000.
            });
        });
    </script>
@endsection
