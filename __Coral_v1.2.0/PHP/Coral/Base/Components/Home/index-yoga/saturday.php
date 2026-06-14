<?php
$saturdays = [
    [
        'img' => '/images/team/yoga1.jpg', 
        'title' => 'Ashtanga Namaskara',
        'name' => '- Jack John',
        'time' => '8:00AM',
    ],
    [
        'img' => '/images/team/yoga2.jpg', 
        'title' => 'Trivikramasana',
        'name' => '- Jeremiah Green',
        'time' => '9:00AM',
    ],
    [
        'img' => '/images/team/yoga3.jpg', 
        'title' => 'Garudasana',
        'name' => '- Christina Vasquez',
        'time' => '10:00AM',
    ]
];
?>

<?php foreach ($saturdays as $item): ?>
    <tr>
        <td class="p-4 fw-medium" style="max-width: 100px;"><?php echo $item['time']; ?></td>
        <td class="p-4" style="min-width: 300px;">
            <div class="d-flex">
                <img src="<?php echo $static_url, $item['img']; ?>" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                <div class="ms-3">
                    <h6 class="text-dark mb-0 d-block"><?php echo $item['title']; ?></h6>
                    <small class="text-muted"><?php echo $item['name']; ?></small>
                </div>
            </div>
        </td>
    </tr>
<?php endforeach; ?>