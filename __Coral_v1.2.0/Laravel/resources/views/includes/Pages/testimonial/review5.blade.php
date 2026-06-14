@php
$reviews = [
    [
        'img' => 'assets/images/team/1.jpg', 
        'name' => 'Calvin Carlo', 
        'title' => 'Manager', 
        'title1' => 'Creativity', 
        'desc' => "According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero Launch your campaign and benefit from our expertise.", 
        'style' => "col-12", 
    ],
    [
        'img' => 'assets/images/team/2.jpg', 
        'name' => 'Carl Oliver', 
        'title' => 'Manager', 
        'title1' => 'Modern', 
        'desc' => "I didn't know a thing about icon design until I read this book. Now I can create any icon I need in no time. Great resource!", 
        'style' => "col-12 mt-4", 
    ],
    [
        'img' => 'assets/images/team/3.jpg', 
        'name' => 'Barbara McIntosh', 
        'title' => 'Manager', 
        'title1' => 'Social Marketing', 
        'desc' => "The best part about Coral is every time I pay my employees, my bank balance doesn't go down like it used to. Looking forward to spending this extra cash when I figure out why my card is being declined.", 
        'style' => "col-12 mt-4",
    ]
];

$reviews1 = [
    [
        'img' => 'assets/images/team/4.jpg', 
        'name' => 'Janisha Doll', 
        'title' => 'Manager', 
        'title1' => 'Digital Marketing', 
        'desc' => "I used to have to remit tax to the EU and with Coral I somehow don't have to do that anymore. Nervous to travel there now though.", 
        'style' => "col-12",
    ],
    [
        'img' => 'assets/images/team/5.jpg', 
        'name' => 'Esther Howard', 
        'title' => 'Manager', 
        'title1' => 'SEO', 
        'desc' => "There are so many things I had to do with my old software that I just don't do at all with Coral. Suspicious but I can't say I don't love it.", 
        'style' => "col-12 mt-4",
    ],
    [
        'img' => 'assets/images/team/6.jpg', 
        'name' => 'Joshua William', 
        'title' => 'Manager', 
        'title1' => 'Classic', 
        'desc' => "I'm trying to get a hold of someone in support, I'm in a lot of trouble right now and they are saying it has something to do with my books. Please get back to me right away.", 
        'style' => "col-12 mt-4",
    ],
];

$reviews2 = [
    [
        'img' => 'assets/images/team/7.jpg', 
        'name' => 'Thomas Israel', 
        'title' => 'Manager', 
        'title1' => 'Features', 
        'desc' => "This is the fourth email I've sent to your support team. I am literally being held in jail for tax fraud. Please answer your damn emails, this is important.", 
        'style' => "col-md-6 col-lg-12",
    ],
    [
        'img' => 'assets/images/team/8.jpg', 
        'name' => 'Jill Webb', 
        'title' => 'Manager', 
        'title1' => 'Branding', 
        'desc' => "I used to have to remit tax to the EU and with Coral I somehow don't have to do that anymore. Nervous to travel there now though.", 
        'style' => "col-md-6 col-lg-12 mt-4",
    ],
    [
        'img' => 'assets/images/team/4.jpg', 
        'name' => 'Jennifer White', 
        'title' => 'Manager', 
        'title1' => 'Product Design', 
        'desc' => "The team is exceptional. Their passion for what they do is evident in the results they deliver. We're grateful to have them as a trusted partner in our journey.", 
        'style' => "col-md-6 col-lg-12 mt-4",
    ],
];
@endphp

<div class="col-lg-4 col-md-6 col-12">
    <div class="row">

        @foreach ($reviews as $item)
            <div class="{{ $item['style'] }}">
                <div class="position-relative overflow-hidden z-1 bg-white rounded shadow p-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <h6 class="mb-0">{{ $item['title1'] }}</h6>

                        <ul class="list-unstyled mb-0 text-warning">
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                        </ul>
                    </div>

                    <p class="text-muted fst-italic mt-2">" {{ $item['desc'] }} "</p>

                    <div class="d-flex align-items-center">
                        <img src="{{ asset($item['img']) }}" class="avatar avatar-small rounded-pill shadow" alt="">
                        <div class="ms-2">
                            <h6 class="text-dark small mb-0">{{ $item['name'] }}</h6>
                            <small class="text-muted d-block">{{ $item['title'] }}</small>
                        </div>
                    </div>

                    <i class="mdi mdi-format-quote-open text-primary position-absolute top-50 start-50 translate-middle z-n1 testi-icon"></i>
                </div>
            </div>
        @endforeach

    </div>
</div>

<div class="col-lg-4 col-md-6 col-12 mt-4 mt-md-0">
    <div class="row">

        @foreach ($reviews1 as $item)
            <div class="{{ $item['style'] }}">
                <div class="position-relative overflow-hidden z-1 bg-white rounded shadow p-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <h6 class="mb-0">{{ $item['title1'] }}</h6>

                        <ul class="list-unstyled mb-0 text-warning">
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star-half-full"></i></li>
                        </ul>
                    </div>

                    <p class="text-muted fst-italic mt-2">" {{ $item['desc'] }} "</p>

                    <div class="d-flex align-items-center">
                        <img src="{{ asset($item['img']) }}" class="avatar avatar-small rounded-pill shadow" alt="">
                        <div class="ms-2">
                            <h6 class="text-dark small mb-0">{{ $item['name'] }}</h6>
                            <small class="text-muted d-block">{{ $item['title'] }}</small>
                        </div>
                    </div>

                    <i class="mdi mdi-format-quote-open text-primary position-absolute top-50 start-50 translate-middle z-n1 testi-icon"></i>
                </div>
            </div>
        @endforeach

    </div>
</div>

<div class="col-lg-4 col-12 mt-4 mt-lg-0">
    <div class="row">

        @foreach ($reviews2 as $item)
            <div class="{{ $item['style'] }}">
                <div class="position-relative overflow-hidden z-1 bg-white rounded shadow p-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <h6 class="mb-0">{{ $item['title1'] }}</h6>

                        <ul class="list-unstyled mb-0 text-warning">
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                        </ul>
                    </div>

                    <p class="text-muted fst-italic mt-2">" {{ $item['desc'] }} "</p>

                    <div class="d-flex align-items-center">
                        <img src="{{ asset($item['img']) }}" class="avatar avatar-small rounded-pill shadow" alt="">
                        <div class="ms-2">
                            <h6 class="text-dark small mb-0">{{ $item['name'] }}</h6>
                            <small class="text-muted d-block">{{ $item['title'] }}</small>
                        </div>
                    </div>

                    <i class="mdi mdi-format-quote-open text-primary position-absolute top-50 start-50 translate-middle z-n1 testi-icon"></i>
                </div>
            </div>
        @endforeach

    </div>
</div>