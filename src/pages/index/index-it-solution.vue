<template>
    <div>
        <NavTagline/>
        <NavDark bg="" tagline="tagline-height" position="nav-left"/>

        <section class="bg-half-120 pb-0 d-table w-100 bg-it" :style="{backgroundImage:`url(${bg})`, backgroundPosition:'center'}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="title-heading mb-5">
                            <h6 class="text-primary">Welcome to Coral</h6>
                            <h1 class="heading fw-bold mb-3">IT Solutions & <br><span class="text-primary typewrite"><vue-typewriter-effect :strings="['Software', 'Application','Website']" /></span> Development</h1>
                            <p class="para-desc text-muted d-lg-block d-d-none d-block">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                            <div class="mt-4">
                                <router-link to="/services" class="btn btn-primary m-1">Get Started <i class="mdi mdi-arrow-right"></i></router-link>
                                <router-link to="#!" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-icon btn-pills btn-primary m-1 lightbox"><i data-feather="video" class="icons"></i></router-link><span class="fw-bold text-uppercase small align-middle ms-2">Watch Now</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <img :src="hero" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="features-absolute">
                            <div class="row align-items-center g-4">
                                <div v-for="(item, index) in servicesData.slice(0,4)" :key="index" class="col-lg-3 col-md-6 col-12">
                                    <div class="position-relative features bg-white text-center rounded shadow p-4 pt-5">
                                        <div class="position-relative d-flex justify-content-center">
                                            <i :data-feather="item.icon" class="fea icon-md text-primary z-1"></i>
                                            <div class="feature-icon bg-soft-primary position-absolute top-0 translate-middle"></div>
                                        </div>
                
                                        <div class="mt-4">
                                            <router-link to="/service-detail" class="h5 text-dark link-title">{{item.title}}</router-link>
                                            <p class="text-muted mt-3">{{item.desc}}</p>
                                            <router-link to="/service-detail" class="text-primary">Learn More <i class="mdi mdi-arrow-right align-middle"></i></router-link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            <h4 class="title mb-3">We believe that every <br> problem has a solution</h4>
                            <p class="text-muted para-desc mb-0">As a leading college in Auckland, we look to engage with our student beyond the conventional design and development school relationship, becoming a partner to the people and companies we work with.</p>

                            <div class="row">
                                <div v-for="(item, index) in counterData.slice(0,3)" :key="index" class="col-lg-4 col-6 mt-4">
                                    <div class="counter-box">
                                        <div class="position-relative">
                                            <i :data-feather="item.icon" class="fea icon-lg mb-2 text-primary"></i>
                                        </div>
                                        <h3 class="text-dark fw-semibold"><count-up :end-val="item.value" class="d-inline"/>{{item.symbol}}</h3>
                                        <h6 class="counter-head text-muted fw-medium mb-0">{{item.title}}</h6>
                                    </div>    
                                </div>
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
                            <h4 class="title mb-3">Pricing Plans</h4>
                            <p class="text-muted para-desc mx-auto mb-0">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                        </div>
                    </div>
                </div>
                <PricingOne/>
            </div>

            <div class="container mt-100 mt-60">
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
                            <img :src="faqImg" class="img-fluid" alt="">

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

        <FooterOne/>

        <ScrollToTop/>

    </div>
</template>

<script setup>
import VueTypewriterEffect from "vue-typewriter-effect";
import CountUp from 'vue-countup-v3'

import NavDark from '@/components/navbar/nav-dark.vue';
import NavTagline from '@/components/navbar/nav-tagline.vue';
import hero from '@/assets/images/hero.png'
import bg from '@/assets/images/hero/bg-it.png'
import faqImg from '@/assets/images/faqs.svg'
import { counterData, servicesData } from "@/data/data";
import AboutImage from "@/components/about/about-image.vue";
import CtaOne from "@/components/cta/cta-one.vue";
import PricingOne from "@/components/pricing-one.vue";
import TeamOne from "@/components/team/team-one.vue";
import FaqOne from "@/components/faq-one.vue";
import BlogOne from "@/components/blog/blog-one.vue";
import FooterOne from "@/components/footer-one.vue";
import ScrollToTop from "@/components/scroll-to-top.vue";

</script>
