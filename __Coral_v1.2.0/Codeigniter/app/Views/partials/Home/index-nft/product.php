<?php foreach (array_slice($sliders2, 3, 8) as $item): ?>
    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
        <div class="nft-item p-4 rounded shadow bg-white">
            <div class="position-relative">
                <div class="nft-image position-relative overflow-hidden rounded shadow">
                    <img src="<?= base_url($item['img']) ?>" class="img-fluid" alt="">
                    <div class="bg-overlay bg-black"></div>
                    <div class="bid-button position-absolute bottom-0 start-0 end-0 text-center pb-3">
                        <a href="<?= base_url('nft-detail/' . strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $item['title'])))); ?>" class="btn btn-sm btn-icon btn-pills btn-primary me-1" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Buy Now"><i data-feather="shopping-cart" class="fea icon-sm align-middle"></i></a>
                        <a href="<?= base_url('nft-detail/' . strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $item['title'])))); ?>" class="btn btn-sm btn-icon btn-pills btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Bid Now"><i data-feather="zap" class="fea icon-sm align-middle"></i></a>
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
<?php endforeach; ?>