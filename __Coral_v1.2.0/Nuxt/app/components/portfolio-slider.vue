<template>
        <div class="tiny-single-item">
            <div v-for="(item, index) in images" :key="index" class="tiny-slide">
                <img :src="item" class="img-fluid rounded shadow" alt="">
            </div>
        </div>
</template>

<script setup>
import { onMounted, ref } from 'vue';

import bg1 from '@/assets/images/portfolio/1.jpg'
import bg2 from '@/assets/images/portfolio/2.jpg'
import bg3 from '@/assets/images/portfolio/3.jpg'

let images = ref([bg1,bg2,bg3])

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