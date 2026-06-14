<?php
$services = [
    [
        'id' => 12,
        'icon' => 'zap', 
        'title' => 'Create Item', 
        'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
    ],
    [
        'id' => 13,
        'icon' => 'bookmark', 
        'title' => 'Collect', 
        'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
    ],
    [
        'id' => 14,
        'icon' => 'target', 
        'title' => 'Sell Item', 
        'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
    ]
];
?>

<?php foreach ($services as $item): ?>
    <div class="col-lg-4 col-md-6 col-12">
        <div class="position-relative features text-center p-4">
            <div class="position-relative d-flex justify-content-center">
                <i data-feather="<?= h($item['icon']) ?>" class="fea icon-md text-primary z-1"></i>
                <div class="feature-icon bg-soft-primary position-absolute top-0 translate-middle"></div>
            </div>

            <div class="mt-4">
                <a href="<?= $this->Url->build('/service-detail/' . strtolower(str_replace(' ', '-', $item['title']))) ?>" class="h5 text-dark link-title"><?= h($item['title']) ?></a>
                <p class="text-muted mt-3"><?= h($item['desc']) ?></p>
                <a href="<?= $this->Url->build('/service-detail/' . strtolower(str_replace(' ', '-', $item['title']))) ?>" class="text-primary">Learn More <i class="mdi mdi-arrow-right align-middle"></i></a>
            </div>
        </div>
    </div>
<?php endforeach; ?>