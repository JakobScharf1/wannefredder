<template>
    <section class="cta-video-section position-relative overflow-hidden" :style="{backgroundImage:`url(${bg})`, backgroundAttachment:'fixed'}">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title text-white title-dark mb-3">Join the fastest growing Coral NFTs</h4>
                        <p class="text-white-50 para-desc mb-0 mx-auto">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div v-for="(item, index) in data" :key="index" class="col-md-6">
                    <div class="card p-4 rounded-md shadow bg-white">
                        <h4 class="mb-4">{{item.title}}</h4>
                        <p class="text-muted mb-0">{{item.desc}}</p>

                        <div class="mt-3">
                            <NuxtLink to="/aboutus" class="btn btn-link primary text-dark">Read More <i class="mdi mdi-arrow-right"></i></NuxtLink>
                        </div>
                        <div class="py-4"></div>
                        <div class="position-absolute bottom-0 end-0">
                            <img :src="item.image" class="avatar avatar-medium opacity-25" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
    import { ref } from 'vue'

    import bg from '@/assets/images/hero/pages.jpg'
    
    import about1 from '@/assets/images/community.png'
    import about2 from '@/assets/images/united.png'

    let data = ref([
        {
            image:about1,
            title:'Join our community: Coral',
            desc:`Welcome to the future, you can buy and sell awesome artworks form here.`
        },
        {
            image:about2,
            title:'Learn more about us: Coral',
            desc:`Welcome to the future, you can buy and sell awesome artworks form here.`
        },
    ])
</script>
