@php
$portfolios = [
    [
        'img' => 'assets/images/projects/1.jpg', 
        'title' => 'Artboard Studio',
        'name' => 'Custom Branding',
    ],
    [
        'img' => 'assets/images/projects/2.jpg', 
        'title' => 'The Portrait',
        'name' => 'Custom Branding',
    ],
    [
        'img' => 'assets/images/projects/3.jpg', 
        'title' => 'Villa in Dallas',
        'name' => 'Custom Branding',
    ],
    [
        'img' => 'assets/images/projects/4.jpg', 
        'title' => 'Photo Retouching',
        'name' => 'Custom Branding',
    ],
    [
        'img' => 'assets/images/projects/5.jpg', 
        'title' => 'Mercedez-Benz Coupe',
        'name' => 'Custom Branding',
    ],
    [
        'img' => 'assets/images/projects/6.jpg', 
        'title' => 'Inspiration Board',
        'name' => 'Custom Branding',
    ],
    [
        'img' => 'assets/images/projects/7.jpg', 
        'title' => 'Mercedez-Benz Coupe',
        'name' => 'Custom Branding',
    ],
    [
        'img' => 'assets/images/projects/8.jpg', 
        'title' => 'Inspiration Board',
        'name' => 'Custom Branding',
    ]
];
@endphp

@foreach ($portfolios as $item)
    <div class="col-lg-3 col-md-4">
        <div class="portfolio modern rounded shadow position-relative overflow-hidden">
            <div class="position-relative overflow-hidden image">
                <img src="{{ asset($item['img']) }}" class="img-fluid" alt="">
            </div>

            <div class="content p-3 bg-white position-absolute bottom-0 start-0 end-0 rounded m-4">
                <a href="" class="text-dark fs-5 fw-medium link-title">{{ $item['title'] }}</a>
                <p class="text-muted mb-0">{{ $item['name'] }}</p>
            </div>
        </div>
    </div>
@endforeach