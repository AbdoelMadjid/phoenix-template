@extends('layouts.ecommerce')

@section('title', 'Order Tracking')

@section('content')
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5 pb-9">
        <div class="container-small cart">
            <nav class="mb-3" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
                    <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
            </nav>
            <div class="d-flex flex-wrap justify-content-between align-items-end mb-5">
                <div>
                    <h2>Order #234 Status</h2>
                    <p class="text-body-secondary mb-0">Payment Via <a class="fw-bold" href="#!">Cash on
                            delivery</a>,<br class="d-sm-none"><span class="ms-sm-1">Nov 12, 2021, 8:54AM.</span></p>
                </div><button class="btn btn-outline-primary mt-3"><span class="fa-solid fa-phone me-2"></span>Call
                    Support</button>
            </div>
            <div class="row gy-9 gx-5">
                <div class="col-12 col-lg-6">
                    <div class="border rounded-3 overflow-hidden h-100">
                        <div class="googlemap h-100 min-vh-50" data-googlemap="" data-latlng="40.7228022,-74.0020158"
                            data-scrollwheel="false" data-zoom="15">
                            <div class="marker-content py-2">
                                <h5>Google map </h5>
                                <p class="mb-0">A nice template for your site.<br>Customize it as you want.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="timeline-vertical">
                        <div class="timeline-item">
                            <div class="row g-md-3 align-items-center mb-8 mb-lg-10">
                                <div class="col-12 col-md-auto d-flex">
                                    <div class="timeline-item-date text-end order-1 order-md-0 me-md-4">
                                        <p class="fs-10 fw-semibold text-body-tertiary mb-0">23 August, 2023<br
                                                class="d-none d-md-block"> 10:30 AM</p>
                                    </div>
                                    <div class="timeline-item-bar position-relative me-3 me-md-0">
                                        <div class="icon-item icon-item-sm bg-success" data-bs-theme="light"><span
                                                class="fa-solid fa-check text-white fs-10"></span></div><span
                                            class="timeline-bar border-end border-success"></span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="timeline-item-content ps-6 ps-md-3">
                                        <h4>Order is processing</h4>
                                        <p class="fs-9 text-body-secondary mb-0">Your package is ready for the seller to
                                            prepare.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row g-md-3 align-items-center mb-8 mb-lg-10">
                                <div class="col-12 col-md-auto d-flex">
                                    <div class="timeline-item-date text-end order-1 order-md-0 me-md-4">
                                        <p class="fs-10 fw-semibold text-body-tertiary mb-0">25 August, 2023<br
                                                class="d-none d-md-block"> 11:30 AM</p>
                                    </div>
                                    <div class="timeline-item-bar position-relative me-3 me-md-0">
                                        <div class="icon-item icon-item-sm bg-success" data-bs-theme="light"><span
                                                class="fa-solid fa-check text-white fs-10"></span></div><span
                                            class="timeline-bar border-end border-warning"></span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="timeline-item-content ps-6 ps-md-3">
                                        <h4>Picked Up</h4>
                                        <p class="fs-9 text-body-secondary mb-0">Your package has been picked up from the
                                            seller.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row g-md-3 align-items-center mb-8 mb-lg-10">
                                <div class="col-12 col-md-auto d-flex">
                                    <div class="timeline-item-date text-end order-1 order-md-0 me-md-4">
                                        <p class="fs-10 fw-semibold text-body-tertiary mb-0">27 August, 2023<br
                                                class="d-none d-md-block"> 6:30 AM</p>
                                    </div>
                                    <div class="timeline-item-bar position-relative me-3 me-md-0">
                                        <div class="icon-item icon-item-sm bg-warning" data-bs-theme="light"><span
                                                class="fa-solid fa-truck-ramp-box text-white fs-10"></span></div><span
                                            class="timeline-bar border-end border-dashed"></span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="timeline-item-content ps-6 ps-md-3">
                                        <h4>Ready to Ship</h4>
                                        <p class="fs-9 text-body-secondary mb-0">Your package is now ready to be shipped.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row g-md-3 align-items-center mb-8 mb-lg-10">
                                <div class="col-12 col-md-auto d-flex">
                                    <div class="timeline-item-date text-end order-1 order-md-0 me-md-4">
                                        <p class="fs-10 fw-semibold text-body-tertiary mb-0">Estimated time<br
                                                class="d-none d-md-block"> 29 August, 2023</p>
                                    </div>
                                    <div class="timeline-item-bar position-relative me-3 me-md-0">
                                        <div class="icon-item icon-item-sm bg-body-quaternary" data-bs-theme="light"><span
                                                class="fa-solid fa-truck text-white fs-10"></span></div><span
                                            class="timeline-bar border-end border-dashed"></span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="timeline-item-content ps-6 ps-md-3">
                                        <h4>Shipped</h4>
                                        <p class="fs-9 text-body-secondary mb-0">Pending</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row g-md-3 align-items-center">
                                <div class="col-12 col-md-auto d-flex">
                                    <div class="timeline-item-date text-end order-1 order-md-0 me-md-4">
                                        <p class="fs-10 fw-semibold text-body-tertiary mb-0">Estimated time<br
                                                class="d-none d-md-block"> 30 August, 2023</p>
                                    </div>
                                    <div class="timeline-item-bar position-relative me-3 me-md-0">
                                        <div class="icon-item icon-item-sm bg-body-quaternary" data-bs-theme="light"><span
                                                class="fa-solid fa-truck-fast text-white fs-10"></span></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="timeline-item-content ps-6 ps-md-3">
                                        <h4>Delivered</h4>
                                        <p class="fs-9 text-body-secondary mb-0">Pending</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->

    <div class="support-chat-container">
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

@endsection

@push('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbaQGvhe7Af-uOMJz68NWHnO34UjjE7Lo&callback=initMap">
    </script>
@endpush
