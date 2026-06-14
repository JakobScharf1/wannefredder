<template>
    <div class="row g-4">
        <div v-for="(item, index) in nftData.slice(3,11)" :key="index" class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="nft-item p-4 rounded shadow bg-white">
                <div class="position-relative">
                    <div class="nft-image position-relative overflow-hidden rounded shadow">
                        <img :src="item.image" class="img-fluid" alt="">
                        <div class="bg-overlay bg-black"></div>
                        <div class="bid-button position-absolute bottom-0 start-0 end-0 text-center pb-3">
                            <NuxtLink :to="`/nft-detail/${item.id}`" class="btn btn-sm btn-icon btn-pills btn-primary me-1" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Buy Now"><i data-feather="shopping-cart" class="fea icon-sm align-middle"></i></NuxtLink>
                            <NuxtLink :to="`/nft-detail/${item.id}`" class="btn btn-sm btn-icon btn-pills btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Bid Now"><i data-feather="zap" class="fea icon-sm align-middle"></i></NuxtLink>
                        </div>
                    </div>

                    <div class="position-absolute top-0 start-0 m-3">
                        <NuxtLink to="creator-profile.html"><img :src="item.client" class="avatar avatar-md-sm rounded-pill shadow img-thumbnail" alt=""></NuxtLink>
                    </div>
                </div>

                <div class="content pt-4 position-relative">
                    <NuxtLink :to="`/nft-detail/${item.id}`" class="text-dark link-title h6">{{item.name}}</NuxtLink>

                    <div class="d-flex justify-content-between mt-2">
                        <span class="rate text-primary">{{item.value}}</span>
                        <span class="text-dark">{{item.item}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { onMounted} from 'vue';

    import { nftData } from '@/data/data';

    import * as bootstrap from 'bootstrap';

    import feather from 'feather-icons';

    onMounted(() => {
        feather.replace();
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        tooltipTriggerList.forEach(tooltipTriggerEl => {
            new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>
