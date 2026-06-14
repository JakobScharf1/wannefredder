<?php foreach ($navs as $item): ?>
    <li class="<?= esc($item['style']) ?>">
        <a class="nav-link rounded shadow <?= esc($item['class']) ?>" id="<?= esc($item['id']) ?>" data-bs-toggle="pill" href="<?= esc($item['link']) ?>" role="tab" aria-controls="<?= esc($item['controls']) ?>" aria-selected="false">
            <div class="text-center py-1">
                <h6 class="mb-0"><?= esc($item['title']) ?></h6>
            </div>
        </a>
    </li>
<?php endforeach; ?>