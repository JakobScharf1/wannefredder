<?= $this->extend('partials/layout') ?>

<?= $this->section('content') ?>

<?= view('partials/navbar6') ?>

<div id="boxed-layput" style="background: url('<?= base_url('assets/images/hero/bg-squre.png') ?>');">
    <div class="boxed">
        
        <!-- Hero Start -->
        <section class="bg-half-170 overflow-hidden">
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-lg-7 col-md-6 order-2 order-md-1">
                        <div class="title-heading">
                            <h1 class="display-4 fw-bold mb-3">Discover top creative <br> <span class="text-primary">talents</span> & <span class="text-primary">portfolios</span></h1>
                            <p class="para-desc text-muted mb-0">An independent design agency based in Newyork.</p>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6 order-1 order-md-2">
                        <div class="position-relative">
                            <img src="<?= base_url('assets/images/logo-icon.png') ?>" class="img-fluid opacity-25" alt="">
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="avatar avatar-md-md rounded-pill shadow bg-primary d-flex justify-content-center align-items-center lightbox">
                                    <i class="mdi mdi-play mdi-24px text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div>
            </div>
        </section>
        <!-- End hero -->

        <!-- Start -->
        <section class="section pt-1">
            <div class="container">
                <div class="row g-0" id="grid">
                    
                    <!-- app/Views/partials/Home/index-minimal-portfolio/portfolio2.php -->
                    <?= view('partials/Home/index-minimal-portfolio/portfolio2'); ?>

                </div><!--end row-->

                <div class="row">
                    <div class="col">
                        <div class="mt-4 text-center">
                            <a href="" class="btn btn-primary">See more works <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--end section-->
        <!-- Hero End -->

    </div>
</div>

<!-- app/Views/partials/Home/index/offcanvas.php -->
<?= view('partials/Home/index/offcanvas'); ?>

<!-- Footer -->
<?= view('partials/footer2') ?>

<?= $this->endSection() ?>