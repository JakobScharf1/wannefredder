<?php foreach (array_slice($portfolios3, 0, 8) as $item): ?>
    <div class="col-lg-3 col-md-6">
        <div class="portfolio creative rounded shadow position-relative overflow-hidden">
            <div class="position-relative overflow-hidden image">
                <img src="<?= base_url($item['img']) ?>" class="img-fluid" alt="">
                <div class="position-absolute start-0 end-0 top-0 bottom-0 overlay bg-dark"></div>
            </div>

            <div class="content position-absolute bottom-0 start-0 end-0 m-4">
                <a href="<?= base_url('portfolio-detail/' . strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $item['title'])))); ?>" class="text-white fs-5 fw-medium link-title"><?= esc($item['title']) ?></a>
                <p class="text-white-50 mb-0"><?= esc($item['name']) ?></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>