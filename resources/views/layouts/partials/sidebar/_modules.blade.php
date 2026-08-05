<li class="nav-item">
                          <!-- label-->
                          <p class="navbar-vertical-label">Modules</p>
                          <hr class="navbar-vertical-line"><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-forms" role="button" data-bs-toggle="collapse"
                                  aria-expanded="{{ request()->is('modules/forms*') ? 'true' : 'false' }}" aria-controls="nv-forms">
                                  <div class="d-flex align-items-center">
                                      <div class="dropdown-indicator-icon-wrapper"><span
                                              class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                          class="nav-link-icon"><span data-feather="file-text"></span></span><span
                                          class="nav-link-text">Forms</span>
                                  </div>
                              </a>
                              <div class="parent-wrapper label-1">
                                  <ul class="nav collapse parent {{ request()->is('modules/forms*') ? 'show' : '' }}" data-bs-parent="#navbarVerticalCollapse"
                                      id="nv-forms">
                                      <li class="collapsed-nav-item-title d-none">Forms</li>
                                      <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-basic"
                                              data-bs-toggle="collapse" aria-expanded="{{ request()->is('modules/forms/basic*') ? 'true' : 'false' }}"
                                              aria-controls="nv-basic">
                                              <div class="d-flex align-items-center">
                                                  <div class="dropdown-indicator-icon-wrapper"><span
                                                          class="fas fa-caret-right dropdown-indicator-icon"></span>
                                                  </div><span class="nav-link-text">Basic</span>
                                              </div>
                                          </a><!-- more inner pages-->
                                          <div class="parent-wrapper">
                                              <ul class="nav collapse parent {{ request()->is('modules/forms/basic*') ? 'show' : '' }}" data-bs-parent="#nv-forms"
                                                  id="nv-basic">
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('modules/forms/basic/form-control') ? 'active' : '' }}" href="{{ url('modules/forms/basic/form-control') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Form control</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('modules/forms/basic/input-group') ? 'active' : '' }}" href="{{ url('modules/forms/basic/input-group') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Input group</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('modules/forms/basic/select') ? 'active' : '' }}" href="{{ url('modules/forms/basic/select') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Select</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('modules/forms/basic/checks') ? 'active' : '' }}" href="{{ url('modules/forms/basic/checks') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Checks</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('modules/forms/basic/range') ? 'active' : '' }}" href="{{ url('modules/forms/basic/range') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Range</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('modules/forms/basic/floating-labels') ? 'active' : '' }}" href="{{ url('modules/forms/basic/floating-labels') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Floating labels</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('modules/forms/basic/layout') ? 'active' : '' }}" href="{{ url('modules/forms/basic/layout') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Layout</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                              </ul>
                                          </div>
                                      </li>
                                      <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-advance" data-bs-toggle="collapse" aria-expanded="{{ request()->is('modules/forms/advance*') ? 'true' : 'false' }}"
                                              aria-controls="nv-advance">
                                              <div class="d-flex align-items-center">
                                                  <div class="dropdown-indicator-icon-wrapper"><span
                                                          class="fas fa-caret-right dropdown-indicator-icon"></span>
                                                  </div><span class="nav-link-text">Advance</span>
                                              </div>
                                          </a><!-- more inner pages-->
                                          <div class="parent-wrapper">
                                              <ul class="nav collapse parent {{ request()->is('modules/forms/advance*') ? 'show' : '' }}" data-bs-parent="#nv-forms"
                                                  id="nv-advance">
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('modules/forms/advance/advance-select') ? 'active' : '' }}" href="{{ url('modules/forms/advance/advance-select') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Advance select</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('modules/forms/advance/date-picker') ? 'active' : '' }}" href="{{ url('modules/forms/advance/date-picker') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Date picker</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('modules/forms/advance/editor') ? 'active' : '' }}" href="{{ url('modules/forms/advance/editor') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Editor</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('modules/forms/advance/file-uploader') ? 'active' : '' }}" href="{{ url('modules/forms/advance/file-uploader') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">File uploader</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('modules/forms/advance/range') ? 'active' : '' }}" href="{{ url('modules/forms/advance/range') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Range</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('modules/forms/advance/rating') ? 'active' : '' }}" href="{{ url('modules/forms/advance/rating') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Rating</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('modules/forms/advance/emoji-button') ? 'active' : '' }}" href="{{ url('modules/forms/advance/emoji-button') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Emoji button</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                              </ul>
                                          </div>
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/forms/validation') ? 'active' : '' }}" href="{{ url('modules/forms/validation') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Validation</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/forms/wizard') ? 'active' : '' }}" href="{{ url('modules/forms/wizard') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Wizard</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                  </ul>
                              </div>
                          </div><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-icons" role="button" data-bs-toggle="collapse"
                                  aria-expanded="{{ request()->is('modules/icons*') ? 'true' : 'false' }}" aria-controls="nv-icons">
                                  <div class="d-flex align-items-center">
                                      <div class="dropdown-indicator-icon-wrapper"><span
                                              class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                          class="nav-link-icon"><span data-feather="grid"></span></span><span
                                          class="nav-link-text">Icons</span>
                                  </div>
                              </a>
                              <div class="parent-wrapper label-1">
                                  <ul class="nav collapse parent {{ request()->is('modules/icons*') ? 'show' : '' }}" data-bs-parent="#navbarVerticalCollapse"
                                      id="nv-icons">
                                      <li class="collapsed-nav-item-title d-none">Icons</li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/icons/feather') ? 'active' : '' }}" href="{{ url('modules/icons/feather') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Feather</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/icons/font-awesome') ? 'active' : '' }}" href="{{ url('modules/icons/font-awesome') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Font awesome</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/icons/unicons') ? 'active' : '' }}" href="{{ url('modules/icons/unicons') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Unicons</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                  </ul>
                              </div>
                          </div><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-tables" role="button" data-bs-toggle="collapse"
                                  aria-expanded="{{ request()->is('modules/tables*') ? 'true' : 'false' }}" aria-controls="nv-tables">
                                  <div class="d-flex align-items-center">
                                      <div class="dropdown-indicator-icon-wrapper"><span
                                              class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                          class="nav-link-icon"><span data-feather="columns"></span></span><span
                                          class="nav-link-text">Tables</span>
                                  </div>
                              </a>
                              <div class="parent-wrapper label-1">
                                  <ul class="nav collapse parent {{ request()->is('modules/tables*') ? 'show' : '' }}" data-bs-parent="#navbarVerticalCollapse"
                                      id="nv-tables">
                                      <li class="collapsed-nav-item-title d-none">Tables</li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/tables/basic-tables') ? 'active' : '' }}" href="{{ url('modules/tables/basic-tables') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Basic tables</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/tables/advance-tables') ? 'active' : '' }}" href="{{ url('modules/tables/advance-tables') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Advance tables</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/tables/bulk-select') ? 'active' : '' }}" href="{{ url('modules/tables/bulk-select') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Bulk Select</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                  </ul>
                              </div>
                          </div><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-ECharts" role="button" data-bs-toggle="collapse"
                                  aria-expanded="{{ request()->is('modules/echarts*') ? 'true' : 'false' }}" aria-controls="nv-ECharts">
                                  <div class="d-flex align-items-center">
                                      <div class="dropdown-indicator-icon-wrapper"><span
                                              class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                          class="nav-link-icon"><span data-feather="bar-chart-2"></span></span><span
                                          class="nav-link-text">ECharts</span>
                                  </div>
                              </a>
                              <div class="parent-wrapper label-1">
                                  <ul class="nav collapse parent {{ request()->is('modules/echarts*') ? 'show' : '' }}" data-bs-parent="#navbarVerticalCollapse"
                                      id="nv-ECharts">
                                      <li class="collapsed-nav-item-title d-none">ECharts</li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/echarts/line-charts') ? 'active' : '' }}" href="{{ url('modules/echarts/line-charts') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Line charts</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/echarts/bar-charts') ? 'active' : '' }}" href="{{ url('modules/echarts/bar-charts') }}">
                                              <div class="d-flex align-items-center"><span class="nav-link-text">Bar
                                                      charts</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/echarts/candlestick-charts') ? 'active' : '' }}" href="{{ url('modules/echarts/candlestick-charts') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Candlestick charts</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/echarts/geo-map') ? 'active' : '' }}" href="{{ url('modules/echarts/geo-map') }}">
                                              <div class="d-flex align-items-center"><span class="nav-link-text">Geo
                                                      map</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/echarts/scatter-charts') ? 'active' : '' }}" href="{{ url('modules/echarts/scatter-charts') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Scatter charts</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/echarts/pie-charts') ? 'active' : '' }}" href="{{ url('modules/echarts/pie-charts') }}">
                                              <div class="d-flex align-items-center"><span class="nav-link-text">Pie
                                                      charts</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/echarts/gauge-chart') ? 'active' : '' }}" href="{{ url('modules/echarts/gauge-chart') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Gauge chart</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/echarts/radar-charts') ? 'active' : '' }}" href="{{ url('modules/echarts/radar-charts') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Radar charts</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/echarts/heatmap-charts') ? 'active' : '' }}" href="{{ url('modules/echarts/heatmap-charts') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Heatmap charts</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/echarts/how-to-use') ? 'active' : '' }}" href="{{ url('modules/echarts/how-to-use') }}">
                                              <div class="d-flex align-items-center"><span class="nav-link-text">How
                                                      to use</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                  </ul>
                              </div>
                          </div><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-components" role="button" data-bs-toggle="collapse"
                                  aria-expanded="{{ request()->is('modules/components*') ? 'true' : 'false' }}" aria-controls="nv-components">
                                  <div class="d-flex align-items-center">
                                      <div class="dropdown-indicator-icon-wrapper"><span
                                              class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                          class="nav-link-icon"><span data-feather="package"></span></span><span
                                          class="nav-link-text">Components</span><span
                                          class="fa-solid fa-circle text-info ms-1 new-page-indicator"
                                          style="font-size: 6px"></span>
                                  </div>
                              </a>
                              <div class="parent-wrapper label-1">
                                  <ul class="nav collapse parent {{ request()->is('modules/components*') ? 'show' : '' }}" data-bs-parent="#navbarVerticalCollapse"
                                      id="nv-components">
                                      <li class="collapsed-nav-item-title d-none">Components</li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/accordion') ? 'active' : '' }}" href="{{ url('modules/components/accordion') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Accordion</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/avatar') ? 'active' : '' }}" href="{{ url('modules/components/avatar') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Avatar</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/alerts') ? 'active' : '' }}" href="{{ url('modules/components/alerts') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Alerts</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/badge') ? 'active' : '' }}" href="{{ url('modules/components/badge') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Badge</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/breadcrumb') ? 'active' : '' }}" href="{{ url('modules/components/breadcrumb') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Breadcrumb</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/button') ? 'active' : '' }}" href="{{ url('modules/components/button') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Buttons</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/calendar') ? 'active' : '' }}" href="{{ url('modules/components/calendar') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Calendar</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/card') ? 'active' : '' }}" href="{{ url('modules/components/card') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Card</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-carousel" data-bs-toggle="collapse" aria-expanded="{{ request()->is('modules/components/carousel*') ? 'true' : 'false' }}"
                                              aria-controls="nv-carousel">
                                              <div class="d-flex align-items-center">
                                                  <div class="dropdown-indicator-icon-wrapper"><span
                                                          class="fas fa-caret-right dropdown-indicator-icon"></span>
                                                  </div><span class="nav-link-text">Carousel</span>
                                              </div>
                                          </a><!-- more inner pages-->
                                          <div class="parent-wrapper">
                                              <ul class="nav collapse parent {{ request()->is('modules/components/carousel*') ? 'show' : '' }}" data-bs-parent="#nv-components"
                                                  id="nv-carousel">
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/carousel/bootstrap') ? 'active' : '' }}" href="{{ url('modules/components/carousel/bootstrap') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Bootstrap</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/carousel/swiper') ? 'active' : '' }}" href="{{ url('modules/components/carousel/swiper') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Swiper</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                              </ul>
                                          </div>
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/collapse') ? 'active' : '' }}" href="{{ url('modules/components/collapse') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Collapse</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/dropdown') ? 'active' : '' }}" href="{{ url('modules/components/dropdown') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Dropdown</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/dhtmlx-gantt') ? 'active' : '' }}" href="{{ url('modules/components/dhtmlx-gantt') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Dhtmlx gantt</span><span
                                                      class="badge ms-2 badge badge-phoenix badge-phoenix-warning ">new</span>
                                              </div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/list-group') ? 'active' : '' }}" href="{{ url('modules/components/list-group') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">List group</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/modal') ? 'active' : '' }}" href="{{ url('modules/components/modal') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Modals</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-navs-_and_-Tabs" data-bs-toggle="collapse"
                                              aria-expanded="{{ request()->is('modules/components/navs-and-tabs*') ? 'true' : 'false' }}" aria-controls="nv-navs-_and_-Tabs">
                                              <div class="d-flex align-items-center">
                                                  <div class="dropdown-indicator-icon-wrapper"><span
                                                          class="fas fa-caret-right dropdown-indicator-icon"></span>
                                                  </div><span class="nav-link-text">Navs &amp; Tabs</span>
                                              </div>
                                          </a><!-- more inner pages-->
                                          <div class="parent-wrapper">
                                              <ul class="nav collapse parent {{ request()->is('modules/components/navs-and-tabs*') ? 'show' : '' }}" data-bs-parent="#nv-components"
                                                  id="nv-navs-_and_-Tabs">
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/navs-and-tabs/navs') ? 'active' : '' }}" href="{{ url('modules/components/navs-and-tabs/navs') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Navs</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/navs-and-tabs/navbar') ? 'active' : '' }}" href="{{ url('modules/components/navs-and-tabs/navbar') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Navbar</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/navs-and-tabs/tabs') ? 'active' : '' }}" href="{{ url('modules/components/navs-and-tabs/tabs') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Tabs</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                              </ul>
                                          </div>
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/offcanvas') ? 'active' : '' }}" href="{{ url('modules/components/offcanvas') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Offcanvas</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/progress-bar') ? 'active' : '' }}" href="{{ url('modules/components/progress-bar') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Progress bar</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/placeholder') ? 'active' : '' }}" href="{{ url('modules/components/placeholder') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Placeholder</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/pagination') ? 'active' : '' }}" href="{{ url('modules/components/pagination') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Pagination</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/popovers') ? 'active' : '' }}" href="{{ url('modules/components/popovers') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Popovers</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/scrollspy') ? 'active' : '' }}" href="{{ url('modules/components/scrollspy') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Scrollspy</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/sortable') ? 'active' : '' }}" href="{{ url('modules/components/sortable') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Sortable</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/spinners') ? 'active' : '' }}" href="{{ url('modules/components/spinners') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Spinners</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/toast') ? 'active' : '' }}" href="{{ url('modules/components/toast') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Toast</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/tooltips') ? 'active' : '' }}" href="{{ url('modules/components/tooltips') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Tooltips</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/typed-text') ? 'active' : '' }}" href="{{ url('modules/components/typed-text') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Typed text</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/components/chat-widget') ? 'active' : '' }}" href="{{ url('modules/components/chat-widget') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Chat widget</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                  </ul>
                              </div>
                          </div><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-utilities" role="button" data-bs-toggle="collapse"
                                  aria-expanded="{{ request()->is('modules/utilities*') ? 'true' : 'false' }}" aria-controls="nv-utilities">
                                  <div class="d-flex align-items-center">
                                      <div class="dropdown-indicator-icon-wrapper"><span
                                              class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                          class="nav-link-icon"><span data-feather="tool"></span></span><span
                                          class="nav-link-text">Utilities</span>
                                  </div>
                              </a>
                              <div class="parent-wrapper label-1">
                                  <ul class="nav collapse parent {{ request()->is('modules/utilities*') ? 'show' : '' }}" data-bs-parent="#navbarVerticalCollapse"
                                      id="nv-utilities">
                                      <li class="collapsed-nav-item-title d-none">Utilities</li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/utilities/background') ? 'active' : '' }}" href="{{ url('modules/utilities/background') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Background</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/utilities/borders') ? 'active' : '' }}" href="{{ url('modules/utilities/borders') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Borders</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/utilities/colors') ? 'active' : '' }}" href="{{ url('modules/utilities/colors') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Colors</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/utilities/display') ? 'active' : '' }}" href="{{ url('modules/utilities/display') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Display</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/utilities/flex') ? 'active' : '' }}" href="{{ url('modules/utilities/flex') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Flex</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/utilities/stacks') ? 'active' : '' }}" href="{{ url('modules/utilities/stacks') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Stacks</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/utilities/float') ? 'active' : '' }}" href="{{ url('modules/utilities/float') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Float</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/utilities/grid') ? 'active' : '' }}" href="{{ url('modules/utilities/grid') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Grid</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/utilities/interactions') ? 'active' : '' }}" href="{{ url('modules/utilities/interactions') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Interactions</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/utilities/opacity') ? 'active' : '' }}" href="{{ url('modules/utilities/opacity') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Opacity</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/utilities/overflow') ? 'active' : '' }}" href="{{ url('modules/utilities/overflow') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Overflow</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/utilities/position') ? 'active' : '' }}" href="{{ url('modules/utilities/position') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Position</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/utilities/shadows') ? 'active' : '' }}" href="{{ url('modules/utilities/shadows') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Shadows</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/utilities/sizing') ? 'active' : '' }}" href="{{ url('modules/utilities/sizing') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Sizing</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/utilities/spacing') ? 'active' : '' }}" href="{{ url('modules/utilities/spacing') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Spacing</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/utilities/typography') ? 'active' : '' }}" href="{{ url('modules/utilities/typography') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Typography</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/utilities/vertical-align') ? 'active' : '' }}" href="{{ url('modules/utilities/vertical-align') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Vertical align</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('modules/utilities/visibility') ? 'active' : '' }}" href="{{ url('modules/utilities/visibility') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Visibility</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                  </ul>
                              </div>
                          </div><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link label-1 {{ request()->is('widgets') ? 'active' : '' }}" href="{{ url('widgets') }}"
                                  role="button" data-bs-toggle="" aria-expanded="false">
                                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                              data-feather="server"></span></span><span
                                          class="nav-link-text-wrapper"><span
                                              class="nav-link-text">Widgets</span></span></div>
                              </a></div><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                  href="#nv-multi-level" role="button" data-bs-toggle="collapse"
                                  aria-expanded="false" aria-controls="nv-multi-level">
                                  <div class="d-flex align-items-center">
                                      <div class="dropdown-indicator-icon-wrapper"><span
                                              class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                          class="nav-link-icon"><span data-feather="layers"></span></span><span
                                          class="nav-link-text">Multi level</span>
                                  </div>
                              </a>
                              <div class="parent-wrapper label-1">
                                  <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                      id="nv-multi-level">
                                      <li class="collapsed-nav-item-title d-none">Multi level</li>
                                      <li class="nav-item"><a class="nav-link dropdown-indicator"
                                              href="#nv-level-two" data-bs-toggle="collapse" aria-expanded="false"
                                              aria-controls="nv-level-two">
                                              <div class="d-flex align-items-center">
                                                  <div class="dropdown-indicator-icon-wrapper"><span
                                                          class="fas fa-caret-right dropdown-indicator-icon"></span>
                                                  </div><span class="nav-link-text">Level two</span>
                                              </div>
                                          </a><!-- more inner pages-->
                                          <div class="parent-wrapper">
                                              <ul class="nav collapse parent" data-bs-parent="#multi-level"
                                                  id="nv-level-two">
                                                  <li class="nav-item"><a class="nav-link" href="#!.html">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Item 1</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" href="#!.html">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Item 2</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                              </ul>
                                          </div>
                                      </li>
                                      <li class="nav-item"><a class="nav-link dropdown-indicator"
                                              href="#nv-level-three" data-bs-toggle="collapse"
                                              aria-expanded="false" aria-controls="nv-level-three">
                                              <div class="d-flex align-items-center">
                                                  <div class="dropdown-indicator-icon-wrapper"><span
                                                          class="fas fa-caret-right dropdown-indicator-icon"></span>
                                                  </div><span class="nav-link-text">Level three</span>
                                              </div>
                                          </a><!-- more inner pages-->
                                          <div class="parent-wrapper">
                                              <ul class="nav collapse parent" data-bs-parent="#multi-level"
                                                  id="nv-level-three">
                                                  <li class="nav-item"><a class="nav-link" href="#!.html">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Item 3</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                          href="#nv-item-4" data-bs-toggle="collapse"
                                                          aria-expanded="false" aria-controls="nv-item-4">
                                                          <div class="d-flex align-items-center">
                                                              <div class="dropdown-indicator-icon-wrapper"><span
                                                                      class="fas fa-caret-right dropdown-indicator-icon"></span>
                                                              </div><span class="nav-link-text">Item 4</span>
                                                          </div>
                                                      </a><!-- more inner pages-->
                                                      <div class="parent-wrapper">
                                                          <ul class="nav collapse parent"
                                                              data-bs-parent="#level-three" id="nv-item-4">
                                                              <li class="nav-item"><a class="nav-link"
                                                                      href="#!.html">
                                                                      <div class="d-flex align-items-center"><span
                                                                              class="nav-link-text">Item 5</span>
                                                                      </div>
                                                                  </a><!-- more inner pages-->
                                                              </li>
                                                              <li class="nav-item"><a class="nav-link"
                                                                      href="#!.html">
                                                                      <div class="d-flex align-items-center"><span
                                                                              class="nav-link-text">Item 6</span>
                                                                      </div>
                                                                  </a><!-- more inner pages-->
                                                              </li>
                                                          </ul>
                                                      </div>
                                                  </li>
                                              </ul>
                                          </div>
                                      </li>
                                      <li class="nav-item"><a class="nav-link dropdown-indicator"
                                              href="#nv-level-four" data-bs-toggle="collapse"
                                              aria-expanded="false" aria-controls="nv-level-four">
                                              <div class="d-flex align-items-center">
                                                  <div class="dropdown-indicator-icon-wrapper"><span
                                                          class="fas fa-caret-right dropdown-indicator-icon"></span>
                                                  </div><span class="nav-link-text">Level four</span>
                                              </div>
                                          </a><!-- more inner pages-->
                                          <div class="parent-wrapper">
                                              <ul class="nav collapse parent" data-bs-parent="#multi-level"
                                                  id="nv-level-four">
                                                  <li class="nav-item"><a class="nav-link" href="#!.html">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Item 6</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                          href="#nv-item-7" data-bs-toggle="collapse"
                                                          aria-expanded="false" aria-controls="nv-item-7">
                                                          <div class="d-flex align-items-center">
                                                              <div class="dropdown-indicator-icon-wrapper"><span
                                                                      class="fas fa-caret-right dropdown-indicator-icon"></span>
                                                              </div><span class="nav-link-text">Item 7</span>
                                                          </div>
                                                      </a><!-- more inner pages-->
                                                      <div class="parent-wrapper">
                                                          <ul class="nav collapse parent"
                                                              data-bs-parent="#level-four" id="nv-item-7">
                                                              <li class="nav-item"><a class="nav-link"
                                                                      href="#!.html">
                                                                      <div class="d-flex align-items-center"><span
                                                                              class="nav-link-text">Item 8</span>
                                                                      </div>
                                                                  </a><!-- more inner pages-->
                                                              </li>
                                                              <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                                      href="#nv-item-9" data-bs-toggle="collapse"
                                                                      aria-expanded="false"
                                                                      aria-controls="nv-item-9">
                                                                      <div class="d-flex align-items-center">
                                                                          <div
                                                                              class="dropdown-indicator-icon-wrapper">
                                                                              <span
                                                                                  class="fas fa-caret-right dropdown-indicator-icon"></span>
                                                                          </div><span class="nav-link-text">Item
                                                                              9</span>
                                                                      </div>
                                                                  </a><!-- more inner pages-->
                                                                  <div class="parent-wrapper">
                                                                      <ul class="nav collapse parent"
                                                                          data-bs-parent="#item-7" id="nv-item-9">
                                                                          <li class="nav-item"><a class="nav-link"
                                                                                  href="#!.html">
                                                                                  <div
                                                                                      class="d-flex align-items-center">
                                                                                      <span class="nav-link-text">Item
                                                                                          10</span></div>
                                                                              </a><!-- more inner pages-->
                                                                          </li>
                                                                          <li class="nav-item"><a class="nav-link"
                                                                                  href="#!.html">
                                                                                  <div
                                                                                      class="d-flex align-items-center">
                                                                                      <span class="nav-link-text">Item
                                                                                          11</span></div>
                                                                              </a><!-- more inner pages-->
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                              </li>
                                                          </ul>
                                                      </div>
                                                  </li>
                                              </ul>
                                          </div>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </li>