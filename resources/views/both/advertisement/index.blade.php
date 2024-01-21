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
                                <div class="deposit-history">
                                    <div class="data-table-wrapper">
                                        <div class="product-filter-wrap d-flex justify-content-between align-items-center">
                                            <span class="woocommerce-result-count-left">Main Balance History</span>
                                            <span class="woocommerce-result-count-left">
                                                <a href="{{ route('advertisement.create') }}" class="btn btn-sm btn-primary">Add Advertisement</a>
                                            </span>
                                        </div>
                                        <div class="table-data-list-wrap">
                                            <div class="custom-transaction-table">
                                                <div class="transaction-header justify-content-between align-items-center">
                                                    <div class="transaction-header-item five">
                                                        <span>Title</span>
                                                    </div>
                                                    <div class="transaction-header-item five">
                                                        <span>Target Destination</span>
                                                    </div>
                                                    <div class="transaction-header-item five">
                                                        <span>Time</span>
                                                    </div>
                                                    {{-- <div class="transaction-header-item five">
                                                        <span>Add/Deduct Amount</span>
                                                    </div>
                                                    <div class="transaction-header-item five text-start">
                                                        <span>Date</span>
                                                    </div> --}}
                                                    <div class="transaction-header-item five">
                                                        <span>Status</span>
                                                    </div>
                                                    <div class="transaction-header-item five">
                                                        <span>Action</span>
                                                    </div>
                                                </div>
                                                <div class="transaction-body-wrapper" id="main_balance_history_data">
                                                    @foreach ($histories as $history)
                                                        <div class="transaction-body d-flex justify-content-between align-items-center flex-wrap">
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <span class="text-primary d-flex align-items-center flex-wrap justify-content-start justify-content-md-center"><span class="table-id d-md-none">Title</span>{{ $history->title }}</span>
                                                            </div>
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <a href="{{ $history->link }}" class="primary-btn-color service-link d-flex align-items-center flex-wrap justify-content-start justify-content-md-center"><span class="table-id d-md-none me-2">Target Destination</span><span>{{ $history->link }}</span></a>
                                                            </div>
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <span class="d-flex align-items-end flex-wrap justify-content-start  justify-content-md-end"><span class="table-id d-md-none">Date</span>{{ Carbon\Carbon::parse($history->created_at)->format('d/m/Y') }}<br>{{ Carbon\Carbon::parse($history->created_at)->format('g:i a') }}</span>
                                                            </div>
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                @if ($history->status == 'pending')
                                                                    <span class=" d-flex align-items-end flex-wrap justify-content-start justify-content-md-end"><span class="table-id d-md-none">Status</span> <span class="text-warning p-1">Pending</span></span>
                                                                @elseif($history->status == 'success')
                                                                    <span class=" d-flex align-items-end flex-wrap justify-content-start justify-content-md-end"><span class="table-id d-md-none">Status</span> <span  class="text-success p-1">Approved</span></span>
                                                                @else
                                                                    <span class=" d-flex align-items-end flex-wrap justify-content-start justify-content-md-end"><span class="table-id d-md-none">Status</span> <span  class="text-danger p-1">Rejected</span></span>
                                                                @endif
                                                            </div>
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <span class=" d-flex align-items-end flex-wrap justify-content-start justify-content-md-end">
                                                                    <span class="table-id d-md-none">Action</span>
                                                                    <span class="text-danger p-1"><a href="{{ route('both.advertisement.delete', $history->id) }}"><i class="fa fa-trash"></i></a></span>
                                                                </span>
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
