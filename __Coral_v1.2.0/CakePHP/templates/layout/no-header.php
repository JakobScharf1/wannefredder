<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Coral - Cakephp Multipurpose Landing Template</title>
	    <meta name="description" content="Bootstrap 5 Landing Template" />
	    <meta name="keywords" content="Onepage, creative, modern, bootstrap 5, multipurpose, clean, responsive, business, corporate" />
	    <meta name="author" content="Shreethemes" />
	    <meta name="website" content="https://shreethemes.in" />
	    <meta name="email" content="support@shreethemes.in" />
	    <meta name="version" content="1.0.0" />
	    <!-- favicon -->
        <link href="<?= $this->Url->build('/assets/images/favicon.ico'); ?>" rel="shortcut icon">

		<!-- CSS Files -->
        <?= $this->Html->css([
            '/assets/css/bootstrap.min.css',
            '/assets/css/materialdesignicons.min.css',
            '/assets/css/style.css'
        ]); ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>

    </head>

    <body>

        <!-- Main Content -->
        <?= $this->fetch('content') ?>

		<!-- JavaScript Files -->
        <?= $this->Html->script([
            '/assets/js/bootstrap.bundle.min.js',
            '/assets/js/feather.min.js',
            '/assets/js/plugins.init.js',
            '/assets/js/app.js'
        ]); ?>

        <?= $this->fetch('script') ?>

    </body>
</html>