<div class="col-lg-4 col-md-6 col-12">
    <div class="row">

        <?php foreach ($reviews as $item): ?>
            <div class="<?= esc($item['style']) ?>">
                <div class="position-relative overflow-hidden z-1 bg-white rounded shadow p-4">
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

    </div>
</div>

<div class="col-lg-4 col-md-6 col-12 mt-4 mt-md-0">
    <div class="row">

        <?php foreach ($reviews1 as $item): ?>
            <div class="<?= esc($item['style']) ?>">
                <div class="position-relative overflow-hidden z-1 bg-white rounded shadow p-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <h6 class="mb-0"><?= esc($item['title1']) ?></h6>

                        <ul class="list-unstyled mb-0 text-warning">
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star-half-full"></i></li>
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

    </div>
</div>

<div class="col-lg-4 col-12 mt-4 mt-lg-0">
    <div class="row">

        <?php foreach ($reviews2 as $item): ?>
            <div class="<?= esc($item['style']) ?>">
                <div class="position-relative overflow-hidden z-1 bg-white rounded shadow p-4">
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

    </div>
</div>