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
<section class="bg-home d-flex align-items-center" style="background: url('<?php echo $static_url; ?>/images/hero/bg.jpg') center center;">
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-8 order-md-1 order-2">
                <div class="title-heading">
                    <img src="<?php echo $static_url; ?>/images/logo-icon-80-white.png" class="d-md-block d-none" height="56" alt="">
                    <h1 class="heading text-white my-3">Making Your Business <br> Profitable For Today</h1>
                    <p class="para-desc text-white-50">Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.</p>
                    <div class="mt-4">
                        <a href="services.php" class="btn btn-primary">Explore Features <i class="mdi mdi-arrow-right"></i></a>
                    </div>

                    <div class="mt-4 d-flex align-items-center">
                        <ul class="list-unstyled mb-0">
                            <li class="list-inline-item"><img src="<?php echo $static_url; ?>/images/team/1.jpg" class="avatar avatar-md-sm rounded-pill shadow img-thumbnail" alt=""></li>
                            <li class="list-inline-item ms-n24"><img src="<?php echo $static_url; ?>/images/team/2.jpg" class="avatar avatar-md-sm rounded-pill shadow img-thumbnail" alt=""></li>
                            <li class="list-inline-item ms-n24"><img src="<?php echo $static_url; ?>/images/team/3.jpg" class="avatar avatar-md-sm rounded-pill shadow img-thumbnail" alt=""></li>
                            <li class="list-inline-item ms-n24"><img src="<?php echo $static_url; ?>/images/team/4.jpg" class="avatar avatar-md-sm rounded-pill shadow img-thumbnail" alt=""></li>
                        </ul>

                        <a href="contactus.php" class="text-white ms-3 fw-medium">Join Coral Community <i class="mdi mdi-arrow-right"></i></a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-5 col-md-4 order-md-2 order-1">
                <div class="d-md-flex justify-content-center">
                    <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="avatar avatar-md-md rounded-pill shadow bg-white d-flex justify-content-center align-items-center lightbox">
                        <i class="mdi mdi-play mdi-24px text-primary"></i>
                    </a>
                </div>
            </div>
        </div><!--end row-->
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
<section class="section overflow-hidden">
    <div class="container">
        <div class="row">
            
            <!-- services code  -->
            <?php
                include "$base_dir/Components/Home/index/services.php";
            ?>

        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        
        <!-- about code  -->
        <?php
            include "$base_dir/Components/Home/index/about.php";
        ?>

    </div><!--end container-->

    <div class="container-fluid position-relative mt-100 mt-60 pt-5">
        <div class="bg-overlay opacity-25" style="background: url('<?php echo $static_url; ?>/images/map.png') center center;"></div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-3">Trusted by more than 10K users</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                
                <!-- counter code  -->
                <?php
                    include "$base_dir/Components/Home/index/counter.php";
                ?>

            </div><!--end row-->
        </div><!--end container-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start CTA -->
<section class="cta-video-section position-relative" style="background: url('<?php echo $static_url; ?>/images/hero/pages.jpg') center fixed;">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-md-flex justify-content-center">
                    <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="avatar avatar-md-md rounded-pill shadow bg-white d-flex justify-content-center align-items-center lightbox">
                        <i class="mdi mdi-play mdi-24px text-primary"></i>
                    </a>
                </div>

                <div class="section-title text-center mt-4">
                    <h4 class="title text-white mb-0">Scalable & Growing Business for Startups.</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End CTA -->

<!-- Start -->
<section class="section">
    <div class="container">
        <div class="row align-lg-items-center mb-4 pb-2">
            <div class="col-lg-6 col-md-5">
                <div class="section-title text-md-start text-center">
                    <h4 class="title mb-3 mb-md-0">Showcase your <br> Stunning Projects</h4>
                </div>
            </div><!--end col-->
            
            <div class="col-lg-6 col-md-7">
                <div class="text-md-start text-center">
                    <p class="text-muted para-desc mx-auto mb-0">Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row g-4">
            
            <!-- projects code  -->
            <?php
                include "$base_dir/Components/Home/index/projects.php";
            ?>

        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Our Minds</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row align-items-center g-4">
            
            <!-- minds code  -->
            <?php
                include "$base_dir/Components/Home/index/minds.php";
            ?>

        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 overflow-hidden">
                <div class="position-relative">
                    <img src="<?php echo $static_url; ?>/images/report-analysis-5-18.svg" class="img-fluid" alt="">

                    <div class="modern-app-round round-small"></div>
                </div>
            </div><!--end col-->

            <div class="col-lg-6 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                <div class="section-title ms-lg-3">
                    <h4 class="title mb-3">Customer's Review</h4>
                    <p class="text-muted para-desc mb-0">Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.</p>
                
                    <div class="row">
                        <div class="col-12 mt-4">
                            <div class="tiny-single-item">
                                
                                <!-- review code  -->
                                <?php
                                    include "$base_dir/Components/Home/index/review.php";
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Blog Or News</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row g-4">
            
            <!-- blog code  -->
            <?php
                include "$base_dir/Components/Home/index/blog.php";
            ?>

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