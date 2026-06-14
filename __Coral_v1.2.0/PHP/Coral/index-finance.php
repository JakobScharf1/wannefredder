<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Coral/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
$navlink_content = ob_get_clean();
$page= 'nav3';
$fpage= 'foot';

// Optionally define the Hero block content
ob_start();
?>  

<!-- Start Hero -->
<section class="d-flex align-items-center bg-finance" id="home">
    <div class="container position-relative z-1">
        <div class="row">
            <div class="col-md-6 background">
                <div class="title-heading pe-lg-5 pe-md-4">
                    <span class="badge bg-primary mb-2">Coral Finance</span>
                    <h1 class="heading fw-semibold text-capitalize mb-3">Maximize your <br> <span class="border-animation position-relative">income and build</span> lasting wealth.</h1>
                    <p class="para-desc text-muted mb-0">Ensuring secure transactions and seamless financial experiences for our users globally.</p>
                
                    <div class="mt-4">
                        <a href="" class="btn btn-primary me-1">Get Started <i class="mdi mdi-arrow-right"></i></a>
                        <a href="" class="btn btn-outline-primary">Learn More</a>
                    </div>

                    <ul class="list-unstyled mt-3 text-muted mb-0">
                        <li class="list-inline-item me-4"><i class="mdi mdi-check text-primary me-2"></i>Hire experts</li>
                        <li class="list-inline-item me-4"><i class="mdi mdi-check text-primary me-2"></i>Avoid scams</li>
                        <li class="list-inline-item me-4"><i class="mdi mdi-check text-primary me-2"></i>Contingecy fees</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--end section-->
<!-- End Hero -->
    
<!-- Start Features -->
<section class="bg-white py-5 border-top border-bottom">
    <div class="container">
        <div class="row align-items-center g-4">
            
            <!-- features code  -->
            <?php
                include "$base_dir/Components/Home/index-finance/features.php";
            ?>

        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Features -->

<!-- Start -->
<section class="section">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-5 col-md-6">
                <div class="rounded shadow bg-soft-primary p-4 pb-0">
                    <img src="<?php echo $static_url; ?>/images/1.jpg" class="img-fluid rounded-top shadow" alt="">
                </div>
            </div><!--end col-->

            <div class="col-lg-7 col-md-6">
                <div class="section-title ms-lg-5">
                    <h4 class="title mb-3">Gain valuable insights. <br> Fast data analytics</h4>
                    <p class="text-muted para-desc mb-0">Ensuring secure transactions and seamless financial experiences for our users globally.</p>
                
                    <ul class="list-unstyled text-muted mb-0 mt-3">
                        <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                        <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                        <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Create your own skin to match your brand</li>
                    </ul>

                    <div class="mt-4">
                        <a href="aboutus.php" class="btn btn-soft-primary">About Us <i class="mdi mdi-arrow-right align-middle"></i></a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row align-items-center g-4">
            <div class="col-lg-5 col-md-6 order-1 order-md-2">
                <div class="rounded shadow bg-soft-primary p-4 pb-0">
                    <img src="<?php echo $static_url; ?>/images/2.jpg" class="img-fluid rounded-top shadow" alt="">
                </div>
            </div><!--end col-->

            <div class="col-lg-7 col-md-6 order-md-1 order-2">
                <div class="section-title me-lg-5">
                    <h4 class="title mb-3">Review and manage <br> team salaries</h4>
                    <p class="text-muted para-desc mb-0">Ensuring secure transactions and seamless financial experiences for our users globally.</p>
                
                    <ul class="list-unstyled text-muted mb-0 mt-3">
                        <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                        <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                        <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Create your own skin to match your brand</li>
                    </ul>

                    <div class="mt-4">
                        <a href="aboutus.php" class="btn btn-soft-primary">About Us <i class="mdi mdi-arrow-right align-middle"></i></a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row align-items-center g-4">
            <div class="col-lg-5 col-md-6">
                <div class="rounded shadow bg-soft-primary p-4 pb-0">
                    <img src="<?php echo $static_url; ?>/images/3.jpg" class="img-fluid rounded-top shadow" alt="">
                </div>
            </div><!--end col-->

            <div class="col-lg-7 col-md-6">
                <div class="section-title ms-lg-5">
                    <h4 class="title mb-3">In-depth financial <br> performance analysis</h4>
                    <p class="text-muted para-desc mb-0">Ensuring secure transactions and seamless financial experiences for our users globally.</p>
                
                    <ul class="list-unstyled text-muted mb-0 mt-3">
                        <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                        <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                        <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Create your own skin to match your brand</li>
                    </ul>

                    <div class="mt-4">
                        <a href="aboutus.php" class="btn btn-soft-primary">About Us <i class="mdi mdi-arrow-right align-middle"></i></a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start CTA -->
<section class="cta-video-section position-relative overflow-hidden">
    <video class="" autoplay loop>
        <source src="<?php echo $static_url; ?>/images/video.mp4" type="video/mp4">
    </video>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-10">
                <div class="position-relative z-1 p-4 rounded shadow bg-white">
                    <div class="tiny-single-item">
                            
                        <!-- review3 code  -->
                        <?php
                            include "$base_dir/Components/Home/index-consulting/review3.php";
                        ?>

                    </div>

                    <i class="mdi mdi-format-quote-open text-primary position-absolute top-50 start-50 translate-middle z-n1 testi-icon"></i>
                </div>
            </div>
        </div>
    </div>
</section><!--end section-->
<!-- End CTA -->

<!-- Start -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="section-title mb-md-0 mb-0 ms-lg-3">
                    <span class="badge bg-primary mb-2">FAQs</span>
                    <h4 class="title mb-3 mb-md-5 pb-md-4">Got a question? <br> Get your answer</h4>
                    <p class="text-muted para-desc mb-0 mt-md-4">Ensuring secure transactions and seamless financial experiences for our users globally.</p>
                    <div class="mt-3 d-none d-md-block">
                        <a href="" class="btn btn-soft-primary">Contact Now <i class="mdi mdi-arrow-right"></i></a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-6 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                <div class="ms-lg-3">                        
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
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Blog Or News</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Ensuring secure transactions and seamless financial experiences for our users globally.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row g-4">
                
            <!-- blog code  -->
            <?php
                include "$base_dir/Components/Home/index/blog.php";
            ?>

        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- offcanvas code  -->
<?php
    include "$base_dir/Components/Home/index/offcanvas.php";
?>

<?php
$hero_content = ob_get_clean();

// Include the base template
include "$base_dir/style/base.php";
?>

<script>
    easy_background("#home",
        {
            slide: ["<?php echo $static_url; ?>/images/hero/bg1.jpg", "<?php echo $static_url; ?>/images/hero/bg2.jpg", "<?php echo $static_url; ?>/images/hero/bg3.jpg"],
            delay: [4000, 4000, 4000]
        }
    );
</script>