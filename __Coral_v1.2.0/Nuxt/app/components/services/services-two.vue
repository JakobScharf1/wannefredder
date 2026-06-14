<template>
    <div class="row align-items-center g-4">
        <div v-for="(item, index) in servicesData.slice(0,3)" :key="index" class="col-lg-4 col-md-6 col-12">
            <div class="position-relative features text-center rounded shadow p-4 pt-5">
                <div class="position-relative d-flex justify-content-center">
                    <i :data-feather="item.icon" class="fea icon-md text-primary z-1"></i>
                    <div class="feature-icon bg-soft-primary position-absolute top-0 translate-middle"></div>
                </div>

                <div class="mt-4">
                    <NuxtLink to="/service-detail" class="h5 text-dark link-title">{{item.title}}</NuxtLink>
                    <p class="text-muted mt-3">{{item.desc}}</p>
                    <NuxtLink to="/service-detail" class="text-primary">Learn More <i class="mdi mdi-arrow-right align-middle"></i></NuxtLink>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { servicesData } from '@/data/data';
</script>