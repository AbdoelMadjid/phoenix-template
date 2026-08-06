@extends('layouts.vertical')

@section('title', 'Faq Accordion.Blade')

@push('styles')
<link href="{{ asset('assets/external/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap') }}" rel="stylesheet">
@endpush

@section('content')

        <nav class="mb-3" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Pages</a></li>
            <li class="breadcrumb-item active">Faq</li>
          </ol>
        </nav>
        <h2 class="mb-5">FAQ</h2>
        <h5 class="mb-3">How can we help?</h5>
        <p class="text-body-tertiary">Search for the topic you need help with or <a href="#!">contact our support</a></p>
        <div class="search-box mb-8 w-100" style="max-width:25rem;">
          <form class="position-relative"><input class="form-control search-input search" type="search" placeholder="Search" aria-label="Search">
            <span class="fas fa-search search-box-icon"></span>
          </form>
        </div>
        <div class="accordion" id="faqAccordion">
          <div class="accordion-item border-top">
            <h2 class="accordion-header" id="headingOne"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">What’s your return policy?</button></h2>
            <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
              <div class="accordion-body pt-0">At the time of shipment, we assure that your product will be free of defects in materials and workmanship and will conform to the specifications outlined on the lot-specific datasheet included with the product. Please contact our technical support services if you have a technical issue with a product :<a href="mailto:phoenix@email.com">Email: phoenix@support.com.</a>If the team concludes that the product does not adhere to the requirements mentioned on the datasheet, we will provide a free replacement or a full refund of the product's invoice price.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">I ordered the wrong product. <br class="d-sm-none">What should I do?</button></h2>
            <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
              <div class="accordion-body pt-0">We would consider accepting the return of the merchandise, subject to an 20% restocking fee plus any shipping and handling fees. The customer is liable for shipping costs for both the returned product and the new replacement product, both to and from our facility. All returns require prior authorisation from us and must be mailed back to us within seven business days of receiving the goods. Products must be returned in the same or equivalent packing (i.e., cold and insulated) in which they were shipped (i.e., cold and insulated). Once we get the item, we will ship out the replacement item.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseOne">How do I cancel my order?</button></h2>
            <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
              <div class="accordion-body pt-0">If you must cancel your order, please call <a href="tel:+871406-7509">(871) 406-7509</a> Please note that we attempt to process and dispatch orders the same day (if received before 1pm PST), and once your product has shipped, our return policy will apply.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseOne">What are your shipping &amp; <br class="d-sm-none">handling charges?</button></h2>
            <div class="accordion-collapse collapse" id="collapseFour" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
              <div class="accordion-body pt-0">Our handling fee is a flat rate of $20. The shipping costs vary depending on your location and the items you've purchased. For an exact shipping cost estimate, please proceed through the checkout process and enter your items and address.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseOne">Do you accept purchase orders?</button></h2>
            <div class="accordion-collapse collapse" id="collapseFive" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
              <div class="accordion-body pt-0">Yes. Please include your purchase order number at online checkout, or clearly label it on a faxed or emailed purchase order. Please give the relevant email or mailing address for your accounts payable department so that the invoice can be sent to the appropriate location.</div>
            </div>
          </div>
        </div>
        <div class="text-center py-11">
          <h3 class="text-body-emphasis">Still can’t find your answer?</h3>
          <p class="text-body">We are happy to help</p><button class="btn btn-sm btn-outline-primary btn-support-chat"><span class="fas fa-comment me-2"></span>Chat with us</button>
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
                      <div class="py-2"><a class="dropdown-item" href="{{ url('apps/e-commerce/landing/product-details') }}">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> Store Macbook</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="{{ url('apps/e-commerce/landing/product-details') }}">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0">
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Products</h6>
                      <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="{{ url('apps/e-commerce/landing/product-details') }}">
                          <div class="file-thumbnail me-2"><img class="h-100 w-100 object-fit-cover rounded-3" src="{{ asset('assets/img/products/60x60/3.png') }}" alt=""></div>
                          <div class="flex-1">
                            <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″</h6>
                            <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">8GB Memory - 1.6GHz - 128GB Storage</span></p>
                          </div>
                        </a>
                        <a class="dropdown-item py-2 d-flex align-items-center" href="{{ url('apps/e-commerce/landing/product-details') }}">
                          <div class="file-thumbnail me-2"><img class="img-fluid" src="{{ asset('assets/img/products/60x60/3.png') }}" alt=""></div>
                          <div class="flex-1">
                            <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″</h6>
                            <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">30 Sep at 12:30 PM</span></p>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0">
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Quick Links</h6>
                      <div class="py-2"><a class="dropdown-item" href="{{ url('apps/e-commerce/landing/product-details') }}">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Support MacBook House</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="{{ url('apps/e-commerce/landing/product-details') }}">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0">
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Files</h6>
                      <div class="py-2"><a class="dropdown-item" href="{{ url('apps/e-commerce/landing/product-details') }}">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-file-zipper text-body" data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="{{ url('apps/e-commerce/landing/product-details') }}">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-file-lines text-body" data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="{{ url('apps/e-commerce/landing/product-details') }}">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-image text-body" data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0">
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Members</h6>
                      <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="{{ url('members') }}">
                          <div class="avatar avatar-l status-online  me-2 text-body">
                            <img class="rounded-circle " src="{{ asset('assets/img/team/40x40/10.webp') }}" alt="">
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                            <p class="fs-10 mb-0 d-flex text-body-tertiary">anna@technext.it</p>
                          </div>
                        </a>
                        <a class="dropdown-item py-2 d-flex align-items-center" href="{{ url('members') }}">
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
                      <div class="py-2"><a class="dropdown-item" href="{{ url('apps/e-commerce/landing/product-details') }}">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-brands fa-firefox-browser text-body" data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="{{ url('apps/e-commerce/landing/product-details') }}">
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
      @endsection

@push('scripts')
<script src="{{ asset('{{ asset(') }}"></script>
<script src="{{ asset('{{ asset(') }}"></script>
<script src="{{ asset('{{ asset(') }}"></script>
<script src="{{ asset('{{ asset(') }}"></script>
<script src="{{ asset('{{ asset(') }}"></script>
<script src="{{ asset('{{ asset(') }}"></script>
<script src="{{ asset('{{ asset(') }}"></script>
<script src="{{ asset('{{ asset(') }}"></script>
<script src="{{ asset('{{ asset(') }}"></script>
<script src="{{ asset('{{ asset(') }}"></script>
@endpush
