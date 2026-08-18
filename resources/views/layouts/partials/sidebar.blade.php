<nav class="navbar navbar-vertical navbar-expand-lg">
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <!-- scrollbar removed-->
        <div class="navbar-vertical-content">
            <div class="px-3 pt-1 pb-2 sidebar-search-container">
                <div class="position-relative">
                    <input class="form-control form-control-sm fs-9 rounded-2" id="sidebarMenuSearch" type="search"
                        placeholder="Cari menu..." aria-label="Cari menu" autocomplete="off">
                    <span class="fas fa-search search-icon fs-10"></span>
                    <button class="clear-icon d-none" id="sidebarMenuSearchClear" type="button"
                        aria-label="Clear search">
                        <span class="fas fa-times fs-10"></span>
                    </button>
                </div>
            </div>
            <div id="sidebarNoResults" class="px-3 py-3 text-center text-body-tertiary fs-9 d-none">
                Menu tidak ditemukan
            </div>
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item">
                    <div class="nav-item-wrapper">
                        <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }} label-1"
                            href="{{ route('dashboard') }}" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span data-feather="home"></span>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Dashboard</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <!-- parent pages-->
                    @include('layouts.partials.sidebar._apps')
                    @include('layouts.partials.sidebar._pages')
                    @include('layouts.partials.sidebar._modules')
                    @include('layouts.partials.sidebar._documentation')

            </ul>
        </div>
    </div>
    <div class="navbar-vertical-footer">
        <button
            class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center">
            <span class="uil uil-left-arrow-to-left fs-8"></span>
            <span class="uil uil-arrow-from-right fs-8"></span>
            <span class="navbar-vertical-footer-text ms-2">Collapsed View</span>
        </button>
    </div>
</nav>
