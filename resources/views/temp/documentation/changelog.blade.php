@extends('layouts.vertical')

@section('title', 'Changelog')

@push('styles')
<link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
<h2 class="mb-2 lh-sm">Changelog</h2>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.24.0</code> - Emberion</h5>
            <p class="mb-0">02 November, 2025</p>
          </div>
          <div class="card-body">
            <h6 class="mb-2">Update</h6>
            <ul class="bullet-inside ps-0">
              <li>PACKAGE : @googlemaps/markerclusterer <code>2.5.3 </code>to <code>2.6.2</code></li>
              <li>PACKAGE : bigpicture <code>2.6.3 </code>to <code>2.6.4</code></li>
              <li>PACKAGE : Bootstrap <code>5.3.6 </code>to <code>5.3.8</code></li>
              <li>PACKAGE : chart.js <code>4.4.9 </code>to <code>4.5.1</code></li>
              <li>PACKAGE : dayjs <code>1.11.13 </code>to <code>1.11.18</code></li>
              <li>PACKAGE : dhtmlx-gantt <code>9.0.11 </code>to <code>9.0.15</code></li>
              <li>PACKAGE : echarts <code>5.6.0 </code>to <code>6.0.0</code></li>
              <li>PACKAGE : fullcalendar <code>6.1.17 </code>to <code>6.1.19</code></li>
              <li>PACKAGE : lottie-web <code>5.12.2 </code>to <code>5.13.0</code></li>
              <li>PACKAGE : mapbox-gl <code>3.12.0 </code>to <code>3.15.0</code></li>
              <li>PACKAGE : rollup-plugin-multi-input <code>1.3.1 </code>to <code>1.5.0</code></li>
              <li>PACKAGE : simplebar <code>6.3.1 </code>to <code>6.3.2</code></li>
              <li>PACKAGE : swiper <code>11.2.8 </code>to <code>12.0.3</code></li>
              <li>PACKAGE : tinymce <code>7.9.1 </code>to <code>8.2.0</code></li>
              <li>JS : <code>src/js/theme/responsiveNavItems.js</code></li>
            </ul>
            <h6 class="mb-2">Fix </h6>
            <ul class="bullet-inside ps-0">
              <li>Ecommerce layout's top navbar flickering issue fixed.</li>
              <li>JS: Replaced the deprecated <code>containLabel </code>option in the Echarts grid configuration with the new <code>outerBoundsMode.</code></li>
              <li>JS: Adjusted the Echarts legend options by adding an explicit <code>top </code>value to ensure proper rendering.</li>
              <li>JS: The License key is added in <code>src/js/theme/tinymce.js</code></li>
              <li>SCSS: The new Swiper navigation icon has been hidden by<code>.swiper-navigation-icon { display: none } </code>in <code>_swiper.scss</code></li>
              <li>Other minor issue.</li>
            </ul>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.23.0</code> - Pyraflame</h5>
            <p class="mb-0">15 June, 2025</p>
          </div>
          <div class="card-body">
            <h6 class="mb-2">Update</h6>
            <ul class="bullet-inside ps-0">
              <li>PACKAGE : @fortawesome/fontawesome-free <code>6.5.2 </code>to <code>6.7.2</code></li>
              <li>PACKAGE : bigpicture <code>2.6.2 </code>to <code>2.6.3</code></li>
              <li>PACKAGE: Bootstrap <code>5.3.3 </code>to <code>5.3.6</code></li>
              <li>PACKAGE : chart.js <code>4.4.8 </code>to <code>4.4.9</code></li>
              <li>PACKAGE : choices.js <code>10.2.0 </code>to <code>11.1.0</code></li>
              <li>PACKAGE : dayjs <code>1.11.11 </code>to <code>1.11.13</code></li>
              <li>PACKAGE : dhtmlx-gantt <code>9.0.3 </code>to <code>9.0.11</code></li>
              <li>PACKAGE : echarts <code>5.5.0 </code>to <code>5.6.0</code></li>
              <li>PACKAGE : fullcalendar <code>6.1.11 </code>to <code>6.1.17</code></li>
              <li>PACKAGE : glightbox <code>3.3.0 </code>to <code>3.3.1</code></li>
              <li>PACKAGE : gsap <code>3.12.5 </code>to <code>3.13.0</code></li>
              <li>PACKAGE : mapbox-gl <code>3.3.0 </code>to <code>3.12.0</code></li>
              <li>PACKAGE : nouislider <code>15.7.1 </code>to <code>15.8.1</code></li>
              <li>PACKAGE : prismjs <code>1.29.0 </code>to <code>1.30.0</code></li>
              <li>PACKAGE : simplebar <code>6.2.5 </code>to <code>6.3.1</code></li>
              <li>PACKAGE : sortablejs <code>1.15.2 </code>to <code>1.15.6</code></li>
              <li>PACKAGE : swiper <code>11.1.4 </code>to <code>11.2.8</code></li>
              <li>PACKAGE : tinymce <code>7.0.1 </code>to <code>7.9.1</code></li>
              <li>JS : <code>src/js/theme/charts/echarts/contacts-by-source-chart.js </code></li>
              <li>JS : <code>src/js/theme/charts/echarts/issue-discovered-chart.js </code></li>
              <li>JS : <code>src/js/theme/choices.js </code></li>
              <li>PAGE : <code>public/dashboard/project-management.html </code></li>
              <li>PAGE : <code>public/apps/events/create-an-event.html</code></li>
              <li>PAGE : <code>public/modules/components/alerts.html</code></li>
              <li>SCSS : <code>src/scss/theme/helpers/_flex.scss </code></li>
              <li>SCSS : <code>src/scss/theme/_alert.scss </code></li>
              <li>SCSS : <code>src/scss/theme/_full-calendar.scss</code></li>
              <li>SCSS : <code>src/scss/theme/_gantt-chart.scss </code></li>
              <li>SCSS : <code>src/scss/theme/_nav-tab.scss  </code></li>
            </ul>
            <h6 class="mb-2">Fix </h6>
            <ul class="bullet-inside ps-0">
              <li>JS: <code>src/js/theme/charts/echarts/call-campaign-reports.js </code></li>
              <li> <code>public/modules/components/calendar.html </code>responsive design updated for mobile and tablet.</li>
              <li> <code>public/apps/travel-agency/hotel/customers </code>footer layout updated.</li>
              <li>Other minor issue.</li>
            </ul>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.22.0</code> - Fawkes</h5>
            <p class="mb-0">25 March, 2025</p>
          </div>
          <div class="card-body">
            <h6 class="mb-2">New</h6>
            <ul class="bullet-inside ps-0">
              <li>PAGE : <code>public/apps/stock/portfolio.html</code></li>
              <li>PAGE : <code>public/apps/stock/stock-details.html</code></li>
              <li>PAGE : <code>public/apps/stock/watchlist.html</code></li>
              <li>PAGE : <code>public/dashboard/stock.html</code></li>
              <li>JS: <code>src/js/pages/advance-ajax-table.js</code></li>
              <li>JS: <code>src/js/pages/chat.js</code></li>
              <li>JS: <code>src/js/pages/hotel-compare.js</code></li>
              <li>JS: <code>src/js/pages/kanban.js</code></li>
              <li>JS: <code>src/js/pages/report-details.js</code></li>
              <li>JS : <code>src/js/data/stock-data.js</code></li>
              <li>JS : <code>src/js/pages/stock-dashboard.js</code></li>
              <li>JS : <code>src/js/pages/stock-details.js</code></li>
              <li>JS : <code>src/js/pages/stock-portfolio-watchlist.js</code></li>
              <li>JS : <code>src/js/pages/trip.js</code></li>
              <li>JS : <code>src/js/theme/charts/chartjs/top-stock-chart.js</code></li>
              <li>JS :<code>src/js/theme/charts/echarts/company-profile-employees-chart.js</code></li>
              <li>JS : <code>src/js/theme/charts/echarts/dividends-bar-chart.js</code></li>
              <li>JS : <code>src/js/theme/charts/echarts/dividends-growth-chart.js</code></li>
              <li>JS : <code>src/js/theme/charts/echarts/eps-this-year-chart.js</code></li>
              <li>JS : <code>src/js/theme/charts/echarts/eps-next-year-chart.js</code></li>
              <li>JS : <code>src/js/theme/charts/echarts/forecast-of-revenue-chart.js</code></li>
              <li>JS : <code>src/js/theme/charts/echarts/growth-in-revenue-chart.js</code></li>
              <li>JS : <code>src/js/theme/charts/echarts/portfolio-line-chart.js</code></li>
              <li>JS : <code>src/js/theme/charts/echarts/revenue-next-year.js</code></li>
              <li>JS : <code>src/js/theme/charts/echarts/revenue-this-year-chart.js</code></li>
              <li>JS : <code>src/js/theme/charts/echarts/stock-overview-chart.js</code></li>
              <li>JS : <code>src/js/theme/charts/echarts/stock-overview-inverted-chart.js</code></li>
              <li>JS : <code>src/js/theme/charts/echarts/stock-overview-mixed-chart.js</code></li>
              <li>JS : <code>src/js/theme/charts/echarts/stock-share-report-chart.js</code></li>
              <li>JS : <code>src/js/theme/charts/echarts/watchlist-chart-report.js</code></li>
              <li>SCSS : <code>src/scss/theme/plugins/_stock.scss</code></li>
              <li>PACKAGE : <code>chart.js</code></li>
            </ul>
            <h6 class="mb-2">Update</h6>
            <ul class="bullet-inside ps-0">
              <li>JS :<code> src/js/theme/data.js to src/js/data/data.js</code></li>
              <li>DOC : <code>Advance ajax table documentation</code></li>
              <li>JS : <code>ecommerce-dashboard.js, projectmaanagement-dashboard.js, crm-dashboard.js, travel-agency-dashboard.js </code>are moved to <code>public/assets/js/dashboards </code></li>
              <li>JS : <code>crm-analytics.js, project-details.js, calendar.js, showcase.js, chat.js, file-manager.js, gantt-chart.js </code>are moved <code>to public/assets/js/pages</code></li>
              <li> Optimized <code>phoenix.js </code>by moving some functions to page-specific script files: <ul>
                  <li> <code>reportDetailsChartInit</code></li>
                  <li> <code>chatInit </code></li>
                  <li> <code>createBoardInit </code></li>
                  <li> <code>kanbanInit </code></li>
                  <li> <code>mapboxClusterInit </code></li>
                  <li><code>flightMapInit</code></li>
                </ul>
              </li>
              <li> <code>src/scss/theme/plugins/_tinymce </code></li>
              <li> <code>src/scss/theme/plugins/_dropzone </code></li>
            </ul>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.21.0</code> - Dionysus</h5>
            <p class="mb-0">02 February, 2025</p>
          </div>
          <div class="card-body">
            <h6 class="mb-2">New</h6>
            <ul class="bullet-inside ps-0">
              <li>PAGE : <code>public/apps/gantt-chart.html</code></li>
              <li>DOC : <code> public/modules/components/dhtmlx-gantt.html</code></li>
              <li>JS : <code>src/js/theme/ganttchart/gantt-chart.js</code></li>
              <li>JS : <code>src/js/theme/ganttchart/gantt-data.js</code></li>
              <li>JS : <code>src/js/theme/ganttchart/layout-config.js</code></li>
              <li>SCSS : <code>src/scss/theme/plugins/_gantt.scss</code></li>
            </ul>
            <h6 class="mb-2">Update</h6>
            <ul class="bullet-inside ps-0">
              <li>PLUGIN :<code> dhtmlx-gantt</code></li>
            </ul>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.20.1</code> - Hestia</h5>
            <p class="mb-0">04 November, 2024</p>
          </div>
          <div class="card-body">
            <h6 class="mb-2">Fix</h6>
            <ul class="bullet-inside ps-0">
              <li>Fix the navbar on the travel agency landing page</li>
            </ul>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.20.0</code> - Aphrodite</h5>
            <p class="mb-0">29 October, 2024</p>
          </div>
          <div class="card-body">
            <h6 class="mb-2">New</h6>
            <ul class="bullet-inside ps-0">
              <li>PAGE :<code> public/apps/file-manager/grid-view.html</code></li>
              <li>PAGE :<code> public/apps/file-manager/list-view.html</code></li>
              <li>JS :<code> src/js/theme/file-manager/file-manager.js</code></li>
              <li>JS :<code> src/js/theme/file-manager/template.js</code></li>
              <li>JS :<code> src/js/theme/file-manager/data.js</code></li>
              <li>SCSS :<code> src/scss/theme/_file-manager.scss</code></li>
            </ul>
            <h6 class="mb-2">Update</h6>
            <ul class="bullet-inside ps-0">
              <li>JS :<code> src/js/theme/bulk-select.js</code></li>
              <li>JS :<code> src/js/theme/phoenix-offcanvas.js</code></li>
              <li>JS :<code> src/js/theme/play-on-hover.js</code></li>
            </ul>
            <h6 class="mb-2">Fix</h6>
            <ul class="bullet-inside ps-0">
              <li>Body overflow hidden issue in Phoenix offcanvas</li>
              <li>Tooltip arrow placement issue on RTL mode</li>
              <li>Other minor issues</li>
            </ul>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.19.0</code> - Aion</h5>
            <p class="mb-0">06 August, 2024</p>
          </div>
          <div class="card-body">
            <h6 class="mb-2">New</h6>
            <ul class="bullet-inside ps-0">
              <li>PAGE :<code> public/apps/gallery/album.html</code></li>
              <li>PAGE :<code> public/apps/gallery/gallery-column.html</code></li>
              <li>PAGE :<code> public/apps/gallery/gallery-grid.html</code></li>
              <li>PAGE :<code> public/apps/gallery/grid-with-title.html</code></li>
              <li>PAGE :<code> public/apps/gallery/gallery-masonry.html</code></li>
              <li>PAGE :<code> public/apps/gallery/gallery-slider.html</code></li>
            </ul>
            <h6 class="mb-2">Update</h6>
            <ul class="bullet-inside ps-0">
              <li>Change Friday and Saturday's holidays to Saturday and Sunday in the calendar</li>
            </ul>
            <h6 class="mb-2">Fix</h6>
            <ul class="bullet-inside ps-0">
              <li>Fix Query parameter removal issue</li>
              <li>Advance table tooltip</li>
              <li>Other minor issues</li>
            </ul>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.18.1</code> - Hera</h5>
            <p class="mb-0">30 June, 2024</p>
          </div>
          <div class="card-body">
            <h6 class="mb-2">Update</h6>
            <ul class="bullet-inside ps-0">
              <li>Removed <code>Polyfill.io</code></li>
            </ul>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.18.0</code> - Aether</h5>
            <p class="mb-0">10 June, 2024</p>
          </div>
          <div class="card-body">
            <h6 class="mb-2">New</h6>
            <ul class="bullet-inside ps-0">
              <li>PAGE :<code> public/apps/travel-agency/trip/homepage.html</code></li>
              <li>PAGE :<code> public/apps/travel-agency/trip/trip-details.html</code></li>
              <li>PAGE :<code> public/apps/travel-agency/trip/checkout.html</code></li>
              <li>PAGE :<code> public/apps/travel-agency/hotel/customer/gallery.html</code></li>
              <li>JS :<code> src/js/theme/password-toggle.js</code></li>
              <li>JS :<code> src/js/theme/play-on-hover.js</code></li>
            </ul>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.17.0</code> - Apollo</h5>
            <p class="mb-0">07 May, 2024</p>
          </div>
          <div class="card-body">
            <h6 class="mb-2">New</h6>
            <ul class="bullet-inside ps-0">
              <li>PAGE :<code> public/apps/travel-agency/flight/homepage.html</code></li>
              <li>PAGE :<code> public/apps/travel-agency/flight/booking.html</code></li>
              <li>PAGE :<code> public/apps/travel-agency/flight/payment.html</code></li>
              <li>PAGE :<code> public/modules/components/typed-text.html</code></li>
              <li>PAGE :<code> public/modules/forms/advance/range.html</code></li>
            </ul>
            <h6 class="mb-2">Update</h6>
            <ul class="bullet-inside ps-0">
              <li>All dependencies have been upgraded to the latest version</li>
              <li>Removed all the scripts from demo layout pages</li>
              <li>Dropzone single image upload style</li>
              <li>Added floating label support for advance select</li>
            </ul>
            <h6 class="mb-2">Fix</h6>
            <ul class="bullet-inside ps-0">
              <li>Echart tooltip z-index issue</li>
              <li>Accordion button color fix</li>
              <li>Active table style</li>
              <li>Other minor design &amp; typo issues</li>
            </ul>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.16.0</code> - Helios</h5>
            <p class="mb-0">08 April, 2024</p>
          </div>
          <div class="card-body">
            <h6 class="mb-2">New</h6>
            <ul class="bullet-inside ps-0">
              <li>PAGE :<code> public/apps/travel-agency/hotel/admin/add-room.html</code></li>
              <li>PAGE :<code> public/apps/travel-agency/hotel/admin/room-search.html</code></li>
              <li>PAGE :<code> public/apps/travel-agency/hotel/customer/homepage.html</code></li>
              <li>PAGE :<code> public/apps/travel-agency/hotel/customer/hotel-details.html</code></li>
              <li>PAGE :<code> public/apps/travel-agency/hotel/customer/hotel-compare.html</code></li>
              <li>PAGE :<code> public/apps/travel-agency/hotel/customer/checkout.html</code></li>
              <li>PAGE :<code> public/apps/travel-agency/hotel/customer/payment.html</code></li>
              <li>JS :<code> src/js/theme/collapse-all.js</code></li>
            </ul>
            <h6 class="mb-2">Fix</h6>
            <ul class="bullet-inside ps-0">
              <li>Removed scripts and other navbars from layout pages.</li>
              <li>Other minor bugs</li>
            </ul>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.15.0</code> - Eurus</h5>
            <p class="mb-0">12 February, 2024</p>
          </div>
          <div class="card-body">
            <h6 class="mb-2">New</h6>
            <ul class="bullet-inside ps-0">
              <li>PAGE :<code> public/dashboard/travel-agency.html</code></li>
              <li>PAGE :<code> public/apps/travel-agency/landing.html</code></li>
              <li>PAGE :<code> public/apps/travel-agency/hotel/admin/add-property.html</code></li>
              <li>PAGE :<code> public/apps/travel-agency/hotel/admin/room-listing.html</code></li>
              <li>JS :<code> src/js/theme/mapbox.js</code></li>
              <li>JS :<code> src/js/theme/flight-map.js</code></li>
              <li>JS :<code> src/js/theme/typed.js</code></li>
              <li>JS :<code>src/js/theme/nouislider.js</code></li>
              <li>JS :<code>src/js/theme/price-tier-form.js</code></li>
              <li>Utility classes <ul>
                  <li>Link<ul>
                      <li> <code>link-body</code></li>
                      <li> <code>link-body-secondary</code></li>
                      <li> <code>link-body-highlight</code></li>
                      <li> <code>link-body-quaternary</code></li>
                      <li> <code>link-body-tertiary</code></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
            <h6 class="mb-2">Fix</h6>
            <ul class="bullet-inside ps-0">
              <li>Phoenix button disabled issue</li>
              <li>Vertical navbar collapse issue</li>
              <li>Horizontal navbar issue on icon hover</li>
              <li>Other minor bugs</li>
            </ul>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.14.0</code> - Elpis</h5>
            <p class="mb-0">7 Dec, 2023</p>
          </div>
          <div class="card-body">
            <div class="alert alert-subtle-warning d-flex align-items-center" role="alert">
              <span class="fas fa-info-circle text-warning fs-5 me-3"></span>
              <p class="mb-0 flex-1">This is a major update. Please backup your project before upgrading to the latest version</p>
            </div>
            <h6 class="mb-2">New</h6>
            <ul class="bullet-inside ps-0">
              <li>New theme color shades</li>
              <li>DOC: Color <a href="https://prium.github.io/phoenix/v1.14.0/documentation/customization/color.html">see documentation</a></li>
              <li>Utility classes <ul>
                  <li>Text<ul>
                      <li> <code>text-body-highlight</code></li>
                      <li><code>text-body-quaternary</code></li>
                      <li><code>text-body-hover</code></li>
                      <li><code>text-body-secondary-hover</code></li>
                      <li><code>text-body-tertiary-hover</code></li>
                      <li><code>text-body-quaternary-hover</code></li>
                      <li><code>text-body-highlight-hover</code></li>
                      <li><code>text-{themeColor}-light</code></li>
                      <li><code>text-{themeColor}-lighter</code></li>
                      <li><code>text-{themeColor}-dark</code></li>
                      <li><code>text-{themeColor}-darker</code></li>
                    </ul>
                  </li>
                  <li> <code>dark__bg-opacity-{0|25|50|75|85|100}</code></li>
                  <li>Background<ul>
                      <li> <code>bg-body-emphasis</code></li>
                      <li> <code>bg-body-quaternary</code></li>
                      <li> <code>bg-body-highlight</code></li>
                      <li> <code>bg-body-hover</code></li>
                      <li> <code>bg-body-secondary-hover</code></li>
                      <li> <code>bg-body-tertiary-hover</code></li>
                      <li> <code>bg-body-quaternary-hover</code></li>
                      <li> <code>bg-{themeColor}-light</code></li>
                      <li> <code>bg-{themeColor}-lighter</code></li>
                      <li> <code>bg-{themeColor}-dark</code></li>
                      <li> <code>bg-{themeColor}-darker</code></li>
                    </ul>
                  </li>
                  <li>Border <ul>
                      <li><code>border-translucent</code></li>
                      <li><code>border-{themeColor}-light</code></li>
                      <li><code>border-{themeColor}-dark</code></li>
                    </ul>
                  </li>
                  <li>Font size <ul>
                      <li>Replaced<code>.fs--3 </code>with<code>.fs-11 </code></li>
                      <li>Replaced<code>.fs--2 </code>with <code>.fs-10 </code></li>
                      <li>Replaced<code>.fs–1  </code>with <code>fs-9 </code></li>
                      <li>Replaced <code>.fs-0  </code>with <code>.fs-8 </code></li>
                      <li>Replaced <code>.fs-1  </code>with <code>.fs-7 </code></li>
                      <li>Replaced <code>.fs-2  </code>with <code>.fs-6 </code></li>
                      <li>Replaced <code>.fs-3  </code>with <code>.fs-5 </code></li>
                      <li>Replaced <code>.fs-4  </code>with <code>.fs-4 </code></li>
                      <li>Replaced <code>.fs-5  </code>with <code>.fs-3 </code></li>
                      <li>Replaced <code>.fs-6  </code>with <code>.fs-2 </code></li>
                      <li>Replaced <code>.fs-7  </code>with <code>.fs-1 </code></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
            <h6 class="mb-2">Updated</h6>
            <ul class="bullet-inside ps-0">
              <li>Bootstrap to 5.3.2</li>
              <li>All SCSS files are updated</li>
              <li>Almost all JS files are updated</li>
              <li>DOC: Styling <a href="https://prium.github.io/phoenix/v1.14.0/documentation/customization/styling.html">see documentation</a></li>
              <li>DOC: Dark Mode <a href="https://prium.github.io/phoenix/v1.14.0/documentation/customization/dark-mode.html">see documentation</a></li>
              <li>HTML: <code>bg-soft-{color} </code>to <code>bg-{color}-subtle</code></li>
              <li>HTML: <code>z-index-{values} </code>to <code>z-{values} </code></li>
              <li>HTML: <code>text-none </code>class to <code>text-transform-none</code></li>
              <li>HTML: <code>{text/bg}-gray-{100-1100} </code>classes replaced with <code>{text/bg}-body-{color} </code></li>
              <li>HTML: <code>text-{themeColor}-{variant} </code>classes replaced with <code>text-{themeColor}-light/lighter/dark/darker </code>classes</li>
              <li>HTML: <code>bg-{themeColor}-{variant} </code>classes replaced with <code>bg-{themeColor}-light/lighter/dark/darker </code>classes</li>
            </ul>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.13.0</code> - Auxo</h5>
            <p class="mb-0">18 June, 2023</p>
          </div>
          <div class="card-body">
            <h6 class="mb-2">New</h6>
            <ul class="bullet-inside ps-0">
              <li>PAGE :<code> public/pages/faq/faq-tab.html</code></li>
              <li>PAGE :<code> public/pages/errors/403.html</code></li>
              <li>PAGE :<code> public/pages/authentication/simple/2FA.html</code></li>
              <li>PAGE :<code> public/pages/authentication/split/2FA.html</code></li>
              <li>PAGE :<code> public/pages/authentication/card/2FA.html</code></li>
              <li>JS :<code> src/js/theme/faq-tab.js</code></li>
              <li>JS :<code> src/js/theme/2fa-verification.js</code></li>
              <li>JS :<code> src/js/theme/sortable.js</code></li>
              <li>JS :<code>src/js/theme/kanban.js</code></li>
              <li>DOC :<code> public/modules/components/sortable.html</code></li>
            </ul>
            <h6 class="mb-2">Update</h6>
            <ul class="bullet-inside ps-0">
              <li>Added text-decoration-underline at links.</li>
              <li>JS :<code>src/js/theme/calendar/app-calendar.js</code></li>
            </ul>
            <h6 class="mb-2">Fix</h6>
            <ul class="bullet-inside ps-0">
              <li>Advance table issue fixed</li>
              <li>Other minor bugs</li>
            </ul>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.12.0</code> - Notus</h5>
            <p class="mb-0">15 May, 2023</p>
          </div>
          <div class="card-body">
            <h6 class="mb-2">New</h6>
            <ul class="bullet-inside ps-0">
              <li>PAGE :<code> public/apps/kanban/boards.html</code></li>
              <li>PAGE :<code> public/widgets.html</code></li>
              <li>FEATURE :<code> Double top navigation</code></li>
              <li>FEATURE :<code> Popover added in all avatar</code></li>
              <li>FEATURE :<code> Bootstrap validation added of each advanced input fields</code></li>
              <li>JS :<code> src/js/theme/create-board.js</code></li>
              <li>JS :<code> src/js/theme/advance-ajax-table.js</code></li>
            </ul>
            <h6 class="mb-2">Update</h6>
            <ul class="bullet-inside ps-0">
              <li>PAGE :<code> public/apps/kanban/create-kanban-board.html</code></li>
              <li>DOC :<code> public/documentation/layouts/vertical-navbar.html</code></li>
              <li>DOC :<code> public/modules/tables/advance-tables.html</code></li>
              <li>DOC :<code> public/modules/forms/advance/advance-select.html</code></li>
              <li>DOC :<code> public/modules/forms/advance/date-picker.html</code></li>
              <li>JS :<code> src/js/theme/wizard.js</code></li>
            </ul>
            <h6 class="mb-2">Fix</h6>
            <ul class="bullet-inside ps-0">
              <li>SCSS !default issue fixed</li>
              <li>Page scroll issue fixed after navbar vertical collapsed</li>
            </ul>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.11.0</code> - Artemis</h5>
            <p class="mb-0">03 Apr, 2023</p>
          </div>
          <div class="card-body">
            <h6 class="mb-2">New</h6>
            <ul class="bullet-inside ps-0">
              <li>PAGE :<code> public/apps/crm/deals.html</code></li>
              <li>PAGE :<code> public/apps/crm/reports-details.html</code></li>
              <li>PAGE :<code> public/apps/kanban/kanban.html</code></li>
              <li>PAGE :<code> public/apps/kanban/create-kanban-board.html</code></li>
              <li>PAGE :<code> public/modules/echarts/line-charts.html</code></li>
              <li>PAGE :<code> public/modules/echarts/bar-charts.html</code></li>
              <li>PAGE :<code> public/modules/echarts/candlestick-charts.html</code></li>
              <li>PAGE :<code> public/modules/echarts/geo-map.html</code></li>
              <li>PAGE :<code> public/modules/echarts/scatter-charts.html</code></li>
              <li>PAGE :<code> public/modules/echarts/pie-charts.html</code></li>
              <li>PAGE :<code> public/modules/echarts/gauge-chart.html</code></li>
              <li>PAGE :<code> public/modules/echarts/radar-charts.html</code></li>
              <li>PAGE :<code> public/modules/echarts/heatmap-charts.html</code></li>
              <li>DOC :<code> public/modules/echarts/how-to-use.html</code></li>
              <li>DOC :<code> public/modules/utilities/stacks.html</code></li>
              <li>DOC :<code> public/modules/utilities/grid.html</code></li>
              <li>DOC :<code> public/documentation/customization/configuration.html</code></li>
              <li>DOC :<code> public/documentation/customization/dark-mode.html</code></li>
              <li>PLUGIN :<code> Sortablejs  </code></li>
              <li>JS : <code>src/js/theme/randomColor.js</code></li>
              <li>JS : <code> src/js/theme/copyLink.js</code></li>
            </ul>
            <h6 class="mb-2">Update</h6>
            <ul class="bullet-inside ps-0">
              <li>DOC :<code> public/modules/tables/advance-tables.html</code></li>
            </ul>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.10.0</code> - Hephaestus</h5>
            <p class="mb-0">5 Mar, 2023</p>
          </div>
          <div class="card-body">
            <h6 class="mb-2">New</h6>
            <ul class="bullet-inside ps-0">
              <li>PAGE :<code> public/apps/crm/deal-details.html</code></li>
              <li>PAGE :<code> public/apps/crm/analytics.html</code></li>
              <li>PAGE :<code> public/modules/forms/advance/emoji-button.html    </code></li>
              <li>FEATURE :<code> Chat Demo (floating widget)</code></li>
              <li>FEATURE :<code> Emoji button (picmo) dark mode version added</code></li>
            </ul>
            <h6 class="mb-2">Fix</h6>
            <ul class="bullet-inside ps-0">
              <li>Topnav dropdown spacing issue </li>
              <li>Modal body scrolling issue</li>
              <li>Other minor bugs</li>
            </ul>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.9.0</code> - Persephone</h5>
            <p class="mb-0">5 Feb, 2023</p>
          </div>
          <div class="card-body">
            <h6 class="mb-2">New</h6>
            <ul class="bullet-inside ps-0">
              <li>PAGE :<code> public/dashboard/crm.html</code></li>
              <li>PAGE :<code> public/apps/crm/leads.html</code></li>
              <li>PAGE :<code> public/apps/crm/lead-details.html</code></li>
              <li>PAGE :<code> public/apps/crm/reports.html</code></li>
              <li>PAGE :<code> public/apps/crm/add-contact.html</code></li>
              <li>PAGE :<code> public/pages/landing/alternate.html</code></li>
              <li>PAGE :<code> public/pages/authentication/card/sign-in.html</code></li>
              <li>PAGE :<code> public/pages/authentication/card/sign-up.html</code></li>
              <li>PAGE :<code> public/pages/authentication/card/sign-out.html</code></li>
              <li>PAGE :<code> public/pages/authentication/card/forgot-password.html</code></li>
              <li>PAGE :<code> public/pages/authentication/card/reset-password.html</code></li>
              <li>PAGE :<code> public/pages/authentication/card/lock-screen.html</code></li>
            </ul>
            <h6 class="mb-2">Update</h6>
            <ul class="bullet-inside ps-0">
              <li>Feature :<code> Horizontal Navbar new design (dropdown on hover)</code></li>
              <li>Feature :<code> Bulk select implemented on table</code></li>
            </ul>
            <h6 class="mb-2">Fix</h6>
            <ul class="bullet-inside ps-0">
              <li>Other minor bugs</li>
            </ul>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.8.0</code> - Boreas</h5>
            <p class="mb-0">10 Jan, 2023</p>
          </div>
          <div class="card-body">
            <h6 class="mb-2">New</h6>
            <ul class="bullet-inside ps-0">
              <li>PAGE :<code> public/pages/pages/timeline.html</code></li>
              <li>PAGE :<code> public/modules/tables/bulk-select.html</code></li>
              <li>Feature :<code> Bulk Select</code></li>
              <li>Feature :<code> Search-box added in top navbar</code></li>
            </ul>
            <h6 class="mb-2">Fix</h6>
            <ul class="bullet-inside ps-0">
              <li>Email page issues in slim and combo layout.</li>
              <li>Chat page issues in slim and combo layout.</li>
              <li>Other minor bugs</li>
            </ul>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.7.0</code> - Cronus</h5>
            <p class="mb-0">14 Dec, 2022</p>
          </div>
          <div class="card-body">
            <h6 class="mb-2">New</h6>
            <ul class="bullet-inside ps-0">
              <li>Feature :<code> RTL</code></li>
              <li>Feature :<code> Combo Navbar</code></li>
              <li>Feature :<code> Combo Navbar Slim</code></li>
              <li>PAGE :<code> public/apps/calendar.html</code></li>
              <li>PAGE :<code> public/apps/chat.html  </code></li>
              <li>PAGE :<code> public/demo/combo-nav.html</code></li>
              <li>PAGE :<code> public/demo/combo-nav-slim.html</code></li>
              <li>DOC: <code>public/documentation/layouts/combo-navbar.html</code></li>
              <li>DOC: <code>public/modules/components/calendar.html</code></li>
              <li>PLUGIN: <code>FullCalendar</code></li>
            </ul>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.6.0</code> - Erebus</h5>
            <p class="mb-0">22 Nov, 2022</p>
          </div>
          <div class="card-body">
            <h6 class="mb-2">New</h6>
            <ul class="bullet-inside ps-0">
              <li>Feature :<code> Dark Mode</code></li>
              <li>Feature :<code> Slim Navbar</code></li>
              <li>Feature :<code> Collapsed Navbar</code></li>
              <li>Feature :<code> Dark Navbar</code></li>
            </ul>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.5.0</code> - Ares</h5>
            <p class="mb-0">10 Oct, 2022</p>
          </div>
          <div class="card-body">
            <h6 class="mb-2">New</h6>
            <ul class="bullet-inside ps-0">
              <li>PAGE :<code> public/apps/email/inbox.html</code></li>
              <li>PAGE :<code> public/apps/email/email-detail.html</code></li>
              <li>PAGE :<code> public/apps/email/compose.html</code></li>
              <li>PAGE :<code> public/apps/social/feed.html</code></li>
              <li>PAGE :<code> public/apps/events/create-an-event.html </code></li>
              <li>PAGE :<code> public/apps/events/event-detail.html</code></li>
            </ul>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.4.0</code> - Zeus</h5>
            <p class="mb-0">15 Sept, 2022</p>
          </div>
          <div class="card-body">
            <h6 class="mb-2">New</h6>
            <ul class="bullet-inside ps-0">
              <li>PAGE :<code> public/apps/e-commerce/landing/order-tracking.html</code></li>
              <li>PAGE :<code> public/apps/project-management/project-board-view.html</code></li>
              <li>PAGE :<code> public/apps/project-management/project-details.html</code></li>
              <li>PAGE :<code> public/pages/pages/pricing/pricing-grid.html</code></li>
              <li>PAGE :<code> public/modules/forms/wizard.html </code></li>
              <li>PAGE :<code> public/landing.html</code></li>
            </ul>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.3.0</code> - Gorgon</h5>
            <p class="mb-0">25 Aug, 2022</p>
          </div>
          <div class="card-body">
            <h6 class="mb-2">New</h6>
            <ul class="bullet-inside ps-0">
              <li>PAGE :<code> public/apps/e-commerce/landing/products-filter.html</code></li>
              <li>PAGE :<code> public/apps/e-commerce/admin/refund.html</code></li>
              <li>PAGE :<code> publicapps/e-commerce/landing/wishlist.html</code></li>
              <li>PAGE :<code> public/apps/e-commerce/landing/invoice.html</code></li>
              <li>PAGE :<code> public/apps/project-management/project-list-view.html</code></li>
              <li>PAGE :<code> public/apps/project-management/project-card-view.html</code></li>
              <li>PAGE :<code> public/apps/project-management/todo-list.html</code></li>
              <li>PAGE :<code> public/apps/project-management/create-new.html</code></li>
              <li>SCSS :<code> src/scss/theme/plugins/_google-map.scss</code></li>
              <li>JS :<code> src/js/theme/product-filter.js</code></li>
            </ul>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.2.0</code> - Demetra</h5>
            <p class="mb-0">2 Aug, 2022</p>
          </div>
          <div class="card-body">
            <h6 class="mb-2">New</h6>
            <ul class="bullet-inside ps-0">
              <li>PAGE :<code> public/apps/project-management.html</code></li>
              <li>PAGE :<code> public/apps/e-commerce/admin/add-product.html</code></li>
              <li>PAGE :<code> public/apps/e-commerce/admin/customer-details.html </code></li>
              <li>PAGE :<code> public/apps/e-commerce/admin/customers.html</code></li>
              <li>PAGE :<code> public/apps/e-commerce/landing/order-details.html  </code></li>
              <li>PAGE :<code> public/apps/e-commerce/homepage.html</code></li>
              <li>PAGE :<code> public/apps/e-commerce/cart.html</code></li>
              <li>PAGE :<code> public/apps/e-commerce/checkout.html</code></li>
              <li>PAGE :<code> public/apps/e-commerce/product-details.html  </code></li>
              <li>PAGE :<code> public/modules/components/carousel/bootstrap.html</code></li>
              <li>PAGE :<code> public/modules/components/carousel/swiper.html</code></li>
              <li>PAGE :<code> public/modules/components/navs-and-tabs/navbar.html</code></li>
              <li>PAGE :<code> public/modules/components/navs-and-tabs/navs.html</code></li>
              <li>PAGE :<code> public/modules/components/navs-and-tabs/tabs.html</code></li>
              <li>PAGE :<code> public/modules/components/accordion.html          </code></li>
              <li>PAGE<code> public/modules/components/alerts.html</code></li>
              <li>PAGE :<code> public/modules/components/avatar.html</code></li>
              <li>PAGE :<code> public/modules/components/badge.html</code></li>
              <li>PAGE :<code> public/modules/components/breadcrumb.html</code></li>
              <li>PAGE :<code> public/modules/components/button.html</code></li>
              <li>PAGE :<code> public/modules/components/card.html</code></li>
              <li>PAGE :<code> public/modules/components/collapse.html</code></li>
              <li>PAGE :<code> public/modules/components/dropdown.html</code></li>
              <li>PAGE :<code> public/modules/components/index.html</code></li>
              <li>PAGE :<code> public/modules/components/list-group.html </code></li>
              <li>PAGE :<code> public/modules/components/modal.html</code></li>
              <li>PAGE :<code> public/modules/components/offcanvas.html</code></li>
              <li>PAGE :<code> public/modules/components/pagination.html</code></li>
              <li>PAGE :<code> public/modules/components/placeholder.html</code></li>
              <li>PAGE :<code> public/modules/components/popovers.html</code></li>
              <li>PAGE :<code> public/modules/components/progress-bar.html</code></li>
              <li>PAGE :<code> public/modules/components/progress.html</code></li>
              <li>PAGE :<code> public/modules/components/progress-bar.html</code></li>
              <li>PAGE :<code> public/modules/components/scrollspy.html</code></li>
              <li>PAGE :<code> public/modules/components/spinners.html</code></li>
              <li>PAGE :<code> public/modules/components/tooltips.html</code></li>
              <li>PAGE :<code> public/modules/forms/advance/advance-select.html</code></li>
              <li>PAGE :<code> public/modules/forms/advance/date-picker.html</code></li>
              <li>PAGE :<code> public/modules/forms/advance/editor.html</code></li>
              <li>PAGE :<code> public/modules/forms/advance/file-uploader.html </code></li>
              <li>PAGE :<code> public/modules/forms/advance/rating.html</code></li>
              <li>PAGE :<code> public/modules/forms/basic/floating-labels.html</code></li>
              <li>PAGE :<code> public/modules/forms/basic/input-group.html</code></li>
              <li>PAGE :<code> public/modules/forms/basic/layout.html</code></li>
              <li>PAGE :<code> public/modules/forms/basic/range.html</code></li>
              <li>PAGE :<code> public/modules/forms/basic/select.html                            </code></li>
              <li>PAGE :<code> public/modules/forms/validation.html</code></li>
              <li>PAGE :<code> public/modules/icons/feather.html</code></li>
              <li>PAGE :<code> public/modules/icons/font-awesome.html</code></li>
              <li>PAGE :<code> public/modules/icons/unicons.html</code></li>
              <li>PAGE :<code> public/modules/tables/advance-tables.html </code></li>
              <li>PAGE :<code> public/modules/tables/basic-tables.html </code></li>
              <li>PAGE :<code> public/modules/utilities/background.html</code></li>
              <li>PAGE :<code> public/modules/utilities/borders.html</code></li>
              <li>PAGE :<code> public/modules/utilities/colors.html </code></li>
              <li>PAGE :<code> public/modules/utilities/display.html</code></li>
              <li>PAGE :<code> public/modules/utilities/flex.html </code></li>
              <li>PAGE :<code> public/modules/utilities/float.html </code></li>
              <li>PAGE :<code> public/modules/utilities/interactions.html </code></li>
              <li>PAGE :<code> public/modules/utilities/opacity.html </code></li>
              <li>PAGE :<code> public/modules/utilities/overflow.html </code></li>
              <li>PAGE :<code> public/modules/utilities/position.html </code></li>
              <li>PAGE :<code> public/modules/utilities/shadows.html </code></li>
              <li>PAGE :<code> public/modules/utilities/sizing.html </code></li>
              <li>PAGE :<code> public/modules/utilities/spacing.html </code></li>
              <li>PAGE :<code> public/modules/utilities/typography.html </code></li>
              <li>PAGE :<code> public/modules/utilities/vertical-align.html                                       </code></li>
              <li>PAGE :<code> public/modules/utilities/visibility.html</code></li>
              <li>PAGE :<code> public/pages/authentication/simple/forgot-password.html</code></li>
              <li>PAGE :<code> public/pages/authentication/simple/lock-screen.html</code></li>
              <li>PAGE :<code> public/pages/authentication/simple/reset-password.html</code></li>
              <li>PAGE :<code> public/pages/authentication/simple/sign-in.html</code></li>
              <li>PAGE :<code> public/pages/authentication/simple/sign-up.html</code></li>
              <li>PAGE :<code> public/pages/errors/404.html</code></li>
              <li>PAGE :<code> public/pages/errors/500.html</code></li>
              <li>PAGE :<code> public/pages/pages/members.html</code></li>
              <li>PAGE :<code> public/pages/starter.html</code></li>
            </ul>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.1.0</code> - Hermes</h5>
            <p class="mb-0">17 April, 2022</p>
          </div>
          <div class="card-body">
            <h6 class="mb-2">New</h6>
            <ul class="bullet-inside ps-0">
              <li>PAGE : <code>public/apps/e-commerce/orders.html</code></li>
              <li>PAGE : <code>public/apps/e-commerce/products.html</code></li>
              <li>PAGE : <code>public/pages/pages/faq-accordion.html</code></li>
              <li>PAGE : <code>public/pages/pages/pricing.html</code></li>
              <li>PAGE : <code>public/pages/pages/notifications.html</code></li>
              <li>PAGE : <code>public/pages/pages/pricing.html</code></li>
              <li>PAGE : <code>public/modules/components/navs-and-tabs/navbar.html</code></li>
              <li>PAGE : <code>public/modules/components/navs-and-tabs/tabs.html</code></li>
              <li>JS : <code>src/scripts/theme/list.js</code></li>
            </ul>
            <h6 class="mb-2">Update</h6>
            <ul class="bullet-inside ps-0">
              <li>JS : <code>webpack/webpack.config.js</code></li>
              <li>SCSS : <code>src/scss/theme/_badges.scss</code></li>
              <li>SCSS : <code>src/scss/theme/_mixed.scss</code></li>
              <li>SCSS : <code>src/scss/theme/_colors.scss</code></li>
              <li>SCSS : <code>src/scss/theme/_nav-tab.scss</code></li>
              <li>SCSS : <code>src/scss/theme/_pagination.scss</code></li>
              <li>SCSS : <code>src/scss/theme/_reboot.scss</code></li>
              <li>SCSS : <code>src/scss/theme/_search-box.scss</code></li>
              <li>SCSS : <code>src/scss/theme/_table.scss</code></li>
              <li>SCSS : <code>src/scss/theme/_variables.scss</code></li>
              <li>SCSS : <code>src/scss/theme/plugins/_list.scss</code></li>
              <li>SCSS : <code>src/scss/theme/root/_light.scss</code></li>
              <li>JSON : <code>package.json</code></li>
            </ul>
            <h6 class="mb-2">Fix</h6>
            <ul class="bullet-inside ps-0 mb-0">
              <li>Minor issues</li>
            </ul>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.0.1</code> - Theseus</h5>
            <p class="mb-0">30 March, 2022</p>
          </div>
          <div class="card-body">
            <h6 class="mb-2">Fix</h6>
            <ul class="bullet-inside ps-0 mb-0">
              <li>Minor issues</li>
            </ul>
          </div>
        </div>
        <div class="card shadow-none border my-3">
          <div class="card-header border-bottom bg-body">
            <h5 class="mb-2"><code class="fw-bold fs-7">v1.0.0</code> - Initial Release</h5>
            <p class="mb-0">24 March, 2022</p>
          </div>
          <div class="card-body">
            <p class="mb-0">Nothing to see here.</p>
          </div>
        </div>
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1050">
          <div class="toast align-items-center text-white bg-dark border-0" id="icon-copied-toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex" data-bs-theme="dark">
              <div class="toast-body p-3"></div><button class="btn-close me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
          </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
