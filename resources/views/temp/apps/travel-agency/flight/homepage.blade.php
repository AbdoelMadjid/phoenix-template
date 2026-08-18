@extends('layouts.travel-agency')

@section('title', 'Flight Homepage')

@push('styles')
    <link href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="navbar-responsive-navitems navbar-expand border-y bg-body-emphasis border-translucent py-2">
        <div class="container-medium d-flex flex-between-center" data-navbar="data-navbar">
            <ul class="navbar-nav justify-content-end align-items-center">
                <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3 ps-0 text-primary"
                        href="{{ url('apps/travel-agency/flight/homepage') }}">Homepage</a></li>
                <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3  "
                        href="{{ url('apps/travel-agency/flight/booking') }}">Booking</a></li>
                <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3  "
                        href="{{ url('apps/travel-agency/flight/payment') }}">Payment</a></li>
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
    <section class="py-0">
        <div class="container-small">
            <nav class="navbar navbar-landing navbar-home navbar-expand py-4 px-0">
                <ul class="navbar-nav mx-auto mt-3 mt-lg-0 gap-2">
                    <li class="nav-item"><a class="nav-link fw-bold rounded-3" aria-current="page"
                            href="{{ url('apps/travel-agency/hotel/homepage') }}"> <span
                                class="me-2 fa-solid fa-hotel"></span>Hotel</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold rounded-3 active" aria-current="page"
                            href="{{ url('apps/travel-agency/flight/homepage') }}"> <span
                                class="me-2 fa-solid fa-plane"></span>Flight</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold rounded-3" aria-current="page"
                            href="{{ url('apps/travel-agency/trip/homepage') }}"> <span
                                class="me-2 fa-solid fa-suitcase-rolling"></span>Trip</a></li>
                </ul>
            </nav>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->



    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="p-0">
        <div class="container-fluid px-0">
            <div class="position-relative" style="height: 19rem;">
                <div class="bg-holder"
                    style="background-image:url({{ asset('assets/img/bg/44.png') }});background-position: center; background-size: cover;">
                </div>
                <!--/.bg-holder-->
            </div>
            <div class="container-small mb-6" style="margin-top: -12rem">
                <form>
                    <div class="card position-relative mb-6">
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="form-check form-check-inline"><input class="form-check-input" id="oneWay"
                                        type="radio" name="flightType"><label class="form-check-label fs-8 text-body"
                                        for="oneWay">One way</label></div>
                                <div class="form-check form-check-inline"><input class="form-check-input" id="return"
                                        type="radio" name="flightType" checked="checked"><label
                                        class="form-check-label fs-8 text-body" for="return">Return</label></div>
                                <div class="form-check form-check-inline"><input class="form-check-input" id="multi"
                                        type="radio" name="flightType"><label class="form-check-label fs-8 text-body"
                                        for="multi">Multiple cities</label></div>
                            </div>
                            <div class="row g-3 mb-4">
                                <div class="col-lg">
                                    <div class="row flex-center g-2">
                                        <div class="col-sm">
                                            <div class="form-floating flex-1"><input class="form-control" id="fromLocation"
                                                    type="text" placeholder="Dhaka (DAC)"><label
                                                    for="fromLocation">From</label></div>
                                        </div>
                                        <div class="col-auto"><button class="btn btn-phoenix-secondary circle-btn"
                                                type="button"><span class="fas fa-arrows-rotate"></span></button></div>
                                        <div class="col-sm">
                                            <div class="form-floating flex-1"><input class="form-control" id="toLocation"
                                                    type="text" placeholder="Sylhet (ZYL)"><label
                                                    for="toLocation">To</label></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="row g-2">
                                        <div class="col-sm-6">
                                            <div class="form-floating flex-1"><input class="form-control datetimepicker"
                                                    id="journeyDate" type="text" placeholder="dd/mm/yyyy"
                                                    data-options='{"disableMobile":true,"defaultDate":"today","dateFormat":"j M, Y"}'><label
                                                    class="form-label" for="journeyDate">Journey Date</label></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating flex-1"><input class="form-control datetimepicker"
                                                    id="returnDate" type="text" placeholder="dd/mm/yyyy"
                                                    data-options='{"disableMobile":true,"defaultDate":"today","dateFormat":"j M, Y"}'><label
                                                    class="form-label" for="returnDate">Return Date</label></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-auto">
                                    <div class="form-floating" style="min-width: 13rem" data-bs-toggle="dropdown"
                                        data-bs-auto-close="outside"><input class="form-control cursor-pointer"
                                            id="travelerCount" type="text" readonly="readonly"
                                            placeholder="1 Traveler" value="1 Traveler"><label
                                            for="travelerCount">Traveler</label></div>
                                    <div class="dropdown-menu dropdown-menu-start p-4" style="max-width: 20rem">
                                        <div class="row align-items-center g-0 pb-3 border-bottom border-translucent">
                                            <div class="col-5">
                                                <h5 class="mb-0 text-body">Adults</h5>
                                            </div>
                                            <div class="col-7">
                                                <div class="input-group gap-2" data-quantity="data-quantity"><button
                                                        class="btn btn-phoenix-primary px-2 rounded" data-type="minus"
                                                        type="button"><span
                                                            class="fa-solid fa-minus px-1"></span></button><input
                                                        class="form-control border-translucent input-spin-none text-center rounded"
                                                        id="adults" type="number" value="1"><button
                                                        class="btn btn-phoenix-primary px-2 rounded" data-type="plus"
                                                        type="button"><span
                                                            class="fa-solid fa-plus px-1"></span></button></div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center g-0 py-3 border-bottom border-translucent">
                                            <div class="col-5">
                                                <h5 class="mb-0 text-body">Infants</h5>
                                            </div>
                                            <div class="col-7">
                                                <div class="input-group gap-2" data-quantity="data-quantity"><button
                                                        class="btn btn-phoenix-primary px-2 rounded" data-type="minus"
                                                        type="button"><span
                                                            class="fa-solid fa-minus px-1"></span></button><input
                                                        class="form-control border-translucent input-spin-none text-center rounded"
                                                        id="infants" type="number" value="0"><button
                                                        class="btn btn-phoenix-primary px-2 rounded" data-type="plus"
                                                        type="button"><span
                                                            class="fa-solid fa-plus px-1"></span></button></div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center g-0 py-3">
                                            <div class="col-5">
                                                <h5 class="mb-0 text-body">Children</h5>
                                            </div>
                                            <div class="col-7">
                                                <div class="input-group gap-2" data-quantity="data-quantity"><button
                                                        class="btn btn-phoenix-primary px-2 rounded" data-type="minus"
                                                        type="button"><span
                                                            class="fa-solid fa-minus px-1"></span></button><input
                                                        class="form-control border-translucent input-spin-none text-center rounded"
                                                        id="child" type="number" value="0"><button
                                                        class="btn btn-phoenix-primary px-2 rounded" data-type="plus"
                                                        type="button"><span
                                                            class="fa-solid fa-plus px-1"></span></button></div>
                                            </div>
                                        </div><button class="btn btn-primary w-100" type="button">Complete</button>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-body-highlight p-3 p-sm-4 rounded-2 mb-4">
                                <div class="row g-3">
                                    <div class="col-xl-2 col-lg col-md-4">
                                        <h6 class="mb-2">Fare Type</h6>
                                        <div class="form-check mb-0"><input class="form-check-input mt-0"
                                                id="flightFareType" type="checkbox" checked="checked"><label
                                                class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0"
                                                for="flightFareType">Refundable ticket</label></div>
                                    </div>
                                    <div class="col-xl-2 col-lg col-md-4">
                                        <h6 class="mb-3">Price Range</h6>
                                        <div class="noUi-primary-lighter noUi-handle-primary noUi-slider-slim noUi-handle-circle px-1 mb-3"
                                            data-nouislider='{"start":[100,186],"range":{"min":100,"max":200},"connect":true}'>
                                        </div>
                                        <div class="d-flex flex-between-center">
                                            <div> <small class="d-none d-lg-block text-body-tertiary">Min</small>
                                                <h6 class="mb-0 text-body-highlight fw-semibold">$100</h6>
                                            </div>
                                            <div class="text-end"> <small
                                                    class="d-none d-lg-block text-body-tertiary">Max</small>
                                                <h6 class="mb-0 text-body-highlight fw-semibold">$200</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg col-md-4">
                                        <h6 class="mb-2">Class</h6><select class="form-select" id="flightClass">
                                            <option>Economy</option>
                                            <option>Business</option>
                                            <option>First class</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-2 col-lg col-md-6 ms-auto">
                                        <h6 class="mb-2">Onward depart time</h6><select class="form-select"
                                            id="departTime">
                                            <option>12:00 - 18:00</option>
                                            <option>18:00 - 24:00</option>
                                            <option>06:00 - 12:00</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-2 col-lg col-md-6">
                                        <h6 class="mb-2">Return depart time</h6><select class="form-select"
                                            id="returnTime">
                                            <option>12:00 - 18:00</option>
                                            <option>18:00 - 24:00</option>
                                            <option>06:00 - 12:00</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-3 justify-content-between"> <a
                                    class="fw-semibold text-nowrap" href="#!" data-list-view="*">Close details <span
                                        class="fas fa-angle-up ms-1" data-fa-transform="down-1"></span></a><button
                                    class="btn btn-lg btn-primary flex-1" type="button"
                                    style="max-width: 15rem">Search</button></div>
                        </div>
                    </div>
                </form>
                <div class="d-flex flex-between-center mb-3">
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item" role="presentation"><button class="nav-link"
                                data-wizard-step="data-wizard-step" data-bs-toggle="pill" type="button" role="tab"
                                aria-selected="true">Cheapest</button></li>
                        <li class="nav-item" role="presentation"><button class="nav-link active"
                                data-wizard-step="data-wizard-step" data-bs-toggle="pill" type="button" role="tab"
                                aria-selected="false">Fastest</button></li>
                    </ul><button class="btn btn-phoenix-secondary text-nowrap px-4" type="button" data-bs-toggle="modal"
                        data-bs-target="#flightFilterModal"><span class="fa-solid fa-filter me-md-2"></span><span
                            class="d-none d-md-inline-block">Filters</span></button>
                </div>
                <div class="py-7 border-top">
                    <div class="row g-0 gap-6 align-items-center">
                        <div class="col-lg">
                            <div class="d-flex flex-column gap-md-3 gap-6">
                                <div class="row gy-md-0 gy-4 justify-content-sm-between justify-content-lg-start">
                                    <div class="col-sm-auto col-md-5">
                                        <div class="d-flex flex-center justify-content-sm-start gap-4"> <img
                                                class="flight-list-item-logo img-fluid rounded-3"
                                                src="{{ asset('assets/img/brand/qatar-airline.png') }}" alt="">
                                            <h5 class="d-none d-md-block text-nowrap text-body-highlight">Qatar Airways
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="d-flex gap-4 justify-content-center">
                                            <div>
                                                <p class="mb-2 fs-9 text-body-tertiary">25 Jan</p>
                                                <h4 class="mb-2 text-body">DAC</h4>
                                                <h2 class="mb-0">7:45</h2>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-2 fs-9 text-body-tertiary">25m</p>
                                                <p class="mb-2 fs-9 text-body-tertiary">Non-stop</p><img
                                                    class="position-relative rtl__flip"
                                                    src="{{ asset('assets/img/icons/long-arrow.svg') }}" alt="">
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-2 fs-9 text-body-tertiary">25 Jan</p>
                                                <h4 class="mb-2 text-body">CGP</h4>
                                                <h2 class="mb-0">8:10</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row gy-md-0 gy-4 justify-content-sm-between justify-content-lg-start">
                                    <div class="col-sm-auto col-md-5">
                                        <div class="d-flex flex-center justify-content-sm-start gap-4"> <img
                                                class="flight-list-item-logo img-fluid rounded-3"
                                                src="{{ asset('assets/img/brand/qatar-airline.png') }}" alt="">
                                            <h5 class="d-none d-md-block text-nowrap text-body-highlight">Qatar Airways
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="d-flex gap-4 justify-content-center">
                                            <div>
                                                <p class="mb-2 fs-9 text-body-tertiary">27 Jan</p>
                                                <h4 class="mb-2 text-body">CGP</h4>
                                                <h2 class="mb-0">8:15</h2>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-2 fs-9 text-body-tertiary">25m</p>
                                                <p class="mb-2 fs-9 text-body-tertiary">Non-stop</p><img
                                                    class="position-relative rtl__flip"
                                                    src="{{ asset('assets/img/icons/long-arrow.svg') }}" alt="">
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-2 fs-9 text-body-tertiary">27 Jan</p>
                                                <h4 class="mb-2 text-body">DAC</h4>
                                                <h2 class="mb-0">8:45</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-auto">
                            <div class="d-flex gap-3 flex-column flex-sm-row flex-lg-column flex-xl-row flex-end-center">
                                <h3 class="mb-0 fs-5 fs-sm-6 d-flex gap-2 flex-column flex-sm-row align-items-center"><span
                                        class="fs-9 text-body-quaternary fw-normal text-decoration-line-through">$150.00</span>$124.00
                                </h3><a class="btn btn-primary px-9"
                                    href="{{ url('apps/travel-agency/flight/booking') }}">Select</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-7 border-top">
                    <div class="row g-0 gap-6 align-items-center">
                        <div class="col-lg">
                            <div class="d-flex flex-column gap-md-3 gap-6">
                                <div class="row gy-md-0 gy-4 justify-content-sm-between justify-content-lg-start">
                                    <div class="col-sm-auto col-md-5">
                                        <div class="d-flex flex-center justify-content-sm-start gap-4"> <img
                                                class="flight-list-item-logo img-fluid rounded-3"
                                                src="{{ asset('assets/img/brand/emirates-airline.png') }}"
                                                alt="">
                                            <h5 class="d-none d-md-block text-nowrap text-body-highlight">Emirates</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="d-flex gap-4 justify-content-center">
                                            <div>
                                                <p class="mb-2 fs-9 text-body-tertiary">25 Jan</p>
                                                <h4 class="mb-2 text-body">DAC</h4>
                                                <h2 class="mb-0">7:55</h2>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-2 fs-9 text-body-tertiary">25m</p>
                                                <p class="mb-2 fs-9 text-body-tertiary">Non-stop</p><img
                                                    class="position-relative rtl__flip"
                                                    src="{{ asset('assets/img/icons/long-arrow.svg') }}" alt="">
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-2 fs-9 text-body-tertiary">25 Jan</p>
                                                <h4 class="mb-2 text-body">ZYL</h4>
                                                <h2 class="mb-0">8:20</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-auto">
                            <div class="d-flex gap-3 flex-column flex-sm-row flex-lg-column flex-xl-row flex-end-center">
                                <h3 class="mb-0 fs-5 fs-sm-6 d-flex gap-2 flex-column flex-sm-row align-items-center"><span
                                        class="fs-9 text-body-quaternary fw-normal text-decoration-line-through">$139.00</span>$120.00
                                </h3><a class="btn btn-primary px-9"
                                    href="{{ url('apps/travel-agency/flight/booking') }}">Select</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-7 border-top">
                    <div class="row g-0 gap-6 align-items-center">
                        <div class="col-lg">
                            <div class="d-flex flex-column gap-md-3 gap-6">
                                <div class="row gy-md-0 gy-4 justify-content-sm-between justify-content-lg-start">
                                    <div class="col-sm-auto col-md-5">
                                        <div class="d-flex flex-center justify-content-sm-start gap-4"> <img
                                                class="flight-list-item-logo img-fluid rounded-3"
                                                src="{{ asset('assets/img/brand/japan-airline.png') }}" alt="">
                                            <h5 class="d-none d-md-block text-nowrap text-body-highlight">Japan Airlines
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="d-flex gap-4 justify-content-center">
                                            <div>
                                                <p class="mb-2 fs-9 text-body-tertiary">25 Jan</p>
                                                <h4 class="mb-2 text-body">DAC</h4>
                                                <h2 class="mb-0">8:45</h2>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-2 fs-9 text-body-tertiary">25m</p>
                                                <p class="mb-2 fs-9 text-body-tertiary">Non-stop</p><img
                                                    class="position-relative rtl__flip"
                                                    src="{{ asset('assets/img/icons/long-arrow.svg') }}" alt="">
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-2 fs-9 text-body-tertiary">25 Jan</p>
                                                <h4 class="mb-2 text-body">ZYL</h4>
                                                <h2 class="mb-0">9:10</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-auto">
                            <div class="d-flex gap-3 flex-column flex-sm-row flex-lg-column flex-xl-row flex-end-center">
                                <h3 class="mb-0 fs-5 fs-sm-6 d-flex gap-2 flex-column flex-sm-row align-items-center"><span
                                        class="fs-9 text-body-quaternary fw-normal text-decoration-line-through">$144.00</span>$128.00
                                </h3><a class="btn btn-primary px-9"
                                    href="{{ url('apps/travel-agency/flight/booking') }}">Select</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-7 border-top">
                    <div class="row g-0 gap-6 align-items-center">
                        <div class="col-lg">
                            <div class="d-flex flex-column gap-md-3 gap-6">
                                <div class="row gy-md-0 gy-4 justify-content-sm-between justify-content-lg-start">
                                    <div class="col-sm-auto col-md-5">
                                        <div class="d-flex flex-center justify-content-sm-start gap-4"> <img
                                                class="flight-list-item-logo img-fluid rounded-3"
                                                src="{{ asset('assets/img/brand/qatar-airline.png') }}" alt="">
                                            <h5 class="d-none d-md-block text-nowrap text-body-highlight">Qatar Airways
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="d-flex gap-4 justify-content-center">
                                            <div>
                                                <p class="mb-2 fs-9 text-body-tertiary">25 Jan</p>
                                                <h4 class="mb-2 text-body">DAC</h4>
                                                <h2 class="mb-0">8:55</h2>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-2 fs-9 text-body-tertiary">25m</p>
                                                <p class="mb-2 fs-9 text-body-tertiary">Non-stop</p><img
                                                    class="position-relative rtl__flip"
                                                    src="{{ asset('assets/img/icons/long-arrow.svg') }}" alt="">
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-2 fs-9 text-body-tertiary">25 Jan</p>
                                                <h4 class="mb-2 text-body">ZYL</h4>
                                                <h2 class="mb-0">9:15</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-auto">
                            <div class="d-flex gap-3 flex-column flex-sm-row flex-lg-column flex-xl-row flex-end-center">
                                <h3 class="mb-0 fs-5 fs-sm-6 d-flex gap-2 flex-column flex-sm-row align-items-center"><span
                                        class="fs-9 text-body-quaternary fw-normal text-decoration-line-through">$150.00</span>$124.00
                                </h3><a class="btn btn-primary px-9"
                                    href="{{ url('apps/travel-agency/flight/booking') }}">Select</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 position-relative text-center">
                    <hr class="m-0 position-absolute top-50 translate-middle-y w-100"><button
                        class="btn btn-phoenix-secondary rounded-pill position-relative">Show more</button>
                </div>
            </div>
            <footer class="mb-6">
                <div class="container-small-md px-0 px-md-3">
                    <div class="position-relative overflow-hidden rounded-md-2">
                        <div class="bg-holder bg-holder overlay bg-opacity-75"
                            style="background-image:url({{ asset('assets/img/bg/45.png') }});background-position: center; background-size: cover;">
                        </div>
                        <!--/.bg-holder-->
                        <div class="row g-lg-0 gy-3 position-relative justify-content-center py-9 px-3 px-sm-6 px-xl-15">
                            <div class="col-11 col-sm-8 col-lg-5">
                                <div class="input-group gap-2">
                                    <div class="form-icon-container flex-1"><input class="form-control form-icon-input"
                                            type="email" placeholder="Your email address"><span
                                            class="fa-solid fa-envelope form-icon" data-fa-transform="up-2"></span></div>
                                    <button class="btn btn-primary rounded">Sign up</button>
                                </div>
                            </div>
                            <div class="col-md-7" data-bs-theme="light">
                                <div
                                    class="d-flex flex-column flex-lg-row gap-lg-6 gap-2 align-items-center justify-content-lg-end justify-content-center">
                                    <ul class="nav">
                                        <li class="nav-item"><a class="nav-link link-light" href="#!">About</a></li>
                                        <li class="nav-item"><a class="nav-link link-light" href="#!">Policy</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link link-light" href="#!">Terms &
                                                Condition</a></li>
                                    </ul>
                                    <div><a class="pe-1 me-2 link-light" href="#!"><span
                                                class="fab fa-facebook"></span></a><a class="pe-1 me-2 link-light"
                                            href="#!"><span class="fab fa-twitter"></span></a><a
                                            class="pe-1 me-2 link-light" href="#!"><span
                                                class="fab fa-instagram"></span></a><a class="link-light"
                                            href="#!"><span class="fab fa-youtube"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->

    <div class="support-chat-container">
        <div class="container-fluid support-chat">
            <div class="card bg-body-emphasis">
                <div class="card-header d-flex flex-between-center px-4 py-3 border-bottom border-translucent">
                    <h5 class="mb-0 d-flex align-items-center gap-2">Demo widget<span
                            class="fa-solid fa-circle text-success fs-11"></span></h5>
                    <div class="btn-reveal-trigger"><button
                            class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex"
                            type="button" id="support-chat-dropdown" data-bs-toggle="dropdown" data-boundary="window"
                            aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span
                                class="fas fa-ellipsis-h text-body"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown"><a
                                class="dropdown-item" href="#!">Request a callback</a><a class="dropdown-item"
                                href="#!">Search in chat</a><a class="dropdown-item" href="#!">Show
                                history</a><a class="dropdown-item" href="#!">Report to Admin</a><a
                                class="dropdown-item btn-support-chat" href="#!">Close Support</a></div>
                    </div>
                </div>
                <div class="card-body chat p-0">
                    <div class="d-flex flex-column-reverse scrollbar h-100 p-3">
                        <div class="text-end mt-6"><a
                                class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3"
                                href="#!">
                                <p class="mb-0 fw-semibold fs-9">I need help with something</p><span
                                    class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                            </a><a
                                class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3"
                                href="#!">
                                <p class="mb-0 fw-semibold fs-9">I can’t reorder a product I previously ordered</p><span
                                    class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                            </a><a
                                class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3"
                                href="#!">
                                <p class="mb-0 fw-semibold fs-9">How do I place an order?</p><span
                                    class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                            </a><a
                                class="false d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3"
                                href="#!">
                                <p class="mb-0 fw-semibold fs-9">My payment method not working</p><span
                                    class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                            </a></div>
                        <div class="text-center mt-auto">
                            <div class="avatar avatar-3xl status-online"><img
                                    class="rounded-circle border border-3 border-light-subtle"
                                    src="{{ asset('assets/img/team/30.webp') }}" alt=""></div>
                            <h5 class="mt-2 mb-3">Eric</h5>
                            <p class="text-center text-body-emphasis mb-0">Ask us anything – we’ll get back to you here or
                                by email within 24 hours.</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center gap-2 border-top border-translucent ps-3 pe-4 py-3">
                    <div class="d-flex align-items-center flex-1 gap-3 border border-translucent rounded-pill px-4"><input
                            class="form-control outline-none border-0 flex-1 fs-9 px-0" type="text"
                            placeholder="Write message"><label
                            class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0"
                            for="supportChatPhotos"><span class="fa-solid fa-image"></span></label><input class="d-none"
                            type="file" accept="image/*" id="supportChatPhotos"><label
                            class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0"
                            for="supportChatAttachment"> <span class="fa-solid fa-paperclip"></span></label><input
                            class="d-none" type="file" id="supportChatAttachment"></div><button
                        class="btn p-0 border-0 send-btn"><span class="fa-solid fa-paper-plane fs-9"></span></button>
                </div>
            </div>
        </div><button class="btn btn-support-chat p-0 border border-translucent"><span
                class="fs-8 btn-text text-primary text-nowrap">Chat demo</span><span
                class="ping-icon-wrapper mt-n4 ms-n6 mt-sm-0 ms-sm-2 position-absolute position-sm-relative"><span
                    class="ping-icon-bg"></span><span class="fa-solid fa-circle ping-icon"></span></span><span
                class="fa-solid fa-headset text-primary fs-8 d-sm-none"></span><span
                class="fa-solid fa-chevron-down text-primary fs-7"></span></button>
    </div>

    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <div class="modal fade" tabindex="-1" id="flightFilterModal" aria-labelledby="flightFilterModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down"
            style="max-width: 53.313rem">
            <form class="modal-content">
                <div class="modal-header p-4 pb-3 align-items-start border-0">
                    <div>
                        <h4 class="mb-2 text-body-highlight" id="flightFilterModalLabel">Filter</h4>
                        <p class="mb-0">Search for flights according to your preferences</p>
                    </div><button class="btn btn-close fs-10" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body scrollbar px-4 py-3">
                    <div class="row g-5">
                        <div class="col-md-6">
                            <div class="row g-0">
                                <div class="col-12">
                                    <div class="mb-6"> <a
                                            class="btn py-2 px-3 d-flex flex-between-center collapse-indicator text-body-highlight bg-body-highlight"
                                            data-bs-toggle="collapse" href="#flightStops" role="button"
                                            aria-expanded="true" aria-controls="flightStops">
                                            <h5 class="mb-0 fs-8">Stops</h5><span
                                                class="fa-solid fa-chevron-down toggle-icon"></span>
                                        </a>
                                        <div class="collapse show p-3 pb-0" id="flightStops">
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="fligtStopsDirect"><label class="form-check-label fs-8 text-body"
                                                    for="fligtStopsDirect">Direct</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="fligtStops1"><label class="form-check-label fs-8 text-body"
                                                    for="fligtStops1">1 stop</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="fligtStops2"><label class="form-check-label fs-8 text-body"
                                                    for="fligtStops2">2 stop</label></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-6"> <a
                                            class="btn py-2 px-3 d-flex flex-between-center collapse-indicator text-body-highlight bg-body-highlight"
                                            data-bs-toggle="collapse" href="#flightTime" role="button"
                                            aria-expanded="true" aria-controls="flightTime">
                                            <h5 class="mb-0 fs-8">Flight Schedules</h5><span
                                                class="fa-solid fa-chevron-down toggle-icon"></span>
                                        </a>
                                        <div class="collapse show p-3 pb-0" id="flightTime">
                                            <div class="mb-4">
                                                <h5 class="mb-3">Departure</h5>
                                                <div class="row g-2">
                                                    <div class="col-6 col-sm-4"><input
                                                            class="btn-check flight-filter-checkbox" type="checkbox"
                                                            name="flightDepartureTime" id="departure8AMTo10AM"><label
                                                            class="btn btn-phoenix-secondary text-nowrap w-100 px-0"
                                                            for="departure8AMTo10AM">8 AM - 10 AM</label></div>
                                                    <div class="col-6 col-sm-4"><input
                                                            class="btn-check flight-filter-checkbox" type="checkbox"
                                                            name="flightDepartureTime" id="departure10AMTo12PM"><label
                                                            class="btn btn-phoenix-secondary text-nowrap w-100 px-0"
                                                            for="departure10AMTo12PM">10 AM - 12 PM</label></div>
                                                    <div class="col-6 col-sm-4"><input
                                                            class="btn-check flight-filter-checkbox" type="checkbox"
                                                            name="flightDepartureTime" id="departure12PMTo2PM"><label
                                                            class="btn btn-phoenix-secondary text-nowrap w-100 px-0"
                                                            for="departure12PMTo2PM">12 PM - 2 PM</label></div>
                                                    <div class="col-6 col-sm-4"><input
                                                            class="btn-check flight-filter-checkbox" type="checkbox"
                                                            name="flightDepartureTime" id="departure2PMTo4PM"><label
                                                            class="btn btn-phoenix-secondary text-nowrap w-100 px-0"
                                                            for="departure2PMTo4PM">2 PM - 4 PM</label></div>
                                                    <div class="col-6 col-sm-4"><input
                                                            class="btn-check flight-filter-checkbox" type="checkbox"
                                                            name="flightDepartureTime" id="departure4PMTo6PM"><label
                                                            class="btn btn-phoenix-secondary text-nowrap w-100 px-0"
                                                            for="departure4PMTo6PM">4 PM - 6 PM</label></div>
                                                    <div class="col-6 col-sm-4"><input
                                                            class="btn-check flight-filter-checkbox" type="checkbox"
                                                            name="flightDepartureTime" id="departure6PMTo8PM"><label
                                                            class="btn btn-phoenix-secondary text-nowrap w-100 px-0"
                                                            for="departure6PMTo8PM">6 PM - 8 PM</label></div>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <h5 class="mb-3">Arrival</h5>
                                                <div class="row g-2">
                                                    <div class="col-6 col-sm-4"><input
                                                            class="btn-check flight-filter-checkbox" type="checkbox"
                                                            name="flightArrivalTime" id="arrival8AMTo10AM"><label
                                                            class="btn btn-phoenix-secondary text-nowrap w-100 px-0"
                                                            for="arrival8AMTo10AM">8 AM - 10 AM</label></div>
                                                    <div class="col-6 col-sm-4"><input
                                                            class="btn-check flight-filter-checkbox" type="checkbox"
                                                            name="flightArrivalTime" id="arrival10AMTo12PM"><label
                                                            class="btn btn-phoenix-secondary text-nowrap w-100 px-0"
                                                            for="arrival10AMTo12PM">10 AM - 12 PM</label></div>
                                                    <div class="col-6 col-sm-4"><input
                                                            class="btn-check flight-filter-checkbox" type="checkbox"
                                                            name="flightArrivalTime" id="arrival12PMTo2PM"><label
                                                            class="btn btn-phoenix-secondary text-nowrap w-100 px-0"
                                                            for="arrival12PMTo2PM">12 PM - 2 PM</label></div>
                                                    <div class="col-6 col-sm-4"><input
                                                            class="btn-check flight-filter-checkbox" type="checkbox"
                                                            name="flightArrivalTime" id="arrival2PMTo4PM"><label
                                                            class="btn btn-phoenix-secondary text-nowrap w-100 px-0"
                                                            for="arrival2PMTo4PM">2 PM - 4 PM</label></div>
                                                    <div class="col-6 col-sm-4"><input
                                                            class="btn-check flight-filter-checkbox" type="checkbox"
                                                            name="flightArrivalTime" id="arrival4PMTo6PM"><label
                                                            class="btn btn-phoenix-secondary text-nowrap w-100 px-0"
                                                            for="arrival4PMTo6PM">4 PM - 6 PM</label></div>
                                                    <div class="col-6 col-sm-4"><input
                                                            class="btn-check flight-filter-checkbox" type="checkbox"
                                                            name="flightArrivalTime" id="arrival6PMTo8PM"><label
                                                            class="btn btn-phoenix-secondary text-nowrap w-100 px-0"
                                                            for="arrival6PMTo8PM">6 PM - 8 PM</label></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-6"> <a
                                            class="btn py-2 px-3 d-flex flex-between-center collapse-indicator text-body-highlight bg-body-highlight"
                                            data-bs-toggle="collapse" href="#flightAirlines" role="button"
                                            aria-expanded="true" aria-controls="flightAirlines">
                                            <h5 class="mb-0 fs-8">Airlines</h5><span
                                                class="fa-solid fa-chevron-down toggle-icon"></span>
                                        </a>
                                        <div class="collapse show p-3 pb-0" id="flightAirlines">
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="novoair"><label class="form-check-label fs-8 text-body"
                                                    for="novoair">NOVOAIR</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="biman"><label class="form-check-label fs-8 text-body"
                                                    for="biman">Biman Bangladesh Airlines</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="usBangla"><label class="form-check-label fs-8 text-body"
                                                    for="usBangla">US Bangla</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="airAstra"><label class="form-check-label fs-8 text-body"
                                                    for="airAstra">Air Astra</label></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div> <a class="btn py-2 px-3 d-flex flex-between-center collapse-indicator text-body-highlight bg-body-highlight"
                                            data-bs-toggle="collapse" href="#flightDuration" role="button"
                                            aria-expanded="true" aria-controls="flightDuration">
                                            <h5 class="mb-0 fs-8">Flight Duration</h5><span
                                                class="fa-solid fa-chevron-down toggle-icon"></span>
                                        </a>
                                        <div class="collapse show p-3 pb-0" id="flightDuration">
                                            <div class="d-flex flex-between-center mb-2">
                                                <h6 class="mb-0 text-body-highlight fw-semibold">0h 45m</h6>
                                                <h6 class="mb-0 text-body-highlight fw-semibold">0h 55m</h6>
                                            </div>
                                            <div class="noUi-primary-lighter noUi-handle-primary noUi-slider-medium noUi-handle-circle px-1 mt-3"
                                                data-nouislider-values='["45m","46m","47m","48m","49m","50m","51m","52m","53m","54m","55m"]'
                                                data-nouislider='{"start":["48m"],"connect":[true,false]}'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row g-0">
                                <div class="col-12">
                                    <div class="mb-6"> <a
                                            class="btn py-2 px-3 d-flex flex-between-center collapse-indicator text-body-highlight bg-body-highlight"
                                            data-bs-toggle="collapse" href="#flightPriceCalculator" role="button"
                                            aria-expanded="true" aria-controls="flightPriceCalculator">
                                            <h5 class="mb-0 fs-8">Price Calculator</h5><span
                                                class="fa-solid fa-chevron-down toggle-icon"></span>
                                        </a>
                                        <div class="collapse show p-3 pb-0" id="flightPriceCalculator"><select
                                                class="form-select" data-choices="data-choices" multiple="multiple"
                                                data-options='{"removeItemButton":true,"placeholder":true}'>
                                                <option value="">Select method</option>
                                                <option>Mastercard debit</option>
                                                <option>Mastercard credit</option>
                                                <option>Visa debit</option>
                                                <option>Visa credit</option>
                                                <option>American Express</option>
                                                <option>Paypal</option>
                                            </select></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-6"> <a
                                            class="btn py-2 px-3 d-flex flex-between-center collapse-indicator text-body-highlight bg-body-highlight"
                                            data-bs-toggle="collapse" href="#flightAirports" role="button"
                                            aria-expanded="true" aria-controls="flightAirports">
                                            <h5 class="mb-0 fs-8">Airports</h5><span
                                                class="fa-solid fa-chevron-down toggle-icon"></span>
                                        </a>
                                        <div class="collapse show p-3 pb-0" id="flightAirports">
                                            <div class="d-flex gap-3">
                                                <div class="flex-1">
                                                    <h5 class="mb-3">Dhaka</h5>
                                                    <div class="form-check gap-2"><input class="form-check-input mt-0"
                                                            type="checkbox" id="DAC"><label
                                                            class="form-check-label fs-9 text-body lh-sm"
                                                            for="DAC">DAC : Hazrat Shahjalal International
                                                            Airport</label></div>
                                                </div>
                                                <div class="flex-1">
                                                    <h5 class="mb-3">Sylhet</h5>
                                                    <div class="form-check gap-2"><input class="form-check-input mt-0"
                                                            type="checkbox" id="ZYL"><label
                                                            class="form-check-label fs-9 text-body lh-sm"
                                                            for="ZYL">ZYL : Osmani International Airport</label></div>
                                                    <div class="form-check gap-2"><input class="form-check-input mt-0"
                                                            type="checkbox" id="GNJ"><label
                                                            class="form-check-label fs-9 text-body lh-sm"
                                                            for="GNJ">GNJ : Gajikalu Interdimensional Airport</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-6"> <a
                                            class="btn py-2 px-3 d-flex flex-between-center collapse-indicator text-body-highlight bg-body-highlight"
                                            data-bs-toggle="collapse" href="#flightBaggage" role="button"
                                            aria-expanded="true" aria-controls="flightBaggage">
                                            <h5 class="mb-0">Baggage</h5><span
                                                class="fa-solid fa-chevron-down toggle-icon"></span>
                                        </a>
                                        <div class="collapse show p-3 pb-0" id="flightBaggage">
                                            <div class="d-flex gap-2 justify-content-between">
                                                <div>
                                                    <h5 class="mb-3 text-body-highlight">Carry on bag</h5>
                                                    <div class="input-group flex-nowrap gap-1"
                                                        data-quantity="data-quantity"><button
                                                            class="btn btn-phoenix-primary px-2 rounded" data-type="minus"
                                                            type="button"><span
                                                                class="fa-solid fa-minus px-1"></span></button><input
                                                            class="form-control border-translucent input-spin-none text-center rounded"
                                                            id="carryOnBag" type="number" value="2"><button
                                                            class="btn btn-phoenix-primary px-2 rounded" data-type="plus"
                                                            type="button"><span
                                                                class="fa-solid fa-plus px-1"></span></button></div>
                                                </div>
                                                <div>
                                                    <h5 class="mb-3 text-body-highlight">Checked bag</h5>
                                                    <div class="input-group flex-nowrap gap-1"
                                                        data-quantity="data-quantity"><button
                                                            class="btn btn-phoenix-primary px-2 rounded" data-type="minus"
                                                            type="button"><span
                                                                class="fa-solid fa-minus px-1"></span></button><input
                                                            class="form-control border-translucent input-spin-none text-center rounded"
                                                            id="checkedBag" type="number" value="2"><button
                                                            class="btn btn-phoenix-primary px-2 rounded" data-type="plus"
                                                            type="button"><span
                                                                class="fa-solid fa-plus px-1"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-6"> <a
                                            class="btn py-2 px-3 d-flex flex-between-center collapse-indicator text-body-highlight bg-body-highlight"
                                            data-bs-toggle="collapse" href="#flightCabin" role="button"
                                            aria-expanded="true" aria-controls="flightCabin">
                                            <h5 class="mb-0 fs-8">Cabin</h5><span
                                                class="fa-solid fa-chevron-down toggle-icon"></span>
                                        </a>
                                        <div class="collapse show p-3 pb-0" id="flightCabin">
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="economy"><label class="form-check-label fs-8 text-body"
                                                    for="economy">Economy</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="business"><label class="form-check-label fs-8 text-body"
                                                    for="business">Business</label></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div> <a class="btn py-2 px-3 d-flex flex-between-center collapse-indicator text-body-highlight bg-body-highlight"
                                            data-bs-toggle="collapse" href="#flightAircraft" role="button"
                                            aria-expanded="true" aria-controls="flightAircraft">
                                            <h5 class="mb-0 fs-8">Aircraft</h5><span
                                                class="fa-solid fa-chevron-down toggle-icon"></span>
                                        </a>
                                        <div class="collapse show p-3 pb-0" id="flightAircraft">
                                            <div class="d-flex mb-3">
                                                <div class="form-check form-check-inline"><input class="form-check-input"
                                                        id="includedAircraft" type="radio" name="aircrafts"><label
                                                        class="form-check-label fs-8 text-body"
                                                        for="includedAircraft">Include</label></div>
                                                <div class="form-check form-check-inline"><input class="form-check-input"
                                                        id="excludedAircraft" type="radio" name="aircrafts"
                                                        checked="checked"><label class="form-check-label fs-8 text-body"
                                                        for="excludedAircraft">Exclude</label></div>
                                            </div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="aircraft738"><label class="form-check-label fs-8 text-body"
                                                    for="aircraft738">738</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="aircraftAT7"><label class="form-check-label fs-8 text-body"
                                                    for="aircraftAT7">AT-7</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="aircraftA320"><label class="form-check-label fs-8 text-body"
                                                    for="aircraftA320">A320</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="aircraft787"><label class="form-check-label fs-8 text-body"
                                                    for="aircraft787">787 Dreamliner</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 p-4 pt-0">
                    <div class="w-100 d-flex flex-wrap gap-3 border-top border-translucent pt-4"> <button
                            class="m-0 btn btn-lg btn-phoenix-primary text-nowrap"> <span
                                class="fa-solid fa-rotate me-sm-2"></span><span class="d-none d-sm-inline-block">Reset
                                filter</span></button>
                        <button class="m-0 btn btn-lg btn-primary text-nowrap flex-1"> <span
                                class="fa-solid fa-magnifying-glass me-2"></span>Update results</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" id="flightPromoModal" data-phoenix-modal='{"autoShow":true}'
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-body p-6">
                    <div class="position-absolute end-0 top-0"><button class="btn btn-link text-danger px-3"
                            data-bs-dismiss="modal" aria-label="Close"><span class="fa-solid fa-times"
                                data-fa-transform="down-2"></span></button></div>
                    <div class="text-center"> <img class="d-dark-none img-fluid mb-4"
                            src="{{ asset('assets/img/spot-illustrations/44.png') }}" width="130" alt=""><img
                            class="d-light-none img-fluid mb-4"
                            src="{{ asset('assets/img/spot-illustrations/44-dark.png') }}" width="130"
                            alt="">
                        <h1 class="text-success">Save 20%</h1>
                        <h3 class="mb-2 text-body">on your next flight - Join now!</h3>
                        <p class="mb-4 fs-9">Sign up now to save up to 20% on flights with our free membership program!</p>
                        <div class="d-flex gap-2 align-items-center mb-4"><input class="form-control" type="email"
                                placeholder="Your email address"><button
                                class="btn btn-primary rounded text-nowrap px-sm-6">Sign-up</button></div>
                        <p class="mb-1 fs-9 text-body-quaternary">Subscribe for exclusive offers. <a
                                href="#!">Privacy Policy</a></p><button
                            class="btn btn-link p-0 fs-10 text-decoration-underline text-body-tertiary"
                            data-bs-dismiss="modal" data-disable-modal-auto-show="data-disable-modal-auto-show"
                            aria-label="Close">Don’t show it again</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/flatpickr/flatpickr.min.js') }}"></script>
@endpush
