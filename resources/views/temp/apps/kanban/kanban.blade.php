@extends('layouts.vertical')

@section('title', 'Kanban')

@push('styles')
<link href="{{ asset('vendors/glightbox/glightbox.min.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="kanban-header">
          <div class="row gx-0 justify-content-between justify-content-md-start">
            <div class="col-auto">
              <div class="dropdown"><button class="btn btn-link text-decoration-none text-body-emphasis fs-8 ps-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="fs-7 me-2">Phoenix</span><span class="fas fa-angle-down text-body-quaternary d-inline-block" data-fa-transform="up-2" style="min-width: 12px"></span></button>
                <div class="dropdown-menu py-0"> <a class="dropdown-item" href="#!">Sparrow</a><a class="dropdown-item" href="#!">Boreas</a><a class="dropdown-item" href="#!">Erebus</a></div>
              </div>
            </div>
            <div class="col-auto d-flex align-items-center">
              <div class="avatar-group"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                  <div class="avatar avatar-m ">
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
                  <div class="avatar avatar-m ">
                    <img class="rounded-circle " src="{{ asset('assets/img/team/60.webp') }}" alt="">
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
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/60.webp') }}" alt=""></div>
                        <h6 class="text-white">Emma Watson</h6>
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
                  <div class="avatar avatar-m ">
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
                        <h6 class="text-white">Igor Borvibson</h6>
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
                  <div class="avatar avatar-m ">
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
                </div>
              </div><button class="btn btn-primary ms-4 fs-10 px-3"><span class="fas fa-user-plus d-inline-block" style="min-width: 14px"></span><span class="d-none d-sm-inline ms-2">invite</span></button>
            </div>
            <div class="col-md-auto d-flex align-items-center ms-auto mt-2 mt-md-0">
              <ul class="nav w-100 fs-9">
                <li class="nav-item"><a class="nav-link d-flex align-items-center text-body ps-0 pe-2 px-xl-3 fw-bold" href="#!" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span class="me-1 fas fa-search" data-fa-transform="up-2" style="min-width: 14px"></span><span class="d-none d-xxl-inline">Search</span></a></li>
                <li class="nav-item"><a class="nav-link d-flex align-items-center text-body px-2 px-xl-3 fw-bold" href="#!"><span class="me-1 fas fa-filter" data-fa-transform="up-2" style="min-width: 14px"></span><span class="d-none d-xxl-inline">Filter</span></a></li>
                <li class="nav-item"><a class="nav-link d-flex align-items-center text-body px-2 px-xl-3 fw-bold" href="#!"><span class="me-1 fa-solid fa-right-left" data-fa-transform="up-2" style="min-width: 14px"></span><span class="d-none d-xxl-inline">Export/import</span></a></li>
                <li class="nav-item"><a class="nav-link d-flex align-items-center text-body px-2 px-xl-3 fw-bold" href="#!"><span class="me-1 fas fa-palette" data-fa-transform="up-2" style="min-width: 14px"></span><span class="d-none d-xxl-inline">Modify</span></a></li>
                <li class="nav-item"><a class="nav-link d-flex align-items-center text-body px-2 px-xl-3 fw-bold" href="#!"><span class="me-1 fa-solid fa-bars-staggered" data-fa-transform="up-2" style="min-width: 14px"></span><span class="d-none d-xxl-inline">Gantt</span></a></li>
                <li class="nav-item"><a class="nav-link d-flex align-items-center text-body px-2 px-xl-3 fw-bold" href="#!"><span class="me-1 fa-solid fa-calendar-days" data-fa-transform="up-2" style="min-width: 14px"></span><span class="d-none d-xxl-inline">Calendar</span></a></li>
                <li class="nav-item"><a class="nav-link d-flex align-items-center text-body px-2 px-xl-3 fw-bold" href="#!"><span class="me-1 fa-solid fa-box-archive" data-fa-transform="up-2" style="min-width: 14px"></span><span class="d-none d-xxl-inline">Archive</span></a></li>
                <li class="nav-item ms-auto"><a class="nav-link d-flex align-items-center pe-0 ps-1 ps-xl-3 text-body h-100" data-phoenix-toggle="offcanvas" data-phoenix-target="#offcanvasKanban" href="#offcanvasKanban" role="button"><span class="fa-solid fa-bars d-inline" data-fa-transform="up-2" style="min-width: 14px"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="kanban-container scrollbar" data-kanban-container="data-kanban-container">
          <div class="kanban-column scrollbar collapsed">
            <div class="kanban-column-header px-4 hover-actions-trigger">
              <div class="d-flex align-items-center border-bottom border-3 py-3 border-warning">
                <h5 class="mb-0 kanban-column-title">Unassaigned<span class="kanban-title-badge">3</span></h5>
                <div class="hover-actions-trigger"><button class="btn btn-sm btn-phoenix-default kanban-header-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                  <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Sort tasks</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Sort all tasks</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move all tasks</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Remove all tasks</span></a>
                    <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Import</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Export</span><span class="fas fa-angle-right fs-10"></span></a>
                    <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move column</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate column</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Delete column</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Archive column</span></a>
                    <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Edit title &amp; description</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Edit colour</span><span class="fas fa-angle-right fs-10"></span></a>
                  </div>
                </div><span class="uil uil-left-arrow-to-left fs-8 ms-auto kanban-collapse-icon" data-kanban-collapse="data-kanban-collapse"></span><span class="uil uil-arrow-from-right fs-8 ms-auto kanban-collapse-icon" data-kanban-collapse="data-kanban-collapse"></span>
              </div>
            </div>
            <div class="kanban-items-container" data-sortable="data-sortable">
              <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                <div class="card sortable-item hover-actions-trigger">
                  <div class="card-body py-3 px-3">
                    <div class="kanban-status mb-1 position-relative lh-1"><span class="fa fa-circle me-2 d-inline-block text-primary" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-primary"><span>Feature</span><span class="ms-1 d-inline-block fas fa-check-double" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                      </div>
                    </div>
                    <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Develop a new feature for the phoenix mobile app</p>
                    <div class="d-flex mt-2 align-items-center"></div>
                  </div>
                </div>
              </div>
              <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                <div class="card sortable-item hover-actions-trigger">
                  <div class="card-body py-3 px-3">
                    <div class="kanban-status mb-1 position-relative lh-1"><span class="fa fa-circle me-2 d-inline-block text-danger" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-danger"><span>Bug</span><span class="ms-1 d-inline-block fas fa-bug" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                      </div>
                    </div>
                    <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Conduct user research to gather feedback on the latest product iteration</p>
                    <div class="d-flex mt-2 align-items-center"></div>
                  </div>
                </div>
              </div>
              <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                <div class="card sortable-item hover-actions-trigger">
                  <div class="card-body py-3 px-3">
                    <div class="kanban-status mb-1 position-relative lh-1"><span class="fa fa-circle me-2 d-inline-block text-warning" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span>Issue</span><span class="ms-1 d-inline-block fa-solid fa-triangle-exclamation" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                      </div>
                    </div>
                    <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Review and approve marketing materials for the upcoming product launch</p>
                    <div class="d-flex mt-2 align-items-center"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-3 px-4 kanban-add-task"><button class="btn bg-sm bg-body-tertiary me-2 px-0" data-bs-toggle="modal" data-bs-target="#kanbanAddTask"><span class="fas fa-plus text-white dark__text-gray-400" data-fa-transform="grow-4 down-1"></span></button><input class="form-control search-input rounded-3 px-3" placeholder="Add new task"></div>
          </div>
          <div class="kanban-column scrollbar">
            <div class="kanban-column-header px-4 hover-actions-trigger">
              <div class="d-flex align-items-center border-bottom border-3 py-3 border-300">
                <h5 class="mb-0 kanban-column-title">To do<span class="kanban-title-badge">2</span></h5>
                <div class="hover-actions-trigger"><button class="btn btn-sm btn-phoenix-default kanban-header-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                  <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Sort tasks</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Sort all tasks</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move all tasks</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Remove all tasks</span></a>
                    <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Import</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Export</span><span class="fas fa-angle-right fs-10"></span></a>
                    <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move column</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate column</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Delete column</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Archive column</span></a>
                    <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Edit title &amp; description</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Edit colour</span><span class="fas fa-angle-right fs-10"></span></a>
                  </div>
                </div><span class="uil uil-left-arrow-to-left fs-8 ms-auto kanban-collapse-icon" data-kanban-collapse="data-kanban-collapse"></span><span class="uil uil-arrow-from-right fs-8 ms-auto kanban-collapse-icon" data-kanban-collapse="data-kanban-collapse"></span>
              </div>
            </div>
            <div class="kanban-items-container" data-sortable="data-sortable">
              <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                <div class="card sortable-item hover-actions-trigger">
                  <div class="card-body py-3 px-3">
                    <div class="position-relative mb-2 overflow-hidden rounded" style="height:200px; width:100%">
                      <div class="bg-holder" style="background-image:url({{ asset('assets/img/kanban/1.jpg') }});"></div>
                      <!--/.bg-holder-->
                    </div>
                    <div class="kanban-status mb-1 position-relative lh-1"><span class="fa fa-circle me-2 d-inline-block text-danger" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-danger"><span>Bug</span><span class="ms-1 d-inline-block fas fa-bug" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                      </div>
                    </div>
                    <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Test and debug code for the e-commerce website checkout process</p>
                    <div class="d-flex mt-2 align-items-center">
                      <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span class="fa-solid fa-paperclip fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>15</p>
                      <div class="avatar-group ms-auto">
                        <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                          <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}" alt="">
                        </div>
                        <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                          <img class="rounded-circle " src="{{ asset('assets/img/team/57.webp') }}" alt="">
                        </div>
                        <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                          <img class="rounded-circle " src="{{ asset('assets/img/team/25.webp') }}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                <div class="card sortable-item hover-actions-trigger">
                  <div class="card-body py-3 px-3">
                    <div class="kanban-status mb-1 position-relative lh-1"><span class="fa fa-circle me-2 d-inline-block text-warning" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span>Issue</span><span class="ms-1 d-inline-block fa-solid fa-triangle-exclamation" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                      </div>
                    </div>
                    <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Write a blog post on industry trends and best practices</p>
                    <div class="d-flex mt-2 align-items-center">
                      <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1 me-3 white-space-nowrap"><span class="fa-solid fa-calendar-xmark fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>Jan 25</p>
                      <div class="avatar-group ms-auto">
                        <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                          <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}" alt="">
                        </div>
                        <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                          <img class="rounded-circle " src="{{ asset('assets/img/team/57.webp') }}" alt="">
                        </div>
                        <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                          <img class="rounded-circle " src="{{ asset('assets/img/team/25.webp') }}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-3 px-4 kanban-add-task"><button class="btn bg-sm bg-body-tertiary me-2 px-0" data-bs-toggle="modal" data-bs-target="#kanbanAddTask"><span class="fas fa-plus text-white dark__text-gray-400" data-fa-transform="grow-4 down-1"></span></button><input class="form-control search-input rounded-3 px-3" placeholder="Add new task"></div>
          </div>
          <div class="kanban-column scrollbar">
            <div class="kanban-column-header px-4 hover-actions-trigger">
              <div class="d-flex align-items-center border-bottom border-3 py-3 border-primary">
                <h5 class="mb-0 kanban-column-title">Doing<span class="kanban-title-badge">4</span></h5>
                <div class="hover-actions-trigger"><button class="btn btn-sm btn-phoenix-default kanban-header-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                  <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Sort tasks</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Sort all tasks</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move all tasks</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Remove all tasks</span></a>
                    <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Import</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Export</span><span class="fas fa-angle-right fs-10"></span></a>
                    <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move column</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate column</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Delete column</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Archive column</span></a>
                    <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Edit title &amp; description</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Edit colour</span><span class="fas fa-angle-right fs-10"></span></a>
                  </div>
                </div><span class="uil uil-left-arrow-to-left fs-8 ms-auto kanban-collapse-icon" data-kanban-collapse="data-kanban-collapse"></span><span class="uil uil-arrow-from-right fs-8 ms-auto kanban-collapse-icon" data-kanban-collapse="data-kanban-collapse"></span>
              </div>
            </div>
            <div class="kanban-items-container" data-sortable="data-sortable">
              <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                <div class="card sortable-item hover-actions-trigger">
                  <div class="card-body py-3 px-3">
                    <div class="kanban-status mb-1 position-relative lh-1"><span class="fa fa-circle me-2 d-inline-block text-danger" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-danger"><span>Bug</span><span class="ms-1 d-inline-block fas fa-bug" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                      </div>
                    </div>
                    <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Create wireframes for a new phoenix landing page design</p>
                    <div class="d-flex mt-2 align-items-center">
                      <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1 me-3 white-space-nowrap"><span class="fa-solid fa-calendar-xmark fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>Jan 25</p>
                      <div class="avatar-group ms-auto">
                        <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                          <img class="rounded-circle " src="{{ asset('assets/img/team/57.webp') }}" alt="">
                        </div>
                        <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                          <div class="avatar-name rounded-circle text-warning bg-warning-subtle"><span>R</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                <div class="card sortable-item hover-actions-trigger">
                  <div class="card-body py-3 px-3">
                    <div class="kanban-status mb-1 position-relative lh-1"><span class="fa fa-circle me-2 d-inline-block text-secondary" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-secondary"><span>Undefined</span><span class="ms-1 d-inline-block fas fa-spinner" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                      </div>
                    </div>
                    <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Set up and configure a new software tool for the marketing team</p>
                    <div class="d-flex mt-2 align-items-center">
                      <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span class="fa fa-check-square fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>5/34</p>
                      <div class="avatar-group ms-auto">
                        <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                          <img class="rounded-circle " src="{{ asset('assets/img/team/25.webp') }}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                <div class="card sortable-item hover-actions-trigger">
                  <div class="card-body py-3 px-3">
                    <div class="kanban-status mb-1 position-relative lh-1"><span class="fa fa-circle me-2 d-inline-block text-primary" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-primary"><span>Feature</span><span class="ms-1 d-inline-block fas fa-check-double" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                      </div>
                    </div>
                    <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Draft and send a press release to announce a new partnership</p>
                    <div class="d-flex mt-2 align-items-center">
                      <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1 me-3 white-space-nowrap"><span class="fa-solid fa-calendar-xmark fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>Jan 25</p>
                      <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span class="fa-solid fa-paperclip fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>15</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                <div class="card sortable-item hover-actions-trigger">
                  <div class="card-body py-3 px-3">
                    <div class="position-relative mb-2 overflow-hidden rounded" style="height:200px; width:100%">
                      <div class="bg-holder" style="background-image:url({{ asset('assets/img/kanban/glass.jpg') }});"></div>
                      <!--/.bg-holder-->
                    </div>
                    <div class="kanban-status mb-1 position-relative lh-1"><span class="fa fa-circle me-2 d-inline-block text-warning" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span>Issue</span><span class="ms-1 d-inline-block fa-solid fa-triangle-exclamation" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                      </div>
                    </div>
                    <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Conduct a security audit of the phoenix web applications</p>
                    <div class="d-flex mt-2 align-items-center">
                      <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1 me-3 white-space-nowrap"><span class="fa-solid fa-calendar-xmark fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>Jan 25</p>
                      <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span class="fa-solid fa-paperclip fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>15</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-3 px-4 kanban-add-task"><button class="btn bg-sm bg-body-tertiary me-2 px-0" data-bs-toggle="modal" data-bs-target="#kanbanAddTask"><span class="fas fa-plus text-white dark__text-gray-400" data-fa-transform="grow-4 down-1"></span></button><input class="form-control search-input rounded-3 px-3" placeholder="Add new task"></div>
          </div>
          <div class="kanban-column scrollbar">
            <div class="kanban-column-header px-4 hover-actions-trigger">
              <div class="d-flex align-items-center border-bottom border-3 py-3 border-info">
                <h5 class="mb-0 kanban-column-title">Review<span class="kanban-title-badge">4</span></h5>
                <div class="hover-actions-trigger"><button class="btn btn-sm btn-phoenix-default kanban-header-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                  <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Sort tasks</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Sort all tasks</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move all tasks</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Remove all tasks</span></a>
                    <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Import</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Export</span><span class="fas fa-angle-right fs-10"></span></a>
                    <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move column</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate column</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Delete column</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Archive column</span></a>
                    <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Edit title &amp; description</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Edit colour</span><span class="fas fa-angle-right fs-10"></span></a>
                  </div>
                </div><span class="uil uil-left-arrow-to-left fs-8 ms-auto kanban-collapse-icon" data-kanban-collapse="data-kanban-collapse"></span><span class="uil uil-arrow-from-right fs-8 ms-auto kanban-collapse-icon" data-kanban-collapse="data-kanban-collapse"></span>
              </div>
            </div>
            <div class="kanban-items-container" data-sortable="data-sortable">
              <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                <div class="card sortable-item hover-actions-trigger">
                  <div class="card-body py-3 px-3">
                    <div class="kanban-status mb-1 position-relative lh-1"><span class="fa fa-circle me-2 d-inline-block text-warning" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span>Issue</span><span class="ms-1 d-inline-block fa-solid fa-triangle-exclamation" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                      </div>
                    </div>
                    <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Design and develop a new logo for the phoenix</p>
                    <div class="d-flex mt-2 align-items-center">
                      <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span class="fa-solid fa-paperclip fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>15</p>
                      <div class="avatar-group ms-auto">
                        <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                          <img class="rounded-circle " src="{{ asset('assets/img/team/57.webp') }}" alt="">
                        </div>
                        <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                          <img class="rounded-circle " src="{{ asset('assets/img/team/25.webp') }}" alt="">
                        </div>
                        <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                          <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                <div class="card sortable-item hover-actions-trigger">
                  <div class="card-body py-3 px-3">
                    <div class="kanban-status mb-1 position-relative lh-1"><span class="fa fa-circle me-2 d-inline-block text-warning" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span>Issue</span><span class="ms-1 d-inline-block fa-solid fa-triangle-exclamation" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                      </div>
                    </div>
                    <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Create a fresh visual identity for Phoenix with a new logo design</p>
                    <div class="d-flex mt-2 align-items-center">
                      <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span class="fa fa-check-square fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>5/34</p>
                      <div class="avatar-group ms-auto">
                        <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                          <img class="rounded-circle " src="{{ asset('assets/img/team/25.webp') }}" alt="">
                        </div>
                        <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                          <img class="rounded-circle " src="{{ asset('assets/img/team/57.webp') }}" alt="">
                        </div>
                        <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                          <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                <div class="card sortable-item hover-actions-trigger">
                  <div class="card-body py-3 px-3">
                    <div class="kanban-status mb-1 position-relative lh-1"><span class="fa fa-circle me-2 d-inline-block text-secondary" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-secondary"><span>Undefined</span><span class="ms-1 d-inline-block fas fa-spinner" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                      </div>
                    </div>
                    <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Identify best software vendors for company-wide system through comprehensive research and evaluation</p>
                    <div class="d-flex mt-2 align-items-center">
                      <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span class="fa-solid fa-paperclip fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>15</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                <div class="card sortable-item hover-actions-trigger">
                  <div class="card-body py-3 px-3">
                    <div class="position-relative mb-2 overflow-hidden rounded" style="height:200px; width:100%">
                      <div class="bg-holder" style="background-image:url({{ asset('assets/img/kanban/wall.jpg') }});"></div>
                      <!--/.bg-holder-->
                    </div>
                    <div class="kanban-status mb-1 position-relative lh-1"><span class="fa fa-circle me-2 d-inline-block text-primary" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-primary"><span>Feature</span><span class="ms-1 d-inline-block fas fa-check-double" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                      </div>
                    </div>
                    <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Write and edit copy for a new email marketing campaign</p>
                    <div class="d-flex mt-2 align-items-center">
                      <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span class="fa-solid fa-paperclip fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>15</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-3 px-4 kanban-add-task"><button class="btn bg-sm bg-body-tertiary me-2 px-0" data-bs-toggle="modal" data-bs-target="#kanbanAddTask"><span class="fas fa-plus text-white dark__text-gray-400" data-fa-transform="grow-4 down-1"></span></button><input class="form-control search-input rounded-3 px-3" placeholder="Add new task"></div>
          </div>
          <div class="kanban-column scrollbar">
            <div class="kanban-column-header px-4 hover-actions-trigger">
              <div class="d-flex align-items-center border-bottom border-3 py-3 border-success">
                <h5 class="mb-0 kanban-column-title">Release<span class="kanban-title-badge">3</span></h5>
                <div class="hover-actions-trigger"><button class="btn btn-sm btn-phoenix-default kanban-header-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                  <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Sort tasks</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Sort all tasks</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move all tasks</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Remove all tasks</span></a>
                    <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Import</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Export</span><span class="fas fa-angle-right fs-10"></span></a>
                    <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move column</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate column</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Delete column</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Archive column</span></a>
                    <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Edit title &amp; description</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Edit colour</span><span class="fas fa-angle-right fs-10"></span></a>
                  </div>
                </div><span class="uil uil-left-arrow-to-left fs-8 ms-auto kanban-collapse-icon" data-kanban-collapse="data-kanban-collapse"></span><span class="uil uil-arrow-from-right fs-8 ms-auto kanban-collapse-icon" data-kanban-collapse="data-kanban-collapse"></span>
              </div>
            </div>
            <div class="kanban-items-container" data-sortable="data-sortable">
              <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                <div class="card sortable-item hover-actions-trigger">
                  <div class="card-body py-3 px-3">
                    <div class="kanban-status mb-1 position-relative lh-1"><span class="fa fa-circle me-2 d-inline-block text-primary" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-primary"><span>Feature</span><span class="ms-1 d-inline-block fas fa-check-double" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                      </div>
                    </div>
                    <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Improve Phoenix website usability through user testing</p>
                    <div class="d-flex mt-2 align-items-center">
                      <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span class="fa-solid fa-paperclip fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>15</p>
                      <div class="avatar-group ms-auto">
                        <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                          <img class="rounded-circle " src="{{ asset('assets/img/team/57.webp') }}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                <div class="card sortable-item hover-actions-trigger">
                  <div class="card-body py-3 px-3">
                    <div class="position-relative mb-2 overflow-hidden rounded" style="height:200px; width:100%">
                      <div class="bg-holder" style="background-image:url({{ asset('assets/img/kanban/home.jpg') }});"></div>
                      <!--/.bg-holder-->
                    </div>
                    <div class="kanban-status mb-1 position-relative lh-1"><span class="fa fa-circle me-2 d-inline-block text-danger" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-danger"><span>Bug</span><span class="ms-1 d-inline-block fas fa-bug" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                      </div>
                    </div>
                    <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Develop and deliver a training program for new employees</p>
                    <div class="d-flex mt-2 align-items-center">
                      <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span class="fa-solid fa-paperclip fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>15</p>
                      <div class="avatar-group ms-auto">
                        <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                          <img class="rounded-circle " src="{{ asset('assets/img/team/57.webp') }}" alt="">
                        </div>
                        <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                          <img class="rounded-circle " src="{{ asset('assets/img/team/25.webp') }}" alt="">
                        </div>
                        <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                          <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="sortable-item-wrapper border-bottom border-translucent px-2 py-2">
                <div class="card sortable-item hover-actions-trigger">
                  <div class="card-body py-3 px-3">
                    <div class="kanban-status mb-1 position-relative lh-1"><span class="fa fa-circle me-2 d-inline-block text-secondary" style="min-width:1rem" data-fa-transform="shrink-1 down-3"></span><span class="badge badge-phoenix fs-10 badge-phoenix-secondary"><span>Undefined</span><span class="ms-1 d-inline-block fas fa-spinner" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span><button class="btn btn-sm btn-phoenix-default kanban-item-dropdown-btn hover-actions" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fa-rotate-90" data-fa-transform="shrink-2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2" style="width: 15rem;"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Duplicate</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to top</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Jump to bottom</span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Print/Download</span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Share</span><span class="fas fa-angle-right fs-10"></span></a>
                        <hr class="my-2"><a class="dropdown-item d-flex flex-between-center border-1 border-translucent undefined" href="#!"><span>Move to archive</span><span class="fas fa-angle-right fs-10"></span></a><a class="dropdown-item d-flex flex-between-center border-1 border-translucent text-danger" href="#!"><span>Delete</span></a>
                      </div>
                    </div>
                    <p class="mb-0 stretched-link" data-bs-toggle="modal" data-bs-target="#KanbanItemDetailsModal">Organize and lead a brainstorming session to generate new product ideas</p>
                    <div class="d-flex mt-2 align-items-center">
                      <p class="mb-0 text-body-tertiary text-opacity-85 fs-9 lh-1"><span class="fa-solid fa-paperclip fs-9 me-2 d-inline-block" style="min-width: 1rem;"></span>15</p>
                      <div class="avatar-group ms-auto">
                        <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                          <img class="rounded-circle " src="{{ asset('assets/img/team/57.webp') }}" alt="">
                        </div>
                        <div class="avatar avatar-s  border border-light-subtle rounded-pill">
                          <img class="rounded-circle " src="{{ asset('assets/img/team/25.webp') }}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-3 px-4 kanban-add-task"><button class="btn bg-sm bg-body-tertiary me-2 px-0" data-bs-toggle="modal" data-bs-target="#kanbanAddTask"><span class="fas fa-plus text-white dark__text-gray-400" data-fa-transform="grow-4 down-1"></span></button><input class="form-control search-input rounded-3 px-3" placeholder="Add new task"></div>
          </div>
          <div class="kanban-column scrollbar position-relative bg-transparent">
            <div class="d-flex h-100 flex-center fw-bold bg-body-hover"><a class="text-decoration-none stretched-link text-body-secondary" href="#!">
                <div class="circle-btn bg-body-secondary mx-auto"><span class="fas fa-plus" data-fa-transform="shrink-2"></span></div><span>Add another list</span>
              </a></div>
          </div>
        </div>
        <div class="phoenix-offcanvas phoenix-offcanvas-end bg-body-highlight position-fixed outline-none" tabindex="-1" id="offcanvasKanban" style="max-width: 445px">
          <div class="offcanvas-header justify-content-between">
            <h3 class="offcanvas-title">Phoenix Kanban</h3><button class="btn p-1 fw-bolder" type="button" data-phoenix-dismiss="offcanvas" aria-label="Close"><span class="fas fa-times fs-8"> </span></button>
          </div>
          <div class="offcanvas-body">
            <h4 class="text-body-highlight fw-semibold mb-0 mt-6">Admins </h4>
            <div class="d-flex align-items-center mt-3">
              <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                  <div class="avatar avatar-xl  me-3 border border-light-subtle rounded-pill">
                    <img class="rounded-circle " src="{{ asset('assets/img/team/14.webp') }}" alt="">
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
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/14.webp') }}" alt=""></div>
                        <h6 class="text-white">Sasha Blaus</h6>
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
              <div class="flex-1"><a class="text-decoration-none text-body-highlight lh-1 fw-semibold" href="#!">Sasha Blaus</a>
                <h6 class="mb-0 lh-1 text-body-highlight fw-semibold">@potatogirl</h6>
              </div>
            </div>
            <h4 class="text-body-highlight fw-semibold mb-0 mt-5 mb-3">Members</h4>
            <div class="d-flex">
              <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                  <div class="avatar avatar-m  me-2 border border-light-subtle rounded-pill">
                    <img class="rounded-circle " src="{{ asset('assets/img/team/33.webp') }}" alt="">
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
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/33.webp') }}" alt=""></div>
                        <h6 class="text-white">Tyrion Lannister</h6>
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
              <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                  <div class="avatar avatar-m  me-2 border border-light-subtle rounded-pill">
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
                        <h6 class="text-white">Milind Mikuja</h6>
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
              <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                  <div class="avatar avatar-m  me-2 border border-light-subtle rounded-pill">
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
                </div>
              </div>
              <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                  <div class="avatar avatar-m  me-2 border border-light-subtle rounded-pill">
                    <img class="rounded-circle " src="{{ asset('assets/img/team/60.webp') }}" alt="">
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
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/60.webp') }}" alt=""></div>
                        <h6 class="text-white">Josef Stravinsky</h6>
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
              <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                  <div class="avatar avatar-m  me-2 border border-light-subtle rounded-pill">
                    <img class="rounded-circle " src="{{ asset('assets/img/team/65.webp') }}" alt="">
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
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/65.webp') }}" alt=""></div>
                        <h6 class="text-white">Igor Borvibson</h6>
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
            </div>
            <h4 class="text-body-highlight fw-semibold mb-0 mt-3 mb-3">Guests</h4>
            <div class="d-flex">
              <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                  <div class="avatar avatar-m  me-2 border border-light-subtle rounded-pill">
                    <img class="rounded-circle " src="{{ asset('assets/img/team/2.webp') }}" alt="">
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
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/2.webp') }}" alt=""></div>
                        <h6 class="text-white">Tyrion Lannister</h6>
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
              <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                  <div class="avatar avatar-m  me-2 border border-light-subtle rounded-pill">
                    <img class="rounded-circle " src="{{ asset('assets/img/team/3.webp') }}" alt="">
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
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/3.webp') }}" alt=""></div>
                        <h6 class="text-white">Milind Mikuja</h6>
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
              <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                  <div class="avatar avatar-m  me-2 border border-light-subtle rounded-pill">
                    <img class="rounded-circle " src="{{ asset('assets/img/team/4.webp') }}" alt="">
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
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/4.webp') }}" alt=""></div>
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
                </div>
              </div>
              <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                  <div class="avatar avatar-m  me-2 border border-light-subtle rounded-pill">
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
                        <h6 class="text-white">Josef Stravinsky</h6>
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
            </div>
            <h4 class="text-body-highlight fw-semibold mb-0 mt-7 mb-3 border-bottom border-translucent pb-3">Description <span class="fas fa-pencil text-body fs-9 ms-3 cursor-pointer" data-fa-transform="up-2"></span></h4>
            <p>Phoenix is a rich and complex symbol that continues to capture the imagination of people across cultures and time periods. Whether seen as a symbol of hope, renewal, or mystery, the Phoenix remains an enduring icon of the human spirit.</p>
            <ul class="list-unstyled mb-0">
              <li><a class="text-body-highlight fw-semibold text-decoration-none d-flex flex-between-center py-3  border-bottom" href="#!"><span>Board Setting</span><span class="fas fa-angle-right fs-9 me-3"></span></a></li>
              <li><a class="text-body-highlight fw-semibold text-decoration-none d-flex flex-between-center py-3  border-bottom" href="#!"><span>Duplicate Board</span><span class="fas fa-angle-right fs-9 me-3"></span></a></li>
              <li><a class="text-body-highlight fw-semibold text-decoration-none d-flex flex-between-center py-3  border-bottom" href="#!"><span>Manage Labels</span><span class="fas fa-angle-right fs-9 me-3"></span></a></li>
              <li><a class="text-body-highlight fw-semibold text-decoration-none d-flex flex-between-center py-3  border-bottom" href="#!"><span>Go to Archive</span><span class="fas fa-angle-right fs-9 me-3"></span></a></li>
              <li><a class="text-body-highlight fw-semibold text-decoration-none d-flex flex-between-center py-3  border-bottom" href="#!"><span>Print</span><span class="fas fa-angle-right fs-9 me-3"></span></a></li>
              <li><a class="text-body-highlight fw-semibold text-decoration-none d-flex flex-between-center py-3  border-bottom" href="#!"><span>Export As</span><span class="fas fa-angle-right fs-9 me-3"></span></a></li>
              <li><a class="text-body-highlight fw-semibold text-decoration-none d-flex flex-between-center py-3  border-bottom" href="#!"><span>Integrations</span><span class="fas fa-angle-right fs-9 me-3"></span></a></li>
              <li><a class="text-body-highlight fw-semibold text-decoration-none d-flex flex-between-center py-3  border-bottom" href="#!"><span>Privacy Settings</span><span class="fas fa-angle-right fs-9 me-3"></span></a></li>
              <li><a class="text-body-highlight fw-semibold text-decoration-none d-flex flex-between-center py-3  border-bottom" href="#!"><span>Automation</span><span class="fas fa-angle-right fs-9 me-3"></span></a></li>
              <li><a class="text-body-highlight fw-semibold text-decoration-none d-flex flex-between-center py-3 text-danger pb-0 pb-0" href="#!"><span>Leave Board</span></a></li>
            </ul>
          </div>
        </div>
        <div class="phoenix-offcanvas-backdrop" data-phoenix-backdrop="data-phoenix-backdrop"></div>
        
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
                      <div class="py-2"><a class="dropdown-item" href="{{ url('e-commerce/landing/product-details') }}">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> Store Macbook</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="{{ url('e-commerce/landing/product-details') }}">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0">
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Products</h6>
                      <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="{{ url('e-commerce/landing/product-details') }}">
                          <div class="file-thumbnail me-2"><img class="h-100 w-100 object-fit-cover rounded-3" src="{{ asset('assets/img/products/60x60/3.png') }}" alt=""></div>
                          <div class="flex-1">
                            <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″</h6>
                            <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">8GB Memory - 1.6GHz - 128GB Storage</span></p>
                          </div>
                        </a>
                        <a class="dropdown-item py-2 d-flex align-items-center" href="{{ url('e-commerce/landing/product-details') }}">
                          <div class="file-thumbnail me-2"><img class="img-fluid" src="{{ asset('assets/img/products/60x60/3.png') }}" alt=""></div>
                          <div class="flex-1">
                            <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″</h6>
                            <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">30 Sep at 12:30 PM</span></p>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0">
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Quick Links</h6>
                      <div class="py-2"><a class="dropdown-item" href="{{ url('e-commerce/landing/product-details') }}">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Support MacBook House</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="{{ url('e-commerce/landing/product-details') }}">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0">
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Files</h6>
                      <div class="py-2"><a class="dropdown-item" href="{{ url('e-commerce/landing/product-details') }}">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-file-zipper text-body" data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="{{ url('e-commerce/landing/product-details') }}">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-file-lines text-body" data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="{{ url('e-commerce/landing/product-details') }}">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-image text-body" data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0">
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Members</h6>
                      <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="{{ url('pages/members') }}">
                          <div class="avatar avatar-l status-online  me-2 text-body">
                            <img class="rounded-circle " src="{{ asset('assets/img/team/40x40/10.webp') }}" alt="">
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                            <p class="fs-10 mb-0 d-flex text-body-tertiary">anna@technext.it</p>
                          </div>
                        </a>
                        <a class="dropdown-item py-2 d-flex align-items-center" href="{{ url('pages/members') }}">
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
                      <div class="py-2"><a class="dropdown-item" href="{{ url('e-commerce/landing/product-details') }}">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-brands fa-firefox-browser text-body" data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="{{ url('e-commerce/landing/product-details') }}">
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
      </div>
      <div class="support-chat-container">
        <div class="container-fluid support-chat">
          <div class="card bg-body-emphasis">
            <div class="card-header d-flex flex-between-center px-4 py-3 border-bottom border-translucent">
              <h5 class="mb-0 d-flex align-items-center gap-2">Demo widget<span class="fa-solid fa-circle text-success fs-11"></span></h5>
              <div class="btn-reveal-trigger"><button class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex" type="button" id="support-chat-dropdown" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-body"></span></button>
                <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown"><a class="dropdown-item" href="#!">Request a callback</a><a class="dropdown-item" href="#!">Search in chat</a><a class="dropdown-item" href="#!">Show history</a><a class="dropdown-item" href="#!">Report to Admin</a><a class="dropdown-item btn-support-chat" href="#!">Close Support</a></div>
              </div>
            </div>
            <div class="card-body chat p-0">
              <div class="d-flex flex-column-reverse scrollbar h-100 p-3">
                <div class="text-end mt-6"><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                    <p class="mb-0 fw-semibold fs-9">I need help with something</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                  </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                    <p class="mb-0 fw-semibold fs-9">I can’t reorder a product I previously ordered</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                  </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                    <p class="mb-0 fw-semibold fs-9">How do I place an order?</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                  </a><a class="false d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                    <p class="mb-0 fw-semibold fs-9">My payment method not working</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                  </a></div>
                <div class="text-center mt-auto">
                  <div class="avatar avatar-3xl status-online"><img class="rounded-circle border border-3 border-light-subtle" src="{{ asset('assets/img/team/30.webp') }}" alt=""></div>
                  <h5 class="mt-2 mb-3">Eric</h5>
                  <p class="text-center text-body-emphasis mb-0">Ask us anything – we’ll get back to you here or by email within 24 hours.</p>
                </div>
              </div>
            </div>
            <div class="card-footer d-flex align-items-center gap-2 border-top border-translucent ps-3 pe-4 py-3">
              <div class="d-flex align-items-center flex-1 gap-3 border border-translucent rounded-pill px-4"><input class="form-control outline-none border-0 flex-1 fs-9 px-0" type="text" placeholder="Write message"><label class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0" for="supportChatPhotos"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="supportChatPhotos"><label class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0" for="supportChatAttachment"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="supportChatAttachment"></div><button class="btn p-0 border-0 send-btn"><span class="fa-solid fa-paper-plane fs-9"></span></button>
            </div>
          </div>
        </div><button class="btn btn-support-chat p-0 border border-translucent"><span class="fs-8 btn-text text-primary text-nowrap">Chat demo</span><span class="ping-icon-wrapper mt-n4 ms-n6 mt-sm-0 ms-sm-2 position-absolute position-sm-relative"><span class="ping-icon-bg"></span><span class="fa-solid fa-circle ping-icon"></span></span><span class="fa-solid fa-headset text-primary fs-8 d-sm-none"></span><span class="fa-solid fa-chevron-down text-primary fs-7"></span></button>
      </div>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    
    <div class="modal fade" id="kanbanAddTask" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen-sm-down modal-xl modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row gx-3 gy-4">
              <div class="col-sm-6 col-md-12">
                <div class="form-floating"><input class="form-control" id="kanbanTaskTitle" type="text" placeholder="title" value=""><label for="kanbanTaskTitle">Title</label></div>
              </div>
              <div class="col-12 gy-4">
                <div class="form-floating"><textarea class="form-control" id="floatingProjectDescription" placeholder="Leave a comment here" style="height: 128px"></textarea><label for="floatingProjectDescription">ADD A DESCRIPTION</label></div>
              </div>
              <div class="col-12 gy-4">
                <div class="dropzone dropzone-multiple bg-transparent p-0" id="Kanbandropzone" data-dropzone="data-dropzone" data-options='{"url":"valid/url","maxFiles":1,"dictDefaultMessage":"Choose or Drop a file here"}'>
                  <div class="fallback"><input type="file" name="file"></div>
                  <div class="dz-message py-3" data-dz-message="data-dz-message">
                    <div class="dz-message-text text-center text-body-secondary"><img class="mb-2" src="{{ asset('assets/img/icons/image-icon.png') }}" width="24" alt=""><br>Add cover image </div>
                  </div>
                  <div class="dz-preview dz-preview-multiple m-0 d-flex flex-column">
                    <div class="d-flex pb-3 border-bottom border-translucent media px-2">
                      <div class="border border-dashed p-2 rounded-2 me-2"><img class="rounded-2 dz-image" src="{{ asset('assets/img/icons/file.png') }}" alt="..." data-dz-thumbnail="data-dz-thumbnail"></div>
                      <div class="flex-1 d-flex flex-between-center">
                        <div>
                          <h6 data-dz-name="data-dz-name"></h6>
                          <div class="d-flex align-items-center">
                            <p class="mb-0 fs-9 text-body-quaternary lh-1" data-dz-size="data-dz-size"></p>
                            <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                          </div><span class="fs-10 text-danger" data-dz-errormessage="data-dz-errormessage"></span>
                        </div>
                        <div class="dropdown"><button class="btn btn-link text-body-tertiary btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border border-translucent py-2"><a class="dropdown-item" href="#!" data-dz-remove="data-dz-remove">Remove File</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-floating"><select class="form-select" id="TaskType">
                    <option selected="selected">Phoenix</option>
                    <option value="2">Boreas</option>
                    <option value="3">Erebus</option>
                  </select><label for="TaskType">BORAD TYPE</label></div>
              </div>
              <div class="col-sm-4">
                <div class="form-floating"><select class="form-select" id="KanbanColumnType">
                    <option selected="selected">Unassigned</option>
                    <option value="2">To do</option>
                    <option value="3">Doing</option>
                    <option value="3">Review</option>
                    <option value="3">Release</option>
                  </select><label for="KanbanColumnType">COLUMN</label></div>
              </div>
              <div class="col-sm-4">
                <div class="form-floating"><select class="form-select" id="KanbanPlaceNumber">
                    <option selected="selected">01</option>
                    <option value="2">02</option>
                    <option value="3">03</option>
                  </select><label for="KanbanPlaceNumber">PLACE</label></div>
              </div>
              <div class="col-sm-12">
                <div class="form-floating"><select class="form-select" id="KanbanAssignedMember">
                    <option selected="selected" value="1">Unassigned (Default)</option>
                    <option value="2">Richard Dawkins</option>
                    <option value="3">Ashley Garrett</option>
                    <option value="4">Barbara Lucas</option>
                    <option value="5">Woodrow Burton</option>
                  </select><label for="KanbanAssignedMember">ASSIGNED TO</label></div>
              </div>
              <div class="col-sm-12">
                <div class="form-floating"><select class="form-select" id="KanbanPriorityLavel">
                    <option selected="selected">Low (Default)</option>
                    <option value="2">High</option>
                    <option value="2">Medium</option>
                    <option value="2">Urgent</option>
                  </select><label for="KanbanPriorityLavel">PRIORITY</label></div>
              </div>
              <div class="col-sm-12">
                <div class="form-floating"><select class="form-select" id="KanbanCategoryType">
                    <option selected="selected">UNASSIGNED (Default)</option>
                    <option value="2">Feature</option>
                    <option value="2">Bug</option>
                    <option value="2">Issue</option>
                  </select><label for="KanbanCategoryType">CATEGORY</label></div>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between"><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs-10 me-1" data-fa-transform="up-1"></span>Close</button>
            <button class="btn btn-primary px-6" type="button" data-bs-dismiss="modal">Done</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="KanbanItemDetailsModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen-md-down modal-md modal-dialog-centered">
        <div class="modal-content overflow-hidden">
          <div class="modal-body p-0">
            <div class="position-relative" style="height:200px; width:100%">
              <div class="bg-holder" style="background-image:url({{ asset('assets/img/kanban/modal-bg.jpg') }});"></div>
              <!--/.bg-holder-->
            </div>
            <div class="row gy-4 py-0 gx-0">
              <div class="col-lg-8 col-12">
                <div class="row mt-0 gy-4 pb-3 gx-0 px-3">
                  <div class="col-4 col-sm-3">
                    <h6 class="text-body-tertiary fw-bolder lh-sm mt-1">TITLE </h6>
                  </div>
                  <div class="col-8 col-sm-9">
                    <h4 class="mb-0 text-body-emphasis lh-sm">Reproduced below for those interested</h4>
                  </div>
                  <div class="col-4 col-sm-3">
                    <h6 class="text-body-tertiary fw-bolder lh-sm mt-1">DESCRIPTION </h6>
                  </div>
                  <div class="col-8 col-sm-9">
                    <p class="fs-9 mb-0">Reproduced below for those interested" is a phrase used to provide additional content or details for individuals who have expressed interest in a particular topic. It signals that what follows is optional and caters specifically to those who want to delve deeper into the subject matter.</p>
                  </div>
                  <div class="col-4 col-sm-3">
                    <h6 class="text-body-tertiary fw-bolder lh-sm mt-1">BOARD </h6>
                  </div>
                  <div class="col-8 col-sm-9">
                    <p class="mb-0 text-body-emphasis fw-semibold">Phoenix</p>
                  </div>
                  <div class="col-4 col-sm-3">
                    <h6 class="text-body-tertiary fw-bolder lh-sm mt-1">COLUMN </h6>
                  </div>
                  <div class="col-8 col-sm-9">
                    <p class="mb-0 text-body-emphasis fw-semibold d-inline-block kanban-column-underline-warning">Doing</p>
                  </div>
                  <div class="col-4 col-sm-3">
                    <h6 class="text-body-tertiary fw-bolder lh-sm mt-1">ASSAIGNED TO </h6>
                  </div>
                  <div class="col-8 col-sm-9">
                    <div class="d-flex align-items-center"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                        <div class="avatar avatar-s  me-1">
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
                        <div class="avatar avatar-s  me-1">
                          <img class="rounded-circle " src="{{ asset('assets/img/team/60.webp') }}" alt="">
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
                              <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/60.webp') }}" alt=""></div>
                              <h6 class="text-white">Emma Watson</h6>
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
                        <div class="avatar avatar-s  me-1">
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
                              <h6 class="text-white">Igor Borvibson</h6>
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
                  </div>
                  <div class="col-4 col-sm-3">
                    <h6 class="text-body-tertiary fw-bolder lh-sm mt-1">PRIORITY </h6>
                  </div>
                  <div class="col-8 col-sm-9">
                    <p class="mb-0 text-body-emphasis fw-semibold"><span class="fa fa-circle m text-warning" data-fa-transform="shrink-6 down-1"></span>High</p>
                  </div>
                  <div class="col-4 col-sm-3">
                    <h6 class="text-body-tertiary fw-bolder lh-sm mt-1">CATEGORY </h6>
                  </div>
                  <div class="col-8 col-sm-9"><span class="badge badge-phoenix fs-10 badge-phoenix-danger"><span>Bug</span><span class="ms-1 fas fa-bug item.icon" data-fa-transform="up-2" style="height:7.8px;width:7.8px;"></span></span></div>
                  <div class="col-4 col-sm-3">
                    <h6 class="text-body-tertiary fw-bolder lh-sm mt-1">ATTACHMENTS </h6>
                  </div>
                  <div class="col-8 col-sm-9">
                    <div class="border-bottom border-translucent d-flex flex-row pb-3"><a href="{{ asset('assets/img/kanban/a1.jpg') }}" data-gallery="gallery-kanban-attachment"> <img class="rounded-3" src="{{ asset('assets/img/kanban/a1.jpg') }}" width="64" height="64" alt=""></a>
                      <div class="flex-1 ms-3 d-flex flex-column">
                        <h5 class="lh-sm">Silly_sight_1.png</h5>
                        <p class="lh-1 fs-9 text-body-tertiary fw-medium mb-0">21st Decemver, 12:56 PM</p>
                        <div class="d-flex mt-auto"><button class="btn p-0 fs-8 text-body-tertiary me-3"><span class="fas fa-comment" data-fa-transform="shrink-4"></span></button>
                          <button class="btn p-0 fs-8 text-body-tertiary me-3"><span class="fas fa-trash" data-fa-transform="shrink-4"></span></button>
                          <button class="btn p-0 fs-8 text-body-tertiary"><span class="fas fa-pencil" data-fa-transform="shrink-4"></span></button>
                        </div>
                      </div>
                    </div>
                    <div class="border-bottom border-translucent d-flex flex-row pb-3 mt-3">
                      <div class="border border-translucent rounded-3 flex-center d-flex" style="width:64px; height: 64px">
                        <div class="fa-solid fa-file-zipper fa-2x text-body-quaternary text-opacity-75"></div>
                      </div>
                      <div class="flex-1 ms-3 d-flex flex-column">
                        <h5 class="lh-sm">All_images.zip</h5>
                        <p class="lh-1 fs-9 text-body-tertiary fw-medium mb-0">21st Decemver, 12:56 PM</p>
                        <div class="d-flex text-body-tertiary mt-auto"><button class="btn p-0 fs-8 text-body-tertiary me-3"><span class="fas fa-comment" data-fa-transform="shrink-4"></span></button>
                          <button class="btn p-0 fs-8 text-body-tertiary me-3"><span class="fas fa-trash" data-fa-transform="shrink-4"></span></button>
                          <button class="btn p-0 fs-8 text-body-tertiary"><span class="fas fa-pencil" data-fa-transform="shrink-4"></span></button>
                        </div>
                      </div>
                    </div><button class="btn btn-link ps-0"><span class="fas fa-plus me-2" data-fa-transform="shrink-3"></span>Add an Attachment</button>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 border-start-lg">
                <div class="scrollbar" style="max-height: 667px;">
                  <div class="px-3">
                    <h5 class="mb-3 mt-4">Actions</h5>
                    <ul class="nav flex-column flex-sm-row flex-lg-column list-unstyled">
                      <li class="kanban-action-item lh-sm nav-item me-2"><a class="nav-link text-body-emphasis fw-semibold fs-9 stretched-link" href="#!"><span class="me-2 fa-solid fa-file-export"></span>Move</a></li>
                      <li class="kanban-action-item lh-sm nav-item me-2"><a class="nav-link text-body-emphasis fw-semibold fs-9 stretched-link" href="#!"><span class="me-2 fa-solid fa-clone"></span>Duplicate</a></li>
                      <li class="kanban-action-item lh-sm nav-item me-2"><a class="nav-link text-body-emphasis fw-semibold fs-9 stretched-link" href="#!"><span class="me-2 fa-solid fa-share-nodes"></span>Share</a></li>
                      <li class="kanban-action-item lh-sm nav-item me-2"><a class="nav-link text-body-emphasis fw-semibold fs-9 stretched-link" href="#!"><span class="me-2 fa-solid fa-square-plus"></span>Create template</a></li>
                      <li class="kanban-action-item lh-sm nav-item me-2"><a class="nav-link text-body-emphasis fw-semibold fs-9 stretched-link" href="#!"><span class="me-2 fa-solid fa-arrows-up-to-line"></span>Jump to top</a></li>
                      <li class="kanban-action-item lh-sm nav-item me-2"><a class="nav-link text-body-emphasis fw-semibold fs-9 stretched-link" href="#!"><span class="me-2 fa-solid fa-box-archive"></span>Move to Archive</a></li>
                      <li class="kanban-action-item lh-sm nav-item me-2"><a class="nav-link text-body-emphasis fw-semibold fs-9 stretched-link" href="#!"><span class="me-2 fa-solid fa-trash-can"></span>Move to Trash</a></li>
                      <li class="kanban-action-item lh-sm nav-item me-2"><a class="nav-link text-body-emphasis fw-semibold fs-9 stretched-link" href="#!"><span class="me-2 fa-solid fa-download"></span>Print/Download</a></li>
                    </ul>
                    <h5 class="mt-6">Activities</h5>
                    <div class="d-flex border-bottom ">
                      <div class="pt-3 text-warning"><span class="border border-translucent rounded-pill p-1 fas fa-random" data-fa-transform="shrink-4"></span></div>
                      <div class="activity-item ps-2 py-3">
                        <p class="mb-1 fs-9"><span class="fw-bold"> Alfen Loebe </span> Moved the task <a href="#!">"the standard chunk" </a>from <span class="fw-bold">Doing</span> to <span class="fw-bold">To Do</span></p>
                        <div class="d-flex">
                          <p class="mb-0 fs-9 me-3"> <span class="fa-regular fa-clock me-1"></span>10:41 AM</p>
                          <p class="mb-0 fs-9">Aughst 7,2022</p>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex border-bottom ">
                      <div class="pt-3 text-info"><span class="border border-translucent rounded-pill p-1 fa-solid fa-paperclip" data-fa-transform="shrink-4"></span></div>
                      <div class="activity-item ps-2 py-3">
                        <p class="mb-1 fs-9"><span class="fw-bold"> Jessie Samson </span> Attached image3.png to the task <a href="#!">"the standard chunk" </a></p>
                        <div class="d-flex">
                          <p class="mb-0 fs-9 me-3"> <span class="fa-regular fa-clock me-1"></span>10:41 AM</p>
                          <p class="mb-0 fs-9">Aughst 7,2022</p>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex border-bottom ">
                      <div class="pt-3 text-info"><span class="border border-translucent rounded-pill p-1 fas fa-plus" data-fa-transform="shrink-4"></span></div>
                      <div class="activity-item ps-2 py-3">
                        <p class="mb-1 fs-9"><span class="fw-bold"> Alfen Loebe </span> Moved the task <a href="#!">"the standard chunk" </a>from <span class="fw-bold">Doing</span> to <span class="fw-bold">To Do</span></p>
                        <div class="d-flex">
                          <p class="mb-0 fs-9 me-3"> <span class="fa-regular fa-clock me-1"></span>10:41 AM</p>
                          <p class="mb-0 fs-9">Aughst 7,2022</p>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex  ">
                      <div class="pt-3 text-primary"><span class="border border-translucent rounded-pill p-1 fas fa-random" data-fa-transform="shrink-4"></span></div>
                      <div class="activity-item ps-2 py-3">
                        <p class="mb-1 fs-9"><span class="fw-bold"> Alfen Loebe </span> Moved the task <a href="#!">"the standard chunk" </a>from <span class="fw-bold">Doing</span> to <span class="fw-bold">To Do</span></p>
                        <div class="d-flex">
                          <p class="mb-0 fs-9 me-3"> <span class="fa-regular fa-clock me-1"></span>10:41 AM</p>
                          <p class="mb-0 fs-9">Aughst 7,2022</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between"><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs-10 me-1" data-fa-transform="up-1"></span>Close</button>
            <button class="btn btn-phoenix-primary px-6" type="button" data-bs-target="#kanbanAddTask" data-bs-toggle="modal">Edit<span class="fas fa-edit ms-2" data-fa-transform="shrink-3"></span></button>
          </div>
        </div>
      </div>
    
@endsection

@push('scripts')
<script src="{{ asset('vendors/sortablejs/Sortable.min.js') }}"></script>
<script src="{{ asset('vendors/dropzone/dropzone-min.js') }}"></script>
<script src="{{ asset('vendors/glightbox/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/kanban.js') }}"></script>
@endpush
