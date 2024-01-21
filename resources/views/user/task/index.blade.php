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
                                        <i class="fa-solid fa-money-bill-transfer me-2"></i>My Task
                                    </h4>
                                </div>


                                <div class="deposit-history">
                                    <div class="data-table-wrapper">
                                        <div class="product-filter-wrap d-flex justify-content-between align-items-center">
                                            <span class="woocommerce-result-count-left">My Task</span>
                                        </div>
                                        <div class="table-data-list-wrap">
                                            <div class="custom-transaction-table">
                                                <div class="transaction-header justify-content-between align-items-center">
                                                    <div class="transaction-header-item five">
                                                        <span>Date</span>
                                                    </div>
                                                    <div class="transaction-header-item five">
                                                        <span> Title</span>
                                                    </div>
                                                    <div class="transaction-header-item five">
                                                        <span>Earn By</span>
                                                    </div>
                                                    <div class="transaction-header-item five">
                                                        <span>Status</span>
                                                    </div>
                                                </div>
                                                <div class="transaction-body-wrapper" id="main_balance_history_data">
                                                    @foreach ($tasks as $history)
                                                        <div class="transaction-body d-flex justify-content-between align-items-center flex-wrap">
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <span class="text-primary d-flex align-items-center flex-wrap justify-content-start justify-content-md-center"><span class="table-id d-md-none">Date</span>{{  Carbon\Carbon::parse($history->created_at)->format('d/m/y') }}</span>
                                                            </div>
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <a target="_blank" href="{{ route('user.job.details', $history->submitJobWithJobRelation->id) }}" class="primary-btn-color service-link d-flex align-items-center flex-wrap justify-content-start justify-content-md-center"><span class="table-id d-md-none me-2">Title</span><span>{{ $history->submitJobWithJobRelation->title }}</span></a>
                                                            </div>
                                                            <div class="transaction-b-item five add-main-b add-fund-history">
                                                                <span class=" d-flex align-items-center flex-wrap justify-content-start justify-content-md-center"><span class="table-id d-md-none">Earn By</span>${{ $history->submitJobWithJobRelation->each_worker_earn }}</span>
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

@endsection
