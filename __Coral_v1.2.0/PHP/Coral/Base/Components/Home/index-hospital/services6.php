<?php
$services = [
    [
        'id' => 7,
        'img' => '/images/service/cardiology.svg',
        'title' => 'Cardiology',
        'desc' => 'Success needs hard work & quality work.',
    ],
    [
        'id' => 8,
        'img' => '/images/service/neurology.svg',
        'title' => 'Neurology',
        'desc' => 'Success needs hard work & quality work.',
    ],
    [
        'id' => 9,
        'img' => '/images/service/orthopaedic.svg',
        'title' => 'Orthopaedic',
        'desc' => 'Success needs hard work & quality work.',
    ],
    [
        'id' => 10,
        'img' => '/images/service/gynecology.svg',
        'title' => 'Gynecology',
        'desc' => 'Success needs hard work & quality work.',
    ],
    [
        'id' => 11,
        'img' => '/images/service/dermatology.svg',
        'title' => 'Dermatology',
        'desc' => 'Success needs hard work & quality work.',
    ]
];
?>

<?php foreach ($services as $item): ?>
    <div class="col">
        <div class="position-relative features fea-medical text-center rounded shadow p-4">
            <div class="position-relative d-flex justify-content-center">
                <img src="<?php echo $static_url, $item['img']; ?>" class="avatar avatar-md-sm z-1" alt="">
                <div class="feature-icon bg-soft-primary position-absolute top-50 start-50 translate-middle avatar avatar-small"></div>
            </div>

            <div class="mt-4">
                <a href="service-detail.php?title=<?php echo urlencode(str_replace(' ', '-', strtolower($item['title']))); ?>" class="h5 text-dark link-title"><?php echo $item['title']; ?></a>
                <p class="text-muted mt-3"><?php echo $item['desc']; ?></p>
                <a href="service-detail.php?title=<?php echo urlencode(str_replace(' ', '-', strtolower($item['title']))); ?>" class="text-primary">Read More <i class="mdi mdi-arrow-right align-middle"></i></a>
            </div>
        </div>
    </div>
<?php endforeach; ?>