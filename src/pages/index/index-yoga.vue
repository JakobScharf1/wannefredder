<template>
    <div>
        <NavDark position="nav-right"/>

        <section class="bg-half-170 d-table w-100 bg-yoga">
            <div class="container position-relative z-1">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title-heading">
                            <span class="badge bg-soft-primary">Welcome to Coral</span>
                            <h1 class="heading my-3">Yoga, Meditation,  <br> and  Wellness for <br> a <span class="text-primary"><span class="typewrite"><vue-typewriter-effect :strings="['Balanced', 'Healthy','Fit & Fine']" /></span> Life</span></h1>
                            <p class="para-desc text-muted">Yoga is a light, which once lit will never dim. The better your practice, the brighter your flame with Coral.</p>
                            <div class="mt-4 pt-2">
                                <router-link to="/services" class="btn btn-outline-primary">Get Started <i class="mdi mdi-arrow-right"></i></router-link>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative">
                            <div class="row">
                                <div class="col-12">
                                    <div class="tiny-single-item-home">
                                        <div class="tiny-slide">
                                            <img :src="hero1" class="img-fluid" alt="">
                                        </div>
                                        <div class="tiny-slide">
                                            <img :src="hero2" class="img-fluid" alt="">
                                        </div>
                                        <div class="tiny-slide">
                                            <img :src="hero3" class="img-fluid" alt="">
                                        </div>
                                        <div class="tiny-slide">
                                            <img :src="hero4" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="position-absolute top-0 start-0 z-n1">
                                <img :src="hero" class="img-fluid" alt="">
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
                                <img :src="about3" class="img-fluid rounded border border-4 shadow" alt="">
                            </div>
                            
                            <div class="position-absolute top-50 end-0">
                                <img :src="about2" class="img-fluid avatar avatar-xl-large w-auto rounded border border-4 shadow" alt="">

                                <div class="position-absolute top-0 start-0 translate-middle">
                                    <router-link to="#!" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="avatar avatar-md-md rounded-pill shadow card d-flex justify-content-center align-items-center lightbox">
                                        <i class="mdi mdi-play mdi-24px text-primary"></i>
                                    </router-link>
                                </div>
                            </div>
                        </div> 
                    </div>

                    <div class="col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                        <div class="section-title ms-lg-4">
                            <h4 class="title mb-3">Shape Your <br> Perfect Body with Coral</h4>
                            <p class="para-desc mx-auto text-muted mb-0">Yoga is a light, which once lit will never dim. The better your practice, the brighter your flame with Coral. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>

                            <div class="mt-4">
                                <router-link to="#" class="btn btn-soft-primary">Check Schedule <i class="mdi mdi-arrow-right"></i></router-link>
                            </div>
                            
                            <div class="row">
                                <div v-for="(item, index) in counterData.slice(0,3)" :key="index" class="col-md-4 col-6 mt-4 pt-3">
                                    <div class="counter-box">
                                        <div class="position-relative">
                                            <i :data-feather="item.icon" class="fea icon-lg mb-3 text-primary"></i>

                                            <div class="position-absolute top-0 translate-middle p-3 bg-soft-primary rounded-circle"></div>
                                        </div>
                                        <h3 class="mb-0 text-dark fw-semibold"><count-up :end-val="item.value" class="d-inline"/>{{item.symbol}}</h3>
                                        <h6 class="counter-head text-muted fw-medium mb-0">{{item.title}}</h6>
                                    </div>    
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
                            <h4 class="title mb-3">Yoga Asanas</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Yoga is a light, which once lit will never dim. The better your practice, the brighter your flame with Coral.</p>
                        </div>
                    </div>
                </div>

                <YogaAsanas/>
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

                <YogaTimetable/>
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
                            <img :src="faqs" class="img-fluid" alt="">

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
                            <h4 class="title mb-3">Meet Our Coaches</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Yoga is a light, which once lit will never dim. The better your practice, the brighter your flame with Coral.</p>
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
import { onMounted } from 'vue';

import hero from '@/assets/images/hero/yoga-hero.png'
import hero1 from '@/assets/images/hero1.png'
import hero2 from '@/assets/images/hero2.png'
import hero3 from '@/assets/images/hero3.png'
import hero4 from '@/assets/images/hero4.png'
import about2 from '@/assets/images/about/yoga2.jpg'
import about3 from '@/assets/images/about/yoga3.jpg'
import faqs from '@/assets/images/faqs.png'

import { tns } from 'tiny-slider/src/tiny-slider';

import VueTypewriterEffect from "vue-typewriter-effect";

import { counterData } from '@/data/data';

import CountUp from 'vue-countup-v3'

import NavDark from '@/components/navbar/nav-dark.vue';
import YogaAsanas from '@/components/yoga/yoga-asanas.vue';
import CtaTwo from '@/components/cta/cta-two.vue';
import BlogOne from '@/components/blog/blog-one.vue';
import FaqOne from '@/components/faq-one.vue';
import YogaTeam from '@/components/team/yoga-team.vue';
import YogaTimetable from '@/components/yoga/yoga-timetable.vue';
import FooterOne from '@/components/footer-one.vue';
import ScrollToTop from '@/components/scroll-to-top.vue';

onMounted(()=>{
    tns({
        container: '.tiny-single-item-home',
        items: 1,
        controls: false,
        mouseDrag: true,
        loop: true,
        rewind: true,
        autoplay: true,
        autoplayButtonOutput: false,
        autoplayTimeout: 3000,
        speed: 400,
        gutter: 0,
        nav:false
    });
})


</script>
