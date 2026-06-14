@php
$hostings = [
    [
        'img' => 'assets/images/hosting/1.png', 
        'title' => 'Shared Hosting', 
        'month' => 'Starting $2.99/month', 
    ],
    [
        'img' => 'assets/images/hosting/2.png', 
        'title' => 'VPS Hosting', 
        'month' => 'Starting $2.99/month', 
    ],
    [
        'img' => 'assets/images/hosting/3.png', 
        'title' => 'Dedicated Server', 
        'month' => 'Starting $2.99/month', 
    ],
    [
        'img' => 'assets/images/hosting/4.png', 
        'title' => 'Cloud Hosting', 
        'month' => 'Starting $2.99/month', 
    ],
    [
        'img' => 'assets/images/hosting/5.png', 
        'title' => 'Reseller Hosting', 
        'month' => 'Starting $2.99/month', 
    ]
];
@endphp

@foreach ($hostings as $item)
    <div class="col">
        <div class="features rounded shadow p-4 bg-primary bg-gradient">
            <img src="{{ asset($item['img']) }}" class="avatar avatar-md-sm" alt="">

            <div class="mt-3">
                <a href="" class="text-white fw-semibold">{{ $item['title'] }}</a>
                <small class="text-white-50 d-block mt-1">{{ $item['month'] }}</small>
            </div>
        </div>
    </div>
@endforeach