<template>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="features-absolute">
                <div class="row row-cols-lg-5 row-cols-md-3 row-cols-lg-2 row-cols-lg-1 g-4">
                    <div v-for="(item, index) in data" :key="index" class="col">
                        <div class="features rounded shadow p-4 bg-primary bg-gradient">
                            <img :src="item.image" class="avatar avatar-md-sm" alt="">

                            <div class="mt-3">
                                <router-link to="#" class="text-white fw-semibold">{{item.title}}</router-link>
                                <small class="text-white-50 d-block mt-1">{{item.value}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { ref } from 'vue'
    import hosting1 from '@/assets/images/hosting/1.png'
    import hosting2 from '@/assets/images/hosting/2.png'
    import hosting3 from '@/assets/images/hosting/3.png'
    import hosting4 from '@/assets/images/hosting/4.png'
    import hosting5 from '@/assets/images/hosting/5.png'

    let data = ref([
        {
            image:hosting1,
            title:'Shared Hosting',
            value:'Starting $2.99/month'
        },
        {
            image:hosting2,
            title:'VPS Hosting',
            value:'Starting $2.99/month'
        },
        {
            image:hosting3,
            title:'Dedicated Server',
            value:'Starting $2.99/month'
        },
        {
            image:hosting4,
            title:'Cloud Hosting',
            value:'Starting $2.99/month'
        },
        {
            image:hosting5,
            title:'Reseller Hosting',
            value:'Starting $2.99/month'
        },
    ])

</script>
