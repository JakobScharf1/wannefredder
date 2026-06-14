<template>
    <div class="row g-4">
        <div v-for="(item, index) in data" :key="index" class="col-lg-3 col-md-6 col-12">
            <div class="position-relative features text-center rounded p-4">
                <div class="position-relative d-flex justify-content-center">
                    <img :src="item.image" class="avatar avatar-large" alt="">
                    <div class="feature-icon bg-soft-primary position-absolute top-0 translate-middle avatar avatar-large"></div>
                </div>

                <div class="mt-4">
                    <NuxtLink to="/service-detail" class="h5 text-dark link-title">{{item.name}}</NuxtLink>
                    <p class="text-muted mt-3">{{item.desc}}</p>
                    <NuxtLink to="/service-detail" class="text-primary">Learn More <i class="mdi mdi-arrow-right align-middle"></i></NuxtLink>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import asan1 from '@/assets/images/asana/ardha_padmasana.png'
    import asan2 from '@/assets/images/asana/bhujangasana.png'
    import asan3 from '@/assets/images/asana/halasana.png'
    import asan4 from '@/assets/images/asana/natarajasana.png'
    import { ref } from 'vue'

    let data = ref([
        {
            image:asan1,
            name:'Ardha Padmasana',
            desc:`Success needs hard work. Don't listen to these 'get rich quick' schemes.`
        },
        {
            image:asan2,
            name:'Bhujangasana',
            desc:`Success needs hard work. Don't listen to these 'get rich quick' schemes.`
        },
        {
            image:asan3,
            name:'Halasana',
            desc:`Success needs hard work. Don't listen to these 'get rich quick' schemes.`
        },
        {
            image:asan4,
            name:'Natarajasana',
            desc:`Success needs hard work. Don't listen to these 'get rich quick' schemes.`
        },
    ])
</script>
