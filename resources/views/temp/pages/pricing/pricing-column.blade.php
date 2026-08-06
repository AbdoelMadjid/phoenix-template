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
        
      @endsection



