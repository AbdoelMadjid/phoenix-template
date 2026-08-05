<li class="nav-item">
                          <!-- label-->
                          <p class="navbar-vertical-label">Documentation</p>
                          <hr class="navbar-vertical-line"><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link label-1 {{ request()->is('documentation/getting-started') ? 'active' : '' }}" href="{{ url('documentation/getting-started') }}" role="button" data-bs-toggle=""
                                  aria-expanded="false">
                                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                              data-feather="life-buoy"></span></span><span
                                          class="nav-link-text-wrapper"><span class="nav-link-text">Getting
                                              started</span></span></div>
                              </a></div><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-customization" role="button" data-bs-toggle="collapse"
                                  aria-expanded="{{ request()->is('documentation/customization*') ? 'true' : 'false' }}" aria-controls="nv-customization">
                                  <div class="d-flex align-items-center">
                                      <div class="dropdown-indicator-icon-wrapper"><span
                                              class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                          class="nav-link-icon"><span data-feather="settings"></span></span><span
                                          class="nav-link-text">Customization</span>
                                  </div>
                              </a>
                              <div class="parent-wrapper label-1">
                                  <ul class="nav collapse parent {{ request()->is('documentation/customization*') ? 'show' : '' }}" data-bs-parent="#navbarVerticalCollapse"
                                      id="nv-customization">
                                      <li class="collapsed-nav-item-title d-none">Customization</li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('documentation/customization/configuration') ? 'active' : '' }}" href="{{ url('documentation/customization/configuration') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Configuration</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('documentation/customization/styling') ? 'active' : '' }}" href="{{ url('documentation/customization/styling') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Styling</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('documentation/customization/color') ? 'active' : '' }}" href="{{ url('documentation/customization/color') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Color</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('documentation/customization/dark-mode') ? 'active' : '' }}" href="{{ url('documentation/customization/dark-mode') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Dark mode</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('documentation/customization/plugin') ? 'active' : '' }}" href="{{ url('documentation/customization/plugin') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Plugin</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                  </ul>
                              </div>
                          </div><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-layouts-doc" role="button" data-bs-toggle="collapse"
                                  aria-expanded="{{ request()->is('documentation/layouts*') ? 'true' : 'false' }}" aria-controls="nv-layouts-doc">
                                  <div class="d-flex align-items-center">
                                      <div class="dropdown-indicator-icon-wrapper"><span
                                              class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                          class="nav-link-icon"><span data-feather="table"></span></span><span
                                          class="nav-link-text">Layouts doc</span>
                                  </div>
                              </a>
                              <div class="parent-wrapper label-1">
                                  <ul class="nav collapse parent {{ request()->is('documentation/layouts*') ? 'show' : '' }}" data-bs-parent="#navbarVerticalCollapse"
                                      id="nv-layouts-doc">
                                      <li class="collapsed-nav-item-title d-none">Layouts doc</li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('documentation/layouts/vertical-navbar') ? 'active' : '' }}" href="{{ url('documentation/layouts/vertical-navbar') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Vertical navbar</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('documentation/layouts/horizontal-navbar') ? 'active' : '' }}" href="{{ url('documentation/layouts/horizontal-navbar') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Horizontal navbar</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('documentation/layouts/combo-navbar') ? 'active' : '' }}" href="{{ url('documentation/layouts/combo-navbar') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Combo navbar</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('documentation/layouts/dual-nav') ? 'active' : '' }}" href="{{ url('documentation/layouts/dual-nav') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Dual nav</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                  </ul>
                              </div>
                          </div><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link label-1 {{ request()->is('documentation/gulp') ? 'active' : '' }}" href="{{ url('documentation/gulp') }}"
                                  role="button" data-bs-toggle="" aria-expanded="false">
                                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                              class="fa-brands fa-gulp ms-1 me-1 fa-lg"></span></span><span
                                          class="nav-link-text-wrapper"><span
                                              class="nav-link-text">Gulp</span></span></div>
                              </a></div><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link label-1 {{ request()->is('documentation/design-file') ? 'active' : '' }}" href="{{ url('documentation/design-file') }}" role="button" data-bs-toggle=""
                                  aria-expanded="false">
                                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                              data-feather="figma"></span></span><span
                                          class="nav-link-text-wrapper"><span class="nav-link-text">Design
                                              file</span></span></div>
                              </a></div><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link label-1 {{ request()->is('changelog') ? 'active' : '' }}" href="{{ url('changelog') }}"
                                  role="button" data-bs-toggle="" aria-expanded="false">
                                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                              data-feather="git-merge"></span></span><span
                                          class="nav-link-text-wrapper"><span
                                              class="nav-link-text">Changelog</span></span></div>
                              </a></div><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link label-1 {{ request()->is('showcase') ? 'active' : '' }}" href="{{ url('showcase') }}"
                                  role="button" data-bs-toggle="" aria-expanded="false">
                                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                              data-feather="monitor"></span></span><span
                                          class="nav-link-text-wrapper"><span
                                              class="nav-link-text">Showcase</span></span></div>
                              </a></div>
                      </li>