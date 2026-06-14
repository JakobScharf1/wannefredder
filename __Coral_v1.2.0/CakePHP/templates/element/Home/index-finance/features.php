<?php
$features = [
    [
        'icon' => 'aperture', 
        'title' => 'Branding Strategy',
        'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
    ],
    [
        'icon' => 'send', 
        'title' => 'Digital Solutions',
        'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
    ],
    [
        'icon' => 'users', 
        'title' => 'Social Media',
        'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
    ],
    [
        'icon' => 'star', 
        'title' => 'Insightful Analytics',
        'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
    ]
];
?>

<?php foreach ($features as $item): ?>
    <div class="col-lg-3 col-md-6">
        <div class="card rounded p-4 py-5 bg-primary position-relative overflow-hidden border-0">
            <i data-feather="<?= h($item['icon']) ?>" class="fea icon-md text-white z-1"></i>
            <div class="card-body p-0 mt-4">
                <h5 class="text-white"><?= h($item['title']) ?></h5>
                <p class="para text-white-50 mb-0"><?= h($item['desc']) ?></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>