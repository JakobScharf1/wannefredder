<?php foreach ($portfolios2 as $item): ?>
    <div class="col-lg-3 col-md-4 col-12 picture-item">
        <div class="portfolio masonry position-relative overflow-hidden">
            <div class="position-relative overflow-hidden image">
                <img src="<?= base_url($item['img']) ?>" class="img-fluid" alt="">
                <div class="position-absolute start-0 end-0 top-0 bottom-0 overlay rounded bg-black m-4"></div>
            </div>

            <div class="content">
                <div class="title-body p-3 position-absolute start-0 end-0 m-4">
                    <a href="" class="link-title text-white fs-5 fw-medium"><?= esc($item['title']) ?></a>
                    <p class="text-white-50 mb-0"><?= esc($item['name']) ?></p>
                </div>

                <div class="p-3 position-absolute top-0 end-0 m-4">
                    <a href="<?= base_url($item['img']) ?>" class="btn btn-sm btn-icon btn-pills btn-primary lightbox"><i data-feather="camera" class="fea icon-sm"></i></a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>