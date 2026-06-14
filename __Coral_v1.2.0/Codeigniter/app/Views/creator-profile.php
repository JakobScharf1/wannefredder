<?= $this->extend('partials/layout') ?>

<?= $this->section('content') ?>

<?= view('partials/navbar5') ?>

<!-- Hero Start -->
<section class="section pb-0 position-relative mt-4 mt-lg-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <img src="<?= base_url('assets/images/blog/1.jpg') ?>" class="rounded shadow-sm img-fluid avatar avatar-ex-large w-100" alt="">
                <div class="position-relative text-center">
                    <div class="position-absolute top-0 start-50 translate-middle">
                        <img src="<?= base_url('assets/images/team/1.jpg') ?>" class="avatar avatar-small img-thumbnail rounded-pill shadow" alt="">
                    </div>
                </div>

                <div class="content text-center">
                    <h5 class="mb-3 mt-5">streetboyyy</h5>
                    <small class="text-muted px-2 py-1 rounded shadow">bhcedeh5sdijuj-husac4saiu <a href="javascript:void(0)" class="text-primary h5 ms-1"><i data-feather="copy" class="fea icon-sm"></i></a></small>

                    <h6 class="mt-3 mb-0">Artist, UX / UI designer, and Entrepreneur</h6>

                    <div class="mt-4">
                        <a href="<?= base_url('/profile-setting') ?>" class="btn btn-sm btn-outline-primary mx-1">Edit Profile</a>
                        <a href="<?= base_url('/upload-item') ?>" class="btn btn-sm btn-icon btn-outline-primary mx-1"><i data-feather="upload" class="fea icon-sm"></i></a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Hero End -->

<!-- Start -->
<section class="section pt-5">
    <div class="container">
        <div class="row g-4">
                
            <!-- app/Views/partials/Home/index-nft/product.php -->
            <?= view('partials/Home/index-nft/product'); ?>

        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- app/Views/partials/Home/index/offcanvas.php -->
<?= view('partials/Home/index/offcanvas'); ?>

<!-- Footer -->
<?= view('partials/footer') ?>

<?= $this->endSection() ?>