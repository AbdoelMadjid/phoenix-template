@extends('layouts.vertical')

@section('title', 'Gantt Chart')
@section('content_class', 'gantt-content')

@push('styles')
<link href="{{ asset('vendors/dhtmlx-gantt/dhtmlxgantt.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/dropzone/dropzone.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="gantt-header p-4 px-lg-6 py-sm-3">
          <div class="row gx-0 gy-3 justify-content-between">
            <div class="col-md-auto d-flex align-items-center">
              <h3 class="mb-0">Gantt Chart </h3><button class="btn btn-primary btn-sm ms-auto ms-md-3" data-gantt-add-task="data-gantt-add-task"><span class="fas fa-plus"></span><span class="ms-2 d-md-none d-xl-inline">Add Task</span></button>
            </div>
            <div class="col-md-auto">
              <div class="row align-items-center gy-3 gx-0">
                <div class="col-sm-auto">
                  <div class="search-box gantt-search-box">
                    <form class="position-relative"><input class="form-control search-input search form-control-sm" data-gantt-search="data-gantt-search" type="search" placeholder="Search..." aria-label="Search"><span class="fas fa-search search-box-icon" data-fa-transform="up-1 shrink-2"></span></form>
                    <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none me-1" data-gantt-search-dismiss="data-gantt-search-dismiss"><button class="btn btn-link p-0" aria-label="Close"></button></div>
                  </div>
                </div>
                <div class="col-auto d-flex align-items-center ms-sm-auto">
                  <div class="border-start d-none d-md-inline ms-md-3" style="height: 20px; width: 2px"></div>
                  <div class="form-check form-switch mb-0 ms-sm-3"><input class="form-check-input" data-gantt-zoom="fit" id="ganttZoomToFit" checked="checked" type="checkbox"><label class="form-check-label text-nowrap" for="ganttZoomToFit">Auto Fit</label></div><select class="form-select form-select-sm ms-3" aria-label="Default select example" data-gantt-view="data-gantt-view">
                    <option value="days">Day</option>
                    <option value="weeks">Weekly</option>
                    <option value="months" selected="selected">Monthly</option>
                    <option value="years">Year</option>
                  </select>
                </div>
                <div class="col-auto d-flex align-items-center ms-auto ms-sm-3">
                  <div class="border-start d-none d-sm-inline me-3" style="height: 20px; width: 2px"></div><button class="btn btn-link btn-sm text-body px-0 text-nowrap ms-n1" data-bs-toggle="modal" data-bs-target="#ganttTaskFilterModal"><span class="fa-solid fa-filter fs-9"></span><span class="d-none d-xl-inline ms-2">Filter</span></button>
                  <button class="btn btn-link btn-sm text-body px-0 text-nowrap ms-3" data-bs-toggle="modal" data-bs-target="#ganttOptionsModal"><span class="fa-solid fa-gear fs-9"></span><span class="d-none d-xl-inline ms-2">Options </span></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="gantt-app-container scrollbar">
          <div id="gantt-app" style="width:100%;height:100%;"></div>
        </div>

    <div class="modal" id="ganttAddTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-body-highlight">
          <div class="modal-header p-4 pb-3 align-items-start border-0">
            <h3 class="mb-0 text-body-highlight" id="addTaskModalLabel">Create New Task</h3><button class="btn btn-close fs-10" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body px-4">
            <form id="addTaskForm">
              <div class="mb-4"><label class="fw-bold text-body-highlight mb-2" for="createTaskName">Task Name</label><input class="form-control" id="createTaskName" type="text" placeholder="Enter task name"></div>
              <div class="row g-3">
                <div class="col-7 col-sm-8"><label class="fw-bold text-body-highlight" for="createTaskStartDate">Start Date</label>
                  <div class="flatpickr-input-container mt-2"><input class="form-control ps-6 datetimepicker" id="createTaskStartDate" type="text" data-options='{"dateFormat":"M j, Y","disableMobile":true,"defaultDate":"Mar 2, 2022"}'><span class="uil uil-calendar-alt flatpickr-icon text-body"> </span></div>
                </div>
                <div class="col-5 col-sm-4"><label class="fw-bold text-body-highlight" for="createTaskDuration">Time Duration</label>
                  <div class="form-icon-container mt-2"><input class="form-control form-icon-input ps-6" id="createTaskDuration" type="number" placeholder="0 days"><span class="fas fa-clock text-body fs-9 form-icon"></span></div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer border-0 px-4 pb-3"><button class="btn btn-phoenix-secondary" type="button" data-bs-dismiss="modal">Cancel </button>
            <button class="btn btn-primary" id="createNewTask" type="button">Create New Task </button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal" id="ganttDeleteTaskModal" tabindex="-1" aria-labelledby="deleteTaskModal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header p-4 pb-3 align-items-start">
            <h3 class="mb-2 text-body-highlight" id="deleteTaskModal">Delete Task</h3><button class="btn btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body px-4">
            <p>Are you sure you want to delete this task permanently? Once deleted, it cannot be recovered or undone.</p>
          </div>
          <div class="modal-footer px-4 pb-3"><button class="btn btn-subtle-danger" id="ganttConfirmDeleteTask" type="button">Delete task</button>
            <button class="btn btn-phoenix-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
    <div class="gantt-offcanvas z-5">
      <div class="offcanvas offcanvas-end" tabindex="-1" id="taskDetailsOffcanvas">
        <div class="offcanvas-header border-bottom">
          <div class="d-flex justify-content-between w-100"><button class="btn btn-phoenix-secondary me-1 mb-1 text-success" type="button"> <span class="fas fa-check me-2" data-fa-transform="shrink-3"> </span>Mark Complete</button>
            <div class="d-flex gap-2"><button class="btn btn-phoenix-secondary btn-square px-2"><span class="fa-solid fa-thumbs-up"></span></button>
              <button class="btn btn-phoenix-secondary btn-square px-2"><span class="fa-solid fa-paperclip"></span></button>
              <button class="btn btn-phoenix-secondary btn-square px-2"><span class="fa-solid fa-list-check"></span></button>
              <button class="btn btn-phoenix-secondary btn-square px-2"><span class="fa-solid fa-link"></span></button>
              <button class="btn btn-phoenix-secondary btn-square px-2" data-bs-dismiss="offcanvas" aria-label="Close"><span class="fa-solid fa-xmark"></span></button>
            </div>
          </div>
        </div>
        <div class="offcanvas-body"><input class="form-control mb-3 fs-8" id="taskDetailsName" type="text" value="title">
          <h5 class="mb-3">Assignee</h5>
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
            </div><a class="text-decoration-none text-body-secondary" href="#!">
              <div class="circle-btn bg-body-secondary mx-auto"><span class="fas fa-plus" data-fa-transform="shrink-2"></span></div>
            </a>
          </div>
          <form id="taskForm">
            <div class="row mt-3 gy-3">
              <div class="col-6 col-sm-4"> <label class="fw-bold text-body-highlight mb-2" for="taskDetailsStartDate">Start Date</label>
                <div class="flatpickr-input-container"><input class="form-control ps-6 datetimepicker" id="taskDetailsStartDate"><span class="uil uil-calendar-alt flatpickr-icon text-body"> </span></div>
              </div>
              <div class="col-6 col-sm-4"> <label class="fw-bold text-body-highlight mb-2" for="taskDetailsEndDate">End Date</label>
                <div class="flatpickr-input-container"><input class="form-control ps-6 datetimepicker" id="taskDetailsEndDate" disabled="disabled"><span class="uil uil-calendar-alt flatpickr-icon text-body"> </span></div>
              </div>
              <div class="col-6 col-sm-4"> <label class="fw-bold text-body-highlight mb-2" for="taskDetailsDuration">Duration <span class="text-body-quaternary fw-normal">(Days)</span></label>
                <div class="form-icon-container"><input class="form-control form-icon-input ps-6" id="taskDetailsDuration" type="number" placeholder="0 days"><span class="fas fa-clock text-body fs-9 form-icon"></span></div>
              </div>
              <div class="col-6 col-sm-4"><label class="fw-bold text-body-highlight mb-2" for="selectProject">Select Project</label><select class="form-select" id="selectProject" aria-label="Default select example">
                  <option selected="selected">Our new projects</option>
                  <option value="1">Phoenix</option>
                  <option value="2">Falcon</option>
                  <option value="3">Sparrow</option>
                </select></div>
              <div class="col-6 col-sm-4"> <label class="fw-bold text-body-highlight mb-2" for="priority">Priority</label><select class="form-select" id="priority" aria-label="Default select example">
                  <option selected="selected">Urgent</option>
                  <option value="1">High</option>
                  <option value="2">Medium</option>
                  <option value="3">Low</option>
                </select></div>
              <div class="col-6 col-sm-4"> <label class="fw-bold text-body-highlight mb-2" for="onTrack">Status</label><select class="form-select" id="onTrack" aria-label="Default select example">
                  <option selected="selected">On track</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select></div>
            </div>
            <div class="card mt-4">
              <div class="card-body p-3">
                <div class="d-flex justify-content-between align-items-center">
                  <h4 class="mb-0">Dependency</h4><button class="btn btn-link pe-0">Add new</button>
                </div>
                <div class="bg-body p-3 mt-3 rounded">
                  <div class="row gy-3">
                    <div class="col-sm-8">
                      <h5 class="mb-3">Dependency type</h5>
                      <div class="d-sm-flex gap-3"><select class="form-select" id="Dependency1" aria-label="Default select example">
                          <option selected="selected">Blocked by</option>
                          <option value="1">Blocking</option>
                          <option value="2">Paused</option>
                        </select><select class="form-select mt-2 mt-sm-0" id="Dependency2" aria-label="Default select example">
                          <option selected="selected">Start to start</option>
                          <option value="1">Finish to Finish</option>
                          <option value="2">Start to Finish</option>
                          <option value="3">Finish to Start</option>
                        </select></div>
                    </div>
                    <div class="col-sm-4">
                      <h5 class="mb-3">Select task</h5>
                      <div class="d-sm-flex"> <select class="form-select" id="selectTask1" aria-label="Default select example">
                          <option selected="selected">Select Task</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select></div>
                    </div>
                  </div>
                  <hr class="my-4">
                  <div class="row gy-3">
                    <div class="col-sm-8">
                      <h5 class="mb-3">Dependency type</h5>
                      <div class="d-sm-flex gap-3"><select class="form-select" id="dependency3" aria-label="Default select example">
                          <option selected="selected">Blocking</option>
                          <option value="1">Blocked by</option>
                          <option value="2">Paused</option>
                        </select><select class="form-select mt-2 mt-sm-0" id="dependency4" aria-label="Default select example">
                          <option selected="selected">Start to start</option>
                          <option value="1">Finish to Finish</option>
                          <option value="2">Start to Finish</option>
                          <option value="3">Finish to Start</option>
                        </select></div>
                    </div>
                    <div class="col-sm-4">
                      <h5 class="mb-3">Select task</h5>
                      <div class="d-flex"> <select class="form-select" id="selectTask6" aria-label="Default select example">
                          <option selected="selected">Select task</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select></div>
                    </div>
                  </div>
                </div>
              </div>
            </div><label class="fw-bold text-body-highlight mb-2 mt-4" for="EditTaskNotes">Description</label><textarea class="form-control mb-3" id="EditTaskNotes">Complete the project documentation by outlining key processes, roles, and responsibilities to ensure smooth and efficient workflow execution.</textarea>
            <h5 class="mb-3 mt-4">Subtasks</h5>
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
            <div class="dropzone dropzone-multiple p-0 mt-4" id="my-awesome-dropzone" data-dropzone="data-dropzone">
              <div class="fallback"><input name="file" type="file" multiple="multiple"></div>
              <div class="dz-message text-body-tertiary text-opacity-85 d-flex flex-center" data-dz-message="data-dz-message" style="height:140px;width:140px;"> <span class="fa-solid fa-plus fs-4"></span></div>
              <div class="dz-preview d-flex flex-wrap mt-2">
                <div class="rounded-2 overflow-hidden me-2 mb-2 position-relative" style="height:140px;width:140px;"><img class="w-100 h-100 object-fit-cover" src="{{ asset('assets/img/products/23.png') }}" alt="..." data-dz-thumbnail="data-dz-thumbnail"><button class="btn dropdown-toggle dropdown-caret-none px-3 text-body bg-body dz-remove w-auto h-auto py-0 border" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="top: 16px; right: 16px"><span class="fa-solid fa-ellipsis"></span></button>
                  <ul class="dropdown-menu dropdown-menu-end py-1">
                    <li><a class="dropdown-item" href="#!" data-dz-remove="data-dz-remove">Remove</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="d-flex border-top pt-4 gap-3 mt-4"><button class="btn btn-phoenix-danger ms-auto" id="ganttDeleteTask" type="button">Delete Task </button>
              <button class="btn btn-phoenix-primary" id="ganttUpdateTask" type="button">Save Task </button>
            </div>
          </form>
        </div>
      </div>
      <div class="phoenix-offcanvas-backdrop" data-phoenix-backdrop="data-phoenix-backdrop"></div>
    </div>
    <div class="modal" id="ganttDeleteLinkModal" tabindex="-1" aria-labelledby="deleteLinkModal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header p-4 pb-3 align-items-start">
            <h3 class="mb-2 text-body-highlight" id="deleteLinkModal">Delete Link</h3><button class="btn btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body px-4">
            <p>Are you sure you want to delete this link permanently? Once deleted, it cannot be recovered or undone.</p>
          </div>
          <div class="modal-footer px-4 pb-3"><button class="btn btn-subtle-danger" id="ganttDeleteLinkBtn" type="button">Delete link</button>
            <button class="btn btn-phoenix-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal modal-lg" id="ganttTaskFilterModal" tabindex="-1" aria-labelledby="ganttFilterModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header p-4 pb-3 align-items-start">
            <h3 class="mb-2 text-body-highlight" id="ganttFilterModalLabel">Filter</h3><button class="btn btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body px-4">
            <div class="row g-3">
              <div class="col-6"><label class="fw-bold text-body-highlight mb-2" for="filterStartDate">Start Date</label>
                <div class="flatpickr-input-container"><input class="form-control ps-6 datetimepicker" id="filterStartDate" type="text" data-options='{"dateFormat":"M j, Y","disableMobile":true,"defaultDate":"Mar 2, 2022"}'><span class="uil uil-calendar-alt flatpickr-icon text-body"> </span></div>
              </div>
              <div class="col-6"><label class="fw-bold text-body-highlight mb-2" for="completedOn">Completed on</label><select class="form-select" id="completedOn" aria-label="Default select example">
                  <option selected="selected">Last 7 Days</option>
                  <option value="1">Last 30 Days</option>
                  <option value="2">Last 90 Days</option>
                  <option value="3">Last 6 Months</option>
                  <option value="3">Last 12 Months</option>
                </select></div>
              <div class="col-6"><label class="fw-bold text-body-highlight mb-2" for="completionStatus">Completion Status</label><select class="form-select" id="completionStatus" aria-label="Default select example">
                  <option selected="selected">Not Started</option>
                  <option value="1">In Progress</option>
                  <option value="2">Completed</option>
                  <option value="3">Overdue</option>
                  <option value="3">Cancelled</option>
                  <option value="3">On Hold</option>
                </select></div>
              <div class="col-6"><label class="fw-bold text-body-highlight mb-2" for="filterPriority">Priority</label><select class="form-select" id="filterPriority" aria-label="Default select example">
                  <option selected="selected">Urgent</option>
                  <option value="1">High</option>
                  <option value="2">Medium</option>
                  <option value="3">Low</option>
                </select></div>
              <div class="col-6"><label class="fw-bold text-body-highlight mb-2" for="lastModifiedON">Last modified on</label><select class="form-select" id="lastModifiedON" aria-label="Default select example">
                  <option selected="selected">Last 7 Days</option>
                  <option value="1">Last 30 Days</option>
                  <option value="2">Last 90 Days</option>
                  <option value="3">Last 6 Months</option>
                  <option value="3">Last 12 Months</option>
                </select></div>
              <div class="col-6"><label class="fw-bold text-body-highlight mb-2" for="filterTaskType">Task type</label><select class="form-select" id="filterTaskType" aria-label="Default select example">
                  <option selected="selected">Administrative</option>
                  <option value="1">Development</option>
                  <option value="2">Design</option>
                  <option value="3">Testing</option>
                  <option value="4">Deployment</option>
                  <option value="5">Research</option>
                </select></div>
            </div>
          </div>
          <div class="modal-footer px-4 pb-3 border-0"><button class="btn btn-subtle-primary btn-sm px-4" id="ganttResetFilterBtn" type="button"><span class="fa-solid fa-sync me-2"></span>Reset</button>
            <button class="btn btn-primary btn-sm px-8" type="button" data-bs-dismiss="modal">Done</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal modal-md" id="ganttOptionsModal" tabindex="-1" aria-labelledby="OptionsModal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" style="max-width: 630px">
        <div class="modal-content">
          <div class="modal-header p-4 pb-3 align-items-start">
            <h3 class="mb-2 text-body-highlight" id="OptionsModal"></h3><button class="btn btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-4">
            <form id="ganttOptionsForm">
              <div class="d-flex align-items-center justify-content-between"><label class="fw-bold text-body-highlight" for="taskOptionSelect">Color task by</label><button class="btn btn-link pe-0">Add new</button></div><select class="form-select" id="taskOptionSelect" aria-label="Default select example">
                <option selected="selected">Section</option>
                <option value="1">Phoenix</option>
                <option value="2">Falcon</option>
                <option value="3">Sparrow</option>
              </select><label class="fw-bold text-body-highlight mb-2 mt-3" for="optionsDate">Baseline</label>
              <div class="flatpickr-input-container"><input class="form-control ps-6 datetimepicker" id="optionsDate" placeholder="dd/mm/yy"><span class="uil uil-calendar-alt flatpickr-icon text-body"> </span></div>
              <div class="d-flex align-items-center justify-content-between mt-4">
                <h4 class="mb-0">Show baseline </h4>
                <div class="d-flex align-items-center">
                  <div class="form-check me-3"><label>No </label><input class="form-check-input" id="hideBaseline" type="radio" checked="checked" name="showBaseline"></div>
                  <div class="form-check"> <label>Yes </label><input class="form-check-input" id="ShowBaseline" type="radio" name="showBaseline"></div>
                </div>
              </div>
              <div class="d-flex justify-content-between align-items-center mt-4">
                <div>
                  <h4>Auto-schedule tasks </h4>
                  <p class="mb-0 fs-9">Assign date to new tasks automatically </p>
                </div>
                <div class="form-check form-switch mb-0 fs-6"><input class="form-check-input" id="isAutoScheduleTask" type="checkbox" role="switch"></div>
              </div>
              <hr>
              <div class="card">
                <div class="card-body p-3">
                  <div class="form-switch form-check mb-3"><label class="form-check-label" for="manageDependencies">Manage dependencies</label><input class="form-check-input" id="manageDependencies" type="checkbox" role="switch"></div>
                  <div class="bg-primary-subtle rounded-3 p-4">
                    <div class="d-flex align-items-center">
                      <div class="form-check mb-0"><input class="form-check-input" type="checkbox"></div>
                      <h5 class="mb-0">Keep the buffer intact.</h5>
                    </div>
                    <p class="fs-9 fw-semibold text-body ms-4 mb-4">Preserve the intervals of time between related tasks.</p>
                    <div class="d-flex align-items-center">
                      <div class="form-check mb-0"><input class="form-check-input" type="checkbox"></div>
                      <h5 class="mb-0">Use the buffer.</h5>
                    </div>
                    <p class="fs-9 fw-semibold text-body ms-4 mb-4">Unless there is a problem, use the amount of time that is required between dependent tasks.</p>
                    <div class="d-flex align-items-center">
                      <div class="form-check mb-0"><input class="form-check-input" type="checkbox"></div>
                      <h5 class="mb-0">None</h5>
                    </div>
                    <p class="fs-9 fw-semibold text-body ms-4 mb-0">In the event of a conflict, disregard the interval between dependent tasks.</p>
                  </div>
                </div>
              </div>
              <div class="d-flex justify-content-between align-items-center mt-4">
                <div>
                  <h4>Weekend awareness</h4>
                  <p class="mb-0 fs-9">Task dates will take the weekend into consideration and try to avoid it.</p>
                </div>
                <div class="form-check form-switch mb-0 fs-6"><input class="form-check-input" id="weekendCheck" type="checkbox" role="switch"></div>
              </div>
            </form>
          </div>
          <div class="modal-footer p-4"><button class="btn btn-subtle-danger" id="optionModal" type="button" data-bs-dismiss="modal">Cancel</button>
            <button class="btn btn-phoenix-primary" type="button" data-bs-dismiss="modal">Save Changes</button>
          </div>
        </div>
      </div>
    </div>
    
@endsection

@push('scripts')
<script src="{{ asset('vendors/dhtmlx-gantt/dhtmlxgantt.js') }}"></script>
<script src="{{ asset('vendors/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('vendors/glightbox/glightbox.min.js') }}"></script>
<script src="{{ asset('vendors/dropzone/dropzone-min.js') }}"></script>
<script src="{{ asset('assets/js/pages/gantt-chart.js') }}"></script>
@endpush
