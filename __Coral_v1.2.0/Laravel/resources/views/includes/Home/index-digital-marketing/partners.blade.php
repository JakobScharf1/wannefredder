@php
$partners = [
    [
        'img' => 'assets/images/client/amazon.svg', 
    ],
    [
        'img' => 'assets/images/client/google.svg', 
    ],
    [
        'img' => 'assets/images/client/lenovo.svg', 
    ],
    [
        'img' => 'assets/images/client/paypal.svg', 
    ],
    [
        'img' => 'assets/images/client/shopify.svg', 
    ],
    [
        'img' => 'assets/images/client/spotify.svg', 
    ],
    [
        'img' => 'assets/images/client/amazon.svg', 
    ],
    [
        'img' => 'assets/images/client/google.svg', 
    ],
    [
        'img' => 'assets/images/client/lenovo.svg', 
    ],
    [
        'img' => 'assets/images/client/paypal.svg', 
    ],
    [
        'img' => 'assets/images/client/shopify.svg', 
    ],
    [
        'img' => 'assets/images/client/spotify.svg', 
    ]
];
@endphp

@foreach ($partners as $item)
    <li class="list-inline-item px-sm-5 px-4 mb-0">
        <img src="{{ asset($item['img']) }}" class="img-fluid img-white" alt="">
    </li>
@endforeach