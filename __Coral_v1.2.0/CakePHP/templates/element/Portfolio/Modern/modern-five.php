<?php
$portfolios = [
    [
        'id' => 1,
        'img' => 'assets/images/portfolio/1.jpg',
        'title' => 'Artboard Studio',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 2,
        'img' => 'assets/images/portfolio/2.jpg',
        'title' => 'The Portrait',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 3,
        'img' => 'assets/images/portfolio/3.jpg',
        'title' => 'Villa in Dallas',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 4,
        'img' => 'assets/images/portfolio/4.jpg',
        'title' => 'Photo Retouching',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 5,
        'img' => 'assets/images/portfolio/5.jpg',
        'title' => 'The Cup of Coffee',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 6,
        'img' => 'assets/images/portfolio/6.jpg',
        'title' => 'The Pen and Books',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 7,
        'img' => 'assets/images/portfolio/7.jpg',
        'title' => 'Mercedez-Benz Coupe',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 8,
        'img' => 'assets/images/portfolio/8.jpg',
        'title' => 'Inspiration Board',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 9,
        'img' => 'assets/images/portfolio/9.jpg',
        'title' => 'The Cactus Plant',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 10,
        'img' => 'assets/images/portfolio/10.jpg',
        'title' => 'The Yellow Bag',
        'name' => 'Custom Branding',
    ]
];
?>

<?php foreach ($portfolios as $item): ?>
    <div class="col">
        <div class="portfolio modern rounded shadow position-relative overflow-hidden">
            <div class="position-relative overflow-hidden image">
                <img src="<?= $this->Url->build('/' . h($item['img'])) ?>" class="img-fluid" alt="">
                <div class="position-absolute start-0 end-0 top-0 bottom-0 overlay"></div>
            </div>

            <div class="content p-3 bg-white position-absolute bottom-0 start-0 end-0 rounded shadow m-4">
                <a href="<?= $this->Url->build('/portfolio-detail/' . strtolower(str_replace(' ', '-', $item['title']))) ?>" class="text-dark fs-5 fw-medium link-title"><?= h($item['title']) ?></a>
                <p class="text-muted mb-0"><?= h($item['name']) ?></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>