@extends('layouts.ecommerce')

@section('title', 'Invoice')

@section('content')
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5 pb-9 bg-body-emphasis dark__bg-gray-1200 border-top">
        <div class="container-small">
            @include('layouts.partials.breadcrumb')
            <div class="d-flex justify-content-between align-items-end mb-4">
                <h2 class="mb-0">Invoice</h2>
                <div><button class="btn btn-phoenix-secondary me-2"><span class="fa-solid fa-download me-sm-2"></span><span
                            class="d-none d-sm-inline-block">Download Invoice</span></button>
                    <button class="btn btn-phoenix-secondary"><span class="fa-solid fa-print me-sm-2"></span><span
                            class="d-none d-sm-inline-block">Print</span></button>
                </div>
            </div>
            <div class="bg-body dark__bg-gray-1100 p-4 mb-4 rounded-2">
                <div class="row g-4">
                    <div class="col-12 col-lg-3">
                        <div class="row g-4 g-lg-2">
                            <div class="col-12 col-sm-6 col-lg-12">
                                <div class="row align-items-center g-0">
                                    <div class="col-auto col-lg-6 col-xl-5">
                                        <h6 class="mb-0 me-3">Invoice No :</h6>
                                    </div>
                                    <div class="col-auto col-lg-6 col-xl-7">
                                        <p class="fs-9 text-body-secondary fw-semibold mb-0">#FLR978282</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-12">
                                <div class="row align-items-center g-0">
                                    <div class="col-auto col-lg-6 col-xl-5">
                                        <h6 class="me-3">Invoice Date :</h6>
                                    </div>
                                    <div class="col-auto col-lg-6 col-xl-7">
                                        <p class="fs-9 text-body-secondary fw-semibold mb-0">19.06.2019</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-5">
                        <div class="row g-4 gy-lg-5">
                            <div class="col-12 col-lg-8">
                                <h6 class="mb-2 me-3">Sold by :</h6>
                                <p class="fs-9 text-body-secondary fw-semibold mb-0">PhoenixMart<br>36 greendowm road,
                                    California, Usa</p>
                            </div>
                            <div class="col-12 col-lg-4">
                                <h6 class="mb-2"> PAN No :</h6>
                                <p class="fs-9 text-body-secondary fw-semibold mb-0">XVCJ963782008</p>
                            </div>
                            <div class="col-12 col-lg-4">
                                <h6 class="mb-2"> GST Reg No :</h6>
                                <p class="fs-9 text-body-secondary fw-semibold mb-0">IX9878123TC</p>
                            </div>
                            <div class="col-12 col-lg-4">
                                <h6 class="mb-2"> Order No :</h6>
                                <p class="fs-9 text-body-secondary fw-semibold mb-0">A-8934792734</p>
                            </div>
                            <div class="col-12 col-lg-4">
                                <h6 class="mb-2"> Order Date :</h6>
                                <p class="fs-9 text-body-secondary fw-semibold mb-0">19.06.2019</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="row g-4">
                            <div class="col-12 col-lg-6">
                                <h6 class="mb-2"> Billing Address :</h6>
                                <div class="fs-9 text-body-secondary fw-semibold mb-0">
                                    <p class="mb-2">John Doe,</p>
                                    <p class="mb-2">36, Gree Donwtonwn,<br>Golden road, FL,</p>
                                    <p class="mb-2">johndoe@jeemail.com</p>
                                    <p class="mb-0">+334933029030</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <h6 class="mb-2"> Shipping Address :</h6>
                                <div class="fs-9 text-body-secondary fw-semibold mb-0">
                                    <p class="mb-2">John Doe,</p>
                                    <p class="mb-2">36, Gree Donwtonwn,<br>Golden road, FL,</p>
                                    <p class="mb-2">johndoe@jeemail.com</p>
                                    <p class="mb-0">+334933029030</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-0">
                <div class="table-responsive scrollbar">
                    <table class="table fs-9 text-body mb-0">
                        <thead class="bg-body-secondary">
                            <tr>
                                <th scope="col" style="width: 24px;"></th>
                                <th scope="col" style="min-width: 60px;">SL NO.</th>
                                <th scope="col" style="min-width: 360px;">Products</th>
                                <th class="ps-5" scope="col" style="min-width: 150px;">Color</th>
                                <th scope="col" style="width: 60px;">Size</th>
                                <th class="text-end" scope="col" style="width: 80px;">Quantity</th>
                                <th class="text-end" scope="col" style="width: 100px;">Price</th>
                                <th class="text-end" scope="col" style="width: 138px;">Tax Rate</th>
                                <th class="text-center" scope="col" style="width: 80px;">Tax Type</th>
                                <th class="text-end" scope="col" style="min-width: 92px;">Tax</th>
                                <th class="text-end" scope="col" style="min-width: 60px;">Total</th>
                                <th scope="col" style="width: 24px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-0"></td>
                                <td class="align-middle">1</td>
                                <td class="align-middle">
                                    <p class="line-clamp-1 mb-0 fw-semibold">Fitbit Sense Advanced Smartwatch with Tools
                                        for Heart Health, Stress Management &amp; Skin Temperature Trends, Carbon/Graphite,
                                        One Size (S &amp; L Bands)</p>
                                </td>
                                <td class="align-middle ps-5">Glossy black</td>
                                <td class="align-middle text-body-tertiary fw-semibold">XL</td>
                                <td class="align-middle text-end text-body-highlight fw-semibold">2</td>
                                <td class="align-middle text-end fw-semibold">$299</td>
                                <td class="align-middle text-end">2.5%</td>
                                <td class="align-middle text-center fw-semibold">VAT</td>
                                <td class="align-middle text-end fw-semibold">$199</td>
                                <td class="align-middle text-end fw-semibold">$398</td>
                                <td class="border-0"></td>
                            </tr>
                            <tr>
                                <td class="border-0"></td>
                                <td class="align-middle">2</td>
                                <td class="align-middle">
                                    <p class="line-clamp-1 mb-0 fw-semibold">2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) -
                                        Space Gray</p>
                                </td>
                                <td class="align-middle ps-5">Black</td>
                                <td class="align-middle text-body-tertiary fw-semibold">Pro</td>
                                <td class="align-middle text-end text-body-highlight fw-semibold">1</td>
                                <td class="align-middle text-end fw-semibold">$199</td>
                                <td class="align-middle text-end">2.75%</td>
                                <td class="align-middle text-center fw-semibold">VAT</td>
                                <td class="align-middle text-end fw-semibold">$199</td>
                                <td class="align-middle text-end fw-semibold">$398</td>
                                <td class="border-0"></td>
                            </tr>
                            <tr>
                                <td class="border-0"></td>
                                <td class="align-middle border-0">1</td>
                                <td class="align-middle border-0">
                                    <p class="line-clamp-1 mb-0 fw-semibold">PlayStation 5 DualSense Wireless Controller
                                    </p>
                                </td>
                                <td class="align-middle ps-5 border-0">White</td>
                                <td class="align-middle text-body-tertiary fw-semibold border-0">Regular</td>
                                <td class="align-middle text-end text-body-highlight fw-semibold border-0">1</td>
                                <td class="align-middle text-end fw-semibold border-0">$185</td>
                                <td class="align-middle text-end border-0">3.5%</td>
                                <td class="align-middle text-center fw-semibold border-0">VAT</td>
                                <td class="align-middle text-end fw-semibold border-0">$199</td>
                                <td class="align-middle text-end fw-semibold border-0">$398</td>
                                <td class="border-0"></td>
                            </tr>
                            <tr class="bg-body-secondary">
                                <td></td>
                                <td class="align-middle fw-semibold" colspan="9">Subtotal</td>
                                <td class="align-middle text-end fw-bold">$398</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="border-0"></td>
                                <td colspan="6"></td>
                                <td class="align-middle fw-bold ps-15" colspan="2">Shipping Cost</td>
                                <td class="align-middle text-end fw-semibold" colspan="2">$50</td>
                                <td class="border-0"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="6"></td>
                                <td class="align-middle fw-bold ps-15" colspan="2">Discount/Voucher</td>
                                <td class="align-middle text-end fw-semibold text-danger" colspan="2">-$50</td>
                                <td></td>
                            </tr>
                            <tr class="bg-body-secondary">
                                <td class="align-middle ps-4 fw-bold text-body-highlight" colspan="3">Grand Total</td>
                                <td class="align-middle fw-bold text-body-highlight" colspan="7">Three Hundred and
                                    Ninenty Eight USD</td>
                                <td class="align-middle text-end fw-bold">$398</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-end py-9 border-bottom"><img class="mb-3"
                        src="{{ asset('assets/img/logos/phoenix-mart.png') }}" alt="">
                    <h4>Authorized Signatory</h4>
                </div>
                <div class="text-center py-4 mb-9">
                    <p class="mb-0">Thank you for buying with Phoenix | 2022 © <a
                            href="https://themewagon.com/">Themewagon</a></p>
                </div>
            </div>
            <div class="d-flex justify-content-between"><button class="btn btn-primary"><span
                        class="fa-solid fa-bag-shopping me-2"></span>Browse more items</button>
                <div><button class="btn btn-phoenix-secondary me-2"><span
                            class="fa-solid fa-download me-sm-2"></span><span class="d-none d-sm-inline-block">Download
                            Invoice</span></button>
                    <button class="btn btn-phoenix-secondary"><span class="fa-solid fa-print me-sm-2"></span><span
                            class="d-none d-sm-inline-block">Print</span></button>
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
