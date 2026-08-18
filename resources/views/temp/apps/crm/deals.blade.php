@extends('layouts.vertical')

@section('title', 'Deals')

@push('styles')
    <link href="{{ asset('vendors/choices/choices.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
@endpush

@section('content')
    <nav class="mb-3 crm-deals-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
            <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
            <li class="breadcrumb-item active">Default</li>
        </ol>
    </nav>
    <div>
        <div class="px-4 px-lg-6">
            <h2 class="mb-5">Deals</h2>
            <div class="d-xl-flex justify-content-between">
                <div class="mb-3"><button class="btn btn-primary me-4" type="button" data-bs-toggle="modal"
                        data-bs-target="#addDealModal" aria-haspopup="true" aria-expanded="false"
                        data-bs-reference="parent"><span class="fas fa-plus me-2"></span>Add Deal</button>
                    <button class="btn btn-link text-body px-0"><span
                            class="fa-solid fa-file-export fs-9 me-2"></span>Export</button>
                </div>
                <div class="d-flex mb-4">
                    <div class="search-box">
                        <form class="position-relative"><input class="form-control search-input search" type="search"
                                placeholder="Search by name" aria-label="Search">
                            <span class="fas fa-search search-box-icon"></span>
                        </form>
                    </div><select class="form-select w-auto mx-2" id="select-deals">
                        <option>Deals</option>
                    </select><button class="btn px-3 btn-phoenix-secondary" type="button" data-bs-toggle="modal"
                        data-bs-target="#reportsFilterModal" aria-haspopup="true" aria-expanded="false"
                        data-bs-reference="parent"><span class="fa-solid fa-filter text-primary"
                            data-fa-transform="down-3"></span></button>
                </div>
            </div>
        </div>
        <div class="px-4 px-lg-6 scrollbar">
            <div class="deals">
                <div class="deals-col me-4">
                    <div class="d-flex align-items-center justify-content-between position-sticky top-0 z-1 bg-body">
                        <div>
                            <h5 class="mb-2">New</h5>
                            <p class="fs-9 text-body-tertiary mb-1">Forecast Revenue:</p>
                            <h4 class="mb-3">$37,000.00</h4>
                        </div>
                        <div class="d-flex gap-3"><button class="btn p-0" type="button" data-bs-toggle="modal"
                                data-bs-target="#addDealModal" aria-haspopup="true" aria-expanded="false"
                                data-bs-reference="parent"><span class="fa-solid fa-plus"></span></button>
                            <button class="btn p-0" type="button" data-bs-toggle="dropdown" data-boundary="window"
                                aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span
                                    class="fas fa-ellipsis-h fs-10"></span></button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                <li><a class="dropdown-item" href="#">Add meeting</a></li>
                                <li><a class="dropdown-item" href="#">See all connected contacts</a></li>
                                <li><a class="dropdown-item" href="#">Clone</a></li>
                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                <li><a class="dropdown-item" href="#">Display only bad deals</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="scrollbar deals-items-container">
                        <div class="w-100 min-vh-50" data-sortable="data-sortable">
                            <div>
                                <div class="card mb-3">
                                    <div class="card-body"><a
                                            class="dropdown-indicator-icon position-absolute text-body-tertiary"
                                            href="#collapseWidthDeals-1" role="button" data-bs-toggle="collapse"
                                            aria-expanded="false" aria-controls="collapseWidthDeals-1"><span
                                                class="fa-solid fa-angle-down"></span></a>
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <div class="d-flex"><span class="me-2" data-feather="clock"
                                                    style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 30, 2022<span
                                                        class="text-body-quaternary"> . 2:15 PM</span></p>
                                            </div>
                                        </div>
                                        <div class="deals-items-head d-flex align-items-center mb-2"><a
                                                class="text-primary fw-bold line-clamp-1 me-3 mb-0 fs-7"
                                                href="{{ url('deal-details') }}">Jo_Td01</a>
                                            <p class="deals-category fs-10 mb-0 mt-1 d-none"><span
                                                    class="me-1 text-body-quaternary" data-feather="grid"
                                                    style="stroke-width:2; height: 12px; width: 12px"></span>Financial</p>
                                            <p class="ms-auto fs-9 text-body-emphasis fw-semibold mb-0 deals-revenue">
                                                $14,000.00</p>
                                        </div>
                                        <div class="deals-company-agent d-flex flex-between-center">
                                            <div class="d-flex align-items-center"><span class="uil uil-user me-2"></span>
                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Knitkake.inc</p>
                                            </div>
                                            <div class="d-flex align-items-center"><span
                                                    class="uil uil-headphones me-2"></span>
                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Ally Aagaard</p>
                                            </div>
                                        </div>
                                        <div class="collapse" id="collapseWidthDeals-1">
                                            <div class="d-flex gap-2 mb-5"><span
                                                    class="badge badge-phoenix badge-phoenix-info">new</span><span
                                                    class="badge badge-phoenix badge-phoenix-danger">Urgent</span></div>
                                            <table class="mb-4 w-100 table-stats table-stats">
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary"
                                                                data-feather="dollar-sign"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Expected
                                                                Revenue</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                            $14,000.00</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="user"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Company
                                                                Name</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis d-flex align-items-center gap-2">
                                                            Knitkake.inc<a href="#!"> <span
                                                                    class="fa-solid fa-square-phone text-body-tertiary"></span></a><a
                                                                href="#!"> <span
                                                                    class="fa-solid fa-square-envelope text-body-tertiary"></span></a><a
                                                                href="#!"> <span
                                                                    class="fab fa-whatsapp-square text-body-tertiary"></span></a>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="calendar"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Closing
                                                                Date &amp; Time</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                            27-12-2022<span> . 11:19 PM</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="headphones"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Assigned
                                                                Agent </p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1"><select
                                                            class="form-select form-select-sm py-0 ms-n3 border-0 shadow-none">
                                                            <option selected="selected">Ally Aagaard</option>
                                                            <option>Lonnie Kub</option>
                                                            <option>Aida Moen</option>
                                                            <option>Niko Koss</option>
                                                            <option>Alec Haag</option>
                                                            <option>Ola Smith</option>
                                                            <option>Leif Walsh</option>
                                                            <option>Brain Cole</option>
                                                            <option>Reese Mann</option>
                                                        </select></td>
                                                </tr>
                                            </table>
                                            <p class="fs-9 mb-1"> Probability:</p>
                                            <div class="progress" style="height:8px">
                                                <div class="progress-bar rounded-pill bg-info" role="progressbar"
                                                    style="width: 20%" aria-valuenow="20" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card mb-3">
                                    <div class="card-body"><a
                                            class="dropdown-indicator-icon position-absolute text-body-tertiary"
                                            href="#collapseWidthDeals-2" role="button" data-bs-toggle="collapse"
                                            aria-expanded="false" aria-controls="collapseWidthDeals-2"><span
                                                class="fa-solid fa-angle-down"></span></a>
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <div class="d-flex"><span class="me-2" data-feather="clock"
                                                    style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 29, 2022<span
                                                        class="text-body-quaternary"> . 12:15 PM</span></p>
                                            </div>
                                        </div>
                                        <div class="deals-items-head d-flex align-items-center mb-2"><a
                                                class="text-primary fw-bold line-clamp-1 me-3 mb-0 fs-7"
                                                href="{{ url('deal-details') }}">Dimensions for Printing</a>
                                            <p class="deals-category fs-10 mb-0 mt-1 d-none"><span
                                                    class="me-1 text-body-quaternary" data-feather="grid"
                                                    style="stroke-width:2; height: 12px; width: 12px"></span>Marketplace
                                            </p>
                                            <p class="ms-auto fs-9 text-body-emphasis fw-semibold mb-0 deals-revenue">
                                                $23,000.00</p>
                                        </div>
                                        <div class="deals-company-agent d-flex flex-between-center">
                                            <div class="d-flex align-items-center"><span class="uil uil-user me-2"></span>
                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Kibikaba Clothings</p>
                                            </div>
                                            <div class="d-flex align-items-center"><span
                                                    class="uil uil-headphones me-2"></span>
                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Lonnie Kub</p>
                                            </div>
                                        </div>
                                        <div class="collapse" id="collapseWidthDeals-2">
                                            <div class="d-flex gap-2 mb-5"><span
                                                    class="badge badge-phoenix badge-phoenix-info">New</span><span
                                                    class="badge badge-phoenix badge-phoenix-success">Medium</span></div>
                                            <table class="mb-4 w-100 table-stats table-stats">
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary"
                                                                data-feather="dollar-sign"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Expected
                                                                Revenue</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                            $23,000.00</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="user"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Company
                                                                Name</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis d-flex align-items-center gap-2">
                                                            Kibikaba Clothings<a href="#!"> <span
                                                                    class="fa-solid fa-square-phone text-body-tertiary"></span></a><a
                                                                href="#!"> <span
                                                                    class="fa-solid fa-square-envelope text-body-tertiary"></span></a><a
                                                                href="#!"> <span
                                                                    class="fab fa-whatsapp-square text-body-tertiary"></span></a>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="calendar"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Closing
                                                                Date &amp; Time</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                            25-12-2022<span> . 2:00 PM</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="headphones"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Assigned
                                                                Agent </p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1"><select
                                                            class="form-select form-select-sm py-0 ms-n3 border-0 shadow-none">
                                                            <option>Ally Aagaard</option>
                                                            <option selected="selected">Lonnie Kub</option>
                                                            <option>Aida Moen</option>
                                                            <option>Niko Koss</option>
                                                            <option>Alec Haag</option>
                                                            <option>Ola Smith</option>
                                                            <option>Leif Walsh</option>
                                                            <option>Brain Cole</option>
                                                            <option>Reese Mann</option>
                                                        </select></td>
                                                </tr>
                                            </table>
                                            <p class="fs-9 mb-1"> Probability:</p>
                                            <div class="progress" style="height:8px">
                                                <div class="progress-bar rounded-pill bg-info" role="progressbar"
                                                    style="width: 20%" aria-valuenow="20" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="deals-col me-4">
                    <div class="d-flex align-items-center justify-content-between position-sticky top-0 z-1 bg-body">
                        <div>
                            <h5 class="mb-2">In Progress</h5>
                            <p class="fs-9 text-body-tertiary mb-1">Forecast Revenue:</p>
                            <h4 class="mb-3">$101,300.00</h4>
                        </div>
                        <div class="d-flex gap-3"><button class="btn p-0" type="button" data-bs-toggle="modal"
                                data-bs-target="#addDealModal" aria-haspopup="true" aria-expanded="false"
                                data-bs-reference="parent"><span class="fa-solid fa-plus"></span></button>
                            <button class="btn p-0" type="button" data-bs-toggle="dropdown" data-boundary="window"
                                aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span
                                    class="fas fa-ellipsis-h fs-10"></span></button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                <li><a class="dropdown-item" href="#">Add meeting</a></li>
                                <li><a class="dropdown-item" href="#">See all connected contacts</a></li>
                                <li><a class="dropdown-item" href="#">Clone</a></li>
                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                <li><a class="dropdown-item" href="#">Display only bad deals</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="scrollbar deals-items-container">
                        <div class="w-100 min-vh-50" data-sortable="data-sortable">
                            <div>
                                <div class="card mb-3">
                                    <div class="card-body"><a
                                            class="dropdown-indicator-icon position-absolute text-body-tertiary"
                                            href="#collapseWidthDeals-3" role="button" data-bs-toggle="collapse"
                                            aria-expanded="false" aria-controls="collapseWidthDeals-3"><span
                                                class="fa-solid fa-angle-down"></span></a>
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <div class="d-flex"><span class="me-2" data-feather="clock"
                                                    style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 30, 2022<span
                                                        class="text-body-quaternary"> . 06:15 PM</span></p>
                                            </div>
                                        </div>
                                        <div class="deals-items-head d-flex align-items-center mb-2"><a
                                                class="text-primary fw-bold line-clamp-1 me-3 mb-0 fs-7"
                                                href="{{ url('deal-details') }}">True and True Attorneys</a>
                                            <p class="deals-category fs-10 mb-0 mt-1 d-none"><span
                                                    class="me-1 text-body-quaternary" data-feather="grid"
                                                    style="stroke-width:2; height: 12px; width: 12px"></span>Financial</p>
                                            <p class="ms-auto fs-9 text-body-emphasis fw-semibold mb-0 deals-revenue">
                                                $33,000.00</p>
                                        </div>
                                        <div class="deals-company-agent d-flex flex-between-center">
                                            <div class="d-flex align-items-center"><span class="uil uil-user me-2"></span>
                                                <p class="text-body-secondary fw-bold fs-9 mb-0">PBR Holdings</p>
                                            </div>
                                            <div class="d-flex align-items-center"><span
                                                    class="uil uil-headphones me-2"></span>
                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Aida Moen</p>
                                            </div>
                                        </div>
                                        <div class="collapse" id="collapseWidthDeals-3">
                                            <div class="d-flex gap-2 mb-5"><span
                                                    class="badge badge-phoenix badge-phoenix-primary">In
                                                    Progress</span><span
                                                    class="badge badge-phoenix badge-phoenix-warning">High</span></div>
                                            <table class="mb-4 w-100 table-stats table-stats">
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary"
                                                                data-feather="dollar-sign"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Expected
                                                                Revenue</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                            $33,000.00</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="user"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Company
                                                                Name</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis d-flex align-items-center gap-2">
                                                            PBR Holdings<a href="#!"> <span
                                                                    class="fa-solid fa-square-phone text-body-tertiary"></span></a><a
                                                                href="#!"> <span
                                                                    class="fa-solid fa-square-envelope text-body-tertiary"></span></a><a
                                                                href="#!"> <span
                                                                    class="fab fa-whatsapp-square text-body-tertiary"></span></a>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="calendar"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Closing
                                                                Date &amp; Time</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                            27-12-2022<span> . 11:19 PM</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="headphones"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Assigned
                                                                Agent </p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1"><select
                                                            class="form-select form-select-sm py-0 ms-n3 border-0 shadow-none">
                                                            <option>Ally Aagaard</option>
                                                            <option>Lonnie Kub</option>
                                                            <option selected="selected">Aida Moen</option>
                                                            <option>Niko Koss</option>
                                                            <option>Alec Haag</option>
                                                            <option>Ola Smith</option>
                                                            <option>Leif Walsh</option>
                                                            <option>Brain Cole</option>
                                                            <option>Reese Mann</option>
                                                        </select></td>
                                                </tr>
                                            </table>
                                            <p class="fs-9 mb-1"> Probability:</p>
                                            <div class="progress" style="height:8px">
                                                <div class="progress-bar rounded-pill bg-primary" role="progressbar"
                                                    style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card mb-3">
                                    <div class="card-body"><a
                                            class="dropdown-indicator-icon position-absolute text-body-tertiary"
                                            href="#collapseWidthDeals-4" role="button" data-bs-toggle="collapse"
                                            aria-expanded="false" aria-controls="collapseWidthDeals-4"><span
                                                class="fa-solid fa-angle-down"></span></a>
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <div class="d-flex"><span class="me-2" data-feather="clock"
                                                    style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 30, 2022<span
                                                        class="text-body-quaternary"> . 08:20 PM</span></p>
                                            </div>
                                        </div>
                                        <div class="deals-items-head d-flex align-items-center mb-2"><a
                                                class="text-primary fw-bold line-clamp-1 me-3 mb-0 fs-7"
                                                href="{{ url('deal-details') }}">The Morlong Corporation</a>
                                            <p class="deals-category fs-10 mb-0 mt-1 d-none"><span
                                                    class="me-1 text-body-quaternary" data-feather="grid"
                                                    style="stroke-width:2; height: 12px; width: 12px"></span>Marketplace
                                            </p>
                                            <p class="ms-auto fs-9 text-body-emphasis fw-semibold mb-0 deals-revenue">
                                                $45,300.00</p>
                                        </div>
                                        <div class="deals-company-agent d-flex flex-between-center">
                                            <div class="d-flex align-items-center"><span class="uil uil-user me-2"></span>
                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Giraffes Studio</p>
                                            </div>
                                            <div class="d-flex align-items-center"><span
                                                    class="uil uil-headphones me-2"></span>
                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Niko Koss</p>
                                            </div>
                                        </div>
                                        <div class="collapse" id="collapseWidthDeals-4">
                                            <div class="d-flex gap-2 mb-5"><span
                                                    class="badge badge-phoenix badge-phoenix-primary">In
                                                    Progress</span><span
                                                    class="badge badge-phoenix badge-phoenix-info">Low</span></div>
                                            <table class="mb-4 w-100 table-stats table-stats">
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary"
                                                                data-feather="dollar-sign"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Expected
                                                                Revenue</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                            $45,300.00</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="user"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Company
                                                                Name</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis d-flex align-items-center gap-2">
                                                            Giraffes Studio<a href="#!"> <span
                                                                    class="fa-solid fa-square-phone text-body-tertiary"></span></a><a
                                                                href="#!"> <span
                                                                    class="fa-solid fa-square-envelope text-body-tertiary"></span></a><a
                                                                href="#!"> <span
                                                                    class="fab fa-whatsapp-square text-body-tertiary"></span></a>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="calendar"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Closing
                                                                Date &amp; Time</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                            26-12-2022<span> . 12:10 PM</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="headphones"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Assigned
                                                                Agent </p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1"><select
                                                            class="form-select form-select-sm py-0 ms-n3 border-0 shadow-none">
                                                            <option>Ally Aagaard</option>
                                                            <option>Lonnie Kub</option>
                                                            <option>Aida Moen</option>
                                                            <option selected="selected">Niko Koss</option>
                                                            <option>Alec Haag</option>
                                                            <option>Ola Smith</option>
                                                            <option>Leif Walsh</option>
                                                            <option>Brain Cole</option>
                                                            <option>Reese Mann</option>
                                                        </select></td>
                                                </tr>
                                            </table>
                                            <p class="fs-9 mb-1"> Probability:</p>
                                            <div class="progress" style="height:8px">
                                                <div class="progress-bar rounded-pill bg-primary" role="progressbar"
                                                    style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card mb-3">
                                    <div class="card-body"><a
                                            class="dropdown-indicator-icon position-absolute text-body-tertiary"
                                            href="#collapseWidthDeals-5" role="button" data-bs-toggle="collapse"
                                            aria-expanded="false" aria-controls="collapseWidthDeals-5"><span
                                                class="fa-solid fa-angle-down"></span></a>
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <div class="d-flex"><span class="me-2" data-feather="clock"
                                                    style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 30, 2022<span
                                                        class="text-body-quaternary"> . 3:25 PM</span></p>
                                            </div>
                                        </div>
                                        <div class="deals-items-head d-flex align-items-center mb-2"><a
                                                class="text-primary fw-bold line-clamp-1 me-3 mb-0 fs-7"
                                                href="{{ url('deal-details') }}">Product List</a>
                                            <p class="deals-category fs-10 mb-0 mt-1 d-none"><span
                                                    class="me-1 text-body-quaternary" data-feather="grid"
                                                    style="stroke-width:2; height: 12px; width: 12px"></span>Marketplace
                                            </p>
                                            <p class="ms-auto fs-9 text-body-emphasis fw-semibold mb-0 deals-revenue">
                                                $23,000.00</p>
                                        </div>
                                        <div class="deals-company-agent d-flex flex-between-center">
                                            <div class="d-flex align-items-center"><span class="uil uil-user me-2"></span>
                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Birds eye</p>
                                            </div>
                                            <div class="d-flex align-items-center"><span
                                                    class="uil uil-headphones me-2"></span>
                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Alec Haag</p>
                                            </div>
                                        </div>
                                        <div class="collapse" id="collapseWidthDeals-5">
                                            <div class="d-flex gap-2 mb-5"><span
                                                    class="badge badge-phoenix badge-phoenix-primary">In
                                                    Progress</span><span
                                                    class="badge badge-phoenix badge-phoenix-danger">Urgent</span></div>
                                            <table class="mb-4 w-100 table-stats table-stats">
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary"
                                                                data-feather="dollar-sign"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Expected
                                                                Revenue</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                            $23,000.00</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="user"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Company
                                                                Name</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis d-flex align-items-center gap-2">
                                                            Birds eye<a href="#!"> <span
                                                                    class="fa-solid fa-square-phone text-body-tertiary"></span></a><a
                                                                href="#!"> <span
                                                                    class="fa-solid fa-square-envelope text-body-tertiary"></span></a><a
                                                                href="#!"> <span
                                                                    class="fab fa-whatsapp-square text-body-tertiary"></span></a>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="calendar"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Closing
                                                                Date &amp; Time</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                            27-12-2022<span> . 11:19 PM</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="headphones"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Assigned
                                                                Agent </p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1"><select
                                                            class="form-select form-select-sm py-0 ms-n3 border-0 shadow-none">
                                                            <option>Ally Aagaard</option>
                                                            <option>Lonnie Kub</option>
                                                            <option>Aida Moen</option>
                                                            <option>Niko Koss</option>
                                                            <option selected="selected">Alec Haag</option>
                                                            <option>Ola Smith</option>
                                                            <option>Leif Walsh</option>
                                                            <option>Brain Cole</option>
                                                            <option>Reese Mann</option>
                                                        </select></td>
                                                </tr>
                                            </table>
                                            <p class="fs-9 mb-1"> Probability:</p>
                                            <div class="progress" style="height:8px">
                                                <div class="progress-bar rounded-pill bg-primary" role="progressbar"
                                                    style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="deals-col me-4">
                    <div class="d-flex align-items-center justify-content-between position-sticky top-0 z-1 bg-body">
                        <div>
                            <h5 class="mb-2">Pending</h5>
                            <p class="fs-9 text-body-tertiary mb-1">Forecast Revenue:</p>
                            <h4 class="mb-3">$23,400.00</h4>
                        </div>
                        <div class="d-flex gap-3"><button class="btn p-0" type="button" data-bs-toggle="modal"
                                data-bs-target="#addDealModal" aria-haspopup="true" aria-expanded="false"
                                data-bs-reference="parent"><span class="fa-solid fa-plus"></span></button>
                            <button class="btn p-0" type="button" data-bs-toggle="dropdown" data-boundary="window"
                                aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span
                                    class="fas fa-ellipsis-h fs-10"></span></button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                <li><a class="dropdown-item" href="#">Add meeting</a></li>
                                <li><a class="dropdown-item" href="#">See all connected contacts</a></li>
                                <li><a class="dropdown-item" href="#">Clone</a></li>
                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                <li><a class="dropdown-item" href="#">Display only bad deals</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="scrollbar deals-items-container">
                        <div class="w-100 min-vh-50" data-sortable="data-sortable">
                            <div>
                                <div class="card mb-3">
                                    <div class="card-body"><a
                                            class="dropdown-indicator-icon position-absolute text-body-tertiary"
                                            href="#collapseWidthDeals-6" role="button" data-bs-toggle="collapse"
                                            aria-expanded="false" aria-controls="collapseWidthDeals-6"><span
                                                class="fa-solid fa-angle-down"></span></a>
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <div class="d-flex"><span class="me-2" data-feather="clock"
                                                    style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 30, 2022<span
                                                        class="text-body-quaternary"> . 3:15 PM</span></p>
                                            </div>
                                        </div>
                                        <div class="deals-items-head d-flex align-items-center mb-2"><a
                                                class="text-primary fw-bold line-clamp-1 me-3 mb-0 fs-7"
                                                href="{{ url('deal-details') }}">Printing Services by Feltz</a>
                                            <p class="deals-category fs-10 mb-0 mt-1 d-none"><span
                                                    class="me-1 text-body-quaternary" data-feather="grid"
                                                    style="stroke-width:2; height: 12px; width: 12px"></span>Marketplace
                                            </p>
                                            <p class="ms-auto fs-9 text-body-emphasis fw-semibold mb-0 deals-revenue">
                                                $23,400.00</p>
                                        </div>
                                        <div class="deals-company-agent d-flex flex-between-center">
                                            <div class="d-flex align-items-center"><span class="uil uil-user me-2"></span>
                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Ant Family</p>
                                            </div>
                                            <div class="d-flex align-items-center"><span
                                                    class="uil uil-headphones me-2"></span>
                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Ally Aagaard</p>
                                            </div>
                                        </div>
                                        <div class="collapse" id="collapseWidthDeals-6">
                                            <div class="d-flex gap-2 mb-5"><span
                                                    class="badge badge-phoenix badge-phoenix-warning">Pending</span><span
                                                    class="badge badge-phoenix badge-phoenix-warning">High</span></div>
                                            <table class="mb-4 w-100 table-stats table-stats">
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary"
                                                                data-feather="dollar-sign"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Expected
                                                                Revenue</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                            $23,400.00</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="user"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Company
                                                                Name</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis d-flex align-items-center gap-2">
                                                            Ant Family<a href="#!"> <span
                                                                    class="fa-solid fa-square-phone text-body-tertiary"></span></a><a
                                                                href="#!"> <span
                                                                    class="fa-solid fa-square-envelope text-body-tertiary"></span></a><a
                                                                href="#!"> <span
                                                                    class="fab fa-whatsapp-square text-body-tertiary"></span></a>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="calendar"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Closing
                                                                Date &amp; Time</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                            27-12-2022<span> . 11:19 PM</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="headphones"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Assigned
                                                                Agent </p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1"><select
                                                            class="form-select form-select-sm py-0 ms-n3 border-0 shadow-none">
                                                            <option selected="selected">Ally Aagaard</option>
                                                            <option>Lonnie Kub</option>
                                                            <option>Aida Moen</option>
                                                            <option>Niko Koss</option>
                                                            <option>Alec Haag</option>
                                                            <option>Ola Smith</option>
                                                            <option>Leif Walsh</option>
                                                            <option>Brain Cole</option>
                                                            <option>Reese Mann</option>
                                                        </select></td>
                                                </tr>
                                            </table>
                                            <p class="fs-9 mb-1"> Probability:</p>
                                            <div class="progress" style="height:8px">
                                                <div class="progress-bar rounded-pill bg-warning" role="progressbar"
                                                    style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="deals-col me-4">
                    <div class="d-flex align-items-center justify-content-between position-sticky top-0 z-1 bg-body">
                        <div>
                            <h5 class="mb-2">Canceled</h5>
                            <p class="fs-9 text-body-tertiary mb-1">Forecast Revenue:</p>
                            <h4 class="mb-3">$260.00</h4>
                        </div>
                        <div class="d-flex gap-3"><button class="btn p-0" type="button" data-bs-toggle="modal"
                                data-bs-target="#addDealModal" aria-haspopup="true" aria-expanded="false"
                                data-bs-reference="parent"><span class="fa-solid fa-plus"></span></button>
                            <button class="btn p-0" type="button" data-bs-toggle="dropdown" data-boundary="window"
                                aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span
                                    class="fas fa-ellipsis-h fs-10"></span></button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                <li><a class="dropdown-item" href="#">Add meeting</a></li>
                                <li><a class="dropdown-item" href="#">See all connected contacts</a></li>
                                <li><a class="dropdown-item" href="#">Clone</a></li>
                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                <li><a class="dropdown-item" href="#">Display only bad deals</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="scrollbar deals-items-container">
                        <div class="w-100 min-vh-50" data-sortable="data-sortable">
                            <div>
                                <div class="card mb-3">
                                    <div class="card-body"><a
                                            class="dropdown-indicator-icon position-absolute text-body-tertiary"
                                            href="#collapseWidthDeals-7" role="button" data-bs-toggle="collapse"
                                            aria-expanded="false" aria-controls="collapseWidthDeals-7"><span
                                                class="fa-solid fa-angle-down"></span></a>
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <div class="d-flex"><span class="me-2" data-feather="clock"
                                                    style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 31, 2022<span
                                                        class="text-body-quaternary"> . 01:30 PM</span></p>
                                            </div>
                                        </div>
                                        <div class="deals-items-head d-flex align-items-center mb-2"><a
                                                class="text-primary fw-bold line-clamp-1 me-3 mb-0 fs-7"
                                                href="{{ url('deal-details') }}">SP Flat Plate</a>
                                            <p class="deals-category fs-10 mb-0 mt-1 d-none"><span
                                                    class="me-1 text-body-quaternary" data-feather="grid"
                                                    style="stroke-width:2; height: 12px; width: 12px"></span>Financial</p>
                                            <p class="ms-auto fs-9 text-body-emphasis fw-semibold mb-0 deals-revenue">
                                                $14,000.00</p>
                                        </div>
                                        <div class="deals-company-agent d-flex flex-between-center">
                                            <div class="d-flex align-items-center"><span class="uil uil-user me-2"></span>
                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Ant Family</p>
                                            </div>
                                            <div class="d-flex align-items-center"><span
                                                    class="uil uil-headphones me-2"></span>
                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Ola Smith</p>
                                            </div>
                                        </div>
                                        <div class="collapse" id="collapseWidthDeals-7">
                                            <div class="d-flex gap-2 mb-5"><span
                                                    class="badge badge-phoenix badge-phoenix-secondary">Canceled</span><span
                                                    class="badge badge-phoenix badge-phoenix-success">Medium</span></div>
                                            <table class="mb-4 w-100 table-stats table-stats">
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary"
                                                                data-feather="dollar-sign"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Expected
                                                                Revenue</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                            $14,000.00</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="user"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Company
                                                                Name</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis d-flex align-items-center gap-2">
                                                            Ant Family<a href="#!"> <span
                                                                    class="fa-solid fa-square-phone text-body-tertiary"></span></a><a
                                                                href="#!"> <span
                                                                    class="fa-solid fa-square-envelope text-body-tertiary"></span></a><a
                                                                href="#!"> <span
                                                                    class="fab fa-whatsapp-square text-body-tertiary"></span></a>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="calendar"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Closing
                                                                Date &amp; Time</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                            29-12-2022<span> . 01:30 PM</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="headphones"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Assigned
                                                                Agent </p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1"><select
                                                            class="form-select form-select-sm py-0 ms-n3 border-0 shadow-none">
                                                            <option>Ally Aagaard</option>
                                                            <option>Lonnie Kub</option>
                                                            <option>Aida Moen</option>
                                                            <option>Niko Koss</option>
                                                            <option>Alec Haag</option>
                                                            <option selected="selected">Ola Smith</option>
                                                            <option>Leif Walsh</option>
                                                            <option>Brain Cole</option>
                                                            <option>Reese Mann</option>
                                                        </select></td>
                                                </tr>
                                            </table>
                                            <p class="fs-9 mb-1"> Probability:</p>
                                            <div class="progress" style="height:8px">
                                                <div class="progress-bar rounded-pill bg-300" role="progressbar"
                                                    style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card mb-3">
                                    <div class="card-body"><a
                                            class="dropdown-indicator-icon position-absolute text-body-tertiary"
                                            href="#collapseWidthDeals-8" role="button" data-bs-toggle="collapse"
                                            aria-expanded="false" aria-controls="collapseWidthDeals-8"><span
                                                class="fa-solid fa-angle-down"></span></a>
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <div class="d-flex"><span class="me-2" data-feather="clock"
                                                    style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 31, 2022<span
                                                        class="text-body-quaternary"> . 2:15 PM</span></p>
                                            </div>
                                        </div>
                                        <div class="deals-items-head d-flex align-items-center mb-2"><a
                                                class="text-primary fw-bold line-clamp-1 me-3 mb-0 fs-7"
                                                href="{{ url('deal-details') }}">Ventilated Pipe</a>
                                            <p class="deals-category fs-10 mb-0 mt-1 d-none"><span
                                                    class="me-1 text-body-quaternary" data-feather="grid"
                                                    style="stroke-width:2; height: 12px; width: 12px"></span>Marketplace
                                            </p>
                                            <p class="ms-auto fs-9 text-body-emphasis fw-semibold mb-0 deals-revenue">
                                                $14,000.00</p>
                                        </div>
                                        <div class="deals-company-agent d-flex flex-between-center">
                                            <div class="d-flex align-items-center"><span class="uil uil-user me-2"></span>
                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Giraffes Studio</p>
                                            </div>
                                            <div class="d-flex align-items-center"><span
                                                    class="uil uil-headphones me-2"></span>
                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Leif Walsh</p>
                                            </div>
                                        </div>
                                        <div class="collapse" id="collapseWidthDeals-8">
                                            <div class="d-flex gap-2 mb-5"><span
                                                    class="badge badge-phoenix badge-phoenix-secondary">Canceled</span><span
                                                    class="badge badge-phoenix badge-phoenix-info">Low</span></div>
                                            <table class="mb-4 w-100 table-stats table-stats">
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary"
                                                                data-feather="dollar-sign"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Expected
                                                                Revenue</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                            $14,000.00</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="user"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Company
                                                                Name</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis d-flex align-items-center gap-2">
                                                            Giraffes Studio<a href="#!"> <span
                                                                    class="fa-solid fa-square-phone text-body-tertiary"></span></a><a
                                                                href="#!"> <span
                                                                    class="fa-solid fa-square-envelope text-body-tertiary"></span></a><a
                                                                href="#!"> <span
                                                                    class="fab fa-whatsapp-square text-body-tertiary"></span></a>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="calendar"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Closing
                                                                Date &amp; Time</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                            29-12-2022<span> . 02:15 PM</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="headphones"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Assigned
                                                                Agent </p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1"><select
                                                            class="form-select form-select-sm py-0 ms-n3 border-0 shadow-none">
                                                            <option>Ally Aagaard</option>
                                                            <option>Lonnie Kub</option>
                                                            <option>Aida Moen</option>
                                                            <option>Niko Koss</option>
                                                            <option>Alec Haag</option>
                                                            <option>Ola Smith</option>
                                                            <option selected="selected">Leif Walsh</option>
                                                            <option>Brain Cole</option>
                                                            <option>Reese Mann</option>
                                                        </select></td>
                                                </tr>
                                            </table>
                                            <p class="fs-9 mb-1"> Probability:</p>
                                            <div class="progress" style="height:8px">
                                                <div class="progress-bar rounded-pill bg-300" role="progressbar"
                                                    style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="deals-col me-4">
                    <div class="d-flex align-items-center justify-content-between position-sticky top-0 z-1 bg-body">
                        <div>
                            <h5 class="mb-2">Completed</h5>
                            <p class="fs-9 text-body-tertiary mb-1">Forecast Revenue:</p>
                            <h4 class="mb-3">$1,650.00</h4>
                        </div>
                        <div class="d-flex gap-3"><button class="btn p-0" type="button" data-bs-toggle="modal"
                                data-bs-target="#addDealModal" aria-haspopup="true" aria-expanded="false"
                                data-bs-reference="parent"><span class="fa-solid fa-plus"></span></button>
                            <button class="btn p-0" type="button" data-bs-toggle="dropdown" data-boundary="window"
                                aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span
                                    class="fas fa-ellipsis-h fs-10"></span></button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                <li><a class="dropdown-item" href="#">Add meeting</a></li>
                                <li><a class="dropdown-item" href="#">See all connected contacts</a></li>
                                <li><a class="dropdown-item" href="#">Clone</a></li>
                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                <li><a class="dropdown-item" href="#">Display only bad deals</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="scrollbar deals-items-container">
                        <div class="w-100 min-vh-50" data-sortable="data-sortable">
                            <div>
                                <div class="card mb-3">
                                    <div class="card-body"><a
                                            class="dropdown-indicator-icon position-absolute text-body-tertiary"
                                            href="#collapseWidthDeals-9" role="button" data-bs-toggle="collapse"
                                            aria-expanded="false" aria-controls="collapseWidthDeals-9"><span
                                                class="fa-solid fa-angle-down"></span></a>
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <div class="d-flex"><span class="me-2" data-feather="clock"
                                                    style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 29, 2022<span
                                                        class="text-body-quaternary"> . 03:12 PM</span></p>
                                            </div>
                                        </div>
                                        <div class="deals-items-head d-flex align-items-center mb-2"><a
                                                class="text-primary fw-bold line-clamp-1 me-3 mb-0 fs-7"
                                                href="{{ url('deal-details') }}">Product Shipping</a>
                                            <p class="deals-category fs-10 mb-0 mt-1 d-none"><span
                                                    class="me-1 text-body-quaternary" data-feather="grid"
                                                    style="stroke-width:2; height: 12px; width: 12px"></span>Financial</p>
                                            <p class="ms-auto fs-9 text-body-emphasis fw-semibold mb-0 deals-revenue">
                                                $15,000.00</p>
                                        </div>
                                        <div class="deals-company-agent d-flex flex-between-center">
                                            <div class="d-flex align-items-center"><span class="uil uil-user me-2"></span>
                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Birds eye</p>
                                            </div>
                                            <div class="d-flex align-items-center"><span
                                                    class="uil uil-headphones me-2"></span>
                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Brain Cole</p>
                                            </div>
                                        </div>
                                        <div class="collapse" id="collapseWidthDeals-9">
                                            <div class="d-flex gap-2 mb-5"><span
                                                    class="badge badge-phoenix badge-phoenix-success">Completed</span><span
                                                    class="badge badge-phoenix badge-phoenix-danger">Urgent</span></div>
                                            <table class="mb-4 w-100 table-stats table-stats">
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary"
                                                                data-feather="dollar-sign"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Expected
                                                                Revenue</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                            $15,000.00</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="user"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Company
                                                                Name</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis d-flex align-items-center gap-2">
                                                            Birds eye<a href="#!"> <span
                                                                    class="fa-solid fa-square-phone text-body-tertiary"></span></a><a
                                                                href="#!"> <span
                                                                    class="fa-solid fa-square-envelope text-body-tertiary"></span></a><a
                                                                href="#!"> <span
                                                                    class="fab fa-whatsapp-square text-body-tertiary"></span></a>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="calendar"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Closing
                                                                Date &amp; Time</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                            27-12-2022<span> . 11:19 PM</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary"
                                                                data-feather="headphones"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Assigned
                                                                Agent </p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1"><select
                                                            class="form-select form-select-sm py-0 ms-n3 border-0 shadow-none">
                                                            <option>Ally Aagaard</option>
                                                            <option>Lonnie Kub</option>
                                                            <option>Aida Moen</option>
                                                            <option>Niko Koss</option>
                                                            <option>Alec Haag</option>
                                                            <option>Ola Smith</option>
                                                            <option>Leif Walsh</option>
                                                            <option selected="selected">Brain Cole</option>
                                                            <option>Reese Mann</option>
                                                        </select></td>
                                                </tr>
                                            </table>
                                            <p class="fs-9 mb-1"> Probability:</p>
                                            <div class="progress" style="height:8px">
                                                <div class="progress-bar rounded-pill bg-success" role="progressbar"
                                                    style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card mb-3">
                                    <div class="card-body"><a
                                            class="dropdown-indicator-icon position-absolute text-body-tertiary"
                                            href="#collapseWidthDeals-10" role="button" data-bs-toggle="collapse"
                                            aria-expanded="false" aria-controls="collapseWidthDeals-10"><span
                                                class="fa-solid fa-angle-down"></span></a>
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <div class="d-flex"><span class="me-2" data-feather="clock"
                                                    style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 29, 2022<span
                                                        class="text-body-quaternary"> . 06:15 PM</span></p>
                                            </div>
                                        </div>
                                        <div class="deals-items-head d-flex align-items-center mb-2"><a
                                                class="text-primary fw-bold line-clamp-1 me-3 mb-0 fs-7"
                                                href="{{ url('deal-details') }}">Product List</a>
                                            <p class="deals-category fs-10 mb-0 mt-1 d-none"><span
                                                    class="me-1 text-body-quaternary" data-feather="grid"
                                                    style="stroke-width:2; height: 12px; width: 12px"></span>Financial</p>
                                            <p class="ms-auto fs-9 text-body-emphasis fw-semibold mb-0 deals-revenue">
                                                $33,00.00</p>
                                        </div>
                                        <div class="deals-company-agent d-flex flex-between-center">
                                            <div class="d-flex align-items-center"><span
                                                    class="uil uil-user me-2"></span>
                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Ink Incorporated</p>
                                            </div>
                                            <div class="d-flex align-items-center"><span
                                                    class="uil uil-headphones me-2"></span>
                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Reese Mann</p>
                                            </div>
                                        </div>
                                        <div class="collapse" id="collapseWidthDeals-10">
                                            <div class="d-flex gap-2 mb-5"><span
                                                    class="badge badge-phoenix badge-phoenix-success">Completed</span><span
                                                    class="badge badge-phoenix badge-phoenix-info">Low</span></div>
                                            <table class="mb-4 w-100 table-stats table-stats">
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary"
                                                                data-feather="dollar-sign"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Expected
                                                                Revenue</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                            $33,00.00</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="user"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Company
                                                                Name</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis d-flex align-items-center gap-2">
                                                            Ink Incorporated<a href="#!"> <span
                                                                    class="fa-solid fa-square-phone text-body-tertiary"></span></a><a
                                                                href="#!"> <span
                                                                    class="fa-solid fa-square-envelope text-body-tertiary"></span></a><a
                                                                href="#!"> <span
                                                                    class="fab fa-whatsapp-square text-body-tertiary"></span></a>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="calendar"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Closing
                                                                Date &amp; Time</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                            28-12-2022<span> . 12:20 PM</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary"
                                                                data-feather="headphones"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Assigned
                                                                Agent </p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1"><select
                                                            class="form-select form-select-sm py-0 ms-n3 border-0 shadow-none">
                                                            <option>Ally Aagaard</option>
                                                            <option>Lonnie Kub</option>
                                                            <option>Aida Moen</option>
                                                            <option>Niko Koss</option>
                                                            <option>Alec Haag</option>
                                                            <option>Ola Smith</option>
                                                            <option>Leif Walsh</option>
                                                            <option>Brain Cole</option>
                                                            <option selected="selected">Reese Mann</option>
                                                        </select></td>
                                                </tr>
                                            </table>
                                            <p class="fs-9 mb-1"> Probability:</p>
                                            <div class="progress" style="height:8px">
                                                <div class="progress-bar rounded-pill bg-success" role="progressbar"
                                                    style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card mb-3">
                                    <div class="card-body"><a
                                            class="dropdown-indicator-icon position-absolute text-body-tertiary"
                                            href="#collapseWidthDeals-11" role="button" data-bs-toggle="collapse"
                                            aria-expanded="false" aria-controls="collapseWidthDeals-11"><span
                                                class="fa-solid fa-angle-down"></span></a>
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <div class="d-flex"><span class="me-2" data-feather="clock"
                                                    style="stroke-width:2;"></span>
                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 29, 2022<span
                                                        class="text-body-quaternary"> . 2:15 PM</span></p>
                                            </div>
                                        </div>
                                        <div class="deals-items-head d-flex align-items-center mb-2"><a
                                                class="text-primary fw-bold line-clamp-1 me-3 mb-0 fs-7"
                                                href="{{ url('deal-details') }}">Dimensions for Printing</a>
                                            <p class="deals-category fs-10 mb-0 mt-1 d-none"><span
                                                    class="me-1 text-body-quaternary" data-feather="grid"
                                                    style="stroke-width:2; height: 12px; width: 12px"></span>Marketplace
                                            </p>
                                            <p class="ms-auto fs-9 text-body-emphasis fw-semibold mb-0 deals-revenue">
                                                $23,400.00</p>
                                        </div>
                                        <div class="deals-company-agent d-flex flex-between-center">
                                            <div class="d-flex align-items-center"><span
                                                    class="uil uil-user me-2"></span>
                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Slim Apes</p>
                                            </div>
                                            <div class="d-flex align-items-center"><span
                                                    class="uil uil-headphones me-2"></span>
                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Ally Aagaard</p>
                                            </div>
                                        </div>
                                        <div class="collapse" id="collapseWidthDeals-11">
                                            <div class="d-flex gap-2 mb-5"><span
                                                    class="badge badge-phoenix badge-phoenix-success">Completed</span><span
                                                    class="badge badge-phoenix badge-phoenix-danger">Urgent</span></div>
                                            <table class="mb-4 w-100 table-stats table-stats">
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary"
                                                                data-feather="dollar-sign"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Expected
                                                                Revenue</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                            $23,400.00</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="user"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Company
                                                                Name</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis d-flex align-items-center gap-2">
                                                            Slim Apes<a href="#!"> <span
                                                                    class="fa-solid fa-square-phone text-body-tertiary"></span></a><a
                                                                href="#!"> <span
                                                                    class="fa-solid fa-square-envelope text-body-tertiary"></span></a><a
                                                                href="#!"> <span
                                                                    class="fab fa-whatsapp-square text-body-tertiary"></span></a>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary" data-feather="calendar"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Closing
                                                                Date &amp; Time</p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1">
                                                        <p
                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                            28-12-2022<span> . 02:19 PM</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-1">
                                                        <div class="d-flex align-items-center"><span
                                                                class="me-2 text-body-tertiary"
                                                                data-feather="headphones"
                                                                style="width:16px; height:16px"></span>
                                                            <p class="fw-semibold fs-9 mb-0 text-body-tertiary">Assigned
                                                                Agent </p>
                                                        </div>
                                                    </td>
                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                    <td class="py-1"><select
                                                            class="form-select form-select-sm py-0 ms-n3 border-0 shadow-none">
                                                            <option selected="selected">Ally Aagaard</option>
                                                            <option>Lonnie Kub</option>
                                                            <option>Aida Moen</option>
                                                            <option>Niko Koss</option>
                                                            <option>Alec Haag</option>
                                                            <option>Ola Smith</option>
                                                            <option>Leif Walsh</option>
                                                            <option>Brain Cole</option>
                                                            <option>Reese Mann</option>
                                                        </select></td>
                                                </tr>
                                            </table>
                                            <p class="fs-9 mb-1"> Probability:</p>
                                            <div class="progress" style="height:8px">
                                                <div class="progress-bar rounded-pill bg-success" role="progressbar"
                                                    style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="deals-col position-relative">
                    <div class="d-flex flex-center flex-column h-100">
                        <h3 class="mb-4">Add new stage</h3><button class="btn btn-sm btn-primary" type="button"
                            data-bs-toggle="modal" data-bs-target="#addStageModal" aria-haspopup="true"
                            aria-expanded="false" data-bs-reference="parent"><span
                                class="fa-solid fa-plus me-2"></span>New Stage</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/choices/choices.min.js') }}"></script>
    <script src="{{ asset('vendors/sortablejs/Sortable.min.js') }}"></script>
    <script src="{{ asset('vendors/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/kanban.js') }}"></script>
@endpush
