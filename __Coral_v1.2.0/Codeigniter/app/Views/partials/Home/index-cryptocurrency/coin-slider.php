<?php foreach ($sliders as $item): ?>
    <div class="tiny-slide">
        <div class="position-relative overflow-hidden rounded shadow bg-white p-4 m-2">
            <div class="position-relative d-flex align-items-center justify-content-between z-1">
                <div class="d-flex align-items-center">
                    <img src="<?= base_url($item['img']) ?>" class="rounded-pill shadow bg-white avatar avatar-md-sm" alt="">
                    
                    <div class="ms-3">
                        <h6 class="mb-1"><a href="" class="text-dark link-title"><?= esc($item['title']) ?></a></h6>
                        <h6 class="text-<?= esc($item['class']) ?> small mb-0"><?= esc($item['price']) ?></h6>
                    </div>
                </div>
                
                <div class="ms-2">
                    <span class="badge bg-<?= esc($item['class']) ?> rounded-pill"><?= esc($item['percentage']) ?></span>
                </div>
            </div>
            
            <div class="position-absolute top-50 start-100 translate-middle">
                <img src="<?= base_url($item['img']) ?>" class="avatar avatar-md-md opacity-10 me-5" alt="">
            </div>
        </div>
    </div>
<?php endforeach; ?>