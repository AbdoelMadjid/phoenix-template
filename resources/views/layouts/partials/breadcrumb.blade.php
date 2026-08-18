@php
    $items = $items ?? null;
    $class = $class ?? 'mb-3';

    $breadcrumbItems = [];

    if (!empty($items) && is_array($items)) {
        foreach ($items as $key => $value) {
            if (is_array($value)) {
                $breadcrumbItems[] = [
                    'label' => $value['label'] ?? (is_string($key) ? $key : ''),
                    'url' => $value['url'] ?? '#',
                    'active' => $value['active'] ?? false,
                ];
            } elseif (is_string($key)) {
                $breadcrumbItems[] = [
                    'label' => $key,
                    'url' => $value,
                    'active' => empty($value) || $value === '#',
                ];
            } else {
                $breadcrumbItems[] = [
                    'label' => $value,
                    'url' => '#',
                    'active' => false,
                ];
            }
        }

        $hasActive = collect($breadcrumbItems)->contains('active', true);
        if (!$hasActive && count($breadcrumbItems) > 0) {
            $lastIdx = count($breadcrumbItems) - 1;
            if (empty($breadcrumbItems[$lastIdx]['url']) || $breadcrumbItems[$lastIdx]['url'] === '#') {
                $breadcrumbItems[$lastIdx]['active'] = true;
            }
        }
    } else {
        // Automatically generate breadcrumbs from current route / URL request path (dummy links # only)
        $segments = request()->segments();

        // If first segment is 'temp', remove it for clean display
        if (isset($segments[0]) && strtolower($segments[0]) === 'temp') {
            array_shift($segments);
        }

        $customLabels = [
            'e-commerce' => 'E-Commerce',
            'faq' => 'FAQ',
            'crm' => 'CRM',
        ];

        foreach ($segments as $index => $segment) {
            $lowerSegment = strtolower($segment);

            if (isset($customLabels[$lowerSegment])) {
                $label = $customLabels[$lowerSegment];
            } else {
                $label = ucwords(str_replace(['-', '_'], ' ', $segment));
            }

            $isLast = ($index === count($segments) - 1);

            $breadcrumbItems[] = [
                'label' => $label,
                'url' => '#',
                'active' => $isLast,
            ];
        }
    }
@endphp

@if (!empty($breadcrumbItems))
    <nav class="{{ $class }}" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            @foreach ($breadcrumbItems as $item)
                @if (!empty($item['active']))
                    <li class="breadcrumb-item active" aria-current="page">{{ $item['label'] }}</li>
                @else
                    <li class="breadcrumb-item"><a href="{{ $item['url'] }}">{{ $item['label'] }}</a></li>
                @endif
            @endforeach
        </ol>
    </nav>
@endif
