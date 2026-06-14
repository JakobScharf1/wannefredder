<?php foreach ($images2 as $item): ?>
    <div class="col-lg-3 col-md-4 col-12 picture-item">
        <img src="<?= base_url($item['img']) ?>" class="img-fluid rounded shadow" alt="">
    </div>
<?php endforeach; ?>