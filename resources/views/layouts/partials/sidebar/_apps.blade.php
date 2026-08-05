<li class="nav-item">
                          <!-- label-->
                          <p class="navbar-vertical-label">Apps</p>
                          <hr class="navbar-vertical-line"><!-- parent pages-->
<div class="nav-item-wrapper">
    <a class="nav-link dropdown-indicator label-1" href="#nv-home"
        role="button" data-bs-toggle="collapse" aria-expanded="{{ request()->is('apps/home*') ? 'true' : 'false' }}" aria-controls="nv-home">
        <div class="d-flex align-items-center">
            <div class="dropdown-indicator-icon-wrapper"><span
                    class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                class="nav-link-icon"><span data-feather="pie-chart"></span></span><span
                    class="nav-link-text">Home</span>
            </div>
    </a>
    <div class="parent-wrapper label-1">
        <ul class="nav collapse parent {{ request()->is('apps/home*') ? 'show' : '' }}" data-bs-parent="#navbarVerticalCollapse"
            id="nv-home">
            <li class="collapsed-nav-item-title d-none">home</li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('apps/home/e-commerce') ? 'active' : '' }}" href="{{ url('dashboard/e-commerce') }}">
                    <div class="d-flex align-items-center"><span class="nav-link-text">E-commerce</span></div>
                </a><!-- more inner pages-->
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('apps/home/project-management') ? 'active' : '' }}" href="{{ url('dashboard/project-management') }}">
                    <div class="d-flex align-items-center"><span class="nav-link-text">Project management</span></div>
                </a><!-- more inner pages-->
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('apps/home/crm') ? 'active' : '' }}" href="{{ url('dashboard/crm') }}">
                    <div class="d-flex align-items-center"><span class="nav-link-text">CRM</span></div>
                </a><!-- more inner pages-->
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('apps/home/travel-agency') ? 'active' : '' }}" href="{{ url('dashboard/travel-agency') }}">
                    <div class="d-flex align-items-center"><span class="nav-link-text">Travel agency</span></div>
                </a><!-- more inner pages-->
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('apps/home/stock') ? 'active' : '' }}" href="{{ url('dashboard/stock') }}">
                    <div class="d-flex align-items-center"><span class="nav-link-text">Stock</span>
                        <span class="badge ms-2 badge badge-phoenix badge-phoenix-warning ">new</span>
                    </div>
                </a><!-- more inner pages-->
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('apps/social/feed') ? 'active' : '' }}" href="{{ url('apps/social/feed') }}">
                    <div class="d-flex align-items-center"><span class="nav-link-text">Social feed</span></div>
                </a><!-- more inner pages-->
            </li>
        </ul>
    </div>
</div>                          
                          <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-e-commerce" role="button" data-bs-toggle="collapse" aria-expanded="{{ request()->is('apps/e-commerce*') ? 'true' : 'false' }}"
                                  aria-controls="nv-e-commerce">
                                  <div class="d-flex align-items-center">
                                      <div class="dropdown-indicator-icon-wrapper"><span
                                              class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                          class="nav-link-icon"><span data-feather="shopping-cart"></span></span><span
                                          class="nav-link-text">E commerce</span>
                                  </div>
                              </a>
                              <div class="parent-wrapper label-1">
                                  <ul class="nav collapse parent {{ request()->is('apps/e-commerce*') ? 'show' : '' }}" data-bs-parent="#navbarVerticalCollapse"
                                      id="nv-e-commerce">
                                      <li class="collapsed-nav-item-title d-none">E commerce</li>
                                      <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-admin"
                                              data-bs-toggle="collapse" aria-expanded="{{ request()->is('apps/e-commerce/admin*') ? 'true' : 'false' }}" aria-controls="nv-admin">
                                              <div class="d-flex align-items-center">
                                                  <div class="dropdown-indicator-icon-wrapper"><span
                                                          class="fas fa-caret-right dropdown-indicator-icon"></span>
                                                  </div><span class="nav-link-text">Admin</span>
                                              </div>
                                          </a><!-- more inner pages-->
                                          <div class="parent-wrapper">
                                              <ul class="nav collapse parent {{ request()->is('apps/e-commerce/admin*') ? 'show' : '' }}" data-bs-parent="#nv-e-commerce"
                                                  id="nv-admin">
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('apps/e-commerce/admin/add-product') ? 'active' : '' }}" href="{{ url('apps/e-commerce/admin/add-product') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Add product</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('apps/e-commerce/admin/products') ? 'active' : '' }}" href="{{ url('apps/e-commerce/admin/products') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Products</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('apps/e-commerce/admin/customers') ? 'active' : '' }}" href="{{ url('apps/e-commerce/admin/customers') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Customers</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('apps/e-commerce/admin/customer-details') ? 'active' : '' }}" href="{{ url('apps/e-commerce/admin/customer-details') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Customer details</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('apps/e-commerce/admin/orders') ? 'active' : '' }}" href="{{ url('apps/e-commerce/admin/orders') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Orders</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('apps/e-commerce/admin/order-details') ? 'active' : '' }}" href="{{ url('apps/e-commerce/admin/order-details') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Order details</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('apps/e-commerce/admin/refund') ? 'active' : '' }}" href="{{ url('apps/e-commerce/admin/refund') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Refund</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                              </ul>
                                          </div>
                                      </li>
                                      <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-customer"
                                              data-bs-toggle="collapse" aria-expanded="{{ request()->is('apps/e-commerce/landing*') ? 'true' : 'false' }}"
                                              aria-controls="nv-customer">
                                              <div class="d-flex align-items-center">
                                                  <div class="dropdown-indicator-icon-wrapper"><span
                                                          class="fas fa-caret-right dropdown-indicator-icon"></span>
                                                  </div><span class="nav-link-text">Customer</span>
                                              </div>
                                          </a><!-- more inner pages-->
                                          <div class="parent-wrapper">
                                              <ul class="nav collapse parent {{ request()->is('apps/e-commerce/landing*') ? 'show' : '' }}" data-bs-parent="#nv-e-commerce"
                                                  id="nv-customer">
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('apps/e-commerce/landing/homepage') ? 'active' : '' }}" href="{{ url('apps/e-commerce/landing/homepage') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Homepage</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('apps/e-commerce/landing/product-details') ? 'active' : '' }}" href="{{ url('apps/e-commerce/landing/product-details') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Product details</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('apps/e-commerce/landing/products-filter') ? 'active' : '' }}" href="{{ url('apps/e-commerce/landing/products-filter') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Products filter</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('apps/e-commerce/landing/cart') ? 'active' : '' }}" href="{{ url('apps/e-commerce/landing/cart') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Cart</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('apps/e-commerce/landing/checkout') ? 'active' : '' }}" href="{{ url('apps/e-commerce/landing/checkout') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Checkout</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('apps/e-commerce/landing/shipping-info') ? 'active' : '' }}" href="{{ url('apps/e-commerce/landing/shipping-info') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Shipping info</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('apps/e-commerce/landing/profile') ? 'active' : '' }}" href="{{ url('apps/e-commerce/landing/profile') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Profile</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('apps/e-commerce/landing/favourite-stores') ? 'active' : '' }}" href="{{ url('apps/e-commerce/landing/favourite-stores') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Favourite stores</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('apps/e-commerce/landing/wishlist') ? 'active' : '' }}" href="{{ url('apps/e-commerce/landing/wishlist') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Wishlist</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('apps/e-commerce/landing/order-tracking') ? 'active' : '' }}" href="{{ url('apps/e-commerce/landing/order-tracking') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Order tracking</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('apps/e-commerce/landing/invoice') ? 'active' : '' }}" href="{{ url('apps/e-commerce/landing/invoice') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Invoice</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                              </ul>
                                          </div>
                                      </li>
                                  </ul>
                              </div>
                          </div><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-CRM"
                                  role="button" data-bs-toggle="collapse" aria-expanded="{{ request()->is('apps/crm*') ? 'true' : 'false' }}"
                                  aria-controls="nv-CRM">
                                  <div class="d-flex align-items-center">
                                      <div class="dropdown-indicator-icon-wrapper"><span
                                              class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                          class="nav-link-icon"><span data-feather="phone"></span></span><span
                                          class="nav-link-text">CRM</span>
                                  </div>
                              </a>
                              <div class="parent-wrapper label-1">
                                  <ul class="nav collapse parent {{ request()->is('apps/crm*') ? 'show' : '' }}" data-bs-parent="#navbarVerticalCollapse"
                                      id="nv-CRM">
                                      <li class="collapsed-nav-item-title d-none">CRM</li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/crm/analytics') ? 'active' : '' }}" href="{{ url('apps/crm/analytics') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Analytics</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/crm/deals') ? 'active' : '' }}" href="{{ url('apps/crm/deals') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Deals</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/crm/deal-details') ? 'active' : '' }}" href="{{ url('apps/crm/deal-details') }}">
                                              <div class="d-flex align-items-center"><span class="nav-link-text">Deal
                                                      details</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/crm/leads') ? 'active' : '' }}" href="{{ url('apps/crm/leads') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Leads</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/crm/lead-details') ? 'active' : '' }}" href="{{ url('apps/crm/lead-details') }}">
                                              <div class="d-flex align-items-center"><span class="nav-link-text">Lead
                                                      details</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/crm/reports') ? 'active' : '' }}" href="{{ url('apps/crm/reports') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Reports</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/crm/report-details') ? 'active' : '' }}" href="{{ url('apps/crm/report-details') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Report details</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/crm/add-contact') ? 'active' : '' }}" href="{{ url('apps/crm/add-contact') }}">
                                              <div class="d-flex align-items-center"><span class="nav-link-text">Add
                                                      contact</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                  </ul>
                              </div>
                          </div><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-project-management" role="button" data-bs-toggle="collapse"
                                  aria-expanded="{{ request()->is('apps/project-management*') ? 'true' : 'false' }}" aria-controls="nv-project-management">
                                  <div class="d-flex align-items-center">
                                      <div class="dropdown-indicator-icon-wrapper"><span
                                              class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                          class="nav-link-icon"><span data-feather="clipboard"></span></span><span
                                          class="nav-link-text">Project management</span>
                                  </div>
                              </a>
                              <div class="parent-wrapper label-1">
                                  <ul class="nav collapse parent {{ request()->is('apps/project-management*') ? 'show' : '' }}" data-bs-parent="#navbarVerticalCollapse"
                                      id="nv-project-management">
                                      <li class="collapsed-nav-item-title d-none">Project management</li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/project-management/create-new') ? 'active' : '' }}" href="{{ url('apps/project-management/create-new') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Create new</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/project-management/project-list-view') ? 'active' : '' }}" href="{{ url('apps/project-management/project-list-view') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Project list view</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/project-management/project-card-view') ? 'active' : '' }}" href="{{ url('apps/project-management/project-card-view') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Project card view</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/project-management/project-board-view') ? 'active' : '' }}" href="{{ url('apps/project-management/project-board-view') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Project board view</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/project-management/todo-list') ? 'active' : '' }}" href="{{ url('apps/project-management/todo-list') }}">
                                              <div class="d-flex align-items-center"><span class="nav-link-text">Todo
                                                      list</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/project-management/project-details') ? 'active' : '' }}" href="{{ url('apps/project-management/project-details') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Project details</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                  </ul>
                              </div>
                          </div><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-travel-agency" role="button" data-bs-toggle="collapse"
                                  aria-expanded="{{ request()->is('apps/travel-agency*') ? 'true' : 'false' }}" aria-controls="nv-travel-agency">
                                  <div class="d-flex align-items-center">
                                      <div class="dropdown-indicator-icon-wrapper"><span
                                              class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                          class="nav-link-icon"><span data-feather="briefcase"></span></span><span
                                          class="nav-link-text">Travel agency</span>
                                  </div>
                              </a>
                              <div class="parent-wrapper label-1">
                                  <ul class="nav collapse parent {{ request()->is('apps/travel-agency*') ? 'show' : '' }}" data-bs-parent="#navbarVerticalCollapse"
                                      id="nv-travel-agency">
                                      <li class="collapsed-nav-item-title d-none">Travel agency</li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/travel-agency/landing') ? 'active' : '' }}" href="{{ url('apps/travel-agency/landing') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Landing</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-hotel"
                                              data-bs-toggle="collapse" aria-expanded="{{ request()->is('apps/travel-agency/hotel*') ? 'true' : 'false' }}"
                                              aria-controls="nv-hotel">
                                              <div class="d-flex align-items-center">
                                                  <div class="dropdown-indicator-icon-wrapper"><span
                                                          class="fas fa-caret-right dropdown-indicator-icon"></span>
                                                  </div><span class="nav-link-text">Hotel</span>
                                              </div>
                                          </a><!-- more inner pages-->
                                          <div class="parent-wrapper">
                                              <ul class="nav collapse parent {{ request()->is('apps/travel-agency/hotel*') ? 'show' : '' }}" data-bs-parent="#nv-travel-agency"
                                                  id="nv-hotel">
                                                  <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-hotel-admin" data-bs-toggle="collapse"
                                                          aria-expanded="{{ request()->is('apps/travel-agency/hotel/admin*') ? 'true' : 'false' }}" aria-controls="nv-hotel-admin">
                                                          <div class="d-flex align-items-center">
                                                              <div class="dropdown-indicator-icon-wrapper"><span
                                                                      class="fas fa-caret-right dropdown-indicator-icon"></span>
                                                              </div><span class="nav-link-text">Admin</span>
                                                          </div>
                                                      </a><!-- more inner pages-->
                                                      <div class="parent-wrapper">
                                                          <ul class="nav collapse parent {{ request()->is('apps/travel-agency/hotel/admin*') ? 'show' : '' }}" data-bs-parent="#nv-hotel"
                                                              id="nv-hotel-admin">
                                                              <li class="nav-item"><a class="nav-link {{ request()->is('apps/travel-agency/hotel/admin/add-property') ? 'active' : '' }}" href="{{ url('apps/travel-agency/hotel/admin/add-property') }}">
                                                                      <div class="d-flex align-items-center"><span
                                                                              class="nav-link-text">Add property</span>
                                                                      </div>
                                                                  </a><!-- more inner pages-->
                                                              </li>
                                                              <li class="nav-item"><a class="nav-link {{ request()->is('apps/travel-agency/hotel/admin/add-room') ? 'active' : '' }}" href="{{ url('apps/travel-agency/hotel/admin/add-room') }}">
                                                                      <div class="d-flex align-items-center"><span
                                                                              class="nav-link-text">Add room</span>
                                                                      </div>
                                                                  </a><!-- more inner pages-->
                                                              </li>
                                                              <li class="nav-item"><a class="nav-link {{ request()->is('apps/travel-agency/hotel/admin/room-listing') ? 'active' : '' }}" href="{{ url('apps/travel-agency/hotel/admin/room-listing') }}">
                                                                      <div class="d-flex align-items-center"><span
                                                                              class="nav-link-text">Room listing</span>
                                                                      </div>
                                                                  </a><!-- more inner pages-->
                                                              </li>
                                                              <li class="nav-item"><a class="nav-link {{ request()->is('apps/travel-agency/hotel/admin/room-search') ? 'active' : '' }}" href="{{ url('apps/travel-agency/hotel/admin/room-search') }}">
                                                                      <div class="d-flex align-items-center"><span
                                                                              class="nav-link-text">Search room</span>
                                                                      </div>
                                                                  </a><!-- more inner pages-->
                                                              </li>
                                                          </ul>
                                                      </div>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-hotel-customer" data-bs-toggle="collapse"
                                                          aria-expanded="{{ request()->is('apps/travel-agency/hotel/customer*') ? 'true' : 'false' }}" aria-controls="nv-hotel-customer">
                                                          <div class="d-flex align-items-center">
                                                              <div class="dropdown-indicator-icon-wrapper"><span
                                                                      class="fas fa-caret-right dropdown-indicator-icon"></span>
                                                              </div><span class="nav-link-text">Customer</span>
                                                          </div>
                                                      </a><!-- more inner pages-->
                                                      <div class="parent-wrapper">
                                                          <ul class="nav collapse parent {{ request()->is('apps/travel-agency/hotel/customer*') ? 'show' : '' }}" data-bs-parent="#nv-hotel"
                                                              id="nv-hotel-customer">
                                                              <li class="nav-item"><a class="nav-link {{ request()->is('apps/travel-agency/hotel/customer/homepage') ? 'active' : '' }}" href="{{ url('apps/travel-agency/hotel/customer/homepage') }}">
                                                                      <div class="d-flex align-items-center"><span
                                                                              class="nav-link-text">Homepage</span>
                                                                      </div>
                                                                  </a><!-- more inner pages-->
                                                              </li>
                                                              <li class="nav-item"><a class="nav-link {{ request()->is('apps/travel-agency/hotel/customer/hotel-details') ? 'active' : '' }}" href="{{ url('apps/travel-agency/hotel/customer/hotel-details') }}">
                                                                      <div class="d-flex align-items-center"><span
                                                                              class="nav-link-text">Hotel
                                                                              details</span></div>
                                                                  </a><!-- more inner pages-->
                                                              </li>
                                                              <li class="nav-item"><a class="nav-link {{ request()->is('apps/travel-agency/hotel/customer/hotel-compare') ? 'active' : '' }}" href="{{ url('apps/travel-agency/hotel/customer/hotel-compare') }}">
                                                                      <div class="d-flex align-items-center"><span
                                                                              class="nav-link-text">Hotel
                                                                              compare</span></div>
                                                                  </a><!-- more inner pages-->
                                                              </li>
                                                              <li class="nav-item"><a class="nav-link {{ request()->is('apps/travel-agency/hotel/customer/checkout') ? 'active' : '' }}" href="{{ url('apps/travel-agency/hotel/customer/checkout') }}">
                                                                      <div class="d-flex align-items-center"><span
                                                                              class="nav-link-text">Checkout</span>
                                                                      </div>
                                                                  </a><!-- more inner pages-->
                                                              </li>
                                                              <li class="nav-item"><a class="nav-link {{ request()->is('apps/travel-agency/hotel/customer/payment') ? 'active' : '' }}" href="{{ url('apps/travel-agency/hotel/customer/payment') }}">
                                                                      <div class="d-flex align-items-center"><span
                                                                              class="nav-link-text">Payment</span>
                                                                      </div>
                                                                  </a><!-- more inner pages-->
                                                              </li>
                                                              <li class="nav-item"><a class="nav-link {{ request()->is('apps/travel-agency/hotel/customer/gallery') ? 'active' : '' }}" href="{{ url('apps/travel-agency/hotel/customer/gallery') }}">
                                                                      <div class="d-flex align-items-center"><span
                                                                              class="nav-link-text">Gallery</span>
                                                                      </div>
                                                                  </a><!-- more inner pages-->
                                                              </li>
                                                          </ul>
                                                      </div>
                                                  </li>
                                              </ul>
                                          </div>
                                      </li>
                                      <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-flight"
                                              data-bs-toggle="collapse" aria-expanded="{{ request()->is('apps/travel-agency/flight*') ? 'true' : 'false' }}"
                                              aria-controls="nv-flight">
                                              <div class="d-flex align-items-center">
                                                  <div class="dropdown-indicator-icon-wrapper"><span
                                                          class="fas fa-caret-right dropdown-indicator-icon"></span>
                                                  </div><span class="nav-link-text">Flight</span>
                                              </div>
                                          </a><!-- more inner pages-->
                                          <div class="parent-wrapper">
                                              <ul class="nav collapse parent {{ request()->is('apps/travel-agency/flight*') ? 'show' : '' }}" data-bs-parent="#nv-travel-agency"
                                                  id="nv-flight">
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('apps/travel-agency/flight/homepage') ? 'active' : '' }}" href="{{ url('apps/travel-agency/flight/homepage') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Homepage</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('apps/travel-agency/flight/booking') ? 'active' : '' }}" href="{{ url('apps/travel-agency/flight/booking') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Booking</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('apps/travel-agency/flight/payment') ? 'active' : '' }}" href="{{ url('apps/travel-agency/flight/payment') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Payment</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                              </ul>
                                          </div>
                                      </li>
                                      <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-trip"
                                              data-bs-toggle="collapse" aria-expanded="{{ request()->is('apps/travel-agency/trip*') ? 'true' : 'false' }}"
                                              aria-controls="nv-trip">
                                              <div class="d-flex align-items-center">
                                                  <div class="dropdown-indicator-icon-wrapper"><span
                                                          class="fas fa-caret-right dropdown-indicator-icon"></span>
                                                  </div><span class="nav-link-text">Trip</span>
                                              </div>
                                          </a><!-- more inner pages-->
                                          <div class="parent-wrapper">
                                              <ul class="nav collapse parent {{ request()->is('apps/travel-agency/trip*') ? 'show' : '' }}" data-bs-parent="#nv-travel-agency"
                                                  id="nv-trip">
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('apps/travel-agency/trip/homepage') ? 'active' : '' }}" href="{{ url('apps/travel-agency/trip/homepage') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Homepage</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('apps/travel-agency/trip/trip-details') ? 'active' : '' }}" href="{{ url('apps/travel-agency/trip/trip-details') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Trip details</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link {{ request()->is('apps/travel-agency/trip/checkout') ? 'active' : '' }}" href="{{ url('apps/travel-agency/trip/checkout') }}">
                                                          <div class="d-flex align-items-center"><span
                                                                  class="nav-link-text">Checkout</span></div>
                                                      </a><!-- more inner pages-->
                                                  </li>
                                              </ul>
                                          </div>
                                      </li>
                                  </ul>
                              </div>
                          </div><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-stock" role="button" data-bs-toggle="collapse" aria-expanded="{{ request()->is('apps/stock*') ? 'true' : 'false' }}"
                                  aria-controls="nv-stock">
                                  <div class="d-flex align-items-center">
                                      <div class="dropdown-indicator-icon-wrapper"><span
                                              class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                          class="nav-link-icon"><span data-feather="dollar-sign"></span></span><span
                                          class="nav-link-text">Stock</span><span
                                          class="badge ms-2 badge badge-phoenix badge-phoenix-warning nav-link-badge">new</span>
                                  </div>
                              </a>
                              <div class="parent-wrapper label-1">
                                  <ul class="nav collapse parent {{ request()->is('apps/stock*') ? 'show' : '' }}" data-bs-parent="#navbarVerticalCollapse"
                                      id="nv-stock">
                                      <li class="collapsed-nav-item-title d-none">Stock</li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/stock/stock-details') ? 'active' : '' }}" href="{{ url('apps/stock/stock-details') }}">
                                              <div class="d-flex align-items-center"><span class="nav-link-text">Stock
                                                      details</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/stock/portfolio') ? 'active' : '' }}" href="{{ url('apps/stock/portfolio') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Portfolio</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/stock/watchlist') ? 'active' : '' }}" href="{{ url('apps/stock/watchlist') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Watchlist</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                  </ul>
                              </div>
                          </div><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link label-1 {{ request()->is('apps/chat') ? 'active' : '' }}" href="{{ url('apps/chat') }}"
                                  role="button" data-bs-toggle="" aria-expanded="false">
                                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                              data-feather="message-square"></span></span><span
                                          class="nav-link-text-wrapper"><span class="nav-link-text">Chat</span></span>
                                  </div>
                              </a></div><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-email" role="button" data-bs-toggle="collapse" aria-expanded="{{ request()->is('apps/email*') ? 'true' : 'false' }}"
                                  aria-controls="nv-email">
                                  <div class="d-flex align-items-center">
                                      <div class="dropdown-indicator-icon-wrapper"><span
                                              class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                          class="nav-link-icon"><span data-feather="mail"></span></span><span
                                          class="nav-link-text">Email</span>
                                  </div>
                              </a>
                              <div class="parent-wrapper label-1">
                                  <ul class="nav collapse parent {{ request()->is('apps/email*') ? 'show' : '' }}" data-bs-parent="#navbarVerticalCollapse"
                                      id="nv-email">
                                      <li class="collapsed-nav-item-title d-none">Email</li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/email/inbox') ? 'active' : '' }}" href="{{ url('apps/email/inbox') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Inbox</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/email/email-detail') ? 'active' : '' }}" href="{{ url('apps/email/email-detail') }}">
                                              <div class="d-flex align-items-center"><span class="nav-link-text">Email
                                                      detail</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/email/compose') ? 'active' : '' }}" href="{{ url('apps/email/compose') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Compose</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                  </ul>
                              </div>
                          </div><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-events" role="button" data-bs-toggle="collapse" aria-expanded="{{ request()->is('apps/events*') ? 'true' : 'false' }}"
                                  aria-controls="nv-events">
                                  <div class="d-flex align-items-center">
                                      <div class="dropdown-indicator-icon-wrapper"><span
                                              class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                          class="nav-link-icon"><span data-feather="bookmark"></span></span><span
                                          class="nav-link-text">Events</span>
                                  </div>
                              </a>
                              <div class="parent-wrapper label-1">
                                  <ul class="nav collapse parent {{ request()->is('apps/events*') ? 'show' : '' }}" data-bs-parent="#navbarVerticalCollapse"
                                      id="nv-events">
                                      <li class="collapsed-nav-item-title d-none">Events</li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/events/create-an-event') ? 'active' : '' }}" href="{{ url('apps/events/create-an-event') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Create an event</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/events/event-detail') ? 'active' : '' }}" href="{{ url('apps/events/event-detail') }}">
                                              <div class="d-flex align-items-center"><span class="nav-link-text">Event
                                                      detail</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                  </ul>
                              </div>
                          </div><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-kanban" role="button" data-bs-toggle="collapse" aria-expanded="{{ request()->is('apps/kanban*') ? 'true' : 'false' }}"
                                  aria-controls="nv-kanban">
                                  <div class="d-flex align-items-center">
                                      <div class="dropdown-indicator-icon-wrapper"><span
                                              class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                          class="nav-link-icon"><span data-feather="trello"></span></span><span
                                          class="nav-link-text">Kanban</span>
                                  </div>
                              </a>
                              <div class="parent-wrapper label-1">
                                  <ul class="nav collapse parent {{ request()->is('apps/kanban*') ? 'show' : '' }}" data-bs-parent="#navbarVerticalCollapse"
                                      id="nv-kanban">
                                      <li class="collapsed-nav-item-title d-none">Kanban</li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/kanban/kanban') ? 'active' : '' }}" href="{{ url('apps/kanban/kanban') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Kanban</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/kanban/boards') ? 'active' : '' }}" href="{{ url('apps/kanban/boards') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Boards</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/kanban/create-kanban-board') ? 'active' : '' }}" href="{{ url('apps/kanban/create-kanban-board') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Create board</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                  </ul>
                              </div>
                          </div><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link label-1 {{ request()->is('apps/gantt-chart') ? 'active' : '' }}" href="{{ url('apps/gantt-chart') }}"
                                  role="button" data-bs-toggle="" aria-expanded="false">
                                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                              class="fa-solid fa-chart-gantt "></span></span><span
                                          class="nav-link-text-wrapper"><span class="nav-link-text">Gantt
                                              chart</span></span><span
                                          class="badge ms-2 badge badge-phoenix badge-phoenix-warning nav-link-badge">new</span>
                                  </div>
                              </a></div><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-social" role="button" data-bs-toggle="collapse" aria-expanded="{{ request()->is('apps/social*') ? 'true' : 'false' }}"
                                  aria-controls="nv-social">
                                  <div class="d-flex align-items-center">
                                      <div class="dropdown-indicator-icon-wrapper"><span
                                              class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                          class="nav-link-icon"><span data-feather="share-2"></span></span><span
                                          class="nav-link-text">Social</span>
                                  </div>
                              </a>
                              <div class="parent-wrapper label-1">
                                  <ul class="nav collapse parent {{ request()->is('apps/social*') ? 'show' : '' }}" data-bs-parent="#navbarVerticalCollapse"
                                      id="nv-social">
                                      <li class="collapsed-nav-item-title d-none">Social</li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/social/profile') ? 'active' : '' }}" href="{{ url('apps/social/profile') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Profile</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/social/settings') ? 'active' : '' }}" href="{{ url('apps/social/settings') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Settings</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                  </ul>
                              </div>
                          </div><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-gallery" role="button" data-bs-toggle="collapse" aria-expanded="{{ request()->is('apps/gallery*') ? 'true' : 'false' }}"
                                  aria-controls="nv-gallery">
                                  <div class="d-flex align-items-center">
                                      <div class="dropdown-indicator-icon-wrapper"><span
                                              class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                          class="nav-link-icon"><span data-feather="image"></span></span><span
                                          class="nav-link-text">Gallery</span>
                                  </div>
                              </a>
                              <div class="parent-wrapper label-1">
                                  <ul class="nav collapse parent {{ request()->is('apps/gallery*') ? 'show' : '' }}" data-bs-parent="#navbarVerticalCollapse"
                                      id="nv-gallery">
                                      <li class="collapsed-nav-item-title d-none">Gallery</li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/gallery/album') ? 'active' : '' }}" href="{{ url('apps/gallery/album') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Album</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/gallery/gallery-column') ? 'active' : '' }}" href="{{ url('apps/gallery/gallery-column') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Gallery column</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/gallery/gallery-grid') ? 'active' : '' }}" href="{{ url('apps/gallery/gallery-grid') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Gallery grid</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/gallery/grid-with-title') ? 'active' : '' }}" href="{{ url('apps/gallery/grid-with-title') }}">
                                              <div class="d-flex align-items-center"><span class="nav-link-text">Grid
                                                      with title</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/gallery/gallery-masonry') ? 'active' : '' }}" href="{{ url('apps/gallery/gallery-masonry') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Gallery masonry</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/gallery/gallery-slider') ? 'active' : '' }}" href="{{ url('apps/gallery/gallery-slider') }}">
                                              <div class="d-flex align-items-center"><span
                                                      class="nav-link-text">Gallery slider</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                  </ul>
                              </div>
                          </div><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-file-manager" role="button" data-bs-toggle="collapse"
                                  aria-expanded="{{ request()->is('apps/file-manager*') ? 'true' : 'false' }}" aria-controls="nv-file-manager">
                                  <div class="d-flex align-items-center">
                                      <div class="dropdown-indicator-icon-wrapper"><span
                                              class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                          class="nav-link-icon"><span data-feather="folder"></span></span><span
                                          class="nav-link-text">File manager</span>
                                  </div>
                              </a>
                              <div class="parent-wrapper label-1">
                                  <ul class="nav collapse parent {{ request()->is('apps/file-manager*') ? 'show' : '' }}" data-bs-parent="#navbarVerticalCollapse"
                                      id="nv-file-manager">
                                      <li class="collapsed-nav-item-title d-none">File manager</li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/file-manager/grid-view') ? 'active' : '' }}" href="{{ url('apps/file-manager/grid-view') }}">
                                              <div class="d-flex align-items-center"><span class="nav-link-text">Grid
                                                      view</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                      <li class="nav-item"><a class="nav-link {{ request()->is('apps/file-manager/list-view') ? 'active' : '' }}" href="{{ url('apps/file-manager/list-view') }}">
                                              <div class="d-flex align-items-center"><span class="nav-link-text">List
                                                      view</span></div>
                                          </a><!-- more inner pages-->
                                      </li>
                                  </ul>
                              </div>
                          </div><!-- parent pages-->
                          <div class="nav-item-wrapper"><a class="nav-link label-1 {{ request()->is('apps/calendar') ? 'active' : '' }}" href="{{ url('apps/calendar') }}"
                                  role="button" data-bs-toggle="" aria-expanded="false">
                                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                              data-feather="calendar"></span></span><span
                                          class="nav-link-text-wrapper"><span
                                              class="nav-link-text">Calendar</span></span></div>
                              </a></div>
                      </li>