<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Coral/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
$navlink_content = ob_get_clean();

// Optionally define the Hero block content
ob_start();
?>        

<!-- Start -->
<section class="position-relative bg-soft-primary">
    <div class="container">
        <div class="row">
            <div class="col-12 p-0">
                <div class="d-flex flex-column min-vh-100 justify-content-center px-md-5 py-5 px-4">
                    <div class="text-center">
                        <a href="index.php"><img src="<?php echo $static_url; ?>/images/logo-icon-64.png" alt=""></a>
                    </div>
                    <div class="title-heading text-center my-auto">
                        <img src="<?php echo $static_url; ?>/images/error.png" class="img-fluid" alt="">
                        <h3 class="text-dark text-uppercase mt-2 mb-4 fw-bold">Page Not Found?</h3>
                        <p class="text-muted para-desc mx-auto">Whoops, this is embarassing. <br> Looks like the page you were looking for wasn't found.</p>
                        
                        <div class="mt-4">
                            <a href="index.php" class="btn btn-primary">Back to Home</a>
                        </div>
                    </div>
                    <div class="text-center">
                        <p class="mb-0 text-muted">© <script>document.write(new Date().getFullYear())</script> Coral. Design & Develop with <i class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->
        
<?php
$hero_content = ob_get_clean();

// Include the base template
include "$base_dir/style/no-header.php";
?>