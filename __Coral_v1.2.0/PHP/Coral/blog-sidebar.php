<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Coral/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
$navlink_content = ob_get_clean();
$page= 'nav';
$fpage= 'foot';

// Optionally define the Hero block content
ob_start();
?>

<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('<?php echo $static_url; ?>/images/hero/pages.jpg') center;">
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Latest Articles</h5>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="position-middle-bottom">
            <nav aria-label="breadcrumb" class="d-block">
                <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                    <li class="breadcrumb-item"><a href="index.php">Coral</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                </ul>
            </nav>
        </div>
    </div><!--end container-->
</section><!--end section-->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- Hero End -->
    
<!-- Start -->
<section class="section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8 col-md-7">
                <div class="row g-4">
                    
                    <!-- blog3 code  -->
                    <?php
                        include "$base_dir/Components/Blogs/blog-sidebar/blog3.php";
                    ?>

                </div><!--end row-->

                <div class="row mt-4">
                    <div class="col-12">
                    
                        <!-- pagination code  -->
                        <?php
                            include "$base_dir/Components/Pages/NFT/nft-explore/pagination.php";
                        ?>
                    
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end col-->

            <!-- START SIDEBAR -->
            <div class="col-lg-4 col-md-5 col-12">
                <div class="card bg-white p-4 rounded shadow sticky-bar">
                    <!-- SEARCH -->
                    <div>
                        <h6 class="pt-2 pb-2 bg-light rounded text-center">Search</h6>

                        <!-- search code  -->
                        <?php
                            include "$base_dir/Components/Blogs/blog-sidebar/search.php";
                        ?>
                        
                    </div>
                    <!-- SEARCH -->

                    <!-- RECENT POST -->
                    <div class="mt-4">
                        <h6 class="pt-2 pb-2 bg-light rounded text-center">Recent Post</h6>
                        <div class="mt-4">
                            
                            <!-- post code  -->
                            <?php
                                include "$base_dir/Components/Blogs/blog-sidebar/post.php";
                            ?>

                        </div>
                    </div>
                    <!-- RECENT POST -->

                    <!-- TAG CLOUDS -->
                    <div class="mt-4 text-center">
                        <h6 class="pt-2 pb-2 bg-light rounded">Tags Cloud</h6>
                        <ul class="tagcloud list-unstyled mt-4">
                            
                            <!-- tag code  -->
                            <?php
                                include "$base_dir/Components/Blogs/blog-sidebar/tag.php";
                            ?>

                        </ul>
                    </div>
                    <!-- TAG CLOUDS -->
                </div>
            </div><!--end col-->
            <!-- END SIDEBAR -->
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