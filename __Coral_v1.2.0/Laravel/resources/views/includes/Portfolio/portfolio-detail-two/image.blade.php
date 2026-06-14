@php
$images = [
    [
        'img' => 'assets/images/projects/3.jpg', 
    ],
    [
        'img' => 'assets/images/portfolio/2.jpg', 
    ],
    [
        'img' => 'assets/images/projects/5.jpg', 
    ],
    [
        'img' => 'assets/images/projects/6.jpg', 
    ],
    [
        'img' => 'assets/images/projects/8.jpg', 
    ],
    [
        'img' => 'assets/images/portfolio/3.jpg', 
    ],
    [
        'img' => 'assets/images/portfolio/4.jpg', 
    ]
];
@endphp

@foreach ($images as $item)
    <div class="col-lg-3 col-md-4 col-12 picture-item">
        <div class="portfolio masonry rounded shadow position-relative overflow-hidden">
            <div class="position-relative overflow-hidden image">
                <img src="{{ asset($item['img']) }}" class="img-fluid rounded shadow" alt="">
                <div class="position-absolute start-0 end-0 top-0 bottom-0 overlay rounded bg-black m-4"></div>
            </div>

            <div class="content">
                <div class="position-absolute top-50 start-50 translate-middle">
                    <a href="{{ asset($item['img']) }}" class="btn btn-sm btn-icon btn-pills btn-primary lightbox"><i data-feather="camera" class="fea icon-sm"></i></a>
                </div>
            </div>
        </div>
    </div>
@endforeach