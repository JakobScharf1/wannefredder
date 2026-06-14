<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Coral/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
$navlink_content = ob_get_clean();
$page= 'nav4';
$fpage= 'foot';

// Optionally define the Hero block content
ob_start();
?>

<!-- Hero Start -->
<section class="bg-half-120 pb-0 d-table w-100 bg-it" style="background: url('<?php echo $static_url; ?>/images/hero/bg-it.png') center center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="title-heading mb-5">
                    <h6 class="text-primary">Welcome to Coral</h6>
                    <h1 class="heading fw-bold mb-3">IT Solutions & <br><span class="text-primary typewrite" data-period="2000" data-type='[ "Software", "Application", "Website"]'></span> Development</h1>
                    <p class="para-desc text-muted d-lg-block d-d-none d-block">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                    <div class="mt-4">
                        <a href="services.php" class="btn btn-primary m-1">Get Started <i class="mdi mdi-arrow-right"></i></a>
                        <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="btn btn-icon btn-pills btn-primary m-1 lightbox"><i data-feather="video" class="icons"></i></a><span class="fw-bold text-uppercase small align-middle ms-2">Watch Now</span>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-6 col-md-6">
                <img src="<?php echo $static_url; ?>/images/hero.png" class="img-fluid" alt="">
            </div>
        </div><!--end row-->
    </div> <!--end container-->
</section><!--end section-->
<!-- Hero End -->
    
<!-- Start -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="features-absolute">
                    <div class="row align-items-center g-4">
                        
                        <!-- services5 code  -->
                        <?php
                            include "$base_dir/Components/Home/index-it-solution/services5.php";
                        ?>

                    </div><!--end row-->
                </div><!--end container-->
            </div>
        </div>
    </div>

    <div class="container mt-100 mt-60">
        
        <!-- about2 code  -->
        <?php
            include "$base_dir/Components/Home/index-it-solution/about2.php";
        ?>

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start CTA -->
<section class="cta-video-section position-relative overflow-hidden" style="background: url('<?php echo $static_url; ?>/images/hero/pages.jpg') fixed;">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-4 col-md-5 col-10">
                <div class="position-relative z-1 p-4 rounded shadow bg-white">
                    <div class="tiny-single-item">
                            
                        <!-- review3 code  -->
                        <?php
                            include "$base_dir/Components/Home/index-consulting/review3.php";
                        ?>

                    </div>

                    <i class="mdi mdi-format-quote-open text-primary position-absolute top-50 start-50 translate-middle z-n1 testi-icon"></i>
                </div>
            </div>
        </div>
    </div>
</section><!--end section-->
<!-- End CTA -->

<!-- Start -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Pricing Plans</h4>
                    <p class="text-muted para-desc mx-auto mb-0">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row g-4">
            
            <!-- pricing code  -->
            <?php
                include "$base_dir/Components/Home/index-it-solution/pricing.php";
            ?>

        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Our Minds</h4>
                    <p class="text-muted para-desc mx-auto mb-0">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
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

    <div class="container mt-100 mt-60 overflow-hidden">
            
        <!-- faqs code  -->
        <?php
            include "$base_dir/Components/Home/index-consulting/faqs.php";
        ?>

    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Blog Or News</h4>
                    <p class="text-muted para-desc mx-auto mb-0">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
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