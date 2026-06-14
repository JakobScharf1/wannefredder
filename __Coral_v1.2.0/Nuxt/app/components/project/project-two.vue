<template>
    <div class="row g-4">
        <div v-for="(item, index) in projectData" :key="index" class="col-lg-3 col-md-4">
            <div class="portfolio modern rounded shadow position-relative overflow-hidden">
                <div class="position-relative overflow-hidden image">
                    <img :src="item.image" class="img-fluid" alt="">
                </div>

                <div class="content p-3 bg-white position-absolute bottom-0 start-0 end-0 rounded m-4">
                    <NuxtLink to="#" class="text-dark fs-5 fw-medium link-title">{{item.title}}</NuxtLink>
                    <p class="text-muted mb-0">{{item.name}}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { projectData } from '@/data/data';
</script>
