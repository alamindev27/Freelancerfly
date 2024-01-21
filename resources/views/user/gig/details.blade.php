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
                            <div class="wt-admin-right-page-header clearfix breadcumb-custom-2">
                                <h2>{{ $data->title }}</h2>
                            </div>

                            <div class="twm-dash-b-blocks mb-5">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <div class="panel panel-default site-bg-white">
                                            <div class="panel-heading wt-panel-heading p-a20 custom-panel-heading">
                                                <h4 class="panel-tittle m-a0"><svg style="width: 20px" class="svg-inline--fa fa-suitcase me-2"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="suitcase" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M176 56V96H336V56c0-4.4-3.6-8-8-8H184c-4.4 0-8 3.6-8 8zM128 96V56c0-30.9 25.1-56 56-56H328c30.9 0 56 25.1 56 56V96v32V480H128V128 96zM64 96H96V480H64c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64zM448 480H416V96h32c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64z">
                                                        </path>
                                                    </svg><!-- <i class="fa fa-suitcase me-2"></i> Font Awesome fontawesome.com -->Gig
                                                    Details</h4>
                                            </div>
                                            <div class="panel-body wt-panel-body bg-white">
                                                <div
                                                    class="ads-details-wrapper d-flex align-items-start flex-wrap justify-content-between">

                                                    <div class="ads-details-item custom-2">
                                                        <h4>Gig ID:</h4>
                                                        <div class="ads-content-overview">
                                                            <p>#{{ $data->gigId }}</p>
                                                        </div>
                                                    </div>

                                                    <div class="ads-details-item custom-2">
                                                        <h4>Gig Title</h4>
                                                        <div class="ads-content-overview">
                                                            <p>{{ $data->title }}</p>
                                                        </div>
                                                    </div>


                                                    <div class="ads-details-item custom-2">
                                                        <h4>Total Earn:</h4>
                                                        <div class="ads-content-overview">
                                                            <p>{{ $data->total_earn > 0 ? $data->total_earn : '-' }}</p>
                                                        </div>
                                                    </div>

                                                    <div class="ads-details-item custom-2">
                                                        <h4>Total Sale:</h4>
                                                        <div class="ads-content-overview">
                                                            <p>{{ $data->total_sale }}</p>
                                                        </div>
                                                    </div>



                                                    <div class="ads-details-item custom-2">
                                                        <h4>Basic Package Name</h4>
                                                        <div class="ads-content-overview">
                                                            <p>{{ $data->basic_package_name }}</p>
                                                        </div>
                                                    </div>

                                                    <div class="ads-details-item custom-2">
                                                        <h4>Basic Package Price</h4>
                                                        <div class="ads-content-overview">
                                                            <p>$ {{ $data->basic_price }}</p>
                                                        </div>
                                                    </div>

                                                    <div class="ads-details-item custom-2">
                                                        <h4>Basic Delivery Time</h4>
                                                        <div class="ads-content-overview">
                                                            <p>{{ $data->basic_delivery_time }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="ads-details-item custom-2">
                                                        <h4>Basic Total_ Revision</h4>
                                                        <div class="ads-content-overview">
                                                            @if ($data->basic_unlimited_revision == 'yes')
                                                                <p>Unlimited Revision</p>
                                                            @elseif ($data->basic_total_revision != '')
                                                                <p>{{ $data->basic_total_revision }}</p>
                                                            @else
                                                                <p>{{ $data->basic_total_revision }}</p>
                                                            @endif
                                                        </div>
                                                    </div>



                                                    <div class="ads-details-item custom-2">
                                                        <h4>Standard Package Name</h4>
                                                        <div class="ads-content-overview">
                                                            <p>{{ $data->standard_package_name }}</p>
                                                        </div>
                                                    </div>

                                                    <div class="ads-details-item custom-2">
                                                        <h4>Standard Package Price</h4>
                                                        <div class="ads-content-overview">
                                                            <p>$ {{ $data->standard_price }}</p>
                                                        </div>
                                                    </div>

                                                    <div class="ads-details-item custom-2">
                                                        <h4>Standard Delivery Time</h4>
                                                        <div class="ads-content-overview">
                                                            <p>{{ $data->standard_delivery_time }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="ads-details-item custom-2">
                                                        <h4>Standard Total_ Revision</h4>
                                                        <div class="ads-content-overview">
                                                            @if ($data->standard_unlimited_revision == 'yes')
                                                                <p>Unlimited Revision</p>
                                                            @elseif ($data->standard_total_revision != '')
                                                                <p>{{ $data->standard_total_revision }}</p>
                                                            @else
                                                                <p>{{ $data->standard_total_revision }}</p>
                                                            @endif
                                                        </div>
                                                    </div>




                                                    <div class="ads-details-item custom-2">
                                                        <h4>Premium Package Name</h4>
                                                        <div class="ads-content-overview">
                                                            <p>{{ $data->premium_package_name }}</p>
                                                        </div>
                                                    </div>

                                                    <div class="ads-details-item custom-2">
                                                        <h4>Premium Package Price</h4>
                                                        <div class="ads-content-overview">
                                                            <p>$ {{ $data->premium_price }}</p>
                                                        </div>
                                                    </div>

                                                    <div class="ads-details-item custom-2">
                                                        <h4>Premium Delivery Time</h4>
                                                        <div class="ads-content-overview">
                                                            <p>{{ $data->premium_delivery_time }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="ads-details-item custom-2">
                                                        <h4>Premium Total_ Revision</h4>
                                                        <div class="ads-content-overview">
                                                            @if ($data->premium_unlimited_revision == 'yes')
                                                                <p>Unlimited Revision</p>
                                                            @elseif ($data->premium_total_revision != '')
                                                                <p>{{ $data->premium_total_revision }}</p>
                                                            @else
                                                                <p>{{ $data->premium_total_revision }}</p>
                                                            @endif
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
