<?php foreach ($posts as $item): ?>
    <div class="blog blog-primary d-flex align-items-center <?= esc($item['style']) ?>">
        <img src="<?= base_url($item['img']) ?>" class="avatar avatar-small rounded" style="width: auto;" alt="">
        <div class="flex-1 ms-3">
            <a href="" class="d-block title text-dark fw-medium"><?= esc($item['title']) ?></a>
            <span class="text-muted small"><?= esc($item['date']) ?></span>
        </div>
    </div>
<?php endforeach; ?>