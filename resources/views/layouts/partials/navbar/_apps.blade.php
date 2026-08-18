@php
    $config = config('sidebar.apps');
    $items = array_filter($config['items'] ?? [], function ($item) {
        return ($item['id'] ?? '') !== 'nv-home';
    });
@endphp

@if (!empty($items))
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown"
            data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
            <span class="uil fs-8 me-2 uil-cube"></span>Apps
        </a>
        <ul class="dropdown-menu navbar-dropdown-caret">
            @foreach ($items as $item)
                @include('layouts.partials.navbar._menu_recursive', ['item' => $item, 'level' => 1])
            @endforeach
        </ul>
    </li>
@endif
