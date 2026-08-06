@extends('layouts.vertical')

@section('title', 'Portfolio')

@push('styles')
<link href="{{ asset('vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
@endpush

@section('content')
<nav class="mb-3" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
            <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
            <li class="breadcrumb-item active">Default</li>
          </ol>
        </nav>
        <div class="row flex-between-center g-3 g-lg-5 mb-3">
          <div class="col-auto">
            <h2 class="mb-0">My Portfolio</h2>
          </div>
          <div class="col-auto"> <button class="btn btn-phoenix-secondary bg-body-emphasis me-2">Create new Portfolio <span class="fa-solid fa-add ms-2"> </span></button>
            <button class="btn btn-phoenix-secondary bg-body-emphasis btn-sm px-md-4"><span class="fa-solid fa-print"> </span><span class="d-none d-md-inline ms-2"> Print</span></button>
            <button class="btn btn-sm btn-phoenix-secondary bg-body-emphasis d-xl-none ms-2" id="portfolioOffcanvas" data-bs-toggle="offcanvas" data-bs-target="#portfolioSidebar" aria-controls="portfolioSidebar"><span class="fa-solid fa-mattress-pillow"></span></button>
          </div>
        </div>
        <div class="row g-3 g-lg-5 pb-5 pb-md-7 pb-xl-9">
          <div class="col-xl-7 flex-1">
            <div class="card mb-4">
              <div class="card-body">
                <div class="row justify-content-between g-3 g-xxl-5 pb-4 pb-md-5">
                  <div class="col-12">
                    <h5 class="text-body">All Portfolio Holding</h5>
                    <h4 class="text-body mb-0">$12,000.00</h4>
                  </div>
                  <div class="col-12">
                    <div class="scrollbar">
                      <div class="row g-0 flex-nowrap">
                        <div class="col-auto border-end pe-4">
                          <h6 class="text-body-tertiary">Cash Holding</h6>
                          <div class="d-flex gap-2 align-items-center">
                            <p class="mb-0 fw-bold">$1.1K</p>
                            <div class="badge badge-phoenix fs-10 badge-phoenix-success"> +1.71%</div>
                          </div>
                        </div>
                        <div class="col-auto px-4 border-end">
                          <h6 class="text-body-tertiary">Day Change</h6>
                          <div class="d-flex gap-2 align-items-center">
                            <p class="mb-0 fw-bold text-danger">-$1.3K</p>
                            <div class="badge badge-phoenix fs-10 badge-phoenix-danger"> +1.71%</div>
                          </div>
                        </div>
                        <div class="col-auto border-end px-4">
                          <h6 class="text-body-tertiary">Unrealized Gain/Loss</h6>
                          <div class="d-flex gap-2 align-items-center">
                            <p class="mb-0 fw-bold text-danger">-$5.5K</p>
                            <div class="badge badge-phoenix fs-10 badge-phoenix-danger"> +1.71%</div>
                          </div>
                        </div>
                        <div class="col-auto px-4">
                          <h6 class="text-body-tertiary">Realized Gain/Loss</h6>
                          <div class="d-flex gap-2 align-items-center">
                            <p class="mb-0 fw-bold text-success">+$3.5K</p>
                            <div class="badge badge-phoenix fs-10 badge-phoenix-success"> +1.71%</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row flex-between-center g-3 mb-4">
                  <div class="col-12 col-xxl-auto">
                    <h4>Portfolio Chart</h4>
                    <p class="mb-0">No. of bookings fulfilled &amp; cancelled</p>
                  </div>
                  <div class="col-12 col-xxl-auto">
                    <div class="scrollbar">
                      <div class="btn-group btn-group-sm stock-btn-group" role="group" aria-label="portfolio-chart-btn-group"><button class="btn btn-phoenix-secondary" data-line-filter="data-line-filter" data-value="1d">1D</button>
                        <button class="btn btn-phoenix-secondary" data-line-filter="data-line-filter" data-value="5d">5D</button>
                        <button class="btn btn-phoenix-secondary" data-line-filter="data-line-filter" data-value="1m">1M</button>
                        <button class="btn btn-phoenix-secondary" data-line-filter="data-line-filter" data-value="3m">3M</button>
                        <button class="btn btn-phoenix-secondary" data-line-filter="data-line-filter" data-value="6m">6M</button>
                        <button class="btn btn-phoenix-secondary active" data-line-filter="data-line-filter" data-value="1y">1Y</button>
                        <button class="btn btn-phoenix-secondary" data-line-filter="data-line-filter" data-value="all">All</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="echart-portfolio-line-chart" style="width: 100%; min-height:25rem;"></div>
              </div>
            </div>
            <div class="row g-4">
              <div class="col-12">
                <h4>My Portfolio </h4>
                <p class="text-body-tertiary mb-0">Brief summary of all projects</p>
              </div>
              <div class="col-12">
                <div id="portfolioTable" data-list='{"valueNames":["portfolioName","symbols","costBasis","marketValue","dayChange","unrealized","realized"],"page":7}'>
                  <div class="table-responsive scrollbar">
                    <table class="table mb-0">
                      <thead>
                        <tr class="text-uppercase border-top text-body fw-bold fs-9">
                          <th class="sort white-space-nowrap align-middle ps-0" scope="col" style="min-width:180px;" data-sort="portfolioName">Portfolio Name</th>
                          <th class="sort align-middle text-center" scope="col" data-sort="symbols" style="min-width:120px;">symbols</th>
                          <th class="sort align-middle ps-3" scope="col" data-sort="costBasis" style="min-width:150px;">cost basis</th>
                          <th class="sort align-middle ps-3" scope="col" style="min-width:160px;" data-sort="marketValue">Market value</th>
                          <th class="sort ps-3 align-middle" scope="col" style="min-width:140px;" data-sort="dayChange">Day Change</th>
                          <th class="sort pe-3 text-end align-middle" scope="col" style="min-width:220px;" data-sort="unrealized">Unrealized gain / loss</th>
                          <th class="sort align-middle text-end" scope="col" style="min-width:180px;" data-sort="realized">realized gain / loss</th>
                        </tr>
                      </thead>
                      <tbody class="list">
                        <tr>
                          <td class="align-middle portfolioName white-space-nowrap">
                            <p class="fw-semibold mb-0">My Watchlist</p>
                          </td>
                          <td class="align-middle symbols white-space-nowrap text-center">
                            <p class="fs-9 fw-semibold text-body-tertiary mb-0">11</p>
                          </td>
                          <td class="align-middle text-center costBasis ps-3">
                            <p class="fs-9 text-body-tertiary mb-0">$26,514.56</p>
                          </td>
                          <td class="align-middle marketValue white-space-nowrap ps-3">
                            <p class="fs-9 text-body-tertiary mb-0">$3.46 T</p>
                          </td>
                          <td class="align-middle dayChange white-space-nowrap ps-3">
                            <div class="text-success">
                              <p class="fs-9 fw-bold mb-1">+$978.90</p>
                              <p class="fs-9 fw-bold mb-1">+0.74%</p>
                            </div>
                          </td>
                          <td class="align-middle unrealized white-space-nowrap text-end pe-3">
                            <div class="text-success">
                              <p class="fs-9 fw-bold mb-1">+$2,429.49</p>
                              <p class="fs-9 fw-bold mb-1">+0.74%</p>
                            </div>
                          </td>
                          <td class="align-middle realized white-space-nowrap text-end">
                            <div class="text-danger">
                              <p class="fs-9 fw-bold mb-1">-$321.42</p>
                              <p class="fs-9 fw-bold mb-1">-0.74%</p>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle portfolioName white-space-nowrap">
                            <p class="fw-semibold mb-0">Phoenix Growth Fund</p>
                          </td>
                          <td class="align-middle symbols white-space-nowrap text-center">
                            <p class="fs-9 fw-semibold text-body-tertiary mb-0">14</p>
                          </td>
                          <td class="align-middle text-center costBasis ps-3">
                            <p class="fs-9 text-body-tertiary mb-0">$95,987.90</p>
                          </td>
                          <td class="align-middle marketValue white-space-nowrap ps-3">
                            <p class="fs-9 text-body-tertiary mb-0">$2.02 T</p>
                          </td>
                          <td class="align-middle dayChange white-space-nowrap ps-3">
                            <div class="text-success">
                              <p class="fs-9 fw-bold mb-1">+$872.96</p>
                              <p class="fs-9 fw-bold mb-1">+0.74%</p>
                            </div>
                          </td>
                          <td class="align-middle unrealized white-space-nowrap text-end pe-3">
                            <div class="text-danger">
                              <p class="fs-9 fw-bold mb-1">-$60.95</p>
                              <p class="fs-9 fw-bold mb-1">-0.74%</p>
                            </div>
                          </td>
                          <td class="align-middle realized white-space-nowrap text-end">
                            <div class="text-danger">
                              <p class="fs-9 fw-bold mb-1">-$23.42</p>
                              <p class="fs-9 fw-bold mb-1">-1.98%</p>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle portfolioName white-space-nowrap">
                            <p class="fw-semibold mb-0">Titanium Edge</p>
                          </td>
                          <td class="align-middle symbols white-space-nowrap text-center">
                            <p class="fs-9 fw-semibold text-body-tertiary mb-0">8</p>
                          </td>
                          <td class="align-middle text-center costBasis ps-3">
                            <p class="fs-9 text-body-tertiary mb-0">$30,675.98</p>
                          </td>
                          <td class="align-middle marketValue white-space-nowrap ps-3">
                            <p class="fs-9 text-body-tertiary mb-0">$1.98 T</p>
                          </td>
                          <td class="align-middle dayChange white-space-nowrap ps-3">
                            <div class="text-success">
                              <p class="fs-9 fw-bold mb-1">+$823.12</p>
                              <p class="fs-9 fw-bold mb-1">+0.74%</p>
                            </div>
                          </td>
                          <td class="align-middle unrealized white-space-nowrap text-end pe-3">
                            <div class="text-success">
                              <p class="fs-9 fw-bold mb-1">+$639.12</p>
                              <p class="fs-9 fw-bold mb-1">+2.15%</p>
                            </div>
                          </td>
                          <td class="align-middle realized white-space-nowrap text-end">
                            <div class="text-success">
                              <p class="fs-9 fw-bold mb-1">+$98.86</p>
                              <p class="fs-9 fw-bold mb-1">+2.74%</p>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle portfolioName white-space-nowrap">
                            <p class="fw-semibold mb-0">Apex Capital</p>
                          </td>
                          <td class="align-middle symbols white-space-nowrap text-center">
                            <p class="fs-9 fw-semibold text-body-tertiary mb-0">9</p>
                          </td>
                          <td class="align-middle text-center costBasis ps-3">
                            <p class="fs-9 text-body-tertiary mb-0">$12,789.98</p>
                          </td>
                          <td class="align-middle marketValue white-space-nowrap ps-3">
                            <p class="fs-9 text-body-tertiary mb-0">$3.09 T</p>
                          </td>
                          <td class="align-middle dayChange white-space-nowrap ps-3">
                            <div class="text-success">
                              <p class="fs-9 fw-bold mb-1">+$129.21</p>
                              <p class="fs-9 fw-bold mb-1">+0.74%</p>
                            </div>
                          </td>
                          <td class="align-middle unrealized white-space-nowrap text-end pe-3">
                            <div class="text-danger">
                              <p class="fs-9 fw-bold mb-1">-$978.99</p>
                              <p class="fs-9 fw-bold mb-1">-0.54%</p>
                            </div>
                          </td>
                          <td class="align-middle realized white-space-nowrap text-end">
                            <div class="text-danger">
                              <p class="fs-9 fw-bold mb-1">-$61.93</p>
                              <p class="fs-9 fw-bold mb-1">-2.74%</p>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle portfolioName white-space-nowrap">
                            <p class="fw-semibold mb-0">Blue Horizon Fund</p>
                          </td>
                          <td class="align-middle symbols white-space-nowrap text-center">
                            <p class="fs-9 fw-semibold text-body-tertiary mb-0">11</p>
                          </td>
                          <td class="align-middle text-center costBasis ps-3">
                            <p class="fs-9 text-body-tertiary mb-0">$2,787.49</p>
                          </td>
                          <td class="align-middle marketValue white-space-nowrap ps-3">
                            <p class="fs-9 text-body-tertiary mb-0">$5,815.03</p>
                          </td>
                          <td class="align-middle dayChange white-space-nowrap ps-3">
                            <div class="text-success">
                              <p class="fs-9 fw-bold mb-1">+$312.95</p>
                              <p class="fs-9 fw-bold mb-1">+0.74%</p>
                            </div>
                          </td>
                          <td class="align-middle unrealized white-space-nowrap text-end pe-3">
                            <div class="text-success">
                              <p class="fs-9 fw-bold mb-1">+$125.42</p>
                              <p class="fs-9 fw-bold mb-1">+1.74%</p>
                            </div>
                          </td>
                          <td class="align-middle realized white-space-nowrap text-end">
                            <div class="text-success">
                              <p class="fs-9 fw-bold mb-1">+$100.90</p>
                              <p class="fs-9 fw-bold mb-1">+5.74%</p>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle portfolioName white-space-nowrap">
                            <p class="fw-semibold mb-0">Navigator Fund</p>
                          </td>
                          <td class="align-middle symbols white-space-nowrap text-center">
                            <p class="fs-9 fw-semibold text-body-tertiary mb-0">17</p>
                          </td>
                          <td class="align-middle text-center costBasis ps-3">
                            <p class="fs-9 text-body-tertiary mb-0">$5,987.98</p>
                          </td>
                          <td class="align-middle marketValue white-space-nowrap ps-3">
                            <p class="fs-9 text-body-tertiary mb-0">$589.95</p>
                          </td>
                          <td class="align-middle dayChange white-space-nowrap ps-3">
                            <p class="text-body-tertiary mb-0 fw-bold">---</p>
                          </td>
                          <td class="align-middle unrealized white-space-nowrap text-end pe-3">
                            <p class="text-body-tertiary mb-0 fw-bold">---</p>
                          </td>
                          <td class="align-middle realized white-space-nowrap text-end">
                            <div class="text-success">
                              <p class="fs-9 fw-bold mb-1">+$72.42</p>
                              <p class="fs-9 fw-bold mb-1">+1.51%</p>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle portfolioName white-space-nowrap">
                            <p class="fw-semibold mb-0">Equity Elevation</p>
                          </td>
                          <td class="align-middle symbols white-space-nowrap text-center">
                            <p class="fs-9 fw-semibold text-body-tertiary mb-0">21</p>
                          </td>
                          <td class="align-middle text-center costBasis ps-3">
                            <p class="fs-9 text-body-tertiary mb-0">$19,845.37</p>
                          </td>
                          <td class="align-middle marketValue white-space-nowrap ps-3">
                            <p class="fs-9 text-body-tertiary mb-0">$3.32 T</p>
                          </td>
                          <td class="align-middle dayChange white-space-nowrap ps-3">
                            <div class="text-danger">
                              <p class="fs-9 fw-bold mb-1">-$120.31</p>
                              <p class="fs-9 fw-bold mb-1">-1.74%</p>
                            </div>
                          </td>
                          <td class="align-middle unrealized white-space-nowrap text-end pe-3">
                            <div class="text-success">
                              <p class="fs-9 fw-bold mb-1">+$2,429.49</p>
                              <p class="fs-9 fw-bold mb-1">+0.51%</p>
                            </div>
                          </td>
                          <td class="align-middle realized white-space-nowrap text-end">
                            <p class="text-body-tertiary mb-0 fw-bold">---</p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-5 portfolio-sidebar-container">
            <div class="offcanvas offcanvas-end stock-offcanvas-xl bg-body-emphasis border-xl rounded-xl scrollbar" id="portfolioSidebar" tabindex="-1" aria-labelledby="portfolioOffcanvas">
              <div class="offcanvas-body p-0">
                <div class="card border-0">
                  <div class="card-body">
                    <div class="row flex-between-center mb-4">
                      <div class="col-auto col-xl-12">
                        <h4 class="mb-0 text-body-highlight text-xl-center">Quote Lookup</h4>
                      </div>
                      <div class="col-auto d-xl-none"> <button class="btn btn-link btn-sm fs-8 p-0 text-body-secondary" data-bs-dismiss="offcanvas" aria-label="close"><span class="fa-solid fa-xmark"></span></button></div>
                    </div>
                    <div class="search-box w-100 mb-3">
                      <form class="position-relative"><input class="form-control search-input search" type="search" placeholder="Search symbol" aria-label="Search">
                        <span class="fas fa-search search-box-icon"></span>
                      </form>
                    </div>
                    <div class="table-responsive scrollbar overflow-x-hidden">
                      <table class="table mb-0">
                        <tbody class="border-top">
                          <tr>
                            <td class="align-middle white-space-nowrap" style="min-width: 112px;">
                              <p class="mb-0 fw-semibold text-uppercase">AAPL</p>
                            </td>
                            <td class="align-middle white-space-nowrap" style="min-width: 112px;">
                              <h5 class="text-body">$232.98</h5>
                              <p class="fs-9 mb-0 text-success"><span class="me-1 fw-bold">+$0.42</span><span>+0.35%</span></p>
                            </td>
                            <td class="align-middle white-space-nowrap d-flex justify-content-end justify-content-xl-start align-items-center" style="min-width: 112px;">
                              <div class="echart-stock-overview-chart" style="width: 80px; min-height: 44px" data-echarts='{"data":[70,50,85,45,200,193,196,210,198,210,103,120,84,95,130,123,214,245,287,348,356,390]}'></div>
                            </td>
                          </tr>
                          <tr>
                            <td class="align-middle white-space-nowrap" style="min-width: 112px;">
                              <p class="mb-0 fw-semibold text-uppercase">Tsla</p>
                            </td>
                            <td class="align-middle white-space-nowrap" style="min-width: 112px;">
                              <h5 class="text-body">$269.19</h5>
                              <p class="fs-9 mb-0 text-danger"><span class="me-1 fw-bold">-$0.42</span><span>-0.35%</span></p>
                            </td>
                            <td class="align-middle white-space-nowrap d-flex justify-content-end justify-content-xl-start align-items-center" style="min-width: 112px;">
                              <div class="echart-stock-overview-mixed-chart" style="width: 80px; min-height: 44px" data-echarts='{"data":[-100,190,200,-200,-190,300,-110,100,-100,250,200,190,-80,50,40,200,-200,200,150,160,300,-100]}'></div>
                            </td>
                          </tr>
                          <tr>
                            <td class="align-middle white-space-nowrap" style="min-width: 112px;">
                              <p class="mb-0 fw-semibold text-uppercase">NVDA</p>
                            </td>
                            <td class="align-middle white-space-nowrap" style="min-width: 112px;">
                              <h5 class="text-body">$141.54</h5>
                              <p class="fs-9 mb-0 text-success"><span class="me-1 fw-bold">+$0.42</span><span>+0.35%</span></p>
                            </td>
                            <td class="align-middle white-space-nowrap d-flex justify-content-end justify-content-xl-start align-items-center" style="min-width: 112px;">
                              <div class="echart-stock-overview-chart" style="width: 80px; min-height: 44px" data-echarts='{"data":[400,450,500,490,600,550,400,350,320,330,320,450,480,350,345,200,320,400]}'></div>
                            </td>
                          </tr>
                          <tr>
                            <td class="align-middle white-space-nowrap" style="min-width: 112px;">
                              <p class="mb-0 fw-semibold text-uppercase">AMZN</p>
                            </td>
                            <td class="align-middle white-space-nowrap" style="min-width: 112px;">
                              <h5 class="text-body">$187.83</h5>
                              <p class="fs-9 mb-0 text-danger"><span class="me-1 fw-bold">-$2.42</span><span>-2.35%</span></p>
                            </td>
                            <td class="align-middle white-space-nowrap d-flex justify-content-end justify-content-xl-start align-items-center" style="min-width: 112px;">
                              <div class="echart-stock-overview-inverted-chart" style="width: 80px; min-height: 44px" data-echarts='{"data":[-500,-300,-250,-280,-150,-250,-300,-180,-145,-250,-46,-250,-90,-80,-85,-150,-250,-180,-175,-50]}'></div>
                            </td>
                          </tr>
                          <tr>
                            <td class="align-middle white-space-nowrap" style="min-width: 112px;">
                              <p class="mb-0 fw-semibold text-uppercase">MSFT</p>
                            </td>
                            <td class="align-middle white-space-nowrap" style="min-width: 112px;">
                              <h5 class="text-body">$428.15</h5>
                              <p class="fs-9 mb-0 text-success"><span class="me-1 fw-bold">+$5.42</span><span>+1.21%</span></p>
                            </td>
                            <td class="align-middle white-space-nowrap d-flex justify-content-end justify-content-xl-start align-items-center" style="min-width: 112px;">
                              <div class="echart-stock-overview-chart" style="width: 80px; min-height: 44px" data-echarts='{"data":[70,50,85,45,200,193,196,210,198,210,103,120,84,95,130,123,214,245,287,348,356,390]}'></div>
                            </td>
                          </tr>
                          <tr>
                            <td class="align-middle white-space-nowrap" style="min-width: 112px;">
                              <p class="mb-0 fw-semibold text-uppercase">GOOG</p>
                            </td>
                            <td class="align-middle white-space-nowrap" style="min-width: 112px;">
                              <h5 class="text-body">$232.98</h5>
                              <p class="fs-9 mb-0 text-success"><span class="me-1 fw-bold">+$0.42</span><span>+0.54%</span></p>
                            </td>
                            <td class="align-middle white-space-nowrap d-flex justify-content-end justify-content-xl-start align-items-center" style="min-width: 112px;">
                              <div class="echart-stock-overview-chart" style="width: 80px; min-height: 44px" data-echarts='{"data":[400,450,500,490,600,550,400,350,320,330,320,450,480,350,345,200,320,400]}'></div>
                            </td>
                          </tr>
                          <tr>
                            <td class="align-middle white-space-nowrap" style="min-width: 112px;">
                              <p class="mb-0 fw-semibold text-uppercase">ADBE</p>
                            </td>
                            <td class="align-middle white-space-nowrap" style="min-width: 112px;">
                              <h5 class="text-body">$166.99</h5>
                              <p class="fs-9 mb-0 text-success"><span class="me-1 fw-bold">+$1.11</span><span>+0.35%</span></p>
                            </td>
                            <td class="align-middle white-space-nowrap d-flex justify-content-end justify-content-xl-start align-items-center" style="min-width: 112px;">
                              <div class="echart-stock-overview-inverted-chart" style="width: 80px; min-height: 44px" data-echarts='{"data":[-500,-300,-250,-280,-150,-250,-300,-180,-145,-250,-46,-250,-90,-80,-85,-150,-250,-180,-175,-50]}'></div>
                            </td>
                          </tr>
                          <tr>
                            <td class="align-middle white-space-nowrap" style="min-width: 112px;">
                              <p class="mb-0 fw-semibold text-uppercase">AMD</p>
                            </td>
                            <td class="align-middle white-space-nowrap" style="min-width: 112px;">
                              <h5 class="text-body">$156.23</h5>
                              <p class="fs-9 mb-0 text-danger"><span class="me-1 fw-bold">-$0.42</span><span>-0.35%</span></p>
                            </td>
                            <td class="align-middle white-space-nowrap d-flex justify-content-end justify-content-xl-start align-items-center" style="min-width: 112px;">
                              <div class="echart-stock-overview-mixed-chart" style="width: 80px; min-height: 44px" data-echarts='{"data":[-120,200,230,-230,-190,300,-110,100,-100,250,200,190,-80,80,50,200,-200,220,150,140,310,-150]}'></div>
                            </td>
                          </tr>
                          <tr>
                            <td class="align-middle white-space-nowrap" style="min-width: 112px;">
                              <p class="mb-0 fw-semibold text-uppercase">NFLX</p>
                            </td>
                            <td class="align-middle white-space-nowrap" style="min-width: 112px;">
                              <h5 class="text-body">$754.68</h5>
                              <p class="fs-9 mb-0 text-success"><span class="me-1 fw-bold">+$0.42</span><span>+0.35%</span></p>
                            </td>
                            <td class="align-middle white-space-nowrap d-flex justify-content-end justify-content-xl-start align-items-center" style="min-width: 112px;">
                              <div class="echart-stock-overview-chart" style="width: 80px; min-height: 44px" data-echarts='{"data":[390,356,348,287,245,214,123,130,95,84,120,103,210,198,210,196,193,200,45,85,70,50]}'></div>
                            </td>
                          </tr>
                          <tr>
                            <td class="align-middle white-space-nowrap" style="min-width: 112px;">
                              <p class="mb-0 fw-semibold text-uppercase">NDQA</p>
                            </td>
                            <td class="align-middle white-space-nowrap" style="min-width: 112px;">
                              <h5 class="text-body">$74.69</h5>
                              <p class="fs-9 mb-0 text-danger"><span class="me-1 fw-bold">-$0.42</span><span>-0.35%</span></p>
                            </td>
                            <td class="align-middle white-space-nowrap d-flex justify-content-end justify-content-xl-start align-items-center" style="min-width: 112px;">
                              <div class="echart-stock-overview-chart" style="width: 80px; min-height: 44px" data-echarts='{"data":[500,450,600,690,700,550,400,450,480,450,445,300,420,600]}'></div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
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
<script src="{{ asset('assets/js/pages/stock-portfolio-watchlist.js') }}"></script>
@endpush
