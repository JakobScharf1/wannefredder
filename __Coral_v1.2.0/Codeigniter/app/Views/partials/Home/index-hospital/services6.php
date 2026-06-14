<?php foreach (array_slice($services, 6, 5) as $item): ?>
    <div class="col">
        <div class="position-relative features fea-medical text-center rounded shadow p-4">
            <div class="position-relative d-flex justify-content-center">
                <img src="<?= base_url($item['img']) ?>" class="avatar avatar-md-sm z-1" alt="">
                <div class="feature-icon bg-soft-primary position-absolute top-50 start-50 translate-middle avatar avatar-small"></div>
            </div>

            <div class="mt-4">
                <a href="<?= base_url('service-detail/' . strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $item['title'])))); ?>" class="h5 text-dark link-title"><?= esc($item['title']) ?></a>
                <p class="text-muted mt-3"><?= esc($item['desc']) ?></p>
                <a href="<?= base_url('service-detail/' . strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $item['title'])))); ?>" class="text-primary">Read More <i class="mdi mdi-arrow-right align-middle"></i></a>
            </div>
        </div>
    </div>
<?php endforeach; ?>