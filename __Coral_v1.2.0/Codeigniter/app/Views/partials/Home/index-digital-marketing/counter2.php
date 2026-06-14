<?php foreach ($counters2 as $item): ?>
    <div class="col-lg-12 col-md-4 col-6">
        <div class="counter-box text-center">
            <div class="position-relative">
                <i data-feather="<?= esc($item['icon']) ?>" class="fea icon-md mb-2 text-primary"></i>
            </div>
            <h3 class="text-dark fw-semibold"><span class="counter-value" data-target="<?= esc($item['target']) ?>"><?= esc($item['number']) ?></span><?= esc($item['symbol']) ?></h3>
            <h6 class="counter-head text-muted fw-medium mb-0"><?= esc($item['title']) ?></h6>
        </div> 
    </div>
<?php endforeach; ?>