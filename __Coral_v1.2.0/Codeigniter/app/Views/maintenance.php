<?= $this->extend('partials/no-header') ?>

<?= $this->section('content') ?>

<!-- Start -->
<section class="bg-home d-flex align-items-center overflow-hidden" style="background: url('<?= base_url('assets/images/hero/special.jpg') ?>') center;">
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 p-0">
                <div class="d-flex flex-column min-vh-100 justify-content-center p-md-5">
                    <div class="text-center">
                        <a href="<?= base_url('/') ?>"><img src="<?= base_url('assets/images/logo-icon-80-white.png') ?>" alt=""></a>
                    </div>
                    <div class="title-heading text-center my-auto">
                        <div class="row justify-content-center g-4">
                            <div class="col-md-12 text-center">
                                <h2 class="title-dark text-white text-uppercase mt-2 mb-4 fw-semibold">Maintenance</h2>
                                <p class="text-white-50 para-desc para-dark mx-auto">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                            </div><!--end col-->
                        </div><!--end row-->
        
                        <div class="row my-4">
                            <div class="col-md-12 text-center">
                                <div class="text-center">
                                    <span id="maintenance" class="timer"></span><span class="d-block h6 text-uppercase text-white title-dark">Minutes</span>
                                </div>
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="subscribe-form">
                                    <form class="mx-auto" action="<?= base_url('/') ?>">
                                        <input name="email" id="email" type="email" class="rounded-pill bg-white" required="" placeholder="Your email :">
                                        <button type="submit" class="btn btn-primary rounded-pill">Subscribe</button>
                                    </form>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                    <div class="text-center">
                        <p class="mb-0 text-white-50">© <script>document.write(new Date().getFullYear())</script> Coral. Design & Develop with <i class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->

<?= $this->endSection() ?>