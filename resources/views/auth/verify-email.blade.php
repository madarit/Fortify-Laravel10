@extends('auth.layout.app')

@section('content')


    <!-- Content -->

    <div class="authentication-wrapper authentication-cover authentication-bg">
        <div class="authentication-inner row">
          <!-- /Left Text -->
          <div class="d-none d-lg-flex col-lg-7 p-0">
            <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
              <img
              src="{{asset('admin/img/illustrations/auth-verify-email-illustration-light.png')}}"
                alt="auth-verify-email-cover"
                class="img-fluid my-5 auth-illustration"
                data-app-light-img="{{asset('admin/illustrations/auth-verify-email-illustration-light.png')}}"
                data-app-dark-img="{{asset('admin/illustrations/auth-verify-email-illustration-dark.png')}}"
              />
  
              <img
              src="{{asset('admin/img/illustrations/bg-shape-image-light.png')}}"
              alt="auth-verify-email-cover"
              class="platform-bg"
              data-app-light-img="{{asset('admin/illustrations/bg-shape-image-light.png')}}"
              data-app-dark-img="{{asset('admin/illustrations/bg-shape-image-dark.png')}}"
              />
            </div>
          </div>
          <!-- /Left Text -->
  
          <!--  Verify email -->
          <div class="d-flex col-12 col-lg-5 align-items-center p-4 p-sm-5">
            <div class="w-px-400 mx-auto">
              <div class="app-brand mb-4">
                <a href="{{route('verification.send')}}" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                    
                  </span>
                </a>
              </div>
              <h3 class="mb-1 fw-bold">Verify your email ✉️</h3>
              <p class="text-start mb-4">
                Account activation link sent to your email address Please follow the link inside to
                continue.
              </p>
              <a class="btn btn-primary w-100 mb-3" href="index.html"> Resend </a>
              <p class="text-center">
                Didn't get the mail?
                
              </p>
            </div>
          </div>
          <!-- / Verify email -->
        </div>
      </div>
  
      <!-- / Content -->