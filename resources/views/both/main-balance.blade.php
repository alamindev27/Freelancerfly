@extends('layouts.app_user')
@section('styles')
    <style>
        .all-dashboard-icon {
            width: 13px !important;
        }
    </style>
@endsection
@section('content')
    <div class="page-content">
        <div class="section-full p-t70  p-b70 site-bg-white">
            <div class="container">
                <div class="row">
                    @include('partials.profile-sidebar')
                    <div class="col-xl-9 col-lg-8 col-md-12 m-b30">

                        <div class="twm-right-section-panel candidate-save-job site-bg-gray">

                            <div class="panel panel-default">
                                <div class="panel-heading wt-panel-heading p-a20 mb-3">
                                    <h4 class="panel-tittle m-a0">
                                        <i class="fa-solid fa-money-bill-transfer me-2"></i>Wallets - Main Balance
                                    </h4>
                                </div>
                                <div class="deposit-balanced-wrapper d-flex justify-content-between mb-5">
                                    <div class="deposit-balanced-item ">
                                        <div class="deposit-b-wrapper two">
                                            <div class="top-deposit-content">
                                                <h5 class="mb-3">Add Fund in Main Balanace</h5>
                                                <div class="earning-btn-item">
                                                    <div class="add-balance-deposit two">
                                                        <a href="javascript:void(0)" id="add-fund-main">Add Fund</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="withdraw-main-wrapper" id="withdraw-window" style="display: none">
                                                <div class="withdraw-wrapper d-flex flex-wrap">

                                                    @foreach ($getways as $getway)
                                                        <div class="withdraw-payment-item two getway_btn"
                                                            data="{&quot;id&quot;:7,&quot;name&quot;:&quot;Bkash&quot;,&quot;logo&quot;:&quot;1703524360.jpg&quot;,&quot;account_number&quot;:null,&quot;calculate_bdt&quot;:1,&quot;usd_to_bdt_for_add_fund&quot;:100,&quot;status&quot;:1,&quot;created_at&quot;:&quot;2023-07-06 13:38:06&quot;,&quot;created_by&quot;:1,&quot;updated_at&quot;:null,&quot;updated_by&quot;:1,&quot;deleted&quot;:0,&quot;deleted_at&quot;:null,&quot;deleted_by&quot;:null,&quot;setting_payment_gateway&quot;:[{&quot;id&quot;:14,&quot;gateway_id&quot;:7,&quot;title&quot;:&quot;Send Money&quot;,&quot;value&quot;:&quot;+8801976091243&quot;,&quot;status&quot;:1,&quot;created_at&quot;:&quot;2023-07-06 13:50:07&quot;,&quot;created_by&quot;:1,&quot;updated_at&quot;:null,&quot;updated_by&quot;:null,&quot;deleted&quot;:0,&quot;deleted_at&quot;:null,&quot;deleted_by&quot;:null}]}">
                                                            <a href="#" class="payment-method-link"
                                                                data-href="#transaction-details-{{ $getway->id }}">
                                                                <div class="payment-img-box">
                                                                    <img src="{{ asset($getway->logo) }}"
                                                                        alt="{{ $getway->account_name }}">
                                                                </div>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>

                                            @foreach ($getways as $getway)
                                                <div class="payment-process-wrapper justify-content-center"
                                                    id="transaction-details-{{ $getway->id }}"
                                                    style="display: none !important;">
                                                    <form action="{{ route('both.main.submit', Crypt::encrypt($getway->id)) }}"
                                                        method="POST">
                                                        @csrf
                                                        <div class="payment-proces-item two">
                                                            <div class="top-content-payment">
                                                                <h4>'<span>{{ $getway->account_name }}</span>' Transaction
                                                                    Details</h4>
                                                            </div>
                                                            <div
                                                                class="minimum-withdraw-info d-flex justify-content-between">
                                                                <div>
                                                                    <p class="mb-0 min_withdraw_amount text-warning"
                                                                        data="1">NOTICE : Minimum add amount:
                                                                        <span>1</span>$.
                                                                    </p>

                                                                </div>
                                                                <div class="payment-logo">
                                                                    <img src="{{ asset($getway->logo) }}"
                                                                        alt="{{ $getway->account_name }}">
                                                                </div>
                                                            </div>
                                                            <div class="payment-input-wrapper">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label style="font-size: 12px;margin-bottom: 3px;font-weight: 500;">Send Money </label><span class="text-danger">*</span>
                                                                        <input class="form-control" name="send money" type="text" required value="{{ $getway->account_number }}" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="payment-input-item d-flex justify-content-between">
                                                                    <div class="ls-inputicon-box payment-input two">
                                                                        <div class="ls-inputicon-box payment-input">
                                                                            <label>Sender Number </label><span class="text-danger">*</span>
                                                                            <input class="form-control" name="sender_number" type="text" required value="{{ old('sender_number') }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="ls-inputicon-box payment-input two">
                                                                        <div class="ls-inputicon-box payment-input">
                                                                            <label>TrxId </label><span class="text-danger">*</span>
                                                                            <input class="form-control" name="trxid" type="text" required value="{{ old('trxid') }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="payment-input-item d-flex justify-content-between">
                                                                    <div class="ls-inputicon-box payment-input two">
                                                                        <div class="ls-inputicon-box payment-input">
                                                                            <label>Amount</label><span class="text-danger">*</span>
                                                                            <input class="form-control amou" name="amount" min="5" type="number" placeholder="Enter Your Amount" required value="0">
                                                                            <input type="hidden" class="bdt_get_amount"
                                                                                value="100.00">
                                                                        </div>
                                                                    </div>
                                                                    <div class="ls-inputicon-box payment-input two"
                                                                        style="display: ">
                                                                        <label>BDT Amount (<span>$1= 100.00
                                                                                BDT</span>)</label>
                                                                        <input class="form-control bdt_amount"
                                                                            name="bdt_amount" type="number" value="100"
                                                                            readonly>
                                                                        <input type="hidden" class="dollar_get_amount"
                                                                            value="0.00">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="submit-payment-request">
                                                                <button type="submit" class="site-button s_button">Submit
                                                                    Payment</button>
                                                                <p class="note text-danger" style="font-size:12px">
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="deposit-balanced-item">
                                        <div class="deposited-balanced">
                                            <div class="deposited-item">
                                                <div class="total-deposited-amount">
                                                    <h2><span class="me-2"><i class="fa fa-dollar-sign"></i></span>{{ auth()->user()->main_balance }}</h2>
                                                </div>
                                                <p>Main Balance</p>
                                                <div class="deposit-duration">
                                                    <h6><span class="me-2">Last Update:</span> 1 second ago
                                                </div>

                                                <div class="help-text-wrap">
                                                    <h6>You can add balance here, by clicking on the "Add Fund"
                                                        button.
                                                        An 'Add Fund' request may take 1 to 30 minutes to complete.
                                                        Moreover, if you experience any kind of systematic problem
                                                        in completing the "Add Fund" request. Do not hesitate to
                                                        contact us from the contact option, thanks for staying with
                                                        GPS Freelancer.</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="deposit-history" style="margin-top: 106px">
                                    <div class="data-table-wrapper">
                                        <div class="product-filter-wrap d-flex justify-content-between align-items-center">
                                            <span class="woocommerce-result-count-left">Main Balance History</span>
                                        </div>
                                        <div class="table-data-list-wrap">
                                            <div class="custom-transaction-table">
                                                <div class="transaction-header justify-content-between align-items-center">
                                                    <div class="transaction-header-item five">
                                                        <span>Transaction ID</span>
                                                    </div>
                                                    <div class="transaction-header-item five">
                                                        <span> Transaction Source</span>
                                                    </div>
                                                    <div class="transaction-header-item five">
                                                        <span>Payment Gateway</span>
                                                    </div>
                                                    <div class="transaction-header-item five">
                                                        <span>Add/Deduct Amount</span>
                                                    </div>
                                                    <div class="transaction-header-item five text-start">
                                                        <span>Date</span>
                                                    </div>
                                                    <div class="transaction-header-item five">
                                                        <span>Status</span>
                                                    </div>
                                                </div>
                                                <div class="transaction-body-wrapper" id="main_balance_history_data">
                                                    @foreach ($histories as $history)
                                                        <div class="transaction-body d-flex justify-content-between align-items-center flex-wrap">
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <span class="text-primary d-flex align-items-center flex-wrap justify-content-start justify-content-md-center"><span class="table-id d-md-none">ID</span>#{{ $history->trx_id }}</span>
                                                            </div>
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <a href="javascript:void(0)" class="primary-btn-color service-link d-flex align-items-center flex-wrap justify-content-start justify-content-md-center"><span class="table-id d-md-none me-2">Balance Process</span><span>Add Fund to Main</span></a>
                                                            </div>
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <span class=" d-flex align-items-center flex-wrap justify-content-start justify-content-md-center"><span class="table-id d-md-none">Gateway</span>{{ $history->depositWithGetwayRelation->account_name }}</span>
                                                            </div>
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <span class=" d-flex align-items-end flex-wrap justify-content-start justify-content-md-end"><span class="table-id d-md-none">Add Amount</span> <span class="text-success p-1">$ {{ $history->amount }}</span></span>
                                                            </div>
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <span class="d-flex align-items-end flex-wrap justify-content-start  justify-content-md-end"><span class="table-id d-md-none">Date</span>{{ Carbon\Carbon::parse($history->created_at)->format('d/m/Y') }}<br>{{ Carbon\Carbon::parse($history->created_at)->format('g:i a') }}</span>
                                                            </div>
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                @if ($history->status == 'pending')
                                                                    <span class=" d-flex align-items-end flex-wrap justify-content-start justify-content-md-end"><span class="table-id d-md-none">Add Amount</span> <span class="text-warning p-1">Pending</span></span>
                                                                @elseif($history->status == 'success')
                                                                    <span class=" d-flex align-items-end flex-wrap justify-content-start justify-content-md-end"><span class="table-id d-md-none">Add Amount</span> <span  class="text-success p-1">Approved</span></span>
                                                                @else
                                                                    <span class=" d-flex align-items-end flex-wrap justify-content-start justify-content-md-end"><span class="table-id d-md-none">Add Amount</span> <span  class="text-danger p-1">Rejected</span></span>
                                                                @endif
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
@endsection
@section('scripts')
    <script>
        function send_message(user_id) {
            $('#user_id').val(user_id);
            $('#send_message').modal('show');
        }

        $(document).on('click', '.active_mobile_menu_btn', function() {
            $('.active_mobile_menu').slideToggle();
        });

        $(document).ready(function() {
            var text = $('.active_mobile_menu').find('.active').text();
            $('.active_mobile_btn_text').text(text);
        });
    </script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {



            }, 300);
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#add-fund-main").click(function() {
                $("#withdraw-window").slideToggle();
            });

            $(".payment-method-link").click(function(e) {

                e.preventDefault();
                $(".withdraw-payment-item").removeClass('active-method');
                $(this).parent().addClass('active-method');
                let targetElement = $(this).attr('data-href');
                $(".payment-process-wrapper").slideUp();
                $(targetElement).slideDown();
            });

        });

        $(document).ready(function() {
            var current_amount = parseFloat($(".amou").val());
            var min_withdraw_amount = parseFloat($(".min_withdraw_amount").attr('data'));

            function validateAmount(current_tab = null) {

                current_amount = parseFloat($(current_tab).find(".amou").val());
                var bdt_rate = $(current_tab).find(".bdt_get_amount").val();
                var bdt_amount = bdt_rate * current_amount;
                $('.bdt_amount').val(bdt_amount);


                if (current_amount < min_withdraw_amount) {
                    $(current_tab).find(".s_button").prop('disabled', true);
                    $(current_tab).find(".note").text(
                        'Your amount is lower than to cover the cost of the transaction. Kindly increase the required amount to proceed.'
                    )

                } else {
                    $(current_tab).find(".s_button").prop('disabled', false);
                    $(current_tab).find(".note").text('');
                }
            }

            $(".amou").on('input', function() {
                var current_tab = $(this).closest('.payment-process-wrapper');


                validateAmount(current_tab);
            });

            validateAmount();
        });
    </script>

    <script>
        var params = {
            day: $('#short_by_posted_date').val(),
        };

        $(document).on('change', '#short_by_posted_date', function() {
            params = {
                day: $('#short_by_posted_date').val()
            };
            getData();
        });

        $(document).ready(function() {
            getData();
        });

        // function getData() {
        //     getPaginatedListData("https://gpsfreelancer.com/user-main-balance-history-data", "#main_balance_history_data",
        //         params);
        // }

        // function getPaginatedData(button) {
        //     getPaginatedListData($(button).attr('data-href'), "#main_balance_history_data", params);
        // }
    </script>
@endsection
