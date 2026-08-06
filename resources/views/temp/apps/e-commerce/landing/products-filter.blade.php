@extends('layouts.ecommerce')

@section('title', 'Products Filter')

@section('content')
<!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5 pb-9">
        <div class="product-filter-container"><button class="btn btn-sm btn-phoenix-secondary text-body-tertiary mb-5 d-lg-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#productFilterColumn"><span class="fa-solid fa-filter me-2"></span>Filter</button>
          <div class="row">
            <div class="col-lg-3 col-xxl-2 ps-2 ps-xxl-3">
              <div class="phoenix-offcanvas-filter bg-body scrollbar phoenix-offcanvas phoenix-offcanvas-fixed" id="productFilterColumn" style="top: 92px" data-breakpoint="lg">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h3 class="mb-0">Filters</h3><button class="btn d-lg-none p-0" data-phoenix-dismiss="offcanvas"><span class="uil uil-times fs-8"></span></button>
                </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseAvailability" role="button" aria-expanded="true" aria-controls="collapseAvailability">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-8 text-body-highlight">Availability</div><span class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                  </div>
                </a>
                <div class="collapse show" id="collapseAvailability">
                  <div class="mb-2">
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="inStockInput" type="checkbox" name="color" checked=""><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="inStockInput">In stock</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="preBookInput" type="checkbox" name="color"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="preBookInput">Pre-book</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="outOfStockInput" type="checkbox" name="color"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="outOfStockInput">Out of stock</label></div>
                  </div>
                </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseColorFamily" role="button" aria-expanded="true" aria-controls="collapseColorFamily">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-8 text-body-highlight">Color family</div><span class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                  </div>
                </a>
                <div class="collapse show" id="collapseColorFamily">
                  <div class="mb-2">
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="flexCheckBlack" type="checkbox" name="color" checked=""><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="flexCheckBlack">Black</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="flexCheckBlue" type="checkbox" name="color"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="flexCheckBlue">Blue</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="flexCheckRed" type="checkbox" name="color"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="flexCheckRed">Red</label></div>
                  </div>
                </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseBrands" role="button" aria-expanded="true" aria-controls="collapseBrands">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-8 text-body-highlight">Brands</div><span class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                  </div>
                </a>
                <div class="collapse show" id="collapseBrands">
                  <div class="mb-2">
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="flexCheckBlackberry" type="checkbox" name="brands" checked=""><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="flexCheckBlackberry">Blackberry
                      </label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="flexCheckApple" type="checkbox" name="brands"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="flexCheckApple">Apple
                      </label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="flexCheckNokia" type="checkbox" name="brands"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="flexCheckNokia">Nokia
                      </label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="flexCheckSony" type="checkbox" name="brands"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="flexCheckSony">Sony
                      </label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="flexCheckLG" type="checkbox" name="brands"><label class="form-check-label d-block lh-sm fs-8 text-body mb-0 fw-normal" for="flexCheckLG">LG
                      </label></div>
                  </div>
                </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapsePriceRange" role="button" aria-expanded="true" aria-controls="collapsePriceRange">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-8 text-body-highlight">Price range</div><span class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                  </div>
                </a>
                <div class="collapse show" id="collapsePriceRange">
                  <div class="d-flex justify-content-between mb-3">
                    <div class="input-group me-2"><input class="form-control" type="text" aria-label="First name" placeholder="Min"><input class="form-control" type="text" aria-label="Last name" placeholder="Max"></div><button class="btn btn-phoenix-primary px-3" type="button">Go</button>
                  </div>
                </div><a class="btn px-0 y-4 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseRating" role="button" aria-expanded="true" aria-controls="collapseRating">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-8 text-body-highlight">Rating</div><span class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                  </div>
                </a>
                <div class="collapse show" id="collapseRating">
                  <div class="d-flex align-items-center mb-1"><input class="form-check-input me-3" id="flexRadio1" type="radio" name="flexRadio"><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa fa-star text-warning fs-9 me-1"></span></div>
                  <div class="d-flex align-items-center mb-1"><input class="form-check-input me-3" id="flexRadio2" type="radio" name="flexRadio"><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa-regular fa-star text-warning-light fs-9 me-1" data-bs-theme="light"></span>
                    <p class="ms-1 mb-0">&amp; above</p>
                  </div>
                  <div class="d-flex align-items-center mb-1"><input class="form-check-input me-3" id="flexRadio3" type="radio" name="flexRadio"><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa-regular fa-star text-warning-light fs-9 me-1" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light fs-9 me-1" data-bs-theme="light"></span>
                    <p class="ms-1 mb-0">&amp; above </p>
                  </div>
                  <div class="d-flex align-items-center mb-1"><input class="form-check-input me-3" id="flexRadio4" type="radio" name="flexRadio"><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa-regular fa-star text-warning-light fs-9 me-1" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light fs-9 me-1" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light fs-9 me-1" data-bs-theme="light"></span>
                    <p class="ms-1 mb-0">&amp; above</p>
                  </div>
                  <div class="d-flex align-items-center mb-3"><input class="form-check-input me-3" id="flexRadio5" type="radio" name="flexRadio"><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa-regular fa-star text-warning-light fs-9 me-1" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light fs-9 me-1" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light fs-9 me-1" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light fs-9 me-1" data-bs-theme="light"></span>
                    <p class="ms-1 mb-0">&amp; above </p>
                  </div>
                </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseDisplayType" role="button" aria-expanded="true" aria-controls="collapseDisplayType">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-8 text-body-highlight">Display type</div><span class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                  </div>
                </a>
                <div class="collapse show" id="collapseDisplayType">
                  <div class="mb-2">
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="lcdInput" type="checkbox" name="displayType" checked=""><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="lcdInput">LCD</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="ipsInput" type="checkbox" name="displayType"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="ipsInput">IPS</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="oledInput" type="checkbox" name="displayType"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="oledInput">OLED</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="amoledInput" type="checkbox" name="displayType"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="amoledInput">AMOLED</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="retinaInput" type="checkbox" name="displayType"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="retinaInput">Retina</label></div>
                  </div>
                </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseCondition" role="button" aria-expanded="true" aria-controls="collapseCondition">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-8 text-body-highlight">Condition</div><span class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                  </div>
                </a>
                <div class="collapse show" id="collapseCondition">
                  <div class="mb-2">
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="newInput" type="checkbox" name="condition" checked=""><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="newInput">New</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="usedInput" type="checkbox" name="condition"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="usedInput">Used</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="refurbrishedInput" type="checkbox" name="condition"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="refurbrishedInput">Refurbrished</label></div>
                  </div>
                </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseDelivery" role="button" aria-expanded="true" aria-controls="collapseDelivery">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-8 text-body-highlight">Delivery</div><span class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                  </div>
                </a>
                <div class="collapse show" id="collapseDelivery">
                  <div class="mb-2">
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="freeShippingInput" type="checkbox" name="delivery" checked=""><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="freeShippingInput">Free Shipping</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="oneDayShippingInput" type="checkbox" name="delivery"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="oneDayShippingInput">One-day Shipping</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="codInput" type="checkbox" name="delivery"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="codInput">Cash on Delivery</label></div>
                  </div>
                </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseCampaign" role="button" aria-expanded="true" aria-controls="collapseCampaign">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-8 text-body-highlight">Campaign</div><span class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                  </div>
                </a>
                <div class="collapse show" id="collapseCampaign">
                  <div class="mb-2">
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="summerSaleInput" type="checkbox" name="campaign"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="summerSaleInput">Summer Sale</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="marchMadnessInput" type="checkbox" name="campaign"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="marchMadnessInput">March Madness</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="flashSaleInput" type="checkbox" name="campaign"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="flashSaleInput">Flash Sale</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="bogoBlastInput" type="checkbox" name="campaign"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="bogoBlastInput">BOGO Blast</label></div>
                  </div>
                </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseWarranty" role="button" aria-expanded="true" aria-controls="collapseWarranty">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-8 text-body-highlight">Warranty</div><span class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                  </div>
                </a>
                <div class="collapse show" id="collapseWarranty">
                  <div class="mb-2">
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="threeMonthInput" type="checkbox" name="warranty"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="threeMonthInput">3 months</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="sixMonthInput" type="checkbox" name="warranty"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="sixMonthInput">6 months</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="oneYearInput" type="checkbox" name="warranty"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="oneYearInput">1 year</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="twoYearsInput" type="checkbox" name="warranty"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="twoYearsInput">2 years</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="threeYearsInput" type="checkbox" name="warranty"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="threeYearsInput">3 years</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="fiveYearsInput" type="checkbox" name="warranty"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="fiveYearsInput">5 years</label></div>
                  </div>
                </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseWarrantyType" role="button" aria-expanded="true" aria-controls="collapseWarrantyType">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-8 text-body-highlight">Warranty Type</div><span class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                  </div>
                </a>
                <div class="collapse show" id="collapseWarrantyType">
                  <div class="mb-2">
                    <div class="form-check mb-0x"><input class="form-check-input mt-0" id="replacementInput" type="checkbox" name="warrantyType"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="replacementInput">Replacement</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="serviceInput" type="checkbox" name="warrantyType"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="serviceInput">Service</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="partialCoveregeInput" type="checkbox" name="warrantyType"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="partialCoveregeInput">Partial Coverage</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="appleCareInput" type="checkbox" name="warrantyType"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="appleCareInput">Apple Care</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="moneyBackInput" type="checkbox" name="warrantyType"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="moneyBackInput">Money back</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="extendableInput" type="checkbox" name="warrantyType"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="extendableInput">Extendable</label></div>
                  </div>
                </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseCertification" role="button" aria-expanded="true" aria-controls="collapseCertification">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-8 text-body-highlight">Certification</div><span class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                  </div>
                </a>
                <div class="collapse show" id="collapseCertification">
                  <div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="rohsInput" type="checkbox" name="certification"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="rohsInput">RoHS</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="fccInput" type="checkbox" name="certification"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="fccInput">FCC</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="conflictInput" type="checkbox" name="certification"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="conflictInput">Conflict Free</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="isoOneInput" type="checkbox" name="certification"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="isoOneInput">ISO 9001:2015</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="isoTwoInput" type="checkbox" name="certification"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="isoTwoInput">ISO 27001:2013</label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="isoThreeInput" type="checkbox" name="certification"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="isoThreeInput">IEC 61000-4-2</label></div>
                  </div>
                </div>
              </div>
              <div class="phoenix-offcanvas-backdrop d-lg-none" data-phoenix-backdrop="" style="top: 92px"></div>
            </div>
            <div class="col-lg-9 col-xxl-10">
              <div class="row gx-3 gy-6 mb-8">
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 border-translucent rounded-3 position-relative mb-3"><button class="btn btn-wish btn-wish-primary z-2 d-toggle-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover" data-fa-transform="down-1"></span><span class="far fa-heart d-none-hover" data-fa-transform="down-1"></span></button><img class="img-fluid" src="{{ asset('assets/img/products/6.png') }}" alt=""></div><a class="stretched-link" href="{{ url('product-details') }}">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">PlayStation 5 DualSense Wireless Controller</h6>
                          </a>
                          <p class="fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-body-quaternary fw-semibold ms-1">(67 people rated)</span></p>
                        </div>
                        <div>
                          <p class="fs-9 text-body-tertiary mb-2">dbrand skin available</p>
                          <div class="d-flex align-items-center mb-1">
                            <p class="me-2 text-body text-decoration-line-through mb-0">$125.00</p>
                            <h3 class="text-body-emphasis mb-0">$89.00</h3>
                          </div>
                          <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">2 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 border-translucent rounded-3 position-relative mb-3"><button class="btn btn-wish btn-wish-primary z-2 d-toggle-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover" data-fa-transform="down-1"></span><span class="far fa-heart d-none-hover" data-fa-transform="down-1"></span></button><img class="img-fluid" src="{{ asset('assets/img/products/1.png') }}" alt=""><span class="badge text-bg-success fs-10 product-verified-badge">Verified<span class="fas fa-check ms-1"></span></span></div><a class="stretched-link" href="{{ url('product-details') }}">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management &amp; Skin Temperature ...</h6>
                          </a>
                          <p class="fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-body-quaternary fw-semibold ms-1">(74 people rated)</span></p>
                        </div>
                        <div>
                          <div class="d-flex align-items-center mb-1">
                            <p class="me-2 text-body text-decoration-line-through mb-0">$49.99</p>
                            <h3 class="text-body-emphasis mb-0">$34.99</h3>
                          </div>
                          <p class="text-success fw-bold fs-9 lh-1 mb-0">Deal time ends in days</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 border-translucent rounded-3 position-relative mb-3"><button class="btn btn-wish btn-wish-primary z-2 d-toggle-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover" data-fa-transform="down-1"></span><span class="far fa-heart d-none-hover" data-fa-transform="down-1"></span></button><img class="img-fluid" src="{{ asset('assets/img/products/2.png') }}" alt=""></div><a class="stretched-link" href="{{ url('product-details') }}">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">iPhone 13 pro max-Pacific Blue, 128GB storage</h6>
                          </a>
                          <p class="fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-body-quaternary fw-semibold ms-1">(33 people rated)</span></p>
                        </div>
                        <div>
                          <p class="fs-9 text-body-highlight fw-bold mb-2">Stock limited</p>
                          <div class="d-flex align-items-center mb-1">
                            <p class="me-2 text-body text-decoration-line-through mb-0">$899.99</p>
                            <h3 class="text-body-emphasis mb-0">$850.99</h3>
                          </div>
                          <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">5 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 border-translucent rounded-3 position-relative mb-3"><button class="btn btn-wish btn-wish-primary z-2 d-toggle-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover" data-fa-transform="down-1"></span><span class="far fa-heart d-none-hover" data-fa-transform="down-1"></span></button><img class="img-fluid" src="{{ asset('assets/img/products/3.png') }}" alt=""></div><a class="stretched-link" href="{{ url('product-details') }}">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">Apple MacBook Pro 13 inch-M1-8/256GB-Space Gray</h6>
                          </a>
                          <p class="fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-body-quaternary fw-semibold ms-1">(97 people rated)</span></p>
                        </div>
                        <div>
                          <p class="fs-9 text-body-highlight fw-bold mb-2">Apple care included</p>
                          <div class="d-flex align-items-center mb-1">
                            <p class="me-2 text-body text-decoration-line-through mb-0">$12.00</p>
                            <h3 class="text-body-emphasis mb-0">$11.00</h3>
                          </div>
                          <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">2 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 border-translucent rounded-3 position-relative mb-3"><button class="btn btn-wish btn-wish-primary z-2 d-toggle-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover" data-fa-transform="down-1"></span><span class="far fa-heart d-none-hover" data-fa-transform="down-1"></span></button><img class="img-fluid" src="{{ asset('assets/img/products/4.png') }}" alt=""></div><a class="stretched-link" href="{{ url('product-details') }}">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">Apple iMac 24&quot; 4K Retina Display M1 8 Core CPU, 7 Core GPU, 256GB SSD, Green (MJV83ZP/A) 2021</h6>
                          </a>
                          <p class="fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-body-quaternary fw-semibold ms-1">(134 people rated)</span></p>
                        </div>
                        <div>
                          <p class="fs-9 text-body-highlight fw-bold mb-2">Exchange with kidney</p>
                          <div class="d-flex align-items-center mb-1">
                            <p class="me-2 text-body text-decoration-line-through mb-0">$1499.00</p>
                            <h3 class="text-body-emphasis mb-0">$1399.00</h3>
                          </div>
                          <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">7 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 border-translucent rounded-3 position-relative mb-3"><button class="btn btn-wish btn-wish-primary z-2 d-toggle-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover" data-fa-transform="down-1"></span><span class="far fa-heart d-none-hover" data-fa-transform="down-1"></span></button><img class="img-fluid" src="{{ asset('assets/img/products/5.png') }}" alt=""></div><a class="stretched-link" href="{{ url('product-details') }}">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">Razer Kraken v3 x Wired 7.1 Surroung Sound Gaming headset</h6>
                          </a>
                          <p class="fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-body-quaternary fw-semibold ms-1">(59 people rated)</span></p>
                        </div>
                        <div>
                          <h3 class="text-body-emphasis">$59.00</h3>
                          <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">2 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 border-translucent rounded-3 position-relative mb-3"><button class="btn btn-wish btn-wish-primary z-2 d-toggle-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover" data-fa-transform="down-1"></span><span class="far fa-heart d-none-hover" data-fa-transform="down-1"></span></button><img class="img-fluid" src="{{ asset('assets/img/products/7.png') }}" alt=""></div><a class="stretched-link" href="{{ url('product-details') }}">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) - Space Gray</h6>
                          </a>
                          <p class="fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-body-quaternary fw-semibold ms-1">(13 people rated)</span></p>
                        </div>
                        <div>
                          <h3 class="text-body-emphasis">$799.00</h3>
                          <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">2 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 border-translucent rounded-3 position-relative mb-3"><button class="btn btn-wish btn-wish-primary z-2 d-toggle-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover" data-fa-transform="down-1"></span><span class="far fa-heart d-none-hover" data-fa-transform="down-1"></span></button><img class="img-fluid" src="{{ asset('assets/img/products/12.png') }}" alt=""></div><a class="stretched-link" href="{{ url('product-details') }}">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">HORI Racing Wheel Apex for PlayStation 4/3, and PC</h6>
                          </a>
                          <p class="fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-body-quaternary fw-semibold ms-1">(64 people rated)</span></p>
                        </div>
                        <div>
                          <h3 class="text-body-emphasis">$299.00</h3>
                          <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">1 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 border-translucent rounded-3 position-relative mb-3"><button class="btn btn-wish btn-wish-primary z-2 d-toggle-container active" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove from wishlist"><span class="fas fa-heart" data-fa-transform="down-1"></span></button><img class="img-fluid" src="{{ asset('assets/img/products/1.png') }}" alt=""><span class="badge text-bg-success fs-10 product-verified-badge">Verified<span class="fas fa-check ms-1"></span></span></div><a class="stretched-link" href="{{ url('product-details') }}">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">Amazfit T-Rex Pro Smart Watch with GPS, Outdoor Fitness Watch for Men, Military Standard Certified</h6>
                          </a>
                          <p class="fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-body-quaternary fw-semibold ms-1">(32 people rated)</span></p>
                        </div>
                        <div>
                          <h3 class="text-body-emphasis">$20.00</h3>
                          <p class="text-success fw-bold fs-9 lh-1 mb-0">Deal time ends in 24 hours</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 border-translucent rounded-3 position-relative mb-3"><button class="btn btn-wish btn-wish-primary z-2 d-toggle-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover" data-fa-transform="down-1"></span><span class="far fa-heart d-none-hover" data-fa-transform="down-1"></span></button><img class="img-fluid" src="{{ asset('assets/img/products/16.png') }}" alt=""></div><a class="stretched-link" href="{{ url('product-details') }}">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">Apple AirPods Pro</h6>
                          </a>
                          <p class="fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-body-quaternary fw-semibold ms-1">(39 people rated)</span></p>
                        </div>
                        <div>
                          <h3 class="text-body-emphasis">$59.00</h3>
                          <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">3 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 border-translucent rounded-3 position-relative mb-3"><button class="btn btn-wish btn-wish-primary z-2 d-toggle-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover" data-fa-transform="down-1"></span><span class="far fa-heart d-none-hover" data-fa-transform="down-1"></span></button><img class="img-fluid" src="{{ asset('assets/img/products/10.png') }}" alt=""></div><a class="stretched-link" href="{{ url('product-details') }}">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">Apple Magic Mouse (Wireless, Rechargable) - Silver</h6>
                          </a>
                          <p class="fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-body-quaternary fw-semibold ms-1">(6 people rated)</span></p>
                        </div>
                        <div>
                          <h3 class="text-body-emphasis">$89.00</h3>
                          <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">2 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 border-translucent rounded-3 position-relative mb-3"><button class="btn btn-wish btn-wish-primary z-2 d-toggle-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover" data-fa-transform="down-1"></span><span class="far fa-heart d-none-hover" data-fa-transform="down-1"></span></button><img class="img-fluid" src="{{ asset('assets/img/products/25.png') }}" alt=""></div><a class="stretched-link" href="{{ url('product-details') }}">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">RESPAWN 200 Racing Style Gaming Chair, in Gray RSP 200 GRY</h6>
                          </a>
                          <p class="fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-body-quaternary fw-semibold ms-1">(8 people rated)</span></p>
                        </div>
                        <div>
                          <h3 class="text-body-emphasis">$499.00</h3>
                          <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">2 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 border-translucent rounded-3 position-relative mb-3"><button class="btn btn-wish btn-wish-primary z-2 d-toggle-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover" data-fa-transform="down-1"></span><span class="far fa-heart d-none-hover" data-fa-transform="down-1"></span></button><img class="img-fluid" src="{{ asset('assets/img/products/27.png') }}" alt=""></div><a class="stretched-link" href="{{ url('product-details') }}">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">LEVOIT Humidifiers for Bedroom Large Room 6L Warm and Cool Mist for...</h6>
                          </a>
                          <p class="fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-body-quaternary fw-semibold ms-1">(3 people rated)</span></p>
                        </div>
                        <div>
                          <h3 class="text-body-emphasis">$299.00</h3>
                          <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">3 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 border-translucent rounded-3 position-relative mb-3"><button class="btn btn-wish btn-wish-primary z-2 d-toggle-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover" data-fa-transform="down-1"></span><span class="far fa-heart d-none-hover" data-fa-transform="down-1"></span></button><img class="img-fluid" src="{{ asset('assets/img/products/26.png') }}" alt=""></div><a class="stretched-link" href="{{ url('product-details') }}">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">NETGEAR Nighthawk Pro Gaming XR500 Wi-Fi Router with 4 Ethernet Ports...</h6>
                          </a>
                          <p class="fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-body-quaternary fw-semibold ms-1">(8 people rated)</span></p>
                        </div>
                        <div>
                          <h3 class="text-body-emphasis">$49.00</h3>
                          <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">4 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 border-translucent rounded-3 position-relative mb-3"><button class="btn btn-wish btn-wish-primary z-2 d-toggle-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover" data-fa-transform="down-1"></span><span class="far fa-heart d-none-hover" data-fa-transform="down-1"></span></button><img class="img-fluid" src="{{ asset('assets/img/products/18.png') }}" alt=""></div><a class="stretched-link" href="{{ url('product-details') }}">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">Rachael Ray Cucina Bakeware Set Includes Nonstick Bread Baking Cookie Sheet...</h6>
                          </a>
                          <p class="fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-body-quaternary fw-semibold ms-1">(1 people rated)</span></p>
                        </div>
                        <div>
                          <h3 class="text-body-emphasis">$29.00</h3>
                          <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">3 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 border-translucent rounded-3 position-relative mb-3"><button class="btn btn-wish btn-wish-primary z-2 d-toggle-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover" data-fa-transform="down-1"></span><span class="far fa-heart d-none-hover" data-fa-transform="down-1"></span></button><img class="img-fluid" src="{{ asset('assets/img/products/17.png') }}" alt=""></div><a class="stretched-link" href="{{ url('product-details') }}">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">Xbox Series S</h6>
                          </a>
                          <p class="fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-body-quaternary fw-semibold ms-1">(6 people rated)</span></p>
                        </div>
                        <div>
                          <h3 class="text-body-emphasis">$19.00</h3>
                          <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">2 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 border-translucent rounded-3 position-relative mb-3"><button class="btn btn-wish btn-wish-primary z-2 d-toggle-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover" data-fa-transform="down-1"></span><span class="far fa-heart d-none-hover" data-fa-transform="down-1"></span></button><img class="img-fluid" src="{{ asset('assets/img/products/24.png') }}" alt=""></div><a class="stretched-link" href="{{ url('product-details') }}">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">FURINNO Computer Writing Desk, Walnut</h6>
                          </a>
                          <p class="fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-body-quaternary fw-semibold ms-1">(8 people rated)</span></p>
                        </div>
                        <div>
                          <h3 class="text-body-emphasis">$199.00</h3>
                          <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">2 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 border-translucent rounded-3 position-relative mb-3"><button class="btn btn-wish btn-wish-primary z-2 d-toggle-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover" data-fa-transform="down-1"></span><span class="far fa-heart d-none-hover" data-fa-transform="down-1"></span></button><img class="img-fluid" src="{{ asset('assets/img/products/20.png') }}" alt=""></div><a class="stretched-link" href="{{ url('product-details') }}">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">ASUS TUF Gaming F15 Gaming Laptop</h6>
                          </a>
                          <p class="fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span class="text-body-quaternary fw-semibold ms-1">(3 people rated)</span></p>
                        </div>
                        <div>
                          <h3 class="text-body-emphasis">$150.00</h3>
                          <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">2 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-flex justify-content-end">
                <nav aria-label="Page navigation example">
                  <ul class="pagination mb-0">
                    <li class="page-item">
                      <a class="page-link" href="#">
                        <span class="fas fa-chevron-left"> </span>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item active" aria-current="page">
                      <a class="page-link" href="#">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">5</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#"> <span class="fas fa-chevron-right"></span></a>
                    </li>
                  </ul>
                </nav>
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
