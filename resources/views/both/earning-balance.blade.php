@extends('layouts.app_user')
@section('styles')
    <style>
        .all-dashboard-icon {
            width: 13px !important;
        }
    </style>
@endsection
@section('content')
    <div class="page-wraper">
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
                                            <i class="fa-solid fa-money-bill-transfer me-2"></i>Wallets - Earning
                                            Balance
                                        </h4>
                                    </div>

                                    <div class="earning-transfer-balanced mt-2 d-flex justify-content-center">
                                        <div class="deposit-package-item" id="earning-box-5" style="display:none">
                                            <form action="{{ route('both.transfer.mainBalance') }}" method="POST">
                                                @csrf
                                                <div class="project-rate-wrap d-flex flex-column align-items-center justify-content-center my-3 flex-wrap" id="project-rate-wrap">
                                                    <div class="form-group withdraw-input-box mb-2 ps-0">
                                                        <label class="mb-2">Transfer To Main Balance</label>
                                                        <div class="ls-inputicon-box rate-count d-flex align-items-center">
                                                            <input class="form-control amount" name="amount" type="number" value="0">
                                                            <i class="fs-input-icon fa-solid fa-sack-dollar"></i>
                                                        </div>
                                                        @error('amount')
                                                            <span class="d-block text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <small class="note-balance"><span>Note: </span>Minimum Transfer Amount <span>$ 1.00.</span></small>
                                                    </div>
                                                    <div class="form-group  me-4 mb-2 ps-0">
                                                        <div class="submit-payment-request">
                                                            <button type="submit submit_payment_transfer" class="site-button">Submit Payment</button>
                                                            <p class="notes_text text-center text-danger" style="font-size:12px"></p>
                                                            <p class="note_bal text-center text-danger" style="font-size:12px"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="deposit-balanced-wrapper d-flex justify-content-center">
                                        <div class="deposit-balanced-item two">
                                            <div class="deposited-balanced">
                                                <div class="deposited-item">
                                                    <div class="total-deposited-amount">
                                                        <h2 id="total_earning" total="0.1">
                                                            <span class="me-2"><i class="fa fa-dollar-sign"></i></span>{{ auth()->user()->earning_balance }}
                                                        </h2>
                                                    </div>
                                                    <p>Earning Balance</p>
                                                    <div class="earning-process-wrapper d-flex justify-content-between align-items-center">
                                                        <div class="earning-btn-item">
                                                            <div class="add-balance-deposit two">
                                                                <a href="#" id="withdraw-button-4">Withdraw</a>
                                                            </div>
                                                        </div>
                                                        <div class="earning-btn-item">
                                                            <div class="add-balance-deposit three">
                                                                <a href="#" id="withdraw-button-02">Transfer To Main Balance</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    @if (auth()->user()->earning_balance > 2)
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

                                            <form action="{{ route('both.earningBalance.withdraw', $getway->id) }}" method="POST">
                                                @csrf
                                                <div class="payment-proces-item">
                                                    <div class="top-content-payment">
                                                        <h4>'<span>{{ $getway->account_name }}</span>' Transaction Details</h4>
                                                    </div>
                                                    <div class="minimum-withdraw-info d-flex justify-content-between">
                                                        <div>
                                                            <p class="mb-0">NOTICE : Minimum withdraw amount:
                                                                <span>$3</span>.</p>
                                                            <p class="mb-0">Your withdraw charge is <span>{{ $getway->charge }}</span>%.</p>
                                                        </div>
                                                        <div class="payment-logo">
                                                            <img src="{{ asset($getway->logo) }}" alt="{{ $getway->account_name }}">
                                                        </div>
                                                    </div>
                                                    <div class="payment-input-wrapper">
                                                        <div class="payment-input-item">
                                                            <div class="ls-inputicon-box payment-input">
                                                                <label>Account Number</label><span class="text-danger">*</span>
                                                                <input class="form-control" id="account_no" name="account_number" placeholder="Enter Your Accont Number" type="text" value="" required>
                                                            </div>
                                                        </div>
                                                        <div class="payment-input-item">
                                                            <div class="ls-inputicon-box payment-input">
                                                                <label>Amount</label><span class="text-danger">*</span>
                                                                <input class="form-control amount_withdraw" onchange="changeValue{{ $getway->id }}(this)" id="amount_withdraw{{ $getway->id }}" name="amount" type="number" min="3" placeholder="Enter Your Amount" value="1" step="1" required>
                                                            </div>
                                                        </div>
                                                        <div class="payment-input-item">
                                                            <div class="ls-inputicon-box payment-input">
                                                                <label>Receivable Amount</label><span class="amount_show"></span><span class="text-danger">*</span>
                                                                <input class="form-control receive_amount" id="receive_amount{{ $getway->id }}" name="receivable_amount" type="number" value="" readonly>
                                                                <input type="hidden" class="withdraw_charge" value="9">
                                                            </div>
                                                        </div>
                                                        <div class="payment-input-item ">
                                                            <div class="ls-inputicon-box payment-input two">
                                                                <label>BDT Amount (<span class="get_usd_bdt" id=100>$1= 100 BDT</span>)</label>
                                                                <input class="form-control" id="bdt_amount_show{{ $getway->id }}" name="bdt_amount" type="number" value="" readonly>
                                                            </div>

                                                        </div>
                                                        <div class="payment-input-item ">
                                                            <div class="ls-inputicon-box payment-input ">
                                                                <label>Note</label>
                                                                <input class="form-control" id="note" name="note" type="text" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="submit-payment-request">
                                                        <div class="submit-payment-request">
                                                            <button type="submit" id="submit_payment_withdraw" class="site-button">Submit Payment</button>
                                                            <p class="notes_txt text-center text-danger" style="font-size:12px"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <script>
                                            function changeValue{{ $getway->id }}(el){
                                                $('#bdt_amount_show{{ $getway->id }}').val(parseFloat(($(el).val() * 100) - ($(el).val() * {{ $getway->charge }} / 100)));
                                                $('#receive_amount{{ $getway->id }}').val(parseFloat($(el).val() - ($(el).val() * {{ $getway->charge }} / 100)));
                                            }
                                        </script>
                                    @endforeach
                                    @else
                                        <div class="withdraw-main-wrapper" id="withdraw-window" style="display: none">
                                            <div class="alert alert-danger" role="alert">
                                                Sorry, you do not have sufficient balance to withdraw. You must have a
                                                minimum balance of $ 3.00 to make a withdrawal.
                                            </div>
                                        </div>
                                    @endif
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

            function getData() {
                getPaginatedListData("https://gpsfreelancer.com/user-get-withdraw-request-data", "#earning_balance_data",
                    params);
            }

            function getPaginatedData(button) {
                getPaginatedListData($(button).attr('data-href'), "#earning_balance_data", params);
            }
        </script>

        <script>
            function validateAmounts() {

                var min_withdraw_amount = parseFloat($(gateway).find("#min_withdraw_amount").val(), 2);
                var tot_earning = $(gateway).find().val();
                var bdt_amount_get = $(gateway).find("#bdt_amount_get").val();
                var amount_withdraw = $(gateway).find('#amount_withdraw').val();
                var bdt_amount_show = $(gateway).find("#bdt_amount_show");




                var amount_withdraw = parseFloat($(gateway).find("#amount_withdraw").val(), 2);


                var receivable_amount = $(gateway).find(".receive_amount");
                var withdraw_charge = $(gateway).find(".withdraw_charge").val();
                var withdrawal_charge = (amount_withdraw * withdraw_charge) / 100;

                var amountAfterWithdrawal = amount_withdraw - withdrawal_charge;
                if (isNaN(amount_withdraw)) {
                    amount_withdraw = 0;
                }
                $(gateway).find(".amount_show").text(' ' + $(gateway).find("#amount_withdraw").val() + " of " +
                    withdraw_charge + '%').css("font-size", "12px");
                $(gateway).find(".receive_amount").val(Number(amountAfterWithdrawal).toFixed(2));


                var total_amount = amountAfterWithdrawal * bdt_amount_get;

                bdt_amount_show.val(Number(total_amount).toFixed(2))
                // check min withdrow
                if (amount_withdraw < min_withdraw_amount) {

                    $(gateway).find("#submit_payment_withdraw").prop('disabled', true);
                    $(".notes_txt").text('Your amount is too low to make this transaction.')
                } else {

                    $(gateway).find("#submit_payment_withdraw").prop('disabled', false);
                    $(".notes_txt").text('');


                    // check total earn and withdorow
                    if (amount_withdraw > tot_earning) {
                        $(gateway).find("#submit_payment_withdraw").prop('disabled', true);
                        $(".notes_txt").text('Your earning balance is insuffcient .');
                    } else {
                        $(gateway).find("#submit_payment_withdraw").prop('disabled', false);
                        $(".notes_txt").text('');
                    }

                }


            };


            $('.amount_withdraw').on('input', function() {
                validateAmounts();

            });


            function changeGateway(gateway_name) {
                gateway = gateway_name;
                validateAmounts();
            }
        </script>

        <script>
            $('.dropify').dropify();
        </script>

        <script>
            $(document).ready(function() {
                $("#withdraw-button-02").click(function() {
                    $("#earning-box-5").slideToggle();
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
        </script>
        <script>
            document.getElementById("withdraw-button-4").addEventListener("click", function() {
                var box = document.getElementById("withdraw-window");
                if (box.style.display === "none") {

                    $("#withdraw-window").slideDown();
                } else {
                    $("#withdraw-window").slideUp();
                }
            });
        </script>

        <script>
            $(document).ready(function() {
                var amount = parseFloat($(".amount").val(), 2);
                var min_transfer_amount = ($('#min_transfer').val());
                var total_earning_amount = $("#total_earning").attr('total');

                function validateAmount() {
                    var amount = parseFloat($(".amount").val(), 2);

                    if (amount < min_transfer_amount && total_earning_amount > amount) {
                        $(".submit_payment_transfer").prop('disabled', true);
                        $(".notes_text").text('Minimum Transfer Amoun $' + parseFloat($("#min_transfer").val(), 2))
                    } else {
                        $(".submit_payment_transfer").prop('disabled', false);
                        $(".notes_text").text('');
                    }
                }

                $(".amount").on('input', function() {
                    validateAmount();
                });

                validateAmount();
            });
        </script>

        <script>
            $(".get_id").on('click', function() {
                get_id = $(this).attr('id');

                $.ajax({
                    url: `https://gpsfreelancer.com/get-gateway-data`,
                    type: 'POST',
                    data: {
                        "_token": `Bjn09xxdYRqgN3moXYN3D9NvymOrb6po5ZluvViG`,
                        "get_id": get_id,
                    },
                    dataType: 'json',
                    success: function(data) {

                        $("#account_no").val(data.data.account_number);
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }

                });
            });
        </script>




    @endsection
