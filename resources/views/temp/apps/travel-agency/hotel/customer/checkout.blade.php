@extends('layouts.travel-agency')

@section('title', 'Hotel Checkout')

@section('content')
<div class="navbar-responsive-navitems navbar-expand border-y bg-body-emphasis border-translucent py-2">
        <div class="container-medium d-flex flex-between-center" data-navbar="data-navbar">
          <ul class="navbar-nav justify-content-end align-items-center">
            <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3 ps-0 " href="{{ url('apps/travel-agency/flight/homepage') }}">Homepage</a></li>
            <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3  " href="{{ url('hotel-details') }}">Hotel Details</a></li>
            <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3  " href="{{ url('hotel-compare') }}">Hotel Compare</a></li>
            <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3  text-primary" href="{{ url('checkout') }}">Check out</a></li>
            <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3  " href="{{ url('apps/travel-agency/flight/payment') }}">Payment</a></li>
            <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3  " href="{{ url('gallery') }}">Gallery</a></li>
            <li class="nav-item dropdown" data-nav-item="data-nav-item" data-more-item="data-more-item"><a class="nav-link dropdown-toggle dropdown-caret-none fw-bold pe-0 ps-3" href="javascript: void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-boundary="window" data-bs-reference="parent"> More<span class="fas fa-angle-down ms-2"></span></a>
              <div class="dropdown-menu dropdown-menu-end category-list" aria-labelledby="navbarDropdown" data-category-list="data-category-list"></div>
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
          <h2 class="mb-5">Check out</h2>
          <div class="row justify-content-between">
            <div class="col-lg-7 col-xl-6">
              <form id="checkoutForm1">
                <hr class="mt-0 mb-7">
                <h3 class="fw-bold mb-5">Enter your details</h3>
                <h5 class="mb-3">Are you travelling for work?</h5>
                <div class="form-check form-check-inline me-4"><input class="form-check-input" id="no" type="radio" name="tripTypeRadio" value="no" checked=""><label class="form-check-label" for="no">No</label></div>
                <div class="form-check form-check-inline"><input class="form-check-input" id="yes" type="radio" name="tripTypeRadio" value="yes"><label class="form-check-label" for="yes">Yes</label></div>
                <div class="row g-3 mb-5 mt-1">
                  <div class="col-sm-6"><label class="fw-bold text-body-highlight mb-1" for="first-name">First name</label><input class="form-control" type="text" id="first-name" placeholder="First name"></div>
                  <div class="col-sm-6"><label class="fw-bold text-body-highlight mb-1" for="last-name">Last name</label><input class="form-control" type="text" id="last-name" placeholder="Last name"></div>
                </div>
                <div class="row g-3">
                  <div class="col-sm-6"><label class="fw-bold text-body-highlight mb-1" for="email-address">Email address</label><input class="form-control" type="email" id="email-address" placeholder="Email address"></div>
                  <div class="col-sm-6"><label class="fw-bold text-body-highlight mb-1" for="confirm-email-address">Confirm email address</label><input class="form-control" type="email" id="confirm-email-address" placeholder="Confirm email address"></div>
                </div>
                <h5 class="mb-3 mt-7">Who are you booking for?</h5>
                <div class="form-check form-check-inline me-4"><input class="form-check-input" id="me" type="radio" name="bookingPersonRadio" value="no" checked=""><label class="form-check-label" for="me">I am the main guest</label></div>
                <div class="form-check form-check-inline"><input class="form-check-input" id="else" type="radio" name="bookingPersonRadio" value="yes"><label class="form-check-label" for="else">I am booking for somebody else</label></div>
                <h5 class="mb-3 mt-6">Add to your stay</h5>
                <div class="form-check mb-4"><input class="form-check-input" id="airportShuttle" type="checkbox"><label class="form-check-label fw-normal fs-8 text-body" for="airportShuttle"> I am interested in requesting an airport shuttle<span class="d-block fs-9 text-body-tertiary">We'll tell your accommodation what you're interested in so they can provide details and costs.</span></label></div>
                <div class="form-check"><input class="form-check-input" id="rentingCar" type="checkbox"><label class="form-check-label fw-normal fs-8 text-body" for="rentingCar"> I'm interested in renting a car<span class="d-block fs-9 text-body-tertiary">Make the most of your trip and check the car rental options in your booking confirmation.</span></label></div>
                <h5 class="mb-3 mt-6">Your arrival time</h5>
                <div class="row gx-2">
                  <div class="col-6 col-sm-3"><select class="form-select">
                      <option value="1">12:00</option>
                      <option value="2">03:00</option>
                      <option value="3">06:00</option>
                      <option value="4">09:00</option>
                    </select></div>
                  <div class="col-6 col-sm-3"><select class="form-select">
                      <option value="am">AM</option>
                      <option value="pm">PM</option>
                    </select></div>
                </div>
                <h5 class="mb-3 mt-7">Review house rules</h5>
                <p>Your host would like you to agree to the following house rules:</p>
                <p class="mb-2"><span class="fa-solid fa-circle text-body-quaternary fs-10 me-2" data-fa-transform="up-2"></span>No smoking</p>
                <p><span class="fa-solid fa-circle text-body-quaternary fs-10 me-2" data-fa-transform="up-2"></span>Pets are not allowed </p>
                <p class="text-info mb-7">By continuing to the next step, you are agreeing to these house rules.</p>
                <h5 class="mb-3">Special requests</h5>
                <p class="fs-9 text-body-tertiary mb-4">Special requests cannot be guaranteed, but the property will do its best to meet your needs. You can always make a special request after your booking is complete!</p><textarea class="form-control" name="requestText" rows="5" id="requestText" placeholder="Type your request"></textarea>
                <hr class="mt-7 mb-5"><a class="btn btn-primary" href="{{ url('apps/travel-agency/flight/payment') }}">Final details<span class="fa-solid fa-chevron-right ms-2" data-fa-transform="shrink-3"></span></a>
              </form>
            </div>
            <div class="col-lg-5 col-xl-4">
              <div class="card mt-5 mt-lg-0">
                <div class="card-body">
                  <h5 class="mb-3">Summary</h5><img class="rounded-2 mb-3" src="{{ asset('assets/img/hotels/39.png') }}" alt="" width="208">
                  <h4 class="text-body-highlight mb-2">Radisson Blu Water Garden Hotel, Dhaka</h4>
                  <p class="mb-5 text-body-tertiary">Airport Rd, Dhaka Cantonment, Dhaka, 1206, Bangladesh</p>
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between gap-3 mb-4">
                        <div>
                          <h5 class="text-body-highlight">Room 1</h5>
                          <p class="mb-0 text-body-tertiary">King-Super deluxe</p>
                        </div>
                        <h4 class="mb-0">$2,056.75</h4>
                      </div>
                      <div class="row align-items-center g-0">
                        <div class="col-3">
                          <h5 class="text-body text-nowrap mb-0">Check in</h5>
                        </div>
                        <div class="col-auto"><span class="px-2">:</span></div>
                        <div class="col-auto"><span>25 January, 2023</span></div>
                      </div>
                      <div class="row align-items-center g-0 mb-4">
                        <div class="col-3">
                          <h5 class="text-body text-nowrap mb-0">Check out</h5>
                        </div>
                        <div class="col-auto"><span class="px-2">:</span></div>
                        <div class="col-auto"><span>27 January, 2023</span></div>
                      </div>
                      <div class="d-flex flex-wrap gap-2"><span class="badge badge-phoenix badge-phoenix-secondary py-1 border-0 text-capitalize"><span class="fa-solid fa-bed fs-9 me-2"></span><span>Double bed</span></span><span class="badge badge-phoenix badge-phoenix-secondary py-1 border-0 text-capitalize"><span class="fa-solid fa-user fs-9 me-2"></span><span>2 Adults</span></span><span class="badge badge-phoenix badge-phoenix-secondary py-1 border-0 text-capitalize"><span class="fa-solid fa-moon fs-9 me-2"></span><span>2 Nights</span></span></div>
                    </div>
                  </div>
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between gap-3 mb-4">
                        <div>
                          <h5 class="text-body-highlight">Room 2</h5>
                          <p class="mb-0 text-body-tertiary">Standard double queen</p>
                        </div>
                        <h4 class="mb-0">$1,456.65</h4>
                      </div>
                      <div class="row align-items-center g-0">
                        <div class="col-3">
                          <h5 class="text-body text-nowrap mb-0">Check in</h5>
                        </div>
                        <div class="col-auto"><span class="px-2">:</span></div>
                        <div class="col-auto"><span>25 January, 2023</span></div>
                      </div>
                      <div class="row align-items-center g-0 mb-4">
                        <div class="col-3">
                          <h5 class="text-body text-nowrap mb-0">Check out</h5>
                        </div>
                        <div class="col-auto"><span class="px-2">:</span></div>
                        <div class="col-auto"><span>28 January, 2023</span></div>
                      </div>
                      <div class="d-flex flex-wrap gap-2"><span class="badge badge-phoenix badge-phoenix-secondary py-1 border-0 text-capitalize"><span class="fa-solid fa-bed fs-9 me-2"></span><span>Double bed</span></span><span class="badge badge-phoenix badge-phoenix-secondary py-1 border-0 text-capitalize"><span class="fa-solid fa-user fs-9 me-2"></span><span>2 Adults</span></span><span class="badge badge-phoenix badge-phoenix-secondary py-1 border-0 text-capitalize"><span class="fa-solid fa-baby fs-9 me-2"></span><span>1 Childs</span></span><span class="badge badge-phoenix badge-phoenix-secondary py-1 border-0 text-capitalize"><span class="fa-solid fa-moon fs-9 me-2"></span><span>3 Nights</span></span></div>
                    </div>
                  </div>
                  <div class="px-4 py-3 bg-body-highlight rounded-2">
                    <div class="d-flex flex-between-center mb-2">
                      <h6 class="text-body-tertiary fw-semibold">Sub-total</h6>
                      <h6 class="text-body-highlight fw-semibold">$3,513.40</h6>
                    </div>
                    <div class="d-flex flex-between-center">
                      <h6 class="text-body-tertiary fw-semibold">Discount</h6>
                      <h6 class="text-body-tertiary fw-semibold">-$50</h6>
                    </div>
                    <hr>
                    <div class="d-flex flex-between-center">
                      <h4 class="text-body">Total</h4>
                      <h4 class="text-body">1,756.70</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

      <section class="py-0 mb-5 mb-md-7 mb-lg-9">
        <div class="container-medium-md px-0 px-md-3">
          <div class="p-5 p-sm-7 py-xl-12 px-xl-15 rounded-md-2 overflow-hidden position-relative">
            <div class="bg-holder bg-holder overlay bg-opacity-85" style="background-image:url({{ asset('assets/img/bg/43.png') }});background-position: center; background-size: cover;"></div>
            <!--/.bg-holder-->
            <div class="row g-5 position-relative justify-content-between">
              <div class="col-md-6 col-lg-3">
                <h5 class="text-white mb-3">Discover</h5>
                <div class="row g-3">
                  <div class="col">
                    <ul class="list-unstyled mb-0">
                      <li class="mb-1"><a class="text-secondary-lighter" href="#!">Home</a></li>
                      <li class="mb-1"><a class="text-secondary-lighter" href="#!">Terms</a></li>
                      <li class="mb-1"><a class="text-secondary-lighter" href="#!">Talent &amp; culture</a></li>
                      <li class="mb-1"><a class="text-secondary-lighter" href="#!">Destination</a></li>
                      <li class="mb-1"><a class="text-secondary-lighter" href="#!">Sitemap</a></li>
                    </ul>
                  </div>
                  <div class="col">
                    <ul class="list-unstyled mb-0">
                      <li class="mb-1"><a class="text-secondary-lighter" href="#!">Refund policy</a></li>
                      <li class="mb-1"><a class="text-secondary-lighter" href="#!">EMI Policy</a></li>
                      <li class="mb-1"><a class="text-secondary-lighter" href="#!">Privacy Policy</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <h5 class="text-white mb-3">Contact</h5><a class="d-block text-secondary-lighter mb-1 text-nowrap" href="mailto:info@phoenixtravels.com"><span class="fa-solid fa-envelope me-2 me-lg-1 me-xl-2"></span>info@phoenixtravels.com</a><a class="d-block text-secondary-lighter mb-1" href="tel:+13134048290"><span class="fa-solid fa-phone me-2 me-lg-1 me-xl-2"> </span>+13134048290</a>
              </div>
              <div class="col-lg-5">
                <h2 class="text-white mb-2 fw-semibold">Enjoy your trip to the fullest</h2>
                <p class="mb-5 text-secondary-lighter">Sign up and get notified<br>about best deals immediately </p>
                <div class="d-flex gap-2">
                  <div class="form-icon-container flex-1"><input class="form-control form-icon-input" type="text" placeholder="Your email address"><span class="fa-solid fa-envelope form-icon text-body fs-9" data-fa-transform="up-2"></span></div><button class="btn btn-primary rounded">Sign up</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="container-medium">
        <div class="row flex-center justify-content-md-between align-items-md-center gy-2 mb-3">
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
@endsection
