@extends('layouts.travel-agency')

@section('title', 'Flight Booking')

@section('content')
    <div class="navbar-responsive-navitems navbar-expand border-y bg-body-emphasis border-translucent py-2">
        <div class="container-medium d-flex flex-between-center" data-navbar="data-navbar">
            <ul class="navbar-nav justify-content-end align-items-center">
                <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3 ps-0 "
                        href="{{ url('apps/travel-agency/flight/homepage') }}">Homepage</a></li>
                <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3  text-primary"
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
    <section class="pt-6 pb-9">
        <div class="container-small">
            @include('layouts.partials.breadcrumb')
            <h2 class="mb-5">Booking</h2>
            <div class="row g-3 align-items-sm-center justify-content-between mb-5">
                <div class="col-sm">
                    <div class="theme-wizard flight-booking-wizard" style="width: 18.125rem">
                        <ul class="nav justify-content-between nav-wizard nav-wizard-success">
                            <li class="nav-item"><a class="done complete nav-link fw-semibold"
                                    href="{{ url('apps/travel-agency/flight/homepage') }}" data-wizard-step="1">
                                    <div class="d-inline-block text-center"><span class="nav-item-circle-parent"><span
                                                class="d-block nav-item-circle"><span
                                                    class="fas fa-check"></span></span></span><span
                                            class="mt-1 fs-9">Flight</span></div>
                                </a></li>
                            <li class="nav-item"><a class="active nav-link fw-semibold"
                                    href="{{ url('apps/travel-agency/flight/booking') }}" data-wizard-step="2">
                                    <div class="d-inline-block text-center"><span class="nav-item-circle-parent"><span
                                                class="d-block nav-item-circle"><span
                                                    class="fas fa-user"></span></span></span><span
                                            class="mt-1 fs-9">Booking</span></div>
                                </a></li>
                            <li class="nav-item"><a class="nav-link fw-semibold"
                                    href="{{ url('apps/travel-agency/flight/payment') }}" data-wizard-step="3">
                                    <div class="d-inline-block text-center"><span class="nav-item-circle-parent"><span
                                                class="d-block nav-item-circle"><span
                                                    class="fas fa-money-bill"></span></span></span><span
                                            class="mt-1 fs-9">Payment</span></div>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm text-sm-end">
                    <p class="mb-2 text-info">Book before time runs out</p>
                    <h3 class="mb-0 text-info fw-bold d-flex gap-2 align-items-center justify-content-sm-end"> <span
                            class="fa-solid fa-clock fs-8"></span>29 <span class="fs-9 fw-normal">min </span>50 <span
                            class="fs-9 fw-normal">sec</span></h3>
                </div>
            </div>
            <div class="card bg-body-highlight mb-6">
                <div class="card-body p-4 p-lg-6">
                    <div class="row g-0 justify-content-between">
                        <div class="col-lg-8 mb-5 mb-lg-0">
                            <div class="row gy-4">
                                <div class="col-12">
                                    <div class="row align-items-center">
                                        <div class="col-md-3 text-md-end mb-2 mb-md-0">
                                            <h2>13:45</h2>
                                            <p class="mb-0 text-nowrap">23 January, 2023</p>
                                        </div>
                                        <div class="col-md-auto d-none d-md-block text-center"> <span
                                                class="fas fa-circle text-body-quaternary fs-11"> </span></div>
                                        <div class="col-md-auto">
                                            <h5>DAC - Dhaka <span class="text-body-tertiary fw-normal">(Hazrat Shahjalal
                                                    Intl. Airport)</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row align-items-center">
                                        <div class="col-auto col-md-3 text-md-end">
                                            <p class="mb-0 text-body-quaternary">0h 45m</p>
                                        </div>
                                        <div class="col-auto text-md-center"> <img
                                                src="{{ asset('assets/img/icons/long-arrow-down.svg') }}" alt="">
                                        </div>
                                        <div class="col-auto">
                                            <p class="mb-0 text-body-quaternary">Qatar Airways </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row align-items-center">
                                        <div class="col-md-3 text-md-end mb-2 mb-md-0">
                                            <h2>14:15</h2>
                                            <p class="mb-0 text-nowrap">23 January, 2023</p>
                                        </div>
                                        <div class="col-md-auto d-none d-md-block text-center"> <span
                                                class="fas fa-circle text-body-quaternary fs-11"> </span></div>
                                        <div class="col-md-auto">
                                            <h5>CXB - Cox’s Bazar <span class="text-body-tertiary fw-normal">(Cox’s Bazar
                                                    Intl. Airport) </span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div
                                class="ps-lg-6 pt-5 pt-lg-0 border-top border-top-lg-0 border-start-lg border-translucent">
                                <div class="row g-lg-3 g-md-0 g-3 flex-between-center">
                                    <div class="col-md-auto col-lg-12">
                                        <div class="text-nowrap"> <img class="rounded-2"
                                                src="{{ asset('assets/img/brand/qatar-airline.png') }}" alt=""
                                                width="32">
                                            <h5 class="text-nowrap fw-normal d-inline-block ms-2 mb-0">Qatar Airways</h5>
                                        </div>
                                    </div>
                                    <div class="col-auto col-lg-12">
                                        <h5 class="text-nowrap">Flight number</h5>
                                        <p class="mb-0">VQ 935</p>
                                    </div>
                                    <div class="col-auto col-lg-12">
                                        <h5 class="text-nowrap">Flight model</h5>
                                        <p class="mb-0">ATR735</p>
                                    </div>
                                    <div class="col-auto col-lg-12">
                                        <h5 class="mb-0 text-nowrap"><span class="fa-solid fa-couch me-2"></span>Economy
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-6">
                <h3 class="mb-4">Flight Details</h3>
                <div class="row g-0 justify-content-between mb-4">
                    <div class="col-lg-3 border-end-lg mb-5 mb-lg-0">
                        <h5 class="mb-4">Baggage weight limit</h5>
                        <table class="table table-borderless mb-0" style="max-width: 9.375rem">
                            <tr>
                                <th class="p-0"></th>
                                <th class="p-0"></th>
                                <th class="p-0"></th>
                            </tr>
                            <tr>
                                <td class="text-nowrap py-1">
                                    <p class="mb-0 text-body-tertiary text-nowrap"><span
                                            class="fa-solid fa-suitcase-rolling text-body-emphasis me-2"></span>Cargo </p>
                                </td>
                                <td class="w-max-content py-1 pe-1">
                                    <p class="mb-0 text-body-tertiary">:</p>
                                </td>
                                <td class="py-1 align-middle">
                                    <h5 class="mb-0">20 kgs</h5>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap py-1">
                                    <p class="mb-0 text-body-tertiary text-nowrap"><span
                                            class="fa-solid fa-briefcase text-body-emphasis me-2"></span>Carry </p>
                                </td>
                                <td class="w-max-content py-1 pe-1">
                                    <p class="mb-0 text-body-tertiary">:</p>
                                </td>
                                <td class="py-1 align-middle">
                                    <h5 class="mb-0">7 kgs</h5>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-auto col-lg-8">
                        <h5 class="mb-4">Policy </h5>
                        <div class="d-flex flex-column flex-sm-row justify-content-between gap-4">
                            <div>
                                <p class="mb-2 text-info">Cancellation</p>
                                <p class="mb-0">Refund Amount = Paid Amount - Airline’s Cancellation Fee</p>
                            </div>
                            <div>
                                <p class="mb-2 text-info">Re-issue</p>
                                <p class="mb-0">Re-issue Fee = Airline’s Fee + Fare Difference</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="mb-0 text-info">*The airline’s fee is indicative and per person. Convenience fee is
                    nom-refundable</p>
            </div>
            <form class="row justify-content-between">
                <div class="col-lg-8">
                    <div>
                        <div class="mb-4">
                            <h3>Traveler Details</h3><small> <span class="fas fa-info-circle me-2 text-info"> </span>As
                                mentioned in your passport or government approved IDs</small>
                        </div>
                        <div class="card bg-body mb-4">
                            <div class="card-header bg-body-highlight">
                                <div class="d-flex flex-between-center">
                                    <h5 class="mb-0 text-nowrap"><span
                                            class="fa-solid fa-user fs-9 me-2 text-primary"></span>Person 1</h5>
                                    <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                            value="" id="saveInfo-1"><label
                                            class="form-check-label fs-8 fw-normal mb-0 text-body-emphasis"
                                            for="saveInfo-1">Save traveler info</label></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="mb-0 fw-semibold fs-9 text-body-tertiary">Personal info</h6>
                                <hr class="my-2">
                                <div class="row g-3 mb-6">
                                    <div class="col-md-6"><label class="fw-bold text-body-highlight mb-2"
                                            for="firstName-1">First name</label><input class="form-control"
                                            id="firstName-1" type="text" placeholder="First name"></div>
                                    <div class="col-md-6"><label class="fw-bold text-body-highlight mb-2"
                                            for="lastName-1">Last name</label><input class="form-control" id="lastName-1"
                                            type="text" placeholder="Last name"></div>
                                </div>
                                <h6 class="mb-0 fw-semibold fs-9 text-body-tertiary">Contact info</h6>
                                <hr class="my-2">
                                <div class="row g-3 mb-6">
                                    <div class="col-md-6"><label class="fw-bold text-body-highlight mb-2"
                                            for="email-1">Email</label><input class="form-control" id="email-1"
                                            type="email" placeholder="Email"></div>
                                    <div class="col-md-6"><label class="fw-bold text-body-highlight mb-2"
                                            for="phone-1">Phone</label><input class="form-control" id="phone-1"
                                            type="tel" placeholder="XXX-XXX-XXXX"></div>
                                </div>
                                <h6 class="mb-0 fw-semibold fs-9 text-body-tertiary">Passport info</h6>
                                <hr class="my-2">
                                <div class="row g-3 mb-3">
                                    <div class="col-md-6"><label class="fw-bold text-body-highlight mb-2"
                                            for="passportNum-1">Passport Number</label><input class="form-control"
                                            id="passportNum-1" type="text" placeholder="Passport number"></div>
                                    <div class="col-md-6"><label class="fw-bold text-body-highlight mb-2"
                                            for="passportExpiry-1">Passport expiry date</label><input
                                            class="form-control datetimepicker" id="passportExpiry-1" type="text"
                                            placeholder="Select date"
                                            data-options='{"disableMobile":true,"dateFormat":"j M, Y"}'></div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="dropzone dropzone-multiple p-0" id="passportFrontPage-1"
                                            data-dropzone="data-dropzone"
                                            data-options='{"url":"valid/url","maxFiles":1,"dictDefaultMessage":"Choose or Drop a file here"}'>
                                            <div class="fallback"><input type="file" name="file"></div>
                                            <div class="dz-message text-body-tertiary text-opacity-85"
                                                data-dz-message="data-dz-message">
                                                <h6 class="mb-1 text-body-quaternary">Upload or drag</h6>
                                                <h6 class="mb-3 text-body-secondary">The photo of the front page of your
                                                    passport</h6><img class="mt-3 me-2"
                                                    src="{{ asset('assets/img/icons/image-icon.png') }}" width="42"
                                                    alt="">
                                            </div>
                                            <div class="dz-preview dz-preview-multiple m-0 d-flex flex-column">
                                                <div class="d-flex pb-3 border-bottom border-translucent media px-2">
                                                    <div class="border p-2 rounded-2 me-2"><img class="rounded-2 dz-image"
                                                            src="{{ asset('assets/img/icons/file.png') }}" alt="..."
                                                            data-dz-thumbnail="data-dz-thumbnail"></div>
                                                    <div class="flex-1 d-flex flex-between-center">
                                                        <div><span class="fw-bold fs-9"
                                                                data-dz-name="data-dz-name"></span>
                                                            <div class="d-flex align-items-center">
                                                                <p class="mb-0 fs-9 text-body-quaternary lh-1"
                                                                    data-dz-size="data-dz-size"></p>
                                                                <div class="dz-progress"><span class="dz-upload"
                                                                        data-dz-uploadprogress=""></span></div>
                                                            </div><span class="fs-10 text-danger"
                                                                data-dz-errormessage="data-dz-errormessage"></span>
                                                        </div>
                                                        <div class="dropdown"><button
                                                                class="btn btn-link text-body-quaternary btn-sm dropdown-toggle btn-reveal dropdown-caret-none"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><span
                                                                    class="fas fa-ellipsis-h"></span></button>
                                                            <div
                                                                class="dropdown-menu dropdown-menu-end border border-translucent py-2">
                                                                <a class="dropdown-item" href="#!"
                                                                    data-dz-remove="data-dz-remove">Remove File</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="dropzone dropzone-multiple p-0" id="passportBackPage-1"
                                            data-dropzone="data-dropzone"
                                            data-options='{"url":"valid/url","maxFiles":1,"dictDefaultMessage":"Choose or Drop a file here"}'>
                                            <div class="fallback"><input type="file" name="file"></div>
                                            <div class="dz-message text-body-tertiary text-opacity-85"
                                                data-dz-message="data-dz-message">
                                                <h6 class="mb-1 text-body-quaternary">Upload or drag</h6>
                                                <h6 class="mb-3 text-body-secondary">The photo of the back page of your
                                                    passport</h6><img class="mt-3 me-2"
                                                    src="{{ asset('assets/img/icons/image-icon.png') }}" width="42"
                                                    alt="">
                                            </div>
                                            <div class="dz-preview dz-preview-multiple m-0 d-flex flex-column">
                                                <div class="d-flex pb-3 border-bottom border-translucent media px-2">
                                                    <div class="border p-2 rounded-2 me-2"><img class="rounded-2 dz-image"
                                                            src="{{ asset('assets/img/icons/file.png') }}" alt="..."
                                                            data-dz-thumbnail="data-dz-thumbnail"></div>
                                                    <div class="flex-1 d-flex flex-between-center">
                                                        <div><span class="fw-bold fs-9"
                                                                data-dz-name="data-dz-name"></span>
                                                            <div class="d-flex align-items-center">
                                                                <p class="mb-0 fs-9 text-body-quaternary lh-1"
                                                                    data-dz-size="data-dz-size"></p>
                                                                <div class="dz-progress"><span class="dz-upload"
                                                                        data-dz-uploadprogress=""></span></div>
                                                            </div><span class="fs-10 text-danger"
                                                                data-dz-errormessage="data-dz-errormessage"></span>
                                                        </div>
                                                        <div class="dropdown"><button
                                                                class="btn btn-link text-body-quaternary btn-sm dropdown-toggle btn-reveal dropdown-caret-none"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><span
                                                                    class="fas fa-ellipsis-h"></span></button>
                                                            <div
                                                                class="dropdown-menu dropdown-menu-end border border-translucent py-2">
                                                                <a class="dropdown-item" href="#!"
                                                                    data-dz-remove="data-dz-remove">Remove File</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-body mb-4">
                            <div class="card-header bg-body-highlight">
                                <div class="d-flex flex-between-center">
                                    <h5 class="mb-0 text-nowrap"><span
                                            class="fa-solid fa-user fs-9 me-2 text-primary"></span>Person 2</h5>
                                    <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                            value="" id="saveInfo-2"><label
                                            class="form-check-label fs-8 fw-normal mb-0 text-body-emphasis"
                                            for="saveInfo-2">Save traveler info</label></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="mb-0 fw-semibold fs-9 text-body-tertiary">Personal info</h6>
                                <hr class="my-2">
                                <div class="row g-3 mb-6">
                                    <div class="col-md-6"><label class="fw-bold text-body-highlight mb-2"
                                            for="firstName-2">First name</label><input class="form-control"
                                            id="firstName-2" type="text" placeholder="First name"></div>
                                    <div class="col-md-6"><label class="fw-bold text-body-highlight mb-2"
                                            for="lastName-2">Last name</label><input class="form-control" id="lastName-2"
                                            type="text" placeholder="Last name"></div>
                                </div>
                                <h6 class="mb-0 fw-semibold fs-9 text-body-tertiary">Contact info</h6>
                                <hr class="my-2">
                                <div class="row g-3 mb-6">
                                    <div class="col-md-6"><label class="fw-bold text-body-highlight mb-2"
                                            for="email-2">Email</label><input class="form-control" id="email-2"
                                            type="email" placeholder="Email"></div>
                                    <div class="col-md-6"><label class="fw-bold text-body-highlight mb-2"
                                            for="phone-2">Phone</label><input class="form-control" id="phone-2"
                                            type="tel" placeholder="XXX-XXX-XXXX"></div>
                                </div>
                                <h6 class="mb-0 fw-semibold fs-9 text-body-tertiary">Passport info</h6>
                                <hr class="my-2">
                                <div class="row g-3 mb-3">
                                    <div class="col-md-6"><label class="fw-bold text-body-highlight mb-2"
                                            for="passportNum-2">Passport Number</label><input class="form-control"
                                            id="passportNum-2" type="text" placeholder="Passport number"></div>
                                    <div class="col-md-6"><label class="fw-bold text-body-highlight mb-2"
                                            for="passportExpiry-2">Passport expiry date</label><input
                                            class="form-control datetimepicker" id="passportExpiry-2" type="text"
                                            placeholder="Select date"
                                            data-options='{"disableMobile":true,"dateFormat":"j M, Y"}'></div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="dropzone dropzone-multiple p-0" id="passportFrontPage-2"
                                            data-dropzone="data-dropzone"
                                            data-options='{"url":"valid/url","maxFiles":1,"dictDefaultMessage":"Choose or Drop a file here"}'>
                                            <div class="fallback"><input type="file" name="file"></div>
                                            <div class="dz-message text-body-tertiary text-opacity-85"
                                                data-dz-message="data-dz-message">
                                                <h6 class="mb-1 text-body-quaternary">Upload or drag</h6>
                                                <h6 class="mb-3 text-body-secondary">The photo of the front page of your
                                                    passport</h6><img class="mt-3 me-2"
                                                    src="{{ asset('assets/img/icons/image-icon.png') }}" width="42"
                                                    alt="">
                                            </div>
                                            <div class="dz-preview dz-preview-multiple m-0 d-flex flex-column">
                                                <div class="d-flex pb-3 border-bottom border-translucent media px-2">
                                                    <div class="border p-2 rounded-2 me-2"><img class="rounded-2 dz-image"
                                                            src="{{ asset('assets/img/icons/file.png') }}" alt="..."
                                                            data-dz-thumbnail="data-dz-thumbnail"></div>
                                                    <div class="flex-1 d-flex flex-between-center">
                                                        <div><span class="fw-bold fs-9"
                                                                data-dz-name="data-dz-name"></span>
                                                            <div class="d-flex align-items-center">
                                                                <p class="mb-0 fs-9 text-body-quaternary lh-1"
                                                                    data-dz-size="data-dz-size"></p>
                                                                <div class="dz-progress"><span class="dz-upload"
                                                                        data-dz-uploadprogress=""></span></div>
                                                            </div><span class="fs-10 text-danger"
                                                                data-dz-errormessage="data-dz-errormessage"></span>
                                                        </div>
                                                        <div class="dropdown"><button
                                                                class="btn btn-link text-body-quaternary btn-sm dropdown-toggle btn-reveal dropdown-caret-none"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><span
                                                                    class="fas fa-ellipsis-h"></span></button>
                                                            <div
                                                                class="dropdown-menu dropdown-menu-end border border-translucent py-2">
                                                                <a class="dropdown-item" href="#!"
                                                                    data-dz-remove="data-dz-remove">Remove File</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="dropzone dropzone-multiple p-0" id="passportBackPage-2"
                                            data-dropzone="data-dropzone"
                                            data-options='{"url":"valid/url","maxFiles":1,"dictDefaultMessage":"Choose or Drop a file here"}'>
                                            <div class="fallback"><input type="file" name="file"></div>
                                            <div class="dz-message text-body-tertiary text-opacity-85"
                                                data-dz-message="data-dz-message">
                                                <h6 class="mb-1 text-body-quaternary">Upload or drag</h6>
                                                <h6 class="mb-3 text-body-secondary">The photo of the back page of your
                                                    passport</h6><img class="mt-3 me-2"
                                                    src="{{ asset('assets/img/icons/image-icon.png') }}" width="42"
                                                    alt="">
                                            </div>
                                            <div class="dz-preview dz-preview-multiple m-0 d-flex flex-column">
                                                <div class="d-flex pb-3 border-bottom border-translucent media px-2">
                                                    <div class="border p-2 rounded-2 me-2"><img class="rounded-2 dz-image"
                                                            src="{{ asset('assets/img/icons/file.png') }}" alt="..."
                                                            data-dz-thumbnail="data-dz-thumbnail"></div>
                                                    <div class="flex-1 d-flex flex-between-center">
                                                        <div><span class="fw-bold fs-9"
                                                                data-dz-name="data-dz-name"></span>
                                                            <div class="d-flex align-items-center">
                                                                <p class="mb-0 fs-9 text-body-quaternary lh-1"
                                                                    data-dz-size="data-dz-size"></p>
                                                                <div class="dz-progress"><span class="dz-upload"
                                                                        data-dz-uploadprogress=""></span></div>
                                                            </div><span class="fs-10 text-danger"
                                                                data-dz-errormessage="data-dz-errormessage"></span>
                                                        </div>
                                                        <div class="dropdown"><button
                                                                class="btn btn-link text-body-quaternary btn-sm dropdown-toggle btn-reveal dropdown-caret-none"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><span
                                                                    class="fas fa-ellipsis-h"></span></button>
                                                            <div
                                                                class="dropdown-menu dropdown-menu-end border border-translucent py-2">
                                                                <a class="dropdown-item" href="#!"
                                                                    data-dz-remove="data-dz-remove">Remove File</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 mb-lg-9">
                        <h3 class="mb-4">Payment Summary</h3>
                        <div class="card bg-body-highlight">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="p-0 pb-3 list-group-item bg-body-highlight">
                                        <div class="d-flex flex-between-center">
                                            <h6 class="mb-0">Base fare</h6>
                                            <p class="mb-0 text-body-emphasis"> <span class="fs-9 me-2">BDT</span>4,074
                                            </p>
                                        </div>
                                    </li>
                                    <li class="px-0 py-3 list-group-item bg-body-highlight">
                                        <div class="d-flex flex-between-center">
                                            <h6 class="mb-0">Tax</h6>
                                            <p class="mb-0 text-body-emphasis"> <span class="fs-9 me-2">BDT</span>+725</p>
                                        </div>
                                    </li>
                                    <li class="px-0 pt-3 pb-5 list-group-item bg-body-highlight">
                                        <div class="d-flex flex-between-center">
                                            <h6 class="mb-0">Sub-total</h6>
                                            <p class="mb-0 text-body-emphasis fw-bold"> <span
                                                    class="fs-9 me-2 fw-semibold">BDT</span>4,799 </p>
                                        </div>
                                    </li>
                                    <li class="px-0 py-3 list-group-item bg-body-highlight">
                                        <div class="d-flex flex-between-center">
                                            <h6 class="mb-0">Code<span
                                                    class="badge text-bg-warning ms-2">DOMFLy2023</span></h6>
                                            <p class="mb-0 text-body-emphasis"> <span class="fs-9 me-2">BDT</span>-285</p>
                                        </div>
                                    </li>
                                    <li class="px-0 pb-0 pt-3 list-group-item bg-body-highlight">
                                        <div class="d-flex flex-between-center">
                                            <h6 class="mb-0">Convenience charge</h6>
                                            <p class="mb-0 text-body-emphasis"> <span class="fs-9 me-2">BDT</span>+95</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-info-subtle border-info-subtle coupon-card-sticky-top mb-9 mb-lg-0">
                        <div class="card-body">
                            <h4>Have a coupon?</h4>
                            <p class="mb-4 fs-9 text-body-tertiary">Enter code to get a discount</p>
                            <div class="input-group gap-2">
                                <div class="form-icon-container flex-1"><input class="form-control" type="text"
                                        placeholder="Coupon Code"></div><button
                                    class="btn btn-primary rounded">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->

    <div class="flight-bottom-bar bg-secondary" data-bs-theme="light">
        <div class="container-small py-3">
            <div class="d-flex gap-4 gap-sm-6 align-items-center justify-content-end">
                <h6 class="text-white"> <span class="me-2">Total </span><span class="me-2">: </span>BDT<span
                        class="fs-5 ms-2">4,609</span></h6><a class="btn btn-primary flex-1 text-nowrap"
                    href="{{ url('apps/travel-agency/flight/payment') }}" style="max-width: 17rem"> Continue<span
                        class="fa-solid fa-chevron-right fs-9 ms-2"></span></a>
            </div>
        </div>
    </div>
    <div class="support-chat-container support-chat-bottom-lg">
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
@endsection
