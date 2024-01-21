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
        .zone_input,.country_input{
            display: none;
        }
        .input_error{
            border: 1px solid #f00;
        }
        .remove_item{
            cursor: pointer;
        }
        .country_input{
            display: none;
        }
    </style>
@endsection
@section('content')
    <div class="page-content">

        <div class="section-full p-t70  p-b70 site-bg-white">

            <script>
                var setting = {
                    "all_job_commision": {
                        "id": 1,
                        "title": "all_job_commision",
                        "slug": "all-job-commision",
                        "value": "1",
                        "status": 1,
                        "created_at": null,
                        "created_by": null,
                        "updated_at": "2024-01-11 21:48:39",
                        "updated_by": 1,
                        "deleted": 0,
                        "deleted_at": null,
                        "deleted_by": null
                    },
                    "minimum_value_per_group_job": {
                        "id": 2,
                        "title": "minimum_value_per_group_job",
                        "slug": "minimum-value-per-group-job",
                        "value": "0.70",
                        "status": 1,
                        "created_at": null,
                        "created_by": null,
                        "updated_at": "2024-01-11 21:48:39",
                        "updated_by": 1,
                        "deleted": 0,
                        "deleted_at": null,
                        "deleted_by": null
                    },
                    "minimum_value_per_service": {
                        "id": 3,
                        "title": "minimum_value_per_service",
                        "slug": "minimum-value-per-service",
                        "value": "1",
                        "status": 1,
                        "created_at": null,
                        "created_by": null,
                        "updated_at": "2024-01-11 21:48:39",
                        "updated_by": 1,
                        "deleted": 0,
                        "deleted_at": null,
                        "deleted_by": null
                    },
                    "screenshot_proof": {
                        "id": 4,
                        "title": "screenshot_proof",
                        "slug": "screenshor-proof",
                        "value": "0.02",
                        "status": 1,
                        "created_at": null,
                        "created_by": null,
                        "updated_at": "2024-01-11 21:48:39",
                        "updated_by": 1,
                        "deleted": 0,
                        "deleted_at": null,
                        "deleted_by": null
                    },
                    "refer_commision": {
                        "id": 5,
                        "title": "refer_commision",
                        "slug": "refer-commision",
                        "value": "0.20",
                        "status": 1,
                        "created_at": null,
                        "created_by": null,
                        "updated_at": "2024-01-11 21:48:39",
                        "updated_by": 1,
                        "deleted": 0,
                        "deleted_at": null,
                        "deleted_by": null
                    },
                    "withdraw_charge": {
                        "id": 6,
                        "title": "withdraw_charge",
                        "slug": "withdraw-charge",
                        "value": "9",
                        "status": 1,
                        "created_at": null,
                        "created_by": null,
                        "updated_at": "2024-01-11 21:48:39",
                        "updated_by": 1,
                        "deleted": 0,
                        "deleted_at": null,
                        "deleted_by": null
                    },
                    "minimum_withdraw_amount": {
                        "id": 7,
                        "title": "minimum_withdraw_amount",
                        "slug": "minimum-withdraw-amount",
                        "value": "3",
                        "status": 1,
                        "created_at": null,
                        "created_by": null,
                        "updated_at": "2024-01-11 21:48:39",
                        "updated_by": 1,
                        "deleted": 0,
                        "deleted_at": null,
                        "deleted_by": null
                    },
                    "minimum_add_amount": {
                        "id": 8,
                        "title": "minimum_add_amount",
                        "slug": "minimum-add-amount",
                        "value": "1",
                        "status": 1,
                        "created_at": null,
                        "created_by": null,
                        "updated_at": "2024-01-11 21:48:39",
                        "updated_by": 1,
                        "deleted": 0,
                        "deleted_at": null,
                        "deleted_by": null
                    },
                    "minimum_transfer_amount": {
                        "id": 9,
                        "title": "minimum_transfer_amount",
                        "slug": "minimum-transfer-amount",
                        "value": "1",
                        "status": 1,
                        "created_at": null,
                        "created_by": null,
                        "updated_at": "2024-01-11 21:48:39",
                        "updated_by": 1,
                        "deleted": 0,
                        "deleted_at": null,
                        "deleted_by": null
                    },
                    "minimum_value_per_personal_job": {
                        "id": 10,
                        "title": "minimum_value_per_personal_job",
                        "slug": "minimum-value-per-personal-job",
                        "value": "1",
                        "status": 1,
                        "created_at": null,
                        "created_by": null,
                        "updated_at": "2024-01-11 21:48:39",
                        "updated_by": 1,
                        "deleted": 0,
                        "deleted_at": null,
                        "deleted_by": null
                    },
                    "usd_to_bdt": {
                        "id": 11,
                        "title": "usd_to_bdt",
                        "slug": "usd-to-bdt",
                        "value": "100",
                        "status": 1,
                        "created_at": null,
                        "created_by": null,
                        "updated_at": "2024-01-11 21:48:39",
                        "updated_by": 1,
                        "deleted": 0,
                        "deleted_at": null,
                        "deleted_by": null
                    },
                    "euro_to_usd": {
                        "id": 12,
                        "title": "euro_to_usd",
                        "slug": "euro-to-usd",
                        "value": "1.15",
                        "status": 1,
                        "created_at": null,
                        "created_by": null,
                        "updated_at": null,
                        "updated_by": null,
                        "deleted": 0,
                        "deleted_at": null,
                        "deleted_by": null
                    },
                    "featured_group_job": {
                        "id": 13,
                        "title": "featured_group_job",
                        "slug": "featured-group-job",
                        "value": "0.06",
                        "status": 1,
                        "created_at": null,
                        "created_by": null,
                        "updated_at": null,
                        "updated_by": null,
                        "deleted": 0,
                        "deleted_at": null,
                        "deleted_by": null
                    },
                    "commision_type": {
                        "id": 14,
                        "title": "commision_type",
                        "slug": "refer-commision-type",
                        "value": "Lifetime",
                        "status": 1,
                        "created_at": null,
                        "created_by": null,
                        "updated_at": "2024-01-11 21:48:39",
                        "updated_by": 1,
                        "deleted": 0,
                        "deleted_at": null,
                        "deleted_by": null
                    },
                    "job_approval_type": {
                        "id": 15,
                        "title": "job_approval_type",
                        "slug": "job-approval-type",
                        "value": "2",
                        "status": 1,
                        "created_at": null,
                        "created_by": null,
                        "updated_at": null,
                        "updated_by": null,
                        "deleted": 0,
                        "deleted_at": null,
                        "deleted_by": null
                    },
                    "min_group_job_worker": {
                        "id": 16,
                        "title": "min_group_job_worker",
                        "slug": "min-group-job-worker",
                        "value": "5",
                        "status": 1,
                        "created_at": null,
                        "created_by": null,
                        "updated_at": "2024-01-11 21:48:39",
                        "updated_by": 1,
                        "deleted": 0,
                        "deleted_at": null,
                        "deleted_by": null
                    },
                    "max_unsatisfied_rate_group_job": {
                        "id": 17,
                        "title": "max_unsatisfied_rate_group_job",
                        "slug": "max-unsatisfied-rate-group-job",
                        "value": "30",
                        "status": 1,
                        "created_at": null,
                        "created_by": null,
                        "updated_at": "2024-01-11 21:48:39",
                        "updated_by": 1,
                        "deleted": 0,
                        "deleted_at": null,
                        "deleted_by": null
                    },
                    "min_group_job_complete_time": {
                        "id": 18,
                        "title": "min_group_job_complete_time",
                        "slug": "min-group-job-complete-time",
                        "value": "0",
                        "status": 1,
                        "created_at": null,
                        "created_by": null,
                        "updated_at": "2024-01-11 21:48:39",
                        "updated_by": 1,
                        "deleted": 0,
                        "deleted_at": null,
                        "deleted_by": null
                    },
                    "admin_login_route": {
                        "id": 19,
                        "title": "admin_login_route",
                        "slug": "admin-login-route",
                        "value": "dtu67pch58a6hg,hpy67cpdsv57h5hja,xa.kpgihuphf.glf,scksglfa,hori_bol,ls3ujhk37pup57hjgfh67",
                        "status": 1,
                        "created_at": null,
                        "created_by": null,
                        "updated_at": "2024-01-11 21:48:39",
                        "updated_by": 1,
                        "deleted": 0,
                        "deleted_at": null,
                        "deleted_by": null
                    }
                };
            </script>

            <div class="container">
                <div class="row">
                    @include('partials.profile-sidebar')


                    <div class="col-xl-9 col-lg-8 col-md-12 m-b30">

                        <div class="twm-right-section-panel site-bg-gray">
                            <div>

                                <div class="panel panel-default">
                                    <div class="panel-heading wt-panel-heading p-a20">
                                        <h4 class="panel-tittle m-a0"><i class="fa fa-suitcase me-2"></i>Post a Job</h4>
                                    </div>
                                    <div class="panel-body wt-panel-body p-a20 m-b30 ">

                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="form_holder">
                                                        <form id="msform" method="POST"
                                                            action="{{ route('job.store') }}" enctype="multipart/form-data">
                                                            @csrf

                                                            <input type="hidden" name="proof_price" value="">
                                                            {{-- <input type="text" id="allCountryId" name="allCountryId" value=""> --}}
                                                            <div class="progress-01-wrap d-flex justify-content-between align-items-center">
                                                                <div class="back-01">
                                                                    <a href="javascript:void(0)" class="previous"><span><i class="feather-chevron-left"></i></span><span class="hide-mobile">Back</span></a>
                                                                </div>
                                                                <ul id="progressbar">
                                                                    <li class="active">Region</li>
                                                                    <li>Category</li>
                                                                    <li>Details</li>
                                                                    <li>Settings</li>
                                                                </ul>
                                                                <div class="next-01">
                                                                    <a href="javascript:void(0)" class="next">
                                                                        <span class="hide-mobile">Next</span>
                                                                        <span><i class="feather-chevron-right"></i></span>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="fieldset-wrapper">
                                                                <fieldset class="msform-fieldset current">
                                                                    <div class="row">
                                                                        <div class=" col-md-12">
                                                                            <div class="form-group mb-2 custom-step-wrap">
                                                                                <label class="ms-3 mb-2 custom-title">Choose targeting zone <span class="text-danger">*</span></label>
                                                                                <div class="country-target-wrapper d-flex flex-wrap justify-content-between align-items-center">
                                                                                    @foreach ($regions as $region)
                                                                                        <label for="{{ $region->id }}" class="zone_item country-target-item {{ $loop->index == 0 ? 'active' : '' }}" selected_zone_id="{{ $region->id }}" selected_zone_name="{{ $region->name }}">
                                                                                            <div>
                                                                                                {{ $region->name }}
                                                                                            </div>
                                                                                        </label>
                                                                                        <input id="{{ $region->id }}" value="{{ $region->id }}" type="radio" {{ $loop->index == 0 ? 'checked' : '' }} class="zone_input" name="region_id" content="{{ $region->name }}" onchange="getCountry(this)" increase_rate="0">
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=" col-md-12">
                                                                            <div class="form-group mb-2 custom-step-wrap">
                                                                                <label class="ms-3 mb-2 custom-title">Select maximum <span class="exclude_country">0</span> countries you want to
                                                                                <span class="text-danger">exclude</span> from the selected zone</label>
                                                                                <div class="country-exclude-wrapper d-flex flex-wrap justify-content-between align-items-center">

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <input type="button" name="next" class="next action-button custom-btn-step" value="Apply and go to next" />
                                                                </fieldset>

                                                                <fieldset class="msform-fieldset" style="display: none;">
                                                                    <div class="row">
                                                                        <div class=" col-md-12">
                                                                            <div class="form-group mb-2 custom-step-wrap">
                                                                                <label class="ms-3 mb-2 custom-title">
                                                                                    Choose the job category <span
                                                                                        class="text-danger">*</span>
                                                                                </label>
                                                                                <div class="country-target-wrapper d-flex flex-wrap justify-content-between align-items-center">
                                                                                    @foreach ($categories as $category)
                                                                                        <label
                                                                                            for="category-{{ $category->id }}"
                                                                                            id="{{ $category->id }}"
                                                                                            onclick="get_subcategory({{ $category->id }})"
                                                                                            class="category_item country-target-item {{ $loop->index == 0 ? 'active' : '' }}"
                                                                                            selected_category="{{ $category->id }}">
                                                                                            <div>
                                                                                                {{ $category->category_name }}
                                                                                            </div>
                                                                                            <input type="radio"
                                                                                                {{ $loop->index == 0 ? 'checked' : '' }}
                                                                                                name="category_id"
                                                                                                id="category-{{ $category->id }}"
                                                                                                class="d-none"
                                                                                                value="{{ $category->id }}"
                                                                                                category_name = "{{ $category->category_name }}">
                                                                                        </label>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class=" col-md-12">
                                                                            <div class="form-group mb-2 custom-step-wrap">
                                                                                <label
                                                                                    class="ms-3 mb-2 custom-title">Choose
                                                                                    the subcategory <span
                                                                                        class="text-danger">*</span></label>
                                                                                <input type="hidden" id="rate"
                                                                                    name="rate" required>
                                                                                <div
                                                                                    class="subcategory-wrapper d-flex flex-wrap justify-content-between">

                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <input type="button" name="next"
                                                                        class="next action-button custom-btn-step"
                                                                        value="Apply and go to next" />
                                                                </fieldset>
                                                                <fieldset class="msform-fieldset" style="display: none;">
                                                                    <div class="row">
                                                                        <div class=" col-md-12">
                                                                            <div class="form-group mb-2 custom-step-wrap">

                                                                                <div class="ls-inputicon-box custom-i-box">
                                                                                    <label>Job Title <span
                                                                                            class="text-danger">*</span></label>
                                                                                    <input class="form-control"
                                                                                        name="title" id="job_title"
                                                                                        type="text"
                                                                                        placeholder="Enter your Job Title">
                                                                                    <small>HINT: Include Micro-Influencer in
                                                                                        the title</small>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class=" col-md-12">
                                                                            <div class="form-group mb-2 custom-step-wrap">
                                                                                <label class="ms-3 mb-2 custom-title">What
                                                                                    specific tasks need to be
                                                                                    completed</label>
                                                                                <div class="ls-inputicon-box custom-i-box">
                                                                                    <label>Step 1</label>
                                                                                    <input class="form-control"
                                                                                        name="step[]"
                                                                                        placeholder="Enter job step"
                                                                                        type="text">
                                                                                </div>

                                                                                <div
                                                                                    class="ls-inputicon-box custom-i-box ">
                                                                                    <label>Step 2</label>
                                                                                    <input class="form-control"
                                                                                        name="step[]"
                                                                                        placeholder="Enter job step"
                                                                                        type="text">
                                                                                </div>

                                                                                <div class="ls-inputicon-box custom-i-box">
                                                                                    <a class="add-extra add_step_btn"  href="javascript:void(0);"><span><i  class="feather-plus-circle me-2"></i></span>Add
                                                                                        Step</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class=" col-md-12">
                                                                            <div class="ls-inputicon-box custom-i-box ">
                                                                                <label class="mb-2">Description
                                                                                </label>
                                                                                <textarea class="form-control" name="description" rows="3" placeholder="Enter a comment"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group overview-wrapper">
                                                                                <label class="d-block">Group Job Thumbnail</label>
                                                                                <p class="mb-0">Talent who add portfolios to their profile are more likely to win work.</p>

                                                                                <div class="upload-screenshot">
                                                                                    <input type="file" name="thumbnail" class="dropify" data-min-height="100" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=" col-md-12">
                                                                            <div class="form-group mb-2 custom-step-wrap">
                                                                                <label class="ms-3 mb-2 custom-title text-start">Required proof the job was completed</label>
                                                                                <div class="ls-inputicon-box custom-i-box">
                                                                                    <label>Proof 1</label>
                                                                                    <input name="proofs[]" placeholder="Enter Proof" maxlength="255" class="form-control proof" type="text">
                                                                                    <select name="proofs_type[]" select="true" class="wt-select-box selectpicker mt-2 proof_type" data-live-search="true" title="" id="s-category" data-bv-field="size" required>
                                                                                        <option value=""> Select Proof Type </option>
                                                                                        <option value="0">Text proof</option>
                                                                                        <option value="1"> Screenshot proof </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="ls-inputicon-box custom-i-box">
                                                                                    <a class="add-extra add_proof_btn"  href="javascript:void(0);">
                                                                                        <span><i class="feather-plus-circle me-2"></i></span>Add Step
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <input type="button" name="next"
                                                                        class="next action-button custom-btn-step"
                                                                        value="Apply and go to next" />
                                                                </fieldset>
                                                                <fieldset class="msform-fieldset" style="display: none;">
                                                                    <h2 class="fs-title">Job Settings</h2>
                                                                    <div class="row">
                                                                        <div class=" col-md-6">
                                                                            <div class="form-group mb-2 custom-step-wrap">
                                                                                <div class="ls-inputicon-box custom-i-box">
                                                                                    <label>Level <span
                                                                                            class="text-danger">*</span></label>
                                                                                    <select name="user_level"
                                                                                        class="wt-select-box selectpicker"
                                                                                        data-live-search="true"
                                                                                        title="" id="worker_level"
                                                                                        data-bv-field="size" required>
                                                                                        <option value="4"
                                                                                            increase_rate = "0"> Level 0
                                                                                        </option>
                                                                                        <option value="5"
                                                                                            increase_rate = "10"> Level 1
                                                                                        </option>
                                                                                        <option value="6"
                                                                                            increase_rate = "20"> Level 2
                                                                                        </option>
                                                                                        <option value="7"
                                                                                            increase_rate = "30"> Level 4
                                                                                        </option>
                                                                                        <option value="8"
                                                                                            increase_rate = "40"> Level 5
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="ls-inputicon-box custom-i-box">
                                                                                    <label>Workers will earn <span
                                                                                            class="text-danger">*</span></label>
                                                                                    <input class="form-control worker_earn"
                                                                                        oninput="calculate_cost()"
                                                                                        name="each_worker_earn"
                                                                                        type="number" step="0.01"
                                                                                        required>
                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                        <div class=" col-md-6">
                                                                            <div class="form-group mb-2 custom-step-wrap">
                                                                                <div class="ls-inputicon-box custom-i-box">
                                                                                    <label>Workers needed <span
                                                                                            class="text-danger">*</span>
                                                                                        <span
                                                                                            class="text-warning"></span></label>
                                                                                    <input id="total_worker"
                                                                                        class="form-control total_worker"
                                                                                        oninput="calculate_cost()"
                                                                                        name="total_worker_needed"
                                                                                        type="number" value="5"
                                                                                        min="5" required>
                                                                                </div>
                                                                                <div class="ls-inputicon-box custom-i-box">
                                                                                    <label>Estimated approval day
                                                                                        <span
                                                                                            class="text-danger">*</span></label>
                                                                                    <input class="form-control"
                                                                                        name="estimated_approval_day"
                                                                                        id="estimated_approval_day"
                                                                                        type="number" min="1"
                                                                                        max="3" placeholder="1"
                                                                                        value="3" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <div class="form-group mb-2 custom-step-wrap">
                                                                                <div
                                                                                    class="ls-inputicon-box custom-i-box d-flex  align-items-center flex-wrap">
                                                                                    <label class="me-2">Feature Time
                                                                                    </label>
                                                                                    <div class="form-check me-2 mt-1">
                                                                                        <input name="feature"
                                                                                            class="form-check-input mt-1 featured_price"
                                                                                            onchange="calculate_cost()"
                                                                                            price = "0.15" type="radio"
                                                                                            value="1"
                                                                                            id="featured-1">
                                                                                        <label class="form-check-label"
                                                                                            for="featured-1">
                                                                                            1 Minutes Interval
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check me-2 mt-1">
                                                                                        <input name="feature"
                                                                                            class="form-check-input mt-1 featured_price"
                                                                                            onchange="calculate_cost()"
                                                                                            price = "0.14" type="radio"
                                                                                            value="2"
                                                                                            id="featured-2">
                                                                                        <label class="form-check-label"
                                                                                            for="featured-2">
                                                                                            2 Minutes Interval
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check me-2 mt-1">
                                                                                        <input name="feature"
                                                                                            class="form-check-input mt-1 featured_price"
                                                                                            onchange="calculate_cost()"
                                                                                            price = "0.13" type="radio"
                                                                                            value="3"
                                                                                            id="featured-3">
                                                                                        <label class="form-check-label"
                                                                                            for="featured-3">
                                                                                            3 Minutes Interval
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check me-2 mt-1">
                                                                                        <input name="feature"
                                                                                            class="form-check-input mt-1 featured_price"
                                                                                            onchange="calculate_cost()"
                                                                                            price = "0.12" type="radio"
                                                                                            value="4"
                                                                                            id="featured-4">
                                                                                        <label class="form-check-label"
                                                                                            for="featured-4">
                                                                                            4 Minutes Interval
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check me-2 mt-1">
                                                                                        <input name="feature"
                                                                                            class="form-check-input mt-1 featured_price"
                                                                                            onchange="calculate_cost()"
                                                                                            price = "0.11" type="radio"
                                                                                            value="5"
                                                                                            id="featured-5">
                                                                                        <label class="form-check-label"
                                                                                            for="featured-5">
                                                                                            5 Minutes Interval
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check me-2 mt-1">
                                                                                        <input name="feature"
                                                                                            class="form-check-input mt-1 featured_price"
                                                                                            onchange="calculate_cost()"
                                                                                            price = "0.1" type="radio"
                                                                                            value="6"
                                                                                            id="featured-6">
                                                                                        <label class="form-check-label"
                                                                                            for="featured-6">
                                                                                            6 Minutes Interval
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check me-2 mt-1">
                                                                                        <input name="feature"
                                                                                            class="form-check-input mt-1 featured_price"
                                                                                            onchange="calculate_cost()"
                                                                                            price = "0.09" type="radio"
                                                                                            value="7"
                                                                                            id="featured-7">
                                                                                        <label class="form-check-label"
                                                                                            for="featured-7"> 7 Minutes
                                                                                            Interval
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check me-2 mt-1">
                                                                                        <input name="feature"
                                                                                            class="form-check-input mt-1 featured_price"
                                                                                            onchange="calculate_cost()"
                                                                                            price = "0.08" type="radio"
                                                                                            value="8"
                                                                                            id="featured-8">
                                                                                        <label class="form-check-label"
                                                                                            for="featured-8"> 8 Minutes
                                                                                            Interval
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check me-2 mt-1">
                                                                                        <input name="feature"
                                                                                            class="form-check-input mt-1 featured_price"
                                                                                            onchange="calculate_cost()"
                                                                                            price = "0.07" type="radio"
                                                                                            value="9"
                                                                                            id="featured-9">
                                                                                        <label class="form-check-label"
                                                                                            for="featured-9">
                                                                                            9 Minutes Interval
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check me-2 mt-1">
                                                                                        <input name="feature"
                                                                                            class="form-check-input mt-1 featured_price"
                                                                                            onchange="calculate_cost()"
                                                                                            price = "0.06" type="radio"
                                                                                            value="10"
                                                                                            id="featured-10">
                                                                                        <label class="form-check-label"
                                                                                            for="featured-10">
                                                                                            10 Minutes Interval
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check me-2 mt-1">
                                                                                        <input name="feature"
                                                                                            class="form-check-input mt-1 featured_price"
                                                                                            onchange="calculate_cost()"
                                                                                            price = "0.05" type="radio"
                                                                                            value="11"
                                                                                            id="featured-11">
                                                                                        <label class="form-check-label"
                                                                                            for="featured-11">
                                                                                            11 Minutes Interval
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check me-2 mt-1">
                                                                                        <input name="feature"
                                                                                            class="form-check-input mt-1 featured_price"
                                                                                            onchange="calculate_cost()"
                                                                                            price = "0.04" type="radio"
                                                                                            value="12"
                                                                                            id="featured-12">
                                                                                        <label class="form-check-label"
                                                                                            for="featured-12">
                                                                                            12 Minutes Interval
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check me-2 mt-1">
                                                                                        <input name="feature"
                                                                                            class="form-check-input mt-1 featured_price"
                                                                                            onchange="calculate_cost()"
                                                                                            price = "0.03" type="radio"
                                                                                            value="13"
                                                                                            id="featured-13">
                                                                                        <label class="form-check-label"
                                                                                            for="featured-13">
                                                                                            13 Minutes Interval
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check me-2 mt-1">
                                                                                        <input name="feature"
                                                                                            class="form-check-input mt-1 featured_price"
                                                                                            onchange="calculate_cost()"
                                                                                            price = "0.02" type="radio"
                                                                                            value="14"
                                                                                            id="featured-14">
                                                                                        <label class="form-check-label"
                                                                                            for="featured-14">
                                                                                            14 Minutes Interval
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check me-2 mt-1">
                                                                                        <input name="feature"
                                                                                            class="form-check-input mt-1 featured_price"
                                                                                            onchange="calculate_cost()"
                                                                                            price = "0.01" type="radio"
                                                                                            value="15"
                                                                                            id="featured-15">
                                                                                        <label class="form-check-label"
                                                                                            for="featured-15">
                                                                                            15 Minutes Interval
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <input type="hidden" value=""
                                                                            name="featured_price" id="featured_price">
                                                                        <p
                                                                            class="alert alert-danger min_total_price_alert">
                                                                            Minimum spend requirement is $ 0.70</p>
                                                                    </div>
                                                                    <input type="submit" name="submit"
                                                                        class="submit action-button custom-btn-step"
                                                                        value="Post a Job" />
                                                                </fieldset>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-4 col-12">
                                                <div
                                                    class="post-summary-wrapper d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-content">
                                                        <h4>Summary</h4>
                                                    </div>
                                                    <div
                                                        class="middle-content custom-card-scroll d-flex flex-wrap justify-content-between">
                                                        <div class="content-box-item">
                                                            <div class="estimated-job-costs">
                                                                <h6>Estimated Job costs: <span id="estimated_price">$0.00</span></h6>
                                                                <h6>Commision Amount: <span id="commision">$0.00</span></h6>
                                                                <h6>Feature Price: <span id="feature_price">$0.00</span></h6>
                                                                <h6>Proof Price: <span id="proof_price">N/A</span></h6>
                                                                <h6>Category Rate: <span id="rate_price">N/A</span></h6>
                                                            </div>
                                                        </div>
                                                        <div class="content-box-item">
                                                            <div class="estimated-job-costs">
                                                                <h6>Total costs: <span id="total_cost">$0.00</span></h6>
                                                            </div>
                                                        </div>
                                                        <div class="content-box-item">
                                                                <div class="zone">
                                                                    <h6>Zone: <span id="side_zone"></span></h6>
                                                                </div>
                                                                <div class="excluded-wrap">
                                                                    <h6>Excluded: <span id="exclude_summery">N/A</span></h6>
                                                                </div>
                                                            </div>
                                                        <div class="content-box-item">
                                                            <div class="category-job-post">
                                                                <h6>Category: <span id="category_summary">N/A</span>
                                                                </h6>
                                                                <h6>Subcategory:<span id="subcategor_summary">N/A</span>
                                                                </h6>
                                                            </div>
                                                        </div>
                                                        <div class="content-box-item">
                                                            <div class="others-job-content">
                                                                <h6> Level: <span id="level">N/A</span></h6>
                                                                <h6>Workers needed: <span id="worker_summary">N/A</span>
                                                                </h6>
                                                                <h6> Workers will earn: <span
                                                                        id="worker_earn_summary">N/A</span></h6>
                                                                <h6> Hold job time: <span
                                                                        id="approval_day_summary">N/A</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-content">
                                                        <a href="javascript:location.reload()">Clear All</a>
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

    <script
        src="https://www.jqueryscript.net/demo/Creating-A-Modern-Multi-Step-Form-with-jQuery-CSS3/js/jquery.easing.min.js">
    </script>
    <script>
        $(function() {

            var current_fs, next_fs, previous_fs;
            var left, opacity, scale, step = 0;
            var animating;


            $(".next").click(function() {

                // scrol to top for mobile start
                var windowsize = $(window).width();
                $(window).resize(function() {
                    var windowsize = $(window).width();
                });

                if (windowsize < 767) {
                    window.scrollTo(0, 500);
                } else {
                    window.scrollTo(0, 150);
                }
                // scrol to top for mobile end


                if (step == 2) {
                    calculate_cost();
                    min_each_worker_earn();
                    var job_title = $('#job_title').val();
                    let proof_error = false;

                    if (job_title == '') {
                        $('#job_title').css('border', '1px solid #f00');
                        proof_error = true;

                    } else {
                        $('#job_title').css('border', 'none');
                    }

                    $(".proof").each(function() {
                        if ($(this).val() == '') {
                            $(this).addClass('input_error');
                            proof_error = true;
                        } else {
                            $(this).removeClass('input_error');
                        }
                    });


                    $(".proof_type").each(function() {

                        if ($(this).val() == '') {
                            if ($(this).attr('select') == "true") {
                                proof_error = true;
                            }
                            $(this).addClass('input_error');

                        } else {
                            $(this).parent().removeClass('input_error');
                        }

                    });

                    if (proof_error) {
                        return false;
                    }


                }
                step++

                if (animating) return false;
                animating = true;
                // current_fs = $(this).parent();
                // next_fs = $(this).parent().next();
                current_fs = $(".msform-fieldset.current");
                next_fs = $(current_fs).next();
                console.log(next_fs);
                if (next_fs.length <= 0) {
                    animating = false;
                    return false;
                }
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                current_fs.slideUp();
                next_fs.slideDown();
                $(current_fs).removeClass('current');
                $(next_fs).addClass('current');
                animating = false;
                /*current_fs.animate({opacity: 0}, {
                    step: function(now, mx) {
                        scale = 1 - (1 - now) * 0.2;
                        left = (now * 50)+"%";
                        opacity = 1 - now;
                        current_fs.css({'transform': 'scale('+scale+')'});
                        next_fs.css({'left': left, 'opacity': opacity});
                    },
                    duration: 1000,
                    complete: function(){
                        current_fs.hide();
                        animating = false;
                    },
                    easing: 'easeInOutBack'
                });
                next_fs.show();*/
            });



            $(".previous").click(function() {
                step--
                if (animating) return false;
                animating = true;

                /*current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();*/
                current_fs = $(".msform-fieldset.current");
                previous_fs = $(current_fs).prev();
                if (previous_fs.length <= 0) {
                    animating = false;
                    return false;
                }
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                current_fs.slideUp();
                previous_fs.slideDown();
                $(current_fs).removeClass('current');
                $(previous_fs).addClass('current');
                animating = false;
            });

            // $(".submit").click(function () {
            //     return false;
            // })

            $('input[type=radio][name=select]').change(function() {
                if (this.value == 'custom') {
                    $("#custom-feature-time").slideDown();
                } else {
                    $("#custom-feature-time").slideUp();
                }
            });

        });




        // count proof
        var screenshot_proof = 0;
        var proof_price = 0;
        $(document).on("change", ".proof_type", function() {
            var screenshot_proof = 0;

            $(".proof_type").each(function() {
                if ($(this).val() == 1) {
                    screenshot_proof++;
                }
            });

            proof_price = screenshot_proof * setting.screenshot_proof.value;
            $("[name='proof_price']").val(proof_price);
            $('#proof_price').text('$' + Number(proof_price).toFixed(2));
            calculate_cost();
        });



        $(document).ready(function() {
            var id = $('.zone_item').attr('selected_zone_id');

            $('#side_zone').text($('.zone_item').attr('selected_zone_name'));

            // calculate_cost();
            summery()
        });

        $('.zone_item').click(function() {
            $('.zone_item').removeClass('active');
            $(this).addClass('active');
            var id = $(this).attr('for');

        })

        var max_block_country = 0;

        // function get_country(id) {
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });

        //     $.ajax({
        //         url: "https://gpsfreelancer.com/get-country",
        //         method: 'POST',
        //         data: {
        //             id: id
        //         },
        //         dataType: 'JSON',
        //         success: function(response) {
        //             if (response.status == 'success') {
        //                 $('.country-exclude-wrapper').html(response.data);
        //                 max_block_country = response.block_country;
        //                 $('.exclude_country').text(max_block_country);
        //             }
        //         }
        //     });
        // }

        // Select Country
            // $(document).on('change', '.country_input', function(evt) {
            //     var checkedBoxes = $('.country_input:checked');
            //     var country_name = '';
            //     if (checkedBoxes.length > max_block_country) {
            //         $(this).prop('checked', false);
            //         showErrorAlert('Warning', 'You can select maximum ' + max_block_country + ' countries.', 'toastr');
            //     } else {
            //         $(this).closest('.country-exclude-item').toggleClass('active');
            //     }

            //     summery();

            // });

            function getCountry(el){
                var regionId = $(el).val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ route('client.getCountry') }}",
                    method: 'POST',
                    data: {
                        regionId: regionId
                    },
                    success: function(response) {
                        $('.country-exclude-wrapper').html(response);
                    }
                });
            }



            $(document).on('change', '.country_input', function(evt) {
                var checkedBoxes = $('.country_input:checked');
                var country_name = '';
                if (checkedBoxes.length > 4) {
                    $(this).prop('checked', false);
                    showErrorAlert('Warning', 'You can select maximum 4 countries.', 'toastr');
                } else {
                    $(this).closest('.country-exclude-item').toggleClass('active');
                }

                summery();

            });










        // Category and Subcategory Section ===========================================================
        $(document).ready(function() {
            var id = $('.category_item').attr('selected_category');
        });

        $('.category_item').click(function() {
            $('.category_item').removeClass('active');
            $(this).addClass('active');
            summery();
        })

        function get_subcategory(id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ route('client.getSubcategory') }}",
                method: 'POST',
                data: {
                    id: id
                },
                success: function(response) {
                    $('.country-exclude-wrapper').html(response);
                    $('.subcategory-wrapper').html(response);
                }
            });
        }


        $(document).on('click', '.subcategory-item', function() {
            $('.subcategory-item').removeClass('active');
            $(this).addClass('active');
            var subCatNme = $(this).attr('subcategory_name');
            var rate = $(this).attr('rate');
            $('#subcategor_summary').text(subCatNme);
            $('#rate').val(rate);
            $('#rate_price').text('$ '+rate);
            calculate_cost();
            summery();
        })


        // Add Step for job details menu
        var step_count = 2;
        $('.add_step_btn').click(function() {
            step_count++;
            $(this).parent('div').before('<div class="ls-inputicon-box custom-i-box ">\
            <label>Step ' + step_count + '</label>\
            <div class="d-flex align-items-center">\
                <input class="form-control me-2" name="step[]" placeholder="Enter job step" type="text"> <i class="fa fa-close text-danger remove_item"></i>\
            </div> \
            </div>');
        })

        $(document).on('click', '.remove_item', function() {
            $(this).closest('.custom-i-box').remove();
        })



        // Add Proff for job details menu
        var proof_count = 1;
        $('.add_proof_btn').click(function() {
            proof_count++;
            $(this).parent('div').before('<div class="ls-inputicon-box custom-i-box mt-4">\
                <div class="d-flex justify-content-between">\
                    <label >Proof ' + proof_count + '</label>\
                    <i class="fa fa-close text-danger remove_item"></i>\
                </div>\
                <input class="form-control proof" name="proofs[]" placeholder="Enter job proof" maxlength="255" type="text">\
                <select class="wt-select-box selectpicker mt-2 proof_type" name="proofs_type[]" select="true"  data-live-search="true" title="" id="s-category" data-bv-field="size" required>\
                    <option value="">Select Proof Type</option>\
                    <option value="0">Text Proof</option>\
                    <option value="1">Screenshot Proof</option>\
                </select>\
            </div>');
            $('.selectpicker').selectpicker('render');
        })



        // Calcualte Cost
        function calculate_cost() {
            var worker_earn = $('.worker_earn').val();
            var total_worker = $('.total_worker').val();
            var estimate_job_cost = worker_earn * total_worker;

            $('#estimated_price').text('$' + estimate_job_cost.toFixed(2));
            var commision_rate = 1;
            var commision_amount = (estimate_job_cost * commision_rate) / 100;
            $('#commision').text('$' + commision_amount.toFixed(2));

            var featured_price = parseFloat($(".featured_price:checked").attr('price'));
            if (featured_price > 0) {
                var total_cost = featured_price + estimate_job_cost + commision_amount + proof_price;
                $('#feature_price').text('$' + featured_price.toFixed(2));
            } else {
                var total_cost = estimate_job_cost + commision_amount + proof_price;
            }



            $('#total_cost').text('$' + total_cost.toFixed(2));

            var min_val_per_job = 0.70;

            if (min_val_per_job > Number(total_cost)) {
                $('.min_total_price_alert').fadeIn();
                $('.submit').prop('disabled', true);
            } else {
                $('.min_total_price_alert').fadeOut();
                $('.submit').prop('disabled', false);
            }

            summery();
        }

        function min_each_worker_earn() {
            var level_increase_rate = $("select[name='user_level'] option:selected").attr("increase_rate");
            var region_increase_rate = $("input[name='region_id']:checked").attr('increase_rate');

            var total_increase_rate = Number(level_increase_rate) + Number(region_increase_rate);
            var category_min_price = $("input[name='subcategory_id']:checked").attr('min_price');

            var min_price = Number(category_min_price) + Number(((total_increase_rate / 100) * category_min_price));

            $('.worker_earn').val(Number(min_price).toFixed(2));
            $('.worker_earn').attr('min', Number(min_price).toFixed(2));
        }

        $('#worker_level').change(function() {
            summery();
            calculate_cost();
            min_each_worker_earn()
        })


        $('input[name="estimated_approval_day"]').change(function() {
            summery();
        });

        function summery() {
            var checkedCountries = [];
            var allCountryId = [];
            $('.country_input:checked').each(function() {
                checkedCountries.push($(this).attr('country_name'));
                allCountryId.push($(this).attr('value'));
            });
            var excludedCountries = checkedCountries.join(', ');
            if (excludedCountries == '') {
                $('#exclude_summery').text("N/A");
                $('#allCountryId').val("");
            } else {
                $('#exclude_summery').text(excludedCountries);
                $('#allCountryId').val(allCountryId);
            }

            var category = $('input[name="category_id"]:checked').attr('category_name');
            $('#category_summary').text(category);

            var subcategory = $('input[name="subcategory_id"]:checked').attr('subcategory_name');
            $('#subcategor_summary').text(subcategory);

            var selectedText = $('#worker_level option:selected').text();
            $('#level').text(selectedText);

            var total_worker_needed = $('input[name="total_worker_needed"]').val();
            $('#worker_summary').text(total_worker_needed);

            var each_worker_earn = $('input[name="each_worker_earn"]').val();
            $('#worker_earn_summary').text(each_worker_earn);

            var estimated_approval_day = $('input[name="estimated_approval_day"]').val();
            $('#approval_day_summary').text(estimated_approval_day);

            var feature = $('input[name="feature"]:checked').val();
            $('#featur_summary').text(feature);
        }
    </script>

@endsection
