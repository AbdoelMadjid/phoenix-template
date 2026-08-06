@extends('layouts.vertical')

@section('title', 'Pricing Grid.Blade')

@push('styles')
<link href="{{ asset('assets/external/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap') }}" rel="stylesheet">
@endpush

@section('content')

        <nav class="mb-3" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Pages</a></li>
            <li class="breadcrumb-item active">Pricing-grid</li>
          </ol>
        </nav>
        <div class="pb-9">
          <h2 class="mb-7">Pricing</h2>
          <div class="row">
            <div class="col-xl-12 col-xxl-9 mb-1">
              <div class="tabs mb-7">
                <ul class="nav nav-underline fs-9 mb-3" id="nav-tab" role="tablist">
                  <li class="nav-item" role="presentation"><button class="nav-link" id="pills-year-tab" data-bs-toggle="pill" data-bs-target="#pills-year" type="button" role="tab" aria-controls="pills-year" aria-selected="false">Yearly</button></li>
                  <li class="nav-item" role="presentation"><button class="nav-link active" id="pills-month-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab" aria-controls="pills-month" aria-selected="true">Monthly</button></li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-month" role="tabpanel" aria-labelledby="pills-month-tab">
                    <div class="row g-3">
                      <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                        <div class="h-100"><input class="card-form-check-input d-none" type="radio" name="pricingMonthly" id="startup" checked="checked">
                          <div class="position-relative h-100"><label class="stretched-link" for="startup"></label>
                            <div class="card h-100 overflow-hidden cursor-pointer">
                              <div class="bg-holder d-dark-none" style="background-image:url({{ asset('assets/img/bg/8.png') }});background-position:left bottom;background-size:auto;bottom:-1px;"></div>
                              <!--/.bg-holder-->
                              <div class="bg-holder d-light-none" style="background-image:url({{ asset('assets/img/bg/8-dark.png') }});background-position:left bottom;background-size:auto;bottom:-1px;"></div>
                              <!--/.bg-holder-->
                              <div class="card-body d-flex flex-column justify-content-between position-relative">
                                <div class="d-flex justify-content-between">
                                  <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                    <div class="d-sm-flex align-items-center mb-3">
                                      <h3 class="mb-0">Startup</h3>
                                    </div>
                                    <p class="fs-9 text-body-tertiary">For individuals who are interested <br> in giving it a shot first.</p>
                                    <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                      <h4 class="fw-bolder me-1">Free</h4>
                                      <h5 class="fs-9 fw-normal text-body-tertiary ms-1">Forever</h5>
                                    </div>
                                  </div><img class="d-dark-none" src="{{ asset('assets/img/spot-illustrations/rocket.png') }}" width="54" height="54" alt=""><img class="d-light-none" src="{{ asset('assets/img/spot-illustrations/rocket-dark.png') }}" width="54" height="54" alt="">
                                </div>
                                <div class="row flex-1 justify-content-end">
                                  <div class="col-sm-8 col-md-12">
                                    <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                      <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-translucent">
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">Up to 4 Members</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">3 Collaboration projects</span></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                        <div class="h-100"><input class="card-form-check-input d-none" type="radio" name="pricingMonthly" id="standard">
                          <div class="position-relative h-100"><label class="stretched-link" for="standard"></label>
                            <div class="card h-100 overflow-hidden cursor-pointer">
                              <div class="bg-holder d-dark-none" style="background-image:url({{ asset('assets/img/bg/9.png') }});background-position:left bottom;background-size:auto;bottom:-1px;"></div>
                              <!--/.bg-holder-->
                              <div class="bg-holder d-light-none" style="background-image:url({{ asset('assets/img/bg/9-dark.png') }});background-position:left bottom;background-size:auto;bottom:-1px;"></div>
                              <!--/.bg-holder-->
                              <div class="card-body d-flex flex-column justify-content-between position-relative">
                                <div class="d-flex justify-content-between">
                                  <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                    <div class="d-sm-flex align-items-center mb-3">
                                      <h3 class="mb-0">Standard</h3>
                                    </div>
                                    <p class="fs-9 text-body-tertiary">For teams that need to create <br> project plans with confidence.</p>
                                    <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                      <h4 class="fw-bolder me-1">$14.99</h4>
                                      <h5 class="fs-9 fw-normal text-body-tertiary ms-1">Per month</h5>
                                    </div>
                                  </div><img class="d-dark-none" src="{{ asset('assets/img/spot-illustrations/bag-2.png') }}" width="54" height="54" alt=""><img class="d-light-none" src="{{ asset('assets/img/spot-illustrations/bag-2-dark.png') }}" width="54" height="54" alt="">
                                </div>
                                <div class="row flex-1 justify-content-end">
                                  <div class="col-sm-8 col-md-12">
                                    <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                      <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-translucent">
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">Up to 8 Members</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">Create & Share libraries</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">10 Collaboration projects</span></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                        <div class="h-100"><input class="card-form-check-input d-none pricing-plan-recommended" type="radio" name="pricingMonthly" id="businessPlus">
                          <div class="position-relative h-100"><label class="stretched-link" for="businessPlus"></label>
                            <div class="card h-100 overflow-hidden cursor-pointer bg-warning-subtle border-warning warning-boxshadow pricing-business-plus">
                              <div class="bg-holder d-dark-none" style="background-image:url({{ asset('assets/img/bg/bg-11.png') }});background-position:left bottom;background-size:auto;"></div>
                              <!--/.bg-holder-->
                              <div class="bg-holder d-light-none" style="background-image:url({{ asset('assets/img/bg/bg-11-dark.png') }});background-position:left bottom;background-size:auto;"></div>
                              <!--/.bg-holder-->
                              <div class="card-body d-flex flex-column justify-content-between position-relative">
                                <div class="d-flex justify-content-between">
                                  <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                    <div class="d-sm-flex d-md-block d-lg-flex align-items-center mb-3">
                                      <h3 class="mb-0">Business Plus</h3><span class="badge ms-sm-3 ms-md-0 ms-lg-3 text-uppercase fs-10 text-bg-warning">recommended</span>
                                    </div>
                                    <p class="fs-9 text-body-tertiary">For teams that need to manage <br> work across initiatives.</p>
                                    <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                      <h4 class="fw-bolder me-1">$49.99</h4>
                                      <h5 class="fs-9 fw-normal text-body-tertiary ms-1">Per month</h5>
                                    </div>
                                  </div><img class="d-dark-none" src="{{ asset('assets/img/spot-illustrations/star.png') }}" width="54" height="54" alt=""><img class="d-light-none" src="{{ asset('assets/img/spot-illustrations/star-dark.png') }}" width="54" height="54" alt="">
                                </div>
                                <div class="row flex-1 justify-content-end">
                                  <div class="col-sm-8 col-md-12">
                                    <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                      <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-warning-subtle">
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">Technical Supports</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">Up to 20 Members</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">Create & Share libraries</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold"><span class="fw-bold">Unlimited</span> Collaboration</span></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                        <div class="h-100"><input class="card-form-check-input d-none" type="radio" name="pricingMonthly" id="enterprise">
                          <div class="position-relative h-100"><label class="stretched-link" for="enterprise"></label>
                            <div class="card h-100 overflow-hidden cursor-pointer">
                              <div class="bg-holder d-dark-none" style="background-image:url({{ asset('assets/img/bg/10.png') }});background-position:left bottom;background-size:auto;bottom:-1px;"></div>
                              <!--/.bg-holder-->
                              <div class="bg-holder d-light-none" style="background-image:url({{ asset('assets/img/bg/10-dark.png') }});background-position:left bottom;background-size:auto;bottom:-1px;"></div>
                              <!--/.bg-holder-->
                              <div class="card-body d-flex flex-column justify-content-between position-relative">
                                <div class="d-flex justify-content-between">
                                  <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                    <div class="d-sm-flex align-items-center mb-3">
                                      <h3 class="mb-0">Enterprise</h3>
                                    </div>
                                    <p class="fs-9 text-body-tertiary">For organizations that need <br> additional security and support.</p>
                                    <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                      <h4 class="fw-bolder me-1">$149.99</h4>
                                      <h5 class="fs-9 fw-normal text-body-tertiary ms-1">Per month</h5>
                                    </div>
                                  </div><img class="d-dark-none" src="{{ asset('assets/img/spot-illustrations/shield-2.png') }}" width="54" height="54" alt=""><img class="d-light-none" src="{{ asset('assets/img/spot-illustrations/shield-2-dark.png') }}" width="54" height="54" alt="">
                                </div>
                                <div class="row flex-1 justify-content-end">
                                  <div class="col-sm-8 col-md-12">
                                    <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                      <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-translucent">
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">24/7 VIP Support</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">Automated analytics</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold"><span class="fw-bold">Unlimited</span> Members*</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">Create & Share libraries</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">Centralized billing</span></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-content" id="pills-tabContentYear">
                  <div class="tab-pane fade" id="pills-year" role="tabpanel" aria-labelledby="pills-year-tab">
                    <div class="row g-3">
                      <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                        <div class="h-100"><input class="card-form-check-input d-none" type="radio" name="pricingYearly" id="startupYearly" checked="checked">
                          <div class="position-relative h-100"><label class="stretched-link" for="startupYearly"></label>
                            <div class="card h-100 overflow-hidden cursor-pointer">
                              <div class="bg-holder d-dark-none" style="background-image:url({{ asset('assets/img/bg/8.png') }});background-position:left bottom;background-size:auto;bottom:-1px;"></div>
                              <!--/.bg-holder-->
                              <div class="bg-holder d-light-none" style="background-image:url({{ asset('assets/img/bg/8-dark.png') }});background-position:left bottom;background-size:auto;bottom:-1px;"></div>
                              <!--/.bg-holder-->
                              <div class="card-body d-flex flex-column justify-content-between position-relative">
                                <div class="d-flex justify-content-between">
                                  <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                    <div class="d-sm-flex align-items-center mb-3">
                                      <h3 class="mb-0">Startup</h3>
                                    </div>
                                    <p class="fs-9 text-body-tertiary">For individuals who are interested <br> in giving it a shot first.</p>
                                    <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                      <h4 class="fw-bolder me-1">Free</h4>
                                      <h5 class="fs-9 fw-normal text-body-tertiary ms-1">Forever</h5>
                                    </div>
                                  </div><img class="d-dark-none" src="{{ asset('assets/img/spot-illustrations/rocket.png') }}" width="54" height="54" alt=""><img class="d-light-none" src="{{ asset('assets/img/spot-illustrations/rocket-dark.png') }}" width="54" height="54" alt="">
                                </div>
                                <div class="row flex-1 justify-content-end">
                                  <div class="col-sm-8 col-md-12">
                                    <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                      <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-translucent">
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">Up to 4 Members</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">3 Collaboration projects</span></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                        <div class="h-100"><input class="card-form-check-input d-none" type="radio" name="pricingYearly" id="standardYearly">
                          <div class="position-relative h-100"><label class="stretched-link" for="standardYearly"></label>
                            <div class="card h-100 overflow-hidden cursor-pointer">
                              <div class="bg-holder d-dark-none" style="background-image:url({{ asset('assets/img/bg/9.png') }});background-position:left bottom;background-size:auto;bottom:-1px;"></div>
                              <!--/.bg-holder-->
                              <div class="bg-holder d-light-none" style="background-image:url({{ asset('assets/img/bg/9-dark.png') }});background-position:left bottom;background-size:auto;bottom:-1px;"></div>
                              <!--/.bg-holder-->
                              <div class="card-body d-flex flex-column justify-content-between position-relative">
                                <div class="d-flex justify-content-between">
                                  <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                    <div class="d-sm-flex align-items-center mb-3">
                                      <h3 class="mb-0">Standard</h3>
                                    </div>
                                    <p class="fs-9 text-body-tertiary">For teams that need to create <br> project plans with confidence.</p>
                                    <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                      <h4 class="fw-bolder me-1">$179.88</h4>
                                      <h5 class="fs-9 fw-normal text-body-tertiary ms-1">Per year</h5>
                                    </div>
                                  </div><img class="d-dark-none" src="{{ asset('assets/img/spot-illustrations/bag-2.png') }}" width="54" height="54" alt=""><img class="d-light-none" src="{{ asset('assets/img/spot-illustrations/bag-2-dark.png') }}" width="54" height="54" alt="">
                                </div>
                                <div class="row flex-1 justify-content-end">
                                  <div class="col-sm-8 col-md-12">
                                    <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                      <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-translucent">
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">Up to 8 Members</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">Create & Share libraries</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">10 Collaboration projects</span></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                        <div class="h-100"><input class="card-form-check-input d-none pricing-plan-recommended" type="radio" name="pricingYearly" id="businessPlusYearly">
                          <div class="position-relative h-100"><label class="stretched-link" for="businessPlusYearly"></label>
                            <div class="card h-100 overflow-hidden cursor-pointer bg-warning-subtle border-warning warning-boxshadow pricing-business-plus">
                              <div class="bg-holder d-dark-none" style="background-image:url({{ asset('assets/img/bg/bg-11.png') }});background-position:left bottom;background-size:auto;bottom:-1px;"></div>
                              <!--/.bg-holder-->
                              <div class="bg-holder d-light-none" style="background-image:url({{ asset('assets/img/bg/bg-11-dark.png') }});background-position:left bottom;background-size:auto;bottom:-1px;"></div>
                              <!--/.bg-holder-->
                              <div class="card-body d-flex flex-column justify-content-between position-relative">
                                <div class="d-flex justify-content-between">
                                  <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                    <div class="d-sm-flex align-items-center mb-3">
                                      <h3 class="mb-0">Business Plus</h3><span class="badge ms-sm-3 text-uppercase fs-10 text-bg-warning">recommended</span>
                                    </div>
                                    <p class="fs-9 text-body-tertiary">For teams that need to manage <br> work across initiatives.</p>
                                    <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                      <h4 class="fw-bolder me-1">$599.88</h4>
                                      <h5 class="fs-9 fw-normal text-body-tertiary ms-1">Per year</h5>
                                    </div>
                                  </div><img class="d-dark-none" src="{{ asset('assets/img/spot-illustrations/star.png') }}" width="54" height="54" alt=""><img class="d-light-none" src="{{ asset('assets/img/spot-illustrations/star-dark.png') }}" width="54" height="54" alt="">
                                </div>
                                <div class="row flex-1 justify-content-end">
                                  <div class="col-sm-8 col-md-12">
                                    <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                      <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-translucent">
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">Technical Supports</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">Up to 20 Members</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">Create & Share libraries</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold"><span class="fw-bold">Unlimited</span> Collaboration</span></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                        <div class="h-100"><input class="card-form-check-input d-none" type="radio" name="pricingYearly" id="enterpriseYearly">
                          <div class="position-relative h-100"><label class="stretched-link" for="enterpriseYearly"></label>
                            <div class="card h-100 overflow-hidden cursor-pointer">
                              <div class="bg-holder d-dark-none" style="background-image:url({{ asset('assets/img/bg/10.png') }});background-position:left bottom;background-size:auto;bottom:-1px;"></div>
                              <!--/.bg-holder-->
                              <div class="bg-holder d-light-none" style="background-image:url({{ asset('assets/img/bg/10-dark.png') }});background-position:left bottom;background-size:auto;bottom:-1px;"></div>
                              <!--/.bg-holder-->
                              <div class="card-body d-flex flex-column justify-content-between position-relative">
                                <div class="d-flex justify-content-between">
                                  <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                    <div class="d-sm-flex align-items-center mb-3">
                                      <h3 class="mb-0">Enterprise</h3>
                                    </div>
                                    <p class="fs-9 text-body-tertiary">For organizations that need <br> additional security and support.</p>
                                    <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                      <h4 class="fw-bolder me-1">$1,799.88</h4>
                                      <h5 class="fs-9 fw-normal text-body-tertiary ms-1">Per year</h5>
                                    </div>
                                  </div><img class="d-dark-none" src="{{ asset('assets/img/spot-illustrations/shield-2.png') }}" width="54" height="54" alt=""><img class="d-light-none" src="{{ asset('assets/img/spot-illustrations/shield-2-dark.png') }}" width="54" height="54" alt="">
                                </div>
                                <div class="row flex-1 justify-content-end">
                                  <div class="col-sm-8 col-md-12">
                                    <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                      <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-translucent">
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">24/7 VIP Support</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">Automated analytics</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold"><span class="fw-bold">Unlimited</span> Members*</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">Create & Share libraries</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">Centralized billing</span></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <p class="mb-0">Business Starter, Business Standard, and Business Plus plans can be purchased for a maximum of 300 users. There is no <br class="d-none d-xl-block d-xxl-none">maximum user limit for Enterprise plans.</p>
                <p class="fw-semibold">Phoenix customers may have access to additional features for a limited <br class="d-none d-sm-block d-lg-none">promotional period.</p>
                <div class="d-grid d-sm-flex"><button class="btn btn-lg btn-primary d-sm-flex align-items-center mb-3 mb-sm-0 me-sm-3 px-sm-8">Subscribe Now<span class="fas fa-angle-right ms-1"></span></button>
                  <button class="btn btn-lg btn-outline-primary px-sm-7">Start 7 days free Trial</button>
                </div>
              </div>
            </div>
            <div class="col col-xxl-3 mt-8">
              <h3 class="fw-semibold mb-3">Included in our all packages</h3>
              <div class="row">
                <div class="col-md-6 col-xxl-12">
                  <div class="rounded-3 py-2 px-3 bg-body-emphasis d-flex align-items-center mb-3"><span class="fas fa-check text-primary me-3 fs-9"></span>
                    <p class="mb-0 text-body-secondary">Timeline</p>
                  </div>
                </div>
                <div class="col-md-6 col-xxl-12">
                  <div class="rounded-3 py-2 px-3 bg-body-emphasis d-flex align-items-center mb-3"><span class="fas fa-check text-primary me-3 fs-9"></span>
                    <p class="mb-0 text-body-secondary">Advanced Search</p>
                  </div>
                </div>
                <div class="col-md-6 col-xxl-12">
                  <div class="rounded-3 py-2 px-3 bg-body-emphasis d-flex align-items-center mb-3"><span class="fas fa-check text-primary me-3 fs-9"></span>
                    <p class="mb-0 text-body-secondary">Custom fields</p><span class="badge badge-phoenix badge-phoenix-primary ms-2">New</span>
                  </div>
                </div>
                <div class="col-md-6 col-xxl-12">
                  <div class="rounded-3 py-2 px-3 bg-body-emphasis d-flex align-items-center mb-3"><span class="fas fa-check text-primary me-3 fs-9"></span>
                    <p class="mb-0 text-body-secondary">Task dependencies</p>
                  </div>
                </div>
                <div class="col-md-6 col-xxl-12">
                  <div class="rounded-3 py-2 px-3 bg-body-emphasis d-flex align-items-center mb-3"><span class="fas fa-check text-primary me-3 fs-9"></span>
                    <p class="mb-0 text-body-secondary">20TB of additional space </p>
                  </div>
                </div>
                <div class="col-md-6 col-xxl-12">
                  <div class="rounded-3 py-2 px-3 bg-body-emphasis d-flex align-items-center mb-3"><span class="fas fa-check text-primary me-3 fs-9"></span>
                    <p class="mb-0 text-body-secondary">Bandwidth of Upto 1 Gbps</p>
                  </div>
                </div>
                <div class="col-md-6 col-xxl-12">
                  <div class="rounded-3 py-2 px-3 bg-body-emphasis d-flex align-items-center mb-3"><span class="fas fa-check text-primary me-3 fs-9"></span>
                    <p class="mb-0 text-body-secondary">Private teams & projects</p>
                  </div>
                </div>
                <div class="col-md-6 col-xxl-12">
                  <div class="rounded-3 py-2 px-3 bg-body-emphasis d-flex align-items-center mb-3"><span class="fas fa-check text-primary me-3 fs-9"></span>
                    <p class="mb-0 text-body-secondary">Customer Support and Training</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
