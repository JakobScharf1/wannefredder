<template>
    <div>
        <section class="bg-half-170 d-table w-100" :style="{backgroundImage:`url(${bg})`}">
            <div class="bg-overlay bg-gradient-overlay"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="title-heading text-center">
                            <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">FAQs</h5>
                        </div>
                    </div>
                </div>

                <div class="position-middle-bottom">
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                            <li class="breadcrumb-item"><router-link to="/">Coral</router-link></li>
                            <li class="breadcrumb-item active" aria-current="page">FAQs</li>
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
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-7 col-12">
                        <div class="section-title">
                            <h4>Buying Product</h4>
                        </div>
                        <FaqOne/>

                        <div class="section-title mt-5">
                            <h4>General Questions</h4>
                        </div>
                        <FaqOne/>

                        <div class="section-title mt-5">
                            <h4>Payments Questions</h4>
                        </div>
                        <FaqOne/>

                        <div class="section-title mt-5">
                            <h4>Support Questions</h4>
                        </div>
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
</script>