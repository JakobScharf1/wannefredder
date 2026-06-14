<?php
$collections = [
    [
        'img' => '/images/nft/4.jpg', 
        'img1' => '/images/team/4.jpg', 
        'title' => 'Digital Arts', 
        'name' => "27 Items", 
    ],
    [
        'img' => '/images/nft/1.jpg', 
        'img1' => '/images/team/1.jpg', 
        'title' => 'Sports', 
        'name' => "27 Items", 
    ],
    [
        'img' => '/images/nft/2.jpg', 
        'img1' => '/images/team/2.jpg', 
        'title' => 'Photography', 
        'name' => "27 Items", 
    ],
    [
        'img' => '/images/nft/3.jpg', 
        'img1' => '/images/team/3.jpg', 
        'title' => 'Illustrations', 
        'name' => "27 Items", 
    ]
];
?>

<?php foreach ($collections as $item): ?>
    <div class="col-lg-3 col-md-6 col-12">
        <div class="nft-item nft-collection rounded shadow position-relative overflow-hidden">
            <div class="nft-image">
                <img src="<?php echo $static_url, $item['img']; ?>" class="img-fluid" alt="">
            </div>

            <div class="position-absolute bottom-0 start-0 end-0 bg-white p-4">
                <div class="position-absolute top-0 start-50 translate-middle">
                    <img src="<?php echo $static_url, $item['img1']; ?>" class="avatar avatar-small rounded-pill img-thumbnail shadow-md" alt="">
                </div>

                <div class="mt-4 text-center">
                    <a href="nft-explore.php" class="text-dark link-title h5"><?php echo $item['title']; ?></a>
                    
                    <p class="text-muted mb-0 small"><?php echo $item['name']; ?></p>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>