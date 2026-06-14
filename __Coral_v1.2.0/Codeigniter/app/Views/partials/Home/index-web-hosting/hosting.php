<?php foreach ($hostings as $item): ?>
    <div class="col">
        <div class="features rounded shadow p-4 bg-primary bg-gradient">
            <img src="<?= base_url($item['img']) ?>" class="avatar avatar-md-sm" alt="">

            <div class="mt-3">
                <a href="" class="text-white fw-semibold"><?= esc($item['title']) ?></a>
                <small class="text-white-50 d-block mt-1"><?= esc($item['month']) ?></small>
            </div>
        </div>
    </div>
<?php endforeach; ?>