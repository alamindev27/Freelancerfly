@extends('layouts.app_user')
@section('styles')
    <style>
        .all-dashboard-icon {
            width: 13px !important;
        }
        .wallets-item {
            flex-basis: 48% !important;
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
                            <div class="twm-right-section-panel candidate-save-job site-bg-gray">
                                <div class="panel panel-default">
                                    <div class="panel-heading wt-panel-heading p-a20 mb-3">
                                        <h4 class="panel-tittle m-a0">
                                            <svg style="width:30px" class="svg-inline--fa fa-money-bill-transfer me-2" aria-hidden="true"
                                                focusable="false" data-prefix="fas" data-icon="money-bill-transfer"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M535 41c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l64 64c4.5 4.5 7 10.6 7 17s-2.5 12.5-7 17l-64 64c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l23-23L384 112c-13.3 0-24-10.7-24-24s10.7-24 24-24l174.1 0L535 41zM105 377l-23 23L256 400c13.3 0 24 10.7 24 24s-10.7 24-24 24L81.9 448l23 23c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L7 441c-4.5-4.5-7-10.6-7-17s2.5-12.5 7-17l64-64c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9zM96 64H337.9c-3.7 7.2-5.9 15.3-5.9 24c0 28.7 23.3 52 52 52l117.4 0c-4 17 .6 35.5 13.8 48.8c20.3 20.3 53.2 20.3 73.5 0L608 169.5V384c0 35.3-28.7 64-64 64H302.1c3.7-7.2 5.9-15.3 5.9-24c0-28.7-23.3-52-52-52l-117.4 0c4-17-.6-35.5-13.8-48.8c-20.3-20.3-53.2-20.3-73.5 0L32 342.5V128c0-35.3 28.7-64 64-64zm64 64H96v64c35.3 0 64-28.7 64-64zM544 320c-35.3 0-64 28.7-64 64h64V320zM320 352c53 0 96-43 96-96s-43-96-96-96s-96 43-96 96s43 96 96 96z">
                                                </path>
                                            </svg><!-- <i class="fa-solid fa-money-bill-transfer me-2"></i> Font Awesome fontawesome.com -->Wallets
                                        </h4>
                                    </div>

                                    <div class="wallets-wrapper d-flex justify-content-between align-items-center pb-4">
                                        <div class="wallets-item">
                                            <div class="wallets-item-wrap-one">
                                                <div class="main-balance-wrap d-flex flex-column align-items-center">
                                                    <div class="total-earning-amount">
                                                        <h2  class="d-flex align-items-center"><span class="me-2"><svg style="width: 15px" class="svg-inline--fa fa-dollar-sign"
                                                                    aria-hidden="true" focusable="false" data-prefix="fas"
                                                                    data-icon="dollar-sign" role="img"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                                    data-fa-i2svg="">
                                                                    <path fill="currentColor"
                                                                        d="M160 0c17.7 0 32 14.3 32 32V67.7c1.6 .2 3.1 .4 4.7 .7c10.6 1.6 42.1 6.7 55.1 10c17.1 4.3 27.5 21.7 23.2 38.9s-21.7 27.5-38.9 23.2c-9.3-2.4-37.6-7-48.9-8.7c-32.1-4.8-59.6-2.4-78.5 4.9c-18.3 7-25.9 16.9-27.9 28c-1.9 10.7-.5 16.8 1.3 20.6c1.9 4 5.6 8.5 12.9 13.4c16.2 10.8 41.1 17.9 73.3 26.7l2.8 .8c28.4 7.7 63.2 17.2 89 34.3c14.1 9.4 27.3 22.1 35.5 39.7c8.3 17.8 10.1 37.8 6.3 59.1c-6.9 38-33.1 63.4-65.6 76.7c-13.7 5.6-28.6 9.2-44.4 11V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.1c-.4-.1-.9-.1-1.3-.2l-.2 0 0 0c-24.4-3.8-64.5-14.3-91.5-26.3c-16.2-7.2-23.4-26.1-16.2-42.2s26.1-23.4 42.2-16.2c20.9 9.3 55.3 18.4 75.2 21.6c31.9 4.7 58.2 2 76-5.3c16.9-6.9 24.6-16.9 26.8-28.9c1.9-10.7 .5-16.8-1.3-20.6c-1.9-4-5.6-8.5-12.9-13.4c-16.2-10.8-41.1-17.9-73.3-26.7l-2.8-.8c-28.4-7.7-63.2-17.2-89-34.3c-14.1-9.4-27.3-22.1-35.5-39.7c-8.3-17.8-10.1-37.8-6.3-59.1C25 114.1 53 89.3 86 76.7c13-5 27.2-8.2 42-10V32c0-17.7 14.3-32 32-32z">
                                                                    </path>
                                                                </svg><!-- <i class="fa-solid fa-dollar-sign"></i> Font Awesome fontawesome.com --></span>
                                                                {{ auth()->user()->main_balance }}
                                                        </h2>
                                                    </div>
                                                    <p>Main Balance</p>
                                                    <div class="add-balance">
                                                        <a href="{{ route('both.main.balance') }}">Add Funds</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wallets-item">
                                            <div class="wallets-item-wrap-two">
                                                <div class="earning-balance">
                                                    <div class="earn-balance-wrap d-flex flex-column align-items-center">
                                                        <div class="total-earning-amount">
                                                            <h2 class="d-flex align-items-center">
                                                                <span class="me-2">
                                                                    <svg style="width: 15px"
                                                                        class="svg-inline--fa fa-dollar-sign"
                                                                        aria-hidden="true" focusable="false"
                                                                        data-prefix="fas" data-icon="dollar-sign"
                                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 320 512" data-fa-i2svg="">
                                                                        <path fill="currentColor"
                                                                            d="M160 0c17.7 0 32 14.3 32 32V67.7c1.6 .2 3.1 .4 4.7 .7c10.6 1.6 42.1 6.7 55.1 10c17.1 4.3 27.5 21.7 23.2 38.9s-21.7 27.5-38.9 23.2c-9.3-2.4-37.6-7-48.9-8.7c-32.1-4.8-59.6-2.4-78.5 4.9c-18.3 7-25.9 16.9-27.9 28c-1.9 10.7-.5 16.8 1.3 20.6c1.9 4 5.6 8.5 12.9 13.4c16.2 10.8 41.1 17.9 73.3 26.7l2.8 .8c28.4 7.7 63.2 17.2 89 34.3c14.1 9.4 27.3 22.1 35.5 39.7c8.3 17.8 10.1 37.8 6.3 59.1c-6.9 38-33.1 63.4-65.6 76.7c-13.7 5.6-28.6 9.2-44.4 11V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.1c-.4-.1-.9-.1-1.3-.2l-.2 0 0 0c-24.4-3.8-64.5-14.3-91.5-26.3c-16.2-7.2-23.4-26.1-16.2-42.2s26.1-23.4 42.2-16.2c20.9 9.3 55.3 18.4 75.2 21.6c31.9 4.7 58.2 2 76-5.3c16.9-6.9 24.6-16.9 26.8-28.9c1.9-10.7 .5-16.8-1.3-20.6c-1.9-4-5.6-8.5-12.9-13.4c-16.2-10.8-41.1-17.9-73.3-26.7l-2.8-.8c-28.4-7.7-63.2-17.2-89-34.3c-14.1-9.4-27.3-22.1-35.5-39.7c-8.3-17.8-10.1-37.8-6.3-59.1C25 114.1 53 89.3 86 76.7c13-5 27.2-8.2 42-10V32c0-17.7 14.3-32 32-32z">
                                                                        </path>
                                                                    </svg><!-- <i class="fa-solid fa-dollar-sign"></i> Font Awesome fontawesome.com -->
                                                                </span>
                                                                {{ auth()->user()->earning_balance }}
                                                            </h2>
                                                        </div>
                                                        <p>Earning Balance</p>
                                                        <div class="add-balance">
                                                            <a href="{{ route('both.withdraw.balance') }}">Withdraws</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="wallets-item">
                                            <div class="wallets-item-wrap-three">
                                                <div class="deposit-balance">
                                                    <div class="deposit-balance-wrap d-flex flex-column align-items-center">
                                                        <div class="total-earning-amount">
                                                            <h2  class="d-flex align-items-center"><span class="me-2"><svg style="width: 15px"
                                                                        class="svg-inline--fa fa-dollar-sign"
                                                                        aria-hidden="true" focusable="false"
                                                                        data-prefix="fas" data-icon="dollar-sign"
                                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 320 512" data-fa-i2svg="">
                                                                        <path fill="currentColor"
                                                                            d="M160 0c17.7 0 32 14.3 32 32V67.7c1.6 .2 3.1 .4 4.7 .7c10.6 1.6 42.1 6.7 55.1 10c17.1 4.3 27.5 21.7 23.2 38.9s-21.7 27.5-38.9 23.2c-9.3-2.4-37.6-7-48.9-8.7c-32.1-4.8-59.6-2.4-78.5 4.9c-18.3 7-25.9 16.9-27.9 28c-1.9 10.7-.5 16.8 1.3 20.6c1.9 4 5.6 8.5 12.9 13.4c16.2 10.8 41.1 17.9 73.3 26.7l2.8 .8c28.4 7.7 63.2 17.2 89 34.3c14.1 9.4 27.3 22.1 35.5 39.7c8.3 17.8 10.1 37.8 6.3 59.1c-6.9 38-33.1 63.4-65.6 76.7c-13.7 5.6-28.6 9.2-44.4 11V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.1c-.4-.1-.9-.1-1.3-.2l-.2 0 0 0c-24.4-3.8-64.5-14.3-91.5-26.3c-16.2-7.2-23.4-26.1-16.2-42.2s26.1-23.4 42.2-16.2c20.9 9.3 55.3 18.4 75.2 21.6c31.9 4.7 58.2 2 76-5.3c16.9-6.9 24.6-16.9 26.8-28.9c1.9-10.7 .5-16.8-1.3-20.6c-1.9-4-5.6-8.5-12.9-13.4c-16.2-10.8-41.1-17.9-73.3-26.7l-2.8-.8c-28.4-7.7-63.2-17.2-89-34.3c-14.1-9.4-27.3-22.1-35.5-39.7c-8.3-17.8-10.1-37.8-6.3-59.1C25 114.1 53 89.3 86 76.7c13-5 27.2-8.2 42-10V32c0-17.7 14.3-32 32-32z">
                                                                        </path>
                                                                    </svg><!-- <i class="fa-solid fa-dollar-sign"></i> Font Awesome fontawesome.com --></span>
                                                                    {{ auth()->user()->deposit_balance }}
                                                            </h2>
                                                        </div>
                                                        <p>Deposit Balance</p>
                                                        <div class="add-balance">
                                                            <a href="{{ route('both.deposit.balance') }}">Add Deposit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                    {{-- <div class="product-filter-wrap d-flex justify-content-between align-items-center">
                                        <span class="woocommerce-result-count-left">Transaction History</span>
                                        <div class="woocommerce-ordering twm-filter-select d-flex justify-content-md-end justify-content-between align-items-center"
                                            method="get">
                                            <div class="dropdown bootstrap-select wt-select-bar-2">
                                                <div class="dropdown-menu ">
                                                    <div class="bs-searchbox"><input type="search" class="form-control"
                                                            autocomplete="off" role="combobox" aria-label="Search"
                                                            aria-controls="bs-select-1" aria-autocomplete="list"></div>
                                                    <div class="inner show" role="listbox" id="bs-select-1"
                                                        tabindex="-1">
                                                        <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-transaction-table">
                                        <div class="transaction-header justify-content-between align-items-center">
                                            <div class="transaction-header-item text-start">
                                                <span>ID</span>
                                            </div>
                                            <div class="transaction-header-item wallet_item text-center"><span>Transaction
                                                    Source</span></div>
                                            <div class="transaction-header-item wallet_item text-center"><span>Type</span>
                                            </div>
                                            <div class="transaction-header-item wallet_item text-center">
                                                <span>Amount</span></div>
                                            <div class="transaction-header-item wallet_item text-center"><span>Date</span>
                                            </div>
                                            <div class="transaction-header-item wallet_item text-center"><span>Payment
                                                    Method</span></div>
                                            <div class="transaction-header-item wallet_item text-end"><span>Status</span>
                                            </div>
                                        </div>
                                        <div class="transaction-body-wrapper" id="wallet_transaction_data">
                                            <div
                                                class="transaction-body d-flex justify-content-between align-items-center flex-wrap">
                                                <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                    <span
                                                        class="text-primary d-flex align-items-center flex-wrap justify-content-start justify-content-md-left"><span
                                                            class="table-id d-md-none">Order ID</span>#142568</span>
                                                </div>
                                                <div class="transaction-b-item wallet_item wallet_history transction-info"
                                                    style="text-align: center;"><span
                                                        class=" d-flex align-items-right flex-wrap justify-content-center justify-content-md-center"><span
                                                            class="table-id d-md-none">Transaction Source</span>Add Fund to
                                                        Main</span>
                                                </div>
                                                <div
                                                    class="transaction-b-item wallet_item wallet_history  transction-info">
                                                    <span
                                                        class=" d-flex align-items-center flex-wrap justify-content-center justify-content-md-center"><span
                                                            class="table-id d-md-none">Type</span>
                                                        <span class="text-success p-2">Credit</span>
                                                    </span>
                                                </div>
                                                <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                    <span
                                                        class=" d-flex align-items-right flex-wrap justify-content-end justify-content-md-center"><span
                                                            class="table-id d-md-none">Amount</span>
                                                        <span class="text-success p-2">$ 200.00</span>
                                                    </span>
                                                </div>
                                                <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                    <span
                                                        class=" d-flex align-items-start flex-wrap justify-content-center justify-content-md-center"><span
                                                            class="table-id d-md-none">Date</span>26/12/2023<br>10:46
                                                        pm</span>
                                                </div>
                                                <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                    <span
                                                        class=" d-flex align-items-center flex-wrap justify-content-center justify-content-md-center"><span
                                                            class="table-id d-md-none">Payment Method</span>Bkash</span>
                                                </div>
                                                <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                    <span
                                                        class=" d-flex align-items-center flex-wrap justify-content-start justify-content-md-left"><span
                                                            class="table-id d-md-none text-clr-green2">Status</span><span
                                                            class="text-success">Rejected</span></span>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-body d-flex justify-content-between align-items-center flex-wrap">
                                                <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                    <span
                                                        class="text-primary d-flex align-items-center flex-wrap justify-content-start justify-content-md-left"><span
                                                            class="table-id d-md-none">Order ID</span>#74463</span>
                                                </div>
                                                <div class="transaction-b-item wallet_item wallet_history transction-info"
                                                    style="text-align: center;"><span
                                                        class=" d-flex align-items-right flex-wrap justify-content-center justify-content-md-center"><span
                                                            class="table-id d-md-none">Transaction Source</span>Group
                                                        Job</span>
                                                </div>
                                                <div
                                                    class="transaction-b-item wallet_item wallet_history  transction-info">
                                                    <span
                                                        class=" d-flex align-items-center flex-wrap justify-content-center justify-content-md-center"><span
                                                            class="table-id d-md-none">Type</span>
                                                        <span class="text-success p-2">Credit</span>
                                                    </span>
                                                </div>
                                                <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                    <span
                                                        class=" d-flex align-items-right flex-wrap justify-content-end justify-content-md-center"><span
                                                            class="table-id d-md-none">Amount</span>
                                                        <span class="text-success p-2">$ 0.10</span>
                                                    </span>
                                                </div>
                                                <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                    <span
                                                        class=" d-flex align-items-start flex-wrap justify-content-center justify-content-md-center"><span
                                                            class="table-id d-md-none">Date</span>26/10/2023<br>12:01
                                                        am</span>
                                                </div>
                                                <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                    <span
                                                        class=" d-flex align-items-center flex-wrap justify-content-center justify-content-md-center"><span
                                                            class="table-id d-md-none">Payment Method</span>Official</span>
                                                </div>
                                                <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                    <span
                                                        class=" d-flex align-items-center flex-wrap justify-content-start justify-content-md-left"><span
                                                            class="table-id d-md-none text-clr-green2">Status</span><span
                                                            class="text-success">Successful</span></span>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-body d-flex justify-content-between align-items-center flex-wrap">
                                                <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                    <span
                                                        class="text-primary d-flex align-items-center flex-wrap justify-content-start justify-content-md-left"><span
                                                            class="table-id d-md-none">Order ID</span>#73081</span>
                                                </div>
                                                <div class="transaction-b-item wallet_item wallet_history transction-info"
                                                    style="text-align: center;"><span
                                                        class=" d-flex align-items-right flex-wrap justify-content-center justify-content-md-center"><span
                                                            class="table-id d-md-none">Transaction Source</span>Add Fund to
                                                        Main</span>
                                                </div>
                                                <div
                                                    class="transaction-b-item wallet_item wallet_history  transction-info">
                                                    <span
                                                        class=" d-flex align-items-center flex-wrap justify-content-center justify-content-md-center"><span
                                                            class="table-id d-md-none">Type</span>
                                                        <span class="text-success p-2">Credit</span>
                                                    </span>
                                                </div>
                                                <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                    <span
                                                        class=" d-flex align-items-right flex-wrap justify-content-end justify-content-md-center"><span
                                                            class="table-id d-md-none">Amount</span>
                                                        <span class="text-success p-2">$ 1.00</span>
                                                    </span>
                                                </div>
                                                <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                    <span
                                                        class=" d-flex align-items-start flex-wrap justify-content-center justify-content-md-center"><span
                                                            class="table-id d-md-none">Date</span>23/10/2023<br>09:04
                                                        pm</span>
                                                </div>
                                                <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                    <span
                                                        class=" d-flex align-items-center flex-wrap justify-content-center justify-content-md-center"><span
                                                            class="table-id d-md-none">Payment Method</span>Nagad</span>
                                                </div>
                                                <div class="transaction-b-item wallet_item wallet_history transction-info">
                                                    <span
                                                        class=" d-flex align-items-center flex-wrap justify-content-start justify-content-md-left"><span
                                                            class="table-id d-md-none text-clr-green2">Status</span><span
                                                            class="text-success">Rejected</span></span>
                                                </div>
                                            </div>
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
@endsection
