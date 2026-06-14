<script>
    // @ts-nocheck 
	import Countup  from 'svelte-countup';

    import bg from '../../assets/images/hero/bg-squre.png'
    import bg2 from '../../assets/images/hero/bg-digital.jpg'
    import about1 from '../../assets/images/about/1.jpg'
    import about4 from '../../assets/images/about/4.jpg'
    import faqImage from '../../assets/images/faqs.svg'

    import Navdark from "../../components/navbar/navdark.svelte";
    import AboutImage from "../../components/about-image.svelte";
    import FeatureOne from "../../components/feature/feature-one.svelte";
    import CtaTwo from '../../components/cta/cta-two.svelte';
    import BlogOne from '../../components/blog-one.svelte';
    import TeamOne from '../../components/team/team-one.svelte';
    import FaqOne from '../../components/faq-one.svelte';
    import Footer from '../../components/footer.svelte';

    import { counterData, patnerData, portfolioOne } from "../../data/data";

    import Tobii from 'tobii';
    import { onMount } from "svelte";

    let tobii;

    onMount(() => {
        tobii = new Tobii();
    });
    
</script>

<Navdark/>

<section class="bg-half-170 bg-soft-primary overflow-hidden" style="background: url({bg}) center center;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-heading">
                    <div class="row align-items-end">
                        <div class="col-lg-9 col-12">
                            <div class="position-relative">
                                <span class="clip-text clip-text-image text-uppercase fw-bold position-relative z-1 lh-base" style="background-image: url({bg2});">Digital <br> Marketing <br> Agency.</span>

                                <div class="position-absolute top-50 start-100 translate-middle">
                                    <div class="tilt-3d margin-absolute">
                                        <div class="tilt-3d-trigger">
                                            <div class="trigger"></div>
                                            <div class="trigger"></div>
                                            <div class="trigger"></div>
                                            <div class="trigger"></div>
                                            <div class="trigger"></div>
                                            <div class="trigger"></div>
                                            <div class="trigger"></div>
                                            <div class="trigger"></div>
                                            <div class="trigger"></div>
                                                
                                            <div class="tilt-3d-image position-relative">
                                                <img src={about1} class="avatar avatar-ex-large h-auto mover mb-5" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="position-absolute top-100 start-0 translate-middle">
                                    <div class="tilt-3d margin-absolute">
                                        <div class="tilt-3d-trigger">
                                            <div class="trigger"></div>
                                            <div class="trigger"></div>
                                            <div class="trigger"></div>
                                            <div class="trigger"></div>
                                            <div class="trigger"></div>
                                            <div class="trigger"></div>
                                            <div class="trigger"></div>
                                            <div class="trigger"></div>
                                            <div class="trigger"></div>
                                                
                                            <div class="tilt-3d-image position-relative">
                                                <img src={about4} class="avatar avatar-ex-large h-auto mover-2 mt-5" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-3 col-12">
                            <p class="text-muted para-desc mb-0">We're a full-service creative digital marketing agency, collaborating with brands all over the world.</p>
                            
                            <div class="mt-4">
                                <a href="#!" class="btn btn-primary">Get Consultation <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-4 bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-12 my-2">
                <div class="text-slider">
                    <ul class="list-inline mb-0 move-text">
                        {#each patnerData as item}
                            <li class="list-inline-item px-sm-5 px-4 mb-0">
                                <img src={item} class="img-fluid img-white" alt="">
                            </li>
                        {/each}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2 order-lg-1 order-3">
                <div class="row g-4">
                    {#each counterData.slice(0,3) as item}
                        <div class="col-lg-12 col-md-4 col-6">
                            <div class="counter-box text-center">
                                <div class="position-relative">
                                    <i data-feather={item.icon} class="fea icon-md mb-2 text-primary"></i>
                                </div>
                                <h3 class="text-dark fw-semibold"><Countup class="counter-value" value={item.value}/>{item.symbol}</h3>
                                <h6 class="counter-head text-muted fw-medium mb-0">{item.title}</h6>
                            </div>    
                        </div>
                    {/each}
                </div>
            </div>

            <div class="col-lg-4 col-md-6 order-lg-2 order-1">
                <AboutImage/>
            </div>

            <div class="col-lg-6 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0 order-lg-3 order-2">
                <div class="section-title ms-lg-4">
                    <h6 class="text-primary text-uppercase">What we are?</h6>
                    <h4 class="title mb-3">Coral is a business that <br> provides services related <br> to online marketing.</h4>

                    <p class="text-muted para-desc">We're a full-service creative digital marketing agency, collaborating with brands all over the world.</p>

                    <p class="text-muted para-desc mb-0">Our SEO experts optimize your website to rank higher on search engines, ensuring increased visibility and organic traffic. From keyword research to on-page optimization and link building, we employ the latest techniques improve your search engine rankings.</p>

                    <div class="mt-4">
                        <a href="#!" class="btn btn-primary">About Us <i class="mdi mdi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Our services will make <br> your product successful</h4>
                    <p class="text-muted para-desc mx-auto mb-0">We're a full-service creative digital marketing agency, collaborating with brands all over the world.</p>
                </div>
            </div>
        </div>
        <FeatureOne/>
    </div>
</section>

<CtaTwo/>

<section class="section">
    <div class="container">
        <div class="row align-lg-items-center mb-4 pb-2">
            <div class="col-lg-6 col-md-5">
                <div class="section-title text-md-start text-center">
                    <h4 class="title mb-3 mb-md-0">Our Portfolio</h4>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-7">
                <div class="text-md-start text-center">
                    <p class="text-muted para-desc mx-auto mb-0">We're a full-service creative digital marketing agency, collaborating with brands all over the world.</p>
                </div>
            </div>
        </div>

        <div class="row g-4">
            {#each portfolioOne as item}
                <div class="col-lg-3 col-md-4">
                    <div class="portfolio modern rounded shadow position-relative overflow-hidden">
                        <div class="position-relative overflow-hidden image">
                            <img src={item.image} class="img-fluid" alt="">
                        </div>

                        <div class="content p-3 bg-white position-absolute bottom-0 start-0 end-0 rounded m-4">
                            <a href="#!" class="text-dark fs-5 fw-medium link-title">{item.title}</a>
                            <p class="text-muted mb-0">{item.name}</p>
                        </div>
                    </div>
                </div>
            {/each}
        </div>
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
                <div class="section-title ms-lg-3">
                    <h4 class="title mb-3">Frequently Asked Questions</h4>
                    <p class="text-muted para-desc mb-0">We're a full-service creative digital marketing agency, collaborating with brands all over the world.</p>
                    <FaqOne/>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Our Minds</h4>
                    <p class="text-muted para-desc mx-auto mb-0">We're a full-service creative digital marketing agency, collaborating with brands all over the world.</p>
                </div>
            </div>
        </div>
        <TeamOne/>
    </div>

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Blog Or News</h4>
                    <p class="text-muted para-desc mx-auto mb-0">We're a full-service creative digital marketing agency, collaborating with brands all over the world.</p>
                </div>
            </div>
        </div>
        <BlogOne/>
    </div>
</section>

<Footer/>