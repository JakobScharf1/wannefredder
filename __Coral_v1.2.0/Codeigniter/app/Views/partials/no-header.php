<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Coral - CodeIgniter Multipurpose Landing Template</title>
	    <meta name="description" content="Bootstrap 5 Landing Template" />
	    <meta name="keywords" content="Onepage, creative, modern, bootstrap 5, multipurpose, clean, responsive, business, corporate" />
	    <meta name="author" content="Shreethemes" />
	    <meta name="website" content="https://shreethemes.in" />
	    <meta name="email" content="support@shreethemes.in" />
	    <meta name="version" content="1.0.0" />
	    <!-- favicon -->
        <link href="<?= base_url('assets/images/favicon.ico') ?>" rel="shortcut icon">
		<!-- Bootstrap core CSS -->
	    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" type="text/css" rel="stylesheet" />
        <link href="<?= base_url('assets/css/materialdesignicons.min.css') ?>" rel="stylesheet" type="text/css" />
	    <!-- Custom  Css -->
	    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css" id="theme-opt" />

    </head>

    <body>

        <!-- Main Content -->
        <?= $this->renderSection('content') ?>

        <!-- javascript -->
        <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/feather.min.js') ?>"></script>
	    <!-- Custom -->
	    <script src="<?= base_url('assets/js/plugins.init.js') ?>"></script>
	    <script src="<?= base_url('assets/js/app.js') ?>"></script>

    </body>
</html>