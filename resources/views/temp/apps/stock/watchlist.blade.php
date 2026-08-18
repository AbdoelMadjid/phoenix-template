@extends('layouts.vertical')

@section('title', 'Watchlist')

@push('styles')
    <link href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
@endpush

@section('content')
    @include('layouts.partials.breadcrumb')
    <h2 class="mb-4">Watchlist</h2>
    <div class="row flex-between-center g-3 g-lg-5 mb-4">
        <div class="col-auto">
            <h4>My Watchlist </h4>
            <p class="mb-0 text-body-tertiary">Brief summary of all projects</p>
        </div>
        <div class="col-auto"> <button class="btn btn-phoenix-secondary me-2"><span class="fa-solid fa-sort me-2">
                </span>Reorder Symbol </button>
            <button class="btn btn-phoenix-secondary"><span class="fa-solid fa-add me-2"> </span>Add Symbol</button>
        </div>
    </div>
    <div class="row pb-5 pb-md-7 pb-xl-9">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex flex-wrap flex-between-center gap-3 gap-xxl-5"><a
                            class="btn d-flex align-items-center gap-2 p-0 watchlist-collapsible collapse-indicator"
                            data-bs-toggle="collapse" href="#holdingSummary" role="button" aria-expanded="true"
                            aria-controls="holdingSummary"><span class="fa-solid fa-chevron-down toggle-icon"></span>
                            <h4 class="fs-8 fs-sm-7 mb-0 text-body-highlight">Holdings Summary</h4>
                        </a>
                        <div class="scrollbar summery-statistics">
                            <div class="row g-0 flex-nowrap py-1">
                                <div class="col-auto pe-4 border-end">
                                    <div class="d-flex align-items-center gap-2">
                                        <h6 class="fw-normal text-body-tertiary mb-0">Total Holding</h6>
                                        <h5 class="mb-0 text-body">$1,000.00</h5>
                                        <div class="badge badge-phoenix badge-phoenix-success fs-10">+1.71%</div>
                                    </div>
                                </div>
                                <div class="col-auto px-4 border-end">
                                    <div class="d-flex align-items-center gap-2">
                                        <h6 class="fw-normal text-body-tertiary mb-0">Day Change</h6>
                                        <h5 class="mb-0 text-danger">-$5,000.00</h5>
                                        <div class="badge badge-phoenix badge-phoenix-danger fs-10">+1.71%</div>
                                    </div>
                                </div>
                                <div class="col-auto ps-4">
                                    <div class="d-flex align-items-center gap-2">
                                        <h6 class="fw-normal text-body-tertiary mb-0">Unrealized Gain/Loss</h6>
                                        <h5 class="mb-0 text-success">+$3,000.00</h5>
                                        <div class="badge badge-phoenix badge-phoenix-success fs-10">+1.71%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collapse show" id="holdingSummary">
                        <div class="row g-0 mt-3">
                            <div class="col-12 col-xl-4 col-xxl-3 pe-xl-5 border-end-xl overflow-hidden">
                                <h3 class="mb-3">Summary</h3>
                                <table class="table mb-2">
                                    <tbody>
                                        <tr>
                                            <td class="align-middle p-0 pb-2 border-bottom-0">
                                                <p class="mb-0">Market Value</p>
                                            </td>
                                            <td class="align-middle text-end p-0 pb-2 border-bottom-0">
                                                <h5 class="fw-semibold mb-0">$688.43</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle p-0 pb-2 border-bottom-0">
                                                <p class="mb-0">Day Change</p>
                                            </td>
                                            <td class="align-middle text-end p-0 pb-2 border-bottom-0">
                                                <h5 class="mb-0 fw-semibold">+$0.00 (0.00%)</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle p-0 pb-2 border-bottom-0">
                                                <p class="mb-0">Unrealized G/L</p>
                                            </td>
                                            <td class="align-middle text-end p-0 pb-2 border-bottom-0">
                                                <h5 class="mb-0 fw-semibold text-danger">+$0.00 (0.00%)</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle p-0 pb-3 border-bottom-0">
                                                <p class="mb-0">Realized Value</p>
                                            </td>
                                            <td class="align-middle text-end p-0 pb-3 border-bottom-0">
                                                <h5 class="mb-0 fw-semibold">$0.00</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle p-0 pt-3 border-bottom-0 border-top border-dashed">
                                                <h4 class="mb-0">Total: </h4>
                                            </td>
                                            <td
                                                class="align-middle text-end p-0 pt-3 border-bottom-0 border-top border-dashed">
                                                <h4 class="mb-0">$688.43</h4>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-xl-8 col-xxl-9 ps-xl-5 mt-5 mt-xl-0">
                                <div class="row g-3 g-xxl-5 flex-between-center mb-3">
                                    <div class="col-12 col-xxl-auto">
                                        <h4> Chart Report </h4>
                                        <p class="mb-0">No. of bookings fulfilled &amp; cancelled</p>
                                    </div>
                                    <div class="col-12 col-xxl-auto">
                                        <div class="scrollbar">
                                            <div class="btn-group btn-group-sm stock-btn-group" role="group"
                                                aria-label="portfolio-chart-btn-group"><button
                                                    class="btn btn-phoenix-secondary" data-bar-filter="data-bar-filter"
                                                    data-value="1d">1D</button>
                                                <button class="btn btn-phoenix-secondary" data-bar-filter="data-bar-filter"
                                                    data-value="5d">5D</button>
                                                <button class="btn btn-phoenix-secondary" data-bar-filter="data-bar-filter"
                                                    data-value="1m">1M</button>
                                                <button class="btn btn-phoenix-secondary" data-bar-filter="data-bar-filter"
                                                    data-value="3m">3M</button>
                                                <button class="btn btn-phoenix-secondary" data-bar-filter="data-bar-filter"
                                                    data-value="6m">6M</button>
                                                <button class="btn btn-phoenix-secondary active"
                                                    data-bar-filter="data-bar-filter" data-value="1y">1Y</button>
                                                <button class="btn btn-phoenix-secondary"
                                                    data-bar-filter="data-bar-filter" data-value="all">All</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="echart-watchlist-report-chart" style="width: 100%; height: 250px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="nav nav-underline optionChainTableHeader fs-9 gap-0" id="watchlist-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link active pe-3" id="summary-tab" data-bs-toggle="tab"
                        href="#tab-summary" role="tab" aria-controls="tab-summary" aria-selected="true">Summary</a>
                </li>
                <li class="nav-item"> <a class="nav-link px-3" id="cashTransaction-tab" data-bs-toggle="tab"
                        href="#tab-cashTransaction" role="tab" aria-controls="tab-cashTransaction"
                        aria-selected="false">Cash Transaction </a></li>
                <li class="nav-item flex-1"> <a class="nav-link h-100 disabled" id="empty-tab1" data-bs-toggle="tab"
                        href="#empty-tab-1" role="tab" aria-selected="false"></a></li>
            </ul>
            <div class="tab-content mt-2" id="watchlist-tabContent">
                <div class="tab-pane fade show active" id="tab-summary" role="tabpanel" aria-labelledby="summary-tab">
                    <div class="mt-2" id="summeryTable"
                        data-list='{"valueNames":["symbol","lastPrice","change","priceAdds","volume","share","avgVolume","marketCap","actions"],"page":11}'>
                        <div class="table-responsive scrollbar">
                            <table class="table">
                                <thead>
                                    <tr class="text-uppercase text-body fw-bold fs-9">
                                        <th class="sort white-space-nowrap align-middle ps-0" scope="col"
                                            style="min-width:158px;" data-sort="symbol">Symbol</th>
                                        <th class="sort align-middle ps-3" scope="col" data-sort="lastPrice"
                                            style="min-width:158px;">Last Price</th>
                                        <th class="sort align-middle ps-3" scope="col" data-sort="change"
                                            style="min-width:158px;">Change</th>
                                        <th class="sort align-middle ps-0" scope="col" style="min-width:180px;"
                                            data-sort="priceAdds">Price When Addes</th>
                                        <th class="sort ps-3 align-middle" scope="col" style="min-width:120px;"
                                            data-sort="volume">volume</th>
                                        <th class="sort text-center align-middle" scope="col" style="min-width:158px;"
                                            data-sort="share">share</th>
                                        <th class="sort align-middle ps-5" scope="col" style="min-width:158px;"
                                            data-sort="avgVolume">Avg Volume</th>
                                        <th class="sort ps-4 align-middle" scope="col" style="min-width:158px;"
                                            data-sort="dayChart">Day Chart</th>
                                        <th class="sort align-middle text-end pe-5" scope="col"
                                            style="min-width:180px;" data-sort="marketCap">Market Cap</th>
                                        <th class="sort align-middle text-end pe-3" scope="col"
                                            style="min-width:158px;" data-sort="actions">actions</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    <tr>
                                        <td class="align-middle symbol white-space-nowrap">
                                            <p class="fw-semibold mb-0">AAPL</p>
                                        </td>
                                        <td class="align-middle lastPrice white-space-nowrap ps-3">
                                            <p class="fs-9 fw-semibold text-body-tertiary mb-0"> $230.76</p>
                                        </td>
                                        <td class="align-middle change ps-3 fs-9 text-success">
                                            <p class="fw-bold mb-1">+$0.42</p>
                                            <p class="mb-0">+0.35%</p>
                                        </td>
                                        <td class="align-middle priceAdds white-space-nowrap ps-0">
                                            <p class="fs-9 text-body-tertiary fw-semibold mb-0">$230.34</p>
                                        </td>
                                        <td class="align-middle volume white-space-nowrap ps-3">
                                            <p class="fs-9 text-body-tertiary mb-0">50.658M</p>
                                        </td>
                                        <td class="align-middle share white-space-nowrap text-center">
                                            <p class="fw-bold mb-0 fs-9 text-info">2</p>
                                        </td>
                                        <td class="align-middle text-center avgVolume ps-5">
                                            <p class="fs-9 text-body-tertiary mb-0">50.658M</p>
                                        </td>
                                        <td class="align-middle dayChart white-space-nowrap ps-4 py-2">
                                            <div class="echart-stock-overview-chart" style="width: 109px; height: 44px;"
                                                data-echarts='{"data":[70,50,85,45,200,193,196,210,198,210,103,120,84,95,130,123,214,245,287,348,356,390]}'>
                                            </div>
                                        </td>
                                        <td class="align-middle marketCap white-space-nowrap pe-5 text-end">
                                            <p class="fs-9 text-body-tertiary mb-0">3.518T</p>
                                        </td>
                                        <td class="align-middle actions white-space-nowrap pe-3 text-end"><button
                                                class="btn btn-link text-body-quaternary p-0 me-2"><span
                                                    class="fa-solid fa-file-invoice-dollar"></span></button>
                                            <button class="btn btn-link text-body-quaternary p-0"><span
                                                    class="fa-solid fa-trash"></span></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle symbol white-space-nowrap">
                                            <p class="fw-semibold mb-0">AMZN</p>
                                        </td>
                                        <td class="align-middle lastPrice white-space-nowrap ps-3">
                                            <p class="fs-9 fw-semibold text-body-tertiary mb-0"> $184.71</p>
                                        </td>
                                        <td class="align-middle change ps-3 fs-9 text-success">
                                            <p class="fw-bold mb-1">+$0.54</p>
                                            <p class="mb-0">+0.12%</p>
                                        </td>
                                        <td class="align-middle priceAdds white-space-nowrap ps-0">
                                            <p class="fs-9 text-body-tertiary fw-semibold mb-0">$184.19</p>
                                        </td>
                                        <td class="align-middle volume white-space-nowrap ps-3">
                                            <p class="fs-9 text-body-tertiary mb-0">34.16M</p>
                                        </td>
                                        <td class="align-middle share white-space-nowrap text-center"><button
                                                class="btn btn-phoenix-secondary btn-sm">Add</button></td>
                                        <td class="align-middle text-center avgVolume ps-5">
                                            <p class="fs-9 text-body-tertiary mb-0">34.16M</p>
                                        </td>
                                        <td class="align-middle dayChart white-space-nowrap ps-4 py-2">
                                            <div class="echart-stock-overview-mixed-chart"
                                                style="width: 109px; height: 44px;"
                                                data-echarts='{"data":[-100,190,200,-200,-190,300,-110,100,-100,250,200,190,-80,50,40,200,-200,200,150,160,300,-100]}'>
                                            </div>
                                        </td>
                                        <td class="align-middle marketCap white-space-nowrap pe-5 text-end">
                                            <p class="fs-9 text-body-tertiary mb-0">1.971T</p>
                                        </td>
                                        <td class="align-middle actions white-space-nowrap pe-3 text-end"><button
                                                class="btn btn-link text-body-quaternary p-0 me-2"><span
                                                    class="fa-solid fa-file-invoice-dollar"></span></button>
                                            <button class="btn btn-link text-body-quaternary p-0"><span
                                                    class="fa-solid fa-trash"></span></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle symbol white-space-nowrap">
                                            <p class="fw-semibold mb-0">TSLA</p>
                                        </td>
                                        <td class="align-middle lastPrice white-space-nowrap ps-3">
                                            <p class="fs-9 fw-semibold text-body-tertiary mb-0"> $213.65</p>
                                        </td>
                                        <td class="align-middle change ps-3 fs-9 text-danger">
                                            <p class="fw-bold mb-1">-$4.32</p>
                                            <p class="mb-0">-1.98%</p>
                                        </td>
                                        <td class="align-middle priceAdds white-space-nowrap ps-0">
                                            <p class="fs-9 text-body-tertiary fw-semibold mb-0">$217.97</p>
                                        </td>
                                        <td class="align-middle volume white-space-nowrap ps-3">
                                            <p class="fs-9 text-body-tertiary mb-0">74.38M</p>
                                        </td>
                                        <td class="align-middle share white-space-nowrap text-center"><button
                                                class="btn btn-phoenix-secondary btn-sm">Add</button></td>
                                        <td class="align-middle text-center avgVolume ps-5">
                                            <p class="fs-9 text-body-tertiary mb-0">74.38M</p>
                                        </td>
                                        <td class="align-middle dayChart white-space-nowrap ps-4 py-2">
                                            <div class="echart-stock-overview-chart" style="width: 109px; height: 44px;"
                                                data-echarts='{"data":[400,450,500,490,600,550,400,350,320,330,320,450,480,350,345,200,320,400]}'>
                                            </div>
                                        </td>
                                        <td class="align-middle marketCap white-space-nowrap pe-5 text-end">
                                            <p class="fs-9 text-body-tertiary mb-0">864.116B</p>
                                        </td>
                                        <td class="align-middle actions white-space-nowrap pe-3 text-end"><button
                                                class="btn btn-link text-body-quaternary p-0 me-2"><span
                                                    class="fa-solid fa-file-invoice-dollar"></span></button>
                                            <button class="btn btn-link text-body-quaternary p-0"><span
                                                    class="fa-solid fa-trash"></span></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle symbol white-space-nowrap">
                                            <p class="fw-semibold mb-0">NVDA</p>
                                        </td>
                                        <td class="align-middle lastPrice white-space-nowrap ps-3">
                                            <p class="fs-9 fw-semibold text-body-tertiary mb-0"> $121.78</p>
                                        </td>
                                        <td class="align-middle change ps-3 fs-9 text-success">
                                            <p class="fw-bold mb-1">+$0.12</p>
                                            <p class="mb-0">+0.09%</p>
                                        </td>
                                        <td class="align-middle priceAdds white-space-nowrap ps-0">
                                            <p class="fs-9 text-body-tertiary fw-semibold mb-0">$120.82</p>
                                        </td>
                                        <td class="align-middle volume white-space-nowrap ps-3">
                                            <p class="fs-9 text-body-tertiary mb-0">278.17M</p>
                                        </td>
                                        <td class="align-middle share white-space-nowrap text-center"><button
                                                class="btn btn-phoenix-secondary btn-sm">Add</button></td>
                                        <td class="align-middle text-center avgVolume ps-5">
                                            <p class="fs-9 text-body-tertiary mb-0">278.17M</p>
                                        </td>
                                        <td class="align-middle dayChart white-space-nowrap ps-4 py-2">
                                            <div class="echart-stock-overview-mixed-chart"
                                                style="width: 109px; height: 44px;"
                                                data-echarts='{"data":[-100,190,200,-200,-190,300,-110,100,-100,250,200,190,-80,50,40,200,-200,200,150,160,300,-100]}'>
                                            </div>
                                        </td>
                                        <td class="align-middle marketCap white-space-nowrap pe-5 text-end">
                                            <p class="fs-9 text-body-tertiary mb-0">3.472T</p>
                                        </td>
                                        <td class="align-middle actions white-space-nowrap pe-3 text-end"><button
                                                class="btn btn-link text-body-quaternary p-0 me-2"><span
                                                    class="fa-solid fa-file-invoice-dollar"></span></button>
                                            <button class="btn btn-link text-body-quaternary p-0"><span
                                                    class="fa-solid fa-trash"></span></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle symbol white-space-nowrap">
                                            <p class="fw-semibold mb-0">GOOG</p>
                                        </td>
                                        <td class="align-middle lastPrice white-space-nowrap ps-3">
                                            <p class="fs-9 fw-semibold text-body-tertiary mb-0"> $164.48</p>
                                        </td>
                                        <td class="align-middle change ps-3 fs-9 text-danger">
                                            <p class="fw-bold mb-1">-$2.34</p>
                                            <p class="mb-0">-1.40%</p>
                                        </td>
                                        <td class="align-middle priceAdds white-space-nowrap ps-0">
                                            <p class="fs-9 text-body-tertiary fw-semibold mb-0">$166.82</p>
                                        </td>
                                        <td class="align-middle volume white-space-nowrap ps-3">
                                            <p class="fs-9 text-body-tertiary mb-0">15.57M</p>
                                        </td>
                                        <td class="align-middle share white-space-nowrap text-center">
                                            <p class="fw-bold mb-0 fs-9 text-info">4</p>
                                        </td>
                                        <td class="align-middle text-center avgVolume ps-5">
                                            <p class="fs-9 text-body-tertiary mb-0">15.57M</p>
                                        </td>
                                        <td class="align-middle dayChart white-space-nowrap ps-4 py-2">
                                            <div class="echart-stock-overview-chart" style="width: 109px; height: 44px;"
                                                data-echarts='{"data":[70,50,85,45,200,193,196,210,198,210,103,120,84,95,130,123,214,245,287,348,356,390]}'>
                                            </div>
                                        </td>
                                        <td class="align-middle marketCap white-space-nowrap pe-5 text-end">
                                            <p class="fs-9 text-body-tertiary mb-0">2.013T</p>
                                        </td>
                                        <td class="align-middle actions white-space-nowrap pe-3 text-end"><button
                                                class="btn btn-link text-body-quaternary p-0 me-2"><span
                                                    class="fa-solid fa-file-invoice-dollar"></span></button>
                                            <button class="btn btn-link text-body-quaternary p-0"><span
                                                    class="fa-solid fa-trash"></span></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle symbol white-space-nowrap">
                                            <p class="fw-semibold mb-0">INTC</p>
                                        </td>
                                        <td class="align-middle lastPrice white-space-nowrap ps-3">
                                            <p class="fs-9 fw-semibold text-body-tertiary mb-0"> $21.98</p>
                                        </td>
                                        <td class="align-middle change ps-3 fs-9 text-danger">
                                            <p class="fw-bold mb-1">-$0.42</p>
                                            <p class="mb-0">-1.88%</p>
                                        </td>
                                        <td class="align-middle priceAdds white-space-nowrap ps-0">
                                            <p class="fs-9 text-body-tertiary fw-semibold mb-0">$23.89</p>
                                        </td>
                                        <td class="align-middle volume white-space-nowrap ps-3">
                                            <p class="fs-9 text-body-tertiary mb-0">82.86M</p>
                                        </td>
                                        <td class="align-middle share white-space-nowrap text-center"><button
                                                class="btn btn-phoenix-secondary btn-sm">Add</button></td>
                                        <td class="align-middle text-center avgVolume ps-5">
                                            <p class="fs-9 text-body-tertiary mb-0">82.86M</p>
                                        </td>
                                        <td class="align-middle dayChart white-space-nowrap ps-4 py-2">
                                            <div class="echart-stock-overview-mixed-chart"
                                                style="width: 109px; height: 44px;"
                                                data-echarts='{"data":[100,-190,200,-210,-190,300,-190,100,-100,250,200,190,-80,50,40,200,-200,200,150,160,300,-100]}'>
                                            </div>
                                        </td>
                                        <td class="align-middle marketCap white-space-nowrap pe-5 text-end">
                                            <p class="fs-9 text-body-tertiary mb-0">96.98B</p>
                                        </td>
                                        <td class="align-middle actions white-space-nowrap pe-3 text-end"><button
                                                class="btn btn-link text-body-quaternary p-0 me-2"><span
                                                    class="fa-solid fa-file-invoice-dollar"></span></button>
                                            <button class="btn btn-link text-body-quaternary p-0"><span
                                                    class="fa-solid fa-trash"></span></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle symbol white-space-nowrap">
                                            <p class="fw-semibold mb-0">GSPC</p>
                                        </td>
                                        <td class="align-middle lastPrice white-space-nowrap ps-3">
                                            <p class="fs-9 fw-semibold text-body-tertiary mb-0"> $184.71</p>
                                        </td>
                                        <td class="align-middle change ps-3 fs-9 text-success">
                                            <p class="fw-bold mb-1">+$0.54</p>
                                            <p class="mb-0">+0.12%</p>
                                        </td>
                                        <td class="align-middle priceAdds white-space-nowrap ps-0">
                                            <p class="fs-9 text-body-tertiary fw-semibold mb-0">$184.19</p>
                                        </td>
                                        <td class="align-middle volume white-space-nowrap ps-3">
                                            <p class="fs-9 text-body-tertiary mb-0">34.16M</p>
                                        </td>
                                        <td class="align-middle share white-space-nowrap text-center"><button
                                                class="btn btn-phoenix-secondary btn-sm">Add</button></td>
                                        <td class="align-middle text-center avgVolume ps-5">
                                            <p class="fs-9 text-body-tertiary mb-0">34.16M</p>
                                        </td>
                                        <td class="align-middle dayChart white-space-nowrap ps-4 py-2">
                                            <div class="echart-stock-overview-mixed-chart"
                                                style="width: 109px; height: 44px;"
                                                data-echarts='{"data":[-100,190,200,-200,-190,300,-110,100,-100,250,200,190,-80,50,40,200,-200,200,150,160,300,-100]}'>
                                            </div>
                                        </td>
                                        <td class="align-middle marketCap white-space-nowrap pe-5 text-end">
                                            <p class="fs-9 text-body-tertiary mb-0">1.971T</p>
                                        </td>
                                        <td class="align-middle actions white-space-nowrap pe-3 text-end"><button
                                                class="btn btn-link text-body-quaternary p-0 me-2"><span
                                                    class="fa-solid fa-file-invoice-dollar"></span></button>
                                            <button class="btn btn-link text-body-quaternary p-0"><span
                                                    class="fa-solid fa-trash"></span></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle symbol white-space-nowrap">
                                            <p class="fw-semibold mb-0">IBRX</p>
                                        </td>
                                        <td class="align-middle lastPrice white-space-nowrap ps-3">
                                            <p class="fs-9 fw-semibold text-body-tertiary mb-0"> $213.65</p>
                                        </td>
                                        <td class="align-middle change ps-3 fs-9 text-danger">
                                            <p class="fw-bold mb-1">-$4.32</p>
                                            <p class="mb-0">-1.98%</p>
                                        </td>
                                        <td class="align-middle priceAdds white-space-nowrap ps-0">
                                            <p class="fs-9 text-body-tertiary fw-semibold mb-0">$217.97</p>
                                        </td>
                                        <td class="align-middle volume white-space-nowrap ps-3">
                                            <p class="fs-9 text-body-tertiary mb-0">74.38</p>
                                        </td>
                                        <td class="align-middle share white-space-nowrap text-center"><button
                                                class="btn btn-phoenix-secondary btn-sm">Add</button></td>
                                        <td class="align-middle text-center avgVolume ps-5">
                                            <p class="fs-9 text-body-tertiary mb-0">74.38</p>
                                        </td>
                                        <td class="align-middle dayChart white-space-nowrap ps-4 py-2">
                                            <div class="echart-stock-overview-chart" style="width: 109px; height: 44px;"
                                                data-echarts='{"data":[400,450,500,490,600,550,400,350,320,330,320,450,480,350,345,200,320,400]}'>
                                            </div>
                                        </td>
                                        <td class="align-middle marketCap white-space-nowrap pe-5 text-end">
                                            <p class="fs-9 text-body-tertiary mb-0">864.116B</p>
                                        </td>
                                        <td class="align-middle actions white-space-nowrap pe-3 text-end"><button
                                                class="btn btn-link text-body-quaternary p-0 me-2"><span
                                                    class="fa-solid fa-file-invoice-dollar"></span></button>
                                            <button class="btn btn-link text-body-quaternary p-0"><span
                                                    class="fa-solid fa-trash"></span></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle symbol white-space-nowrap">
                                            <p class="fw-semibold mb-0">NIO</p>
                                        </td>
                                        <td class="align-middle lastPrice white-space-nowrap ps-3">
                                            <p class="fs-9 fw-semibold text-body-tertiary mb-0"> $121.78</p>
                                        </td>
                                        <td class="align-middle change ps-3 fs-9 text-success">
                                            <p class="fw-bold mb-1">+$0.12</p>
                                            <p class="mb-0">+0.09%</p>
                                        </td>
                                        <td class="align-middle priceAdds white-space-nowrap ps-0">
                                            <p class="fs-9 text-body-tertiary fw-semibold mb-0">$120.82</p>
                                        </td>
                                        <td class="align-middle volume white-space-nowrap ps-3">
                                            <p class="fs-9 text-body-tertiary mb-0">278.1M</p>
                                        </td>
                                        <td class="align-middle share white-space-nowrap text-center"><button
                                                class="btn btn-phoenix-secondary btn-sm">Add</button></td>
                                        <td class="align-middle text-center avgVolume ps-5">
                                            <p class="fs-9 text-body-tertiary mb-0">278.1M</p>
                                        </td>
                                        <td class="align-middle dayChart white-space-nowrap ps-4 py-2">
                                            <div class="echart-stock-overview-inverted-chart"
                                                style="width: 109px; height: 44px;"
                                                data-echarts='{"data":[-500,-300,-250,-280,-150,-250,-300,-180,-145,-250,-46,-250,-90,-80,-85,-150,-250,-180,-175,-50]}'>
                                            </div>
                                        </td>
                                        <td class="align-middle marketCap white-space-nowrap pe-5 text-end">
                                            <p class="fs-9 text-body-tertiary mb-0">3.472T</p>
                                        </td>
                                        <td class="align-middle actions white-space-nowrap pe-3 text-end"><button
                                                class="btn btn-link text-body-quaternary p-0 me-2"><span
                                                    class="fa-solid fa-file-invoice-dollar"></span></button>
                                            <button class="btn btn-link text-body-quaternary p-0"><span
                                                    class="fa-solid fa-trash"></span></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle symbol white-space-nowrap">
                                            <p class="fw-semibold mb-0">TLN</p>
                                        </td>
                                        <td class="align-middle lastPrice white-space-nowrap ps-3">
                                            <p class="fs-9 fw-semibold text-body-tertiary mb-0"> $164.48</p>
                                        </td>
                                        <td class="align-middle change ps-3 fs-9 text-danger">
                                            <p class="fw-bold mb-1">-$2.34</p>
                                            <p class="mb-0">-1.40%</p>
                                        </td>
                                        <td class="align-middle priceAdds white-space-nowrap ps-0">
                                            <p class="fs-9 text-body-tertiary fw-semibold mb-0">$166.82</p>
                                        </td>
                                        <td class="align-middle volume white-space-nowrap ps-3">
                                            <p class="fs-9 text-body-tertiary mb-0">15.57M</p>
                                        </td>
                                        <td class="align-middle share white-space-nowrap text-center"><button
                                                class="btn btn-phoenix-secondary btn-sm">Add</button></td>
                                        <td class="align-middle text-center avgVolume ps-5">
                                            <p class="fs-9 text-body-tertiary mb-0">15.57M</p>
                                        </td>
                                        <td class="align-middle dayChart white-space-nowrap ps-4 py-2">
                                            <div class="echart-stock-overview-chart" style="width: 109px; height: 44px;"
                                                data-echarts='{"data":[70,50,85,45,200,193,196,210,198,210,103,120,84,95,130,123,214,245,287,348,356,390]}'>
                                            </div>
                                        </td>
                                        <td class="align-middle marketCap white-space-nowrap pe-5 text-end">
                                            <p class="fs-9 text-body-tertiary mb-0">2.013T</p>
                                        </td>
                                        <td class="align-middle actions white-space-nowrap pe-3 text-end"><button
                                                class="btn btn-link text-body-quaternary p-0 me-2"><span
                                                    class="fa-solid fa-file-invoice-dollar"></span></button>
                                            <button class="btn btn-link text-body-quaternary p-0"><span
                                                    class="fa-solid fa-trash"></span></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle symbol white-space-nowrap">
                                            <p class="fw-semibold mb-0">ES=F</p>
                                        </td>
                                        <td class="align-middle lastPrice white-space-nowrap ps-3">
                                            <p class="fs-9 fw-semibold text-body-tertiary mb-0"> $21.98</p>
                                        </td>
                                        <td class="align-middle change ps-3 fs-9 text-danger">
                                            <p class="fw-bold mb-1">-$0.42</p>
                                            <p class="mb-0">-1.88%</p>
                                        </td>
                                        <td class="align-middle priceAdds white-space-nowrap ps-0">
                                            <p class="fs-9 text-body-tertiary fw-semibold mb-0">$23.89</p>
                                        </td>
                                        <td class="align-middle volume white-space-nowrap ps-3">
                                            <p class="fs-9 text-body-tertiary mb-0">82.86M</p>
                                        </td>
                                        <td class="align-middle share white-space-nowrap text-center"><button
                                                class="btn btn-phoenix-secondary btn-sm">Add</button></td>
                                        <td class="align-middle text-center avgVolume ps-5">
                                            <p class="fs-9 text-body-tertiary mb-0">82.86M</p>
                                        </td>
                                        <td class="align-middle dayChart white-space-nowrap ps-4 py-2">
                                            <div class="echart-stock-overview-chart" style="width: 109px; height: 44px;"
                                                data-echarts='{"data":[0,200,150,120,155,115,125,160,150,145,140,90,20,120,110,80,120,40,90,210,220]}'>
                                            </div>
                                        </td>
                                        <td class="align-middle marketCap white-space-nowrap pe-5 text-end">
                                            <p class="fs-9 text-body-tertiary mb-0">3.518T</p>
                                        </td>
                                        <td class="align-middle actions white-space-nowrap pe-3 text-end"><button
                                                class="btn btn-link text-body-quaternary p-0 me-2"><span
                                                    class="fa-solid fa-file-invoice-dollar"></span></button>
                                            <button class="btn btn-link text-body-quaternary p-0"><span
                                                    class="fa-solid fa-trash"></span></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-cashTransaction" role="tabpanel"
                    aria-labelledby="cashTransaction-tab">
                    <div class="row mt-4 flex-between-center">
                        <div class="col-auto">
                            <h4>Cash Transaction Report</h4>
                            <p class="mb-0 text-body-tertiary">Brief summary of all projects</p>
                        </div>
                        <div class="col-auto"> <button class="btn btn-phoenix-secondary btn-sm" type="button"
                                data-bs-toggle="modal" data-bs-target="#CashTransactionModal"><span
                                    class="fa-solid fa-add me-2"></span>Add Cash Transaction</button></div>
                    </div>
                    <div class="mt-2" id="cashTransactionTable"
                        data-list='{"valueNames":["date","type","amount","currency","note"],"page":11}'>
                        <div class="table-responsive scrollbar">
                            <table class="table">
                                <thead>
                                    <tr class="text-uppercase text-body fw-bold fs-9">
                                        <th class="sort white-space-nowrap align-middle ps-0" scope="col"
                                            style="min-width:240px;" data-sort="date">Date</th>
                                        <th class="sort align-middle ps-3" scope="col" data-sort="type"
                                            style="min-width:240px;">Type</th>
                                        <th class="sort align-middle ps-0" scope="col" data-sort="amount"
                                            style="min-width:140px;">amount</th>
                                        <th class="sort align-middle text-center" scope="col" style="min-width:120px;"
                                            data-sort="currency">currency</th>
                                        <th class="sort align-middle text-end" scope="col" style="min-width:350px;"
                                            data-sort="note">note</th>
                                        <th class="sort text-center align-middle" scope="col" style="min-width:72px;">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    <tr>
                                        <td class="align-middle date white-space-nowrap">
                                            <p class="fw-semibold mb-0">10 Nov, 2024</p>
                                        </td>
                                        <td class="align-middle type white-space-nowrap ps-3">
                                            <p class="fs-9 fw-semibold text-body-tertiary mb-0">Withdrawal</p>
                                        </td>
                                        <td class="align-middle amount ps-0">
                                            <p class="fw-semibold text-body-tertiary mb-0 fs-9">$230.34</p>
                                        </td>
                                        <td class="align-middle currency white-space-nowrap text-center">
                                            <p class="fs-9 text-body-tertiary mb-0">USD</p>
                                        </td>
                                        <td class="align-middle note white-space-nowrap text-end">
                                            <p class="fs-9 text-body-tertiary mb-0">Cash Withdrawal Completed</p>
                                        </td>
                                        <td class="align-middle note white-space-nowrap text-end"><button
                                                class="btn btn-link text-body-quaternary btn-sm p-0"><span
                                                    class="fa-solid fa-trash"></span></button></td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle date white-space-nowrap">
                                            <p class="fw-semibold mb-0">01 Nov, 2024</p>
                                        </td>
                                        <td class="align-middle type white-space-nowrap ps-3">
                                            <p class="fs-9 fw-semibold text-body-tertiary mb-0">Deposit</p>
                                        </td>
                                        <td class="align-middle amount ps-0">
                                            <p class="fw-semibold text-body-tertiary mb-0 fs-9">$184.19</p>
                                        </td>
                                        <td class="align-middle currency white-space-nowrap text-center">
                                            <p class="fs-9 text-body-tertiary mb-0">USD</p>
                                        </td>
                                        <td class="align-middle note white-space-nowrap text-end">
                                            <p class="fs-9 text-body-tertiary mb-0">Funds Withdrawn Successfully</p>
                                        </td>
                                        <td class="align-middle note white-space-nowrap text-end"><button
                                                class="btn btn-link text-body-quaternary btn-sm p-0"><span
                                                    class="fa-solid fa-trash"></span></button></td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle date white-space-nowrap">
                                            <p class="fw-semibold mb-0">23 Oct, 2024</p>
                                        </td>
                                        <td class="align-middle type white-space-nowrap ps-3">
                                            <p class="fs-9 fw-semibold text-body-tertiary mb-0">Income</p>
                                        </td>
                                        <td class="align-middle amount ps-0">
                                            <p class="fw-semibold text-body-tertiary mb-0 fs-9">$217.97</p>
                                        </td>
                                        <td class="align-middle currency white-space-nowrap text-center">
                                            <p class="fs-9 text-body-tertiary mb-0">USD</p>
                                        </td>
                                        <td class="align-middle note white-space-nowrap text-end">
                                            <p class="fs-9 text-body-tertiary mb-0">Withdrawal Confirmed</p>
                                        </td>
                                        <td class="align-middle note white-space-nowrap text-end"><button
                                                class="btn btn-link text-body-quaternary btn-sm p-0"><span
                                                    class="fa-solid fa-trash"></span></button></td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle date white-space-nowrap">
                                            <p class="fw-semibold mb-0">13 Oct, 2024</p>
                                        </td>
                                        <td class="align-middle type white-space-nowrap ps-3">
                                            <p class="fs-9 fw-semibold text-body-tertiary mb-0">Fee</p>
                                        </td>
                                        <td class="align-middle amount ps-0">
                                            <p class="fw-semibold text-body-tertiary mb-0 fs-9">$120.82</p>
                                        </td>
                                        <td class="align-middle currency white-space-nowrap text-center">
                                            <p class="fs-9 text-body-tertiary mb-0">CAD</p>
                                        </td>
                                        <td class="align-middle note white-space-nowrap text-end">
                                            <p class="fs-9 text-body-tertiary mb-0">Cash Disbursed</p>
                                        </td>
                                        <td class="align-middle note white-space-nowrap text-end"><button
                                                class="btn btn-link text-body-quaternary btn-sm p-0"><span
                                                    class="fa-solid fa-trash"></span></button></td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle date white-space-nowrap">
                                            <p class="fw-semibold mb-0">03 Oct, 2024</p>
                                        </td>
                                        <td class="align-middle type white-space-nowrap ps-3">
                                            <p class="fs-9 fw-semibold text-body-tertiary mb-0">Withdrawal</p>
                                        </td>
                                        <td class="align-middle amount ps-0">
                                            <p class="fw-semibold text-body-tertiary mb-0 fs-9">$166.82</p>
                                        </td>
                                        <td class="align-middle currency white-space-nowrap text-center">
                                            <p class="fs-9 text-body-tertiary mb-0">CAD</p>
                                        </td>
                                        <td class="align-middle note white-space-nowrap text-end">
                                            <p class="fs-9 text-body-tertiary mb-0">Withdrawal Request Fulfilled</p>
                                        </td>
                                        <td class="align-middle note white-space-nowrap text-end"><button
                                                class="btn btn-link text-body-quaternary btn-sm p-0"><span
                                                    class="fa-solid fa-trash"></span></button></td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle date white-space-nowrap">
                                            <p class="fw-semibold mb-0">23 Sep, 2024</p>
                                        </td>
                                        <td class="align-middle type white-space-nowrap ps-3">
                                            <p class="fs-9 fw-semibold text-body-tertiary mb-0">Deposit</p>
                                        </td>
                                        <td class="align-middle amount ps-0">
                                            <p class="fw-semibold text-body-tertiary mb-0 fs-9">$23.89</p>
                                        </td>
                                        <td class="align-middle currency white-space-nowrap text-center">
                                            <p class="fs-9 text-body-tertiary mb-0">CAD</p>
                                        </td>
                                        <td class="align-middle note white-space-nowrap text-end">
                                            <p class="fs-9 text-body-tertiary mb-0">Withdrawal Processed</p>
                                        </td>
                                        <td class="align-middle note white-space-nowrap text-end"><button
                                                class="btn btn-link text-body-quaternary btn-sm p-0"><span
                                                    class="fa-solid fa-trash"></span></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="CashTransactionModal" role="dialog" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-600">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <h4 class="text-body-highlight mb-0">Add Transaction </h4><button
                                class="btn btn-link text-danger fs-9 ms-auto p-1" type="button" data-bs-dismiss="modal"
                                aria-label="Close"><span class="fa-solid fa-xmark"></span></button>
                        </div>
                        <div class="modal-body">
                            <div class="bg-body-highlight rounded-3 row g-0 gap-3 p-3 flex-between-center mb-4">
                                <div class="col-auto">
                                    <p class="fw-bold mb-0">Stock Name : Apple Inc</p>
                                </div>
                                <div class="col-auto">
                                    <p class="fw-bold mb-0">NASDAQ : AAPL</p>
                                </div>
                            </div>
                            <div class="row g-3 form">
                                <div class="col-sm-6"> <label class="fw-bold text-body-highlight mb-2">Type
                                    </label><select class="form-select" name="type">
                                        <option value="buy">Buy </option>
                                        <option value="sell">Sell </option>
                                        <option value="hold">Hold </option>
                                    </select></div>
                                <div class="col-sm-6"> <label class="fw-bold text-body-highlight mb-2">Date </label>
                                    <div class="position-relative flatpickr-input-container"><input
                                            class="form-control form-control-sm datetimepicker px-5" type="text"
                                            placeholder="dd/mm/yyyy" data-options='{"disableMobile":true}'><span
                                            class="fa-solid fa-calendar-alt text-body position-absolute top-50 translate-middle-y fs-9"
                                            style="left: 1rem;"> </span></div>
                                </div>
                                <div class="col-sm-6"> <label class="fw-bold text-body-highlight mb-2">Cost per
                                        share</label><input class="form-control input-spin-none" type="number"
                                        name="costPerShare" placeholder="Enter cost per Share..."></div>
                                <div class="col-sm-6"> <label class="fw-bold text-body-highlight mb-2"
                                        for="currency">Currency </label><select class="form-select" id="currency"
                                        name="currency">
                                        <option value="usd">USD </option>
                                        <option value="cad">CAD </option>
                                        <option value="yen">YEN </option>
                                    </select></div>
                                <div class="col-sm-6"> <label class="fw-bold text-body-highlight mb-2">Share
                                        Quantity</label><input class="form-control input-spin-none" type="number"
                                        name="shareQuantity" placeholder="Enter share quantity..."></div>
                                <div class="col-sm-6"> <label class="fw-bold text-body-highlight mb-2">Commission
                                    </label><select class="form-select" name="commission">
                                        <option value="">Select </option>
                                        <option value="20%">20% </option>
                                        <option value="25%">25%</option>
                                    </select></div>
                                <div class="col-12 mb-4"> <label class="fw-bold text-body-highlight mb-2">Note
                                    </label><input class="form-control" type="text" name="note"
                                        placeholder="Write a note..."><span class="text-end fs-8 lh-sm mt-2 d-block">
                                        <span class="text-primary fw-semibold">15</span><span
                                            class="text-body-quaternary">/16</span></span></div>
                                <div class="col-12">
                                    <div class="row flex-between-center g-3 border-top border-dashed">
                                        <div class="col-auto">
                                            <h4 class="mb-0">Total Cost: </h4>
                                        </div>
                                        <div class="col-auto">
                                            <h4 class="mb-0">$562.08</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-end"><button class="btn btn-link text-secondary btn-sm"
                                        type="button">Cancel </button>
                                    <button class="btn btn-primary btn-sm" type="submit"> Add Transaction</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('vendors/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('vendors/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/stock-portfolio-watchlist.js') }}"></script>
@endpush
