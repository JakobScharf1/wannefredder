<template>
    <div>
        <NavLight/>

        <section class="bg-half-170 d-table w-100" :style="{backgroundImage:`url(${bg})`}">
            <div class="bg-overlay bg-gradient-overlay"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="title-heading text-center">
                            <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Services / Features</h5>
                        </div>
                    </div>
                </div>

                <div class="position-middle-bottom">
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                            <li class="breadcrumb-item"><router-link to="/">Coral</router-link></li>
                            <li class="breadcrumb-item active" aria-current="page">Services</li>
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
                <div class="row g-4">
                    <div v-for="(item, index) in servicesData" :key="index" class="col-lg-4 col-md-6 col-12">
                        <div class="position-relative features text-center rounded shadow p-4 pt-5">
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
        </section>

        <CtaTwo/>

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
import CtaTwo from '@/components/cta/cta-two.vue';
import FooterOne from '@/components/footer-one.vue';
import NavLight from '@/components/navbar/nav-light.vue';
import ScrollToTop from '@/components/scroll-to-top.vue';
import TeamOne from '@/components/team/team-one.vue';
import { servicesData } from '@/data/data';


</script>

<style lang="scss" scoped>

</style>