<!-- resources/views/layouts/no-header.blade.php -->

<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Coral - Laravel 12 Multipurpose Landing Template</title>
	    <meta name="description" content="Bootstrap 5 Landing Template" />
	    <meta name="keywords" content="Onepage, creative, modern, bootstrap 5, multipurpose, clean, responsive, business, corporate" />
	    <meta name="author" content="Shreethemes" />
	    <meta name="website" content="https://shreethemes.in" />
	    <meta name="email" content="support@shreethemes.in" />
	    <meta name="version" content="1.0.0" />
	    <!-- favicon -->
        <link href="{{ asset('assets/images/favicon.ico') }}" rel="shortcut icon">
		<!-- Bootstrap core CSS -->
	    <link href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" />
        <link href="{{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
	    <!-- Custom  Css -->
	    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />

    </head>

    <body>

        <!-- Main Content -->
        <div class="content">
            @yield('content')
        </div>

        <!-- javascript -->
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/feather.min.js') }}"></script>
	    <!-- Custom -->
	    <script src="{{ asset('assets/js/plugins.init.js') }}"></script>
	    <script src="{{ asset('assets/js/app.js') }}"></script>
        
    </body>
</html>