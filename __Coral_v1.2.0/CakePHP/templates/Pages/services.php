<?php
$this->assign('title', 'Services Page');
?>

<!-- Include Navbar -->
<?= $this->element('navbar') ?>

<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('<?= $this->Url->build('/assets/images/hero/pages.jpg'); ?>') center;">
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Services / Features</h5>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="position-middle-bottom">
            <nav aria-label="breadcrumb" class="d-block">
                <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                    <li class="breadcrumb-item"><a href="<?= $this->Url->build('/'); ?>">Coral</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
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
            
            <!-- templates/element/Home/index-saas/services2.php -->
            <?= $this->element('Home/index-saas/services2'); ?>

        </div>
    </div>
</section>
<!-- End -->

<!-- Start CTA -->
<section class="cta-video-section position-relative">
    <video class="" autoplay loop>
        <source src="<?= $this->Url->build('/assets/images/video.mp4'); ?>" type="video/mp4">
    </video>
    <div class="container">
        <div class="row">
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

<!-- Start Team -->
<section class="section">
    <div class="container">
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
</section><!--end section-->
<!-- End Team -->

<!-- templates/element/Home/index/offcanvas.php -->
<?= $this->element('Home/index/offcanvas'); ?>

<!-- Include Footer -->
<?= $this->element('footer') ?>