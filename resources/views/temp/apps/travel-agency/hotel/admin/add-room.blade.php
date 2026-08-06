@extends('layouts.vertical')

@section('title', 'Add Room')

@push('styles')
<link href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/dropzone/dropzone.css') }}" rel="stylesheet">
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
          <h2 class="fs-5 mb-4 mb-xl-5">Add New Room</h2>
          <div class="theme-wizard" data-theme-wizard="data-theme-wizard" data-wizard-modal-disabled="data-wizard-modal-disabled">
            <div class="row gx-0 gx-xl-5">
              <div class="col-xl-4 order-xl-1">
                <div class="scrollbar mb-4">
                  <ul class="nav justify-content-between flex-nowrap nav-wizard nav-wizard-vertical-xl">
                    <li class="nav-item"><a class="nav-link active py-0 py-xl-3" href="#add-room-wizard-tab1" data-bs-toggle="tab" data-wizard-step="1">
                        <div class="text-center d-inline-block d-xl-flex align-items-center gap-3"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fa-solid fa-file nav-item-icon"></span><span class="fa-solid fa-check check-icon"></span></span></span><span class="nav-item-title fs-9 fs-xl-8">Details</span></div>
                      </a></li>
                    <li class="nav-item"><a class="nav-link py-0 py-xl-3" href="#add-room-wizard-tab2" data-bs-toggle="tab" data-wizard-step="2">
                        <div class="text-center d-inline-block d-xl-flex align-items-center gap-3"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fa-solid fa-usd nav-item-icon"></span><span class="fa-solid fa-check check-icon"></span></span></span><span class="nav-item-title fs-9 fs-xl-8">Pricing</span></div>
                      </a></li>
                    <li class="nav-item"><a class="nav-link py-0 py-xl-3" href="#add-room-wizard-tab3" data-bs-toggle="tab" data-wizard-step="3">
                        <div class="text-center d-inline-block d-xl-flex align-items-center gap-3"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fa-solid fa-grip nav-item-icon"></span><span class="fa-solid fa-check check-icon"></span></span></span><span class="nav-item-title fs-9 fs-xl-8">Amenities</span></div>
                      </a></li>
                    <li class="nav-item"><a class="nav-link py-0 py-xl-3" href="#add-room-wizard-tab4" data-bs-toggle="tab" data-wizard-step="4">
                        <div class="text-center d-inline-block d-xl-flex align-items-center gap-3"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fa-solid fa-images nav-item-icon"></span><span class="fa-solid fa-check check-icon"></span></span></span><span class="nav-item-title fs-9 fs-xl-8">Photos</span></div>
                      </a></li>
                    <li class="nav-item"><a class="nav-link py-0 py-xl-3" href="#add-room-wizard-tab5" data-bs-toggle="tab" data-wizard-step="5">
                        <div class="text-center d-inline-block d-xl-flex align-items-center gap-3"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-check"></span></span></span><span class="nav-item-title fs-9 fs-xl-8">Done</span></div>
                      </a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-8 flex-1">
                <div class="tab-content">
                  <div class="tab-pane active" role="tabpanel" aria-labelledby="add-room-wizard-tab1" id="add-room-wizard-tab1">
                    <div class="row g-0">
                      <div class="col-xxl-8">
                        <form id="addPropertyWizardForm1" data-wizard-form="1">
                          <h3 class="mb-6">Room Details</h3>
                          <h4 class="mb-2">Share your room details</h4>
                          <p class="mb-4 text-body-tertiary">Enjoy a comfortable stay in our well-appointed rooms with a variety of options to choose from.</p>
                          <div class="row g-3 g-sm-4 mb-6">
                            <div class="col-sm-6 col-md-7"><label class="mb-1 text-body-highlight fw-bold" for="room-category">Room category</label><select class="form-select" id="room-category">
                                <option>King</option>
                                <option>Bridal suite</option>
                                <option>Single room</option>
                              </select></div>
                            <div class="col-sm-6 col-md-5"><label class="mb-1 text-body-highlight fw-bold" for="room-name">Room name (Optional)</label><input class="form-control" id="room-name" type="text" placeholder="Enter name"></div>
                          </div>
                          <div class="row gx-3 gx-sm-4 gy-3 mb-6">
                            <div class="col-6 col-sm-4"><label class="mb-1 text-body-highlight fw-bold" for="bed-type">Bed type</label><select class="form-select" id="bed-type">
                                <option>Twin bed</option>
                                <option>King bed</option>
                                <option>Queen bed</option>
                                <option>Single bed</option>
                                <option>Double bed</option>
                                <option>Twin XL bed</option>
                                <option>Quad Bed</option>
                                <option>Executive Suite</option>
                                <option>Bunk Bed</option>
                              </select></div>
                            <div class="col-6 col-sm-4"><label class="mb-1 text-body-highlight fw-bold" for="adult">Adult</label>
                              <div class="input-group" data-quantity="data-quantity"><button class="btn border px-3 bg-body-emphasis bg-body-hover lh-1" data-type="minus"><span class="fa-solid fa-minus"></span></button><input class="form-control input-spin-none text-center" id="adult" type="number" value="2"><button class="btn border px-3 bg-body-emphasis bg-body-hover lh-1" data-type="plus"><span class="fa-solid fa-plus"></span></button></div>
                            </div>
                            <div class="col-6 col-sm-4"><label class="mb-1 text-body-highlight fw-bold" for="child-allow">Children allowed</label>
                              <div class="input-group" data-quantity="data-quantity"><button class="btn border px-3 bg-body-emphasis bg-body-hover lh-1" data-type="minus"><span class="fa-solid fa-minus"></span></button><input class="form-control input-spin-none text-center" id="child-allow" type="number" value="2"><button class="btn border px-3 bg-body-emphasis bg-body-hover lh-1" data-type="plus"><span class="fa-solid fa-plus"></span></button></div>
                            </div>
                            <div class="col-6 col-sm-4"><label class="mb-1 text-body-highlight fw-bold" for="number-of-bed">Number of bed</label>
                              <div class="input-group" data-quantity="data-quantity"><button class="btn border px-3 bg-body-emphasis bg-body-hover lh-1" data-type="minus"><span class="fa-solid fa-minus"></span></button><input class="form-control input-spin-none text-center" id="number-of-bed" type="number" value="2"><button class="btn border px-3 bg-body-emphasis bg-body-hover lh-1" data-type="plus"><span class="fa-solid fa-plus"></span></button></div>
                            </div>
                            <div class="col-6 col-sm-4"><label class="mb-1 text-body-highlight fw-bold" for="bathroom">Bathroom</label>
                              <div class="input-group" data-quantity="data-quantity"><button class="btn border px-3 bg-body-emphasis bg-body-hover lh-1" data-type="minus"><span class="fa-solid fa-minus"></span></button><input class="form-control input-spin-none text-center" id="bathroom" type="number" value="2"><button class="btn border px-3 bg-body-emphasis bg-body-hover lh-1" data-type="plus"><span class="fa-solid fa-plus"></span></button></div>
                            </div>
                            <div class="col-6 col-sm-4"><label class="mb-1 text-body-highlight fw-bold" for="balcony">Balcony</label>
                              <div class="input-group" data-quantity="data-quantity"><button class="btn border px-3 bg-body-emphasis bg-body-hover lh-1" data-type="minus"><span class="fa-solid fa-minus"></span></button><input class="form-control input-spin-none text-center" id="balcony" type="number" value="2"><button class="btn border px-3 bg-body-emphasis bg-body-hover lh-1" data-type="plus"><span class="fa-solid fa-plus"></span></button></div>
                            </div>
                          </div>
                          <div class="row g-3 g-sm-4">
                            <div class="col-6"><label class="mb-1 text-body-highlight fw-bold" for="room-of-this-type">Room of this type</label>
                              <div class="input-group" data-quantity="data-quantity"><button class="btn border px-3 bg-body-emphasis bg-body-hover lh-1" data-type="minus"><span class="fa-solid fa-minus"></span></button><input class="form-control input-spin-none text-center" id="room-of-this-type" type="number" value="2"><button class="btn border px-3 bg-body-emphasis bg-body-hover lh-1" data-type="plus"><span class="fa-solid fa-plus"></span></button></div>
                            </div>
                            <div class="col-6"><label class="mb-1 text-body-highlight fw-bold">Room size (OPT)</label>
                              <div class="input-group"><input class="form-control form-icon-input" id="room-size" type="text" placeholder="Size"><button class="btn px-3 bg-body-emphasis bg-body-hover rounded rounded-start-0 border" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="me-2">sq. m</span><span class="fa-solid fa-chevron-down fs-10"></span></button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                  <li><a class="dropdown-item" href="#!">sq. m</a></li>
                                  <li><a class="dropdown-item" href="#!">sq. ft</a></li>
                                  <li><a class="dropdown-item" href="#!">sq. in</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <h4 class="mt-7 mb-2">Sleeping arrangements</h4>
                          <p class="mb-4 text-body-tertiary">Sleep well in our comfortable rooms with modern amenities.</p>
                          <div class="row gx-3 gx-sm-4 gy-3">
                            <div class="col-6 col-sm-4"><label class="mb-1 text-body-highlight fw-bold" for="single-bed">Single bed</label>
                              <div class="input-group" data-quantity="data-quantity"><button class="btn border px-3 bg-body-emphasis bg-body-hover lh-1" data-type="minus"><span class="fa-solid fa-minus"></span></button><input class="form-control input-spin-none text-center" id="single-bed" type="number" value="2"><button class="btn border px-3 bg-body-emphasis bg-body-hover lh-1" data-type="plus"><span class="fa-solid fa-plus"></span></button></div>
                            </div>
                            <div class="col-6 col-sm-4"><label class="mb-1 text-body-highlight fw-bold" for="double-bed">Double bed</label>
                              <div class="input-group" data-quantity="data-quantity"><button class="btn border px-3 bg-body-emphasis bg-body-hover lh-1" data-type="minus"><span class="fa-solid fa-minus"></span></button><input class="form-control input-spin-none text-center" id="double-bed" type="number" value="2"><button class="btn border px-3 bg-body-emphasis bg-body-hover lh-1" data-type="plus"><span class="fa-solid fa-plus"></span></button></div>
                            </div>
                            <div class="col-6 col-sm-4"><label class="mb-1 text-body-highlight fw-bold" for="queen-bed">Queen bed</label>
                              <div class="input-group" data-quantity="data-quantity"><button class="btn border px-3 bg-body-emphasis bg-body-hover lh-1" data-type="minus"><span class="fa-solid fa-minus"></span></button><input class="form-control input-spin-none text-center" id="queen-bed" type="number" value="2"><button class="btn border px-3 bg-body-emphasis bg-body-hover lh-1" data-type="plus"><span class="fa-solid fa-plus"></span></button></div>
                            </div>
                            <div class="col-6 col-sm-4"><label class="mb-1 text-body-highlight fw-bold" for="king-bed">King bed</label>
                              <div class="input-group" data-quantity="data-quantity"><button class="btn border px-3 bg-body-emphasis bg-body-hover lh-1" data-type="minus"><span class="fa-solid fa-minus"></span></button><input class="form-control input-spin-none text-center" id="king-bed" type="number" value="2"><button class="btn border px-3 bg-body-emphasis bg-body-hover lh-1" data-type="plus"><span class="fa-solid fa-plus"></span></button></div>
                            </div>
                            <div class="col-6 col-sm-4"><label class="mb-1 text-body-highlight fw-bold" for="sofa-bed">Sofa bed</label>
                              <div class="input-group" data-quantity="data-quantity"><button class="btn border px-3 bg-body-emphasis bg-body-hover lh-1" data-type="minus"><span class="fa-solid fa-minus"></span></button><input class="form-control input-spin-none text-center" id="sofa-bed" type="number" value="2"><button class="btn border px-3 bg-body-emphasis bg-body-hover lh-1" data-type="plus"><span class="fa-solid fa-plus"></span></button></div>
                            </div>
                            <div class="col-6 col-sm-4"><label class="mb-1 text-body-highlight fw-bold" for="extra-bed">Extra bed</label>
                              <div class="input-group" data-quantity="data-quantity"><button class="btn border px-3 bg-body-emphasis bg-body-hover lh-1" data-type="minus"><span class="fa-solid fa-minus"></span></button><input class="form-control input-spin-none text-center" id="extra-bed" type="number" value="2"><button class="btn border px-3 bg-body-emphasis bg-body-hover lh-1" data-type="plus"><span class="fa-solid fa-plus"></span></button></div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" role="tabpanel" aria-labelledby="add-room-wizard-tab2" id="add-room-wizard-tab2">
                    <div class="row g-0">
                      <div class="col-xxl-8">
                        <form id="addPropertyWizardForm2" data-wizard-form="2">
                          <h3 class="mb-6">Pricing</h3>
                          <h4 class="mb-2">Base price per night</h4>
                          <p class="mb-5 text-body-tertiary">Get a great value stay with us, starting at our base price per night.</p>
                          <div class="nav nav-tabs mb-2" id="day-week-pricing" role="tablist">
                            <div class="form-check form-check-inline me-3"><input class="form-check-input active" type="radio" id="all-day-tab" name="dayWeekPricing" checked="checked" data-bs-toggle="tab" data-bs-target="#allDayPricing" aria-controls="allDayPricing" aria-selected="true"><label class="form-check-label" for="all-day-tab">Across all days</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" id="day-of-week-tab" name="dayWeekPricing" data-bs-toggle="tab" data-bs-target="#dayOfWeekPricing" aria-controls="dayOfWeekPricing" aria-selected="true"><label class="form-check-label" for="day-of-week-tab">By day of week</label></div>
                          </div>
                          <div class="tab-content">
                            <div class="tab-pane fade show active" id="allDayPricing" role="tabpanel" aria-labelledby="all-day-tab" tabindex="0">
                              <div class="row gx-2 w-sm-60">
                                <div class="col-8">
                                  <div class="form-floating"><input class="form-control" type="text" name="room-price" id="room-price" placeholder="Room price"><label for="room-price">Room price</label></div>
                                </div>
                                <div class="col-4">
                                  <div class="form-floating"><select class="form-select" name="room-price-currency" id="room-price-currency">
                                      <option value="1">USD</option>
                                      <option value="2">EUR</option>
                                      <option value="2">BDT</option>
                                    </select><label for="room-price-currency">Currency</label></div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="dayOfWeekPricing" role="tabpanel" aria-labelledby="day-of-week-tab" tabindex="0">
                              <div class="card bg-body-highlight">
                                <div class="card-body">
                                  <div class="row gx-2 justify-content-between">
                                    <div class="col col-sm-auto"><label class="mb-1 text-body-highlight fw-bold fs-9" for="date">Date</label>
                                      <div class="form-icon-container"><input class="form-control datetimepicker form-icon-input" id="date" type="text" placeholder="Start date" data-options='{"disableMobile":true,"mode":"range","minDate":"today","dateFormat":"d-m-y"}'><span class="fa-solid fa-calendar-alt form-icon fs-9 text-body-tertiary" data-fa-transform="up-1"></span></div>
                                    </div>
                                    <div class="col-auto"><label class="mb-1 text-body-highlight fw-bold fs-9" for="day-of-week-currency">Currency</label><select class="form-select" name="day-of-week-currency" id="day-of-week-currency">
                                        <option value="1">USD</option>
                                        <option value="2">EUR</option>
                                        <option value="2">BDT</option>
                                      </select></div>
                                  </div>
                                  <hr class="mb-2">
                                  <div class="row g-2">
                                    <div class="col-4 col-sm"><label class="mb-1 text-body-highlight fw-bold fs-9" for="sunday">Sunday</label><input class="form-control input-spin-none" id="sunday" type="number" value="100"></div>
                                    <div class="col-4 col-sm"><label class="mb-1 text-body-highlight fw-bold fs-9" for="monday">Monday</label><input class="form-control input-spin-none" id="monday" type="number" value="100"></div>
                                    <div class="col-4 col-sm"><label class="mb-1 text-body-highlight fw-bold fs-9" for="tuesday">Tuesday</label><input class="form-control input-spin-none" id="tuesday" type="number" value="100"></div>
                                    <div class="col-4 col-sm"><label class="mb-1 text-body-highlight fw-bold fs-9" for="wednesday">Wednesday</label><input class="form-control input-spin-none" id="wednesday" type="number" value="100"></div>
                                    <div class="col-4 col-sm"><label class="mb-1 text-body-highlight fw-bold fs-9" for="thursday">Thursday</label><input class="form-control input-spin-none" id="thursday" type="number" value="100"></div>
                                    <div class="col-4 col-sm"><label class="mb-1 text-body-highlight fw-bold fs-9" for="friday">Friday</label><input class="form-control input-spin-none" id="friday" type="number" value="100"></div>
                                    <div class="col-4 col-sm"><label class="mb-1 text-body-highlight fw-bold fs-9" for="saturday">Saturday</label><input class="form-control input-spin-none" id="saturday" type="number" value="100"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div><label class="mb-2 mt-5 lh-1 text-body-highlight fw-bold">How many people are included in the base rate?</label>
                          <div class="form-floating w-sm-60"><select class="form-select" name="people-select" id="people-select">
                              <option value="1">05 People</option>
                              <option value="2">10 People</option>
                              <option value="2">15 People</option>
                            </select><label for="people-select">Select</label></div>
                          <div class="d-flex align-items-center gap-2 mt-7"><label class="fs-7 fw-bold text-body-emphasis" for="extraBedSwitch">Extra bed option</label>
                            <div class="form-check form-switch mb-0"><input class="form-check-input" id="extraBedSwitch" type="checkbox" role="button" data-bs-toggle="collapse" data-bs-target="#extraBedCollapse" aria-expanded="false" aria-controls="extraBedCollapse" aria-pressed="true"></div>
                          </div>
                          <p class="fs-9 text-body-tertiary mb-0">Can you provide extra bed</p>
                          <div class="collapse" id="extraBedCollapse">
                            <div class="mt-4">
                              <div class="row gx-3">
                                <div class="col-6 col-sm-4 col-xxl-5"><label class="mb-1 text-body-highlight fw-bold" for="number-of-bed-pricing">Number of bed</label>
                                  <div class="input-group gap-1" data-quantity="data-quantity"><button class="btn btn-phoenix-primary px-3 bg-body-emphasis bg-body-hover rounded" data-type="minus">-</button><input class="form-control flex-1 border-translucent input-spin-none text-center rounded" id="number-of-bed-pricing" type="number" value="2"><button class="btn btn-phoenix-primary px-3 bg-body-emphasis bg-body-hover rounded" data-type="plus">+</button></div>
                                </div>
                                <div class="col-6 col-sm-4 col-xxl-5"><label class="mb-1 text-body-highlight fw-bold" for="pricing-bed-type">Bed type</label><select class="form-select" id="pricing-bed-type">
                                    <option>Twin bed</option>
                                    <option>King bed</option>
                                    <option>Queen bed</option>
                                    <option>Single bed</option>
                                    <option>Double bed</option>
                                    <option>Twin XL bed</option>
                                    <option>Quad Bed</option>
                                    <option>Quad Bed</option>
                                    <option>Executive Suite</option>
                                    <option>Bunk Bed</option>
                                  </select></div>
                              </div>
                              <h5 class="mt-4 mb-3">Check the box(es) if you can accommodate the following guests in extra beds.</h5>
                              <div class="row gx-2 gy-0 align-items-center mb-3">
                                <div class="col-12 col-sm-auto">
                                  <div class="form-check"><input class="form-check-input" type="checkbox" id="age-range-1"><label class="form-check-label text-body-emphasis" for="age-range-1">02-06 year olds</label></div>
                                </div>
                                <div class="col-auto">
                                  <div class="form-floating"><input class="form-control" type="text" name="room-price" id="room-price-1" placeholder="Room price"><label for="room-price-1">Room price</label></div>
                                </div>
                                <div class="col-auto">
                                  <div class="form-floating"><select class="form-select" name="room-price-currency" id="room-price-currency-1">
                                      <option value="1">USD</option>
                                      <option value="2">EUR</option>
                                      <option value="2">BDT</option>
                                    </select><label for="room-price-currency-1">Currency</label></div>
                                </div>
                              </div>
                              <div class="row gx-2 gy-0 align-items-center mb-3">
                                <div class="col-12 col-sm-auto">
                                  <div class="form-check"><input class="form-check-input" type="checkbox" id="age-range-2"><label class="form-check-label text-body-emphasis" for="age-range-2">07-12 year olds</label></div>
                                </div>
                                <div class="col-auto">
                                  <div class="form-floating"><input class="form-control" type="text" name="room-price" id="room-price-2" placeholder="Room price"><label for="room-price-2">Room price</label></div>
                                </div>
                                <div class="col-auto">
                                  <div class="form-floating"><select class="form-select" name="room-price-currency" id="room-price-currency-2">
                                      <option value="1">USD</option>
                                      <option value="2">EUR</option>
                                      <option value="2">BDT</option>
                                    </select><label for="room-price-currency-2">Currency</label></div>
                                </div>
                              </div>
                              <div class="row gx-2 gy-0 align-items-center mb-3">
                                <div class="col-12 col-sm-auto">
                                  <div class="form-check"><input class="form-check-input" type="checkbox" id="age-range-3"><label class="form-check-label text-body-emphasis" for="age-range-3">12-16 year olds</label></div>
                                </div>
                                <div class="col-auto">
                                  <div class="form-floating"><input class="form-control" type="text" name="room-price" id="room-price-3" placeholder="Room price"><label for="room-price-3">Room price</label></div>
                                </div>
                                <div class="col-auto">
                                  <div class="form-floating"><select class="form-select" name="room-price-currency" id="room-price-currency-3">
                                      <option value="1">USD</option>
                                      <option value="2">EUR</option>
                                      <option value="2">BDT</option>
                                    </select><label for="room-price-currency-3">Currency</label></div>
                                </div>
                              </div>
                              <div class="row gx-2 gy-0 align-items-center">
                                <div class="col-12 col-sm-auto">
                                  <div class="form-check"><input class="form-check-input" type="checkbox" id="age-range-4"><label class="form-check-label text-body-emphasis me-5" for="age-range-4">For adults</label></div>
                                </div>
                                <div class="col-auto">
                                  <div class="form-floating"><input class="form-control" type="text" name="room-price" id="room-price-4" placeholder="Room price"><label for="room-price-4">Room price</label></div>
                                </div>
                                <div class="col-auto">
                                  <div class="form-floating"><select class="form-select" name="room-price-currency" id="room-price-currency-4">
                                      <option value="1">USD</option>
                                      <option value="2">EUR</option>
                                      <option value="2">BDT</option>
                                    </select><label for="room-price-currency-4">Currency</label></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h4 class="mb-2 mt-7">Breakfast</h4>
                          <p class="mb-4 text-body-tertiary">Do you own multiple hotels, or are you part of a property management company or group?</p>
                          <div class="nav nav-tabs mb-2" id="breakfastTab" role="tablist">
                            <div class="form-check form-check-inline me-3"><input class="form-check-input active" type="radio" id="breakfast-included-tab" name="breakfast-radio" checked="checked" data-bs-toggle="tab" data-bs-target="#breakfastInCluded" aria-controls="breakfastInCluded" aria-selected="true"><label class="form-check-label" for="breakfast-included-tab">Yes, it's included in the price</label></div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" id="breakfast-not-included-tab" name="breakfast-radio" data-bs-toggle="tab" data-bs-target="#breakfastNotIncluded" aria-controls="breakfastNotIncluded" aria-selected="true"><label class="form-check-label" for="breakfast-not-included-tab">No</label></div>
                          </div>
                          <div class="tab-content">
                            <div class="tab-pane fade show active w-sm-60" id="breakfastInCluded" role="tabpanel" aria-labelledby="breakfast-included-tab" tabindex="0">
                              <h5 class="text-body-highlight my-4">What type of food is available for breakfast for guests?</h5>
                              <div class="form-floating"><select class="form-select" name="breakfast-type-1" id="breakfast-type-1">
                                  <option value="1">Continental breakfast</option>
                                  <option value="2">Option 2</option>
                                  <option value="2">Option 3</option>
                                </select><label for="breakfast-type-1">Option 1</label></div>
                              <div class="form-floating my-2"><select class="form-select" name="breakfast-type-2" id="breakfast-type-2">
                                  <option value="1">American breakfast</option>
                                  <option value="2">Option 2</option>
                                  <option value="2">Option 3</option>
                                </select><label for="breakfast-type-2">Option 2</label></div>
                              <div class="form-floating"><select class="form-select" name="breakfast-type-3" id="breakfast-type-3">
                                  <option value="1">Option 1</option>
                                  <option value="2">Option 2</option>
                                  <option value="2">Option 3</option>
                                </select><label for="breakfast-type-3">Option 3</label></div>
                              <div class="text-center mt-4"><a class="fw-bold fs-9" href="#!"><span class="fa-solid fa-plus me-2"></span>Add more</a></div>
                            </div>
                            <div class="tab-pane" id="breakfastNotIncluded" role="tabpanel" aria-labelledby="breakfast-not-included-tab" tabindex="0"></div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" role="tabpanel" aria-labelledby="add-room-wizard-tab3" id="add-room-wizard-tab3">
                    <div class="row g-0">
                      <div class="col-xxl-8">
                        <form id="addPropertyWizardForm3" novalidate="novalidate" data-wizard-form="3">
                          <div class="d-sm-flex flex-between-center gap-3">
                            <h3 class="mb-4 mb-sm-0">Amenities</h3>
                            <div class="row g-3">
                              <div class="col-sm-auto flex-sm-fill">
                                <div class="form-floating"><input class="form-control" type="text" name="add-room-wizard-search-amenities" id="add-room-wizardwizard-search-amenities" placeholder="Search amenities" value=""><label for="add-room-wizardwizard-search-amenities">Search amenities</label><span class="fa-solid fa-search position-absolute text-body-quaternary fs-9 end-0 top-0 mt-3 me-3" data-fa-transform="down-2"></span></div>
                              </div>
                              <div class="col-sm-auto"><button class="btn btn-phoenix-primary w-100 h-100 fs-8"><span class="fa-solid fa-plus me-2"></span>Add amenity</button></div>
                            </div>
                          </div>
                          <div class="accordion-button-arrow-icon accordion mt-2" id="generalAmenitiesAccordion">
                            <div class="accordion-item px-0 py-3">
                              <h5 class="accordion-header"><button class="accordion-button py-0 text-body-highlight" type="button" data-bs-toggle="collapse" data-bs-target="#popularAmenities" aria-expanded="true" aria-controls="popularAmenities"><span class="circle-icon-item border border-primary text-primary me-3"><span class="fa-solid fa-fire"></span></span><span class="flex-1">Popular amenities</span></button></h5>
                              <div class="accordion-collapse collapse ms-md-9 show" id="popularAmenities" data-bs-parent="#generalAmenitiesAccordion">
                                <div class="form-price-tier border p-3 rounded-2 my-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="wifi" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="wifi">Wifi</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="wifi-free" name="Wifi-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="wifi-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="wifi-paid" name="Wifi-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="wifi-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="wifi-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="wifi-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="wifi-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="wifi-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="wifi-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="wifi-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="breakfast" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="breakfast">Breakfast</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="breakfast-free" name="Breakfast-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="breakfast-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="breakfast-paid" name="Breakfast-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="breakfast-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="breakfast-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="breakfast-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="breakfast-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="breakfast-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="breakfast-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="breakfast-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="gym" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="gym">Gym</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="gym-free" name="Gym-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="gym-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="gym-paid" name="Gym-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="gym-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="gym-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="gym-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="gym-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="gym-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="gym-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="gym-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="swimming" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="swimming">Swimming pool</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="swimming-free" name="Swimming pool-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="swimming-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="swimming-paid" name="Swimming pool-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="swimming-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="swimming-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="swimming-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="swimming-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="swimming-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="swimming-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="swimming-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="in-room" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="in-room">In-room coffee/tea</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="in-room-free" name="In-room coffee/tea-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="in-room-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="in-room-paid" name="In-room coffee/tea-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="in-room-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="in-room-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="in-room-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="in-room-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="in-room-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="in-room-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="in-room-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="daily-housekeeping" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="daily-housekeeping">Daily housekeeping</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="daily-housekeeping-free" name="Daily housekeeping-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="daily-housekeeping-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="daily-housekeeping-paid" name="Daily housekeeping-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="daily-housekeeping-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="daily-housekeeping-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="daily-housekeeping-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="daily-housekeeping-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="daily-housekeeping-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="daily-housekeeping-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="daily-housekeeping-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="bar" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="bar">Bar / Lounge</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="bar-free" name="Bar / Lounge-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="bar-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="bar-paid" name="Bar / Lounge-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="bar-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="bar-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="bar-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="bar-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="bar-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="bar-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="bar-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="laundry" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="laundry">Laundry</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="laundry-free" name="Laundry-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="laundry-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="laundry-paid" name="Laundry-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="laundry-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="laundry-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="laundry-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="laundry-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="laundry-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="laundry-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="laundry-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="newspaper" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="newspaper">Newspaper</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="newspaper-free" name="Newspaper-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="newspaper-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="newspaper-paid" name="Newspaper-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="newspaper-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="newspaper-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="newspaper-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="newspaper-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="newspaper-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="newspaper-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="newspaper-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="bicycle" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="bicycle">Bicycle</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="bicycle-free" name="Bicycle-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="bicycle-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="bicycle-paid" name="Bicycle-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="bicycle-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="bicycle-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="bicycle-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="bicycle-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="bicycle-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="bicycle-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="bicycle-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="air" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="air">Air conditioning</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="air-free" name="Air conditioning-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="air-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="air-paid" name="Air conditioning-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="air-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="air-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="air-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="air-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="air-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="air-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="air-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="games" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="games">Games room</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="games-free" name="Games room-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="games-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="games-paid" name="Games room-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="games-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="games-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="games-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="games-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="games-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="games-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="games-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="beach" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="beach">Beach view</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="beach-free" name="Beach view-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="beach-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="beach-paid" name="Beach view-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="beach-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="beach-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="beach-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="beach-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="beach-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="beach-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="beach-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item px-0 py-3">
                              <h5 class="accordion-header"><button class="accordion-button py-0 text-body-highlight collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#foodAndDrink" aria-expanded="false" aria-controls="foodAndDrink"><span class="circle-icon-item border border-primary text-primary me-3"><span class="fa-solid fa-utensils"></span></span><span class="flex-1 me-2">Food & Drink</span></button></h5>
                              <div class="accordion-collapse collapse ms-md-9" id="foodAndDrink" data-bs-parent="#generalAmenitiesAccordion">
                                <div class="form-price-tier border p-3 rounded-2 my-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="restaurants" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="restaurants">Restaurants</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="restaurants-free" name="Restaurants-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="restaurants-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="restaurants-paid" name="Restaurants-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="restaurants-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="restaurants-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="restaurants-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="restaurants-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="restaurants-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="restaurants-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="restaurants-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="bars" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="bars">Bars</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="bars-free" name="Bars-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="bars-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="bars-paid" name="Bars-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="bars-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="bars-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="bars-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="bars-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="bars-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="bars-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="bars-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="in-room-dining" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="in-room-dining">In-Room Dining</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="in-room-dining-free" name="In-Room Dining-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="in-room-dining-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="in-room-dining-paid" name="In-Room Dining-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="in-room-dining-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="in-room-dining-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="in-room-dining-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="in-room-dining-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="in-room-dining-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="in-room-dining-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="in-room-dining-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="family-friendly-dining" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="family-friendly-dining">Family-Friendly Dining</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="family-friendly-dining-free" name="Family-Friendly Dining-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="family-friendly-dining-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="family-friendly-dining-paid" name="Family-Friendly Dining-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="family-friendly-dining-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="family-friendly-dining-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="family-friendly-dining-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="family-friendly-dining-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="family-friendly-dining-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="family-friendly-dining-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="family-friendly-dining-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="breakfast-buffet" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="breakfast-buffet">Breakfast Buffet</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="breakfast-buffet-free" name="Breakfast Buffet-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="breakfast-buffet-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="breakfast-buffet-paid" name="Breakfast Buffet-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="breakfast-buffet-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="breakfast-buffet-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="breakfast-buffet-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="breakfast-buffet-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="breakfast-buffet-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="breakfast-buffet-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="breakfast-buffet-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item px-0 py-3">
                              <h5 class="accordion-header"><button class="accordion-button py-0 text-body-highlight collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#outdoorAndView" aria-expanded="false" aria-controls="outdoorAndView"><span class="circle-icon-item border border-primary text-primary me-3"><span class="fa-solid fa-umbrella-beach"></span></span><span class="flex-1 me-2">Outdoor & View</span></button></h5>
                              <div class="accordion-collapse collapse ms-md-9" id="outdoorAndView" data-bs-parent="#generalAmenitiesAccordion">
                                <div class="form-price-tier border p-3 rounded-2 my-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="garden-or-courtyard" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="garden-or-courtyard">Garden or Courtyard</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="garden-or-courtyard-free" name="Garden or Courtyard-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="garden-or-courtyard-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="garden-or-courtyard-paid" name="Garden or Courtyard-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="garden-or-courtyard-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="garden-or-courtyard-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="garden-or-courtyard-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="garden-or-courtyard-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="garden-or-courtyard-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="garden-or-courtyard-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="garden-or-courtyard-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="scenic-views" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="scenic-views">Scenic Views</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="scenic-views-free" name="Scenic Views-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="scenic-views-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="scenic-views-paid" name="Scenic Views-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="scenic-views-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="scenic-views-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="scenic-views-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="scenic-views-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="scenic-views-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="scenic-views-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="scenic-views-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="sunbathing-areas" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="sunbathing-areas">Sunbathing Areas</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="sunbathing-areas-free" name="Sunbathing Areas-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="sunbathing-areas-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="sunbathing-areas-paid" name="Sunbathing Areas-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="sunbathing-areas-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="sunbathing-areas-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="sunbathing-areas-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="sunbathing-areas-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="sunbathing-areas-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="sunbathing-areas-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="sunbathing-areas-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="outdoor-lounge-areas" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="outdoor-lounge-areas">Outdoor Lounge Areas</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="outdoor-lounge-areas-free" name="Outdoor Lounge Areas-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="outdoor-lounge-areas-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="outdoor-lounge-areas-paid" name="Outdoor Lounge Areas-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="outdoor-lounge-areas-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="outdoor-lounge-areas-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="outdoor-lounge-areas-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="outdoor-lounge-areas-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="outdoor-lounge-areas-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="outdoor-lounge-areas-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="outdoor-lounge-areas-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item px-0 py-3">
                              <h5 class="accordion-header"><button class="accordion-button py-0 text-body-highlight collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intertainment" aria-expanded="false" aria-controls="intertainment"><span class="circle-icon-item border border-primary text-primary me-3"><span class="fa-solid fa-cart-shopping"></span></span><span class="flex-1 me-2">Entertainment & Family Services</span></button></h5>
                              <div class="accordion-collapse collapse ms-md-9" id="intertainment" data-bs-parent="#generalAmenitiesAccordion">
                                <div class="form-price-tier border p-3 rounded-2 my-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="game-room" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="game-room">Game Room</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="game-room-free" name="Game Room-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="game-room-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="game-room-paid" name="Game Room-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="game-room-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="game-room-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="game-room-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="game-room-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="game-room-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="game-room-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="game-room-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="play-area" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="play-area">Children's Play Area</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="play-area-free" name="Children's Play Area-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="play-area-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="play-area-paid" name="Children's Play Area-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="play-area-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="play-area-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="play-area-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="play-area-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="play-area-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="play-area-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="play-area-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="sports-facilities" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="sports-facilities">Sports Facilities</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="sports-facilities-free" name="Sports Facilities-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="sports-facilities-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="sports-facilities-paid" name="Sports Facilities-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="sports-facilities-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="sports-facilities-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="sports-facilities-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="sports-facilities-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="sports-facilities-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="sports-facilities-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="sports-facilities-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="babysitting-services" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="babysitting-services">Babysitting Services</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="babysitting-services-free" name="Babysitting Services-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="babysitting-services-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="babysitting-services-paid" name="Babysitting Services-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="babysitting-services-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="babysitting-services-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="babysitting-services-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="babysitting-services-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="babysitting-services-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="babysitting-services-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="babysitting-services-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item px-0 py-3">
                              <h5 class="accordion-header"><button class="accordion-button py-0 text-body-highlight collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mediaAndTechnology" aria-expanded="false" aria-controls="mediaAndTechnology"><span class="circle-icon-item border border-primary text-primary me-3"><span class="fa-solid fa-video"></span></span><span class="flex-1 me-2">Media & Technology</span></button></h5>
                              <div class="accordion-collapse collapse ms-md-9" id="mediaAndTechnology" data-bs-parent="#generalAmenitiesAccordion">
                                <div class="form-price-tier border p-3 rounded-2 my-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="high-speed-internet" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="high-speed-internet">High-Speed Internet</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="high-speed-internet-free" name="High-Speed Internet-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="high-speed-internet-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="high-speed-internet-paid" name="High-Speed Internet-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="high-speed-internet-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="high-speed-internet-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="high-speed-internet-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="high-speed-internet-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="high-speed-internet-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="high-speed-internet-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="high-speed-internet-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="business-center" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="business-center">Business Center</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="business-center-free" name="Business Center-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="business-center-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="business-center-paid" name="Business Center-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="business-center-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="business-center-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="business-center-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="business-center-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="business-center-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="business-center-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="business-center-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="video-conferencing" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="video-conferencing">Video Conferencing Facilities</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="video-conferencing-free" name="Video Conferencing Facilities-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="video-conferencing-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="video-conferencing-paid" name="Video Conferencing Facilities-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="video-conferencing-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="video-conferencing-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="video-conferencing-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="video-conferencing-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="video-conferencing-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="video-conferencing-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="video-conferencing-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="vr" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="vr">Virtual Reality (VR) Experiences</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="vr-free" name="Virtual Reality (VR) Experiences-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="vr-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="vr-paid" name="Virtual Reality (VR) Experiences-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="vr-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="vr-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="vr-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="vr-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="vr-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="vr-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="vr-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item px-0 py-3">
                              <h5 class="accordion-header"><button class="accordion-button py-0 text-body-highlight collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accessibility" aria-expanded="false" aria-controls="accessibility"><span class="circle-icon-item border border-primary text-primary me-3"><span class="fa-solid fa-universal-access"></span></span><span class="flex-1 me-2">Accessibility</span></button></h5>
                              <div class="accordion-collapse collapse ms-md-9" id="accessibility" data-bs-parent="#generalAmenitiesAccordion">
                                <div class="form-price-tier border p-3 rounded-2 my-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="accessible-common-areas" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="accessible-common-areas">Accessible Common Areas</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="accessible-common-areas-free" name="Accessible Common Areas-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="accessible-common-areas-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="accessible-common-areas-paid" name="Accessible Common Areas-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="accessible-common-areas-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="accessible-common-areas-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="accessible-common-areas-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="accessible-common-areas-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="accessible-common-areas-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="accessible-common-areas-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="accessible-common-areas-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="accessible-parking-spaces" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="accessible-parking-spaces">Accessible Parking Spaces</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="accessible-parking-spaces-free" name="Accessible Parking Spaces-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="accessible-parking-spaces-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="accessible-parking-spaces-paid" name="Accessible Parking Spaces-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="accessible-parking-spaces-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="accessible-parking-spaces-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="accessible-parking-spaces-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="accessible-parking-spaces-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="accessible-parking-spaces-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="accessible-parking-spaces-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="accessible-parking-spaces-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2 mb-3" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="accessible-fitness-center" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="accessible-fitness-center">Accessible Fitness Center</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="accessible-fitness-center-free" name="Accessible Fitness Center-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="accessible-fitness-center-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="accessible-fitness-center-paid" name="Accessible Fitness Center-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="accessible-fitness-center-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="accessible-fitness-center-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="accessible-fitness-center-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="accessible-fitness-center-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="accessible-fitness-center-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="accessible-fitness-center-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="accessible-fitness-center-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-price-tier border p-3 rounded-2" data-form-price-tier="data-form-price-tier">
                                  <div class="d-sm-flex align-items-center gap-3">
                                    <div class="form-check form-switch mb-0"><input class="form-check-input" id="accessible-swimmings-pool" type="checkbox" data-price-toggle="data-price-toggle"><label class="form-check-label fs-8 fw-bold text-body ms-2" for="accessible-swimmings-pool">Accessible Swimming Pool</label></div>
                                    <div class="pricings ms-auto mt-2 mt-sm-0">
                                      <div class="form-check form-check-inline me-3 mb-0"><input class="form-check-input" type="radio" id="accessible-swimmings-pool-free" name="Accessible Swimming Pool-radio" value="free" data-pricing="data-pricing"><label class="form-check-label" for="accessible-swimmings-pool-free">Free</label></div>
                                      <div class="form-check form-check-inline me-0 mb-0"><input class="form-check-input" type="radio" id="accessible-swimmings-pool-paid" name="Accessible Swimming Pool-radio" value="paid" data-pricing="data-pricing"><label class="form-check-label" for="accessible-swimmings-pool-paid">Paid</label></div>
                                    </div>
                                  </div>
                                  <div class="collapse" data-pricing-collapse="data-pricing-collapse">
                                    <div class="p-4 bg-primary-subtle rounded-3 mt-3">
                                      <div class="form-check mb-4"><input class="form-check-input" id="accessible-swimmings-pool-option1" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="accessible-swimmings-pool-option1">Option 1</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="accessible-swimmings-pool-option2" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="accessible-swimmings-pool-option2">Option 2</label></div>
                                      <div class="form-check mb-4"><input class="form-check-input" id="accessible-swimmings-pool-option3" type="checkbox"><label class="form-check-label fw-normal fs-8 fw-semibold" for="accessible-swimmings-pool-option3">Option 3</label></div><button class="btn btn-link p-0"><span class="fa-solid fa-plus me-2"></span>Additional Condition</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" role="tabpanel" aria-labelledby="add-room-wizard-tab4" id="add-room-wizard-tab4">
                    <div class="row g-0">
                      <div class="col-xxl-8">
                        <form id="addPropertyWizardForm4" novalidate="novalidate" data-wizard-form="4">
                          <h3 class="mb-6">Add room picture</h3>
                          <div class="dropzone dropzone-multiple p-0 mb-5" id="my-awesome-dropzone" data-dropzone="data-dropzone">
                            <div class="fallback"><input name="file" type="file" multiple="multiple"></div>
                            <div class="dz-message text-body-tertiary text-opacity-85" data-dz-message="data-dz-message">Drag your photo here<span class="text-body-secondary px-1">or</span><button class="btn btn-link p-0" type="button">Browse from device</button><br><img class="mt-3 me-2" src="{{ asset('assets/img/icons/image-icon.png') }}" width="40" alt=""></div>
                            <div class="dz-preview d-flex flex-wrap mt-3">
                              <div class="rounded-2 overflow-hidden me-2 mb-2 position-relative" style="height:140px;width:200px;"><img class="w-100 h-100 object-fit-cover" src="{{ asset('assets/img/products/23.png') }}" alt="..." data-dz-thumbnail="data-dz-thumbnail"><button class="btn dropdown-toggle dropdown-caret-none px-3 text-body bg-body dz-remove w-auto h-auto py-0 border" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="top: 16px; right: 16px"><span class="fa-solid fa-ellipsis"></span></button>
                                <ul class="dropdown-menu dropdown-menu-end py-1">
                                  <li><a class="dropdown-item" href="#!" data-dz-remove="data-dz-remove">Remove</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" role="tabpanel" aria-labelledby="add-room-wizard-tab5" id="add-room-wizard-tab5">
                    <div class="row g-0">
                      <div class="col-xxl-10">
                        <h3 class="mb-2">We’re building your listing</h3>
                        <p class="mb-5 text-body-tertiary">We're working on getting your property set up and ready for guests. Stay tuned for updates and start accepting bookings soon!</p>
                        <div class="alert alert-subtle-success alert-dismissible fade show mb-5" role="alert">
                          <p class="mb-0 flex-1 fw-semibold fs-9 fs-sm-8">Congratulations on your successful listing! Join a community of hospitality professionals as a host. Your hard work will turn your home into a sought-after destination. We anticipate hearing about your achievements.</p><button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <h4 class="text-body mb-3"> Room information<a class="fs-9 mx-2" href="#!">Edit</a></h4>
                        <div class="row gx-7 gx-xl-4 gx-xxl-7">
                          <div class="col-md-7 col-xxl-6">
                            <table class="table table-borderless mb-0">
                              <tr>
                                <th class="p-0" style="width: 155px"></th>
                                <th class="p-0" style="width: 16px"></th>
                                <th class="p-0"></th>
                              </tr>
                              <tr>
                                <td class="text-nowrap py-2">
                                  <div class="d-flex gap-2"><span class="fs-9 fa-solid fa-border-all"></span>
                                    <h5 class="mb-0">Room type</h5>
                                  </div>
                                </td>
                                <td class="py-2 pe-1 px-sm-3">
                                  <h5 class="fw-normal mb-0">:</h5>
                                </td>
                                <td class="py-2">
                                  <h5 class="fw-normal mb-0 text-body-secondary">Presidential suite</h5>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-nowrap py-2">
                                  <div class="d-flex gap-2"><span class="fs-9 fa-solid fa-file-pen"></span>
                                    <h5 class="mb-0">Room name</h5>
                                  </div>
                                </td>
                                <td class="py-2 pe-1 px-sm-3">
                                  <h5 class="fw-normal mb-0">:</h5>
                                </td>
                                <td class="py-2">
                                  <h5 class="fw-normal mb-0 text-body-secondary">Kempinski Jakarta</h5>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-nowrap py-2">
                                  <div class="d-flex gap-2"><span class="fs-9 fa-solid fa-file-pen"></span>
                                    <h5 class="mb-0">Bedroom’s</h5>
                                  </div>
                                </td>
                                <td class="py-2 pe-1 px-sm-3">
                                  <h5 class="fw-normal mb-0">:</h5>
                                </td>
                                <td class="py-2">
                                  <h5 class="fw-normal mb-0 text-body-secondary">01</h5>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-nowrap py-2">
                                  <div class="d-flex gap-2"><span class="fs-9 fa-solid fa-bed"></span>
                                    <h5 class="mb-0">Number of beds</h5>
                                  </div>
                                </td>
                                <td class="py-2 pe-1 px-sm-3">
                                  <h5 class="fw-normal mb-0">:</h5>
                                </td>
                                <td class="py-2">
                                  <h5 class="fw-normal mb-0 text-body-secondary">01</h5>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-nowrap py-2">
                                  <div class="d-flex gap-2"><span class="fs-9 fa-solid fa-person-shelter"></span>
                                    <h5 class="mb-0">Room size</h5>
                                  </div>
                                </td>
                                <td class="py-2 pe-1 px-sm-3">
                                  <h5 class="fw-normal mb-0">:</h5>
                                </td>
                                <td class="py-2">
                                  <h5 class="fw-normal mb-0 text-body-secondary">2.13 x 3.66 sq.m</h5>
                                </td>
                              </tr>
                            </table>
                          </div>
                          <div class="col-md-5 col-xxl-6">
                            <table class="table table-borderless mb-0">
                              <tr>
                                <th class="p-0" style="width: 155px"></th>
                                <th class="p-0" style="width: 16px"></th>
                                <th class="p-0"></th>
                              </tr>
                              <tr>
                                <td class="text-nowrap py-2">
                                  <div class="d-flex gap-2"><span class="fs-9 fa-solid fa-user"></span>
                                    <h5 class="mb-0">Adults</h5>
                                  </div>
                                </td>
                                <td class="py-2 pe-1 px-sm-3">
                                  <h5 class="fw-normal mb-0">:</h5>
                                </td>
                                <td class="py-2">
                                  <h5 class="fw-normal mb-0 text-body-secondary">02</h5>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-nowrap py-2">
                                  <div class="d-flex gap-2"><span class="fs-9 fa-solid fa-children"></span>
                                    <h5 class="mb-0">Childs</h5>
                                  </div>
                                </td>
                                <td class="py-2 pe-1 px-sm-3">
                                  <h5 class="fw-normal mb-0">:</h5>
                                </td>
                                <td class="py-2">
                                  <h5 class="fw-normal mb-0 text-body-secondary">01</h5>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-nowrap py-2">
                                  <div class="d-flex gap-2"><span class="fs-9 fa-solid fa-bath"></span>
                                    <h5 class="mb-0">Bathroom’s</h5>
                                  </div>
                                </td>
                                <td class="py-2 pe-1 px-sm-3">
                                  <h5 class="fw-normal mb-0">:</h5>
                                </td>
                                <td class="py-2">
                                  <h5 class="fw-normal mb-0 text-body-secondary">02</h5>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-nowrap py-2">
                                  <div class="d-flex gap-2"><span class="fs-9 fa-solid fa-person-booth"></span>
                                    <h5 class="mb-0">Balcony</h5>
                                  </div>
                                </td>
                                <td class="py-2 pe-1 px-sm-3">
                                  <h5 class="fw-normal mb-0">:</h5>
                                </td>
                                <td class="py-2">
                                  <h5 class="fw-normal mb-0 text-body-secondary">01</h5>
                                </td>
                              </tr>
                            </table>
                          </div>
                        </div>
                        <h4 class="text-body mb-4 mt-5">Pricing<a class="fs-9 mx-2" href="#!">Edit</a></h4>
                        <h6 class="mb-2">Across all days</h6>
                        <h3 class="mb-0">$894</h3>
                        <h4 class="text-body mb-3 mt-7">Amenities<a class="fs-9 mx-2" href="#!">Edit</a></h4>
                        <div class="row gx-7 gx-xl-4 gx-xxl-7">
                          <div class="col-md-7 col-xxl-6">
                            <table class="table table-borderless mb-0">
                              <tr>
                                <th class="p-0" style="width: 155px"></th>
                                <th class="p-0" style="width: 16px"></th>
                                <th class="p-0"></th>
                              </tr>
                              <tr>
                                <td class="text-nowrap py-2">
                                  <div class="d-flex gap-2"><span class="fs-9 fa-solid fa-wifi"></span>
                                    <h5 class="mb-0">Wifi</h5>
                                  </div>
                                </td>
                                <td class="py-2 pe-1 px-sm-3">
                                  <h5 class="fw-normal mb-0">:</h5>
                                </td>
                                <td class="py-2">
                                  <h5 class="fw-normal mb-0 text-body-secondary">Free</h5>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-nowrap py-2">
                                  <div class="d-flex gap-2"><span class="fs-9 fa-solid fa-utensils"></span>
                                    <h5 class="mb-0">Restaurant</h5>
                                  </div>
                                </td>
                                <td class="py-2 pe-1 px-sm-3">
                                  <h5 class="fw-normal mb-0">:</h5>
                                </td>
                                <td class="py-2">
                                  <h5 class="fw-normal mb-0 text-body-secondary">Launch &amp; Dinner</h5>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-nowrap py-2">
                                  <div class="d-flex gap-2"><span class="fs-9 fa-solid fa-person-swimming"></span>
                                    <h5 class="mb-0">Pool</h5>
                                  </div>
                                </td>
                                <td class="py-2 pe-1 px-sm-3">
                                  <h5 class="fw-normal mb-0">:</h5>
                                </td>
                                <td class="py-2">
                                  <h5 class="fw-normal mb-0 text-body-secondary">Paid</h5>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-nowrap py-2">
                                  <div class="d-flex gap-2"><span class="fs-9 fa-solid fa-ban-smoking"></span>
                                    <h5 class="mb-0">No smoking</h5>
                                  </div>
                                </td>
                                <td class="py-2 pe-1 px-sm-3">
                                  <h5 class="fw-normal mb-0">:</h5>
                                </td>
                                <td class="py-2">
                                  <h5 class="fw-normal mb-0 text-body-secondary">Available</h5>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-nowrap py-2">
                                  <div class="d-flex gap-2"><span class="fs-9 fa-solid fa-square-parking"></span>
                                    <h5 class="mb-0">Parking</h5>
                                  </div>
                                </td>
                                <td class="py-2 pe-1 px-sm-3">
                                  <h5 class="fw-normal mb-0">:</h5>
                                </td>
                                <td class="py-2">
                                  <h5 class="fw-normal mb-0 text-body-secondary">Paid</h5>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-nowrap py-2">
                                  <div class="d-flex gap-2"><span class="fs-9 fa-solid fa-umbrella-beach"></span>
                                    <h5 class="mb-0">Beach view</h5>
                                  </div>
                                </td>
                                <td class="py-2 pe-1 px-sm-3">
                                  <h5 class="fw-normal mb-0">:</h5>
                                </td>
                                <td class="py-2">
                                  <h5 class="fw-normal mb-0 text-body-secondary">Available</h5>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-nowrap py-2">
                                  <div class="d-flex gap-2"><span class="fs-9 fa-solid fa-person-booth"></span>
                                    <h5 class="mb-0">Balcony</h5>
                                  </div>
                                </td>
                                <td class="py-2 pe-1 px-sm-3">
                                  <h5 class="fw-normal mb-0">:</h5>
                                </td>
                                <td class="py-2">
                                  <h5 class="fw-normal mb-0 text-body-secondary">Sea View</h5>
                                </td>
                              </tr>
                            </table>
                          </div>
                          <div class="col-md-5 col-xxl-6">
                            <table class="table table-borderless mb-0">
                              <tr>
                                <th class="p-0" style="width: 155px"></th>
                                <th class="p-0" style="width: 16px"></th>
                                <th class="p-0"></th>
                              </tr>
                              <tr>
                                <td class="text-nowrap py-2">
                                  <div class="d-flex gap-2"><span class="fs-9 fa-solid fa-wine-glass"></span>
                                    <h5 class="mb-0">Hotel bar</h5>
                                  </div>
                                </td>
                                <td class="py-2 pe-1 px-sm-3">
                                  <h5 class="fw-normal mb-0">:</h5>
                                </td>
                                <td class="py-2">
                                  <h5 class="fw-normal mb-0 text-body-secondary">Paid</h5>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-nowrap py-2">
                                  <div class="d-flex gap-2"><span class="fs-9 fa-solid fa-people-roof"></span>
                                    <h5 class="mb-0">Common areas</h5>
                                  </div>
                                </td>
                                <td class="py-2 pe-1 px-sm-3">
                                  <h5 class="fw-normal mb-0">:</h5>
                                </td>
                                <td class="py-2">
                                  <h5 class="fw-normal mb-0 text-body-secondary">Available</h5>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-nowrap py-2">
                                  <div class="d-flex gap-2"><span class="fs-9 fa-solid fa-table-tennis-paddle-ball"></span>
                                    <h5 class="mb-0">Tennis courts</h5>
                                  </div>
                                </td>
                                <td class="py-2 pe-1 px-sm-3">
                                  <h5 class="fw-normal mb-0">:</h5>
                                </td>
                                <td class="py-2">
                                  <h5 class="fw-normal mb-0 text-body-secondary">Free</h5>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-nowrap py-2">
                                  <div class="d-flex gap-2"><span class="fs-9 fa-solid fa-snowflake"></span>
                                    <h5 class="mb-0">Air conditioning</h5>
                                  </div>
                                </td>
                                <td class="py-2 pe-1 px-sm-3">
                                  <h5 class="fw-normal mb-0">:</h5>
                                </td>
                                <td class="py-2">
                                  <h5 class="fw-normal mb-0 text-body-secondary">Available</h5>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-nowrap py-2">
                                  <div class="d-flex gap-2"><span class="fs-9 fa-solid fa-bath"></span>
                                    <h5 class="mb-0">Bathtub</h5>
                                  </div>
                                </td>
                                <td class="py-2 pe-1 px-sm-3">
                                  <h5 class="fw-normal mb-0">:</h5>
                                </td>
                                <td class="py-2">
                                  <h5 class="fw-normal mb-0 text-body-secondary">Available</h5>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-nowrap py-2">
                                  <div class="d-flex gap-2"><span class="fs-9 fa-solid fa-tv"></span>
                                    <h5 class="mb-0">Flat-screen TV</h5>
                                  </div>
                                </td>
                                <td class="py-2 pe-1 px-sm-3">
                                  <h5 class="fw-normal mb-0">:</h5>
                                </td>
                                <td class="py-2">
                                  <h5 class="fw-normal mb-0 text-body-secondary">Paid</h5>
                                </td>
                              </tr>
                            </table>
                          </div>
                        </div>
                        <h4 class="text-body mb-4 mt-7">Picture<a class="fs-9 mx-2" href="#!">Edit</a></h4>
                        <div class="row g-3">
                          <div class="col-sm-4"><img class="rounded-2 w-100 object-fit-cover" src="{{ asset('assets/img/gallery/59.png') }}" alt="" height="160"></div>
                          <div class="col-sm-4"><img class="rounded-2 w-100 object-fit-cover" src="{{ asset('assets/img/gallery/60.png') }}" alt="" height="160"></div>
                          <div class="col-sm-4"><img class="rounded-2 w-100 object-fit-cover" src="{{ asset('assets/img/gallery/61.png') }}" alt="" height="160"></div>
                          <div class="col-sm-4"><img class="rounded-2 w-100 object-fit-cover" src="{{ asset('assets/img/gallery/62.png') }}" alt="" height="160"></div>
                          <div class="col-sm-4"><img class="rounded-2 w-100 object-fit-cover" src="{{ asset('assets/img/gallery/63.png') }}" alt="" height="160"></div>
                        </div>
                        <div class="mt-6 d-flex flex-wrap gap-2"><button class="btn btn-phoenix-danger" type="button">Discard</button>
                          <button class="btn btn-phoenix-primary" type="button">Save draft</button>
                          <button class="btn btn-primary px-6 px-sm-11" type="submit">Open for Booking</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mt-6 d-flex flex-wrap gap-2" data-wizard-footer="data-wizard-footer"><button class="btn btn-phoenix-danger" type="button">Discard</button>
                  <button class="btn btn-phoenix-primary" type="button">Save draft</button>
                  <button class="btn btn-primary px-6 px-sm-11" type="submit" data-wizard-next-btn="data-wizard-next-btn">Continue</button>
                </div>
              </div>
            </div>
          </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/dropzone/dropzone-min.js') }}"></script>
<script src="{{ asset('vendors/flatpickr/flatpickr.min.js') }}"></script>
@endpush
