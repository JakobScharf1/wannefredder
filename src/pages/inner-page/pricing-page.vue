<template>
    <div>
        <section class="bg-half-170 d-table w-100" :style="{backgroundImage:`url(${bg})`, backgroundPosition:'center'}">
            <div class="bg-overlay bg-gradient-overlay"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="title-heading text-center">
                            <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Pricing Plans</h5>
                        </div>
                    </div>
                </div>

                <div class="position-middle-bottom">
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                            <li class="breadcrumb-item"><router-link to="/">Coral</router-link></li>
                            <li class="breadcrumb-item active" aria-current="page">Pricing</li>
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
                <PricingOne/>
            </div>

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="mb-4 title">FAQs</h4>
                            <p class="para-desc mx-auto text-muted">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-9 mt-4">
                        <FaqOne/>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
import bg from '@/assets/images/hero/pages.jpg'
import FaqOne from '@/components/faq-one.vue';
import PricingOne from '@/components/pricing-one.vue';
</script>
