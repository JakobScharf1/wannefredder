<?php
$projects = [
    [
        'img' => '/images/projects/1.jpg', 
        'title' => 'Artboard Studio',
        'name' => 'Custom Branding',
    ],
    [
        'img' => '/images/projects/2.jpg', 
        'title' => 'The Portrait',
        'name' => 'Custom Branding',
    ],
    [
        'img' => '/images/projects/3.jpg', 
        'title' => 'Villa in Dallas',
        'name' => 'Custom Branding',
    ],
    [
        'img' => '/images/projects/4.jpg', 
        'title' => 'Photo Retouching',
        'name' => 'Custom Branding',
    ],
    [
        'img' => '/images/projects/5.jpg', 
        'title' => 'Mercedez-Benz Coupe',
        'name' => 'Custom Branding',
    ],
    [
        'img' => '/images/projects/6.jpg', 
        'title' => 'Inspiration Board',
        'name' => 'Custom Branding',
    ]
];
?>

<?php foreach ($projects as $item): ?>
    <div class="col-lg-4 col-md-4">
        <div class="portfolio modern rounded shadow position-relative overflow-hidden">
            <div class="position-relative overflow-hidden image">
                <img src="<?php echo $static_url, $item['img']; ?>" class="img-fluid" alt="">
                <div class="position-absolute start-0 end-0 top-0 bottom-0 overlay"></div>
            </div>

            <div class="content p-3 bg-white position-absolute bottom-0 start-0 end-0 rounded shadow m-4">
                <a href="" class="text-dark fs-5 fw-medium link-title"><?php echo $item['title']; ?></a>
                <p class="text-muted mb-0"><?php echo $item['name']; ?></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>