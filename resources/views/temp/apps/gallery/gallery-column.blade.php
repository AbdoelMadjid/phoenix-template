@extends('layouts.vertical')

@section('title', 'Gallery Column')

@push('styles')
<link href="{{ asset('vendors/glightbox/glightbox.min.css') }}" rel="stylesheet">
@endpush

@section('content')
<nav class="mb-3" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
            <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
            <li class="breadcrumb-item active">Default</li>
          </ol>
        </nav>
        <div class="mb-9">
          <h2 class="mb-5">Gallery</h2>
          <div class="d-flex flex-wrap gap-3 justify-content-between">
            <div><button class="btn btn-primary me-4"><span class="fas fa-plus me-2"></span>Add New</button>
              <button class="btn btn-link text-body me-4 px-0"><span class="fa-solid fa-file-export fs-9 me-2"></span>Export</button>
            </div>
            <div class="search-box">
              <form class="position-relative"><input class="form-control search-input search" type="search" placeholder="Search by name" aria-label="Search">
                <span class="fas fa-search search-box-icon"></span>
              </form>
            </div>
          </div>
          <div class="d-md-flex d-lg-block d-xl-flex justify-content-between gap-4 my-4">
            <div class="d-flex gap-2 mb-3 mb-md-0 mb-lg-3 mb-xl-0 order-md-1 order-lg-0 order-xl-1"><a class="btn btn-phoenix-secondary btn-square border-primary text-primary" href="{{ url('gallery-column') }}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Column view"><span class="fa-solid fa-grip-vertical"></span></a><a class="btn btn-phoenix-secondary btn-square" href="{{ url('gallery-grid') }}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Grid view"><span class="fa-solid fa-th-large"></span></a><a class="btn btn-phoenix-secondary btn-square" href="{{ url('grid-with-title') }}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Grid view with title"><span class="fa-solid fa-th-large"></span></a><a class="btn btn-phoenix-secondary btn-square" href="{{ url('gallery-masonry') }}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Masonry view"><span class="fa-solid fa-th"></span></a><a class="btn btn-phoenix-secondary btn-square" href="{{ url('gallery-slider') }}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Slider view"><span class="fa-solid fa-mattress-pillow"></span></a></div>
            <div class="scrollbar">
              <ul class="nav nav-underline gap-md-5" data-filter-nav="data-filter-nav" style="min-width: 400px">
                <li class="nav-item"><a class="nav-link cursor-pointer active" data-filter="*">All</a></li>
                <li class="nav-item"><a class="nav-link cursor-pointer" data-filter=".ecommerce">Ecommerce</a></li>
                <li class="nav-item"><a class="nav-link cursor-pointer" data-filter=".project-management">Project Management</a></li>
                <li class="nav-item"> <a class="nav-link cursor-pointer" data-filter=".photography">Photography</a></li>
              </ul>
            </div>
          </div>
          <div class="position-relative">
            <div class="row gx-7 gy-5 overflow-hidden" id="image_gallery" data-gallery-column="data-gallery-column" data-sl-isotope='{"layoutMode":"packery"}'><a class="ecommerce col-sm-6 col-md-4 col-xl-3 isotope-item img-zoom-hover text-decoration-none" href="{{ asset('assets/img/gallery/65.png') }}" data-gallery="gallery-column">
                <div class="overflow-hidden rounded"><img class="img-fluid" src="{{ asset('assets/img/gallery/65.png') }}" alt=""></div>
                <div class="d-flex mt-3">
                  <div>
                    <h4 class="title">Pixel 4a</h4>
                    <p class="mb-0 text-capitalize text-body">ecommerce</p>
                  </div>
                </div>
              </a><a class="project-management col-sm-6 col-md-4 col-xl-3 isotope-item img-zoom-hover text-decoration-none" href="{{ asset('assets/img/gallery/68.png') }}" data-gallery="gallery-column">
                <div class="overflow-hidden rounded"><img class="img-fluid" src="{{ asset('assets/img/gallery/68.png') }}" alt=""></div>
                <div class="d-flex mt-3">
                  <div>
                    <h4 class="title">Wooden Beetle</h4>
                    <p class="mb-0 text-capitalize text-body">project management</p>
                  </div>
                </div>
              </a><a class="photography col-sm-6 col-md-4 col-xl-3 isotope-item img-zoom-hover text-decoration-none" href="{{ asset('assets/img/gallery/71.png') }}" data-gallery="gallery-column">
                <div class="overflow-hidden rounded"><img class="img-fluid" src="{{ asset('assets/img/gallery/71.png') }}" alt=""></div>
                <div class="d-flex mt-3">
                  <div>
                    <h4 class="title">Sunset</h4>
                    <p class="mb-0 text-capitalize text-body">photography</p>
                  </div>
                </div>
              </a><a class="photography col-sm-6 col-md-4 col-xl-3 isotope-item img-zoom-hover text-decoration-none" href="{{ asset('assets/img/gallery/74.png') }}" data-gallery="gallery-column">
                <div class="overflow-hidden rounded"><img class="img-fluid" src="{{ asset('assets/img/gallery/74.png') }}" alt=""></div>
                <div class="d-flex mt-3">
                  <div>
                    <h4 class="title">Nature</h4>
                    <p class="mb-0 text-capitalize text-body">photography</p>
                  </div>
                </div>
              </a><a class="project-management col-sm-6 col-md-4 col-xl-3 isotope-item img-zoom-hover text-decoration-none" href="{{ asset('assets/img/gallery/75.png') }}" data-gallery="gallery-column">
                <div class="overflow-hidden rounded"><img class="img-fluid" src="{{ asset('assets/img/gallery/75.png') }}" alt=""></div>
                <div class="d-flex mt-3">
                  <div>
                    <h4 class="title">Mockup</h4>
                    <p class="mb-0 text-capitalize text-body">project management</p>
                  </div>
                </div>
              </a><a class="photography col-sm-6 col-md-4 col-xl-3 isotope-item img-zoom-hover text-decoration-none" href="{{ asset('assets/img/gallery/66.png') }}" data-gallery="gallery-column">
                <div class="overflow-hidden rounded"><img class="img-fluid" src="{{ asset('assets/img/gallery/66.png') }}" alt=""></div>
                <div class="d-flex mt-3">
                  <div>
                    <h4 class="title">Mountain Sunset</h4>
                    <p class="mb-0 text-capitalize text-body">photography</p>
                  </div>
                </div>
              </a><a class="project-management col-sm-6 col-md-4 col-xl-3 isotope-item img-zoom-hover text-decoration-none" href="{{ asset('assets/img/gallery/69.png') }}" data-gallery="gallery-column">
                <div class="overflow-hidden rounded"><img class="img-fluid" src="{{ asset('assets/img/gallery/69.png') }}" alt=""></div>
                <div class="d-flex mt-3">
                  <div>
                    <h4 class="title">Ear Buds</h4>
                    <p class="mb-0 text-capitalize text-body">project management</p>
                  </div>
                </div>
              </a><a class="ecommerce col-sm-6 col-md-4 col-xl-3 isotope-item img-zoom-hover text-decoration-none" href="{{ asset('assets/img/gallery/72.png') }}" data-gallery="gallery-column">
                <div class="overflow-hidden rounded"><img class="img-fluid" src="{{ asset('assets/img/gallery/72.png') }}" alt=""></div>
                <div class="d-flex mt-3">
                  <div>
                    <h4 class="title">Basketball Shoes</h4>
                    <p class="mb-0 text-capitalize text-body">ecommerce</p>
                  </div>
                </div>
              </a><a class="photography col-sm-6 col-md-4 col-xl-3 isotope-item img-zoom-hover text-decoration-none" href="{{ asset('assets/img/gallery/76.png') }}" data-gallery="gallery-column">
                <div class="overflow-hidden rounded"><img class="img-fluid" src="{{ asset('assets/img/gallery/76.png') }}" alt=""></div>
                <div class="d-flex mt-3">
                  <div>
                    <h4 class="title">Pixel Watch</h4>
                    <p class="mb-0 text-capitalize text-body">photography</p>
                  </div>
                </div>
              </a><a class="ecommerce col-sm-6 col-md-4 col-xl-3 isotope-item img-zoom-hover text-decoration-none" href="{{ asset('assets/img/gallery/70.png') }}" data-gallery="gallery-column">
                <div class="overflow-hidden rounded"><img class="img-fluid" src="{{ asset('assets/img/gallery/70.png') }}" alt=""></div>
                <div class="d-flex mt-3">
                  <div>
                    <h4 class="title">Plant During Daytime</h4>
                    <p class="mb-0 text-capitalize text-body">ecommerce</p>
                  </div>
                </div>
              </a><a class="photography col-sm-6 col-md-4 col-xl-3 isotope-item img-zoom-hover text-decoration-none" href="{{ asset('assets/img/gallery/67.png') }}" data-gallery="gallery-column">
                <div class="overflow-hidden rounded"><img class="img-fluid" src="{{ asset('assets/img/gallery/67.png') }}" alt=""></div>
                <div class="d-flex mt-3">
                  <div>
                    <h4 class="title">Dog Sitting</h4>
                    <p class="mb-0 text-capitalize text-body">photography</p>
                  </div>
                </div>
              </a><a class="ecommerce col-sm-6 col-md-4 col-xl-3 isotope-item img-zoom-hover text-decoration-none" href="{{ asset('assets/img/gallery/73.png') }}" data-gallery="gallery-column">
                <div class="overflow-hidden rounded"><img class="img-fluid" src="{{ asset('assets/img/gallery/73.png') }}" alt=""></div>
                <div class="d-flex mt-3">
                  <div>
                    <h4 class="title">Pixel 4a 5g</h4>
                    <p class="mb-0 text-capitalize text-body">ecommerce</p>
                  </div>
                </div>
              </a></div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('vendors/isotope-packery/packery-mode.pkgd.min.js') }}"></script>
<script src="{{ asset('vendors/glightbox/glightbox.min.js') }}"></script>
@endpush
