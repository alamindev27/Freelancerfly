@extends('layouts.app_user')
@section('styles')
    <style>
        .all-dashboard-icon {
            width: 13px !important;
        }

    </style>

<style>
    .error_input{
        border: 1px solid #f00 !important;
    }
    .dropify-wrapper{
        margin-bottom: 10px;
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
                                <form action="{{ route('both.updateProfile') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="panel panel-default">
                                        <div class="panel-heading wt-panel-heading p-a20">
                                            <h4 class="panel-tittle m-a0">Basic Informations</h4>
                                        </div>
                                        <div class="panel-body wt-panel-body p-a20 m-b30 ">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group overview-wrapper">
                                                        <label class="d-block">Your title</label>
                                                        <small>Enter a single sentence description of your professional skills/experience (e.g.  Expert Web Designer with Ajax experience)</small>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control " name="title" type="text" value="{{ old('title') ?? auth()->user()->title }}" placeholder="Example: WordPress Expert">
                                                            <svg class="svg-inline--fa fa-wand-magic-sparkles fs-input-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="wand-magic-sparkles" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                                <path fill="currentColor"
                                                                    d="M234.7 42.7L197 56.8c-3 1.1-5 4-5 7.2s2 6.1 5 7.2l37.7 14.1L248.8 123c1.1 3 4 5 7.2 5s6.1-2 7.2-5l14.1-37.7L315 71.2c3-1.1 5-4 5-7.2s-2-6.1-5-7.2L277.3 42.7 263.2 5c-1.1-3-4-5-7.2-5s-6.1 2-7.2 5L234.7 42.7zM46.1 395.4c-18.7 18.7-18.7 49.1 0 67.9l34.6 34.6c18.7 18.7 49.1 18.7 67.9 0L529.9 116.5c18.7-18.7 18.7-49.1 0-67.9L495.3 14.1c-18.7-18.7-49.1-18.7-67.9 0L46.1 395.4zM484.6 82.6l-105 105-23.3-23.3 105-105 23.3 23.3zM7.5 117.2C3 118.9 0 123.2 0 128s3 9.1 7.5 10.8L64 160l21.2 56.5c1.7 4.5 6 7.5 10.8 7.5s9.1-3 10.8-7.5L128 160l56.5-21.2c4.5-1.7 7.5-6 7.5-10.8s-3-9.1-7.5-10.8L128 96 106.8 39.5C105.1 35 100.8 32 96 32s-9.1 3-10.8 7.5L64 96 7.5 117.2zm352 256c-4.5 1.7-7.5 6-7.5 10.8s3 9.1 7.5 10.8L416 416l21.2 56.5c1.7 4.5 6 7.5 10.8 7.5s9.1-3 10.8-7.5L480 416l56.5-21.2c4.5-1.7 7.5-6 7.5-10.8s-3-9.1-7.5-10.8L480 352l-21.2-56.5c-1.7-4.5-6-7.5-10.8-7.5s-9.1 3-10.8 7.5L416 352l-56.5 21.2z">
                                                                </path>
                                                            </svg><!-- <i class="fs-input-icon fa-solid fa-wand-magic-sparkles"></i> Font Awesome fontawesome.com -->
                                                        </div>
                                                        @error('title')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group overview-wrapper">
                                                        <label class="d-block">Overview</label>
                                                        <p class="mb-0">Use this space to show clients you have the skills and experience they're looking for.</p>
                                                        <ul class="overview-list ms-4 mb-2">
                                                            <li>Describe your strengths and skills</li>
                                                            <li> Highlight projects, accomplishments and education</li>
                                                            <li>Keep it short and make sure it's error-free</li>
                                                        </ul>
                                                        <textarea class="form-control " name="overview" rows="3" placeholder="Example: I am certified (OCP 10g/11g) Oracle database administrator with 8+ years experience in all DBA tasks. My expertise includes Installation configuration, tuning, backup strategy, integration in OLTP and DWH environment on *nix and Windows OS in one-node and RAC configurations.I can provide complete services for your existing Oracle DB as well as install and configure your future Oracle database infrastructure.I am always interested in new projects and look forward to speaking with you about how we can work together.">{{ old('overvew') ?? auth()->user()->overview }}</textarea>

                                                        @error('overview')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-xl-12">
                                                    <div class="form-group">
                                                        <label>Avatar</label><span class="text-danger">*</span>
                                                        <input class="form-control" style="height: auto !important; padding:10px" name="avatar" type="file">
                                                        @error('name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror

                                                    </div>
                                                </div>


                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Name</label><span class="text-danger">*</span>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control " name="name" value="{{ old('name') ?? auth()->user()->name }}" type="text" placeholder="John doe" required="">
                                                            <svg class="svg-inline--fa fa-user fs-input-icon"
                                                                aria-hidden="true" focusable="false" data-prefix="fas"
                                                                data-icon="user" role="img"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                                data-fa-i2svg="">
                                                                <path fill="currentColor"
                                                                    d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                </path>
                                                            </svg><!-- <i class="fs-input-icon fa fa-user "></i> Font Awesome fontawesome.com -->
                                                        </div>
                                                        @error('name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Phone</label><span class="text-danger">*</span>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control " value="{{ old('phone') ?? auth()->user()->phone }}" name="phone" type="number" placeholder="(251) 1234-456-7890">
                                                            <svg class="svg-inline--fa fa-phone-flip fs-input-icon"
                                                                aria-hidden="true" focusable="false" data-prefix="fas"
                                                                data-icon="phone-flip" role="img"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                                data-fa-i2svg="">
                                                                <path fill="currentColor"
                                                                    d="M347.1 24.6c7.7-18.6 28-28.5 47.4-23.2l88 24C499.9 30.2 512 46 512 64c0 247.4-200.6 448-448 448c-18 0-33.8-12.1-38.6-29.5l-24-88c-5.3-19.4 4.6-39.7 23.2-47.4l96-40c16.3-6.8 35.2-2.1 46.3 11.6L207.3 368c70.4-33.3 127.4-90.3 160.7-160.7L318.7 167c-13.7-11.2-18.4-30-11.6-46.3l40-96z">
                                                                </path>
                                                            </svg><!-- <i class="fs-input-icon fa fa-phone-alt"></i> Font Awesome fontawesome.com -->
                                                        </div>
                                                        @error('phone')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Email Address</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control " name="email" value="{{ old('email') ?? auth()->user()->email }}" type="email" placeholder="johndoe@example.com">
                                                            <svg class="svg-inline--fa fa-at fs-input-icon"
                                                                aria-hidden="true" focusable="false" data-prefix="fas"
                                                                data-icon="at" role="img"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                                data-fa-i2svg="">
                                                                <path fill="currentColor"
                                                                    d="M256 64C150 64 64 150 64 256s86 192 192 192c17.7 0 32 14.3 32 32s-14.3 32-32 32C114.6 512 0 397.4 0 256S114.6 0 256 0S512 114.6 512 256v32c0 53-43 96-96 96c-29.3 0-55.6-13.2-73.2-33.9C320 371.1 289.5 384 256 384c-70.7 0-128-57.3-128-128s57.3-128 128-128c27.9 0 53.7 8.9 74.7 24.1c5.7-5 13.1-8.1 21.3-8.1c17.7 0 32 14.3 32 32v80 32c0 17.7 14.3 32 32 32s32-14.3 32-32V256c0-106-86-192-192-192zm64 192c0-35.3-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64s64-28.7 64-64z">
                                                                </path>
                                                            </svg><!-- <i class="fs-input-icon fas fa-at"></i> Font Awesome fontawesome.com -->
                                                        </div>
                                                        @error('email')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Facebook Username</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control " value="{{ old('facebook') ?? auth()->user()->facebook }}" name="facebook"
                                                                type="text" placeholder="https://www.facebook.com/">
                                                            <svg class="svg-inline--fa fa-earth-americas fs-input-icon"
                                                                aria-hidden="true" focusable="false" data-prefix="fas"
                                                                data-icon="earth-americas" role="img"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                                data-fa-i2svg="">
                                                                <path fill="currentColor"
                                                                    d="M57.7 193l9.4 16.4c8.3 14.5 21.9 25.2 38 29.8L163 255.7c17.2 4.9 29 20.6 29 38.5v39.9c0 11 6.2 21 16 25.9s16 14.9 16 25.9v39c0 15.6 14.9 26.9 29.9 22.6c16.1-4.6 28.6-17.5 32.7-33.8l2.8-11.2c4.2-16.9 15.2-31.4 30.3-40l8.1-4.6c15-8.5 24.2-24.5 24.2-41.7v-8.3c0-12.7-5.1-24.9-14.1-33.9l-3.9-3.9c-9-9-21.2-14.1-33.9-14.1H257c-11.1 0-22.1-2.9-31.8-8.4l-34.5-19.7c-4.3-2.5-7.6-6.5-9.2-11.2c-3.2-9.6 1.1-20 10.2-24.5l5.9-3c6.6-3.3 14.3-3.9 21.3-1.5l23.2 7.7c8.2 2.7 17.2-.4 21.9-7.5c4.7-7 4.2-16.3-1.2-22.8l-13.6-16.3c-10-12-9.9-29.5 .3-41.3l15.7-18.3c8.8-10.3 10.2-25 3.5-36.7l-2.4-4.2c-3.5-.2-6.9-.3-10.4-.3C163.1 48 84.4 108.9 57.7 193zM464 256c0-36.8-9.6-71.4-26.4-101.5L412 164.8c-15.7 6.3-23.8 23.8-18.5 39.8l16.9 50.7c3.5 10.4 12 18.3 22.6 20.9l29.1 7.3c1.2-9 1.8-18.2 1.8-27.5zm48 0c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256z">
                                                                </path>
                                                            </svg><!-- <i class="fs-input-icon fa fa-globe-americas"></i> Font Awesome fontawesome.com -->
                                                        </div>
                                                        @error('facebook')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-lg-12 col-md-12">
                                                    <div class="form-group city-outer-bx has-feedback">
                                                        <label>Age</label><span class="text-danger">*</span>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control " value="{{ old('age') ?? auth()->user()->age }}" name="age" type="number" placeholder="35 Years">
                                                            <svg class="svg-inline--fa fa-child fs-input-icon"
                                                                aria-hidden="true" focusable="false" data-prefix="fas"
                                                                data-icon="child" role="img"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                                data-fa-i2svg="">
                                                                <path fill="currentColor"
                                                                    d="M224 64c0 35.3-28.7 64-64 64s-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64zM144 384v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V287.8L59.1 321c-9.4 15-29.2 19.4-44.1 10S-4.5 301.9 4.9 287l39.9-63.3C69.7 184 113.2 160 160 160s90.3 24 115.2 63.6L315.1 287c9.4 15 4.9 34.7-10 44.1s-34.7 4.9-44.1-10L240 287.8V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V384H144z">
                                                                </path>
                                                            </svg><!-- <i class="fs-input-icon fa fa-child"></i> Font Awesome fontawesome.com -->
                                                        </div>
                                                    </div>
                                                    @error('age')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>



                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Language</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control " value="{{ old('language') ?? auth()->user()->language }}" name="language"
                                                                type="text" placeholder="e.x English, Spanish">
                                                            <svg class="svg-inline--fa fa-language fs-input-icon"
                                                                aria-hidden="true" focusable="false" data-prefix="fas"
                                                                data-icon="language" role="img"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                                                data-fa-i2svg="">
                                                                <path fill="currentColor"
                                                                    d="M0 128C0 92.7 28.7 64 64 64H256h48 16H576c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H320 304 256 64c-35.3 0-64-28.7-64-64V128zm320 0V384H576V128H320zM178.3 175.9c-3.2-7.2-10.4-11.9-18.3-11.9s-15.1 4.7-18.3 11.9l-64 144c-4.5 10.1 .1 21.9 10.2 26.4s21.9-.1 26.4-10.2l8.9-20.1h73.6l8.9 20.1c4.5 10.1 16.3 14.6 26.4 10.2s14.6-16.3 10.2-26.4l-64-144zM160 233.2L179 276H141l19-42.8zM448 164c11 0 20 9 20 20v4h44 16c11 0 20 9 20 20s-9 20-20 20h-2l-1.6 4.5c-8.9 24.4-22.4 46.6-39.6 65.4c.9 .6 1.8 1.1 2.7 1.6l18.9 11.3c9.5 5.7 12.5 18 6.9 27.4s-18 12.5-27.4 6.9l-18.9-11.3c-4.5-2.7-8.8-5.5-13.1-8.5c-10.6 7.5-21.9 14-34 19.4l-3.6 1.6c-10.1 4.5-21.9-.1-26.4-10.2s.1-21.9 10.2-26.4l3.6-1.6c6.4-2.9 12.6-6.1 18.5-9.8l-12.2-12.2c-7.8-7.8-7.8-20.5 0-28.3s20.5-7.8 28.3 0l14.6 14.6 .5 .5c12.4-13.1 22.5-28.3 29.8-45H448 376c-11 0-20-9-20-20s9-20 20-20h52v-4c0-11 9-20 20-20z">
                                                                </path>
                                                            </svg><!-- <i class="fs-input-icon fa fa-language"></i> Font Awesome fontawesome.com -->
                                                        </div>
                                                        @error('language')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                {{-- <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group city-outer-bx has-feedback">
                                                        <label>Expertise &amp; Skill</label>
                                                        <div class="ls-inputicon-box custom-i-box">
                                                            <div class="dropdown bootstrap-select show-tick wt-select-box mt-2 user-select type_cat_select">
                                                                <select name="skill[]" multiple="" class="wt-select-box selectpicker mt-2 user-select type_cat_select" data-live-search="true" title="" id="s-user-select" data-bv-field="size">
                                                                    <option class="bs-title-option" value="">Select Skills </option>
                                                                    @foreach ($skills as $skill)
                                                                        <option class="bs-title-option" value="{{ $skill->id }}">{{ $skill->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @error('skill')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div> --}}
                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group city-outer-bx has-feedback">
                                                        <label>Country</label>
                                                        <div class="ls-inputicon-box custom-i-box">
                                                            <input type="text" class="form-control" name="country" id="" value="{{ old('country') ?? auth()->user()->country }}">
                                                        </div>
                                                    </div>
                                                    @error('country')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group city-outer-bx has-feedback">
                                                        <label>City</label><span class="text-danger">*</span>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control " value="{{ old('city') ?? auth()->user()->city }}" name="city"
                                                                type="text" placeholder="Texas" >
                                                            <svg class="svg-inline--fa fa-earth-americas fs-input-icon"
                                                                aria-hidden="true" focusable="false" data-prefix="fas"
                                                                data-icon="earth-americas" role="img"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                                data-fa-i2svg="">
                                                                <path fill="currentColor"
                                                                    d="M57.7 193l9.4 16.4c8.3 14.5 21.9 25.2 38 29.8L163 255.7c17.2 4.9 29 20.6 29 38.5v39.9c0 11 6.2 21 16 25.9s16 14.9 16 25.9v39c0 15.6 14.9 26.9 29.9 22.6c16.1-4.6 28.6-17.5 32.7-33.8l2.8-11.2c4.2-16.9 15.2-31.4 30.3-40l8.1-4.6c15-8.5 24.2-24.5 24.2-41.7v-8.3c0-12.7-5.1-24.9-14.1-33.9l-3.9-3.9c-9-9-21.2-14.1-33.9-14.1H257c-11.1 0-22.1-2.9-31.8-8.4l-34.5-19.7c-4.3-2.5-7.6-6.5-9.2-11.2c-3.2-9.6 1.1-20 10.2-24.5l5.9-3c6.6-3.3 14.3-3.9 21.3-1.5l23.2 7.7c8.2 2.7 17.2-.4 21.9-7.5c4.7-7 4.2-16.3-1.2-22.8l-13.6-16.3c-10-12-9.9-29.5 .3-41.3l15.7-18.3c8.8-10.3 10.2-25 3.5-36.7l-2.4-4.2c-3.5-.2-6.9-.3-10.4-.3C163.1 48 84.4 108.9 57.7 193zM464 256c0-36.8-9.6-71.4-26.4-101.5L412 164.8c-15.7 6.3-23.8 23.8-18.5 39.8l16.9 50.7c3.5 10.4 12 18.3 22.6 20.9l29.1 7.3c1.2-9 1.8-18.2 1.8-27.5zm48 0c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256z">
                                                                </path>
                                                            </svg><!-- <i class="fs-input-icon fa fa-globe-americas"></i> Font Awesome fontawesome.com -->
                                                        </div>
                                                        @error('city')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-lg-12 col-md-12">
                                                    <div class="form-group city-outer-bx has-feedback">
                                                        <label>Postcode</label><span class="text-danger">*</span>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control " value="{{ old('postal_code') ?? auth()->user()->postcode }}" name="postal_code" type="number" placeholder="75462">
                                                            <svg class="svg-inline--fa fa-map-pin fs-input-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-pin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M320 144c0 79.5-64.5 144-144 144S32 223.5 32 144S96.5 0 176 0s144 64.5 144 144zM176 80c8.8 0 16-7.2 16-16s-7.2-16-16-16c-53 0-96 43-96 96c0 8.8 7.2 16 16 16s16-7.2 16-16c0-35.3 28.7-64 64-64zM144 480V317.1c10.4 1.9 21.1 2.9 32 2.9s21.6-1 32-2.9V480c0 17.7-14.3 32-32 32s-32-14.3-32-32z">
                                                                </path>
                                                            </svg><!-- <i class="fs-input-icon fas fa-map-pin"></i> Font Awesome fontawesome.com -->
                                                        </div>

                                                    </div>
                                                    @error('postal_code')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-xl-6 col-lg-8 col-md-12">
                                                    <div class="form-group city-outer-bx has-feedback">
                                                        <label>Full Address</label><span class="text-danger">*</span>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control " value="{{ old('full_address') ?? auth()->user()->full_address }}"
                                                                name="full_address" type="text"
                                                                placeholder="1363-1385 Sunset Blvd Angeles, CA 90026 ,USA">
                                                            <svg class="svg-inline--fa fa-location-dot fs-input-icon"
                                                                aria-hidden="true" focusable="false" data-prefix="fas"
                                                                data-icon="location-dot" role="img"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                                                data-fa-i2svg="">
                                                                <path fill="currentColor"
                                                                    d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z">
                                                                </path>
                                                            </svg><!-- <i class="fs-input-icon fas fa-map-marker-alt"></i> Font Awesome fontawesome.com -->
                                                        </div>
                                                    </div>
                                                    @error('full_address')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="text-left">
                                                        <button type="submit" class="site-button">Save Changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
    $('.dropify').dropify();
    $('.add_portfolio').click(function(){
        $(this).before('<input name="portfolio[]" accept="image/*" type="file" class="dropify"/>')
        $('.dropify').dropify();
    })
</script>
@endsection
