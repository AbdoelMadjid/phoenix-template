<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>{{ config('app.name', 'Phoenix') }} - Sign Up</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('vendors/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="{{ asset('assets/external/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap') }}" rel="stylesheet">
    <link href="{{ asset('vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/external/release/v4.0.8/css/line.css') }}">
    <link href="{{ asset('assets/css/theme-rtl.min.css') }}" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="{{ asset('assets/css/theme.min.css') }}" type="text/css" rel="stylesheet" id="style-default">
    <link href="{{ asset('assets/css/user-rtl.min.css') }}" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('assets/css/user.min.css') }}" type="text/css" rel="stylesheet" id="user-style-default">
    <script>
      var phoenixIsRTL = window.config.config.phoenixIsRTL;
      if (phoenixIsRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="row vh-100 g-0">
        <div class="col-lg-6 position-relative d-none d-lg-block">
          <div class="bg-holder" style="background-image:url({{ asset('assets/img/bg/32.png') }});"></div>
          <!--/.bg-holder-->
        </div>
        <div class="col-lg-6">
          <div class="row flex-center h-100 g-0 px-4 px-sm-0">
            <div class="col col-sm-6 col-lg-7 col-xl-6">
              <a class="d-flex flex-center text-decoration-none mb-4" href="{{ url('/') }}">
                <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block">
                  <img src="{{ asset('assets/img/icons/logo.png') }}" alt="phoenix" width="58">
                </div>
              </a>
              <div class="text-center mb-7">
                <h3 class="text-body-highlight">Sign Up</h3>
                <p class="text-body-tertiary">Create your account today</p>
              </div>

              <!-- Session Status Notification -->
              @if (session('status'))
                <div class="alert alert-success mb-4 fs-9" role="alert">
                  {{ session('status') }}
                </div>
              @endif

              <button class="btn btn-phoenix-secondary w-100 mb-3"><span class="fab fa-google text-danger me-2 fs-9"></span>Sign up with google</button>
              <button class="btn btn-phoenix-secondary w-100"><span class="fab fa-facebook text-primary me-2 fs-9"></span>Sign up with facebook</button>
              <div class="position-relative mt-4">
                <hr class="bg-body-secondary">
                <div class="divider-content-center">or use email</div>
              </div>

              <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-3 text-start">
                  <label class="form-label" for="name">Name</label>
                  <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Name">
                  @error('name')
                    <div class="text-danger fs-9 mt-1">{{ $message }}</div>
                  @enderror
                </div>

                <!-- Email Address -->
                <div class="mb-3 text-start">
                  <label class="form-label" for="email">Email address</label>
                  <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="name@example.com">
                  @error('email')
                    <div class="text-danger fs-9 mt-1">{{ $message }}</div>
                  @enderror
                </div>

                <!-- Passwords -->
                <div class="row g-3 mb-3 text-start">
                  <div class="col-sm-6">
                    <label class="form-label" for="password">Password</label>
                    <div class="position-relative" data-password="data-password">
                      <input class="form-control form-icon-input pe-6 @error('password') is-invalid @enderror" id="password" type="password" name="password" required autocomplete="new-password" placeholder="Password" data-password-input="data-password-input">
                      <button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary" type="button" data-password-toggle="data-password-toggle">
                        <span class="uil uil-eye show"></span>
                        <span class="uil uil-eye-slash hide"></span>
                      </button>
                    </div>
                    @error('password')
                      <div class="text-danger fs-9 mt-1">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                    <div class="position-relative" data-password="data-password">
                      <input class="form-control form-icon-input pe-6 @error('password_confirmation') is-invalid @enderror" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" data-password-input="data-password-input">
                      <button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary" type="button" data-password-toggle="data-password-toggle">
                        <span class="uil uil-eye show"></span>
                        <span class="uil uil-eye-slash hide"></span>
                      </button>
                    </div>
                    @error('password_confirmation')
                      <div class="text-danger fs-9 mt-1">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <!-- Terms & Conditions -->
                <div class="form-check mb-3 text-start">
                  <input class="form-check-input" id="termsService" type="checkbox" required>
                  <label class="form-check-label fs-9 text-transform-none" for="termsService">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary w-100 mb-3">Sign Up</button>

                <!-- Login Link -->
                @if (Route::has('login'))
                  <div class="text-center">
                    <a class="fs-9 fw-bold" href="{{ route('login') }}">Sign in to an existing account</a>
                  </div>
                @endif
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('vendors/list.js/list.min.js') }}"></script>
    <script src="{{ asset('vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('vendors/dayjs/dayjs.min.js') }}"></script>
    <script src="{{ asset('assets/js/phoenix.js') }}"></script>
  </body>

</html>
