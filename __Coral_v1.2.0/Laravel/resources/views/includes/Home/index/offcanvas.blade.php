<!-- Offcanvas Start -->
<div class="offcanvas offcanvas-end shadow border-0" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header p-4 border-bottom">
        <h5 id="offcanvasRightLabel" class="mb-0">
            <img src="{{ asset('assets/images/logo-dark.png') }}" class="light-version" alt="">
            <img src="{{ asset('assets/images/logo-light.png') }}" class="dark-version" alt="">
        </h5>
        <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i class="mdi mdi-close fs-4"></i></button>
    </div>
    <div class="offcanvas-body p-4">
        <div class="row">
            <div class="col-12">
                <img src="{{ asset('assets/images/contact.png') }}" class="img-fluid" alt="">
                <form>
                    <div class="my-3 text-center">
                        <h6 class="text-uppercase mb-0 fw-semibold">Sign In</h6>
                    </div>
                
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Your Email</label>
                        <input name="email" id="email" type="email" class="form-control" placeholder="example@website.com">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold" for="loginpass">Password</label>
                        <input type="password" class="form-control" id="loginpass" placeholder="Password">
                    </div>
                
                    <div class="d-flex justify-content-between">
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-label form-check-label text-muted" for="flexCheckDefault">Remember me</label>
                            </div>
                        </div>
                        <span class="forgot-pass text-muted small mb-0"><a href="{{ url('/reset-password') }}" class="text-muted">Forgot password ?</a></span>
                    </div>
    
                    <button class="btn btn-primary w-100" type="submit">Sign in</button>

                    <div class="col-12 text-center mt-3">
                        <span><span class="text-muted me-2 small">Don't have an account ?</span> <a href="{{ url('/signup') }}" class="text-dark fw-semibold small">Sign Up</a></span>
                    </div><!--end col-->
                </form>
            </div>
        </div>
    </div>

    <div class="offcanvas-footer p-4 border-top text-center">
        <ul class="list-unstyled social-icon mb-0">
            <li class="list-inline-item"><a href="https://dribbble.com/shreethemes" target="_blank" class="rounded"><i data-feather="dribbble" class="fea icon-sm align-middle" title="dribbble"></i></a></li>
            <li class="list-inline-item"><a href="http://linkedin.com/company/shreethemes" target="_blank" class="rounded"><i data-feather="linkedin" class="fea icon-sm align-middle" title="Linkedin"></i></a></li>
            <li class="list-inline-item"><a href="https://www.facebook.com/shreethemes" target="_blank" class="rounded"><i data-feather="facebook" class="fea icon-sm align-middle" title="facebook"></i></a></li>
            <li class="list-inline-item"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="rounded"><i data-feather="instagram" class="fea icon-sm align-middle" title="instagram"></i></a></li>
            <li class="list-inline-item"><a href="https://twitter.com/shreethemes" target="_blank" class="rounded"><i data-feather="twitter" class="fea icon-sm align-middle" title="twitter"></i></a></li>
        </ul><!--end icon-->
    </div>
</div>
<!-- Offcanvas End -->