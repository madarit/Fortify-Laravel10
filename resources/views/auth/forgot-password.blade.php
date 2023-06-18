@extends('auth.layout.app')

@section('content')
    <!-- Content -->

    <div class="authentication-wrapper authentication-cover authentication-bg">
        <div class="authentication-inner row">
            <!-- /Left Text -->
            <div class="p-0 d-none d-lg-flex col-lg-7">
                <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
                    <img src="{{ asset('admin/img/illustrations/auth-forgot-password-illustration-light.png') }}"
                        alt="auth-forgot-password-cover" class="my-5 img-fluid auth-illustration"
                        data-app-light-img="{{ asset('admin/illustrations/auth-forgot-password-illustration-light.png') }}"
                        data-app-dark-img="{{ asset('admin/illustrations/auth-forgot-password-illustration-dark.png') }}" />

                    <img src="{{ asset('admin/img/illustrations/bg-shape-image-light.png') }}"
                        alt="auth-forgot-password-cover" class="platform-bg"
                        data-app-light-img="{{ asset('admin/illustrations/bg-shape-image-light.png') }}"
                        data-app-dark-img="{{ asset('admin/illustrations/bg-shape-image-dark.png') }}" />
                </div>
            </div>
            <!-- /Left Text -->

            <!-- Forgot Password -->
            <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center p-sm-5 p-4">
                <div class="w-px-400 mx-auto">
                    <!-- Logo -->
                    <div class="mb-4 app-brand">
                        <a href="" class="gap-2 app-brand-link">
                            <span class="app-brand-logo demo">
                                <img src="{{ asset('admin/img/adminlogo.png') }}" alt="">
                            </span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h3 class="mb-1 fw-bold">Forgot Password? 🔒</h3>
                    <p class="mb-4">Enter your email and we'll send you instructions to reset your password</p>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form id="formAuthentication" class="mb-3" action="{{ route('password.request') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="Enter your email" autofocus />
                        </div>
                        <button class="btn btn-primary d-grid w-100">Send Reset Link</button>
                    </form>
                    <div class="text-center">
                        <a href="{{ route('login') }}" class="d-flex align-items-center justify-content-center">
                            <i class="ti ti-chevron-left scaleX-n1-rtl"></i>
                            Back to login
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Forgot Password -->
        </div>
    </div>

    <!-- / Content -->
@endsection
