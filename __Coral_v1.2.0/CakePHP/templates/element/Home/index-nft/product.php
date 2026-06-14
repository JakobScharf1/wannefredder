<?php
$products = [
    [
        'id' => 4, 
        'img' => 'assets/images/nft/4.jpg', 
        'img1' => 'assets/images/team/1.jpg', 
        'title' => 'Genuine Undead 3902', 
        'title1' => '20.5 ETH', 
        'name' => "1 out of 12 items", 
    ],
    [
        'id' => 5, 
        'img' => 'assets/images/nft/5.jpg', 
        'img1' => 'assets/images/team/2.jpg', 
        'title' => 'Windchime 768', 
        'title1' => '20.5 ETH', 
        'name' => "1 out of 12 items", 
    ],
    [
        'id' => 6, 
        'img' => 'assets/images/nft/6.jpg', 
        'img1' => 'assets/images/team/3.jpg', 
        'title' => 'Probably A Label 3277', 
        'title1' => '20.5 ETH', 
        'name' => "1 out of 12 items", 
    ],
    [
        'id' => 7, 
        'img' => 'assets/images/nft/7.jpg', 
        'img1' => 'assets/images/team/4.jpg', 
        'title' => 'Probably A Label 1111', 
        'title1' => '20.5 ETH', 
        'name' => "1 out of 12 items", 
    ],
    [
        'id' => 8, 
        'img' => 'assets/images/nft/8.jpg', 
        'img1' => 'assets/images/team/5.jpg', 
        'title' => 'Umber Arrow', 
        'title1' => '20.5 ETH', 
        'name' => "1 out of 12 items", 
    ],
    [
        'id' => 9, 
        'img' => 'assets/images/nft/9.jpg', 
        'img1' => 'assets/images/team/6.jpg', 
        'title' => 'Probably A Label 650', 
        'title1' => '20.5 ETH', 
        'name' => "1 out of 12 items", 
    ],
    [
        'id' => 10, 
        'img' => 'assets/images/nft/10.jpg', 
        'img1' => 'assets/images/team/7.jpg', 
        'title' => 'Looki-0147', 
        'title1' => '20.5 ETH', 
        'name' => "1 out of 12 items", 
    ],
    [
        'id' => 11, 
        'img' => 'assets/images/nft/11.jpg', 
        'img1' => 'assets/images/team/8.jpg', 
        'title' => 'Poob 285', 
        'title1' => '20.5 ETH', 
        'name' => "1 out of 12 items", 
    ],
];
?>

<?php foreach ($products as $item): ?>
    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
        <div class="nft-item p-4 rounded shadow bg-white">
            <div class="position-relative">
                <div class="nft-image position-relative overflow-hidden rounded shadow">
                    <img src="<?= $this->Url->build('/' . h($item['img'])) ?>" class="img-fluid" alt="">
                    <div class="bg-overlay bg-black"></div>
                    <div class="bid-button position-absolute bottom-0 start-0 end-0 text-center pb-3">
                        <a href="<?= $this->Url->build('/nft-detail/' . strtolower(str_replace(' ', '-', $item['title']))) ?>" class="btn btn-sm btn-icon btn-pills btn-primary me-1" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Buy Now"><i data-feather="shopping-cart" class="fea icon-sm align-middle"></i></a>
                        <a href="<?= $this->Url->build('/nft-detail/' . strtolower(str_replace(' ', '-', $item['title']))) ?>" class="btn btn-sm btn-icon btn-pills btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Bid Now"><i data-feather="zap" class="fea icon-sm align-middle"></i></a>
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
<?php endforeach; ?>