@extends('layouts.vertical')

@section('title', 'Event Detail')

@push('styles')
<link href="{{ asset('vendors/choices/choices.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/glightbox/glightbox.min.css') }}" rel="stylesheet">
@endpush

@section('content')
<nav class="mb-3" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
            <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
            <li class="breadcrumb-item active">Default</li>
          </ol>
        </nav>
        <div class="pb-9">
          <h2 class="mb-4 mb-lg-6">Event details</h2><img class="rounded w-100 object-fit-cover mb-5 mb-md-6 mb-xl-8" src="{{ asset('assets/img/generic/34.png') }}" alt="" style="min-height: 250px;">
          <div class="row gx-lg-9">
            <div class="col-xl-8 border-end-xl">
              <div class="card mb-9">
                <div class="card-body">
                  <h1 class="lh-sm fs-6 fs-xxl-4 mb-2">Brandmyth presents- Shironamhin 25 years celebration with symphony orchestra</h1>
                  <p class="fs-8 mb-4 text-body-tertiary">Tavern on the Greend, New York</p>
                  <div class="card mb-5 mb-xxl-7">
                    <div class="card-body">
                      <div class="row gy-5">
                        <div class="col-md-6 d-flex justify-content-between">
                          <div>
                            <div class="mb-3">
                              <div class="d-flex align-items-center">
                                <div class="px-2 py-1 bg-info-subtle rounded"><span class="text-info" data-feather="map-pin"></span></div>
                                <h5 class="ms-2 text-body-emphasis mb-0">Location</h5>
                              </div>
                            </div>
                            <p class="lh-sm mb-0 text-body-tertiary">36/4A, James Tiberius Auditorium,<br>Vancouver, British Columbia, Canada </p>
                          </div>
                          <div class="my-4 mx-3 border-start border-translucent d-none d-md-block"></div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-3">
                            <div class="d-flex align-items-center">
                              <div class="px-2 py-1 bg-primary-subtle rounded"><span class="text-primary" data-feather="clock"></span></div>
                              <h5 class="ms-2 mb-0">Date &amp; Time</h5>
                            </div>
                          </div>
                          <p class="lh-sm mb-0 text-body-tertiary">28th June - 2nd July 2022,<br>10 am - 4 pm Eastern Daylight Time</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col-12 col-md-auto flex-md-grow-1"><button class="btn btn-primary w-100" type="button">Get Tickets</button></div>
                    <div class="col-12 col-sm-auto flex-sm-grow-1 flex-md-grow-0"><button class="btn btn-phoenix-primary w-100" type="button"><span class="fa-regular fa-calendar-plus me-2"></span>Add to Calendar </button></div>
                    <div class="col-6 col-sm-auto"><button class="btn btn-phoenix-primary w-100" type="button"><span class="fa-solid fa-heart me-2"></span>3677</button></div>
                    <div class="col-6 col-sm-auto"><button class="btn btn-phoenix-primary w-100" type="button"><span class="fa-solid fa-share-nodes me-2"></span>4467</button></div>
                  </div>
                </div>
              </div>
              <h2 class="mb-3">About this event</h2>
              <p class="text-justify text-body-secondary mb-6 mb-xxl-8">The Festival Season hopes to continue its rescheduled events in 2023 during the spring block. This will be a continuation of the tradition for the loyal fanbase to watch a jam-packed day full of exciting top-notch performances. With a unique lineup, you’ll know what to expect and get ready to embrace the festivity. Moreover, we’ve added a detailed list of the performers, with details of dates, lineups and prospective entry requirements. We will keep you posted with necessary updates regarding the event.</p>
              <h4 class="mb-3 fw-bold text-body-highlight fs-xxl-6">Singers:</h4>
              <p>To join the festival, you’ll need to register through <a href="mailto:register@event.com">register@event.com </a>after confirming the payment, you’ll be provided with a unique ID number that you’ll need to show before the authority to get the tickets.</p>
              <p>The ID number will be unique to all members, so it’s requested that you don’t share it with anyone. Any damage regarding a misused ID will not be ours to compensate or refund.Enjoy!</p>
              <div class="row g-1 g-sm-2 mb-7 mb-xxl-8">
                <div class="col-3"><a href="{{ asset('assets/img/gallery/19.jpg') }}" data-gallery="gallery-posts-undefined"><img class="rounded h-100 w-100 object-fit-cover" src="{{ asset('assets/img/gallery/19.jpg') }}" alt="..."></a></div>
                <div class="col-3"><a href="{{ asset('assets/img/gallery/20.jpg') }}" data-gallery="gallery-posts-undefined"><img class="rounded h-100 w-100 object-fit-cover" src="{{ asset('assets/img/gallery/20.jpg') }}" alt="..."></a></div>
                <div class="col-6"><a href="{{ asset('assets/img/gallery/21.jpg') }}" data-gallery="gallery-posts-undefined"><img class="rounded h-100 w-100 object-fit-cover" src="{{ asset('assets/img/gallery/21.jpg') }}" alt="..."></a></div>
              </div>
              <h4 class="mb-3 text-body-highlight fs-xxl-6">Topic To Be Covered:</h4>
              <ul class="mb-6 ps-4">
                <li>Latest Update With Bitcoin</li>
                <li>Blockchain Vs Bitcoin</li>
                <li>Why Do We Need CryptoCurrency?</li>
                <li>Bitcoin History</li>
                <li>Bitcoin Vs Ethereum</li>
                <li>How Big Is Cryptocurrency Right Now?</li>
                <li>Crypto Scams &amp; How To Identify Them</li>
                <li>Is it Worth Buying To Keep?</li>
              </ul>
              <h4 class="mb-3 text-body-highlight fs-xxl-6">Refund Policy:</h4>
              <ul class="mb-6 ps-4">
                <li>Contact the organizer to request a refund.</li>
                <li>Eventbrite's fee is nonrefundable.</li>
              </ul>
              <h3 class="mb-3 fw-bold text-body-highlight fs-7 fs-xxl-6">Responses:</h3>
              <div class="d-flex mb-6">
                <div class="me-3">
                  <p class="mb-2 text-body-secondary">Going</p>
                  <h3 class="text-body-secondary">4,569</h3>
                </div>
                <div class="my-3 mx-2 mx-sm-3 border-start"></div>
                <div class="mx-3">
                  <p class="mb-2 text-body-secondary">Interested</p>
                  <h3 class="text-body-secondary">15,652</h3>
                </div>
                <div class="my-3 mx-2 mx-sm-3 border-start"></div>
                <div class="ms-3">
                  <p class="mb-2 text-body-secondary">Share</p>
                  <h3 class="text-body-secondary">11,236</h3>
                </div>
              </div>
              <h3 class="mb-3 fw-bold text-body-highlight fs-7">Share with Friends:</h3>
              <div class="d-flex mb-5"><button class="btn btn-phoenix-primary btn-icon me-2"><span class="fa-brands fa-facebook text-facebbok"></span></button>
                <button class="btn btn-phoenix-primary btn-icon me-2"><span class="fa-brands fa-facebook-messenger"></span></button>
                <button class="btn btn-phoenix-primary btn-icon me-2"><span class="fa-brands fa-twitter text-info"></span></button>
                <button class="btn btn-phoenix-primary btn-icon me-2"><span class="fa-solid fa-envelope text-danger"></span></button>
                <button class="btn btn-phoenix-primary btn-icon me-2"><span class="fa-brands fa-linkedin-in text-info"></span></button>
              </div><button class="btn btn-phoenix-primary w-100 mb-5 mb-xl-0" type="button">Load more</button>
            </div>
            <div class="col-xl-4">
              <h3 class="mb-5 mb-xl-4">Organized by</h3>
              <div class="row g-2 mb-6 align-items-center">
                <div class="col-auto"><img class="rounded img-fluid" src="{{ asset('assets/img/brand2/b.png') }}" alt="..." width="40" height="40"></div>
                <div class="col-sm-auto flex-1"><a class="mb-0 text-primary fw-semibold lh-sm" href="#!">Bass Events, Inc.</a></div>
                <div class="col-sm-auto col-xl-12 col-xxl-auto"><button class="btn btn-link text-body p-0 me-2" type="button">10k Followers </button>
                  <button class="btn btn-phoenix-primary px-3" type="button"><span class="fa-solid fa-user-plus me-2"></span>Follow</button>
                </div>
              </div>
              <div class="mb-8">
                <h3 class="mb-5 mb-xl-4">Location </h3>
                <div class="googlemap mb-3 mb-xl-4 location-map border" data-googlemap="data-googlemap" data-gmap="data-gmap" data-latlng="40.7228022,-74.0020158" data-scrollwheel="false" data-zoom="15">
                  <div class="marker-content py-3">
                    <h5>Google map </h5>
                    <p class="mb-0">A nice template for your site.<br>Customize it as you want.</p>
                  </div>
                </div>
                <div class="row flex-between-center g-0 gy-3">
                  <div class="col-12 col-sm-auto me-1">
                    <div class="d-flex">
                      <h3 class="fw-bold text-body-highlight fs-8 me-2 mb-0">James Tiberius Auditorium</h3>
                      <p class="mb-0 text-body-highlight fs-9">Vancouver</p>
                    </div>
                  </div>
                  <div class="col-12 col-sm-auto col-xl-12"><button class="btn btn-phoenix-primary w-100" type="button"><span class="fa-solid fa-route me-2"></span>Get directions</button></div>
                </div>
              </div>
              <h3 class="mb-3">Tags</h3>
              <div class="d-flex flex-wrap pb-7 border-bottom border-translucent"><span class="badge badge-tag me-2 mb-2">Music</span><span class="badge badge-tag me-2 mb-2">CONCERT</span><span class="badge badge-tag mb-2">Greatest show on earth</span></div>
              <div class="row g-0 py-3 border-bottom border-dashed align-items-end justify-content-between">
                <div class="col-auto">
                  <h3 class="flex-1 mb-0 text-nowrap me-3">Upcoming events</h3>
                </div>
                <div class="col-auto"><a class="fw-bold fs-9" href="#!">See more</a></div>
              </div>
              <div class="py-3 border-bottom border-translucent border-dashed">
                <div class="d-flex flex-between-center">
                  <p class="text-warning fs-10 mb-0 fw-bold mb-1">MON, FEB 21- MARCH 23</p>
                  <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none d-flex btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                  </div>
                </div><a class="text-primary-hover text-body-highlight fw-bold mb-2 line-clamp-1 me-5 lh-base" href="#!">Master Class on FILM Studies THESIS on Makers</a>
                <p class="text-body-secondary fs-9 mb-2">Organized by <br><a class="fw-bold text-primary" href="#!">IAFM- International Academy of Film and Media</a></p>
                <p class="fs-10 text-body-tertiary text-opacity-85">64 people going</p>
                <p class="fs-9 text-body-tertiary fw-bold mb-1"><span class="fa-solid fa-clock text-body-secondary me-1"></span>12.30PM - 10PM</p>
                <p class="fs-9 text-body-tertiary fw-bold mb-0"><span class="fa-solid fa-map-marker-alt text-body-secondary me-1"></span>Tavern on the Greend, New York</p>
              </div>
              <div class="py-3 border-bottom border-translucent border-dashed">
                <div class="d-flex flex-between-center">
                  <p class="text-warning fs-10 mb-0 fw-bold mb-1">MON, FEB 21- MARCH 23</p>
                  <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none d-flex btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                  </div>
                </div><a class="text-primary-hover text-body-highlight fw-bold mb-2 line-clamp-1 me-5 lh-base" href="#!">Master Class on FILM Studies 'ANALYSIS of Cinema'</a>
                <p class="text-body-secondary fs-9 mb-2">Organized by <br><a class="fw-bold text-primary" href="#!">IAFM- International Academy of Film and Media</a></p>
                <p class="fs-10 text-body-tertiary text-opacity-85">64 people going</p>
                <p class="fs-9 text-body-tertiary fw-bold mb-1"><span class="fa-solid fa-clock text-body-secondary me-1"></span>12.30PM - 10PM</p>
                <p class="fs-9 text-body-tertiary fw-bold mb-0"><span class="fa-solid fa-map-marker-alt text-body-secondary me-1"></span>Tavern on the Greend, New York</p>
              </div>
              <div class="py-3 border-bottom border-translucent border-dashed">
                <div class="d-flex flex-between-center">
                  <p class="text-warning fs-10 mb-0 fw-bold mb-1">MON, FEB 21- MARCH 23</p>
                  <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none d-flex btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                  </div>
                </div><a class="text-primary-hover text-body-highlight fw-bold mb-2 line-clamp-1 me-5 lh-base" href="#!">Witnessing History in Making Photographs</a>
                <p class="text-body-secondary fs-9 mb-2">Organized by <br><a class="fw-bold text-primary" href="#!">IAFM- International Academy of Film and Media</a></p>
                <p class="fs-10 text-body-tertiary text-opacity-85">64 people going</p>
                <p class="fs-9 text-body-tertiary fw-bold mb-1"><span class="fa-solid fa-clock text-body-secondary me-1"></span>12.30PM - 10PM</p>
                <p class="fs-9 text-body-tertiary fw-bold mb-0"><span class="fa-solid fa-map-marker-alt text-body-secondary me-1"></span>Tavern on the Greend, New York</p>
              </div>
            </div>
          </div>
        </div>
        
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
<script src="{{ asset('vendors/glightbox/glightbox.min.js') }}"></script>
@endpush
