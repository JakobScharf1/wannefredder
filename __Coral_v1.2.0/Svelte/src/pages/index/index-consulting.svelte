<script>
// @ts-nocheck

    import { Link } from 'svelte-routing';
    import bg from '../../assets/images/hero/bg-consulting.png'
    import about from '../../assets/images/presentation-3-87.svg'
    import faqImage from '../../assets/images/faqs.svg'
    import AboutImage from "../../components/about-image.svelte";
    import Navdark from "../../components/navbar/navdark.svelte";
    import FeatureOne from '../../components/feature/feature-one.svelte';
    import CtaOne from '../../components/cta/cta-one.svelte';
    import BlogOne from '../../components/blog-one.svelte';
    import TeamOne from '../../components/team/team-one.svelte';
    import FaqOne from '../../components/faq-one.svelte';
    import Footer from '../../components/footer.svelte';

    import Tobii from 'tobii';
    import { onMount } from "svelte";

    let tobii;

    onMount(() => {
        tobii = new Tobii();
    });
</script>

<Navdark/>

<section class="bg-half-170 d-table w-100">
    <div class="bg-overlay bg-soft-primary" style="background: url({bg}) bottom no-repeat;"></div>
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
                        <Link to="/services" class="btn btn-primary m-1">Our Services</Link>
                        <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" data-tobii aria-label="link" class="btn btn-icon btn-pills btn-primary m-1 lightbox"><i data-feather="video" class="icons"></i></a><span class="fw-bold text-uppercase small align-middle ms-2">Watch Now</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-6">
                <AboutImage/>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Our Features</h4>
                    <p class="text-muted para-desc mx-auto mb-0">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                </div>
            </div>
        </div>
        <FeatureOne/>
    </div>

    <div class="container mt-100 mt-60">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6 col-md-6 order-1 order-md-2">
                <div class="position-relative">
                    <img src={about} class="img-fluid" alt="">

                    <div class="modern-app-round round-small"></div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 order-md-1 order-2">
                <div class="section-title me-lg-5">
                    <h4 class="title mb-3">We create world-class digital <br> products materials that <br> communicate clearly.</h4>
                    <p class="text-muted para-desc mb-0">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                
                    <ul class="list-unstyled text-muted mb-0 mt-3">
                        <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                        <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                        <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Create your own skin to match your brand</li>
                    </ul>

                    <div class="mt-4">
                        <Link to="/aboutus" class="btn btn-primary">About Us <i class="mdi mdi-arrow-right align-middle"></i></Link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<CtaOne/>

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Our Minds</h4>
                    <p class="text-muted para-desc mx-auto mb-0">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                </div>
            </div>
        </div>
        <TeamOne/>
    </div>

    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="position-relative">
                    <img src={faqImage} class="img-fluid" alt="">
                    <div class="modern-app-round round-small"></div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                <div class="section-title mb-4 ms-lg-3">
                    <h4 class="title mb-3">Frequently Asked Questions</h4>
                    <p class="text-muted para-desc mb-0">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                    <FaqOne/>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Blog Or News</h4>
                    <p class="text-muted para-desc mx-auto mb-0">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                </div>
            </div>
        </div>
        <BlogOne/>
    </div>
</section>

<Footer/>