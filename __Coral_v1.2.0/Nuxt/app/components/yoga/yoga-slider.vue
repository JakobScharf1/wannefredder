<template>
    <div class="tiny-single-item-home">
        <div class="tiny-slide">
            <img :src="hero1" class="img-fluid" alt="">
        </div>
        <div class="tiny-slide">
            <img :src="hero2" class="img-fluid" alt="">
        </div>
        <div class="tiny-slide">
            <img :src="hero3" class="img-fluid" alt="">
        </div>
        <div class="tiny-slide">
            <img :src="hero4" class="img-fluid" alt="">
        </div>
    </div>
</template>

<script setup>
import { onMounted } from 'vue';
import hero1 from '@/assets/images/hero1.png'
import hero2 from '@/assets/images/hero2.png'
import hero3 from '@/assets/images/hero3.png'
import hero4 from '@/assets/images/hero4.png'
import { tns } from 'tiny-slider/src/tiny-slider';

onMounted(()=>{
    tns({
        container: '.tiny-single-item-home',
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