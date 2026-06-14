<?php foreach (array_slice($services, 0, 3) as $item): ?>
    <div class="<?= esc($item['style']) ?>">
        <div class="position-relative features d-flex">
            <div class="position-relative d-flex justify-content-center">
                <i data-feather="<?= esc($item['icon']) ?>" class="fea icon-m-md text-primary z-1"></i>
                <div class="feature-icon bg-soft-primary position-absolute top-0 start-50 translate-middle"></div>
            </div>

            <div class="ms-3">
                <a href="<?= base_url('service-detail/' . strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $item['title'])))); ?>" class="h5 text-dark link-title"><?= esc($item['title']) ?></a>
                <p class="text-muted mt-3"><?= esc($item['desc']) ?></p>
                <a href="<?= base_url('service-detail/' . strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $item['title'])))); ?>" class="text-primary">Learn More <i class="mdi mdi-arrow-right align-middle"></i></a>
            </div>
        </div>
    </div>
<?php endforeach; ?>