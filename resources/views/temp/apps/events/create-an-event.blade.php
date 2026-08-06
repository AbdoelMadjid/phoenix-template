@extends('layouts.vertical')

@section('title', 'Create Event')

@push('styles')
<link href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/choices/choices.min.css') }}" rel="stylesheet">
@endpush

@section('content')
<nav class="mb-3" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
            <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
            <li class="breadcrumb-item active">Default</li>
          </ol>
        </nav>
        <form class="mb-9">
          <div class="row justify-content-between align-items-end g-3 mb-5">
            <div class="col-12 col-sm-auto col-xl-8">
              <h2 class="mb-0">Create an Event</h2>
            </div>
            <div class="col-12 col-sm-auto col-xl-4">
              <div class="d-flex"><button class="btn btn-phoenix-primary px-5 me-2">Save</button><a class="btn btn-primary px-5 w-100 text-nowrap" href="{{ url('event-detail') }}">Publish event</a></div>
            </div>
          </div>
          <div class="row g-5">
            <div class="col-xl-8">
              <div class="row gx-3 gy-4">
                <h4 class="fs-7 mb-0">Event Details</h4>
                <div class="col-sm-6 col-md-12">
                  <div class="form-floating"><input class="form-control" id="floatingEventInput" type="text" placeholder="Event title"><label for="floatingEventInput">Event title</label></div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="form-floating"><select class="form-select" id="floatingSelectTask">
                      <option selected="selected">Select event type</option>
                      <option value="1">technical</option>
                      <option value="2">external</option>
                      <option value="3">organizational</option>
                    </select><label for="floatingSelectTask">type</label></div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="form-floating"><select class="form-select" id="floatingSelectPrivacy">
                      <option selected="selected">Select topic</option>
                      <option value="1">Data select topic One</option>
                      <option value="2">Data select topic Two</option>
                      <option value="3">Data select topic Three</option>
                    </select><label for="floatingSelectPrivacy">topic</label></div>
                </div>
                <div class="col-12 mt-4">
                  <div class="form-check form-check-inline"><input class="form-check-input" id="inlineRadio1" type="radio" name="inlineRadioOptions" value="option1" checked="checked"><label class="form-check-label" for="inlineRadio1">Online</label></div>
                  <div class="form-check form-check-inline"><input class="form-check-input" id="inlineRadio2" type="radio" name="inlineRadioOptions" value="option2"><label class="form-check-label" for="inlineRadio2">Offline</label></div>
                  <div class="form-check form-check-inline"><input class="form-check-input" id="inlineRadio3" type="radio" name="inlineRadioOptions" value="option3"><label class="form-check-label" for="inlineRadio3">Both</label></div>
                </div>
                <div class="col-sm-6 col-md-12 mt-md-0 mt-lg-1">
                  <div class="form-floating"><input class="form-control" id="floatingVenueInput" type="text" placeholder="Venue"><label for="floatingVenueInput">Venue</label></div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="form-floating"><select class="form-select" id="floatingSelectCountry">
                      <option selected="selected">Select Country</option>
                      <option value="1">Country One</option>
                      <option value="2">Country Two</option>
                      <option value="3">Country Three</option>
                    </select><label for="floatingSelectCountry">Country</label></div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="form-floating"><select class="form-select" id="floatingSelectState">
                      <option selected="selected">Select State </option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select><label for="floatingSelectState"> State</label></div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="form-floating"><select class="form-select" id="floatingSelectCity">
                      <option selected="selected">Select city</option>
                      <option value="1">Data Privacy One</option>
                      <option value="2">Data Privacy Two</option>
                      <option value="3">Data Privacy Three</option>
                    </select><label for="floatingSelectCity">City</label></div>
                </div>
                <h4 class="fs-7 mt-7">Schedule</h4>
                <div class="col-sm-6">
                  <div class="flatpickr-input-container">
                    <div class="form-floating"><input class="form-control datetimepicker" id="startDatepicker" type="text" placeholder="start date" data-options='{"disableMobile":true}'><span class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span><label class="ps-6" for="startDatepicker">Start date</label></div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating"><input class="form-control datetimepicker" id="timepickerEvent" type="text" placeholder="H:i" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}'><label for="timepickerEvent">Start Time</label></div>
                </div>
                <div class="col-sm-6">
                  <div class="flatpickr-input-container">
                    <div class="form-floating"><input class="form-control datetimepicker" id="endDatepicker" type="text" placeholder="end date" data-options='{"disableMobile":true}'><span class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span><label class="ps-6" for="endDatepicker">End date</label></div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating"><input class="form-control datetimepicker" id="timepickerEvent2" type="text" placeholder="H:i" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}'><label for="timepickerEvent2">End Time</label></div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating"><select class="form-select" id="floatingSelectTimeZone">
                      <option selected="selected">Select time zone</option>
                      <option value="1">Data Privacy One</option>
                      <option value="2">Data Privacy Two</option>
                      <option value="3">Data Privacy Three</option>
                    </select><label for="floatingSelectTimeZone">Time zone</label></div>
                </div>
                <div class="col-sm-6">
                  <div class="flatpickr-input-container">
                    <div class="form-floating"><input class="form-control datetimepicker" id="datepicker" type="text" placeholder="registration deadline" data-options='{"disableMobile":true}'><label for="datepicker">Registration deadline</label></div>
                  </div>
                </div>
                <div class="col-12 gy-6">
                  <div class="form-floating"><textarea class="form-control" id="floatingProjectDescription" placeholder="Leave a comment here" style="height: 128px"></textarea><label for="floatingProjectDescription">Description</label></div>
                </div>
                <div class="col-sm-6 gy-6">
                  <div class="form-floating"><input class="form-control" id="floatingOrganizersInput" type="text" placeholder="ORGANIZERS"><label for="floatingOrganizersInput">ORGANIZERS</label></div>
                </div>
                <div class="col-sm-6 gy-6">
                  <div class="form-floating"><input class="form-control" id="floatingSponsorsInput" type="text" placeholder="SPONSORS"><label for="floatingSponsorsInput">SPONSORS</label></div>
                </div>
                <div class="col-12 gy-6">
                  <div class="dropzone dropzone-multiple p-0 mb-5" id="my-awesome-dropzone" data-dropzone="data-dropzone">
                    <div class="fallback"><input name="file" type="file" multiple="multiple"></div>
                    <div class="dz-preview d-flex flex-wrap">
                      <div class="border border-translucent bg-body-emphasis rounded-3 d-flex flex-center position-relative me-2 mb-2" style="height:80px;width:80px;"><img class="dz-image" src="{{ asset('assets/img/products/23.png') }}" alt="..." data-dz-thumbnail="data-dz-thumbnail"><a class="dz-remove text-body-quaternary" href="#!" data-dz-remove="data-dz-remove"><span data-feather="x"></span></a></div>
                    </div>
                    <div class="dz-message text-body-tertiary text-center" data-dz-message="data-dz-message"> Drag your photo here <span class="text-body-secondary">or </span><button class="btn btn-link p-0" type="button">Browse from device </button><br><img class="mt-3 me-2" src="{{ asset('assets/img/icons/image-icon.png') }}" width="40" alt=""></div>
                  </div>
                </div>
                <div class="col-12">
                  <div style="--phoenix-choices-inner-min-height: 128px;"><select class="form-select mb-3" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                      <option value="">Add tags</option>
                      <option value="MUSIC">Music</option>
                      <option value="CONCEERT">CONCEERT</option>
                      <option value="GREATEST SHOW ON EARTH">GREATEST SHOW ON EARTH </option>
                    </select></div>
                </div>
              </div>
            </div>
            <div class="col-xl-4">
              <div class="border-bottom border-translucent pb-6 mb-6">
                <h4 class="fs-7 mb-4">Privacy</h4>
                <div class="form-check mb-2"><input class="form-check-input" id="exampleRadios1" type="radio" name="exampleRadios" value="option1" checked="checked"><label class="form-check-label fw-normal" for="exampleRadios1"><span class="h5 d-block mt-1">Public</span>On Phoenix, our distribution partners, and search engines,<br>anybody can find the event </label></div>
                <div class="form-check mb-0"><input class="form-check-input" id="exampleRadios2" type="radio" name="exampleRadios" value="option2"><label class="form-check-label fw-normal" for="exampleRadios2"><span class="h5 d-block mt-1">Private</span>Only the individuals you select have access to it.</label></div>
              </div>
              <div class="border-bottom border-translucent mb-6">
                <div class="form-check"><input class="form-check-input" id="flexChecked" type="checkbox" checked="checked"><label class="form-check-label fw-bold fs-8 mb-5" for="flexChecked">Show the number of available tickets</label></div>
              </div>
              <h4 class="fs-7 mb-4">Ticket pricing</h4>
              <div class="form-check form-check-inline"><input class="form-check-input" id="freeTicket" type="radio" name="ticketPricing" value="freeTicket" checked="checked"><label class="form-check-label" for="freeTicket">Free</label></div>
              <div class="form-check form-check-inline"><input class="form-check-input" id="paidTicket" type="radio" name="ticketPricing" value="paidTicket"><label class="form-check-label" for="paidTicket">Paid</label></div>
              <div class="row g-3 mb-7 mt-1 border-bottom border-translucent pb-5">
                <div class="col-6 col col-xl-7">
                  <h4 class="fs-9">Option</h4>
                </div>
                <div class="col-6 col-xl-5">
                  <h4 class="fs-9">Price</h4>
                </div>
                <div class="col-6 col-xl-7"><input class="form-control" type="text" placeholder="Top Gallery"></div>
                <div class="col-6 col-xl-5"><input class="form-control" type="number" placeholder="$0.0"></div>
                <div class="col-6 col-xl-7"><input class="form-control" type="text" placeholder="VIP"></div>
                <div class="col-6 col-xl-5"><input class="form-control" type="number" placeholder="$0.0"></div>
                <div class="col-6 col-xl-7"><input class="form-control" type="text" placeholder="Front row"></div>
                <div class="col-6 col-xl-5"><input class="form-control" type="number" placeholder="$0.0"></div>
                <div class="col-12"><button class="btn btn-link p-0" type="button"><span class="fa-solid fa-plus me-2"></span>Add an option </button></div>
              </div>
              <h4 class="fs-7 mb-3">Custom fields</h4>
              <div class="row g-3 mb-3">
                <div class="col-md-6 col-lg-12 col-xl-6"><label class="form-label" for="inputName">Name</label><input class="form-control" id="inputName" type="text" placeholder="Item name (e.g. Special T-shirt)"></div>
                <div class="col-md-6 col-lg-12 col-xl-6"><label class="form-label" for="inputState1">Type</label><select class="form-select" id="inputState1">
                    <option value="">Choose...</option>
                    <option value="">Type One</option>
                    <option value="">Type Two</option>
                  </select></div>
                <div class="col-12"><label class="form-label" for="filedOptions">Field options</label><textarea class="form-control" id="filedOptions" placeholder="Description" rows="6"></textarea></div>
              </div>
              <div class="row g-3">
                <div class="col-md-6 col-lg-12 col-xl-6"><label class="form-label" for="inputName2">Name</label><input class="form-control" id="inputName2" type="text" placeholder="Item name (e.g. Special T-shirt)"></div>
                <div class="col-md-6 col-lg-12 col-xl-6"><label class="form-label" for="inputState2">Type</label><select class="form-select" id="inputState2">
                    <option value="">Choose...</option>
                    <option value="">Type Three</option>
                    <option value="">Type Four</option>
                  </select></div>
                <div class="col-12"><label class="form-label" for="filedOptions2">Field options</label><textarea class="form-control" id="filedOptions2" placeholder="Description" rows="6"></textarea></div>
                <div class="col-12"><button class="btn btn-link p-0" type="button"><span class="fa-solid fa-plus me-2"></span>Add an item</button></div>
              </div>
            </div>
          </div>
        </form>
        
      </div>
      <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true" data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
        <div class="modal-dialog">
          <div class="modal-content mt-15 rounded-pill">
            <div class="modal-body p-0">
              <div class="search-box navbar-top-search-box" data-list='{"valueNames":["title"]}' style="width: auto;">
                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search rounded-pill form-control-lg" type="search" placeholder="Search..." aria-label="Search">
                  <span class="fas fa-search search-box-icon"></span>
                </form>
                <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search"><button class="btn btn-link p-0" aria-label="Close"></button></div>
                <div class="dropdown-menu border start-0 py-0 overflow-hidden w-100">
                  <div class="scrollbar-overlay" style="max-height: 30rem;">
                    <div class="list pb-3">
                      <h6 class="dropdown-header text-body-highlight fs-10 py-2">24 <span class="text-body-quaternary">results</span></h6>
                      <hr class="my-0">
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Recently Searched </h6>
                      <div class="py-2"><a class="dropdown-item" href="{{ url('e-commerce/landing/product-details') }}">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> Store Macbook</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="{{ url('e-commerce/landing/product-details') }}">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0">
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Products</h6>
                      <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="{{ url('e-commerce/landing/product-details') }}">
                          <div class="file-thumbnail me-2"><img class="h-100 w-100 object-fit-cover rounded-3" src="{{ asset('assets/img/products/60x60/3.png') }}" alt=""></div>
                          <div class="flex-1">
                            <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″</h6>
                            <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">8GB Memory - 1.6GHz - 128GB Storage</span></p>
                          </div>
                        </a>
                        <a class="dropdown-item py-2 d-flex align-items-center" href="{{ url('e-commerce/landing/product-details') }}">
                          <div class="file-thumbnail me-2"><img class="img-fluid" src="{{ asset('assets/img/products/60x60/3.png') }}" alt=""></div>
                          <div class="flex-1">
                            <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″</h6>
                            <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">30 Sep at 12:30 PM</span></p>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0">
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Quick Links</h6>
                      <div class="py-2"><a class="dropdown-item" href="{{ url('e-commerce/landing/product-details') }}">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Support MacBook House</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="{{ url('e-commerce/landing/product-details') }}">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0">
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Files</h6>
                      <div class="py-2"><a class="dropdown-item" href="{{ url('e-commerce/landing/product-details') }}">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-file-zipper text-body" data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="{{ url('e-commerce/landing/product-details') }}">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-file-lines text-body" data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="{{ url('e-commerce/landing/product-details') }}">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-image text-body" data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0">
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Members</h6>
                      <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="{{ url('pages/members') }}">
                          <div class="avatar avatar-l status-online  me-2 text-body">
                            <img class="rounded-circle " src="{{ asset('assets/img/team/40x40/10.webp') }}" alt="">
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                            <p class="fs-10 mb-0 d-flex text-body-tertiary">anna@technext.it</p>
                          </div>
                        </a>
                        <a class="dropdown-item py-2 d-flex align-items-center" href="{{ url('pages/members') }}">
                          <div class="avatar avatar-l  me-2 text-body">
                            <img class="rounded-circle " src="{{ asset('assets/img/team/40x40/12.webp') }}" alt="">
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 text-body-highlight title">John Smith</h6>
                            <p class="fs-10 mb-0 d-flex text-body-tertiary">smith@technext.it</p>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0">
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Related Searches</h6>
                      <div class="py-2"><a class="dropdown-item" href="{{ url('e-commerce/landing/product-details') }}">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-brands fa-firefox-browser text-body" data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="{{ url('e-commerce/landing/product-details') }}">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-brands fa-chrome text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="text-center">
                      <p class="fallback fw-bold fs-7 d-none">No Result Found.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="support-chat-container">
        <div class="container-fluid support-chat">
          <div class="card bg-body-emphasis">
            <div class="card-header d-flex flex-between-center px-4 py-3 border-bottom border-translucent">
              <h5 class="mb-0 d-flex align-items-center gap-2">Demo widget<span class="fa-solid fa-circle text-success fs-11"></span></h5>
              <div class="btn-reveal-trigger"><button class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex" type="button" id="support-chat-dropdown" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-body"></span></button>
                <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown"><a class="dropdown-item" href="#!">Request a callback</a><a class="dropdown-item" href="#!">Search in chat</a><a class="dropdown-item" href="#!">Show history</a><a class="dropdown-item" href="#!">Report to Admin</a><a class="dropdown-item btn-support-chat" href="#!">Close Support</a></div>
              </div>
            </div>
            <div class="card-body chat p-0">
              <div class="d-flex flex-column-reverse scrollbar h-100 p-3">
                <div class="text-end mt-6"><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                    <p class="mb-0 fw-semibold fs-9">I need help with something</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                  </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                    <p class="mb-0 fw-semibold fs-9">I can’t reorder a product I previously ordered</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                  </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                    <p class="mb-0 fw-semibold fs-9">How do I place an order?</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                  </a><a class="false d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                    <p class="mb-0 fw-semibold fs-9">My payment method not working</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                  </a></div>
                <div class="text-center mt-auto">
                  <div class="avatar avatar-3xl status-online"><img class="rounded-circle border border-3 border-light-subtle" src="{{ asset('assets/img/team/30.webp') }}" alt=""></div>
                  <h5 class="mt-2 mb-3">Eric</h5>
                  <p class="text-center text-body-emphasis mb-0">Ask us anything – we’ll get back to you here or by email within 24 hours.</p>
                </div>
              </div>
            </div>
            <div class="card-footer d-flex align-items-center gap-2 border-top border-translucent ps-3 pe-4 py-3">
              <div class="d-flex align-items-center flex-1 gap-3 border border-translucent rounded-pill px-4"><input class="form-control outline-none border-0 flex-1 fs-9 px-0" type="text" placeholder="Write message"><label class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0" for="supportChatPhotos"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="supportChatPhotos"><label class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0" for="supportChatAttachment"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="supportChatAttachment"></div><button class="btn p-0 border-0 send-btn"><span class="fa-solid fa-paper-plane fs-9"></span></button>
            </div>
          </div>
        </div><button class="btn btn-support-chat p-0 border border-translucent"><span class="fs-8 btn-text text-primary text-nowrap">Chat demo</span><span class="ping-icon-wrapper mt-n4 ms-n6 mt-sm-0 ms-sm-2 position-absolute position-sm-relative"><span class="ping-icon-bg"></span><span class="fa-solid fa-circle ping-icon"></span></span><span class="fa-solid fa-headset text-primary fs-8 d-sm-none"></span><span class="fa-solid fa-chevron-down text-primary fs-7"></span></button>
      
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
@endsection

@push('scripts')
<script src="{{ asset('vendors/choices/choices.min.js') }}"></script>
<script src="{{ asset('vendors/dropzone/dropzone-min.js') }}"></script>
<script src="{{ asset('vendors/flatpickr/flatpickr.min.js') }}"></script>
@endpush
