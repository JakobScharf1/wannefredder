<!-- resources/views/service-detail.blade.php -->
@extends('layouts.main')

@section('title', 'Service-Detail Page')

@section('content')

@include('includes.navbar')

<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('{{ asset('assets/images/hero/pages.jpg') }}') center;">
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Service Detail</h5>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="position-middle-bottom">
            <nav aria-label="breadcrumb" class="d-block">
                <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Coral</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Service Detail</li>
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
<!-- Start -->
<section class="section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8 col-md-7">
                <div class="card position-relative overflow-hidden">
                    <div class="card-img">
                        <img src="{{ asset('assets/images/blog/8.jpg') }}" class="img-fluid rounded" alt="">
                        <div class="card-overlay" style="opacity: 1;"></div>
                    </div>

                    <div class="content p-4 position-absolute bottom-0 start-0">
                        <a href="" class="h5 title d-block mb-0 text-white title-dark">
                            @if(!empty($item['title']))
                                {{ $item['title'] }}
                            @else
                                Branding Strategy
                            @endif
                        </a>

                        <div class="d-flex author align-items-center mt-3">
                            <p class="para-desc text-white-50 mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century.</p>
                        </div>
                    </div>
                </div>

                <h5 class="mt-4">Data Analysis:</h5>
                <p class="text-muted mt-3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>

                <h5 class="mt-4">Benefits:</h5>
                <ul class="list-unstyled mt-3 mb-0">
                    <li class="mt-2"><a href="javascript:void(0)" class="text-muted"><i class="mdi mdi-arrow-right text-primary me-2"></i>Deciding to purchase</a></li>
                    <li class="mt-2"><a href="javascript:void(0)" class="text-muted"><i class="mdi mdi-arrow-right text-primary me-2"></i>List your space</a></li>
                    <li class="mt-2"><a href="javascript:void(0)" class="text-muted"><i class="mdi mdi-arrow-right text-primary me-2"></i>Landing an experience or adventure</a></li>
                    <li class="mt-2"><a href="javascript:void(0)" class="text-muted"><i class="mdi mdi-arrow-right text-primary me-2"></i>Top uses questions</a></li>
                </ul>

                <h5 class="mt-4">FAQs:</h5>

                <div class="accordion mt-3" id="buyingquestion">
                    <div class="accordion-item rounded shadow">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button border-0 bg-white shadow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                How does it work ?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse border-0 collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#buyingquestion">
                            <div class="accordion-body text-muted">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item rounded shadow mt-2">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button border-0 bg-white shadow collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                Do I need a designer to use Coral ?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#buyingquestion">
                            <div class="accordion-body text-muted">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item rounded shadow mt-2">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button border-0 bg-white shadow collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What do I need to do to start selling ?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse border-0 collapse" aria-labelledby="headingThree"
                            data-bs-parent="#buyingquestion">
                            <div class="accordion-body text-muted">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item rounded shadow mt-2">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button border-0 bg-white shadow collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What happens when I receive an order ?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse border-0 collapse" aria-labelledby="headingFour"
                            data-bs-parent="#buyingquestion">
                            <div class="accordion-body text-muted">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-5 col-12">
                <div class="sticky-bar">
                    <div>
                        
                        <!-- includes/Pages/service-detail/services10.blade.php -->
		                @include('includes.Pages.service-detail.services10')
                    
                    </div>

                    <div class="bg-light rounded p-4 mt-2">
                        <h5>Get in touch !</h5>
                        <form class="mt-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label d-none fw-semibold">Your Name <span class="text-danger">*</span></label>
                                        <input name="name" id="name" type="text" class="form-control" placeholder="Name :">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label d-none fw-semibold">Your Email <span class="text-danger">*</span></label>
                                        <input name="email" id="email" type="email" class="form-control" placeholder="Email :">
                                    </div> 
                                </div><!--end col-->

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label d-none fw-semibold">Comments <span class="text-danger">*</span></label>
                                        <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Message :"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" id="submit" name="send" class="btn btn-primary">Send Message</button>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End -->

<!-- includes/Home/index/offcanvas.blade.php -->
@include('includes.Home.index.offcanvas')

@include('includes.footer')
  
@endsection