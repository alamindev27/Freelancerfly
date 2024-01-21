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
                                            Gigs
                                        </h4>
                                        <div class="gig-pay-btn create-service">
                                            <a href="{{ route('gig.create') }}" class="d-block appy-btn">Create Gig <span><i
                                                        class="feather-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="panel-body wt-panel-body p-a20 m-b30 " style="transform: none;">

                                        <div class="row" style="transform: none;">

                                            <div class="col-lg-12 col-md-12 rightSidebar"
                                                style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">


                                                <div class="theiaStickySidebar"
                                                    style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                                                    <div class="side-bar custom mb-4 dashboard-custom my-service-tab">
                                                        <h4 class="text-center choose-plan">Service Info</h4>
                                                        <ul class="nav nav-tabs project-tab d-flex justify-content-center"
                                                            id="project-tab" role="tablist">
                                                            <li class="nav-item" role="presentation">
                                                                <a href="{{ route('gig.index') }}" class="nav-link  {{ Request::url() == route('gig.index') ? 'active' : '' }}">All Gig</a>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <a href="{{ route('user.gig.pending') }}" class="nav-link {{ Request::url() == route('user.gig.pending') ? 'active' : '' }}" >Pending</a>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <a href="{{ route('user.gig.active') }}" class="nav-link {{ Request::url() == route('user.gig.active') ? 'active' : '' }}">Active</a>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <a href="{{ route('user.gig.rejected') }}" class="nav-link {{ Request::url() == route('user.gig.rejected') ? 'active' : '' }}">Rejected</a>
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
                                                                            <div class="transaction-header-item seven text-center">
                                                                                <span>ID</span>
                                                                            </div>
                                                                            <div class="transaction-header-item seven text-center">
                                                                                <span>Gig Title</span>
                                                                            </div>

                                                                            <div class="transaction-header-item seven text-center">
                                                                                <span>Price</span>
                                                                            </div>

                                                                            <div class="transaction-header-item seven text-center">
                                                                                <span>Create Date</span>
                                                                            </div>

                                                                            <div class="transaction-header-item seven text-center">
                                                                                <span>Total Order</span>
                                                                            </div>

                                                                            @if (Request::url() == route('gig.index') || Request::url() == route('user.gig.rejected'))
                                                                                <div class="transaction-header-item seven text-center">
                                                                                    <span>Action</span>
                                                                                </div>
                                                                            @else
                                                                                <div class="transaction-header-item seven text-center">
                                                                                    <span>View Details</span>
                                                                                </div>
                                                                            @endif


                                                                        </div>
                                                                        <div class="transaction-body-wrapper" role="tabpanel" aria-labelledby="all" id="wallet_transaction_data">
                                                                            @foreach ($datas as $data)
                                                                                <div class="transaction-body d-flex justify-content-between align-items-center flex-wrap">
                                                                                    <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                                                        <span class="text-primary d-flex align-items-center flex-wrap justify-content-center"><span class="table-id d-md-none">ID</span>#{{ $data->gigId }}</span>
                                                                                    </div>
                                                                                    <div class="transaction-b-item wallet_item wallet_history transction-info" style="text-align: center;"><span class=" d-flex align-items-center flex-wrap justify-content-center"><span class="table-id d-md-none">Gig Title</span>{{ $data->title }}</span>
                                                                                    </div>
                                                                                    <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                                                        <span class=" d-flex align-items-center flex-wrap justify-content-center"><span class="table-id d-md-none">Price</span>
                                                                                            <span class="text-success p-2">$ {{ $data->basic_price }}</span>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                                                        <span class=" d-flex align-items-start flex-wrap justify-content-center justify-content-md-center"><span class="table-id d-md-none">Created Date</span>
                                                                                        {{ Carbon\Carbon::parse($data->created_at)->format('d/m/Y') }}<br>{{ Carbon\Carbon::parse($data->created_at)->format('g:i a') }}</span>
                                                                                    </div>
                                                                                    <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                                                        <span class=" d-flex align-items-center flex-wrap justify-content-center justify-content-md-center"><span class="table-id d-md-none">Total Order</span>{{ $data->total_order }}</span>
                                                                                    </div>
                                                                                    <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                                                        <span class=" d-flex align-items-center flex-wrap justify-content-start justify-content-md-left"><span class="table-id d-md-none text-clr-green2">Action</span><span class="text-success text-capitalize">


                                                                                            @if (Request::url() == route('gig.index') || Request::url() == route('user.gig.rejected'))
                                                                                                <a href="{{ route('user.gig.details', Crypt::encrypt($data->id)) }}" class=" mx-1 text-decoration-none text-success"><i class="fa fa-eye"></i></a>
                                                                                                <a href="{{ route('gig.edit', Crypt::encrypt($data->id)) }}" class=" mx-1 text-decoration-none text-info"><i class="fa fa-edit"></i></a>
                                                                                            @else
                                                                                            <a href="{{ route('user.gig.details', Crypt::encrypt($data->id)) }}" class="dropdown-toggle custom-d service-link d-flex align-items-center flex-wrap justify-content-start justify-content-md-center" role="button"><svg style="width: 16px" class="svg-inline--fa fa-eye me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM432 256c0 79.5-64.5 144-144 144s-144-64.5-144-144s64.5-144 144-144s144 64.5 144 144zM288 192c0 35.3-28.7 64-64 64c-11.5 0-22.3-3-31.6-8.4c-.2 2.8-.4 5.5-.4 8.4c0 53 43 96 96 96s96-43 96-96s-43-96-96-96c-2.8 0-5.6 .1-8.4 .4c5.3 9.3 8.4 20.1 8.4 31.6z"></path></svg><!-- <i class="fa fa-eye me-2"></i> Font Awesome fontawesome.com -->View Details</a>
                                                                                            @endif

                                                                                        </span></span>
                                                                                    </div>
                                                                                </div>
                                                                            @endforeach









                                                                            {{-- <div class="transaction-body d-flex justify-content-between align-items-center flex-wrap">
                                                                                <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                                                    <span class="text-primary d-flex align-items-center flex-wrap justify-content-start justify-content-md-left"><span class="table-id d-md-none">Order ID</span>#74463</span>
                                                                                </div>
                                                                                <div class="transaction-b-item wallet_item wallet_history transction-info" style="text-align: center;"><span class=" d-flex align-items-right flex-wrap justify-content-center justify-content-md-center"><span class="table-id d-md-none">Transaction Source</span>Group Job</span>
                                                                                </div>
                                                                                <div class="transaction-b-item wallet_item wallet_history  transction-info">
                                                                                    <span class=" d-flex align-items-center flex-wrap justify-content-center justify-content-md-center"><span class="table-id d-md-none">Type</span>
                                                                                        <span class="text-success p-2">Credit</span>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                                                    <span class=" d-flex align-items-right flex-wrap justify-content-end justify-content-md-center"><span class="table-id d-md-none">Amount</span>
                                                                                        <span class="text-success p-2">$ 0.10</span>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                                                    <span class=" d-flex align-items-start flex-wrap justify-content-center justify-content-md-center"><span class="table-id d-md-none">Date</span>26/10/2023<br>12:01 am</span>
                                                                                </div>
                                                                                <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                                                    <span class=" d-flex align-items-center flex-wrap justify-content-center justify-content-md-center"><span class="table-id d-md-none">Payment Method</span>Official</span>
                                                                                </div>
                                                                                <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                                                    <span class=" d-flex align-items-center flex-wrap justify-content-start justify-content-md-left"><span class="table-id d-md-none text-clr-green2">Status</span><span class="text-success">Successful</span></span>
                                                                                </div>
                                                                            </div> --}}
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
