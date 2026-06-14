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
<section class="bg-hero d-table w-100 bg-dark overflow-hidden" style="background: url('<?php echo $static_url; ?>/images/hero/bg.png') center center;">
    <div class="bg-overlay bg-gradient-overlay-2"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="title-heading margin-top-100">
                    <span class="badge bg-primary bg-gradient">Boost your creativity</span>
                    <h1 class="display-4 text-white my-3">The easy way to manage <br> Product analytics</h1>
                    <p class="para-desc mx-auto text-muted">Explore our diverse industry solutions, meticulously crafted to meet unique demand. helps you be more.</p>
                    <div class="subscribe-form mt-4 pt-2">
                        <form class="mx-auto" action="index.php">
                            <input type="email" id="SubscribeEmail" class="border bg-white rounded-pill" style="opacity: 0.85;" required placeholder="Type your email">
                            <button type="submit" class="btn btn-pills btn-primary">Get Started</button>
                        </form><!--end form-->
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<section class="position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="tilt-3d margin-absolute">
                    <div class="tilt-3d-trigger">
                        <div class="trigger"></div>
                        <div class="trigger"></div>
                        <div class="trigger"></div>
                        <div class="trigger"></div>
                        <div class="trigger"></div>
                        <div class="trigger"></div>
                        <div class="trigger"></div>
                        <div class="trigger"></div>
                        <div class="trigger"></div>
                            
                        <div class="tilt-3d-image position-relative">
                            <img src="<?php echo $static_url; ?>/images/hero/hero.png" class="img-fluid rounded-4 border-primary" alt="">
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Hero End -->

<section class="section overflow-hidden">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">A powerful easy-to-use platform</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row g-4">
            
            <!-- services2 code  -->
            <?php
                include "$base_dir/Components/Home/index-saas/services2.php";
            ?>

        </div>
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        
        <!-- boost code  -->
        <?php
            include "$base_dir/Components/Home/index-saas/boost.php";
        ?>

    </div><!--end container-->

    <div class="container mt-100 mt-60">
        
        <!-- optimize code  -->
        <?php
            include "$base_dir/Components/Home/index-saas/optimize.php";
        ?>

    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Customer's Review</h4>
                    <p class="text-muted para-desc mx-auto mb-0">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-12 mt-4">
                <div class="tiny-three-item">
                    
                    <!-- review2 code  -->
                    <?php
                        include "$base_dir/Components/Home/index-saas/review2.php";
                    ?>

                </div>
            </div><!--end col-->
        </div><!--end row-->
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
    
<!-- offcanvas code  -->
<?php
    include "$base_dir/Components/Home/index/offcanvas.php";
?>

<?php
$hero_content = ob_get_clean();

// Include the base template
include "$base_dir/style/base.php";
?>