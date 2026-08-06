<div class="sticky-top bg-body" data-navbar-shadow-on-scroll="data-navbar-shadow-on-scroll">
  <nav class="navbar navbar-top navbar-expand-lg container-medium border-0 bg-body px-3 py-2"><button class="navbar-toggler fs-8 ps-2 me-sm-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button><a class="navbar-brand flex-1 flex-lg-grow-0 me-lg-8 me-xl-13" href="{{ url('apps/travel-agency/landing') }}">
      <div class="d-flex align-items-center"><img src="{{ asset('assets/img/icons/logo.png') }}" alt="phoenix" width="27">
        <h5 class="logo-text ms-2">phoenix</h5>
      </div>
    </a>
    <div class="d-flex align-items-center gap-2 gap-sm-3 gap-md-4 my-2 order-lg-1">
      <div class="theme-control-toggle feather-icon-wait"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggleSm"><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggleSm" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme" style="height:32px;width:32px;"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggleSm" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme" style="height:32px;width:32px;"><span class="icon" data-feather="sun"></span></label></div><a class="btn btn-link text-body-tertiary p-0" href="#!"><span data-feather="map-pin" style="width: 18px; height: 18px"></span></a><a class="btn btn-link text-body-tertiary p-0" href="#!"><span data-feather="bell" style="width: 20px; height: 20px"></span></a><a class="btn btn-link text-body-tertiary p-0" href="{{ url('pages/authentication/card/sign-in') }}" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Agent Login"><span data-feather="log-in" style="width: 20px; height: 20px"></span></a><a class="btn btn-link text-body-tertiary p-0" href="#!"><span data-feather="user" style="width: 20px; height: 20px"></span></a>
    </div>
    <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center pb-0" id="navbarTopCollapse">
      <ul class="navbar-nav travel-nav-top me-auto" data-dropdown-on-hover="data-dropdown-on-hover">
        <li class="nav-item dropdown"><a class="nav-link fs-8 fw-bold dropdown-toggle {{ request()->is('apps/travel-agency/hotel*') ? 'text-primary' : '' }}" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">Hotel</a>
          <ul class="dropdown-menu navbar-dropdown-caret">
            <li><a class="dropdown-item" href="{{ url('apps/travel-agency/hotel/customer/homepage') }}">Homepage</a></li>
            <li><a class="dropdown-item" href="{{ url('apps/travel-agency/hotel/customer/hotel-details') }}">Hotel Details</a></li>
            <li><a class="dropdown-item" href="{{ url('apps/travel-agency/hotel/customer/hotel-compare') }}">Hotel Compare</a></li>
            <li><a class="dropdown-item" href="{{ url('apps/travel-agency/hotel/customer/checkout') }}">Check out</a></li>
            <li><a class="dropdown-item" href="{{ url('apps/travel-agency/hotel/customer/payment') }}">Payment</a></li>
            <li><a class="dropdown-item" href="{{ url('apps/travel-agency/hotel/customer/gallery') }}">Gallery</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown"><a class="nav-link fs-8 fw-bold dropdown-toggle {{ request()->is('apps/travel-agency/flight*') ? 'text-primary' : '' }}" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">Flight</a>
          <ul class="dropdown-menu navbar-dropdown-caret">
            <li><a class="dropdown-item" href="{{ url('apps/travel-agency/flight/homepage') }}">Homepage</a></li>
            <li><a class="dropdown-item" href="{{ url('apps/travel-agency/flight/booking') }}">Booking</a></li>
            <li><a class="dropdown-item" href="{{ url('apps/travel-agency/flight/payment') }}">Payment</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown"><a class="nav-link fs-8 fw-bold dropdown-toggle {{ request()->is('apps/travel-agency/trip*') ? 'text-primary' : '' }}" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">Trip</a>
          <ul class="dropdown-menu navbar-dropdown-caret">
            <li><a class="dropdown-item" href="{{ url('apps/travel-agency/trip/homepage') }}">Homepage</a></li>
            <li><a class="dropdown-item" href="{{ url('apps/travel-agency/trip/trip-details') }}">Trip Details</a></li>
            <li><a class="dropdown-item" href="{{ url('apps/travel-agency/trip/checkout') }}">Checkout</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown"><a class="nav-link fs-8 fw-bold {{ request()->is('apps/travel-agency/landing*') ? 'text-primary' : '' }}" href="{{ url('apps/travel-agency/landing') }}">Landing</a></li>
      </ul>
    </div>
  </nav>
</div>
