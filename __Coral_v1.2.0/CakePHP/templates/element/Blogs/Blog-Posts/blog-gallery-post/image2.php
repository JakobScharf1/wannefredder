<?php
$images = [
    [
        'img' => 'assets/images/portfolio/1.jpg', 
    ],
    [
        'img' => 'assets/images/projects/3.jpg', 
    ],
    [
        'img' => 'assets/images/portfolio/2.jpg', 
    ],
    [
        'img' => 'assets/images/projects/5.jpg', 
    ],
    [
        'img' => 'assets/images/projects/6.jpg', 
    ],
    [
        'img' => 'assets/images/projects/8.jpg', 
    ],
    [
        'img' => 'assets/images/portfolio/3.jpg', 
    ],
    [
        'img' => 'assets/images/portfolio/4.jpg', 
    ]
]
?>

<?php foreach ($images as $item): ?>
    <div class="col-lg-3 col-md-4 col-12 picture-item">
        <img src="<?= $this->Url->build('/' . h($item['img'])) ?>" class="img-fluid rounded shadow" alt="">
    </div>
<?php endforeach; ?>