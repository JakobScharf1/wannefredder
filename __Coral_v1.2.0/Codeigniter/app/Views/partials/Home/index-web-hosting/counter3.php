<?php foreach ($counters3 as $item): ?>
    <div class="col-4 py-3">
        <div class="counter-box text-center">
            <h1 class="mb-0 fw-semibold"><span class="counter-value" data-target="<?= esc($item['target']) ?>"><?= esc($item['number']) ?></span><?= esc($item['symbol']) ?></h1>
            <h6 class="counter-head text-muted fw-normal"><?= esc($item['title']) ?></h6>
        </div>
    </div>
<?php endforeach; ?>