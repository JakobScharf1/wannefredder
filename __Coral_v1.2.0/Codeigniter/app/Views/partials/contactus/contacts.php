<?php foreach ($contacts as $item): ?>
    <div class="<?= esc($item['style']) ?>">
        <div class="position-relative features text-center mx-lg-4 px-md-1">
            <div class="position-relative d-flex justify-content-center">
                <i data-feather="<?= esc($item['icon']) ?>" class="fea icon-md text-primary z-1"></i>
                <div class="feature-icon bg-soft-primary position-absolute top-0 translate-middle"></div>
            </div>

            <div class="mt-4">
                <h5 class="mb-3"><?= esc($item['title']) ?></h5>
                <p class="text-muted"><?= esc($item['desc']) ?> <br><?= esc($item['desc1']) ?></p>
                <a href="<?= esc($item['link']) ?>" class="text-primary"><?= esc($item['name']) ?></a>
            </div>
        </div>
    </div>
<?php endforeach; ?>