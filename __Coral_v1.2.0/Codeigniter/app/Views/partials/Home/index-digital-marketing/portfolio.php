<?php foreach ($portfolios as $item): ?>
    <div class="col-lg-3 col-md-4">
        <div class="portfolio modern rounded shadow position-relative overflow-hidden">
            <div class="position-relative overflow-hidden image">
                <img src="<?= base_url($item['img']) ?>" class="img-fluid" alt="">
            </div>

            <div class="content p-3 bg-white position-absolute bottom-0 start-0 end-0 rounded m-4">
                <a href="" class="text-dark fs-5 fw-medium link-title"><?= esc($item['title']) ?></a>
                <p class="text-muted mb-0"><?= esc($item['name']) ?></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>