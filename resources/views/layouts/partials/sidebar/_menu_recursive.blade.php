@php
    $level = $level ?? 0;
    $hasChildren = !empty($item['children']);
    
    // Active checking: test path pattern first, fallback to exact URL
    $isActive = false;
    if (isset($item['path']) && !empty($item['path'])) {
        $isActive = request()->is($item['path']);
    } elseif (isset($item['url']) && !empty($item['url'])) {
        $isActive = request()->is($item['url']);
    }
    
    // Check if any descendant is active to open parent collapse
    $isChildActive = false;
    if ($hasChildren) {
        $checkChildActive = function($children) use (&$checkChildActive) {
            foreach ($children as $child) {
                if (isset($child['path']) && request()->is($child['path'])) return true;
                if (isset($child['url']) && request()->is($child['url'])) return true;
                if (!empty($child['children']) && $checkChildActive($child['children'])) return true;
            }
            return false;
        };
        $isChildActive = $checkChildActive($item['children']);
    }
    
    $shouldExpand = $isActive || $isChildActive;
@endphp

@if ($level === 0)
    {{-- Level 0 (Top-Level Item) --}}
    <div class="nav-item-wrapper">
        @if ($hasChildren)
            <a class="nav-link dropdown-indicator label-1" 
               href="#{{ $item['id'] }}"
               role="button" 
               data-bs-toggle="collapse" 
               aria-expanded="{{ $shouldExpand ? 'true' : 'false' }}" 
               aria-controls="{{ $item['id'] }}">
                <div class="d-flex align-items-center">
                    <div class="dropdown-indicator-icon-wrapper">
                        <span class="fas fa-caret-right dropdown-indicator-icon"></span>
                    </div>
                    @if (isset($item['icon']))
                        <span class="nav-link-icon">
                            @if (($item['icon_type'] ?? 'feather') === 'feather')
                                <span data-feather="{{ $item['icon'] }}"></span>
                            @else
                                <span class="{{ $item['icon'] }}"></span>
                            @endif
                        </span>
                    @endif
                    <span class="nav-link-text">{{ $item['name'] }}</span>
                    @if (isset($item['indicator']))
                        <span class="{{ $item['indicator']['class'] }}" style="{{ $item['indicator']['style'] ?? '' }}"></span>
                    @endif
                    @if (isset($item['badge']))
                        <span class="{{ $item['badge']['class'] }}">{{ $item['badge']['text'] }}</span>
                    @endif
                </div>
            </a>
            <div class="parent-wrapper label-1">
                <ul class="nav collapse parent {{ $shouldExpand ? 'show' : '' }}" 
                    data-bs-parent="{{ $parentBsId ?? '#navbarVerticalCollapse' }}"
                    id="{{ $item['id'] }}">
                    <li class="collapsed-nav-item-title d-none">{{ strtolower($item['name']) }}</li>
                    @foreach ($item['children'] as $child)
                        @include('layouts.partials.sidebar._menu_recursive', [
                            'item' => $child, 
                            'parentBsId' => '#' . $item['id'], 
                            'level' => 1
                        ])
                    @endforeach
                </ul>
            </div>
        @else
            <a class="nav-link label-1 {{ $isActive ? 'active' : '' }}" 
               href="{{ url($item['url']) }}" 
               @if (isset($item['target'])) target="{{ $item['target'] }}" @endif
               role="button" 
               data-bs-toggle="" 
               aria-expanded="false">
                <div class="d-flex align-items-center">
                    @if (isset($item['icon']))
                        <span class="nav-link-icon">
                            @if (($item['icon_type'] ?? 'feather') === 'feather')
                                <span data-feather="{{ $item['icon'] }}"></span>
                            @else
                                <span class="{{ $item['icon'] }}"></span>
                            @endif
                        </span>
                    @endif
                    <span class="nav-link-text-wrapper">
                        <span class="nav-link-text">{{ $item['name'] }}</span>
                    </span>
                    @if (isset($item['indicator']))
                        <span class="{{ $item['indicator']['class'] }}" style="{{ $item['indicator']['style'] ?? '' }}"></span>
                    @endif
                    @if (isset($item['badge']))
                        <span class="{{ $item['badge']['class'] }}">{{ $item['badge']['text'] }}</span>
                    @endif
                </div>
            </a>
        @endif
    </div>
@else
    {{-- Level 1+ Sub-Menu Item --}}
    <li class="nav-item">
        @if ($hasChildren)
            <a class="nav-link dropdown-indicator" 
               href="#{{ $item['id'] }}"
               data-bs-toggle="collapse" 
               aria-expanded="{{ $shouldExpand ? 'true' : 'false' }}" 
               aria-controls="{{ $item['id'] }}">
                <div class="d-flex align-items-center">
                    <div class="dropdown-indicator-icon-wrapper">
                        <span class="fas fa-caret-right dropdown-indicator-icon"></span>
                    </div>
                    <span class="nav-link-text">{{ $item['name'] }}</span>
                    @if (isset($item['indicator']))
                        <span class="{{ $item['indicator']['class'] }}" style="{{ $item['indicator']['style'] ?? '' }}"></span>
                    @endif
                    @if (isset($item['badge']))
                        <span class="{{ $item['badge']['class'] }}">{{ $item['badge']['text'] }}</span>
                    @endif
                </div>
            </a>
            <div class="parent-wrapper">
                <ul class="nav collapse parent {{ $shouldExpand ? 'show' : '' }}" 
                    data-bs-parent="{{ $parentBsId }}"
                    id="{{ $item['id'] }}">
                    @foreach ($item['children'] as $child)
                        @include('layouts.partials.sidebar._menu_recursive', [
                            'item' => $child, 
                            'parentBsId' => '#' . $item['id'], 
                            'level' => $level + 1
                        ])
                    @endforeach
                </ul>
            </div>
        @else
            <a class="nav-link {{ $isActive ? 'active' : '' }}" 
               href="{{ url($item['url']) }}"
               @if (isset($item['target'])) target="{{ $item['target'] }}" @endif>
                <div class="d-flex align-items-center">
                    <span class="nav-link-text">{{ $item['name'] }}</span>
                    @if (isset($item['indicator']))
                        <span class="{{ $item['indicator']['class'] }}" style="{{ $item['indicator']['style'] ?? '' }}"></span>
                    @endif
                    @if (isset($item['badge']))
                        <span class="{{ $item['badge']['class'] }}">{{ $item['badge']['text'] }}</span>
                    @endif
                </div>
            </a>
        @endif
    </li>
@endif
