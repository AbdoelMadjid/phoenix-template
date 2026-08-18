@extends('layouts.travel-agency')

@section('title', 'Hotel Gallery')

@push('styles')
    <link href="{{ asset('vendors/glightbox/glightbox.min.css') }}" rel="stylesheet">
@endpush

@section('content')
    @include('temp.apps.travel-agency.hotel.partials.navbar')

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-6 pb-9">
        <div class="container-medium">
            <nav class="mb-3" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Page 1</a></li>
                    <li class="breadcrumb-item"><a href="#">Page 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
            </nav>
            <h2 class="mb-5">Gallery</h2>
            <div class="row g-2 g-sm-3">
                <div class="col-md-6">
                    <div class="row g-2 g-sm-3">
                        <div class="undefined"><a href="{{ asset('assets/img/hotels/84.jpg') }}"
                                data-gallery="default-gallery"><img class="img-fluid rounded-2"
                                    src="{{ asset('assets/img/hotels/74.png') }}" alt=""></a></div>
                        <div class="col-6"><a href="{{ asset('assets/img/hotels/85.jpg') }}"
                                data-gallery="default-gallery"><img class="img-fluid rounded-2"
                                    src="{{ asset('assets/img/hotels/75.png') }}" alt=""></a></div>
                        <div class="col-6"><a href="{{ asset('assets/img/hotels/86.jpg') }}"
                                data-gallery="default-gallery"><img class="img-fluid rounded-2"
                                    src="{{ asset('assets/img/hotels/76.png') }}" alt=""></a></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="video-container h-100"><a href="{{ asset('assets/video/3.mp4') }}"
                            data-gallery="default-gallery"><video
                                class="video w-100 h-100 object-fit-cover overflow-hidden rounded-2" muted=""
                                data-play-on-hover="">
                                <source src="{{ asset('assets/video/3.mp4') }}" type="video/mp4">
                            </video>
                            <div
                                class="circle-icon-item position-absolute top-50 start-50 translate-middle bg-body-emphasis rounded-pill bg-opacity-50">
                                <span class="fa-solid fa-video text-body fs-9 fs-sm-8"></span>
                            </div>
                        </a></div>
                </div>
                <div class="col-sm-6"><a href="{{ asset('assets/img/hotels/87.jpg') }}" data-gallery="default-gallery"><img
                            class="img-fluid rounded-2" src="{{ asset('assets/img/hotels/78.png') }}" alt=""></a>
                </div>
                <div class="col-sm-6"><a href="{{ asset('assets/img/hotels/88.jpg') }}" data-gallery="default-gallery"><img
                            class="img-fluid rounded-2" src="{{ asset('assets/img/hotels/79.png') }}" alt=""></a>
                </div>
                <div class="col-md-6"><a href="{{ asset('assets/img/hotels/89.jpg') }}" data-gallery="default-gallery"><img
                            class="img-fluid rounded-2" src="{{ asset('assets/img/hotels/80.png') }}" alt=""></a>
                </div>
                <div class="col-md-6">
                    <div class="row g-2 g-sm-3">
                        <div class="undefined"><a href="{{ asset('assets/img/hotels/90.jpg') }}"
                                data-gallery="default-gallery"><img class="img-fluid rounded-2"
                                    src="{{ asset('assets/img/hotels/81.png') }}" alt=""></a></div>
                        <div class="col-6"><a href="{{ asset('assets/img/hotels/91.jpg') }}"
                                data-gallery="default-gallery"><img class="img-fluid rounded-2"
                                    src="{{ asset('assets/img/hotels/82.png') }}" alt=""></a></div>
                        <div class="col-6"><a href="{{ asset('assets/img/hotels/92.jpg') }}"
                                data-gallery="default-gallery"><img class="img-fluid rounded-2"
                                    src="{{ asset('assets/img/hotels/83.png') }}" alt=""></a></div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->

    <section class="py-0 mb-5 mb-md-7 mb-lg-9">
        <div class="container-medium-md px-0 px-md-3">
            <div class="p-5 p-sm-7 py-xl-12 px-xl-15 rounded-md-2 overflow-hidden position-relative">
                <div class="bg-holder bg-holder overlay bg-opacity-85"
                    style="background-image:url({{ asset('assets/img/bg/43.png') }});background-position: center; background-size: cover;">
                </div>
                <!--/.bg-holder-->
                <div class="row g-5 position-relative justify-content-between">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-3">Discover</h5>
                        <div class="row g-3">
                            <div class="col">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-1"><a class="text-secondary-lighter" href="#!">Home</a></li>
                                    <li class="mb-1"><a class="text-secondary-lighter" href="#!">Terms</a></li>
                                    <li class="mb-1"><a class="text-secondary-lighter" href="#!">Talent &amp;
                                            culture</a></li>
                                    <li class="mb-1"><a class="text-secondary-lighter" href="#!">Destination</a>
                                    </li>
                                    <li class="mb-1"><a class="text-secondary-lighter" href="#!">Sitemap</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-1"><a class="text-secondary-lighter" href="#!">Refund policy</a>
                                    </li>
                                    <li class="mb-1"><a class="text-secondary-lighter" href="#!">EMI Policy</a>
                                    </li>
                                    <li class="mb-1"><a class="text-secondary-lighter" href="#!">Privacy
                                            Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-3">Contact</h5><a class="d-block text-secondary-lighter mb-1 text-nowrap"
                            href="mailto:info@phoenixtravels.com"><span
                                class="fa-solid fa-envelope me-2 me-lg-1 me-xl-2"></span>info@phoenixtravels.com</a><a
                            class="d-block text-secondary-lighter mb-1" href="tel:+13134048290"><span
                                class="fa-solid fa-phone me-2 me-lg-1 me-xl-2"> </span>+13134048290</a>
                    </div>
                    <div class="col-lg-5">
                        <h2 class="text-white mb-2 fw-semibold">Enjoy your trip to the fullest</h2>
                        <p class="mb-5 text-secondary-lighter">Sign up and get notified<br>about best deals immediately
                        </p>
                        <div class="d-flex gap-2">
                            <div class="form-icon-container flex-1"><input class="form-control form-icon-input"
                                    type="text" placeholder="Your email address"><span
                                    class="fa-solid fa-envelope form-icon text-body fs-9" data-fa-transform="up-2"></span>
                            </div><button class="btn btn-primary rounded">Sign up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
@endsection

@push('scripts')
    <script src="{{ asset('vendors/glightbox/glightbox.min.js') }}"></script>
@endpush
