@extends('layouts.travel-agency')

@section('title', 'Hotel Payment')

@section('content')
    <div class="navbar-responsive-navitems navbar-expand border-y bg-body-emphasis border-translucent py-2">
        <div class="container-medium d-flex flex-between-center" data-navbar="data-navbar">
            <ul class="navbar-nav justify-content-end align-items-center">
                <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3 ps-0 "
                        href="{{ url('apps/travel-agency/hotel/homepage') }}">Homepage</a></li>
                <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3"
                        href="{{ url('apps/travel-agency/hotel/hotel-details') }}">Hotel Details</a></li>
                <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3"
                        href="{{ url('apps/travel-agency/hotel/hotel-compare') }}">Hotel Compare</a></li>
                <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3"
                        href="{{ url('apps/travel-agency/hotel/checkout') }}">Check out</a></li>
                <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3 text-primary"
                        href="{{ url('apps/travel-agency/hotel/payment') }}">Payment</a></li>
                <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3"
                        href="{{ url('apps/travel-agency/hotel/gallery') }}">Gallery</a></li>
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
        <div class="container-medium">
            <nav class="mb-3" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Page 1</a></li>
                    <li class="breadcrumb-item"><a href="#">Page 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
            </nav>
            <h2 class="mb-5">Payment</h2>
            <div class="row justify-content-between">
                <div class="col-lg-7 col-xl-6">
                    <form id="checkoutForm2"><a class="btn btn-phoenix-primary" href="{{ url('checkout') }}"><span
                                class="fas fa-chevron-left me-2" data-fa-transform="shrink-3"></span>Go back</a>
                        <hr class="mt-5 mb-7">
                        <h3 class="mb-5">Enter your address</h3>
                        <div class="row g-3 mb-5">
                            <div class="col-sm-3"><label class="fw-bold text-body-highlight mb-1"
                                    for="country">Country</label><select class="form-select" id="country">
                                    <option value="1">India</option>
                                    <option value="2">USB</option>
                                    <option value="3">UAE</option>
                                </select></div>
                            <div class="col-sm-5 col-lg-4"><label class="fw-bold text-body-highlight mb-1"
                                    for="phone-number">Phone number</label><input class="form-control input-spin-none"
                                    type="number" id="phone-number" placeholder="Enter phone number"></div>
                        </div>
                        <div class="row g-3">
                            <div class="col-sm-8 col-lg-7"><label class="fw-bold text-body-highlight mb-1"
                                    for="phone-number-type">Email address</label><input class="form-control input-spin-none"
                                    type="email" id="phone-number-type" placeholder="Email address"></div>
                        </div>
                        <h3 class="mt-7 mb-5">Payment Method</h3>
                        <div class="row gx-xxl-6 mb-5">
                            <div class="col-md-auto">
                                <div class="d-flex">
                                    <div class="form-check"><input class="form-check-input" id="creditCard" type="radio"
                                            name="paymentMethod" checked=""><label
                                            class="form-check-label fs-8 text-body text-nowrap d-flex gap-2"
                                            for="creditCard">Credit card<img class="h-100"
                                                src="{{ asset('assets/img/logos/visa.png') }}" alt=""><img
                                                class="h-100" src="{{ asset('assets/img/logos/discover.png') }}"
                                                alt=""><img class="h-100"
                                                src="{{ asset('assets/img/logos/mastercard.png') }}" alt=""><img
                                                class="h-100" src="{{ asset('assets/img/logos/american_express.png') }}"
                                                alt=""></label></div>
                                </div>
                            </div>
                            <div class="col-md-auto">
                                <div class="form-check"><input class="form-check-input" id="paypal" type="radio"
                                        name="paymentMethod"><label class="form-check-label fs-8 text-body"
                                        for="paypal">Paypal</label></div>
                            </div>
                            <div class="col-md-auto">
                                <div class="form-check"><input class="form-check-input" id="coupon" type="radio"
                                        name="paymentMethod"><label class="form-check-label fs-8 text-body"
                                        for="coupon">Coupon</label></div>
                            </div>
                        </div>
                        <div class="row gx-3 gy-4">
                            <div class="col-md-6"><label class="fw-bold text-body-highlight mb-1" for="selectCard">Select
                                    card</label><select class="form-select text-body-emphasis" id="selectCard">
                                    <option selected="selected">Select a card</option>
                                    <option value="visa">Visa</option>
                                    <option value="discover">Discover</option>
                                    <option value="mastercard">Mastercard</option>
                                    <option value="american-express">American Express</option>
                                </select></div>
                            <div class="col-md-6"><label class="fw-bold text-body-highlight mb-1"
                                    for="inputCardNumber">Card number</label><input class="form-control"
                                    id="inputCardNumber" type="number" placeholder="Enter card number"
                                    aria-label="Card number"></div>
                            <div class="col-12"><label class="fw-bold text-body-highlight mb-1" for="inputName">Full
                                    name</label><input class="form-control" id="inputName" type="text"
                                    placeholder="Ansolo Lazinatov" aria-label="Full name"></div>
                            <div class="col-md-6"><label class="fw-bold text-body-highlight mb-1">Expires on</label>
                                <div class="d-flex"><select class="form-select text-body-emphasis me-3">
                                        <option selected="selected">Month</option>
                                        <option>January</option>
                                        <option>February</option>
                                        <option>March</option>
                                    </select><select class="form-select text-body-emphasis">
                                        <option selected="selected">Year</option>
                                        <option value="1990">1990</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                    </select></div>
                            </div>
                            <div class="col-md-6"><label class="fw-bold text-body-highlight mb-1"
                                    for="inputCardCVC">CVC</label><input class="form-control" id="inputCardCVC"
                                    type="number" placeholder="Enter a valid CVC" aria-label="CVC"></div>
                            <div class="col-12">
                                <div class="form-check"><input class="form-check-input" id="gridCheck"
                                        type="checkbox"><label class="form-check-label text-body-emphasis fs-8"
                                        for="gridCheck">Save Card Details</label></div>
                            </div>
                        </div>
                        <hr class="mt-6 mb-5"><a class="btn btn-phoenix-primary me-3" href="{{ url('checkout') }}"><span
                                class="fa-solid fa-chevron-left me-2" data-fa-transform="shrink-3"></span>Go
                            back</a><button class="btn btn-primary px-sm-15">Confirm booking</button>
                    </form>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="card mt-5 mt-lg-0">
                        <div class="card-body">
                            <h5 class="mb-3">Summary</h5><img class="rounded-2 mb-3"
                                src="{{ asset('assets/img/hotels/39.png') }}" alt="" width="208">
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
                                    <div class="d-flex flex-wrap gap-2"><span
                                            class="badge badge-phoenix badge-phoenix-secondary py-1 border-0 text-capitalize"><span
                                                class="fa-solid fa-bed fs-9 me-2"></span><span>Double
                                                bed</span></span><span
                                            class="badge badge-phoenix badge-phoenix-secondary py-1 border-0 text-capitalize"><span
                                                class="fa-solid fa-user fs-9 me-2"></span><span>2 Adults</span></span><span
                                            class="badge badge-phoenix badge-phoenix-secondary py-1 border-0 text-capitalize"><span
                                                class="fa-solid fa-moon fs-9 me-2"></span><span>2 Nights</span></span>
                                    </div>
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
                                    <div class="d-flex flex-wrap gap-2"><span
                                            class="badge badge-phoenix badge-phoenix-secondary py-1 border-0 text-capitalize"><span
                                                class="fa-solid fa-bed fs-9 me-2"></span><span>Double
                                                bed</span></span><span
                                            class="badge badge-phoenix badge-phoenix-secondary py-1 border-0 text-capitalize"><span
                                                class="fa-solid fa-user fs-9 me-2"></span><span>2 Adults</span></span><span
                                            class="badge badge-phoenix badge-phoenix-secondary py-1 border-0 text-capitalize"><span
                                                class="fa-solid fa-baby fs-9 me-2"></span><span>1 Childs</span></span><span
                                            class="badge badge-phoenix badge-phoenix-secondary py-1 border-0 text-capitalize"><span
                                                class="fa-solid fa-moon fs-9 me-2"></span><span>3 Nights</span></span>
                                    </div>
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
                <div class="bg-holder bg-holder overlay bg-opacity-85"
                    style="background-image:url({{ asset('assets/img/bg/43.png') }});background-position: center; background-size: cover;">
                </div>
                <!--/.bg-holder-->
                <div class="row g-5 position-relative justify-content-between">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-3">Discover</h5>
                        <div class="row g-3">
                            <div class="col">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-1"><a class="text-secondary-lighter" href="#!">Home</a></li>
                                    <li class="mb-1"><a class="text-secondary-lighter" href="#!">Terms</a></li>
                                    <li class="mb-1"><a class="text-secondary-lighter" href="#!">Talent &amp;
                                            culture</a></li>
                                    <li class="mb-1"><a class="text-secondary-lighter" href="#!">Destination</a>
                                    </li>
                                    <li class="mb-1"><a class="text-secondary-lighter" href="#!">Sitemap</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-1"><a class="text-secondary-lighter" href="#!">Refund policy</a>
                                    </li>
                                    <li class="mb-1"><a class="text-secondary-lighter" href="#!">EMI Policy</a>
                                    </li>
                                    <li class="mb-1"><a class="text-secondary-lighter" href="#!">Privacy
                                            Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-3">Contact</h5><a class="d-block text-secondary-lighter mb-1 text-nowrap"
                            href="mailto:info@phoenixtravels.com"><span
                                class="fa-solid fa-envelope me-2 me-lg-1 me-xl-2"></span>info@phoenixtravels.com</a><a
                            class="d-block text-secondary-lighter mb-1" href="tel:+13134048290"><span
                                class="fa-solid fa-phone me-2 me-lg-1 me-xl-2"> </span>+13134048290</a>
                    </div>
                    <div class="col-lg-5">
                        <h2 class="text-white mb-2 fw-semibold">Enjoy your trip to the fullest</h2>
                        <p class="mb-5 text-secondary-lighter">Sign up and get notified<br>about best deals immediately
                        </p>
                        <div class="d-flex gap-2">
                            <div class="form-icon-container flex-1"><input class="form-control form-icon-input"
                                    type="text" placeholder="Your email address"><span
                                    class="fa-solid fa-envelope form-icon text-body fs-9" data-fa-transform="up-2"></span>
                            </div><button class="btn btn-primary rounded">Sign up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
@endsection
