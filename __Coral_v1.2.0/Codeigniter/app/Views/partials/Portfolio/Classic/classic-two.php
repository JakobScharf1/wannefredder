<?php foreach (array_slice($portfolios3, 0, 8) as $item): ?>
    <div class="col-md-6">
        <div class="portfolio">
            <a href="<?= base_url($item['img']) ?>" class="lightbox"><img src="<?= base_url($item['img']) ?>" class="img-fluid rounded shadow" alt=""></a>

            <div class="content mt-3">
                <a href="<?= base_url('portfolio-detail/' . strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $item['title'])))); ?>" class="text-dark fs-5 fw-medium link-title"><?= esc($item['title']) ?></a>
                <p class="text-muted mb-0"><?= esc($item['name']) ?></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>