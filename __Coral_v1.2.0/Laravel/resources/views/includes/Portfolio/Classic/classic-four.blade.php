@php
$portfolios = [
    [
        'id' => 1,
        'img' => 'assets/images/portfolio/1.jpg',
        'title' => 'Artboard Studio',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 2,
        'img' => 'assets/images/portfolio/2.jpg',
        'title' => 'The Portrait',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 3,
        'img' => 'assets/images/portfolio/3.jpg',
        'title' => 'Villa in Dallas',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 4,
        'img' => 'assets/images/portfolio/4.jpg',
        'title' => 'Photo Retouching',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 5,
        'img' => 'assets/images/portfolio/5.jpg',
        'title' => 'The Cup of Coffee',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 6,
        'img' => 'assets/images/portfolio/6.jpg',
        'title' => 'The Pen and Books',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 7,
        'img' => 'assets/images/portfolio/7.jpg',
        'title' => 'Mercedez-Benz Coupe',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 8,
        'img' => 'assets/images/portfolio/8.jpg',
        'title' => 'Inspiration Board',
        'name' => 'Custom Branding',
    ]
];
@endphp

@foreach ($portfolios as $item)
    <div class="col-lg-3 col-md-6">
        <div class="portfolio">
            <a href="{{ asset($item['img']) }}" class="lightbox"><img src="{{ asset($item['img']) }}" class="img-fluid rounded shadow" alt=""></a>

            <div class="content mt-3">
                <a href="{{ route('portfolio-detail', ['title' => Str::slug($item['title'])]) }}" class="text-dark fs-5 fw-medium link-title">{{ $item['title'] }}</a>
                <p class="text-muted mb-0">{{ $item['name'] }}</p>
            </div>
        </div>
    </div>
@endforeach