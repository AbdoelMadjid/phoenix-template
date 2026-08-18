@extends('layouts.vertical')

@section('title', 'Album')

@section('content')
    <nav class="mb-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
            <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
            <li class="breadcrumb-item active">Default</li>
        </ol>
    </nav>
    <div class="mb-9">
        <h2 class="mb-5">Album</h2>
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
        <ul class="nav nav-underline my-4 gap-0 w-max-content" data-filter-nav="data-filter-nav">
            <li class="nav-item"><a class="nav-link pe-3 cursor-pointer text-start active" data-filter="*">All</a></li>
            <li class="nav-item"><a class="nav-link px-3 cursor-pointer" data-filter=".image">Image</a></li>
            <li class="nav-item"><a class="nav-link px-3 cursor-pointer" data-filter=".video">Video</a></li>
        </ul>
        <div class="row g-4" id="gallery-album" data-sl-isotope='{"layoutMode":"packery","packery":{"gutter":0}}'>
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item image">
                <div class="album-item position-relative overflow-hidden"><a class="text-decoration-none"
                        href="{{ url('gallery-grid') }}">
                        <div class="photo-stack">
                            <div class="rounded-2 overflow-hidden photo-stack-top"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/109.png') }}" alt=""></div>
                            <div class="rounded-2 overflow-hidden photo-stack-middle"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/77.png') }}" alt=""></div>
                            <div class="rounded-2 overflow-hidden photo-stack-bottom"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/78.png') }}" alt=""></div>
                        </div>
                        <h4 class="mt-5 title">Trip</h4>
                        <p class="mb-0 fs-9 text-body">43 Items</p>
                    </a>
                    <div class="dropdown position-absolute top-0 end-0 mt-3 me-3 z-5"><button
                            class="btn btn-sm px-3 dropdown-toggle dropdown-caret-none" type="button"
                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                            data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a
                                class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item"
                                href="#!">Download</a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item video">
                <div class="album-item position-relative overflow-hidden"><a class="text-decoration-none"
                        href="{{ url('gallery-grid') }}">
                        <div class="photo-stack">
                            <div class="rounded-2 overflow-hidden photo-stack-top">
                                <div class="video-container"><video
                                        class="video d-block h-100 w-100 overflow-hidden rounded-2" muted="muted"
                                        data-play-on-hover="data-play-on-hover" poster="{{ asset('assets/video/1.png') }}">
                                        <source src="{{ asset('assets/video/1.mp4') }}" type="video/mp4">
                                    </video>
                                    <div
                                        class="circle-icon-item position-absolute top-50 start-50 translate-middle bg-body-emphasis rounded-pill bg-opacity-50">
                                        <span class="fa-solid fa-video text-body fs-9 fs-sm-8"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-2 overflow-hidden photo-stack-middle"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/81.png') }}" alt=""></div>
                            <div class="rounded-2 overflow-hidden photo-stack-bottom"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/80.png') }}" alt=""></div>
                        </div>
                        <h4 class="mt-5 title">Hotel</h4>
                        <p class="mb-0 fs-9 text-body">23 Items</p>
                    </a>
                    <div class="dropdown position-absolute top-0 end-0 mt-3 me-3 z-5"><button
                            class="btn btn-sm px-3 dropdown-toggle dropdown-caret-none" type="button"
                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                            data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a
                                class="dropdown-item" href="#!">Download</a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item image">
                <div class="album-item position-relative overflow-hidden"><a class="text-decoration-none"
                        href="{{ url('gallery-grid') }}">
                        <div class="photo-stack">
                            <div class="rounded-2 overflow-hidden photo-stack-top"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/111.png') }}" alt=""></div>
                            <div class="rounded-2 overflow-hidden photo-stack-middle"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/82.png') }}" alt=""></div>
                            <div class="rounded-2 overflow-hidden photo-stack-bottom"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/83.png') }}" alt=""></div>
                        </div>
                        <h4 class="mt-5 title">Trip Details</h4>
                        <p class="mb-0 fs-9 text-body">32 Items</p>
                    </a>
                    <div class="dropdown position-absolute top-0 end-0 mt-3 me-3 z-5"><button
                            class="btn btn-sm px-3 dropdown-toggle dropdown-caret-none" type="button"
                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                            data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a
                                class="dropdown-item" href="#!">Download</a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item video">
                <div class="album-item position-relative overflow-hidden"><a class="text-decoration-none"
                        href="{{ url('gallery-grid') }}">
                        <div class="photo-stack">
                            <div class="rounded-2 overflow-hidden photo-stack-top">
                                <div class="video-container"><video
                                        class="video d-block h-100 w-100 overflow-hidden rounded-2" muted="muted"
                                        data-play-on-hover="data-play-on-hover"
                                        poster="{{ asset('assets/video/2.png') }}">
                                        <source src="{{ asset('assets/video/2.mp4') }}" type="video/mp4">
                                    </video>
                                    <div
                                        class="circle-icon-item position-absolute top-50 start-50 translate-middle bg-body-emphasis rounded-pill bg-opacity-50">
                                        <span class="fa-solid fa-video text-body fs-9 fs-sm-8"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-2 overflow-hidden photo-stack-middle"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/84.png') }}" alt=""></div>
                            <div class="rounded-2 overflow-hidden photo-stack-bottom"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/85.png') }}" alt=""></div>
                        </div>
                        <h4 class="mt-5 title">Landing</h4>
                        <p class="mb-0 fs-9 text-body">12 Items</p>
                    </a>
                    <div class="dropdown position-absolute top-0 end-0 mt-3 me-3 z-5"><button
                            class="btn btn-sm px-3 dropdown-toggle dropdown-caret-none" type="button"
                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                            data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a
                                class="dropdown-item" href="#!">Download</a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item image">
                <div class="album-item position-relative overflow-hidden"><a class="text-decoration-none"
                        href="{{ url('gallery-grid') }}">
                        <div class="photo-stack">
                            <div class="rounded-2 overflow-hidden photo-stack-top"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/112.png') }}" alt=""></div>
                            <div class="rounded-2 overflow-hidden photo-stack-middle"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/86.png') }}" alt=""></div>
                            <div class="rounded-2 overflow-hidden photo-stack-bottom"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/87.png') }}" alt=""></div>
                        </div>
                        <h4 class="mt-5 title">E commerce</h4>
                        <p class="mb-0 fs-9 text-body">56 Items</p>
                    </a>
                    <div class="dropdown position-absolute top-0 end-0 mt-3 me-3 z-5"><button
                            class="btn btn-sm px-3 dropdown-toggle dropdown-caret-none" type="button"
                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                            data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a
                                class="dropdown-item" href="#!">Download</a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item image">
                <div class="album-item position-relative overflow-hidden"><a class="text-decoration-none"
                        href="{{ url('gallery-grid') }}">
                        <div class="photo-stack">
                            <div class="rounded-2 overflow-hidden photo-stack-top"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/113.png') }}" alt=""></div>
                            <div class="rounded-2 overflow-hidden photo-stack-middle"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/88.png') }}" alt=""></div>
                            <div class="rounded-2 overflow-hidden photo-stack-bottom"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/89.png') }}" alt=""></div>
                        </div>
                        <h4 class="mt-5 title">Products</h4>
                        <p class="mb-0 fs-9 text-body">45 Items</p>
                    </a>
                    <div class="dropdown position-absolute top-0 end-0 mt-3 me-3 z-5"><button
                            class="btn btn-sm px-3 dropdown-toggle dropdown-caret-none" type="button"
                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                            data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a
                                class="dropdown-item" href="#!">Download</a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item image">
                <div class="album-item position-relative overflow-hidden"><a class="text-decoration-none"
                        href="{{ url('gallery-grid') }}">
                        <div class="photo-stack">
                            <div class="rounded-2 overflow-hidden photo-stack-top"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/114.png') }}" alt=""></div>
                            <div class="rounded-2 overflow-hidden photo-stack-middle"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/90.png') }}" alt=""></div>
                            <div class="rounded-2 overflow-hidden photo-stack-bottom"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/91.png') }}" alt=""></div>
                        </div>
                        <h4 class="mt-5 title">Project Management</h4>
                        <p class="mb-0 fs-9 text-body">61 Items</p>
                    </a>
                    <div class="dropdown position-absolute top-0 end-0 mt-3 me-3 z-5"><button
                            class="btn btn-sm px-3 dropdown-toggle dropdown-caret-none" type="button"
                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                            data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a
                                class="dropdown-item" href="#!">Download</a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item image">
                <div class="album-item position-relative overflow-hidden"><a class="text-decoration-none"
                        href="{{ url('gallery-grid') }}">
                        <div class="photo-stack">
                            <div class="rounded-2 overflow-hidden photo-stack-top"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/115.png') }}" alt=""></div>
                            <div class="rounded-2 overflow-hidden photo-stack-middle"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/92.png') }}" alt=""></div>
                            <div class="rounded-2 overflow-hidden photo-stack-bottom"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/93.png') }}" alt=""></div>
                        </div>
                        <h4 class="mt-5 title">Kanban</h4>
                        <p class="mb-0 fs-9 text-body">45 Items</p>
                    </a>
                    <div class="dropdown position-absolute top-0 end-0 mt-3 me-3 z-5"><button
                            class="btn btn-sm px-3 dropdown-toggle dropdown-caret-none" type="button"
                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                            data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a
                                class="dropdown-item" href="#!">Download</a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item image">
                <div class="album-item position-relative overflow-hidden"><a class="text-decoration-none"
                        href="{{ url('gallery-grid') }}">
                        <div class="photo-stack">
                            <div class="rounded-2 overflow-hidden photo-stack-top"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/116.png') }}" alt=""></div>
                            <div class="rounded-2 overflow-hidden photo-stack-middle"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/94.png') }}" alt=""></div>
                            <div class="rounded-2 overflow-hidden photo-stack-bottom"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/95.png') }}" alt=""></div>
                        </div>
                        <h4 class="mt-5 title">Social</h4>
                        <p class="mb-0 fs-9 text-body">23 Items</p>
                    </a>
                    <div class="dropdown position-absolute top-0 end-0 mt-3 me-3 z-5"><button
                            class="btn btn-sm px-3 dropdown-toggle dropdown-caret-none" type="button"
                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                            data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a
                                class="dropdown-item" href="#!">Download</a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item video">
                <div class="album-item position-relative overflow-hidden"><a class="text-decoration-none"
                        href="{{ url('gallery-grid') }}">
                        <div class="photo-stack">
                            <div class="rounded-2 overflow-hidden photo-stack-top">
                                <div class="video-container"><video
                                        class="video d-block h-100 w-100 overflow-hidden rounded-2" muted="muted"
                                        data-play-on-hover="data-play-on-hover"
                                        poster="{{ asset('assets/video/3.png') }}">
                                        <source src="{{ asset('assets/video/3.mp4') }}" type="video/mp4">
                                    </video>
                                    <div
                                        class="circle-icon-item position-absolute top-50 start-50 translate-middle bg-body-emphasis rounded-pill bg-opacity-50">
                                        <span class="fa-solid fa-video text-body fs-9 fs-sm-8"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-2 overflow-hidden photo-stack-middle"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/96.png') }}" alt=""></div>
                            <div class="rounded-2 overflow-hidden photo-stack-bottom"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/97.png') }}" alt=""></div>
                        </div>
                        <h4 class="mt-5 title">Travel vlogs</h4>
                        <p class="mb-0 fs-9 text-body">34 Items</p>
                    </a>
                    <div class="dropdown position-absolute top-0 end-0 mt-3 me-3 z-5"><button
                            class="btn btn-sm px-3 dropdown-toggle dropdown-caret-none" type="button"
                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                            data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a
                                class="dropdown-item" href="#!">Download</a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item video">
                <div class="album-item position-relative overflow-hidden"><a class="text-decoration-none"
                        href="{{ url('gallery-grid') }}">
                        <div class="photo-stack">
                            <div class="rounded-2 overflow-hidden photo-stack-top">
                                <div class="video-container"><video
                                        class="video d-block h-100 w-100 overflow-hidden rounded-2" muted="muted"
                                        data-play-on-hover="data-play-on-hover"
                                        poster="{{ asset('assets/video/4.png') }}">
                                        <source src="{{ asset('assets/video/4.mp4') }}" type="video/mp4">
                                    </video>
                                    <div
                                        class="circle-icon-item position-absolute top-50 start-50 translate-middle bg-body-emphasis rounded-pill bg-opacity-50">
                                        <span class="fa-solid fa-video text-body fs-9 fs-sm-8"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-2 overflow-hidden photo-stack-middle"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/98.png') }}" alt=""></div>
                            <div class="rounded-2 overflow-hidden photo-stack-bottom"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/99.png') }}" alt=""></div>
                        </div>
                        <h4 class="mt-5 title">Travel Agency</h4>
                        <p class="mb-0 fs-9 text-body">89 Items</p>
                    </a>
                    <div class="dropdown position-absolute top-0 end-0 mt-3 me-3 z-5"><button
                            class="btn btn-sm px-3 dropdown-toggle dropdown-caret-none" type="button"
                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                            data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a
                                class="dropdown-item" href="#!">Download</a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item image">
                <div class="album-item position-relative overflow-hidden"><a class="text-decoration-none"
                        href="{{ url('gallery-grid') }}">
                        <div class="photo-stack">
                            <div class="rounded-2 overflow-hidden photo-stack-top"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/117.png') }}" alt=""></div>
                            <div class="rounded-2 overflow-hidden photo-stack-middle"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/100.png') }}" alt=""></div>
                            <div class="rounded-2 overflow-hidden photo-stack-bottom"><img class="w-100 object-fit-cover"
                                    src="{{ asset('assets/img/gallery/101.png') }}" alt=""></div>
                        </div>
                        <h4 class="mt-5 title">Events</h4>
                        <p class="mb-0 fs-9 text-body">54 Items</p>
                    </a>
                    <div class="dropdown position-absolute top-0 end-0 mt-3 me-3 z-5"><button
                            class="btn btn-sm px-3 dropdown-toggle dropdown-caret-none" type="button"
                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                            data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a
                                class="dropdown-item" href="#!">Download</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/isotope-packery/packery-mode.pkgd.min.js') }}"></script>
@endpush
