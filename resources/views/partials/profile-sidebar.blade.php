        <div class="col-xl-3 col-lg-4 col-md-12 rightSidebar m-b30" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
            <div class="theiaStickySidebar"
                style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                <div class="side-bar-st-1">
                        <div class="twm-candidate-profile-pic">
                            <img src="{{ asset(auth()->user()->avatar) }}" style="height:125px;object-fit:cover" alt="">
                        </div>
                    <div class="twm-mid-content text-center">
                        <a href="javascript:void(0);" class="twm-job-title">
                            <button class="btn btn-sm mb-2"
                                style="font-size: 10px;background:rgb(179, 214, 212)">Level 0</button>
                        </a>
                        <a href="#" class="twm-job-title">
                            <h4>{{ auth()->user()->name }} </h4>
                        </a>
                        <p class="mb-2"></p>
                    </div>
                    <div class="active_mobile_menu_btn d-md-none">
                        <button class=" active_mobile_btn_item position-relative">
                            <svg class="svg-inline--fa fa-bookmark me-2 all-dashboard-icon" aria-hidden="true" focusable="false" data-prefix="far" data-icon="bookmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M336 0h-288C21.49 0 0 21.49 0 48v431.9c0 24.7 26.79 40.08 48.12 27.64L192 423.6l143.9 83.93C357.2 519.1 384 504.6 384 479.9V48C384 21.49 362.5 0 336 0zM336 452L192 368l-144 84V54C48 50.63 50.63 48 53.1 48h276C333.4 48 336 50.63 336 54V452z">
                                </path>
                            </svg>
                            <span class="active_mobile_btn_text"> Dashboard </span>
                            <span class="ms-2 active_mobile_btn_dropdown">
                                <svg class="svg-inline--fa fa-angle-down" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z">
                                    </path>
                                </svg>
                            </span>
                        </button>
                    </div>

                    <div class="twm-nav-list-1 active_mobile_menu">
                        <ul>
                            @if (auth()->user()->role == 'user' && auth()->user()->verify_status == 'unverified')
                                <li class="{{ Request::url() == route('user.verify.profile') ? 'active' : '' }}">
                                    <a href="{{ route('user.verify.profile') }}">
                                        <svg class="svg-inline--fa fa-gauge-high me-2 all-dashboard-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="gauge-high" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M512 256c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256zM288 96c0-17.7-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32s32-14.3 32-32zM256 416c35.3 0 64-28.7 64-64c0-17.4-6.9-33.1-18.1-44.6L366 161.7c5.3-12.1-.2-26.3-12.3-31.6s-26.3 .2-31.6 12.3L257.9 288c-.6 0-1.3 0-1.9 0c-35.3 0-64 28.7-64 64s28.7 64 64 64zM176 144c0-17.7-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32s32-14.3 32-32zM96 288c17.7 0 32-14.3 32-32s-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32zm352-32c0-17.7-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32s32-14.3 32-32z"> </path>
                                        </svg>
                                        Verify Profile
                                    </a>
                                </li>
                            @endif


                            <li class="{{ Request::url() == route('both.index') ? 'active' : '' }}">
                                <a href="{{ route('both.index') }}">
                                    <svg class="svg-inline--fa fa-gauge-high me-2 all-dashboard-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="gauge-high" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M512 256c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256zM288 96c0-17.7-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32s32-14.3 32-32zM256 416c35.3 0 64-28.7 64-64c0-17.4-6.9-33.1-18.1-44.6L366 161.7c5.3-12.1-.2-26.3-12.3-31.6s-26.3 .2-31.6 12.3L257.9 288c-.6 0-1.3 0-1.9 0c-35.3 0-64 28.7-64 64s28.7 64 64 64zM176 144c0-17.7-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32s32-14.3 32-32zM96 288c17.7 0 32-14.3 32-32s-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32zm352-32c0-17.7-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32s32-14.3 32-32z"> </path>
                                    </svg>
                                    Dashboard
                                </a>
                            </li>

                            {{-- <li class="{{ Request::url() == route('both.index') ? 'active' : '' }}"> --}}
                            <li class="">
                                <a href="{{ route('message.inbox') }}">
                                    <svg class="svg-inline--fa fa-gauge-high me-2 all-dashboard-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="gauge-high" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M512 256c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256zM288 96c0-17.7-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32s32-14.3 32-32zM256 416c35.3 0 64-28.7 64-64c0-17.4-6.9-33.1-18.1-44.6L366 161.7c5.3-12.1-.2-26.3-12.3-31.6s-26.3 .2-31.6 12.3L257.9 288c-.6 0-1.3 0-1.9 0c-35.3 0-64 28.7-64 64s28.7 64 64 64zM176 144c0-17.7-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32s32-14.3 32-32zM96 288c17.7 0 32-14.3 32-32s-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32zm352-32c0-17.7-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32s32-14.3 32-32z"> </path>
                                    </svg>
                                    Inbox
                                </a>
                            </li>

                            @if (auth()->user()->role == 'user')
                                <li class="{{ Request::url() == route('user.plan.index') ? 'active' : '' }}">
                                    <a href="{{ route('user.plan.index') }}" class="">
                                        <svg class="svg-inline--fa fa-comments me-2 all-dashboard-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comments" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 38.6 14.7 74.3 39.6 103.4c-3.5 9.4-8.7 17.7-14.2 24.7c-4.8 6.2-9.7 11-13.3 14.3c-1.8 1.6-3.3 2.9-4.3 3.7c-.5 .4-.9 .7-1.1 .8l-.2 .2 0 0 0 0C1 327.2-1.4 334.4 .8 340.9S9.1 352 16 352c21.8 0 43.8-5.6 62.1-12.5c9.2-3.5 17.8-7.4 25.3-11.4C134.1 343.3 169.8 352 208 352zM448 176c0 112.3-99.1 196.9-216.5 207C255.8 457.4 336.4 512 432 512c38.2 0 73.9-8.7 104.7-23.9c7.5 4 16 7.9 25.2 11.4c18.3 6.9 40.3 12.5 62.1 12.5c6.9 0 13.1-4.5 15.2-11.1c2.1-6.6-.2-13.8-5.8-17.9l0 0 0 0-.2-.2c-.2-.2-.6-.4-1.1-.8c-1-.8-2.5-2-4.3-3.7c-3.6-3.3-8.5-8.1-13.3-14.3c-5.5-7-10.7-15.4-14.2-24.7c24.9-29 39.6-64.7 39.6-103.4c0-92.8-84.9-168.9-192.6-175.5c.4 5.1 .6 10.3 .6 15.5z">
                                            </path>
                                        </svg>
                                        Plan
                                    </a>
                                </li>
                            @endif



                            <li class="{{ Request::url() == route('both.wallet.index') ? 'active' : '' }}">
                                <a href="{{ route('both.wallet.index') }}">
                                    <svg class="svg-inline--fa fa-money-bill-transfer me-2 all-dashboard-icon"
                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="money-bill-transfer" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                        data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M535 41c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l64 64c4.5 4.5 7 10.6 7 17s-2.5 12.5-7 17l-64 64c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l23-23L384 112c-13.3 0-24-10.7-24-24s10.7-24 24-24l174.1 0L535 41zM105 377l-23 23L256 400c13.3 0 24 10.7 24 24s-10.7 24-24 24L81.9 448l23 23c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L7 441c-4.5-4.5-7-10.6-7-17s2.5-12.5 7-17l64-64c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9zM96 64H337.9c-3.7 7.2-5.9 15.3-5.9 24c0 28.7 23.3 52 52 52l117.4 0c-4 17 .6 35.5 13.8 48.8c20.3 20.3 53.2 20.3 73.5 0L608 169.5V384c0 35.3-28.7 64-64 64H302.1c3.7-7.2 5.9-15.3 5.9-24c0-28.7-23.3-52-52-52l-117.4 0c4-17-.6-35.5-13.8-48.8c-20.3-20.3-53.2-20.3-73.5 0L32 342.5V128c0-35.3 28.7-64 64-64zm64 64H96v64c35.3 0 64-28.7 64-64zM544 320c-35.3 0-64 28.7-64 64h64V320zM320 352c53 0 96-43 96-96s-43-96-96-96s-96 43-96 96s43 96 96 96z">
                                        </path>
                                    </svg><!-- <i class="fa-solid fa-money-bill-transfer me-2"></i> Font Awesome fontawesome.com -->
                                    Wallets
                                </a>
                            </li>


                            @if (auth()->user()->role == 'client')
                                <li class="{{ Request::url() == route('job.create') ? 'active' : '' }}">
                                    <a href="{{ route('job.create') }}">
                                        <svg class="svg-inline--fa fa-money-bill-transfer me-2 all-dashboard-icon"
                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                            data-icon="money-bill-transfer" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                            data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M535 41c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l64 64c4.5 4.5 7 10.6 7 17s-2.5 12.5-7 17l-64 64c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l23-23L384 112c-13.3 0-24-10.7-24-24s10.7-24 24-24l174.1 0L535 41zM105 377l-23 23L256 400c13.3 0 24 10.7 24 24s-10.7 24-24 24L81.9 448l23 23c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L7 441c-4.5-4.5-7-10.6-7-17s2.5-12.5 7-17l64-64c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9zM96 64H337.9c-3.7 7.2-5.9 15.3-5.9 24c0 28.7 23.3 52 52 52l117.4 0c-4 17 .6 35.5 13.8 48.8c20.3 20.3 53.2 20.3 73.5 0L608 169.5V384c0 35.3-28.7 64-64 64H302.1c3.7-7.2 5.9-15.3 5.9-24c0-28.7-23.3-52-52-52l-117.4 0c4-17-.6-35.5-13.8-48.8c-20.3-20.3-53.2-20.3-73.5 0L32 342.5V128c0-35.3 28.7-64 64-64zm64 64H96v64c35.3 0 64-28.7 64-64zM544 320c-35.3 0-64 28.7-64 64h64V320zM320 352c53 0 96-43 96-96s-43-96-96-96s-96 43-96 96s43 96 96 96z">
                                            </path>
                                        </svg><!-- <i class="fa-solid fa-money-bill-transfer me-2"></i> Font Awesome fontawesome.com -->
                                        Post Job
                                    </a>
                                </li>
                                <li class="{{ Request::url() == route('job.index') ? 'active' : '' }}">
                                    <a href="{{ route('job.index') }}">
                                        <svg class="svg-inline--fa fa-money-bill-transfer me-2 all-dashboard-icon"
                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                            data-icon="money-bill-transfer" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                            data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M535 41c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l64 64c4.5 4.5 7 10.6 7 17s-2.5 12.5-7 17l-64 64c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l23-23L384 112c-13.3 0-24-10.7-24-24s10.7-24 24-24l174.1 0L535 41zM105 377l-23 23L256 400c13.3 0 24 10.7 24 24s-10.7 24-24 24L81.9 448l23 23c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L7 441c-4.5-4.5-7-10.6-7-17s2.5-12.5 7-17l64-64c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9zM96 64H337.9c-3.7 7.2-5.9 15.3-5.9 24c0 28.7 23.3 52 52 52l117.4 0c-4 17 .6 35.5 13.8 48.8c20.3 20.3 53.2 20.3 73.5 0L608 169.5V384c0 35.3-28.7 64-64 64H302.1c3.7-7.2 5.9-15.3 5.9-24c0-28.7-23.3-52-52-52l-117.4 0c4-17-.6-35.5-13.8-48.8c-20.3-20.3-53.2-20.3-73.5 0L32 342.5V128c0-35.3 28.7-64 64-64zm64 64H96v64c35.3 0 64-28.7 64-64zM544 320c-35.3 0-64 28.7-64 64h64V320zM320 352c53 0 96-43 96-96s-43-96-96-96s-96 43-96 96s43 96 96 96z">
                                            </path>
                                        </svg><!-- <i class="fa-solid fa-money-bill-transfer me-2"></i> Font Awesome fontawesome.com -->
                                        Posted Jobs
                                    </a>
                                </li>
                            @endif




                                @if (auth()->user()->role == 'user')
                                    <li class="{{ Request::url() == route('gig.index') ? 'active' : '' }}">
                                        <a href="{{ route('gig.index') }}">
                                            <svg class="svg-inline--fa fa-file-pen me-2 all-dashboard-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V285.7l-86.8 86.8c-10.3 10.3-17.5 23.1-21 37.2l-18.7 74.9c-2.3 9.2-1.8 18.8 1.3 27.5H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM549.8 235.7l14.4 14.4c15.6 15.6 15.6 40.9 0 56.6l-29.4 29.4-71-71 29.4-29.4c15.6-15.6 40.9-15.6 56.6 0zM311.9 417L441.1 287.8l71 71L382.9 487.9c-4.1 4.1-9.2 7-14.9 8.4l-60.1 15c-5.5 1.4-11.2-.2-15.2-4.2s-5.6-9.7-4.2-15.2l15-60.1c1.4-5.6 4.3-10.8 8.4-14.9z"></path></svg><!-- <i class="fa-solid fa-file-pen me-2"></i> Font Awesome fontawesome.com --> My Gigs </a>
                                    </li>
                                    <li class="{{ Request::url() == route('user.gig.saleList') ? 'active' : '' }}">
                                        <a href="{{ route('user.gig.saleList') }}">
                                            <svg class="svg-inline--fa fa-file-pen me-2 all-dashboard-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V285.7l-86.8 86.8c-10.3 10.3-17.5 23.1-21 37.2l-18.7 74.9c-2.3 9.2-1.8 18.8 1.3 27.5H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM549.8 235.7l14.4 14.4c15.6 15.6 15.6 40.9 0 56.6l-29.4 29.4-71-71 29.4-29.4c15.6-15.6 40.9-15.6 56.6 0zM311.9 417L441.1 287.8l71 71L382.9 487.9c-4.1 4.1-9.2 7-14.9 8.4l-60.1 15c-5.5 1.4-11.2-.2-15.2-4.2s-5.6-9.7-4.2-15.2l15-60.1c1.4-5.6 4.3-10.8 8.4-14.9z"></path></svg><!-- <i class="fa-solid fa-file-pen me-2"></i> Font Awesome fontawesome.com --> My Sale </a>
                                    </li>
                                    <li class="">
                                        <a href="#">
                                            <svg class="svg-inline--fa fa-file-pen me-2 all-dashboard-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V285.7l-86.8 86.8c-10.3 10.3-17.5 23.1-21 37.2l-18.7 74.9c-2.3 9.2-1.8 18.8 1.3 27.5H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM549.8 235.7l14.4 14.4c15.6 15.6 15.6 40.9 0 56.6l-29.4 29.4-71-71 29.4-29.4c15.6-15.6 40.9-15.6 56.6 0zM311.9 417L441.1 287.8l71 71L382.9 487.9c-4.1 4.1-9.2 7-14.9 8.4l-60.1 15c-5.5 1.4-11.2-.2-15.2-4.2s-5.6-9.7-4.2-15.2l15-60.1c1.4-5.6 4.3-10.8 8.4-14.9z"></path></svg><!-- <i class="fa-solid fa-file-pen me-2"></i> Font Awesome fontawesome.com --> Aplied Job </a>
                                    </li>
                                @endif





                            <li class="{{ Request::url() == route('advertisement.index') || Request::url() == route('advertisement.create') ? 'active' : '' }}">
                                <a href="{{ route('advertisement.index') }}">
                                    <svg class="svg-inline--fa fa-users me-2 all-dashboard-icon" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="users"
                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M144 160c-44.2 0-80-35.8-80-80S99.8 0 144 0s80 35.8 80 80s-35.8 80-80 80zm368 0c-44.2 0-80-35.8-80-80s35.8-80 80-80s80 35.8 80 80s-35.8 80-80 80zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM416 224c0 53-43 96-96 96s-96-43-96-96s43-96 96-96s96 43 96 96zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z">
                                        </path>
                                    </svg><!-- <i class="fa-solid fa-users me-2"></i> Font Awesome fontawesome.com -->
                                    Advertisement </a>
                            </li>



                            <li class="{{ Request::url() == route('both.refer') ? 'active' : '' }}">
                                <a href="{{ route('both.refer') }}">
                                    <svg class="svg-inline--fa fa-users me-2 all-dashboard-icon" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="users"
                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M144 160c-44.2 0-80-35.8-80-80S99.8 0 144 0s80 35.8 80 80s-35.8 80-80 80zm368 0c-44.2 0-80-35.8-80-80s35.8-80 80-80s80 35.8 80 80s-35.8 80-80 80zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM416 224c0 53-43 96-96 96s-96-43-96-96s43-96 96-96s96 43 96 96zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z">
                                        </path>
                                    </svg><!-- <i class="fa-solid fa-users me-2"></i> Font Awesome fontawesome.com -->
                                    Refer </a>
                            </li>



                            <li class="{{ Request::url() == route('both.editProfile') ? 'active' : '' }}">
                                <a href="{{ route('both.editProfile') }}">
                                    <svg class="svg-inline--fa fa-user-pen me-2 all-dashboard-icon" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="user-pen"
                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H322.8c-3.1-8.8-3.7-18.4-1.4-27.8l15-60.1c2.8-11.3 8.6-21.5 16.8-29.7l40.3-40.3c-32.1-31-75.7-50.1-123.9-50.1H178.3zm435.5-68.3c-15.6-15.6-40.9-15.6-56.6 0l-29.4 29.4 71 71 29.4-29.4c15.6-15.6 15.6-40.9 0-56.6l-14.4-14.4zM375.9 417c-4.1 4.1-7 9.2-8.4 14.9l-15 60.1c-1.4 5.5 .2 11.2 4.2 15.2s9.7 5.6 15.2 4.2l60.1-15c5.6-1.4 10.8-4.3 14.9-8.4L576.1 358.7l-71-71L375.9 417z">
                                        </path>
                                    </svg><!-- <i class="fa-solid fa-user-pen me-2"></i> Font Awesome fontawesome.com -->Edit Profile </a>
                            </li>
                            <li class="{{ Request::url() == route('both.changePassword') ? 'active' : '' }}">
                                <a href="{{ route('both.changePassword') }}">
                                    <svg class="svg-inline--fa fa-fingerprint me-2 all-dashboard-icon" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="fingerprint"
                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M48 256C48 141.1 141.1 48 256 48c69.3 0 130.6 33.8 168.5 86c7.8 10.7 22.8 13.1 33.5 5.3s13.1-22.8 5.3-33.5C416.8 41.7 341.3 0 256 0C114.6 0 0 114.6 0 256v8c0 13.3 10.7 24 24 24s24-10.7 24-24v-8zm458.5-52.9c-2.7-13-15.5-21.3-28.4-18.5s-21.3 15.5-18.5 28.4c2.9 13.9 4.5 28.3 4.5 43.1v8c0 13.3 10.7 24 24 24s24-10.7 24-24v-8c0-18.1-1.9-35.8-5.5-52.9zM222.1 128.2c10.8-2.9 22.1-4.4 33.9-4.4c73 0 132.2 59.2 132.2 132.2c0 31.1-1.9 62.4-3.9 86c-1 11.8-2 21.6-2.7 28.4c-.4 3.4-.7 6.1-.9 7.9l-.2 2-.1 .5 0 .1 0 0 0 0c-1.6 13.2 7.7 25.1 20.8 26.8s25.1-7.7 26.8-20.8l-23.8-3c23.8 3 23.8 3 23.8 3l0 0 0 0 0 0 0-.2 .1-.6 .3-2.2c.2-1.9 .5-4.8 .9-8.3c.8-7.2 1.8-17.4 2.8-29.6c2-24.4 4.1-57.1 4.1-90c0-99.5-80.7-180.2-180.2-180.2c-15.9 0-31.4 2.1-46.2 6c-12.8 3.4-20.5 16.5-17.1 29.3s16.5 20.5 29.3 17.1zm-74.5 52.1c7.6-10.9 5-25.8-5.9-33.4s-25.8-5-33.4 5.9C87.9 182 75.8 217.6 75.8 256c0 30.1-3.8 58.6-7.6 79.7c-1.9 10.5-3.8 19.1-5.2 24.9c-.7 2.9-1.3 5.2-1.7 6.7c-.2 .7-.3 1.3-.4 1.6l-.1 .4 0 .1 0 0c-3.6 12.7 3.7 26 16.5 29.7s26-3.7 29.7-16.5L83.8 376c23.1 6.6 23.1 6.6 23.1 6.6l0 0 0 0 0-.1 0-.2 .2-.6c.1-.5 .3-1.2 .6-2.1c.5-1.8 1.2-4.4 1.9-7.7c1.6-6.6 3.7-16.1 5.8-27.6c4.2-22.9 8.4-54.4 8.4-88.3c0-28.2 8.8-54.3 23.8-75.7zM256 200c30.9 0 56 25.1 56 56c0 47.1-2.7 86.3-5.5 113.6c-1.4 13.7-2.7 24.3-3.7 31.6c-.5 3.6-.9 6.3-1.2 8.1c-.1 .9-.2 1.6-.3 2l-.1 .5 0 .1 0 0 0 0 0 0c-2.3 13.1 6.5 25.5 19.5 27.8s25.5-6.4 27.8-19.5L324.8 416c23.6 4.1 23.6 4.1 23.6 4.1l0 0 0 0 0-.1 0-.2 .1-.7c.1-.6 .2-1.4 .4-2.4c.3-2.1 .8-5.1 1.3-9c1.1-7.8 2.5-19.1 4-33.4c2.9-28.7 5.7-69.5 5.7-118.4c0-57.4-46.6-104-104-104s-104 46.6-104 104c0 46.7-3.9 83.4-7.7 108.4c-1.9 12.5-3.8 21.9-5.2 28.2c-.7 3.1-1.3 5.5-1.6 6.9c-.2 .7-.3 1.3-.4 1.6l-.1 .3c-3.6 12.7 3.7 26 16.5 29.7s26-3.7 29.7-16.5L160 408c23.1 6.6 23.1 6.6 23.1 6.6l0 0 0 0 0-.1 .1-.2 .2-.7c.1-.5 .3-1.3 .6-2.3c.5-2 1.2-4.8 2-8.4c1.6-7.2 3.7-17.8 5.8-31.3c3-19.2 5.9-44.6 7.3-75.3c.6-12.6 .9-26 .9-40.3c0-30.9 25.1-56 56-56zm24 56c0-13.3-10.7-24-24-24s-24 10.7-24 24c0 45.4-2.6 83.4-6.3 114.5L202 478.3l0 0c-5.3 12.1 .1 26.2 12.2 31.6c12.1 5.4 26.3-.1 31.7-12.2L224 488c21.9 9.7 21.9 9.7 21.9 9.7l0 0 0 0 0-.1 .1-.3 .4-.9c.3-.8 .7-1.8 1.2-3.1c1-2.7 2.4-6.5 4-11.5c3.3-10.1 7.5-24.9 11.7-44.7C271.8 397.3 280 337.6 280 256zM225.7 370.5s0 0 0 0L256 232 225.7 370.5zm0 0c-2.7 22.5-5.9 41.3-9.2 56.6c-3.8 18.2-7.6 31.3-10.3 39.8c-1.4 4.2-2.5 7.3-3.2 9.2c-.4 .9-.6 1.6-.8 2l-.1 .4 23.6-107.9z">
                                        </path>
                                    </svg><!-- <i class="fa fa-fingerprint me-2"></i> Font Awesome fontawesome.com -->
                                    Change Password </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="margin-left: 10px;"><svg class="svg-inline--fa fa-right-from-bracket text-danger all-dashboard-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="right-from-bracket" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96C43 32 0 75 0 128V384c0 53 43 96 96 96h64c17.7 0 32-14.3 32-32s-14.3-32-32-32H96c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32h64zM504.5 273.4c4.8-4.5 7.5-10.8 7.5-17.4s-2.7-12.9-7.5-17.4l-144-136c-7-6.6-17.2-8.4-26-4.6s-14.5 12.5-14.5 22v72H192c-17.7 0-32 14.3-32 32l0 64c0 17.7 14.3 32 32 32H320v72c0 9.6 5.7 18.2 14.5 22s19 2 26-4.6l144-136z">
                                        </path>
                                    </svg><!-- <i class="fa fa-sign-out-alt  text-danger"></i> Font Awesome fontawesome.com -->
                                    <span class="text-danger">Logout</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <script>
            const uploadBtn = document.getElementById("upload-btn");
            const fileUploader = document.getElementById("file-uploader");
            const saveUserImage = document.getElementById("save_user_image");

            uploadBtn.addEventListener("click", function() {
                fileUploader.click();
            });

            fileUploader.addEventListener("change", function() {
                saveUserImage.style.display = "block";
            });
        </script>
