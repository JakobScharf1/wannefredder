<?php
$causes = [
    [
        'img' => 'assets/images/cause/1.jpg', 
        'title' => 'Child Support',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'raised' => 'Raised 60% of $10000',
        'price' => '$ 6000',
        'price2' => '$ 10000',
    ],
    [
        'img' => 'assets/images/cause/2.jpg', 
        'title' => 'Clean Water',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'raised' => 'Raised 60% of $10000',
        'price' => '$ 6000',
        'price2' => '$ 10000',
    ],
    [
        'img' => 'assets/images/cause/3.jpg', 
        'title' => 'Help to Mothers',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'raised' => 'Raised 60% of $10000',
        'price' => '$ 6000',
        'price2' => '$ 10000',
    ],
    [
        'img' => 'assets/images/cause/4.jpg', 
        'title' => 'New School',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'raised' => 'Raised 60% of $10000',
        'price' => '$ 6000',
        'price2' => '$ 10000',
    ],
    [
        'img' => 'assets/images/cause/5.jpg', 
        'title' => 'Food for All',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'raised' => 'Raised 60% of $10000',
        'price' => '$ 6000',
        'price2' => '$ 10000',
    ],
    [
        'img' => 'assets/images/cause/6.jpg', 
        'title' => 'Water For All',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'raised' => 'Raised 60% of $10000',
        'price' => '$ 6000',
        'price2' => '$ 10000',
    ]
];
?>

<?php foreach ($causes as $item): ?>
    <div class="col-lg-4 col-md-6">
        <div class="position-relative rounded bg-white shadow overflow-hidden">
            <div class="position-relative overflow-hidden">
                <img src="<?= $this->Url->build('/' . h($item['img'])) ?>" class="img-fluid" alt="">
                <div class="bg-overlay bg-linear-gradient-2"></div>
                <div class="position-absolute bottom-0 p-4">
                    <a href="" class="text-white title-dark fw-semibold link-title">Donate Now <i class="mdi mdi-arrow-right"></i></a>
                </div>
            </div>

            <div class="content p-4">
                <h5><a href="" class="text-dark link-title"><?= h($item['title']) ?></a></h5>
                <p class="text-muted mb-0"><?= h($item['desc']) ?></p>
                <div class="progress-box mt-5">
                    <div class="progress rounded" style="height: 8px;">
                        <div class="progress-bar position-relative bg-primary rounded" style="width:60%;">
                            <div class="progress-value d-block text-dark h6 mb-0"><?= h($item['raised']) ?></div>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between mt-3">
                    <h6 class="text-muted mb-0"><?= h($item['price']) ?></h6>
                    <h6 class="text-muted mb-0"><?= h($item['price2']) ?></h6>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>