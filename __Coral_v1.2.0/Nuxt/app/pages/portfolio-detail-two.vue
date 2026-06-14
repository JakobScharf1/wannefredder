<template>
    <div>
        <NavLight/>

        <section class="bg-half-170 d-table w-100" :style="{backgroundImage:`url(${bg})`, backgroundPosition:'center'}">
            <div class="bg-overlay bg-gradient-overlay"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="title-heading text-center">
                            <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Artboard Studio</h5>
                        </div>
                    </div>
                </div>

                <div class="position-middle-bottom">
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                            <li class="breadcrumb-item"><NuxtLink to="/">Coral</NuxtLink></li>
                            <li class="breadcrumb-item"><NuxtLink to="#">Portfolio</NuxtLink></li>
                            <li class="breadcrumb-item active" aria-current="page">Artboard Studio</li>
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
                <div id="grid" class="column-4 gap-2">
                    <div v-for="(item, index) in masonaryData.slice(0,8)" :key="index" class="mb-2">
                        <div class="portfolio masonry rounded shadow position-relative overflow-hidden">
                            <div class="position-relative overflow-hidden image">
                                <img :src="item.image" class="img-fluid rounded shadow" alt=""/>
                                <div class="position-absolute start-0 end-0 top-0 bottom-0 overlay rounded bg-black m-4"></div>
                            </div>

                            <div class="content">
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <NuxtLink to="#" @click="openLightbox(index)" class="btn btn-sm btn-icon btn-pills btn-primary lightbox"><i data-feather="camera" class="fea icon-sm"></i></NuxtLink>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <VueEasyLightbox :visible="visible" :imgs="images" :index="index" @hide="visible = false"/>
                
                <div class="row mt-4 g-4">
                    <div class="col-lg-8 col-md-6">
                        <div class="section-title">
                            <h4 class="title mb-4">Project Description</h4>
    
                            <p class="text-muted">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words. This ancient dummy text is also incomprehensible, but it imitates the rhythm of most European languages in Latin script. The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout.</p>
                            <p class="text-muted mb-0">Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. If the fill text is intended to illustrate the characteristics of different typefaces, it sometimes makes sense to select texts containing the various letters and symbols specific to the output language.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="section-title sticky-bar">
                            <h4 class="title mb-4">Project Details</h4>

                            <dl class="row mb-0">
                                <dt class="col-md-4 fw-medium col-5">Client :</dt>
                                <dd class="col-md-8 col-7 text-muted">Calvin Carlo</dd>

                                <dt class="col-md-4 fw-medium col-5">Category :</dt>
                                <dd class="col-md-8 col-7 text-muted">Web Design</dd>

                                <dt class="col-md-4 fw-medium col-5">Date :</dt>
                                <dd class="col-md-8 col-7 text-muted">15th April 2021</dd>

                                <dt class="col-md-4 fw-medium col-5">Website :</dt>
                                <dd class="col-md-8 col-7 text-muted">www.yourdomain.com</dd>

                                <dt class="col-md-4 fw-medium col-5">Location :</dt>
                                <dd class="col-md-8 col-7 text-muted">3/2/64 Mongus Street, UK</dd>
                            </dl>
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
import { ref } from 'vue';
import NavLight from '@/components/navbar/nav-light.vue';
import bg from '@/assets/images/hero/pages.jpg'
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
