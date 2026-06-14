<template>
    <div>
        <NftNavDark/>

        <section class="section mt-5 mt-lg-0">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-5 col-md-6">
                        <div class="sticky-bar">
                            <img :src="data && data.image ? data.image : nftImg" class="img-fluid rounded shadow" alt="">
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-6">
                        <div class="title-heading">
                            <h4 class="h3 mb-0">{{data && data.name ? data.name : 'Deep Sea Phantasy'}}</h4>
                        </div>

                        <div class="row">
                            <div class="col-12 mt-4">
                                <h6>Current Bid</h6>
                                <h4 class="mb-0">4.85 ETH</h4>
                                <small class="mb-0 text-muted">$450.48USD</small>
                            </div>

                            <div class="col-12 mt-4">
                                <router-link to="/nft-detail" class="btn btn-sm btn-primary me-1"><i data-feather="shopping-cart" class="fea icon-sm align-middle me-1"></i> Buy Now</router-link>
                                <router-link to="/nft-detail" class="btn btn-sm btn-primary"><i data-feather="zap" class="fea icon-sm align-middle me-1"></i> Bid Now</router-link>
                            </div>
                        </div>

                        <p class="text-muted mt-4">Hey guys! New exploration about NFT Marketplace Web Design, this time I'm inspired by one of my favorite NFT website called Coral (with crypto payment)! What do you think?</p>
                        <p class="text-muted">What does it mean? Biomechanics is the study of the structure, function and motion of the mechanical aspects of biological systems, at any level from whole organisms to organs, cells and cell organelles, using the methods of mechanics. Biomechanics is a branch of biophysics.</p>
                        <h6>Owner</h6>

                        <div class="creators creator-primary d-flex align-items-center">
                            <div class="position-relative">
                                <img :src="data && data.client ? data.client : client" class="avatar avatar-md-sm shadow-md rounded-pill" alt="">
                            </div>

                            <div class="ms-3">
                                <h6 class="mb-0"><router-link to="/creators" class="text-dark name">@StreetBoy</router-link></h6>
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
import NftNavDark from '@/components/navbar/nft-nav-dark.vue';
import nftImg from '@/assets/images/nft/1.jpg'
import client from '@/assets/images/team/1.jpg'
import FooterOne from '@/components/footer-one.vue';
import ScrollToTop from '@/components/scroll-to-top.vue';

import { useRoute } from 'vue-router'
import { nftData } from '@/data/data';

const route = useRoute();

const data = nftData.find((item)=>item.id === parseInt(route.params.id))

</script>
