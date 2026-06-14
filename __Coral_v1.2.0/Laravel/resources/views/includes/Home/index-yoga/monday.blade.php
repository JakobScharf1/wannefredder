@php
$mondays = [
    [
        'img' => 'assets/images/team/yoga1.jpg', 
        'title' => 'Dhanurasana',
        'name' => '- Jack John',
        'time' => '8:00AM',
    ],
    [
        'img' => 'assets/images/team/yoga2.jpg', 
        'title' => 'Bhujangasana',
        'name' => '- Jeremiah Green',
        'time' => '9:00AM',
    ],
    [
        'img' => 'assets/images/team/yoga3.jpg', 
        'title' => 'Sirsasana',
        'name' => '- Christina Vasquez',
        'time' => '10:00AM',
    ],
    [
        'img' => 'assets/images/team/yoga4.jpg', 
        'title' => 'Padmasana',
        'name' => '- Lillian Boldt',
        'time' => '11:00AM',
    ],
    [
        'img' => 'assets/images/team/yoga1.jpg', 
        'title' => 'Utthita Parsvakonasana',
        'name' => '- Jack John',
        'time' => '12:00AM',
    ],
    [
        'img' => 'assets/images/team/yoga2.jpg', 
        'title' => 'Natarajasana',
        'name' => '- Jeremiah Green',
        'time' => '1:00PM',
    ],
    [
        'img' => 'assets/images/team/yoga3.jpg', 
        'title' => 'Halasana',
        'name' => '- Christina Vasquez',
        'time' => '2:00PM',
    ],
    [
        'img' => 'assets/images/team/yoga4.jpg', 
        'title' => 'Vajrasana',
        'name' => '- Lillian Boldt',
        'time' => '3:00PM',
    ]
];
@endphp

@foreach ($mondays as $item)
    <tr>
        <td class="p-4 fw-medium" style="max-width: 100px;">{{ $item['time'] }}</td>
        <td class="p-4" style="min-width: 300px;">
            <div class="d-flex">
                <img src="{{ asset($item['img']) }}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                <div class="ms-3">
                    <h6 class="text-dark mb-0 d-block">{{ $item['title'] }}</h6>
                    <small class="text-muted">{{ $item['name'] }}</small>
                </div>
            </div>
        </td>
    </tr>
@endforeach