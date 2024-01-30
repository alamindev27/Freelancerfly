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
                                        <i class="fa-solid fa-money-bill-transfer me-2"></i>View Proves
                                    </h4>
                                </div>


                                <div class="deposit-history">
                                    <div class="data-table-wrapper">
                                        <div class="product-filter-wrap d-flex justify-content-between align-items-center">
                                            <span class="woocommerce-result-count-left">View Proves</span>
                                        </div>
                                        <div class="table-data-list-wrap">
                                            <div class="custom-transaction-table">
                                                <div class="transaction-header justify-content-between align-items-center">
                                                    <div class="transaction-header-item five text-center">
                                                        <span>Date</span>
                                                    </div>
                                                    <div class="transaction-header-item five text-center">
                                                        <span>Action</span>
                                                    </div>


                                                    <div class="transaction-header-item five">
                                                        <span>Note</span>
                                                    </div>
                                                    {{--
                                                    <div class="transaction-header-item five">
                                                        <span>Completed By</span>
                                                    </div>
                                                    <div class="transaction-header-item five text-start">
                                                        <span>Date</span>
                                                    </div>
                                                    <div class="transaction-header-item five">
                                                        <span>Action</span>
                                                    </div> --}}
                                                </div>
                                                <div class="transaction-body-wrapper" id="main_balance_history_data">
                                                    @foreach ($proves as $proof)
                                                        <div class="transaction-body d-flex justify-content-between align-items-center flex-wrap">
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                {{ Carbon\Carbon::parse($proof->created_at)->format('Y-m-d g:i:s') }}

                                                            </div>



                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <span class="d-flex align-items-center flex-wrap justify-content-start justify-content-md-center"><span class="table-id d-md-none">Date</span>
                                                                    @if ($proof->status == 'pending')
                                                                        <a href="{{ route('client.approved.jobSubmit', $proof->id) }}" class="btn btn-success btn-sm">Satisfied</a>
                                                                    @else
                                                                        <a href="javascript:viod(0)" class="btn btn-primary btn-sm disabled">Satisfied</a>
                                                                    @endif

                                                                    <button type="button" role="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter{{ $loop->index }}" class="btn btn-sm btn-info mx-2">Show</button>
                                                                </span>
                                                            </div>

                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <span class=" d-flex align-items-center flex-wrap justify-content-start justify-content-md-center">
                                                                    <span class="table-id d-md-none">Note</span>
                                                                    {{ $proof->note }}
                                                                </span>
                                                            </div>
                                                            {{--
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <span class=" d-flex align-items-end flex-wrap justify-content-start justify-content-md-end"><span class="table-id d-md-none">Add Amount</span> <span class="text-success p-1">{{ submitedJob($job->id) > 0 ? submitedJob($job->id) : 0 }}/{{ $job->total_worker_needed }}</span></span>
                                                            </div>
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <span class="d-flex align-items-end flex-wrap justify-content-start  justify-content-md-end"><span class="table-id d-md-none">Date</span>{{ Carbon\Carbon::parse($job->created_at)->format('d/m/Y') }}<br>{{ Carbon\Carbon::parse($job->created_at)->format('g:i a') }}</span>
                                                            </div>
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <a href="{{ route('job.show', Crypt::encrypt($job->id)) }}" class="d-inline btn btn-sm btn-success text-decoration-none">Bost</a>
                                                                <a href="{{ route('client.job.proves', Crypt::encrypt($job->id)) }}" class="d-inline btn btn-sm btn-info text-decoration-none">Proves</a>
                                                            </div> --}}
                                                        </div>

                                                        <div class="modal fade" id="exampleModalCenter{{ $loop->index }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter{{ $loop->index }}Title" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                              <div class="modal-content">
                                                                <div class="modal-header">
                                                                  <h5 class="modal-title" id="exampleModalLongTitle">Show files</h5>
                                                                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                  </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    @foreach (proves($proof->job_id) as $key2 => $getprove)
                                                                        @if ($getprove->proof_type == 0)
                                                                            <p class="fw-bold">{{ ++$key2 }}. {{ $getprove->proof }}</p>
                                                                            @foreach (getAnswer($proof->id) as $answer)
                                                                                <p>{{ $answer->proof }}</p>
                                                                            @endforeach
                                                                        @else
                                                                            <p class="fw-bold">{{ ++$key2 }}. {{ $getprove->proof }}</p>
                                                                            @foreach (getAnswer2($proof->id) as $answer2)
                                                                                <img src="{{ asset($answer2->image) }}" style="width: 60px; height:60px" alt="" class="border bounded p-2 mx-2">
                                                                            @endforeach
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                                <div class="modal-footer">
                                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                </div>
                                                              </div>
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
