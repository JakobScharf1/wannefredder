@php
$creators = [
    [
        'img' => 'assets/images/team/1.jpg', 
        'name' => 'Steven Townsend', 
        'title' => "@StreetBoy", 
        'btn' => "Follow", 
    ],
    [
        'img' => 'assets/images/team/2.jpg', 
        'name' => 'Tiffany Betancourt', 
        'title' => "@CutieGirl", 
        'btn' => "Follow", 
    ],
    [
        'img' => 'assets/images/team/3.jpg', 
        'name' => 'Mari Harrington', 
        'title' => "@NorseQueen", 
        'btn' => "Follow", 
    ],
    [
        'img' => 'assets/images/team/4.jpg', 
        'name' => 'Floyd Glasgow', 
        'title' => "@BigBull", 
        'btn' => "Follow", 
    ],
    [
        'img' => 'assets/images/team/5.jpg', 
        'name' => 'Donna Schultz', 
        'title' => "@Angel", 
        'btn' => "Follow", 
    ],
    [
        'img' => 'assets/images/team/6.jpg', 
        'name' => 'Joshua Morris', 
        'title' => "@CrazyAnyone", 
        'btn' => "Follow", 
    ],
    [
        'img' => 'assets/images/team/7.jpg', 
        'name' => 'Carl Williams', 
        'title' => "@LooserBad", 
        'btn' => "Follow", 
    ],
    [
        'img' => 'assets/images/team/8.jpg', 
        'name' => 'Eugene Green', 
        'title' => "@KristyHoney", 
        'btn' => "Follow", 
    ]
];
@endphp

@foreach ($creators as $item)
    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
        <div class="position-relative rounded shadow overflow-hidden">
            <div class="bg-gradient-primary p-4 pt-5"></div>
            <div class="position-relative">
                <div class="position-absolute top-0 start-50 translate-middle">
                    <img src="{{ asset($item['img']) }}" class="avatar avatar-small rounded-pill shadow-sm img-thumbnail bg-light" alt="">
                </div>
                <div class="content text-center p-4">
                    <div class="mt-4">
                        <a href="{{ url('/creator-profile') }}" class="text-dark h6 link-title mb-0">{{ $item['name'] }}</a>
                    </div>
                    <small class="text-muted">{{ $item['title'] }}</small>

                    <div class="mt-3">
                        <a href="javascript:void(0)" class="btn btn-sm btn-soft-primary">{{ $item['btn'] }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach