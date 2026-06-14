<template>
    <div>
        <NavTagline/>
        <NavLightTwo/>

        <section class="bg-half-170 bg-primary bg-gradient">
            <div class="bg-overlay bg-transparent" :style="{backgroundImage:`url(${bg})`, backgroundPosition:'center'}"></div>
            <div class="container mt-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="title-heading">
                            <h1 class="display-4 text-white my-3">Get Web Hosting at just <span class="text-danger">$2.99/month</span>*</h1>
                            <p class="para-desc text-white-50">Select your hosting solution and we will help you narrow down our best high-speed options to fit your needs with Coral.</p>
                            
                            <div class="subscribe-form mt-4 py-2">
                                <form class="mx-auto">
                                    <input type="email" id="SubscribeEmail" class="border bg-white rounded-pill" style="opacity: 0.85;" required placeholder="Enter your email">
                                    <button type="submit" class="btn btn-pills btn-danger">Subscribe Now</button>
                                </form>
                            </div>

                            <span class="text-white-50">*3-day trial without credit card</span>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="ms-lg-4">
                            <img :src="hero" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <HostingServices/>
            </div>

            <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <img :src="about" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-7 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                        <div class="section-title ms-lg-5">
                            <h6 class="text-primary text-uppercase">About Us</h6>
                            <h4 class="title mb-3">About Coral Hosting</h4>

                            <p class="text-muted para-desc">Select your hosting solution and we will help you narrow down our best high-speed options to fit your needs with Coral.</p>
                            <p class="text-muted para-desc mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora facere commodi ex ipsum, optio vitae rerum quisquam ducimus eaque minima voluptas iste consequatur nostrum. Harum rem laudantium error quidem tempora.</p>

                            <ul class="list-unstyled text-muted mb-0 mt-3">
                                <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                                <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                                <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Create your own skin to match your brand</li>
                            </ul>

                            <div class="mt-4">
                                <router-link to="#" class="btn btn-link primary fs-6">Read More <i class="mdi mdi-arrow-right align-middle"></i></router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid position-relative pt-5 mt-100 mt-60">
                <div class="bg-overlay opacity-25 bg-transparent" :style="{backgroundImage:`url(${map})`, backgroundPosition:'center'}"></div>
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="section-title text-center mb-4 pb-2">
                                <h4 class="title mb-3">Trusted by more than 10K users</h4>
                                <p class="text-muted para-desc mb-0 mx-auto">Select your hosting solution and we will help you narrow down our best high-speed options to fit your needs with Coral.</p>
                            </div>
                        </div>
                    </div>
                    <CounterOne/>
                </div>
            </div>

            <div class="container-fluid mt-100 mt-60">
                <div class="rounded-3 position-relative overflow-hidden py-5 px-4" :style="{backgroundImage:`url(${cta})`, backgroundAttachment:'fixed'}">
                    <div class="bg-overlay bg-primary opacity-75"></div>
                    <div class="row py-md-5 py-4">
                        <div class="container">
                            <div class="row justify-content-center align-items-center g-4">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="section-title">
                                        <h6 class="text-white title-dark mb-3">Hosting Flash Sale</h6>
                                        <h2 class="text-white title-dark mb-0">Hosting Flash Sale Web Hosting, Domain Name and Hosting Center Solutions</h2>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul class="list-unstyled mb-0 ms-lg-5">
                                        <li class="text-white-50 my-2"><i data-feather="arrow-right-circle" class="fea icon-ex-md me-1"></i> Ultrafast Data Read/Write Speeds</li>
                                        <li class="text-white-50 my-2"><i data-feather="arrow-right-circle" class="fea icon-ex-md me-1"></i> Enterprise Grade Hardware</li>
                                        <li class="text-white-50 my-2"><i data-feather="arrow-right-circle" class="fea icon-ex-md me-1"></i> Highest Data Protection Reliability</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-3">Client Stories</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Select your hosting solution and we will help you narrow down our best high-speed options to fit your needs with Coral.</p>
                        </div>
                    </div>
                </div>

                <ClientTwo/>
            </div>

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-3">Explore Our Hosting Pricing</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Select your hosting solution and we will help you narrow down our best high-speed options to fit your needs with Coral.</p>
                        </div>
                    </div>
                </div>

                <PricingOne/>
            </div>

            <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="position-relative">
                            <img :src="faqs" class="img-fluid" alt="">

                            <div class="modern-app-round round-small"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                        <div class="section-title ms-lg-3">
                            <h4 class="title mb-3">Frequently Asked Questions</h4>
                            <p class="text-muted para-desc mb-0">Select your hosting solution and we will help you narrow down our best high-speed options to fit your needs with Coral.</p>
                            <FaqOne/>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <FooterOne/>

        <ScrollToTop/>
        
    </div>
</template>

<script setup>
import NavLightTwo from '@/components/navbar/nav-light-two.vue';
import NavTagline from '@/components/navbar/nav-tagline.vue';
import bg from '@/assets/images/hero/bg-hosting.png'
import hero from '@/assets/images/hero/hosting-hero.png'
import faqs from '@/assets/images/faqs.png'
import about from '@/assets/images/about.png'
import map from '@/assets/images/map.png'
import cta from '@/assets/images/hero/pages.jpg'
import FaqOne from '@/components/faq-one.vue';
import PricingOne from '@/components/pricing-one.vue';
import ClientTwo from '@/components/client/client-two.vue';
import CounterOne from '@/components/counter/counter-one.vue';
import HostingServices from '@/components/services/hosting-services.vue';
import FooterOne from '@/components/footer-one.vue';
import ScrollToTop from '@/components/scroll-to-top.vue';

</script>
