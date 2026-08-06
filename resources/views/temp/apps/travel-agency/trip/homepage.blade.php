@extends('layouts.travel-agency')

@section('title', 'Trip Homepage')

@push('styles')
<link href="{{ asset('vendors/nouislider/nouislider.min.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="navbar-responsive-navitems navbar-expand border-y bg-body-emphasis border-translucent py-2">
        <div class="container-medium d-flex flex-between-center" data-navbar="data-navbar">
          <ul class="navbar-nav justify-content-end align-items-center">
            <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3 ps-0 text-primary" href="{{ url('apps/travel-agency/flight/homepage') }}">Homepage</a></li>
            <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3  " href="{{ url('trip-details') }}">Trip Details</a></li>
            <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3  " href="{{ url('checkout') }}">Checkout</a></li>
            <li class="nav-item dropdown" data-nav-item="data-nav-item" data-more-item="data-more-item"><a class="nav-link dropdown-toggle dropdown-caret-none fw-bold pe-0 ps-3" href="javascript: void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-boundary="window" data-bs-reference="parent"> More<span class="fas fa-angle-down ms-2"></span></a>
              <div class="dropdown-menu dropdown-menu-end category-list" aria-labelledby="navbarDropdown" data-category-list="data-category-list"></div>
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
              <li class="nav-item"><a class="nav-link fw-bold rounded-3" aria-current="page" href="{{ url('apps/travel-agency/hotel/customer/homepage') }}"> <span class="me-2 fa-solid fa-hotel"></span>Hotel</a></li>
              <li class="nav-item"><a class="nav-link fw-bold rounded-3" aria-current="page" href="{{ url('flight/homepage') }}"> <span class="me-2 fa-solid fa-plane"></span>Flight</a></li>
              <li class="nav-item"><a class="nav-link fw-bold rounded-3 active" aria-current="page" href="{{ url('apps/travel-agency/flight/homepage') }}"> <span class="me-2 fa-solid fa-suitcase-rolling"></span>Trip</a></li>
            </ul>
          </nav>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

      <section class="py-0">
        <div class="bg-holder overlay bg-opacity-50" style="background-image:url({{ asset('assets/img/bg/46.png') }});background-position: center; background-size: cover;"></div>
        <!--/.bg-holder-->
        <div class="container-medium position-relative pt-11 pb-15">
          <h2 class="text-center text-white mb-4">Where do you want to go?</h2>
          <div class="position-relative w-md-70 w-lg-50 mx-auto mb-4 mb-lg-10"><input class="form-control py-3 ps-4 pe-6 rounded-pill fs-8" type="text" placeholder="Search for a location"><span class="fa-solid fa-search position-absolute top-0 end-0 mt-4 me-4 fs-8 text-body-tertiary" data-fa-transform="up-3"></span></div>
          <div class="d-flex justify-content-center">
            <div class="d-none d-lg-flex gap-2"><input class="btn-check trip-filter-checkbox" type="checkbox" name="trip-type" id="attraction-shows" checked="checked"><label class="btn btn-phoenix-secondary text-nowrap px-3" for="attraction-shows">Attraction &amp; Shows</label><input class="btn-check trip-filter-checkbox" type="checkbox" name="trip-type" id="activities"><label class="btn btn-phoenix-secondary text-nowrap px-3" for="activities">Activities</label><input class="btn-check trip-filter-checkbox" type="checkbox" name="trip-type" id="day-tours"><label class="btn btn-phoenix-secondary text-nowrap px-3" for="day-tours">Day-tours</label><input class="btn-check trip-filter-checkbox" type="checkbox" name="trip-type" id="adventures"><label class="btn btn-phoenix-secondary text-nowrap px-3" for="adventures">Adventures</label><input class="btn-check trip-filter-checkbox" type="checkbox" name="trip-type" id="sight-seeing"><label class="btn btn-phoenix-secondary text-nowrap px-3" for="sight-seeing">Sight-seeing</label></div><button class="btn btn-phoenix-secondary ms-lg-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#tripFilterOffcanvas" aria-controls="tripFilterOffcanvas"><span class="fa-solid fa-filter fs-10 me-2"></span>Filter</button>
          </div>
        </div>
      </section>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-0 pb-9 mt-n13">
        <div class="container-medium">
          <div class="row g-3">
            <div class="col-md-6 col-xl-4">
              <div class="hoverbox rounded"><a href="{{ url('trip-details') }}"><img class="img-fluid" src="{{ asset('assets/img/trip/1.png') }}" alt="">
                  <div class="backdrop-faded">
                    <h3 class="text-underline fs-7 fs-lg-6 text-white fw-bold mb-2">Selfie with Snape</h3>
                    <h5 class="text-secondary-lighter fw-normal mb-3"><span class="fa-solid fa-map-marker-alt text-primary me-2"></span>Hogwarts</h5>
                    <div class="d-sm-flex d-md-block d-lg-flex flex-between-center">
                      <h3 class="text-white fw-bold mb-3 mb-sm-0 mb-md-3 mb-lg-0 fs-7 fs-lg-6">$ 2,340</h3>
                      <div class="d-flex gap-3">
                        <h5 class="text-secondary-lighter fw-normal"> <span class="fa-solid fa-clock fs-9 me-2"></span>3 days</h5>
                        <h5 class="text-secondary-lighter fw-normal"> <span class="fa-solid fa-user fs-9 me-2"></span>From 1 to people</h5>
                      </div>
                    </div>
                  </div>
                </a></div>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="hoverbox rounded"><a href="{{ url('trip-details') }}"><img class="img-fluid" src="{{ asset('assets/img/trip/2.png') }}" alt="">
                  <div class="backdrop-faded">
                    <h3 class="text-underline fs-7 fs-lg-6 text-white fw-bold mb-2">Dine with Joker</h3>
                    <h5 class="text-secondary-lighter fw-normal mb-3"><span class="fa-solid fa-map-marker-alt text-primary me-2"></span>Gotham</h5>
                    <div class="d-sm-flex d-md-block d-lg-flex flex-between-center">
                      <h3 class="text-white fw-bold mb-3 mb-sm-0 mb-md-3 mb-lg-0 fs-7 fs-lg-6">$ 4,540</h3>
                      <div class="d-flex gap-3">
                        <h5 class="text-secondary-lighter fw-normal"> <span class="fa-solid fa-clock fs-9 me-2"></span>5 days</h5>
                        <h5 class="text-secondary-lighter fw-normal"> <span class="fa-solid fa-user fs-9 me-2"></span>From 1 to people</h5>
                      </div>
                    </div>
                  </div>
                </a></div>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="hoverbox rounded"><a href="{{ url('trip-details') }}"><img class="img-fluid" src="{{ asset('assets/img/trip/3.png') }}" alt="">
                  <div class="backdrop-faded">
                    <h3 class="text-underline fs-7 fs-lg-6 text-white fw-bold mb-2">Ask Frodo to visit Mordor</h3>
                    <h5 class="text-secondary-lighter fw-normal mb-3"><span class="fa-solid fa-map-marker-alt text-primary me-2"></span>The Shire</h5>
                    <div class="d-sm-flex d-md-block d-lg-flex flex-between-center">
                      <h3 class="text-white fw-bold mb-3 mb-sm-0 mb-md-3 mb-lg-0 fs-7 fs-lg-6">$ 3,000</h3>
                      <div class="d-flex gap-3">
                        <h5 class="text-secondary-lighter fw-normal"> <span class="fa-solid fa-clock fs-9 me-2"></span>2 days</h5>
                        <h5 class="text-secondary-lighter fw-normal"> <span class="fa-solid fa-user fs-9 me-2"></span>From 1 to people</h5>
                      </div>
                    </div>
                  </div>
                </a></div>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="hoverbox rounded"><a href="{{ url('trip-details') }}"><img class="img-fluid" src="{{ asset('assets/img/trip/4.png') }}" alt="">
                  <div class="backdrop-faded">
                    <h3 class="text-underline fs-7 fs-lg-6 text-white fw-bold mb-2">Sit on the iron throne</h3>
                    <h5 class="text-secondary-lighter fw-normal mb-3"><span class="fa-solid fa-map-marker-alt text-primary me-2"></span>King’s Landing</h5>
                    <div class="d-sm-flex d-md-block d-lg-flex flex-between-center">
                      <h3 class="text-white fw-bold mb-3 mb-sm-0 mb-md-3 mb-lg-0 fs-7 fs-lg-6">$ 1,500</h3>
                      <div class="d-flex gap-3">
                        <h5 class="text-secondary-lighter fw-normal"> <span class="fa-solid fa-clock fs-9 me-2"></span>2 days</h5>
                        <h5 class="text-secondary-lighter fw-normal"> <span class="fa-solid fa-user fs-9 me-2"></span>From 1 to people</h5>
                      </div>
                    </div>
                  </div>
                </a></div>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="hoverbox rounded"><a href="{{ url('trip-details') }}"><img class="img-fluid" src="{{ asset('assets/img/trip/5.png') }}" alt="">
                  <div class="backdrop-faded">
                    <h3 class="text-underline fs-7 fs-lg-6 text-white fw-bold mb-2">Day out with Luke Skywalker</h3>
                    <h5 class="text-secondary-lighter fw-normal mb-3"><span class="fa-solid fa-map-marker-alt text-primary me-2"></span>Tatooine</h5>
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
              <div class="hoverbox rounded"><a href="{{ url('trip-details') }}"><img class="img-fluid" src="{{ asset('assets/img/trip/6.png') }}" alt="">
                  <div class="backdrop-faded">
                    <h3 class="text-underline fs-7 fs-lg-6 text-white fw-bold mb-2">Feed the smelly cat</h3>
                    <h5 class="text-secondary-lighter fw-normal mb-3"><span class="fa-solid fa-map-marker-alt text-primary me-2"></span>New York</h5>
                    <div class="d-sm-flex d-md-block d-lg-flex flex-between-center">
                      <h3 class="text-white fw-bold mb-3 mb-sm-0 mb-md-3 mb-lg-0 fs-7 fs-lg-6">$ 3,799</h3>
                      <div class="d-flex gap-3">
                        <h5 class="text-secondary-lighter fw-normal"> <span class="fa-solid fa-clock fs-9 me-2"></span>4 days</h5>
                        <h5 class="text-secondary-lighter fw-normal"> <span class="fa-solid fa-user fs-9 me-2"></span>From 1 to people</h5>
                      </div>
                    </div>
                  </div>
                </a></div>
            </div>
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
          <div class="mt-5 position-relative text-center">
            <hr class="m-0 position-absolute top-50 translate-middle-y w-100"><button class="btn btn-phoenix-secondary rounded-pill position-relative">Show more</button>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

      <div class="offcanvas offcanvas-end" tabindex="-1" id="tripFilterOffcanvas" aria-labelledby="tripFilterOffcanvasLabel">
        <div class="offcanvas-header p-4 bg-body-highlight">
          <h5 class="mb-0 text-body-highlight" id="tripFilterOffcanvasLabel">Filter</h5><button class="btn btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body scrollbar px-4 pt-4 pb-5">
          <h4 class="text-body-highlight mb-4">Price Range</h4>
          <div class="row g-2">
            <div class="col-6">
              <div class="form-icon-container"><input class="form-control form-icon-input" type="text" placeholder="Minimum amount: $245"><span class="fa-solid fa-dollar-sign form-icon text-body-tertiary fs-9"></span></div>
            </div>
            <div class="col-6">
              <div class="form-icon-container"><input class="form-control form-icon-input" type="text" placeholder="Maximum amount: $245"><span class="fa-solid fa-dollar-sign form-icon text-body-tertiary fs-9"></span></div>
            </div>
          </div>
          <div class="noUi-primary-lighter noUi-slider-large noUi-handle-primary noUi-handle-circle ps-5 pe-3 mt-3" data-nouislider='{"range":{"min":0,"max":250},"start":[20,150],"connect":true}'></div>
          <hr class="my-5">
          <div class="d-lg-none">
            <h4 class="mb-4 text-body-highlight">Category</h4>
            <div class="row g-2">
              <div class="col-6"><input class="btn-check trip-filter-checkbox" type="checkbox" name="trip-type" id="attraction-shows-offcanvas" checked="checked"><label class="btn btn-phoenix-secondary text-nowrap px-3 w-100" for="attraction-shows-offcanvas">Attraction &amp; Shows</label></div>
              <div class="col-6"><input class="btn-check trip-filter-checkbox" type="checkbox" name="trip-type" id="activities-offcanvas"><label class="btn btn-phoenix-secondary text-nowrap px-3 w-100" for="activities-offcanvas">Activities</label></div>
              <div class="col-6"><input class="btn-check trip-filter-checkbox" type="checkbox" name="trip-type" id="day-tours-offcanvas"><label class="btn btn-phoenix-secondary text-nowrap px-3 w-100" for="day-tours-offcanvas">Day-tours</label></div>
              <div class="col-6"><input class="btn-check trip-filter-checkbox" type="checkbox" name="trip-type" id="adventures-offcanvas"><label class="btn btn-phoenix-secondary text-nowrap px-3 w-100" for="adventures-offcanvas">Adventures</label></div>
              <div class="col-6"><input class="btn-check trip-filter-checkbox" type="checkbox" name="trip-type" id="Sight-seeing-offcanvas"><label class="btn btn-phoenix-secondary text-nowrap px-3 w-100" for="Sight-seeing-offcanvas">Sight-seeing</label></div>
            </div>
            <hr class="my-5">
          </div>
          <h4 class="mb-4 text-body-highlight">Duration</h4>
          <div class="row g-3">
            <div class="col-6">
              <div class="form-check"><input class="form-check-input" id="durationLess6" type="checkbox" value="durationLess6"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="durationLess6">Less than 6 hours</label></div>
              <div class="form-check mb-0"><input class="form-check-input" id="duration12to24" type="checkbox" value="duration12to24"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="duration12to24">12 - 24 hours</label></div>
            </div>
            <div class="col-6">
              <div class="form-check"><input class="form-check-input" id="duration6to12" type="checkbox" value="duration6to12"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="duration6to12">6 - 12 hours</label></div>
              <div class="form-check mb-0"><input class="form-check-input" id="duration24plus" type="checkbox" value="duration24plus"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="duration24plus">24+ hours</label></div>
            </div>
          </div>
          <hr class="my-5">
          <h4 class="mb-4 text-body-highlight">Time</h4>
          <div class="row g-2">
            <div class="col-4"><input class="btn-check flight-filter-checkbox" type="checkbox" name="undefined" id="duration8AMTo10AM"><label class="btn btn-phoenix-secondary text-nowrap w-100 px-0" for="duration8AMTo10AM">8 AM - 10 AM</label></div>
            <div class="col-4"><input class="btn-check flight-filter-checkbox" type="checkbox" name="undefined" id="duration10AMTo12PM"><label class="btn btn-phoenix-secondary text-nowrap w-100 px-0" for="duration10AMTo12PM">10 AM - 12 PM</label></div>
            <div class="col-4"><input class="btn-check flight-filter-checkbox" type="checkbox" name="undefined" id="duration12PMTo2PM"><label class="btn btn-phoenix-secondary text-nowrap w-100 px-0" for="duration12PMTo2PM">12 PM - 2 PM</label></div>
            <div class="col-4"><input class="btn-check flight-filter-checkbox" type="checkbox" name="undefined" id="duration2PMTo4PM"><label class="btn btn-phoenix-secondary text-nowrap w-100 px-0" for="duration2PMTo4PM">2 PM - 4 PM</label></div>
            <div class="col-4"><input class="btn-check flight-filter-checkbox" type="checkbox" name="undefined" id="duration4PMTo6PM"><label class="btn btn-phoenix-secondary text-nowrap w-100 px-0" for="duration4PMTo6PM">4 PM - 6 PM</label></div>
            <div class="col-4"><input class="btn-check flight-filter-checkbox" type="checkbox" name="undefined" id="duration6PMTo8PM"><label class="btn btn-phoenix-secondary text-nowrap w-100 px-0" for="duration6PMTo8PM">6 PM - 8 PM</label></div>
          </div>
          <hr class="my-5">
          <h4 class="mb-4 text-body-highlight">Travel Style</h4>
          <div class="row g-3">
            <div class="col-6">
              <div class="form-check"><input class="form-check-input" id="soloTravel" type="checkbox" value="soloTravel"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="soloTravel">Solo Travel</label></div>
              <div class="form-check mb-0"><input class="form-check-input" id="familyFriendly" type="checkbox" value="familyFriendly"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="familyFriendly">Family-Friendly</label></div>
            </div>
            <div class="col-6">
              <div class="form-check"><input class="form-check-input" id="groupTravel" type="checkbox" value="groupTravel"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="groupTravel">Group Travel</label></div>
              <div class="form-check mb-0"><input class="form-check-input" id="adventureTravel" type="checkbox" value="adventureTravel"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="adventureTravel">Adventure Travel</label></div>
            </div>
          </div><a class="fw-bold fs-9 mt-3 d-inline-block" href="#!">Show more items</a>
          <hr class="my-5">
          <h4 class="mb-4">Tags</h4>
          <h5 class="fw-normal my-3 text-body-quaternary">Destination Type</h5>
          <div class="row gx-3">
            <div class="col-6">
              <div class="form-check"><input class="form-check-input" id="beach" type="checkbox" value="beach"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="beach">Beach</label></div>
            </div>
            <div class="col-6">
              <div class="form-check"><input class="form-check-input" id="mountain" type="checkbox" value="mountain"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="mountain">Mountain</label></div>
            </div>
            <div class="col-6">
              <div class="form-check"><input class="form-check-input" id="city" type="checkbox" value="city"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="city">City</label></div>
            </div>
            <div class="col-6">
              <div class="form-check"><input class="form-check-input" id="countryside" type="checkbox" value="countryside"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="countryside">Countryside</label></div>
            </div>
            <div class="col-6">
              <div class="form-check"><input class="form-check-input" id="island" type="checkbox" value="island"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="island">Island</label></div>
            </div>
            <div class="col-6">
              <div class="form-check"><input class="form-check-input" id="jungle" type="checkbox" value="jungle"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="jungle">Jungle</label></div>
            </div>
          </div>
          <h5 class="fw-normal my-3 text-body-quaternary">Activities</h5>
          <div class="row gx-3">
            <div class="col-6">
              <div class="form-check"><input class="form-check-input" id="hiking" type="checkbox" value="hiking"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="hiking">Hiking</label></div>
            </div>
            <div class="col-6">
              <div class="form-check"><input class="form-check-input" id="camping" type="checkbox" value="camping"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="camping">Camping</label></div>
            </div>
            <div class="col-6">
              <div class="form-check"><input class="form-check-input" id="sightseeing" type="checkbox" value="sightseeing"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="sightseeing">Sightseeing</label></div>
            </div>
            <div class="col-6">
              <div class="form-check"><input class="form-check-input" id="wildlifeViewing" type="checkbox" value="wildlifeViewing"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="wildlifeViewing">Wildlife Viewing</label></div>
            </div>
          </div>
          <h5 class="fw-normal my-3 text-body-quaternary">Season</h5>
          <div class="row gx-3">
            <div class="col-6">
              <div class="form-check"><input class="form-check-input" id="summer" type="checkbox" value="summer"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="summer">Summer</label></div>
            </div>
            <div class="col-6">
              <div class="form-check"><input class="form-check-input" id="winter" type="checkbox" value="winter"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="winter">Winter</label></div>
            </div>
            <div class="col-6">
              <div class="form-check"><input class="form-check-input" id="spring" type="checkbox" value="spring"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="spring">Spring</label></div>
            </div>
            <div class="col-6">
              <div class="form-check"><input class="form-check-input" id="fallAutumn" type="checkbox" value="fallAutumn"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="fallAutumn">Fall/Autumn</label></div>
            </div>
          </div>
          <h5 class="fw-normal my-3 text-body-quaternary">Budget</h5>
          <div class="row gx-3">
            <div class="col-6">
              <div class="form-check"><input class="form-check-input" id="luxury" type="checkbox" value="luxury"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="luxury">Luxury</label></div>
            </div>
            <div class="col-6">
              <div class="form-check"><input class="form-check-input" id="midRange" type="checkbox" value="midRange"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="midRange">Mid-range</label></div>
            </div>
            <div class="col-6">
              <div class="form-check"><input class="form-check-input" id="budget" type="checkbox" value="budget"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="budget">Budget</label></div>
            </div>
          </div>
          <h5 class="fw-normal my-3 text-body-quaternary">Accommodation</h5>
          <div class="row gx-3">
            <div class="col-6">
              <div class="form-check"><input class="form-check-input" id="hotel" type="checkbox" value="hotel"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="hotel">Hotel</label></div>
            </div>
            <div class="col-6">
              <div class="form-check"><input class="form-check-input" id="resort" type="checkbox" value="resort"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="resort">Resort</label></div>
            </div>
            <div class="col-6">
              <div class="form-check"><input class="form-check-input" id="vacationRental" type="checkbox" value="vacationRental"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="vacationRental">Vacation Rental</label></div>
            </div>
            <div class="col-6">
              <div class="form-check"><input class="form-check-input" id="homestay" type="checkbox" value="homestay"><label class="form-check-label fs-8 text-body-highlight fw-normal" for="homestay">Homestay</label></div>
            </div>
          </div><a class="fw-bold fs-9 mt-3 d-inline-block" href="#!">Less items</a>
        </div>
        <div class="p-4 border-top border-translucent d-flex gap-2"><button class="btn btn-lg btn-phoenix-primary"><span class="fa-solid fa-arrows-rotate me-2 fs-9"></span>Reset</button>
          <button class="btn btn-lg btn-primary flex-1"> <span class="fa-solid fa-search me-2 fs-9"></span>Update result</button>
        </div>
      </div>

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
@endsection

@push('scripts')
<script src="{{ asset('vendors/nouislider/nouislider.min.js') }}"></script>
@endpush
