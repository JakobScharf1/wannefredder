<?php
$navs = [
    [
        'title' => 'Monday',
        'id' => 'mondayschedule',
        'link' => '#monday',
        'controls' => 'monday',
        'style' => 'nav-item',
        'class' => 'active',
    ],
    [
        'title' => 'Tuesday',
        'id' => 'tuesdayschedule',
        'link' => '#tuesday',
        'controls' => 'tuesday',
        'style' => 'nav-item mt-2',
        'class' => '',
    ],
    [
        'title' => 'Wednesday',
        'id' => 'wednesdayschedule',
        'link' => '#wednesday',
        'controls' => 'wednesday',
        'style' => 'nav-item mt-2',
        'class' => '',
    ],
    [
        'title' => 'Thursday',
        'id' => 'thursdayschedule',
        'link' => '#thursday',
        'controls' => 'thursday',
        'style' => 'nav-item mt-2',
        'class' => '',
    ],
    [
        'title' => 'Friday',
        'id' => 'fridayschedule',
        'link' => '#friday',
        'controls' => 'friday',
        'style' => 'nav-item mt-2',
        'class' => '',
    ],
    [
        'title' => 'Saturday',
        'id' => 'saturdayschedule',
        'link' => '#saturday',
        'controls' => 'saturday',
        'style' => 'nav-item mt-2',
        'class' => '',
    ]
];
?>

<?php foreach ($navs as $item): ?>
    <li class="<?= h($item['style']) ?>">
        <a class="nav-link rounded shadow <?= h($item['class']) ?>" id="<?= h($item['id']) ?>" data-bs-toggle="pill" href="<?= h($item['link']) ?>" role="tab" aria-controls="<?= h($item['controls']) ?>" aria-selected="false">
            <div class="text-center py-1">
                <h6 class="mb-0"><?= h($item['title']) ?></h6>
            </div>
        </a>
    </li>
<?php endforeach; ?>