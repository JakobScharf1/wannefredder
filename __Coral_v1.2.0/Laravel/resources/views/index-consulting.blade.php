<!-- resources/views/index-consulting.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Consulting Page')

@section('content')

@include('includes.navbar2')

<!-- Hero Start -->
<section class="bg-half-170 d-table w-100">
    <div class="bg-overlay bg-soft-primary" style="background: url('{{ asset('assets/images/hero/bg-consulting.png') }}') bottom no-repeat;"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6">
                <div class="title-heading">
                    <ul class="list-unstyled mb-0 h5 text-warning">
                        <li class="list-inline-item me-1"><span class="badge bg-white shadow text-dark fw-bold">Rating 4.5 of 5</span></li>
                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                        <li class="list-inline-item"><i class="mdi mdi-star-half-full"></i></li>
                    </ul>
                    <h1 class="heading my-3">Build a Anything <br>Consulting Business.</h1>
                    <p class="para-desc text-muted">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                    <div class="mt-4 pt-2">
                        <a href="{{ url('/services') }}" class="btn btn-primary m-1">Our Services</a>
                        <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="btn btn-icon btn-pills btn-primary m-1 lightbox"><i data-feather="video" class="icons"></i></a><span class="fw-bold text-uppercase small align-middle ms-2">Watch Now</span>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-5 col-md-6">
                <div class="position-relative">
                    <div class="position-relative mover z-1">
                        <div class="row align-items-end">
                            <div class="col-7">
                                <img src="{{ asset('assets/images/about/1.jpg') }}" class="img-fluid rounded" alt="">
                            </div><!--end col-->

                            <div class="col-5">
                                <img src="{{ asset('assets/images/about/3.jpg') }}" class="img-fluid rounded" alt="">
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row align-items-start mt-4">
                            <div class="col-5">
                                <img src="{{ asset('assets/images/about/4.jpg') }}" class="img-fluid rounded" alt="">
                            </div><!--end col-->

                            <div class="col-7">
                                <img src="{{ asset('assets/images/about/2.jpg') }}" class="img-fluid rounded" alt="">
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="position-absolute top-50 start-50 translate-middle">
                            <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="avatar avatar-md-md rounded-pill shadow card d-flex justify-content-center align-items-center lightbox">
                                <i class="mdi mdi-play mdi-24px text-primary"></i>
                            </a>
                        </div>
                    </div>

                    <div class="position-absolute top-50 start-50 translate-middle">
                        <div class="bg-primary rounded opacity-75 p-5"><div class="p-5 m-5"></div></div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Hero End -->
    
<!-- Start Team -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Our Features</h4>
                    <p class="text-muted para-desc mx-auto mb-0">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row align-items-center g-4">

            <!-- includes/Home/index-consulting/services3.blade.php -->
			@include('includes.Home.index-consulting.services3')

        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60 overflow-hidden">

        <!-- includes/Home/index-consulting/digital.blade.php -->
		@include('includes.Home.index-consulting.digital')

    </div><!--end container-->
</section>
<!-- End -->

<!-- Start CTA -->
<section class="cta-video-section position-relative" style="background: url('{{ asset('assets/images/hero/pages.jpg') }}') center fixed;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-10">
                <div class="position-relative z-1 p-4 rounded shadow bg-white">
                    <div class="tiny-single-item">
                        
                        <!-- includes/Home/index-consulting/review3.blade.php -->
		                @include('includes.Home.index-consulting.review3')

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
                    <h4 class="title mb-3">Our Minds</h4>
                    <p class="text-muted para-desc mx-auto mb-0">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row align-items-center g-4">
                
            <!-- includes/Home/index/minds.blade.php -->
		    @include('includes.Home.index.minds')

        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60 overflow-hidden">
        
        <!-- includes/Home/index-consulting/faqs.blade.php -->
		@include('includes.Home.index-consulting.faqs')

    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Blog Or News</h4>
                    <p class="text-muted para-desc mx-auto mb-0">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row g-4">
                
            <!-- includes/Home/index/blog.blade.php -->
		    @include('includes.Home.index.blog')

        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Team -->

<!-- includes/Home/index/offcanvas.blade.php -->
@include('includes.Home.index.offcanvas')

@include('includes.footer')
  
@endsection