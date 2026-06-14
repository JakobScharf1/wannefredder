<?php foreach ($features as $item): ?>
    <div class="col-lg-3 col-md-6">
        <div class="card rounded p-4 py-5 bg-primary position-relative overflow-hidden border-0">
            <i data-feather="<?= esc($item['icon']) ?>" class="fea icon-md text-white z-1"></i>
            <div class="card-body p-0 mt-4">
                <h5 class="text-white"><?= esc($item['title']) ?></h5>
                <p class="para text-white-50 mb-0"><?= esc($item['desc']) ?></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>