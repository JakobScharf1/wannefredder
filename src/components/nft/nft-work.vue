<template>
    <div class="row g-4">
        <div v-for="(item, index) in data" :key="index" class="col-lg-4 col-md-6 col-12">
            <div class="position-relative features text-center p-4">
                <div class="position-relative d-flex justify-content-center">
                    <i :data-feather="item.icon" class="fea icon-md text-primary z-1"></i>
                    <div class="feature-icon bg-soft-primary position-absolute top-0 translate-middle"></div>
                </div>

                <div class="mt-4">
                    <router-link to="/service-detail" class="h5 text-dark link-title">{{item.title}}</router-link>
                    <p class="text-muted mt-3">{{item.desc}}</p>
                    <router-link to="/service-detail" class="text-primary">Learn More <i class="mdi mdi-arrow-right align-middle"></i></router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { ref } from 'vue';

    let data = ref([
        {
            icon:'zap',
            title:'Create Item',
            desc:`Success needs hard work. Don't listen to these 'get rich quick' schemes.`
        },
        {
            icon:'bookmark',
            title:'Collect',
            desc:`Success needs hard work. Don't listen to these 'get rich quick' schemes.`
        },
        {
            icon:'target',
            title:'Sell Item',
            desc:`Success needs hard work. Don't listen to these 'get rich quick' schemes.`
        },
    ])

</script>
