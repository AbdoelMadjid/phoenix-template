<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" data-navigation-type="default"
    data-navbar-horizontal-shape="default">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', config('app.name', 'Phoenix Authentication'))</title>

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32"
            href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16"
            href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.ico') }}">
        <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
        <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-150x150.png') }}">
        <meta name="theme-color" content="#ffffff">

        <script src="{{ asset('vendors/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/js/config.js') }}"></script>

        <!-- Stylesheets -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link
            href="{{ asset('assets/external/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap') }}"
            rel="stylesheet">
        <link href="{{ asset('vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/external/release/v4.0.8/css/line.css') }}">
        <link href="{{ asset('assets/css/theme-rtl.min.css') }}" type="text/css" rel="stylesheet" id="style-rtl">
        <link href="{{ asset('assets/css/theme.min.css') }}" type="text/css" rel="stylesheet" id="style-default">
        <link href="{{ asset('assets/css/user-rtl.min.css') }}" type="text/css" rel="stylesheet" id="user-style-rtl">
        <link href="{{ asset('assets/css/user.min.css') }}" type="text/css" rel="stylesheet" id="user-style-default">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        <main class="main" id="top">
            <div class="container-fluid bg-body-tertiary dark__bg-gray-1200 position-relative min-vh-100">
                <div class="bg-holder bg-auth-card-overlay"
                    style="background-image:url({{ asset('assets/img/bg/37.png') }});"></div>

                <div class="row flex-center position-relative min-vh-100 g-0 py-5">
                    <div class="col-11 col-sm-10 col-xl-8">
                        <div class="card border border-translucent auth-card">
                            <div class="card-body pe-md-0">
                                <div class="row align-items-center gx-0 gy-7">

                                    <!-- Left Illustration Box -->
                                    <div
                                        class="col-auto bg-body-highlight dark__bg-gray-1100 rounded-3 position-relative overflow-hidden auth-title-box">
                                        <div class="bg-holder"
                                            style="background-image:url({{ asset('assets/img/bg/38.png') }});"></div>
                                        <div
                                            class="position-relative px-4 px-lg-7 pt-7 pb-7 pb-sm-5 text-center text-md-start pb-lg-7 pb-md-7">
                                            <h3 class="mb-3 text-body-emphasis fs-7">
                                                {{ config('app.name', 'Phoenix') }} Auth</h3>
                                            <p class="text-body-tertiary">Experience hassle-free development with
                                                Phoenix Admin Template!</p>
                                            <ul class="list-unstyled mb-0 w-max-content w-md-auto">
                                                <li class="d-flex align-items-center"><span
                                                        class="uil uil-check-circle text-success me-2"></span><span
                                                        class="text-body-tertiary fw-semibold">Laravel 13
                                                        Scaffolded</span></li>
                                                <li class="d-flex align-items-center"><span
                                                        class="uil uil-check-circle text-success me-2"></span><span
                                                        class="text-body-tertiary fw-semibold">Breeze
                                                        Authentication</span></li>
                                                <li class="d-flex align-items-center"><span
                                                        class="uil uil-check-circle text-success me-2"></span><span
                                                        class="text-body-tertiary fw-semibold">Responsive & Fast</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="position-relative z-n1 mb-6 d-none d-md-block text-center mt-md-15">
                                            <img class="auth-title-box-img d-dark-none"
                                                src="{{ asset('assets/img/spot-illustrations/auth.png') }}"
                                                alt="">
                                            <img class="auth-title-box-img d-light-none"
                                                src="{{ asset('assets/img/spot-illustrations/auth-dark.png') }}"
                                                alt="">
                                        </div>
                                    </div>

                                    <!-- Right Form Column -->
                                    <div class="col mx-auto">
                                        <div class="auth-form-box px-3 px-md-5">
                                            <div class="text-center mb-4">
                                                <a class="d-flex flex-center text-decoration-none mb-3"
                                                    href="{{ url('/') }}">
                                                    <div
                                                        class="d-flex align-items-center fw-bolder fs-3 d-inline-block">
                                                        <img src="{{ asset('assets/img/icons/logo.png') }}"
                                                            alt="phoenix" width="50">
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Breeze Form Content -->
                                            @yield('content', $slot ?? '')

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- JavaScripts -->
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
