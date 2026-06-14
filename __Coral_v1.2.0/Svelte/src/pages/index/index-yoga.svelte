<script>
    // @ts-nocheck
    import Countup from 'svelte-countup';
    import { tns } from 'tiny-slider/src/tiny-slider';
    import Typewriter,{loop} from 'svelte-typewriter'

    import { Link } from "svelte-routing";
    import { onMount } from "svelte";

    import bg from '../../assets/images/hero/yoga-hero.png'
    import bg1 from '../../assets/images/hero1.png'
    import bg2 from '../../assets/images/hero2.png'
    import bg3 from '../../assets/images/hero3.png'
    import bg4 from '../../assets/images/hero4.png'
    import about1 from '../../assets/images/about/yoga3.jpg'
    import about2 from '../../assets/images/about/yoga2.jpg'
    import faqImg from '../../assets/images/faqs.png'
    
    import { counterData } from "../../data/data";
    
    import Navdark from "../../components/navbar/navdark.svelte";
    import Asanas from '../../components/yoga/asanas.svelte';
    import CtaTwo from '../../components/cta/cta-two.svelte';
    import BlogOne from '../../components/blog-one.svelte';
    import FaqOne from '../../components/faq-one.svelte';
    import YogaTeam from '../../components/team/yoga-team.svelte';
    import YogaTab from '../../components/yoga/yoga-tab.svelte';
    import Footer from '../../components/footer.svelte';

    import Tobii from 'tobii';

    let tobii;
    
    onMount(()=>{
        tobii = new Tobii();
        tns({
            container: '.tiny-single-item-no-nav',
            items: 1,
            controls: false,
            mouseDrag: true,
            loop: true,
            rewind: true,
            autoplay: true,
            autoplayButtonOutput: false,
            autoplayTimeout: 5000,
            navPosition: "bottom",
            nav: false,
            speed: 400,
            gutter: 16,
        });
    })

    let images = [bg1, bg2, bg3,  bg4]
</script>

<Navdark/>

<section class="bg-half-170 d-table w-100 bg-yoga">
    <div class="container position-relative z-1">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title-heading">
                    <span class="badge bg-soft-primary">Welcome to Coral</span>
                    <h1 class="heading my-3">Yoga, Meditation,  <br> and  Wellness for a   <span class="text-primary"><Typewriter mode="loop" cursor={false} delay="1000" interval="100" class=" typing" ><span class="text-primary typewrite d-inline">Fit & Fine</span> Life</Typewriter> </span></h1>
                    <p class="para-desc text-muted">Yoga is a light, which once lit will never dim. The better your practice, the brighter your flame with Coral.</p>
                    <div class="mt-4 pt-2">
                        <Link to="/services" class="btn btn-outline-primary">Get Started <i class="mdi mdi-arrow-right"></i></Link>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="position-relative">
                    <div class="row">
                        <div class="col-12">
                            <div class="tiny-single-item-no-nav">
                                {#each images as item}
                                    <div class="tiny-slide">
                                        <img src={item} class="img-fluid" alt="">
                                    </div>
                                {/each}
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute top-0 start-0 z-n1">
                        <img src={bg} class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="position-relative">
                    <div class="me-lg-5 me-4">
                        <img src={about1} class="img-fluid rounded border border-4 shadow" alt="">
                    </div>
                    
                    <div class="position-absolute top-50 end-0">
                        <img src={about2} class="img-fluid avatar avatar-xl-large w-auto rounded border border-4 shadow" alt="">

                        <div class="position-absolute top-0 start-0 translate-middle">
                            <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" aria-label="link" class="avatar avatar-md-md rounded-pill shadow card d-flex justify-content-center align-items-center lightbox">
                                <i class="mdi mdi-play mdi-24px text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                <div class="section-title ms-lg-4">
                    <h4 class="title mb-3">Shape Your <br> Perfect Body with Coral</h4>
                    <p class="para-desc mx-auto text-muted mb-0">Yoga is a light, which once lit will never dim. The better your practice, the brighter your flame with Coral. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>

                    <div class="mt-4">
                        <a href="#schedule" class="btn btn-soft-primary">Check Schedule <i class="mdi mdi-arrow-right"></i></a>
                    </div>
                    
                    <div class="row">
                        {#each counterData.slice(0,3) as item}
                            <div class="col-md-4 col-6 mt-4 pt-3">
                                <div class="counter-box">
                                    <div class="position-relative">
                                        <i data-feather={item.icon} class="fea icon-lg mb-3 text-primary"></i>

                                        <div class="position-absolute top-0 translate-middle p-3 bg-soft-primary rounded-circle"></div>
                                    </div>
                                    <h3 class="mb-0 text-dark fw-semibold"><Countup value={item.value}/>{item.symbol}</h3>
                                    <h6 class="counter-head text-muted fw-medium mb-0">{item.title}</h6>
                                </div>   
                            </div>
                        {/each}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Yoga Asanas</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Yoga is a light, which once lit will never dim. The better your practice, the brighter your flame with Coral.</p>
                </div>
            </div>
        </div>
       <Asanas/>
    </div>
</section>

<CtaTwo/>

<section class="section" id="schedule">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Yoga Schedule</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Yoga is a light, which once lit will never dim. The better your practice, the brighter your flame with Coral.</p>
                </div>
            </div>
        </div>

        <YogaTab/>
    </div>

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Meet Our Coaches</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Yoga is a light, which once lit will never dim. The better your practice, the brighter your flame with Coral.</p>
                </div>
            </div>
        </div>
        <YogaTeam/>
    </div>

    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="position-relative">
                    <img src={faqImg} class="img-fluid" alt="">

                    <div class="modern-app-round round-small"></div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                <div class="section-title mb-4 ms-lg-3">
                    <h4 class="title mb-3">Frequently Asked Questions</h4>
                    <p class="text-muted para-desc mb-0">Yoga is a light, which once lit will never dim. The better your practice, the brighter your flame with Coral.</p>
                
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
                    <p class="text-muted para-desc mx-auto mb-0">Yoga is a light, which once lit will never dim. The better your practice, the brighter your flame with Coral.</p>
                </div>
            </div>
        </div>

        <BlogOne/>
    </div>
</section>

<Footer/>
