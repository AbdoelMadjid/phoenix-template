@extends('layouts.vertical')

@section('title', 'Gallery Masonry')

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
                        class="fa-solid fa-grip-vertical"></span></a><a class="btn btn-phoenix-secondary btn-square"
                    href="{{ url('gallery-grid') }}" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-title="Grid view"><span class="fa-solid fa-th-large"></span></a><a
                    class="btn btn-phoenix-secondary btn-square" href="{{ url('grid-with-title') }}"
                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Grid view with title"><span
                        class="fa-solid fa-th-large"></span></a><a
                    class="btn btn-phoenix-secondary btn-square border-primary text-primary"
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
        <div class="row g-3" id="gallery-masonry" data-sl-isotope='{"layoutMode":"packery","packery":{"gutter":0}}'>
            <div class="col-sm-6 col-md-8 col-xl-4 isotope-item ecommerce">
                <div class="img-zoom-hover position-relative rounded-2 overflow-hidden"><a
                        href="{{ asset('assets/img/gallery/89_large.png') }}" data-gallery="gallery-masonry"><img
                            class="rounded-2 w-100 h-100 object-fit-cover" src="{{ asset('assets/img/gallery/89.png') }}"
                            alt="">
                        <div class="backdrop-faded position-absolute w-100 bottom-0 start-0 p-3">
                            <h4 class="text-white">Pixel 4a 5g</h4>
                            <p class="mb-0 text-secondary-lighter text-capitalize">ecommerce</p>
                        </div>
                    </a></div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-2 isotope-item photography">
                <div class="img-zoom-hover position-relative rounded-2 overflow-hidden"><a
                        href="{{ asset('assets/img/gallery/86.png') }}" data-gallery="gallery-masonry"><img
                            class="rounded-2 w-100 h-100 object-fit-cover" src="{{ asset('assets/img/gallery/90.png') }}"
                            alt="">
                        <div class="backdrop-faded position-absolute w-100 bottom-0 start-0 p-3">
                            <h4 class="text-white">Sunset</h4>
                            <p class="mb-0 text-secondary-lighter text-capitalize">photography</p>
                        </div>
                    </a></div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item project-management">
                <div class="img-zoom-hover position-relative rounded-2 overflow-hidden"><a
                        href="{{ asset('assets/img/gallery/91_large.png') }}" data-gallery="gallery-masonry"><img
                            class="rounded-2 w-100 h-100 object-fit-cover" src="{{ asset('assets/img/gallery/91.png') }}"
                            alt="">
                        <div class="backdrop-faded position-absolute w-100 bottom-0 start-0 p-3">
                            <h4 class="text-white">Trees During Night</h4>
                            <p class="mb-0 text-secondary-lighter text-capitalize">project management</p>
                        </div>
                    </a></div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item ecommerce">
                <div class="img-zoom-hover position-relative rounded-2 overflow-hidden"><a
                        href="{{ asset('assets/img/gallery/92_large.png') }}" data-gallery="gallery-masonry"><img
                            class="rounded-2 w-100 h-100 object-fit-cover" src="{{ asset('assets/img/gallery/92.png') }}"
                            alt="">
                        <div class="backdrop-faded position-absolute w-100 bottom-0 start-0 p-3">
                            <h4 class="text-white">Mountain Sunset</h4>
                            <p class="mb-0 text-secondary-lighter text-capitalize">ecommerce</p>
                        </div>
                    </a></div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item project-management">
                <div class="img-zoom-hover position-relative rounded-2 overflow-hidden"><a class="video-container"
                        href="{{ asset('assets/img/gallery/96.mp4') }}" data-gallery="gallery-masonry"><video
                            class="video d-block h-100 w-100 overflow-hidden rounded-2" muted="muted"
                            data-play-on-hover="data-play-on-hover" poster="{{ asset('assets/img/gallery/96.png') }}">
                            <source src="{{ asset('assets/img/gallery/96.mp4') }}" type="video/mp4">
                        </video>
                        <div
                            class="circle-icon-item position-absolute top-50 start-50 translate-middle bg-body-emphasis rounded-pill bg-opacity-50">
                            <span class="fa-solid fa-video text-body fs-9 fs-sm-8"></span></div>
                        <div class="backdrop-faded position-absolute w-100 bottom-0 start-0 p-3">
                            <h4 class="text-white">Beautiful Nature</h4>
                            <p class="mb-0 text-secondary-lighter text-capitalize">project management</p>
                        </div>
                    </a></div>
            </div>
            <div class="col-sm-6 col-md-8 col-xl-3 isotope-item ecommerce">
                <div class="img-zoom-hover position-relative rounded-2 overflow-hidden"><a class="video-container"
                        href="{{ asset('assets/img/gallery/97.mp4') }}" data-gallery="gallery-masonry"><video
                            class="video d-block h-100 w-100 overflow-hidden rounded-2" muted="muted"
                            data-play-on-hover="data-play-on-hover" poster="{{ asset('assets/img/gallery/97.png') }}">
                            <source src="{{ asset('assets/img/gallery/97.mp4') }}" type="video/mp4">
                        </video>
                        <div
                            class="circle-icon-item position-absolute top-50 start-50 translate-middle bg-body-emphasis rounded-pill bg-opacity-50">
                            <span class="fa-solid fa-video text-body fs-9 fs-sm-8"></span></div>
                        <div class="backdrop-faded position-absolute w-100 bottom-0 start-0 p-3">
                            <h4 class="text-white">Bike Ride</h4>
                            <p class="mb-0 text-secondary-lighter text-capitalize">ecommerce</p>
                        </div>
                    </a></div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-2 isotope-item photography">
                <div class="img-zoom-hover position-relative rounded-2 overflow-hidden"><a
                        href="{{ asset('assets/img/gallery/79.png') }}" data-gallery="gallery-masonry"><img
                            class="rounded-2 w-100 h-100 object-fit-cover" src="{{ asset('assets/img/gallery/93.png') }}"
                            alt="">
                        <div class="backdrop-faded position-absolute w-100 bottom-0 start-0 p-3">
                            <h4 class="text-white">Camera</h4>
                            <p class="mb-0 text-secondary-lighter text-capitalize">photography</p>
                        </div>
                    </a></div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-2 isotope-item ecommerce">
                <div class="img-zoom-hover position-relative rounded-2 overflow-hidden"><a
                        href="{{ asset('assets/img/gallery/77.png') }}" data-gallery="gallery-masonry"><img
                            class="rounded-2 w-100 h-100 object-fit-cover" src="{{ asset('assets/img/gallery/94.png') }}"
                            alt="">
                        <div class="backdrop-faded position-absolute w-100 bottom-0 start-0 p-3">
                            <h4 class="text-white">Basketball Shoes</h4>
                            <p class="mb-0 text-secondary-lighter text-capitalize">ecommerce</p>
                        </div>
                    </a></div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-2 isotope-item project-management">
                <div class="img-zoom-hover position-relative rounded-2 overflow-hidden"><a
                        href="{{ asset('assets/img/gallery/95_large.png') }}" data-gallery="gallery-masonry"><img
                            class="rounded-2 w-100 h-100 object-fit-cover" src="{{ asset('assets/img/gallery/95.png') }}"
                            alt="">
                        <div class="backdrop-faded position-absolute w-100 bottom-0 start-0 p-3">
                            <h4 class="text-white">Aurora</h4>
                            <p class="mb-0 text-secondary-lighter text-capitalize">project management</p>
                        </div>
                    </a></div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-2 isotope-item photography">
                <div class="img-zoom-hover position-relative rounded-2 overflow-hidden"><a
                        href="{{ asset('assets/img/gallery/108_large.png') }}" data-gallery="gallery-masonry"><img
                            class="rounded-2 w-100 h-100 object-fit-cover"
                            src="{{ asset('assets/img/gallery/108.png') }}" alt="">
                        <div class="backdrop-faded position-absolute w-100 bottom-0 start-0 p-3">
                            <h4 class="text-white">House near lake</h4>
                            <p class="mb-0 text-secondary-lighter text-capitalize">photography</p>
                        </div>
                    </a></div>
            </div>
            <div class="col-sm-6 col-md-8 col-xl-4 isotope-item project-management">
                <div class="img-zoom-hover position-relative rounded-2 overflow-hidden"><a
                        href="{{ asset('assets/img/gallery/107_large.png') }}" data-gallery="gallery-masonry"><img
                            class="rounded-2 w-100 h-100 object-fit-cover"
                            src="{{ asset('assets/img/gallery/119.png') }}" alt="">
                        <div class="backdrop-faded position-absolute w-100 bottom-0 start-0 p-3">
                            <h4 class="text-white">Car</h4>
                            <p class="mb-0 text-secondary-lighter text-capitalize">project management</p>
                        </div>
                    </a></div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-2 isotope-item photography">
                <div class="img-zoom-hover position-relative rounded-2 overflow-hidden"><a
                        href="{{ asset('assets/img/gallery/106_large.png') }}" data-gallery="gallery-masonry"><img
                            class="rounded-2 w-100 h-100 object-fit-cover"
                            src="{{ asset('assets/img/gallery/106.png') }}" alt="">
                        <div class="backdrop-faded position-absolute w-100 bottom-0 start-0 p-3">
                            <h4 class="text-white">MI Phone</h4>
                            <p class="mb-0 text-secondary-lighter text-capitalize">photography</p>
                        </div>
                    </a></div>
            </div>
            <div class="col-sm-6 col-md-8 col-xl-4 isotope-item photography">
                <div class="img-zoom-hover position-relative rounded-2 overflow-hidden"><a class="video-container"
                        href="{{ asset('assets/img/gallery/99.mp4') }}" data-gallery="gallery-masonry"><video
                            class="video d-block h-100 w-100 overflow-hidden rounded-2" muted="muted"
                            data-play-on-hover="data-play-on-hover" poster="{{ asset('assets/img/gallery/99.png') }}">
                            <source src="{{ asset('assets/img/gallery/99.mp4') }}" type="video/mp4">
                        </video>
                        <div
                            class="circle-icon-item position-absolute top-50 start-50 translate-middle bg-body-emphasis rounded-pill bg-opacity-50">
                            <span class="fa-solid fa-video text-body fs-9 fs-sm-8"></span></div>
                        <div class="backdrop-faded position-absolute w-100 bottom-0 start-0 p-3">
                            <h4 class="text-white">Air Balloons</h4>
                            <p class="mb-0 text-secondary-lighter text-capitalize">photography</p>
                        </div>
                    </a></div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/isotope-packery/packery-mode.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/glightbox/glightbox.min.js') }}"></script>
@endpush
