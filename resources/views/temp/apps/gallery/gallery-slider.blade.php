@extends('layouts.vertical')

@section('title', 'Gallery Slider')

@push('styles')
    <link href="{{ asset('vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
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
                        class="fa-solid fa-th-large"></span></a><a class="btn btn-phoenix-secondary btn-square"
                    href="{{ url('gallery-masonry') }}" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-title="Masonry view"><span class="fa-solid fa-th"></span></a><a
                    class="btn btn-phoenix-secondary btn-square border-primary text-primary"
                    href="{{ url('gallery-slider') }}" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-title="Slider view"><span class="fa-solid fa-mattress-pillow"></span></a></div>
            <div class="scrollbar">
                <ul class="nav nav-underline gap-3 gap-md-5" id="gallery-slider-tab" role="tablist"
                    style="min-width: 385px">
                    <li class="nav-item" role="presentation"><a class="nav-link active" id="all-tab" href="#all-tab"
                            data-bs-toggle="tab" data-bs-target="#all-tab-pane" role="tab" aria-controls="all-tab-pane"
                            aria-selected="true">All</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" id="ecommerce-tab" href="#ecommerce-tab"
                            data-bs-toggle="tab" data-bs-target="#ecommerce-tab-pane" role="tab"
                            aria-controls="ecommerce-tab-pane" aria-selected="false">Ecommerce</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" id="project-management-tab"
                            href="#project-management-tab" data-bs-toggle="tab"
                            data-bs-target="#project-management-tab-pane" role="tab"
                            aria-controls="project-management-tab-pane" aria-selected="false">Project Management</a></li>
                    <li class="nav-item" role="presentation"> <a class="nav-link" id="photography-tab"
                            href="#photography-tab" data-bs-toggle="tab" data-bs-target="#photography-tab-pane"
                            role="tab" aria-controls="photography-tab-pane" aria-selected="false">Photography</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content" id="gallery-slider-tab-content">
            <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab"
                tabindex="0">
                <div class="swiper-theme-container swiper-slider-gallery">
                    <div class="swiper theme-slider"
                        data-swiper='{"speed":500,"spaceBetween":16,"slidesPerView":"auto","simulateTouch":false,"centeredSlides":true,"initialSlide":1,"thumb":{"slidesPerView":4,"spaceBetween":8,"freeMode":true,"loop":true,"watchSlidesProgress":true,"watchSlidesVisibility":true,"grabCursor":true,"breakpoints":{"540":{"slidesPerView":7},"768":{"slidesPerView":8},"1200":{"slidesPerView":9}}}}'>
                        <div class="swiper-wrapper align-items-center" id="gallery-slider-all">
                            <div class="swiper-slide position-relative rounded-2 overflow-hidden landscape ecommerce"><a
                                    href="{{ asset('assets/img/gallery/100.png') }}" data-gallery="gallery-slider-all">
                                    <img class="w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets/img/gallery/100.png') }}" alt=""></a>
                                <div class="backdrop-faded d-flex justify-content-between p-5">
                                    <div>
                                        <h3 class="text-white mb-2">Nature</h3>
                                        <p class="mb-0 text-secondary-light">Description text</p>
                                    </div>
                                    <div class="dropdown"> <button
                                            class="btn p-1 dropdown-toggle dropdown-caret-none text-white" type="button"
                                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                            aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide position-relative rounded-2 overflow-hidden landscape photography"><a
                                    href="{{ asset('assets/img/gallery/101.png') }}" data-gallery="gallery-slider-all">
                                    <img class="w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets/img/gallery/101.png') }}" alt=""></a>
                                <div class="backdrop-faded d-flex justify-content-between p-5">
                                    <div>
                                        <h3 class="text-white mb-2">Pixel 4</h3>
                                        <p class="mb-0 text-secondary-light">Description text</p>
                                    </div>
                                    <div class="dropdown"> <button
                                            class="btn p-1 dropdown-toggle dropdown-caret-none text-white" type="button"
                                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                            aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide position-relative rounded-2 overflow-hidden portrait ecommerce"><a
                                    href="{{ asset('assets/img/gallery/102.png') }}" data-gallery="gallery-slider-all">
                                    <img class="w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets/img/gallery/102.png') }}" alt=""></a>
                                <div class="backdrop-faded d-flex justify-content-between p-5">
                                    <div>
                                        <h3 class="text-white mb-2">Sunset</h3>
                                        <p class="mb-0 text-secondary-light">Description text</p>
                                    </div>
                                    <div class="dropdown"> <button
                                            class="btn p-1 dropdown-toggle dropdown-caret-none text-white" type="button"
                                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                            aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="swiper-slide position-relative rounded-2 overflow-hidden square project-management">
                                <a href="{{ asset('assets/img/gallery/103.png') }}" data-gallery="gallery-slider-all">
                                    <img class="w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets/img/gallery/103.png') }}" alt=""></a>
                                <div class="backdrop-faded d-flex justify-content-between p-5">
                                    <div>
                                        <h3 class="text-white mb-2">Ear Buds</h3>
                                        <p class="mb-0 text-secondary-light">Description text</p>
                                    </div>
                                    <div class="dropdown"> <button
                                            class="btn p-1 dropdown-toggle dropdown-caret-none text-white" type="button"
                                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                            aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="swiper-slide position-relative rounded-2 overflow-hidden landscape ecommerce photography">
                                <a href="{{ asset('assets/img/gallery/104.png') }}" data-gallery="gallery-slider-all">
                                    <img class="w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets/img/gallery/104.png') }}" alt=""></a>
                                <div class="backdrop-faded d-flex justify-content-between p-5">
                                    <div>
                                        <h3 class="text-white mb-2">Sunset Horizon</h3>
                                        <p class="mb-0 text-secondary-light">Description text</p>
                                    </div>
                                    <div class="dropdown"> <button
                                            class="btn p-1 dropdown-toggle dropdown-caret-none text-white" type="button"
                                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                            aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="swiper-slide position-relative rounded-2 overflow-hidden portrait project-management photography">
                                <a href="{{ asset('assets/img/gallery/71.png') }}" data-gallery="gallery-slider-all">
                                    <img class="w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets/img/gallery/71.png') }}" alt=""></a>
                                <div class="backdrop-faded d-flex justify-content-between p-5">
                                    <div>
                                        <h3 class="text-white mb-2">Sunset</h3>
                                        <p class="mb-0 text-secondary-light">Description text</p>
                                    </div>
                                    <div class="dropdown"> <button
                                            class="btn p-1 dropdown-toggle dropdown-caret-none text-white" type="button"
                                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                            aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide position-relative rounded-2 overflow-hidden landscape photography"><a
                                    href="{{ asset('assets/img/gallery/105.png') }}" data-gallery="gallery-slider-all">
                                    <img class="w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets/img/gallery/105.png') }}" alt=""></a>
                                <div class="backdrop-faded d-flex justify-content-between p-5">
                                    <div>
                                        <h3 class="text-white mb-2">Ear Buds</h3>
                                        <p class="mb-0 text-secondary-light">Description text</p>
                                    </div>
                                    <div class="dropdown"> <button
                                            class="btn p-1 dropdown-toggle dropdown-caret-none text-white" type="button"
                                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                            aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="swiper-slide position-relative rounded-2 overflow-hidden square ecommerce photography">
                                <a href="{{ asset('assets/video/2.mp4') }}" data-gallery="gallery-slider-all">
                                    <div class="video-container h-100"><video
                                            class="video w-100 h-100 object-fit-cover overflow-hidden rounded-2"
                                            muted="muted" data-play-on-hover="data-play-on-hover"
                                            poster="{{ asset('assets/video/2.png') }}">
                                            <source src="{{ asset('assets/video/2.mp4') }}" type="video/mp4">
                                        </video>
                                        <div
                                            class="circle-icon-item position-absolute top-50 start-50 translate-middle bg-body-emphasis rounded-pill bg-opacity-50">
                                            <span class="fa-solid fa-video text-body fs-9 fs-sm-8"></span></div>
                                    </div><img class="d-none" src="{{ asset('assets/video/2.png') }}" alt="">
                                </a>
                                <div class="backdrop-faded d-flex justify-content-between p-5">
                                    <div>
                                        <h3 class="text-white mb-2">Bike Ride</h3>
                                        <p class="mb-0 text-secondary-light">Description text</p>
                                    </div>
                                    <div class="dropdown"> <button
                                            class="btn p-1 dropdown-toggle dropdown-caret-none text-white" type="button"
                                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                            aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="swiper-slide position-relative rounded-2 overflow-hidden landscape project-management">
                                <a href="{{ asset('assets/video/3.mp4') }}" data-gallery="gallery-slider-all">
                                    <div class="video-container h-100"><video
                                            class="video w-100 h-100 object-fit-cover overflow-hidden rounded-2"
                                            muted="muted" data-play-on-hover="data-play-on-hover"
                                            poster="{{ asset('assets/video/3.png') }}">
                                            <source src="{{ asset('assets/video/3.mp4') }}" type="video/mp4">
                                        </video>
                                        <div
                                            class="circle-icon-item position-absolute top-50 start-50 translate-middle bg-body-emphasis rounded-pill bg-opacity-50">
                                            <span class="fa-solid fa-video text-body fs-9 fs-sm-8"></span></div>
                                    </div><img class="d-none" src="{{ asset('assets/video/3.png') }}" alt="">
                                </a>
                                <div class="backdrop-faded d-flex justify-content-between p-5">
                                    <div>
                                        <h3 class="text-white mb-2">Mountain Sunset</h3>
                                        <p class="mb-0 text-secondary-light">Description text</p>
                                    </div>
                                    <div class="dropdown"> <button
                                            class="btn p-1 dropdown-toggle dropdown-caret-none text-white" type="button"
                                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                            aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="swiper-slide position-relative rounded-2 overflow-hidden portrait project-management">
                                <a href="{{ asset('assets/img/gallery/66.png') }}" data-gallery="gallery-slider-all">
                                    <img class="w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets/img/gallery/66.png') }}" alt=""></a>
                                <div class="backdrop-faded d-flex justify-content-between p-5">
                                    <div>
                                        <h3 class="text-white mb-2">Desert Photography</h3>
                                        <p class="mb-0 text-secondary-light">Description text</p>
                                    </div>
                                    <div class="dropdown"> <button
                                            class="btn p-1 dropdown-toggle dropdown-caret-none text-white" type="button"
                                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                            aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="swiper-slide position-relative rounded-2 overflow-hidden square project-management">
                                <a href="{{ asset('assets/img/gallery/42.png') }}" data-gallery="gallery-slider-all">
                                    <img class="w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets/img/gallery/42.png') }}" alt=""></a>
                                <div class="backdrop-faded d-flex justify-content-between p-5">
                                    <div>
                                        <h3 class="text-white mb-2">London</h3>
                                        <p class="mb-0 text-secondary-light">Description text</p>
                                    </div>
                                    <div class="dropdown"> <button
                                            class="btn p-1 dropdown-toggle dropdown-caret-none text-white" type="button"
                                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                            aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-nav">
                        <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span></div>
                        <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="ecommerce-tab-pane" role="tabpanel" aria-labelledby="ecommerce-tab"
                tabindex="0">
                <div class="swiper-theme-container swiper-slider-gallery">
                    <div class="swiper theme-slider"
                        data-swiper='{"speed":500,"spaceBetween":16,"slidesPerView":"auto","simulateTouch":false,"centeredSlides":true,"initialSlide":1,"thumb":{"slidesPerView":4,"spaceBetween":8,"freeMode":true,"loop":false,"watchSlidesProgress":true,"watchSlidesVisibility":true,"grabCursor":true,"breakpoints":{"540":{"slidesPerView":7},"768":{"slidesPerView":8},"1200":{"slidesPerView":9}}}}'>
                        <div class="swiper-wrapper align-items-center" id="gallery-slider-ecommerce">
                            <div class="swiper-slide position-relative rounded-2 overflow-hidden landscape ecommerce"><a
                                    href="{{ asset('assets/img/gallery/100.png') }}"
                                    data-gallery="gallery-slider-ecommerce"> <img class="w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets/img/gallery/100.png') }}" alt=""></a>
                                <div class="backdrop-faded d-flex justify-content-between p-5">
                                    <div>
                                        <h3 class="text-white mb-2">Nature</h3>
                                        <p class="mb-0 text-secondary-light">Description text</p>
                                    </div>
                                    <div class="dropdown"> <button
                                            class="btn p-1 dropdown-toggle dropdown-caret-none text-white" type="button"
                                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                            aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide position-relative rounded-2 overflow-hidden portrait ecommerce"><a
                                    href="{{ asset('assets/img/gallery/102.png') }}"
                                    data-gallery="gallery-slider-ecommerce"> <img class="w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets/img/gallery/102.png') }}" alt=""></a>
                                <div class="backdrop-faded d-flex justify-content-between p-5">
                                    <div>
                                        <h3 class="text-white mb-2">Sunset</h3>
                                        <p class="mb-0 text-secondary-light">Description text</p>
                                    </div>
                                    <div class="dropdown"> <button
                                            class="btn p-1 dropdown-toggle dropdown-caret-none text-white" type="button"
                                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                            aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="swiper-slide position-relative rounded-2 overflow-hidden landscape ecommerce photography">
                                <a href="{{ asset('assets/img/gallery/104.png') }}"
                                    data-gallery="gallery-slider-ecommerce"> <img class="w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets/img/gallery/104.png') }}" alt=""></a>
                                <div class="backdrop-faded d-flex justify-content-between p-5">
                                    <div>
                                        <h3 class="text-white mb-2">Sunset Horizon</h3>
                                        <p class="mb-0 text-secondary-light">Description text</p>
                                    </div>
                                    <div class="dropdown"> <button
                                            class="btn p-1 dropdown-toggle dropdown-caret-none text-white" type="button"
                                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                            aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="swiper-slide position-relative rounded-2 overflow-hidden square ecommerce photography">
                                <a href="{{ asset('assets/video/2.mp4') }}" data-gallery="gallery-slider-ecommerce">
                                    <div class="video-container h-100"><video
                                            class="video w-100 h-100 object-fit-cover overflow-hidden rounded-2"
                                            muted="muted" data-play-on-hover="data-play-on-hover"
                                            poster="{{ asset('assets/video/2.png') }}">
                                            <source src="{{ asset('assets/video/2.mp4') }}" type="video/mp4">
                                        </video>
                                        <div
                                            class="circle-icon-item position-absolute top-50 start-50 translate-middle bg-body-emphasis rounded-pill bg-opacity-50">
                                            <span class="fa-solid fa-video text-body fs-9 fs-sm-8"></span></div>
                                    </div><img class="d-none" src="{{ asset('assets/video/2.png') }}" alt="">
                                </a>
                                <div class="backdrop-faded d-flex justify-content-between p-5">
                                    <div>
                                        <h3 class="text-white mb-2">Bike Ride</h3>
                                        <p class="mb-0 text-secondary-light">Description text</p>
                                    </div>
                                    <div class="dropdown"> <button
                                            class="btn p-1 dropdown-toggle dropdown-caret-none text-white" type="button"
                                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                            aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-nav">
                        <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span></div>
                        <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="project-management-tab-pane" role="tabpanel"
                aria-labelledby="project-management-tab" tabindex="0">
                <div class="swiper-theme-container swiper-slider-gallery">
                    <div class="swiper theme-slider"
                        data-swiper='{"speed":500,"spaceBetween":16,"slidesPerView":"auto","simulateTouch":false,"centeredSlides":true,"initialSlide":1,"thumb":{"slidesPerView":4,"spaceBetween":8,"freeMode":true,"loop":false,"watchSlidesProgress":true,"watchSlidesVisibility":true,"grabCursor":true,"breakpoints":{"540":{"slidesPerView":7},"768":{"slidesPerView":8},"1200":{"slidesPerView":9}}}}'>
                        <div class="swiper-wrapper align-items-center" id="gallery-slider-project-management">
                            <div
                                class="swiper-slide position-relative rounded-2 overflow-hidden square project-management">
                                <a href="{{ asset('assets/img/gallery/103.png') }}"
                                    data-gallery="gallery-slider-project-management"> <img
                                        class="w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets/img/gallery/103.png') }}" alt=""></a>
                                <div class="backdrop-faded d-flex justify-content-between p-5">
                                    <div>
                                        <h3 class="text-white mb-2">Ear Buds</h3>
                                        <p class="mb-0 text-secondary-light">Description text</p>
                                    </div>
                                    <div class="dropdown"> <button
                                            class="btn p-1 dropdown-toggle dropdown-caret-none text-white" type="button"
                                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                            aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="swiper-slide position-relative rounded-2 overflow-hidden portrait project-management photography">
                                <a href="{{ asset('assets/img/gallery/71.png') }}"
                                    data-gallery="gallery-slider-project-management"> <img
                                        class="w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets/img/gallery/71.png') }}" alt=""></a>
                                <div class="backdrop-faded d-flex justify-content-between p-5">
                                    <div>
                                        <h3 class="text-white mb-2">Sunset</h3>
                                        <p class="mb-0 text-secondary-light">Description text</p>
                                    </div>
                                    <div class="dropdown"> <button
                                            class="btn p-1 dropdown-toggle dropdown-caret-none text-white" type="button"
                                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                            aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="swiper-slide position-relative rounded-2 overflow-hidden landscape project-management">
                                <a href="{{ asset('assets/video/3.mp4') }}"
                                    data-gallery="gallery-slider-project-management">
                                    <div class="video-container h-100"><video
                                            class="video w-100 h-100 object-fit-cover overflow-hidden rounded-2"
                                            muted="muted" data-play-on-hover="data-play-on-hover"
                                            poster="{{ asset('assets/video/3.png') }}">
                                            <source src="{{ asset('assets/video/3.mp4') }}" type="video/mp4">
                                        </video>
                                        <div
                                            class="circle-icon-item position-absolute top-50 start-50 translate-middle bg-body-emphasis rounded-pill bg-opacity-50">
                                            <span class="fa-solid fa-video text-body fs-9 fs-sm-8"></span></div>
                                    </div><img class="d-none" src="{{ asset('assets/video/3.png') }}" alt="">
                                </a>
                                <div class="backdrop-faded d-flex justify-content-between p-5">
                                    <div>
                                        <h3 class="text-white mb-2">Mountain Sunset</h3>
                                        <p class="mb-0 text-secondary-light">Description text</p>
                                    </div>
                                    <div class="dropdown"> <button
                                            class="btn p-1 dropdown-toggle dropdown-caret-none text-white" type="button"
                                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                            aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="swiper-slide position-relative rounded-2 overflow-hidden portrait project-management">
                                <a href="{{ asset('assets/img/gallery/66.png') }}"
                                    data-gallery="gallery-slider-project-management"> <img
                                        class="w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets/img/gallery/66.png') }}" alt=""></a>
                                <div class="backdrop-faded d-flex justify-content-between p-5">
                                    <div>
                                        <h3 class="text-white mb-2">Desert Photography</h3>
                                        <p class="mb-0 text-secondary-light">Description text</p>
                                    </div>
                                    <div class="dropdown"> <button
                                            class="btn p-1 dropdown-toggle dropdown-caret-none text-white" type="button"
                                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                            aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="swiper-slide position-relative rounded-2 overflow-hidden square project-management">
                                <a href="{{ asset('assets/img/gallery/42.png') }}"
                                    data-gallery="gallery-slider-project-management"> <img
                                        class="w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets/img/gallery/42.png') }}" alt=""></a>
                                <div class="backdrop-faded d-flex justify-content-between p-5">
                                    <div>
                                        <h3 class="text-white mb-2">London</h3>
                                        <p class="mb-0 text-secondary-light">Description text</p>
                                    </div>
                                    <div class="dropdown"> <button
                                            class="btn p-1 dropdown-toggle dropdown-caret-none text-white" type="button"
                                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                            aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-nav">
                        <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span></div>
                        <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="photography-tab-pane" role="tabpanel" aria-labelledby="photography-tab"
                tabindex="0">
                <div class="swiper-theme-container swiper-slider-gallery">
                    <div class="swiper theme-slider"
                        data-swiper='{"speed":500,"spaceBetween":16,"slidesPerView":"auto","simulateTouch":false,"centeredSlides":true,"initialSlide":1,"thumb":{"slidesPerView":4,"spaceBetween":8,"freeMode":true,"loop":false,"watchSlidesProgress":true,"watchSlidesVisibility":true,"grabCursor":true,"breakpoints":{"540":{"slidesPerView":7},"768":{"slidesPerView":8},"1200":{"slidesPerView":9}}}}'>
                        <div class="swiper-wrapper align-items-center" id="gallery-slider-photography">
                            <div class="swiper-slide position-relative rounded-2 overflow-hidden landscape photography"><a
                                    href="{{ asset('assets/img/gallery/101.png') }}"
                                    data-gallery="gallery-slider-photography"> <img class="w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets/img/gallery/101.png') }}" alt=""></a>
                                <div class="backdrop-faded d-flex justify-content-between p-5">
                                    <div>
                                        <h3 class="text-white mb-2">Pixel 4</h3>
                                        <p class="mb-0 text-secondary-light">Description text</p>
                                    </div>
                                    <div class="dropdown"> <button
                                            class="btn p-1 dropdown-toggle dropdown-caret-none text-white" type="button"
                                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                            aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="swiper-slide position-relative rounded-2 overflow-hidden landscape ecommerce photography">
                                <a href="{{ asset('assets/img/gallery/104.png') }}"
                                    data-gallery="gallery-slider-photography"> <img class="w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets/img/gallery/104.png') }}" alt=""></a>
                                <div class="backdrop-faded d-flex justify-content-between p-5">
                                    <div>
                                        <h3 class="text-white mb-2">Sunset Horizon</h3>
                                        <p class="mb-0 text-secondary-light">Description text</p>
                                    </div>
                                    <div class="dropdown"> <button
                                            class="btn p-1 dropdown-toggle dropdown-caret-none text-white" type="button"
                                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                            aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="swiper-slide position-relative rounded-2 overflow-hidden portrait project-management photography">
                                <a href="{{ asset('assets/img/gallery/71.png') }}"
                                    data-gallery="gallery-slider-photography"> <img class="w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets/img/gallery/71.png') }}" alt=""></a>
                                <div class="backdrop-faded d-flex justify-content-between p-5">
                                    <div>
                                        <h3 class="text-white mb-2">Sunset</h3>
                                        <p class="mb-0 text-secondary-light">Description text</p>
                                    </div>
                                    <div class="dropdown"> <button
                                            class="btn p-1 dropdown-toggle dropdown-caret-none text-white" type="button"
                                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                            aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide position-relative rounded-2 overflow-hidden landscape photography"><a
                                    href="{{ asset('assets/img/gallery/105.png') }}"
                                    data-gallery="gallery-slider-photography"> <img class="w-100 h-100 object-fit-cover"
                                        src="{{ asset('assets/img/gallery/105.png') }}" alt=""></a>
                                <div class="backdrop-faded d-flex justify-content-between p-5">
                                    <div>
                                        <h3 class="text-white mb-2">Ear Buds</h3>
                                        <p class="mb-0 text-secondary-light">Description text</p>
                                    </div>
                                    <div class="dropdown"> <button
                                            class="btn p-1 dropdown-toggle dropdown-caret-none text-white" type="button"
                                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                            aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="swiper-slide position-relative rounded-2 overflow-hidden square ecommerce photography">
                                <a href="{{ asset('assets/video/2.mp4') }}" data-gallery="gallery-slider-photography">
                                    <div class="video-container h-100"><video
                                            class="video w-100 h-100 object-fit-cover overflow-hidden rounded-2"
                                            muted="muted" data-play-on-hover="data-play-on-hover"
                                            poster="{{ asset('assets/video/2.png') }}">
                                            <source src="{{ asset('assets/video/2.mp4') }}" type="video/mp4">
                                        </video>
                                        <div
                                            class="circle-icon-item position-absolute top-50 start-50 translate-middle bg-body-emphasis rounded-pill bg-opacity-50">
                                            <span class="fa-solid fa-video text-body fs-9 fs-sm-8"></span></div>
                                    </div><img class="d-none" src="{{ asset('assets/video/2.png') }}" alt="">
                                </a>
                                <div class="backdrop-faded d-flex justify-content-between p-5">
                                    <div>
                                        <h3 class="text-white mb-2">Bike Ride</h3>
                                        <p class="mb-0 text-secondary-light">Description text</p>
                                    </div>
                                    <div class="dropdown"> <button
                                            class="btn p-1 dropdown-toggle dropdown-caret-none text-white" type="button"
                                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                            aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-nav">
                        <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span></div>
                        <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/isotope-packery/packery-mode.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/glightbox/glightbox.min.js') }}"></script>
@endpush
