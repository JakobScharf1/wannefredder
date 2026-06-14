<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Coral/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
$navlink_content = ob_get_clean();
$page= 'nav5';
$fpage= 'foot';

// Optionally define the Hero block content
ob_start();

$title = isset($_GET['title']) ? $_GET['title'] : '';

$sliders = [
    [
        'id' => 1, 
        'img' => '/images/nft/1.jpg', 
        'img1' => '/images/team/1.jpg', 
        'btn' => 'Buy Now', 
        'btn1' => 'Bid Now', 
        'title' => 'Deep Sea Phantasy', 
        'title1' => '20.5 ETH', 
        'name' => "1 out of 12 items", 
    ],
    [
        'id' => 2, 
        'img' => '/images/nft/2.jpg', 
        'img1' => '/images/team/2.jpg', 
        'btn' => 'Buy Now', 
        'btn1' => 'Bid Now', 
        'title' => 'Rainbow Style', 
        'title1' => '20.5 ETH', 
        'name' => "1 out of 12 items", 
    ],
    [
        'id' => 3, 
        'img' => '/images/nft/3.jpg', 
        'img1' => '/images/team/3.jpg', 
        'btn' => 'Buy Now', 
        'btn1' => 'Bid Now', 
        'title' => 'USA Wordmation', 
        'title1' => '20.5 ETH', 
        'name' => "1 out of 12 items", 
    ],
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

$article = null;
if ($title === '') {
    $article = $sliders;

} else {
    // Search for the article by slugified title
    foreach ($sliders as $item) {
        $slugifiedTitle = str_replace(' ', '-', strtolower($item['title']));
        if ($slugifiedTitle === $title) {
            $article = $item;
            break;
        }
    }
}

if ($article === null) {
    echo "Article not found.";
    exit;
}
?>

<!-- Start -->
<section class="section mt-5 mt-lg-0">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-5 col-md-6">
                <div class="sticky-bar">
                    <img src="<?php echo !empty($article['img']) ? $static_url . $article['img'] : $static_url . '/images/nft/1.jpg'; ?>" class="img-fluid rounded shadow" alt="">
                </div>
            </div>

            <div class="col-lg-7 col-md-6">
                <div class="title-heading">
                    <h4 class="h3 mb-0">
                        <?php 
                            if (!empty($article['title'])) {
                                    echo $article['title']; 
                            } else {
                                echo 'Deep Sea Phantasy'; 
                            }
                        ?>
                    </h4>
                </div>

                <div class="row">
                    <div class="col-12 mt-4">
                        <h6>Current Bid</h6>
                        <h4 class="mb-0">4.85 ETH</h4>
                        <small class="mb-0 text-muted">$450.48USD</small>
                    </div>

                    <div class="col-12 mt-4">
                        <a href="nft-detail.php" class="btn btn-sm btn-primary me-1"><i data-feather="shopping-cart" class="fea icon-sm align-middle me-1"></i> Buy Now</a>
                        <a href="nft-detail.php" class="btn btn-sm btn-primary"><i data-feather="zap" class="fea icon-sm align-middle me-1"></i> Bid Now</a>
                    </div>
                </div>

                <p class="text-muted mt-4">Hey guys! New exploration about NFT Marketplace Web Design, this time I'm inspired by one of my favorite NFT website called Coral (with crypto payment)! What do you think?</p>
                <p class="text-muted">What does it mean? Biomechanics is the study of the structure, function and motion of the mechanical aspects of biological systems, at any level from whole organisms to organs, cells and cell organelles, using the methods of mechanics. Biomechanics is a branch of biophysics.</p>
                <h6>Owner</h6>

                <div class="creators creator-primary d-flex align-items-center">
                    <div class="position-relative">
                        <img src="<?php echo $static_url; ?>/images/team/1.jpg" class="avatar avatar-md-sm shadow-md rounded-pill" alt="">
                    </div>

                    <div class="ms-3">
                        <h6 class="mb-0"><a href="creators.php" class="text-dark name">@StreetBoy</a></h6>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- offcanvas code  -->
<?php
    include "$base_dir/Components/Home/index/offcanvas.php";
?>

<?php
$hero_content = ob_get_clean();

// Include the base template
include "$base_dir/style/base.php";
?>