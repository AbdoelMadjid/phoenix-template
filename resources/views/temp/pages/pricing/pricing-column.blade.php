@extends('layouts.vertical')

@section('title', 'Pricing Column.Blade')

@push('styles')
<link href="{{ asset('assets/external/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap') }}" rel="stylesheet">
@endpush

@section('content')

        <nav class="mb-3" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Pages</a></li>
            <li class="breadcrumb-item active">Pricing</li>
          </ol>
        </nav>
        <h2 class="mb-7">Pricing</h2>
        <div class="row g-7 g-lg-11 mb-7">
          <div class="col-12 col-sm-6 col-xxl-3">
            <div class="d-flex flex-column justify-content-between h-100">
              <div><img class="mb-4 d-dark-none" src="{{ asset('assets/img/spot-illustrations/13.png') }}" alt="" width="120" height="96"><img class="mb-4 d-light-none" src="{{ asset('assets/img/spot-illustrations/dark_13.png') }}" alt="" width="120" height="96">
                <div class="mb-sm-5">
                  <h3 class="mb-2">Learner</h3>
                  <p class="text-body-secondary mb-0 pe-3">For individuals who are interested in giving it a shot first.</p>
                </div>
              </div>
              <div>
                <div class="d-flex align-items-center mb-4">
                  <h3 class="display-3 fw-bolder">Free</h3>
                </div><button class="btn btn-lg w-100 mb-6 btn-outline-primary">Buy</button>
                <h5 class="mb-4">What’s included</h5>
                <ul class="fa-ul" style="--fa-li-margin: 1.5em;">
                  <li class="text-body-secondary mb-2"><span class="fa-li"><span class="fas fa-check text-primary"></span></span>Timeline</li>
                  <li class="mb-2 text-body-quaternary"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs-11"><span class="fas fa-circle fa-stack-2x text-body-quaternary text-opacity-50"></span><span class="fas fa-stack-1x fa-inverse fa-times text-body-tertiary"></span></span></span>Advanced Search</li>
                  <li class="mb-2 text-body-quaternary"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs-11"><span class="fas fa-circle fa-stack-2x text-body-quaternary text-opacity-50"></span><span class="fas fa-stack-1x fa-inverse fa-times text-body-tertiary"></span></span></span>Custom fields</li>
                  <li class="mb-2 text-body-quaternary"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs-11"><span class="fas fa-circle fa-stack-2x text-body-quaternary text-opacity-50"></span><span class="fas fa-stack-1x fa-inverse fa-times text-body-tertiary"></span></span></span>Task dependencies</li>
                  <li class="mb-2 text-body-quaternary"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs-11"><span class="fas fa-circle fa-stack-2x text-body-quaternary text-opacity-50"></span><span class="fas fa-stack-1x fa-inverse fa-times text-body-tertiary"></span></span></span>Private teams & projects</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-xxl-3">
            <div class="d-flex flex-column justify-content-between h-100">
              <div><img class="mb-4 d-dark-none" src="{{ asset('assets/img/spot-illustrations/14.png') }}" alt="" width="120" height="96"><img class="mb-4 d-light-none" src="{{ asset('assets/img/spot-illustrations/dark_14.png') }}" alt="" width="120" height="96">
                <div class="mb-sm-5">
                  <h3 class="mb-2">Starter</h3>
                  <p class="text-body-secondary mb-0 pe-3">For teams that need to create project plans with confidence.</p>
                </div>
              </div>
              <div>
                <div class="d-flex align-items-center mb-4">
                  <h3 class="display-3 fw-bolder">$14.99</h3>
                  <h5 class="fs-8 fw-normal ms-1">/ month</h5>
                </div><button class="btn btn-lg w-100 mb-6 btn-outline-primary">Buy</button>
                <h5 class="mb-4">What’s included</h5>
                <ul class="fa-ul" style="--fa-li-margin: 1.5em;">
                  <li class="text-body-secondary mb-2"><span class="fa-li"><span class="fas fa-check text-primary"></span></span>Timeline</li>
                  <li class="mb-2 text-body"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs-11"><span class="fas fa-circle fa-stack-2x text-success"></span><span class="fas fa-stack-1x fa-inverse fa-check text-white dark__text-dark"></span></span></span>Advanced Search</li>
                  <li class="mb-2 text-body-quaternary"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs-11"><span class="fas fa-circle fa-stack-2x text-body-quaternary text-opacity-50"></span><span class="fas fa-stack-1x fa-inverse fa-times text-body-tertiary"></span></span></span>Custom fields</li>
                  <li class="mb-2 text-body-quaternary"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs-11"><span class="fas fa-circle fa-stack-2x text-body-quaternary text-opacity-50"></span><span class="fas fa-stack-1x fa-inverse fa-times text-body-tertiary"></span></span></span>Task dependencies</li>
                  <li class="mb-2 text-body-quaternary"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs-11"><span class="fas fa-circle fa-stack-2x text-body-quaternary text-opacity-50"></span><span class="fas fa-stack-1x fa-inverse fa-times text-body-tertiary"></span></span></span>Private teams & projects</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-xxl-3">
            <div class="d-flex flex-column justify-content-between h-100">
              <div><img class="mb-4 d-dark-none" src="{{ asset('assets/img/spot-illustrations/15.png') }}" alt="" width="120" height="96"><img class="mb-4 d-light-none" src="{{ asset('assets/img/spot-illustrations/dark_15.png') }}" alt="" width="120" height="96">
                <div class="mb-sm-5">
                  <h3 class="mb-2">Team</h3>
                  <p class="text-body-secondary mb-0 pe-3">For teams that need to manage work across initiatives.</p>
                </div>
              </div>
              <div>
                <div class="d-flex align-items-center mb-4">
                  <h3 class="display-3 fw-bolder">$49.99</h3>
                  <h5 class="fs-8 fw-normal ms-1">/ month</h5>
                </div><button class="btn btn-lg w-100 mb-6 btn-primary">Buy</button>
                <h5 class="mb-4">What’s included</h5>
                <ul class="fa-ul" style="--fa-li-margin: 1.5em;">
                  <li class="text-body-secondary mb-2"><span class="fa-li"><span class="fas fa-check text-primary"></span></span>Timeline</li>
                  <li class="mb-2 text-body"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs-11"><span class="fas fa-circle fa-stack-2x text-success"></span><span class="fas fa-stack-1x fa-inverse fa-check text-white dark__text-dark"></span></span></span>Advanced Search</li>
                  <li class="mb-2 text-body"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs-11"><span class="fas fa-circle fa-stack-2x text-success"></span><span class="fas fa-stack-1x fa-inverse fa-check text-white dark__text-dark"></span></span></span>Custom fields<span class="badge badge-phoenix badge-phoenix-primary ms-2 fs-10">New</span></li>
                  <li class="mb-2 text-body-quaternary"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs-11"><span class="fas fa-circle fa-stack-2x text-body-quaternary text-opacity-50"></span><span class="fas fa-stack-1x fa-inverse fa-times text-body-tertiary"></span></span></span>Task dependencies</li>
                  <li class="mb-2 text-body-quaternary"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs-11"><span class="fas fa-circle fa-stack-2x text-body-quaternary text-opacity-50"></span><span class="fas fa-stack-1x fa-inverse fa-times text-body-tertiary"></span></span></span>Private teams & projects</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-xxl-3">
            <div class="d-flex flex-column justify-content-between h-100">
              <div><img class="mb-4 d-dark-none" src="{{ asset('assets/img/spot-illustrations/16.png') }}" alt="" width="120" height="96"><img class="mb-4 d-light-none" src="{{ asset('assets/img/spot-illustrations/dark_16.png') }}" alt="" width="120" height="96">
                <div class="mb-sm-5">
                  <h3 class="mb-2">Industry</h3>
                  <p class="text-body-secondary mb-0 pe-3">For organizations that need additional security and support.</p>
                </div>
              </div>
              <div>
                <div class="d-flex align-items-center mb-4">
                  <h3 class="display-3 fw-bolder">$149.99</h3>
                  <h5 class="fs-8 fw-normal ms-1">/ month</h5>
                </div><button class="btn btn-lg w-100 mb-6 btn-outline-primary">Buy</button>
                <h5 class="mb-4">What’s included</h5>
                <ul class="fa-ul" style="--fa-li-margin: 1.5em;">
                  <li class="text-body-secondary mb-2"><span class="fa-li"><span class="fas fa-check text-primary"></span></span>Timeline</li>
                  <li class="mb-2 text-body"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs-11"><span class="fas fa-circle fa-stack-2x text-success"></span><span class="fas fa-stack-1x fa-inverse fa-check text-white dark__text-dark"></span></span></span>Advanced Search</li>
                  <li class="mb-2 text-body"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs-11"><span class="fas fa-circle fa-stack-2x text-success"></span><span class="fas fa-stack-1x fa-inverse fa-check text-white dark__text-dark"></span></span></span>Custom fields<span class="badge badge-phoenix badge-phoenix-primary ms-2 fs-10">New</span></li>
                  <li class="mb-2 text-body"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs-11"><span class="fas fa-circle fa-stack-2x text-success"></span><span class="fas fa-stack-1x fa-inverse fa-check text-white dark__text-dark"></span></span></span>Task dependencies</li>
                  <li class="mb-2 text-body"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs-11"><span class="fas fa-circle fa-stack-2x text-success"></span><span class="fas fa-stack-1x fa-inverse fa-check text-white dark__text-dark"></span></span></span>Private teams & projects</li>
                </ul>
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
