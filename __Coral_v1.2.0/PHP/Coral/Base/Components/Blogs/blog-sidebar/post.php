<?php
$posts = [
    [
        'img' => '/images/blog/1.jpg', 
        'title' => 'Consultant Business',
        'date' => '15th July 2025',
        'style' => '',
    ],
    [
        'img' => '/images/blog/2.jpg', 
        'title' => 'Grow Your Business',
        'date' => '15th July 2025',
        'style' => 'mt-3',
    ],
    [
        'img' => '/images/blog/3.jpg', 
        'title' => 'Look On The Glorious Balance',
        'date' => '15th July 2025',
        'style' => 'mt-3',
    ]
];
?>

<?php foreach ($posts as $item): ?>
    <div class="blog blog-primary d-flex align-items-center <?php echo $item['style']; ?>">
        <img src="<?php echo $static_url, $item['img']; ?>" class="avatar avatar-small rounded" style="width: auto;" alt="">
        <div class="flex-1 ms-3">
            <a href="" class="d-block title text-dark fw-medium"><?php echo $item['title']; ?></a>
            <span class="text-muted small"><?php echo $item['date']; ?></span>
        </div>
    </div>
<?php endforeach; ?>