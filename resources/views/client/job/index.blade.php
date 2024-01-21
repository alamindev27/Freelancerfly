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
                                        <i class="fa-solid fa-money-bill-transfer me-2"></i>Posted Job
                                    </h4>
                                </div>


                                <div class="deposit-history">
                                    <div class="data-table-wrapper">
                                        <div class="product-filter-wrap d-flex justify-content-between align-items-center">
                                            <span class="woocommerce-result-count-left">Posted Job List</span>
                                        </div>
                                        <div class="table-data-list-wrap">
                                            <div class="custom-transaction-table">
                                                <div class="transaction-header justify-content-between align-items-center">
                                                    <div class="transaction-header-item five">
                                                        <span>Status</span>
                                                    </div>
                                                    <div class="transaction-header-item five">
                                                        <span>Job Name</span>
                                                    </div>
                                                    <div class="transaction-header-item five">
                                                        <span>Cost</span>
                                                    </div>
                                                    <div class="transaction-header-item five">
                                                        <span>Completed By</span>
                                                    </div>
                                                    <div class="transaction-header-item five text-start">
                                                        <span>Date</span>
                                                    </div>
                                                    <div class="transaction-header-item five">
                                                        <span>Action</span>
                                                    </div>
                                                </div>
                                                <div class="transaction-body-wrapper" id="main_balance_history_data">
                                                    @foreach ($jobs as $job)
                                                        <div class="transaction-body d-flex justify-content-between align-items-center flex-wrap">
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                @if ($job->status == 'pending')
                                                                    <span class=" d-flex align-items-end flex-wrap justify-content-start justify-content-md-end"><span class="table-id d-md-none">Add Amount</span> <span class="text-warning p-1">Pending</span></span>
                                                                @elseif($job->status == 'success')
                                                                    <span class=" d-flex align-items-end flex-wrap justify-content-start justify-content-md-end"><span class="table-id d-md-none">Add Amount</span> <span  class="text-success p-1">Approved</span></span>
                                                                @else
                                                                    <span class=" d-flex align-items-end flex-wrap justify-content-start justify-content-md-end"><span class="table-id d-md-none">Add Amount</span> <span  class="text-danger p-1">Rejected</span></span>
                                                                @endif
                                                            </div>

                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <span class="text-primary d-flex align-items-center flex-wrap justify-content-start justify-content-md-center"><span class="table-id d-md-none">Job Name</span>{{ $job->title }}</span>
                                                            </div>
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <span class=" d-flex align-items-center flex-wrap justify-content-start justify-content-md-center"><span class="table-id d-md-none">Cost</span>$ {{ $job->total_cost }}</span>
                                                            </div>
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <span class=" d-flex align-items-end flex-wrap justify-content-start justify-content-md-end"><span class="table-id d-md-none">Add Amount</span> <span class="text-success p-1">{{ submitedJob($job->id) > 0 ? submitedJob($job->id) : 0 }}/{{ $job->total_worker_needed }}</span></span>
                                                            </div>
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <span class="d-flex align-items-end flex-wrap justify-content-start  justify-content-md-end"><span class="table-id d-md-none">Date</span>{{ Carbon\Carbon::parse($job->created_at)->format('d/m/Y') }}<br>{{ Carbon\Carbon::parse($job->created_at)->format('g:i a') }}</span>
                                                            </div>
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <a href="{{ route('job.show', Crypt::encrypt($job->id)) }}" class="d-inline btn btn-sm btn-success text-decoration-none">Bost</a>
                                                                <a href="{{ route('client.job.proves', Crypt::encrypt($job->id)) }}" class="d-inline btn btn-sm btn-info text-decoration-none">Proves</a>
                                                                {{-- <a href="{{ route('job.show', Crypt::encrypt($job->id)) }}" class="d-inline btn btn-sm btn-success text-decoration-none">Details</a> --}}

                                                                {{-- @if (Request::url() == route('job.index') || Request::url() == route('job.rejected'))
                                                                    <a href="{{ route('job.show', Crypt::encrypt($job->id)) }}" class=" mx-1 text-decoration-none text-success"><i class="fa fa-eye"></i></a>
                                                                    <a href="{{ route('job.edit', Crypt::encrypt($job->id)) }}" class=" mx-1 text-decoration-none text-info"><i class="fa fa-edit"></i></a>
                                                                @else
                                                                    <a href="{{ route('job.show', Crypt::encrypt($job->id)) }}" class="dropdown-toggle custom-d service-link d-flex align-items-center flex-wrap justify-content-start justify-content-md-center" role="button"><svg style="width: 16px" class="svg-inline--fa fa-eye me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM432 256c0 79.5-64.5 144-144 144s-144-64.5-144-144s64.5-144 144-144s144 64.5 144 144zM288 192c0 35.3-28.7 64-64 64c-11.5 0-22.3-3-31.6-8.4c-.2 2.8-.4 5.5-.4 8.4c0 53 43 96 96 96s96-43 96-96s-43-96-96-96c-2.8 0-5.6 .1-8.4 .4c5.3 9.3 8.4 20.1 8.4 31.6z"></path></svg>View Details</a>
                                                                @endif --}}
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
