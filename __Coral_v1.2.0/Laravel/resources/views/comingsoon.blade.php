<!-- resources/views/comingsoon.blade.php -->
@extends('layouts.no-header')

@section('title', 'Comingsoon Page')

@section('content')

<section class="bg-home d-flex align-items-center" style="background: url('{{ asset('assets/images/hero/special.jpg') }}') center;">
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 p-0">
                <div class="d-flex flex-column min-vh-100 justify-content-center p-md-5">
                    <div class="text-center">
                        <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo-icon-80-white.png') }}" alt=""></a>
                    </div>
                    <div class="title-heading text-center my-auto">
                        <h2 class="title-dark text-white text-uppercase mt-2 mb-4 fw-semibold">Comingsoon</h2>
                        <p class="text-white para-desc para-dark mx-auto">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                    
                        <div id="countdown">
                            <ul class="count-down list-unstyled">
                                <li id="days" class="count-number list-inline-item m-2"></li>
                                <li id="hours" class="count-number list-inline-item m-2"></li>
                                <li id="mins" class="count-number list-inline-item m-2"></li>
                                <li id="secs" class="count-number list-inline-item m-2"></li>
                                <li id="end" class="h1"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center">
                        <p class="mb-0 text-white-50">© <script>document.write(new Date().getFullYear())</script> Coral. Design & Develop with <i class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
        
@endsection