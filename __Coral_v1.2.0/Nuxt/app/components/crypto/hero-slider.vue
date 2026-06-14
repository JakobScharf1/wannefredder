<template>
    <div class="col-12">
        <div class="tiny-three-item-icon">
            <div v-for="(item, index) in cryptoData" :key="index" class="tiny-slide">
                <div class="position-relative overflow-hidden rounded shadow bg-white p-4 m-2">
                    <div class="position-relative d-flex align-items-center justify-content-between z-1">
                        <div class="d-flex align-items-center">
                            <img :src="item.image" class="rounded-pill shadow bg-white avatar avatar-md-sm" alt="">
                            
                            <div class="ms-3">
                                <h6 class="mb-1"><NuxtLink to="#" class="text-dark link-title">{{item.name1}} ({{item.name2}})</NuxtLink></h6>
                                <h6 class="small mb-0" :class="item.text">{{item.price}}</h6>
                            </div>
                        </div>
                        
                        <div class="ms-2">
                            <span class="badge bg-success rounded-pill" :class="item.bg">{{item.change1}}</span>
                        </div>
                    </div>
                    
                    <div class="position-absolute top-50 start-100 translate-middle">
                        <img :src="item.image" class="avatar avatar-md-md opacity-10 me-5" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { cryptoData } from '@/data/data';
    import { onMounted } from 'vue';
    import { tns } from 'tiny-slider/src/tiny-slider';

    onMounted(()=>{
        tns({
            container: '.tiny-three-item-icon',
            controls: true,
            mouseDrag: true,
            loop: true,
            rewind: true,
            autoplay: true,
            autoplayButtonOutput: false,
            autoplayTimeout: 3000,
            navPosition: "bottom",
            controlsText: ['<i class="mdi mdi-chevron-left "></i>', '<i class="mdi mdi-chevron-right"></i>'],
            nav: false,
            speed: 400,
            gutter: 0,
            responsive: {
                992: {
                    items: 3
                },

                767: {
                    items: 2
                },

                320: {
                    items: 1
                },
            },
        });
    })


</script>
