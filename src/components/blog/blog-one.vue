<template>
    <div class="row g-4">
        <div v-for="(item, index) in blogData.slice(0,3)" :key="index" class="col-lg-4 col-md-6 col-12">
            <div class="blog position-relative overflow-hidden shadow rounded p-4">
                <div class="position-relative">
                    <div class="blog-image position-relative overflow-hidden rounded shadow">
                        <img :src="item.image" class="img-fluid" alt="">
                    </div>

                    <div class="position-absolute top-100 start-0 translate-middle-y ms-2">
                        <router-link to="#" class="badge bg-primary">{{item.tag}}</router-link>
                    </div>
                </div>

                <div class="pt-4">
                    <router-link to="/blog-standard-post" class="text-dark title h5">{{item.title}}</router-link>

                    <p class="text-muted my-2">{{item.desc}}</p>

                    <router-link to="/blog-standard-post" class="text-dark read-more">Read More <i class="mdi mdi-chevron-right align-middle"></i></router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { blogData } from '@/data/data';
</script>

<style lang="scss" scoped>

</style>