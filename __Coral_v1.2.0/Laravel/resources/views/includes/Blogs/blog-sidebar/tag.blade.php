@php
$tags = [
    [
        'title' => 'Business',
    ],
    [
        'title' => 'Finance',
    ],
    [
        'title' => 'Marketing',
    ],
    [
        'title' => 'Fashion',
    ],
    [
        'title' => 'Bride',
    ],
    [
        'title' => 'Lifestyle',
    ],
    [
        'title' => 'Travel',
    ],
    [
        'title' => 'Beauty',
    ],
    [
        'title' => 'Video',
    ],
    [
        'title' => 'Audio',
    ]
];
@endphp

@foreach ($tags as $item)
    <li class="d-inline-flex m-1"><a href="javascript:void(0)" class="rounded fw-medium text-dark py-1 px-2">{{ $item['title'] }}</a></li>
@endforeach