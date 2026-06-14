@php
$fridays = [
    [
        'img' => 'assets/images/team/yoga1.jpg', 
        'title' => 'Viparita Dandasana',
        'name' => '- Jack John',
        'time' => '8:00AM',
    ],
    [
        'img' => 'assets/images/team/yoga2.jpg', 
        'title' => 'Bakasana',
        'name' => '- Jeremiah Green',
        'time' => '9:00AM',
    ],
    [
        'img' => 'assets/images/team/yoga3.jpg', 
        'title' => 'Utkatasana',
        'name' => '- Christina Vasquez',
        'time' => '10:00AM',
    ],
    [
        'img' => 'assets/images/team/yoga4.jpg', 
        'title' => 'Uttanasana',
        'name' => '- Lillian Boldt',
        'time' => '11:00AM',
    ],
    [
        'img' => 'assets/images/team/yoga1.jpg', 
        'title' => 'Salabhasana',
        'name' => '- Jack John',
        'time' => '12:00AM',
    ],
    [
        'img' => 'assets/images/team/yoga2.jpg', 
        'title' => 'Natarajasana',
        'name' => '- Jeremiah Green',
        'time' => '1:00PM',
    ]
];
@endphp

@foreach ($fridays as $item)
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