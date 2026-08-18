@php
    $hasChildren = !empty($item['children']);

    // Active checking
    $isActive = false;
    if (isset($item['path']) && !empty($item['path'])) {
        $isActive = request()->is($item['path']);
    } elseif (isset($item['url']) && !empty($item['url'])) {
        $isActive = request()->is($item['url']);
    }
@endphp

@if ($hasChildren)
    <li class="dropdown">
        <a class="dropdown-item dropdown-toggle" id="{{ $item['id'] ?? '' }}" href="#"
            data-bs-toggle="dropdown" data-bs-auto-close="outside">
            <div class="dropdown-item-wrapper">
                <span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span>
                <span>
                    @if (isset($item['icon']))
                        <span class="me-2 uil"
                            @if (($item['icon_type'] ?? 'feather') === 'feather') data-feather="{{ $item['icon'] }}" @else class="{{ $item['icon'] }}" @endif></span>
                    @endif
                    {{ $item['name'] }}
                </span>
            </div>
        </a>
        <ul class="dropdown-menu">
            @foreach ($item['children'] as $child)
                @include('layouts.partials.navbar._menu_recursive', [
                    'item' => $child,
                    'level' => ($level ?? 1) + 1,
                ])
            @endforeach
        </ul>
    </li>
@else
    <li>
        <a class="dropdown-item {{ $isActive ? 'active' : '' }}" href="{{ url($item['url'] ?? '#!') }}"
            @if (isset($item['target'])) target="{{ $item['target'] }}" @endif>
            <div class="dropdown-item-wrapper">
                @if (isset($item['icon']))
                    <span class="me-2 uil"
                        @if (($item['icon_type'] ?? 'feather') === 'feather') data-feather="{{ $item['icon'] }}" @else class="{{ $item['icon'] }}" @endif></span>
                @endif
                {{ $item['name'] }}
            </div>
        </a>
    </li>
@endif
