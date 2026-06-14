<template>
    <div>
        <NavLight/>

        <section class="bg-half-170 d-table w-100" :style="{backgroundImage:`url(${bg})`, backgroundPosition:'center'}">
            <div class="bg-overlay bg-gradient-overlay"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="title-heading text-center">
                            <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Portfolio</h5>
                        </div>
                    </div>
                </div>

                <div class="position-middle-bottom">
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                            <li class="breadcrumb-item"><router-link to="/">Coral</router-link></li>
                            <li class="breadcrumb-item"><router-link to="#">Portfolio</router-link></li>
                            <li class="breadcrumb-item"><router-link to="#">Creative</router-link></li>
                            <li class="breadcrumb-item active" aria-current="page">Two Columns</li>
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
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="row g-4">
                            <div v-for="(item, index) in portfolioData" :key="index" class="col-md-6">
                                <div class="portfolio creative rounded shadow position-relative overflow-hidden">
                                    <div class="position-relative overflow-hidden image">
                                        <img :src="item.image" class="img-fluid" alt="">
                                        <div class="position-absolute start-0 end-0 top-0 bottom-0 overlay bg-dark"></div>
                                    </div>
        
                                    <div class="content position-absolute bottom-0 start-0 end-0 m-4">
                                        <router-link to="#" class="text-white fs-5 fw-medium link-title">{{item.title}}</router-link>
                                        <p class="text-white-50 mb-0">{{item.desc}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mt-4">
                        <ul class="pagination justify-content-center mb-0">
                            <li class="page-item">
                                <router-link class="page-link" to="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="mdi mdi-chevron-left align-middle fs-6"></i></span>
                                </router-link>
                            </li>
                            <li class="page-item"><router-link class="page-link" to="#">1</router-link></li>
                            <li class="page-item active"><router-link class="page-link" to="#">2</router-link></li>
                            <li class="page-item"><router-link class="page-link" to="#">3</router-link></li>
                            <li class="page-item">
                                <router-link class="page-link" to="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="mdi mdi-chevron-right align-middle fs-6"></i></span>
                                </router-link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <FooterOne/>

        <ScrollToTop/>
        
    </div>
</template>

<script setup>

import NavLight from '@/components/navbar/nav-light.vue';
import bg from '@/assets/images/hero/pages.jpg'
import { portfolioData } from '@/data/data';
import FooterOne from '@/components/footer-one.vue';
import ScrollToTop from '@/components/scroll-to-top.vue';


</script>
