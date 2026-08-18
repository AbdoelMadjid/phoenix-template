<nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault" style="display:none;">
    <div class="collapse navbar-collapse justify-content-between">
        @include('layouts.partials.navbar._logo')
        @include('layouts.partials.navbar._search')
        @include('layouts.partials.navbar._nav_icons')
    </div>
</nav>

<nav class="navbar navbar-top navbar-slim fixed-top navbar-expand" id="topNavSlim" style="display:none;">
    <div class="collapse navbar-collapse justify-content-between">
        @include('layouts.partials.navbar._logo', ['slim' => true])
        @include('layouts.partials.navbar._nav_icons', ['slim' => true])
    </div>
</nav>

<nav class="navbar navbar-top fixed-top navbar-expand-lg" id="navbarTop" style="display:none;">
    @include('layouts.partials.navbar._logo', ['target' => '#navbarTopCollapse'])
    <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center"
        id="navbarTopCollapse">
        @include('layouts.partials.navbar._nav_top')
    </div>
    @include('layouts.partials.navbar._nav_icons')
</nav>

<nav class="navbar navbar-top navbar-slim justify-content-between fixed-top navbar-expand-lg" id="navbarTopSlim"
    style="display:none;">
    @include('layouts.partials.navbar._logo', ['target' => '#navbarTopCollapse', 'slim' => true])
    <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center"
        id="navbarTopCollapse">
        @include('layouts.partials.navbar._nav_top')
    </div>
    @include('layouts.partials.navbar._nav_icons', ['slim' => true])
</nav>

<nav class="navbar navbar-top fixed-top navbar-expand-lg" id="navbarCombo" data-navbar-top="combo"
    data-move-target="#navbarVerticalNav" style="display:none;">
    @include('layouts.partials.navbar._logo')
    <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center"
        id="navbarTopCollapse">
        @include('layouts.partials.navbar._nav_top')
    </div>
    @include('layouts.partials.navbar._nav_icons')
</nav>

<nav class="navbar navbar-top fixed-top navbar-slim justify-content-between navbar-expand-lg" id="navbarComboSlim"
    data-navbar-top="combo" data-move-target="#navbarVerticalNav" style="display:none;">
    @include('layouts.partials.navbar._logo', ['slim' => true])
    <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center"
        id="navbarTopCollapse">
        @include('layouts.partials.navbar._nav_top')
    </div>
    @include('layouts.partials.navbar._nav_icons', ['slim' => true])
</nav>

<nav class="navbar navbar-top fixed-top navbar-expand-lg" id="dualNav" style="display:none;">
    <div class="w-100">
        <div class="d-flex flex-between-center dual-nav-first-layer">
            @include('layouts.partials.navbar._logo', ['target' => '#navbarTopCollapse'])
            @include('layouts.partials.navbar._search')
            @include('layouts.partials.navbar._nav_icons')
        </div>
        <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center border-top border-translucent border-lg-0"
            id="navbarTopCollapse">
            @include('layouts.partials.navbar._nav_top')
        </div>
    </div>
</nav>
