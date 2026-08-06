@extends('layouts.vertical')

@section('title', 'Boards')

@push('styles')
<link href="{{ asset('vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="mb-9">
          <div class="border-bottom border-translucent mx-n4 mx-lg-n6 px-4 px-lg-6 pb-5">
            <div class="row justify-content-between gy-4">
              <div class="col-auto">
                <h2>Kanban Boards <span class="text-body-tertiary fw-semibold">(8)</span></h2>
              </div>
              <div class="col-auto d-flex flex-wrap gap-2"><button class="btn px-4 btn-phoenix-primary d-flex"><span class="fa-solid fa-filter me-1"></span><span>Filter</span></button><select class="form-select w-auto" id="select-deals">
                  <option>Sort by - Last visited</option>
                  <option>Sort by - Name (A - Z)</option>
                  <option>Sort by - Name (Z - A)</option>
                  <option>Sort by - Category</option>
                  <option> Sort by - Date created</option>
                </select>
                <div class="search-box">
                  <form class="position-relative"><input class="form-control search-input search" type="search" placeholder="Search by name" aria-label="Search">
                    <span class="fas fa-search search-box-icon"></span>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex flex-wrap gap-3 border-bottom border-translucent mx-n4 mx-lg-n6 px-4 px-lg-6 py-5"><a class="btn btn-primary px-3 px-sm-5 px-md-10" href="{{ url('create-kanban-board') }}"><span class="fas fa-plus me-2"></span>Create New Board</a><button class="btn btn-phoenix-primary px-3 px-sm-4 d-flex text-body"><span class="fa-solid fa-angles-down me-sm-2"></span><span class="d-none d-sm-block">Import Bulk Tasks</span></button><a class="btn btn-phoenix-primary px-3 px-sm-4 d-flex text-body" href="{{ url('calendar') }}"><span class="fa-solid fa-calendar-xmark me-sm-2"></span><span class="d-none d-sm-block white-space-nowrap">Upcoming Deadlines</span></a></div>
          <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 py-5 border-bottom border-translucent">
            <h4>Most Recent Boards</h4>
            <p class="mb-4">Boards you’ve visited recently. Can be private or public boards. <a href="#!"> Change preference</a></p>
            <div class="swiper-theme-container kanban-boards-slider">
              <div class="swiper theme-slider" data-swiper='{"slidesPerView":1,"spaceBetween":24,"speed":800,"breakpoints":{"576":{"slidesPerView":2},"1200":{"slidesPerView":3},"1540":{"slidesPerView":4}}}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><a class="text-decoration-none" href="{{ url('kanban') }}">
                      <div class="card overflow-hidden bg-transparent h-100">
                        <div class="position-relative">
                          <div class="bg-info-darker" style="height: 128px"></div>
                          <div class="avatar-group position-absolute" style="bottom: 1rem; left: 1.5rem">
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/1.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/2.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/3.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/4.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/avatar-placeholder.webp') }}" alt="">
                            </div>
                          </div>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                          <div>
                            <h3 class="text-body">Issue Tickets</h3>
                            <p class="text-body-tertiary mb-4">Daily task</p>
                          </div>
                          <div class="d-flex gap-4">
                            <h5 class="text-body"><span class="fa-solid fa-list-check text-body-tertiary me-1"></span>44</h5>
                            <h5 class="text-body"><span class="fa-solid fa-comment text-body-tertiary me-1"></span>12</h5>
                            <h5 class="text-body"><span class="fa-solid fa-calendar-xmark text-body-tertiary me-1"></span>3</h5>
                          </div>
                        </div>
                      </div>
                    </a></div>
                  <div class="swiper-slide"><a class="text-decoration-none" href="{{ url('kanban') }}">
                      <div class="card overflow-hidden bg-transparent h-100">
                        <div class="position-relative"><img class="w-100" src="{{ asset('assets/img/kanban/board-2.png') }}" style="height: 128px;" alt="">
                          <div class="avatar-group position-absolute" style="bottom: 1rem; left: 1.5rem">
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/5.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/6.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/7.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/8.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/9.webp') }}" alt="">
                            </div>
                          </div>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                          <div>
                            <h3 class="text-body">Falcon React</h3>
                            <p class="text-body-tertiary mb-4">Production line</p>
                          </div>
                          <div class="d-flex gap-4">
                            <h5 class="text-body"><span class="fa-solid fa-list-check text-body-tertiary me-1"></span>11</h5>
                            <h5 class="text-body"><span class="fa-solid fa-comment text-body-tertiary me-1"></span>29</h5>
                            <h5 class="text-body"><span class="fa-solid fa-calendar-xmark text-body-tertiary me-1"></span>9</h5>
                          </div>
                        </div>
                      </div>
                    </a></div>
                  <div class="swiper-slide"><a class="text-decoration-none" href="{{ url('kanban') }}">
                      <div class="card overflow-hidden bg-transparent h-100">
                        <div class="position-relative"><img class="w-100" src="{{ asset('assets/img/kanban/board-3.png') }}" style="height: 128px;" alt="">
                          <div class="avatar-group position-absolute" style="bottom: 1rem; left: 1.5rem">
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/10.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/11.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/12.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/13.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/avatar-placeholder.webp') }}" alt="">
                            </div>
                          </div>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                          <div>
                            <h3 class="text-body">Rebuilding</h3>
                            <p class="text-body-tertiary mb-4">Production line</p>
                          </div>
                          <div class="d-flex gap-4">
                            <h5 class="text-body"><span class="fa-solid fa-list-check text-body-tertiary me-1"></span>13</h5>
                            <h5 class="text-body"><span class="fa-solid fa-comment text-body-tertiary me-1"></span>11</h5>
                            <h5 class="text-body"><span class="fa-solid fa-calendar-xmark text-body-tertiary me-1"></span>15</h5>
                          </div>
                        </div>
                      </div>
                    </a></div>
                  <div class="swiper-slide"><a class="text-decoration-none" href="{{ url('kanban') }}">
                      <div class="card overflow-hidden bg-transparent h-100">
                        <div class="position-relative"><img class="w-100" src="{{ asset('assets/img/kanban/board-4.png') }}" style="height: 128px;" alt="">
                          <div class="avatar-group position-absolute" style="bottom: 1rem; left: 1.5rem">
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/14.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/15.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/16.webp') }}" alt="">
                            </div>
                          </div>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                          <div>
                            <h3 class="text-body">ThemePro Devs</h3>
                            <p class="text-body-tertiary mb-4">Project Management</p>
                          </div>
                          <div class="d-flex gap-4">
                            <h5 class="text-body"><span class="fa-solid fa-list-check text-body-tertiary me-1"></span>103</h5>
                            <h5 class="text-body"><span class="fa-solid fa-comment text-body-tertiary me-1"></span>2</h5>
                            <h5 class="text-body"><span class="fa-solid fa-calendar-xmark text-body-tertiary me-1"></span>20</h5>
                          </div>
                        </div>
                      </div>
                    </a></div>
                  <div class="swiper-slide"><a class="btn btn-phoenix-primary d-flex flex-center h-100 w-100 fs-7 fw-semibold text-truncate" href="{{ url('create-kanban-board') }}"><span class="fa-solid fa-plus-circle fs-8 me-2"></span>Create New Board</a></div>
                </div>
              </div>
              <div class="swiper-nav">
                <div class="swiper-button-next"><span class="fas fa-chevron-right fs-11"></span></div>
                <div class="swiper-button-prev"><span class="fas fa-chevron-left fs-11"></span></div>
              </div>
            </div>
          </div>
          <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 py-5 border-bottom border-translucent">
            <h4>Your Boards</h4>
            <p class="mb-4">Boards where you are either an Admin or a Member.</p>
            <div class="swiper-theme-container kanban-boards-slider">
              <div class="swiper theme-slider" data-swiper='{"slidesPerView":1,"spaceBetween":24,"speed":800,"breakpoints":{"576":{"slidesPerView":2},"1200":{"slidesPerView":3},"1540":{"slidesPerView":4}}}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><a class="text-decoration-none" href="{{ url('kanban') }}">
                      <div class="card overflow-hidden bg-transparent h-100">
                        <div class="position-relative"><img class="w-100" src="{{ asset('assets/img/kanban/board-5.png') }}" style="height: 128px;" alt="">
                          <div class="avatar-group position-absolute" style="bottom: 1rem; left: 1.5rem">
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/14.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/19.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/68.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/69.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/avatar-placeholder.webp') }}" alt="">
                            </div>
                          </div>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                          <div>
                            <h3 class="text-body">Post Tracking</h3>
                            <p class="text-body-tertiary mb-4">Deals Tracking</p>
                          </div>
                          <div class="d-flex gap-4">
                            <h5 class="text-body"><span class="fa-solid fa-list-check text-body-tertiary me-1"></span>142</h5>
                            <h5 class="text-body"><span class="fa-solid fa-comment text-body-tertiary me-1"></span>21</h5>
                            <h5 class="text-body"><span class="fa-solid fa-calendar-xmark text-body-tertiary me-1"></span>100</h5>
                          </div>
                        </div>
                      </div>
                    </a></div>
                  <div class="swiper-slide"><a class="text-decoration-none" href="{{ url('kanban') }}">
                      <div class="card overflow-hidden bg-transparent h-100">
                        <div class="position-relative"><img class="w-100" src="{{ asset('assets/img/kanban/board-6.png') }}" style="height: 128px;" alt="">
                          <div class="avatar-group position-absolute" style="bottom: 1rem; left: 1.5rem">
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/17.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/18.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/19.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/20.webp') }}" alt="">
                            </div>
                          </div>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                          <div>
                            <h3 class="text-body">Automation Team</h3>
                            <p class="text-body-tertiary mb-4">Remote team</p>
                          </div>
                          <div class="d-flex gap-4">
                            <h5 class="text-body"><span class="fa-solid fa-list-check text-body-tertiary me-1"></span>6</h5>
                            <h5 class="text-body"><span class="fa-solid fa-comment text-body-tertiary me-1"></span>761</h5>
                            <h5 class="text-body"><span class="fa-solid fa-calendar-xmark text-body-tertiary me-1"></span>2</h5>
                          </div>
                        </div>
                      </div>
                    </a></div>
                  <div class="swiper-slide"><a class="text-decoration-none" href="{{ url('kanban') }}">
                      <div class="card overflow-hidden bg-transparent h-100">
                        <div class="position-relative">
                          <div class="bg-body-secondary" style="height: 128px"></div>
                          <div class="avatar-group position-absolute" style="bottom: 1rem; left: 1.5rem">
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/21.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/19.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/22.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/23.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/avatar-placeholder.webp') }}" alt="">
                            </div>
                          </div>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                          <div>
                            <h3 class="text-body">Phoenix Kanban</h3>
                            <p class="text-body-tertiary mb-4">Project Management</p>
                          </div>
                          <div class="d-flex gap-4">
                            <h5 class="text-body"><span class="fa-solid fa-list-check text-body-tertiary me-1"></span>43</h5>
                            <h5 class="text-body"><span class="fa-solid fa-comment text-body-tertiary me-1"></span>22</h5>
                            <h5 class="text-body"><span class="fa-solid fa-calendar-xmark text-body-tertiary me-1"></span>17</h5>
                          </div>
                        </div>
                      </div>
                    </a></div>
                  <div class="swiper-slide"><a class="text-decoration-none" href="{{ url('kanban') }}">
                      <div class="card overflow-hidden bg-transparent h-100">
                        <div class="position-relative"><img class="w-100" src="{{ asset('assets/img/kanban/board-8.png') }}" style="height: 128px;" alt="">
                          <div class="avatar-group position-absolute" style="bottom: 1rem; left: 1.5rem">
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/24.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/19.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/avatar-placeholder.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/68.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/69.webp') }}" alt="">
                            </div>
                          </div>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                          <div>
                            <h3 class="text-body">Reconciling Backlogs</h3>
                            <p class="text-body-tertiary mb-4">Meeting Agenda</p>
                          </div>
                          <div class="d-flex gap-4">
                            <h5 class="text-body"><span class="fa-solid fa-list-check text-body-tertiary me-1"></span>23</h5>
                            <h5 class="text-body"><span class="fa-solid fa-comment text-body-tertiary me-1"></span>111</h5>
                            <h5 class="text-body"><span class="fa-solid fa-calendar-xmark text-body-tertiary me-1"></span>23</h5>
                          </div>
                        </div>
                      </div>
                    </a></div>
                  <div class="swiper-slide"><a class="btn btn-phoenix-primary d-flex flex-center h-100 w-100 fs-7 fw-semibold text-truncate" href="{{ url('create-kanban-board') }}"><span class="fa-solid fa-plus-circle fs-8 me-2"></span>Create New Board</a></div>
                </div>
              </div>
              <div class="swiper-nav">
                <div class="swiper-button-next"><span class="fas fa-chevron-right fs-11"></span></div>
                <div class="swiper-button-prev"><span class="fas fa-chevron-left fs-11"></span></div>
              </div>
            </div>
          </div>
          <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 py-5 border-bottom border-translucent">
            <h4>Private Boards</h4>
            <p class="mb-4">Your eyes only</p>
            <div class="swiper-theme-container kanban-boards-slider">
              <div class="swiper theme-slider" data-swiper='{"slidesPerView":1,"spaceBetween":24,"speed":800,"breakpoints":{"576":{"slidesPerView":2},"1200":{"slidesPerView":3},"1540":{"slidesPerView":4}}}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><a class="text-decoration-none" href="{{ url('kanban') }}">
                      <div class="card overflow-hidden bg-transparent h-100">
                        <div class="position-relative"><img class="w-100" src="{{ asset('assets/img/kanban/board-9.png') }}" style="height: 128px;" alt="">
                          <div class="avatar-group position-absolute" style="bottom: 1rem; left: 1.5rem">
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/30.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/31.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/32.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/33.webp') }}" alt="">
                            </div>
                            <div class="avatar avatar-m  border border-light-subtle rounded-circle">
                              <img class="rounded-circle " src="{{ asset('assets/img/team/34.webp') }}" alt="">
                            </div>
                          </div>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                          <div>
                            <h3 class="text-body">Inventory update</h3>
                            <p class="text-body-tertiary mb-4">Shipping Process</p>
                          </div>
                          <div class="d-flex gap-4">
                            <h5 class="text-body"><span class="fa-solid fa-list-check text-body-tertiary me-1"></span>68</h5>
                            <h5 class="text-body"><span class="fa-solid fa-comment text-body-tertiary me-1"></span>31</h5>
                            <h5 class="text-body"><span class="fa-solid fa-calendar-xmark text-body-tertiary me-1"></span>14</h5>
                          </div>
                        </div>
                      </div>
                    </a></div>
                  <div class="swiper-slide"><a class="btn btn-phoenix-primary d-flex flex-center h-100 w-100 fs-7 fw-semibold text-truncate" href="{{ url('create-kanban-board') }}"><span class="fa-solid fa-plus-circle fs-8 me-2"></span>Create New Board</a></div>
                </div>
              </div>
              <div class="swiper-nav">
                <div class="swiper-button-next"><span class="fas fa-chevron-right fs-11"></span></div>
                <div class="swiper-button-prev"><span class="fas fa-chevron-left fs-11"></span></div>
              </div>
            </div>
          </div>
          <div class="text-center"><button class="btn btn-phoenix-primary mt-4"><span class="fa-solid fa-box-archive me-2"></span>Open Archive</button></div>
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
      
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
@endsection

@push('scripts')
<script src="{{ asset('vendors/swiper/swiper-bundle.min.js') }}"></script>
@endpush
