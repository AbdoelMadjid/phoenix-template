@extends('layouts.vertical')

@section('title', 'List View')

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
        <div class="mb-9" data-collapse-filemanager-sidebar="data-collapse-filemanager-sidebar">
          <h2 class="mb-4">File Manager</h2>
          <div class="row gx-4">
            <div class="col-auto file-manager-sidebar">
              <div class="phoenix-offcanvas phoenix-offcanvas-fixed bg-body scrollbar overflow-x-hidden" id="fileManagerSideBar" data-breakpoint="lg">
                <div class="d-flex flex-between-center">
                  <h5 class="mb-2">My Files</h5><button class="btn p-0 fs-8 d-lg-none" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-xmark" data-fa-transform="up-3"></span></button>
                </div>
                <ul class="mb-0 treeview" id="treeviewExample">
                  <li class="treeview-list-item"><a data-bs-toggle="collapse" href="#treeviewExample-1-1" role="button" aria-expanded="false">
                      <p class="treeview-text text-nowrap"><span class="fa-solid fa-folder treeview-icon"></span>My Drive</p>
                    </a>
                    <ul class="collapse treeview-list" id="treeviewExample-1-1" data-show="true">
                      <li class="treeview-list-item"><a data-bs-toggle="collapse" href="#treeviewExample-2-1" role="button" aria-expanded="false">
                          <p class="treeview-text text-nowrap"><span class="fa-solid fa-folder treeview-icon"></span>Illustrations<span class="treeview-badge">3</span><span class="treeview-dot bg-danger"></span></p>
                        </a>
                        <ul class="collapse treeview-list" id="treeviewExample-2-1" data-show="false">
                          <li class="treeview-list-item">
                            <div class="treeview-item"><a class="flex-1 ps-2 ms-2" href="#!">
                                <p class="treeview-text text-nowrap"><span class="treeview-icon fa-solid fa-file-lines"></span>Read.txt</p>
                              </a></div>
                          </li>
                          <li class="treeview-list-item">
                            <div class="treeview-item"><a class="flex-1 ps-2 ms-2" href="#!">
                                <p class="treeview-text text-nowrap"><span class="treeview-icon fa-solid fa-image"></span>error.jpg</p>
                              </a></div>
                          </li>
                          <li class="treeview-list-item">
                            <div class="treeview-item"><a class="flex-1 ps-2 ms-2" href="#!">
                                <p class="treeview-text text-nowrap"><span class="treeview-icon fa-solid fa-file-zipper"></span>Illustration.zip</p>
                              </a></div>
                          </li>
                        </ul>
                      </li>
                      <li class="treeview-list-item"><a data-bs-toggle="collapse" href="#treeviewExample-2-2" role="button" aria-expanded="false">
                          <p class="treeview-text text-nowrap"><span class="fa-solid fa-folder treeview-icon"></span>UI Design</p>
                        </a>
                        <ul class="collapse treeview-list" id="treeviewExample-2-2" data-show="false">
                          <li class="treeview-list-item">
                            <div class="treeview-item"><a class="flex-1 ps-2 ms-2" href="#!">
                                <p class="treeview-text text-nowrap"><span class="treeview-icon fa-solid fa-file-zipper"></span>Pages.zip</p>
                              </a></div>
                          </li>
                        </ul>
                      </li>
                      <li class="treeview-list-item"><a data-bs-toggle="collapse" href="#treeviewExample-2-3" role="button" aria-expanded="false">
                          <p class="treeview-text text-nowrap"><span class="fa-solid fa-folder treeview-icon text-info-light"></span>Brand Identity</p>
                        </a>
                        <ul class="collapse treeview-list" id="treeviewExample-2-3" data-show="false">
                          <li class="treeview-list-item">
                            <div class="treeview-item"><a class="flex-1 ps-2 ms-2" href="#!">
                                <p class="treeview-text text-nowrap"><span class="treeview-icon fa-solid fa-file-word"></span>information.doc</p>
                              </a></div>
                          </li>
                        </ul>
                      </li>
                      <li class="treeview-list-item"><a data-bs-toggle="collapse" href="#treeviewExample-2-4" role="button" aria-expanded="false">
                          <p class="treeview-text text-nowrap"><span class="fa-solid fa-folder treeview-icon"></span>Source Code</p>
                        </a>
                        <ul class="collapse treeview-list" id="treeviewExample-2-4" data-show="false">
                          <li class="treeview-list-item">
                            <div class="treeview-item"><a class="flex-1 ps-2 ms-2" href="#!">
                                <p class="treeview-text text-nowrap"><span class="treeview-icon fa-brands fa-html5"></span>getting-started.html</p>
                              </a></div>
                          </li>
                          <li class="treeview-list-item">
                            <div class="treeview-item"><a class="flex-1 ps-2 ms-2" href="#!">
                                <p class="treeview-text text-nowrap"><span class="treeview-icon fa-solid fa-file-zipper"></span>Source Code.zip</p>
                              </a></div>
                          </li>
                        </ul>
                      </li>
                      <li class="treeview-list-item"><a data-bs-toggle="collapse" href="#treeviewExample-2-5" role="button" aria-expanded="false">
                          <p class="treeview-text text-nowrap"><span class="fa-solid fa-folder treeview-icon"></span>Code Backup</p>
                        </a>
                        <ul class="collapse treeview-list" id="treeviewExample-2-5" data-show="true">
                          <li class="treeview-list-item"><a data-bs-toggle="collapse" href="#treeviewExample-3-1" role="button" aria-expanded="false">
                              <p class="treeview-text text-nowrap"><span class="fa-solid fa-folder treeview-icon"></span>Files</p>
                            </a>
                            <ul class="collapse treeview-list" id="treeviewExample-3-1" data-show="false">
                              <li class="treeview-list-item">
                                <div class="treeview-item"><a class="flex-1 ps-2 ms-2" href="#!">
                                    <p class="treeview-text text-nowrap"><span class="treeview-icon fa-solid fa-file-zipper"></span>main.zip</p>
                                  </a></div>
                              </li>
                            </ul>
                          </li>
                          <li class="treeview-list-item">
                            <div class="treeview-item"><a class="flex-1 ps-2 ms-2" href="#!">
                                <p class="treeview-text text-nowrap"><span class="treeview-icon fa-solid fa-file"></span>Report.docx</p>
                              </a></div>
                          </li>
                          <li class="treeview-list-item">
                            <div class="treeview-item"><a class="flex-1 ps-2 ms-2" href="#!">
                                <p class="treeview-text text-nowrap"><span class="treeview-icon fa-solid fa-file-zipper"></span>backup.zip</p>
                              </a></div>
                          </li>
                        </ul>
                      </li>
                      <li class="treeview-list-item"><a data-bs-toggle="collapse" href="#treeviewExample-2-6" role="button" aria-expanded="false">
                          <p class="treeview-text text-nowrap"><span class="fa-solid fa-folder treeview-icon"></span>Landing</p>
                        </a>
                        <ul class="collapse treeview-list" id="treeviewExample-2-6" data-show="true">
                          <li class="treeview-list-item">
                            <div class="treeview-item"><a class="flex-1 ps-2 ms-2" href="#!">
                                <p class="treeview-text text-nowrap"><span class="treeview-icon fa-solid fa-image"></span>Landing.png</p>
                              </a></div>
                          </li>
                          <li class="treeview-list-item"><a data-bs-toggle="collapse" href="#treeviewExample-3-2" role="button" aria-expanded="false">
                              <p class="treeview-text text-nowrap"><span class="fa-solid fa-folder treeview-icon"></span>Images</p>
                            </a>
                            <ul class="collapse treeview-list" id="treeviewExample-3-2" data-show="false">
                              <li class="treeview-list-item">
                                <div class="treeview-item"><a class="flex-1 ps-2 ms-2" href="#!">
                                    <p class="treeview-text text-nowrap"><span class="treeview-icon fa-solid fa-file-zipper"></span>images.zip</p>
                                  </a></div>
                              </li>
                            </ul>
                          </li>
                          <li class="treeview-list-item">
                            <div class="treeview-item"><a class="flex-1 ps-2 ms-2" href="#!">
                                <p class="treeview-text text-nowrap"><span class="treeview-icon fa-brands fa-html5"></span>index.html</p>
                              </a></div>
                          </li>
                          <li class="treeview-list-item">
                            <div class="treeview-item"><a class="flex-1 ps-2 ms-2" href="#!">
                                <p class="treeview-text text-nowrap"><span class="treeview-icon fa-brands fa-css3-alt"></span>Style.css</p>
                              </a></div>
                          </li>
                        </ul>
                      </li>
                      <li class="treeview-list-item"><a data-bs-toggle="collapse" href="#treeviewExample-2-7" role="button" aria-expanded="false">
                          <p class="treeview-text text-nowrap"><span class="fa-solid fa-folder treeview-icon"></span>Travel<span class="treeview-badge">4</span><span class="treeview-dot bg-danger"></span></p>
                        </a>
                        <ul class="collapse treeview-list" id="treeviewExample-2-7" data-show="true">
                          <li class="treeview-list-item"><a data-bs-toggle="collapse" href="#treeviewExample-3-3" role="button" aria-expanded="false">
                              <p class="treeview-text text-nowrap"><span class="fa-solid fa-folder treeview-icon"></span>Files</p>
                            </a>
                            <ul class="collapse treeview-list" id="treeviewExample-3-3" data-show="false">
                              <li class="treeview-list-item">
                                <div class="treeview-item"><a class="flex-1 ps-2 ms-2" href="#!">
                                    <p class="treeview-text text-nowrap"><span class="treeview-icon fa-solid fa-file-zipper"></span>main.zip</p>
                                  </a></div>
                              </li>
                            </ul>
                          </li>
                          <li class="treeview-list-item">
                            <div class="treeview-item"><a class="flex-1 ps-2 ms-2" href="#!">
                                <p class="treeview-text text-nowrap"><span class="treeview-icon fa-brands fa-html5"></span>index.html</p>
                              </a></div>
                          </li>
                          <li class="treeview-list-item">
                            <div class="treeview-item"><a class="flex-1 ps-2 ms-2" href="#!">
                                <p class="treeview-text text-nowrap"><span class="treeview-icon fa-brands fa-css3-alt"></span>Style.css</p>
                              </a></div>
                          </li>
                          <li class="treeview-list-item">
                            <div class="treeview-item"><a class="flex-1 ps-2 ms-2" href="#!">
                                <p class="treeview-text text-nowrap"><span class="treeview-icon fa-solid fa-file-lines"></span>Notes.txt</p>
                              </a></div>
                          </li>
                        </ul>
                      </li>
                      <li class="treeview-list-item">
                        <div class="treeview-item"><a class="flex-1 ps-2 ms-2" href="#!">
                            <p class="treeview-text text-nowrap"><span class="treeview-icon fa-brands fa-html5"></span>Phoenix.html</p>
                          </a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="treeview-list-item">
                    <div class="treeview-item"><a class="flex-1 ps-2 ms-2" href="#!">
                        <p class="treeview-text text-nowrap"><span class="treeview-icon fa-solid fa-share-nodes"></span>Shared with me</p>
                      </a></div>
                  </li>
                  <li class="treeview-list-item">
                    <div class="treeview-item"><a class="flex-1 ps-2 ms-2" href="#!">
                        <p class="treeview-text text-nowrap"><span class="treeview-icon fa-solid fa-clock"></span>Recent</p>
                      </a></div>
                  </li>
                  <li class="treeview-list-item">
                    <div class="treeview-item"><a class="flex-1 ps-2 ms-2" href="#!">
                        <p class="treeview-text text-nowrap"><span class="treeview-icon fa-solid fa-heart"></span>Favourite</p>
                      </a></div>
                  </li>
                  <li class="treeview-list-item">
                    <div class="treeview-item"><a class="flex-1 ps-2 ms-2" href="#!">
                        <p class="treeview-text text-nowrap"><span class="treeview-icon fa-solid fa-circle-info"></span>Spam</p>
                      </a></div>
                  </li>
                  <li class="treeview-list-item">
                    <div class="treeview-item"><a class="flex-1 ps-2 ms-2" href="#!">
                        <p class="treeview-text text-nowrap"><span class="treeview-icon fa-solid fa-trash"></span>Trash</p>
                      </a></div>
                  </li>
                  <li class="treeview-list-item">
                    <div class="treeview-item"><a class="flex-1 ps-2 ms-2" href="#!">
                        <p class="treeview-text text-nowrap"><span class="treeview-icon fa-brands fa-google-drive"></span>Google Drive</p>
                      </a></div>
                  </li>
                  <li class="treeview-list-item">
                    <div class="treeview-item"><a class="flex-1 ps-2 ms-2" href="#!">
                        <p class="treeview-text text-nowrap"><span class="treeview-icon fa-brands fa-dropbox"></span>Dropbox</p>
                      </a></div>
                  </li>
                  <li class="treeview-list-item">
                    <div class="treeview-item"><a class="flex-1 ps-2 ms-2" href="#!">
                        <p class="treeview-text text-nowrap"><span class="treeview-icon fa-solid fa-cloud"></span>One Drive</p>
                      </a></div>
                  </li>
                </ul><a class="btn collapse-indicator px-0 py-3 mt-3 d-flex flex-between-center" data-bs-toggle="collapse" href="#collapseStorageDetails" role="button" aria-expanded="false" aria-controls="collapseStorageDetails">
                  <h5 class="mb-0 text-body-highlight">Storage details</h5><span class="fa-solid fa-chevron-right toggle-icon storate-details-toggle fs-9 text-primary"></span>
                </a>
                <div class="progress-stacked" style="height: 10px">
                  <div class="progress h-100" role="progressbar" aria-label="Segment one" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                    <div class="progress-bar bg-primary-light"></div>
                  </div>
                  <div class="progress h-100" role="progressbar" aria-label="Segment one" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100" style="width: 16%">
                    <div class="progress-bar bg-info-lighter"></div>
                  </div>
                  <div class="progress h-100" role="progressbar" aria-label="Segment one" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" style="width: 18%">
                    <div class="progress-bar bg-warning-lighter"></div>
                  </div>
                  <div class="progress h-100" role="progressbar" aria-label="Segment one" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%">
                    <div class="progress-bar bg-danger-lighter"></div>
                  </div>
                  <div class="progress h-100" role="progressbar" aria-label="Segment one" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100" style="width: 11%">
                    <div class="progress-bar bg-success-lighter"></div>
                  </div>
                </div>
                <h6 class="text-body mt-2 mb-0">Used: 45.8 GB (92%) of the 50 GB.</h6>
                <div class="collapse" id="collapseStorageDetails">
                  <div class="pt-4">
                    <div class="d-flex align-items-center gap-2 mb-3">
                      <div class="square-icon-box bg-primary-subtle"><span class="fa-solid fa-file-pdf text-primary-darker"></span></div>
                      <div>
                        <h6 class="text-body">Images</h6>
                        <h6 class="mb-0 text-body fw-semibold">22k Files - Used</h6>
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-2 mb-3">
                      <div class="square-icon-box bg-info-subtle"><span class="fa-solid fa-video text-info-darker"></span></div>
                      <div>
                        <h6 class="text-body">Videos</h6>
                        <h6 class="mb-0 text-body fw-semibold">534 Files - Used</h6>
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-2 mb-3">
                      <div class="square-icon-box bg-warning-subtle"><span class="fa-solid fa-music text-warning-darker"></span></div>
                      <div>
                        <h6 class="text-body">Audio</h6>
                        <h6 class="mb-0 text-body fw-semibold">55 Files - Used</h6>
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-2 mb-3">
                      <div class="square-icon-box bg-danger-subtle"><span class="fa-solid fa-file text-danger-darker"></span></div>
                      <div>
                        <h6 class="text-body">Documents</h6>
                        <h6 class="mb-0 text-body fw-semibold">65k Files - Used</h6>
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                      <div class="square-icon-box bg-success-subtle"><span class="fa-solid fa-rectangle-list text-success-darker"></span></div>
                      <div>
                        <h6 class="text-body">Others</h6>
                        <h6 class="mb-0 text-body fw-semibold">12k Files - Used</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <div class="text-center"> <img class="d-dark-none img-fluid" src="{{ asset('assets/img/spot-illustrations/45.png') }}" alt="" width="98"><img class="d-light-none img-fluid" src="{{ asset('assets/img/spot-illustrations/dark_45.png') }}" alt="" width="98">
                  <h5 class="mt-3 text-body fw-bolder">Upgrade to Pro</h5>
                  <h6 class="mb-3 text-body-tertiary fw-normal">Expand your storage capacity with our upgraded storage options.</h6><button class="btn btn-sm btn-primary w-100">Upgrade Now</button>
                </div>
              </div>
              <div class="phoenix-offcanvas-backdrop d-lg-none" data-phoenix-backdrop="data-phoenix-backdrop"></div>
            </div>
            <div class="col my-files">
              <div class="row g-3 flex-between-center">
                <div class="col-auto d-flex gap-2"><button class="btn btn-phoenix-secondary btn-square d-lg-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#fileManagerSideBar"><span class="fa-solid fa-bars"></span></button>
                  <button class="btn btn-phoenix-secondary btn-square d-none d-lg-block d-xl-none" data-toggle-sidebar="data-toggle-sidebar"><span class="fa-solid fa-bars"></span></button>
                  <button class="btn btn-primary px-sm-6"><span class="fa-solid fa-cloud-arrow-up me-2"></span>Upload</button>
                  <button class="btn btn-link text-body-secondary px-2" type="button" data-bs-toggle="modal" data-bs-target="#addFolderModal" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-add me-2"> </span>Add New Folder</button>
                </div>
                <div class="col-auto d-flex gap-2">
                  <div class="search-box">
                    <form class="position-relative"><input class="form-control search-input search" type="search" placeholder="Search by name" aria-label="Search">
                      <span class="fas fa-search search-box-icon"></span>
                    </form>
                  </div><select class="form-select w-auto">
                    <option value="1">Last 7 days</option>
                    <option value="1">Last 15 days</option>
                    <option value="1">Last 30 days</option>
                  </select><button class="btn btn-phoenix-primary btn-square" type="button" data-bs-toggle="modal" data-bs-target="#fileFilterModal" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-filter"></span></button>
                </div>
              </div>
              <div class="card mt-4">
                <div class="card-body pb-5">
                  <h4 class="mb-3">Recent Files</h4>
                  <div class="row g-3">
                    <div class="col-sm-6 col-xl-6 col-xxl-3">
                      <div class="position-relative">
                        <div class="img-zoom-hover mask-image-none overflow-hidden border rounded-3">
                          <div class="position-relative">
                            <div class="mask-image-recent-file overflow-hidden">
                              <div class="ratio ratio-16x9"><img class="w-100 h-100 object-fit-cover" src="{{ asset('assets/img/file-manager/1.png') }}" alt=""></div><span class="badge badge-phoenix fs-10 position-absolute top-0 start-0 mt-3 ms-3 badge-phoenix-warning">Edited 5 min ago</span>
                            </div>
                          </div>
                          <div class="bg-body p-3 pe-2 d-flex justify-content-between align-items-start rounded-bottom-3">
                            <div class="w-75"><a class="text-body-highlight fw-bold mb-2 stretched-link d-block text-truncate" href="{{ asset('assets/img/generic/67.pdf') }}" data-gallery="recent-file" data-width="90%" data-height="90vh">Verification Letter.pdf</a>
                              <h6 class="mb-0 fw-semibold text-body-tertiary">8.8 mb</h6>
                            </div>
                            <div class="dropdown position-static z-5"><button class="btn btn-square-sm position-relative mt-n1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v" data-fa-transform="shrink-2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item fw-semibold text-decoration-none" href="#">Share</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Download</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Duplicate</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Move</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Rename</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Move to Bin</a>
                                <hr class="dropdown-divider"><a class="dropdown-item fw-semibold text-decoration-none text-danger" href="#">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-6 col-xxl-3">
                      <div class="position-relative" data-play-on-container-hover="data-play-on-container-hover">
                        <div class="img-zoom-hover mask-image-none overflow-hidden border rounded-3">
                          <div class="position-relative">
                            <div class="mask-image-recent-file overflow-hidden">
                              <div class="video-container rounded-3 h-100 ratio ratio-16x9"><video class="video d-block h-100 w-100 object-fit-cover" muted="muted" data-play-on-hover="data-play-on-hover" poster="{{ asset('assets/video/2.png') }}">
                                  <source src="{{ asset('assets/video/2.mp4') }}" type="video/mp4">
                                </video></div><span class="badge badge-phoenix fs-10 position-absolute top-0 start-0 mt-3 ms-3 badge-phoenix-info">Upload 6 min ago</span>
                            </div><button class="btn p-0 circle-icon-item-md position-absolute top-50 start-50 translate-middle bg-body-emphasis bg-opacity-50 z-5" data-bs-theme="light" data-video-controller="data-video-controller"><span class="play-icon pointer-events-none"><span class="fa-solid fa-play text-body-secondary fs-9" data-fa-transform="down-1"></span></span><span class="pause-icon pointer-events-none"><span class="fa-solid fa-pause text-body-secondary fs-9" data-fa-transform="down-1"></span></span></button>
                          </div>
                          <div class="bg-body p-3 pe-2 d-flex justify-content-between align-items-start rounded-bottom-3">
                            <div class="w-75"><a class="text-body-highlight fw-bold mb-2 stretched-link d-block text-truncate" href="{{ asset('assets/video/2.mp4') }}" data-gallery="recent-file" data-width="" data-height="">Travel Tales.mp4</a>
                              <h6 class="mb-0 fw-semibold text-body-tertiary">65 mb</h6>
                            </div>
                            <div class="dropdown position-static z-5"><button class="btn btn-square-sm position-relative mt-n1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v" data-fa-transform="shrink-2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item fw-semibold text-decoration-none" href="#">Share</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Download</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Duplicate</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Move</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Rename</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Move to Bin</a>
                                <hr class="dropdown-divider"><a class="dropdown-item fw-semibold text-decoration-none text-danger" href="#">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-6 col-xxl-3">
                      <div class="position-relative">
                        <div class="img-zoom-hover mask-image-none overflow-hidden border rounded-3">
                          <div class="position-relative">
                            <div class="mask-image-recent-file overflow-hidden">
                              <div class="ratio ratio-16x9"><img class="w-100 h-100 object-fit-cover" src="{{ asset('assets/img/file-manager/2.png') }}" alt=""></div><span class="badge badge-phoenix fs-10 position-absolute top-0 start-0 mt-3 ms-3 badge-phoenix-info">Upload 6 min ago</span>
                            </div>
                          </div>
                          <div class="bg-body p-3 pe-2 d-flex justify-content-between align-items-start rounded-bottom-3">
                            <div class="w-75"><a class="text-body-highlight fw-bold mb-2 stretched-link d-block text-truncate" href="{{ asset('assets/img/file-manager/2.png') }}" data-gallery="recent-file" data-width="" data-height="">Mountain During.jpg</a>
                              <h6 class="mb-0 fw-semibold text-body-tertiary">5.8 mb</h6>
                            </div>
                            <div class="dropdown position-static z-5"><button class="btn btn-square-sm position-relative mt-n1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v" data-fa-transform="shrink-2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item fw-semibold text-decoration-none" href="#">Share</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Download</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Duplicate</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Move</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Rename</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Move to Bin</a>
                                <hr class="dropdown-divider"><a class="dropdown-item fw-semibold text-decoration-none text-danger" href="#">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-6 col-xxl-3">
                      <div class="position-relative" data-play-on-container-hover="data-play-on-container-hover">
                        <div class="img-zoom-hover mask-image-none overflow-hidden border rounded-3">
                          <div class="position-relative">
                            <div class="mask-image-recent-file overflow-hidden">
                              <div class="video-container rounded-3 h-100 ratio ratio-16x9"><video class="video d-block h-100 w-100 object-fit-cover" muted="muted" data-play-on-hover="data-play-on-hover" poster="{{ asset('assets/video/3.png') }}">
                                  <source src="{{ asset('assets/video/3.mp4') }}" type="video/mp4">
                                </video></div><span class="badge badge-phoenix fs-10 position-absolute top-0 start-0 mt-3 ms-3 badge-phoenix-info">Upload 8 min ago</span>
                            </div><button class="btn p-0 circle-icon-item-md position-absolute top-50 start-50 translate-middle bg-body-emphasis bg-opacity-50 z-5" data-bs-theme="light" data-video-controller="data-video-controller"><span class="play-icon pointer-events-none"><span class="fa-solid fa-play text-body-secondary fs-9" data-fa-transform="down-1"></span></span><span class="pause-icon pointer-events-none"><span class="fa-solid fa-pause text-body-secondary fs-9" data-fa-transform="down-1"></span></span></button>
                          </div>
                          <div class="bg-body p-3 pe-2 d-flex justify-content-between align-items-start rounded-bottom-3">
                            <div class="w-75"><a class="text-body-highlight fw-bold mb-2 stretched-link d-block text-truncate" href="{{ asset('assets/video/3.mp4') }}" data-gallery="recent-file" data-width="" data-height="">Cinematic Adventures.mp4</a>
                              <h6 class="mb-0 fw-semibold text-body-tertiary">54 mb</h6>
                            </div>
                            <div class="dropdown position-static z-5"><button class="btn btn-square-sm position-relative mt-n1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v" data-fa-transform="shrink-2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item fw-semibold text-decoration-none" href="#">Share</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Download</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Duplicate</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Move</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Rename</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Move to Bin</a>
                                <hr class="dropdown-divider"><a class="dropdown-item fw-semibold text-decoration-none text-danger" href="#">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="collapse" id="collapseRecentFiles">
                    <div class="mt-3">
                      <div class="row g-3">
                        <div class="col-sm-6 col-xl-6 col-xxl-3">
                          <div class="position-relative" data-play-on-container-hover="data-play-on-container-hover">
                            <div class="img-zoom-hover mask-image-none overflow-hidden border rounded-3">
                              <div class="position-relative">
                                <div class="mask-image-recent-file overflow-hidden">
                                  <div class="video-container rounded-3 h-100 ratio ratio-16x9"><video class="video d-block h-100 w-100 object-fit-cover" muted="muted" data-play-on-hover="data-play-on-hover" poster="{{ asset('assets/video/1.png') }}">
                                      <source src="{{ asset('assets/video/1.mp4') }}" type="video/mp4">
                                    </video></div><span class="badge badge-phoenix fs-10 position-absolute top-0 start-0 mt-3 ms-3 badge-phoenix-info">Upload 6 min ago</span>
                                </div><button class="btn p-0 circle-icon-item-md position-absolute top-50 start-50 translate-middle bg-body-emphasis bg-opacity-50 z-5" data-bs-theme="light" data-video-controller="data-video-controller"><span class="play-icon pointer-events-none"><span class="fa-solid fa-play text-body-secondary fs-9" data-fa-transform="down-1"></span></span><span class="pause-icon pointer-events-none"><span class="fa-solid fa-pause text-body-secondary fs-9" data-fa-transform="down-1"></span></span></button>
                              </div>
                              <div class="bg-body p-3 pe-2 d-flex justify-content-between align-items-start rounded-bottom-3">
                                <div class="w-75"><a class="text-body-highlight fw-bold mb-2 stretched-link d-block text-truncate" href="{{ asset('assets/video/1.mp4') }}" data-gallery="recent-file" data-width="" data-height="">Travel Tales.mp4</a>
                                  <h6 class="mb-0 fw-semibold text-body-tertiary">65 mb</h6>
                                </div>
                                <div class="dropdown position-static z-5"><button class="btn btn-square-sm position-relative mt-n1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v" data-fa-transform="shrink-2"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item fw-semibold text-decoration-none" href="#">Share</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Download</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Duplicate</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Move</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Rename</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Move to Bin</a>
                                    <hr class="dropdown-divider"><a class="dropdown-item fw-semibold text-decoration-none text-danger" href="#">Delete</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-xl-6 col-xxl-3">
                          <div class="position-relative">
                            <div class="img-zoom-hover mask-image-none overflow-hidden border rounded-3">
                              <div class="position-relative">
                                <div class="mask-image-recent-file overflow-hidden">
                                  <div class="ratio ratio-16x9"><img class="w-100 h-100 object-fit-cover" src="{{ asset('assets/img/file-manager/6.png') }}" alt=""></div><span class="badge badge-phoenix fs-10 position-absolute top-0 start-0 mt-3 ms-3 badge-phoenix-info">Upload 6 min ago</span>
                                </div>
                              </div>
                              <div class="bg-body p-3 pe-2 d-flex justify-content-between align-items-start rounded-bottom-3">
                                <div class="w-75"><a class="text-body-highlight fw-bold mb-2 stretched-link d-block text-truncate" href="{{ asset('assets/img/file-manager/6.png') }}" data-gallery="recent-file" data-width="" data-height="">Hot air balloons.png</a>
                                  <h6 class="mb-0 fw-semibold text-body-tertiary">5.8 mb</h6>
                                </div>
                                <div class="dropdown position-static z-5"><button class="btn btn-square-sm position-relative mt-n1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v" data-fa-transform="shrink-2"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item fw-semibold text-decoration-none" href="#">Share</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Download</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Duplicate</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Move</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Rename</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Move to Bin</a>
                                    <hr class="dropdown-divider"><a class="dropdown-item fw-semibold text-decoration-none text-danger" href="#">Delete</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-xl-6 col-xxl-3">
                          <div class="position-relative">
                            <div class="img-zoom-hover mask-image-none overflow-hidden border rounded-3">
                              <div class="position-relative">
                                <div class="mask-image-recent-file overflow-hidden">
                                  <div class="ratio ratio-16x9"><img class="w-100 h-100 object-fit-cover" src="{{ asset('assets/img/file-manager/7.png') }}" alt=""></div><span class="badge badge-phoenix fs-10 position-absolute top-0 start-0 mt-3 ms-3 badge-phoenix-warning">Edited 5 min ago</span>
                                </div>
                              </div>
                              <div class="bg-body p-3 pe-2 d-flex justify-content-between align-items-start rounded-bottom-3">
                                <div class="w-75"><a class="text-body-highlight fw-bold mb-2 stretched-link d-block text-truncate" href="{{ asset('assets/img/file-manager/7.png') }}" data-gallery="recent-file" data-width="" data-height="">Aurora Borealis.jpg</a>
                                  <h6 class="mb-0 fw-semibold text-body-tertiary">10 mb</h6>
                                </div>
                                <div class="dropdown position-static z-5"><button class="btn btn-square-sm position-relative mt-n1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v" data-fa-transform="shrink-2"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item fw-semibold text-decoration-none" href="#">Share</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Download</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Duplicate</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Move</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Rename</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Move to Bin</a>
                                    <hr class="dropdown-divider"><a class="dropdown-item fw-semibold text-decoration-none text-danger" href="#">Delete</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-xl-6 col-xxl-3">
                          <div class="position-relative" data-play-on-container-hover="data-play-on-container-hover">
                            <div class="img-zoom-hover mask-image-none overflow-hidden border rounded-3">
                              <div class="position-relative">
                                <div class="mask-image-recent-file overflow-hidden">
                                  <div class="video-container rounded-3 h-100 ratio ratio-16x9"><video class="video d-block h-100 w-100 object-fit-cover" muted="muted" data-play-on-hover="data-play-on-hover" poster="{{ asset('assets/video/4.png') }}">
                                      <source src="{{ asset('assets/video/4.mp4') }}" type="video/mp4">
                                    </video></div><span class="badge badge-phoenix fs-10 position-absolute top-0 start-0 mt-3 ms-3 badge-phoenix-info">Upload 8 min ago</span>
                                </div><button class="btn p-0 circle-icon-item-md position-absolute top-50 start-50 translate-middle bg-body-emphasis bg-opacity-50 z-5" data-bs-theme="light" data-video-controller="data-video-controller"><span class="play-icon pointer-events-none"><span class="fa-solid fa-play text-body-secondary fs-9" data-fa-transform="down-1"></span></span><span class="pause-icon pointer-events-none"><span class="fa-solid fa-pause text-body-secondary fs-9" data-fa-transform="down-1"></span></span></button>
                              </div>
                              <div class="bg-body p-3 pe-2 d-flex justify-content-between align-items-start rounded-bottom-3">
                                <div class="w-75"><a class="text-body-highlight fw-bold mb-2 stretched-link d-block text-truncate" href="{{ asset('assets/video/4.mp4') }}" data-gallery="recent-file" data-width="" data-height="">Cinematic Adventures.mp4</a>
                                  <h6 class="mb-0 fw-semibold text-body-tertiary">54 mb</h6>
                                </div>
                                <div class="dropdown position-static z-5"><button class="btn btn-square-sm position-relative mt-n1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v" data-fa-transform="shrink-2"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item fw-semibold text-decoration-none" href="#">Share</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Download</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Duplicate</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Move</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Rename</a><a class="dropdown-item fw-semibold text-decoration-none" href="#">Move to Bin</a>
                                    <hr class="dropdown-divider"><a class="dropdown-item fw-semibold text-decoration-none text-danger" href="#">Delete</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><a class="btn collapse-indicator bg-body-emphasis fs-10 py-1 border rounded-1 px-3 position-absolute start-50 translate-middle-x" style="bottom: -11px" data-bs-toggle="collapse" href="#collapseRecentFiles" role="button" aria-expanded="false" aria-controls="collapseRecentFiles"><span class="collapse-show">VIEW MORE</span><span class="collapse-hide">VIEW LESS</span><span class="fa-solid fa-chevron-down toggle-icon fs-10 ms-2"></span></a>
                </div>
              </div>
              <div class="card mt-5">
                <div class="card-header py-3 px-4">
                  <div class="row g-3 flex-between-center">
                    <div class="col-auto">
                      <h5 class="mb-0">My Files</h5>
                    </div>
                    <div class="col-auto d-flex"><a class="btn btn-phoenix-secondary btn-square me-2" href="{{ url('grid-view') }}" data-bs-toggle="tooltip" data-bs-title="Grid view"><span class="fa-solid fa-table-cells-large"></span></a><a class="border-primary text-primary btn btn-phoenix-secondary btn-square" href="{{ url('list-view') }}" data-bs-toggle="tooltip" data-bs-title="List view"><span class="fa-solid fa-list"></span></a><select class="form-select mx-2 mx-sm-3">
                        <option>Sort by - Date created</option>
                        <option>Sort by - Name</option>
                        <option>Sort by - Size</option>
                      </select>
                      <div class="form-check form-switch d-flex align-items-center"><input class="form-check-input" type="checkbox" role="switch" id="viewAsGroup" data-bs-toggle="tooltip" data-bs-title="View as group"></div>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-0">
                  <div class="myfiles-action-bar mx-n4 mb-4">
                    <h6 class="mb-0" id="file-manager-replace-element">Total 12 items</h6>
                    <div class="d-none" id="file-manager-actions">
                      <div class="d-flex align-items-center"><button class="btn p-0 text-body-secondary fs-8 me-2 me-sm-3" data-remove-bulk-check="data-remove-bulk-check"><span class="fa-solid fa-xmark" data-fa-transform="down-1"></span></button>
                        <h6 class="mb-0 me-4 text-nowrap" data-files-selected="data-files-selected">0 Item Selected</h6>
                        <div class="d-flex gap-1 gap-sm-2"><button class="btn btn-phoenix-secondary fs-10 btn-square-sm d-none d-sm-block" data-bs-toggle="tooltip" data-bs-title="Download"><span class="fa-solid fa-download"></span></button>
                          <button class="btn btn-phoenix-secondary fs-10 btn-square-sm d-none d-sm-block" data-bs-toggle="tooltip" data-bs-title="Delete"><span class="fa-solid fa-trash"></span></button>
                          <button class="btn btn-phoenix-secondary fs-10 btn-square-sm d-none d-sm-block" data-bs-toggle="tooltip" data-bs-title="Share"><span class="fa-solid fa-share-nodes"></span></button>
                          <div class="dropdown"><button class="btn btn-phoenix-secondary btn-square-sm" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis"></span></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item fw-semibold" href="#">Share</a><a class="dropdown-item fw-semibold" href="#">Download</a><a class="dropdown-item fw-semibold" href="#">Duplicate</a><a class="dropdown-item fw-semibold" href="#">Move</a><a class="dropdown-item fw-semibold" href="#">Rename</a><a class="dropdown-item fw-semibold" href="#">Move to Bin</a>
                              <hr class="dropdown-divider"><a class="dropdown-item fw-semibold text-danger" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><button class="btn btn-phoenix-secondary fs-10 btn-square-sm d-none d-xxl-block" data-toggle-file-details="data-toggle-file-details" data-bs-toggle="tooltip" data-bs-title="data-bs-title"><span class="fa-solid fa-info-circle"></span></button>
                    <button class="btn btn-phoenix-secondary fs-10 btn-square-sm d-xxl-none" data-toggle-file-details="data-toggle-file-details" data-bs-toggle="tooltip" data-bs-title="data-bs-title" data-phoenix-toggle="offcanvas" data-phoenix-target="#fileDetailsOffcanvas"><span class="fa-solid fa-info-circle"></span></button>
                  </div>
                  <div class="row gx-xxl-9" id="bulk-select-body">
                    <div class="col my-files-table">
                      <div class="table-responsive ms-n1 ps-1 me-n1 pe-1 scrollbar" data-files-container="data-files-container" data-list='{"valueNames":["name","shared","modified","file-size"]}'>
                        <table class="table fs-9 mb-0">
                          <thead>
                            <tr>
                              <th class="ps-0 pt-0 white-space-nowrap align-middle d-flex align-items-center" scope="col">
                                <div class="form-check mb-0 fs-8"><input class="form-check-input" id="bulk-select-file-manager" type="checkbox" data-bulk-select='{"body":"bulk-select-body","actions":"bulk-select-actions","replacedElement":"bulk-select-replace-element"}'></div><span class="sort ms-8" data-sort="name">NAME</span>
                              </th>
                              <th class="sort pt-0 align-middle" scope="col" data-sort="shared" style="min-width:150px;">SHARED</th>
                              <th class="sort pt-0 align-middle" scope="col" data-sort="modified" style="min-width:150px;">LAST MODIFIED</th>
                              <th class="sort pt-0 align-middle" scope="col" style="max-width:130px;" data-sort="file-size">FILE SIZE</th>
                              <th class="sort pt-0 text-end pe-0 align-middle" scope="col"></th>
                            </tr>
                          </thead>
                          <tbody class="list" id="table-latest-review-body">
                            <tr class="user-select-none">
                              <td class="align-middle white-space-nowrap py-0">
                                <div class="underline-on-hover d-flex align-items-center position-relative gap-3"><input class="form-check-input fs-8 mt-0" type="checkbox" id="1" data-bulk-select-row="data-bulk-select-row" data-file="1"><label class="square-icon-box border border-translucent overflow-hidden stretched-link" for="1" data-file="1"><span class="fa-solid fa-folder fs-9 text-body-tertiary"></span></label><a class="fw-semibold text-body-highlight name" href="#!">Illustrations</a></div>
                              </td>
                              <td class="align-middle shared white-space-nowrap ps-3">
                                <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
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
                                          <h6 class="text-white">Kristine Cadena</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
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
                                          <h6 class="text-white">Adrian</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
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
                                          <h6 class="text-white">Charles</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle avatar-placeholder" src="{{ asset('assets/img/team/avatar.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/avatar.webp') }}" alt=""></div>
                                          <h6 class="text-white">Jennifer Schramm</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/r.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/r.webp') }}" alt=""></div>
                                          <h6 class="text-white">Roy Anderson</h6>
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
                              </td>
                              <td class="align-middle modified time white-space-nowrap fw-semibold text-body-tertiary">2 hours ago</td>
                              <td class="align-middle file-size white-space-nowrap fw-semibold text-body-tertiary">20 Items</td>
                              <td class="align-middle text-end time white-space-nowrap">
                                <div class="btn-reveal-trigger"><button class="btn btn-sm btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-body-tertiary"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item fw-semibold" href="#">Share</a><a class="dropdown-item fw-semibold" href="#">Download</a><a class="dropdown-item fw-semibold" href="#">Duplicate</a><a class="dropdown-item fw-semibold" href="#">Move</a><a class="dropdown-item fw-semibold" href="#">Rename</a><a class="dropdown-item fw-semibold" href="#">Move to Bin</a>
                                    <hr class="dropdown-divider"><a class="dropdown-item fw-semibold text-danger" href="#">Delete</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr class="user-select-none">
                              <td class="align-middle white-space-nowrap py-0">
                                <div class="underline-on-hover d-flex align-items-center position-relative gap-3"><input class="form-check-input fs-8 mt-0" type="checkbox" id="2" data-bulk-select-row="data-bulk-select-row" data-file="2"><label class="square-icon-box border border-translucent overflow-hidden stretched-link" for="2" data-file="2" data-file-thumbnail="img/file-manager/9.png"><img class="w-100 h-100 pointer-events-none" src="{{ asset('assets/img/file-manager/9.png') }}" alt=""></label><a class="fw-semibold text-body-highlight name" href="#!">Retro Ring.jpg</a></div>
                              </td>
                              <td class="align-middle shared white-space-nowrap ps-3">
                                <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/10.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/10.webp') }}" alt=""></div>
                                          <h6 class="text-white">Raymond Mims</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/11.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/11.webp') }}" alt=""></div>
                                          <h6 class="text-white">Jonathan</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/12.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/12.webp') }}" alt=""></div>
                                          <h6 class="text-white">Jack</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/13.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/13.webp') }}" alt=""></div>
                                          <h6 class="text-white">Jessica</h6>
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
                              </td>
                              <td class="align-middle modified time white-space-nowrap fw-semibold text-body-tertiary">10 July, 2023</td>
                              <td class="align-middle file-size white-space-nowrap fw-semibold text-body-tertiary">980 KB</td>
                              <td class="align-middle text-end time white-space-nowrap">
                                <div class="btn-reveal-trigger"><button class="btn btn-sm btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-body-tertiary"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item fw-semibold" href="#">Share</a><a class="dropdown-item fw-semibold" href="#">Download</a><a class="dropdown-item fw-semibold" href="#">Duplicate</a><a class="dropdown-item fw-semibold" href="#">Move</a><a class="dropdown-item fw-semibold" href="#">Rename</a><a class="dropdown-item fw-semibold" href="#">Move to Bin</a>
                                    <hr class="dropdown-divider"><a class="dropdown-item fw-semibold text-danger" href="#">Delete</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr class="user-select-none">
                              <td class="align-middle white-space-nowrap py-0">
                                <div class="underline-on-hover d-flex align-items-center position-relative gap-3"><input class="form-check-input fs-8 mt-0" type="checkbox" id="3" data-bulk-select-row="data-bulk-select-row" data-file="3"><label class="square-icon-box border border-translucent overflow-hidden stretched-link" for="3" data-file="3"><span class="fa-solid fa-folder fs-9 text-info-light"></span></label><a class="fw-semibold text-body-highlight name" href="#!">Brand Identity</a></div>
                              </td>
                              <td class="align-middle shared white-space-nowrap ps-3">
                                <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/7.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/7.webp') }}" alt=""></div>
                                          <h6 class="text-white">Carl</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/21.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/21.webp') }}" alt=""></div>
                                          <h6 class="text-white">Robert Allan</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
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
                                          <h6 class="text-white">Charles</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
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
                                          <h6 class="text-white">Adrian</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/28.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/28.webp') }}" alt=""></div>
                                          <h6 class="text-white">Sarah Gill</h6>
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
                              </td>
                              <td class="align-middle modified time white-space-nowrap fw-semibold text-body-tertiary">2 hours ago</td>
                              <td class="align-middle file-size white-space-nowrap fw-semibold text-body-tertiary">16 Items</td>
                              <td class="align-middle text-end time white-space-nowrap">
                                <div class="btn-reveal-trigger"><button class="btn btn-sm btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-body-tertiary"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item fw-semibold" href="#">Share</a><a class="dropdown-item fw-semibold" href="#">Download</a><a class="dropdown-item fw-semibold" href="#">Duplicate</a><a class="dropdown-item fw-semibold" href="#">Move</a><a class="dropdown-item fw-semibold" href="#">Rename</a><a class="dropdown-item fw-semibold" href="#">Move to Bin</a>
                                    <hr class="dropdown-divider"><a class="dropdown-item fw-semibold text-danger" href="#">Delete</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr class="user-select-none">
                              <td class="align-middle white-space-nowrap py-0">
                                <div class="underline-on-hover d-flex align-items-center position-relative gap-3"><input class="form-check-input fs-8 mt-0" type="checkbox" id="4" data-bulk-select-row="data-bulk-select-row" data-file="4"><label class="square-icon-box border border-translucent overflow-hidden stretched-link" for="4" data-file="4" data-file-thumbnail="video/2.mp4"><img class="w-100 h-100 pointer-events-none" src="{{ asset('assets/video/2.png') }}" alt=""></label><a class="fw-semibold text-body-highlight name" href="#!">World in Motion.mp4</a></div>
                              </td>
                              <td class="align-middle shared white-space-nowrap ps-3">
                                <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/1.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/1.webp') }}" alt=""></div>
                                          <h6 class="text-white">William Grant</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
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
                                          <h6 class="text-white">Kristine Cadena</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
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
                                          <h6 class="text-white">Charles</h6>
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
                              </td>
                              <td class="align-middle modified time white-space-nowrap fw-semibold text-body-tertiary">15 July, 2023</td>
                              <td class="align-middle file-size white-space-nowrap fw-semibold text-body-tertiary">18 MB</td>
                              <td class="align-middle text-end time white-space-nowrap">
                                <div class="btn-reveal-trigger"><button class="btn btn-sm btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-body-tertiary"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item fw-semibold" href="#">Share</a><a class="dropdown-item fw-semibold" href="#">Download</a><a class="dropdown-item fw-semibold" href="#">Duplicate</a><a class="dropdown-item fw-semibold" href="#">Move</a><a class="dropdown-item fw-semibold" href="#">Rename</a><a class="dropdown-item fw-semibold" href="#">Move to Bin</a>
                                    <hr class="dropdown-divider"><a class="dropdown-item fw-semibold text-danger" href="#">Delete</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr class="user-select-none">
                              <td class="align-middle white-space-nowrap py-0">
                                <div class="underline-on-hover d-flex align-items-center position-relative gap-3"><input class="form-check-input fs-8 mt-0" type="checkbox" id="5" data-bulk-select-row="data-bulk-select-row" data-file="5"><label class="square-icon-box border border-translucent overflow-hidden stretched-link" for="5" data-file="5"><span class="fa-solid fa-folder fs-9 text-body-tertiary"></span></label><a class="fw-semibold text-body-highlight name" href="#!">UI Design</a></div>
                              </td>
                              <td class="align-middle shared white-space-nowrap ps-3">
                                <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
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
                                          <h6 class="text-white">Luke Davies</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/6.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/6.webp') }}" alt=""></div>
                                          <h6 class="text-white">Sophie Grant</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/12.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/12.webp') }}" alt=""></div>
                                          <h6 class="text-white">Jack</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/23.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/23.webp') }}" alt=""></div>
                                          <h6 class="text-white">William Ellison</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle avatar-placeholder" src="{{ asset('assets/img/team/avatar.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/avatar.webp') }}" alt=""></div>
                                          <h6 class="text-white">Jennifer Schramm</h6>
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
                              </td>
                              <td class="align-middle modified time white-space-nowrap fw-semibold text-body-tertiary">20 September, 2023</td>
                              <td class="align-middle file-size white-space-nowrap fw-semibold text-body-tertiary">10 Items</td>
                              <td class="align-middle text-end time white-space-nowrap">
                                <div class="btn-reveal-trigger"><button class="btn btn-sm btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-body-tertiary"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item fw-semibold" href="#">Share</a><a class="dropdown-item fw-semibold" href="#">Download</a><a class="dropdown-item fw-semibold" href="#">Duplicate</a><a class="dropdown-item fw-semibold" href="#">Move</a><a class="dropdown-item fw-semibold" href="#">Rename</a><a class="dropdown-item fw-semibold" href="#">Move to Bin</a>
                                    <hr class="dropdown-divider"><a class="dropdown-item fw-semibold text-danger" href="#">Delete</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr class="user-select-none">
                              <td class="align-middle white-space-nowrap py-0">
                                <div class="underline-on-hover d-flex align-items-center position-relative gap-3"><input class="form-check-input fs-8 mt-0" type="checkbox" id="6" data-bulk-select-row="data-bulk-select-row" data-file="6"><label class="square-icon-box border border-translucent overflow-hidden stretched-link" for="6" data-file="6" data-file-thumbnail="img/file-manager/11.png"><img class="w-100 h-100 pointer-events-none" src="{{ asset('assets/img/file-manager/11.png') }}" alt=""></label><a class="fw-semibold text-body-highlight name" href="#!">Classic Clicks.png</a></div>
                              </td>
                              <td class="align-middle shared white-space-nowrap ps-3">
                                <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/1.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/1.webp') }}" alt=""></div>
                                          <h6 class="text-white">William Grant</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
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
                                          <h6 class="text-white">Kristine Cadena</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
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
                                          <h6 class="text-white">Charles</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle avatar-placeholder" src="{{ asset('assets/img/team/avatar.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/avatar.webp') }}" alt=""></div>
                                          <h6 class="text-white">Jennifer Schramm</h6>
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
                                  <div class="avatar avatar-s  rounded-circle">
                                    <div class="avatar-name rounded-circle "><span>+2</span></div>
                                  </div>
                                </div>
                              </td>
                              <td class="align-middle modified time white-space-nowrap fw-semibold text-body-tertiary">2 hours ago</td>
                              <td class="align-middle file-size white-space-nowrap fw-semibold text-body-tertiary">564 KB</td>
                              <td class="align-middle text-end time white-space-nowrap">
                                <div class="btn-reveal-trigger"><button class="btn btn-sm btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-body-tertiary"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item fw-semibold" href="#">Share</a><a class="dropdown-item fw-semibold" href="#">Download</a><a class="dropdown-item fw-semibold" href="#">Duplicate</a><a class="dropdown-item fw-semibold" href="#">Move</a><a class="dropdown-item fw-semibold" href="#">Rename</a><a class="dropdown-item fw-semibold" href="#">Move to Bin</a>
                                    <hr class="dropdown-divider"><a class="dropdown-item fw-semibold text-danger" href="#">Delete</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr class="user-select-none">
                              <td class="align-middle white-space-nowrap py-0">
                                <div class="underline-on-hover d-flex align-items-center position-relative gap-3"><input class="form-check-input fs-8 mt-0" type="checkbox" id="7" data-bulk-select-row="data-bulk-select-row" data-file="7"><label class="square-icon-box border border-translucent overflow-hidden stretched-link" for="7" data-file="7"><span class="fa-solid fa-folder fs-9 text-body-tertiary"></span></label><a class="fw-semibold text-body-highlight name" href="#!">Source Code</a></div>
                              </td>
                              <td class="align-middle shared white-space-nowrap ps-3">
                                <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/21.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/21.webp') }}" alt=""></div>
                                          <h6 class="text-white">Robert Allan</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/27.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/27.webp') }}" alt=""></div>
                                          <h6 class="text-white">Molly William</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/28.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/28.webp') }}" alt=""></div>
                                          <h6 class="text-white">Sarah Gill</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle avatar-placeholder" src="{{ asset('assets/img/team/avatar.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/avatar.webp') }}" alt=""></div>
                                          <h6 class="text-white">Jennifer Schramm</h6>
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
                              </td>
                              <td class="align-middle modified time white-space-nowrap fw-semibold text-body-tertiary">21 September, 2023</td>
                              <td class="align-middle file-size white-space-nowrap fw-semibold text-body-tertiary">21 Items</td>
                              <td class="align-middle text-end time white-space-nowrap">
                                <div class="btn-reveal-trigger"><button class="btn btn-sm btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-body-tertiary"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item fw-semibold" href="#">Share</a><a class="dropdown-item fw-semibold" href="#">Download</a><a class="dropdown-item fw-semibold" href="#">Duplicate</a><a class="dropdown-item fw-semibold" href="#">Move</a><a class="dropdown-item fw-semibold" href="#">Rename</a><a class="dropdown-item fw-semibold" href="#">Move to Bin</a>
                                    <hr class="dropdown-divider"><a class="dropdown-item fw-semibold text-danger" href="#">Delete</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr class="user-select-none">
                              <td class="align-middle white-space-nowrap py-0">
                                <div class="underline-on-hover d-flex align-items-center position-relative gap-3"><input class="form-check-input fs-8 mt-0" type="checkbox" id="8" data-bulk-select-row="data-bulk-select-row" data-file="8"><label class="square-icon-box border border-translucent overflow-hidden stretched-link" for="8" data-file="8"><span class="fa-solid fa-folder fs-9 text-body-tertiary"></span></label><a class="fw-semibold text-body-highlight name" href="#!">Code Backup</a></div>
                              </td>
                              <td class="align-middle shared white-space-nowrap ps-3">
                                <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/18.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/18.webp') }}" alt=""></div>
                                          <h6 class="text-white">Rose Berry</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/22.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/22.webp') }}" alt=""></div>
                                          <h6 class="text-white">Tim Anderson</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/23.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/23.webp') }}" alt=""></div>
                                          <h6 class="text-white">William Ellison</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/34.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/34.webp') }}" alt=""></div>
                                          <h6 class="text-white">Jean Renoir</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/35.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/35.webp') }}" alt=""></div>
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
                              </td>
                              <td class="align-middle modified time white-space-nowrap fw-semibold text-body-tertiary">21 September, 2023</td>
                              <td class="align-middle file-size white-space-nowrap fw-semibold text-body-tertiary">19 Items</td>
                              <td class="align-middle text-end time white-space-nowrap">
                                <div class="btn-reveal-trigger"><button class="btn btn-sm btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-body-tertiary"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item fw-semibold" href="#">Share</a><a class="dropdown-item fw-semibold" href="#">Download</a><a class="dropdown-item fw-semibold" href="#">Duplicate</a><a class="dropdown-item fw-semibold" href="#">Move</a><a class="dropdown-item fw-semibold" href="#">Rename</a><a class="dropdown-item fw-semibold" href="#">Move to Bin</a>
                                    <hr class="dropdown-divider"><a class="dropdown-item fw-semibold text-danger" href="#">Delete</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr class="user-select-none">
                              <td class="align-middle white-space-nowrap py-0">
                                <div class="underline-on-hover d-flex align-items-center position-relative gap-3"><input class="form-check-input fs-8 mt-0" type="checkbox" id="9" data-bulk-select-row="data-bulk-select-row" data-file="9"><label class="square-icon-box border border-translucent overflow-hidden stretched-link" for="9" data-file="9"><span class="fa-solid fa-file-excel fs-9 text-body-tertiary"></span></label><a class="fw-semibold text-body-highlight name" href="#!">Trip List.xls</a></div>
                              </td>
                              <td class="align-middle shared white-space-nowrap ps-3">
                                <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/24.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/24.webp') }}" alt=""></div>
                                          <h6 class="text-white">Warren</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/23.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/23.webp') }}" alt=""></div>
                                          <h6 class="text-white">William Ellison</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
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
                                          <h6 class="text-white">Charles</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle avatar-placeholder" src="{{ asset('assets/img/team/avatar.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/avatar.webp') }}" alt=""></div>
                                          <h6 class="text-white">Jennifer Schramm</h6>
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
                                  <div class="avatar avatar-s  rounded-circle">
                                    <div class="avatar-name rounded-circle "><span>+3</span></div>
                                  </div>
                                </div>
                              </td>
                              <td class="align-middle modified time white-space-nowrap fw-semibold text-body-tertiary">2 hours ago</td>
                              <td class="align-middle file-size white-space-nowrap fw-semibold text-body-tertiary">553 KB</td>
                              <td class="align-middle text-end time white-space-nowrap">
                                <div class="btn-reveal-trigger"><button class="btn btn-sm btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-body-tertiary"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item fw-semibold" href="#">Share</a><a class="dropdown-item fw-semibold" href="#">Download</a><a class="dropdown-item fw-semibold" href="#">Duplicate</a><a class="dropdown-item fw-semibold" href="#">Move</a><a class="dropdown-item fw-semibold" href="#">Rename</a><a class="dropdown-item fw-semibold" href="#">Move to Bin</a>
                                    <hr class="dropdown-divider"><a class="dropdown-item fw-semibold text-danger" href="#">Delete</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr class="user-select-none">
                              <td class="align-middle white-space-nowrap py-0">
                                <div class="underline-on-hover d-flex align-items-center position-relative gap-3"><input class="form-check-input fs-8 mt-0" type="checkbox" id="10" data-bulk-select-row="data-bulk-select-row" data-file="10"><label class="square-icon-box border border-translucent overflow-hidden stretched-link" for="10" data-file="10"><span class="fa-solid fa-file-zipper fs-9 text-body-tertiary"></span></label><a class="fw-semibold text-body-highlight name" href="#!">Archive.zip</a></div>
                              </td>
                              <td class="align-middle shared white-space-nowrap ps-3">
                                <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/16.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/16.webp') }}" alt=""></div>
                                          <h6 class="text-white">Nicola Allan</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/19.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/19.webp') }}" alt=""></div>
                                          <h6 class="text-white">Ansolo Lazinatov</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
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
                                          <h6 class="text-white">Charles</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle avatar-placeholder" src="{{ asset('assets/img/team/avatar.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/avatar.webp') }}" alt=""></div>
                                          <h6 class="text-white">Jennifer Schramm</h6>
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
                                  <div class="avatar avatar-s  rounded-circle">
                                    <div class="avatar-name rounded-circle "><span>+8</span></div>
                                  </div>
                                </div>
                              </td>
                              <td class="align-middle modified time white-space-nowrap fw-semibold text-body-tertiary">10 July, 2023</td>
                              <td class="align-middle file-size white-space-nowrap fw-semibold text-body-tertiary">12 MB</td>
                              <td class="align-middle text-end time white-space-nowrap">
                                <div class="btn-reveal-trigger"><button class="btn btn-sm btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-body-tertiary"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item fw-semibold" href="#">Share</a><a class="dropdown-item fw-semibold" href="#">Download</a><a class="dropdown-item fw-semibold" href="#">Duplicate</a><a class="dropdown-item fw-semibold" href="#">Move</a><a class="dropdown-item fw-semibold" href="#">Rename</a><a class="dropdown-item fw-semibold" href="#">Move to Bin</a>
                                    <hr class="dropdown-divider"><a class="dropdown-item fw-semibold text-danger" href="#">Delete</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr class="user-select-none">
                              <td class="align-middle white-space-nowrap py-0">
                                <div class="underline-on-hover d-flex align-items-center position-relative gap-3"><input class="form-check-input fs-8 mt-0" type="checkbox" id="11" data-bulk-select-row="data-bulk-select-row" data-file="11"><label class="square-icon-box border border-translucent overflow-hidden stretched-link" for="11" data-file="11" data-file-thumbnail="img/file-manager/12.png"><img class="w-100 h-100 pointer-events-none" src="{{ asset('assets/img/file-manager/12.png') }}" alt=""></label><a class="fw-semibold text-body-highlight name" href="#!">Worldly Wonders.jpg</a></div>
                              </td>
                              <td class="align-middle shared white-space-nowrap ps-3">
                                <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/1.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/1.webp') }}" alt=""></div>
                                          <h6 class="text-white">William Grant</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
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
                                          <h6 class="text-white">Kristine Cadena</h6>
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
                              </td>
                              <td class="align-middle modified time white-space-nowrap fw-semibold text-body-tertiary">10 September, 2023</td>
                              <td class="align-middle file-size white-space-nowrap fw-semibold text-body-tertiary">990 KB</td>
                              <td class="align-middle text-end time white-space-nowrap">
                                <div class="btn-reveal-trigger"><button class="btn btn-sm btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-body-tertiary"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item fw-semibold" href="#">Share</a><a class="dropdown-item fw-semibold" href="#">Download</a><a class="dropdown-item fw-semibold" href="#">Duplicate</a><a class="dropdown-item fw-semibold" href="#">Move</a><a class="dropdown-item fw-semibold" href="#">Rename</a><a class="dropdown-item fw-semibold" href="#">Move to Bin</a>
                                    <hr class="dropdown-divider"><a class="dropdown-item fw-semibold text-danger" href="#">Delete</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr class="user-select-none">
                              <td class="align-middle white-space-nowrap py-0">
                                <div class="underline-on-hover d-flex align-items-center position-relative gap-3"><input class="form-check-input fs-8 mt-0" type="checkbox" id="12" data-bulk-select-row="data-bulk-select-row" data-file="12"><label class="square-icon-box border border-translucent overflow-hidden stretched-link" for="12" data-file="12"><span class="fa-solid fa-file-csv fs-9 text-body-tertiary"></span></label><a class="fw-semibold text-body-highlight name" href="#!">Phoenix Logs.csv</a></div>
                              </td>
                              <td class="align-middle shared white-space-nowrap ps-3">
                                <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/1.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/1.webp') }}" alt=""></div>
                                          <h6 class="text-white">William Grant</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
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
                                          <h6 class="text-white">Kristine Cadena</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
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
                                          <h6 class="text-white">Charles</h6>
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
                              </td>
                              <td class="align-middle modified time white-space-nowrap fw-semibold text-body-tertiary">2 hours ago</td>
                              <td class="align-middle file-size white-space-nowrap fw-semibold text-body-tertiary">546 KB</td>
                              <td class="align-middle text-end time white-space-nowrap">
                                <div class="btn-reveal-trigger"><button class="btn btn-sm btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-body-tertiary"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item fw-semibold" href="#">Share</a><a class="dropdown-item fw-semibold" href="#">Download</a><a class="dropdown-item fw-semibold" href="#">Duplicate</a><a class="dropdown-item fw-semibold" href="#">Move</a><a class="dropdown-item fw-semibold" href="#">Rename</a><a class="dropdown-item fw-semibold" href="#">Move to Bin</a>
                                    <hr class="dropdown-divider"><a class="dropdown-item fw-semibold text-danger" href="#">Delete</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr class="user-select-none">
                              <td class="align-middle white-space-nowrap py-0">
                                <div class="underline-on-hover d-flex align-items-center position-relative gap-3"><input class="form-check-input fs-8 mt-0" type="checkbox" id="13" data-bulk-select-row="data-bulk-select-row" data-file="13"><label class="square-icon-box border border-translucent overflow-hidden stretched-link" for="13" data-file="13"><span class="fa-solid fa-file-invoice fs-9 text-body-tertiary"></span></label><a class="fw-semibold text-body-highlight name" href="#!">Notes.xlx</a></div>
                              </td>
                              <td class="align-middle shared white-space-nowrap ps-3">
                                <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/9.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/9.webp') }}" alt=""></div>
                                          <h6 class="text-white">Michael Jenkins</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
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
                                          <h6 class="text-white">Ansolo Lazinatov</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/32.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/32.webp') }}" alt=""></div>
                                          <h6 class="text-white">Jennifer Schramm</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle avatar-placeholder" src="{{ asset('assets/img/team/avatar.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/avatar.webp') }}" alt=""></div>
                                          <h6 class="text-white">Kristine Cadena</h6>
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
                              </td>
                              <td class="align-middle modified time white-space-nowrap fw-semibold text-body-tertiary">2 hours ago</td>
                              <td class="align-middle file-size white-space-nowrap fw-semibold text-body-tertiary">698 KB</td>
                              <td class="align-middle text-end time white-space-nowrap">
                                <div class="btn-reveal-trigger"><button class="btn btn-sm btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-body-tertiary"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item fw-semibold" href="#">Share</a><a class="dropdown-item fw-semibold" href="#">Download</a><a class="dropdown-item fw-semibold" href="#">Duplicate</a><a class="dropdown-item fw-semibold" href="#">Move</a><a class="dropdown-item fw-semibold" href="#">Rename</a><a class="dropdown-item fw-semibold" href="#">Move to Bin</a>
                                    <hr class="dropdown-divider"><a class="dropdown-item fw-semibold text-danger" href="#">Delete</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr class="user-select-none">
                              <td class="align-middle white-space-nowrap py-0">
                                <div class="underline-on-hover d-flex align-items-center position-relative gap-3"><input class="form-check-input fs-8 mt-0" type="checkbox" id="14" data-bulk-select-row="data-bulk-select-row" data-file="14"><label class="square-icon-box border border-translucent overflow-hidden stretched-link" for="14" data-file="14" data-file-thumbnail="video/3.mp4"><img class="w-100 h-100 pointer-events-none" src="{{ asset('assets/video/3.png') }}" alt=""></label><a class="fw-semibold text-body-highlight name" href="#!">Moving Escapes.mp4</a></div>
                              </td>
                              <td class="align-middle shared white-space-nowrap ps-3">
                                <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/9.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/9.webp') }}" alt=""></div>
                                          <h6 class="text-white">Michael Jenkins</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
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
                                          <h6 class="text-white">Ansolo Lazinatov</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/32.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/32.webp') }}" alt=""></div>
                                          <h6 class="text-white">Jennifer Schramm</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle avatar-placeholder" src="{{ asset('assets/img/team/avatar.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/avatar.webp') }}" alt=""></div>
                                          <h6 class="text-white">Kristine Cadena</h6>
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
                              </td>
                              <td class="align-middle modified time white-space-nowrap fw-semibold text-body-tertiary">4 hours ago</td>
                              <td class="align-middle file-size white-space-nowrap fw-semibold text-body-tertiary">12 MB</td>
                              <td class="align-middle text-end time white-space-nowrap">
                                <div class="btn-reveal-trigger"><button class="btn btn-sm btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-body-tertiary"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item fw-semibold" href="#">Share</a><a class="dropdown-item fw-semibold" href="#">Download</a><a class="dropdown-item fw-semibold" href="#">Duplicate</a><a class="dropdown-item fw-semibold" href="#">Move</a><a class="dropdown-item fw-semibold" href="#">Rename</a><a class="dropdown-item fw-semibold" href="#">Move to Bin</a>
                                    <hr class="dropdown-divider"><a class="dropdown-item fw-semibold text-danger" href="#">Delete</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr class="user-select-none">
                              <td class="align-middle white-space-nowrap py-0">
                                <div class="underline-on-hover d-flex align-items-center position-relative gap-3"><input class="form-check-input fs-8 mt-0" type="checkbox" id="15" data-bulk-select-row="data-bulk-select-row" data-file="15"><label class="square-icon-box border border-translucent overflow-hidden stretched-link" for="15" data-file="15"><span class="fa-solid fa-file-pdf fs-9 text-body-tertiary"></span></label><a class="fw-semibold text-body-highlight name" href="#!">API Documentation.pdf</a></div>
                              </td>
                              <td class="align-middle shared white-space-nowrap ps-3">
                                <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/10.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/10.webp') }}" alt=""></div>
                                          <h6 class="text-white">Michael Jenkins</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/26.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/26.webp') }}" alt=""></div>
                                          <h6 class="text-white">Ansolo Lazinatov</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/21.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/21.webp') }}" alt=""></div>
                                          <h6 class="text-white">Jennifer Schramm</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/12.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/12.webp') }}" alt=""></div>
                                          <h6 class="text-white">Kristine Cadena</h6>
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
                              </td>
                              <td class="align-middle modified time white-space-nowrap fw-semibold text-body-tertiary">10 July, 2023</td>
                              <td class="align-middle file-size white-space-nowrap fw-semibold text-body-tertiary">4 MB</td>
                              <td class="align-middle text-end time white-space-nowrap">
                                <div class="btn-reveal-trigger"><button class="btn btn-sm btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-body-tertiary"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item fw-semibold" href="#">Share</a><a class="dropdown-item fw-semibold" href="#">Download</a><a class="dropdown-item fw-semibold" href="#">Duplicate</a><a class="dropdown-item fw-semibold" href="#">Move</a><a class="dropdown-item fw-semibold" href="#">Rename</a><a class="dropdown-item fw-semibold" href="#">Move to Bin</a>
                                    <hr class="dropdown-divider"><a class="dropdown-item fw-semibold text-danger" href="#">Delete</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr class="user-select-none">
                              <td class="align-middle white-space-nowrap py-0 border-bottom-0">
                                <div class="underline-on-hover d-flex align-items-center position-relative gap-3"><input class="form-check-input fs-8 mt-0" type="checkbox" id="16" data-bulk-select-row="data-bulk-select-row" data-file="16"><label class="square-icon-box border border-translucent overflow-hidden stretched-link" for="16" data-file="16" data-file-thumbnail="img/file-manager/13.png"><img class="w-100 h-100 pointer-events-none" src="{{ asset('assets/img/file-manager/13.png') }}" alt=""></label><a class="fw-semibold text-body-highlight name" href="#!">Vintage Car.jpg</a></div>
                              </td>
                              <td class="align-middle shared white-space-nowrap ps-3 border-bottom-0">
                                <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/10.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/10.webp') }}" alt=""></div>
                                          <h6 class="text-white">Michael Jenkins</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/26.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/26.webp') }}" alt=""></div>
                                          <h6 class="text-white">Ansolo Lazinatov</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/21.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/21.webp') }}" alt=""></div>
                                          <h6 class="text-white">Jennifer Schramm</h6>
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
                                    <div class="avatar avatar-s  rounded-circle border border-light-subtle">
                                      <img class="rounded-circle " src="{{ asset('assets/img/team/12.webp') }}" alt="">
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
                                          <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="{{ asset('assets/img/team/12.webp') }}" alt=""></div>
                                          <h6 class="text-white">Kristine Cadena</h6>
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
                              </td>
                              <td class="align-middle modified time white-space-nowrap fw-semibold text-body-tertiary border-bottom-0">15 July, 2023</td>
                              <td class="align-middle file-size white-space-nowrap fw-semibold text-body-tertiary border-bottom-0">980 KB</td>
                              <td class="align-middle text-end time white-space-nowrap border-bottom-0">
                                <div class="btn-reveal-trigger"><button class="btn btn-sm btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-body-tertiary"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item fw-semibold" href="#">Share</a><a class="dropdown-item fw-semibold" href="#">Download</a><a class="dropdown-item fw-semibold" href="#">Duplicate</a><a class="dropdown-item fw-semibold" href="#">Move</a><a class="dropdown-item fw-semibold" href="#">Rename</a><a class="dropdown-item fw-semibold" href="#">Move to Bin</a>
                                    <hr class="dropdown-divider"><a class="dropdown-item fw-semibold text-danger" href="#">Delete</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="col-auto px-0 px-xxl-5 border-start-xxl border-translucent" data-details-container="data-details-container">
                      <div class="phoenix-offcanvas file-details-offcanvas scrollbar overflow-x-hidden bg-body-emphasis" id="fileDetailsOffcanvas" data-breakpoint="xxl"><button class="btn p-0 fs-8 d-xxl-none position-absolute top-0 end-0 mt-4 me-4" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-xmark"></span></button>
                        <div data-file-details="data-file-details">
                          <div class="text-center px-4"><img class="d-dark-none img-fluid" src="{{ asset('assets/img/spot-illustrations/46.png') }}" alt=""><img class="d-light-none img-fluid" src="{{ asset('assets/img/spot-illustrations/dark_46.png') }}" alt="">
                            <h5 class="mt-4">Select an item to view more information</h5>
                          </div>
                        </div>
                      </div>
                      <div class="phoenix-offcanvas-backdrop d-xxl-none" data-phoenix-backdrop="data-phoenix-backdrop"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    <div class="modal fade" id="fileFilterModal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border border-translucent">
          <form id="fileFilterForm" autocomplete="off">
            <div class="modal-header p-4 pb-0 border-0 flex-between-center">
              <h4 class="modal-title">Filter</h4><button class="btn p-1 text-danger" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs-9"> 				</span></button>
            </div>
            <div class="modal-body p-4">
              <div class="mb-3"><label class="fw-bold mb-2 text-body-highlight" for="type">Type</label><select class="form-select" id="type">
                  <option>Select</option>
                  <option value="documents">Documents</option>
                  <option value="images">Images </option>
                  <option value="videos">Videos</option>
                  <option value="audios">Audios</option>
                </select></div>
              <div class="mb-3"><label class="fw-bold mb-2 text-body-highlight" for="people">People</label><select class="form-select" id="people">
                  <option>Select</option>
                  <option value="1">Robert Allan</option>
                  <option value="2">Charles</option>
                  <option value="3">Adrian</option>
                </select></div>
              <div class="mb-3"><label class="fw-bold mb-2 text-body-highlight" for="modified">Modified</label><select class="form-select" id="modified">
                  <option>Select</option>
                  <option value="today">Today</option>
                  <option value="last7Days">Last 7 Days</option>
                  <option value="last157Days">Last 15 Days</option>
                  <option value="last30Days">Last 30 Days</option>
                  <option value="chooseATimePeriod">Choose a time period</option>
                </select></div>
              <div><label class="fw-bold mb-2 text-body-highlight" for="location">Location</label><select class="form-select" id="location">
                  <option>Select</option>
                  <option value="1">Anywhere is drive</option>
                  <option value="2">My Drive</option>
                  <option value="3">Shared with me</option>
                  <option value="4">Starred</option>
                  <option value="5">Trashed</option>
                </select></div>
            </div>
            <div class="modal-footer d-flex justify-content-end align-items-center p-4 pt-0 border-0"><button class="btn btn-link text-body-secondary px-3 mx-0" type="button"> <span class="fas fa-arrows-rotate me-2"></span>Reset</button>
              <button class="btn btn-sm btn-primary px-5 mx-0" type="submit">Apply</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="addFolderModal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border border-translucent">
          <form id="addFolderForm" autocomplete="off">
            <div class="modal-header p-4 pb-0 border-0 flex-between-center">
              <h4 class="modal-title">Add new folder</h4>
            </div>
            <div class="modal-body p-4"><input class="form-control" placeholder="Folder name" id="addFolder" type="text"></div>
            <div class="modal-footer d-flex justify-content-end align-items-center p-4 pt-0 border-0"><button class="btn btn-link text-danger px-3 mx-0" type="button" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
              <button class="btn btn-sm btn-primary px-5 mx-0" type="submit">Apply</button>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/glightbox/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/file-manager.js') }}"></script>
@endpush
