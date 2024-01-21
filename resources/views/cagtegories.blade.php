@extends('layouts.app_user')
@section('content')
<div class="page-content">

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center"
        style="background-image:url({{ asset('assets/frontend/user/images/banner/1.jpg') }});">

        <div class="overlay-main site-bg-white opacity-01"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">All Category</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ route('frontend.index') }}">Home</a></li>
                        <li>All Category</li>
                    </ul>
                </div>

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- JOBS CATEGORIES SECTION START -->
    <div class="section-full p-t70 p-b70 site-bg-gray twm-job-categories-area2">
        <!-- TITLE START-->
        <div class="section-head center wt-small-separator-outer pb-4">
            <div class="wt-small-separator site-text-primary">
                <div>Jobs by Categories</div>
            </div>
            <h2 class="wt-title">Choose the category according to your skills</h2>
        </div>
        <!-- TITLE END-->

        <div class="container">

            <div class="twm-job-categories-section-3">

                <div class="job-categories-style3">
                    <div class="row">

                        @foreach ($cagtegories as $category)
                            <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 m-b30">
                                <div class="job-categories-3-wrap">
                                    <div class="job-categories-3">
                                        <div class="twm-media">
                                            <div class="flaticon-dashboard"></div>
                                        </div>
                                        <div class="twm-content">
                                            <div class="twm-jobs-available">{{ $category->total_jobs }} Jobs</div>
                                            <a href="#">{{ $category->category_name }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach



                        <nav class="d-flex justify-items-center justify-content-between">
                            <div class="d-flex justify-content-between flex-fill d-sm-none">
                                <ul class="pagination">

                                    {{ $cagtegories->withQueryString()->links() }}
                                </ul>
                            </div>

                            <div
                                class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
                                <div>
                                    <p class="small text-muted">
                                        Showing
                                        <span class="fw-semibold">37</span>
                                        to
                                        <span class="fw-semibold">54</span>
                                        of
                                        <span class="fw-semibold">84</span>
                                        results
                                    </p>
                                </div>

                                <div>
                                    <ul class="pagination">

                                        <li class="page-item">
                                            <a class="page-link" href="categories4658.html?page=2" rel="prev"
                                                aria-label="&laquo; Previous">&lsaquo;</a>
                                        </li>





                                        <li class="page-item"><a class="page-link"
                                                href="categories2679.html?page=1">1</a></li>
                                        <li class="page-item"><a class="page-link"
                                                href="categories4658.html?page=2">2</a></li>
                                        <li class="page-item active" aria-current="page"><span
                                                class="page-link">3</span></li>
                                        <li class="page-item"><a class="page-link"
                                                href="categoriesfdb0.html?page=4">4</a></li>
                                        <li class="page-item"><a class="page-link"
                                                href="categoriesaf4d.html?page=5">5</a></li>


                                        <li class="page-item">
                                            <a class="page-link" href="categoriesfdb0.html?page=4" rel="next"
                                                aria-label="Next &raquo;">&rsaquo;</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
