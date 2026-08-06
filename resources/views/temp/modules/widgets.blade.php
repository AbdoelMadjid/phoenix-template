@extends('layouts.vertical')

@section('title', 'Widgets')

@push('styles')
<link href="{{ asset('vendors/choices/choices.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/dhtmlx-gantt/dhtmlxgantt.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/glightbox/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/dropzone/dropzone.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="widgets-scrollspy-nav mt-n5 bg-body-emphasis z-5 mx-n4 mx-lg-n6 border-bottom">
          <nav class="simplebar-scrollspy navbar py-0 scrollbar-overlay" id="widgets-scrollspy">
            <ul class="nav flex-nowrap">
              <li class="nav-item"> <a class="nav-link text-body-tertiary fw-bold py-3 lh-1 text-nowrap" href="#scrollspyStats">Number Stats and Charts</a></li>
              <li class="nav-item"> <a class="nav-link text-body-tertiary fw-bold py-3 lh-1 text-nowrap" href="#scrollspyTables">Tables, Files, and Lists</a></li>
              <li class="nav-item"> <a class="nav-link text-body-tertiary fw-bold py-3 lh-1 text-nowrap" href="#scrollspyEcommerce">E-commerce</a></li>
              <li class="nav-item"> <a class="nav-link text-body-tertiary fw-bold py-3 lh-1 text-nowrap" href="#scrollspyUsers">Users & Feed</a></li>
              <li class="nav-item"> <a class="nav-link text-body-tertiary fw-bold py-3 lh-1 text-nowrap" href="#scrollspyForms">Forms</a></li>
              <li class="nav-item"> <a class="nav-link text-body-tertiary fw-bold py-3 lh-1 text-nowrap" href="#scrollspyOthers">Others</a></li>
            </ul>
          </nav>
        </div>
        <div class="mb-9" data-bs-spy="scroll" data-bs-target="#widgets-scrollspy">
          <div class="d-flex mb-5 pt-8" id="scrollspyStats"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fa-inverse fa-stack-1x text-primary-subtle fas fa-percentage"></i></span>
            <div class="col">
              <h3 class="mb-0 text-primary position-relative fw-bold"><span class="bg-body pe-2">Number Stats &amp; Charts</span><span class="border border-primary position-absolute top-50 translate-middle-y w-100 start-0 z-n1"></span></h3>
              <p class="mb-0">You can easily show your stats content by using these cards.</p>
            </div>
          </div>
          <div class="px-3 mb-5">
            <div class="row justify-content-between">
              <div class="col-6 col-md-4 col-xxl-2 text-center border-translucent border-start-xxl border-end-xxl-0 border-bottom-xxl-0 border-end border-bottom pb-4 pb-xxl-0 "><span class="uil fs-5 lh-1 uil-envelope text-primary"></span>
                <h1 class="fs-5 pt-3">2,800</h1>
                <p class="fs-9 mb-0">Total Emails</p>
              </div>
              <div class="col-6 col-md-4 col-xxl-2 text-center border-translucent border-start-xxl border-end-xxl-0 border-bottom-xxl-0 border-end-md border-bottom pb-4 pb-xxl-0"><span class="uil fs-5 lh-1 uil-envelope-upload text-info"></span>
                <h1 class="fs-5 pt-3">1,866</h1>
                <p class="fs-9 mb-0">Emails Sent</p>
              </div>
              <div class="col-6 col-md-4 col-xxl-2 text-center border-translucent border-start-xxl border-bottom-xxl-0 border-bottom border-end border-end-md-0 pb-4 pb-xxl-0 pt-4 pt-md-0"><span class="uil fs-5 lh-1 uil-envelopes text-primary"></span>
                <h1 class="fs-5 pt-3">1,366</h1>
                <p class="fs-9 mb-0">Emails Delivered</p>
              </div>
              <div class="col-6 col-md-4 col-xxl-2 text-center border-translucent border-start-xxl border-end-md border-end-xxl-0 border-bottom border-bottom-md-0 pb-4 pb-xxl-0 pt-4 pt-xxl-0"><span class="uil fs-5 lh-1 uil-envelope-open text-info"></span>
                <h1 class="fs-5 pt-3">1,200</h1>
                <p class="fs-9 mb-0">Emails Opened</p>
              </div>
              <div class="col-6 col-md-4 col-xxl-2 text-center border-translucent border-start-xxl border-end border-end-xxl-0 pb-md-4 pb-xxl-0 pt-4 pt-xxl-0"><span class="uil fs-5 lh-1 uil-envelope-check text-success"></span>
                <h1 class="fs-5 pt-3">900</h1>
                <p class="fs-9 mb-0">Emails Clicked</p>
              </div>
              <div class="col-6 col-md-4 col-xxl-2 text-center border-translucent border-start-xxl border-end-xxl pb-md-4 pb-xxl-0 pt-4 pt-xxl-0"><span class="uil fs-5 lh-1 uil-envelope-block text-danger"></span>
                <h1 class="fs-5 pt-3">500</h1>
                <p class="fs-9 mb-0">Emails Bounce</p>
              </div>
            </div>
          </div>
          <div class="row g-3 mb-5">
            <div class="col-md-6 col-xxl-3">
              <div class="card h-100">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h5 class="mb-1">Total orders<span class="badge badge-phoenix badge-phoenix-warning rounded-pill fs-9 ms-2"><span class="badge-label">-6.8%</span></span></h5>
                      <h6 class="text-body-tertiary">Last 7 days</h6>
                    </div>
                    <h4>16,247</h4>
                  </div>
                  <div class="d-flex justify-content-center px-4 py-6">
                    <div class="echart-total-orders" style="height:85px;width:115px"></div>
                  </div>
                  <div class="mt-2">
                    <div class="d-flex align-items-center mb-2">
                      <div class="bullet-item bg-primary me-2"></div>
                      <h6 class="text-body fw-semibold flex-1 mb-0">Completed</h6>
                      <h6 class="text-body fw-semibold mb-0">52%</h6>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="bullet-item bg-primary-subtle me-2"></div>
                      <h6 class="text-body fw-semibold flex-1 mb-0">Pending payment</h6>
                      <h6 class="text-body fw-semibold mb-0">48%</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xxl-3">
              <div class="card h-100">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h5 class="mb-1">New customers<span class="badge badge-phoenix badge-phoenix-warning rounded-pill fs-9 ms-2"> <span class="badge-label">+26.5%</span></span></h5>
                      <h6 class="text-body-tertiary">Last 7 days</h6>
                    </div>
                    <h4>356</h4>
                  </div>
                  <div class="pb-0 pt-4">
                    <div class="echarts-new-customers" style="height:180px;width:100%;"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xxl-3">
              <div class="card h-100">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h5 class="mb-2">Top coupons</h5>
                      <h6 class="text-body-tertiary">Last 7 days</h6>
                    </div>
                  </div>
                  <div class="pb-4 pt-3">
                    <div class="echart-top-coupons" style="height:115px;width:100%;"></div>
                  </div>
                  <div>
                    <div class="d-flex align-items-center mb-2">
                      <div class="bullet-item bg-primary me-2"></div>
                      <h6 class="text-body fw-semibold flex-1 mb-0">Percentage discount</h6>
                      <h6 class="text-body fw-semibold mb-0">72%</h6>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <div class="bullet-item bg-primary-lighter me-2"></div>
                      <h6 class="text-body fw-semibold flex-1 mb-0">Fixed card discount</h6>
                      <h6 class="text-body fw-semibold mb-0">18%</h6>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="bullet-item bg-info-dark me-2"></div>
                      <h6 class="text-body fw-semibold flex-1 mb-0">Fixed product discount</h6>
                      <h6 class="text-body fw-semibold mb-0">10%</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xxl-3">
              <div class="card h-100">
                <div class="card-body d-flex flex-column">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h5 class="mb-2">Paying vs non paying</h5>
                      <h6 class="text-body-tertiary">Last 7 days</h6>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center pt-3 flex-1">
                    <div class="echarts-paying-customer-chart" style="height:100%;width:100%;"></div>
                  </div>
                  <div class="mt-3">
                    <div class="d-flex align-items-center mb-2">
                      <div class="bullet-item bg-primary me-2"></div>
                      <h6 class="text-body fw-semibold flex-1 mb-0">Paying customer</h6>
                      <h6 class="text-body fw-semibold mb-0">30%</h6>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="bullet-item bg-primary-subtle me-2"></div>
                      <h6 class="text-body fw-semibold flex-1 mb-0">Non-paying customer</h6>
                      <h6 class="text-body fw-semibold mb-0">70%</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row gx-4 gy-6 pb-5">
            <div class="col-xxl-6">
              <div class="mb-3">
                <h3>New Users &amp; Leads</h3>
                <p class="text-body-tertiary mb-0">Payment received across all channels</p>
              </div>
              <div class="row g-6">
                <div class="col-md-6 mb-2 mb-sm-0">
                  <div class="d-flex align-items-center"><span class="me-2 text-info" data-feather="users" style="min-height:24px; width:24px"></span>
                    <h4 class="text-body-tertiary mb-0">New Users :<span class="text-body-emphasis"> 42</span></h4><span class="badge badge-phoenix fs-10 badge-phoenix-success d-inline-flex align-items-center ms-2"><span class="badge-label d-inline-block lh-base">+24.5%</span><span class="ms-1 fa-solid fa-caret-up d-inline-block lh-1"></span></span>
                  </div>
                  <div class="pb-0 pt-4">
                    <div class="echarts-new-users" style="min-height:110px;width:100%;"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="d-flex align-items-center"><span class="me-2 text-primary" data-feather="zap" style="height:24px; width:24px"></span>
                    <h4 class="text-body-tertiary mb-0">New Leads :<span class="text-body-emphasis"> 45</span></h4><span class="badge badge-phoenix fs-10 badge-phoenix-success d-inline-flex align-items-center ms-2"><span class="badge-label d-inline-block lh-base">+30.5%</span><span class="ms-1 fa-solid fa-caret-up d-inline-block lh-1"></span></span>
                  </div>
                  <div class="pb-0 pt-4">
                    <div class="echarts-new-leads" style="min-height:110px;width:100%;"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-6">
              <div class="row">
                <div class="col-sm-7 col-md-8 col-xxl-8 mb-md-3 mb-lg-0">
                  <h3>New Contacts by Source</h3>
                  <p class="text-body-tertiary">Payment received across all channels</p>
                  <div class="row g-0">
                    <div class="col-6 col-xl-4">
                      <div class="d-flex flex-column flex-center align-items-sm-start flex-md-row justify-content-md-between flex-xxl-column p-3 ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-bottom border-end border-translucent">
                        <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-square fs-11 me-2 text-primary" data-fa-transform="up-2"></span><span class="mb-0 fs-9 text-body">Organic</span></div>
                        <h3 class="fw-semibold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0 mb-sm-3">80</h3>
                      </div>
                    </div>
                    <div class="col-6 col-xl-4">
                      <div class="d-flex flex-column flex-center align-items-sm-start flex-md-row justify-content-md-between flex-xxl-column p-3 ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-bottom border-end-md-0 border-end-xl border-translucent">
                        <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-square fs-11 me-2 text-success" data-fa-transform="up-2"></span><span class="mb-0 fs-9 text-body">Paid Search</span></div>
                        <h3 class="fw-semibold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0 mb-sm-3">65</h3>
                      </div>
                    </div>
                    <div class="col-6 col-xl-4">
                      <div class="d-flex flex-column flex-center align-items-sm-start flex-md-row justify-content-md-between flex-xxl-column p-3 ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-bottom border-end border-end-md border-end-xl-0 border-translucent">
                        <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-square fs-11 me-2 text-info" data-fa-transform="up-2"></span><span class="mb-0 fs-9 text-body">Direct</span></div>
                        <h3 class="fw-semibold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0 mb-sm-3">40</h3>
                      </div>
                    </div>
                    <div class="col-6 col-xl-4">
                      <div class="d-flex flex-column flex-center align-items-sm-start flex-md-row justify-content-md-between flex-xxl-column p-3 ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-end-xl border-bottom border-bottom-xl-0 border-translucent">
                        <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-square fs-11 me-2 text-info-light" data-fa-transform="up-2"></span><span class="mb-0 fs-9 text-body">Social</span></div>
                        <h3 class="fw-semibold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0 mb-sm-3">220</h3>
                      </div>
                    </div>
                    <div class="col-6 col-xl-4">
                      <div class="d-flex flex-column flex-center align-items-sm-start flex-md-row justify-content-md-between flex-xxl-column p-3 ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-end border-translucent">
                        <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-square fs-11 me-2 text-danger-lighter" data-fa-transform="up-2"></span><span class="mb-0 fs-9 text-body">Referrals</span></div>
                        <h3 class="fw-semibold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0 mb-sm-3">120</h3>
                      </div>
                    </div>
                    <div class="col-6 col-xl-4">
                      <div class="d-flex flex-column flex-center align-items-sm-start flex-md-row justify-content-md-between flex-xxl-column p-3 ps-sm-3 ps-md-4 p-md-3 h-100">
                        <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-square fs-11 me-2 text-warning-light" data-fa-transform="up-2"></span><span class="mb-0 fs-9 text-body">Others</span></div>
                        <h3 class="fw-semibold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0 mb-sm-3">35</h3>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-5 col-md-4 col-xxl-4 my-3 my-sm-0">
                  <div class="position-relative d-flex flex-center mb-sm-4 mb-xl-0 echart-contact-by-source-container mt-sm-7 mt-lg-4 mt-xl-0">
                    <div class="echart-contact-by-source" style="min-height:245px;width:100%"></div>
                    <div class="position-absolute rounded-circle bg-primary-subtle top-50 start-50 translate-middle d-flex flex-center" style="height:100px; width:100px;">
                      <h3 class="mb-0 text-primary-dark fw-bolder" data-label="data-label"></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis py-5">
            <div class="row g-6">
              <div class="col-12 col-xl-6">
                <div class="me-xl-4">
                  <div>
                    <h3>Projection vs actual</h3>
                    <p class="mb-1 text-body-tertiary">Actual earnings vs projected earnings</p>
                  </div>
                  <div class="echart-projection-actual" style="height:300px; width:100%"></div>
                </div>
              </div>
              <div class="col-12 col-xl-6">
                <div>
                  <h3>Returning customer rate</h3>
                  <p class="mb-1 text-body-tertiary">Rate of customers returning to your shop over time</p>
                </div>
                <div class="echart-returning-customer" style="height:300px;"></div>
              </div>
            </div>
          </div>
          <div class="row g-6 pt-6 align-items-center">
            <div class="col-xxl-6">
              <div class="row flex-between-center mb-4 g-3">
                <div class="col-auto">
                  <h3>Total sells</h3>
                  <p class="text-body-tertiary lh-sm mb-0">Payment received across all channels</p>
                </div>
                <div class="col-8 col-sm-4"><select class="form-select form-select-sm" id="select-gross-revenue-month">
                    <option>Mar 1 - 31, 2022</option>
                    <option>April 1 - 30, 2022</option>
                    <option>May 1 - 31, 2022</option>
                  </select></div>
              </div>
              <div class="echart-total-sales-chart" style="min-height:320px;width:100%"></div>
            </div>
            <div class="col-xxl-6">
              <div class="mx-xxl-0">
                <h3>Project: zero Roadmap</h3>
                <p class="text-body-tertiary">Phase 2 is now ongoing</p>
                <div class="gantt-zero-roadmap">
                  <div class="row g-2 flex-between-center mb-3">
                    <div class="col-12 col-sm-auto">
                      <div class="d-flex">
                        <div class="d-flex align-items-end me-3"><label class="form-check-label mb-0 me-2 lh-1 text-body" for="progress">Progress</label>
                          <div class="form-check form-switch min-h-auto mb-0"><input class="form-check-input" id="progress" type="checkbox" checked="" data-gantt-progress="data-gantt-progress"></div>
                        </div>
                        <div class="d-flex align-items-end flex-1"><label class="form-check-label mb-0 me-2 lh-1 text-body" for="links">Links</label>
                          <div class="form-check form-switch min-h-auto flex-1 mb-0"><input class="form-check-input" id="links" type="checkbox" checked="" data-gantt-links="data-gantt-links"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-auto">
                      <div class="btn-group" role="group" data-gantt-scale="data-gantt-scale"><input class="btn-check" id="weekView" type="radio" name="scaleView" value="week" checked=""><label class="btn btn-phoenix-secondary bg-body-highlight-hover fs-10 py-1 mb-0" for="weekView">Week</label><input class="btn-check" id="monthView" type="radio" name="scaleView" value="month"><label class="btn btn-phoenix-secondary bg-body-highlight-hover fs-10 py-1 mb-0" for="monthView">Month</label><input class="btn-check" id="yearView" type="radio" name="scaleView" value="year"><label class="btn btn-phoenix-secondary bg-body-highlight-hover fs-10 py-1 mb-0" for="yearView">Year</label></div>
                    </div>
                  </div>
                  <div class="gantt-zero-roadmap-chart"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis pt-6 pb-3 mt-6">
            <div class="row">
              <div class="col-12 col-xl-7 col-xxl-6">
                <div class="row g-3 mb-3">
                  <div class="col-12 col-md-6">
                    <h3 class="text-body-emphasis text-nowrap">Issues Discovered</h3>
                    <p class="text-body-tertiary mb-md-7">Newly found and yet to be solved</p>
                    <div class="d-flex align-items-center justify-content-between">
                      <p class="mb-0 fw-bold">Issue type </p>
                      <p class="mb-0 fs-9">Total count <span class="fw-bold">257</span></p>
                    </div>
                    <hr class="bg-body-secondary mb-2 mt-2">
                    <div class="d-flex align-items-center mb-1"><span class="d-inline-block bg-info-light bullet-item me-2"></span>
                      <p class="mb-0 fw-semibold text-body lh-sm flex-1">Product design</p>
                      <h5 class="mb-0 text-body">78</h5>
                    </div>
                    <div class="d-flex align-items-center mb-1"><span class="d-inline-block bg-warning-light bullet-item me-2"></span>
                      <p class="mb-0 fw-semibold text-body lh-sm flex-1">Development</p>
                      <h5 class="mb-0 text-body">63</h5>
                    </div>
                    <div class="d-flex align-items-center mb-1"><span class="d-inline-block bg-danger-light bullet-item me-2"></span>
                      <p class="mb-0 fw-semibold text-body lh-sm flex-1">QA &amp; Testing</p>
                      <h5 class="mb-0 text-body">56</h5>
                    </div>
                    <div class="d-flex align-items-center mb-1"><span class="d-inline-block bg-success-light bullet-item me-2"></span>
                      <p class="mb-0 fw-semibold text-body lh-sm flex-1">Customer queries</p>
                      <h5 class="mb-0 text-body">36</h5>
                    </div>
                    <div class="d-flex align-items-center"><span class="d-inline-block bg-primary bullet-item me-2"></span>
                      <p class="mb-0 fw-semibold text-body lh-sm flex-1">R &amp; D</p>
                      <h5 class="mb-0 text-body">24</h5>
                    </div><button class="btn btn-outline-primary mt-5">See Details<span class="fas fa-angle-right ms-2 fs-10 text-center"></span></button>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="position-relative mb-sm-4 mb-xl-0">
                      <div class="echart-issue-chart" style="min-height:390px;width:100%"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-xl-5 col-xxl-6">
                <h3>Project: eleven Progress</h3>
                <p class="text-body-tertiary mb-0 mb-xl-3">Deadline &amp; progress</p>
                <div class="echart-zero-burnout-chart" style="min-height:320px;width:100%"></div>
              </div>
            </div>
          </div>
          <div class="mx-lg-n4">
            <div class="row g-3 pt-3">
              <div class="col-xl-5">
                <div class="card h-100">
                  <div class="card-body">
                    <h3>Lead Conversion</h3>
                    <p class="text-body-tertiary mb-0">Stages of deals &amp; conversion</p>
                    <div class="echart-lead-conversion" style="min-height: 250px;"></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-7">
                <div class="card h-100">
                  <div class="card-body">
                    <h3>Revenue Target</h3>
                    <p class="text-body-tertiary">Country-wise target fulfilment</p>
                    <div class="echart-revenue-target-conversion" style="min-height: 230px;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis pt-6 pb-3 mt-3">
            <div class="row gx-6">
              <div class="col-12 col-md-6 col-lg-12 col-xl-6 mb-5 mb-md-3 mb-lg-5 mb-xl-2 mb-xxl-3">
                <div class="scrollbar">
                  <h3>Email Campaign Reports</h3>
                  <p class="text-body-tertiary">Paid and Verified for each piece of content</p>
                  <div class="echart-email-campaign-report echart-contacts-width"></div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-12 col-xl-6 mb-1 mb-sm-0">
                <div class="row align-itms-center mb-5 mb-sm-2 mb-md-4">
                  <div class="col-sm-8 col-md-12 col-lg-8 col-xl-12 col-xxl-8 mb-xl-2 mb-xxl-0">
                    <h3> Marketing Campaign Report</h3>
                    <p class="text-body-tertiary mb-lg-0">According to the sales data.</p>
                  </div>
                  <div class="col-sm-4 col-md-12 col-lg-4 col-xl-12 col-xxl-4"><select class="form-select form-select">
                      <option>Ally Aagaard</option>
                      <option>Alec Haag</option>
                      <option>Aagaard</option>
                    </select></div>
                </div>
                <div class="row g-3 align-items-center">
                  <div class="col-sm-8 col-md-12 col-lg-8 col-xl-12 col-xxl-8">
                    <div class="echart-social-marketing-radar" style="min-height:320px; width:100%"></div>
                  </div>
                  <div class="col-sm-4 col-md-12 col-lg-4 col-xl-12 col-xxl-4 d-flex justify-content-end-xxl mt-0">
                    <div class="d-flex flex-1 justify-content-center d-sm-block d-md-flex d-lg-block d-xl-flex d-xxl-block">
                      <div class="mb-4 me-6 me-sm-0 me-md-6 me-lg-0 me-xl-6 me-xxl-0">
                        <div class="d-flex align-items-center mb-2">
                          <h4 class="mb-0">15,000</h4><span class="badge badge-phoenix badge-phoenix-primary ms-2">+30.63%</span>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="fa-solid fa-circle text-warning-light me-2"></div>
                          <h6 class="mb-0">Online Campaign</h6>
                        </div>
                      </div>
                      <div>
                        <div class="d-flex align-items-center mb-2">
                          <h4 class="mb-0">5,000</h4><span class="badge badge-phoenix badge-phoenix-danger ms-2">+13.52%</span>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="fa-solid fa-circle text-primary-light me-2"></div>
                          <h6 class="mb-0">Offline Campaign</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-6 mt-0">
            <div class="col-12 col-md-6">
              <div class="row justify-content-between mb-4">
                <div class="col-12">
                  <h3>Sales Trends</h3>
                  <p class="text-body-tertiary">Updated inventory &amp; the sales report.</p>
                </div>
                <div class="col-12 d-flex">
                  <div class="d-flex">
                    <div class="fa-solid fa-circle text-info-light me-2"></div>
                    <h6 class="mb-0 me-3 lh-base">Profit</h6>
                  </div>
                  <div class="d-flex">
                    <div class="fa-solid fa-circle text-primary-lighter me-2"></div>
                    <h6 class="mb-0 lh-base">Revenue</h6>
                  </div>
                </div>
              </div>
              <div class="echart-sales-trends" style="height:270px; width:100%"></div>
            </div>
            <div class="col-12 col-md-6">
              <div class="row justify-content-between mb-4">
                <div class="col-auto">
                  <h3>Call Campaign Reports</h3>
                  <p class="text-body-tertiary">All call campaigns succeeded.</p>
                </div>
                <div class="col-12 d-flex">
                  <div class="d-flex">
                    <div class="fa-solid fa-circle text-primary me-2"></div>
                    <h6 class="mb-0 me-3 lh-base">Campaign</h6>
                  </div>
                </div>
              </div>
              <div class="echart-call-campaign" style="height:290px; width:100%"></div>
            </div>
          </div>
          <div class="d-flex mb-5 pt-7" id="scrollspyTables"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fa-inverse fa-stack-1x text-primary-subtle fas fa-list" data-fa-transform="shrink-2"></i></span>
            <div class="col">
              <h3 class="mb-0 text-primary position-relative fw-bold"><span class="bg-body pe-2">Tables, Files, and Lists</span><span class="border border-primary position-absolute top-50 translate-middle-y w-100 start-0 z-n1"></span></h3>
              <p class="mb-0">Phoenix's styled components are dedicatedly made for displaying your contents and lists.</p>
            </div>
          </div>
          <h3 class="mb-3">Purchasers and sellers</h3>
          <div class="border-top border-translucent">
            <div id="purchasersSellersTable" data-list='{"valueNames":["deals_name","deal_owner","account_name","stage","amount"],"page":10,"pagination":true}'>
              <div class="table-responsive scrollbar mx-n1 px-1">
                <table class="table table-sm fs-9 leads-table">
                  <thead>
                    <tr>
                      <th class="white-space-nowrap fs-9 align-middle ps-0" style="max-width:20px; width:18px;">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select='{"body":"purchasers-sellers-body"}'></div>
                      </th>
                      <th class="sort align-middle ps-0 pe-5 text-uppercase text-nowrap" scope="col" data-sort="deals_name" style="min-width:120px;">Deal name</th>
                      <th class="sort align-middle ps-4 pe-5 text-uppercase text-nowrap" scope="col" data-sort="deal_owner" style="min-width:50px;">Deal owner</th>
                      <th class="sort align-middle ps-4 pe-5 text-uppercase text-nowrap" scope="col" data-sort="account_name" style="min-width:250px;">Account name</th>
                      <th class="sort align-middle pe-5 text-uppercase text-nowrap" scope="col" data-sort="stage" style="min-width:160px;">Stage</th>
                      <th class="sort align-middle ps-4 pe-5 text-uppercase text-nowrap" scope="col" data-sort="amount" style="min-width:50px;">Amount</th>
                      <th class="sort text-end align-middle pe-0 ps-4" scope="col"></th>
                    </tr>
                  </thead>
                  <tbody class="list" id="purchasers-sellers-body">
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle py-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"dealsName":"Jo_Td01","dealOwner":{"avatar":"team/avatar.webp","name":"Ally Aagaard","placeholder":true},"accountName":"Themewagon","stage":{"label":"Analysis","color":"#3874FF","data":20},"amount":{"totalAmount":"$140","icon":"trending-down","color":"text-danger"}}'></div>
                      </td>
                      <td class="deals_name align-middle white-space-nowrap fw-semibold text-body-highlight ps-0 py-0"><a class="fw-bold text-primary" href="#!">Jo_Td01</a></td>
                      <td class="deal_owner align-middle white-space-nowrap fw-semibold text-body-emphasis ps-4 py-0">
                        <div class="d-flex align-items-center position-relative">
                          <div class="avatar avatar-m me-3"><img class="rounded-circle avatar-placeholder" src="{{ asset('assets/img/team/avatar.webp') }}" alt=""></div><a class="text-body-highlight fw-bold stretched-link" href="#!">Ally Aagaard</a>
                        </div>
                      </td>
                      <td class="account_name align-middle white-space-nowrap ps-4 fw-semibold text-body py-0">Themewagon</td>
                      <td class="stage align-middle white-space-nowrap fw-bold text-body py-2">
                        <div class="d-flex align-items-center gap-3">
                          <div style="--phoenix-circle-progress-bar:20"><svg class="circle-progress-svg" width="38" height="38" viewbox="0 0 125 125">
                              <circle class="progress-bar-rail" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke-width="15"></circle>
                              <circle class="progress-bar-top" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke="#3874FF" stroke-width="12"></circle>
                            </svg></div>
                          <h6 class="mb-0 text-body">Analysis</h6>
                        </div>
                      </td>
                      <td class="amount align-middle white-space-nowrap fw-bold ps-4 text-body py-0">$140<span class="ms-2 text-danger" data-feather="trending-down" style="min-height:8px; width:14px;"></span></td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle py-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"dealsName":"Printing Dimensions","dealOwner":{"avatar":"/team/35.webp","name":"Alex Abadi"},"accountName":"Black Box","stage":{"label":"Statement","color":"#0097EB","data":40},"amount":{"totalAmount":"$214","icon":"trending-up","color":"text-success"}}'></div>
                      </td>
                      <td class="deals_name align-middle white-space-nowrap fw-semibold text-body-highlight ps-0 py-0"><a class="fw-bold text-primary" href="#!">Printing Dimensions</a></td>
                      <td class="deal_owner align-middle white-space-nowrap fw-semibold text-body-emphasis ps-4 py-0">
                        <div class="d-flex align-items-center position-relative">
                          <div class="avatar avatar-m me-3"><img class="rounded-circle" src="{{ asset('assets/img/team/35.webp') }}" alt=""></div><a class="text-body-highlight fw-bold stretched-link" href="#!">Alex Abadi</a>
                        </div>
                      </td>
                      <td class="account_name align-middle white-space-nowrap ps-4 fw-semibold text-body py-0">Black Box</td>
                      <td class="stage align-middle white-space-nowrap fw-bold text-body py-2">
                        <div class="d-flex align-items-center gap-3">
                          <div style="--phoenix-circle-progress-bar:40"><svg class="circle-progress-svg" width="38" height="38" viewbox="0 0 125 125">
                              <circle class="progress-bar-rail" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke-width="15"></circle>
                              <circle class="progress-bar-top" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke="#0097EB" stroke-width="12"></circle>
                            </svg></div>
                          <h6 class="mb-0 text-body">Statement</h6>
                        </div>
                      </td>
                      <td class="amount align-middle white-space-nowrap fw-bold ps-4 text-body py-0">$214<span class="ms-2 text-success" data-feather="trending-up" style="min-height:8px; width:14px;"></span></td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle py-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"dealsName":"MM_TD_120","dealOwner":{"avatar":"/team/32.webp","name":"Kylia Abbott"},"accountName":"Hunter Leader","stage":{"label":"Action","color":"#E5780B","data":50},"amount":{"totalAmount":"$412","icon":"trending-up","color":"text-success"}}'></div>
                      </td>
                      <td class="deals_name align-middle white-space-nowrap fw-semibold text-body-highlight ps-0 py-0"><a class="fw-bold text-primary" href="#!">MM_TD_120</a></td>
                      <td class="deal_owner align-middle white-space-nowrap fw-semibold text-body-emphasis ps-4 py-0">
                        <div class="d-flex align-items-center position-relative">
                          <div class="avatar avatar-m me-3"><img class="rounded-circle" src="{{ asset('assets/img/team/32.webp') }}" alt=""></div><a class="text-body-highlight fw-bold stretched-link" href="#!">Kylia Abbott</a>
                        </div>
                      </td>
                      <td class="account_name align-middle white-space-nowrap ps-4 fw-semibold text-body py-0">Hunter Leader</td>
                      <td class="stage align-middle white-space-nowrap fw-bold text-body py-2">
                        <div class="d-flex align-items-center gap-3">
                          <div style="--phoenix-circle-progress-bar:50"><svg class="circle-progress-svg" width="38" height="38" viewbox="0 0 125 125">
                              <circle class="progress-bar-rail" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke-width="15"></circle>
                              <circle class="progress-bar-top" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke="#E5780B" stroke-width="12"></circle>
                            </svg></div>
                          <h6 class="mb-0 text-body">Action</h6>
                        </div>
                      </td>
                      <td class="amount align-middle white-space-nowrap fw-bold ps-4 text-body py-0">$412<span class="ms-2 text-success" data-feather="trending-up" style="min-height:8px; width:14px;"></span></td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle py-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"dealsName":"Truhlar And Truhlar Attys","dealOwner":{"avatar":"/team/32.webp","name":"Kylia Abbott"},"accountName":"Eagle Eye","stage":{"label":"Offering","color":"#6E7891","data":60},"amount":{"totalAmount":"$110","icon":"trending-up","color":"text-success"}}'></div>
                      </td>
                      <td class="deals_name align-middle white-space-nowrap fw-semibold text-body-highlight ps-0 py-0"><a class="fw-bold text-primary" href="#!">Truhlar And Truhlar Attys</a></td>
                      <td class="deal_owner align-middle white-space-nowrap fw-semibold text-body-emphasis ps-4 py-0">
                        <div class="d-flex align-items-center position-relative">
                          <div class="avatar avatar-m me-3"><img class="rounded-circle" src="{{ asset('assets/img/team/32.webp') }}" alt=""></div><a class="text-body-highlight fw-bold stretched-link" href="#!">Kylia Abbott</a>
                        </div>
                      </td>
                      <td class="account_name align-middle white-space-nowrap ps-4 fw-semibold text-body py-0">Eagle Eye</td>
                      <td class="stage align-middle white-space-nowrap fw-bold text-body py-2">
                        <div class="d-flex align-items-center gap-3">
                          <div style="--phoenix-circle-progress-bar:60"><svg class="circle-progress-svg" width="38" height="38" viewbox="0 0 125 125">
                              <circle class="progress-bar-rail" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke-width="15"></circle>
                              <circle class="progress-bar-top" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke="#6E7891" stroke-width="12"></circle>
                            </svg></div>
                          <h6 class="mb-0 text-body">Offering</h6>
                        </div>
                      </td>
                      <td class="amount align-middle white-space-nowrap fw-bold ps-4 text-body py-0">$110<span class="ms-2 text-success" data-feather="trending-up" style="min-height:8px; width:14px;"></span></td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle py-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"dealsName":"Morlong Associates","dealOwner":{"avatar":"/team/59.webp","name":"Lyla Nicole"},"accountName":"Black Box","stage":{"label":"Negotiation","color":"#25B003","data":100},"amount":{"totalAmount":"$325","icon":"trending-down","color":"text-danger"}}'></div>
                      </td>
                      <td class="deals_name align-middle white-space-nowrap fw-semibold text-body-highlight ps-0 py-0"><a class="fw-bold text-primary" href="#!">Morlong Associates</a></td>
                      <td class="deal_owner align-middle white-space-nowrap fw-semibold text-body-emphasis ps-4 py-0">
                        <div class="d-flex align-items-center position-relative">
                          <div class="avatar avatar-m me-3"><img class="rounded-circle" src="{{ asset('assets/img/team/59.webp') }}" alt=""></div><a class="text-body-highlight fw-bold stretched-link" href="#!">Lyla Nicole</a>
                        </div>
                      </td>
                      <td class="account_name align-middle white-space-nowrap ps-4 fw-semibold text-body py-0">Black Box</td>
                      <td class="stage align-middle white-space-nowrap fw-bold text-body py-2">
                        <div class="d-flex align-items-center gap-3">
                          <div style="--phoenix-circle-progress-bar:100"><svg class="circle-progress-svg" width="38" height="38" viewbox="0 0 125 125">
                              <circle class="progress-bar-rail" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke-width="15"></circle>
                              <circle class="progress-bar-top" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke="#25B003" stroke-width="12"></circle>
                            </svg></div>
                          <h6 class="mb-0 text-body">Negotiation</h6>
                        </div>
                      </td>
                      <td class="amount align-middle white-space-nowrap fw-bold ps-4 text-body py-0">$325<span class="ms-2 text-danger" data-feather="trending-down" style="min-height:8px; width:14px;"></span></td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle py-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"dealsName":"Product Order","dealOwner":{"avatar":"/team/18.webp","name":"Hunter Leader"},"accountName":"Themewagon","stage":{"label":"Negotiation","color":"#25B003","data":100},"amount":{"totalAmount":"$198","icon":"trending-down","color":"text-warning"}}'></div>
                      </td>
                      <td class="deals_name align-middle white-space-nowrap fw-semibold text-body-highlight ps-0 py-0"><a class="fw-bold text-primary" href="#!">Product Order</a></td>
                      <td class="deal_owner align-middle white-space-nowrap fw-semibold text-body-emphasis ps-4 py-0">
                        <div class="d-flex align-items-center position-relative">
                          <div class="avatar avatar-m me-3"><img class="rounded-circle" src="{{ asset('assets/img/team/18.webp') }}" alt=""></div><a class="text-body-highlight fw-bold stretched-link" href="#!">Hunter Leader</a>
                        </div>
                      </td>
                      <td class="account_name align-middle white-space-nowrap ps-4 fw-semibold text-body py-0">Themewagon</td>
                      <td class="stage align-middle white-space-nowrap fw-bold text-body py-2">
                        <div class="d-flex align-items-center gap-3">
                          <div style="--phoenix-circle-progress-bar:100"><svg class="circle-progress-svg" width="38" height="38" viewbox="0 0 125 125">
                              <circle class="progress-bar-rail" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke-width="15"></circle>
                              <circle class="progress-bar-top" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke="#25B003" stroke-width="12"></circle>
                            </svg></div>
                          <h6 class="mb-0 text-body">Negotiation</h6>
                        </div>
                      </td>
                      <td class="amount align-middle white-space-nowrap fw-bold ps-4 text-body py-0">$198<span class="ms-2 text-warning" data-feather="trending-down" style="min-height:8px; width:14px;"></span></td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle py-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"dealsName":"Feltz Printing Service","dealOwner":{"avatar":"/team/avatar.webp","name":"Ally Aagaard","placeholder":true},"accountName":"Themewagon","stage":{"label":"Offering","color":"#6E7891","data":80},"amount":{"totalAmount":"$142","icon":"trending-up","color":"text-success"}}'></div>
                      </td>
                      <td class="deals_name align-middle white-space-nowrap fw-semibold text-body-highlight ps-0 py-0"><a class="fw-bold text-primary" href="#!">Feltz Printing Service</a></td>
                      <td class="deal_owner align-middle white-space-nowrap fw-semibold text-body-emphasis ps-4 py-0">
                        <div class="d-flex align-items-center position-relative">
                          <div class="avatar avatar-m me-3"><img class="rounded-circle avatar-placeholder" src="{{ asset('assets/img/team/avatar.webp') }}" alt=""></div><a class="text-body-highlight fw-bold stretched-link" href="#!">Ally Aagaard</a>
                        </div>
                      </td>
                      <td class="account_name align-middle white-space-nowrap ps-4 fw-semibold text-body py-0">Themewagon</td>
                      <td class="stage align-middle white-space-nowrap fw-bold text-body py-2">
                        <div class="d-flex align-items-center gap-3">
                          <div style="--phoenix-circle-progress-bar:80"><svg class="circle-progress-svg" width="38" height="38" viewbox="0 0 125 125">
                              <circle class="progress-bar-rail" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke-width="15"></circle>
                              <circle class="progress-bar-top" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke="#6E7891" stroke-width="12"></circle>
                            </svg></div>
                          <h6 class="mb-0 text-body">Offering</h6>
                        </div>
                      </td>
                      <td class="amount align-middle white-space-nowrap fw-bold ps-4 text-body py-0">$142<span class="ms-2 text-success" data-feather="trending-up" style="min-height:8px; width:14px;"></span></td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle py-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"dealsName":"Flat Plate SP","dealOwner":{"avatar":"/team/avatar.webp","name":"Ally Aagaard","placeholder":true},"accountName":"Eagle Eye","stage":{"label":"Offering","color":"#6E7891","data":80},"amount":{"totalAmount":"$457","icon":"trending-up","color":"text-success"}}'></div>
                      </td>
                      <td class="deals_name align-middle white-space-nowrap fw-semibold text-body-highlight ps-0 py-0"><a class="fw-bold text-primary" href="#!">Flat Plate SP</a></td>
                      <td class="deal_owner align-middle white-space-nowrap fw-semibold text-body-emphasis ps-4 py-0">
                        <div class="d-flex align-items-center position-relative">
                          <div class="avatar avatar-m me-3"><img class="rounded-circle avatar-placeholder" src="{{ asset('assets/img/team/avatar.webp') }}" alt=""></div><a class="text-body-highlight fw-bold stretched-link" href="#!">Ally Aagaard</a>
                        </div>
                      </td>
                      <td class="account_name align-middle white-space-nowrap ps-4 fw-semibold text-body py-0">Eagle Eye</td>
                      <td class="stage align-middle white-space-nowrap fw-bold text-body py-2">
                        <div class="d-flex align-items-center gap-3">
                          <div style="--phoenix-circle-progress-bar:80"><svg class="circle-progress-svg" width="38" height="38" viewbox="0 0 125 125">
                              <circle class="progress-bar-rail" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke-width="15"></circle>
                              <circle class="progress-bar-top" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke="#6E7891" stroke-width="12"></circle>
                            </svg></div>
                          <h6 class="mb-0 text-body">Offering</h6>
                        </div>
                      </td>
                      <td class="amount align-middle white-space-nowrap fw-bold ps-4 text-body py-0">$457<span class="ms-2 text-success" data-feather="trending-up" style="min-height:8px; width:14px;"></span></td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle py-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"dealsName":"Evacuated Tube","dealOwner":{"avatar":"/team/avatar.webp","name":"Ally Aagaard"},"accountName":"Hunter Leader","stage":{"label":"Action","color":"#E5780B","data":100},"amount":{"totalAmount":"$120","icon":"trending-down","color":"text-warning"}}'></div>
                      </td>
                      <td class="deals_name align-middle white-space-nowrap fw-semibold text-body-highlight ps-0 py-0"><a class="fw-bold text-primary" href="#!">Evacuated Tube</a></td>
                      <td class="deal_owner align-middle white-space-nowrap fw-semibold text-body-emphasis ps-4 py-0">
                        <div class="d-flex align-items-center position-relative">
                          <div class="avatar avatar-m me-3"><img class="rounded-circle" src="{{ asset('assets/img/team/avatar.webp') }}" alt=""></div><a class="text-body-highlight fw-bold stretched-link" href="#!">Ally Aagaard</a>
                        </div>
                      </td>
                      <td class="account_name align-middle white-space-nowrap ps-4 fw-semibold text-body py-0">Hunter Leader</td>
                      <td class="stage align-middle white-space-nowrap fw-bold text-body py-2">
                        <div class="d-flex align-items-center gap-3">
                          <div style="--phoenix-circle-progress-bar:100"><svg class="circle-progress-svg" width="38" height="38" viewbox="0 0 125 125">
                              <circle class="progress-bar-rail" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke-width="15"></circle>
                              <circle class="progress-bar-top" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke="#E5780B" stroke-width="12"></circle>
                            </svg></div>
                          <h6 class="mb-0 text-body">Action</h6>
                        </div>
                      </td>
                      <td class="amount align-middle white-space-nowrap fw-bold ps-4 text-body py-0">$120<span class="ms-2 text-warning" data-feather="trending-down" style="min-height:8px; width:14px;"></span></td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle py-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"dealsName":"Product Delivery","dealOwner":{"avatar":"/team/35.webp","name":"Alex Abadi"},"accountName":"Themewagon","stage":{"label":"Analysis","color":"#3874FF","data":100},"amount":{"totalAmount":"$150","icon":"trending-down","color":"text-danger"}}'></div>
                      </td>
                      <td class="deals_name align-middle white-space-nowrap fw-semibold text-body-highlight ps-0 py-0"><a class="fw-bold text-primary" href="#!">Product Delivery</a></td>
                      <td class="deal_owner align-middle white-space-nowrap fw-semibold text-body-emphasis ps-4 py-0">
                        <div class="d-flex align-items-center position-relative">
                          <div class="avatar avatar-m me-3"><img class="rounded-circle" src="{{ asset('assets/img/team/35.webp') }}" alt=""></div><a class="text-body-highlight fw-bold stretched-link" href="#!">Alex Abadi</a>
                        </div>
                      </td>
                      <td class="account_name align-middle white-space-nowrap ps-4 fw-semibold text-body py-0">Themewagon</td>
                      <td class="stage align-middle white-space-nowrap fw-bold text-body py-2">
                        <div class="d-flex align-items-center gap-3">
                          <div style="--phoenix-circle-progress-bar:100"><svg class="circle-progress-svg" width="38" height="38" viewbox="0 0 125 125">
                              <circle class="progress-bar-rail" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke-width="15"></circle>
                              <circle class="progress-bar-top" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke="#3874FF" stroke-width="12"></circle>
                            </svg></div>
                          <h6 class="mb-0 text-body">Analysis</h6>
                        </div>
                      </td>
                      <td class="amount align-middle white-space-nowrap fw-bold ps-4 text-body py-0">$150<span class="ms-2 text-danger" data-feather="trending-down" style="min-height:8px; width:14px;"></span></td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle py-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"dealsName":"Product Order","dealOwner":{"avatar":"/team/18.webp","name":"Hunter Leader"},"accountName":"Themewagon","stage":{"label":"Negotiation","color":"#25B003","data":100},"amount":{"totalAmount":"$140","icon":"trending-down","color":"text-warning"}}'></div>
                      </td>
                      <td class="deals_name align-middle white-space-nowrap fw-semibold text-body-highlight ps-0 py-0"><a class="fw-bold text-primary" href="#!">Product Order</a></td>
                      <td class="deal_owner align-middle white-space-nowrap fw-semibold text-body-emphasis ps-4 py-0">
                        <div class="d-flex align-items-center position-relative">
                          <div class="avatar avatar-m me-3"><img class="rounded-circle" src="{{ asset('assets/img/team/18.webp') }}" alt=""></div><a class="text-body-highlight fw-bold stretched-link" href="#!">Hunter Leader</a>
                        </div>
                      </td>
                      <td class="account_name align-middle white-space-nowrap ps-4 fw-semibold text-body py-0">Themewagon</td>
                      <td class="stage align-middle white-space-nowrap fw-bold text-body py-2">
                        <div class="d-flex align-items-center gap-3">
                          <div style="--phoenix-circle-progress-bar:100"><svg class="circle-progress-svg" width="38" height="38" viewbox="0 0 125 125">
                              <circle class="progress-bar-rail" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke-width="15"></circle>
                              <circle class="progress-bar-top" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke="#25B003" stroke-width="12"></circle>
                            </svg></div>
                          <h6 class="mb-0 text-body">Negotiation</h6>
                        </div>
                      </td>
                      <td class="amount align-middle white-space-nowrap fw-bold ps-4 text-body py-0">$140<span class="ms-2 text-warning" data-feather="trending-down" style="min-height:8px; width:14px;"></span></td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle py-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"dealsName":"Feltz Printing Service","dealOwner":{"avatar":"/team/avatar.webp","name":"Ally Aagaard","placeholder":true},"accountName":"Themewagon","stage":{"label":"Offering","color":"#6E7891","data":80},"amount":{"totalAmount":"$122","icon":"trending-up","color":"text-success"}}'></div>
                      </td>
                      <td class="deals_name align-middle white-space-nowrap fw-semibold text-body-highlight ps-0 py-0"><a class="fw-bold text-primary" href="#!">Feltz Printing Service</a></td>
                      <td class="deal_owner align-middle white-space-nowrap fw-semibold text-body-emphasis ps-4 py-0">
                        <div class="d-flex align-items-center position-relative">
                          <div class="avatar avatar-m me-3"><img class="rounded-circle avatar-placeholder" src="{{ asset('assets/img/team/avatar.webp') }}" alt=""></div><a class="text-body-highlight fw-bold stretched-link" href="#!">Ally Aagaard</a>
                        </div>
                      </td>
                      <td class="account_name align-middle white-space-nowrap ps-4 fw-semibold text-body py-0">Themewagon</td>
                      <td class="stage align-middle white-space-nowrap fw-bold text-body py-2">
                        <div class="d-flex align-items-center gap-3">
                          <div style="--phoenix-circle-progress-bar:80"><svg class="circle-progress-svg" width="38" height="38" viewbox="0 0 125 125">
                              <circle class="progress-bar-rail" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke-width="15"></circle>
                              <circle class="progress-bar-top" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke="#6E7891" stroke-width="12"></circle>
                            </svg></div>
                          <h6 class="mb-0 text-body">Offering</h6>
                        </div>
                      </td>
                      <td class="amount align-middle white-space-nowrap fw-bold ps-4 text-body py-0">$122<span class="ms-2 text-success" data-feather="trending-up" style="min-height:8px; width:14px;"></span></td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle py-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"dealsName":"Flat Plate SP","dealOwner":{"avatar":"/team/avatar.webp","name":"Ally Aagaard","placeholder":true},"accountName":"Eagle Eye","stage":{"label":"Offering","color":"#6E7891","data":80},"amount":{"totalAmount":"$321","icon":"trending-up","color":"text-success"}}'></div>
                      </td>
                      <td class="deals_name align-middle white-space-nowrap fw-semibold text-body-highlight ps-0 py-0"><a class="fw-bold text-primary" href="#!">Flat Plate SP</a></td>
                      <td class="deal_owner align-middle white-space-nowrap fw-semibold text-body-emphasis ps-4 py-0">
                        <div class="d-flex align-items-center position-relative">
                          <div class="avatar avatar-m me-3"><img class="rounded-circle avatar-placeholder" src="{{ asset('assets/img/team/avatar.webp') }}" alt=""></div><a class="text-body-highlight fw-bold stretched-link" href="#!">Ally Aagaard</a>
                        </div>
                      </td>
                      <td class="account_name align-middle white-space-nowrap ps-4 fw-semibold text-body py-0">Eagle Eye</td>
                      <td class="stage align-middle white-space-nowrap fw-bold text-body py-2">
                        <div class="d-flex align-items-center gap-3">
                          <div style="--phoenix-circle-progress-bar:80"><svg class="circle-progress-svg" width="38" height="38" viewbox="0 0 125 125">
                              <circle class="progress-bar-rail" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke-width="15"></circle>
                              <circle class="progress-bar-top" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke="#6E7891" stroke-width="12"></circle>
                            </svg></div>
                          <h6 class="mb-0 text-body">Offering</h6>
                        </div>
                      </td>
                      <td class="amount align-middle white-space-nowrap fw-bold ps-4 text-body py-0">$321<span class="ms-2 text-success" data-feather="trending-up" style="min-height:8px; width:14px;"></span></td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle py-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"dealsName":"Evacuated Tube","dealOwner":{"avatar":"/team/avatar.webp","name":"Ally Aagaard"},"accountName":"Hunter Leader","stage":{"label":"Action","color":"#E5780B","data":100},"amount":{"totalAmount":"$104","icon":"trending-down","color":"text-warning"}}'></div>
                      </td>
                      <td class="deals_name align-middle white-space-nowrap fw-semibold text-body-highlight ps-0 py-0"><a class="fw-bold text-primary" href="#!">Evacuated Tube</a></td>
                      <td class="deal_owner align-middle white-space-nowrap fw-semibold text-body-emphasis ps-4 py-0">
                        <div class="d-flex align-items-center position-relative">
                          <div class="avatar avatar-m me-3"><img class="rounded-circle" src="{{ asset('assets/img/team/avatar.webp') }}" alt=""></div><a class="text-body-highlight fw-bold stretched-link" href="#!">Ally Aagaard</a>
                        </div>
                      </td>
                      <td class="account_name align-middle white-space-nowrap ps-4 fw-semibold text-body py-0">Hunter Leader</td>
                      <td class="stage align-middle white-space-nowrap fw-bold text-body py-2">
                        <div class="d-flex align-items-center gap-3">
                          <div style="--phoenix-circle-progress-bar:100"><svg class="circle-progress-svg" width="38" height="38" viewbox="0 0 125 125">
                              <circle class="progress-bar-rail" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke-width="15"></circle>
                              <circle class="progress-bar-top" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke="#E5780B" stroke-width="12"></circle>
                            </svg></div>
                          <h6 class="mb-0 text-body">Action</h6>
                        </div>
                      </td>
                      <td class="amount align-middle white-space-nowrap fw-bold ps-4 text-body py-0">$104<span class="ms-2 text-warning" data-feather="trending-down" style="min-height:8px; width:14px;"></span></td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle py-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"dealsName":"Product Delivery","dealOwner":{"avatar":"/team/35.webp","name":"Alex Abadi"},"accountName":"Themewagon","stage":{"label":"Analysis","color":"#3874FF","data":100},"amount":{"totalAmount":"$124","icon":"trending-down","color":"text-danger"}}'></div>
                      </td>
                      <td class="deals_name align-middle white-space-nowrap fw-semibold text-body-highlight ps-0 py-0"><a class="fw-bold text-primary" href="#!">Product Delivery</a></td>
                      <td class="deal_owner align-middle white-space-nowrap fw-semibold text-body-emphasis ps-4 py-0">
                        <div class="d-flex align-items-center position-relative">
                          <div class="avatar avatar-m me-3"><img class="rounded-circle" src="{{ asset('assets/img/team/35.webp') }}" alt=""></div><a class="text-body-highlight fw-bold stretched-link" href="#!">Alex Abadi</a>
                        </div>
                      </td>
                      <td class="account_name align-middle white-space-nowrap ps-4 fw-semibold text-body py-0">Themewagon</td>
                      <td class="stage align-middle white-space-nowrap fw-bold text-body py-2">
                        <div class="d-flex align-items-center gap-3">
                          <div style="--phoenix-circle-progress-bar:100"><svg class="circle-progress-svg" width="38" height="38" viewbox="0 0 125 125">
                              <circle class="progress-bar-rail" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke-width="15"></circle>
                              <circle class="progress-bar-top" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke="#3874FF" stroke-width="12"></circle>
                            </svg></div>
                          <h6 class="mb-0 text-body">Analysis</h6>
                        </div>
                      </td>
                      <td class="amount align-middle white-space-nowrap fw-bold ps-4 text-body py-0">$124<span class="ms-2 text-danger" data-feather="trending-down" style="min-height:8px; width:14px;"></span></td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="row align-items-center justify-content-between pe-0 fs-9">
                <div class="col-auto d-flex">
                  <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </div>
                <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                  <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                </div>
              </div>
            </div>
          </div>
          <div class="row gx-6 mt-n3 pb-5">
            <div class="col-xl-6">
              <div data-list='{"valueNames":["country","users","transactions","revenue","conv-rate"],"page":5}'>
                <div class="mb-5 mt-7">
                  <h3>Top regions by revenue</h3>
                  <p class="text-body-tertiary">Where you generated most of the revenue</p>
                </div>
                <div class="table-responsive scrollbar">
                  <table class="table fs-10 mb-0">
                    <thead>
                      <tr>
                        <th class="sort border-top border-translucent ps-0 align-middle" scope="col" data-sort="country" style="width:32%">COUNTRY</th>
                        <th class="sort border-top border-translucent align-middle" scope="col" data-sort="users" style="width:17%">USERS</th>
                        <th class="sort border-top border-translucent text-end align-middle" scope="col" data-sort="transactions" style="width:16%">TRANSACTIONS</th>
                        <th class="sort border-top border-translucent text-end align-middle" scope="col" data-sort="revenue" style="width:20%">REVENUE</th>
                        <th class="sort border-top border-translucent text-end pe-0 align-middle" scope="col" data-sort="conv-rate" style="width:17%">CONV. RATE</th>
                      </tr>
                    </thead>
                    <tr>
                      <td></td>
                      <td class="align-middle py-4">
                        <h4 class="mb-0 fw-normal">377,620</h4>
                      </td>
                      <td class="align-middle text-end py-4">
                        <h4 class="mb-0 fw-normal">236</h4>
                      </td>
                      <td class="align-middle text-end py-4">
                        <h4 class="mb-0 fw-normal">$15,758</h4>
                      </td>
                      <td class="align-middle text-end py-4 pe-0">
                        <h4 class="mb-0 fw-normal">10.32%</h4>
                      </td>
                    </tr>
                    <tbody class="list" id="table-regions-by-revenue">
                      <tr>
                        <td class="white-space-nowrap ps-0 country" style="width:32%">
                          <div class="d-flex align-items-center">
                            <h6 class="mb-0 me-3">1. </h6><a href="#!">
                              <div class="d-flex align-items-center"><img src="{{ asset('assets/img/country/india.png') }}" alt="" width="24">
                                <p class="mb-0 ps-3 text-primary fw-bold fs-9">India</p>
                              </div>
                            </a>
                          </div>
                        </td>
                        <td class="align-middle users" style="width:17%">
                          <h6 class="mb-0">92896<span class="text-body-tertiary fw-semibold ms-2">(41.6%)</span></h6>
                        </td>
                        <td class="align-middle text-end transactions" style="width:17%">
                          <h6 class="mb-0">67<span class="text-body-tertiary fw-semibold ms-2">(34.3%)</span></h6>
                        </td>
                        <td class="align-middle text-end revenue" style="width:17%">
                          <h6 class="mb-0">$7560<span class="text-body-tertiary fw-semibold ms-2">(36.9%)</span></h6>
                        </td>
                        <td class="align-middle text-end pe-0 conv-rate" style="width:17%">
                          <h6>14.01%</h6>
                        </td>
                      </tr>
                      <tr>
                        <td class="white-space-nowrap ps-0 country" style="width:32%">
                          <div class="d-flex align-items-center">
                            <h6 class="mb-0 me-3">2. </h6><a href="#!">
                              <div class="d-flex align-items-center"><img src="{{ asset('assets/img/country/china.png') }}" alt="" width="24">
                                <p class="mb-0 ps-3 text-primary fw-bold fs-9">China</p>
                              </div>
                            </a>
                          </div>
                        </td>
                        <td class="align-middle users" style="width:17%">
                          <h6 class="mb-0">50496<span class="text-body-tertiary fw-semibold ms-2">(32.8%)</span></h6>
                        </td>
                        <td class="align-middle text-end transactions" style="width:17%">
                          <h6 class="mb-0">54<span class="text-body-tertiary fw-semibold ms-2">(23.8%)</span></h6>
                        </td>
                        <td class="align-middle text-end revenue" style="width:17%">
                          <h6 class="mb-0">$6532<span class="text-body-tertiary fw-semibold ms-2">(26.5%)</span></h6>
                        </td>
                        <td class="align-middle text-end pe-0 conv-rate" style="width:17%">
                          <h6>23.56%</h6>
                        </td>
                      </tr>
                      <tr>
                        <td class="white-space-nowrap ps-0 country" style="width:32%">
                          <div class="d-flex align-items-center">
                            <h6 class="mb-0 me-3">3. </h6><a href="#!">
                              <div class="d-flex align-items-center"><img src="{{ asset('assets/img/country/usa.png') }}" alt="" width="24">
                                <p class="mb-0 ps-3 text-primary fw-bold fs-9">USA</p>
                              </div>
                            </a>
                          </div>
                        </td>
                        <td class="align-middle users" style="width:17%">
                          <h6 class="mb-0">45679<span class="text-body-tertiary fw-semibold ms-2">(24.3%)</span></h6>
                        </td>
                        <td class="align-middle text-end transactions" style="width:17%">
                          <h6 class="mb-0">35<span class="text-body-tertiary fw-semibold ms-2">(19.7%)</span></h6>
                        </td>
                        <td class="align-middle text-end revenue" style="width:17%">
                          <h6 class="mb-0">$5432<span class="text-body-tertiary fw-semibold ms-2">(16.9%)</span></h6>
                        </td>
                        <td class="align-middle text-end pe-0 conv-rate" style="width:17%">
                          <h6>10.23%</h6>
                        </td>
                      </tr>
                      <tr>
                        <td class="white-space-nowrap ps-0 country" style="width:32%">
                          <div class="d-flex align-items-center">
                            <h6 class="mb-0 me-3">4. </h6><a href="#!">
                              <div class="d-flex align-items-center"><img src="{{ asset('assets/img/country/south-korea.png') }}" alt="" width="24">
                                <p class="mb-0 ps-3 text-primary fw-bold fs-9">South Korea</p>
                              </div>
                            </a>
                          </div>
                        </td>
                        <td class="align-middle users" style="width:17%">
                          <h6 class="mb-0">36453<span class="text-body-tertiary fw-semibold ms-2">(19.7%)</span></h6>
                        </td>
                        <td class="align-middle text-end transactions" style="width:17%">
                          <h6 class="mb-0">22<span class="text-body-tertiary fw-semibold ms-2">(9.54%)</span></h6>
                        </td>
                        <td class="align-middle text-end revenue" style="width:17%">
                          <h6 class="mb-0">$4673<span class="text-body-tertiary fw-semibold ms-2">(11.6%)</span></h6>
                        </td>
                        <td class="align-middle text-end pe-0 conv-rate" style="width:17%">
                          <h6>8.85%</h6>
                        </td>
                      </tr>
                      <tr>
                        <td class="white-space-nowrap ps-0 country" style="width:32%">
                          <div class="d-flex align-items-center">
                            <h6 class="mb-0 me-3">5. </h6><a href="#!">
                              <div class="d-flex align-items-center"><img src="{{ asset('assets/img/country/vietnam.png') }}" alt="" width="24">
                                <p class="mb-0 ps-3 text-primary fw-bold fs-9">Vietnam</p>
                              </div>
                            </a>
                          </div>
                        </td>
                        <td class="align-middle users" style="width:17%">
                          <h6 class="mb-0">15007<span class="text-body-tertiary fw-semibold ms-2">(11.9%)</span></h6>
                        </td>
                        <td class="align-middle text-end transactions" style="width:17%">
                          <h6 class="mb-0">17<span class="text-body-tertiary fw-semibold ms-2">(6.91%)</span></h6>
                        </td>
                        <td class="align-middle text-end revenue" style="width:17%">
                          <h6 class="mb-0">$2456<span class="text-body-tertiary fw-semibold ms-2">(10.2%)</span></h6>
                        </td>
                        <td class="align-middle text-end pe-0 conv-rate" style="width:17%">
                          <h6>6.01%</h6>
                        </td>
                      </tr>
                      <tr>
                        <td class="white-space-nowrap ps-0 country" style="width:32%">
                          <div class="d-flex align-items-center">
                            <h6 class="mb-0 me-3">6. </h6><a href="#!">
                              <div class="d-flex align-items-center"><img src="{{ asset('assets/img/country/russia.png') }}" alt="" width="24">
                                <p class="mb-0 ps-3 text-primary fw-bold fs-9">Russia</p>
                              </div>
                            </a>
                          </div>
                        </td>
                        <td class="align-middle users" style="width:17%">
                          <h6 class="mb-0">54215<span class="text-body-tertiary fw-semibold ms-2">(32.9%)</span></h6>
                        </td>
                        <td class="align-middle text-end transactions" style="width:17%">
                          <h6 class="mb-0">38<span class="text-body-tertiary fw-semibold ms-2">(7.91%)</span></h6>
                        </td>
                        <td class="align-middle text-end revenue" style="width:17%">
                          <h6 class="mb-0">$3254<span class="text-body-tertiary fw-semibold ms-2">(12.4%)</span></h6>
                        </td>
                        <td class="align-middle text-end pe-0 conv-rate" style="width:17%">
                          <h6>6.21%</h6>
                        </td>
                      </tr>
                      <tr>
                        <td class="white-space-nowrap ps-0 country" style="width:32%">
                          <div class="d-flex align-items-center">
                            <h6 class="mb-0 me-3">7. </h6><a href="#!">
                              <div class="d-flex align-items-center"><img src="{{ asset('assets/img/country/australia.png') }}" alt="" width="24">
                                <p class="mb-0 ps-3 text-primary fw-bold fs-9">Australia</p>
                              </div>
                            </a>
                          </div>
                        </td>
                        <td class="align-middle users" style="width:17%">
                          <h6 class="mb-0">54789<span class="text-body-tertiary fw-semibold ms-2">(12.7%)</span></h6>
                        </td>
                        <td class="align-middle text-end transactions" style="width:17%">
                          <h6 class="mb-0">32<span class="text-body-tertiary fw-semibold ms-2">(14.0%)</span></h6>
                        </td>
                        <td class="align-middle text-end revenue" style="width:17%">
                          <h6 class="mb-0">$3215<span class="text-body-tertiary fw-semibold ms-2">(5.72%)</span></h6>
                        </td>
                        <td class="align-middle text-end pe-0 conv-rate" style="width:17%">
                          <h6>12.02%</h6>
                        </td>
                      </tr>
                      <tr>
                        <td class="white-space-nowrap ps-0 country" style="width:32%">
                          <div class="d-flex align-items-center">
                            <h6 class="mb-0 me-3">8. </h6><a href="#!">
                              <div class="d-flex align-items-center"><img src="{{ asset('assets/img/country/england.png') }}" alt="" width="24">
                                <p class="mb-0 ps-3 text-primary fw-bold fs-9">England</p>
                              </div>
                            </a>
                          </div>
                        </td>
                        <td class="align-middle users" style="width:17%">
                          <h6 class="mb-0">14785<span class="text-body-tertiary fw-semibold ms-2">(12.9%)</span></h6>
                        </td>
                        <td class="align-middle text-end transactions" style="width:17%">
                          <h6 class="mb-0">11<span class="text-body-tertiary fw-semibold ms-2">(32.91%)</span></h6>
                        </td>
                        <td class="align-middle text-end revenue" style="width:17%">
                          <h6 class="mb-0">$4745<span class="text-body-tertiary fw-semibold ms-2">(10.2%)</span></h6>
                        </td>
                        <td class="align-middle text-end pe-0 conv-rate" style="width:17%">
                          <h6>8.01%</h6>
                        </td>
                      </tr>
                      <tr>
                        <td class="white-space-nowrap ps-0 country" style="width:32%">
                          <div class="d-flex align-items-center">
                            <h6 class="mb-0 me-3">9. </h6><a href="#!">
                              <div class="d-flex align-items-center"><img src="{{ asset('assets/img/country/indonesia.png') }}" alt="" width="24">
                                <p class="mb-0 ps-3 text-primary fw-bold fs-9">Indonesia</p>
                              </div>
                            </a>
                          </div>
                        </td>
                        <td class="align-middle users" style="width:17%">
                          <h6 class="mb-0">32156<span class="text-body-tertiary fw-semibold ms-2">(32.2%)</span></h6>
                        </td>
                        <td class="align-middle text-end transactions" style="width:17%">
                          <h6 class="mb-0">89<span class="text-body-tertiary fw-semibold ms-2">(12.0%)</span></h6>
                        </td>
                        <td class="align-middle text-end revenue" style="width:17%">
                          <h6 class="mb-0">$2456<span class="text-body-tertiary fw-semibold ms-2">(23.2%)</span></h6>
                        </td>
                        <td class="align-middle text-end pe-0 conv-rate" style="width:17%">
                          <h6>9.07%</h6>
                        </td>
                      </tr>
                      <tr>
                        <td class="white-space-nowrap ps-0 country" style="width:32%">
                          <div class="d-flex align-items-center">
                            <h6 class="mb-0 me-3">10. </h6><a href="#!">
                              <div class="d-flex align-items-center"><img src="{{ asset('assets/img/country/japan.png') }}" alt="" width="24">
                                <p class="mb-0 ps-3 text-primary fw-bold fs-9">Japan</p>
                              </div>
                            </a>
                          </div>
                        </td>
                        <td class="align-middle users" style="width:17%">
                          <h6 class="mb-0">12547<span class="text-body-tertiary fw-semibold ms-2">(12.7%)</span></h6>
                        </td>
                        <td class="align-middle text-end transactions" style="width:17%">
                          <h6 class="mb-0">21<span class="text-body-tertiary fw-semibold ms-2">(14.91%)</span></h6>
                        </td>
                        <td class="align-middle text-end revenue" style="width:17%">
                          <h6 class="mb-0">$2541<span class="text-body-tertiary fw-semibold ms-2">(23.2%)</span></h6>
                        </td>
                        <td class="align-middle text-end pe-0 conv-rate" style="width:17%">
                          <h6>20.01%</h6>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="row align-items-center py-1">
                  <div class="pagination d-none"></div>
                  <div class="col d-flex fs-9">
                    <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p>
                  </div>
                  <div class="col-auto d-flex">
                    <button class="btn btn-link px-1 me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left me-2"></span>Previous</button>
                    <button class="btn btn-link px-1 ms-1" type="button" title="Next" data-list-pagination="next">Next<span class="fas fa-chevron-right ms-2"></span></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 mt-7">
              <div class="row align-items-start justify-content-between mb-4 g-3">
                <div class="col-auto">
                  <h3>Deal Forecast<span class="fw-semibold">- $90,303</span></h3>
                  <p class="text-body-tertiary mb-1">Show what you offer here</p>
                </div>
                <div class="col-12 col-sm-4"><select class="form-select form-select-sm" id="select-ad-forcast-month">
                    <option>Mar 1 - 31, 2022</option>
                    <option>April 1 - 30, 2022</option>
                    <option>May 1 - 31, 2022</option>
                  </select></div>
              </div>
              <div class="w-100">
                <div class="d-flex flex-start">
                  <p class="mb-2 text-body-tertiary fw-semibold fs-9" style="width: 20.72%">$21.0k</p>
                  <p class="mb-2 text-body-tertiary fw-semibold fs-9" style="width: 35.76%">$3.4k</p>
                  <p class="mb-2 text-body-tertiary fw-semibold fs-9" style="width: 25.38%">$15.1k</p>
                  <p class="mb-2 text-body-tertiary fw-semibold fs-9" style="width: 25.14%">$4.6k</p>
                </div>
                <div class="progress mb-3 rounded-3" style="height: 10px;">
                  <div class="progress-bar border-end border-2 bg-primary-dark" role="progressbar" style="width: 20.72%" aria-valuenow="20.72" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Appointment"></div>
                  <div class="progress-bar border-end border-2" role="progressbar" style="width: 35.76%" aria-valuenow="35.76" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Qualified"></div>
                  <div class="progress-bar bg-success border-end border-2" role="progressbar" style="width: 25.38%" aria-valuenow="25.38" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Closed Won"></div>
                  <div class="progress-bar bg-info" role="progressbar" style="width: 25.14%" aria-valuenow="25.14" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Contact Sent"></div>
                </div>
              </div>
              <h4 class="mt-4 mb-3">Deal Forecast by Owner </h4>
              <div class="border-top border-bottom-0" id="dealForecastTable" data-list='{"valueNames":["contact","appointment","qualified","closed-won","contact-sent"],"page":6}'>
                <div class="table-responsive scrollbar">
                  <table class="table fs-9 mb-0">
                    <thead>
                      <tr>
                        <th class="sort border-end border-translucent white-space-nowrap align-middle ps-0 text-uppercase text-body-tertiary" scope="col" data-sort="contact" style="width:15%; min-width:100px">Contact</th>
                        <th class="sort border-end border-translucent align-middle text-end px-3 text-uppercase text-body-tertiary" scope="col" data-sort="appointment" style="width:15%; min-width:95px">
                          <div class="d-inline-flex flex-center"><span class="fa-solid fa-square fs-11 text-primary me-2" data-fa-transform="up-2"></span><span class="mb-0 fs-9">Appointment</span></div>
                        </th>
                        <th class="sort border-end border-translucent align-middle text-end px-3 text-uppercase text-body-tertiary" scope="col" data-sort="qualified" style="width:20%; min-width:100px">
                          <div class="d-inline-flex flex-center"><span class="fa-solid fa-square fs-11 text-primary-light me-2" data-fa-transform="up-2"></span><span class="mb-0 fs-9">Qualified</span></div>
                        </th>
                        <th class="sort border-end border-translucent align-middle text-end px-3 text-uppercase text-body-tertiary" scope="col" data-sort="closed-won" style="width:20%; min-width:100px">
                          <div class="d-inline-flex flex-center"><span class="fa-solid fa-square fs-11 text-success me-2" data-fa-transform="up-2"></span><span class="mb-0 fs-9">Closed Won</span></div>
                        </th>
                        <th class="sort align-middle text-end ps-3 text-uppercase text-body-tertiary" scope="col" data-sort="contact-sent" style="width:20%; min-width:100px">
                          <div class="d-inline-flex flex-center"><span class="fa-solid fa-square fs-11 text-info me-2" data-fa-transform="up-2"></span><span class="mb-0 fs-9">Contact Sent</span></div>
                        </th>
                      </tr>
                    </thead>
                    <tbody class="list" id="table-deal-forecast-body">
                      <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="contact border-end border-translucent align-middle white-space-nowrap py-2 ps-0 px-3"><a class="fw-semibold" href="#!">Carrie Anne</a></td>
                        <td class="appointment border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">1000</td>
                        <td class="qualified border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">$1256</td>
                        <td class="closed-won border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">$1200</td>
                        <td class="contact-sent border-end-0 align-middle white-space-nowrap text-end fw-semibold text-body ps-3 py-2">$1200</td>
                      </tr>
                      <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="contact border-end border-translucent align-middle white-space-nowrap py-2 ps-0 px-3"><a class="fw-semibold" href="#!">Milind Mikuja</a></td>
                        <td class="appointment border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">558</td>
                        <td class="qualified border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">$2531</td>
                        <td class="closed-won border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">$2200</td>
                        <td class="contact-sent border-end-0 align-middle white-space-nowrap text-end fw-semibold text-body ps-3 py-2">$2200</td>
                      </tr>
                      <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="contact border-end border-translucent align-middle white-space-nowrap py-2 ps-0 px-3"><a class="fw-semibold" href="#!">Stanley Drinkwater</a></td>
                        <td class="appointment border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">1100</td>
                        <td class="qualified border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">$100</td>
                        <td class="closed-won border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">$100</td>
                        <td class="contact-sent border-end-0 align-middle white-space-nowrap text-end fw-semibold text-body ps-3 py-2">$100</td>
                      </tr>
                      <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="contact border-end border-translucent align-middle white-space-nowrap py-2 ps-0 px-3"><a class="fw-semibold" href="#!">Josef Stravinsky</a></td>
                        <td class="appointment border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">856</td>
                        <td class="qualified border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">$326</td>
                        <td class="closed-won border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">$265</td>
                        <td class="contact-sent border-end-0 align-middle white-space-nowrap text-end fw-semibold text-body ps-3 py-2">$265</td>
                      </tr>
                      <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="contact border-end border-translucent align-middle white-space-nowrap py-2 ps-0 px-3"><a class="fw-semibold" href="#!">Roy Anderson</a></td>
                        <td class="appointment border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">1200</td>
                        <td class="qualified border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">$1452</td>
                        <td class="closed-won border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">$865</td>
                        <td class="contact-sent border-end-0 align-middle white-space-nowrap text-end fw-semibold text-body ps-3 py-2">$865</td>
                      </tr>
                      <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="contact border-end border-translucent align-middle white-space-nowrap py-2 ps-0 px-3"><a class="fw-semibold" href="#!">Oscar Wilde</a></td>
                        <td class="appointment border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">1020</td>
                        <td class="qualified border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">$950</td>
                        <td class="closed-won border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">$1000</td>
                        <td class="contact-sent border-end-0 align-middle white-space-nowrap text-end fw-semibold text-body ps-3 py-2">$800</td>
                      </tr>
                    </tbody>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle border-bottom-0 border-end border-translucent white-space-nowrap text-end fw-bold text-body-emphasis pt-2 lh-sm pb-0 px-3"> </td>
                      <td class="align-middle border-bottom-0 border-end border-translucent white-space-nowrap text-end fw-bold text-body-emphasis pt-2 lh-sm pb-0 px-3">4,744</td>
                      <td class="align-middle border-bottom-0 border-end border-translucent white-space-nowrap text-end fw-bold text-body-emphasis pt-2 lh-sm pb-0 px-3">$5,665</td>
                      <td class="align-middle border-bottom-0 border-end border-translucent white-space-nowrap text-end fw-bold text-body-emphasis pt-2 lh-sm pb-0 px-3">$4630</td>
                      <td class="border-bottom-0 align-middle white-space-nowrap text-end fw-bold text-body-emphasis pt-2 pb-0 ps-3">$4630</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis py-5 border-y">
            <div id="projectSummary" data-list='{"valueNames":["project","assignees","start","deadline","calculation","projectprogress","status","action"],"page":6,"pagination":true}'>
              <div class="row align-items-end justify-content-between pb-4 g-3">
                <div class="col-auto">
                  <h3>Projects</h3>
                  <p class="text-body-tertiary lh-sm mb-0">Brief summary of all projects</p>
                </div>
              </div>
              <div class="table-responsive ms-n1 ps-1 scrollbar">
                <table class="table fs-9 mb-0 border-top border-translucent">
                  <thead>
                    <tr>
                      <th class="sort white-space-nowrap align-middle ps-0" scope="col" data-sort="project" style="width:30%;">PROJECT NAME</th>
                      <th class="sort align-middle ps-3" scope="col" data-sort="assignees" style="width:10%;">Assignees</th>
                      <th class="sort align-middle ps-3" scope="col" data-sort="start" style="width:10%;">START DATE</th>
                      <th class="sort align-middle ps-3" scope="col" data-sort="deadline" style="width:15%;">DEADLINE</th>
                      <th class="sort align-middle ps-3" scope="col" data-sort="calculation" style="width:12%;">CALCULATION</th>
                      <th class="sort align-middle ps-3" scope="col" data-sort="projectprogress" style="width:5%;">PROGRESS</th>
                      <th class="align-middle ps-8" scope="col" data-sort="status" style="width:10%;">STATUS</th>
                      <th class="sort align-middle text-end" scope="col" style="width:10%;"></th>
                    </tr>
                  </thead>
                  <tbody class="list" id="project-summary-table-body">
                    <tr class="position-static">
                      <td class="align-middle time white-space-nowrap ps-0 project"><a class="fw-bold fs-8" href="#">Making the Butterflies shoot each other dead</a></td>
                      <td class="align-middle white-space-nowrap assignees ps-3">
                        <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/9.webp') }}" alt="">
                            </div>
                          </a>
                          <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                            <div class="position-relative">
                              <div class="bg-holder z-n1" style="background-image:url({{ asset('assets/img/bg/bg-32.png') }});background-size: auto;"></div>
                              <!--/.bg-holder-->
                              <div class="p-3">
                                <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button>
                                  <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button>
                                </div>
                                <div class="text-center">
                                  <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/9.webp') }}" alt=""></div>
                                  <h6 class="text-white">Michael Jenkins</h6>
                                  <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                  <div class="d-flex flex-center mb-3">
                                    <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                    <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="bg-body-emphasis">
                              <div class="p-3 border-bottom border-translucent">
                                <div class="d-flex justify-content-between">
                                  <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                                  </div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                </div>
                              </div>
                              <ul class="nav d-flex flex-column py-3 border-bottom">
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              </ul>
                            </div>
                            <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                          </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/25.webp') }}" alt="">
                            </div>
                          </a>
                          <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                            <div class="position-relative">
                              <div class="bg-holder z-n1" style="background-image:url({{ asset('assets/img/bg/bg-32.png') }});background-size: auto;"></div>
                              <!--/.bg-holder-->
                              <div class="p-3">
                                <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button>
                                  <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button>
                                </div>
                                <div class="text-center">
                                  <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/25.webp') }}" alt=""></div>
                                  <h6 class="text-white">Ansolo Lazinatov</h6>
                                  <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                  <div class="d-flex flex-center mb-3">
                                    <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                    <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="bg-body-emphasis">
                              <div class="p-3 border-bottom border-translucent">
                                <div class="d-flex justify-content-between">
                                  <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                                  </div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                </div>
                              </div>
                              <ul class="nav d-flex flex-column py-3 border-bottom">
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              </ul>
                            </div>
                            <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                          </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/32.webp') }}" alt="">
                            </div>
                          </a>
                          <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                            <div class="position-relative">
                              <div class="bg-holder z-n1" style="background-image:url({{ asset('assets/img/bg/bg-32.png') }});background-size: auto;"></div>
                              <!--/.bg-holder-->
                              <div class="p-3">
                                <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button>
                                  <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button>
                                </div>
                                <div class="text-center">
                                  <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/32.webp') }}" alt=""></div>
                                  <h6 class="text-white">Jennifer Schramm</h6>
                                  <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                  <div class="d-flex flex-center mb-3">
                                    <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                    <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="bg-body-emphasis">
                              <div class="p-3 border-bottom border-translucent">
                                <div class="d-flex justify-content-between">
                                  <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                                  </div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                </div>
                              </div>
                              <ul class="nav d-flex flex-column py-3 border-bottom">
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              </ul>
                            </div>
                            <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                          </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle avatar-placeholder" src="{{ asset('assets/img/team/avatar.webp') }}" alt="">
                            </div>
                          </a>
                          <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                            <div class="position-relative">
                              <div class="bg-holder z-n1" style="background-image:url({{ asset('assets/img/bg/bg-32.png') }});background-size: auto;"></div>
                              <!--/.bg-holder-->
                              <div class="p-3">
                                <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button>
                                  <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button>
                                </div>
                                <div class="text-center">
                                  <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/avatar.webp') }}" alt=""></div>
                                  <h6 class="text-white">Kristine Cadena</h6>
                                  <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                  <div class="d-flex flex-center mb-3">
                                    <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                    <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="bg-body-emphasis">
                              <div class="p-3 border-bottom border-translucent">
                                <div class="d-flex justify-content-between">
                                  <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                                  </div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                </div>
                              </div>
                              <ul class="nav d-flex flex-column py-3 border-bottom">
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              </ul>
                            </div>
                            <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                          </div>
                          <div class="avatar avatar-s  rounded-circle">
                            <div class="avatar-name rounded-circle "><span>+3</span></div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap start ps-3">
                        <p class="mb-0 fs-9 text-body">Dec 12, 2018</p>
                      </td>
                      <td class="align-middle white-space-nowrap deadline ps-3">
                        <p class="mb-0 fs-9 text-body">Dec 12, 2026</p>
                      </td>
                      <td class="align-middle white-space-nowrap calculation ps-3">
                        <p class="fw-bold text-body-emphasis fs-9 mb-0">$4</p>
                        <p class="fw-semibold fs-10 text-body-tertiary mb-0">Cost</p>
                      </td>
                      <td class="align-middle white-space-nowrap ps-3 projectprogress">
                        <p class="text-body-secondary fs-10 mb-0">145 / 145</p>
                        <div class="progress" style="height:3px;">
                          <div class="progress-bar bg-success" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar"></div>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap ps-8">
                        <div class="progress progress-stack mt-3" style="height:3px;">
                          <div class="progress-bar bg-info" style="width:30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar" data-bs-toggle="tooltip" data-bs-placement="top" title="Active"></div>
                          <div class="progress-bar bg-danger" style="width:5%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Damage" role="progressbar"></div>
                          <div class="progress-bar bg-warning" style="width:45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Pending" role="progressbar"></div>
                          <div class="progress-bar bg-success" style="width:15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Done" role="progressbar"></div>
                        </div>
                      </td>
                      <td class="align-middle text-end white-space-nowrap pe-0 action">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="position-static">
                      <td class="align-middle time white-space-nowrap ps-0 project"><a class="fw-bold fs-8" href="#">Project Doughnut Dungeon</a></td>
                      <td class="align-middle white-space-nowrap assignees ps-3">
                        <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/22.webp') }}" alt="">
                            </div>
                          </a>
                          <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                            <div class="position-relative">
                              <div class="bg-holder z-n1" style="background-image:url({{ asset('assets/img/bg/bg-32.png') }});background-size: auto;"></div>
                              <!--/.bg-holder-->
                              <div class="p-3">
                                <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button>
                                  <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button>
                                </div>
                                <div class="text-center">
                                  <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/22.webp') }}" alt=""></div>
                                  <h6 class="text-white">Woodrow Burton</h6>
                                  <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                  <div class="d-flex flex-center mb-3">
                                    <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                    <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="bg-body-emphasis">
                              <div class="p-3 border-bottom border-translucent">
                                <div class="d-flex justify-content-between">
                                  <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                                  </div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                </div>
                              </div>
                              <ul class="nav d-flex flex-column py-3 border-bottom">
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              </ul>
                            </div>
                            <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                          </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/28.webp') }}" alt="">
                            </div>
                          </a>
                          <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                            <div class="position-relative">
                              <div class="bg-holder z-n1" style="background-image:url({{ asset('assets/img/bg/bg-32.png') }});background-size: auto;"></div>
                              <!--/.bg-holder-->
                              <div class="p-3">
                                <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button>
                                  <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button>
                                </div>
                                <div class="text-center">
                                  <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/28.webp') }}" alt=""></div>
                                  <h6 class="text-white">Ashley Garrett</h6>
                                  <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                  <div class="d-flex flex-center mb-3">
                                    <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                    <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="bg-body-emphasis">
                              <div class="p-3 border-bottom border-translucent">
                                <div class="d-flex justify-content-between">
                                  <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                                  </div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                </div>
                              </div>
                              <ul class="nav d-flex flex-column py-3 border-bottom">
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              </ul>
                            </div>
                            <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                          </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="avatar avatar-s">
                              <div class="avatar-name rounded-circle"><span>R</span></div>
                            </div>
                          </a>
                          <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                            <div class="position-relative">
                              <div class="bg-holder z-n1" style="background-image:url({{ asset('assets/img/bg/bg-32.png') }});background-size: auto;"></div>
                              <!--/.bg-holder-->
                              <div class="p-3">
                                <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button>
                                  <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button>
                                </div>
                                <div class="text-center">
                                  <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                    <div class="avatar-name rounded-circle"><span>R</span></div>
                                  </div>
                                  <h6 class="text-white">Raymond Mims</h6>
                                  <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                  <div class="d-flex flex-center mb-3">
                                    <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                    <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="bg-body-emphasis">
                              <div class="p-3 border-bottom border-translucent">
                                <div class="d-flex justify-content-between">
                                  <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                                  </div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                </div>
                              </div>
                              <ul class="nav d-flex flex-column py-3 border-bottom">
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              </ul>
                            </div>
                            <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap start ps-3">
                        <p class="mb-0 fs-9 text-body">Jan 9, 2019</p>
                      </td>
                      <td class="align-middle white-space-nowrap deadline ps-3">
                        <p class="mb-0 fs-9 text-body">Dec 9, 2022</p>
                      </td>
                      <td class="align-middle white-space-nowrap calculation ps-3"><button class="btn btn-phoenix-secondary btn-square-sm"><span class="fas fa-plus"></span></button></td>
                      <td class="align-middle white-space-nowrap ps-3 projectprogress">
                        <p class="text-body-secondary fs-10 mb-0">148 / 223</p>
                        <div class="progress" style="height:3px;">
                          <div class="progress-bar bg-success" style="width: 66.3677130044843%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar"></div>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap ps-8">
                        <div class="progress progress-stack mt-3" style="height:3px;">
                          <div class="progress-bar bg-info" style="width:20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar" data-bs-toggle="tooltip" data-bs-placement="top" title="Active"></div>
                          <div class="progress-bar bg-danger" style="width:15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Damage" role="progressbar"></div>
                          <div class="progress-bar bg-warning" style="width:45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Pending" role="progressbar"></div>
                          <div class="progress-bar bg-success" style="width:30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Done" role="progressbar"></div>
                        </div>
                      </td>
                      <td class="align-middle text-end white-space-nowrap pe-0 action">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="position-static">
                      <td class="align-middle time white-space-nowrap ps-0 project"><a class="fw-bold fs-8" href="#">The Chewing Gum Attack</a></td>
                      <td class="align-middle white-space-nowrap assignees ps-3">
                        <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/34.webp') }}" alt="">
                            </div>
                          </a>
                          <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                            <div class="position-relative">
                              <div class="bg-holder z-n1" style="background-image:url({{ asset('assets/img/bg/bg-32.png') }});background-size: auto;"></div>
                              <!--/.bg-holder-->
                              <div class="p-3">
                                <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button>
                                  <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button>
                                </div>
                                <div class="text-center">
                                  <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/34.webp') }}" alt=""></div>
                                  <h6 class="text-white">Jean Renoir</h6>
                                  <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                  <div class="d-flex flex-center mb-3">
                                    <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                    <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="bg-body-emphasis">
                              <div class="p-3 border-bottom border-translucent">
                                <div class="d-flex justify-content-between">
                                  <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                                  </div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                </div>
                              </div>
                              <ul class="nav d-flex flex-column py-3 border-bottom">
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              </ul>
                            </div>
                            <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                          </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/59.webp') }}" alt="">
                            </div>
                          </a>
                          <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                            <div class="position-relative">
                              <div class="bg-holder z-n1" style="background-image:url({{ asset('assets/img/bg/bg-32.png') }});background-size: auto;"></div>
                              <!--/.bg-holder-->
                              <div class="p-3">
                                <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button>
                                  <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button>
                                </div>
                                <div class="text-center">
                                  <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/59.webp') }}" alt=""></div>
                                  <h6 class="text-white">Katerina Karenin</h6>
                                  <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                  <div class="d-flex flex-center mb-3">
                                    <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                    <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="bg-body-emphasis">
                              <div class="p-3 border-bottom border-translucent">
                                <div class="d-flex justify-content-between">
                                  <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                                  </div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                </div>
                              </div>
                              <ul class="nav d-flex flex-column py-3 border-bottom">
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              </ul>
                            </div>
                            <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap start ps-3">
                        <p class="mb-0 fs-9 text-body">Sep 4, 2019</p>
                      </td>
                      <td class="align-middle white-space-nowrap deadline ps-3">
                        <p class="mb-0 fs-9 text-body">Dec 4, 2021</p>
                      </td>
                      <td class="align-middle white-space-nowrap calculation ps-3">
                        <p class="fw-bold text-body-emphasis fs-9 mb-0">$657k</p>
                        <p class="fw-semibold fs-10 text-body-tertiary mb-0">Estimation</p>
                      </td>
                      <td class="align-middle white-space-nowrap ps-3 projectprogress">
                        <p class="text-body-secondary fs-10 mb-0">277 / 539</p>
                        <div class="progress" style="height:3px;">
                          <div class="progress-bar bg-success" style="width: 51.39146567717996%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar"></div>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap ps-8">
                        <div class="progress progress-stack mt-3" style="height:3px;">
                          <div class="progress-bar bg-info" style="width:10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar" data-bs-toggle="tooltip" data-bs-placement="top" title="Active"></div>
                          <div class="progress-bar bg-danger" style="width:10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Damage" role="progressbar"></div>
                          <div class="progress-bar bg-warning" style="width:35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Pending" role="progressbar"></div>
                          <div class="progress-bar bg-success" style="width:45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Done" role="progressbar"></div>
                        </div>
                      </td>
                      <td class="align-middle text-end white-space-nowrap pe-0 action">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="position-static">
                      <td class="align-middle time white-space-nowrap ps-0 project"><a class="fw-bold fs-8" href="#">Execution of Micky the foul mouse</a></td>
                      <td class="align-middle white-space-nowrap assignees ps-3">
                        <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/1.webp') }}" alt="">
                            </div>
                          </a>
                          <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                            <div class="position-relative">
                              <div class="bg-holder z-n1" style="background-image:url({{ asset('assets/img/bg/bg-32.png') }});background-size: auto;"></div>
                              <!--/.bg-holder-->
                              <div class="p-3">
                                <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button>
                                  <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button>
                                </div>
                                <div class="text-center">
                                  <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/1.webp') }}" alt=""></div>
                                  <h6 class="text-white">Luis Bunuel</h6>
                                  <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                  <div class="d-flex flex-center mb-3">
                                    <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                    <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="bg-body-emphasis">
                              <div class="p-3 border-bottom border-translucent">
                                <div class="d-flex justify-content-between">
                                  <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                                  </div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                </div>
                              </div>
                              <ul class="nav d-flex flex-column py-3 border-bottom">
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              </ul>
                            </div>
                            <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                          </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle avatar-placeholder" src="{{ asset('assets/img/team/avatar.webp') }}" alt="">
                            </div>
                          </a>
                          <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                            <div class="position-relative">
                              <div class="bg-holder z-n1" style="background-image:url({{ asset('assets/img/bg/bg-32.png') }});background-size: auto;"></div>
                              <!--/.bg-holder-->
                              <div class="p-3">
                                <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button>
                                  <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button>
                                </div>
                                <div class="text-center">
                                  <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/avatar.webp') }}" alt=""></div>
                                  <h6 class="text-white">Kristine Cadena</h6>
                                  <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                  <div class="d-flex flex-center mb-3">
                                    <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                    <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="bg-body-emphasis">
                              <div class="p-3 border-bottom border-translucent">
                                <div class="d-flex justify-content-between">
                                  <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                                  </div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                </div>
                              </div>
                              <ul class="nav d-flex flex-column py-3 border-bottom">
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              </ul>
                            </div>
                            <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                          </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/5.webp') }}" alt="">
                            </div>
                          </a>
                          <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                            <div class="position-relative">
                              <div class="bg-holder z-n1" style="background-image:url({{ asset('assets/img/bg/bg-32.png') }});background-size: auto;"></div>
                              <!--/.bg-holder-->
                              <div class="p-3">
                                <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button>
                                  <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button>
                                </div>
                                <div class="text-center">
                                  <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/5.webp') }}" alt=""></div>
                                  <h6 class="text-white">Ricky Antony</h6>
                                  <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                  <div class="d-flex flex-center mb-3">
                                    <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                    <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="bg-body-emphasis">
                              <div class="p-3 border-bottom border-translucent">
                                <div class="d-flex justify-content-between">
                                  <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                                  </div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                </div>
                              </div>
                              <ul class="nav d-flex flex-column py-3 border-bottom">
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              </ul>
                            </div>
                            <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                          </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/11.webp') }}" alt="">
                            </div>
                          </a>
                          <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                            <div class="position-relative">
                              <div class="bg-holder z-n1" style="background-image:url({{ asset('assets/img/bg/bg-32.png') }});background-size: auto;"></div>
                              <!--/.bg-holder-->
                              <div class="p-3">
                                <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button>
                                  <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button>
                                </div>
                                <div class="text-center">
                                  <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/11.webp') }}" alt=""></div>
                                  <h6 class="text-white">Roy Anderson</h6>
                                  <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                  <div class="d-flex flex-center mb-3">
                                    <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                    <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="bg-body-emphasis">
                              <div class="p-3 border-bottom border-translucent">
                                <div class="d-flex justify-content-between">
                                  <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                                  </div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                </div>
                              </div>
                              <ul class="nav d-flex flex-column py-3 border-bottom">
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              </ul>
                            </div>
                            <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap start ps-3">
                        <p class="mb-0 fs-9 text-body">Nov 1, 2019</p>
                      </td>
                      <td class="align-middle white-space-nowrap deadline ps-3">
                        <p class="mb-0 fs-9 text-body">Dec 1, 2024</p>
                      </td>
                      <td class="align-middle white-space-nowrap calculation ps-3"><button class="btn btn-phoenix-secondary btn-square-sm"><span class="fas fa-plus"></span></button></td>
                      <td class="align-middle white-space-nowrap ps-3 projectprogress">
                        <p class="text-body-secondary fs-10 mb-0">16 / 56</p>
                        <div class="progress" style="height:3px;">
                          <div class="progress-bar bg-success" style="width: 28.57142857142857%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar"></div>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap ps-8">
                        <div class="progress progress-stack mt-3" style="height:3px;">
                          <div class="progress-bar bg-info" style="width:45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar" data-bs-toggle="tooltip" data-bs-placement="top" title="Active"></div>
                          <div class="progress-bar bg-danger" style="width:15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Damage" role="progressbar"></div>
                          <div class="progress-bar bg-warning" style="width:20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Pending" role="progressbar"></div>
                          <div class="progress-bar bg-success" style="width:20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Done" role="progressbar"></div>
                        </div>
                      </td>
                      <td class="align-middle text-end white-space-nowrap pe-0 action">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="position-static">
                      <td class="align-middle time white-space-nowrap ps-0 project"><a class="fw-bold fs-8" href="#">Harnessing stupidity from Jerry</a></td>
                      <td class="align-middle white-space-nowrap assignees ps-3">
                        <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/21.webp') }}" alt="">
                            </div>
                          </a>
                          <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                            <div class="position-relative">
                              <div class="bg-holder z-n1" style="background-image:url({{ asset('assets/img/bg/bg-32.png') }});background-size: auto;"></div>
                              <!--/.bg-holder-->
                              <div class="p-3">
                                <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button>
                                  <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button>
                                </div>
                                <div class="text-center">
                                  <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/21.webp') }}" alt=""></div>
                                  <h6 class="text-white">Michael Jenkins</h6>
                                  <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                  <div class="d-flex flex-center mb-3">
                                    <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                    <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="bg-body-emphasis">
                              <div class="p-3 border-bottom border-translucent">
                                <div class="d-flex justify-content-between">
                                  <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                                  </div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                </div>
                              </div>
                              <ul class="nav d-flex flex-column py-3 border-bottom">
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              </ul>
                            </div>
                            <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                          </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/23.webp') }}" alt="">
                            </div>
                          </a>
                          <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                            <div class="position-relative">
                              <div class="bg-holder z-n1" style="background-image:url({{ asset('assets/img/bg/bg-32.png') }});background-size: auto;"></div>
                              <!--/.bg-holder-->
                              <div class="p-3">
                                <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button>
                                  <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button>
                                </div>
                                <div class="text-center">
                                  <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/23.webp') }}" alt=""></div>
                                  <h6 class="text-white">Kristine Cadena</h6>
                                  <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                  <div class="d-flex flex-center mb-3">
                                    <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                    <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="bg-body-emphasis">
                              <div class="p-3 border-bottom border-translucent">
                                <div class="d-flex justify-content-between">
                                  <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                                  </div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                </div>
                              </div>
                              <ul class="nav d-flex flex-column py-3 border-bottom">
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              </ul>
                            </div>
                            <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                          </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/25.webp') }}" alt="">
                            </div>
                          </a>
                          <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                            <div class="position-relative">
                              <div class="bg-holder z-n1" style="background-image:url({{ asset('assets/img/bg/bg-32.png') }});background-size: auto;"></div>
                              <!--/.bg-holder-->
                              <div class="p-3">
                                <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button>
                                  <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button>
                                </div>
                                <div class="text-center">
                                  <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/25.webp') }}" alt=""></div>
                                  <h6 class="text-white">Ricky Antony</h6>
                                  <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                  <div class="d-flex flex-center mb-3">
                                    <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                    <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="bg-body-emphasis">
                              <div class="p-3 border-bottom border-translucent">
                                <div class="d-flex justify-content-between">
                                  <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                                  </div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                </div>
                              </div>
                              <ul class="nav d-flex flex-column py-3 border-bottom">
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              </ul>
                            </div>
                            <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap start ps-3">
                        <p class="mb-0 fs-9 text-body">Dec 28, 2019</p>
                      </td>
                      <td class="align-middle white-space-nowrap deadline ps-3">
                        <p class="mb-0 fs-9 text-body">Nov 28, 2021</p>
                      </td>
                      <td class="align-middle white-space-nowrap calculation ps-3"><button class="btn btn-phoenix-secondary btn-square-sm"><span class="fas fa-plus"></span></button></td>
                      <td class="align-middle white-space-nowrap ps-3 projectprogress">
                        <p class="text-body-secondary fs-10 mb-0">169 / 394</p>
                        <div class="progress" style="height:3px;">
                          <div class="progress-bar bg-success" style="width: 42.89340101522843%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar"></div>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap ps-8">
                        <div class="progress progress-stack mt-3" style="height:3px;">
                          <div class="progress-bar bg-info" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar" data-bs-toggle="tooltip" data-bs-placement="top" title="Active"></div>
                          <div class="progress-bar bg-danger" style="width:35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Damage" role="progressbar"></div>
                          <div class="progress-bar bg-warning" style="width:20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Pending" role="progressbar"></div>
                          <div class="progress-bar bg-success" style="width:15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Done" role="progressbar"></div>
                        </div>
                      </td>
                      <td class="align-middle text-end white-space-nowrap pe-0 action">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="position-static">
                      <td class="align-middle time white-space-nowrap ps-0 project"><a class="fw-bold fs-8" href="#">Water resistant mosquito killer gun</a></td>
                      <td class="align-middle white-space-nowrap assignees ps-3">
                        <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}" alt="">
                            </div>
                          </a>
                          <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                            <div class="position-relative">
                              <div class="bg-holder z-n1" style="background-image:url({{ asset('assets/img/bg/bg-32.png') }});background-size: auto;"></div>
                              <!--/.bg-holder-->
                              <div class="p-3">
                                <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button>
                                  <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button>
                                </div>
                                <div class="text-center">
                                  <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/30.webp') }}" alt=""></div>
                                  <h6 class="text-white">Stanly Drinkwater</h6>
                                  <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                  <div class="d-flex flex-center mb-3">
                                    <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                    <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="bg-body-emphasis">
                              <div class="p-3 border-bottom border-translucent">
                                <div class="d-flex justify-content-between">
                                  <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                                  </div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                </div>
                              </div>
                              <ul class="nav d-flex flex-column py-3 border-bottom">
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              </ul>
                            </div>
                            <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                          </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle avatar-placeholder" src="{{ asset('assets/img/team/avatar.webp') }}" alt="">
                            </div>
                          </a>
                          <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                            <div class="position-relative">
                              <div class="bg-holder z-n1" style="background-image:url({{ asset('assets/img/bg/bg-32.png') }});background-size: auto;"></div>
                              <!--/.bg-holder-->
                              <div class="p-3">
                                <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button>
                                  <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button>
                                </div>
                                <div class="text-center">
                                  <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/avatar.webp') }}" alt=""></div>
                                  <h6 class="text-white">Kristine Cadena</h6>
                                  <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                  <div class="d-flex flex-center mb-3">
                                    <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                    <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="bg-body-emphasis">
                              <div class="p-3 border-bottom border-translucent">
                                <div class="d-flex justify-content-between">
                                  <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                                  </div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                </div>
                              </div>
                              <ul class="nav d-flex flex-column py-3 border-bottom">
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              </ul>
                            </div>
                            <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                          </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/59.webp') }}" alt="">
                            </div>
                          </a>
                          <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                            <div class="position-relative">
                              <div class="bg-holder z-n1" style="background-image:url({{ asset('assets/img/bg/bg-32.png') }});background-size: auto;"></div>
                              <!--/.bg-holder-->
                              <div class="p-3">
                                <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button>
                                  <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button>
                                </div>
                                <div class="text-center">
                                  <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/59.webp') }}" alt=""></div>
                                  <h6 class="text-white">Katerina Karenin</h6>
                                  <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                  <div class="d-flex flex-center mb-3">
                                    <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                    <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="bg-body-emphasis">
                              <div class="p-3 border-bottom border-translucent">
                                <div class="d-flex justify-content-between">
                                  <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                                  </div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                </div>
                              </div>
                              <ul class="nav d-flex flex-column py-3 border-bottom">
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              </ul>
                            </div>
                            <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                          </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/31.webp') }}" alt="">
                            </div>
                          </a>
                          <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                            <div class="position-relative">
                              <div class="bg-holder z-n1" style="background-image:url({{ asset('assets/img/bg/bg-32.png') }});background-size: auto;"></div>
                              <!--/.bg-holder-->
                              <div class="p-3">
                                <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button>
                                  <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button>
                                </div>
                                <div class="text-center">
                                  <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/31.webp') }}" alt=""></div>
                                  <h6 class="text-white">Martina scorcese</h6>
                                  <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                  <div class="d-flex flex-center mb-3">
                                    <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                    <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="bg-body-emphasis">
                              <div class="p-3 border-bottom border-translucent">
                                <div class="d-flex justify-content-between">
                                  <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                                  </div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                </div>
                              </div>
                              <ul class="nav d-flex flex-column py-3 border-bottom">
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              </ul>
                            </div>
                            <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                          </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="avatar avatar-s">
                              <div class="avatar-name rounded-circle"><span>R</span></div>
                            </div>
                          </a>
                          <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                            <div class="position-relative">
                              <div class="bg-holder z-n1" style="background-image:url({{ asset('assets/img/bg/bg-32.png') }});background-size: auto;"></div>
                              <!--/.bg-holder-->
                              <div class="p-3">
                                <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button>
                                  <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button>
                                </div>
                                <div class="text-center">
                                  <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                    <div class="avatar-name rounded-circle"><span>R</span></div>
                                  </div>
                                  <h6 class="text-white">Roy Anderson</h6>
                                  <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                  <div class="d-flex flex-center mb-3">
                                    <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                    <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="bg-body-emphasis">
                              <div class="p-3 border-bottom border-translucent">
                                <div class="d-flex justify-content-between">
                                  <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                                  </div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                </div>
                              </div>
                              <ul class="nav d-flex flex-column py-3 border-bottom">
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              </ul>
                            </div>
                            <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap start ps-3">
                        <p class="mb-0 fs-9 text-body">Feb 24, 2020</p>
                      </td>
                      <td class="align-middle white-space-nowrap deadline ps-3">
                        <p class="mb-0 fs-9 text-body">Nov 24, 2021</p>
                      </td>
                      <td class="align-middle white-space-nowrap calculation ps-3">
                        <p class="fw-bold text-body-emphasis fs-9 mb-0">$55k</p>
                        <p class="fw-semibold fs-10 text-body-tertiary mb-0">Budget</p>
                      </td>
                      <td class="align-middle white-space-nowrap ps-3 projectprogress">
                        <p class="text-body-secondary fs-10 mb-0">600 / 600</p>
                        <div class="progress" style="height:3px;">
                          <div class="progress-bar bg-success" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar"></div>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap ps-8">
                        <div class="progress progress-stack mt-3" style="height:3px;">
                          <div class="progress-bar bg-info" style="width:24%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar" data-bs-toggle="tooltip" data-bs-placement="top" title="Active"></div>
                          <div class="progress-bar bg-danger" style="width:5%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Damage" role="progressbar"></div>
                          <div class="progress-bar bg-warning" style="width:35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Pending" role="progressbar"></div>
                          <div class="progress-bar bg-success" style="width:35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Done" role="progressbar"></div>
                        </div>
                      </td>
                      <td class="align-middle text-end white-space-nowrap pe-0 action">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
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
          </div>
          <div class="mt-3 mx-lg-n4">
            <div class="row g-3">
              <div class="col-12 col-xl-6 col-xxl-7">
                <div class="card todo-list h-100">
                  <div class="card-header border-bottom-0 pb-0">
                    <div class="row justify-content-between align-items-center mb-4">
                      <div class="col-auto">
                        <h3 class="text-body-emphasis">To do</h3>
                        <p class="mb-2 mb-md-0 mb-lg-2 text-body-tertiary">Task assigned to me</p>
                      </div>
                      <div class="col-auto w-100 w-md-auto">
                        <div class="row align-items-center g-0 justify-content-between">
                          <div class="col-12 col-sm-auto">
                            <div class="search-box w-100 mb-2 mb-sm-0" style="max-width:30rem;">
                              <form class="position-relative"><input class="form-control search-input search" type="search" placeholder="Search tasks" aria-label="Search">
                                <span class="fas fa-search search-box-icon"></span>
                              </form>
                            </div>
                          </div>
                          <div class="col-auto d-flex">
                            <p class="mb-0 ms-sm-3 fs-9 text-body-tertiary fw-bold"><span class="fas fa-filter me-1 fw-extra-bold fs-10"></span>23 tasks</p><button class="btn btn-link p-0 ms-3 fs-9 text-primary fw-bold"><span class="fas fa-sort me-1 fw-extra-bold fs-10"></span>Sorting</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body py-0 scrollbar to-do-list-body">
                    <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-0" data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                          <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Designing the dungeon</label><span class="badge badge-phoenix ms-auto fs-10 badge-phoenix-primary">DRAFT</span></div>
                        </div>
                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                          <div class="d-flex lh-1 align-items-center"><a class="text-body-tertiary fw-bold fs-10 me-2" href="#!"><span class="fas fa-paperclip me-1"></span>2</a>
                            <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Nov, 2021</p>
                            <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                              <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">12:00 PM</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                        <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent"><button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button>
                          <button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-1" data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                          <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Hiring a motion graphic designer</label><span class="badge badge-phoenix ms-auto fs-10 badge-phoenix-warning">URGENT</span></div>
                        </div>
                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                          <div class="d-flex lh-1 align-items-center"><a class="text-body-tertiary fw-bold fs-10 me-2" href="#!"><span class="fas fa-paperclip me-1"></span>2</a><a class="text-warning fw-bold fs-10 me-2" href="#!"><span class="fas fa-tasks me-1"></span>3</a>
                            <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Nov, 2021</p>
                            <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                              <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">12:00 PM</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                        <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent"><button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button>
                          <button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-2" data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                          <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Daily Meetings Purpose, participants</label><span class="badge badge-phoenix ms-auto fs-10 badge-phoenix-info">ON PROCESS</span></div>
                        </div>
                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                          <div class="d-flex lh-1 align-items-center"><a class="text-body-tertiary fw-bold fs-10 me-2" href="#!"><span class="fas fa-paperclip me-1"></span>4</a>
                            <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Dec, 2021</p>
                            <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                              <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">05:00 AM</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                        <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent"><button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button>
                          <button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-3" data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                          <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Finalizing the geometric shapes</label></div>
                        </div>
                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                          <div class="d-flex lh-1 align-items-center"><a class="text-body-tertiary fw-bold fs-10 me-2" href="#!"><span class="fas fa-paperclip me-1"></span>3</a>
                            <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Nov, 2021</p>
                            <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                              <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">12:00 PM</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                        <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent"><button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button>
                          <button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-4" data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                          <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Daily meeting with team members</label></div>
                        </div>
                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                          <div class="d-flex lh-1 align-items-center">
                            <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">1 Nov, 2021</p>
                            <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                              <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">12:00 PM</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                        <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent"><button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button>
                          <button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-5" data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                          <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Daily Standup Meetings</label></div>
                        </div>
                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                          <div class="d-flex lh-1 align-items-center">
                            <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">13 Nov, 2021</p>
                            <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                              <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">10:00 PM</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                        <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent"><button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button>
                          <button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-6" data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                          <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Procrastinate for a month</label><span class="badge badge-phoenix ms-auto fs-10 badge-phoenix-info">ON PROCESS</span></div>
                        </div>
                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                          <div class="d-flex lh-1 align-items-center"><a class="text-body-tertiary fw-bold fs-10 me-2" href="#!"><span class="fas fa-paperclip me-1"></span>3</a>
                            <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Nov, 2021</p>
                            <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                              <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">12:00 PM</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                        <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent"><button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button>
                          <button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-7" data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                          <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">warming up</label><span class="badge badge-phoenix ms-auto fs-10 badge-phoenix-info">CLOSE</span></div>
                        </div>
                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                          <div class="d-flex lh-1 align-items-center"><a class="text-body-tertiary fw-bold fs-10 me-2" href="#!"><span class="fas fa-paperclip me-1"></span>3</a>
                            <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Nov, 2021</p>
                            <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                              <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">12:00 PM</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                        <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent"><button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button>
                          <button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex hover-actions-trigger py-3 border-translucent border-top border-bottom"><input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-8" data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                          <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Make ready for release</label></div>
                        </div>
                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                          <div class="d-flex lh-1 align-items-center"><a class="text-body-tertiary fw-bold fs-10 me-2" href="#!"><span class="fas fa-paperclip me-1"></span>2</a>
                            <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">2o Nov, 2021</p>
                            <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                              <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">1:00 AM</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                        <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent"><button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button>
                          <button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog modal-xl">
                        <div class="modal-content bg-body overflow-hidden">
                          <div class="modal-header justify-content-between px-6 py-5 pe-sm-5 px-md-6 dark__bg-gray-1100">
                            <h3 class="text-body-highlight fw-bolder mb-0">Designing the Dungeon Blueprint</h3><button class="btn btn-phoenix-secondary btn-icon btn-icon-xl flex-shrink-0" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fa-solid fa-xmark"></span></button>
                          </div>
                          <div class="modal-body bg-body-highlight px-6 py-0">
                            <div class="row gx-14">
                              <div class="col-12 col-lg-7 border-end-lg">
                                <div class="py-6">
                                  <div class="mb-7">
                                    <div class="d-flex align-items-center mb-3">
                                      <h4 class="text-body me-3">Description</h4><a class="btn btn-link text-decoration-none p-0" href="#!"><span class="fa-solid fa-pen"></span></a>
                                    </div>
                                    <p class="text-body-highlight mb-0">The female circus horse-rider is a recurring subject in Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus. They visited Paris’s historic Cirque d’Hiver Bouglione together; Vollard lent Chagall his private box seats. Chagall completed 19 gouaches Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus.</p>
                                  </div>
                                  <div class="mb-7">
                                    <h4 class="mb-3">Subtasks</h4>
                                    <div class="d-flex flex-between-center hover-actions-trigger py-3 border-top">
                                      <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="subtask-checkbox form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtaskundefined1"><label class="form-check-label mb-0 fs-8" for="subtaskundefined1">Study Dragons</label></div>
                                      <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs-10 text-body-tertiary px-0 me-3"><span class="fa-solid fa-pencil"></span></button>
                                        <button class="btn btn-sm text-body-tertiary px-0"><span class="fa-solid fa-xmark fs-8"></span></button>
                                      </div>
                                    </div>
                                    <div class="d-flex flex-between-center hover-actions-trigger py-3 border-top">
                                      <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="subtask-checkbox form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtaskundefined2"><label class="form-check-label mb-0 fs-8" for="subtaskundefined2">Procrastinate a bit</label></div>
                                      <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs-10 text-body-tertiary px-0 me-3"><span class="fa-solid fa-pencil"></span></button>
                                        <button class="btn btn-sm text-body-tertiary px-0"><span class="fa-solid fa-xmark fs-8"></span></button>
                                      </div>
                                    </div>
                                    <div class="d-flex flex-between-center hover-actions-trigger py-3 border-top border-bottom mb-3">
                                      <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="subtask-checkbox form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtaskundefined3"><label class="form-check-label mb-0 fs-8" for="subtaskundefined3">Staring at the notebook for 5 mins</label></div>
                                      <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs-10 text-body-tertiary px-0 me-3"><span class="fa-solid fa-pencil"></span></button>
                                        <button class="btn btn-sm text-body-tertiary px-0"><span class="fa-solid fa-xmark fs-8"></span></button>
                                      </div>
                                    </div><a class="fw-bold fs-9" href="#!"><span class="fas fa-plus me-1"></span>Add subtask</a>
                                  </div>
                                  <div class="mb-3">
                                    <div>
                                      <h4 class="mb-3">Files</h4>
                                    </div>
                                    <div class="border-top px-0 pt-4 pb-3">
                                      <div class="me-n3">
                                        <div class="d-flex flex-between-center">
                                          <div class="d-flex mb-1"><span class="fa-solid fa-image me-2 text-body-tertiary fs-9"></span>
                                            <p class="text-body-highlight mb-0 lh-1">Silly_sight_1.png</p>
                                          </div>
                                          <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                          </div>
                                        </div>
                                        <div class="d-flex fs-9 text-body-tertiary mb-2 flex-wrap"><span>768 kb</span><span class="text-body-quaternary mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-body-quaternary mx-1">| </span><span class="text-nowrap">21st Dec, 12:56 PM</span></div><img class="rounded-2" src="{{ asset('assets/img/generic/40.png') }}" alt="" style="width:230px">
                                      </div>
                                    </div>
                                    <div class="border-top px-0 pt-4 pb-3">
                                      <div class="me-n3">
                                        <div class="d-flex flex-between-center">
                                          <div>
                                            <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-image me-2 fs-9 text-body-tertiary"></span>
                                              <p class="text-body-highlight mb-0 lh-1">All_images.zip</p>
                                            </div>
                                            <div class="d-flex fs-9 text-body-tertiary mb-0 flex-wrap"><span>12.8 mb</span><span class="text-body-quaternary mx-1">| </span><a href="#!">Yves Tanguy </a><span class="text-body-quaternary mx-1">| </span><span class="text-nowrap">19th Dec, 08:56 PM</span></div>
                                          </div>
                                          <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="border-top px-0 pt-4 pb-3 border-bottom">
                                      <div class="me-n3">
                                        <div class="d-flex flex-between-center">
                                          <div>
                                            <div class="d-flex align-items-center mb-1 flex-wrap"><span class="fa-solid fa-file-lines me-2 fs-9 text-body-tertiary"></span>
                                              <p class="text-body-highlight mb-0 lh-1">Project.txt</p>
                                            </div>
                                            <div class="d-flex fs-9 text-body-tertiary mb-0 flex-wrap"><span>123 kb</span><span class="text-body-quaternary mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-body-quaternary mx-1">| </span><span class="text-nowrap">12th Dec, 12:56 PM</span></div>
                                          </div>
                                          <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="mt-3"><label class="btn btn-link p-0" for="customFile-undefined"><span class="fas fa-plus me-1"></span>Add file(s)</label><input class="d-none" type="file" id="customFile-undefined"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-12 col-lg-5">
                                <div class="py-6">
                                  <h4 class="mb-4 text-body-emphasis">Others Information</h4>
                                  <h5 class="text-body-highlight mb-2">Status</h5><select class="form-select mb-4" aria-label="Default select example">
                                    <option selected="">Select</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                                  <h5 class="text-body-highlight mb-2">Due Date</h5>
                                  <div class="flatpickr-input-container mb-4"><input class="form-control datetimepicker ps-6" type="text" placeholder="Set the due date" data-options='{"disableMobile":true}'><span class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span></div>
                                  <h5 class="text-body-highlight mb-2">Reminder</h5>
                                  <div class="flatpickr-input-container mb-4"><input class="form-control datetimepicker ps-6" type="text" placeholder="Reminder" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true,"static":true}'><span class="uil uil-bell-school flatpickr-icon text-body-tertiary"></span></div>
                                  <h5 class="text-body-highlight mb-2">Tag</h5>
                                  <div class="choices-select-container mb-6"><select class="form-select" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                                      <option value="">Select organizer...</option>
                                      <option>Massachusetts Institute of Technology</option>
                                      <option>University of Chicago</option>
                                      <option>GSAS Open Labs At Harvard</option>
                                      <option>California Institute of Technology</option>
                                    </select><span class="uil uil-tag-alt choices-icon text-body-tertiary" style="top: 26%;"></span></div>
                                  <div class="text-end mb-9"><button class="btn btn-phoenix-danger">Delete Task</button></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer border-0"><a class="fw-bold fs-9 mt-4" href="#!"><span class="fas fa-plus me-1"></span>Add new task</a></div>
                </div>
              </div>
              <div class="col-12 col-xl-6 col-xxl-5">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="card-title mb-1">
                      <h3 class="text-body-emphasis">Activity</h3>
                    </div>
                    <p class="text-body-tertiary mb-4">Recent activity across all projects</p>
                    <div class="timeline-vertical timeline-with-details">
                      <div class="timeline-item position-relative">
                        <div class="row g-md-3">
                          <div class="col-12 col-md-auto d-flex">
                            <div class="timeline-item-date order-1 order-md-0 me-md-4">
                              <p class="fs-10 fw-semibold text-body-tertiary text-opacity-85 text-end">01 DEC, 2023<br class="d-none d-md-block"> 10:30 AM</p>
                            </div>
                            <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                              <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle"><span class="fa-solid fa-chess text-primary-dark fs-10"></span></div><span class="timeline-bar border-end border-dashed"></span>
                            </div>
                          </div>
                          <div class="col">
                            <div class="timeline-item-content ps-6 ps-md-3">
                              <h5 class="fs-9 lh-sm">Phoenix Template: Unleashing Creative Possibilities</h5>
                              <p class="fs-9">by <a class="fw-semibold" href="#!">Shantinon Mekalan</a></p>
                              <p class="fs-9 text-body-secondary mb-5">Discover limitless creativity with the Phoenix template! Our latest update offers an array of innovative features and design options.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="timeline-item position-relative">
                        <div class="row g-md-3">
                          <div class="col-12 col-md-auto d-flex">
                            <div class="timeline-item-date order-1 order-md-0 me-md-4">
                              <p class="fs-10 fw-semibold text-body-tertiary text-opacity-85 text-end">05 DEC, 2023<br class="d-none d-md-block"> 12:30 AM</p>
                            </div>
                            <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                              <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle"><span class="fa-solid fa-dove text-primary-dark fs-10"></span></div><span class="timeline-bar border-end border-dashed"></span>
                            </div>
                          </div>
                          <div class="col">
                            <div class="timeline-item-content ps-6 ps-md-3">
                              <h5 class="fs-9 lh-sm">Empower Your Digital Presence: The Phoenix Template Unveiled</h5>
                              <p class="fs-9">by <a class="fw-semibold" href="#!">Bookworm22</a></p>
                              <p class="fs-9 text-body-secondary mb-5">Unveiling the Phoenix template, a game-changer for your digital presence. With its powerful features and sleek design,</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="timeline-item position-relative">
                        <div class="row g-md-3">
                          <div class="col-12 col-md-auto d-flex">
                            <div class="timeline-item-date order-1 order-md-0 me-md-4">
                              <p class="fs-10 fw-semibold text-body-tertiary text-opacity-85 text-end">15 DEC, 2023<br class="d-none d-md-block"> 2:30 AM</p>
                            </div>
                            <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                              <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle"><span class="fa-solid fa-dungeon text-primary-dark fs-10"></span></div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="timeline-item-content ps-6 ps-md-3">
                              <h5 class="fs-9 lh-sm">Phoenix Template: Simplified Design, Maximum Impact</h5>
                              <p class="fs-9">by <a class="fw-semibold" href="#!">Sharuka Nijibum</a></p>
                              <p class="fs-9 text-body-secondary mb-0">Introducing the Phoenix template, where simplified design meets maximum impact. Elevate your digital presence with its sleek and intuitive features.</p>
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
          <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis pt-7 mt-3 border-y">
            <div data-list='{"valueNames":["product","customer","rating","review","time"],"page":6}'>
              <div class="row align-items-end justify-content-between pb-5 g-3">
                <div class="col-auto">
                  <h3>Latest reviews</h3>
                  <p class="text-body-tertiary lh-sm mb-0">Payment received across all channels</p>
                </div>
                <div class="col-12 col-md-auto">
                  <div class="row g-2 gy-3">
                    <div class="col-auto flex-1">
                      <div class="search-box">
                        <form class="position-relative"><input class="form-control search-input search form-control-sm" type="search" placeholder="Search" aria-label="Search">
                          <span class="fas fa-search search-box-icon"></span>
                        </form>
                      </div>
                    </div>
                    <div class="col-auto"><button class="btn btn-sm btn-phoenix-secondary bg-body-emphasis bg-body-hover me-2" type="button">All products</button>
                      <button class="btn btn-sm btn-phoenix-secondary bg-body-emphasis bg-body-hover action-btn" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h" data-fa-transform="shrink-2"></span></button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="table-responsive mx-n1 px-1 scrollbar">
                <table class="table fs-9 mb-0 border-top border-translucent">
                  <thead>
                    <tr>
                      <th class="white-space-nowrap fs-9 ps-0 align-middle">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" id="checkbox-bulk-reviews-select" type="checkbox" data-bulk-select='{"body":"table-latest-review-body"}'></div>
                      </th>
                      <th class="sort white-space-nowrap align-middle" scope="col"></th>
                      <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:360px;" data-sort="product">PRODUCT</th>
                      <th class="sort align-middle" scope="col" data-sort="customer" style="min-width:200px;">CUSTOMER</th>
                      <th class="sort align-middle" scope="col" data-sort="rating" style="min-width:110px;">RATING</th>
                      <th class="sort align-middle" scope="col" style="max-width:350px;" data-sort="review">REVIEW</th>
                      <th class="sort text-start ps-5 align-middle" scope="col" data-sort="status">STATUS</th>
                      <th class="sort text-end align-middle" scope="col" data-sort="time">TIME</th>
                      <th class="sort text-end pe-0 align-middle" scope="col"></th>
                    </tr>
                  </thead>
                  <tbody class="list" id="table-latest-review-body">
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle ps-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management & Skin Temperature Trends, Carbon/Graphite, One Size (S & L Bands)","productImage":"/products/60x60/1.png","customer":{"name":"Richard Dawkins","avatar":""},"rating":5,"review":"This Fitbit is fantastic! I was trying to be in better shape and needed some motivation, so I decided to treat myself to a new Fitbit.","status":{"title":"Approved","badge":"success","icon":"check"},"time":"Just now"}'></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="{{ url('apps/e-commerce/landing/product-details') }}"><img src="{{ asset('assets/img/products/60x60/1.png') }}" alt="" width="53"></a></td>
                      <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="{{ url('apps/e-commerce/landing/product-details') }}">Fitbit Sense Advanced Smartwatch with Tools fo...</a></td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="{{ url('apps/e-commerce/landing/profile') }}">
                          <div class="avatar avatar-l">
                            <div class="avatar-name rounded-circle"><span>R</span></div>
                          </div>
                          <h6 class="mb-0 ms-3 text-body">Richard Dawkins</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs-9 fw-semibold text-body-highlight mb-0">This Fitbit is fantastic! I was trying to be in better shape and needed some motivation, so I decided to treat myself to a new Fitbit.</p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Approved</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-body-highlight mb-0">Just now</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                            <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                          </div>
                        </div>
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle ps-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"iPhone 13 pro max-Pacific Blue-128GB storage","productImage":"/products/60x60/2.png","customer":{"name":"Ashley Garrett","avatar":"/team/40x40/59.webp"},"rating":3,"review":"The order was delivered ahead of schedule. To give us additional time, you should leave the packaging sealed with plastic.","status":{"title":"Approved","badge":"success","icon":"check"},"time":"Just now"}'></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="{{ url('apps/e-commerce/landing/product-details') }}"><img src="{{ asset('assets/img/products/60x60/2.png') }}" alt="" width="53"></a></td>
                      <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="{{ url('apps/e-commerce/landing/product-details') }}">iPhone 13 pro max-Pacific Blue-128GB storage</a></td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="{{ url('apps/e-commerce/landing/profile') }}">
                          <div class="avatar avatar-l"><img class="rounded-circle" src="{{ asset('assets/img/team/40x40/59.webp') }}" alt=""></div>
                          <h6 class="mb-0 ms-3 text-body">Ashley Garrett</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs-9 fw-semibold text-body-highlight mb-0">The order was delivered ahead of schedule. To give us additional time, you should leave the packaging sealed with plastic.</p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Approved</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-body-highlight mb-0">Just now</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                            <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                          </div>
                        </div>
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle ps-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Apple MacBook Pro 13 inch-M1-8/256GB-space","productImage":"/products/60x60/3.png","customer":{"name":"Woodrow Burton","avatar":"/team/40x40/58.webp"},"rating":4.5,"review":"It&#39;s a Mac, after all. Once you&#39;ve gone Mac, there&#39;s no going back. My first Mac lasted over nine years, and this is my second.","status":{"title":"Pending","badge":"warning","icon":"clock"},"time":"Just now"}'></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="{{ url('apps/e-commerce/landing/product-details') }}"><img src="{{ asset('assets/img/products/60x60/3.png') }}" alt="" width="53"></a></td>
                      <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="{{ url('apps/e-commerce/landing/product-details') }}">Apple MacBook Pro 13 inch-M1-8/256GB-space</a></td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="{{ url('apps/e-commerce/landing/profile') }}">
                          <div class="avatar avatar-l"><img class="rounded-circle" src="{{ asset('assets/img/team/40x40/58.webp') }}" alt=""></div>
                          <h6 class="mb-0 ms-3 text-body">Woodrow Burton</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt star-icon text-warning"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs-9 fw-semibold text-body-highlight mb-0">It's a Mac, after all. Once you've gone Mac, there's no going back. My first Mac lasted over nine years, and this is my second.</p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-body-highlight mb-0">Just now</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                            <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                          </div>
                        </div>
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle ps-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Apple iMac 24\" 4K Retina Display M1 8 Core CPU, 7 Core GPU, 256GB SSD, Green (MJV83ZP/A) 2021","productImage":"/products/60x60/4.png","customer":{"name":"Eric McGee","avatar":"/team/40x40/avatar.webp","avatarPlaceholder":true},"rating":3,"review":"Personally, I like the minimalist style, but I wouldn&#39;t choose it if I were searching for a computer that I would use frequently. It&#39;s not horrible in terms of speed and power, but the","status":{"title":"Pending","badge":"warning","icon":"clock"},"time":"Nov 09, 3:23 AM"}'></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="{{ url('apps/e-commerce/landing/product-details') }}"><img src="{{ asset('assets/img/products/60x60/4.png') }}" alt="" width="53"></a></td>
                      <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="{{ url('apps/e-commerce/landing/product-details') }}">Apple iMac 24&quot; 4K Retina Display M1 8 Core CPU...</a></td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="{{ url('apps/e-commerce/landing/profile') }}">
                          <div class="avatar avatar-l"><img class="rounded-circle avatar-placeholder" src="{{ asset('assets/img/team/40x40/avatar.webp') }}" alt=""></div>
                          <h6 class="mb-0 ms-3 text-body">Eric McGee</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs-9 fw-semibold text-body-highlight mb-0">Personally, I like the minimalist style, but I wouldn't choose it if I were searching for a computer that I would use frequently. It's...<a href='#!'>See more</a></p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-body-highlight mb-0">Nov 09, 3:23 AM</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                            <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                          </div>
                        </div>
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle ps-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Razer Kraken v3 x Wired 7.1 Surroung Sound Gaming headset","productImage":"/products/60x60/5.png","customer":{"name":"Kim Carroll","avatar":"/team/40x40/avatar.webp","avatarPlaceholder":true},"rating":4,"review":"It performs exactly as expected. There are three of these in the family.","status":{"title":"Pending","badge":"warning","icon":"clock"},"time":"Nov 09, 2:15 PM"}'></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="{{ url('apps/e-commerce/landing/product-details') }}"><img src="{{ asset('assets/img/products/60x60/5.png') }}" alt="" width="53"></a></td>
                      <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="{{ url('apps/e-commerce/landing/product-details') }}">Razer Kraken v3 x Wired 7.1 Surroung Sound Gam...</a></td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="{{ url('apps/e-commerce/landing/profile') }}">
                          <div class="avatar avatar-l"><img class="rounded-circle avatar-placeholder" src="{{ asset('assets/img/team/40x40/avatar.webp') }}" alt=""></div>
                          <h6 class="mb-0 ms-3 text-body">Kim Carroll</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs-9 fw-semibold text-body-highlight mb-0">It performs exactly as expected. There are three of these in the family.</p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-body-highlight mb-0">Nov 09, 2:15 PM</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                            <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                          </div>
                        </div>
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle ps-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"PlayStation 5 DualSense Wireless Controller","productImage":"/products/60x60/6.png","customer":{"name":"Barbara Lucas","avatar":"/team/40x40/57.webp"},"rating":4,"review":"The controller is quite comfy for me. Despite its increased size, the controller still fits well in my hands.","status":{"title":"Approved","badge":"success","icon":"check"},"time":"Nov 08, 8:53 AM"}'></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="{{ url('apps/e-commerce/landing/product-details') }}"><img src="{{ asset('assets/img/products/60x60/6.png') }}" alt="" width="53"></a></td>
                      <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="{{ url('apps/e-commerce/landing/product-details') }}">PlayStation 5 DualSense Wireless Controller</a></td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="{{ url('apps/e-commerce/landing/profile') }}">
                          <div class="avatar avatar-l"><img class="rounded-circle" src="{{ asset('assets/img/team/40x40/57.webp') }}" alt=""></div>
                          <h6 class="mb-0 ms-3 text-body">Barbara Lucas</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs-9 fw-semibold text-body-highlight mb-0">The controller is quite comfy for me. Despite its increased size, the controller still fits well in my hands.</p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Approved</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-body-highlight mb-0">Nov 08, 8:53 AM</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                            <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                          </div>
                        </div>
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle ps-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) - Space Gray","productImage":"/products/60x60/7.png","customer":{"name":"Ansolo Lazinatov","avatar":"/team/40x40/3.webp"},"rating":4.5,"review":"The response time and service I received when contacted the designers were Phenomenal!","status":{"title":"Pending","badge":"warning","icon":"clock"},"time":"Nov 07, 9:00 PM"}'></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="{{ url('apps/e-commerce/landing/product-details') }}"><img src="{{ asset('assets/img/products/60x60/7.png') }}" alt="" width="53"></a></td>
                      <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="{{ url('apps/e-commerce/landing/product-details') }}">2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) -...</a></td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="{{ url('apps/e-commerce/landing/profile') }}">
                          <div class="avatar avatar-l"><img class="rounded-circle" src="{{ asset('assets/img/team/40x40/3.webp') }}" alt=""></div>
                          <h6 class="mb-0 ms-3 text-body">Ansolo Lazinatov</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt star-icon text-warning"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs-9 fw-semibold text-body-highlight mb-0">The response time and service I received when contacted the designers were Phenomenal!</p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-body-highlight mb-0">Nov 07, 9:00 PM</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                            <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                          </div>
                        </div>
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle ps-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Amazon Basics Matte Black Wired Keyboard - US Layout (QWERTY)","productImage":"/products/60x60/8.png","customer":{"name":"Emma watson","avatar":"/team/40x40/26.webp"},"rating":3,"review":"I have started using this theme in the last week and it has really impressed me very much, the support is second to none.","status":{"title":"Pending","badge":"warning","icon":"clock"},"time":"Nov 07, 11:20 AM"}'></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="{{ url('apps/e-commerce/landing/product-details') }}"><img src="{{ asset('assets/img/products/60x60/8.png') }}" alt="" width="53"></a></td>
                      <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="{{ url('apps/e-commerce/landing/product-details') }}">Amazon Basics Matte Black Wired Keyboard - US ...</a></td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="{{ url('apps/e-commerce/landing/profile') }}">
                          <div class="avatar avatar-l"><img class="rounded-circle" src="{{ asset('assets/img/team/40x40/26.webp') }}" alt=""></div>
                          <h6 class="mb-0 ms-3 text-body">Emma watson</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs-9 fw-semibold text-body-highlight mb-0">I have started using this theme in the last week and it has really impressed me very much, the support is second to none.</p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-body-highlight mb-0">Nov 07, 11:20 AM</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                            <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                          </div>
                        </div>
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle ps-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Amazon Basics Mesh, Mid-Back, Swivel Office Desk Chair with Armrests, Black","productImage":"/products/60x60/9.png","customer":{"name":"Rowen Atkinson","avatar":"/team/40x40/29.webp"},"rating":5,"review":"The best experience we could hope for. Customer service team is amazing and the quality of their products is unsurpassed. Great theme too!","status":{"title":"Approved","badge":"success","icon":"check"},"time":"Nov 07, 2:00 PM"}'></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="{{ url('apps/e-commerce/landing/product-details') }}"><img src="{{ asset('assets/img/products/60x60/9.png') }}" alt="" width="53"></a></td>
                      <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="{{ url('apps/e-commerce/landing/product-details') }}">Amazon Basics Mesh, Mid-Back, Swivel Office De...</a></td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="{{ url('apps/e-commerce/landing/profile') }}">
                          <div class="avatar avatar-l"><img class="rounded-circle" src="{{ asset('assets/img/team/40x40/29.webp') }}" alt=""></div>
                          <h6 class="mb-0 ms-3 text-body">Rowen Atkinson</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs-9 fw-semibold text-body-highlight mb-0">The best experience we could hope for. Customer service team is amazing and the quality of their products is unsurpassed. Great theme ...<a href='#!'>See more</a></p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Approved</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-body-highlight mb-0">Nov 07, 2:00 PM</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                            <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                          </div>
                        </div>
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle ps-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Apple Magic Mouse (Wireless, Rechargable) - Silver","productImage":"/products/60x60/10.png","customer":{"name":"Anthony Hopkins","avatar":""},"rating":4,"review":"This template has allowed me to convert my existing web app into a great looking, easy to use UI in less than 2 weeks. Very easy to use and understand and has a wide range of ready to use elements. ","status":{"title":"Approved","badge":"success","icon":"check"},"time":"Nov 06, 8:00 AM"}'></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="{{ url('apps/e-commerce/landing/product-details') }}"><img src="{{ asset('assets/img/products/60x60/10.png') }}" alt="" width="53"></a></td>
                      <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="{{ url('apps/e-commerce/landing/product-details') }}">Apple Magic Mouse (Wireless, Rechargable) - Si...</a></td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="{{ url('apps/e-commerce/landing/profile') }}">
                          <div class="avatar avatar-l">
                            <div class="avatar-name rounded-circle"><span>A</span></div>
                          </div>
                          <h6 class="mb-0 ms-3 text-body">Anthony Hopkins</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs-9 fw-semibold text-body-highlight mb-0">This template has allowed me to convert my existing web app into a great looking, easy to use UI in less than 2 weeks. Very easy to us...<a href='#!'>See more</a></p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Approved</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-body-highlight mb-0">Nov 06, 8:00 AM</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                            <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                          </div>
                        </div>
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle ps-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Echo Dot (4th Gen) _ Smart speaker with Alexa _ Glacier White","productImage":"/products/60x60/11.png","customer":{"name":"Jennifer Schramm","avatar":"/team/40x40/8.webp"},"rating":4.5,"review":"The theme is really beautiful and the support answer very quickly and is friendly. Buy it, you will not regret it.","status":{"title":"Pending","badge":"warning","icon":"clock"},"time":"Nov 05, 4:00 AM"}'></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="{{ url('apps/e-commerce/landing/product-details') }}"><img src="{{ asset('assets/img/products/60x60/11.png') }}" alt="" width="53"></a></td>
                      <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="{{ url('apps/e-commerce/landing/product-details') }}">Echo Dot (4th Gen) _ Smart speaker with Alexa ...</a></td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="{{ url('apps/e-commerce/landing/profile') }}">
                          <div class="avatar avatar-l"><img class="rounded-circle" src="{{ asset('assets/img/team/40x40/8.webp') }}" alt=""></div>
                          <h6 class="mb-0 ms-3 text-body">Jennifer Schramm</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt star-icon text-warning"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs-9 fw-semibold text-body-highlight mb-0">The theme is really beautiful and the support answer very quickly and is friendly. Buy it, you will not regret it.</p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-body-highlight mb-0">Nov 05, 4:00 AM</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                            <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                          </div>
                        </div>
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle ps-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"HORI Racing Wheel Apex for PlayStation 4_3, and PC","productImage":"/products/60x60/12.png","customer":{"name":"Raymond Mims","avatar":"/team/40x40/avatar.webp","avatarPlaceholder":true},"rating":4,"review":"As others mentioned, the team behind this theme is super responsive. I sent a message during the weekend, fully expecting a response after the weekend, but I got one within minutes, and I was unblocked.","status":{"title":"Approved","badge":"success","icon":"check"},"time":"Nov 04, 6:53 PM"}'></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="{{ url('apps/e-commerce/landing/product-details') }}"><img src="{{ asset('assets/img/products/60x60/12.png') }}" alt="" width="53"></a></td>
                      <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="{{ url('apps/e-commerce/landing/product-details') }}">HORI Racing Wheel Apex for PlayStation 4_3, an...</a></td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="{{ url('apps/e-commerce/landing/profile') }}">
                          <div class="avatar avatar-l"><img class="rounded-circle avatar-placeholder" src="{{ asset('assets/img/team/40x40/avatar.webp') }}" alt=""></div>
                          <h6 class="mb-0 ms-3 text-body">Raymond Mims</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs-9 fw-semibold text-body-highlight mb-0">As others mentioned, the team behind this theme is super responsive. I sent a message during the weekend, fully expecting a response a...<a href='#!'>See more</a></p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Approved</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-body-highlight mb-0">Nov 04, 6:53 PM</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                            <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                          </div>
                        </div>
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle ps-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Nintendo Switch with Neon Blue and Neon Red Joy‑Con - HAC-001(-01)","productImage":"/products/60x60/13.png","customer":{"name":"Michael Jenkins","avatar":"/team/40x40/9.webp"},"rating":5,"review":"I had a bit of a hard time at first but after I contacted the team they were able to help me set up the theme. It&#39;s really good and I highly recommend it to everyone.","status":{"title":"Pending","badge":"warning","icon":"clock"},"time":"Nov 04, 12:00 PM"}'></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="{{ url('apps/e-commerce/landing/product-details') }}"><img src="{{ asset('assets/img/products/60x60/13.png') }}" alt="" width="53"></a></td>
                      <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="{{ url('apps/e-commerce/landing/product-details') }}">Nintendo Switch with Neon Blue and Neon Red Jo...</a></td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="{{ url('apps/e-commerce/landing/profile') }}">
                          <div class="avatar avatar-l"><img class="rounded-circle" src="{{ asset('assets/img/team/40x40/9.webp') }}" alt=""></div>
                          <h6 class="mb-0 ms-3 text-body">Michael Jenkins</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs-9 fw-semibold text-body-highlight mb-0">I had a bit of a hard time at first but after I contacted the team they were able to help me set up the theme. It's really good and I ...<a href='#!'>See more</a></p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-body-highlight mb-0">Nov 04, 12:00 PM</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                            <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                          </div>
                        </div>
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle ps-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Oculus Rift S PC-Powered VR Gaming Headset","productImage":"/products/60x60/14.png","customer":{"name":"Kristine Cadena","avatar":"/team/40x40/avatar.webp","avatarPlaceholder":true},"rating":5,"review":"Excellent. All my doubts were answered by the team quickly. I highly recommend it.","status":{"title":"Pending","badge":"warning","icon":"clock"},"time":"Nov 03, 8:53 AM"}'></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="{{ url('apps/e-commerce/landing/product-details') }}"><img src="{{ asset('assets/img/products/60x60/14.png') }}" alt="" width="53"></a></td>
                      <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="{{ url('apps/e-commerce/landing/product-details') }}">Oculus Rift S PC-Powered VR Gaming Headset</a></td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="{{ url('apps/e-commerce/landing/profile') }}">
                          <div class="avatar avatar-l"><img class="rounded-circle avatar-placeholder" src="{{ asset('assets/img/team/40x40/avatar.webp') }}" alt=""></div>
                          <h6 class="mb-0 ms-3 text-body">Kristine Cadena</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs-9 fw-semibold text-body-highlight mb-0">Excellent. All my doubts were answered by the team quickly. I highly recommend it.</p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-body-highlight mb-0">Nov 03, 8:53 AM</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                            <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                          </div>
                        </div>
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs-9 align-middle ps-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Sony X85J 75 Inch Sony 4K Ultra HD LED Smart Google TV","productImage":"/products/60x60/15.png","customer":{"name":"Suzanne Martinez","avatar":"/team/40x40/24.webp"},"rating":3.5,"review":"This theme is great. Clean and easy to understand. Perfect for those who don&#39;t have time to start everything from scratch. The support is simply phenomenal! Highly recommended!","status":{"title":"Approved","badge":"success","icon":"check"},"time":"Nov 03, 10:43 AM"}'></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border border-translucent" href="{{ url('apps/e-commerce/landing/product-details') }}"><img src="{{ asset('assets/img/products/60x60/15.png') }}" alt="" width="53"></a></td>
                      <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="{{ url('apps/e-commerce/landing/product-details') }}">Sony X85J 75 Inch Sony 4K Ultra HD LED Smart G...</a></td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body" href="{{ url('apps/e-commerce/landing/profile') }}">
                          <div class="avatar avatar-l"><img class="rounded-circle" src="{{ asset('assets/img/team/40x40/24.webp') }}" alt=""></div>
                          <h6 class="mb-0 ms-3 text-body">Suzanne Martinez</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt star-icon text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs-9 fw-semibold text-body-highlight mb-0">This theme is great. Clean and easy to understand. Perfect for those who don't have time to start everything from scratch. The support...<a href='#!'>See more</a></p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Approved</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-body-highlight mb-0">Nov 03, 10:43 AM</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span class="fas fa-check"></span></button>
                            <button class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                          </div>
                        </div>
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="row align-items-center py-1">
                <div class="pagination d-none"></div>
                <div class="col d-flex fs-9">
                  <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less</a>
                </div>
                <div class="col-auto d-flex">
                  <button class="btn btn-link px-1 me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left me-2"></span>Previous</button>
                  <button class="btn btn-link px-1 ms-1" type="button" title="Next" data-list-pagination="next">Next<span class="fas fa-chevron-right ms-2"></span></button>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex mb-5 pt-7" id="scrollspyEcommerce"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fa-inverse fa-stack-1x text-primary-subtle fas fa-cart-plus" data-fa-transform="shrink-4"></i></span>
            <div class="col">
              <h3 class="mb-0 text-primary position-relative fw-bold"><span class="bg-body pe-2">E-commerce</span><span class="border border-primary position-absolute top-50 translate-middle-y w-100 start-0 z-n1"></span></h3>
              <p class="mb-0">Find more cards which are dedicatedly made for E-commerce.</p>
            </div>
          </div>
          <div>
            <h3 class="mb-3">Cart</h3>
            <div id="cartTable" data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":10}'>
              <div class="table-responsive scrollbar mx-n1 px-1">
                <table class="table fs-9 mb-0 border-top border-translucent">
                  <thead>
                    <tr>
                      <th class="sort white-space-nowrap align-middle fs-10" scope="col"></th>
                      <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:250px;">PRODUCTS</th>
                      <th class="sort align-middle" scope="col" style="width:80px;">COLOR</th>
                      <th class="sort align-middle" scope="col" style="width:150px;">SIZE</th>
                      <th class="sort align-middle text-end" scope="col" style="width:300px;">PRICE</th>
                      <th class="sort align-middle ps-5" scope="col" style="width:200px;">QUANTITY</th>
                      <th class="sort align-middle text-end" scope="col" style="width:250px;">TOTAL</th>
                      <th class="sort text-end align-middle pe-0" scope="col"></th>
                    </tr>
                  </thead>
                  <tbody class="list" id="cart-table-body">
                    <tr class="cart-table-row btn-reveal-trigger">
                      <td class="align-middle white-space-nowrap py-0"><a class="d-block border border-translucent rounded-2" href="{{ url('apps/e-commerce/landing/product-details') }}"><img src="{{ asset('assets/img/products/1.png') }}" alt="" width="53"></a></td>
                      <td class="products align-middle"><a class="fw-semibold mb-0 line-clamp-2" href="{{ url('apps/e-commerce/landing/product-details') }}">Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management &amp; Skin Temperature Trends, Carbon/Graphite, One Size (S &amp; L Bands)</a></td>
                      <td class="color align-middle white-space-nowrap fs-9 text-body">Glossy black</td>
                      <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">XL</td>
                      <td class="price align-middle text-body fs-9 fw-semibold text-end">$199</td>
                      <td class="quantity align-middle fs-8 ps-5">
                        <div class="input-group input-group-sm flex-nowrap" data-quantity="data-quantity"><button class="btn btn-sm px-2" data-type="minus">-</button><input class="form-control text-center input-spin-none bg-transparent border-0 px-0" type="number" min="1" value="2" aria-label="Amount (to the nearest dollar)"><button class="btn btn-sm px-2" data-type="plus">+</button></div>
                      </td>
                      <td class="total align-middle fw-bold text-body-highlight text-end">$398</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-3"><button class="btn btn-sm text-body-tertiary text-opacity-85 text-body-tertiary-hover me-2"><span class="fas fa-trash"></span></button></td>
                    </tr>
                    <tr class="cart-table-row btn-reveal-trigger">
                      <td class="align-middle white-space-nowrap py-0"><a class="d-block border border-translucent rounded-2" href="{{ url('apps/e-commerce/landing/product-details') }}"><img src="{{ asset('assets/img/products/2.png') }}" alt="" width="53"></a></td>
                      <td class="products align-middle"><a class="fw-semibold mb-0 line-clamp-2" href="{{ url('apps/e-commerce/landing/product-details') }}">iPhone 13 pro max-Pacific Blue-128GB storage</a></td>
                      <td class="color align-middle white-space-nowrap fs-9 text-body">Glossy black</td>
                      <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">XL</td>
                      <td class="price align-middle text-body fs-9 fw-semibold text-end">$150</td>
                      <td class="quantity align-middle fs-8 ps-5">
                        <div class="input-group input-group-sm flex-nowrap" data-quantity="data-quantity"><button class="btn btn-sm px-2" data-type="minus">-</button><input class="form-control text-center input-spin-none bg-transparent border-0 px-0" type="number" min="1" value="2" aria-label="Amount (to the nearest dollar)"><button class="btn btn-sm px-2" data-type="plus">+</button></div>
                      </td>
                      <td class="total align-middle fw-bold text-body-highlight text-end">$300</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-3"><button class="btn btn-sm text-body-tertiary text-opacity-85 text-body-tertiary-hover me-2"><span class="fas fa-trash"></span></button></td>
                    </tr>
                    <tr class="cart-table-row btn-reveal-trigger">
                      <td class="align-middle white-space-nowrap py-0"><a class="d-block border border-translucent rounded-2" href="{{ url('apps/e-commerce/landing/product-details') }}"><img src="{{ asset('assets/img/products/3.png') }}" alt="" width="53"></a></td>
                      <td class="products align-middle"><a class="fw-semibold mb-0 line-clamp-2" href="{{ url('apps/e-commerce/landing/product-details') }}">Apple MacBook Pro 13 inch-M1-8/256GB-space</a></td>
                      <td class="color align-middle white-space-nowrap fs-9 text-body">Glossy Golden</td>
                      <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">34mm</td>
                      <td class="price align-middle text-body fs-9 fw-semibold text-end">$65</td>
                      <td class="quantity align-middle fs-8 ps-5">
                        <div class="input-group input-group-sm flex-nowrap" data-quantity="data-quantity"><button class="btn btn-sm px-2" data-type="minus">-</button><input class="form-control text-center input-spin-none bg-transparent border-0 px-0" type="number" min="1" value="2" aria-label="Amount (to the nearest dollar)"><button class="btn btn-sm px-2" data-type="plus">+</button></div>
                      </td>
                      <td class="total align-middle fw-bold text-body-highlight text-end">$130</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-3"><button class="btn btn-sm text-body-tertiary text-opacity-85 text-body-tertiary-hover me-2"><span class="fas fa-trash"></span></button></td>
                    </tr>
                    <tr class="cart-table-row btn-reveal-trigger">
                      <td class="text-body-emphasis fw-semibold ps-0 fs-8" colspan="6">Items subtotal :</td>
                      <td class="text-body-emphasis fw-bold text-end fs-8">$691</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="my-6">
            <div class="row g-5">
              <div class="col-xl-8">
                <h3 class="mb-5">Payment Method</h3>
                <div class="row g-4 mb-7">
                  <div class="col-12">
                    <div class="row gx-lg-11">
                      <div class="col-md-auto">
                        <div class="form-check"><input class="form-check-input" id="creditCard" type="radio" name="paymentMethod" checked="checked"><label class="form-check-label fs-8 text-body text-nowrap d-flex gap-2" for="creditCard">Credit card<img class="h-100" src="{{ asset('assets/img/logos/visa.png') }}" alt=""><img class="h-100" src="{{ asset('assets/img/logos/discover.png') }}" alt=""><img class="h-100" src="{{ asset('assets/img/logos/mastercard.png') }}" alt=""><img class="h-100" src="{{ asset('assets/img/logos/american_express.png') }}" alt=""></label></div>
                      </div>
                      <div class="col-12 col-md-auto">
                        <div class="form-check"><input class="form-check-input" id="paypal" type="radio" name="paymentMethod"><label class="form-check-label fs-8 text-body" for="paypal">Paypal </label></div>
                      </div>
                      <div class="col-12 col-md-auto">
                        <div class="form-check"><input class="form-check-input" id="coupon" type="radio" name="paymentMethod"><label class="form-check-label fs-8 text-body" for="coupon">Coupon </label></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6"><label class="form-label fs-8 text-body-highlight ps-0 text-transform-none" for="selectCard">Select card</label><select class="form-select text-body-emphasis" id="selectCard">
                      <option selected="selected">Select a card</option>
                      <option value="visa">Visa</option>
                      <option value="discover">Discover</option>
                      <option value="mastercard">Mastercard</option>
                      <option value="american-express">American Express</option>
                    </select></div>
                  <div class="col-md-6"><label class="form-label fs-8 text-body-highlight ps-0 text-transform-none" for="inputCardNumber">Card number</label><input class="form-control" id="inputCardNumber" type="number" placeholder="Enter card number" aria-label="Card number"></div>
                  <div class="col-12"><label class="form-label fs-8 text-body-highlight ps-0 text-transform-none" for="inputName">Full name</label><input class="form-control" id="inputName" type="text" placeholder="Ansolo Lazinatov" aria-label="Full name"></div>
                  <div class="col-md-6"><label class="form-label fs-8 text-body-highlight ps-0 text-transform-none">Expires on</label>
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
                  <div class="col-md-6"><label class="form-label fs-8 text-body-highlight ps-0 text-transform-none" for="inputCardCVC">CVC</label><input class="form-control" id="inputCardCVC" type="number" placeholder="Enter a valid CVC" aria-label="CVC"></div>
                  <div class="col-12">
                    <div class="form-check"><input class="form-check-input" id="gridCheck" type="checkbox"><label class="form-check-label text-body-emphasis fs-8" for="gridCheck">Save Card Details</label></div>
                  </div>
                </div>
                <div class="row g-2 mb-5 mb-lg-0">
                  <div class="col-md-8 col-lg-9 d-grid"><button class="btn btn-primary" type="submit">Pay $695.20</button></div>
                  <div class="col-md-4 col-lg-3 d-grid"><button class="btn btn-phoenix-secondary text-nowrap" type="submit">Save Order and Exit</button></div>
                </div>
              </div>
              <div class="col-xl-4">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-between-center mb-3">
                      <h3 class="card-title mb-0">Summary</h3><a class="btn btn-link p-0" href="#!">Edit cart </a>
                    </div><select class="form-select mb-3" aria-label="delivery type">
                      <option value="cod">Cash on Delivery</option>
                      <option value="card">Card</option>
                      <option value="paypal">Paypal</option>
                    </select>
                    <div>
                      <div class="d-flex justify-content-between">
                        <p class="text-body fw-semibold">Items subtotal :</p>
                        <p class="text-body-emphasis fw-semibold">$691</p>
                      </div>
                      <div class="d-flex justify-content-between">
                        <p class="text-body fw-semibold">Discount :</p>
                        <p class="text-danger fw-semibold">-$59</p>
                      </div>
                      <div class="d-flex justify-content-between">
                        <p class="text-body fw-semibold">Tax :</p>
                        <p class="text-body-emphasis fw-semibold">$126.20</p>
                      </div>
                      <div class="d-flex justify-content-between">
                        <p class="text-body fw-semibold">Subtotal :</p>
                        <p class="text-body-emphasis fw-semibold">$665</p>
                      </div>
                      <div class="d-flex justify-content-between">
                        <p class="text-body fw-semibold">Shipping Cost :</p>
                        <p class="text-body-emphasis fw-semibold">$30</p>
                      </div>
                    </div>
                    <div class="input-group mb-3"><input class="form-control" type="text" placeholder="Voucher"><button class="btn btn-phoenix-primary px-5">Apply</button></div>
                    <div class="d-flex justify-content-between border-y border-dashed py-3 mb-4">
                      <h4 class="mb-0">Total :</h4>
                      <h4 class="mb-">$695.20</h4>
                    </div><button class="btn btn-primary w-100">Proceed to check out<span class="fas fa-chevron-right ms-1 fs-10"></span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-6">
            <div class="col-xl-6">
              <h3 class="mb-5">Delivery Type</h3>
              <div class="row gy-6">
                <div class="col-12 col-md-6">
                  <div class="d-flex flex-wrap align-items-center mb-3">
                    <div class="form-check mb-0"><input class="form-check-input" type="radio" name="shippingRadio" id="free_shipping"><label class="form-check-label fs-8 text-body" for="free_shipping">Free Shipping</label></div><span class="d-inline-block text-body-emphasis fw-bold ms-2">$0.00</span>
                  </div>
                  <div class="ps-4">
                    <h6 class="text-body-tertiary mb-2">Est. delivery: Jun 21 – Jul 20</h6>
                    <h6 class="text-info lh-base mb-0">Get Free Shipped products in Time!</h6>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="d-flex flex-wrap align-items-center mb-3">
                    <div class="form-check mb-0"><input class="form-check-input" type="radio" name="shippingRadio" id="two_days_shipping"><label class="form-check-label fs-8 text-body" for="two_days_shipping">Two days Shipping</label></div><span class="d-inline-block text-body-emphasis fw-bold ms-2">$20.00</span>
                  </div>
                  <div class="ps-4">
                    <h6 class="text-body-tertiary mb-2">Est. delivery: Jun 21 – Jul 20</h6>
                    <h6 class="text-info lh-base mb-0">Everything faster with minimum shipping fee.</h6>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="d-flex flex-wrap align-items-center mb-3">
                    <div class="form-check mb-0"><input class="form-check-input" type="radio" name="shippingRadio" id="standard_shipping"><label class="form-check-label fs-8 text-body" for="standard_shipping">Standard Shipping</label></div><span class="d-inline-block text-body-emphasis fw-bold ms-2">$10.00</span>
                  </div>
                  <div class="ps-4">
                    <h6 class="text-body-tertiary mb-2">Est. delivery: Jun 21 – Jul 20</h6>
                    <h6 class="text-info lh-base mb-0">Get timely delivery with economy shipping.</h6>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="d-flex flex-wrap align-items-center mb-3">
                    <div class="form-check mb-0"><input class="form-check-input" type="radio" name="shippingRadio" checked="checked" id="one_day_shipping"><label class="form-check-label fs-8 text-body" for="one_day_shipping">One day Shipping</label></div><span class="d-inline-block text-body-emphasis fw-bold ms-2">$30.00</span><span class="badge badge-phoenix badge-phoenix-warning ms-2 ms-lg-4 ms-xl-2">Popular</span>
                  </div>
                  <div class="ps-4">
                    <h6 class="text-body-tertiary mb-2">Est. delivery: Jun 21 – Jul 20</h6>
                    <h6 class="text-info lh-base mb-0">Highest priority shipping at the lowest cost.</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <h3>Billing Details</h3>
              <div class="form-check"><input class="form-check-input" id="sameAsShipping" type="checkbox" checked="checked"><label class="form-check-label fs-8 fw-normal" for="sameAsShipping">Same as shipping address
                </label></div>
              <table class="table table-borderless mt-4">
                <tbody>
                  <tr>
                    <td class="py-2 ps-0">
                      <div class="d-flex"><span class="fs-3 me-2" data-feather="user" style="height:16px; width:16px;"> </span>
                        <h5 class="lh-sm me-4">Name</h5>
                      </div>
                    </td>
                    <td class="py-2 fw-bold lh-sm">:</td>
                    <td class="py-2 px-3">
                      <h5 class="lh-sm fw-normal text-body-secondary">Shatinon Mekalan</h5>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-2 ps-0">
                      <div class="d-flex"><span class="fs-3 me-2" data-feather="home" style="height:16px; width:16px;"> </span>
                        <h5 class="lh-sm me-4">Address</h5>
                      </div>
                    </td>
                    <td class="py-2 fw-bold lh-sm">:</td>
                    <td class="py-2 px-3">
                      <h5 class="lh-lg fw-normal text-body-secondary">Apt: 6/B, 192 Edsel Road, Van Nuys <br> California, USA 96580</h5>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-2 ps-0">
                      <div class="d-flex"><span class="fs-3 me-2" data-feather="phone" style="height:16px; width:16px;"> </span>
                        <h5 class="lh-sm me-4">Phone</h5>
                      </div>
                    </td>
                    <td class="py-2 fw-bold lh-sm">:</td>
                    <td class="py-2 px-3">
                      <h5 class="lh-sm fw-normal text-body-secondary">818-414-4092</h5>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="d-flex mb-5 pt-7" id="scrollspyUsers"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fa-inverse fa-stack-1x text-primary-subtle fas fa-user-friends" data-fa-transform="shrink-4"></i></span>
            <div class="col">
              <h3 class="mb-0 text-primary position-relative fw-bold"><span class="bg-body pe-2">Users &amp; Feed</span><span class="border border-primary position-absolute top-50 translate-middle-y w-100 start-0 z-n1"></span></h3>
              <p class="mb-0">User engagement and personalized content presentation.</p>
            </div>
          </div>
          <div class="card mb-5">
            <div class="card-header d-flex justify-content-center align-items-end position-relative mb-7 mb-xxl-0" style="min-height: 214px; ">
              <div class="hover-actions-trigger position-static">
                <div class="bg-holder rounded-top" style="background-image:url({{ asset('assets/img/generic/cover-photo.png') }});"></div><input class="d-none" id="upload-cover-image" type="file"><label class="cover-image-file-input" for="upload-cover-image"></label>
                <div class="hover-actions end-0 bottom-0 pe-1 pb-2 text-white"><span class="fa-solid fa-camera me-2 overlay-icon"></span></div>
                <!--/.bg-holder-->
              </div><input class="d-none" id="upload-porfile-picture" type="file">
              <div class="hoverbox feed-profile" style="width: 150px; height: 150px">
                <div class="hoverbox-content rounded-circle d-flex flex-center z-1" style="--phoenix-bg-opacity: .56;"><span class="fa-solid fa-camera fs-3 text-secondary-light"></span></div>
                <div class="position-relative bg-body-quaternary rounded-circle cursor-pointer d-flex flex-center mb-xxl-7">
                  <div class="avatar avatar-5xl"><img class="rounded-circle rounded-circle img-thumbnail shadow-sm border-0" src="{{ asset('assets/img/team/9.webp') }}" alt=""></div><label class="w-100 h-100 position-absolute z-1" for="upload-porfile-picture"></label>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row justify-content-xl-between">
                <div class="col-auto">
                  <div class="d-flex flex-wrap mb-3 align-items-center">
                    <h2 class="me-2">Erza Bridgest</h2><span class="fw-semibold fs-7 text-body-emphasis">u/hansolo</span>
                  </div>
                  <div class="mb-5">
                    <div class="d-md-flex align-items-center">
                      <div class="d-flex align-items-center"><span class="fa-solid fa-user-group fs-9 text-body-tertiary me-2 me-lg-1 me-xl-2"></span><a class="text-body-emphasis" href="#!"><span class="fs-7 fw-bold text-body-tertiary text-opacity-85 text-body-emphasis-hover">1297 <span class="fw-semibold ms-1 me-4">Followers</span></span></a></div>
                      <div class="d-flex align-items-center"><span class="fa-solid fa-user-check fs-9 text-body-tertiary me-2 me-lg-1 me-xl-2"></span><a class="text-body-emphasis" href="#!"><span class="fs-7 fw-bold text-body-tertiary text-opacity-85 text-body-emphasis-hover">3971 <span class="fw-semibold ms-1 me-4">Following</span></span></a></div>
                      <div class="d-flex align-items-center"><span class="fa-solid fa-location-dot fs-9 text-body-tertiary me-2 me-lg-1 me-xl-2"></span><a class="text-body-emphasis" href="#!"><span class="fs-7 fw-semibold text-body-tertiary text-opacity-85 text-body-emphasis-hover">Vancouver, Lothal</span></a></div>
                    </div>
                  </div>
                  <p class="fs-6 text-body-secondary">“Whenever you find yourself on the side of the majority, it is time to pause and reflect.”</p>
                </div>
                <div class="col-auto">
                  <div class="row g-2">
                    <div class="col-auto order-xxl-2"><button class="btn btn-primary lh-1"><span class="fa-solid fa-user-plus me-2"></span>Follow Request</button></div>
                    <div class="col-auto order-xxl-1"><button class="btn btn-phoenix-primary lh-1"><span class="fa-solid fa-message me-2"></span>Send Message</button></div>
                    <div class="col-auto">
                      <div class="position-static"><button class="btn btn-phoenix-secondary lh-1" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-chevron-down me-2"></span> More</button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item d-xl-none" href="#!"><span class="fa-solid fa-user-group text-body-secondary me-2"></span><span>Followers</span></a><a class="dropdown-item d-xl-none" href="#!"><span class="fa-solid fa-users text-body-secondary me-2"></span><span>Communities</span></a><a class="dropdown-item d-xl-none" href="#!"><span class="fa-solid fa-photo-film text-body-secondary me-2"></span><span>Media Files</span></a><a class="dropdown-item d-xl-none" href="#!"><span class="fa-solid fa-calendar-days fs-8 text-body-secondary me-2"></span><span> Events</span></a><a class="dropdown-item d-xl-none" href="#!"><span class="fa-solid fa-dice text-body-secondary me-2"></span><span>Games</span></a><a class="dropdown-item d-xl-none" href="#!"><span class="fa-solid fa-user-gear text-body-secondary me-2"></span><span>Settings</span></a><a class="dropdown-item" href="#!"><span class="fa-solid fa-bell-slash text-body-secondary me-2"></span><span>Mute Conversation</span></a><a class="dropdown-item" href="#!"><span class="fa-solid fa-gear text-body-secondary me-2"></span><span>Manage Settings</span></a><a class="dropdown-item" href="#!"><span class="fa-solid fa-hand-holding-heart text-body-secondary me-2"></span><span>Get help</span></a><a class="dropdown-item" href="#!"><span class="fa-solid fa-flag text-body-secondary me-2"></span><span>Report Account</span></a><a class="dropdown-item" href="#!"><span class="fa-solid fa-ban text-body-secondary me-2"></span><span>Block Account</span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row gx-5">
            <div class="col-xxl-8">
              <div class="mb-5">
                <div class="card mb-4">
                  <div class="card-body p-3 p-sm-4">
                    <div class="border-bottom border-translucent mb-3">
                      <div class="d-flex align-items-center mb-3"><a href="{{ url('apps/social/profile') }}">
                          <div class="avatar avatar-xl  me-2">
                            <img class="rounded-circle " src="{{ asset('assets/img/team/59.webp') }}" alt="">
                          </div>
                        </a>
                        <div class="flex-1"><a class="fw-bold mb-0 text-body-emphasis" href="{{ url('apps/social/profile') }}">Zingko Kudobum</a>
                          <p class="fs-10 mb-0 text-body-tertiary text-opacity-85 fw-semibold">35 mins ago<span class="fa-solid fa-circle text-body-quaternary text-opacity-50" data-fa-transform="shrink-10 down-2"></span>Consett, UK<span class="fa-solid fa-circle text-body-quaternary text-opacity-50" data-fa-transform="shrink-10 down-2"></span><span class="fa-solid fa-earth-americas text-body"></span></p>
                        </div>
                        <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none d-flex btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                      <p class="text-body-secondary">Some paintings I love</p>
                      <div class="row g-1 mb-5">
                        <div class="col-3"><a href="{{ asset('assets/img/gallery/17.png') }}" data-gallery="gallery-posts-0"><img class="rounded h-100 w-100" src="{{ asset('assets/img/gallery/17.png') }}" alt="..."></a></div>
                        <div class="col-3"><a href="{{ asset('assets/img/gallery/18.png') }}" data-gallery="gallery-posts-0"><img class="rounded h-100 w-100" src="{{ asset('assets/img/gallery/18.png') }}" alt="..."></a></div>
                        <div class="col-6"><a href="{{ asset('assets/img/gallery/19.png') }}" data-gallery="gallery-posts-0"><img class="rounded h-100 w-100" src="{{ asset('assets/img/gallery/19.png') }}" alt="..."></a></div>
                      </div>
                    </div>
                    <div class="d-flex"><button class="btn btn-link p-0 me-3 fs-10 fw-bolder" type="button"><span class="fa-solid fa-heart me-1"></span>345 Likes</button>
                      <button class="btn btn-link text-body p-0 fs-10 me-3 fw-bolder" type="button"><span class="fa-solid fa-comment me-1"></span>45 Comments</button>
                      <button class="btn btn-link text-body p-0 fs-10 me-2 fw-bolder" type="button"><span class="fa-solid fa-share me-1"></span>56 Shares</button>
                    </div>
                  </div>
                  <div class="bg-body-highlight border-top border-translucent p-3 p-sm-4">
                    <div class="d-flex align-items-start"><a href="{{ url('apps/social/profile') }}">
                        <div class="avatar avatar-m  me-2">
                          <img class="rounded-circle " src="{{ asset('assets/img/team/23.webp') }}" alt="">
                        </div>
                      </a>
                      <div class="flex-1">
                        <div class="d-flex align-items-center"><a class="fw-bold mb-0 text-body-emphasis" href="{{ url('apps/social/profile') }}">Mamur Fechetti</a><span class="text-body-tertiary text-opacity-85 fw-semibold fs-10 ms-2">35 mins ago</span></div>
                        <p class="mb-0">How long did it take to create this? It appears that you quickly produced the second one.</p><button class="btn btn-link p-0 text-body fw-bolder mb-2" type="button"><span class="fa-solid fa-reply fs-10 me-1"></span><span class="fw-bold fs-10">Reply</span></button>
                        <div class="d-flex align-items-start mb-3"><a href="{{ url('apps/social/profile') }}">
                            <div class="avatar avatar-m  me-2">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/62.webp') }}" alt="">
                            </div>
                          </a>
                          <div class="flex-1">
                            <div class="d-flex align-items-center"><a class="fw-bold mb-0 text-body-emphasis" href="{{ url('apps/social/profile') }}">Zingko Kudobum</a><span class="text-body-tertiary text-opacity-85 fw-semibold fs-10 ms-2">5 mins ago</span></div>
                            <p class="mb-0">I am so clever that sometimes I don't understand a single word of what I am saying.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex align-items-center"><a href="{{ url('apps/social/profile') }}">
                        <div class="avatar avatar-m  me-2">
                          <img class="rounded-circle " src="{{ asset('assets/img/team/59.webp') }}" alt="">
                        </div>
                      </a>
                      <div class="flex-1"><input class="form-control" type="text" placeholder="Add comment"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-4">
              <div class="row g-0 py-3 border-bottom border-dashed align-items-end justify-content-between">
                <div class="col-auto">
                  <h3 class="flex-1 mb-0 text-nowrap me-3">Upcoming events</h3>
                </div>
                <div class="col-auto"><a class="fw-bold fs-9" href="#!">See more</a></div>
              </div>
              <div class="py-3 border-bottom border-translucent border-dashed">
                <div class="d-flex flex-between-center">
                  <p class="text-warning fs-10 mb-0 fw-bold mb-1">MON, FEB 21- MARCH 23</p>
                  <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none d-flex btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                  </div>
                </div><a class="text-primary-hover text-body-highlight fw-bold mb-2 line-clamp-1 me-5 lh-base" href="#!">Master Class on FILM Studies THESIS on Makers</a>
                <p class="text-body-secondary fs-9 mb-2">Organized by <br><a class="fw-bold text-primary" href="#!">IAFM- International Academy of Film and Media</a></p>
                <p class="fs-10 text-body-tertiary text-opacity-85">64 people going</p>
                <p class="fs-9 text-body-tertiary fw-bold mb-1"><span class="fa-solid fa-clock text-body-secondary me-1"></span>12.30PM - 10PM</p>
                <p class="fs-9 text-body-tertiary fw-bold mb-0"><span class="fa-solid fa-map-marker-alt text-body-secondary me-1"></span>Tavern on the Greend, New York</p>
              </div>
              <div class="py-3 border-bottom border-translucent border-dashed">
                <div class="d-flex flex-between-center">
                  <p class="text-warning fs-10 mb-0 fw-bold mb-1">MON, FEB 21- MARCH 23</p>
                  <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none d-flex btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                  </div>
                </div><a class="text-primary-hover text-body-highlight fw-bold mb-2 line-clamp-1 me-5 lh-base" href="#!">Master Class on FILM Studies 'ANALYSIS of Cinema'</a>
                <p class="text-body-secondary fs-9 mb-2">Organized by <br><a class="fw-bold text-primary" href="#!">IAFM- International Academy of Film and Media</a></p>
                <p class="fs-10 text-body-tertiary text-opacity-85">64 people going</p>
                <p class="fs-9 text-body-tertiary fw-bold mb-1"><span class="fa-solid fa-clock text-body-secondary me-1"></span>12.30PM - 10PM</p>
                <p class="fs-9 text-body-tertiary fw-bold mb-0"><span class="fa-solid fa-map-marker-alt text-body-secondary me-1"></span>Tavern on the Greend, New York</p>
              </div>
              <div class="py-3 border-bottom border-translucent border-dashed">
                <div class="d-flex flex-between-center">
                  <p class="text-warning fs-10 mb-0 fw-bold mb-1">MON, FEB 21- MARCH 23</p>
                  <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none d-flex btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                  </div>
                </div><a class="text-primary-hover text-body-highlight fw-bold mb-2 line-clamp-1 me-5 lh-base" href="#!">Witnessing History in Making Photographs</a>
                <p class="text-body-secondary fs-9 mb-2">Organized by <br><a class="fw-bold text-primary" href="#!">IAFM- International Academy of Film and Media</a></p>
                <p class="fs-10 text-body-tertiary text-opacity-85">64 people going</p>
                <p class="fs-9 text-body-tertiary fw-bold mb-1"><span class="fa-solid fa-clock text-body-secondary me-1"></span>12.30PM - 10PM</p>
                <p class="fs-9 text-body-tertiary fw-bold mb-0"><span class="fa-solid fa-map-marker-alt text-body-secondary me-1"></span>Tavern on the Greend, New York</p>
              </div>
            </div>
          </div>
          <div class="row g-5">
            <div class="col-xxl-8">
              <div class="card mb-0">
                <div class="card-body">
                  <h1 class="lh-sm fs-6 fs-xxl-4 mb-2">Brandmyth presents- Shironamhin 25 years celebration with symphony orchestra</h1>
                  <p class="fs-8 mb-4 text-body-tertiary">Tavern on the Greend, New York</p>
                  <div class="card mb-5 mb-xxl-7">
                    <div class="card-body">
                      <div class="row gy-5">
                        <div class="col-md-6 d-flex justify-content-between">
                          <div>
                            <div class="mb-3">
                              <div class="d-flex align-items-center">
                                <div class="px-2 py-1 bg-info-subtle rounded"><span class="text-info" data-feather="map-pin"></span></div>
                                <h5 class="ms-2 text-body-emphasis mb-0">Location</h5>
                              </div>
                            </div>
                            <p class="lh-sm mb-0 text-body-tertiary">36/4A, James Tiberius Auditorium,<br>Vancouver, British Columbia, Canada </p>
                          </div>
                          <div class="my-4 mx-3 border-start border-translucent d-none d-md-block"></div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-3">
                            <div class="d-flex align-items-center">
                              <div class="px-2 py-1 bg-primary-subtle rounded"><span class="text-primary" data-feather="clock"></span></div>
                              <h5 class="ms-2 mb-0">Date &amp; Time</h5>
                            </div>
                          </div>
                          <p class="lh-sm mb-0 text-body-tertiary">28th June - 2nd July 2022,<br>10 am - 4 pm Eastern Daylight Time</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col-12 col-md-auto flex-md-grow-1"><button class="btn btn-primary w-100" type="button">Get Tickets</button></div>
                    <div class="col-12 col-sm-auto flex-sm-grow-1 flex-md-grow-0"><button class="btn btn-phoenix-primary w-100" type="button"><span class="fa-regular fa-calendar-plus me-2"></span>Add to Calendar </button></div>
                    <div class="col-6 col-sm-auto"><button class="btn btn-phoenix-primary w-100" type="button"><span class="fa-solid fa-heart me-2"></span>3677</button></div>
                    <div class="col-6 col-sm-auto"><button class="btn btn-phoenix-primary w-100" type="button"><span class="fa-solid fa-share-nodes me-2"></span>4467</button></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-4">
              <div class="card h-100">
                <div class="card-header hover-actions-trigger position-relative mb-7" style="min-height: 130px; ">
                  <div class="bg-holder rounded-top" style="background-image: linear-gradient(0deg, #000000 -3%, rgba(0, 0, 0, 0) 83%), url({{ asset('assets/img/generic/59.png') }})"><input class="d-none" id="upload-feed-cover-image" type="file"><label class="cover-image-file-input" for="upload-feed-cover-image"></label>
                    <div class="hover-actions end-0 bottom-0 pe-1 pb-2 text-white dark__text-gray-1100"><span class="fa-solid fa-camera me-2 overlay-icon"> </span></div>
                  </div><input class="d-none" id="upload-feed-porfile-picture" type="file"><label class="avatar avatar-4xl status-online feed-avatar-profile cursor-pointer" for="upload-feed-porfile-picture"><img class="rounded-circle img-thumbnail shadow-sm border-0" src="{{ asset('assets/img/team/59.webp') }}" width="200" alt=""></label>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <div class="d-flex flex-wrap mb-3 align-items-center">
                        <h3 class="me-2">Ansolo Lazinatov</h3><span class="fw-normal fs-8">u/hansolo</span>
                      </div>
                      <div class="mb-3">
                        <div class="d-flex align-items-center flex-wrap">
                          <div class="d-flex me-4 mb-2"><span class="fa-solid fa-user-group fs-10 me-2 me-lg-1 me-xl-2"></span>
                            <h6 class="d-inline-block mb-0">1297 <span class="fw-semibold">Followers</span></h6>
                          </div>
                          <div class="d-flex mb-2"><span class="fa-solid fa-user-check fs-10 me-2 me-lg-1 me-xl-2"></span>
                            <h6 class="d-block d-xl-inline-block mb-0"> 3971 <span class="fw-semibold">Following</span></h6>
                          </div>
                        </div>
                      </div>
                      <p class="fw-semibold mb-0">About me<a href="#!"><span class="fa-solid fa-pencil fs-10 text-body-quaternary ms-3"></span></a></p>
                      <p class="text-body-tertiary mb-0">“Le capitalisme exploite. Et le capitalisme exploite les gens de couleur. Comme il exploite les hommes. Ou comme il exploite les femmes.” </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-5">
            <div class="row g-5">
              <div class="col-xl-4">
                <div class="d-flex flex-between-center pb-3 border-bottom border-translucent border-dashed">
                  <h3 class="mb-0">Messages<span class="text-body-tertiary ms-2 fw-normal">(97)</span></h3>
                  <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none d-flex btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                  </div>
                </div>
                <div class="d-flex py-3 align-items-center border-bottom border-translucent border-dashed">
                  <div class="me-2">
                    <div class="avatar avatar-m status-online ">
                      <img class="rounded-circle " src="{{ asset('assets/img/team/35.webp') }}" alt="">
                    </div>
                  </div><a class="text-decoration-none flex-1" href="{{ url('apps/chat') }}">
                    <h5>Stanly Drinkwater</h5>
                    <p class="text-body-tertiary fw-semibold fs-9 mb-0 lh-sm line-clamp-1">When you gonna pay me back, don’t leave me hanging</p>
                  </a>
                </div>
                <div class="d-flex py-3 align-items-center border-bottom border-translucent border-dashed">
                  <div class="me-2">
                    <div class="avatar avatar-m status-online ">
                      <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}" alt="">
                    </div>
                  </div><a class="text-decoration-none flex-1" href="{{ url('apps/chat') }}">
                    <h5>Milind Mikuja</h5>
                    <p class="text-body-tertiary fw-semibold fs-9 mb-0 lh-sm line-clamp-1">But the mare fact that she said that makes</p>
                  </a>
                </div>
                <div class="d-flex py-3 align-items-center border-bottom border-translucent border-dashed">
                  <div class="me-2">
                    <div class="avatar avatar-m status-online ">
                      <img class="rounded-circle avatar-placeholder" src="{{ asset('assets/img/team/avatar.webp') }}" alt="">
                    </div>
                  </div><a class="text-decoration-none flex-1" href="{{ url('apps/chat') }}">
                    <h5>Josef Stravinsky</h5>
                    <p class="text-body-tertiary fw-semibold fs-9 mb-0 lh-sm line-clamp-1">Oi Cult.</p>
                  </a>
                </div>
                <div class="d-flex py-3 align-items-center border-bottom border-translucent border-dashed">
                  <div class="me-2">
                    <div class="avatar avatar-m status-online ">
                      <img class="rounded-circle " src="{{ asset('assets/img/team/59.webp') }}" alt="">
                    </div>
                  </div><a class="text-decoration-none flex-1" href="{{ url('apps/chat') }}">
                    <h5>Martina scorcese</h5>
                    <p class="text-body-tertiary fw-semibold fs-9 mb-0 lh-sm line-clamp-1">Thanks for that. Sincerely.</p>
                  </a>
                </div>
                <div class="d-flex py-3 align-items-center border-bottom border-translucent border-dashed">
                  <div class="me-2">
                    <div class="avatar avatar-m status-online ">
                      <img class="rounded-circle " src="{{ asset('assets/img/team/57.webp') }}" alt="">
                    </div>
                  </div><a class="text-decoration-none flex-1" href="{{ url('apps/chat') }}">
                    <h5>Meekona Zikon</h5>
                    <p class="text-body-tertiary fw-semibold fs-9 mb-0 lh-sm line-clamp-1">I am Outside, Come here, Lets smoke...</p>
                  </a>
                </div>
              </div>
              <div class="col-xl-4">
                <div class="d-flex pb-4 align-items-end">
                  <h3 class="flex-1 mb-0">Photos</h3><a class="fw-bold fs-9 me-4" href="#!">Albums</a><a class="fw-bold fs-9" href="#!">See all</a>
                </div>
                <div class="row g-3">
                  <div class="col-4"><a href="{{ asset('assets/img/gallery/11.png') }}" data-gallery="gallery-photos"><img class="w-100 rounded-3" src="{{ asset('assets/img/gallery/11.png') }}" alt=""></a></div>
                  <div class="col-4"><a href="{{ asset('assets/img/gallery/12.png') }}" data-gallery="gallery-photos"><img class="w-100 rounded-3" src="{{ asset('assets/img/gallery/12.png') }}" alt=""></a></div>
                  <div class="col-4"><a href="{{ asset('assets/img/gallery/13.png') }}" data-gallery="gallery-photos"><img class="w-100 rounded-3" src="{{ asset('assets/img/gallery/13.png') }}" alt=""></a></div>
                  <div class="col-4"><a href="{{ asset('assets/img/gallery/14.png') }}" data-gallery="gallery-photos"><img class="w-100 rounded-3" src="{{ asset('assets/img/gallery/14.png') }}" alt=""></a></div>
                  <div class="col-4"><a href="{{ asset('assets/img/gallery/15.png') }}" data-gallery="gallery-photos"><img class="w-100 rounded-3" src="{{ asset('assets/img/gallery/15.png') }}" alt=""></a></div>
                  <div class="col-4"><a href="{{ asset('assets/img/gallery/16.png') }}" data-gallery="gallery-photos"><img class="w-100 rounded-3" src="{{ asset('assets/img/gallery/16.png') }}" alt=""></a></div>
                </div>
              </div>
              <div class="col-xl-4">
                <div class="row g-0">
                  <div class="col-6 border-1 border-bottom border-translucent border-end py-2"> <a class="btn btn-link ps-2 fs-8 text-body-secondary text-primary-hover fw-semibold d-flex flex-column d-xxl-inline-block" href="#!"><span class="fa-solid fa-user-group me-2 mb-2 mb-xxl-0"></span>Followers</a></div>
                  <div class="col-6 border-1 border-bottom border-translucent py-2"><a class="btn btn-link fs-8 text-body-secondary text-primary-hover fw-semibold d-flex flex-column d-xxl-inline-block" href="#!"><span class="fa-solid fa-users me-2 mb-2 mb-xxl-0"></span>Communities</a></div>
                  <div class="col-6 border-1 border-bottom border-translucent border-end py-2"><a class="btn btn-link ps-2 fs-8 text-body-secondary text-primary-hover fw-semibold d-flex flex-column d-xxl-inline-block" href="#!"><span class="fa-solid fa-photo-film me-2 mb-2 mb-xxl-0"></span>Media Files</a></div>
                  <div class="col-6 border-1 border-bottom border-translucent py-2"><a class="btn btn-link fs-8 text-body-secondary text-primary-hover fw-semibold d-flex flex-column d-xxl-inline-block" href="#!"><span class="fa-solid fa-calendar-days me-2 mb-2 mb-xxl-0"></span>Events</a></div>
                  <div class="col-6 border-1 border-end border-translucent py-2"><a class="btn btn-link ps-2 fs-8 text-body-secondary text-primary-hover fw-semibold d-flex flex-column d-xxl-inline-block" href="#!"><span class="fa-solid fa-dice me-2 mb-2 mb-xxl-0"></span>Games</a></div>
                  <div class="col-6 border-1 py-2"><a class="btn btn-link fs-8 text-body-secondary text-primary-hover fw-semibold d-flex flex-column d-xxl-inline-block" href="#!"><span class="fa-solid fa-user-gear me-2 mb-2 mb-xxl-0"></span>Settings </a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex mb-5 pt-7" id="scrollspyForms"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fa-inverse fa-stack-1x text-primary-subtle fas fa-file-alt" data-fa-transform="shrink-2"></i></span>
            <div class="col">
              <h3 class="mb-0 text-primary position-relative fw-bold"><span class="bg-body pe-2">Forms</span><span class="border border-primary position-absolute top-50 translate-middle-y w-100 start-0 z-n1"></span></h3>
              <p class="mb-0">Get different types of data from the user by using Phoenix's customizable form.</p>
            </div>
          </div>
          <div class="row g-5 mb-5">
            <div class="col-12 col-xl-8">
              <h4 class="mb-3">Product Title</h4><input class="form-control mb-5" type="text" placeholder="Write title here...">
              <div class="mb-6">
                <h4 class="mb-3"> Product Description</h4><textarea class="tinymce" name="content" data-tinymce='{"height":"15rem","placeholder":"Write a description here..."}'></textarea>
              </div>
              <h4 class="mb-3">Display images</h4>
              <div class="dropzone dropzone-multiple p-0 mb-5" id="my-awesome-dropzone" data-dropzone="data-dropzone">
                <div class="fallback"><input name="file" type="file" multiple="multiple"></div>
                <div class="dz-preview d-flex flex-wrap">
                  <div class="border border-translucent bg-body-emphasis rounded-3 d-flex flex-center position-relative me-2 mb-2" style="height:80px;width:80px;"><img class="dz-image" src="{{ asset('assets/img/products/23.png') }}" alt="..." data-dz-thumbnail="data-dz-thumbnail"><a class="dz-remove text-body-quaternary" href="#!" data-dz-remove="data-dz-remove"><span data-feather="x"></span></a></div>
                </div>
                <div class="dz-message text-body-tertiary text-opacity-85" data-dz-message="data-dz-message">Drag your photo here<span class="text-body-secondary px-1">or</span><button class="btn btn-link p-0" type="button">Browse from device</button><br><img class="mt-3 me-2" src="{{ asset('assets/img/icons/image-icon.png') }}" width="40" alt=""></div>
              </div>
              <h4 class="mb-3">Inventory</h4>
              <div class="row g-0 border-top border-bottom">
                <div class="col-sm-4">
                  <div class="nav flex-sm-column border-bottom border-bottom-sm-0 border-end-sm fs-9 vertical-tab h-100 justify-content-between" role="tablist" aria-orientation="vertical"><a class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center active" id="pricingTab" data-bs-toggle="tab" data-bs-target="#pricingTabContent" role="tab" aria-controls="pricingTabContent" aria-selected="true"> <span class="me-sm-2 fs-4 nav-icons" data-feather="tag"></span><span class="d-none d-sm-inline">Pricing</span></a><a class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="restockTab" data-bs-toggle="tab" data-bs-target="#restockTabContent" role="tab" aria-controls="restockTabContent" aria-selected="false"> <span class="me-sm-2 fs-4 nav-icons" data-feather="package"></span><span class="d-none d-sm-inline">Restock</span></a><a class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="shippingTab" data-bs-toggle="tab" data-bs-target="#shippingTabContent" role="tab" aria-controls="shippingTabContent" aria-selected="false"> <span class="me-sm-2 fs-4 nav-icons" data-feather="truck"></span><span class="d-none d-sm-inline">Shipping</span></a><a class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="productsTab" data-bs-toggle="tab" data-bs-target="#productsTabContent" role="tab" aria-controls="productsTabContent" aria-selected="false"> <span class="me-sm-2 fs-4 nav-icons" data-feather="globe"></span><span class="d-none d-sm-inline">Global Delivery</span></a><a class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="attributesTab" data-bs-toggle="tab" data-bs-target="#attributesTabContent" role="tab" aria-controls="attributesTabContent" aria-selected="false"> <span class="me-sm-2 fs-4 nav-icons" data-feather="sliders"></span><span class="d-none d-sm-inline">Attributes</span></a><a class="nav-link text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="advancedTab" data-bs-toggle="tab" data-bs-target="#advancedTabContent" role="tab" aria-controls="advancedTabContent" aria-selected="false"> <span class="me-sm-2 fs-4 nav-icons" data-feather="lock"></span><span class="d-none d-sm-inline">Advanced</span></a></div>
                </div>
                <div class="col-sm-8">
                  <div class="tab-content py-3 ps-sm-4 h-100">
                    <div class="tab-pane fade show active" id="pricingTabContent" role="tabpanel">
                      <h4 class="mb-3 d-sm-none">Pricing</h4>
                      <div class="row g-3">
                        <div class="col-12 col-lg-6">
                          <h5 class="mb-2 text-body-highlight">Regular price</h5><input class="form-control" type="text" placeholder="$$$">
                        </div>
                        <div class="col-12 col-lg-6">
                          <h5 class="mb-2 text-body-highlight">Sale price</h5><input class="form-control" type="text" placeholder="$$$">
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade h-100" id="restockTabContent" role="tabpanel" aria-labelledby="restockTab">
                      <div class="d-flex flex-column h-100">
                        <h5 class="mb-3 text-body-highlight">Add to Stock</h5>
                        <div class="row g-3 flex-1 mb-4">
                          <div class="col-sm-7"><input class="form-control" type="number" placeholder="Quantity"></div>
                          <div class="col-sm"><button class="btn btn-primary" type="button"><span class="fa-solid fa-check me-1 fs-10"></span>Confirm</button></div>
                        </div>
                        <table>
                          <thead>
                            <tr>
                              <th style="width: 200px;"></th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-body-highlight fw-bold py-1">Product in stock now:</td>
                              <td class="text-body-tertiary fw-semibold py-1">$1,090<button class="btn p-0" type="button"><span class="fa-solid fa-rotate text-body ms-1" style="--phoenix-text-opacity: .6;"></span></button></td>
                            </tr>
                            <tr>
                              <td class="text-body-highlight fw-bold py-1">Product in transit:</td>
                              <td class="text-body-tertiary fw-semibold py-1">5000</td>
                            </tr>
                            <tr>
                              <td class="text-body-highlight fw-bold py-1">Last time restocked:</td>
                              <td class="text-body-tertiary fw-semibold py-1">30th June, 2021</td>
                            </tr>
                            <tr>
                              <td class="text-body-highlight fw-bold py-1">Total stock over lifetime:</td>
                              <td class="text-body-tertiary fw-semibold py-1">20,000</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="tab-pane fade h-100" id="shippingTabContent" role="tabpanel" aria-labelledby="shippingTab">
                      <div class="d-flex flex-column h-100">
                        <h5 class="mb-3 text-body-highlight">Shipping Type</h5>
                        <div class="flex-1">
                          <div class="mb-4">
                            <div class="form-check mb-1"><input class="form-check-input" type="radio" name="shippingRadio" id="fullfilledBySeller"><label class="form-check-label fs-8 text-body" for="fullfilledBySeller">Fullfilled by Seller</label></div>
                            <div class="ps-4">
                              <p class="text-body-secondary fs-9 mb-0">You’ll be responsible for product delivery. <br>Any damage or delay during shipping may cost you a Damage fee.</p>
                            </div>
                          </div>
                          <div class="mb-4">
                            <div class="form-check mb-1"><input class="form-check-input" type="radio" name="shippingRadio" id="fullfilledByPhoenix" checked="checked"><label class="form-check-label fs-8 text-body d-flex align-items-center" for="fullfilledByPhoenix">Fullfilled by Phoenix <span class="badge badge-phoenix badge-phoenix-warning fs-10 ms-2">Recommended</span></label></div>
                            <div class="ps-4">
                              <p class="text-body-secondary fs-9 mb-0">Your product, Our responsibility.<br>For a measly fee, we will handle the delivery process for you.</p>
                            </div>
                          </div>
                        </div>
                        <p class="fs-9 fw-semibold mb-0">See our <a class="fw-bold" href="#!">Delivery terms and conditions </a>for details.</p>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="productsTabContent" role="tabpanel" aria-labelledby="productsTab">
                      <h5 class="mb-3 text-body-highlight">Global Delivery</h5>
                      <div class="mb-3">
                        <div class="form-check"><input class="form-check-input" type="radio" name="deliveryRadio" id="worldwideDelivery"><label class="form-check-label fs-8 text-body" for="worldwideDelivery">Worldwide delivery</label></div>
                        <div class="ps-4">
                          <p class="fs-9 mb-0 text-body-secondary">Only available with Shipping method: <a href="#!">Fullfilled by Phoenix</a></p>
                        </div>
                      </div>
                      <div class="mb-3">
                        <div class="form-check"><input class="form-check-input" type="radio" name="deliveryRadio" checked="checked" id="selectedCountry"><label class="form-check-label fs-8 text-body" for="selectedCountry">Selected Countries</label></div>
                        <div class="ps-4" style="max-width: 350px;"><select class="form-select ps-4" id="organizerMultiple" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option value="">Type Country name</option>
                            <option>United States of America</option>
                            <option>United Kingdom</option>
                            <option>Canada</option>
                            <option>Mexico</option>
                          </select></div>
                      </div>
                      <div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="deliveryRadio" id="localDelivery"><label class="form-check-label fs-8 text-body" for="localDelivery">Local delivery</label></div>
                        <p class="fs-9 ms-4 mb-0 text-body-secondary">Deliver to your country of residence <a href="#!">Change profile address </a></p>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="attributesTabContent" role="tabpanel" aria-labelledby="attributesTab">
                      <h5 class="mb-3 text-body-highlight">Attributes</h5>
                      <div class="form-check"><input class="form-check-input" id="fragileCheck" type="checkbox"><label class="form-check-label text-body fs-8" for="fragileCheck">Fragile Product</label></div>
                      <div class="form-check"><input class="form-check-input" id="biodegradableCheck" type="checkbox"><label class="form-check-label text-body fs-8" for="biodegradableCheck">Biodegradable</label></div>
                      <div class="mb-3">
                        <div class="form-check"><input class="form-check-input" id="frozenCheck" type="checkbox" checked="checked"><label class="form-check-label text-body fs-8" for="frozenCheck">Frozen Product</label><input class="form-control" type="text" placeholder="Max. allowed Temperature" style="max-width: 350px;"></div>
                      </div>
                      <div class="form-check"><input class="form-check-input" id="productCheck" type="checkbox" checked="checked"><label class="form-check-label text-body fs-8" for="productCheck">Expiry Date of Product</label><input class="form-control inventory-attributes datetimepicker" id="inventory" type="text" style="max-width: 350px;" placeholder="d/m/y" data-options='{"disableMobile":true}'></div>
                    </div>
                    <div class="tab-pane fade" id="advancedTabContent" role="tabpanel" aria-labelledby="advancedTab">
                      <h5 class="mb-3 text-body-highlight">Advanced</h5>
                      <div class="row g-3">
                        <div class="col-12 col-lg-6">
                          <h5 class="mb-2 text-body-highlight">Product ID Type</h5><select class="form-select" aria-label="form-select-lg example">
                            <option selected="selected">ISBN</option>
                            <option value="1">UPC</option>
                            <option value="2">EAN</option>
                            <option value="3">JAN</option>
                          </select>
                        </div>
                        <div class="col-12 col-lg-6">
                          <h5 class="mb-2 text-body-highlight">Product ID</h5><input class="form-control" type="text" placeholder="ISBN Number">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="row g-2">
                <div class="col-12 col-xl-12">
                  <div class="card mb-3">
                    <div class="card-body">
                      <h4 class="card-title mb-4">Organize</h4>
                      <div class="row gx-3">
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="mb-4">
                            <div class="d-flex flex-wrap flex-between-center mb-2">
                              <h5 class="mb-0 text-body-highlight me-2">Category</h5><a class="fw-bold fs-9" href="#!">Add new category</a>
                            </div><select class="form-select mb-3" aria-label="category">
                              <option value="men-cloth">Men's Clothing</option>
                              <option value="women-cloth">Womens's Clothing</option>
                              <option value="kid-cloth">Kid's Clothing</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="mb-4">
                            <div class="d-flex flex-wrap flex-between-center mb-2">
                              <h5 class="mb-0 text-body-highlight me-2">Vendor</h5><a class="fw-bold fs-9" href="#!">Add new vendor</a>
                            </div><select class="form-select mb-3" aria-label="category">
                              <option value="men-cloth">Men's Clothing</option>
                              <option value="women-cloth">Womens's Clothing</option>
                              <option value="kid-cloth">Kid's Clothing</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="mb-4">
                            <div class="d-flex flex-wrap mb-2 flex-between-center">
                              <h5 class="mb-2 text-body-highlight">Collection</h5><a class="fw-bold fs-9" href="#!">Add new collection</a>
                            </div><input class="form-control mb-xl-3" type="text" placeholder="Collection">
                          </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="d-flex flex-wrap flex-between-center mb-2">
                            <h5 class="mb-0 text-body-highlight me-2">Tags</h5><a class="fw-bold fs-9 lh-sm" href="#!">View all tags</a>
                          </div><select class="form-select" aria-label="category">
                            <option value="men-cloth">Men's Clothing</option>
                            <option value="women-cloth">Womens's Clothing</option>
                            <option value="kid-cloth">Kid's Clothing</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-xl-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title mb-4">Variants</h4>
                      <div class="row g-3">
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="border-bottom border-translucent border-dashed border-sm-0 border-bottom-xl pb-4">
                            <div class="d-flex flex-wrap flex-between-center mb-2">
                              <h5 class="text-body-highlight me-2">Option 1</h5><a class="fw-bold fs-9" href="#!">Remove</a>
                            </div><select class="form-select mb-3">
                              <option value="size">Size</option>
                              <option value="color">Color</option>
                              <option value="weight">Weight</option>
                              <option value="smell">Smell</option>
                            </select>
                            <div class="product-variant-select-menu"><select class="form-select mb-3" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                                <option value="size">4x6 in</option>
                                <option value="color">9x6 in</option>
                                <option value="weight">11x8 in</option>
                              </select></div>
                          </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="d-flex flex-wrap flex-between-center mb-2">
                            <h5 class="text-body-highlight me-2">Option 2</h5><a class="fw-bold fs-9" href="#!">Remove</a>
                          </div><select class="form-select mb-3">
                            <option value="size">Size</option>
                            <option value="color">Color</option>
                            <option value="weight">Weight</option>
                            <option value="smell">Smell</option>
                          </select>
                          <div class="product-variant-select-menu mb-3"><select class="form-select mb-3" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                              <option value="size">4x6 in</option>
                              <option value="color">9x6 in</option>
                              <option value="weight">11x8 in</option>
                            </select></div>
                        </div>
                      </div><button class="btn btn-phoenix-primary w-100" type="button">Add another option</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-5">
            <div class="col-xxl-6">
              <div class="card">
                <div class="card-body">
                  <form class="d-flex flex-column h-100">
                    <div class="row g-3 mb-2">
                      <div class="col-4"><input class="form-control" type="email" placeholder="To"></div>
                      <div class="col-4"><input class="form-control" type="email" placeholder="CC"></div>
                      <div class="col-4"><input class="form-control" type="email" placeholder="BCC"></div>
                      <div class="col-12"><input class="form-control" type="text" placeholder="Subject"></div>
                    </div>
                    <div class="mb-3 flex-1"><textarea class="tinymce email-textarea" name="content" data-tinymce='{"height":"100%"}'></textarea></div>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex"><label class="btn btn-link py-0 px-2 text-body fs-9" for="emailAttachment"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" id="emailAttachment" type="file"><label class="btn btn-link py-0 px-2 text-body fs-9" for="emailPhotos"><span class="fa-solid fa-image"></span></label><input class="d-none" id="emailPhotos" type="file" accept="image/*"></div>
                      <div class="d-flex"><button class="btn btn-link text-body fs-10 text-decoration-none">Discard</button>
                        <button class="btn btn-primary fs-10" type="submit">Send<span class="fa-solid fa-paper-plane ms-1"></span></button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-xxl-6">
              <div class="row gx-3 gy-4">
                <h4 class="fs-7 mb-0">Event Details</h4>
                <div class="col-sm-6 col-md-12">
                  <div class="form-floating"><input class="form-control" id="floatingEventInput" type="text" placeholder="Event title"><label for="floatingEventInput">Event title</label></div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="form-floating"><select class="form-select" id="floatingSelectTask">
                      <option selected="selected">Select event type</option>
                      <option value="1">technical</option>
                      <option value="2">external</option>
                      <option value="3">organizational</option>
                    </select><label for="floatingSelectTask">type</label></div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="form-floating"><select class="form-select" id="floatingSelectPrivacy">
                      <option selected="selected">Select topic</option>
                      <option value="1">Data select topic One</option>
                      <option value="2">Data select topic Two</option>
                      <option value="3">Data select topic Three</option>
                    </select><label for="floatingSelectPrivacy">topic</label></div>
                </div>
                <div class="col-12 mt-4">
                  <div class="form-check form-check-inline"><input class="form-check-input" id="inlineRadio1" type="radio" name="inlineRadioOptions" value="option1" checked="checked"><label class="form-check-label" for="inlineRadio1">Online</label></div>
                  <div class="form-check form-check-inline"><input class="form-check-input" id="inlineRadio2" type="radio" name="inlineRadioOptions" value="option2"><label class="form-check-label" for="inlineRadio2">Offline</label></div>
                  <div class="form-check form-check-inline"><input class="form-check-input" id="inlineRadio3" type="radio" name="inlineRadioOptions" value="option3"><label class="form-check-label" for="inlineRadio3">Both</label></div>
                </div>
                <div class="col-sm-6 col-md-12 mt-md-0 mt-lg-1">
                  <div class="form-floating"><input class="form-control" id="floatingVenueInput" type="text" placeholder="Venue"><label for="floatingVenueInput">Venue</label></div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="form-floating"><select class="form-select" id="floatingSelectCountry">
                      <option selected="selected">Select Country</option>
                      <option value="1">Country One</option>
                      <option value="2">Country Two</option>
                      <option value="3">Country Three</option>
                    </select><label for="floatingSelectCountry">Country</label></div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="form-floating"><select class="form-select" id="floatingSelectState">
                      <option selected="selected">Select State </option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select><label for="floatingSelectState"> State</label></div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="form-floating"><select class="form-select" id="floatingSelectCity">
                      <option selected="selected">Select city</option>
                      <option value="1">Data Privacy One</option>
                      <option value="2">Data Privacy Two</option>
                      <option value="3">Data Privacy Three</option>
                    </select><label for="floatingSelectCity">City</label></div>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex mb-4 pt-7" id="scrollspyOthers"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fa-inverse fa-stack-1x text-primary-subtle fas fa-folder-plus" data-fa-transform="shrink-2"></i></span>
            <div class="col">
              <h3 class="mb-0 text-primary position-relative fw-bold"><span class="bg-body pe-2">Others</span><span class="border border-primary position-absolute top-50 translate-middle-y w-100 start-0 z-n1"></span></h3>
              <p class="mb-0">Get more awesome cards for showing your different types of content..</p>
            </div>
          </div>
          <div class="row g-3 mb-3">
            <div class="col-xl-6 col-xxl-5">
              <div class="card border h-100 w-100 overflow-hidden">
                <div class="bg-holder d-block bg-card" style="background-image:url({{ asset('assets/img/spot-illustrations/32.png') }});background-position: top right;"></div>
                <!--/.bg-holder-->
                <div class="d-dark-none">
                  <div class="bg-holder d-none d-sm-block d-xl-none d-xxl-block bg-card" style="background-image:url({{ asset('assets/img/spot-illustrations/21.png') }});background-position: bottom right; background-size: auto;"></div>
                  <!--/.bg-holder-->
                </div>
                <div class="d-light-none">
                  <div class="bg-holder d-none d-sm-block d-xl-none d-xxl-block bg-card" style="background-image:url({{ asset('assets/img/spot-illustrations/dark_21.png') }});background-position: bottom right; background-size: auto;"></div>
                  <!--/.bg-holder-->
                </div>
                <div class="card-body px-5 position-relative">
                  <div class="badge badge-phoenix fs-10 badge-phoenix-warning mb-4"><span class="fw-bold">Coming soon</span><span class="fa-solid fa-award ms-1"></span></div>
                  <h3 class="mb-5">Early bird gets the warm leads!</h3>
                  <p class="text-body-tertiary fw-semibold">Phoenix CRM Dashboard is coming to <br class="d-none d-sm-block">market soon for fulfilling your every <br class="d-none d-sm-block">CRM related needs. </p>
                </div>
                <div class="card-footer border-0 py-0 px-5 z-1">
                  <p class="text-body-tertiary fw-semibold">Follow <a href="https://themewagon.com/">ThemeWagon </a>at <br class="d-none d-xxl-block">Bootstrap Marketplace for updates.</p>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-xxl-7">
              <div class="card d-flex flex-column mb-5 h-100"><textarea class="form-control border-translucent rounded-bottom-0 border-0 flex-1 fs-8" rows="7" placeholder="Write something..."></textarea>
                <div class="card-footer p-3">
                  <div class="d-flex justify-content-between align-items-center"><button class="btn p-0 me-3"><span class="fa-solid fa-image fs-8"></span></button>
                    <button class="btn p-0 me-3"><span class="fa-solid fa-calendar-alt fs-8"></span></button>
                    <button class="btn p-0 me-3"><span class="fa-solid fa-map-marker-alt fs-8"></span></button>
                    <button class="btn p-0 me-3"><span class="fa-solid fa-tag fs-8"></span></button>
                    <div class="dropdown me-3 d-inline-block flex-1"><button class="btn p-0 dropdown-toggle dropdown-caret-none d-flex align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="fa-solid fa-globe-asia fs-8 me-1"></span><span class="me-1 lh-base d-none d-sm-block">Public</span><span class="fa-solid fa-caret-down fs-10 text-body-quaternary"></span></button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Public</a></li>
                        <li><a class="dropdown-item" href="#">Private</a></li>
                        <li><a class="dropdown-item" href="#">Draft</a></li>
                      </ul>
                    </div>
                    <div class="d-flex align-items-center"><button class="btn btn-primary btn-sm px-6 px-sm-8">Post</button></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-3">
            <div class="col-xl-4">
              <div class="row gy-3 h-100">
                <div class="col-12">
                  <div class="card mb-3 h-100">
                    <div class="card-body">
                      <h3 class="mb-4">Notes on Customer</h3><textarea class="form-control mb-3" rows="4"></textarea><button class="btn btn-phoenix-primary w-100 mb-4">Add Note</button>
                      <div class="fs-9 fw-semibold pb-4 mb-4 border-bottom border-dashed">
                        <p class="text-body-highlight mb-1">Gave us a nice feedback</p>
                        <div class="text-end">
                          <p class="text-body-tertiary text-opacity-85 mb-0">12 Nov, 2020</p>
                        </div>
                      </div>
                      <div class="fs-9 fw-semibold pb-4 mb-4 border-bottom border-dashed">
                        <p class="text-body-highlight mb-1">Customer added product to cart and then forgot to checkout. Later knocked the customer support to ask about update on shipping. Later, settled on “One day Shipping” though “Free delivery” was preferred. Overall good behavior.</p>
                        <div class="text-end">
                          <p class="text-body-tertiary text-opacity-85 mb-0">23 Dec, 2019</p>
                        </div>
                      </div>
                      <div class="fs-9 fw-semibold pb-4 mb-4 border-bottom border-dashed">
                        <p class="text-body-highlight mb-1">User of this support ticket won a 100% off coupon and received top-notch service from the technical support engineer. Along with providing a good review, user highly appreciated the team.</p>
                        <div class="text-end">
                          <p class="text-body-tertiary text-opacity-85 mb-0">2 Oct, 2019</p>
                        </div>
                      </div>
                      <div class="fs-9 fw-semibold">
                        <p class="text-body-highlight mb-1">Customer returned and bought 2 related items, which is currently being shipped. Customer chose “One day Shipping”. Additional notes were added regarding customised wrapping. Customer submitted positive review.</p>
                        <div class="text-end">
                          <p class="text-body-tertiary text-opacity-85 mb-0">26 Apr, 2019</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card mb-3 h-100">
                    <div class="card-body">
                      <div class="row align-items-center g-3">
                        <div class="col-12 col-sm-auto flex-1">
                          <h3 class="fw-bolder mb-2 line-clamp-1">Start-Up Growth Suite</h3>
                          <div class="d-flex align-items-center mb-4">
                            <h5 class="mb-0 me-4">USD $12,000.00</h5>
                            <h5 class="fw-semibold"><span class="d-inline-block lh-sm me-1" data-feather="grid" style="height:16px;width:16px;"></span><span class="d-inline-block lh-sm">Financial</span></h5>
                          </div>
                          <div class="d-md-flex d-xl-block align-items-center justify-content-between mb-5">
                            <div class="d-flex align-items-center mb-3 mb-md-0 mb-xl-3">
                              <div class="avatar avatar-xl me-3"><img class="rounded-circle" src="{{ asset('assets/img/team/72x72/58.webp') }}" alt=""></div>
                              <div>
                                <h5>Ansolo Lazinatov</h5>
                                <div class="dropdown"><a class="text-body-secondary dropdown-toggle text-decoration-none dropdown-caret-none" href="#!" data-bs-toggle="dropdown" aria-expanded="false"> Owner<span class="fa-solid fa-caret-down text-body-secondary fs-9 ms-2"></span></a>
                                  <div class="dropdown-menu shadow-sm" style="min-width:20rem">
                                    <div class="card position-relative border-0">
                                      <div class="card-body p-0">
                                        <div class="mx-3">
                                          <h4 class="mb-3 fw-bold">Switch ownership</h4>
                                          <h5 class="mb-3">Deal Owner</h5><select class="form-select mb-3" aria-label="Default select">
                                            <option selected="selected">Select</option>
                                            <option value="1">Jerry Seinfield</option>
                                            <option value="2">Anthoney Michael</option>
                                            <option value="3">Ansolo Lazinatov</option>
                                          </select>
                                          <div class="text-end"><button class="btn btn-link text-danger" type="button">Cancel</button>
                                            <button class="btn btn-sm btn-primary px-5" type="button">Save</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div><span class="badge badge-phoenix badge-phoenix-success me-2">Success</span><span class="badge badge-phoenix badge-phoenix-danger me-2">Lost</span><span class="badge badge-phoenix badge-phoenix-secondary">Close</span></div>
                          </div>
                          <div class="progress mb-2" style="height:5px">
                            <div class="progress-bar bg-primary-lighter" data-bs-theme="light" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0"> New</p>
                            <div><span class="d-inline-block lh-sm me-1" data-feather="clock" style="height:16px;width:16px;"></span><span class="d-inline-block lh-sm"> Dec 15, 05:00AM</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4">
              <div class="row gy-3 h-100">
                <div class="col-12">
                  <div class="card mb-3 h-100">
                    <div class="card-body d-flex flex-column justify-content-between pb-3">
                      <div class="row align-items-center g-5 mb-3 text-center text-sm-start">
                        <div class="col-12 col-sm-auto mb-sm-2">
                          <div class="avatar avatar-5xl"><img class="rounded-circle" src="{{ asset('assets/img/team/15.webp') }}" alt=""></div>
                        </div>
                        <div class="col-12 col-sm-auto flex-1">
                          <h3>Ansolo Lazinatov</h3>
                          <p class="text-body-secondary">Joined 3 months ago</p>
                          <div><a class="me-2" href="#!"><span class="fab fa-linkedin-in text-body-quaternary text-opacity-75 text-primary-hover"></span></a><a class="me-2" href="#!"><span class="fab fa-facebook text-body-quaternary text-opacity-75 text-primary-hover"></span></a><a href="#!"><span class="fab fa-twitter text-body-quaternary text-opacity-75 text-primary-hover"></span></a></div>
                        </div>
                      </div>
                      <div class="d-flex flex-between-center border-top border-dashed pt-4">
                        <div>
                          <h6>Following</h6>
                          <p class="fs-7 text-body-secondary mb-0">297</p>
                        </div>
                        <div>
                          <h6>Projects</h6>
                          <p class="fs-7 text-body-secondary mb-0">56</p>
                        </div>
                        <div>
                          <h6>Completion</h6>
                          <p class="fs-7 text-body-secondary mb-0">97</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card mb-3 h-100">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-3">
                        <h3 class="me-1">Default Address</h3><button class="btn btn-link p-0"><span class="fas fa-pen fs-8 ms-3 text-body-quaternary"></span></button>
                      </div>
                      <h5 class="text-body-secondary">Address</h5>
                      <p class="text-body-secondary">Shatinon Mekalan<br>Vancouver, British Columbia<br>Canada</p>
                      <div class="mb-3">
                        <h5 class="text-body-secondary">Email</h5><a href="mailto:shatinon@jeemail.com">shatinon@jeemail.com</a>
                      </div>
                      <h5 class="text-body-secondary">Phone</h5><a class="text-body-secondary" href="tel:+1234567890">+1234567890</a>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card mb-3 h-100">
                    <div class="card-body">
                      <h3 class="card-title mb-4">Summary</h3>
                      <div>
                        <div class="d-flex justify-content-between">
                          <p class="text-body fw-semibold">Items subtotal :</p>
                          <p class="text-body-emphasis fw-semibold">$691</p>
                        </div>
                        <div class="d-flex justify-content-between">
                          <p class="text-body fw-semibold">Discount :</p>
                          <p class="text-danger fw-semibold">-$59</p>
                        </div>
                        <div class="d-flex justify-content-between">
                          <p class="text-body fw-semibold">Tax :</p>
                          <p class="text-body-emphasis fw-semibold">$126.20</p>
                        </div>
                        <div class="d-flex justify-content-between">
                          <p class="text-body fw-semibold">Subtotal :</p>
                          <p class="text-body-emphasis fw-semibold">$665</p>
                        </div>
                        <div class="d-flex justify-content-between">
                          <p class="text-body fw-semibold">Shipping Cost :</p>
                          <p class="text-body-emphasis fw-semibold">$30</p>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between border-top border-translucent border-dashed pt-4">
                        <h4 class="mb-0">Total :</h4>
                        <h4 class="mb-0">$695.20</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4">
              <div class="row gy-3 h-100">
                <div class="col-12">
                  <div class="card mb-3 h-100">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-5">
                        <h3>About lead</h3><button class="btn btn-link px-3" type="button">Edit</button>
                      </div>
                      <div class="mb-4">
                        <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-envelope-alt">  </span>
                          <h5 class="text-body-highlight mb-0">Email</h5>
                        </div><a href="mailto:shatinon@jeemail.com:">ansolo5@jeemail.com</a>
                      </div>
                      <div class="mb-4">
                        <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-phone"> </span>
                          <h5 class="text-body-highlight mb-0">Phone</h5>
                        </div><a href="tel:+1234567890">+1234567890 </a>
                      </div>
                      <div class="mb-4">
                        <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-globe"></span>
                          <h5 class="text-body-highlight mb-0">Website</h5>
                        </div><a href="#!">www.bb.ru.com </a>
                      </div>
                      <div class="mb-4">
                        <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-building"></span>
                          <h5 class="text-body-highlight mb-0">Industry</h5>
                        </div>
                        <p class="mb-0 text-body-secondary">Large Enterprise</p>
                      </div>
                      <div class="mb-4">
                        <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-postcard"></span>
                          <h5 class="text-body-highlight mb-0">Number of employees</h5>
                        </div>
                        <p class="mb-0 text-body-secondary">126</p>
                      </div>
                      <div class="mb-4">
                        <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-dollar-alt"></span>
                          <h5 class="text-body-highlight mb-0">Annual Revenue</h5>
                        </div>
                        <p class="mb-0 text-body-secondary">$12000 </p>
                      </div>
                      <div class="mb-4">
                        <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-clock"></span>
                          <h5 class="text-body-highlight mb-0">Last contacted</h5>
                        </div>
                        <p class="mb-0 text-body-secondary">12 November 2021, 10:54 AM</p>
                      </div>
                      <div class="mb-4">
                        <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-file-check-alt"></span>
                          <h5 class="text-body-highlight mb-0">Lead source</h5>
                        </div>
                        <p class="mb-0 text-body-secondary">Advertisement</p>
                      </div>
                      <div>
                        <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-check-circle"></span>
                          <h5 class="text-body-highlight mb-0">Lead status</h5>
                        </div><span class="badge badge-phoenix badge-phoenix-primary">New Lead</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="row align-items-center g-3 text-center text-xxl-start">
                        <div class="col-12 col-xxl-auto">
                          <div class="avatar avatar-5xl"><img class="rounded-circle" src="{{ asset('assets/img/team/33.webp') }}" alt=""></div>
                        </div>
                        <div class="col-12 col-sm-auto flex-1">
                          <h3 class="fw-bolder mb-2">Ansolo Lazinatov</h3>
                          <p class="mb-0">Chief tech officer,</p><a class="fw-bold" href="#!">Blue Beetles</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/choices/choices.min.js') }}"></script>
<script src="{{ asset('vendors/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('vendors/dhtmlx-gantt/dhtmlxgantt.js') }}"></script>
<script src="{{ asset('vendors/glightbox/glightbox.min.js') }}"></script>
<script src="{{ asset('vendors/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('vendors/dropzone/dropzone-min.js') }}"></script>
<script src="{{ asset('vendors/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/js/dashboards/ecommerce-dashboard.js') }}"></script>
<script src="{{ asset('assets/js/dashboards/projectmanagement-dashboard.js') }}"></script>
<script src="{{ asset('assets/js/dashboards/crm-dashboard.js') }}"></script>
<script src="{{ asset('assets/js/pages/crm-analytics.js') }}"></script>
@endpush
