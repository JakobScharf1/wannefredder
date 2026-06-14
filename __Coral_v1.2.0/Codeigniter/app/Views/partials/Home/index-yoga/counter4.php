<?php foreach ($counters4 as $item): ?>
    <div class="col-md-4 col-6 mt-4 pt-3">
        <div class="counter-box">
            <div class="position-relative">
                <i data-feather="<?= esc($item['icon']) ?>" class="fea icon-lg mb-3 text-primary"></i>

                <div class="position-absolute top-0 translate-middle p-3 bg-soft-primary rounded-circle"></div>
            </div>
            <h3 class="mb-0 text-dark fw-semibold"><span class="counter-value" data-target="<?= esc($item['target']) ?>"><?= esc($item['number']) ?></span><?= esc($item['symbol']) ?></h3>
            <h6 class="counter-head text-muted fw-medium mb-0"><?= esc($item['title']) ?></h6>
        </div>
    </div>
<?php endforeach; ?>