@extends('auth.layout.app')

@section('content')
   <!-- Content -->

   <div class="authentication-wrapper authentication-cover authentication-bg">
    <div class="authentication-inner row">
      <!-- /Left Text -->
      <div class="p-0 d-none d-lg-flex col-lg-7">
        <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
          <img
            src="{{asset('admin/img/illustrations/auth-register-illustration-light.png')}}"
            alt="auth-register-cover"
            class="my-5 img-fluid auth-illustration"
            data-app-light-img="{{asset('admin/illustrations/auth-register-illustration-light.png')}}"
            data-app-dark-img="{{asset('admin/illustrations/auth-register-illustration-dark.png')}}"
          />

          <img
            src="{{asset('admin/img/illustrations/bg-shape-image-light.png')}}"
            alt="auth-register-cover"
            class="platform-bg"
            data-app-light-img="{{asset('admin/illustrations/bg-shape-image-light.png')}}"
            data-app-dark-img="{{asset('admin/illustrations/bg-shape-image-dark.png')}}"
          />
        </div>
      </div>
      <!-- /Left Text -->

      <!-- Login -->
      <div class="p-4 d-flex col-12 col-lg-5 align-items-center p-sm-5">
        <div class="mx-auto w-px-400">
          <!-- Logo -->
          <div class="mb-4 app-brand">
            <a href="index.html" class="gap-2 app-brand-link">
              <span class="app-brand-logo demo">
                <img src="{{ asset('admin/img/adminlogo.png') }}" alt="">
              </span>
            </a>
          </div>
          <!-- /Logo -->
          <h3 class="mb-1 fw-bold">Welcome to Get Creat Account! 👋</h3>
          <p class="mb-4">Please Creat Account to start the adventure</p>

            <form class="mb-3" id="formAuthentication" action="{{route('register')}}" method="post">
                {{csrf_field()}}
                {{-- start data --}}
                <div class="row">

                    {{-- Name--}}
                    <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label" for="name">{{('Name')}} <span style="color:#f00">*</span></label>
                        <input type="text" class="form-control" value="{{old('name')}}" required name="name" id="name"  />

                        </div>
                    </div>

                    {{-- user_name --}}
                   <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label" for="user_name">{{('User Name')}} <span style="color:#f00">*</span></label>
                        <input type="text" class="form-control" value="{{old('user_name')}}" required name="user_name" id="user_name"  />

                        </div>
                    </div>

                </div>

                <div class="row">

                    {{-- Phone--}}
                    <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label" for="phone">{{('Phone')}} <span style="color:#f00">*</span></label>
                        <input type="text" class="form-control" value="{{old('phone')}}" required name="phone" id="phone"  />

                        </div>
                    </div>

                    {{-- email --}}
                   <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label" for="email">{{('E-Mail')}} <span style="color:#f00">*</span></label>
                        <input type="email" class="form-control" value="{{old('email')}}" required name="email" id="email"  />

                        </div>
                    </div>

                </div>

                 <div class="row">

                    {{-- Password--}}
                    <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label" for="password">{{('Password')}} <span style="color:#f00">*</span></label>
                        <input type="password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" required name="password" id="password"  />

                        </div>
                    </div>

                    {{-- password_confirmation --}}
                   <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label" for="password_confirmation">{{('Confirm Password')}} <span style="color:#f00">*</span></label>
                        <input type="password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"  required name="password_confirmation" id="password_confirmation"  />

                        </div>
                    </div>

                </div>

                {{-- end --}}


         
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me" />
                <label class="form-check-label" for="remember-me"> Remember Me </label>
              </div>
            </div>
            <button class="btn btn-primary d-grid w-100" type="submit">Register</button>
          </form>

          <p class="text-center">
            <span>Already have an account?
            </span>
            <a href="{{url('login')}}">
              <span>Sign in instead</span>
            </a>
          </p>


        </div>
      </div>
      <!-- /Login -->
    </div>
  </div>

  <!-- / Content -->

@endsection
