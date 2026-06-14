<?php foreach ($tables as $item): ?>
    <tr>
        <th class="p-3">
            <div class="align-items-center">
                <img src="<?= base_url($item['img']) ?>" class="me-2 avatar avatar-ex-small" alt="">
                <p class="mb-0 d-inline text-dark fw-normal h6"><?= esc($item['title']) ?></p>
            </div>
        </th>
        <td class="p-3 text-muted fw-medium"><?= esc($item['symbol']) ?></td>
        <td class="p-3 text-dark"><?= esc($item['price']) ?></td>
        <td class="<?= esc($item['class']) ?> p-3"><?= esc($item['percentage']) ?></td>
        <td class="<?= esc($item['class']) ?> p-3"><?= esc($item['dollar']) ?></td>
        <td class="text-muted p-3"><?= esc($item['marketcap']) ?></td>
        <td class="p-3 text-end"><a href="javascript:void(0)" class="btn btn-sm btn-primary"><?= esc($item['btn']) ?></a></td>
    </tr>
<?php endforeach; ?>