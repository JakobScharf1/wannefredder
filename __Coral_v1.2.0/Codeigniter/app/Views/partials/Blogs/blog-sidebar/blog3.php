<?php foreach ($blogs as $item): ?>
    <div class="col-lg-6 col-12">
        <div class="blog position-relative overflow-hidden shadow rounded p-4">
            <div class="position-relative">
                <div class="blog-image position-relative overflow-hidden rounded shadow">
                    <img src="<?= base_url($item['img']) ?>" class="img-fluid" alt="">
                </div>

                <div class="position-absolute top-100 start-0 translate-middle-y ms-2">
                    <a href="" class="badge bg-primary"><?= esc($item['name']) ?></a>
                </div>
            </div>

            <div class="pt-4">
                <a href="<?= base_url('blog-standard-post/' . strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $item['title'])))); ?>" class="text-dark title h5"><?= esc($item['title']) ?></a>

                <p class="text-muted my-2"><?= esc($item['desc']) ?></p>

                <a href="<?= base_url('blog-standard-post/' . strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $item['title'])))); ?>" class="text-dark read-more">Read More <i class="mdi mdi-chevron-right align-middle"></i></a>
            </div>
        </div>
    </div>
<?php endforeach; ?>