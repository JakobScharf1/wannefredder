<?php
$services = [
    [
        'id' => 1,
        'icon' => 'aperture', 
        'title' => 'Branding Strategy',
        'desc' => "We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.",
    ],
    [
        'id' => 2,
        'icon' => 'send', 
        'title' => 'Digital Solutions',
        'desc' => "We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.",
    ],
    [
        'id' => 3,
        'icon' => 'users', 
        'title' => 'Social Media',
        'desc' => "We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.",
    ]
];
?>

<?php foreach ($services as $item): ?>
    <div class="col-lg-4 col-md-6 col-12">
        <div class="position-relative features text-center rounded shadow p-4 pt-5">
            <div class="position-relative d-flex justify-content-center">
                <i data-feather="<?php echo $item['icon']; ?>" class="fea icon-md text-primary z-1"></i>
                <div class="feature-icon bg-soft-primary position-absolute top-0 translate-middle"></div>
            </div>

            <div class="mt-4">
                <a href="service-detail.php?title=<?php echo urlencode(str_replace(' ', '-', strtolower($item['title']))); ?>" class="h5 text-dark link-title"><?php echo $item['title']; ?></a>
                <p class="text-muted mt-3"><?php echo $item['desc']; ?></p>
                <a href="service-detail.php?title=<?php echo urlencode(str_replace(' ', '-', strtolower($item['title']))); ?>" class="text-primary">Learn More <i class="mdi mdi-arrow-right align-middle"></i></a>
            </div>
        </div>
    </div>
<?php endforeach; ?>