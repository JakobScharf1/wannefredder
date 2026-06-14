<script>
// @ts-nocheck

    import bg from '../../assets/images/hero/bg.jpg'
    import map from '../../assets/images/map.png'
    import cta from '../../assets/images/hero/pages.jpg'
    import team1 from '../../assets/images/team/1.jpg'
    import team2 from '../../assets/images/team/2.jpg'
    import team3 from '../../assets/images/team/3.jpg'
    import team4 from '../../assets/images/team/4.jpg'
    import { Link } from 'svelte-routing';
    import Countup from "svelte-countup";
    import { counterData, portfolioOne, servicesData } from '../../data/data';
    
	import Navlight from './../../components/navbar/navlight.svelte';
    import AboutImage from '../../components/about-image.svelte';
    import TeamOne from '../../components/team/team-one.svelte';
    import BusinessClient from '../../components/client/business-client.svelte';
    import BlogOne from '../../components/blog-one.svelte';
    import Footer from '../../components/footer.svelte';

    import Tobii from 'tobii';
    import { onMount } from "svelte";

    let tobii;

    onMount(() => {
        tobii = new Tobii();
    });

</script>

<Navlight/>

<section class="bg-home d-flex align-items-center" style="background: url({bg}) center center;">
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-8 order-md-1 order-2">
                <div class="title-heading">
                    <img src="images/logo-icon-80-white.png" class="d-md-block d-none" height="56" alt="">
                    <h1 class="heading text-white my-3">Making Your Business <br> Profitable For Today</h1>
                    <p class="para-desc text-white-50">Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.</p>
                    <div class="mt-4">
                        <Link to="/services" class="btn btn-primary">Explore Features <i class="mdi mdi-arrow-right"></i></Link>
                    </div>

                    <div class="mt-4 d-flex align-items-center">
                        <ul class="list-unstyled mb-0">
                            <li class="list-inline-item"><img src={team1} class="avatar avatar-md-sm rounded-pill shadow img-thumbnail" alt=""></li>
                            <li class="list-inline-item ms-n24"><img src={team2} class="avatar avatar-md-sm rounded-pill shadow img-thumbnail" alt=""></li>
                            <li class="list-inline-item ms-n24"><img src={team3} class="avatar avatar-md-sm rounded-pill shadow img-thumbnail" alt=""></li>
                            <li class="list-inline-item ms-n24"><img src={team4} class="avatar avatar-md-sm rounded-pill shadow img-thumbnail" alt=""></li>
                        </ul>

                        <Link to="/contactus" class="text-white ms-3 fw-medium">Join Coral Community <i class="mdi mdi-arrow-right"></i></Link>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-4 order-md-2 order-1">
                <div class="d-md-flex justify-content-center">
                    <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="avatar avatar-md-md rounded-pill shadow bg-white d-flex justify-content-center align-items-center lightbox" aria-label="link">
                        <i class="mdi mdi-play mdi-24px text-primary"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>

<section class="section overflow-hidden">
    <div class="container">
        <div class="row">
            {#each servicesData.slice(0,3) as item}
                <div class="col-lg-4 col-md-6 col-12 mt-4 mt-md-0 pt-2 pt-md-0">
                    <div class="position-relative features d-flex">
                        <div class="position-relative d-flex justify-content-center">
                            <i data-feather={item.icon} class="fea icon-m-md text-primary z-1"></i>
                            <div class="feature-icon bg-soft-primary position-absolute top-0 start-50 translate-middle"></div>
                        </div>
    
                        <div class="ms-3">
                            <Link to="/service-detail" class="h5 text-dark link-title">{item.title}</Link>
                            <p class="text-muted mt-3">{item.desc}</p>
                            <Link to="/service-detail" class="text-primary">Learn More <i class="mdi mdi-arrow-right align-middle"></i></Link>
                        </div>
                    </div>
                </div>
            {/each}
        </div>
    </div>

    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <AboutImage/>
            </div>

            <div class="col-lg-7 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                <div class="section-title ms-lg-5">
                    <h6 class="text-primary text-uppercase">About Coral</h6>
                    <h4 class="title mb-3">Convert more visitors <br> into customers.</h4>

                    <p class="text-muted para-desc mb-0">Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.</p>
                
                    <ul class="list-unstyled text-muted mb-0 mt-3">
                        <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                        <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                        <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Create your own skin to match your brand</li>
                    </ul>

                    <div class="mt-4">
                        <Link to="/aboutus" class="btn btn-soft-primary">About Us <i class="mdi mdi-arrow-right align-middle"></i></Link>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid position-relative mt-100 mt-60 pt-5">
        <div class="bg-overlay opacity-25" style="background: url({map}) center center;"></div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-3">Trusted by more than 10K users</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                {#each counterData.slice(0,3) as item}
                    <div class="col-4 py-3">
                        <div class="counter-box text-center">
                            <div class="position-relative d-flex justify-content-center">
                                <i data-feather={item.icon} class="fea icon-lg mb-3 text-primary"></i>
    
                                <div class="position-absolute top-0 translate-middle p-3 bg-soft-primary rounded-circle"></div>
                            </div>
                            <h2 class="mb-0 text-dark fw-semibold"><Countup value={100} />{item.symbol}</h2>
                            <h6 class="counter-head text-muted fw-medium mb-0">{item.title}</h6>
                        </div>
                    </div>
                {/each}
            </div>
        </div>
    </div>
</section>

<section class="cta-video-section position-relative" style="background: url({cta}) center fixed;">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-md-flex justify-content-center">
                    <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" aria-label="link" class="avatar avatar-md-md rounded-pill shadow bg-white d-flex justify-content-center align-items-center lightbox">
                        <i class="mdi mdi-play mdi-24px text-primary"></i>
                    </a>
                </div>

                <div class="section-title text-center mt-4">
                    <h4 class="title text-white mb-0">Scalable & Growing Business for Startups.</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row align-lg-items-center mb-4 pb-2">
            <div class="col-lg-6 col-md-5">
                <div class="section-title text-md-start text-center">
                    <h4 class="title mb-3 mb-md-0">Showcase your <br> Stunning Projects</h4>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-7">
                <div class="text-md-start text-center">
                    <p class="text-muted para-desc mx-auto mb-0">Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.</p>
                </div>
            </div>
        </div>

        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
            {#each portfolioOne.slice(0,6) as item}
                <div>
                    <div class="portfolio modern rounded shadow position-relative overflow-hidden">
                        <div class="position-relative overflow-hidden image">
                            <img src={item.image} class="img-fluid" alt="">
                            <div class="position-absolute start-0 end-0 top-0 bottom-0 overlay"></div>
                        </div>
    
                        <div class="content p-3 bg-white position-absolute bottom-0 start-0 end-0 rounded shadow m-4">
                            <a href="#!" class="text-dark fs-5 fw-medium link-title">{item.title}</a>
                            <p class="text-muted mb-0">{item.name}</p>
                        </div>
                    </div>
                </div>
            {/each}
        </div>
    </div>

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Our Minds</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.</p>
                </div>
            </div>
        </div>
        <TeamOne/>
    </div>

    <div class="container mt-100 mt-60">
        <BusinessClient/>
    </div>

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Blog Or News</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.</p>
                </div>
            </div>
        </div>
        <BlogOne/>
    </div>
</section>

<Footer/>

