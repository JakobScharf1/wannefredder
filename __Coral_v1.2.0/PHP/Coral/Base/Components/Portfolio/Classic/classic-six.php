<?php
$portfolios = [
    [
        'id' => 1,
        'img' => '/images/portfolio/1.jpg',
        'title' => 'Artboard Studio',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 2,
        'img' => '/images/portfolio/2.jpg',
        'title' => 'The Portrait',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 3,
        'img' => '/images/portfolio/3.jpg',
        'title' => 'Villa in Dallas',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 4,
        'img' => '/images/portfolio/4.jpg',
        'title' => 'Photo Retouching',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 5,
        'img' => '/images/portfolio/5.jpg',
        'title' => 'The Cup of Coffee',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 6,
        'img' => '/images/portfolio/6.jpg',
        'title' => 'The Pen and Books',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 7,
        'img' => '/images/portfolio/7.jpg',
        'title' => 'Mercedez-Benz Coupe',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 8,
        'img' => '/images/portfolio/8.jpg',
        'title' => 'Inspiration Board',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 9,
        'img' => '/images/portfolio/9.jpg',
        'title' => 'The Cactus Plant',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 10,
        'img' => '/images/portfolio/10.jpg',
        'title' => 'The Yellow Bag',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 11,
        'img' => '/images/portfolio/11.jpg',
        'title' => 'The Teapot Table',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 12,
        'img' => '/images/portfolio/12.jpg',
        'title' => 'The Orange',
        'name' => 'Custom Branding',
    ]
];
?>

<?php foreach ($portfolios as $item): ?>
    <div class="col-lg-2 col-md-4">
        <div class="portfolio">
            <a href="<?php echo $static_url, $item['img']; ?>" class="lightbox"><img src="<?php echo $static_url, $item['img']; ?>" class="img-fluid rounded shadow" alt=""></a>

            <div class="content mt-3">
                <a href="portfolio-detail.php?title=<?php echo urlencode(str_replace(' ', '-', strtolower($item['title']))); ?>" class="text-dark fs-5 fw-medium link-title"><?php echo $item['title']; ?></a>
                <p class="text-muted mb-0"><?php echo $item['name']; ?></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>