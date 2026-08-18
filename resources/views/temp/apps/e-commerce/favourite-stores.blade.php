@extends('layouts.ecommerce')

@section('title', 'Favourite Stores')

@section('content')
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5 pb-9">
        <div class="container-small">
            @include('layouts.partials.breadcrumb')
            <h2 class="mb-1">My Favourite Stores</h2>
            <p class="mb-5 text-body-tertiary fw-semibold">Essential for a better life</p>
            <div class="row gx-3 gy-5">
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img
                            class="mw-100" src="{{ asset('assets/img/brands/dell.png') }}" alt="Dell Technologies"></div>
                    <h5 class="mb-2">Dell Technologies</h5>
                    <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light"
                            data-bs-theme="light"></span></div>
                    <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(1263 people rated)</p><a class="btn btn-link p-0"
                        href="#!">Visit Store<span class="fas fa-chevron-right ms-1 fs-10"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                        <div class="btn-reveal-trigger"><button
                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                    class="fas fa-ellipsis-h fs-9"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                    href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="#!">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img
                            class="mw-100" src="{{ asset('assets/img/brands/intel-2.png') }}" alt="Intel"></div>
                    <h5 class="mb-2">Intel</h5>
                    <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></div>
                    <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(1542 people rated)</p><a class="btn btn-link p-0"
                        href="#!">Visit Store<span class="fas fa-chevron-right ms-1 fs-10"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                        <div class="btn-reveal-trigger"><button
                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                    class="fas fa-ellipsis-h fs-9"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                    href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="#!">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img
                            class="mw-100" src="{{ asset('assets/img/brands/honda.png') }}" alt="Honda"></div>
                    <h5 class="mb-2">Honda</h5>
                    <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></div>
                    <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(596 people rated)</p><a class="btn btn-link p-0"
                        href="#!">Visit Store<span class="fas fa-chevron-right ms-1 fs-10"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                        <div class="btn-reveal-trigger"><button
                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                    class="fas fa-ellipsis-h fs-9"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                    href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="#!">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;">
                        <img class="mw-100" src="{{ asset('assets/img/brands/asus-rog.png') }}" alt="Asus ROG"></div>
                    <h5 class="mb-2">Asus ROG</h5>
                    <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span
                            class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></div>
                    <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(2365 people rated)</p><a
                        class="btn btn-link p-0" href="#!">Visit Store<span
                            class="fas fa-chevron-right ms-1 fs-10"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                        <div class="btn-reveal-trigger"><button
                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                    class="fas fa-ellipsis-h fs-9"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                    href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="#!">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;">
                        <img class="mw-100" src="{{ asset('assets/img/brands/yamaha.png') }}" alt="Yamaha"></div>
                    <h5 class="mb-2">Yamaha</h5>
                    <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></div>
                    <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(1253 people rated)</p><a
                        class="btn btn-link p-0" href="#!">Visit Store<span
                            class="fas fa-chevron-right ms-1 fs-10"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                        <div class="btn-reveal-trigger"><button
                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                    class="fas fa-ellipsis-h fs-9"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                    href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="#!">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;">
                        <img class="mw-100" src="{{ asset('assets/img/brands/ibm.png') }}" alt="IBM"></div>
                    <h5 class="mb-2">IBM</h5>
                    <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span
                            class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></div>
                    <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(996 people rated)</p><a
                        class="btn btn-link p-0" href="#!">Visit Store<span
                            class="fas fa-chevron-right ms-1 fs-10"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                        <div class="btn-reveal-trigger"><button
                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                    class="fas fa-ellipsis-h fs-9"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                    href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="#!">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;">
                        <img class="mw-100" src="{{ asset('assets/img/brands/apple-2.png') }}" alt="Apple Store"></div>
                    <h5 class="mb-2">Apple Store</h5>
                    <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span
                            class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></div>
                    <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(365 people rated)</p><a
                        class="btn btn-link p-0" href="#!">Visit Store<span
                            class="fas fa-chevron-right ms-1 fs-10"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                        <div class="btn-reveal-trigger"><button
                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                    class="fas fa-ellipsis-h fs-9"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                    href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="#!">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;">
                        <img class="mw-100" src="{{ asset('assets/img/brands/oppo.png') }}" alt="Oppo"></div>
                    <h5 class="mb-2">Oppo</h5>
                    <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span
                            class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></div>
                    <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(576 people rated)</p><a
                        class="btn btn-link p-0" href="#!">Visit Store<span
                            class="fas fa-chevron-right ms-1 fs-10"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                        <div class="btn-reveal-trigger"><button
                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                    class="fas fa-ellipsis-h fs-9"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                    href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="#!">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;">
                        <img class="mw-100" src="{{ asset('assets/img/brands/redragon.png') }}" alt="Redragon"></div>
                    <h5 class="mb-2">Redragon</h5>
                    <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light"
                            data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light"
                            data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light"
                            data-bs-theme="light"></span></div>
                    <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(1125 people rated)</p><a
                        class="btn btn-link p-0" href="#!">Visit Store<span
                            class="fas fa-chevron-right ms-1 fs-10"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                        <div class="btn-reveal-trigger"><button
                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                    class="fas fa-ellipsis-h fs-9"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                    href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="#!">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;">
                        <img class="mw-100" src="{{ asset('assets/img/brands/xbox.png') }}" alt="Microsoft XBOX"></div>
                    <h5 class="mb-2">Microsoft XBOX</h5>
                    <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light"
                            data-bs-theme="light"></span></div>
                    <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(830 people rated)</p><a
                        class="btn btn-link p-0" href="#!">Visit Store<span
                            class="fas fa-chevron-right ms-1 fs-10"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                        <div class="btn-reveal-trigger"><button
                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                    class="fas fa-ellipsis-h fs-9"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                    href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="#!">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;">
                        <img class="mw-100" src="{{ asset('assets/img/brands/lenovo.png') }}" alt="Lenovo"></div>
                    <h5 class="mb-2">Lenovo</h5>
                    <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span
                            class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></div>
                    <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(1032 people rated)</p><a
                        class="btn btn-link p-0" href="#!">Visit Store<span
                            class="fas fa-chevron-right ms-1 fs-10"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                        <div class="btn-reveal-trigger"><button
                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                    class="fas fa-ellipsis-h fs-9"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                    href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="#!">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;">
                        <img class="mw-100" src="{{ asset('assets/img/brands/xiaomi.png') }}" alt="Xiaomi"></div>
                    <h5 class="mb-2">Xiaomi</h5>
                    <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span
                            class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></div>
                    <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(965 people rated)</p><a
                        class="btn btn-link p-0" href="#!">Visit Store<span
                            class="fas fa-chevron-right ms-1 fs-10"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                        <div class="btn-reveal-trigger"><button
                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                    class="fas fa-ellipsis-h fs-9"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                    href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="#!">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;">
                        <img class="mw-100" src="{{ asset('assets/img/brands/oneplus-2.png') }}" alt="Oneplus"></div>
                    <h5 class="mb-2">Oneplus</h5>
                    <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light"
                            data-bs-theme="light"></span></div>
                    <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(562 people rated)</p><a
                        class="btn btn-link p-0" href="#!">Visit Store<span
                            class="fas fa-chevron-right ms-1 fs-10"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                        <div class="btn-reveal-trigger"><button
                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                    class="fas fa-ellipsis-h fs-9"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                    href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="#!">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;">
                        <img class="mw-100" src="{{ asset('assets/img/brands/suzuki-2.png') }}" alt="Suzuki"></div>
                    <h5 class="mb-2">Suzuki</h5>
                    <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span
                            class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></div>
                    <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(125 people rated)</p><a
                        class="btn btn-link p-0" href="#!">Visit Store<span
                            class="fas fa-chevron-right ms-1 fs-10"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                        <div class="btn-reveal-trigger"><button
                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                    class="fas fa-ellipsis-h fs-9"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                    href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="#!">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;">
                        <img class="mw-100" src="{{ asset('assets/img/brands/google-store.png') }}" alt="Google store">
                    </div>
                    <h5 class="mb-2">Google store</h5>
                    <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light"
                            data-bs-theme="light"></span></div>
                    <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(1859 people rated)</p><a
                        class="btn btn-link p-0" href="#!">Visit Store<span
                            class="fas fa-chevron-right ms-1 fs-10"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                        <div class="btn-reveal-trigger"><button
                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                    class="fas fa-ellipsis-h fs-9"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                    href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="#!">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;">
                        <img class="mw-100" src="{{ asset('assets/img/brands/hp.png') }}" alt="HP Global Store"></div>
                    <h5 class="mb-2">HP Global Store</h5>
                    <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span
                            class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></div>
                    <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(365 people rated)</p><a
                        class="btn btn-link p-0" href="#!">Visit Store<span
                            class="fas fa-chevron-right ms-1 fs-10"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                        <div class="btn-reveal-trigger"><button
                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                    class="fas fa-ellipsis-h fs-9"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                    href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="#!">Remove</a>
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
