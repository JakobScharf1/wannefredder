@php
$navs = [
    [
        'title' => 'Monday',
        'id' => 'mondayschedule',
        'link' => '#monday',
        'controls' => 'monday',
        'style' => 'nav-item',
        'class' => 'active',
    ],
    [
        'title' => 'Tuesday',
        'id' => 'tuesdayschedule',
        'link' => '#tuesday',
        'controls' => 'tuesday',
        'style' => 'nav-item mt-2',
        'class' => '',
    ],
    [
        'title' => 'Wednesday',
        'id' => 'wednesdayschedule',
        'link' => '#wednesday',
        'controls' => 'wednesday',
        'style' => 'nav-item mt-2',
        'class' => '',
    ],
    [
        'title' => 'Thursday',
        'id' => 'thursdayschedule',
        'link' => '#thursday',
        'controls' => 'thursday',
        'style' => 'nav-item mt-2',
        'class' => '',
    ],
    [
        'title' => 'Friday',
        'id' => 'fridayschedule',
        'link' => '#friday',
        'controls' => 'friday',
        'style' => 'nav-item mt-2',
        'class' => '',
    ],
    [
        'title' => 'Saturday',
        'id' => 'saturdayschedule',
        'link' => '#saturday',
        'controls' => 'saturday',
        'style' => 'nav-item mt-2',
        'class' => '',
    ]
];
@endphp

@foreach ($navs as $item)
    <li class="{{ $item['style'] }}">
        <a class="nav-link rounded shadow {{ $item['class'] }}" id="{{ $item['id'] }}" data-bs-toggle="pill" href="{{ $item['link'] }}" role="tab" aria-controls="{{ $item['controls'] }}" aria-selected="false">
            <div class="text-center py-1">
                <h6 class="mb-0">{{ $item['title'] }}</h6>
            </div>
        </a>
    </li>
@endforeach