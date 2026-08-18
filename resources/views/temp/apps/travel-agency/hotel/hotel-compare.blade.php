@extends('layouts.travel-agency')

@section('title', 'Hotel Compare')

@push('styles')
    <link href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/leaflet/leaflet.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/leaflet.markercluster/MarkerCluster.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/leaflet.markercluster/MarkerCluster.Default.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="navbar-responsive-navitems navbar-expand border-y bg-body-emphasis border-translucent py-2">
        <div class="container-medium d-flex flex-between-center" data-navbar="data-navbar">
            <ul class="navbar-nav justify-content-end align-items-center">
                <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3 ps-0 "
                        href="{{ url('apps/travel-agency/hotel/homepage') }}">Homepage</a></li>
                <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3"
                        href="{{ url('apps/travel-agency/hotel/hotel-details') }}">Hotel Details</a></li>
                <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3 text-primary"
                        href="{{ url('apps/travel-agency/hotel/hotel-compare') }}">Hotel Compare</a></li>
                <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3"
                        href="{{ url('apps/travel-agency/hotel/checkout') }}">Check out</a></li>
                <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3"
                        href="{{ url('apps/travel-agency/hotel/payment') }}">Payment</a></li>
                <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3"
                        href="{{ url('apps/travel-agency/hotel/gallery') }}">Gallery</a></li>
                <li class="nav-item dropdown" data-nav-item="data-nav-item" data-more-item="data-more-item"><a
                        class="nav-link dropdown-toggle dropdown-caret-none fw-bold pe-0 ps-3" href="javascript: void(0)"
                        id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                        data-boundary="window" data-bs-reference="parent"> More<span
                            class="fas fa-angle-down ms-2"></span></a>
                    <div class="dropdown-menu dropdown-menu-end category-list" aria-labelledby="navbarDropdown"
                        data-category-list="data-category-list"></div>
                </li>
            </ul>
        </div>
    </div>

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
            <h2 class="mb-4">Hotel Compare</h2>
            <div class="container-medium-md px-0">
                <div>
                    <div
                        class="row gx-0 gy-3 gy-md-0 align-items-center mx-auto p-3 bg-body-emphasis rounded-5 rounded-md-pill position-relative border">
                        <div class="col-12 col-md">
                            <div
                                class="form-icon-container border-bottom border-bottom-md-0 border-translucent pb-3 pb-md-0">
                                <input class="form-control form-icon-input border-0 py-0 shadow-none fs-8" type="text"
                                    placeholder="Pick a place"><span
                                    class="fa-solid fa-map-marker-alt form-icon text-body-tertiary top-0"
                                    data-fa-transform="down-2"></span>
                            </div>
                        </div>
                        <div class="col-6 col-md">
                            <div class="form-icon-container flatpickr-input-container"><input
                                    class="form-control datetimepicker form-icon-input border-y-0 border-start-0 border-start-md py-0 shadow-none border-translucent fs-8 rounded-0"
                                    type="text" placeholder="Pick a date"
                                    data-options='{"mode":"range","dateFormat":"d/m/y","disableMobile":true}'><span
                                    class="fa-solid fa-calendar form-icon top-0 text-body-tertiary"
                                    data-fa-transform="down-2"></span></div>
                        </div>
                        <div class="col-6 col-md"><button class="btn px-3 fs-8 fw-semibold text-body-tertiary"
                                type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                data-bs-auto-close="outside"><span class="fa-solid fa-user me-2"></span>1 adult</button>
                            <div class="dropdown-menu dropdown-menu-start p-4" style="max-width: 320px">
                                <div class="row align-items-center g-0 pb-3 border-bottom border-translucent">
                                    <div class="col-5">
                                        <h5 class="mb-0 text-body">Adults</h5>
                                    </div>
                                    <div class="col-7">
                                        <div class="input-group gap-2" data-quantity="data-quantity"><button
                                                class="btn btn-phoenix-primary px-2 rounded" data-type="minus"><span
                                                    class="fa-solid fa-minus px-1"></span></button><input
                                                class="form-control border-translucent input-spin-none text-center rounded"
                                                id="adults" type="number" value="2"><button
                                                class="btn btn-phoenix-primary px-2 rounded" data-type="plus"><span
                                                    class="fa-solid fa-plus px-1"></span></button></div>
                                    </div>
                                </div>
                                <div class="row align-items-center g-0 py-3 border-bottom border-translucent">
                                    <div class="col-5">
                                        <h5 class="mb-0 text-body">Infants</h5>
                                    </div>
                                    <div class="col-7">
                                        <div class="input-group gap-2" data-quantity="data-quantity"><button
                                                class="btn btn-phoenix-primary px-2 rounded" data-type="minus"><span
                                                    class="fa-solid fa-minus px-1"></span></button><input
                                                class="form-control border-translucent input-spin-none text-center rounded"
                                                id="infants" type="number" value="2"><button
                                                class="btn btn-phoenix-primary px-2 rounded" data-type="plus"><span
                                                    class="fa-solid fa-plus px-1"></span></button></div>
                                    </div>
                                </div>
                                <div class="row align-items-center g-0 pt-3">
                                    <div class="col-5">
                                        <h5 class="mb-0 text-body">Children</h5>
                                    </div>
                                    <div class="col-7">
                                        <div class="input-group gap-2" data-quantity="data-quantity"><button
                                                class="btn btn-phoenix-primary px-2 rounded" data-type="minus"><span
                                                    class="fa-solid fa-minus px-1"></span></button><input
                                                class="form-control border-translucent input-spin-none text-center rounded"
                                                id="children" type="number" value="2"><button
                                                class="btn btn-phoenix-primary px-2 rounded" data-type="plus"><span
                                                    class="fa-solid fa-plus px-1"></span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-auto"><button
                                class="btn btn-lg btn-phoenix-primary rounded-pill w-100"><span
                                    class="fa-solid fa-search me-2"></span>Search</button></div>
                    </div>
                </div>
            </div>
            <div class="h-100 w-100 border rounded-3 overflow-hidden my-5">
                <div class="h-100 bg-body-emphasis" id="map" style="min-height: 220px;"></div>
            </div>
            <div class="position-relative scrollbar"><a
                    class="btn p-4 d-flex flex-between-center collapse-indicator text-body-highlight bg-body-highlight position-sticky start-0"
                    data-bs-toggle="collapse" href="#hotelDetailsCollapse" role="button" aria-expanded="true"
                    aria-controls="hotelDetailsCollapse">
                    <h4 class="mb-0">Hotel Details</h4><span
                        class="fa-solid fa-chevron-down toggle-icon text-body"></span>
                </a>
                <div class="collapse show" id="hotelDetailsCollapse">
                    <table class="table table-layout-fixed table-compare mb-0">
                        <thead>
                            <tr>
                                <th class="p-0 border-0" style="width: 225px"></th>
                                <th class="p-0 border-0"></th>
                                <th class="p-0 border-0"></th>
                                <th class="p-0 border-0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4 pt-4 pb-3 fw-bold border-0">Hotel picture</td>
                            </tr>
                            <tr>
                                <td class="border-0 bg-body-highlight py-0"></td>
                                <td class="border-0 py-0 ps-3 pe-0" style="min-width: 250px">
                                    <div class="position-relative">
                                        <div class="swiper-theme-container rounded-2 overflow-hidden">
                                            <div class="swiper theme-slider"
                                                data-swiper='{"autoplay":true,"loop":true,"pagination":{"el":".swiper-pagination","clickable":true}}'>
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide"><img class="w-100 h-100"
                                                            src="{{ asset('assets/img/hotels/40.png') }}" alt="">
                                                    </div>
                                                    <div class="swiper-slide"><img class="w-100 h-100"
                                                            src="{{ asset('assets/img/hotels/41.png') }}" alt="">
                                                    </div>
                                                    <div class="swiper-slide"><img class="w-100 h-100"
                                                            src="{{ asset('assets/img/hotels/42.png') }}" alt="">
                                                    </div>
                                                    <div class="swiper-slide"><img class="w-100 h-100"
                                                            src="{{ asset('assets/img/hotels/43.png') }}" alt="">
                                                    </div>
                                                    <div class="swiper-slide"><img class="w-100 h-100"
                                                            src="{{ asset('assets/img/hotels/44.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div><span
                                            class="badge badge-phoenix fs-10 badge-phoenix-warning position-absolute top-0 start-0 ms-3 mt-3"><span
                                                class="fa-solid fa-star me-1"></span>3.0</span><button
                                            class="btn btn-wish position-absolute top-0 end-0 mt-3 me-3"><span
                                                class="far fa-heart"></span></button>
                                    </div>
                                    <div class="position-relative"><input class="form-control form-control-lg mt-2 pe-5"
                                            type="text" placeholder="Enter hotel name"
                                            value="Bubble Hotel Bali Ubud"><span
                                            class="fa-solid fa-search fs-9 text-body-quaternary position-absolute top-0 end-0 mt-3 me-3"
                                            data-fa-transform="down-2"></span></div>
                                </td>
                                <td class="border-0 py-0 ps-3 pe-0" style="min-width: 250px">
                                    <div class="position-relative">
                                        <div class="swiper-theme-container rounded-2 overflow-hidden">
                                            <div class="swiper theme-slider"
                                                data-swiper='{"autoplay":true,"loop":true,"pagination":{"el":".swiper-pagination","clickable":true}}'>
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide"><img class="w-100 h-100"
                                                            src="{{ asset('assets/img/hotels/45.png') }}" alt="">
                                                    </div>
                                                    <div class="swiper-slide"><img class="w-100 h-100"
                                                            src="{{ asset('assets/img/hotels/46.png') }}" alt="">
                                                    </div>
                                                    <div class="swiper-slide"><img class="w-100 h-100"
                                                            src="{{ asset('assets/img/hotels/47.png') }}" alt="">
                                                    </div>
                                                    <div class="swiper-slide"><img class="w-100 h-100"
                                                            src="{{ asset('assets/img/hotels/48.png') }}" alt="">
                                                    </div>
                                                    <div class="swiper-slide"><img class="w-100 h-100"
                                                            src="{{ asset('assets/img/hotels/49.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div><span
                                            class="badge badge-phoenix fs-10 badge-phoenix-warning position-absolute top-0 start-0 ms-3 mt-3"><span
                                                class="fa-solid fa-star me-1"></span>4.0</span><button
                                            class="btn btn-wish position-absolute top-0 end-0 mt-3 me-3"><span
                                                class="far fa-heart"></span></button>
                                    </div>
                                    <div class="position-relative"><input class="form-control form-control-lg mt-2 pe-5"
                                            type="text" placeholder="Enter hotel name" value="ONAYA Bali Resort"><span
                                            class="fa-solid fa-search fs-9 text-body-quaternary position-absolute top-0 end-0 mt-3 me-3"
                                            data-fa-transform="down-2"></span></div>
                                </td>
                                <td class="border-0 py-0 ps-3" style="min-width: 250px">
                                    <div class="position-relative">
                                        <div class="swiper-theme-container rounded-2 overflow-hidden">
                                            <div class="swiper theme-slider"
                                                data-swiper='{"autoplay":true,"loop":true,"pagination":{"el":".swiper-pagination","clickable":true}}'>
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide"><img class="w-100 h-100"
                                                            src="{{ asset('assets/img/hotels/50.png') }}" alt="">
                                                    </div>
                                                    <div class="swiper-slide"><img class="w-100 h-100"
                                                            src="{{ asset('assets/img/hotels/51.png') }}" alt="">
                                                    </div>
                                                    <div class="swiper-slide"><img class="w-100 h-100"
                                                            src="{{ asset('assets/img/hotels/52.png') }}" alt="">
                                                    </div>
                                                    <div class="swiper-slide"><img class="w-100 h-100"
                                                            src="{{ asset('assets/img/hotels/53.png') }}" alt="">
                                                    </div>
                                                    <div class="swiper-slide"><img class="w-100 h-100"
                                                            src="{{ asset('assets/img/hotels/54.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div><span
                                            class="badge badge-phoenix fs-10 badge-phoenix-warning position-absolute top-0 start-0 ms-3 mt-3"><span
                                                class="fa-solid fa-star me-1"></span>5.0</span><button
                                            class="btn btn-wish position-absolute top-0 end-0 mt-3 me-3"><span
                                                class="far fa-heart"></span></button>
                                    </div>
                                    <div class="position-relative"><input class="form-control form-control-lg mt-2 pe-5"
                                            type="text" placeholder="Enter hotel name"
                                            value="Gynandha Ubud Cottage"><span
                                            class="fa-solid fa-search fs-9 text-body-quaternary position-absolute top-0 end-0 mt-3 me-3"
                                            data-fa-transform="down-2"></span></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="pt-4 pb-3 ps-4 fw-bold" colspan="4">Hotel Review</td>
                            </tr>
                            <tr>
                                <td class="px-4 align-middle bg-body-highlight border-end-lg border-translucent">
                                    <h6 class="text-body fw-bolder text-uppercase mb-0">Staff</h6>
                                </td>
                                <td class="px-3 border-end border-translucent">
                                    <div class="d-flex align-items-center gap-2"><span
                                            class="badge text-bg-primary fs-8">4.0</span>
                                        <div class="progress w-100 bg-body-highlight" role="progressbar"
                                            aria-label="review" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 8px">
                                            <div class="progress-bar rounded" style="width: 80%"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-3 border-end border-translucent">
                                    <div class="d-flex align-items-center gap-2"><span
                                            class="badge text-bg-primary fs-8">4.0</span>
                                        <div class="progress w-100 bg-body-highlight" role="progressbar"
                                            aria-label="review" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 8px">
                                            <div class="progress-bar rounded" style="width: 80%"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-3 border-end-lg border-translucent">
                                    <div class="d-flex align-items-center gap-2"><span
                                            class="badge text-bg-primary fs-8">4.0</span>
                                        <div class="progress w-100 bg-body-highlight" role="progressbar"
                                            aria-label="review" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 8px">
                                            <div class="progress-bar rounded" style="width: 80%"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 align-middle bg-body-highlight border-end-lg border-translucent">
                                    <h6 class="text-body fw-bolder text-uppercase mb-0">Comfort</h6>
                                </td>
                                <td class="px-3 border-end border-translucent">
                                    <div class="d-flex align-items-center gap-2"><span
                                            class="badge text-bg-primary fs-8">4.5</span>
                                        <div class="progress w-100 bg-body-highlight" role="progressbar"
                                            aria-label="review" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 8px">
                                            <div class="progress-bar rounded" style="width: 90%"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-3 border-end border-translucent">
                                    <div class="d-flex align-items-center gap-2"><span
                                            class="badge text-bg-primary fs-8">4.5</span>
                                        <div class="progress w-100 bg-body-highlight" role="progressbar"
                                            aria-label="review" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 8px">
                                            <div class="progress-bar rounded" style="width: 90%"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-3 border-end-lg border-translucent">
                                    <div class="d-flex align-items-center gap-2"><span
                                            class="badge text-bg-primary fs-8">4.5</span>
                                        <div class="progress w-100 bg-body-highlight" role="progressbar"
                                            aria-label="review" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 8px">
                                            <div class="progress-bar rounded" style="width: 90%"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 align-middle bg-body-highlight border-end-lg border-translucent">
                                    <h6 class="text-body fw-bolder text-uppercase mb-0">Facilities</h6>
                                </td>
                                <td class="px-3 border-end border-translucent">
                                    <div class="d-flex align-items-center gap-2"><span
                                            class="badge text-bg-primary fs-8">4.8</span>
                                        <div class="progress w-100 bg-body-highlight" role="progressbar"
                                            aria-label="review" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 8px">
                                            <div class="progress-bar rounded" style="width: 96%"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-3 border-end border-translucent">
                                    <div class="d-flex align-items-center gap-2"><span
                                            class="badge text-bg-primary fs-8">4.8</span>
                                        <div class="progress w-100 bg-body-highlight" role="progressbar"
                                            aria-label="review" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 8px">
                                            <div class="progress-bar rounded" style="width: 96%"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-3 border-end-lg border-translucent">
                                    <div class="d-flex align-items-center gap-2"><span
                                            class="badge text-bg-primary fs-8">4.8</span>
                                        <div class="progress w-100 bg-body-highlight" role="progressbar"
                                            aria-label="review" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 8px">
                                            <div class="progress-bar rounded" style="width: 96%"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 align-middle bg-body-highlight border-end-lg border-translucent">
                                    <h6 class="text-body fw-bolder text-uppercase mb-0">Location</h6>
                                </td>
                                <td class="px-3 border-end border-translucent">
                                    <div class="d-flex align-items-center gap-2"><span
                                            class="badge text-bg-primary fs-8">4.0</span>
                                        <div class="progress w-100 bg-body-highlight" role="progressbar"
                                            aria-label="review" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 8px">
                                            <div class="progress-bar rounded" style="width: 80%"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-3 border-end border-translucent">
                                    <div class="d-flex align-items-center gap-2"><span
                                            class="badge text-bg-primary fs-8">4.0</span>
                                        <div class="progress w-100 bg-body-highlight" role="progressbar"
                                            aria-label="review" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 8px">
                                            <div class="progress-bar rounded" style="width: 80%"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-3 border-end-lg border-translucent">
                                    <div class="d-flex align-items-center gap-2"><span
                                            class="badge text-bg-primary fs-8">4.0</span>
                                        <div class="progress w-100 bg-body-highlight" role="progressbar"
                                            aria-label="review" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 8px">
                                            <div class="progress-bar rounded" style="width: 80%"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 align-middle bg-body-highlight border-end-lg border-translucent">
                                    <h6 class="text-body fw-bolder text-uppercase mb-0">Cleanliness</h6>
                                </td>
                                <td class="px-3 border-end border-translucent">
                                    <div class="d-flex align-items-center gap-2"><span
                                            class="badge text-bg-primary fs-8">3.5</span>
                                        <div class="progress w-100 bg-body-highlight" role="progressbar"
                                            aria-label="review" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 8px">
                                            <div class="progress-bar rounded" style="width: 70%"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-3 border-end border-translucent">
                                    <div class="d-flex align-items-center gap-2"><span
                                            class="badge text-bg-primary fs-8">3.5</span>
                                        <div class="progress w-100 bg-body-highlight" role="progressbar"
                                            aria-label="review" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 8px">
                                            <div class="progress-bar rounded" style="width: 70%"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-3 border-end-lg border-translucent">
                                    <div class="d-flex align-items-center gap-2"><span
                                            class="badge text-bg-primary fs-8">3.5</span>
                                        <div class="progress w-100 bg-body-highlight" role="progressbar"
                                            aria-label="review" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 8px">
                                            <div class="progress-bar rounded" style="width: 70%"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 align-middle bg-body-highlight border-end-lg border-translucent">
                                    <h6 class="text-body fw-bolder text-uppercase mb-0">Free WiFi</h6>
                                </td>
                                <td class="px-3 border-end border-translucent">
                                    <div class="d-flex align-items-center gap-2"><span
                                            class="badge text-bg-primary fs-8">5.0</span>
                                        <div class="progress w-100 bg-body-highlight" role="progressbar"
                                            aria-label="review" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 8px">
                                            <div class="progress-bar rounded" style="width: 100%"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-3 border-end border-translucent">
                                    <div class="d-flex align-items-center gap-2"><span
                                            class="badge text-bg-primary fs-8">5.0</span>
                                        <div class="progress w-100 bg-body-highlight" role="progressbar"
                                            aria-label="review" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 8px">
                                            <div class="progress-bar rounded" style="width: 100%"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-3 border-end-lg border-translucent">
                                    <div class="d-flex align-items-center gap-2"><span
                                            class="badge text-bg-primary fs-8">5.0</span>
                                        <div class="progress w-100 bg-body-highlight" role="progressbar"
                                            aria-label="review" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 8px">
                                            <div class="progress-bar rounded" style="width: 100%"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="pt-4 pb-3 ps-4 fw-bold" colspan="4">Facilities at a Glance</td>
                            </tr>
                            <tr>
                                <td class="px-4 align-middle border-end-lg border-translucent bg-body-highlight">
                                    <h6 class="text-body fw-bolder text-uppercase mb-0">Hotel facilities</h6>
                                </td>
                                <td class="border-translucent px-3 border-end">
                                    <ul class="columns-xl-2 mb-0 list-unstyled">
                                        <li class="text-body-highlight fs-9"><span
                                                class="fa-solid fa-check text-success me-2"></span>Free - Breakfast</li>
                                        <li class="text-body-highlight fs-9"><span
                                                class="fa-solid fa-check text-success me-2"></span>Beach View</li>
                                        <li class="text-body-highlight fs-9"><span
                                                class="fa-solid fa-check text-success me-2"></span>Airport Shuttle</li>
                                        <li class="text-body-highlight fs-9"><span
                                                class="fa-solid fa-check text-success me-2"></span>Gym</li>
                                        <li class="text-body-highlight fs-9"><span
                                                class="fa-solid fa-check text-success me-2"></span>Swimming Pool</li>
                                        <li class="text-body-highlight fs-9"><span
                                                class="fa-solid fa-check text-success me-2"></span>Free Parking</li>
                                    </ul>
                                </td>
                                <td class="border-translucent px-3 border-end">
                                    <ul class="columns-xl-2 mb-0 list-unstyled">
                                        <li class="text-body-highlight fs-9"><span
                                                class="fa-solid fa-check text-success me-2"></span>Free - Breakfast</li>
                                        <li class="text-body-highlight fs-9"><span
                                                class="fa-solid fa-check text-success me-2"></span>Fitness Center</li>
                                        <li class="text-body-highlight fs-9"><span
                                                class="fa-solid fa-check text-success me-2"></span>Airport Shuttle</li>
                                        <li class="text-body-highlight fs-9"><span
                                                class="fa-solid fa-check text-success me-2"></span>Bar/Lounge</li>
                                        <li class="text-body-highlight fs-9"><span
                                                class="fa-solid fa-check text-success me-2"></span>Accommodation</li>
                                        <li class="text-body-highlight fs-9"><span
                                                class="fa-solid fa-check text-success me-2"></span>Room Service</li>
                                    </ul>
                                </td>
                                <td class="border-translucent px-3 border-end-lg">
                                    <ul class="columns-xl-2 mb-0 list-unstyled">
                                        <li class="text-body-highlight fs-9"><span
                                                class="fa-solid fa-check text-success me-2"></span>Reception Desk</li>
                                        <li class="text-body-highlight fs-9"><span
                                                class="fa-solid fa-check text-success me-2"></span>Meeting Rooms</li>
                                        <li class="text-body-highlight fs-9"><span
                                                class="fa-solid fa-check text-success me-2"></span>Restaurant</li>
                                        <li class="text-body-highlight fs-9"><span
                                                class="fa-solid fa-check text-success me-2"></span>ATM/Banking Services
                                        </li>
                                        <li class="text-body-highlight fs-9"><span
                                                class="fa-solid fa-check text-success me-2"></span>Business Center</li>
                                        <li class="text-body-highlight fs-9"><span
                                                class="fa-solid fa-check text-success me-2"></span>Free Parking</li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><a
                    class="btn p-4 mt-8 d-flex flex-between-center collapse-indicator text-body-highlight bg-body-highlight position-sticky start-0"
                    data-bs-toggle="collapse" href="#roomDetailsCollapse" role="button" aria-expanded="true"
                    aria-controls="roomDetailsCollapse">
                    <h4 class="mb-0">Room Details</h4><span
                        class="fa-solid fa-chevron-down toggle-icon text-body"></span>
                </a>
                <div class="collapse show" id="roomDetailsCollapse">
                    <table class="table table-layout-fixed table-compare mb-0">
                        <thead>
                            <tr>
                                <th class="p-0 border-0" style="width: 225px"></th>
                                <th class="p-0 border-0"></th>
                                <th class="p-0 border-0"></th>
                                <th class="p-0 border-0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4 pt-4 pb-3 fw-bold" colspan="4">Accommodation</td>
                            </tr>
                            <tr>
                                <td class="px-4 align-middle border-end-lg border-translucent bg-body-highlight">
                                    <h6 class="text-body fw-bolder text-uppercase mb-0">room type</h6>
                                </td>
                                <td class="border-translucent px-3 border-end">
                                    <div class="d-flex flex-wrap flex-between-center gap-2">
                                        <h4 class="mb-0">Deluxe Room</h4><button class="btn btn-phoenix-primary"
                                            data-bs-toggle="modal" data-bs-target="#changeRoomModal">Change Room</button>
                                    </div>
                                </td>
                                <td class="border-translucent px-3 border-end">
                                    <div class="d-flex flex-wrap flex-between-center gap-2">
                                        <h4 class="mb-0">Deluxe Room</h4><button class="btn btn-phoenix-primary"
                                            data-bs-toggle="modal" data-bs-target="#changeRoomModal">Change Room</button>
                                    </div>
                                </td>
                                <td class="border-translucent px-3 border-end-lg">
                                    <div class="d-flex flex-wrap flex-between-center gap-2">
                                        <h4 class="mb-0">Deluxe Room</h4><button class="btn btn-phoenix-primary"
                                            data-bs-toggle="modal" data-bs-target="#changeRoomModal">Change Room</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 align-middle border-end-lg border-translucent bg-body-highlight">
                                    <h6 class="text-body fw-bolder text-uppercase mb-0">Room price</h6>
                                </td>
                                <td class="border-translucent px-3 border-end">
                                    <h3 class="d-flex align-items-center gap-2"><span
                                            class="fs-9 text-body-quaternary fw-normal text-decoration-line-through">$279.98</span>
                                        $259.65 <span class="fs-9 fw-bold">/ night</span></h3>
                                    <p class="mb-0">Inclusive of all taxes and fees</p>
                                </td>
                                <td class="border-translucent px-3 border-end">
                                    <h3 class="d-flex align-items-center gap-2"><span
                                            class="fs-9 text-body-quaternary fw-normal text-decoration-line-through">$299.76</span>
                                        $260.99 <span class="fs-9 fw-bold">/ night</span></h3>
                                    <p class="mb-0">Inclusive of all taxes and fees</p>
                                </td>
                                <td class="border-translucent px-3 border-end-lg">
                                    <h3 class="d-flex align-items-center gap-2"><span
                                            class="fs-9 text-body-quaternary fw-normal text-decoration-line-through">$309.89</span>
                                        $299.98 <span class="fs-9 fw-bold">/ night</span></h3>
                                    <p class="mb-0">Inclusive of all taxes and fees</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 align-middle border-end-lg border-translucent bg-body-highlight">
                                    <h6 class="text-body fw-bolder text-uppercase mb-0">Room picture</h6>
                                </td>
                                <td class="border-translucent px-3 border-end" style="min-width: 250px">
                                    <div class="swiper-theme-container">
                                        <div class="swiper theme-slider"
                                            data-swiper='{"loop":true,"spaceBetween":8,"slidesPerView":3,"centeredSlide":true,"grabCursor":true}'>
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><img class="img-fluid rounded-2"
                                                        src="{{ asset('assets/img/hotels/55.png') }}" alt="">
                                                </div>
                                                <div class="swiper-slide"><img class="img-fluid rounded-2"
                                                        src="{{ asset('assets/img/hotels/56.png') }}" alt="">
                                                </div>
                                                <div class="swiper-slide"><img class="img-fluid rounded-2"
                                                        src="{{ asset('assets/img/hotels/57.png') }}" alt="">
                                                </div>
                                                <div class="swiper-slide"><img class="img-fluid rounded-2"
                                                        src="{{ asset('assets/img/hotels/58.png') }}" alt="">
                                                </div>
                                                <div class="swiper-slide"><img class="img-fluid rounded-2"
                                                        src="{{ asset('assets/img/hotels/59.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-nav swiper-nav-inside">
                                            <div class="swiper-button-next bg-transparent border-0"><span
                                                    class="fas fa-chevron-right text-white"
                                                    data-fa-transform="shrink-3"></span></div>
                                            <div class="swiper-button-prev bg-transparent border-0"><span
                                                    class="fas fa-chevron-left text-white"
                                                    data-fa-transform="shrink-3"></span></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="border-translucent px-3 border-end" style="min-width: 250px">
                                    <div class="swiper-theme-container">
                                        <div class="swiper theme-slider"
                                            data-swiper='{"loop":true,"spaceBetween":8,"slidesPerView":3,"centeredSlide":true,"grabCursor":true}'>
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><img class="img-fluid rounded-2"
                                                        src="{{ asset('assets/img/hotels/60.png') }}" alt="">
                                                </div>
                                                <div class="swiper-slide"><img class="img-fluid rounded-2"
                                                        src="{{ asset('assets/img/hotels/61.png') }}" alt="">
                                                </div>
                                                <div class="swiper-slide"><img class="img-fluid rounded-2"
                                                        src="{{ asset('assets/img/hotels/62.png') }}" alt="">
                                                </div>
                                                <div class="swiper-slide"><img class="img-fluid rounded-2"
                                                        src="{{ asset('assets/img/hotels/63.png') }}" alt="">
                                                </div>
                                                <div class="swiper-slide"><img class="img-fluid rounded-2"
                                                        src="{{ asset('assets/img/hotels/64.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-nav swiper-nav-inside">
                                            <div class="swiper-button-next bg-transparent border-0"><span
                                                    class="fas fa-chevron-right text-white"
                                                    data-fa-transform="shrink-3"></span></div>
                                            <div class="swiper-button-prev bg-transparent border-0"><span
                                                    class="fas fa-chevron-left text-white"
                                                    data-fa-transform="shrink-3"></span></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="border-translucent px-3 border-end-lg" style="min-width: 250px">
                                    <div class="swiper-theme-container">
                                        <div class="swiper theme-slider"
                                            data-swiper='{"loop":true,"spaceBetween":8,"slidesPerView":3,"centeredSlide":true,"grabCursor":true}'>
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><img class="img-fluid rounded-2"
                                                        src="{{ asset('assets/img/hotels/65.png') }}" alt="">
                                                </div>
                                                <div class="swiper-slide"><img class="img-fluid rounded-2"
                                                        src="{{ asset('assets/img/hotels/66.png') }}" alt="">
                                                </div>
                                                <div class="swiper-slide"><img class="img-fluid rounded-2"
                                                        src="{{ asset('assets/img/hotels/67.png') }}" alt="">
                                                </div>
                                                <div class="swiper-slide"><img class="img-fluid rounded-2"
                                                        src="{{ asset('assets/img/hotels/68.png') }}" alt="">
                                                </div>
                                                <div class="swiper-slide"><img class="img-fluid rounded-2"
                                                        src="{{ asset('assets/img/hotels/69.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-nav swiper-nav-inside">
                                            <div class="swiper-button-next bg-transparent border-0"><span
                                                    class="fas fa-chevron-right text-white"
                                                    data-fa-transform="shrink-3"></span></div>
                                            <div class="swiper-button-prev bg-transparent border-0"><span
                                                    class="fas fa-chevron-left text-white"
                                                    data-fa-transform="shrink-3"></span></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 align-middle border-end-lg border-translucent bg-body-highlight">
                                    <h6 class="text-body fw-bolder text-uppercase mb-0">Room Details</h6>
                                </td>
                                <td class="border-translucent px-3 border-end">
                                    <h6 class="fw-semibold text-body-highlight mb-2"><span
                                            class="fa-solid fa-bed me-2 text-primary"></span>01 Double Bed</h6>
                                    <h6 class="fw-semibold text-body-highlight mb-2"><span
                                            class="fa-solid fa-user me-2 text-primary"></span>02 Adults</h6>
                                    <h6 class="fw-semibold text-body-highlight mb-2"><span
                                            class="fa-solid fa-baby me-2 text-primary"></span>00 Child</h6>
                                    <h6 class="fw-semibold text-body-highlight"><span
                                            class="fa-solid fa-bath me-2 text-primary"></span>01 Bathroom</h6>
                                </td>
                                <td class="border-translucent px-3 border-end">
                                    <h6 class="fw-semibold text-body-highlight mb-2"><span
                                            class="fa-solid fa-bed me-2 text-primary"></span>01 Double Bed</h6>
                                    <h6 class="fw-semibold text-body-highlight mb-2"><span
                                            class="fa-solid fa-user me-2 text-primary"></span>02 Adults</h6>
                                    <h6 class="fw-semibold text-body-highlight mb-2"><span
                                            class="fa-solid fa-baby me-2 text-primary"></span>00 Child</h6>
                                    <h6 class="fw-semibold text-body-highlight"><span
                                            class="fa-solid fa-bath me-2 text-primary"></span>01 Bathroom</h6>
                                </td>
                                <td class="border-translucent px-3 border-end-lg">
                                    <h6 class="fw-semibold text-body-highlight mb-2"><span
                                            class="fa-solid fa-bed me-2 text-primary"></span>01 Double Bed</h6>
                                    <h6 class="fw-semibold text-body-highlight mb-2"><span
                                            class="fa-solid fa-user me-2 text-primary"></span>02 Adults</h6>
                                    <h6 class="fw-semibold text-body-highlight mb-2"><span
                                            class="fa-solid fa-baby me-2 text-primary"></span>00 Child</h6>
                                    <h6 class="fw-semibold text-body-highlight"><span
                                            class="fa-solid fa-bath me-2 text-primary"></span>01 Bathroom</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="pt-4 pb-3 ps-4 fw-bold" colspan="4">Popular Amenities</td>
                            </tr>
                            <tr>
                                <td class="px-4 align-middle border-end-lg border-translucent bg-body-highlight">
                                    <h6 class="text-body fw-bolder text-uppercase mb-0">Airport shuttle</h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-check text-success me-2"></span>Available</h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-check text-success me-2"></span>Available</h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-xmark text-secondary-light me-2"></span>Not Available
                                    </h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 align-middle border-end-lg border-translucent bg-body-highlight">
                                    <h6 class="text-body fw-bolder text-uppercase mb-0">Free wifi</h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-check text-success me-2"></span>Available</h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-check text-success me-2"></span>Available</h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-check text-success me-2"></span>Available</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 align-middle border-end-lg border-translucent bg-body-highlight">
                                    <h6 class="text-body fw-bolder text-uppercase mb-0">Restaurant</h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-xmark text-secondary-light me-2"></span>Not Available
                                    </h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-xmark text-secondary-light me-2"></span>Not Available
                                    </h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-check text-success me-2"></span>Available</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 align-middle border-end-lg border-translucent bg-body-highlight">
                                    <h6 class="text-body fw-bolder text-uppercase mb-0">Smoking zone</h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-xmark text-secondary-light me-2"></span>Not Available
                                    </h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-xmark text-secondary-light me-2"></span>Not Available
                                    </h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-check text-success me-2"></span>Available</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 align-middle border-end-lg border-translucent bg-body-highlight">
                                    <h6 class="text-body fw-bolder text-uppercase mb-0">Room service</h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-check text-success me-2"></span>Available</h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-xmark text-secondary-light me-2"></span>Not Available
                                    </h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-check text-success me-2"></span>Available</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 align-middle border-end-lg border-translucent bg-body-highlight">
                                    <h6 class="text-body fw-bolder text-uppercase mb-0">Free parking</h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-check text-success me-2"></span>Available</h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-xmark text-secondary-light me-2"></span>Not Available
                                    </h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-check text-success me-2"></span>Available</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 align-middle border-end-lg border-translucent bg-body-highlight">
                                    <h6 class="text-body fw-bolder text-uppercase mb-0">Pet-Friendly</h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-check text-success me-2"></span>Available</h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-check text-success me-2"></span>Available</h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-xmark text-secondary-light me-2"></span>Not Available
                                    </h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 align-middle border-end-lg border-translucent bg-body-highlight">
                                    <h6 class="text-body fw-bolder text-uppercase mb-0">Beach-front</h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-check text-success me-2"></span>Available</h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-xmark text-secondary-light me-2"></span>Not Available
                                    </h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-xmark text-secondary-light me-2"></span>Not Available
                                    </h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 align-middle border-end-lg border-translucent bg-body-highlight">
                                    <h6 class="text-body fw-bolder text-uppercase mb-0">Facilities for disabled guests</h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-xmark text-secondary-light me-2"></span>Not Available
                                    </h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-check text-success me-2"></span>Available</h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-check text-success me-2"></span>Available</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 align-middle border-end-lg border-translucent bg-body-highlight">
                                    <h6 class="text-body fw-bolder text-uppercase mb-0">Bar</h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-xmark text-secondary-light me-2"></span>Not Available
                                    </h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-xmark text-secondary-light me-2"></span>Not Available
                                    </h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-check text-success me-2"></span>Available</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 align-middle border-end-lg border-translucent bg-body-highlight">
                                    <h6 class="text-body fw-bolder text-uppercase mb-0">Free Breakfast</h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-check text-success me-2"></span>Available</h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-check text-success me-2"></span>Available</h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-check text-success me-2"></span>Available</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 align-middle border-end-lg border-translucent bg-body-highlight">
                                    <h6 class="text-body fw-bolder text-uppercase mb-0">24-hour front desk</h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-xmark text-secondary-light me-2"></span>Not Available
                                    </h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-xmark text-secondary-light me-2"></span>Not Available
                                    </h6>
                                </td>
                                <td class="px-3 align-middle border-end-lg border-translucent">
                                    <h6 class="text-body"> <span
                                            class="fa-solid fa-circle-xmark text-secondary-light me-2"></span>Not Available
                                    </h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-0 pb-0"></td>
                                <td class="border-0 px-3 pb-0"><a class="btn btn-outline-primary w-100"
                                        href="#!">View room details</a></td>
                                <td class="border-0 px-3 pb-0"><a class="btn btn-outline-primary w-100"
                                        href="#!">View room details</a></td>
                                <td class="border-0 px-3 pb-0"><a class="btn btn-outline-primary w-100"
                                        href="#!">View room details</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->

    <div class="modal fade" id="changeRoomModal" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="changeRoomModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header justify-content-between p-4">
                    <h3 class="mb-0 text-body-highlight" id="changeRoomModalLabel">Select Room</h3><button
                        class="btn btn-phoenix-danger px-3" data-bs-dismiss="modal" aria-label="Close"><span
                            class="fa-solid fa-times" data-fa-transform="down-2"></span></button>
                </div>
                <div class="modal-body p-4">
                    <div class="row g-3 mb-4">
                        <div class="col-lg-8 col-xxl-7">
                            <div class="d-flex align-items-center mb-2">
                                <h4 class="mb-0 fw-semibold pe-3"><span
                                        class="fa-solid fa-circle fs-9 text-body-quaternary me-2"
                                        data-fa-transform="up-1"></span>Standard Double Queen</h4><span
                                    class="badge badge-phoenix badge-phoenix-info fs-10">10% OFF</span>
                            </div>
                            <p class="mb-0">A standard double queen room has two queen-sized beds and may accept up to
                                two people for a convenient and comfortable stay.</p>
                        </div>
                        <div class="col-lg-4 col-xxl-5">
                            <h3 class="mb-2 d-flex align-items-center justify-content-lg-end gap-2"><span
                                    class="fs-9 text-body-quaternary fw-normal text-decoration-line-through">$143.65</span>$123.65<span
                                    class="fs-9 text-body">/ night</span></h3>
                            <h5 class="text-body text-lg-end fw-normal">Inclusive of all taxes and fees</h5>
                        </div>
                    </div>
                    <div class="row mb-4 justify-content-between">
                        <div class="col-lg-7">
                            <div class="swiper-theme-container">
                                <div class="swiper theme-slider"
                                    data-swiper='{"loop":true,"spaceBetween":8,"slidesPerView":"auto","centeredSlide":true,"grabCursor":true}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide w-auto"><img class="rounded-2"
                                                src="{{ asset('assets/img/hotels/33.png') }}" alt=""
                                                width="158"></div>
                                        <div class="swiper-slide w-auto"><img class="rounded-2"
                                                src="{{ asset('assets/img/hotels/34.png') }}" alt=""
                                                width="158"></div>
                                        <div class="swiper-slide w-auto"><img class="rounded-2"
                                                src="{{ asset('assets/img/hotels/35.png') }}" alt=""
                                                width="158"></div>
                                        <div class="swiper-slide w-auto"><img class="rounded-2"
                                                src="{{ asset('assets/img/hotels/36.png') }}" alt=""
                                                width="158"></div>
                                        <div class="swiper-slide w-auto"><img class="rounded-2"
                                                src="{{ asset('assets/img/hotels/37.png') }}" alt=""
                                                width="158"></div>
                                        <div class="swiper-slide w-auto"><img class="rounded-2"
                                                src="{{ asset('assets/img/hotels/38.png') }}" alt=""
                                                width="158"></div>
                                    </div>
                                </div>
                                <div class="swiper-nav swiper-nav-inside">
                                    <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span>
                                    </div>
                                    <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xl-4">
                            <div class="p-4 border border-translucent rounded-2 mt-4 mt-lg-0">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <h6 class="fw-semibold text-body-secondary"><span
                                                class="fa-solid fa-bed text-info me-2"></span>01 Double Bed</h6>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="fw-semibold text-body-secondary"><span
                                                class="fa-solid fa-user text-info me-2"> </span>02 Adult</h6>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="fw-semibold text-body-secondary"><span
                                                class="fa-solid fa-baby text-info me-2"> </span>00 Child</h6>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="fw-semibold text-body-secondary"><span
                                                class="fa-solid fa-bath text-info me-2"> </span>01 Bathrooms</h6>
                                    </div>
                                </div>
                            </div><button class="btn btn-outline-primary w-100 mt-3">Add to compare</button>
                        </div>
                    </div><a
                        class="btn p-3 d-flex flex-between-center collapse-indicator text-body-highlight bg-body-highlight"
                        data-bs-toggle="collapse" href="#amenitiesCollapse-0" role="button" aria-expanded="false"
                        aria-controls="amenitiesCollapse-0">
                        <h5 class="mb-0">Room Amenities</h5><span
                            class="fa-solid fa-chevron-down toggle-icon text-body"></span>
                    </a>
                    <div class="collapse" id="amenitiesCollapse-0">
                        <div class="px-md-4 pt-4">
                            <h5 class="mb-3">Most popular</h5>
                            <div class="row g-0 mb-5">
                                <div class="col-sm-6 col-lg-4">
                                    <div class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border">
                                        <span class="fs-9 text-warning fa-solid fa-car"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Airport shuttle</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-top-sm border-end border-start border-start-sm-0">
                                        <span class="fs-9 text-warning fa-solid fa-wifi"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Free wifi</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-end border-start border-start-lg-0 border-top-lg border-bottom">
                                        <span class="fs-9 text-warning fa-solid fa-utensils"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Restaurant</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-end border-start border-start-sm-0 border-start-lg border-bottom">
                                        <span class="fs-9 text-warning fa-solid fa-smoking"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Smoking zone</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-end border-start border-start-lg-0">
                                        <span class="fs-9 text-warning fa-solid fa-user"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Room service</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-end border-start border-start-sm-0">
                                        <span class="fs-9 text-warning fa-solid fa-dog"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Pet-Friendly</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-x border-bottom">
                                        <span class="fs-9 text-warning fa-solid fa-square-parking"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Free parking</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-end border-start border-start-sm-0">
                                        <span class="fs-9 text-warning fa-solid fa-umbrella-beach"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Beach-front</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-end border-start border-start-lg-0">
                                        <span class="fs-9 text-warning fa-solid fa-wheelchair"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Facilities for disabled guests</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-x border-bottom border-start border-start-sm-0 border-start-lg">
                                        <span class="fs-9 text-warning fa-solid fa-wine-glass"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Bar</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-end border-start border-start-lg-0">
                                        <span class="fs-9 text-warning fa-solid fa-utensils"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Free Breakfast</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-end border-start border-start-sm-0">
                                        <span class="fs-9 text-warning fa-solid fa-bell-concierge"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">24-hour front desk</h5>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mb-3">Others Amenities</h5>
                            <div class="row g-2">
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Wifi</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Luggage rack</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Hairdryer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Toiletries</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Seating area</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Bed sheets</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Room service</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Blankets</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Air conditioning</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Television</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Heating</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Sofa or couch</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Coffee table</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Ironing service</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Dry cleaning</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Coffee maker</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Electric kettle</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Garden view</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Baby cots</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Desk or workstation
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-7">
                    <div class="row g-3 mb-4">
                        <div class="col-lg-8 col-xxl-7">
                            <div class="d-flex align-items-center mb-2">
                                <h4 class="mb-0 fw-semibold pe-3"><span
                                        class="fa-solid fa-circle fs-9 text-body-quaternary me-2"
                                        data-fa-transform="up-1"></span>Deluxe Room</h4><span
                                    class="badge badge-phoenix badge-phoenix-info fs-10">10% OFF</span>
                            </div>
                            <p class="mb-0">A Deluxe Room is a spacious and luxurious hotel accommodation offering
                                upgraded amenities and enhanced comfort for a more indulgent stay.</p>
                        </div>
                        <div class="col-lg-4 col-xxl-5">
                            <h3 class="mb-2 d-flex align-items-center justify-content-lg-end gap-2"><span
                                    class="fs-9 text-body-quaternary fw-normal text-decoration-line-through">$199.65</span>$165.98<span
                                    class="fs-9 text-body">/ night</span></h3>
                            <h5 class="text-body text-lg-end fw-normal">Inclusive of all taxes and fees</h5>
                        </div>
                    </div>
                    <div class="row mb-4 justify-content-between">
                        <div class="col-lg-7">
                            <div class="swiper-theme-container">
                                <div class="swiper theme-slider"
                                    data-swiper='{"loop":true,"spaceBetween":8,"slidesPerView":"auto","centeredSlide":true,"grabCursor":true}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide w-auto"><img class="rounded-2"
                                                src="{{ asset('assets/img/hotels/33.png') }}" alt=""
                                                width="158"></div>
                                        <div class="swiper-slide w-auto"><img class="rounded-2"
                                                src="{{ asset('assets/img/hotels/34.png') }}" alt=""
                                                width="158"></div>
                                        <div class="swiper-slide w-auto"><img class="rounded-2"
                                                src="{{ asset('assets/img/hotels/35.png') }}" alt=""
                                                width="158"></div>
                                        <div class="swiper-slide w-auto"><img class="rounded-2"
                                                src="{{ asset('assets/img/hotels/36.png') }}" alt=""
                                                width="158"></div>
                                        <div class="swiper-slide w-auto"><img class="rounded-2"
                                                src="{{ asset('assets/img/hotels/37.png') }}" alt=""
                                                width="158"></div>
                                        <div class="swiper-slide w-auto"><img class="rounded-2"
                                                src="{{ asset('assets/img/hotels/38.png') }}" alt=""
                                                width="158"></div>
                                    </div>
                                </div>
                                <div class="swiper-nav swiper-nav-inside">
                                    <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span>
                                    </div>
                                    <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xl-4">
                            <div class="p-4 border border-translucent rounded-2 mt-4 mt-lg-0">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <h6 class="fw-semibold text-body-secondary"><span
                                                class="fa-solid fa-bed text-info me-2"></span>01 Double Bed</h6>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="fw-semibold text-body-secondary"><span
                                                class="fa-solid fa-user text-info me-2"> </span>02 Adult</h6>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="fw-semibold text-body-secondary"><span
                                                class="fa-solid fa-baby text-info me-2"> </span>00 Child</h6>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="fw-semibold text-body-secondary"><span
                                                class="fa-solid fa-bath text-info me-2"> </span>01 Bathrooms</h6>
                                    </div>
                                </div>
                            </div><button class="btn btn-outline-primary w-100 mt-3">Add to compare</button>
                        </div>
                    </div><a
                        class="btn p-3 d-flex flex-between-center collapse-indicator text-body-highlight bg-body-highlight"
                        data-bs-toggle="collapse" href="#amenitiesCollapse-1" role="button" aria-expanded="false"
                        aria-controls="amenitiesCollapse-1">
                        <h5 class="mb-0">Room Amenities</h5><span
                            class="fa-solid fa-chevron-down toggle-icon text-body"></span>
                    </a>
                    <div class="collapse" id="amenitiesCollapse-1">
                        <div class="px-md-4 pt-4">
                            <h5 class="mb-3">Most popular</h5>
                            <div class="row g-0 mb-5">
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border">
                                        <span class="fs-9 text-warning fa-solid fa-car"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Airport shuttle</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-top-sm border-end border-start border-start-sm-0">
                                        <span class="fs-9 text-warning fa-solid fa-wifi"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Free wifi</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-end border-start border-start-lg-0 border-top-lg border-bottom">
                                        <span class="fs-9 text-warning fa-solid fa-utensils"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Restaurant</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-end border-start border-start-sm-0 border-start-lg border-bottom">
                                        <span class="fs-9 text-warning fa-solid fa-smoking"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Smoking zone</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-end border-start border-start-lg-0">
                                        <span class="fs-9 text-warning fa-solid fa-user"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Room service</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-end border-start border-start-sm-0">
                                        <span class="fs-9 text-warning fa-solid fa-dog"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Pet-Friendly</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-x border-bottom">
                                        <span class="fs-9 text-warning fa-solid fa-square-parking"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Free parking</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-end border-start border-start-sm-0">
                                        <span class="fs-9 text-warning fa-solid fa-umbrella-beach"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Beach-front</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-end border-start border-start-lg-0">
                                        <span class="fs-9 text-warning fa-solid fa-wheelchair"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Facilities for disabled guests</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-x border-bottom border-start border-start-sm-0 border-start-lg">
                                        <span class="fs-9 text-warning fa-solid fa-wine-glass"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Bar</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-end border-start border-start-lg-0">
                                        <span class="fs-9 text-warning fa-solid fa-utensils"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Free Breakfast</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-end border-start border-start-sm-0">
                                        <span class="fs-9 text-warning fa-solid fa-bell-concierge"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">24-hour front desk</h5>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mb-3">Others Amenities</h5>
                            <div class="row g-2">
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Wifi</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Luggage rack</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Hairdryer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Toiletries</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Seating area</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Bed sheets</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Room service</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Blankets</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Air conditioning</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Television</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Heating</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Sofa or couch</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Coffee table</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Ironing service</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Dry cleaning</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Coffee maker</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Electric kettle</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Garden view</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Baby cots</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Desk or workstation
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-7">
                    <div class="row g-3 mb-4">
                        <div class="col-lg-8 col-xxl-7">
                            <div class="d-flex align-items-center mb-2">
                                <h4 class="mb-0 fw-semibold pe-3"><span
                                        class="fa-solid fa-circle fs-9 text-body-quaternary me-2"
                                        data-fa-transform="up-1"></span>Presidential Suite</h4><span
                                    class="badge badge-phoenix badge-phoenix-info fs-10">10% OFF</span>
                            </div>
                            <p class="mb-0">The Presidential Suite: The pinnacle of luxury accommodations, reserved for
                                VIPs and boasting the utmost opulence and prestige.</p>
                        </div>
                        <div class="col-lg-4 col-xxl-5">
                            <h3 class="mb-2 d-flex align-items-center justify-content-lg-end gap-2"><span
                                    class="fs-9 text-body-quaternary fw-normal text-decoration-line-through">$156.23</span>$130.65<span
                                    class="fs-9 text-body">/ night</span></h3>
                            <h5 class="text-body text-lg-end fw-normal">Inclusive of all taxes and fees</h5>
                        </div>
                    </div>
                    <div class="row mb-4 justify-content-between">
                        <div class="col-lg-7">
                            <div class="swiper-theme-container">
                                <div class="swiper theme-slider"
                                    data-swiper='{"loop":true,"spaceBetween":8,"slidesPerView":"auto","centeredSlide":true,"grabCursor":true}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide w-auto"><img class="rounded-2"
                                                src="{{ asset('assets/img/hotels/33.png') }}" alt=""
                                                width="158"></div>
                                        <div class="swiper-slide w-auto"><img class="rounded-2"
                                                src="{{ asset('assets/img/hotels/34.png') }}" alt=""
                                                width="158"></div>
                                        <div class="swiper-slide w-auto"><img class="rounded-2"
                                                src="{{ asset('assets/img/hotels/35.png') }}" alt=""
                                                width="158"></div>
                                        <div class="swiper-slide w-auto"><img class="rounded-2"
                                                src="{{ asset('assets/img/hotels/36.png') }}" alt=""
                                                width="158"></div>
                                        <div class="swiper-slide w-auto"><img class="rounded-2"
                                                src="{{ asset('assets/img/hotels/37.png') }}" alt=""
                                                width="158"></div>
                                        <div class="swiper-slide w-auto"><img class="rounded-2"
                                                src="{{ asset('assets/img/hotels/38.png') }}" alt=""
                                                width="158"></div>
                                    </div>
                                </div>
                                <div class="swiper-nav swiper-nav-inside">
                                    <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span>
                                    </div>
                                    <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xl-4">
                            <div class="p-4 border border-translucent rounded-2 mt-4 mt-lg-0">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <h6 class="fw-semibold text-body-secondary"><span
                                                class="fa-solid fa-bed text-info me-2"></span>01 Double Bed</h6>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="fw-semibold text-body-secondary"><span
                                                class="fa-solid fa-user text-info me-2"> </span>02 Adult</h6>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="fw-semibold text-body-secondary"><span
                                                class="fa-solid fa-baby text-info me-2"> </span>00 Child</h6>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="fw-semibold text-body-secondary"><span
                                                class="fa-solid fa-bath text-info me-2"> </span>01 Bathrooms</h6>
                                    </div>
                                </div>
                            </div><button class="btn btn-outline-primary w-100 mt-3">Add to compare</button>
                        </div>
                    </div><a
                        class="btn p-3 d-flex flex-between-center collapse-indicator text-body-highlight bg-body-highlight"
                        data-bs-toggle="collapse" href="#amenitiesCollapse-2" role="button" aria-expanded="false"
                        aria-controls="amenitiesCollapse-2">
                        <h5 class="mb-0">Room Amenities</h5><span
                            class="fa-solid fa-chevron-down toggle-icon text-body"></span>
                    </a>
                    <div class="collapse" id="amenitiesCollapse-2">
                        <div class="px-md-4 pt-4">
                            <h5 class="mb-3">Most popular</h5>
                            <div class="row g-0 mb-5">
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border">
                                        <span class="fs-9 text-warning fa-solid fa-car"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Airport shuttle</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-top-sm border-end border-start border-start-sm-0">
                                        <span class="fs-9 text-warning fa-solid fa-wifi"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Free wifi</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-end border-start border-start-lg-0 border-top-lg border-bottom">
                                        <span class="fs-9 text-warning fa-solid fa-utensils"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Restaurant</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-end border-start border-start-sm-0 border-start-lg border-bottom">
                                        <span class="fs-9 text-warning fa-solid fa-smoking"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Smoking zone</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-end border-start border-start-lg-0">
                                        <span class="fs-9 text-warning fa-solid fa-user"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Room service</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-end border-start border-start-sm-0">
                                        <span class="fs-9 text-warning fa-solid fa-dog"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Pet-Friendly</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-x border-bottom">
                                        <span class="fs-9 text-warning fa-solid fa-square-parking"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Free parking</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-end border-start border-start-sm-0">
                                        <span class="fs-9 text-warning fa-solid fa-umbrella-beach"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Beach-front</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-end border-start border-start-lg-0">
                                        <span class="fs-9 text-warning fa-solid fa-wheelchair"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Facilities for disabled guests</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-x border-bottom border-start border-start-sm-0 border-start-lg">
                                        <span class="fs-9 text-warning fa-solid fa-wine-glass"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Bar</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-end border-start border-start-lg-0">
                                        <span class="fs-9 text-warning fa-solid fa-utensils"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Free Breakfast</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-end border-start border-start-sm-0">
                                        <span class="fs-9 text-warning fa-solid fa-bell-concierge"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">24-hour front desk</h5>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mb-3">Others Amenities</h5>
                            <div class="row g-2">
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Wifi</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Luggage rack</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Hairdryer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Toiletries</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Seating area</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Bed sheets</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Room service</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Blankets</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Air conditioning</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Television</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Heating</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Sofa or couch</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Coffee table</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Ironing service</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Dry cleaning</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Coffee maker</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Electric kettle</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Garden view</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Baby cots</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Desk or workstation
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-7">
                    <div class="row g-3 mb-4">
                        <div class="col-lg-8 col-xxl-7">
                            <div class="d-flex align-items-center mb-2">
                                <h4 class="mb-0 fw-semibold pe-3"><span
                                        class="fa-solid fa-circle fs-9 text-body-quaternary me-2"
                                        data-fa-transform="up-1"></span>Ocean View Room</h4><span
                                    class="badge badge-phoenix badge-phoenix-info fs-10">10% OFF</span>
                            </div>
                            <p class="mb-0">An Ocean View Room offers breathtaking vistas of the sea, providing guests
                                with a captivating and serene coastal experience.</p>
                        </div>
                        <div class="col-lg-4 col-xxl-5">
                            <h3 class="mb-2 d-flex align-items-center justify-content-lg-end gap-2"><span
                                    class="fs-9 text-body-quaternary fw-normal text-decoration-line-through">$271.65</span>$240.96<span
                                    class="fs-9 text-body">/ night</span></h3>
                            <h5 class="text-body text-lg-end fw-normal">Inclusive of all taxes and fees</h5>
                        </div>
                    </div>
                    <div class="row mb-4 justify-content-between">
                        <div class="col-lg-7">
                            <div class="swiper-theme-container">
                                <div class="swiper theme-slider"
                                    data-swiper='{"loop":true,"spaceBetween":8,"slidesPerView":"auto","centeredSlide":true,"grabCursor":true}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide w-auto"><img class="rounded-2"
                                                src="{{ asset('assets/img/hotels/33.png') }}" alt=""
                                                width="158"></div>
                                        <div class="swiper-slide w-auto"><img class="rounded-2"
                                                src="{{ asset('assets/img/hotels/34.png') }}" alt=""
                                                width="158"></div>
                                        <div class="swiper-slide w-auto"><img class="rounded-2"
                                                src="{{ asset('assets/img/hotels/35.png') }}" alt=""
                                                width="158"></div>
                                        <div class="swiper-slide w-auto"><img class="rounded-2"
                                                src="{{ asset('assets/img/hotels/36.png') }}" alt=""
                                                width="158"></div>
                                        <div class="swiper-slide w-auto"><img class="rounded-2"
                                                src="{{ asset('assets/img/hotels/37.png') }}" alt=""
                                                width="158"></div>
                                        <div class="swiper-slide w-auto"><img class="rounded-2"
                                                src="{{ asset('assets/img/hotels/38.png') }}" alt=""
                                                width="158"></div>
                                    </div>
                                </div>
                                <div class="swiper-nav swiper-nav-inside">
                                    <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span>
                                    </div>
                                    <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xl-4">
                            <div class="p-4 border border-translucent rounded-2 mt-4 mt-lg-0">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <h6 class="fw-semibold text-body-secondary"><span
                                                class="fa-solid fa-bed text-info me-2"></span>01 Double Bed</h6>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="fw-semibold text-body-secondary"><span
                                                class="fa-solid fa-user text-info me-2"> </span>02 Adult</h6>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="fw-semibold text-body-secondary"><span
                                                class="fa-solid fa-baby text-info me-2"> </span>00 Child</h6>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="fw-semibold text-body-secondary"><span
                                                class="fa-solid fa-bath text-info me-2"> </span>01 Bathrooms</h6>
                                    </div>
                                </div>
                            </div><button class="btn btn-outline-primary w-100 mt-3">Add to compare</button>
                        </div>
                    </div><a
                        class="btn p-3 d-flex flex-between-center collapse-indicator text-body-highlight bg-body-highlight"
                        data-bs-toggle="collapse" href="#amenitiesCollapse-3" role="button" aria-expanded="false"
                        aria-controls="amenitiesCollapse-3">
                        <h5 class="mb-0">Room Amenities</h5><span
                            class="fa-solid fa-chevron-down toggle-icon text-body"></span>
                    </a>
                    <div class="collapse" id="amenitiesCollapse-3">
                        <div class="px-md-4 pt-4">
                            <h5 class="mb-3">Most popular</h5>
                            <div class="row g-0 mb-5">
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border">
                                        <span class="fs-9 text-warning fa-solid fa-car"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Airport shuttle</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-top-sm border-end border-start border-start-sm-0">
                                        <span class="fs-9 text-warning fa-solid fa-wifi"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Free wifi</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-end border-start border-start-lg-0 border-top-lg border-bottom">
                                        <span class="fs-9 text-warning fa-solid fa-utensils"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Restaurant</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-end border-start border-start-sm-0 border-start-lg border-bottom">
                                        <span class="fs-9 text-warning fa-solid fa-smoking"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Smoking zone</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-end border-start border-start-lg-0">
                                        <span class="fs-9 text-warning fa-solid fa-user"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Room service</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-end border-start border-start-sm-0">
                                        <span class="fs-9 text-warning fa-solid fa-dog"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Pet-Friendly</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-x border-bottom">
                                        <span class="fs-9 text-warning fa-solid fa-square-parking"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Free parking</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-end border-start border-start-sm-0">
                                        <span class="fs-9 text-warning fa-solid fa-umbrella-beach"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Beach-front</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-end border-start border-start-lg-0">
                                        <span class="fs-9 text-warning fa-solid fa-wheelchair"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Facilities for disabled guests</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-x border-bottom border-start border-start-sm-0 border-start-lg">
                                        <span class="fs-9 text-warning fa-solid fa-wine-glass"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Bar</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-end border-start border-start-lg-0">
                                        <span class="fs-9 text-warning fa-solid fa-utensils"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">Free Breakfast</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div
                                        class="d-flex align-items-center gap-2 px-4 py-3 h-100 border-translucent border-bottom border-end border-start border-start-sm-0">
                                        <span class="fs-9 text-warning fa-solid fa-bell-concierge"></span>
                                        <h5 class="text-body-tertiary mb-0 fw-normal">24-hour front desk</h5>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mb-3">Others Amenities</h5>
                            <div class="row g-2">
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Wifi</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Luggage rack</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Hairdryer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Toiletries</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Seating area</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Bed sheets</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Room service</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Blankets</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Air conditioning</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Television</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Heating</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Sofa or couch</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Coffee table</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Ironing service</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Dry cleaning</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Coffee maker</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Electric kettle</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Garden view</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Baby cots</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="p-3 border border-translucent rounded-2">
                                        <h5 class="text-body-secondary fw-semibold mb-0"><span
                                                class="fa-solid fa-check text-success me-2"> </span>Desk or workstation
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                    <li class="mb-1"><a class="text-secondary-lighter"
                                            href="#!">Destination</a></li>
                                    <li class="mb-1"><a class="text-secondary-lighter" href="#!">Sitemap</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-1"><a class="text-secondary-lighter" href="#!">Refund
                                            policy</a></li>
                                    <li class="mb-1"><a class="text-secondary-lighter" href="#!">EMI Policy</a>
                                    </li>
                                    <li class="mb-1"><a class="text-secondary-lighter" href="#!">Privacy
                                            Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-3">Contact</h5><a
                            class="d-block text-secondary-lighter mb-1 text-nowrap"
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
                                    class="fa-solid fa-envelope form-icon text-body fs-9"
                                    data-fa-transform="up-2"></span></div><button class="btn btn-primary rounded">Sign
                                up</button>
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
    <script src="{{ asset('vendors/leaflet/leaflet.js') }}"></script>
    <script src="{{ asset('vendors/leaflet.markercluster/leaflet.markercluster.js') }}"></script>
    <script src="{{ asset('vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js') }}"></script>
    <script src="{{ asset('vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/hotel-compare.js') }}"></script>
@endpush
