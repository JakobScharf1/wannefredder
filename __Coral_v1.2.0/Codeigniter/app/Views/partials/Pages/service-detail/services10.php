<?php foreach ($services2 as $item): ?>
    <a href="<?= base_url('service-detail/' . strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $item['title'])))); ?>" class="bg-light rounded d-flex justify-content-between text-dark py-3 px-4 <?= esc($item['style']) ?>">
        <span class="fw-semibold"><?= esc($item['title']) ?></span>
        <i class="mdi mdi-chevron-right align-middle"></i>
    </a>
<?php endforeach; ?>