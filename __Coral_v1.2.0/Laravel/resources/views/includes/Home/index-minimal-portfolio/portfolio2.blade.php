@php
$portfolios = [
    [
        'img' => 'assets/images/portfolio/1.jpg', 
        'title' => 'Artboard Studio', 
        'name' => 'Custom Branding', 
    ],
    [
        'img' => 'assets/images/projects/2.jpg', 
        'title' => 'The Portrait', 
        'name' => 'Custom Branding', 
    ],
    [
        'img' => 'assets/images/portfolio/4.jpg', 
        'title' => 'Photo Retouching', 
        'name' => 'Custom Branding', 
    ],
    [
        'img' => 'assets/images/projects/3.jpg', 
        'title' => 'Villa in Dallas', 
        'name' => 'Custom Branding', 
    ],
    [
        'img' => 'assets/images/projects/6.jpg', 
        'title' => 'The Pen and Books', 
        'name' => 'Custom Branding', 
    ],
    [
        'img' => 'assets/images/projects/7.jpg', 
        'title' => 'Mercedez-Benz Coupe', 
        'name' => 'Custom Branding', 
    ],
    [
        'img' => 'assets/images/portfolio/8.jpg', 
        'title' => 'Inspiration Board', 
        'name' => 'Custom Branding', 
    ],
    [
        'img' => 'assets/images/projects/1.jpg', 
        'title' => 'The Cup of Coffee', 
        'name' => 'Custom Branding', 
    ],
    [
        'img' => 'assets/images/portfolio/3.jpg', 
        'title' => 'The Cactus Plant', 
        'name' => 'Custom Branding', 
    ],
    [
        'img' => 'assets/images/projects/4.jpg', 
        'title' => 'The Yellow Bag', 
        'name' => 'Custom Branding', 
    ],
    [
        'img' => 'assets/images/portfolio/6.jpg', 
        'title' => 'The Teapot Table', 
        'name' => 'Custom Branding', 
    ],
    [
        'img' => 'assets/images/portfolio/5.jpg', 
        'title' => 'The Orange', 
        'name' => 'Custom Branding', 
    ]
];
@endphp

@foreach ($portfolios as $item)
    <div class="col-lg-3 col-md-4 col-12 picture-item">
        <div class="portfolio masonry position-relative overflow-hidden">
            <div class="position-relative overflow-hidden image">
                <img src="{{ asset($item['img']) }}" class="img-fluid" alt="">
                <div class="position-absolute start-0 end-0 top-0 bottom-0 overlay rounded bg-black m-4"></div>
            </div>

            <div class="content">
                <div class="title-body p-3 position-absolute start-0 end-0 m-4">
                    <a href="" class="link-title text-white fs-5 fw-medium">{{ $item['title'] }}</a>
                    <p class="text-white-50 mb-0">{{ $item['name'] }}</p>
                </div>

                <div class="p-3 position-absolute top-0 end-0 m-4">
                    <a href="{{ asset($item['img']) }}" class="btn btn-sm btn-icon btn-pills btn-primary lightbox"><i data-feather="camera" class="fea icon-sm"></i></a>
                </div>
            </div>
        </div>
    </div>
@endforeach