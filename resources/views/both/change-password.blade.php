@extends('layouts.app_user')
@section('styles')
    <style>
        .all-dashboard-icon {
            width: 13px !important;
        }
    </style>

    <style>
        .error_input {
            border: 1px solid #f00 !important;
        }

        .dropify-wrapper {
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

                                <div class="panel panel-default">
                                    <div class="panel-heading wt-panel-heading p-a20">
                                        <h4 class="panel-tittle m-a0">Change Password</h4>
                                    </div>
                                    <div class="panel-body wt-panel-body p-a20 ">
                                        <form action="{{ route('both.updatePassword') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Old Password</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control wt-form-control" name="old_password"
                                                                type="password" placeholder="">
                                                            <svg class="svg-inline--fa fa-asterisk fs-input-icon"
                                                                aria-hidden="true" focusable="false" data-prefix="fas"
                                                                data-icon="asterisk" role="img"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                                                data-fa-i2svg="">
                                                                <path fill="currentColor"
                                                                    d="M192 32c17.7 0 32 14.3 32 32V199.5l111.5-66.9c15.2-9.1 34.8-4.2 43.9 11s4.2 34.8-11 43.9L254.2 256l114.3 68.6c15.2 9.1 20.1 28.7 11 43.9s-28.7 20.1-43.9 11L224 312.5V448c0 17.7-14.3 32-32 32s-32-14.3-32-32V312.5L48.5 379.4c-15.2 9.1-34.8 4.2-43.9-11s-4.2-34.8 11-43.9L129.8 256 15.5 187.4c-15.2-9.1-20.1-28.7-11-43.9s28.7-20.1 43.9-11L160 199.5V64c0-17.7 14.3-32 32-32z">
                                                                </path>
                                                            </svg><!-- <i class="fs-input-icon fa fa-asterisk "></i> Font Awesome fontawesome.com -->
                                                        </div>
                                                        @error('old_password')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        @if (session('notMatch'))
                                                            <span class="text-danger">{{ session('notMatch') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>New Password</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control wt-form-control" name="password"
                                                                type="password" placeholder="" aria-autocomplete="list">
                                                            <svg class="svg-inline--fa fa-asterisk fs-input-icon"
                                                                aria-hidden="true" focusable="false" data-prefix="fas"
                                                                data-icon="asterisk" role="img"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                                                data-fa-i2svg="">
                                                                <path fill="currentColor"
                                                                    d="M192 32c17.7 0 32 14.3 32 32V199.5l111.5-66.9c15.2-9.1 34.8-4.2 43.9 11s4.2 34.8-11 43.9L254.2 256l114.3 68.6c15.2 9.1 20.1 28.7 11 43.9s-28.7 20.1-43.9 11L224 312.5V448c0 17.7-14.3 32-32 32s-32-14.3-32-32V312.5L48.5 379.4c-15.2 9.1-34.8 4.2-43.9-11s-4.2-34.8 11-43.9L129.8 256 15.5 187.4c-15.2-9.1-20.1-28.7-11-43.9s28.7-20.1 43.9-11L160 199.5V64c0-17.7 14.3-32 32-32z">
                                                                </path>
                                                            </svg><!-- <i class="fs-input-icon fa fa-asterisk"></i> Font Awesome fontawesome.com -->
                                                        </div>
                                                        @error('password')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Confirm New Password</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control wt-form-control"
                                                                name="password_confirmation" type="password" placeholder="">
                                                            <svg class="svg-inline--fa fa-asterisk fs-input-icon"
                                                                aria-hidden="true" focusable="false" data-prefix="fas"
                                                                data-icon="asterisk" role="img"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                                                data-fa-i2svg="">
                                                                <path fill="currentColor"
                                                                    d="M192 32c17.7 0 32 14.3 32 32V199.5l111.5-66.9c15.2-9.1 34.8-4.2 43.9 11s4.2 34.8-11 43.9L254.2 256l114.3 68.6c15.2 9.1 20.1 28.7 11 43.9s-28.7 20.1-43.9 11L224 312.5V448c0 17.7-14.3 32-32 32s-32-14.3-32-32V312.5L48.5 379.4c-15.2 9.1-34.8 4.2-43.9-11s-4.2-34.8 11-43.9L129.8 256 15.5 187.4c-15.2-9.1-20.1-28.7-11-43.9s28.7-20.1 43.9-11L160 199.5V64c0-17.7 14.3-32 32-32z">
                                                                </path>
                                                            </svg><!-- <i class="fs-input-icon fa fa-asterisk"></i> Font Awesome fontawesome.com -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="text-left">
                                                        <button type="submit" class="site-button">Save Changes</button>
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
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.dropify').dropify();
        $('.add_portfolio').click(function() {
            $(this).before('<input name="portfolio[]" accept="image/*" type="file" class="dropify"/>')
            $('.dropify').dropify();
        })
    </script>
@endsection
