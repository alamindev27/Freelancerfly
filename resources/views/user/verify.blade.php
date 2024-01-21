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

        .form-control {
            height: 61px !important;
            padding: 20px !important;
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
                                        <h4 class="panel-tittle m-a0">Instant Account Verification</h4>
                                    </div>
                                    <div class="panel-body wt-panel-body p-a20 ">
                                        <form action="{{ route('user.profile.verify.submit') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control wt-form-control text-danger border border-danger" name="charge" type="text" readonly disabled value="2 Usd Charge">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <div class="ls-inputicon-box">
                                                            <select name="balance_type" id="balance_type" class="form-control text-dark">
                                                                 <option value="main_balance">Main Balance</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="">
                                                            <button type="submit" class="site-button">Instant Verify</button>
                                                        </div>

                                                        <div class="">
                                                            <a href="{{ route('both.main.balance') }}" class="site-button">Deposit Main Balance</a>
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
