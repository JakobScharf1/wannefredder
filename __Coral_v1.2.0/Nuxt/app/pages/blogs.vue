<template>
    <div>
        <NavLight/>

        <section class="bg-half-170 d-table w-100" :style="{backgroundImage:`url(${bg})`, backgroundPosition:'center'}">
            <div class="bg-overlay bg-gradient-overlay"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="title-heading text-center">
                            <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Latest Articles</h5>
                        </div>
                    </div>
                </div>

                <div class="position-middle-bottom">
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                            <li class="breadcrumb-item"><NuxtLink to="/">Coral</NuxtLink></li>
                            <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>

        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>

        <section class="section">
            <div class="container">
                <div class="row g-4">
                    <div v-for="(item, index) in blogData" :key="index" class="col-lg-4 col-md-6 col-12">
                        <div class="blog position-relative overflow-hidden shadow rounded p-4">
                            <div class="position-relative">
                                <div class="blog-image position-relative overflow-hidden rounded shadow">
                                    <img :src="item.image" class="img-fluid" alt="">
                                </div>

                                <div class="position-absolute top-100 start-0 translate-middle-y ms-2">
                                    <NuxtLink to="#" class="badge bg-primary">{{item.tag}}</NuxtLink>
                                </div>
                            </div>

                            <div class="pt-4">
                                <NuxtLink :to="`/blog-standard-post/${item.id}`" class="text-dark title h5">{{item.title}}</NuxtLink>

                                <p class="text-muted my-2">{{item.desc}}</p>

                                <NuxtLink :to="`/blog-standard-post/${item.id}`" class="text-dark read-more">Read More <i class="mdi mdi-chevron-right align-middle"></i></NuxtLink>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mt-4">
                        <ul class="pagination justify-content-center mb-0">
                            <li class="page-item">
                                <NuxtLink class="page-link" to="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="mdi mdi-chevron-left align-middle fs-6"></i></span>
                                </NuxtLink>
                            </li>
                            <li class="page-item"><NuxtLink class="page-link" to="#">1</NuxtLink></li>
                            <li class="page-item active"><NuxtLink class="page-link" to="#">2</NuxtLink></li>
                            <li class="page-item"><NuxtLink class="page-link" to="#">3</NuxtLink></li>
                            <li class="page-item">
                                <NuxtLink class="page-link" to="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="mdi mdi-chevron-right align-middle fs-6"></i></span>
                                </NuxtLink>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <FooterOne/>

        <ScrollToTop/>

    </div>
</template>

<script setup>
    import NavLight from '@/components/navbar/nav-light.vue';
    import bg from '@/assets/images/hero/pages.jpg'
    import { blogData } from '@/data/data';
</script>
