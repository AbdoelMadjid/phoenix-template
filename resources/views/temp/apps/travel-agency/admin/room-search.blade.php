@extends('layouts.vertical')

@section('title', 'Search Room')

@push('styles')
    <link href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/nouislider/nouislider.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
@endpush

@section('content')
    <nav class="mb-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
            <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
            <li class="breadcrumb-item active">Default</li>
        </ol>
    </nav>
    <div class="mb-9">
        <div class="row align-items-end mb-5 gy-3">
            <div class="col" style="max-width: 290px">
                <h2>Rooms </h2>
            </div>
            <div class="col-xl">
                <div class="row gx-2 gx-xl-3 gy-3">
                    <div class="col-sm-auto order-1 order-sm-0 me-sm-2 d-xl-none"><button
                            class="btn btn-lg btn-phoenix-secondary text-body-tertiary w-100"
                            data-phoenix-toggle="offcanvas" data-phoenix-target="#roomFilterOffcanvas"> <span
                                class="fa-solid fa-filter me-2"></span>Filter</button></div>
                    <div class="col col-sm-5 col-xxl-3">
                        <div class="form-floating w-auto"><input class="form-control datetimepicker" id="checkIn"
                                type="text" placeholder="H:i"
                                data-options='{"disableMobile":true,"mode":"range","minDate":"today","dateFormat":"d-m-y"}'><label
                                for="checkIn">Select time range</label><span
                                class="fa-solid fa-calendar-alt position-absolute top-0 end-0 mt-3 me-3"></span></div>
                    </div>
                    <div class="col col-sm-auto flex-grow-0"><button
                            class="btn btn-lg btn-phoenix-primary px-xxl-6 text-nowrap"><span
                                class="d-none d-xl-inline-block">Update </span><span
                                class="fa-solid fa-search fs-9 ms-xl-2"></span></button></div>
                    <div class="col col-sm-auto ms-auto flex-grow-0"><button
                            class="btn btn-lg btn-phoenix-secondary ms-auto text-nowrap"><span
                                class="d-none d-xl-inline-block">Refresh </span><span
                                class="fa-solid fa-rotate fs-9 ms-xl-2"></span></button></div>
                </div>
            </div>
        </div>
        <div class="row gx-6">
            <div class="col-xl-auto">
                <div class="phoenix-offcanvas-filter-xl phoenix-offcanvas phoenix-offcanvas-fixed bg-body scrollbar overflow-x-hidden"
                    id="roomFilterOffcanvas" data-breakpoint="xl">
                    <div class="pe-1" data-collapse-all="data-collapse-all">
                        <div class="d-flex align-items-center">
                            <h3 class="text-body-highlight">Filters</h3><button
                                class="btn btn-phoenix-secondary px-3 ms-auto me-2 me-xl-0"
                                data-btn-collapse-all="data-btn-collapse-all">Collapse all</button>
                            <button class="btn d-xl-none p-0" data-phoenix-dismiss="offcanvas"><span
                                    class="uil uil-times fs-8"></span></button>
                        </div><a class="btn collapse-indicator px-0 py-2 d-flex align-items-center mt-3"
                            data-bs-toggle="collapse" href="#collapsePriceRange" role="button" aria-expanded="true"
                            aria-controls="collapsePriceRange"><span
                                class="fa-solid fa-caret-down toggle-icon text-body me-2"></span>
                            <h5 class="text-body-highlight">Price Range</h5>
                        </a>
                        <div class="collapse show" id="collapsePriceRange">
                            <div class="border-bottom pb-4 pt-1">
                                <div class="noUi-target-primary noUi-handle-primary noUi-slider-slim noUi-handle-circle bg-primary-subtle px-2 mb-3"
                                    data-nouislider='{"range":{"min":500,"max":2000},"start":[699,1299],"connect":true}'>
                                </div>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <div class="form-floating"><input class="form-control input-spin-none"
                                                type="number" name="price-range-min" id="price-range-min" placeholder="Min"
                                                value="699"><label for="price-range-min">Min</label></div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating"><input class="form-control input-spin-none"
                                                type="number" name="price-range-max" id="price-range-max" placeholder="Max"
                                                value="1299"><label for="price-range-max">Max</label></div>
                                    </div>
                                </div>
                            </div>
                        </div><a class="btn collapse-indicator px-0 py-2 d-flex align-items-center mt-3"
                            data-bs-toggle="collapse" href="#collapseAdult" role="button" aria-expanded="true"
                            aria-controls="collapseAdult"><span
                                class="fa-solid fa-caret-down toggle-icon text-body me-2"></span>
                            <h5 class="text-body-highlight">Adult</h5>
                        </a>
                        <div class="collapse show" id="collapseAdult">
                            <div class="border-bottom pb-4">
                                <div class="input-group gap-2" data-quantity="data-quantity"><button
                                        class="btn btn-phoenix-primary px-3 rounded" data-type="minus"><span
                                            class="fa-solid fa-minus px-1"></span></button><input
                                        class="form-control form-control-lg border-translucent input-spin-none text-center rounded"
                                        id="adult" type="number" value="2"><button
                                        class="btn btn-phoenix-primary px-3 rounded" data-type="plus"><span
                                            class="fa-solid fa-plus px-1"></span></button></div>
                            </div>
                        </div><a class="btn collapse-indicator px-0 py-2 d-flex align-items-center mt-3"
                            data-bs-toggle="collapse" href="#collapseChild" role="button" aria-expanded="true"
                            aria-controls="collapseChild"><span
                                class="fa-solid fa-caret-down toggle-icon text-body me-2"></span>
                            <h5 class="text-body-highlight">Child</h5>
                        </a>
                        <div class="collapse show" id="collapseChild">
                            <div class="border-bottom pb-4">
                                <div class="input-group gap-2" data-quantity="data-quantity"><button
                                        class="btn btn-phoenix-primary px-3 rounded" data-type="minus"><span
                                            class="fa-solid fa-minus px-1"></span></button><input
                                        class="form-control form-control-lg border-translucent input-spin-none text-center rounded"
                                        id="child" type="number" value="2"><button
                                        class="btn btn-phoenix-primary px-3 rounded" data-type="plus"><span
                                            class="fa-solid fa-plus px-1"></span></button></div>
                            </div>
                        </div><a class="btn collapse-indicator px-0 py-2 d-flex align-items-center mt-3"
                            data-bs-toggle="collapse" href="#collapseBedroom" role="button" aria-expanded="true"
                            aria-controls="collapseBedroom"><span
                                class="fa-solid fa-caret-down toggle-icon text-body me-2"></span>
                            <h5 class="text-body-highlight">Bedroom</h5>
                        </a>
                        <div class="collapse show" id="collapseBedroom">
                            <div class="border-bottom pb-4">
                                <div class="input-group gap-2" data-quantity="data-quantity"><button
                                        class="btn btn-phoenix-primary px-3 rounded" data-type="minus"><span
                                            class="fa-solid fa-minus px-1"></span></button><input
                                        class="form-control form-control-lg border-translucent input-spin-none text-center rounded"
                                        id="bedroom" type="number" value="2"><button
                                        class="btn btn-phoenix-primary px-3 rounded" data-type="plus"><span
                                            class="fa-solid fa-plus px-1"></span></button></div>
                            </div>
                        </div><a class="btn collapse-indicator px-0 py-2 d-flex align-items-center mt-3"
                            data-bs-toggle="collapse" href="#collapseNumOfBed" role="button" aria-expanded="true"
                            aria-controls="collapseNumOfBed"><span
                                class="fa-solid fa-caret-down toggle-icon text-body me-2"></span>
                            <h5 class="text-body-highlight">Number of Bed</h5>
                        </a>
                        <div class="collapse show" id="collapseNumOfBed">
                            <div class="border-bottom pb-4">
                                <div class="input-group gap-2" data-quantity="data-quantity"><button
                                        class="btn btn-phoenix-primary px-3 rounded" data-type="minus"><span
                                            class="fa-solid fa-minus px-1"></span></button><input
                                        class="form-control form-control-lg border-translucent input-spin-none text-center rounded"
                                        id="numberOfBed" type="number" value="2"><button
                                        class="btn btn-phoenix-primary px-3 rounded" data-type="plus"><span
                                            class="fa-solid fa-plus px-1"></span></button></div>
                            </div>
                        </div><a class="btn collapse-indicator px-0 py-2 d-flex align-items-center mt-3"
                            data-bs-toggle="collapse" href="#collapseBathroom" role="button" aria-expanded="true"
                            aria-controls="collapseBathroom"><span
                                class="fa-solid fa-caret-down toggle-icon text-body me-2"></span>
                            <h5 class="text-body-highlight">Bathroom</h5>
                        </a>
                        <div class="collapse show" id="collapseBathroom">
                            <div class="border-bottom pb-4">
                                <div class="input-group gap-2" data-quantity="data-quantity"><button
                                        class="btn btn-phoenix-primary px-3 rounded" data-type="minus"><span
                                            class="fa-solid fa-minus px-1"></span></button><input
                                        class="form-control form-control-lg border-translucent input-spin-none text-center rounded"
                                        id="bathroom" type="number" value="2"><button
                                        class="btn btn-phoenix-primary px-3 rounded" data-type="plus"><span
                                            class="fa-solid fa-plus px-1"></span></button></div>
                            </div>
                        </div><a class="btn collapse-indicator px-0 py-2 d-flex align-items-center mt-3"
                            data-bs-toggle="collapse" href="#collapseRoomCategory" role="button" aria-expanded="false"
                            aria-controls="collapseRoomCategory"><span
                                class="fa-solid fa-caret-down toggle-icon text-body me-2"></span>
                            <h5 class="text-body-highlight">Room Category</h5>
                        </a>
                        <div class="collapse" id="collapseRoomCategory">
                            <div class="border-bottom pb-4" data-list='{"valueNames":["room"]}'>
                                <div class="search-box w-100">
                                    <form class="position-relative"><input class="form-control search-input search"
                                            type="search" placeholder="Search Room" aria-label="Search">
                                        <span class="fas fa-search search-box-icon"></span>
                                    </form>
                                </div>
                                <div class="list">
                                    <div class="form-check mt-3"><input class="form-check-input" type="checkbox"
                                            value="" id="Any"><label
                                            class="form-check-label fs-8 text-body-highlight room"
                                            for="Any">Any</label></div>
                                    <div class="form-check mt-3"><input class="form-check-input" type="checkbox"
                                            value="" id="Deluxe-King-Room"><label
                                            class="form-check-label fs-8 text-body-highlight room"
                                            for="Deluxe-King-Room">Deluxe King Room</label></div>
                                    <div class="form-check mt-3"><input class="form-check-input" type="checkbox"
                                            value="" id="Deluxe-Twin-Room"><label
                                            class="form-check-label fs-8 text-body-highlight room"
                                            for="Deluxe-Twin-Room">Deluxe Twin Room</label></div>
                                    <div class="form-check mt-3"><input class="form-check-input" type="checkbox"
                                            value="" id="Junior-King-Suite"><label
                                            class="form-check-label fs-8 text-body-highlight room"
                                            for="Junior-King-Suite">Junior King Suite</label></div>
                                    <div class="form-check mt-3"><input class="form-check-input" type="checkbox"
                                            value="" id="One-Bedroom-Deluxe-Suite"><label
                                            class="form-check-label fs-8 text-body-highlight room"
                                            for="One-Bedroom-Deluxe-Suite">One-Bedroom Deluxe Suite</label></div>
                                    <div class="form-check mt-3"><input class="form-check-input" type="checkbox"
                                            value="" id="One-Bedroom-Executive-Suite"><label
                                            class="form-check-label fs-8 text-body-highlight room"
                                            for="One-Bedroom-Executive-Suite">One-Bedroom Executive Suite</label></div>
                                    <div class="form-check mt-3"><input class="form-check-input" type="checkbox"
                                            value="" id="Presidential-Suite"><label
                                            class="form-check-label fs-8 text-body-highlight room"
                                            for="Presidential-Suite">Presidential Suite</label></div>
                                    <div class="form-check mt-3"><input class="form-check-input" type="checkbox"
                                            value="" id="Club-King-Room"><label
                                            class="form-check-label fs-8 text-body-highlight room"
                                            for="Club-King-Room">Club King Room</label></div>
                                    <div class="form-check mt-3"><input class="form-check-input" type="checkbox"
                                            value="" id="Twin-Room"><label
                                            class="form-check-label fs-8 text-body-highlight room" for="Twin-Room">Twin
                                            Room</label></div>
                                    <div class="form-check mt-3"><input class="form-check-input" type="checkbox"
                                            value="" id="Club-Twin-Room"><label
                                            class="form-check-label fs-8 text-body-highlight room"
                                            for="Club-Twin-Room">Club Twin Room</label></div>
                                    <div class="form-check mt-3"><input class="form-check-input" type="checkbox"
                                            value="" id="Premium-King-Room"><label
                                            class="form-check-label fs-8 text-body-highlight room"
                                            for="Premium-King-Room">Premium King Room</label></div>
                                    <div class="form-check mt-3"><input class="form-check-input" type="checkbox"
                                            value="" id="Deluxe-King-Suite"><label
                                            class="form-check-label fs-8 text-body-highlight room"
                                            for="Deluxe-King-Suite">Deluxe King Suite</label></div>
                                    <div class="form-check mt-3"><input class="form-check-input" type="checkbox"
                                            value="" id="Executive-King-Suite"><label
                                            class="form-check-label fs-8 text-body-highlight room"
                                            for="Executive-King-Suite">Executive King Suite</label></div>
                                </div><a class="mt-2 fw-bold d-inline-block" href="#!">Show more items</a>
                            </div>
                        </div><a class="btn collapse-indicator px-0 py-2 d-flex align-items-center mt-3"
                            data-bs-toggle="collapse" href="#collapseBedType" role="button" aria-expanded="false"
                            aria-controls="collapseBedType"><span
                                class="fa-solid fa-caret-down toggle-icon text-body me-2"></span>
                            <h5 class="text-body-highlight">Bed Type</h5>
                        </a>
                        <div class="collapse" id="collapseBedType">
                            <div class="border-bottom pb-4" data-list='{"valueNames":["bed"]}'>
                                <div class="search-box w-100">
                                    <form class="position-relative"><input class="form-control search-input search"
                                            type="search" placeholder="Search Room" aria-label="Search">
                                        <span class="fas fa-search search-box-icon"></span>
                                    </form>
                                </div>
                                <div class="list">
                                    <div class="form-check mt-3"><input class="form-check-input" type="checkbox"
                                            value="" id="Cribs"><label
                                            class="form-check-label fs-8 text-body-highlight bed"
                                            for="Cribs">Cribs</label></div>
                                    <div class="form-check mt-3"><input class="form-check-input" type="checkbox"
                                            value="" id="Double-beds"><label
                                            class="form-check-label fs-8 text-body-highlight bed" for="Double-beds">Double
                                            beds</label></div>
                                    <div class="form-check mt-3"><input class="form-check-input" type="checkbox"
                                            value="" id="King-bed"><label
                                            class="form-check-label fs-8 text-body-highlight bed" for="King-bed">King
                                            bed</label></div>
                                    <div class="form-check mt-3"><input class="form-check-input" type="checkbox"
                                            value="" id="Queen-bed"><label
                                            class="form-check-label fs-8 text-body-highlight bed" for="Queen-bed">Queen
                                            bed</label></div>
                                    <div class="form-check mt-3"><input class="form-check-input" type="checkbox"
                                            value="" id="Rollaway-bed"><label
                                            class="form-check-label fs-8 text-body-highlight bed"
                                            for="Rollaway-bed">Rollaway bed</label></div>
                                    <div class="form-check mt-3"><input class="form-check-input" type="checkbox"
                                            value="" id="Sofa-bed"><label
                                            class="form-check-label fs-8 text-body-highlight bed" for="Sofa-bed">Sofa
                                            bed</label></div>
                                    <div class="form-check mt-3"><input class="form-check-input" type="checkbox"
                                            value="" id="Twin-bed"><label
                                            class="form-check-label fs-8 text-body-highlight bed" for="Twin-bed">Twin
                                            bed</label></div>
                                    <div class="form-check mt-3"><input class="form-check-input" type="checkbox"
                                            value="" id="Futon"><label
                                            class="form-check-label fs-8 text-body-highlight bed"
                                            for="Futon">Futon</label></div>
                                </div><a class="mt-2 fw-bold d-inline-block" href="#!">Show more items</a>
                            </div>
                        </div><a class="btn collapse-indicator px-0 py-2 d-flex align-items-center mt-3"
                            data-bs-toggle="collapse" href="#collapseAmenities" role="button" aria-expanded="false"
                            aria-controls="collapseAmenities"><span
                                class="fa-solid fa-caret-down toggle-icon text-body me-2"></span>
                            <h5 class="text-body-highlight">Amenities</h5>
                        </a>
                        <div class="collapse" id="collapseAmenities">
                            <div data-list='{"valueNames":["amenities"]}'>
                                <div class="search-box w-100">
                                    <form class="position-relative"><input class="form-control search-input search"
                                            type="search" placeholder="Search Room" aria-label="Search">
                                        <span class="fas fa-search search-box-icon"></span>
                                    </form>
                                </div>
                                <div class="list">
                                    <div class="form-check mt-3"><input class="form-check-input" type="checkbox"
                                            value="" id="Wifi"><label
                                            class="form-check-label fs-8 text-body-highlight amenities"
                                            for="Wifi">Wifi</label></div>
                                    <div class="form-check mt-3"><input class="form-check-input" type="checkbox"
                                            value="" id="Washer"><label
                                            class="form-check-label fs-8 text-body-highlight amenities"
                                            for="Washer">Washer</label></div>
                                    <div class="form-check mt-3"><input class="form-check-input" type="checkbox"
                                            value="" id="Kitchen"><label
                                            class="form-check-label fs-8 text-body-highlight amenities"
                                            for="Kitchen">Kitchen</label></div>
                                    <div class="form-check mt-3"><input class="form-check-input" type="checkbox"
                                            value="" id="Dryer"><label
                                            class="form-check-label fs-8 text-body-highlight amenities"
                                            for="Dryer">Dryer</label></div>
                                    <div class="form-check mt-3"><input class="form-check-input" type="checkbox"
                                            value="" id="Air-conditioning"><label
                                            class="form-check-label fs-8 text-body-highlight amenities"
                                            for="Air-conditioning">Air conditioning</label></div>
                                    <div class="form-check mt-3"><input class="form-check-input" type="checkbox"
                                            value="" id="Heating"><label
                                            class="form-check-label fs-8 text-body-highlight amenities"
                                            for="Heating">Heating</label></div>
                                </div><a class="mt-2 fw-bold d-inline-block" href="#!">Show more items</a>
                            </div>
                        </div>
                        <div class="sticky-bottom bg-body pt-4 pb-4 pb-xl-0"><button
                                class="btn btn-phoenix-secondary me-2">Reset</button>
                            <button class="btn btn-primary px-7">Apply</button>
                        </div>
                    </div>
                </div>
                <div class="phoenix-offcanvas-backdrop d-xl-none" data-phoenix-backdrop="data-phoenix-backdrop"></div>
            </div>
            <div class="col w-xl-25">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row gx-4 justify-content-between">
                            <div class="col-auto mb-4">
                                <div class="d-flex gap-3"><a href="#!"> <img
                                            class="rounded-1 border border-translucent"
                                            src="{{ asset('assets/img/hotels/70.png') }}" alt=""
                                            width="108"></a>
                                    <div> <a class="fs-8 fw-bolder text-body-emphasis text-nowrap" href="#!">Double
                                            Bed</a>
                                        <h6 class="fw-semibold text-body text-nowrap mt-1 mb-2"><span
                                                class="fa-solid fa-border-all me-2"></span>Presidential Suite</h6>
                                        <div class="d-flex align-items-baseline gap-1 mb-3">
                                            <h6 class="mb-0 fw-semibold">Available:</h6>
                                            <h4 class="text-warning-dark fw-bolder mb-0">20<span
                                                    class="fs-9 text-body-tertiary fw-bold"> / 100</span></h4>
                                        </div>
                                        <h4 class="fw-bolder mb-0">$699.67</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-auto d-flex gap-5 gap-md-6 order-1 order-xxl-0 mb-4">
                                <div>
                                    <h6 class="mb-3 fw-bolder text-body-tertiary text-uppercase"> <span
                                            class="d-none d-sm-inline-block">No. of </span> Beds</h6>
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="d-sm-flex align-items-center gap-2">
                                            <div class="d-flex align-items-center justify-content-center bg-primary-subtle rounded mb-2 mb-sm-0"
                                                style="height:24px; width: 24px"><span
                                                    class="fa-solid fa-person-shelter text-primary-darker"></span></div>
                                            <h5 class="text-body fw-semibold mb-0">01</h5>
                                        </div>
                                        <div class="d-sm-flex align-items-center gap-2">
                                            <div class="d-flex align-items-center justify-content-center bg-success-subtle rounded mb-2 mb-sm-0"
                                                style="height:24px; width: 24px"><span
                                                    class="fa-solid fa-bed text-success-darker"></span></div>
                                            <h5 class="text-body fw-semibold mb-0">02</h5>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="mb-3 fw-bolder text-body-tertiary text-uppercase"><span
                                            class="d-none d-sm-inline-block">No. of </span> guests</h6>
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="d-sm-flex align-items-center gap-2">
                                            <div class="d-flex align-items-center justify-content-center bg-warning-subtle rounded mb-2 mb-sm-0"
                                                style="height:24px; width: 24px"><span
                                                    class="fa-solid fa-user text-warning-darker"></span></div>
                                            <h5 class="text-body fw-semibold mb-0">02</h5>
                                        </div>
                                        <div class="d-sm-flex align-items-center gap-2">
                                            <div class="d-flex align-items-center justify-content-center bg-info-subtle rounded mb-2 mb-sm-0"
                                                style="height:24px; width: 24px"><span
                                                    class="fa-solid fa-baby text-info-darker"></span></div>
                                            <h5 class="text-body fw-semibold mb-0">01</h5>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="mb-3 fw-bolder text-body-tertiary text-uppercase">Bathroom</h6>
                                    <div class="d-sm-flex align-items-center gap-2">
                                        <div class="d-flex align-items-center justify-content-center bg-danger-subtle rounded mb-2 mb-sm-0"
                                            style="height:24px; width: 24px"><span
                                                class="fa-solid fa-bath text-danger-darker"></span></div>
                                        <h5 class="text-body fw-semibold mb-0 me-3">01</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-auto mb-4"><a
                                    class="btn btn-phoenix-info collapse-indicator me-2 px-3 d-xxl-block mb-xxl-2"
                                    data-bs-toggle="collapse" href="#collapseRoomAvailableOnDates-0" role="button"
                                    aria-expanded="true" aria-controls="collapseRoomAvailableOnDates-0"><span
                                        class="fa-solid fa-calendar me-2"></span><span class="collapse-show">Show
                                        Dates</span><span class="collapse-hide">Hide Dates</span></a><a
                                    class="btn btn-primary px-5 px-md-7 px-xxl-5 flex-1" href="#!">Book now</a></div>
                            <div class="col-12">
                                <div class="collapse show" id="collapseRoomAvailableOnDates-0">
                                    <div class="px-4 py-3 border border-translucent rounded mb-4 bg-body-highlight">
                                        <div class="swiper-theme-container px-4">
                                            <div class="swiper theme-slider"
                                                data-swiper='{"spaceBetween":24,"slidesPerView":"auto","centeredSlide":true,"grabCursor":true,"breakpoints":{"768":{"spaceBetween":32},"1540":{"spaceBetween":48}}}'>
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">10 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-success">09 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">11 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-success">06 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">12 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-warning">03 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">13 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$699.00</h6>
                                                            <h6 class="text-danger">N/A</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">14 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-success">10 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">15 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-success">08 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">16 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$499.00</h6>
                                                            <h6 class="text-success">12 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">17 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-success">09 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">18 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-success">10 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">19 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-warning">02 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7">
                                                            <h6 class="mb-3 fw-bolder text-body">20 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-warning">04 units</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-nav">
                                                <div class="swiper-button-next"><span
                                                        class="fas fa-chevron-right text-primary"
                                                        data-fa-transform="shrink-3"></span></div>
                                                <div class="swiper-button-prev"><span
                                                        class="fas fa-chevron-left text-primary"
                                                        data-fa-transform="shrink-3"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 border border-translucent rounded"><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">wifi</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">tv</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">common area</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">bathtub</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">Heating</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">Telephone</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">Television</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">common area</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">Kettle</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">iron</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">Coffee maker</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">refrigerator</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">Room service</a><a class="fw-bold pe-0 fs-9 text-nowrap" href="#!">+
                                7 more</a></div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row gx-4 justify-content-between">
                            <div class="col-auto mb-4">
                                <div class="d-flex gap-3"><a href="#!"> <img
                                            class="rounded-1 border border-translucent"
                                            src="{{ asset('assets/img/hotels/71.png') }}" alt=""
                                            width="108"></a>
                                    <div> <a class="fs-8 fw-bolder text-body-emphasis text-nowrap" href="#!">Queen
                                            bed</a>
                                        <h6 class="fw-semibold text-body text-nowrap mt-1 mb-2"><span
                                                class="fa-solid fa-border-all me-2"></span>Deluxe Room</h6>
                                        <div class="d-flex align-items-baseline gap-1 mb-3">
                                            <h6 class="mb-0 fw-semibold">Available:</h6>
                                            <h4 class="text-warning-dark fw-bolder mb-0">25<span
                                                    class="fs-9 text-body-tertiary fw-bold"> / 77</span></h4>
                                        </div>
                                        <h4 class="fw-bolder mb-0">$400.5</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-auto d-flex gap-5 gap-md-6 order-1 order-xxl-0 mb-4">
                                <div>
                                    <h6 class="mb-3 fw-bolder text-body-tertiary text-uppercase"> <span
                                            class="d-none d-sm-inline-block">No. of </span> Beds</h6>
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="d-sm-flex align-items-center gap-2">
                                            <div class="d-flex align-items-center justify-content-center bg-primary-subtle rounded mb-2 mb-sm-0"
                                                style="height:24px; width: 24px"><span
                                                    class="fa-solid fa-person-shelter text-primary-darker"></span></div>
                                            <h5 class="text-body fw-semibold mb-0">02</h5>
                                        </div>
                                        <div class="d-sm-flex align-items-center gap-2">
                                            <div class="d-flex align-items-center justify-content-center bg-success-subtle rounded mb-2 mb-sm-0"
                                                style="height:24px; width: 24px"><span
                                                    class="fa-solid fa-bed text-success-darker"></span></div>
                                            <h5 class="text-body fw-semibold mb-0">02</h5>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="mb-3 fw-bolder text-body-tertiary text-uppercase"><span
                                            class="d-none d-sm-inline-block">No. of </span> guests</h6>
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="d-sm-flex align-items-center gap-2">
                                            <div class="d-flex align-items-center justify-content-center bg-warning-subtle rounded mb-2 mb-sm-0"
                                                style="height:24px; width: 24px"><span
                                                    class="fa-solid fa-user text-warning-darker"></span></div>
                                            <h5 class="text-body fw-semibold mb-0">02</h5>
                                        </div>
                                        <div class="d-sm-flex align-items-center gap-2">
                                            <div class="d-flex align-items-center justify-content-center bg-info-subtle rounded mb-2 mb-sm-0"
                                                style="height:24px; width: 24px"><span
                                                    class="fa-solid fa-baby text-info-darker"></span></div>
                                            <h5 class="text-body fw-semibold mb-0">01</h5>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="mb-3 fw-bolder text-body-tertiary text-uppercase">Bathroom</h6>
                                    <div class="d-sm-flex align-items-center gap-2">
                                        <div class="d-flex align-items-center justify-content-center bg-danger-subtle rounded mb-2 mb-sm-0"
                                            style="height:24px; width: 24px"><span
                                                class="fa-solid fa-bath text-danger-darker"></span></div>
                                        <h5 class="text-body fw-semibold mb-0 me-3">02</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-auto mb-4"><a
                                    class="btn btn-phoenix-info collapse-indicator me-2 px-3 d-xxl-block mb-xxl-2"
                                    data-bs-toggle="collapse" href="#collapseRoomAvailableOnDates-1" role="button"
                                    aria-expanded="false" aria-controls="collapseRoomAvailableOnDates-1"><span
                                        class="fa-solid fa-calendar me-2"></span><span class="collapse-show">Show
                                        Dates</span><span class="collapse-hide">Hide Dates</span></a><a
                                    class="btn btn-primary px-5 px-md-7 px-xxl-5 flex-1" href="#!">Book now</a></div>
                            <div class="col-12">
                                <div class="collapse" id="collapseRoomAvailableOnDates-1">
                                    <div class="px-4 py-3 border border-translucent rounded mb-4 bg-body-highlight">
                                        <div class="swiper-theme-container px-4">
                                            <div class="swiper theme-slider"
                                                data-swiper='{"spaceBetween":24,"slidesPerView":"auto","centeredSlide":true,"grabCursor":true,"breakpoints":{"768":{"spaceBetween":32},"1540":{"spaceBetween":48}}}'>
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">10 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-success">09 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">11 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-success">06 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">12 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-warning">03 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">13 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$699.00</h6>
                                                            <h6 class="text-danger">N/A</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">14 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-success">10 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">15 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-success">08 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">16 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$499.00</h6>
                                                            <h6 class="text-success">12 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">17 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-success">09 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">18 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-success">10 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">19 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-warning">02 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7">
                                                            <h6 class="mb-3 fw-bolder text-body">20 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-warning">04 units</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-nav">
                                                <div class="swiper-button-next"><span
                                                        class="fas fa-chevron-right text-primary"
                                                        data-fa-transform="shrink-3"></span></div>
                                                <div class="swiper-button-prev"><span
                                                        class="fas fa-chevron-left text-primary"
                                                        data-fa-transform="shrink-3"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 border border-translucent rounded"><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">wifi</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">tv</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">common area</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">bathtub</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">Heating</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">Telephone</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">Television</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">common area</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">Kettle</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">iron</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">Coffee maker</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">refrigerator</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">Room service</a><a class="fw-bold pe-0 fs-9 text-nowrap" href="#!">+
                                7 more</a></div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row gx-4 justify-content-between">
                            <div class="col-auto mb-4">
                                <div class="d-flex gap-3"><a href="#!"> <img
                                            class="rounded-1 border border-translucent"
                                            src="{{ asset('assets/img/hotels/72.png') }}" alt=""
                                            width="108"></a>
                                    <div> <a class="fs-8 fw-bolder text-body-emphasis text-nowrap" href="#!">Twin
                                            bed</a>
                                        <h6 class="fw-semibold text-body text-nowrap mt-1 mb-2"><span
                                                class="fa-solid fa-border-all me-2"></span>Family Room</h6>
                                        <div class="d-flex align-items-baseline gap-1 mb-3">
                                            <h6 class="mb-0 fw-semibold">Available:</h6>
                                            <h4 class="text-warning-dark fw-bolder mb-0">8<span
                                                    class="fs-9 text-body-tertiary fw-bold"> / 12</span></h4>
                                        </div>
                                        <h4 class="fw-bolder mb-0">$600.41</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-auto d-flex gap-5 gap-md-6 order-1 order-xxl-0 mb-4">
                                <div>
                                    <h6 class="mb-3 fw-bolder text-body-tertiary text-uppercase"> <span
                                            class="d-none d-sm-inline-block">No. of </span> Beds</h6>
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="d-sm-flex align-items-center gap-2">
                                            <div class="d-flex align-items-center justify-content-center bg-primary-subtle rounded mb-2 mb-sm-0"
                                                style="height:24px; width: 24px"><span
                                                    class="fa-solid fa-person-shelter text-primary-darker"></span></div>
                                            <h5 class="text-body fw-semibold mb-0">03</h5>
                                        </div>
                                        <div class="d-sm-flex align-items-center gap-2">
                                            <div class="d-flex align-items-center justify-content-center bg-success-subtle rounded mb-2 mb-sm-0"
                                                style="height:24px; width: 24px"><span
                                                    class="fa-solid fa-bed text-success-darker"></span></div>
                                            <h5 class="text-body fw-semibold mb-0">05</h5>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="mb-3 fw-bolder text-body-tertiary text-uppercase"><span
                                            class="d-none d-sm-inline-block">No. of </span> guests</h6>
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="d-sm-flex align-items-center gap-2">
                                            <div class="d-flex align-items-center justify-content-center bg-warning-subtle rounded mb-2 mb-sm-0"
                                                style="height:24px; width: 24px"><span
                                                    class="fa-solid fa-user text-warning-darker"></span></div>
                                            <h5 class="text-body fw-semibold mb-0">07</h5>
                                        </div>
                                        <div class="d-sm-flex align-items-center gap-2">
                                            <div class="d-flex align-items-center justify-content-center bg-info-subtle rounded mb-2 mb-sm-0"
                                                style="height:24px; width: 24px"><span
                                                    class="fa-solid fa-baby text-info-darker"></span></div>
                                            <h5 class="text-body fw-semibold mb-0">01</h5>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="mb-3 fw-bolder text-body-tertiary text-uppercase">Bathroom</h6>
                                    <div class="d-sm-flex align-items-center gap-2">
                                        <div class="d-flex align-items-center justify-content-center bg-danger-subtle rounded mb-2 mb-sm-0"
                                            style="height:24px; width: 24px"><span
                                                class="fa-solid fa-bath text-danger-darker"></span></div>
                                        <h5 class="text-body fw-semibold mb-0 me-3">03</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-auto mb-4"><a
                                    class="btn btn-phoenix-info collapse-indicator me-2 px-3 d-xxl-block mb-xxl-2"
                                    data-bs-toggle="collapse" href="#collapseRoomAvailableOnDates-2" role="button"
                                    aria-expanded="false" aria-controls="collapseRoomAvailableOnDates-2"><span
                                        class="fa-solid fa-calendar me-2"></span><span class="collapse-show">Show
                                        Dates</span><span class="collapse-hide">Hide Dates</span></a><a
                                    class="btn btn-primary px-5 px-md-7 px-xxl-5 flex-1" href="#!">Book now</a></div>
                            <div class="col-12">
                                <div class="collapse" id="collapseRoomAvailableOnDates-2">
                                    <div class="px-4 py-3 border border-translucent rounded mb-4 bg-body-highlight">
                                        <div class="swiper-theme-container px-4">
                                            <div class="swiper theme-slider"
                                                data-swiper='{"spaceBetween":24,"slidesPerView":"auto","centeredSlide":true,"grabCursor":true,"breakpoints":{"768":{"spaceBetween":32},"1540":{"spaceBetween":48}}}'>
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">10 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-success">09 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">11 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-success">06 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">12 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-warning">03 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">13 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$699.00</h6>
                                                            <h6 class="text-danger">N/A</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">14 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-success">10 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">15 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-success">08 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">16 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$499.00</h6>
                                                            <h6 class="text-success">12 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">17 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-success">09 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">18 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-success">10 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">19 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-warning">02 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7">
                                                            <h6 class="mb-3 fw-bolder text-body">20 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-warning">04 units</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-nav">
                                                <div class="swiper-button-next"><span
                                                        class="fas fa-chevron-right text-primary"
                                                        data-fa-transform="shrink-3"></span></div>
                                                <div class="swiper-button-prev"><span
                                                        class="fas fa-chevron-left text-primary"
                                                        data-fa-transform="shrink-3"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 border border-translucent rounded"><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">wifi</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">tv</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">common area</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">bathtub</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">Heating</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">Telephone</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">Television</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">common area</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">Kettle</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">iron</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">Coffee maker</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">refrigerator</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">Room service</a><a class="fw-bold pe-0 fs-9 text-nowrap" href="#!">+
                                7 more</a></div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row gx-4 justify-content-between">
                            <div class="col-auto mb-4">
                                <div class="d-flex gap-3"><a href="#!"> <img
                                            class="rounded-1 border border-translucent"
                                            src="{{ asset('assets/img/hotels/73.png') }}" alt=""
                                            width="108"></a>
                                    <div> <a class="fs-8 fw-bolder text-body-emphasis text-nowrap" href="#!">Single
                                            bed</a>
                                        <h6 class="fw-semibold text-body text-nowrap mt-1 mb-2"><span
                                                class="fa-solid fa-border-all me-2"></span>Honeymoon Suite</h6>
                                        <div class="d-flex align-items-baseline gap-1 mb-3">
                                            <h6 class="mb-0 fw-semibold">Available:</h6>
                                            <h4 class="text-warning-dark fw-bolder mb-0">5<span
                                                    class="fs-9 text-body-tertiary fw-bold"> / 15</span></h4>
                                        </div>
                                        <h4 class="fw-bolder mb-0">$350.8</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-auto d-flex gap-5 gap-md-6 order-1 order-xxl-0 mb-4">
                                <div>
                                    <h6 class="mb-3 fw-bolder text-body-tertiary text-uppercase"> <span
                                            class="d-none d-sm-inline-block">No. of </span> Beds</h6>
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="d-sm-flex align-items-center gap-2">
                                            <div class="d-flex align-items-center justify-content-center bg-primary-subtle rounded mb-2 mb-sm-0"
                                                style="height:24px; width: 24px"><span
                                                    class="fa-solid fa-person-shelter text-primary-darker"></span></div>
                                            <h5 class="text-body fw-semibold mb-0">01</h5>
                                        </div>
                                        <div class="d-sm-flex align-items-center gap-2">
                                            <div class="d-flex align-items-center justify-content-center bg-success-subtle rounded mb-2 mb-sm-0"
                                                style="height:24px; width: 24px"><span
                                                    class="fa-solid fa-bed text-success-darker"></span></div>
                                            <h5 class="text-body fw-semibold mb-0">01</h5>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="mb-3 fw-bolder text-body-tertiary text-uppercase"><span
                                            class="d-none d-sm-inline-block">No. of </span> guests</h6>
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="d-sm-flex align-items-center gap-2">
                                            <div class="d-flex align-items-center justify-content-center bg-warning-subtle rounded mb-2 mb-sm-0"
                                                style="height:24px; width: 24px"><span
                                                    class="fa-solid fa-user text-warning-darker"></span></div>
                                            <h5 class="text-body fw-semibold mb-0">02</h5>
                                        </div>
                                        <div class="d-sm-flex align-items-center gap-2">
                                            <div class="d-flex align-items-center justify-content-center bg-info-subtle rounded mb-2 mb-sm-0"
                                                style="height:24px; width: 24px"><span
                                                    class="fa-solid fa-baby text-info-darker"></span></div>
                                            <h5 class="text-body fw-semibold mb-0">00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="mb-3 fw-bolder text-body-tertiary text-uppercase">Bathroom</h6>
                                    <div class="d-sm-flex align-items-center gap-2">
                                        <div class="d-flex align-items-center justify-content-center bg-danger-subtle rounded mb-2 mb-sm-0"
                                            style="height:24px; width: 24px"><span
                                                class="fa-solid fa-bath text-danger-darker"></span></div>
                                        <h5 class="text-body fw-semibold mb-0 me-3">01</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-auto mb-4"><a
                                    class="btn btn-phoenix-info collapse-indicator me-2 px-3 d-xxl-block mb-xxl-2"
                                    data-bs-toggle="collapse" href="#collapseRoomAvailableOnDates-3" role="button"
                                    aria-expanded="false" aria-controls="collapseRoomAvailableOnDates-3"><span
                                        class="fa-solid fa-calendar me-2"></span><span class="collapse-show">Show
                                        Dates</span><span class="collapse-hide">Hide Dates</span></a><a
                                    class="btn btn-primary px-5 px-md-7 px-xxl-5 flex-1" href="#!">Book now</a>
                            </div>
                            <div class="col-12">
                                <div class="collapse" id="collapseRoomAvailableOnDates-3">
                                    <div class="px-4 py-3 border border-translucent rounded mb-4 bg-body-highlight">
                                        <div class="swiper-theme-container px-4">
                                            <div class="swiper theme-slider"
                                                data-swiper='{"spaceBetween":24,"slidesPerView":"auto","centeredSlide":true,"grabCursor":true,"breakpoints":{"768":{"spaceBetween":32},"1540":{"spaceBetween":48}}}'>
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">10 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-success">09 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">11 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-success">06 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">12 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-warning">03 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">13 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$699.00</h6>
                                                            <h6 class="text-danger">N/A</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">14 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-success">10 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">15 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-success">08 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">16 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$499.00</h6>
                                                            <h6 class="text-success">12 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">17 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-success">09 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">18 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-success">10 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7 border-end">
                                                            <h6 class="mb-3 fw-bolder text-body">19 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-warning">02 units</h6>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w-auto">
                                                        <div class="text-center pe-4 pe-md-5 pe-xl-7">
                                                            <h6 class="mb-3 fw-bolder text-body">20 March</h6>
                                                            <h6 class="mb-2 text-body-highlight fw-semibold">$599.00</h6>
                                                            <h6 class="text-warning">04 units</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-nav">
                                                <div class="swiper-button-next"><span
                                                        class="fas fa-chevron-right text-primary"
                                                        data-fa-transform="shrink-3"></span></div>
                                                <div class="swiper-button-prev"><span
                                                        class="fas fa-chevron-left text-primary"
                                                        data-fa-transform="shrink-3"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 border border-translucent rounded"><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">wifi</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">tv</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">common area</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">bathtub</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">Heating</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">Telephone</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">Television</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">common area</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">Kettle</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">iron</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">Coffee maker</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">refrigerator</a><a
                                class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 me-2"
                                href="#!">Room service</a><a class="fw-bold pe-0 fs-9 text-nowrap"
                                href="#!">+ 7 more</a></div>
                    </div>
                </div>
                <div class="border p-3 rounded-3 mt-5 d-flex flex-end-center gap-3 gap-sm-6 flex-wrap">
                    <h2 class="text-body mb-0"><span class="fs-9 text-body-tertiary fw-bold me-2">Total :</span>04</h2>
                    <a class="btn btn-primary px-sm-7" href="#!">Confirm Booking<span
                            class="fa-solid fa-chevron-right ms-2"></span></a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('vendors/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('vendors/swiper/swiper-bundle.min.js') }}"></script>
@endpush
