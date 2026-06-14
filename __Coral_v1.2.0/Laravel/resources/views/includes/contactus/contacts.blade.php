@php
$contacts = [
    [
        'icon' => 'phone', 
        'title' => 'Phone',
        'desc' => 'Start working with Coral that can provide everything',
        'desc1' => '',
        'link' => 'tel:+152534-468-854',
        'name' => '+152 534-468-854',
        'style' => 'col-md-4',
    ],
    [
        'icon' => 'mail', 
        'title' => 'Email',
        'desc' => 'Start working with Coral that can provide everything',
        'desc1' => '',
        'link' => 'mailto:contact@example.com',
        'name' => 'contact@example.com',
        'style' => 'col-md-4 mt-5 pt-2 mt-md-0 pt-md-0',
    ],
    [
        'icon' => 'map-pin', 
        'title' => 'Location',
        'desc' => 'C/54 Northwest Freeway, Suite 558,',
        'desc1' => 'Houston, USA 485',
        'link' => '',
        'name' => 'View on Google map',
        'style' => 'col-md-4 mt-5 pt-2 mt-md-0 pt-md-0',
    ]
];
@endphp

@foreach ($contacts as $item)
    <div class="{{ $item['style'] }}">
        <div class="position-relative features text-center mx-lg-4 px-md-1">
            <div class="position-relative d-flex justify-content-center">
                <i data-feather="{{ $item['icon'] }}" class="fea icon-md text-primary z-1"></i>
                <div class="feature-icon bg-soft-primary position-absolute top-0 translate-middle"></div>
            </div>

            <div class="mt-4">
                <h5 class="mb-3">{{ $item['title'] }}</h5>
                <p class="text-muted">{{ $item['desc'] }} <br>{{ $item['desc1'] }}</p>
                <a href="{{ $item['link'] }}" class="text-primary">{{ $item['name'] }}</a>
            </div>
        </div>
    </div>
@endforeach