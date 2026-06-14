<?php
$explores = [
    [
        'id' => 4, 
        'img' => '/images/nft/4.jpg', 
        'img1' => '/images/team/1.jpg', 
        'title' => 'Genuine Undead #3902', 
        'title1' => '20.5 ETH', 
        'name' => "1 out of 12 items", 
    ],
    [
        'id' => 5, 
        'img' => '/images/nft/5.jpg', 
        'img1' => '/images/team/2.jpg', 
        'title' => 'Windchime #768', 
        'title1' => '20.5 ETH', 
        'name' => "1 out of 12 items", 
    ],
    [
        'id' => 6, 
        'img' => '/images/nft/6.jpg', 
        'img1' => '/images/team/3.jpg', 
        'title' => 'Probably A Label #3277', 
        'title1' => '20.5 ETH', 
        'name' => "1 out of 12 items", 
    ],
    [
        'id' => 7, 
        'img' => '/images/nft/7.jpg', 
        'img1' => '/images/team/4.jpg', 
        'title' => 'Probably A Label #1711', 
        'title1' => '20.5 ETH', 
        'name' => "1 out of 12 items", 
    ],
    [
        'id' => 8, 
        'img' => '/images/nft/8.jpg', 
        'img1' => '/images/team/5.jpg', 
        'title' => 'Umber Arrow', 
        'title1' => '20.5 ETH', 
        'name' => "1 out of 12 items", 
    ],
    [
        'id' => 9, 
        'img' => '/images/nft/9.jpg', 
        'img1' => '/images/team/6.jpg', 
        'title' => 'Probably A Label #650', 
        'title1' => '20.5 ETH', 
        'name' => "1 out of 12 items", 
    ],
    [
        'id' => 10, 
        'img' => '/images/nft/10.jpg', 
        'img1' => '/images/team/7.jpg', 
        'title' => 'Looki#0147', 
        'title1' => '20.5 ETH', 
        'name' => "1 out of 12 items", 
    ],
    [
        'id' => 11, 
        'img' => '/images/nft/11.jpg', 
        'img1' => '/images/team/8.jpg', 
        'title' => 'Poob #285', 
        'title1' => '20.5 ETH', 
        'name' => "1 out of 12 items", 
    ],
    [
        'id' => 1, 
        'img' => '/images/nft/1.jpg', 
        'img1' => '/images/team/1.jpg', 
        'title' => 'Deep Sea Phantasy', 
        'title1' => '20.5 ETH', 
        'name' => "1 out of 12 items", 
    ],
    [
        'id' => 2, 
        'img' => '/images/nft/2.jpg', 
        'img1' => '/images/team/2.jpg', 
        'title' => 'Rainbow Style', 
        'title1' => '20.5 ETH', 
        'name' => "1 out of 12 items", 
    ],
    [
        'id' => 3, 
        'img' => '/images/nft/3.jpg', 
        'img1' => '/images/team/3.jpg', 
        'title' => 'USA Wordmation', 
        'title1' => '20.5 ETH', 
        'name' => "1 out of 12 items", 
    ],
    [
        'id' => 12, 
        'img' => '/images/nft/12.jpg', 
        'img1' => '/images/team/1.jpg', 
        'title' => 'Azuki #7421', 
        'title1' => '20.5 ETH', 
        'name' => "1 out of 12 items", 
    ]
];
?>

<?php foreach ($explores as $item): ?>
    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
        <div class="nft-item p-4 rounded shadow bg-white">
            <div class="position-relative">
                <div class="nft-image position-relative overflow-hidden rounded shadow">
                    <img src="<?php echo $static_url, $item['img']; ?>" class="img-fluid" alt="">
                    <div class="bg-overlay bg-black"></div>
                    <div class="bid-button position-absolute bottom-0 start-0 end-0 text-center pb-3">
                        <a href="nft-detail.php?title=<?php echo urlencode(str_replace(' ', '-', strtolower($item['title']))); ?>" class="btn btn-sm btn-icon btn-pills btn-primary me-1" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Buy Now"><i data-feather="shopping-cart" class="fea icon-sm align-middle"></i></a>
                        <a href="nft-detail.php?title=<?php echo urlencode(str_replace(' ', '-', strtolower($item['title']))); ?>" class="btn btn-sm btn-icon btn-pills btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Bid Now"><i data-feather="zap" class="fea icon-sm align-middle"></i></a>
                    </div>
                </div>

                <div class="position-absolute top-0 start-0 m-3">
                    <a href="creator-profile.php"><img src="<?php echo $static_url, $item['img1']; ?>" class="avatar avatar-md-sm rounded-pill shadow img-thumbnail" alt=""></a>
                </div>
            </div>

            <div class="content pt-4 position-relative">
                <a href="nft-detail.php?title=<?php echo urlencode(str_replace(' ', '-', strtolower($item['title']))); ?>" class="text-dark link-title h6"><?php echo $item['title']; ?></a>

                <div class="d-flex justify-content-between mt-2">
                    <span class="rate text-primary"><?php echo $item['title1']; ?></span>
                    <span class="text-dark"><?php echo $item['name']; ?></span>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>