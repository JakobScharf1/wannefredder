<?php
$this->assign('title', 'Index-It-Solution Page');
?>

<!-- Include Navbar -->
<?= $this->element('navbar4') ?>

<!-- Hero Start -->
<section class="bg-half-120 pb-0 d-table w-100 bg-it" style="background: url('<?= $this->Url->build('/assets/images/hero/bg-it.png'); ?>') center center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="title-heading mb-5">
                    <h6 class="text-primary">Welcome to Coral</h6>
                    <h1 class="heading fw-bold mb-3">IT Solutions & <br><span class="text-primary typewrite" data-period="2000" data-type='[ "Software", "Application", "Website"]'></span> Development</h1>
                    <p class="para-desc text-muted d-lg-block d-d-none d-block">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                    <div class="mt-4">
                        <a href="<?= $this->Url->build('/services'); ?>" class="btn btn-primary m-1">Get Started <i class="mdi mdi-arrow-right"></i></a>
                        <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="btn btn-icon btn-pills btn-primary m-1 lightbox"><i data-feather="video" class="icons"></i></a><span class="fw-bold text-uppercase small align-middle ms-2">Watch Now</span>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-6 col-md-6">
                <img src="<?= $this->Url->build('/assets/images/hero.png'); ?>" class="img-fluid" alt="">
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
                        
                        <!-- templates/element/Home/index-it-solution/services5.php -->
                        <?= $this->element('Home/index-it-solution/services5'); ?>

                    </div><!--end row-->
                </div><!--end container-->
            </div>
        </div>
    </div>

    <div class="container mt-100 mt-60">
        
        <!-- templates/element/Home/index-it-solution/about2.php -->
        <?= $this->element('Home/index-it-solution/about2'); ?>

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start CTA -->
<section class="cta-video-section position-relative overflow-hidden" style="background: url('<?= $this->Url->build('/assets/images/hero/pages.jpg'); ?>') fixed;">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-4 col-md-5 col-10">
                <div class="position-relative z-1 p-4 rounded shadow bg-white">
                    <div class="tiny-single-item">
                            
                        <!-- templates/element/Home/index-consulting/review3.php -->
                        <?= $this->element('Home/index-consulting/review3'); ?>

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
            
            <!-- templates/element/Home/index-it-solution/pricing.php -->
            <?= $this->element('Home/index-it-solution/pricing'); ?>

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
                
            <!-- templates/element/Home/index/minds.php -->
            <?= $this->element('Home/index/minds'); ?>

        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60 overflow-hidden">
            
        <!-- templates/element/Home/index-consulting/faqs.php -->
        <?= $this->element('Home/index-consulting/faqs'); ?>

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
                
            <!-- templates/element/Home/index/blog.php -->
            <?= $this->element('Home/index/blog'); ?>

        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->
    
<!-- templates/element/Home/index/offcanvas.php -->
<?= $this->element('Home/index/offcanvas'); ?>

<!-- Include Footer -->
<?= $this->element('footer') ?>