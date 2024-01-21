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
                        <h2 class="wt-title">{{ $data->heading }}</h2>
                    </div>
                </div>
                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="index.html">Home</a></li>
                        <li>{{ $data->heading }}</li>
                    </ul>
                </div>


            </div>
        </div>
    </div>




    <div class="section-full p-t100 p-b40 site-bg-white twm-how-it-work-area2" id="howitwork">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    {{ $data->content }}
                </div>
            </div>
        </div>
    </div>






</div>

@endsection
