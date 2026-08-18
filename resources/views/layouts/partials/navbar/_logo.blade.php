<div class="navbar-logo">
    <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
        data-bs-toggle="collapse" data-bs-target="{{ $target ?? '#navbarVerticalCollapse' }}"
        aria-controls="{{ str_replace('#', '', $target ?? '#navbarVerticalCollapse') }}" aria-expanded="false"
        aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                class="toggle-line"></span></span></button>
    @if ($slim ?? false)
        <a class="navbar-brand navbar-brand" href="{{ route('dashboard') }}">phoenix <span
                class="text-body-highlight d-none d-sm-inline">slim</span></a>
    @else
        <a class="navbar-brand me-1 me-sm-3" href="{{ route('dashboard') }}">
            <div class="d-flex align-items-center">
                <div class="d-flex align-items-center"><img src="{{ asset('assets/img/icons/logo.png') }}"
                        alt="phoenix" width="27">
                    <h5 class="logo-text ms-2 d-none d-sm-block">phoenix</h5>
                </div>
            </div>
        </a>
    @endif
</div>
