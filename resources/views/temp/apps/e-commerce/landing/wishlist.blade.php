@extends('layouts.ecommerce')

@section('title', 'Wishlist')

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
          <h2 class="mb-5">Wishlist<span class="text-body-tertiary fw-normal ms-2">(43)</span></h2>
          <div class="border-y border-translucent" id="productWishlistTable" data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":5,"pagination":true}'>
            <div class="table-responsive scrollbar">
              <table class="table fs-9 mb-0">
                <thead>
                  <tr>
                    <th class="sort white-space-nowrap align-middle fs-10" scope="col" style="width:7%;"></th>
                    <th class="sort white-space-nowrap align-middle" scope="col" style="width:30%; min-width:250px;" data-sort="products">PRODUCTS</th>
                    <th class="sort align-middle" scope="col" data-sort="color" style="width:16%;">COLOR</th>
                    <th class="sort align-middle" scope="col" data-sort="size" style="width:10%;">SIZE</th>
                    <th class="sort align-middle text-end" scope="col" data-sort="price" style="width:10%;">PRICE</th>
                    <th class="sort align-middle text-end pe-0" scope="col" style="width:35%;"> </th>
                  </tr>
                </thead>
                <tbody class="list" id="profile-wishlist-table-body">
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border border-translucent rounded-2 d-inline-block" href="{{ url('product-details') }}"><img src="{{ asset('assets/img/products/1.png') }}" alt="" width="53"></a></td>
                    <td class="products align-middle pe-11"><a class="fw-semibold mb-0 line-clamp-1" href="{{ url('product-details') }}">Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management &amp; Skin Temperature Trends, Carbon/Graphite, One Size (S &amp; L Bands)</a></td>
                    <td class="color align-middle white-space-nowrap fs-9 text-body">Pure matte black</td>
                    <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">42</td>
                    <td class="price align-middle text-body fs-9 fw-semibold text-end">$57</td>
                    <td class="total align-middle fw-bold text-body-highlight text-end text-nowrap pe-0"><button class="btn btn-sm text-body-quaternary text-body-tertiary-hover me-2"><span class="fas fa-trash"></span></button>
                      <button class="btn btn-primary fs-10"><span class="fas fa-shopping-cart me-1 fs-10"></span>Add to cart</button>
                    </td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border border-translucent rounded-2 d-inline-block" href="{{ url('product-details') }}"><img src="{{ asset('assets/img/products/7.png') }}" alt="" width="53"></a></td>
                    <td class="products align-middle pe-11"><a class="fw-semibold mb-0 line-clamp-1" href="{{ url('product-details') }}">2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) - Space Gray</a></td>
                    <td class="color align-middle white-space-nowrap fs-9 text-body">Black</td>
                    <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">Pro</td>
                    <td class="price align-middle text-body fs-9 fw-semibold text-end">$1,499</td>
                    <td class="total align-middle fw-bold text-body-highlight text-end text-nowrap pe-0"><button class="btn btn-sm text-body-quaternary text-body-tertiary-hover me-2"><span class="fas fa-trash"></span></button>
                      <button class="btn btn-primary fs-10"><span class="fas fa-shopping-cart me-1 fs-10"></span>Add to cart</button>
                    </td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border border-translucent rounded-2 d-inline-block" href="{{ url('product-details') }}"><img src="{{ asset('assets/img/products/6.png') }}" alt="" width="53"></a></td>
                    <td class="products align-middle pe-11"><a class="fw-semibold mb-0 line-clamp-1" href="{{ url('product-details') }}">PlayStation 5 DualSense Wireless Controller</a></td>
                    <td class="color align-middle white-space-nowrap fs-9 text-body">White</td>
                    <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">Regular</td>
                    <td class="price align-middle text-body fs-9 fw-semibold text-end">$299</td>
                    <td class="total align-middle fw-bold text-body-highlight text-end text-nowrap pe-0"><button class="btn btn-sm text-body-quaternary text-body-tertiary-hover me-2"><span class="fas fa-trash"></span></button>
                      <button class="btn btn-primary fs-10"><span class="fas fa-shopping-cart me-1 fs-10"></span>Add to cart</button>
                    </td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border border-translucent rounded-2 d-inline-block" href="{{ url('product-details') }}"><img src="{{ asset('assets/img/products/3.png') }}" alt="" width="53"></a></td>
                    <td class="products align-middle pe-11"><a class="fw-semibold mb-0 line-clamp-1" href="{{ url('product-details') }}">Apple MacBook Pro 13 inch-M1-8/256GB-space</a></td>
                    <td class="color align-middle white-space-nowrap fs-9 text-body">Space Gray</td>
                    <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">Pro</td>
                    <td class="price align-middle text-body fs-9 fw-semibold text-end">$1,699</td>
                    <td class="total align-middle fw-bold text-body-highlight text-end text-nowrap pe-0"><button class="btn btn-sm text-body-quaternary text-body-tertiary-hover me-2"><span class="fas fa-trash"></span></button>
                      <button class="btn btn-primary fs-10"><span class="fas fa-shopping-cart me-1 fs-10"></span>Add to cart</button>
                    </td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border border-translucent rounded-2 d-inline-block" href="{{ url('product-details') }}"><img src="{{ asset('assets/img/products/4.png') }}" alt="" width="53"></a></td>
                    <td class="products align-middle pe-11"><a class="fw-semibold mb-0 line-clamp-1" href="{{ url('product-details') }}">Apple iMac 24&quot; 4K Retina Display M1 8 Core CPU, 7 Core GPU, 256GB SSD, Green (MJV83ZP/A) 2021</a></td>
                    <td class="color align-middle white-space-nowrap fs-9 text-body">Ocean Blue</td>
                    <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">21&quot;</td>
                    <td class="price align-middle text-body fs-9 fw-semibold text-end">$65</td>
                    <td class="total align-middle fw-bold text-body-highlight text-end text-nowrap pe-0"><button class="btn btn-sm text-body-quaternary text-body-tertiary-hover me-2"><span class="fas fa-trash"></span></button>
                      <button class="btn btn-primary fs-10"><span class="fas fa-shopping-cart me-1 fs-10"></span>Add to cart</button>
                    </td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border border-translucent rounded-2 d-inline-block" href="{{ url('product-details') }}"><img src="{{ asset('assets/img/products/10.png') }}" alt="" width="53"></a></td>
                    <td class="products align-middle pe-11"><a class="fw-semibold mb-0 line-clamp-1" href="{{ url('product-details') }}">Apple Magic Mouse (Wireless, Rechargable) - Silver</a></td>
                    <td class="color align-middle white-space-nowrap fs-9 text-body">White</td>
                    <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">Regular</td>
                    <td class="price align-middle text-body fs-9 fw-semibold text-end">$30</td>
                    <td class="total align-middle fw-bold text-body-highlight text-end text-nowrap pe-0"><button class="btn btn-sm text-body-quaternary text-body-tertiary-hover me-2"><span class="fas fa-trash"></span></button>
                      <button class="btn btn-primary fs-10"><span class="fas fa-shopping-cart me-1 fs-10"></span>Add to cart</button>
                    </td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border border-translucent rounded-2 d-inline-block" href="{{ url('product-details') }}"><img src="{{ asset('assets/img/products/8.png') }}" alt="" width="53"></a></td>
                    <td class="products align-middle pe-11"><a class="fw-semibold mb-0 line-clamp-1" href="{{ url('product-details') }}">Amazon Basics Matte Black Wired Keyboard - US Layout (QWERTY)</a></td>
                    <td class="color align-middle white-space-nowrap fs-9 text-body">Black</td>
                    <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">MD</td>
                    <td class="price align-middle text-body fs-9 fw-semibold text-end">$40</td>
                    <td class="total align-middle fw-bold text-body-highlight text-end text-nowrap pe-0"><button class="btn btn-sm text-body-quaternary text-body-tertiary-hover me-2"><span class="fas fa-trash"></span></button>
                      <button class="btn btn-primary fs-10"><span class="fas fa-shopping-cart me-1 fs-10"></span>Add to cart</button>
                    </td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border border-translucent rounded-2 d-inline-block" href="{{ url('product-details') }}"><img src="{{ asset('assets/img/products/12.png') }}" alt="" width="53"></a></td>
                    <td class="products align-middle pe-11"><a class="fw-semibold mb-0 line-clamp-1" href="{{ url('product-details') }}">HORI Racing Wheel Apex for PlayStation 4_3, and PC</a></td>
                    <td class="color align-middle white-space-nowrap fs-9 text-body">Black</td>
                    <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">45</td>
                    <td class="price align-middle text-body fs-9 fw-semibold text-end">$130</td>
                    <td class="total align-middle fw-bold text-body-highlight text-end text-nowrap pe-0"><button class="btn btn-sm text-body-quaternary text-body-tertiary-hover me-2"><span class="fas fa-trash"></span></button>
                      <button class="btn btn-primary fs-10"><span class="fas fa-shopping-cart me-1 fs-10"></span>Add to cart</button>
                    </td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border border-translucent rounded-2 d-inline-block" href="{{ url('product-details') }}"><img src="{{ asset('assets/img/products/17.png') }}" alt="" width="53"></a></td>
                    <td class="products align-middle pe-11"><a class="fw-semibold mb-0 line-clamp-1" href="{{ url('product-details') }}">Xbox Series S</a></td>
                    <td class="color align-middle white-space-nowrap fs-9 text-body">Space Gray</td>
                    <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">sm</td>
                    <td class="price align-middle text-body fs-9 fw-semibold text-end">$99</td>
                    <td class="total align-middle fw-bold text-body-highlight text-end text-nowrap pe-0"><button class="btn btn-sm text-body-quaternary text-body-tertiary-hover me-2"><span class="fas fa-trash"></span></button>
                      <button class="btn btn-primary fs-10"><span class="fas fa-shopping-cart me-1 fs-10"></span>Add to cart</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
              <div class="col-auto d-flex">
                <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
              </div>
              <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
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

      @endsection
