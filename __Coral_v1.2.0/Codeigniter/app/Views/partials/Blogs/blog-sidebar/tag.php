<?php foreach ($tags as $item): ?>
    <li class="d-inline-flex m-1"><a href="javascript:void(0)" class="rounded fw-medium text-dark py-1 px-2"><?= esc($item['title']) ?></a></li>
<?php endforeach; ?>