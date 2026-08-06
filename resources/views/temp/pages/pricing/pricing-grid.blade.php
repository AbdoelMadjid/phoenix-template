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
        
      @endsection



