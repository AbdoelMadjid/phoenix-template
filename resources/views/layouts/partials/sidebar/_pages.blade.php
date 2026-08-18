@php
    $config = config('sidebar.pages');
@endphp

@if (!empty($config))
    <li class="nav-item">
        <!-- label-->
        <p class="navbar-vertical-label">{{ $config['label'] ?? 'Pages' }}</p>
        <hr class="navbar-vertical-line"><!-- parent pages-->

        @foreach ($config['items'] ?? [] as $item)
            @include('layouts.partials.sidebar._menu_recursive', ['item' => $item, 'level' => 0])
        @endforeach
    </li>
@endif
