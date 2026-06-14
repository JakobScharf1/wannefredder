<template>
    <div>
        <NftNavLight/>

        <section class="bg-half-170 d-table w-100" :style="{backgroundImage:`url(${bg})`}">
            <div class="bg-overlay bg-gradient-overlay"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="title-heading text-center">
                            <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Creators</h5>
                        </div>
                    </div>
                </div>

                <div class="position-middle-bottom">
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                            <li class="breadcrumb-item"><router-link to="/">Coral</router-link></li>
                            <li class="breadcrumb-item active" aria-current="page">Creators</li>
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
                    <div v-for="(item, index) in creator" :key="index" class="col-lg-3 col-md-4 col-sm-2 col-12">
                        <div class="position-relative rounded shadow overflow-hidden">
                            <div class="bg-gradient-primary p-4 pt-5"></div>
                            <div class="position-relative">
                                <div class="position-absolute top-0 start-50 translate-middle">
                                    <img :src="item.image" class="avatar avatar-small rounded-pill shadow-sm img-thumbnail bg-light" alt="">
                                </div>
                                <div class="content text-center p-4">
                                    <div class="mt-4">
                                        <router-link to="/creator-profile" class="text-dark h6 link-title mb-0">{{item.name}}</router-link>
                                    </div>
                                    <small class="text-muted">{{item.title}}</small>

                                    <div class="mt-3">
                                        <router-link to="#" class="btn btn-sm btn-soft-primary">Follow</router-link>
                                    </div>
                                </div>
                            </div>
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
import NftNavLight from '@/components/navbar/nft-nav-light.vue';
import bg from '@/assets/images/hero/pages.jpg';
import { creator } from '@/data/data';
import FooterOne from '@/components/footer-one.vue';
import ScrollToTop from '@/components/scroll-to-top.vue';

</script>