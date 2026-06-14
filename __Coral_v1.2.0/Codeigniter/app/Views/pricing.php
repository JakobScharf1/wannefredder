<?= $this->extend('partials/layout') ?>

<?= $this->section('content') ?>

<?= view('partials/navbar') ?>

<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('<?= base_url('assets/images/hero/pages.jpg') ?>') center;">
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Pricing Plans</h5>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="position-middle-bottom">
            <nav aria-label="breadcrumb" class="d-block">
                <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                    <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Coral</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pricing</li>
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
        <div class="row">
            
            <!-- app/Views/partials/Home/index-it-solution/pricing.php -->
            <?= view('partials/Home/index-it-solution/pricing'); ?>

        </div><!--end row-->
    </div>

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="mb-4 title">FAQs</h4>
                    <p class="para-desc mx-auto text-muted">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row justify-content-center">
            <div class="col-lg-9 mt-4">
                <div class="accordion" id="buyingquestion">
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
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>
<!-- End -->

<!-- app/Views/partials/Home/index/offcanvas.php -->
<?= view('partials/Home/index/offcanvas'); ?>

<!-- Footer -->
<?= view('partials/footer') ?>

<?= $this->endSection() ?>