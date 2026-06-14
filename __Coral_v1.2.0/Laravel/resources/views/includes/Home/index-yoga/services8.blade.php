@php
$services = [
    [
        'id' => 15,
        'img' => 'assets/images/asana/ardha_padmasana.png',
        'title' => 'Ardha Padmasana', 
        'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
    ],
    [
        'id' => 16,
        'img' => 'assets/images/asana/bhujangasana.png',
        'title' => 'Bhujangasana', 
        'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
    ],
    [
        'id' => 17,
        'img' => 'assets/images/asana/halasana.png',
        'title' => 'Halasana', 
        'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
    ],
    [
        'id' => 18,
        'img' => 'assets/images/asana/natarajasana.png',
        'title' => 'Natarajasana', 
        'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
    ]
];
@endphp

@foreach ($services as $item)
    <div class="col-lg-3 col-md-6 col-12">
        <div class="position-relative features text-center rounded p-4">
            <div class="position-relative d-flex justify-content-center">
                <img src="{{ asset($item['img']) }}" class="avatar avatar-large" alt="">
                <div class="feature-icon bg-soft-primary position-absolute top-0 translate-middle avatar avatar-large"></div>
            </div>

            <div class="mt-4">
                <a href="{{ route('service-detail', ['title' => Str::slug($item['title'])]) }}" class="h5 text-dark link-title">{{ $item['title'] }}</a>
                <p class="text-muted mt-3">{{ $item['desc'] }}</p>
                <a href="{{ route('service-detail', ['title' => Str::slug($item['title'])]) }}" class="text-primary">Learn More <i class="mdi mdi-arrow-right align-middle"></i></a>
            </div>
        </div>
    </div>
@endforeach