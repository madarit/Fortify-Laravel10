@extends('auth.layout.app')

@section('content')

    <!-- Content -->

    <div class="authentication-wrapper authentication-cover authentication-bg">
        <div class="authentication-inner row">
          <!-- /Left Text -->
          <div class="p-0 d-none d-lg-flex col-lg-7">
            <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
              <img
                src="{{asset('admin/img/illustrations/auth-reset-password-illustration-light.png')}}"
                alt="auth-reset-password-cover"
                class="my-5 img-fluid auth-illustration"
                data-app-light-img="{{asset('admin/illustrations/auth-reset-password-illustration-light.png')}}"
                data-app-dark-img="{{asset('admin/illustrations/auth-reset-password-illustration-dark.png')}}"
              />
    
              <img
                src="{{asset('admin/img/illustrations/bg-shape-image-light.png')}}"
                alt="auth-reset-password-cover"
                class="platform-bg"
                data-app-light-img="{{asset('admin/illustrations/bg-shape-image-light.png')}}"
                data-app-dark-img="{{asset('admin/illustrations/bg-shape-image-dark.png')}}"
              />
            </div>
          </div>
          <!-- /Left Text -->
  
          <!-- Reset Password -->
          <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center p-4 p-sm-5">
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
              <h3 class="mb-1 fw-bold">Reset Password 🔒</h3>
              <p class="mb-4">for <span class="fw-bold">"{{ $request->email }}"</span></p>
              <form id="formAuthentication" class="mb-3" action="{{route('password.update')}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <input type="hidden" name="email" value="{{ $request->email }}">
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">New Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                  </div>
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="confirm-password">Confirm Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password-confirm"
                      class="form-control"
                      name="password_confirmation"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                  </div>
                </div>
                <button class="btn btn-primary d-grid w-100 mb-3">Set new password</button>
                <div class="text-center">
                  <a href="{{route('login')}}">
                    <i class="ti ti-chevron-left scaleX-n1-rtl"></i>
                    Back to login
                  </a>
                </div>
              </form>
            </div>
          </div>
          <!-- /Reset Password -->
        </div>
      </div>
  
      <!-- / Content -->

      @endsection