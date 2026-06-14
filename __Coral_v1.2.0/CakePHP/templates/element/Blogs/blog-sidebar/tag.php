<?php
$tags = [
    [
        'title' => 'Business',
    ],
    [
        'title' => 'Finance',
    ],
    [
        'title' => 'Marketing',
    ],
    [
        'title' => 'Fashion',
    ],
    [
        'title' => 'Bride',
    ],
    [
        'title' => 'Lifestyle',
    ],
    [
        'title' => 'Travel',
    ],
    [
        'title' => 'Beauty',
    ],
    [
        'title' => 'Video',
    ],
    [
        'title' => 'Audio',
    ]
];
?>

<?php foreach ($tags as $item): ?>
    <li class="d-inline-flex m-1"><a href="javascript:void(0)" class="rounded fw-medium text-dark py-1 px-2"><?= h($item['title']) ?></a></li>
<?php endforeach; ?>