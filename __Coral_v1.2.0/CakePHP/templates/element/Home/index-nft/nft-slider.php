<?php
$sliders = [
    [
        'id' => 1, 
        'img' => 'assets/images/nft/1.jpg', 
        'img1' => 'assets/images/team/1.jpg', 
        'btn' => 'Buy Now', 
        'btn1' => 'Bid Now', 
        'title' => 'Deep Sea Phantasy', 
        'title1' => '20.5 ETH', 
        'name' => "1 out of 12 items", 
    ],
    [
        'id' => 2, 
        'img' => 'assets/images/nft/2.jpg', 
        'img1' => 'assets/images/team/2.jpg', 
        'btn' => 'Buy Now', 
        'btn1' => 'Bid Now', 
        'title' => 'Rainbow Style', 
        'title1' => '20.5 ETH', 
        'name' => "1 out of 12 items", 
    ],
    [
        'id' => 3, 
        'img' => 'assets/images/nft/3.jpg', 
        'img1' => 'assets/images/team/3.jpg', 
        'btn' => 'Buy Now', 
        'btn1' => 'Bid Now', 
        'title' => 'USA Wordmation', 
        'title1' => '20.5 ETH', 
        'name' => "1 out of 12 items", 
    ]
];
?>

<?php foreach ($sliders as $item): ?>
    <div class="tiny-slide">
        <div class="m-2">
            <div class="nft-item p-4 rounded shadow bg-white">
                <div class="position-relative">
                    <div class="nft-image position-relative overflow-hidden rounded shadow">
                        <img src="<?= $this->Url->build('/' . h($item['img'])) ?>" class="img-fluid" alt="">
                        <div class="bg-overlay bg-black"></div>
                        <div class="bid-button position-absolute top-50 translate-y-middle start-0 end-0 text-center">
                            <a href="<?= $this->Url->build('/nft-detail/' . strtolower(str_replace(' ', '-', $item['title']))) ?>" class="btn btn-sm btn-primary me-1"><i data-feather="shopping-cart" class="fea icon-sm align-middle me-1"></i> <?= h($item['btn']) ?></a>
                            <a href="<?= $this->Url->build('/nft-detail/' . strtolower(str_replace(' ', '-', $item['title']))) ?>" class="btn btn-sm btn-primary"><i data-feather="zap" class="fea icon-sm align-middle me-1"></i> <?= h($item['btn1']) ?></a>
                        </div>
                    </div>

                    <div class="position-absolute top-0 start-0 m-3">
                        <a href="<?= $this->Url->build('/creator-profile'); ?>"><img src="<?= $this->Url->build('/' . h($item['img1'])) ?>" class="avatar avatar-md-sm rounded-pill shadow img-thumbnail" alt=""></a>
                    </div>
                </div>

                <div class="content pt-4 position-relative">
                    <a href="<?= $this->Url->build('/nft-detail/' . strtolower(str_replace(' ', '-', $item['title']))) ?>" class="text-dark link-title h6"><?= h($item['title']) ?></a>

                    <div class="d-flex justify-content-between mt-2">
                        <span class="rate text-primary"><?= h($item['title1']) ?></span>
                        <span class="text-dark"><?= h($item['name']) ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>