<template>
    <div>
        <NavLight/>

        <section class="bg-half-170 d-table w-100" :style="{backgroundImage:`url(${bg})`,backgroundPosition:'center'}">
            <div class="bg-overlay bg-gradient-overlay"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="title-heading text-center">
                            <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">About Us</h5>
                        </div>
                    </div>
                </div>

                <div class="position-middle-bottom">
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                            <li class="breadcrumb-item"><NuxtLink to="/">Coral</NuxtLink></li>
                            <li class="breadcrumb-item active" aria-current="page">About us</li>
                        </ul>
                    </nav>
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

        <section class="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <AboutImage/>
                    </div>

                    <div class="col-lg-7 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                        <div class="section-title ms-lg-5">
                            <h6 class="text-primary text-uppercase">What we do?</h6>
                            <h4 class="title mb-0">We create world-class <br> digital products materials <br> that communicate clearly.</h4>

                            <h5 class="mt-3">Qualified Team:</h5>
                            <p class="text-muted para-desc mb-0">As a leading college in Auckland, we look to engage with our student beyond the conventional design and development school relationship, becoming a partner to the people and companies we work with.</p>

                            <h5 class="mt-3">Global Offices:</h5>
                            <p class="text-muted para-desc mb-0">As a leading digital company in Auckland, we look to engage with our clients beyond the conventional relationship, becoming a partner to the people.</p>

                            <div class="mt-4">
                                <NuxtLink to="#" class="btn btn-link primary fs-6">Start A Project <i class="mdi mdi-arrow-right align-middle"></i></NuxtLink>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="section-title">
                            <h6 class="text-primary text-uppercase">What we achieved?</h6>
                            <h4 class="title mb-3">Beyond Conventional <br> Agencies.</h4>
                            <p class="text-muted para-desc mb-0">As a leading college in Auckland, we look to engage with our student beyond the conventional design and development school relationship, becoming a partner to the people and companies we work with.</p>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                        <div class="position-relative">
                            <div class="row">
                                <div v-for="(item, index) in counterData" :key="index" class="col-6 mt-4">
                                    <div class="p-4 rounded bg-white shadow-lg">
                                        <div class="counter-box text-center">
                                            <div class="position-relative d-flex justify-content-center">
                                                <i :data-feather="item.icon" class="fea icon-lg mb-3 text-primary"></i>

                                                <div class="position-absolute top-0 translate-middle p-3 bg-soft-primary rounded-circle"></div>
                                            </div>
                                            <h3 class="mb-0 text-dark fw-semibold"><count-up :end-val="item.value" class="d-inline"/>{{item.symbol}}</h3>
                                            <h6 class="counter-head text-muted fw-medium mb-0">{{item.title}}</h6>
                                        </div>    
                                    </div>
                                </div>
                            </div>

                            <div class="position-absolute top-50 start-50 translate-middle z-n1">
                                <div class="bg-primary rounded opacity-75 p-5"><div class="p-5"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <ClientOnly>
            <CtaTwo/>
        </ClientOnly>

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
        </section>

        <FooterOne/>

        <ScrollToTop/>
        
    </div>
</template>

<script setup>
import bg from '@/assets/images/hero/pages.jpg'

import { counterData } from '@/data/data';

import CountUp from 'vue-countup-v3'
import NavLight from '~/components/navbar/nav-light.vue';

</script>
