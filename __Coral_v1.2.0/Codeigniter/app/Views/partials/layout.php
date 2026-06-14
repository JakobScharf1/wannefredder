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
        <link href="<?= base_url('assets/css/tiny-slider.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/css/tobii.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/css/materialdesignicons.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/css/swiper.min.css') ?>" rel="stylesheet" type="text/css" />
	    <!-- Custom  Css -->
	    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css" id="theme-opt" />
	</head>

	<body>

        <!-- Main Content -->
        <?= $this->renderSection('content') ?>

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top rounded fs-5"><i data-feather="arrow-up" class="fea icon-sm align-middle"></i></a>
        <!-- Back to top -->

        <!-- JAVASCRIPTS -->
	    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/swiper.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/easy_background.js') ?>"></script>
        <?= $this->renderSection('scripts') ?>
        <script src="<?= base_url('assets/js/tiny-slider.js') ?>"></script>
        <script src="<?= base_url('assets/js/shuffle.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/tobii.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/feather.min.js') ?>"></script>
	    <!-- Custom -->
	    <script src="<?= base_url('assets/js/plugins.init.js') ?>"></script>
	    <script src="<?= base_url('assets/js/app.js') ?>"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                if (document.querySelector('[data-gumshoe]')) {
                    new Gumshoe('[data-gumshoe]');
                }
            });
        </script>

        <script>
            const handleChange = () => {
            const fileUploader = document.querySelector('#input-file');
                const getFile = fileUploader.files
                if (getFile.length !== 0) {
                    const uploadedFile = getFile[0];
                    readFile(uploadedFile);
                }
            }

            const readFile = (uploadedFile) => {
                if (uploadedFile) {
                    const reader = new FileReader();
                    reader.onload = () => {
                    const parent = document.querySelector('.preview-box');
                    parent.innerHTML = `<img class="preview-content" src=${reader.result} />`;
                    };
                    
                    reader.readAsDataURL(uploadedFile);
                }
            };
        </script>

        <script>
            function loadFile(event) {
                const output = document.getElementById('output');
                output.src = URL.createObjectURL(event.target.files[0]);
                output.onload = function () {
                    URL.revokeObjectURL(output.src);
                };
            }
        </script>
        
    </body>
</html>