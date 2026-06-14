<?php
$this->assign('title', 'Aboutus Page');
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
                    <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">About Us</h5>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="position-middle-bottom">
            <nav aria-label="breadcrumb" class="d-block">
                <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                    <li class="breadcrumb-item"><a href="<?= $this->Url->build('/'); ?>">Coral</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About us</li>
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
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="position-relative">
                    <div class="row align-items-end">
                        <div class="col-7">
                            <img src="<?= $this->Url->build('/assets/images/about/1.jpg'); ?>" class="img-fluid rounded" alt="">
                        </div><!--end col-->

                        <div class="col-5">
                            <img src="<?= $this->Url->build('/assets/images/about/3.jpg'); ?>" class="img-fluid rounded" alt="">
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row align-items-start mt-4">
                        <div class="col-5">
                            <img src="<?= $this->Url->build('/assets/images/about/4.jpg'); ?>" class="img-fluid rounded" alt="">
                        </div><!--end col-->

                        <div class="col-7">
                            <img src="<?= $this->Url->build('/assets/images/about/2.jpg'); ?>" class="img-fluid rounded" alt="">
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="position-absolute top-50 start-50 translate-middle">
                        <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="avatar avatar-md-md rounded-pill shadow card d-flex justify-content-center align-items-center lightbox">
                            <i class="mdi mdi-play mdi-24px text-primary"></i>
                        </a>
                    </div>

                    <div class="position-absolute top-50 start-50 translate-middle z-n1">
                        <div class="bg-primary rounded opacity-75 p-5"><div class="p-5 m-5"></div></div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-7 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                <div class="section-title ms-lg-5">
                    <h6 class="text-primary text-uppercase">What we do?</h6>
                    <h4 class="title mb-0">We create world-class <br> digital products materials <br> that communicate clearly.</h4>

                    <h5 class="mt-3">Qualified Team:</h5>
                    <p class="text-muted para-desc mb-0">As a leading college in Auckland, we look to engage with our student beyond the conventional design and development school relationship, becoming a partner to the people and companies we work with.</p>

                    <h5 class="mt-3">Global Offices:</h5>
                    <p class="text-muted para-desc mb-0">As a leading digital company in Auckland, we look to engage with our clients beyond the conventional relationship, becoming a partner to the people.</p>

                    <div class="mt-4">
                        <a href="" class="btn btn-link primary fs-6">Start A Project <i class="mdi mdi-arrow-right align-middle"></i></a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6">
                <div class="section-title">
                    <h6 class="text-primary text-uppercase">What we achieved?</h6>
                    <h4 class="title mb-3">Beyond Conventional <br> Agencies.</h4>
                    <p class="text-muted para-desc mb-0">As a leading college in Auckland, we look to engage with our student beyond the conventional design and development school relationship, becoming a partner to the people and companies we work with.</p>
                </div>
            </div>

            <!-- templates/element/aboutus/achieved.php -->
            <?= $this->element('aboutus/achieved'); ?>

        </div>
    </div><!--end container-->
</section><!--end section-->
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