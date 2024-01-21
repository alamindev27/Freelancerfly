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

    <div class="wt-bnr-inr overlay-wraper bg-center"
        style="background-image:url({{ asset('assets/frontend/user/images/banner/1.jpg') }});">
        <div class="overlay-main site-bg-white opacity-01"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">The Most Exciting Gig</h2>
                    </div>
                </div>


                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="index.html">Home</a></li>
                        <li>Gigs</li>
                    </ul>
                </div>


            </div>
        </div>
    </div>
    <div class="twm-home2-banner-section site-bg-gray bg-cover">
        <div class="container">
            <div class="section-content">
                <div class="twm-jobs-grid-wrap">
                    <div class="row">
                        @foreach ($gigs as $key => $gig)
                            @include('partials.gig')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection




