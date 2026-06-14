<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Coral/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
$navlink_content = ob_get_clean();

// Optionally define the Hero block content
ob_start();
?>
      
<section class="bg-home d-flex align-items-center" style="background: url('<?php echo $static_url; ?>/images/hero/auth.jpg') center;">
    <div class="bg-overlay bg-linear-gradient-2"></div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="p-4 bg-white rounded shadow-md mx-auto w-100" style="max-width: 400px;">
                    <div class="text-center">
                        <img src="<?php echo $static_url; ?>/images/team/1.jpg" class="avatar avatar-md-md rounded-pill mb-3 shadow" alt="">
                        <h6 class="text-uppercase fw-semibold mb-0">Calvin Carlo</h6>
                    </div>
                    <form class="mt-4">
                        <div class="mb-3">
                            <label class="form-label fw-semibold" for="loginpass">Password</label>
                            <input type="password" class="form-control" id="loginpass" placeholder="Password">
                        </div>
                    
                        <div class="d-flex justify-content-between">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-label form-check-label text-muted" for="flexCheckDefault">Remember me</label>
                                </div>
                            </div>
                            <span class="forgot-pass text-muted small mb-0"><a href="reset-password.php" class="text-muted">Forgot password ?</a></span>
                        </div>
        
                        <button class="btn btn-primary w-100" type="submit">Sign in</button>
                    </form>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- ENd Hero -->
        
<?php
$hero_content = ob_get_clean();

// Include the base template
include "$base_dir/style/no-header.php";
?>