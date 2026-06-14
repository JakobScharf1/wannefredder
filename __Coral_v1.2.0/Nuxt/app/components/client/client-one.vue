<template>
    <div class="tiny-single-item">
        <div v-for="(item, index) in clientData" :key="index" class="tiny-slide">
            <div class="position-relative overflow-hidden z-1 bg-white rounded shadow p-4 m-2">
                <div class="d-flex align-items-center justify-content-between">
                    <h6 class="mb-0">{{item.tag}}</h6>

                    <ul class="list-unstyled mb-0 text-warning">
                        <li v-for="(el, index) in item.rate" :key="index" class="list-inline-item"><i :class="el"></i></li>
                    </ul>
                </div>

                <p class="text-muted fst-italic mt-2">{{item.desc}}</p>

                <div class="d-flex align-items-center">
                    <img :src="item.image" class="avatar avatar-small rounded-pill shadow" alt="">
                    <div class="ms-2">
                        <h6 class="text-dark small mb-0">{{item.name}}</h6>
                        <small class="text-muted d-block">{{item.position}}</small>
                    </div>
                </div>

                <i class="mdi mdi-format-quote-open text-primary position-absolute top-50 start-50 translate-middle z-n1 testi-icon"></i>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { clientData } from '@/data/data';
    import { onMounted } from 'vue';
    import { tns } from 'tiny-slider/src/tiny-slider';

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