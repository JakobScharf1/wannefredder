@php
$volunteers = [
    [
        'img' => 'assets/images/team/1.jpg', 
        'name' => 'Jack John',
        'title' => 'Volunteer',
    ],
    [
        'img' => 'assets/images/team/2.jpg', 
        'name' => 'Jeremiah Green',
        'title' => 'Volunteer',
    ],
    [
        'img' => 'assets/images/team/3.jpg', 
        'name' => 'Christin Vasquez',
        'title' => 'Volunteer',
    ],
    [
        'img' => 'assets/images/team/4.jpg', 
        'name' => 'Lillian Boldt',
        'title' => 'Volunteer',
    ]
];
@endphp

@foreach ($volunteers as $item)
    <div class="col-lg-3 col-md-6 col-12">
        <div class="card team team-primary bg-transparent text-center mb-5">
            <div class="card-img team-image d-inline-block mx-auto rounded overflow-hidden">
                <img src="{{ asset($item['img']) }}" class="img-fluid" alt="">

                <ul class="list-unstyled team-social mb-0">
                    <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="facebook" class="icons fea-social"></i></a></li>
                    <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="instagram" class="icons fea-social"></i></a></li>
                    <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="twitter" class="icons fea-social"></i></a></li>
                </ul><!--end icon-->
            </div>

            <div class="content bg-white mx-4 p-4 z-1 rounded shadow">
                <a href="" class="text-dark h5 mb-0 title">{{ $item['name'] }}</a>
                <h6 class="text-muted mb-0 mt-1 fw-normal">{{ $item['title'] }}</h6>
            </div>
        </div>
    </div>
@endforeach