<template>
    <div>
        <NavDark bg="" tagline="" position="nav-right"/>

        <section class="bg-half-170 bg-soft-primary overflow-hidden" :style="{backgroundImage:`url(${bg})`, backgroundPosition:'center'}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title-heading">
                            <div class="row align-items-end">
                                <div class="col-lg-9 col-12">
                                    <div class="position-relative">
                                        <span class="clip-text clip-text-image text-uppercase fw-bold position-relative z-1 lh-base" :style="{backgroundImage:`url(${bg2})`, backgroundPosition:'center'}">Digital <br> Marketing <br> Agency.</span>

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
                                                        <img :src="about1" class="avatar avatar-ex-large h-auto mover mb-5" alt="">
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
                                                        <img :src="about4" class="avatar avatar-ex-large h-auto mover-2 mt-5" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-lg-3 col-12">
                                    <p class="text-muted para-desc mb-0">We're a full-service creative digital marketing agency, collaborating with brands all over the world.</p>
                                    
                                    <div class="mt-4">
                                        <NuxtLink to="#" class="btn btn-primary">Get Consultation <i class="mdi mdi-arrow-right"></i></NuxtLink>
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
                                <li v-for="(item, index) in partnerImage" :key="index" class="list-inline-item px-sm-5 px-4 mb-0">
                                    <img :src="item" class="img-fluid img-white" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-lg-2 order-lg-1 order-3">
                        <div class="row g-4">
                            <div v-for="(item, index) in counterData.slice(0,3)" :key="index" class="col-lg-12 col-md-4 col-6">
                                <div class="counter-box text-center">
                                    <div class="position-relative">
                                        <i :data-feather="item.icon" class="fea icon-md mb-2 text-primary"></i>
                                    </div>
                                    <h3 class="text-dark fw-semibold"><count-up :end-val="item.value" class="d-inline"/>{{item.symbol}}</h3>
                                    <h6 class="counter-head text-muted fw-medium mb-0">{{item.title}}</h6>
                                </div>    
                            </div>
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
                                <NuxtLink to="#" class="btn btn-primary">About Us <i class="mdi mdi-arrow-right"></i></NuxtLink>
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
                <ServicesTwo/>
            </div>
        </section>

        <ClientOnly>
            <CtaTwo/>
        </ClientOnly>

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
                <ProjectTwo/>
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

        <FooterOne/>
        <ScrollToTop/>
    </div>
</template>

<script setup>
import CountUp from 'vue-countup-v3'
import { counterData, partnerImage } from '~/data/data';

import bg from '~/assets/images/hero/bg-squre.png'
import bg2 from '~/assets/images/hero/bg-digital.jpg'
import about1 from '~/assets/images/about/1.jpg'
import about4 from '~/assets/images/about/4.jpg'
import faqImg from '~/assets/images/faqs.svg'

import NavDark from '~/components/navbar/nav-dark.vue';

</script>
