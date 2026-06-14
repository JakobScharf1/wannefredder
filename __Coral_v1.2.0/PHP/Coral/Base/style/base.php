<?php
// $base_dir = __DIR__ . '/Base';
$static_url = '/Coral/assets';

// Define the content for the navlink block
ob_start();
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Coral - PHP Multipurpose Landing Template</title>
	    <meta name="description" content="Bootstrap 5 Landing Template" />
	    <meta name="keywords" content="Onepage, creative, modern, bootstrap 5, multipurpose, clean, responsive, business, corporate" />
	    <meta name="author" content="Shreethemes" />
	    <meta name="website" content="https://shreethemes.in" />
	    <meta name="email" content="support@shreethemes.in" />
	    <meta name="version" content="1.0.0" />
	    <!-- favicon -->
        <link href="<?php echo $static_url; ?>/images/favicon.ico" rel="shortcut icon">
		<!-- Bootstrap core CSS -->
	    <link href="<?php echo $static_url; ?>/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo $static_url; ?>/css/tiny-slider.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $static_url; ?>/css/tobii.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $static_url; ?>/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $static_url; ?>/css/swiper.min.css" rel="stylesheet" type="text/css" />
	    <!-- Custom  Css -->
	    <link href="<?php echo $static_url; ?>/css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
	</head>

	<body>

        <?php
            // Define an associative array for mapping page values to navbar files
            $navbarFiles = [
                'nav' => 'navbar.php',
                'nav2' => 'navbar2.php',
                'nav3' => 'navbar3.php',
                'nav4' => 'navbar4.php',
                'nav5' => 'navbar5.php',
                'nav6' => 'navbar6.php',
                'nav7' => 'navbar7.php',
                'nav8' => 'navbar8.php',
                
            ];

            // Check if $page is set and exists in the array, then include the corresponding file
            if (isset($page) && array_key_exists($page, $navbarFiles)) {
                include $navbarFiles[$page];
            } else {
                // Do nothing if $page is not set or not valid
            }

        ?>
        
        <!-- Main Content -->
        <main>
            <?php echo $hero_content ?? '<!-- Default hero content here -->'; ?>
        </main>

        <?php
            // Define an associative array for mapping fpage values to footer files
            $footerFiles = [
                'foot' => 'footer.php',
                'foot2' => 'footer2.php',
                
            ];

            // Check if $fpage is set and exists in the array, then include the corresponding file
            if (isset($fpage) && array_key_exists($fpage, $footerFiles)) {
                include $footerFiles[$fpage];
            } else {
                // Do nothing if $fpage is not set or not valid
            }
        ?>

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top rounded fs-5"><i data-feather="arrow-up" class="fea icon-sm align-middle"></i></a>
        <!-- Back to top -->

        <!-- JAVASCRIPTS -->
	    <script src="<?php echo $static_url; ?>/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo $static_url; ?>/js/swiper.min.js"></script>
        <script src="<?php echo $static_url; ?>/js/easy_background.js"></script>
        <script src="<?php echo $static_url; ?>/js/tiny-slider.js"></script>
        <script src="<?php echo $static_url; ?>/js/shuffle.min.js"></script>
        <script src="<?php echo $static_url; ?>/js/tobii.min.js"></script>
        <script src="<?php echo $static_url; ?>/js/feather.min.js"></script>
	    <!-- Custom -->
	    <script src="<?php echo $static_url; ?>/js/plugins.init.js"></script>
	    <script src="<?php echo $static_url; ?>/js/app.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                if (document.querySelector('[data-gumshoe]')) {
                    new Gumshoe('[data-gumshoe]');
                }
            });
        </script>
    </body>
</html>