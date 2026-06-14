@php
$counters = [
    [
        'icon' => 'check-circle',
        'target' => '49',
        'number' => '1',
        'symbol' => '+',
        'title' => 'Project Completed',
    ],
    [
        'icon' => 'coffee',
        'target' => '2461',
        'number' => '1',
        'symbol' => '+',
        'title' => 'Cup of Coffee',
    ],
    [
        'icon' => 'user-check',
        'target' => '99',
        'number' => '1',
        'symbol' => '%',
        'title' => 'Client Satisfaction',
    ],
];
@endphp

@foreach ($counters as $item)
    <div class="col-lg-12 col-md-4 col-6">
        <div class="counter-box text-center">
            <div class="position-relative">
                <i data-feather="{{ $item['icon'] }}" class="fea icon-md mb-2 text-primary"></i>
            </div>
            <h3 class="text-dark fw-semibold"><span class="counter-value" data-target="{{ $item['target'] }}">{{ $item['number'] }}</span>{{ $item['symbol'] }}</h3>
            <h6 class="counter-head text-muted fw-medium mb-0">{{ $item['title'] }}</h6>
        </div> 
    </div>
@endforeach