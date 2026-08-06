@extends('layouts.travel-agency')

@section('title', 'Trip Details')

@push('styles')
<link href="{{ asset('vendors/mapbox-gl/mapbox-gl.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/glightbox/glightbox.min.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="navbar-responsive-navitems navbar-expand border-y bg-body-emphasis border-translucent py-2">
        <div class="container-medium d-flex flex-between-center" data-navbar="data-navbar">
          <ul class="navbar-nav justify-content-end align-items-center">
            <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3 ps-0 " href="{{ url('apps/travel-agency/flight/homepage') }}">Homepage</a></li>
            <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3  text-primary" href="{{ url('trip-details') }}">Trip Details</a></li>
            <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3  " href="{{ url('checkout') }}">Checkout</a></li>
            <li class="nav-item dropdown" data-nav-item="data-nav-item" data-more-item="data-more-item"><a class="nav-link dropdown-toggle dropdown-caret-none fw-bold pe-0 ps-3" href="javascript: void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-boundary="window" data-bs-reference="parent"> More<span class="fas fa-angle-down ms-2"></span></a>
              <div class="dropdown-menu dropdown-menu-end category-list" aria-labelledby="navbarDropdown" data-category-list="data-category-list"></div>
            </li>
          </ul>
        </div>
      </div>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5">
        <div class="container-medium">
          <nav class="mb-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#">Page 1</a></li>
              <li class="breadcrumb-item"><a href="#">Page 2</a></li>
              <li class="breadcrumb-item active" aria-current="page">Default</li>
            </ol>
          </nav>
          <h2 class="mb-5">Trip Details</h2>
          <h1 class="fw-bold">Walk where the king walked once in Wakanda <span class="align-middle text-nowrap fs-8"><span class="text-body-quaternary">by </span><span class="text-body-tertiary">Panther Travels Limited</span></span></h1>
          <hr class="bg-secondary-lighter">
          <div class="d-flex align-items-center flex-wrap gap-3">
            <h2 class="me-3">$300 <span class="fs-8 fw-semibold text-body-tertiary align-middle">/ per person</span></h2>
            <div class="me-3"><span class="fa fa-star text-warning me-1 fs-9"></span><span class="fa fa-star text-warning me-1 fs-9"></span><span class="fa fa-star text-warning me-1 fs-9"></span><span class="fa fa-star text-warning me-1 fs-9"></span><span class="fa fa-star text-warning me-1 fs-9"></span><span class="fw-semibold text-body-tertiary">( 32 reviews )</span></div>
            <h5 class="fw-semibold text-body-tertiary me-3"><span class="p-2 d-inline-flex bg-danger-subtle rounded-pill me-2"><span class="fa-solid fa-heart fs-9 text-danger-light" data-fa-transform="down-1"></span></span>Recommended by 25 travellers</h5><button class="btn btn-primary ms-md-auto" type="button" data-bs-toggle="modal" data-bs-target="#trilAvailabilityModal" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">Check availability</button>
          </div>
          <div class="p-4 bg-body-highlight rounded-2 mt-3 mb-5">
            <div class="row gy-4">
              <div class="col-md-4 col-lg-3 border-end-md">
                <h6 class="text-body fw-semibold mb-2"> <span class="fa-solid fa-map-marker-alt me-2"></span>Birnin Zana, Wakanda</h6>
                <h6 class="text-body fw-semibold mb-2"> <span class="fa-solid fa-clock me-2"></span>3 Days, 1 Night</h6>
                <h6 class="text-body fw-semibold mb-4"> <span class="fa-solid fa-user me-2"></span>From 1 to 12 people</h6><a class="badge badge-phoenix badge-phoenix-secondary me-2" href="#!">Sightseeing</a><a class="badge badge-phoenix badge-phoenix-secondary" href="#!">Eco-tourism</a>
              </div>
              <div class="col-md-8 col-lg-9 ps-lg-7">
                <h4 class="text-body mb-3">Overview</h4>
                <p class="mb-0">A private guide will allow you to fully experience Wakanda's native culture without having to worry about getting lost. Set out on a full-day tour that concentrates on off-the-beaten-path sites like the active wholesale markets for produce and seafood. The old-fashioned way to get around is via rickshaw...<a href="#!">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="row g-2 g-md-3">
            <div class="col-md-6">
              <div class="swiper-theme-container rounded-2 overflow-hidden">
                <div class="swiper swiper theme-slider" data-swiper='{"slidesPerView":1,"loop":true,"autoplay":true,"pagination":{"el":".swiper-pagination","clickable":true}}'>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide"><img class="w-100 h-100 object-fit-cover" src="{{ asset('assets/img/trip/10.png') }}" alt=""></div>
                    <div class="swiper-slide"><img class="w-100 h-100 object-fit-cover" src="{{ asset('assets/img/trip/17.png') }}" alt=""></div>
                    <div class="swiper-slide"><img class="w-100 h-100 object-fit-cover" src="{{ asset('assets/img/trip/18.png') }}" alt=""></div>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-nav swiper-nav-inside">
                  <div class="swiper-button-next bg-transparent border-0 text-white"><span class="fas fa-chevron-right nav-icon"></span></div>
                  <div class="swiper-button-prev bg-transparent border-0 text-white"><span class="fas fa-chevron-left nav-icon"></span></div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row g-2 g-md-3">
                <div class="col-4"><a href="{{ asset('assets/img/trip/11.jpg') }}" data-gallery="trip-details-gallery"><img class="img-fluid rounded-2" src="{{ asset('assets/img/trip/19.png') }}" alt=""></a></div>
                <div class="col-4"><a href="{{ asset('assets/img/trip/12.jpg') }}" data-gallery="trip-details-gallery"><img class="img-fluid rounded-2" src="{{ asset('assets/img/trip/20.png') }}" alt=""></a></div>
                <div class="col-4"><a href="{{ asset('assets/img/trip/13.jpg') }}" data-gallery="trip-details-gallery"><img class="img-fluid rounded-2" src="{{ asset('assets/img/trip/21.png') }}" alt=""></a></div>
                <div class="col-4"><a href="{{ asset('assets/img/trip/14.jpg') }}" data-gallery="trip-details-gallery"><img class="img-fluid rounded-2" src="{{ asset('assets/img/trip/22.png') }}" alt=""></a></div>
                <div class="col-4"><a href="{{ asset('assets/img/trip/15.jpg') }}" data-gallery="trip-details-gallery"><img class="img-fluid rounded-2" src="{{ asset('assets/img/trip/23.png') }}" alt=""></a></div>
                <div class="col-4">
                  <div class="position-relative rounded-2 overflow-hidden"><a href="{{ asset('assets/img/trip/16.jpg') }}" data-gallery="trip-details-gallery"> <img class="img-fluid" src="{{ asset('assets/img/trip/24.png') }}" alt="" height="43"></a>
                    <div class="position-absolute w-100 h-100 left-0 top-0 d-flex flex-center bg-black bg-opacity-50"><a class="text-white stretched-link fs-7 fs-lg-5 fw-bolder" href="{{ url('apps/travel-agency/hotel/customer/gallery') }}">24+</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <ul class="nav nav-pills flex-nowrap my-5" role="tablist">
            <li class="nav-item"><button class="nav-link active" id="pills-details-tab" data-bs-toggle="pill" data-bs-target="#pills-details" type="button" role="tab" aria-controls="pills-details" aria-selected="true">Details</button></li>
            <li class="nav-item"><button class="nav-link" id="pills-review-tab" data-bs-toggle="pill" data-bs-target="#pills-review" type="button" role="tab" aria-controls="pills-review" aria-selected="true">Review</button></li>
          </ul>
          <div class="tab-content" id="trip-details-tab-content">
            <div class="tab-pane fade show active" id="pills-details" role="tabpanel" aria-labelledby="pills-details-tab" tabindex="0">
              <div class="row justify-content-between gx-0 gy-5">
                <div class="col-xl-7"><a class="btn px-4 py-3 py-sm-4 d-flex flex-between-center collapse-indicator bg-body-highlight" data-bs-toggle="collapse" href="#collapseWhatToExpect" role="button" aria-expanded="true" aria-controls="collapseWhatToExpect">
                    <h4 class="fs-8 fs-sm-7 mb-0 text-body-highlight">What to expect</h4><span class="fa-solid fa-chevron-down toggle-icon"></span>
                  </a>
                  <div class="collapse show" id="collapseWhatToExpect">
                    <div class="py-6 px-4">
                      <div class="mb-5">
                        <div class="d-flex align-items-center gap-2"><span class="bg-secondary rounded-pill d-flex flex-center text-white" style="width: 27px; height: 27px">1</span>
                          <h5 class="text-body-highlight mb-0">Breakfast in Birnin Zana</h5>
                        </div>
                        <p class="my-2">Enjoy the traditional Wakandan bread and butter, along with the sweet aroma of freshly baked cakes, beside the large streets of Birnin Zana.</p>
                        <div class="d-flex gap-3 gap-xl-4 flex-wrap">
                          <h5 class="text-body-highlight fw-semibold mb-0"> <span class="fa-solid fa-clock text-body-quaternary me-2"></span>Duration : <span class="text-body-tertiary fw-normal">30 min</span></h5>
                          <h5 class="text-body-highlight fw-semibold mb-0"> <span class="fa-solid fa-map-marker-alt text-body-quaternary me-2"></span>Location : <span class="text-body-tertiary fw-normal">Royal street, Birnin Zana</span></h5>
                        </div>
                      </div>
                      <div class="mb-5">
                        <div class="d-flex align-items-center gap-2"><span class="bg-secondary rounded-pill d-flex flex-center text-white" style="width: 27px; height: 27px">2</span>
                          <h5 class="text-body-highlight mb-0">Safari at the Alkama fields</h5>
                        </div>
                        <p class="my-2">Observe the Wakandan wildlife in its natural habitat in the savanna of Alkama.</p>
                        <div class="d-flex gap-3 gap-xl-4 flex-wrap">
                          <h5 class="text-body-highlight fw-semibold mb-0"> <span class="fa-solid fa-clock text-body-quaternary me-2"></span>Duration : <span class="text-body-tertiary fw-normal">2 hours</span></h5>
                          <h5 class="text-body-highlight fw-semibold mb-0"> <span class="fa-solid fa-map-marker-alt text-body-quaternary me-2"></span>Location : <span class="text-body-tertiary fw-normal">Zone 23, Alkama</span></h5>
                        </div>
                      </div>
                      <div class="mb-5">
                        <div class="d-flex align-items-center gap-2"><span class="bg-secondary rounded-pill d-flex flex-center text-white" style="width: 27px; height: 27px">3</span>
                          <h5 class="text-body-highlight mb-0">Jabari tribe habitats</h5>
                        </div>
                        <p class="my-2">See the colorful lifestyle of the people from the Jabari tribe. Interact with the locals, visit their shops, and buy famous traditional Jabari articles of clothing. </p>
                        <div class="d-flex gap-3 gap-xl-4 flex-wrap">
                          <h5 class="text-body-highlight fw-semibold mb-0"> <span class="fa-solid fa-clock text-body-quaternary me-2"></span>Duration : <span class="text-body-tertiary fw-normal">1 hour</span></h5>
                          <h5 class="text-body-highlight fw-semibold mb-0"> <span class="fa-solid fa-map-marker-alt text-body-quaternary me-2"></span>Location : <span class="text-body-tertiary fw-normal">Jabariland</span></h5>
                        </div>
                      </div>
                      <div class="mb-5">
                        <div class="d-flex align-items-center gap-2"><span class="bg-secondary rounded-pill d-flex flex-center text-white" style="width: 27px; height: 27px">4</span>
                          <h5 class="text-body-highlight mb-0">King T’Challa’s memorial</h5>
                        </div>
                        <p class="my-2">Visit the tomb of the greatest king of Wakanda, King T'Challa, the black panther.</p>
                        <div class="d-flex gap-3 gap-xl-4 flex-wrap">
                          <h5 class="text-body-highlight fw-semibold mb-0"> <span class="fa-solid fa-clock text-body-quaternary me-2"></span>Duration : <span class="text-body-tertiary fw-normal">1 hour</span></h5>
                          <h5 class="text-body-highlight fw-semibold mb-0"> <span class="fa-solid fa-map-marker-alt text-body-quaternary me-2"></span>Location : <span class="text-body-tertiary fw-normal">Birnin Bashenga</span></h5>
                        </div>
                      </div>
                      <div>
                        <div class="d-flex align-items-center gap-2"><span class="bg-secondary rounded-pill d-flex flex-center text-white" style="width: 27px; height: 27px">5</span>
                          <h5 class="text-body-highlight mb-0">Lunch</h5>
                        </div>
                        <p class="my-2">Have lunch with the authentic cuisine of Wakanda at the mountaintop restaurant of Mena Ngai.</p>
                        <div class="d-flex gap-3 gap-xl-4 flex-wrap">
                          <h5 class="text-body-highlight fw-semibold mb-0"> <span class="fa-solid fa-clock text-body-quaternary me-2"></span>Duration : <span class="text-body-tertiary fw-normal">1 hour</span></h5>
                          <h5 class="text-body-highlight fw-semibold mb-0"> <span class="fa-solid fa-map-marker-alt text-body-quaternary me-2"></span>Location : <span class="text-body-tertiary fw-normal">Vibranium hill top restaurant, the Great Mount</span></h5>
                        </div>
                      </div>
                    </div>
                  </div><a class="btn px-4 py-3 py-sm-4 d-flex flex-between-center collapse-indicator bg-body-highlight mt-4" data-bs-toggle="collapse" href="#collapseIncluded" role="button" aria-expanded="false" aria-controls="collapseIncluded">
                    <h4 class="fs-8 fs-sm-7 mb-0 text-body-highlight">What are included or excluded</h4><span class="fa-solid fa-chevron-down toggle-icon"></span>
                  </a>
                  <div class="collapse" id="collapseIncluded">
                    <div class="py-6 px-4">
                      <h5 class="mb-3 text-body-highlight"> <span class="fa-solid me-2 fa-thumbs-up"></span>Included</h5>
                      <ul class="list-unstyled mb-4">
                        <li class="mb-1 d-flex"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>PhoenixTrip experience brokerage free</li>
                        <li class="mb-1 d-flex"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>Bottled water</li>
                        <li class="mb-1 d-flex"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>Professional guide</li>
                        <li class="mb-1 d-flex"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>Hotel pickup and drop off</li>
                        <li class="mb-1 d-flex"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>Private tour</li>
                      </ul>
                      <h5 class="mb-3 text-body-highlight"> <span class="fa-solid me-2 fa-thumbs-down"></span>Excluded</h5>
                      <ul class="list-unstyled mb-0">
                        <li class="mb-1 d-flex"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>Gratuities</li>
                        <li class="mb-1 d-flex"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>Snacks</li>
                        <li class="mb-1 d-flex"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>Air-conditioned vehicle</li>
                      </ul>
                    </div>
                  </div><a class="btn px-4 py-3 py-sm-4 d-flex flex-between-center collapse-indicator bg-body-highlight mt-4" data-bs-toggle="collapse" href="#collapseDeparture" role="button" aria-expanded="false" aria-controls="collapseDeparture">
                    <h4 class="fs-8 fs-sm-7 mb-0 text-body-highlight">Departure and return</h4><span class="fa-solid fa-chevron-down toggle-icon"></span>
                  </a>
                  <div class="collapse" id="collapseDeparture">
                    <div class="py-6 px-4">
                      <div class="card bg-transparent mb-3">
                        <div class="card-body">
                          <h5 class="mb-3">Departure details</h5>
                          <p class="mb-0">Traveler pickup is offered. We will pickup you all from your pickup places even it's home or hotel inside Birnin Zana. Hotel pickup is offered. View the hotel list on our checkout page to see if yours is included.</p>
                        </div>
                      </div>
                      <div class="card bg-transparent">
                        <div class="card-body">
                          <h5 class="mb-3">Return details</h5>
                          <p class="mb-0">Returns to the original departure point.</p>
                        </div>
                      </div>
                    </div>
                  </div><a class="btn px-4 py-3 py-sm-4 d-flex flex-between-center collapse-indicator bg-body-highlight mt-4" data-bs-toggle="collapse" href="#collapseAccessibility" role="button" aria-expanded="false" aria-controls="collapseAccessibility">
                    <h4 class="fs-8 fs-sm-7 mb-0 text-body-highlight">Accessibility</h4><span class="fa-solid fa-chevron-down toggle-icon"></span>
                  </a>
                  <div class="collapse" id="collapseAccessibility">
                    <div class="py-6 px-4">
                      <ul class="list-unstyled">
                        <li class="mb-1 d-flex"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>Infant seats available</li>
                        <li class="mb-1 d-flex"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>Wheelchair accessible</li>
                        <li class="mb-1 d-flex"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>Service animals allowed</li>
                        <li class="mb-1 d-flex"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>Infants must sit on lap</li>
                      </ul>
                      <p> If you have questions about accessibility, we’d be happy to help. Just call the number below and reference the product code: <span class="text-body-emphasis fw-semibold">74936P4</span></p><a href="tel:+1800000000">+1 800 000 000</a>
                    </div>
                  </div><a class="btn px-4 py-3 py-sm-4 d-flex flex-between-center collapse-indicator bg-body-highlight mt-4" data-bs-toggle="collapse" href="#collapseAdditionalInfo" role="button" aria-expanded="false" aria-controls="collapseAdditionalInfo">
                    <h4 class="fs-8 fs-sm-7 mb-0 text-body-highlight">Additional Information</h4><span class="fa-solid fa-chevron-down toggle-icon"></span>
                  </a>
                  <div class="collapse" id="collapseAdditionalInfo">
                    <div class="py-6 px-4">
                      <ul class="list-unstyled mb-0">
                        <li class="mb-1 d-flex"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>Confirmation will be received at time of booking</li>
                        <li class="mb-1 d-flex"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>Minimum age is 18 years</li>
                        <li class="mb-1 d-flex"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>Infant meals not included</li>
                        <li class="mb-1 d-flex"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>A minimum if 01 people per booking is required</li>
                        <li class="mb-1 d-flex"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>Most travelers can participate</li>
                        <li class="mb-1 d-flex"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>This tour is to explore the city using local transportation like rickshaw , tuktuk, uber.</li>
                        <li class="mb-1 d-flex"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>Woman's need to cover the head during visiting mosque</li>
                        <li class="mb-1 d-flex"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>This is a private tour / activity. Only your group will particiapte.</li>
                      </ul>
                    </div>
                  </div><a class="btn px-4 py-3 py-sm-4 d-flex flex-between-center collapse-indicator bg-body-highlight mt-4" data-bs-toggle="collapse" href="#collapsePolicy" role="button" aria-expanded="false" aria-controls="collapsePolicy">
                    <h4 class="fs-8 fs-sm-7 mb-0 text-body-highlight">Policy</h4><span class="fa-solid fa-chevron-down toggle-icon"></span>
                  </a>
                  <div class="collapse" id="collapsePolicy">
                    <div class="py-6 px-4">
                      <div class="card bg-transparent mb-3">
                        <div class="card-body">
                          <h5 class="mb-3">Cancellation</h5>
                          <ul class="list-unstyled mb-0">
                            <li class="mb-1 d-flex mb-3"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>To cancel any tour, an email has to be sent to tours@phoenix.com mentioning the tour booking ID and details about the cancellation.</li>
                            <li class="mb-1 d-flex mb-3"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>The time of sending the email will be considered as the time of cancellation.</li>
                            <li class="mb-1 d-flex mb-3"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>The email will be considered as the final application for cancellation. A phone call to the Phoenix hotline number or any other team member of Phoenix will not be considered as a request for cancellation of booking.</li>
                          </ul>
                        </div>
                      </div>
                      <div class="card bg-transparent mb-3">
                        <div class="card-body">
                          <h5 class="mb-3">Refund</h5>
                          <ul class="list-unstyled mb-0">
                            <li class="mb-1 d-flex mb-3"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>The full amount of the tour fee will be refunded if the booking is canceled five (5) days prior to the start of the experience/tour.</li>
                            <li class="mb-1 d-flex mb-3"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>Fifty Percent (50%) of the tour fee will be refunded if the booking is canceled three (3) days prior to the start of the experience/tour.</li>
                            <li class="mb-1 d-flex mb-3"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>No refund will be provided if the booking is canceled less than three (3) days prior to the start of the experience/tour.</li>
                            <li class="mb-1 d-flex mb-3"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>Convenience fee is non-refundable and will be deducted from the paid amount.</li>
                            <li class="mb-1 d-flex mb-3"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>All refunds will be processed within seven (7) working days.</li>
                          </ul>
                        </div>
                      </div>
                      <div class="card bg-transparent">
                        <div class="card-body">
                          <h5 class="mb-3">Child policy</h5>
                          <ul class="list-unstyled mb-0">
                            <li class="mb-1 d-flex mb-3"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>No fee will be needed for children below the age of four (4). No separate seat will be provided in case of transportation and accommodation.</li>
                            <li class="mb-1 d-flex mb-3"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>50% fee must be paid for any child between the age of five (5) and ten (10) years old.</li>
                            <li class="mb-1 d-flex mb-3"><span class="fa-solid fa-circle text-secondary-light me-3 fs-11" data-fa-transform="down-13 shrink-4"></span>Full amount of money must be paid for anyone above ten (10) years old.</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4">
                  <div class="border border-translucent rounded-2" id="mapbox-cluster" style="height: 240px;"></div>
                  <h6 class="my-3 py-3 px-2 rounded-2 bg-body-secondary text-center">Day 1</h6>
                  <div class="row gx-5 gy-0 position-relative">
                    <div class="bg-holder tour-direction-bg d-none d-sm-block" style="background-image:url({{ asset('assets/img/bg/bg-41.svg') }});"></div>
                    <!--/.bg-holder-->
                    <div class="col-sm-6 position-relative">
                      <div class="p-2 rounded-2 bg-body-highlight mb-3 position-relative">
                        <div class="tour-direction-line border-start border-dashed"></div><a class="btn p-0 d-flex justify-content-between collapse-indicator" data-bs-toggle="collapse" href="#collapsePicupPoint" role="button" aria-expanded="true" aria-controls="collapsePicupPoint">
                          <div class="d-flex"><span class="d-inline-flex flex-center rounded-pill border me-2" style="min-width: 23px; height: 23px"><span class="fa-solid fa-map-marker-alt fs-9"></span></span>
                            <div>
                              <h6 class="mb-2 text-start">Pickup point</h6>
                              <h6 class="text-start fw-normal text-body-tertiary">Birnin Zana bus terminal</h6>
                            </div>
                          </div><span class="fa-solid fa-chevron-down toggle-icon" style="width: 10px; height: 10px"></span>
                        </a>
                        <div class="collapse show" id="collapsePicupPoint">
                          <h6 class="fw-normal text-body-tertiary pt-3 ps-1"><span class="fa-solid fa-clock text-body-quaternary me-2"></span>10:00 am local time</h6>
                        </div>
                      </div>
                      <div class="p-2 rounded-2 bg-body-highlight d-flex align-items-center gap-2 mb-3 position-relative">
                        <div class="tour-direction-line border-start border-dashed"></div><span class="bg-secondary rounded-pill d-flex flex-center text-white fs-9" style="min-width: 23px; height: 23px">1</span>
                        <h6 class="mb-0 text-body-highlight">Breakfast</h6>
                      </div>
                      <div class="p-2 rounded-2 bg-body-highlight d-flex align-items-center gap-2 mb-3 position-relative">
                        <div class="tour-direction-line border-start border-dashed"></div><span class="bg-secondary rounded-pill d-flex flex-center text-white fs-9" style="min-width: 23px; height: 23px">2</span>
                        <h6 class="mb-0 text-body-highlight">Desert safari</h6>
                      </div>
                      <div class="p-2 rounded-2 bg-body-highlight d-flex align-items-center gap-2 mb-3 position-relative">
                        <div class="tour-direction-line border-start border-dashed d-sm-none"></div><span class="bg-secondary rounded-pill d-flex flex-center text-white fs-9" style="min-width: 23px; height: 23px">3</span>
                        <h6 class="mb-0 text-body-highlight">Jabari tribe habitats</h6>
                      </div>
                    </div>
                    <div class="col-sm-6 position-relative">
                      <div class="p-2 rounded-2 bg-body-highlight d-flex align-items-center gap-2 mb-3 position-relative">
                        <div class="tour-direction-line border-start border-dashed"></div><span class="bg-secondary rounded-pill d-flex flex-center text-white fs-9" style="min-width: 23px; height: 23px">4</span>
                        <h6 class="mb-0 text-body-highlight">King T’Challa’s memorial</h6>
                      </div>
                      <div class="p-2 rounded-2 bg-body-highlight d-flex align-items-center gap-2 mb-3 position-relative">
                        <div class="tour-direction-line border-start border-dashed"></div><span class="bg-secondary rounded-pill d-flex flex-center text-white fs-9" style="min-width: 23px; height: 23px">5</span>
                        <h6 class="mb-0 text-body-highlight">Lunch</h6>
                      </div>
                      <div class="p-2 rounded-2 bg-body-highlight d-flex align-items-center gap-2 mb-3"><span class="d-inline-flex flex-center rounded-pill border me-2" style="min-width: 23px; height: 23px"><span class="fa-solid fa-map-marker-alt fs-9"></span></span>
                        <h6 class="mb-0 text-body-highlight">Drop-off point</h6>
                      </div>
                    </div>
                  </div>
                  <h6 class="mb-0 py-3 px-2 rounded-2 bg-body-secondary text-center">Tour ends</h6>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab" tabindex="0">
              <div class="row align-items-center gy-5">
                <div class="col-xl-5 col-xxl-4">
                  <div class="d-flex align-items-center gap-3 flex-wrap">
                    <h3 class="mb-0">5.0</h3>
                    <div class="pe-3 border-end-sm border-translucent"><span class="fa fa-star text-warning me-1 fs-9"></span><span class="fa fa-star text-warning me-1 fs-9"></span><span class="fa fa-star text-warning me-1 fs-9"></span><span class="fa fa-star text-warning me-1 fs-9"></span><span class="fa fa-star text-warning me-1 fs-9"></span><span class="fw-semibold text-body-tertiary">( 32 reviews )</span></div><span class="badge badge-phoenix badge-phoenix-success border-0 px-3 py-2 fs-8 text-capitalize">Recommended</span>
                  </div>
                </div>
                <div class="col-xl-7 col-xxl-8">
                  <div class="d-flex gap-5 gap-md-6 gap-xl-8 gap-xxl-6 flex-wrap">
                    <div class="d-lg-flex d-xl-block d-xxl-flex align-items-center gap-3 ms-xl-auto">
                      <div class="echart-trip-review order-lg-1 order-xl-0 order-xxl-1 mx-auto" style="height: 60px; width: 60px" data-options='{"series":[{"data":[{"value":24}]}]}'></div>
                      <h5 class="mb-0 mt-2 mt-lg-0 mt-xl-2 mt-xxl-0 text-center">Excellent</h5>
                    </div>
                    <div class="d-lg-flex d-xl-block d-xxl-flex align-items-center gap-3">
                      <div class="echart-trip-review order-lg-1 order-xl-0 order-xxl-1 mx-auto" style="height: 60px; width: 60px" data-options='{"series":[{"data":[{"value":8}]}]}'></div>
                      <h5 class="mb-0 mt-2 mt-lg-0 mt-xl-2 mt-xxl-0 text-center">Very good</h5>
                    </div>
                    <div class="d-lg-flex d-xl-block d-xxl-flex align-items-center gap-3">
                      <div class="echart-trip-review order-lg-1 order-xl-0 order-xxl-1 mx-auto" style="height: 60px; width: 60px" data-options='{"series":[{"data":[{"value":0}]}]}'></div>
                      <h5 class="mb-0 mt-2 mt-lg-0 mt-xl-2 mt-xxl-0 text-center">Average</h5>
                    </div>
                    <div class="d-lg-flex d-xl-block d-xxl-flex align-items-center gap-3">
                      <div class="echart-trip-review order-lg-1 order-xl-0 order-xxl-1 mx-auto" style="height: 60px; width: 60px" data-options='{"series":[{"data":[{"value":0}]}]}'></div>
                      <h5 class="mb-0 mt-2 mt-lg-0 mt-xl-2 mt-xxl-0 text-center">Poor</h5>
                    </div>
                    <div class="d-lg-flex d-xl-block d-xxl-flex align-items-center gap-3">
                      <div class="echart-trip-review order-lg-1 order-xl-0 order-xxl-1 mx-auto" style="height: 60px; width: 60px" data-options='{"series":[{"data":[{"value":0}]}]}'></div>
                      <h5 class="mb-0 mt-2 mt-lg-0 mt-xl-2 mt-xxl-0 text-center">Terrible</h5>
                    </div>
                  </div>
                </div>
              </div><button class="btn btn-phoenix-secondary my-5">Write a review</button>
              <div class="card bg-transparent mb-3">
                <div class="card-body">
                  <div class="d-flex align-items-center gap-3">
                    <div class="d-flex align-items-center gap-2 position-relative">
                      <div class="avatar avatar-s ">
                        <img class="rounded-circle " src="{{ asset('assets/img/team/59.webp') }}" alt="">
                      </div><a class="text-body-emphasis fw-semibold stretched-link" href="#!">Navina Koothrapali</a>
                    </div>
                    <div class="d-flex gap-2">
                      <h6 class="text-body-tertiary mb-0"><span class="fa-solid fa-thumbs-up text-body-quaternary me-1"></span>35</h6>
                      <h6 class="text-body-tertiary mb-0"><span class="fa-solid fa-thumbs-down text-secondary-light me-1"></span>2</h6>
                    </div>
                  </div>
                  <div class="d-flex my-3"><span class="fa fa-star text-warning me-1 fs-9"></span><span class="fa fa-star text-warning me-1 fs-9"></span><span class="fa fa-star text-warning me-1 fs-9"></span><span class="fa fa-star text-warning me-1 fs-9"></span><span class="fa fa-star text-warning me-1 fs-9"></span></div>
                  <h4 class="mb-2">Memorable day in Wakanda</h4>
                  <p class="text-body-tertiary">Oct 2022</p>
                  <p>First time here in Wakanda, nice weather but one thing can't miss out was the one day highlight city tour guided by Shuri from Panther Travels. Shuri came in earlier to pick me up at the hotel and we started the tour with a good briefing by him. The activities were packed and the information given to me was clear and useful, really appreciated Shuri's knowledge and care for the tour, which included memorable stories of not only Birnin but also people in Wakanda. Look forward to coming back again! Navina Koothrapali from Hong Kong</p>
                  <div class="mt-5 border-start border-translucent ps-4"><a class="fw-bold" href="#!">Panther Travels Limited</a><span class="ms-1 text-body-quaternary">replied</span>
                    <p class="mt-2">Great to have your review on our tour. It's our honor to get a tourist like you. Good luck to you. Hope to see you again.</p>
                  </div>
                </div>
              </div>
              <div class="card bg-transparent mb-3">
                <div class="card-body">
                  <div class="d-flex align-items-center gap-3">
                    <div class="d-flex align-items-center gap-2 position-relative">
                      <div class="avatar avatar-s ">
                        <img class="rounded-circle " src="{{ asset('assets/img/team/58.webp') }}" alt="">
                      </div><a class="text-body-emphasis fw-semibold stretched-link" href="#!">Henry Cavill</a>
                    </div>
                    <div class="d-flex gap-2">
                      <h6 class="text-body-tertiary mb-0"><span class="fa-solid fa-thumbs-up text-body-quaternary me-1"></span>24</h6>
                      <h6 class="text-body-tertiary mb-0"><span class="fa-solid fa-thumbs-down text-secondary-light me-1"></span>3</h6>
                    </div>
                  </div>
                  <div class="d-flex my-3"><span class="fa fa-star text-warning me-1 fs-9"></span><span class="fa fa-star text-warning me-1 fs-9"></span><span class="fa fa-star text-warning me-1 fs-9"></span><span class="fa fa-star text-warning me-1 fs-9"></span><span class="fa fa-star text-warning me-1 fs-9"></span></div>
                  <h4 class="mb-2">Unforgettable experience</h4>
                  <p class="text-body-tertiary">Oct 2022</p>
                  <p>Great tour in beautiful Wakanda. Everything we imagined about Wakanda changed in a day. Kind and lovely people all around. Unforgettable experience.</p>
                  <div class="d-flex gap-2 flex-wrap"><a href="{{ asset('assets/img/trip/25_large.jpg') }}" data-gallery="trip-details-gallery-1"><img class="img-fluid rounded-2" src="{{ asset('assets/img/trip/25.png') }}" alt=""></a><a href="{{ asset('assets/img/trip/26_large.jpg') }}" data-gallery="trip-details-gallery-1"><img class="img-fluid rounded-2" src="{{ asset('assets/img/trip/26.png') }}" alt=""></a><a href="{{ asset('assets/img/trip/27_large.jpg') }}" data-gallery="trip-details-gallery-1"><img class="img-fluid rounded-2" src="{{ asset('assets/img/trip/27.png') }}" alt=""></a><a href="{{ asset('assets/img/trip/28_large.jpg') }}" data-gallery="trip-details-gallery-1"><img class="img-fluid rounded-2" src="{{ asset('assets/img/trip/28.png') }}" alt=""></a><a href="{{ asset('assets/img/trip/29_large.jpg') }}" data-gallery="trip-details-gallery-1"><img class="img-fluid rounded-2" src="{{ asset('assets/img/trip/29.png') }}" alt=""></a><a href="{{ asset('assets/img/trip/30_large.jpg') }}" data-gallery="trip-details-gallery-1"><img class="img-fluid rounded-2" src="{{ asset('assets/img/trip/30.png') }}" alt=""></a></div>
                  <div class="mt-5 border-start border-translucent ps-4"><a class="fw-bold" href="#!">Panther Travels Limited</a><span class="ms-1 text-body-quaternary">replied</span>
                    <p class="mt-2">Thanks for this review. It is a great motivation from you. Hope to see you again in Wakanda. Good luck.</p>
                  </div>
                </div>
              </div>
              <div class="card bg-transparent">
                <div class="card-body">
                  <div class="d-flex align-items-center gap-3">
                    <div class="d-flex align-items-center gap-2 position-relative">
                      <div class="avatar avatar-s ">
                        <img class="rounded-circle " src="{{ asset('assets/img/team/60.webp') }}" alt="">
                      </div><a class="text-body-emphasis fw-semibold stretched-link" href="#!">Ibn Batuta</a>
                    </div>
                    <div class="d-flex gap-2">
                      <h6 class="text-body-tertiary mb-0"><span class="fa-solid fa-thumbs-up text-body-quaternary me-1"></span>45</h6>
                      <h6 class="text-body-tertiary mb-0"><span class="fa-solid fa-thumbs-down text-secondary-light me-1"></span>1</h6>
                    </div>
                  </div>
                  <div class="d-flex my-3"><span class="fa fa-star text-warning me-1 fs-9"></span><span class="fa fa-star text-warning me-1 fs-9"></span><span class="fa fa-star text-warning me-1 fs-9"></span><span class="fa fa-star text-warning me-1 fs-9"></span><span class="fa-regular fa-star text-warning-light me-1 fs-9" data-bs-theme="light"></span></div>
                  <h4 class="mb-2">Great 1 day trip which makes you feel as if you've seen the whole of Wakanda</h4>
                  <p class="text-body-tertiary">Oct 2022</p>
                  <p>I've seen so much in one day thanks to the great guidance of Mehdi, who customized the trip as per how we felt. I recommend this trip and this guide.</p>
                  <div class="d-flex gap-2 flex-wrap"><a href="{{ asset('assets/img/trip/31_large.jpg') }}" data-gallery="trip-details-gallery-2"><img class="img-fluid rounded-2" src="{{ asset('assets/img/trip/31.png') }}" alt=""></a><a href="{{ asset('assets/img/trip/32_large.jpg') }}" data-gallery="trip-details-gallery-2"><img class="img-fluid rounded-2" src="{{ asset('assets/img/trip/32.png') }}" alt=""></a><a href="{{ asset('assets/img/trip/33_large.jpg') }}" data-gallery="trip-details-gallery-2"><img class="img-fluid rounded-2" src="{{ asset('assets/img/trip/33.png') }}" alt=""></a></div>
                  <div class="mt-5 border-start border-translucent ps-4"><a class="fw-bold" href="#!">Panther Travels Limited</a><span class="ms-1 text-body-quaternary">replied</span>
                    <p class="mt-2">Thanks for this review. It is a great motivation from you. Hope to see you again in Wakanda. Good luck.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <h2 class="mt-5 mb-3">Similar tours</h2>
          <div class="row g-3">
            <div class="col-md-6 col-xl-4">
              <div class="hoverbox rounded"><a href="{{ url('trip-details') }}"><img class="img-fluid" src="{{ asset('assets/img/trip/7.png') }}" alt="">
                  <div class="backdrop-faded">
                    <h3 class="text-underline fs-7 fs-lg-6 text-white fw-bold mb-2">Stormtrooper for a day</h3>
                    <h5 class="text-secondary-lighter fw-normal mb-3"><span class="fa-solid fa-map-marker-alt text-primary me-2"></span>The Death Star</h5>
                    <div class="d-sm-flex d-md-block d-lg-flex flex-between-center">
                      <h3 class="text-white fw-bold mb-3 mb-sm-0 mb-md-3 mb-lg-0 fs-7 fs-lg-6">$ 2,899</h3>
                      <div class="d-flex gap-3">
                        <h5 class="text-secondary-lighter fw-normal"> <span class="fa-solid fa-clock fs-9 me-2"></span>3 days</h5>
                        <h5 class="text-secondary-lighter fw-normal"> <span class="fa-solid fa-user fs-9 me-2"></span>From 1 to people</h5>
                      </div>
                    </div>
                  </div>
                </a></div>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="hoverbox rounded"><a href="{{ url('trip-details') }}"><img class="img-fluid" src="{{ asset('assets/img/trip/8.png') }}" alt="">
                  <div class="backdrop-faded">
                    <h3 class="text-underline fs-7 fs-lg-6 text-white fw-bold mb-2">Walk where the king walked</h3>
                    <h5 class="text-secondary-lighter fw-normal mb-3"><span class="fa-solid fa-map-marker-alt text-primary me-2"></span>Wakanda</h5>
                    <div class="d-sm-flex d-md-block d-lg-flex flex-between-center">
                      <h3 class="text-white fw-bold mb-3 mb-sm-0 mb-md-3 mb-lg-0 fs-7 fs-lg-6">$ 5,999</h3>
                      <div class="d-flex gap-3">
                        <h5 class="text-secondary-lighter fw-normal"> <span class="fa-solid fa-clock fs-9 me-2"></span>3 days</h5>
                        <h5 class="text-secondary-lighter fw-normal"> <span class="fa-solid fa-user fs-9 me-2"></span>From 1 to people</h5>
                      </div>
                    </div>
                  </div>
                </a></div>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="hoverbox rounded"><a href="{{ url('trip-details') }}"><img class="img-fluid" src="{{ asset('assets/img/trip/9.png') }}" alt="">
                  <div class="backdrop-faded">
                    <h3 class="text-underline fs-7 fs-lg-6 text-white fw-bold mb-2">Petting the ghost</h3>
                    <h5 class="text-secondary-lighter fw-normal mb-3"><span class="fa-solid fa-map-marker-alt text-primary me-2"></span>Winterfell</h5>
                    <div class="d-sm-flex d-md-block d-lg-flex flex-between-center">
                      <h3 class="text-white fw-bold mb-3 mb-sm-0 mb-md-3 mb-lg-0 fs-7 fs-lg-6">$ 2,999</h3>
                      <div class="d-flex gap-3">
                        <h5 class="text-secondary-lighter fw-normal"> <span class="fa-solid fa-clock fs-9 me-2"></span>3 days</h5>
                        <h5 class="text-secondary-lighter fw-normal"> <span class="fa-solid fa-user fs-9 me-2"></span>From 1 to people</h5>
                      </div>
                    </div>
                  </div>
                </a></div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-6">
        <div class="container-medium">
          <div class="bg-holder overlay bg-opacity-75" style="background-image:url({{ asset('assets/img/bg/47.png') }});background-position: center; background-size: cover;"></div>
          <!--/.bg-holder-->
          <div class="row position-relative align-items-center gy-3">
            <div class="col-xxl-4 order-1 order-xxl-0">
              <ul class="list-unstyled d-flex gap-3 gap-xxl-4 flex-wrap mb-0 justify-content-center justify-content-xxl-start">
                <li><a class="text-secondary-lighter" href="#!">Home</a></li>
                <li><a class="text-secondary-lighter" href="#!">Terms</a></li>
                <li><a class="text-secondary-lighter" href="#!">Talent &amp; culture</a></li>
                <li><a class="text-secondary-lighter" href="#!">Destination</a></li>
              </ul>
            </div>
            <div class="col-sm-8 col-md-7 col-lg-5 col-xl-4 mx-auto mb-3 mb-xxl-0">
              <h2 class="mb-4 fw-semibold text-white text-center lh-sm">Subscribe to get notified about the latest news</h2>
              <div class="d-flex gap-2">
                <div class="form-icon-container flex-1"><input class="form-control form-icon-input" type="text" placeholder="Your email address"><span class="fa-solid fa-envelope form-icon text-body fs-9"></span></div><button class="btn btn-primary rounded">Sign up</button>
              </div>
            </div>
            <div class="col-xxl-4 order-2 order-xxl-0">
              <ul class="list-unstyled d-flex gap-3 gap-xxl-4 flex-wrap mb-0 justify-content-center justify-content-xxl-end">
                <li><a class="text-secondary-lighter" href="#!">Refund policy</a></li>
                <li><a class="text-secondary-lighter" href="#!">Sitemap</a></li>
                <li><a class="text-secondary-lighter" href="#!">EMI Policy</a></li>
                <li><a class="text-secondary-lighter" href="#!">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

      <div class="container-medium">
        <div class="row flex-center justify-content-md-between align-items-md-center gy-2 mt-4 mb-3">
          <div class="col-auto"><a class="navbar-brand" href="{{ url('dashboard') }}">
              <div class="d-flex align-items-center"><img src="{{ asset('assets/img/icons/logo.png') }}" alt="phoenix" width="27">
                <h5 class="logo-text ms-2">phoenix</h5>
              </div>
            </a></div>
          <div class="col-auto">
            <ul class="d-flex flex-center flex-wrap gap-x-5 gap-y-1 list-unstyled mb-0">
              <li><a class="lh-1 text-body-tertiary fw-semibold fs-9" href="#!">Become a Host</a></li>
              <li><a class="lh-1 text-body-tertiary fw-semibold fs-9" href="#!">Blog</a></li>
              <li><a class="lh-1 text-body-tertiary fw-semibold fs-9" href="#!">Career</a></li>
              <li><a class="lh-1 text-body-tertiary fw-semibold fs-9" href="mailto:example@gmail.com"> <span class="fa-regular fa-envelope me-2" data-fa-transform="down-1"></span>Support</a></li>
              <li><a class="lh-1 text-body-tertiary fw-semibold fs-9" href="tel:+01123581321"> <span class="fa-brands fa-whatsapp me-2"></span>+01 123 581321</a></li>
            </ul>
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
      </div>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    
    <div class="modal fade" id="trilAvailabilityModal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="trilAvailabilityModal">
      <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header justify-content-between align-items-start gap-5 px-4 pt-4 pb-3 border-0">
            <h2 class="mb-0">Walk where the king walked once in Wakanda</h2><button class="btn p-0 text-body-quaternary fs-6" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times"></span></button>
          </div>
          <div class="modal-body p-4">
            <div class="row g-5 mb-4">
              <div class="col-md-5"> <label class="fw-bold mb-2 fs-7 text-body-emphasis" for="tripDate">Choose your preferred date</label>
                <div class="form-icon-container flatpickr-input-container"><input class="form-control form-icon-input datetimepicker" id="tripDate" type="text" placeholder="22 May, 2024" data-options='{"disableMobile":true}'><span class="fa-solid fa-calendar text-body fs-9 form-icon"></span></div>
              </div>
              <div class="col-md-7">
                <div class="row g-3">
                  <div class="col-auto col-sm-6"><label class="fw-bold mb-2 fs-7 text-body-emphasis">Adults</label>
                    <div class="input-group gap-2" data-quantity="data-quantity"><button class="btn btn-phoenix-primary rounded px-3" data-type="minus"><span class="fa-solid fa-minus"></span></button><input class="form-control border-translucent input-spin-none text-center rounded" id="adult" type="number" value="2"><button class="btn btn-phoenix-primary rounded px-3" data-type="plus"><span class="fa-solid fa-plus"></span></button></div>
                  </div>
                  <div class="col-auto col-sm-6"><label class="fw-bold mb-2 fs-7 text-body-emphasis">Children</label>
                    <div class="input-group gap-2" data-quantity="data-quantity"><button class="btn btn-phoenix-primary rounded px-3" data-type="minus"><span class="fa-solid fa-minus"></span></button><input class="form-control border-translucent input-spin-none text-center rounded" id="children" type="number" value="2"><button class="btn btn-phoenix-primary rounded px-3" data-type="plus"><span class="fa-solid fa-plus"></span></button></div>
                  </div>
                </div>
              </div>
            </div><input class="card-form-check-input d-none" type="radio" name="availableOption" id="Economy-Plan" checked="checked">
            <div class="position-relative"><label class="stretched-link" for="Economy-Plan"></label>
              <div class="card">
                <div class="card-body">
                  <h4 class="mb-4"><span class="radio-circle me-2"></span>Economy Plan</h4>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-1"><span class="fa-solid fa-circle text-secondary-light me-3" style="width: 6px; height: 6px" data-fa-transform="down-20"></span>Non A/C transport</li>
                    <li class="d-flex mb-1"><span class="fa-solid fa-circle text-secondary-light me-3" style="width: 6px; height: 6px" data-fa-transform="down-20"></span>No extra luggage carrier</li>
                  </ul>
                  <hr class="my-4">
                  <h5 class="fw-normal mb-4">1 adult x $87.00</h5>
                  <div class="p-3 rounded-2 bg-body-highlight">
                    <h4>Total $87.00</h4>
                    <p class="fs-9 mb-0">( No additional taxes or booking fees )</p>
                  </div>
                </div>
              </div>
            </div><input class="card-form-check-input d-none" type="radio" name="availableOption" id="Business/Premium-Plan">
            <div class="position-relative"><label class="stretched-link" for="Business/Premium-Plan"></label>
              <div class="card">
                <div class="card-body">
                  <h4 class="mb-4"><span class="radio-circle me-2"></span>Business/Premium Plan</h4>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-1"><span class="fa-solid fa-circle text-secondary-light me-3" style="width: 6px; height: 6px" data-fa-transform="down-20"></span>A/C transport</li>
                    <li class="d-flex mb-1"><span class="fa-solid fa-circle text-secondary-light me-3" style="width: 6px; height: 6px" data-fa-transform="down-20"></span>Extra luggage carrier</li>
                  </ul>
                  <hr class="my-4">
                  <h5 class="fw-normal mb-4">1 adult x $120.00</h5>
                  <div class="p-3 rounded-2 bg-body-highlight">
                    <h4>Total $120.00</h4>
                    <p class="fs-9 mb-0">( No additional taxes or booking fees )</p>
                  </div>
                </div>
              </div>
            </div><label class="fw-bold mb-2 mt-5 fs-7 text-body-emphasis" for="selectTime">Select time</label><select class="form-select w-sm-50" id="selectTime">
              <option value="">8:00 AM</option>
              <option value="">12:00 PM</option>
              <option value="">3:00 PM</option>
            </select><a class="btn btn-primary btn-lg w-100 mt-6" href="{{ url('checkout') }}">Proceed to booking<span class="fa-solid fa-chevron-right fs-9 ms-2"></span></a>
          </div>
        </div>
      </div>
    </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/mapbox-gl/mapbox-gl.js') }}"></script>
<script src="{{ asset('vendors/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('vendors/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('vendors/glightbox/glightbox.min.js') }}"></script>
<script src="{{ asset('vendors/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/trip.js') }}"></script>
@endpush
