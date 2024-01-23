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
        .my-service-tab ul#project-tab {
            width: 480px !important;
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

                        <div class="col-xl-9 col-lg-8 col-md-12 m-b30" style="transform: none;">

                            <div class="twm-right-section-panel site-bg-gray" style="transform: none;">


                                <div class="panel panel-default" style="transform: none;">
                                    <div
                                        class="panel-heading wt-panel-heading p-a20 d-flex justify-content-between align-items-center">
                                        <h4 class="panel-tittle m-a0">
                                            <svg class="svg-inline--fa fa-suitcase me-2" style="width: 20px"
                                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="suitcase"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M176 56V96H336V56c0-4.4-3.6-8-8-8H184c-4.4 0-8 3.6-8 8zM128 96V56c0-30.9 25.1-56 56-56H328c30.9 0 56 25.1 56 56V96v32V480H128V128 96zM64 96H96V480H64c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64zM448 480H416V96h32c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64z">
                                                </path>
                                            </svg><!-- <i class="fa fa-suitcase me-2"></i> Font Awesome fontawesome.com -->My
                                            Order List
                                        </h4>
                                    </div>
                                    <div class="panel-body wt-panel-body p-a20 m-b30 " style="transform: none;">

                                        <div class="row" style="transform: none;">

                                            <div class="col-lg-12 col-md-12 rightSidebar"
                                                style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">


                                                <div class="theiaStickySidebar"
                                                    style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                                                    <div class="side-bar custom mb-4 dashboard-custom my-service-tab">
                                                        <h4 class="text-center choose-plan">Order Info</h4>
                                                        <ul class="nav nav-tabs project-tab d-flex justify-content-center"
                                                            id="project-tab" role="tablist">
                                                            <li class="nav-item" role="presentation">
                                                                <a href="{{ route('user.gig.saleList') }}" class="nav-link  {{ Request::url() == route('user.gig.saleList') ? 'active' : '' }}">All</a>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <a href="{{ route('user.gig.pending.saleList') }}" class="nav-link {{ Request::url() == route('user.gig.pending.saleList') ? 'active' : '' }}" >Pending</a>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <a href="{{ route('user.gig.active.saleList') }}" class="nav-link {{ Request::url() == route('user.gig.active.saleList') ? 'active' : '' }}">Active</a>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <a href="{{ route('user.gig.completed.saleList') }}" class="nav-link {{ Request::url() == route('user.gig.completed.saleList') ? 'active' : '' }}">Completed</a>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <a href="{{ route('user.gig.cancelled.saleList') }}" class="nav-link {{ Request::url() == route('user.gig.cancelled.saleList') ? 'active' : '' }}">Cancelled</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="gigs-package">
                                                        <div class="tab-content" id="myTab3Content">
                                                            <div class="tab-pane fade active show" id="service-list"
                                                                role="tabpanel" aria-labelledby="Monthly">


                                                                <div class="data-table-wrapper">
                                                                    <div class="custom-transaction-table" id="table_data">
                                                                        <div class="transaction-header justify-content-between align-items-center flex-wrap">
                                                                            <div class="transaction-header-item seven">
                                                                                <span>ID</span>
                                                                            </div>
                                                                            <div class="transaction-header-item seven">
                                                                                <span>Package Name</span>
                                                                            </div>

                                                                            <div class="transaction-header-item seven">
                                                                                <span>Price</span>
                                                                            </div>

                                                                            <div class="transaction-header-item seven">
                                                                                <span>Date</span>
                                                                            </div>

                                                                            <div class="transaction-header-item seven">
                                                                                <span>Status</span>
                                                                            </div>




                                                                        </div>
                                                                        <div class="transaction-body-wrapper" role="tabpanel" aria-labelledby="all" id="wallet_transaction_data">
                                                                            @foreach ($orders as $order)
                                                                                <div class="transaction-body d-flex justify-content-between flex-wrap">
                                                                                    <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                                                        <span class="text-primary d-flex flex-wrap justify-content-center"><span class="table-id d-md-none">Order ID</span>#{{ ++$loop->index }}</span>
                                                                                    </div>
                                                                                    <div class="transaction-b-item wallet_item wallet_history transction-info text-center"><span class=" d-flex flex-wrap justify-content-center"><span class="table-id d-md-none">Package Name</span>{{ $order->package_name }}</span>
                                                                                    </div>
                                                                                    <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                                                        <span class=" d-flex flex-wrap justify-content-center"><span class="table-id d-md-none">Price</span>
                                                                                            <span class="text-success p-2">$ {{ $order->price }}</span>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                                                        <span class=" d-flex align-items-start flex-wrap justify-content-center justify-content-md-center"><span class="table-id d-md-none">Date</span>
                                                                                        {{ Carbon\Carbon::parse($order->created_at)->format('d/m/Y') }}<br>{{ Carbon\Carbon::parse($order->created_at)->format('g:i a') }}</span>
                                                                                    </div>
                                                                                    {{-- <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                                                        <span class=" d-flex align-items-center flex-wrap justify-content-center justify-content-md-center"><span class="table-id d-md-none">Total Order</span>{{ $data->total_order }}</span>
                                                                                    </div> --}}
                                                                                    <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                                                        <span class=" d-flex align-items-center flex-wrap justify-content-center"><span class="table-id d-md-none text-clr-green2">Status</span><span class="text-success text-capitalize">


                                                                                            {{ $order->status }}

                                                                                        </span></span>
                                                                                    </div>
                                                                                </div>
                                                                            @endforeach
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
