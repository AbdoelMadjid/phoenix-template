<div class="navbar-responsive-navitems navbar-expand border-y bg-body-emphasis border-translucent py-2">
    <div class="container-medium d-flex flex-between-center" data-navbar="data-navbar">
        <ul class="navbar-nav justify-content-end align-items-center">
            <li class="nav-item invisible" data-nav-item="data-nav-item"><a
                    class="nav-link px-3 ps-0 {{ request()->is('apps/travel-agency/hotel/homepage') ? 'text-primary' : '' }}"
                    href="{{ url('apps/travel-agency/hotel/homepage') }}">Homepage</a></li>
            <li class="nav-item invisible" data-nav-item="data-nav-item"><a
                    class="nav-link px-3 {{ request()->is('apps/travel-agency/hotel/hotel-details') ? 'text-primary' : '' }}"
                    href="{{ url('apps/travel-agency/hotel/hotel-details') }}">Hotel Details</a></li>
            <li class="nav-item invisible" data-nav-item="data-nav-item"><a
                    class="nav-link px-3 {{ request()->is('apps/travel-agency/hotel/hotel-compare') ? 'text-primary' : '' }}"
                    href="{{ url('apps/travel-agency/hotel/hotel-compare') }}">Hotel Compare</a></li>
            <li class="nav-item invisible" data-nav-item="data-nav-item"><a
                    class="nav-link px-3 {{ request()->is('apps/travel-agency/hotel/checkout') ? 'text-primary' : '' }}"
                    href="{{ url('apps/travel-agency/hotel/checkout') }}">Check out</a></li>
            <li class="nav-item invisible" data-nav-item="data-nav-item"><a
                    class="nav-link px-3 {{ request()->is('apps/travel-agency/hotel/payment') ? 'text-primary' : '' }}"
                    href="{{ url('apps/travel-agency/hotel/payment') }}">Payment</a></li>
            <li class="nav-item invisible" data-nav-item="data-nav-item"><a
                    class="nav-link px-3 {{ request()->is('apps/travel-agency/hotel/gallery') ? 'text-primary' : '' }}"
                    href="{{ url('apps/travel-agency/hotel/gallery') }}">Gallery</a></li>
            <li class="nav-item dropdown" data-nav-item="data-nav-item" data-more-item="data-more-item"><a
                    class="nav-link dropdown-toggle dropdown-caret-none fw-bold pe-0 ps-3" href="javascript: void(0)"
                    id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                    data-boundary="window" data-bs-reference="parent"> More<span
                        class="fas fa-angle-down ms-2"></span></a>
                <div class="dropdown-menu dropdown-menu-end category-list" aria-labelledby="navbarDropdown"
                    data-category-list="data-category-list"></div>
            </li>
        </ul>
    </div>
</div>
