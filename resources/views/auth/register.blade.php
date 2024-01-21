@include('partials.header')
        <div class="page-content">
            <div class="section-full site-bg-white">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-8 col-lg-6 col-md-5 twm-log-reg-media-wrap">
                            <div class="twm-log-reg-media">
                                <div class="twm-l-media">
                                    <img src="{{ asset('assets/frontend/user/images/login-bg.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-7">
                            <div class="twm-log-reg-form-wrap">
                                <div class="twm-log-reg-logo-head">
                                    <a href="index.html">
                                        <img src="{{ asset(setting()->site_logo) }}" alt="" class="logo">
                                    </a>
                                </div>
                                <div class="twm-log-reg-inner">
                                    <div class="twm-log-reg-head">
                                        <div class="twm-log-reg-logo">
                                            <span class="log-reg-form-title">Log In</span>
                                        </div>
                                    </div>
                                    <div class="twm-tabs-style-2">

                                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                            <li class="nav-item">
                                                <button onclick="window.location.href='{{ route('login') }}'" class="nav-link"><i class="fas fa-user-tie me-2"></i>Login</button>
                                            </li>
                                            <li class="nav-item">
                                                <button onclick="window.location.href='{{ route('register') }}'" class="nav-link active"><i class="fas fa-building me-2"></i>Sign Up</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTab2Content">
                                            <div class="tab-pane fade show active" id="twm-login-candidate">
                                                <form method="POST" action="{{ route('register') }}">
                                                    @csrf

                                                    <div class="form-outline mb-2">
                                                        <input type="hidden" id="refer" name="refer" value="{{ isset($_GET['refer']) && !empty($_GET['refer']) ? $_GET['refer'] : old('refer') }}" autocomplete="off" class="form-control"/>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group mb-3">
                                                                <input name="name" type="text" value="{{ old('name') }}" required class="form-control" placeholder="Name*">
                                                                @error('name')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>


                                                        <div class="col-lg-12">
                                                            <div class="form-group mb-3">
                                                                <input name="email" type="email" value="{{ old('email') }}" required class="form-control" placeholder="Email*">
                                                                @error('email')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>


                                                        <div class="col-lg-12">
                                                            <div class="form-group mb-3">
                                                                <input name="password" type="password" class="form-control" required placeholder="Password*">
                                                                @error('password')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>


                                                        <div class="col-lg-12">
                                                            <div class="form-group mb-3">
                                                                <input name="password_confirmation" type="password" class="form-control" required placeholder="Re-type Password*">
                                                            </div>
                                                        </div>


                                                        <div class="col-lg-12">
                                                            <div class="twm-forgot-wrap">
                                                                <div class="form-group mb-3">
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                                        <label class="form-check-label rem-forgot" for="remember">I agree to the Terms and conditions</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <button type="submit" class="site-button">Sign Up</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@include('partials.footer')
