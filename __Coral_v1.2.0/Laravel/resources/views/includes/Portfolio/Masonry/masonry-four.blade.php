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
        'img' => 'assets/images/projects/2.jpg',
        'title' => 'The Portrait',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 4,
        'img' => 'assets/images/portfolio/4.jpg',
        'title' => 'Photo Retouching',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 3,
        'img' => 'assets/images/projects/3.jpg',
        'title' => 'Villa in Dallas',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 6,
        'img' => 'assets/images/projects/6.jpg',
        'title' => 'The Pen and Books',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 7,
        'img' => 'assets/images/projects/7.jpg',
        'title' => 'Mercedez-Benz Coupe',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 8,
        'img' => 'assets/images/portfolio/8.jpg',
        'title' => 'Inspiration Board',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 5,
        'img' => 'assets/images/portfolio/5.jpg',
        'title' => 'The Cup of Coffee',
        'name' => 'Custom Branding',
    ]
];
@endphp

@foreach ($portfolios as $item)
    <div class="col-lg-3 col-md-6 picture-item">
        <div class="portfolio masonry rounded shadow position-relative overflow-hidden">
            <div class="position-relative overflow-hidden image">
                <img src="{{ asset($item['img']) }}" class="img-fluid" alt="">
                <div class="position-absolute start-0 end-0 top-0 bottom-0 overlay rounded bg-primary m-4"></div>
            </div>

            <div class="content">
                <div class="title-body p-3 position-absolute start-0 end-0 m-4">
                    <a href="{{ route('portfolio-detail-two', ['title' => Str::slug($item['title'])]) }}" class="text-white fs-5 fw-medium">{{ $item['title'] }}</a>
                    <p class="text-white-50 mb-0">{{ $item['name'] }}</p>
                </div>

                <div class="p-3 position-absolute top-0 end-0 m-4">
                    <a href="{{ asset($item['img']) }}" class="btn btn-sm btn-icon btn-pills btn-primary lightbox"><i data-feather="camera" class="fea icon-sm"></i></a>
                </div>
            </div>
        </div>
    </div>
@endforeach