<template>
    <div>
        <NftNavLight/>

        <section class="bg-half-170 d-table w-100" :style="{backgroundImage:`url(${bg})`, backgroundPosition:'center'}">
            <div class="bg-overlay bg-gradient-overlay"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="title-heading text-center">
                            <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Explore Items</h5>
                        </div>
                    </div>
                </div>

                <div class="position-middle-bottom">
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                            <li class="breadcrumb-item"><router-link to="/">Coral</router-link></li>
                            <li class="breadcrumb-item active" aria-current="page">Explore</li>
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
                    <div v-for="(item, index) in nftData" :key="index" class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="nft-item p-4 rounded shadow bg-white">
                            <div class="position-relative">
                                <div class="nft-image position-relative overflow-hidden rounded shadow">
                                    <img :src="item.image" class="img-fluid" alt="">
                                    <div class="bg-overlay bg-black"></div>
                                    <div class="bid-button position-absolute bottom-0 start-0 end-0 text-center pb-3">
                                        <router-link :to="`/nft-detail/${item.id}`" class="btn btn-sm btn-icon btn-pills btn-primary me-1" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Buy Now"><i data-feather="shopping-cart" class="fea icon-sm align-middle"></i></router-link>
                                        <router-link :to="`/nft-detail/${item.id}`" class="btn btn-sm btn-icon btn-pills btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Bid Now"><i data-feather="zap" class="fea icon-sm align-middle"></i></router-link>
                                    </div>
                                </div>

                                <div class="position-absolute top-0 start-0 m-3">
                                    <router-link to="/creator-profile"><img :src="item.client" class="avatar avatar-md-sm rounded-pill shadow img-thumbnail" alt=""/></router-link>
                                </div>
                            </div>

                            <div class="content pt-4 position-relative">
                                <router-link :to="`/nft-detail/${item.id}`" class="text-dark link-title h6">{{item.name}}</router-link>

                                <div class="d-flex justify-content-between mt-2">
                                    <span class="rate text-primary">{{item.value}}</span>
                                    <span class="text-dark">{{item.item}}</span>
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
import NftNavLight from '@/components/navbar/nft-nav-light.vue';
import bg from '@/assets/images/hero/pages.jpg'
import { nftData } from '@/data/data';
import FooterOne from '@/components/footer-one.vue';
import ScrollToTop from '@/components/scroll-to-top.vue';

import * as bootstrap from 'bootstrap';
import { onMounted } from 'vue';

onMounted(() => {
  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
  tooltipTriggerList.forEach(tooltipTriggerEl => {
    new bootstrap.Tooltip(tooltipTriggerEl);
  });
});

</script>