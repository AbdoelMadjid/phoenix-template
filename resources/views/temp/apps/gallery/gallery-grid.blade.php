@extends('layouts.vertical')

@section('title', 'Gallery Grid')

@push('styles')
    <link href="{{ asset('vendors/glightbox/glightbox.min.css') }}" rel="stylesheet">
@endpush

@section('content')
    @include('layouts.partials.breadcrumb')
    <div class="mb-9">
        <h2 class="mb-5">Gallery</h2>
        <div class="d-flex flex-wrap gap-3 justify-content-between">
            <div><button class="btn btn-primary me-4"><span class="fas fa-plus me-2"></span>Add New</button>
                <button class="btn btn-link text-body me-4 px-0"><span
                        class="fa-solid fa-file-export fs-9 me-2"></span>Export</button>
            </div>
            <div class="search-box">
                <form class="position-relative"><input class="form-control search-input search" type="search"
                        placeholder="Search by name" aria-label="Search">
                    <span class="fas fa-search search-box-icon"></span>
                </form>
            </div>
        </div>
        <div class="d-md-flex d-lg-block d-xl-flex justify-content-between gap-4 my-4">
            <div class="d-flex gap-2 mb-3 mb-md-0 mb-lg-3 mb-xl-0 order-md-1 order-lg-0 order-xl-1"><a
                    class="btn btn-phoenix-secondary btn-square" href="{{ url('gallery-column') }}" data-bs-toggle="tooltip"
                    data-bs-placement="top" data-bs-title="Column view"><span
                        class="fa-solid fa-grip-vertical"></span></a><a
                    class="btn btn-phoenix-secondary btn-square border-primary text-primary"
                    href="{{ url('gallery-grid') }}" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-title="Grid view"><span class="fa-solid fa-th-large"></span></a><a
                    class="btn btn-phoenix-secondary btn-square" href="{{ url('grid-with-title') }}"
                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Grid view with title"><span
                        class="fa-solid fa-th-large"></span></a><a class="btn btn-phoenix-secondary btn-square"
                    href="{{ url('gallery-masonry') }}" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-title="Masonry view"><span class="fa-solid fa-th"></span></a><a
                    class="btn btn-phoenix-secondary btn-square" href="{{ url('gallery-slider') }}" data-bs-toggle="tooltip"
                    data-bs-placement="top" data-bs-title="Slider view"><span
                        class="fa-solid fa-mattress-pillow"></span></a></div>
            <div class="scrollbar">
                <ul class="nav nav-underline gap-md-5" data-filter-nav="data-filter-nav" style="min-width: 400px">
                    <li class="nav-item"><a class="nav-link cursor-pointer active" data-filter="*">All</a></li>
                    <li class="nav-item"><a class="nav-link cursor-pointer" data-filter=".ecommerce">Ecommerce</a></li>
                    <li class="nav-item"><a class="nav-link cursor-pointer" data-filter=".project-management">Project
                            Management</a></li>
                    <li class="nav-item"> <a class="nav-link cursor-pointer" data-filter=".photography">Photography</a></li>
                </ul>
            </div>
        </div>
        <div class="row g-3" id="image_gallery" data-sl-isotope='{"layoutMode":"packery"}'><a
                class="ecommerce col-sm-6 col-md-4 col-xl-3 isotope-item" href="{{ asset('assets/img/gallery/77.png') }}"
                data-gallery="gallery-grid">
                <div class="hoverbox img-zoom-hover rounded-2"><img class="img-fluid"
                        src="{{ asset('assets/img/gallery/77.png') }}" alt="">
                    <div class="hoverbox-content flex-center flex-column">
                        <h4 class="text-white">Basketball Shoes</h4>
                        <p class="mb-0 text-secondary-lighter text-capitalize">ecommerce</p>
                    </div>
                </div>
            </a><a class="photography col-sm-6 col-md-4 col-xl-3 isotope-item"
                href="{{ asset('assets/img/gallery/78.png') }}" data-gallery="gallery-grid">
                <div class="hoverbox img-zoom-hover rounded-2"><img class="img-fluid"
                        src="{{ asset('assets/img/gallery/78.png') }}" alt="">
                    <div class="hoverbox-content flex-center flex-column">
                        <h4 class="text-white">Beach Sunset</h4>
                        <p class="mb-0 text-secondary-lighter text-capitalize">photography</p>
                    </div>
                </div>
            </a><a class="photography col-sm-6 col-md-4 col-xl-3 isotope-item"
                href="{{ asset('assets/img/gallery/79.png') }}" data-gallery="gallery-grid">
                <div class="hoverbox img-zoom-hover rounded-2"><img class="img-fluid"
                        src="{{ asset('assets/img/gallery/79.png') }}" alt="">
                    <div class="hoverbox-content flex-center flex-column">
                        <h4 class="text-white">Camera</h4>
                        <p class="mb-0 text-secondary-lighter text-capitalize">photography</p>
                    </div>
                </div>
            </a><a class="ecommerce col-sm-6 col-md-4 col-xl-3 isotope-item"
                href="{{ asset('assets/img/gallery/80.png') }}" data-gallery="gallery-grid">
                <div class="hoverbox img-zoom-hover rounded-2"><img class="img-fluid"
                        src="{{ asset('assets/img/gallery/80.png') }}" alt="">
                    <div class="hoverbox-content flex-center flex-column">
                        <h4 class="text-white">Telephone</h4>
                        <p class="mb-0 text-secondary-lighter text-capitalize">ecommerce</p>
                    </div>
                </div>
            </a><a class="photography col-sm-6 col-md-4 col-xl-3 isotope-item"
                href="{{ asset('assets/img/gallery/81.png') }}" data-gallery="gallery-grid">
                <div class="hoverbox img-zoom-hover rounded-2"><img class="img-fluid"
                        src="{{ asset('assets/img/gallery/81.png') }}" alt="">
                    <div class="hoverbox-content flex-center flex-column">
                        <h4 class="text-white">Sea Beach</h4>
                        <p class="mb-0 text-secondary-lighter text-capitalize">photography</p>
                    </div>
                </div>
            </a><a class="photography col-sm-6 col-md-4 col-xl-3 isotope-item"
                href="{{ asset('assets/img/gallery/82.png') }}" data-gallery="gallery-grid">
                <div class="hoverbox img-zoom-hover rounded-2"><img class="img-fluid"
                        src="{{ asset('assets/img/gallery/82.png') }}" alt="">
                    <div class="hoverbox-content flex-center flex-column">
                        <h4 class="text-white">Wooden Beetle</h4>
                        <p class="mb-0 text-secondary-lighter text-capitalize">photography</p>
                    </div>
                </div>
            </a><a class="project-management col-sm-6 col-md-4 col-xl-3 isotope-item"
                href="{{ asset('assets/img/gallery/83.png') }}" data-gallery="gallery-grid">
                <div class="hoverbox img-zoom-hover rounded-2"><img class="img-fluid"
                        src="{{ asset('assets/img/gallery/83.png') }}" alt="">
                    <div class="hoverbox-content flex-center flex-column">
                        <h4 class="text-white">Boat on Water</h4>
                        <p class="mb-0 text-secondary-lighter text-capitalize">project management</p>
                    </div>
                </div>
            </a><a class="photography col-sm-6 col-md-4 col-xl-3 isotope-item"
                href="{{ asset('assets/img/gallery/84.png') }}" data-gallery="gallery-grid">
                <div class="hoverbox img-zoom-hover rounded-2"><img class="img-fluid"
                        src="{{ asset('assets/img/gallery/84.png') }}" alt="">
                    <div class="hoverbox-content flex-center flex-column">
                        <h4 class="text-white">Sunset Horizon</h4>
                        <p class="mb-0 text-secondary-lighter text-capitalize">photography</p>
                    </div>
                </div>
            </a><a class="project-management col-sm-6 col-md-4 col-xl-3 isotope-item"
                href="{{ asset('assets/img/gallery/85.png') }}" data-gallery="gallery-grid">
                <div class="hoverbox img-zoom-hover rounded-2"><img class="img-fluid"
                        src="{{ asset('assets/img/gallery/85.png') }}" alt="">
                    <div class="hoverbox-content flex-center flex-column">
                        <h4 class="text-white">Trail Ahead</h4>
                        <p class="mb-0 text-secondary-lighter text-capitalize">project management</p>
                    </div>
                </div>
            </a><a class="project-management col-sm-6 col-md-4 col-xl-3 isotope-item"
                href="{{ asset('assets/img/gallery/86.png') }}" data-gallery="gallery-grid">
                <div class="hoverbox img-zoom-hover rounded-2"><img class="img-fluid"
                        src="{{ asset('assets/img/gallery/86.png') }}" alt="">
                    <div class="hoverbox-content flex-center flex-column">
                        <h4 class="text-white">Mountain Sunset</h4>
                        <p class="mb-0 text-secondary-lighter text-capitalize">project management</p>
                    </div>
                </div>
            </a><a class="ecommerce col-sm-6 col-md-4 col-xl-3 isotope-item"
                href="{{ asset('assets/img/gallery/87.png') }}" data-gallery="gallery-grid">
                <div class="hoverbox img-zoom-hover rounded-2"><img class="img-fluid"
                        src="{{ asset('assets/img/gallery/87.png') }}" alt="">
                    <div class="hoverbox-content flex-center flex-column">
                        <h4 class="text-white">Dog Sitting</h4>
                        <p class="mb-0 text-secondary-lighter text-capitalize">ecommerce</p>
                    </div>
                </div>
            </a><a class="photography col-sm-6 col-md-4 col-xl-3 isotope-item"
                href="{{ asset('assets/img/gallery/88.png') }}" data-gallery="gallery-grid">
                <div class="hoverbox img-zoom-hover rounded-2"><img class="img-fluid"
                        src="{{ asset('assets/img/gallery/88.png') }}" alt="">
                    <div class="hoverbox-content flex-center flex-column">
                        <h4 class="text-white">Tree near Lake</h4>
                        <p class="mb-0 text-secondary-lighter text-capitalize">photography</p>
                    </div>
                </div>
            </a></div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/isotope-packery/packery-mode.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/glightbox/glightbox.min.js') }}"></script>
@endpush
