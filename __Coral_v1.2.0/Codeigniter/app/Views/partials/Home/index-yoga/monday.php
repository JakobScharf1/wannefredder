<?php foreach ($mondays as $item): ?>
    <tr>
        <td class="p-4 fw-medium" style="max-width: 100px;"><?= esc($item['time']) ?></td>
        <td class="p-4" style="min-width: 300px;">
            <div class="d-flex">
                <img src="<?= base_url($item['img']) ?>" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                <div class="ms-3">
                    <h6 class="text-dark mb-0 d-block"><?= esc($item['title']) ?></h6>
                    <small class="text-muted"><?= esc($item['name']) ?></small>
                </div>
            </div>
        </td>
    </tr>
<?php endforeach; ?>