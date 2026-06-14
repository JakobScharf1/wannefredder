<?php foreach ($partners as $item): ?>
    <li class="list-inline-item px-sm-5 px-4 mb-0">
        <img src="<?= base_url($item['img']) ?>" class="img-fluid img-white" alt="">
    </li>
<?php endforeach; ?>