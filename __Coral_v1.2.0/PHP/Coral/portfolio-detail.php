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

$title = isset($_GET['title']) ? $_GET['title'] : '';

$portfolios = [
    [
        'id' => 1,
        'img' => '/images/portfolio/1.jpg',
        'title' => 'Artboard Studio',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 2,
        'img' => '/images/portfolio/2.jpg',
        'title' => 'The Portrait',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 3,
        'img' => '/images/portfolio/3.jpg',
        'title' => 'Villa in Dallas',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 4,
        'img' => '/images/portfolio/4.jpg',
        'title' => 'Photo Retouching',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 5,
        'img' => '/images/portfolio/5.jpg',
        'title' => 'The Cup of Coffee',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 6,
        'img' => '/images/portfolio/6.jpg',
        'title' => 'The Pen and Books',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 7,
        'img' => '/images/portfolio/7.jpg',
        'title' => 'Mercedez-Benz Coupe',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 8,
        'img' => '/images/portfolio/8.jpg',
        'title' => 'Inspiration Board',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 9,
        'img' => '/images/portfolio/9.jpg',
        'title' => 'The Cactus Plant',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 10,
        'img' => '/images/portfolio/10.jpg',
        'title' => 'The Yellow Bag',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 11,
        'img' => '/images/portfolio/11.jpg',
        'title' => 'The Teapot Table',
        'name' => 'Custom Branding',
    ],
    [
        'id' => 12,
        'img' => '/images/portfolio/12.jpg',
        'title' => 'The Orange',
        'name' => 'Custom Branding',
    ]
];

$article = null;
if ($title === '') {
    $article = $portfolios;

} else {
    // Search for the article by slugified title
    foreach ($portfolios as $item) {
        $slugifiedTitle = str_replace(' ', '-', strtolower($item['title']));
        if ($slugifiedTitle === $title) {
            $article = $item;
            break;
        }
    }
}

if ($article === null) {
    echo "Article not found.";
    exit;
}
?>

<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('<?php echo $static_url; ?>/images/hero/pages.jpg') center;">
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Artboard Studio</h5>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="position-middle-bottom">
            <nav aria-label="breadcrumb" class="d-block">
                <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                    <li class="breadcrumb-item"><a href="index.php">Coral</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void()">Portfolio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Artboard Studio</li>
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
            <div class="col-lg-8 col-md-6">

                <?php if (!empty($article['img'])): ?>
                    <div class="tiny-single-item">
                        <div class="tiny-slide">
                            <img src="<?php echo $static_url . $article['img']; ?>" class="img-fluid" alt="Article Image">
                        </div>
                    </div>
                <?php else: ?>
                    <div class="tiny-single-item">
                        <div class="tiny-slide">
                            <img src="<?php echo $static_url; ?>/images/portfolio/1.jpg" class="img-fluid rounded shadow" alt="">
                        </div>
                        
                        <div class="tiny-slide">
                            <img src="<?php echo $static_url; ?>/images/portfolio/2.jpg" class="img-fluid rounded shadow" alt="">
                        </div>
                        
                        <div class="tiny-slide">
                            <img src="<?php echo $static_url; ?>/images/portfolio/3.jpg" class="img-fluid rounded shadow" alt="">
                        </div>
                    </div>
                <?php endif; ?>

                <div class="section-title mt-4">
                    <h4 class="title mb-4">Project Description</h4>

                    <p class="text-muted">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words. This ancient dummy text is also incomprehensible, but it imitates the rhythm of most European languages in Latin script. The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout.</p>
                    <p class="text-muted mb-0">Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. If the fill text is intended to illustrate the characteristics of different typefaces, it sometimes makes sense to select texts containing the various letters and symbols specific to the output language.</p>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6">
                <div class="section-title sticky-bar">
                    <h4 class="title mb-4">Project Details</h4>

                    <dl class="row mb-0">
                        <dt class="col-md-4 fw-medium col-5">Client :</dt>
                        <dd class="col-md-8 col-7 text-muted">Calvin Carlo</dd>

                        <dt class="col-md-4 fw-medium col-5">Category :</dt>
                        <dd class="col-md-8 col-7 text-muted">
                            <?php 
                                if (!empty($article['title'])) {
                                        echo $article['title']; 
                                } else {
                                    echo 'Web Design'; 
                                }
                            ?>
                        </dd>

                        <dt class="col-md-4 fw-medium col-5">Date :</dt>
                        <dd class="col-md-8 col-7 text-muted">15th April 2025</dd>

                        <dt class="col-md-4 fw-medium col-5">Website :</dt>
                        <dd class="col-md-8 col-7 text-muted">www.yourdomain.com</dd>

                        <dt class="col-md-4 fw-medium col-5">Location :</dt>
                        <dd class="col-md-8 col-7 text-muted">3/2/64 Mongus Street, UK</dd>
                    </dl>
                </div>
            </div><!--end col-->
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