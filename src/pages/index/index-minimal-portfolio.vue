<template>
    <div id="boxed-layput" :style="{backgroundImage:`url(${bg})`}">
        <div class="boxed">
            <NavDark position="nav-right"/>

            <section class="section overflow-hidden">
                <div class="container">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-7 col-md-6 order-2 order-md-1">
                            <div class="title-heading">
                                <h1 class="display-4 fw-bold mb-3">Discover top creative <br> <span class="text-primary">talents</span> & <span class="text-primary">portfolios</span></h1>
                                <p class="para-desc text-muted mb-0">An independent design agency based in Newyork.</p>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-6 order-1 order-md-2">
                            <div class="position-relative">
                                <img :src="logo" class="img-fluid opacity-25" alt="">
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <router-link to="#!" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="avatar avatar-md-md rounded-pill shadow bg-primary d-flex justify-content-center align-items-center lightbox">
                                        <i class="mdi mdi-play mdi-24px text-white"></i>
                                    </router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section pt-1">
                <div class="container">
                    <div class="column-4 gap-0" id="grid">
                        <div v-for="(item, index) in masonaryData" :key="index" class="">
                            <div class="portfolio masonry position-relative overflow-hidden">
                                <div class="position-relative overflow-hidden image">
                                    <img :src="item.image" class="img-fluid" alt="">
                                    <div class="position-absolute start-0 end-0 top-0 bottom-0 overlay rounded bg-black m-4"></div>
                                </div>

                                <div class="content">
                                    <div class="title-body p-3 position-absolute start-0 end-0 m-4">
                                        <a href="" class="link-title text-white fs-5 fw-medium">Artboard Studio</a>
                                        <p class="text-white-50 mb-0">Custom Branding</p>
                                    </div>

                                    <div class="p-3 position-absolute top-0 end-0 m-4">
                                        <router-link to="#"  @click="openLightbox(index)" class="btn btn-sm btn-icon btn-pills btn-primary lightbox"><i data-feather="camera" class="fea icon-sm"></i></router-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <VueEasyLightbox :visible="visible" :imgs="images" :index="index" @hide="visible = false"/>

                    <div class="row">
                        <div class="col">
                            <div class="mt-4 text-center">
                                <router-link to="#" class="btn btn-primary">See more works <i class="mdi mdi-arrow-right"></i></router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <FooterOne/>

            <ScrollToTop/>
        </div>
    </div>
</template>

<script setup>
    import { ref } from 'vue';
    import bg from '@/assets/images/hero/bg-squre.png'
    import logo from '@/assets/images/logo-icon.png'

    import NavDark from '@/components/navbar/nav-dark.vue';
    import FooterOne from '@/components/footer-one.vue';
    import ScrollToTop from '@/components/scroll-to-top.vue';

    import { masonaryData } from '@/data/data';
    import VueEasyLightbox from 'vue-easy-lightbox'

    const visible = ref(false)
    const index = ref(0)

    const images = ref(masonaryData.map(item => item.image)) // image URLs

    function openLightbox(i) {
        index.value = i
        visible.value = true
    }
</script>