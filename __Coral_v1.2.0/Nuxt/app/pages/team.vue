<template>
    <div>
        <NavLight/>

        <section class="bg-half-170 d-table w-100" :style="{backgroundImage:`url(${bg})`, backgroundPosition:'center'}">
            <div class="bg-overlay bg-gradient-overlay"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="title-heading text-center">
                            <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Our Team Members</h5>
                        </div>
                    </div>
                </div>

                <div class="position-middle-bottom">
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                            <li class="breadcrumb-item"><NuxtLink to="/">Coral</NuxtLink></li>
                            <li class="breadcrumb-item active" aria-current="page">Team</li>
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
                    <div v-for="(item, index) in teamData" :key="index" class="col-lg-3 col-md-6 col-12">
                        <div class="card team team-primary bg-transparent text-center mb-5">
                            <div class="card-img team-image d-inline-block mx-auto rounded overflow-hidden">
                                <img :src="item.image" class="img-fluid" alt="">

                                <ul class="list-unstyled team-social mb-0">
                                    <li v-for="(el, index) in item.social" :key="index" class="mt-1"><NuxtLink to="#" class="btn btn-sm btn-pills btn-icon"><i :data-feather="el" class="icons fea-social"></i></NuxtLink></li>
                                </ul>
                            </div>

                            <div class="content bg-white mx-4 p-4 z-1 rounded shadow">
                                <NuxtLink to="#" class="text-dark h5 mb-0 title">{{item.name}}</NuxtLink>
                                <h6 class="text-muted mb-0 fw-normal">{{item.position}}</h6>
                            </div>
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
    import NavLight from '@/components/navbar/nav-light.vue';
    import bg from '@/assets/images/hero/pages.jpg';

    import { teamData } from '@/data/data';
</script>
