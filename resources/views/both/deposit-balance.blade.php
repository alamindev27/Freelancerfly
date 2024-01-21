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
                                            <i class="fa-solid fa-money-bill-transfer me-2"></i>Wallets - Deposit
                                            Balance
                                        </h4>
                                    </div>
                                    <div class="deposit-balanced-wrapper d-flex justify-content-between">
                                        <div class="deposit-balanced-item ">
                                            <div class="deposit-b-wrapper">
                                                <div class="top-deposit-content">
                                                    <h4>Do you want to accumulate balance for a limited time!</h4>
                                                    <h5>Choose a Package</h5>
                                                </div>
                                                <form action="{{ route('both.deposit.balanceStore') }}"  method="POST">
                                                    @csrf
                                                    <div class="deposit-package-wrap mt-4 text-center">
                                                        <div class="deposit-package-item">
                                                            <input class="checkbox-tools setting-deposit-id" type="radio" name="interest" id="tool-1" value="12">
                                                            <label class="for-checkbox-tools" for="tool-1"> 12% Interest for 12 Month
                                                                <input type="hidden" class="setting_deposit_month" value="12" name="deopsit_month">
                                                            </label>
                                                            <input class="checkbox-tools setting-deposit-id" type="radio" name="interest" id="tool-2" value="11">
                                                            <label class="for-checkbox-tools" for="tool-2"> 11% Interest for 11 Month
                                                                <input type="hidden" class="setting_deposit_month" value="11" name="deopsit_month">
                                                            </label>
                                                            <input class="checkbox-tools setting-deposit-id" type="radio" name="interest" id="tool-3" value="10">
                                                            <label class="for-checkbox-tools" for="tool-3"> 10% Interest for 10 Month
                                                                <input type="hidden" class="setting_deposit_month" value="10" name="deopsit_month">
                                                            </label>
                                                            <input class="checkbox-tools setting-deposit-id" type="radio" name="interest" id="tool-4" value="9">
                                                            <label class="for-checkbox-tools" for="tool-4"> 9% Interest for 9 Month
                                                                <input type="hidden" class="setting_deposit_month" value="9" name="deopsit_month">
                                                            </label>
                                                            <input class="checkbox-tools setting-deposit-id" type="radio" name="interest" id="tool-5" value="8">
                                                            <label class="for-checkbox-tools" for="tool-5"> 8% Interest for 8 Month
                                                                <input type="hidden" class="setting_deposit_month" value="8" name="deopsit_month">
                                                            </label>
                                                            <input class="checkbox-tools setting-deposit-id" type="radio" name="interest" id="tool-6" value="7">
                                                            <label class="for-checkbox-tools" for="tool-6"> 7% Interest for 7 Month
                                                                <input type="hidden" class="setting_deposit_month" value="7" name="deopsit_month">
                                                            </label>
                                                            <input class="checkbox-tools setting-deposit-id" type="radio" name="interest" id="tool-7" value="6">
                                                            <label class="for-checkbox-tools" for="tool-7"> 6% Interest for 6 Month
                                                                <input type="hidden" class="setting_deposit_month" value="6" name="deopsit_month">
                                                            </label>
                                                            <input class="checkbox-tools setting-deposit-id" type="radio" name="interest" id="tool-8" value="5">
                                                            <label class="for-checkbox-tools" for="tool-8"> 5% Interest for 5 Month
                                                                <input type="hidden" class="setting_deposit_month" value="5" name="deopsit_month">
                                                            </label>
                                                            <input class="checkbox-tools setting-deposit-id" type="radio" name="interest" id="tool-9" value="4">
                                                            <label class="for-checkbox-tools" for="tool-9"> 4% Interest for 4 Month
                                                                <input type="hidden" class="setting_deposit_month" value="4" name="deopsit_month">
                                                            </label>
                                                            <input class="checkbox-tools setting-deposit-id" type="radio" name="interest" id="tool-10" value="3">
                                                            <label class="for-checkbox-tools" for="tool-10"> 3% Interest for 3 Month
                                                                <input type="hidden" class="setting_deposit_month" value="3" name="deopsit_month">
                                                            </label>
                                                            <input class="checkbox-tools setting-deposit-id" type="radio" name="interest" id="tool-11" value="2">
                                                            <label class="for-checkbox-tools" for="tool-11"> 2% Interest for 2 Month
                                                                <input type="hidden" class="setting_deposit_month" value="2" name="deopsit_month">
                                                            </label>
                                                            <input class="checkbox-tools setting-deposit-id" type="radio" name="interest" id="tool-12" value="1">
                                                            <label class="for-checkbox-tools" for="tool-12">
                                                                1% Interest for 1 Month
                                                                <input type="hidden" class="deposit_month" value="1" name="deopsit_month">
                                                            </label>
                                                        </div>
                                                        <div class="deposit-package-item" id="deposit-box" style="display: none">
                                                            <div class="project-rate-wrap d-flex flex-column align-items-center justify-content-center my-3 flex-wrap" id="project-rate-wrap" style="display:none;">
                                                                <div class="account-choose-option">
                                                                    <div class="choose-your-payment-method">
                                                                        <h4>Choose your payment Method</h4>
                                                                        <div class="project-size-wrap d-flex justify-content-center mb-3 main-check-wrapper">
                                                                            <div class="form-check me-2 mt-1 d-flex justify-content-start main-check-two">
                                                                                <input name="balance_type" class="form-check-input mt-1 me-2" type="radio" value="1" id="flexCheckDefault-4">
                                                                                <label class="form-check-label" for="flexCheckDefault-4"> Main Balance
                                                                                </label>
                                                                            </div>

                                                                            <div class="form-check me-2 mt-1 d-flex justify-content-start main-check-two">
                                                                                <input name="balance_type" class="form-check-input mt-1 me-2" type="radio" value="2" id="flexCheckDefault-1">
                                                                                <label class="form-check-label" for="flexCheckDefault-1"> Earning Balance
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="deposit-balance-input-box" style="display: none" id="deposit-balance-input-box">
                                                                    <div class="form-group  mb-2 ps-0">
                                                                        <label class="mb-2">Deposit Amount</label>
                                                                        <div class=" deposit-input-amount jus">
                                                                            <div class="ls-inputicon-box rate-count w-100">
                                                                                <input class="form-control w-100" name="deposit_amount" type="number" step="any" value="{{ old('deposit_amount') }}" min="3" step="1" id="firstInput">
                                                                                <i class="fs-input-icon fa-solid fa-sack-dollar"></i>
                                                                                <small class="note-balance"><span>Note: </span>Minimum Deposit Amount $<span id="min_depsit_balance"></span> </small>
                                                                            </div>
                                                                            @error('deposit_amount')
                                                                                <span class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                            <div class="ls-inputicon-box rate-count ">
                                                                                {{-- <input class="form-control two" name="interest_rate" id="secondInput" type="number" value=" " disabled> --}}

                                                                                {{-- <i class="fs-input-icon fa-solid fa-sack-dollar"></i>
                                                                                <small class="note-balance"><span>Total</span> Profit Amount <span id="interest_rate">
                                                                                    </span>%</small> --}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group  me-4 mb-2 ps-0">
                                                                        <div class="submit-payment-request">
                                                                            <button type="submit" id="submit_button" class="site-button">Deposit Now</button>
                                                                            <p class="text-center text-danger text_notice" style="font-size:12px"></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                        <div class="deposit-balanced-item">
                                            <div class="deposited-balanced">
                                                <div class="deposited-item">
                                                    <div class="total-deposited-amount">
                                                        <h2>$ {{ auth()->user()->deposit_balance }}</h2>
                                                    </div>
                                                    <p>Deposited Balance</p>
                                                    <div class="deposit-duration">
                                                        <h6 class="duration_show"> </h6>
                                                    </div>
                                                    <div class="help-text-wrap">
                                                        <h6>Your Earning Balance or Main Balance can be transferred to
                                                            this balance at fixed profit for a specified period of time.
                                                        </h6>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="deposit-history">
                                        <div class="data-table-wrapper">
                                            <div class="product-filter-wrap d-flex justify-content-between align-items-center">
                                                <span class="woocommerce-result-count-left">Deposit History</span>
                                            </div>
                                            <div class="table-data-list-wrap">
                                                <div class="custom-transaction-table">
                                                    <div class="transaction-header justify-content-between align-items-center flex-wrap">
                                                        <div class="transaction-header-item desposit-h-01">
                                                            <span>SL No.</span>
                                                        </div>
                                                        <div class="transaction-header-item desposit-h-01">
                                                            <span>Deposit Amount</span>
                                                        </div>
                                                        <div class="transaction-header-item desposit-h-01">
                                                            <span>Date</span>
                                                        </div>
                                                        <div class="transaction-header-item desposit-h-01">
                                                            <span>Interest</span>
                                                        </div>
                                                        <div class="transaction-header-item desposit-h-01">
                                                            <span>Profit Amount</span>
                                                        </div>
                                                        <div class="transaction-header-item desposit-h-01">
                                                            <span>Status</span>
                                                        </div>
                                                        <div class="transaction-header-item desposit-h-01">
                                                            <span>Action</span>
                                                        </div>
                                                    </div>
                                                    <div class="transaction-body-wrapper" id="deposit_data">
                                                        <div class="transaction-body d-flex justify-content-between align-items-center flex-wrap">
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <span class="text-primary d-flex align-items-center flex-wrap justify-content-start justify-content-md-center"><span class="table-id d-md-none">ID</span>#456</span>
                                                            </div>
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <a href="javascript:void(0)" class="primary-btn-color service-link d-flex align-items-center flex-wrap justify-content-start justify-content-md-center"><span class="table-id d-md-none me-2">Balance Process</span><span>Add Fund to Main</span></a>
                                                            </div>
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <span class=" d-flex align-items-center flex-wrap justify-content-start justify-content-md-center"><span class="table-id d-md-none">Gateway</span>456</span>
                                                            </div>
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <span class=" d-flex align-items-center flex-wrap justify-content-start justify-content-md-center"><span class="table-id d-md-none">Gateway</span>456</span>
                                                            </div>
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <span class=" d-flex align-items-end flex-wrap justify-content-start justify-content-md-end"><span class="table-id d-md-none">Add Amount</span> <span class="text-success p-1">$ 456</span></span>
                                                            </div>
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <span class="d-flex align-items-end flex-wrap justify-content-start  justify-content-md-end"><span class="table-id d-md-none">Date</span>456<br>456</span>
                                                            </div>
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                    <span class=" d-flex align-items-end flex-wrap justify-content-start justify-content-md-end"><span class="table-id d-md-none">Add Amount</span> <span  class="text-danger p-1">Rejected</span></span>
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
            $('.dropify').dropify();
        </script>
        <script>
            $(function() {
                $('input[type=radio][name=interest]').change(function() {
                    $("#deposit-box").slideDown();
                });
                $('input[type=radio][name=balance_type]').change(function() {
                    $("#deposit-balance-input-box").slideDown();
                });
            });
        </script>

        {{-- <script>
            var first_amount = $('#firstInput').val();
            var second_amount = $('#secondInput');
            var min_deposit_amount = parseFloat($("#minimum_deposit_amount").val(), 2);
            $(".setting-deposit-id").on("click", function() {

                var setting_deposit_month = $(this).attr('depost_montn');
                var deposit_id = $(this).val();
                $.ajax({
                    url: `https://gpsfreelancer.com/get-deposit-data`,
                    type: 'POST',
                    data: {
                        "_token": `oj2CdqUnz3vj6dM5fpSQc8OuB8lDfqyROimFGTdR`,
                        "deposit_id": deposit_id,
                    },
                    dataType: 'json',
                    success: function(data) {
                        $(".duration_show").text("Duration : " + setting_deposit_month + "months")
                        $("#interest_rate").text(data.data.interest_rate);
                        // $("#min_depsit_balance").text(data.data.min_deposit);
                        $("#hidden_input1").val(data.data.interest_rate);
                        $("#firstInput").attr('min', data.data.min_deposit);
                        $("#min_depsit_balance").text(data.data.min_deposit);


                        $('#firstInput').on('input', function() {

                            var current_amount = $(this).val();
                            if (current_amount < data.data.min_deposit) {
                                $(".text_notice").text(
                                    'Your amount is too lower than minumum deposit amount');
                                $("#submit_button").prop('disabled', true);
                            } else {
                                $(".text_notice").text('');
                                $("#submit_button").prop('disabled', false);
                            }
                            second_amount.val(((parseFloat(current_amount) * parseFloat(data.data
                                .interest_rate)).toFixed(2)) / 100);
                        });
                    }
                });
            });
        </script> --}}

        <script>
            var params = {};
            $(document).on('change', '#short_by_posted_date', function() {
                params = {
                    day: $(this).val()
                };
                getData();
            });

            $(document).ready(function() {
                getData();
            });

            // function getData() {
            //     getPaginatedListData("https://gpsfreelancer.com/user-get-deposit-data", "#deposit_data", params);
            // }

            // function getPaginatedData(button) {
            //     getPaginatedListData($(button).attr('data-href'), "#deposit_data", params);
            // }
        </script>
@endsection
