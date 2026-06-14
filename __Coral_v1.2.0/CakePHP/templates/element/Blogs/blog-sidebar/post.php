<?php
$posts = [
    [
        'img' => 'assets/images/blog/1.jpg', 
        'title' => 'Consultant Business',
        'date' => '15th July 2025',
        'style' => '',
    ],
    [
        'img' => 'assets/images/blog/2.jpg', 
        'title' => 'Grow Your Business',
        'date' => '15th July 2025',
        'style' => 'mt-3',
    ],
    [
        'img' => 'assets/images/blog/3.jpg', 
        'title' => 'Look On The Glorious Balance',
        'date' => '15th July 2025',
        'style' => 'mt-3',
    ]
];
?>

<?php foreach ($posts as $item): ?>
    <div class="blog blog-primary d-flex align-items-center <?= h($item['style']) ?>">
        <img src="<?= $this->Url->build('/' . h($item['img'])) ?>" class="avatar avatar-small rounded" style="width: auto;" alt="">
        <div class="flex-1 ms-3">
            <a href="" class="d-block title text-dark fw-medium"><?= h($item['title']) ?></a>
            <span class="text-muted small"><?= h($item['date']) ?></span>
        </div>
    </div>
<?php endforeach; ?>