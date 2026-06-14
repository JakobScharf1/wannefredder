<?php
$services = [
    [
        'id' => 1,
        'title' => 'Branding Strategy',
        'style' => '',
    ],
    [
        'id' => 2,
        'title' => 'Digital Solutions',
        'style' => 'mt-2',
    ],
    [
        'id' => 3,
        'title' => 'Social Media',
        'style' => 'mt-2',
    ],
    [
        'id' => 4,
        'title' => 'Insightful Analytics',
        'style' => 'mt-2',
    ],
    [
        'id' => 5,
        'title' => 'Business Consultation',
        'style' => 'mt-2',
    ],
    [
        'id' => 6,
        'title' => '24/7 Support',
        'style' => 'mt-2',
    ],
];
?>

<?php foreach ($services as $item): ?>
    <a href="service-detail.php?title=<?php echo urlencode(str_replace(' ', '-', strtolower($item['title']))); ?>" class="bg-light rounded d-flex justify-content-between text-dark py-3 px-4 <?php echo $item['style']; ?>">
        <span class="fw-semibold"><?php echo $item['title']; ?></span>
        <i class="mdi mdi-chevron-right align-middle"></i>
    </a>
<?php endforeach; ?>