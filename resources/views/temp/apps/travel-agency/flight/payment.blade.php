@extends('layouts.travel-agency')

@section('title', 'Flight Payment')

@section('content')
    <div class="navbar-responsive-navitems navbar-expand border-y bg-body-emphasis border-translucent py-2">
        <div class="container-medium d-flex flex-between-center" data-navbar="data-navbar">
            <ul class="navbar-nav justify-content-end align-items-center">
                <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3 ps-0 "
                        href="{{ url('apps/travel-agency/flight/homepage') }}">Homepage</a></li>
                <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3  "
                        href="{{ url('apps/travel-agency/flight/booking') }}">Booking</a></li>
                <li class="nav-item invisible" data-nav-item="data-nav-item"><a class="nav-link px-3  text-primary"
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
            <h2 class="mb-5">Payment</h2>
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
                            <li class="nav-item"><a class="done complete nav-link fw-semibold"
                                    href="{{ url('apps/travel-agency/flight/booking') }}" data-wizard-step="2">
                                    <div class="d-inline-block text-center"><span class="nav-item-circle-parent"><span
                                                class="d-block nav-item-circle"><span
                                                    class="fas fa-check"></span></span></span><span
                                            class="mt-1 fs-9">Booking</span></div>
                                </a></li>
                            <li class="nav-item"><a class="active nav-link fw-semibold"
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
            <hr class="mt-5 mb-6">
            <div class="row g-0 gap-6">
                <div class="col-lg">
                    <div>
                        <div class="d-flex justify-content-between mb-4">
                            <div> <span class="fa-solid fa-plane text-primary me-2"></span>
                                <h4 class="mb-0 d-inline-block text-body-highlight">Flight info</h4>
                            </div><button class="btn btn-link p-0"> <span class="fas fa-edit me-2"></span>Edit</button>
                        </div>
                        <div class="mb-4"> <img class="img-fluid rounded-3"
                                src="{{ asset('assets/img/brand/qatar-airline.png') }}" alt=""
                                style="height: 3.5rem">
                            <h5 class="text-nowrap fw-normal d-inline-block ms-2 mb-0">Qatar Airways</h5>
                        </div>
                        <p class="text-body-emphasis">Travelling from <strong>Dhaka </strong>to <strong>Cox’s Bazar</strong>
                        </p>
                        <div class="d-flex gap-2 flex-wrap">
                            <p class="mb-0 text-body-emphasis text-nowrap">Tuesday, 29 January<span
                                    class="fas fa-circle text-body-tertiary fs-11 mx-2"
                                    data-fa-transform="shrink-6"></span>5:00 pm</p>
                            <p class="mb-0 text-body-emphasis text-nowrap"><span
                                    class="text-body-tertiary me-2">-</span>Tuesday, 29 January<span
                                    class="fas fa-circle text-body-tertiary fs-11 mx-2"
                                    data-fa-transform="shrink-6"></span>5:30 pm</p>
                        </div>
                    </div>
                    <hr class="my-5">
                    <div>
                        <div class="d-flex justify-content-between mb-4">
                            <div> <span class="fa-solid fa-user text-primary me-2"></span>
                                <h4 class="mb-0 d-inline-block text-body-highlight">Personal info</h4>
                            </div><button class="btn btn-link p-0"> <span class="fas fa-edit me-2"></span>Edit</button>
                        </div>
                        <div class="bg-body-highlight rounded-2 p-4">
                            <div class="row g-0 gy-5 flex-column flex-sm-row">
                                <div class="col pe-4">
                                    <h5 class="mb-3">Passenger 1</h5>
                                    <p class="mb-2">John James Johansen</p>
                                    <p class="mb-0">Adult <span class="fas fa-circle text-body-tertiary fs-11 mx-2"
                                            data-fa-transform="shrink-5"></span>Male</p>
                                </div>
                                <div
                                    class="col border-start-sm border-top-sm-0 border-top border-translucent ps-sm-4 pt-4 pt-sm-0">
                                    <h5 class="mb-3">Passenger 2</h5>
                                    <p class="mb-2">John James Johansen</p>
                                    <p class="mb-0">Adult <span class="fas fa-circle text-body-tertiary fs-11 mx-2"
                                            data-fa-transform="shrink-5"></span>Male</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-5">
                    <div>
                        <div class="d-flex justify-content-between mb-4">
                            <div> <span class="fa-solid fa-suitcase-rolling text-primary me-2"></span>
                                <h4 class="mb-0 d-inline-block text-body-highlight">Included baggage</h4>
                            </div><button class="btn btn-link p-0"> <span class="fas fa-edit me-2"></span>Edit</button>
                        </div>
                        <div class="d-flex gap-3 mb-4"> <span class="fas fa-circle text-body-quaternary fs-11 mx-2"
                                data-fa-transform="down-8"></span>
                            <div>
                                <h5 class="mb-2">1 personal item</h5>
                                <p class="mb-0 text-body-tertiary">Must go under the seat in front of you</p>
                            </div>
                        </div>
                        <div class="d-flex gap-3 mb-4"> <span class="fas fa-circle text-body-quaternary fs-11 mx-2"
                                data-fa-transform="down-8"></span>
                            <div>
                                <h5 class="mb-2">1 carry-on bag</h5>
                                <p class="mb-0 text-body-tertiary">Max weight 8 kg</p>
                            </div>
                        </div>
                        <div class="d-flex gap-3"> <span class="fas fa-circle text-body-quaternary fs-11 mx-2"
                                data-fa-transform="down-8"></span>
                            <div>
                                <h5 class="mb-2">1 checked bag</h5>
                                <p class="mb-0 text-body-tertiary">Max weight 25 kg</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card mb-9 mb-lg-0">
                        <div class="card-body">
                            <form id="flightCheckoutForm">
                                <h3 class="mb-5">Payment Method</h3>
                                <div class="row gx-xxl-6 mb-5">
                                    <div class="col-md-auto">
                                        <div class="form-check"><input class="form-check-input" id="creditCard"
                                                type="radio" name="paymentMethod" checked="checked"><label
                                                class="form-check-label fs-8 text-body text-nowrap d-flex gap-2"
                                                for="creditCard">Credit card<img class="h-100"
                                                    src="{{ asset('assets/img/logos/visa.png') }}" alt=""><img
                                                    class="h-100" src="{{ asset('assets/img/logos/discover.png') }}"
                                                    alt=""><img class="h-100"
                                                    src="{{ asset('assets/img/logos/mastercard.png') }}"
                                                    alt=""><img class="h-100"
                                                    src="{{ asset('assets/img/logos/american_express.png') }}"
                                                    alt=""></label></div>
                                    </div>
                                    <div class="col-md-auto">
                                        <div class="form-check"><input class="form-check-input" id="paypal"
                                                type="radio" name="paymentMethod"><label
                                                class="form-check-label fs-8 text-body text-nowrap"
                                                for="paypal">Paypal</label></div>
                                    </div>
                                    <div class="col-md-auto">
                                        <div class="form-check"><input class="form-check-input" id="coupon"
                                                type="radio" name="paymentMethod"><label
                                                class="form-check-label fs-8 text-body text-nowrap"
                                                for="coupon">Coupon</label></div>
                                    </div>
                                </div>
                                <div class="row gx-3 gy-4">
                                    <div class="col-md-6"><label class="fw-bold text-body-highlight mb-1"
                                            for="selectCard">Select card</label><select
                                            class="form-select text-body-emphasis" id="selectCard">
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
                                    <div class="col-12"><label class="fw-bold text-body-highlight mb-1"
                                            for="inputName">Full name</label><input class="form-control" id="inputName"
                                            type="text" placeholder="Ansolo Lazinatov" aria-label="Full name"></div>
                                    <div class="col-md-6"><label class="fw-bold text-body-highlight mb-1">Expires
                                            on</label>
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mt-6 mb-9 d-none d-lg-block">
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->

    <div class="flight-bottom-bar bg-secondary" data-bs-theme="light">
        <div class="container-small py-3">
            <div class="d-flex gap-4 gap-sm-6 align-items-center justify-content-end">
                <h6 class="text-white"> <span class="me-2">Total </span><span class="me-2">: </span>BDT<span
                        class="fs-5 ms-2">4,609</span></h6><a class="btn btn-primary flex-1 text-nowrap" href="#!"
                    style="max-width: 17rem"> Continue<span class="fa-solid fa-chevron-right fs-9 ms-2"></span></a>
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
