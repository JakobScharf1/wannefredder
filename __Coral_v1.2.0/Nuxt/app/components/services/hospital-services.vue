<template>
    <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 g-4 mt-2">
        <div v-for="(item, index) in servicesData" :key="index" class="col">
            <div class="position-relative features fea-medical text-center rounded shadow p-4">
                <div class="position-relative d-flex justify-content-center">
                    <img :src="item.image" class="avatar avatar-md-sm z-1" alt="">
                    <div class="feature-icon bg-soft-primary position-absolute top-50 start-50 translate-middle avatar avatar-small"></div>
                </div>

                <div class="mt-4">
                    <NuxtLink to="/service-detail" class="h5 text-dark link-title">{{item.title}}</NuxtLink>
                    <p class="text-muted mt-3">{{item.desc}}</p>
                    <NuxtLink to="/service-detail" class="text-primary">Read More <i class="mdi mdi-arrow-right align-middle"></i></NuxtLink>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import image1 from '@/assets/images/service/cardiology.svg'
    import image2 from '@/assets/images/service/neurology.svg'
    import image3 from '@/assets/images/service/orthopaedic.svg'
    import image4 from '@/assets/images/service/gynecology.svg'
    import image5 from '@/assets/images/service/dermatology.svg'

    let servicesData = [
        {
            image:image1,
            title:'Cardiology',
            desc:'Success needs hard work & quality work.'
        },
        {
            image:image2,
            title:'Neurology',
            desc:'Success needs hard work & quality work.'
        },
        {
            image:image3,
            title:'Orthopaedic',
            desc:'Success needs hard work & quality work.'
        },
        {
            image:image4,
            title:'Gynecology',
            desc:'Success needs hard work & quality work.'
        },
        {
            image:image5,
            title:'Dermatology',
            desc:'Success needs hard work & quality work.'
        },
    ]

</script>
