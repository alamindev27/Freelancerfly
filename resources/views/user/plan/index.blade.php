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
                            <div class="twm-right-section-panel site-bg-gray">

                                <div class="panel panel-default">
                                    <div class="panel-heading wt-panel-heading p-a20">
                                        <h4 class="panel-tittle m-a0">Plan</h4>
                                    </div>
                                    <div class="row justify-content-center">
                                        @foreach ($plans as $plan)
                                            <div class="col-md-4 my-3">
                                                <div class="card">
                                                    <div class="card-header bg-primary text-white text-center">
                                                        <h3 class="text-white">{{ $plan->plan_name }}</h2>
                                                    </div>
                                                    <div class="card-body Promoter Award_body">
                                                        <span style="color: #3498DB" ;="">
                                                            <p><i class="fas fa-check-circle text-blue"></i>&nbsp;&nbsp; Job Post Fee cost {{ $plan->job_post_fee }}%</p>
                                                            <p><i class="fas fa-check-circle text-green"></i> &nbsp;&nbsp;Withdraw Fee Less {{ $plan->withdraw_fee }}%</p>
                                                            <p><i class="fas fa-check-circle text-blue"></i> &nbsp;&nbsp; Get Post Boost Duration {{ $plan->post_bost_duration }} Minute</p>
                                                            <p><i class="fas fa-check-circle text-green"></i>&nbsp;&nbsp; Get Daily Spin Limit {{ $plan->daily_spin_limit }}</p>
                                                            <p class="font-weight-bold"><i class="fas fa-check-circle text-green"></i>&nbsp;&nbsp; Get Deposit Referral Commission {{ $plan->deposit_refer_commission }}%</p>
                                                            <p><i class="fas fa-check-circle text-green"></i>&nbsp;&nbsp; Get Task Commission {{ $plan->task_commission }}%</p>
                                                            @if ($plan->geen_mark_badge == 'yes')
                                                                <p><i class="fas fa-check-circle text-green"></i>&nbsp;&nbsp; <span class="text-capitalize">Green Mark Badge</span></p>
                                                            @endif
                                                            @if ($plan->profile_mark_badge == 'yes')
                                                                <p><i class="fas fa-check-circle text-green"></i>&nbsp;&nbsp; <span class="text-capitalize">Profile Mark Badge</span></p>
                                                            @endif
                                                            @if ($plan->live_phone_call_support == 'yes')
                                                                <p><i class="fas fa-check-circle text-green"></i>&nbsp;&nbsp; <span class="text-capitalize"> Live Phone Call Support</span></p>
                                                            @endif
                                                            <p class="text-center font-weight-bold"><b>Need 500 Refer to Active</b></p>
                                                            <div class="text-center">
                                                                <hr>
                                                                <button class="btn btn-primary">Buy at ${{ $plan->price }}</button>
                                                             </div>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                        {{-- <div class="col-md-4 mb-3">

                                           <div class="card">
                                              <div class="card-header bg-primary text-white text-center">
                                                 <h2 class="text-white">Essential</h2>
                                              </div>
                                              <div class="card-body Essential_body">
                                                 <span style="color: #3498DB" ;="">

                                                    <p><i class="fas fa-check-circle text-blue"></i>&nbsp;&nbsp; Job Post Fee cost 5%</p>
                                                    <p><i class="fas fa-check-circle text-green"></i> &nbsp;&nbsp;Withdraw Fee Less 2%</p>
                                                    <p><i class="fas fa-check-circle text-blue"></i> &nbsp;&nbsp; Get Post Boost Duration 5 Minute</p>
                                                    <p><i class="fas fa-check-circle text-green"></i>&nbsp;&nbsp; Get Daily Spin Limit 150</p>
                                                    <p class=""><i class="fas fa-check-circle text-green"></i>&nbsp;&nbsp; Get Deposit Referral Commission 5%</p>
                                                    <p><i class="fas fa-check-circle text-green"></i>&nbsp;&nbsp; Get Task Commission 1%</p>

                                                    <p class="text-muted">- &nbsp;&nbsp; <span class="text-capitalize">Profile Mark Badge</span></p>


                                                    <p class="text-muted">- &nbsp;&nbsp; Live Phone Call Support</p>



                                                    <div class="text-center">

                                                       <hr>
                                                       <button class="btn btn-primary" onclick="buySelect('Essential','29')">Buy at $29</button>

                                                    </div>


                                                 </span>
                                              </div>
                                           </div>

                                        </div>


                                        <div class="col-md-4 mb-3">

                                           <div class="card">
                                              <div class="card-header bg-primary text-white text-center">
                                                 <h2 class="text-white">Standard</h2>
                                              </div>
                                              <div class="card-body Standard_body">
                                                 <span style="color: #3498DB" ;="">

                                                    <p><i class="fas fa-check-circle text-blue"></i>&nbsp;&nbsp; Job Post Fee cost 5%</p>
                                                    <p><i class="fas fa-check-circle text-green"></i> &nbsp;&nbsp;Withdraw Fee Less 5%</p>
                                                    <p><i class="fas fa-check-circle text-blue"></i> &nbsp;&nbsp; Get Post Boost Duration 5 Minute</p>
                                                    <p><i class="fas fa-check-circle text-green"></i>&nbsp;&nbsp; Get Daily Spin Limit 200</p>
                                                    <p class=""><i class="fas fa-check-circle text-green"></i>&nbsp;&nbsp; Get Deposit Referral Commission 6%</p>
                                                    <p><i class="fas fa-check-circle text-green"></i>&nbsp;&nbsp; Get Task Commission 1%</p>

                                                    <p class="text-muted">- &nbsp;&nbsp; <span class="text-capitalize">Profile Mark Badge</span></p>


                                                    <p class="text-muted">- &nbsp;&nbsp; Live Phone Call Support</p>



                                                    <div class="text-center">

                                                       <hr>
                                                       <button class="btn btn-primary" onclick="buySelect('Standard','69')">Buy at $69</button>

                                                    </div>


                                                 </span>
                                              </div>
                                           </div>

                                        </div>


                                        <div class="col-md-4 mb-3">

                                           <div class="card">
                                              <div class="card-header bg-primary text-white text-center">
                                                 <h2 class="text-white">Professional</h2>
                                              </div>
                                              <div class="card-body Professional_body">
                                                 <span style="color: #3498DB" ;="">

                                                    <p><i class="fas fa-check-circle text-blue"></i>&nbsp;&nbsp; Job Post Fee cost 4%</p>
                                                    <p><i class="fas fa-check-circle text-green"></i> &nbsp;&nbsp;Withdraw Fee Less 10%</p>
                                                    <p><i class="fas fa-check-circle text-blue"></i> &nbsp;&nbsp; Get Post Boost Duration 5 Minute</p>
                                                    <p><i class="fas fa-check-circle text-green"></i>&nbsp;&nbsp; Get Daily Spin Limit 250</p>
                                                    <p class=""><i class="fas fa-check-circle text-green"></i>&nbsp;&nbsp; Get Deposit Referral Commission 6%</p>
                                                    <p><i class="fas fa-check-circle text-green"></i>&nbsp;&nbsp; Get Task Commission 2%</p>

                                                    <p><i class="fas fa-check-circle text-green"></i>&nbsp;&nbsp; <span class="text-capitalize">yellow Mark Badge</span></p>


                                                    <p><i class="fas fa-check-circle text-green"></i>&nbsp;&nbsp; Live Phone Call Support</p>



                                                    <div class="text-center">

                                                       <hr>
                                                       <button class="btn btn-primary" onclick="buySelect('Professional','109')">Buy at $109</button>

                                                    </div>


                                                 </span>
                                              </div>
                                           </div>

                                        </div>


                                        <div class="col-md-4 mb-3">

                                           <div class="card">
                                              <div class="card-header bg-primary text-white text-center">
                                                 <h2 class="text-white">Enterprise</h2>
                                              </div>
                                              <div class="card-body Enterprise_body">
                                                 <span style="color: #3498DB" ;="">

                                                    <p><i class="fas fa-check-circle text-blue"></i>&nbsp;&nbsp; Job Post Fee cost 4%</p>
                                                    <p><i class="fas fa-check-circle text-green"></i> &nbsp;&nbsp;Withdraw Fee Less 15%</p>
                                                    <p><i class="fas fa-check-circle text-blue"></i> &nbsp;&nbsp; Get Post Boost Duration 5 Minute</p>
                                                    <p><i class="fas fa-check-circle text-green"></i>&nbsp;&nbsp; Get Daily Spin Limit 300</p>
                                                    <p class=""><i class="fas fa-check-circle text-green"></i>&nbsp;&nbsp; Get Deposit Referral Commission 7%</p>
                                                    <p><i class="fas fa-check-circle text-green"></i>&nbsp;&nbsp; Get Task Commission 5%</p>

                                                    <p><i class="fas fa-check-circle text-green"></i>&nbsp;&nbsp; <span class="text-capitalize">green Mark Badge</span></p>


                                                    <p><i class="fas fa-check-circle text-green"></i>&nbsp;&nbsp; Live Phone Call Support</p>



                                                    <div class="text-center">

                                                       <hr>
                                                       <button class="btn btn-primary" onclick="buySelect('Enterprise','149')">Buy at $149</button>

                                                    </div>


                                                 </span>
                                              </div>
                                           </div>

                                        </div>


                                        <div class="col-md-4 mb-3">

                                           <div class="card">
                                              <div class="card-header bg-primary text-white text-center">
                                                 <h2 class="text-white">Default</h2>
                                              </div>
                                              <div class="card-body Default_body">
                                                 <span style="color: #3498DB" ;="">

                                                    <p><i class="fas fa-check-circle text-blue"></i>&nbsp;&nbsp; Job Post Fee cost 6%</p>
                                                    <p><i class="fas fa-check-circle text-green"></i> &nbsp;&nbsp;Withdraw Fee Less 0%</p>
                                                    <p><i class="fas fa-check-circle text-blue"></i> &nbsp;&nbsp; Get Post Boost Duration 0 Minute</p>
                                                    <p><i class="fas fa-check-circle text-green"></i>&nbsp;&nbsp; Get Daily Spin Limit 100</p>
                                                    <p class=""><i class="fas fa-check-circle text-green"></i>&nbsp;&nbsp; Get Deposit Referral Commission 5%</p>
                                                    <p><i class="fas fa-check-circle text-green"></i>&nbsp;&nbsp; Get Task Commission 1%</p>

                                                    <p class="text-muted">- &nbsp;&nbsp; <span class="text-capitalize">Profile Mark Badge</span></p>


                                                    <p class="text-muted">- &nbsp;&nbsp; Live Phone Call Support</p>



                                                    <div class="text-center">
                                                       <hr>
                                                       <button class="btn btn-dark mem_active_btn" disabled="">Activated</button>
                                                    </div>


                                                 </span>
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
