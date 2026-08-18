@php
    $config = config('sidebar.apps');
    $homeItem = null;
    foreach ($config['items'] ?? [] as $item) {
        if (($item['id'] ?? '') === 'nv-home') {
            $homeItem = $item;
            break;
        }
    }
@endphp

@if ($homeItem)
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown"
            data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
            <span class="uil fs-8 me-2 uil-chart-pie"></span>Home
        </a>
        <ul class="dropdown-menu navbar-dropdown-caret">
            @foreach ($homeItem['children'] ?? [] as $child)
                @include('layouts.partials.navbar._menu_recursive', ['item' => $child, 'level' => 1])
            @endforeach
        </ul>
    </li>
@endif
