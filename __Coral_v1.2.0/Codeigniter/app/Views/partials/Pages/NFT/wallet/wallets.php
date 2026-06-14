<?php foreach ($wallets as $item): ?>
    <div class="col-lg-3 col-md-4 col-sm-2 col-12">
        <div class="wallet position-relative overflow-hidden rounded shadow">
            <div class="bg-gradient-primary p-4"></div>
            <div class="position-relative">
                <div class="position-absolute top-0 start-50 translate-middle">
                    <img src="<?= base_url($item['img']) ?>" class="avatar avatar-small rounded-pill shadow-sm p-2 bg-light" alt="">
                </div>
                
                <div class="content text-center p-4">
                    <h5 class="mt-4 mb-0"><?= esc($item['title']) ?></h5>
                    <p class="text-muted mt-3 mb-0"><?= esc($item['desc']) ?> <a href="javascript:void(0)" class="text-primary">here <i class="mdi mdi-arrow-right"></i></a></p>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>