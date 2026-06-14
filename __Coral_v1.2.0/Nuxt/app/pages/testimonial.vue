<template>
    <div>
        <NavLight/>

        <section class="bg-half-170 d-table w-100" :style="{backgroundImage:`url(${bg})`}">
            <div class="bg-overlay bg-gradient-overlay"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="title-heading text-center">
                            <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Testimonial</h5>
                        </div>
                    </div>
                </div>

                <div class="position-middle-bottom">
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                            <li class="breadcrumb-item"><NuxtLink to="/">Coral</NuxtLink></li>
                            <li class="breadcrumb-item active" aria-current="page">Testimonial</li>
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
                <div class="column-3">
                    <div v-for="(item, index) in clientData" :key="index" class="col-12 mb-3">
                        <div class="position-relative overflow-hidden z-1 bg-white rounded shadow p-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="mb-0">{{item.tag}}</h6>

                                <ul class="list-unstyled mb-0 text-warning">
                                    <li v-for="(el, index) in item.rate" :key="index" class="list-inline-item"><i :class="el"></i></li>
                                </ul>
                            </div>

                            <p class="text-muted fst-italic mt-2">{{item.desc}}</p>

                            <div class="d-flex align-items-center">
                                <img :src="item.image" class="avatar avatar-small rounded-pill shadow" alt="">
                                <div class="ms-2">
                                    <h6 class="text-dark small mb-0">{{item.name}}</h6>
                                    <small class="text-muted d-block">{{item.position}}</small>
                                </div>
                            </div>

                            <i class="mdi mdi-format-quote-open text-primary position-absolute top-50 start-50 translate-middle z-n1 testi-icon"></i>
                        </div>
                    </div>
                </div>
                

                <div class="row justify-content-center">
                    <div class="col mt-4">
                        <div class="text-center">
                            <NuxtLink to="#" class="text-primary">See More <i class="mdi mdi-chevron-right"></i></NuxtLink>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <FooterOne/>

        <ScrollToTop/>
    </div>

    
</template>

<script setup>
    import bg from '@/assets/images/hero/pages.jpg'
    import NavLight from '@/components/navbar/nav-light.vue';
    import { clientData } from '@/data/data';
</script>
