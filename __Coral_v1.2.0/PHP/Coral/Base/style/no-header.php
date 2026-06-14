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
        <link href="<?php echo $static_url; ?>/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
	    <!-- Custom  Css -->
	    <link href="<?php echo $static_url; ?>/css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />

    </head>

    <body>

        <!-- Main Content -->
        <main>
            <?php echo $hero_content ?? '<!-- Default hero content here -->'; ?>
        </main>

        <!-- javascript -->
        <script src="<?php echo $static_url; ?>/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo $static_url; ?>/js/feather.min.js"></script>
	    <!-- Custom -->
	    <script src="<?php echo $static_url; ?>/js/plugins.init.js"></script>
	    <script src="<?php echo $static_url; ?>/js/app.js"></script>
        
    </body>
</html>