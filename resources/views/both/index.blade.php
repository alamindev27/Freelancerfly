@extends('layouts.app_user')
@section('styles')
    <style>
        .all-dashboard-icon{
            width: 13px !important;
        }
    </style>
@endsection
@section('content')
    <div class="page-wraper" style="transform: none;">
        <div class="page-content" style="transform: none;">
            <div class="section-full p-t70  p-b70 site-bg-white" style="transform: none;">
                <div class="container" style="transform: none;">
                    <div class="row" style="transform: none;">

                        @include('partials.profile-sidebar')

                        <div class="col-xl-9 col-lg-8 col-md-12 m-b30">

                            <div class="twm-right-section-panel site-bg-gray">
                                <div class="twm-dash-b-blocks mb-2">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-6 mb-3">
                                            <div class="panel panel-default">
                                                <div class="panel-body wt-panel-body dashboard-card-2 block-gradient">
                                                    <div class="wt-card-wrap-2">
                                                        <div class="wt-card-icon-2"><i class="flaticon-job"></i></div>
                                                        <div class="wt-card-right wt-total-active-listing counter ">0</div>
                                                        <div class="wt-card-bottom-2 ">
                                                            <h4 class="m-b0">Posted Group Jobs</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-6 mb-3">
                                            <div class="panel panel-default">
                                                <div class="panel-body wt-panel-body dashboard-card-2 block-gradient-2">
                                                    <div class="wt-card-wrap-2">
                                                        <div class="wt-card-icon-2"><i class="flaticon-resume"></i></div>
                                                        <div class="wt-card-right  wt-total-listing-view counter ">0</div>
                                                        <div class="wt-card-bottom-2">
                                                            <h4 class="m-b0">Posted Personal Jobs</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-3 col-6 mb-3">
                                            <div class="panel panel-default">
                                                <div class="panel-body wt-panel-body dashboard-card-2 block-gradient-3">
                                                    <div class="wt-card-wrap-2">
                                                        <div class="wt-card-icon-2"><i class="flaticon-job"></i></div>
                                                        <div class="wt-card-right wt-total-listing-review counter ">0</div>
                                                        <div class="wt-card-bottom-2">
                                                            <h4 class="m-b0">Total Service Order</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-xl-3 col-lg-3 col-md-3 col-6 mb-3">
                                            <div class="panel panel-default"
                                                onclick="window.location.href='https://gpsfreelancer.com/all-notifications'"
                                                style="cursor:pointer">
                                                <div class="panel-body wt-panel-body dashboard-card-2 block-gradient-4">
                                                    <div class="wt-card-wrap-2">
                                                        <div class="wt-card-icon-2"><i class="flaticon-bell"></i></div>
                                                        <div class="wt-card-right wt-total-listing-bookmarked counter ">0
                                                        </div>
                                                        <div class="wt-card-bottom-2">
                                                            <h4 class="m-b0">Notifications</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="panel panel-default">
                                        <div class="panel-heading wt-panel-heading p-a20 mb-3">
                                            <h4 class="panel-tittle m-a0">Overview</h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mb-2">
                                                <h4 class="mb-1">{{ auth()->user()->title }}</h4>

                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <p>{{ auth()->user()->overview }}</p>
                                            </div>

                                            {{-- <div class="col-md-12 mb-2 mt-4">
                                                <h5 class="d-block">Portfolio</h5>
                                                <p class="mb-0">Talent who add portfolios to their profile are more
                                                    likely to win work.</p>
                                                <div class="tw-sidebar-gallery-2 mt-2">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                                            <div class="tw-service-gallery-thumb">
                                                                <a class="elem"
                                                                    href="https://gpsfreelancer.com/uploads/service/portfolio/1693107942__DSC9833.JPG"
                                                                    title="Portfolio" data-lcl-author=""
                                                                    data-lcl-thumb="https://gpsfreelancer.com/uploads/service/portfolio/1693107942__DSC9833.JPG">
                                                                    <img src="https://gpsfreelancer.com/uploads/service/portfolio/1693107942__DSC9833.JPG"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                                            <div class="tw-service-gallery-thumb">
                                                                <a class="elem"
                                                                    href="https://gpsfreelancer.com/uploads/service/portfolio/1693107946__DSC9833.JPG"
                                                                    title="Portfolio" data-lcl-author=""
                                                                    data-lcl-thumb="https://gpsfreelancer.com/uploads/service/portfolio/1693107946__DSC9833.JPG">
                                                                    <img src="https://gpsfreelancer.com/uploads/service/portfolio/1693107946__DSC9833.JPG"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            {{-- <div class="row">
                                                <div class="widget tw-sidebar-tags-wrap">
                                                    <h5 class=" mb-4">Skill and Expertise</h5>
                                                    <div class="tagcloud">
                                                        <p class="text-danger mb-0">N/A</p>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="row">
                                                <div class="Personal-information-details">
                                                    <h5 class="d-block mb-4">Personal Info</h5>
                                                    <div
                                                        class="personal-info-wrapper d-flex justify-content-start flex-wrap gap-2">
                                                        <div class="personal-info-item">
                                                            <h6>User ID:</h6>
                                                            <p>{{ auth()->user()->profile_id }}</p>
                                                        </div>
                                                        <div class="personal-info-item">
                                                            <h6>Your Name:</h6>
                                                            <p>{{ auth()->user()->name }}</p>
                                                        </div>
                                                        <div class="personal-info-item">
                                                            <h6>Phone:</h6>
                                                            <p>{{ auth()->user()->phone ?? 'N/A' }}</p>
                                                        </div>
                                                        <div class="personal-info-item">
                                                            <h6>Email Address:</h6>
                                                            <p>{{ auth()->user()->email }}</p>
                                                        </div>
                                                        <div class="personal-info-item">
                                                            <h6>Facebook:</h6>
                                                            <p>{{ auth()->user()->facebook ?? 'N/A' }}</p>
                                                        </div>
                                                        <div class="personal-info-item">
                                                            <h6>Language:</h6>
                                                            <p>{{ auth()->user()->language ?? 'N/A' }}</p>
                                                        </div>
                                                        <div class="personal-info-item">
                                                            <h6>Age:</h6>
                                                            <p>{{ auth()->user()->age ?? 'N/A' }}</p>
                                                        </div>
                                                        <div class="personal-info-item">
                                                            <h6>Country:</h6>
                                                            <p>{{ auth()->user()->country ?? 'N/A' }}</p>
                                                        </div>
                                                        <div class="personal-info-item">
                                                            <h6>City:</h6>
                                                            <p>{{ auth()->user()->city ?? 'N/A' }}</p>
                                                        </div>
                                                        <div class="personal-info-item">
                                                            <h6>Postcode:</h6>
                                                            <p>{{ auth()->user()->postcode ?? 'N/A' }}</p>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="personal-info-item">
                                                                <h6>Full Address:</h6>
                                                                <p>{{ auth()->user()->full_address ?? 'N/A' }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="twm-pro-view-chart-wrap">
                                    <div class="row">

                                        <div class="col-lg-12 col-md-12 mb-4">
                                            <div class="panel panel-default site-bg-white m-t30">
                                                <div class="panel-heading wt-panel-heading p-a20">
                                                    <h4 class="panel-tittle m-a0">
                                                        <svg class="svg-inline--fa fa-rectangle-list me-3 all-dashboard-icon" aria-hidden="true" focusable="false" data-prefix="far" data-icon="rectangle-list" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M128 192C110.3 192 96 177.7 96 160C96 142.3 110.3 128 128 128C145.7 128 160 142.3 160 160C160 177.7 145.7 192 128 192zM200 160C200 146.7 210.7 136 224 136H448C461.3 136 472 146.7 472 160C472 173.3 461.3 184 448 184H224C210.7 184 200 173.3 200 160zM200 256C200 242.7 210.7 232 224 232H448C461.3 232 472 242.7 472 256C472 269.3 461.3 280 448 280H224C210.7 280 200 269.3 200 256zM200 352C200 338.7 210.7 328 224 328H448C461.3 328 472 338.7 472 352C472 365.3 461.3 376 448 376H224C210.7 376 200 365.3 200 352zM128 224C145.7 224 160 238.3 160 256C160 273.7 145.7 288 128 288C110.3 288 96 273.7 96 256C96 238.3 110.3 224 128 224zM128 384C110.3 384 96 369.7 96 352C96 334.3 110.3 320 128 320C145.7 320 160 334.3 160 352C160 369.7 145.7 384 128 384zM0 96C0 60.65 28.65 32 64 32H512C547.3 32 576 60.65 576 96V416C576 451.3 547.3 480 512 480H64C28.65 480 0 451.3 0 416V96zM48 96V416C48 424.8 55.16 432 64 432H512C520.8 432 528 424.8 528 416V96C528 87.16 520.8 80 512 80H64C55.16 80 48 87.16 48 96z">
                                                            </path>
                                                        </svg><!-- <i class="far fa-list-alt me-3"></i> Font Awesome fontawesome.com -->Recent Activities</h4>
                                                </div>
                                                <div class="panel-body wt-panel-body">

                                                    <div class="dashboard-list-box list-box-with-icon">
                                                        <ul>
                                                            <li>
                                                                <svg class="svg-inline--fa fa-list-check text-info list-box-icon all-dashboard-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="list-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                                    <path fill="currentColor"
                                                                        d="M184.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L39 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L39 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM256 96c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H288c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H288c-17.7 0-32-14.3-32-32zM192 416c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H224c-17.7 0-32-14.3-32-32zM80 464c-26.5 0-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48s-21.5 48-48 48z">
                                                                    </path>
                                                                </svg><!-- <i class="fa fa-tasks text-info list-box-icon"></i> Font Awesome fontawesome.com -->
                                                                Your groupjob submission has been accepted. Job Title:Offer
                                                                Complete
                                                                <a href="https://gpsfreelancer.com/user-notification-delete/277253"
                                                                    class="close-list-item color-lebel clr-red">
                                                                    <svg class="svg-inline--fa fa-trash-can all-dashboard-icon" aria-hidden="true" focusable="false" data-prefix="far" data-icon="trash-can" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                        <path fill="currentColor"
                                                                            d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z">
                                                                        </path>
                                                                    </svg><!-- <i class="far fa-trash-alt"></i> Font Awesome fontawesome.com -->
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <svg class="svg-inline--fa fa-list-check text-info list-box-icon all-dashboard-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="list-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                                    <path fill="currentColor"
                                                                        d="M184.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L39 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L39 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM256 96c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H288c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H288c-17.7 0-32-14.3-32-32zM192 416c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H224c-17.7 0-32-14.3-32-32zM80 464c-26.5 0-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48s-21.5 48-48 48z">
                                                                    </path>
                                                                </svg><!-- <i class="fa fa-tasks text-info list-box-icon"></i> Font Awesome fontawesome.com -->
                                                                Your groupjob submission has been rejected for . Job
                                                                title:PDF File: Download Offer
                                                                <a href="https://gpsfreelancer.com/user-notification-delete/273984"
                                                                    class="close-list-item color-lebel clr-red">
                                                                    <svg class="svg-inline--fa fa-trash-can all-dashboard-icon" aria-hidden="true" focusable="false" data-prefix="far" data-icon="trash-can" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                        <path fill="currentColor"
                                                                            d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z">
                                                                        </path>
                                                                    </svg><!-- <i class="far fa-trash-alt"></i> Font Awesome fontawesome.com -->
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <svg class="svg-inline--fa fa-suitcase text-danger list-box-icon all-dashboard-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="suitcase" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                    <path fill="currentColor"
                                                                        d="M176 56V96H336V56c0-4.4-3.6-8-8-8H184c-4.4 0-8 3.6-8 8zM128 96V56c0-30.9 25.1-56 56-56H328c30.9 0 56 25.1 56 56V96v32V480H128V128 96zM64 96H96V480H64c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64zM448 480H416V96h32c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64z">
                                                                    </path>
                                                                </svg><!-- <i class="fa fa-suitcase text-danger list-box-icon"></i> Font Awesome fontawesome.com -->
                                                                Your $1 transaction amount has been rejected for
                                                                <a href="https://gpsfreelancer.com/user-notification-delete/271214"
                                                                    class="close-list-item color-lebel clr-red">
                                                                    <svg class="svg-inline--fa fa-trash-can"
                                                                        aria-hidden="true" focusable="false"
                                                                        data-prefix="far" data-icon="trash-can"
                                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 448 512" data-fa-i2svg="">
                                                                        <path fill="currentColor"
                                                                            d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z">
                                                                        </path>
                                                                    </svg><!-- <i class="far fa-trash-alt"></i> Font Awesome fontawesome.com -->
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
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
@endsection
