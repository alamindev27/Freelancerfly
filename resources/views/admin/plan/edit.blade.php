@extends('admin.layouts.app_admin')
@section('head')
{{-- others styles here --}}
@endsection
@section('content')
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Plan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit Plan</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Edit Plan</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('plan.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                      <div class="card-body">
                          <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="plan_name">Plan Name</label>
                                    <input type="text" name="plan_name" class="form-control" id="plan_name" placeholder="Enter plan name" value="{{ old('plan_name') ?? $data->plan_name }}">
                                    @error('plan_name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" min="1" step="1" name="price" class="form-control" id="price" placeholder="Enter price" value="{{ old('price') ?? $data->price }}">
                                    @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="job_post_fee">Job Post Fee</label>
                                    <div class="input-group">
                                        <input type="number" min="1" max="100" step="1" name="job_post_fee" class="form-control" id="job_post_fee" value="{{ old('job_post_fee') ?? $data->job_post_fee }}" placeholder="Enter job post fee">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="job_post_fee">%</span>
                                        </div>
                                    </div>
                                    @error('job_post_fee')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="withdraw_fee">Withdraw Fee</label>
                                    <div class="input-group">
                                        <input type="number" min="1" max="100" step="1" name="withdraw_fee" class="form-control" id="withdraw_fee" value="{{ old('withdraw_fee') ?? $data->withdraw_fee }}" placeholder="Enter withdraw fee">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="withdraw_fee">%</span>
                                        </div>
                                    </div>
                                    @error('withdraw_fee')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="post_bost_duration">Post Bost Duration</label>
                                    <div class="input-group">
                                        <input type="number" min="1" max="100" step="1" name="post_bost_duration" class="form-control" id="post_bost_duration" value="{{ old('post_bost_duration') ?? $data->post_bost_duration }}" placeholder="Enter post bost duration">
                                    </div>
                                    @error('post_bost_duration')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="daily_spin_limit">Daily Spin Limit</label>
                                    <div class="input-group">
                                        <input type="number" min="1" max="100" step="1" name="daily_spin_limit" class="form-control" id="daily_spin_limit" value="{{ old('daily_spin_limit') ?? $data->daily_spin_limit }}" placeholder="Enter daily spin limit">
                                    </div>
                                    @error('daily_spin_limit')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="deposit_refer_commission">Deposit Refer Commission</label>
                                    <div class="input-group">
                                        <input type="number" min="1" max="100" step="1" name="deposit_refer_commission" class="form-control" id="deposit_refer_commission" value="{{ old('deposit_refer_commission') ?? $data->deposit_refer_commission }}" placeholder="Enter deposit refer commission">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="deposit_refer_commission">%</span>
                                        </div>
                                    </div>
                                    @error('deposit_refer_commission')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="task_commission">Task Commission</label>
                                    <div class="input-group">
                                        <input type="number" min="1" max="100" step="1" name="task_commission" class="form-control" id="task_commission" value="{{ old('task_commission') ?? $data->task_commission }}" placeholder="Enter task commission">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="task_commission">%</span>
                                        </div>
                                    </div>
                                    @error('task_commission')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="geen_mark_badge" name="geen_mark_badge" value="yes" {{ $data->geen_mark_badge == 'yes' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="geen_mark_badge">Green Mark Badge</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="profile_mark_badge" name="profile_mark_badge" value="yes" {{ $data->profile_mark_badge == 'yes' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="profile_mark_badge">Profile Mark Badge</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="live_phone_call_support" name="live_phone_call_support" value="yes" {{ $data->live_phone_call_support == 'yes' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="live_phone_call_support">Live Phone Call Support</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save & Update</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </section>
@endsection
@section('scripts')
{{-- others scripts here --}}
@endsection
