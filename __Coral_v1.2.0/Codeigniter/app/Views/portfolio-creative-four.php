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
                    <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Portfolio</h5>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="position-middle-bottom">
            <nav aria-label="breadcrumb" class="d-block">
                <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                    <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Coral</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void()">Portfolio</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void()">Creative</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Four Columns</li>
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
            
            <!-- app/Views/partials/Portfolio/Creative/creative-four.php -->
            <?= view('partials/Portfolio/Creative/creative-four'); ?>

        </div><!--end row-->
        
        <div class="row">
            <div class="col-12 mt-4">
                    
                <!-- app/Views/partials/Pages/NFT/nft-explore/pagination.php -->
                <?= view('partials/Pages/NFT/nft-explore/pagination'); ?>

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