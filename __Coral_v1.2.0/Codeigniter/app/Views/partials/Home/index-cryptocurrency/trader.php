<?php foreach ($traders as $item): ?>
    <div class="col-lg-3 col-md-6">
        <div class="position-relative p-4 bg-white shadow rounded overflow-hidden">
            <div class="pe-4">
                <a href="javascript:void(0)" class="link-title h5 text-dark"><?= esc($item['title']) ?></a>
                <p class="text-muted mb-3 mt-4"><?= esc($item['desc']) ?></p>
                <a href="javascript:void(0)" class="btn btn-link primary"><?= esc($item['btn']) ?> <i class="mdi mdi-arrow-right align-middle"></i></a>
            </div>
            <div class="position-absolute top-50 start-100 translate-middle z-0">
                <img src="<?= base_url($item['img']) ?>" class="avatar avatar-large opacity-25" alt="">
            </div>
        </div>
    </div>
<?php endforeach; ?>