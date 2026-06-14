<?php foreach ($review as $item): ?>
    <div class="tiny-slide">
        <div class="position-relative overflow-hidden z-1 bg-white rounded shadow p-4 m-2">
            <div class="d-flex align-items-center justify-content-between">
                <h6 class="mb-0"><?= esc($item['title1']) ?></h6>

                <ul class="list-unstyled mb-0 text-warning">
                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                </ul>
            </div>

            <p class="text-muted fst-italic mt-2">" <?= esc($item['desc']) ?> "</p>

            <div class="d-flex align-items-center">
                <img src="<?= base_url($item['img']) ?>" class="avatar avatar-small rounded-pill shadow" alt="">
                <div class="ms-2">
                    <h6 class="text-dark small mb-0"><?= esc($item['name']) ?></h6>
                    <small class="text-muted d-block"><?= esc($item['title']) ?></small>
                </div>
            </div>

            <i class="mdi mdi-format-quote-open text-primary position-absolute top-50 start-50 translate-middle z-n1 testi-icon"></i>
        </div>
    </div>
<?php endforeach; ?>