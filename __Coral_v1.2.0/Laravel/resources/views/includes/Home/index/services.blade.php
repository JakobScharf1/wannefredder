@php
$services = [
    [
        'id' => 1,
        'icon' => 'aperture', 
        'title' => 'Branding Strategy',
        'desc' => 'Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.',
        'style' => 'col-lg-4 col-md-6 col-12',
    ],
    [
        'id' => 2,
        'icon' => 'send', 
        'title' => 'Digital Solutions',
        'desc' => 'Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.',
        'style' => 'col-lg-4 col-md-6 col-12 mt-4 mt-md-0 pt-2 pt-md-0',
    ],
    [
        'id' => 3,
        'icon' => 'users', 
        'title' => 'Social Media',
        'desc' => 'Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.',
        'style' => 'col-lg-4 col-md-6 col-12 mt-4 mt-lg-0 pt-2 pt-lg-0',
    ]
];
@endphp

@foreach ($services as $item)
    <div class="{{ $item['style'] }}">
        <div class="position-relative features d-flex">
            <div class="position-relative d-flex justify-content-center">
                <i data-feather="{{ $item['icon'] }}" class="fea icon-m-md text-primary z-1"></i>
                <div class="feature-icon bg-soft-primary position-absolute top-0 start-50 translate-middle"></div>
            </div>

            <div class="ms-3">
                <a href="{{ route('service-detail', ['title' => Str::slug($item['title'])]) }}" class="h5 text-dark link-title">{{ $item['title'] }}</a>
                <p class="text-muted mt-3">{{ $item['desc'] }}</p>
                <a href="{{ route('service-detail', ['title' => Str::slug($item['title'])]) }}" class="text-primary">Learn More <i class="mdi mdi-arrow-right align-middle"></i></a>
            </div>
        </div>
    </div>
@endforeach