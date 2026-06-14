<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Coral/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
$navlink_content = ob_get_clean();
$page= 'nav';
$fpage= 'foot';

// Optionally define the Hero block content
ob_start();
?>

<!-- Hero Start -->
<section class="bg-half-260" id="home">
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
        <div class="row align-items-center mt-5">
            <div class="col-lg-7 col-md-8 order-md-1 order-2">
                <div class="title-heading">
                    <h1 class="heading text-white title-dark fw-bold mb-4 text-capitalize">Give a Helping Hand <br> for Children</h1>
                    <p class="para-desc text-white-50">We value every human life placed in our hands and constantly work towards meeting the expectations of our patients.</p>
                    
                    <div class="mt-4 pt-2">
                        <a href="javascript:void(0)" class="btn btn-primary me-1">Enroll Today</a>
                        <a href="javascript:void(0)" class="btn btn-soft-primary">Make a Donation</a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-5 col-md-4 order-md-2 order-1">
                <div class="d-md-flex justify-content-center">
                    <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="avatar avatar-md-md rounded-pill shadow bg-white d-flex justify-content-center align-items-center lightbox">
                        <i class="mdi mdi-play mdi-24px text-primary"></i>
                    </a>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Hero End -->

<!-- Features Start -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 order-1 order-md-2">
                <div class="features-absolute">
                    <div class="p-4 rounded shadow position-relative bg-white">
                        <div class="section-title">
                            <h4 class="title mb-3">Make a Donation</h4>
                            <p class="mb-0 text-muted">Your $40.00 monthly donation can give 12 people clean water every year. 100% funds water projects.</p>
                        </div>

                        <form class="mt-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold" for="name">Your Name : </label>
                                        <input name="name" id="name" type="text" class="form-control" placeholder="Your Name :">
                                    </div>
                                </div><!--end col-->                               

                                <div class="col-md-6 col-12">
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold" for="email"> Your Mail : </label>
                                        <input name="email" id="email" type="email" class="form-control" placeholder="Your Mail :">
                                    </div> 
                                </div><!--end col-->  

                                <div class="col-md-6 col-12">
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold" for="number2">Phone No. : </label>
                                        <input name="number" type="number" class="form-control" id="number2" placeholder="Phone :">
                                    </div> 
                                </div><!--end col--> 

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">I Want to Donate for</label>
                                        <select class="form-select form-control" name="item_name">
                                            <option value="Donate For Food">Donate For Food</option>
                                            <option value="Food For Orphan">Food For Orphan</option>
                                            <option value="Home For Homeless">Home For Homeless</option>
                                            <option value="Holyday Gifts In Kind">Holyday Gifts In Kind</option>
                                            <option value="For clean Water in Africa">For clean Water in Africa</option>
                                            <option value="Health and Rights">Health and Rights</option>
                                        </select>
                                    </div>
                                </div><!--end col-->

                                <div class="col-12">
                                    <label class="form-label fw-semibold">How much do you want to donate ?</label>
                                    <div class="mb-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">$</span>
                                            <input type="number" class="form-control" min="1" max="1000" placeholder="Enter Amount" id="amount" aria-describedby="inputGroupPrepend" required>
                                        </div>
                                    </div>
                                </div><!--end col-->                                                                          

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">I agree to the <a href="javascript:void(0)" class="text-primary">Terms and Conditions</a>.</label>
                                    </div>
                                </div><!--end col-->                                    

                                <div class="col-12 mt-3">
                                    <button type="submit" id="donatefund" name="send" class="btn btn-primary">Donate Us</button>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-8 col-md-6 order-2 order-md-1">
                <div class="row align-items-center g-4">
                    <div class="col-lg-6 col-md-12">
                        <div class="position-relative">
                            <div class="me-4">
                                <img src="<?php echo $static_url; ?>/images/about/charity1.jpg" class="img-fluid rounded shadow" alt="">
                            </div>
                            
                            <div class="position-absolute end-0 top-50">
                                <div class="position-relative overflow-hidden rounded shadow">
                                    <img src="<?php echo $static_url; ?>/images/about/charity2.jpg" class="img-fluid avatar avatar-xl-large" alt="">
                                    <div class="bg-overlay bg-primary opacity-75"></div>

                                    <div class="position-absolute top-50 start-50 translate-middle">
                                        <div class="counter-box text-center">
                                            <h2 class="fw-bold mb-0 text-white"><span class="counter-value" data-target="100">1</span>M</h2>
                                            <p class="counter-head small fw-semibold text-white mb-0">PEOPLE FACING FOOD INSECURITY</p>
                                        </div><!--end counter box-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-6 col-md-12">
                        <div class="section-title">
                            <h6 class="fw-normal text-primary">ABOUT US</h6>
                            <h4 class="title mb-4">The origin of <br> the Fundraiser</h4>

                            <p class="text-muted mb-0">Get instant helpful resources about anything on the go, easily implement secure money transfer solutions, boost your daily efficiency, connect to other app users and create your own Fronter network, and much more with just a few taps. commodo consequat. Duis aute irure.</p>
                        
                            <div class="mt-4">
                                <a href="" class="btn btn-primary">Read More <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Popular Causes</h4>
                    <p class="text-muted para-desc mx-auto mb-0">The Coral is a non profit organisation that strives to eliminate hunger by implementing the Mid Day Meal Programme.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row g-4">
            
            <!-- causes code  -->
            <?php
                include "$base_dir/Components/Home/index-charity/causes.php";
            ?>

        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Features End -->

<!-- Start CTA -->
<section class="cta-video-section position-relative">
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

<!-- Start Team -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">We Have Funded <span class="text-primary">150 Charity Projects</span> for <br> 10M People Around The World.</h4>
                    <p class="text-muted para-desc mx-auto mb-0">The Coral is a non profit organisation that strives to eliminate hunger by implementing the Mid Day Meal Programme.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row g-4">
            
            <!-- services9 code  -->
            <?php
                include "$base_dir/Components/Home/index-charity/services9.php";
            ?>

        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Our Volunteers</h4>
                    <p class="text-muted para-desc mx-auto mb-0">The Coral is a non profit organisation that strives to eliminate hunger by implementing the Mid Day Meal Programme.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row align-items-center g-4">
            
            <!-- volunteers code  -->
            <?php
                include "$base_dir/Components/Home/index-charity/volunteers.php";
            ?>

        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Blog Or News</h4>
                    <p class="text-muted para-desc mx-auto mb-0">The Coral is a non profit organisation that strives to eliminate hunger by implementing the Mid Day Meal Programme.</p>
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
<!-- End Team -->
    
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
            slide: ["<?php echo $static_url; ?>/images/hero/charity1.jpg", "<?php echo $static_url; ?>/images/hero/charity2.jpg", "<?php echo $static_url; ?>/images/hero/charity3.jpg"],
            delay: [4000, 4000, 4000]
        }
    );
</script>