<template>
    <div class="position-relative">
            <div class="tiny-single-item">
                <div v-for="(item, index) in nftData.slice(0,3)" :key="index" class="tiny-slide">
                    <div class="m-2">
                        <div class="nft-item p-4 rounded shadow bg-white">
                            <div class="position-relative">
                                <div class="nft-image position-relative overflow-hidden rounded shadow">
                                    <img :src="item.image" class="img-fluid" alt="">
                                    <div class="bg-overlay bg-black"></div>
                                    <div class="bid-button position-absolute top-50 translate-y-middle start-0 end-0 text-center">
                                        <NuxtLink to="/nft-detail" class="btn btn-sm btn-primary me-1"><i data-feather="shopping-cart" class="fea icon-sm align-middle me-1"></i> Buy Now</NuxtLink>
                                        <NuxtLink to="/nft-detail" class="btn btn-sm btn-primary"><i data-feather="zap" class="fea icon-sm align-middle me-1"></i> Bid Now</NuxtLink>
                                    </div>
                                </div>

                                <div class="position-absolute top-0 start-0 m-3">
                                    <NuxtLink to="/creator-profile"><img :src="item.client" class="avatar avatar-md-sm rounded-pill shadow img-thumbnail" alt=""/></NuxtLink>
                                </div>
                            </div>

                            <div class="content pt-4 position-relative">
                                <NuxtLink to="/nft-detail" class="text-dark link-title h6">{{item.name}}</NuxtLink>

                                <div class="d-flex justify-content-between mt-2">
                                    <span class="rate text-primary">{{item.value}}</span>
                                    <span class="text-dark">{{item.item}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="position-absolute top-0 start-0 translate-middle z-n1">
            <p class="avatar avatar-small bg-gradient-primary rounded mb-0 spin-anything" style="opacity: 0.1;"></p>
        </div>

        <div class="position-absolute top-100 start-100 translate-middle z-n1">
            <p class="avatar avatar-small bg-gradient-primary rounded-pill mb-0 zoom-in-out" style="opacity: 0.1;"></p>
        </div>
    </div>
</template>

<script setup>

import { onMounted } from 'vue';
import { tns } from 'tiny-slider/src/tiny-slider';
import { nftData } from '~/data/data';

onMounted(()=>{
    tns({
        container: '.tiny-single-item',
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

<style lang="scss" scoped>

</style>