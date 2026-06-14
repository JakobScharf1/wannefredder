<?= $this->extend('partials/layout') ?>

<?= $this->section('content') ?>

<?= view('partials/navbar5') ?>

<!-- Start Hero -->
<section class="bg-half-170 overflow-hidden">
    <span class="modern-app-round top-50 start-50 translate-middle"></span>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6">
                <div class="title-heading">
                    <h1 class="heading mb-3">Discover and collect <span class="text-gradient-primary">extraordinary</span> NFT <span class="text-gradient-primary">artworks</span></h1>
                    <p class="para-desc text-muted">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
                    <div class="mt-4 pt-2">
                        <a href="<?= base_url('/nft-explore') ?>" class="btn btn-primary me-1"><i class="mdi mdi-camera-outline align-middle"></i> Explore</a>
                        <a href="" class="btn btn-soft-primary">Sell <i class="mdi mdi-arrow-right align-middle"></i></a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="position-relative">
                    <div class="tiny-single-item">
                        
                        <!-- app/Views/partials/Home/index-nft/nft-slider.php -->
                        <?= view('partials/Home/index-nft/nft-slider'); ?>

                    </div>

                    <div class="position-absolute top-0 start-0 translate-middle z-n1">
                        <p class="avatar avatar-small bg-gradient-primary rounded mb-0 spin-anything" style="opacity: 0.1;"></p>
                    </div>

                    <div class="position-absolute top-100 start-100 translate-middle z-n1">
                        <p class="avatar avatar-small bg-gradient-primary rounded-pill mb-0 zoom-in-out" style="opacity: 0.1;"></p>
                    </div>
                </div>
            </div><!--end col-->
        </div>
    </div>
</section>
<!-- End Hero -->

<!-- Start -->
<section class="section pt-0">
    <div class="container">
        <div class="row align-items-end mb-4 pb-2">
            <div class="col-md-8">
                <div class="section-title">
                    <h4 class="title mb-3">Explore Hot Products</h4>
                    <p class="text-muted mb-0">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
                </div>
            </div><!--end slide-->

            <div class="col-md-4">
                <div class="text-end d-md-block d-none">
                    <a href="<?= base_url('/nft-explore') ?>" class="btn btn-link primary text-dark">See More <i class="mdi mdi-arrow-right"></i></a>
                </div>
            </div><!--end slide-->
        </div><!--end row-->

        <div class="row g-4">
            
            <!-- app/Views/partials/Home/index-nft/product.php -->
            <?= view('partials/Home/index-nft/product'); ?>

        </div><!--end row-->

        <div class="row">
            <div class="col">
                <div class="text-center d-md-none d-block">
                    <a href="<?= base_url('/nft-explore') ?>" class="btn btn-link primary text-dark">See More <i class="mdi mdi-arrow-right"></i></a>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">How we works? : Coral</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row g-4">
            
            <!-- app/Views/partials/Home/index-nft/services7.php -->
            <?= view('partials/Home/index-nft/services7'); ?>

        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start CTA -->
<section class="cta-video-section position-relative overflow-hidden" style="background: url('<?= base_url('assets/images/hero/pages.jpg') ?>') fixed;">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title text-white title-dark mb-3">Join the fastest growing Coral NFTs</h4>
                    <p class="text-white-50 para-desc mb-0 mx-auto">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card p-4 rounded-md shadow bg-white">
                    <h4 class="mb-4">Join our community: Coral</h4>
                    <p class="text-muted mb-0">Welcome to the future, you can buy and sell awesome artworks form here.</p>

                    <div class="mt-3">
                        <a href="<?= base_url('/aboutus') ?>" class="btn btn-link primary text-dark">Read More <i class="mdi mdi-arrow-right"></i></a>
                    </div>
                    <div class="py-4"></div>
                    <div class="position-absolute bottom-0 end-0">
                        <img src="<?= base_url('assets/images/community.png') ?>" class="avatar avatar-medium opacity-25" alt="">
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-md-6">
                <div class="card p-4 rounded-md shadow bg-white">
                    <h4 class="mb-4">Learn more about us: Coral</h4>
                    <p class="text-muted mb-0">Welcome to the future, you can buy and sell awesome artworks form here.</p>

                    <div class="mt-3">
                        <a href="<?= base_url('/aboutus') ?>" class="btn btn-link primary text-dark">Read More <i class="mdi mdi-arrow-right"></i></a>
                    </div>
                    <div class="py-4"></div>
                    <div class="position-absolute bottom-0 end-0">
                        <img src="<?= base_url('assets/images/united.png') ?>" class="avatar avatar-medium opacity-25" alt="">
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End CTA -->

<!-- Start -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Top Collections</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row g-4">
            
            <!-- app/Views/partials/Home/index-nft/top-collections.php -->
            <?= view('partials/Home/index-nft/top-collections'); ?>

        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60 overflow-hidden">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="position-relative">
                    <img src="<?= base_url('assets/images/faqs.svg') ?>" class="img-fluid" alt="">

                    <div class="modern-app-round round-small"></div>
                </div>
            </div><!--end col-->

            <div class="col-lg-6 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                <div class="section-title mb-4 ms-lg-3">
                    <h4 class="title mb-3">Frequently Asked Questions</h4>
                    <p class="text-muted para-desc mb-0">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
                
                    <div class="accordion mt-4 pt-2" id="buyingquestion">
                        <div class="accordion-item rounded shadow">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button border-0 bg-white shadow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    How does it work ?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse border-0 collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#buyingquestion">
                                <div class="accordion-body text-muted">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item rounded shadow mt-2">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button border-0 bg-white shadow collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    Do I need a designer to use Coral ?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#buyingquestion">
                                <div class="accordion-body text-muted">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item rounded shadow mt-2">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button border-0 bg-white shadow collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What do I need to do to start selling ?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse border-0 collapse" aria-labelledby="headingThree"
                                data-bs-parent="#buyingquestion">
                                <div class="accordion-body text-muted">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item rounded shadow mt-2">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button border-0 bg-white shadow collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What happens when I receive an order ?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse border-0 collapse" aria-labelledby="headingFour"
                                data-bs-parent="#buyingquestion">
                                <div class="accordion-body text-muted">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                </div>
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
                    <p class="text-muted para-desc mx-auto mb-0">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row g-4">
                
            <!-- app/Views/partials/Home/index/blog.php -->
            <?= view('partials/Home/index/blog'); ?>

        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->
    
<!-- app/Views/partials/Home/index/offcanvas.php -->
<?= view('partials/Home/index/offcanvas'); ?>

<!-- Footer -->
<?= view('partials/footer') ?>

<?= $this->endSection() ?>