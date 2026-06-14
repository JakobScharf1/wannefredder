<?php foreach (array_slice($sliders2, 0, 3) as $item): ?>
    <div class="tiny-slide">
        <div class="m-2">
            <div class="nft-item p-4 rounded shadow bg-white">
                <div class="position-relative">
                    <div class="nft-image position-relative overflow-hidden rounded shadow">
                        <img src="<?= base_url($item['img']) ?>" class="img-fluid" alt="">
                        <div class="bg-overlay bg-black"></div>
                        <div class="bid-button position-absolute top-50 translate-y-middle start-0 end-0 text-center">
                            <a href="<?= base_url('nft-detail/' . strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $item['title'])))); ?>" class="btn btn-sm btn-primary me-1"><i data-feather="shopping-cart" class="fea icon-sm align-middle me-1"></i> <?= esc($item['btn']) ?></a>
                            <a href="<?= base_url('nft-detail/' . strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $item['title'])))); ?>" class="btn btn-sm btn-primary"><i data-feather="zap" class="fea icon-sm align-middle me-1"></i> <?= esc($item['btn1']) ?></a>
                        </div>
                    </div>

                    <div class="position-absolute top-0 start-0 m-3">
                        <a href="<?= base_url('/creator-profile') ?>"><img src="<?= base_url($item['img1']) ?>" class="avatar avatar-md-sm rounded-pill shadow img-thumbnail" alt=""></a>
                    </div>
                </div>

                <div class="content pt-4 position-relative">
                    <a href="<?= base_url('nft-detail/' . strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $item['title'])))); ?>" class="text-dark link-title h6"><?= esc($item['title']) ?></a>

                    <div class="d-flex justify-content-between mt-2">
                        <span class="rate text-primary"><?= esc($item['title1']) ?></span>
                        <span class="text-dark"><?= esc($item['name']) ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>