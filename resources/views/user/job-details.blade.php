@extends('layouts.app_user')
@section('content')
    <div class="page-content">

        <div class="section-full p-b90 bg-white mobie_mt-0">
            <div class="twm-candi-self-wrap-2 overlay-wraper mobie_mt-0"
                style="background-image:url(https://gpsfreelancer.com/assets/user/images/candidates/candidate-bg2.jpg);">
                <div class="overlay-main site-bg-primary opacity-01"></div>
                <div class="container">
                    <div class="twm-candi-self-info-2">
                        <div class="twm-candi-self-top">

                            <div class="twm-candi-fee">{{ $job->jobWithCategoryRelation->category_name }}</div>

                            <div class="twm-media">
                                <img src="{{ asset($job->thumbnail) }}" alt="{{ $job->title }}">
                            </div>

                            <div class="twm-mid-content">
                                <h4 class="twm-job-title">{{ $job->title }}</h4>
                                {{-- <p class="twm-candidate-address"><i class="feather-map-pin"></i>Region: <span>Worldwide Countries</span></p> --}}
                            </div>
                        </div>
                        <div class="twm-ep-detail-tags">
                            <a class="de-info twm-bg-sky-2"><i class="fa fa-briefcase me-1"></i></i> Job ID: 2311</a>
                            <a class="de-info twm-bg-blue-2"><i class="fa fa-clock me-1"></i> Estimated Approval Days:
                                {{ $job->estimated_approval_day }}</a>

                            <a class="de-info twm-bg-red" data-bs-toggle="modal" href="#report-group-job" role="button"><i
                                    class="fa fa-bug"></i> Report Job</a>
                            <br>
                            {{-- <a class="de-info twm-bg-purple" style="text-wrap: initial"><i class="fa fa-list-alt" aria-hidden="true"></i> Your Video Length (1-8) Minutes</a> --}}

                        </div>
                        <div class="twm-candi-self-bottom d-flex justify-content-center">
                            <p href="#" class="micro-job-earn secondry disabled mb-0">Each Worker Earn: <span>$
                                    {{ $job->each_worker_earn }}</span></p>
                        </div>
                        {{-- <div class="text-center mt-3">
                                <form action="https://gpsfreelancer.com/save-job/2311" method="POST">
                                    <input type="hidden" name="_token" value="oj2CdqUnz3vj6dM5fpSQc8OuB8lDfqyROimFGTdR"> <input type="hidden" name="job_type" value="1">
                                    <button class="btn btn-danger  me-3 btn-sm" title="Save Job" type="submit" style="height:32px;background: #ad143d"><span><i class="fa-solid fa-heart" style="color: white"></i></span></button>
                                </form>
                            </div> --}}
                    </div>
                </div>
            </div>
            {{-- <div class="page-notice-wrapper">
                    <p class="notice-text">
                        <marquee behavior="scroll" direction="left">Happy New Year BOOM OFFER FOR JOB POSTERS! Main
                            Balance Ads Funds $100=125$ or $50=65$ or $20=25$ from 01.01.2024 to 30.01.2024 will get
                            Bonus.</marquee>
                    </p>
                </div> --}}
            <div class="container">

                <div class="section-content">
                    <div class="twm-job-detail-2-wrap">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-8 col-md-12">

                                <div class="cabdidate-de-info custom">
                                    <div class="gig-description mt-4">
                                        <h4 class="custom-h4">What is expected from workers?</h4>
                                        <div class="gigs-t-expertise ">
                                            <ul>
                                                @php
                                                    $steps = json_decode($job->steps);
                                                @endphp
                                                @foreach ($steps as $step)
                                                    <li>{{ $step }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <h4 class="custom-h4">Submit your proofs below</h4>
                                    <form action="{{ route('user.job.submit', $job->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @if (!$jobSubmit)
                                            <div class="submit-work-proved">
                                                <div class="work-screenshot-wrap two d-flex justify-content-between flex-wrap mt-3">
                                                    @foreach (getProve($job->id) as $proof)
                                                        @if ($proof->proof_type == 0)
                                                            <div class="screenshot-item mb-5">
                                                                <div class="work-comments mt-4">{{++$loop->index.'. '.$proof->proof}}</h6>
                                                                    <textarea name="proof_text[]" class="form-control" rows="3" placeholder="Type here..." required></textarea>
                                                                    {{-- <input type="hidden" name="request_proof_text_id[]" value="5142"> --}}
                                                                </div>
                                                            </div>
                                                        @else

                                                            <div class="screenshot-item mb-5">
                                                                <h6>{{++$loop->index.'. '.$proof->proof}}</h6>
                                                                <div class="upload-screenshot">
                                                                    <input name="proof_image[]" accept="image/*" type="file" class="dropify" data-min-height="400" required />
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach

                                                    <div class="screenshot-item mb-5">
                                                        <h6>Note</h6>
                                                        <div class="work-comments mt-4">
                                                            <textarea name="note" class="form-control" rows="3" placeholder="Type here......" required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="side-bar custom mb-4 two">
                                                <div class="gig-pay-btn">
                                                    <h4 class="text-center">Finished the job? Submit the job!</h4>
                                                    <button type="submit" class="d-block appy-btn group_job_submit_btn" style="cursor: pointer"> Submit job <span><i class="feather-arrow-right"></i></span></button>
                                                </div>
                                            </div>
                                        @else
                                            <div class="submit-work-proved">
                                                <div class="work-screenshot-wrap two d-flex justify-content-between flex-wrap mt-3">
                                                    <h4 class="text-center mx-auto text-danger">You already submited This job</h2>
                                                </div>
                                            </div>
                                        @endif
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 rightSidebar">
                                <div class="side-bar custom mb-4 two">
                                    <div class="client-overview-p">
                                        <h4>Job Summary</h4>

                                        <div class="client-location d-flex align-items-center mb-2">
                                            <h4 class="me-2">Excluded countries:</h4>
                                            <h3>
                                                {{ $job->country_name }}
                                            </h3>
                                        </div>
                                        <div class="client-location d-flex align-items-center mb-2">
                                            <h4 class="me-2">Job Done:</h4>
                                            <h3><span>{{ submitedJob($job->id) > 0 ? submitedJob($job->id) : 0 }}</span> of <span>{{ $job->estimated_approval_day }}</span></h3>
                                        </div>
                                        <div class="client-location d-flex align-items-center mb-2">
                                            <h4 class="me-2">Workers Level:</h4>
                                            <h3><span>Level {{ $job->user_level }}</span></h3>
                                        </div>
                                        <div class="client-location d-flex align-items-start mb-2">
                                            <h4 class="me-2">Categories:</h4>
                                            <h3><span>{{ $job->jobWithCategoryRelation->category_name }}</span> </h3>
                                        </div>
                                        <div class="client-location d-flex align-items-start mb-2">
                                            <h4 class="me-2">Sub Categories:</h4>
                                            <h3><span>{{ $job->jobWithSubCategoryRelation->subcategory_name }}</span> </h3>
                                        </div>
                                        <h4 class="mb-3 mt-4">About the Employer</h4>
                                        <div class="client-location d-flex align-items-center mb-2">
                                            <h4 class="me-2">Employer Status:</h4>
                                            <h3><span>Level {{ auth()->user()->lavel }}</span></h3>
                                        </div>

                                        <div class="payment-method-wrapper mb-2">


                                        </div>

                                        <div class="total-job-post">
                                            <p><span>{{ jobCount() }}</span> jobs posted</p>
                                            <small>
                                        </div>
                                        <div class="member-join-date">
                                            <p class="mb-0">Member since: <span>{{ Carbon\Carbon::parse($job->created_at)->format('d/m/Y') }} <br> {{ Carbon\Carbon::parse($job->created_at)->format('g:i a') }}</span>
                                            </p>
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
    <!--Report Group Job Start-->
    <div class="modal fade delivery-project-modal" id="report-group-job" aria-hidden="true"
        aria-labelledby="sign_up_popupLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="#" method="post">
                    <input type="hidden" name="_token" value="oj2CdqUnz3vj6dM5fpSQc8OuB8lDfqyROimFGTdR">
                    <div class="row">
                        <div class="col-12">
                            <input type="hidden" name="report_to" value="11419">
                            <input type="hidden" name="group_job_id" value="2311">
                            <div class="form-group city-outer-bx has-feedback mb-2">
                                <label class="mb-2">Report Title <span class="text-danger">*</span></label>
                                <div class="ls-inputicon-box">
                                    <input class="form-control" name="title" type="text" placeholder="Report Title"
                                        required>
                                    <i class="fs-input-icon fa-solid fa-bug"></i>
                                </div>

                            </div>
                            <div class="form-group mb-2">
                                <div class="ls-inputicon-box custom-i-box modal-comments">
                                    <label class="custom-title mb-2">Describe your Report <span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control" name="description" rows="4" placeholder="Given a description about your report"
                                        required></textarea>
                                </div>
                            </div>
                            <div class="btn-submit-final mt-4 text-center">
                                <button type="submit" class="approve-final-btn d-inline">
                                    <i class="feather-briefcase me-2"></i> Submit Report
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
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


        $(document).ready(function() {
            var estimate_complete_minutes = 0;

            var estimate_complete_milisecond = Number(estimate_complete_minutes) * 60000;

            setTimeout(function() {
                $('.group_job_submit_btn').attr('type', "submit");
            }, estimate_complete_milisecond);

            $(document).on('click', '.group_job_submit_btn', function() {
                var submit_disabled = $('.group_job_submit_btn').attr('type');
                if (submit_disabled == "button") {
                    showErrorAlert('warning',
                        '<p class="text-justify">Dear Worker,<br>You have not completed the "Group Job" as per the requirement of the "Group Job" you are currently completing and want to earn.<br> Please complete the task correctly and resubmit</p>'
                    );
                }
            });
        });
    </script>
@endsection
