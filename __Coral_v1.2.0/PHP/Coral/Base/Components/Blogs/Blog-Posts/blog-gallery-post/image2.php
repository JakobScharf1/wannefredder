<?php
$images = [
    [
        'img' => '/images/portfolio/1.jpg', 
    ],
    [
        'img' => '/images/projects/3.jpg', 
    ],
    [
        'img' => '/images/portfolio/2.jpg', 
    ],
    [
        'img' => '/images/projects/5.jpg', 
    ],
    [
        'img' => '/images/projects/6.jpg', 
    ],
    [
        'img' => '/images/projects/8.jpg', 
    ],
    [
        'img' => '/images/portfolio/3.jpg', 
    ],
    [
        'img' => '/images/portfolio/4.jpg', 
    ]
]
?>

<?php foreach ($images as $item): ?>
    <div class="col-lg-3 col-md-4 col-12 picture-item">
        <img src="<?php echo $static_url, $item['img']; ?>" class="img-fluid rounded shadow" alt="">
    </div>
<?php endforeach; ?>