@extends('layouts.app_user')
@section('styles')
    <style>
        .all-dashboard-icon {
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

                                <div class="panel panel-default">
                                    <div class="panel-heading wt-panel-heading p-a20">
                                        <h4 class="panel-tittle m-a0">
                                            <svg style="width: 20px" class="svg-inline--fa fa-users me-2" aria-hidden="true" focusable="false"
                                                data-prefix="fas" data-icon="users" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M144 160c-44.2 0-80-35.8-80-80S99.8 0 144 0s80 35.8 80 80s-35.8 80-80 80zm368 0c-44.2 0-80-35.8-80-80s35.8-80 80-80s80 35.8 80 80s-35.8 80-80 80zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM416 224c0 53-43 96-96 96s-96-43-96-96s43-96 96-96s96 43 96 96zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z">
                                                </path>
                                            </svg><!-- <i class="fa-solid fa-users me-2"></i> Font Awesome fontawesome.com -->User
                                            Refer
                                        </h4>
                                    </div>
                                    <div class="panel-body wt-panel-body p-a20 m-b30 ">
                                        <div class="row justify-content-center pt-4">
                                            <div class="col-md-12 ">
                                                <div class="refer-wrapper d-flex align-items-center justify-content-center">
                                                    <div class="refer-counter">
                                                        <h4>{{ auth()->user()->total_refer }}</h4>
                                                        <p>Total Refer</p>
                                                    </div>
                                                    <div
                                                        class="refer-link-wrapper d-flex justify-content-center flex-column">
                                                        <h4 class="mb-3">Your Affiliate Link</h4>
                                                        <div class="refer-link">
                                                            @php
                                                                $linkArr = explode('//', route('register'));
                                                                $baseUrl = end($linkArr)
                                                            @endphp
                                                            <a href="#" class="copy-link">{{ $baseUrl }}/?refer={{ auth()->user()->profile_id }}</a>
                                                            <span><svg style="width: 20px" class="svg-inline--fa fa-copy"
                                                                    onclick="copyToClipboard();" aria-hidden="true"
                                                                    focusable="false" data-prefix="fas" data-icon="copy"
                                                                    role="img" xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                                                    <path fill="currentColor"
                                                                        d="M224 0c-35.3 0-64 28.7-64 64V288c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H224zM64 160c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H288c35.3 0 64-28.7 64-64V384H288v64H64V224h64V160H64z">
                                                                    </path>
                                                                </svg><!-- <i class="fa-solid fa-copy" onclick="copyToClipboard();"></i> Font Awesome fontawesome.com --></span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-12 pt-5">
                                                {{-- <div class="product-filter-wrap d-flex justify-content-between align-items-center">
                                                    <span class="woocommerce-result-count-left">Refer User History</span>
                                                    <div class="woocommerce-ordering twm-filter-select d-flex justify-content-md-end justify-content-between align-items-center"
                                                        method="get">
                                                        <span class="woocommerce-result-count">Short By</span>
                                                        <div class="dropdown bootstrap-select wt-select-bar-2"><select
                                                                class="wt-select-bar-2 selectpicker" data-live-search="true"
                                                                id="short_by_posted_date" data-bv-field="size">
                                                                <option value="">All</option>
                                                                <option value="60">Last 2 Months</option>
                                                                <option value="30">Last 1 Months</option>
                                                                <option value="15">15 days ago</option>
                                                                <option value="7">Weekly</option>
                                                                <option value="2">Yesterday</option>
                                                                <option value="1">Today</option>
                                                            </select>
                                                            <div class="dropdown-menu ">
                                                                <div class="bs-searchbox"><input type="search"
                                                                        class="form-control" autocomplete="off"
                                                                        role="combobox" aria-label="Search"
                                                                        aria-controls="bs-select-1"
                                                                        aria-autocomplete="list"></div>
                                                                <div class="inner show" role="listbox" id="bs-select-1"
                                                                    tabindex="-1">
                                                                    <ul class="dropdown-menu inner show"
                                                                        role="presentation"></ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                {{-- <div class="table-data-list-wrap">
                                                    <div class="custom-transaction-table">
                                                        <div class="transaction-header justify-content-between align-items-center flex-wrap">
                                                            <div class="transaction-header-item">
                                                                <span>SL No</span>
                                                            </div>
                                                            <div class="transaction-header-item">
                                                                <span>Full Name</span>
                                                            </div>
                                                            <div class="transaction-header-item">
                                                                <span>Joining Date</span>
                                                            </div>
                                                            <div class="transaction-header-item">
                                                                <span>Status</span>
                                                            </div>
                                                            <div class="transaction-header-item">
                                                                <span>Action</span>
                                                            </div>
                                                        </div>
                                                        <div class="transaction-body-wrapper" id="refer_data">

                                                        </div>
                                                    </div>
                                                </div> --}}

                                                <table class="table">
                                                    
                                                </table>
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
    </div>
@endsection

@section('scripts')
<script>
    function copyToClipboard() {
      //var copyText = 'https://gpsfreelancer.com/register?refer=490';
      var copyText = $('.copy-link').text();
      var tempInput = document.createElement("input");
      tempInput.style = "position: absolute; left: -1000px; top: -1000px";
      tempInput.value = copyText;
      document.body.appendChild(tempInput);
      tempInput.select();
      document.execCommand("copy");
      document.body.removeChild(tempInput);
      var message = document.createElement("span");
      message.textContent = "Copied!";
      message.style = "display: inline-block; padding: 5px; background-color: #e0e0e0; border-radius: 5px; margin-left: 10px;"
      var copyLink = document.querySelector(".copy-link");
      copyLink.parentNode.insertBefore(message, copyLink.nextSibling);
      setTimeout(function() {
        message.parentNode.removeChild(message);
      }, 2000);
    }
</script>
@endsection
