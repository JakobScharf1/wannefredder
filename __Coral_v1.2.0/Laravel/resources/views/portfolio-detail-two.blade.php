<!-- resources/views/portfolio-detail-two.blade.php -->
@extends('layouts.main')

@section('title', 'Portfolio-Detail-Two Page')

@section('content')

@include('includes.navbar')

<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('{{ asset('assets/images/hero/pages.jpg') }}') center;">
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
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Coral</a></li>
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
        <div id="grid" class="row g-2">
            <div class="col-lg-3 col-md-4 col-12 picture-item">
                <div class="portfolio masonry rounded shadow position-relative overflow-hidden">
                    <div class="position-relative overflow-hidden image">
                        <img src="{{ !empty($item['img']) ? asset($item['img']) : asset('assets/images/portfolio/1.jpg') }}" class="img-fluid rounded shadow" alt="">
                        <div class="position-absolute start-0 end-0 top-0 bottom-0 overlay rounded bg-black m-4"></div>
                    </div>

                    <div class="content">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <a href="{{ !empty($item['img']) ? asset($item['img']) : asset('assets/images/portfolio/1.jpg') }}" class="btn btn-sm btn-icon btn-pills btn-primary lightbox"><i data-feather="camera" class="fea icon-sm"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <!-- includes/Portfolio/portfolio-detail-two/image.blade.php -->
		    @include('includes.Portfolio.portfolio-detail-two.image')

        </div><!--end row-->
        
        <div class="row mt-4 g-4">
            <div class="col-lg-8 col-md-6">
                <div class="section-title">
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
                            @if(!empty($item['title']))
                                {{ $item['title'] }}
                            @else
                                Web Design
                            @endif
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
</section>
<!-- End -->

<!-- includes/Home/index/offcanvas.blade.php -->
@include('includes.Home.index.offcanvas')

@include('includes.footer')
  
@endsection