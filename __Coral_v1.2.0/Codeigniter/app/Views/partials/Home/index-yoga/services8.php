<?php foreach (array_slice($services, 14, 4) as $item): ?>
    <div class="col-lg-3 col-md-6 col-12">
        <div class="position-relative features text-center rounded p-4">
            <div class="position-relative d-flex justify-content-center">
                <img src="<?= base_url($item['img']) ?>" class="avatar avatar-large" alt="">
                <div class="feature-icon bg-soft-primary position-absolute top-0 translate-middle avatar avatar-large"></div>
            </div>

            <div class="mt-4">
                <a href="<?= base_url('service-detail/' . strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $item['title'])))); ?>" class="h5 text-dark link-title"><?= esc($item['title']) ?></a>
                <p class="text-muted mt-3"><?= esc($item['desc']) ?></p>
                <a href="<?= base_url('service-detail/' . strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $item['title'])))); ?>" class="text-primary">Learn More <i class="mdi mdi-arrow-right align-middle"></i></a>
            </div>
        </div>
    </div>
<?php endforeach; ?>