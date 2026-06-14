<?= $this->extend('partials/layout') ?>

<?= $this->section('content') ?>

<?= view('partials/navbar') ?>

<!-- Hero Start -->
<section class="bg-hero d-table w-100 bg-dark overflow-hidden" style="background: url('<?= base_url('assets/images/hero/bg.png') ?>') center center;">
    <div class="bg-overlay bg-gradient-overlay-2"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="title-heading margin-top-100">
                    <span class="badge bg-primary bg-gradient">Boost your creativity</span>
                    <h1 class="display-4 text-white my-3">The easy way to manage <br> Product analytics</h1>
                    <p class="para-desc mx-auto text-muted">Explore our diverse industry solutions, meticulously crafted to meet unique demand. helps you be more.</p>
                    <div class="subscribe-form mt-4 pt-2">
                        <form class="mx-auto" action="<?= base_url('/') ?>">
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
                            <img src="<?= base_url('assets/images/hero/hero.png') ?>" class="img-fluid rounded-4 border-primary" alt="">
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
            
            <!-- app/Views/partials/Home/index-saas/services2.php -->
            <?= view('partials/Home/index-saas/services2'); ?>

        </div>
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        
        <!-- app/Views/partials/Home/index-saas/boost.php -->
        <?= view('partials/Home/index-saas/boost'); ?>

    </div><!--end container-->

    <div class="container mt-100 mt-60">
        
        <!-- app/Views/partials/Home/index-saas/optimize.php -->
        <?= view('partials/Home/index-saas/optimize'); ?>

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
                    
                    <!-- app/Views/partials/Home/index-saas/review2.php -->
                    <?= view('partials/Home/index-saas/review2'); ?>

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
                
            <!-- app/Views/partials/Home/index/blog.php -->
            <?= view('partials/Home/index/blog'); ?>

        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
    
<!-- app/Views/partials/Home/index/offcanvas.php -->
<?= view('partials/Home/index/offcanvas'); ?>

<!-- Footer -->
<?= view('partials/footer') ?>

<?= $this->endSection() ?>