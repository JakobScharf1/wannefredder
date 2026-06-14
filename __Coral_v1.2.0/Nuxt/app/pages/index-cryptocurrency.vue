<template>
    <div>
        <NavLight/>

        <section class="bg-half-260 position-relative overflow-hidden pb-5" :style="{backgroundImage:`url(${bg})`, backgroundPosition:'top', backgroundRepeat:'no-repeat'}">
            <div class="bg-overlay bg-gradient-overlay"></div>
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="title-heading position-relative z-1 margin-top-100">
                            <h1 class="display-4 text-white title-dark lh-base mb-4">New Digital App for <br> Cryptocurrency</h1>
                            <p class="para-desc mx-auto text-white-50">Our platform reaches people all over the world, hereby we are trusted as the best platform for crypto trading.</p>
                            <div class="mt-4 pt-2">
                                <NuxtLink to="/services" class="btn btn-lg btn-pills btn-primary m-1">Join Now</NuxtLink>
                                <a href="#!" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-lg btn-icon btn-pills btn-soft-primary m-1 lightbox"><i data-feather="video" class="icons"></i></a><span class="fw-bold small text-uppercase text-white title-dark align-middle ms-2">Watch Now</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="position-absolute top-0 end-0 translate-middle-y">
                    <img :src="coin1" class="avatar avatar-large mover" alt="">
                </div>

                <div class="position-absolute bottom-0 start-0">
                    <img :src="coin2" class="avatar avatar-large mover" alt="">
                </div>
            </div>

            <div class="container mt-100 mt-60">
                <div class="row">
                    <ClientOnly>
                        <HeroSlider/>
                    </ClientOnly>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <img :src="about" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-7 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                        <div class="section-title ms-lg-5">
                            <h4 class="title mb-3">Moving your Existing Solution <br> for Cryptocurrency</h4>
                            <p class="text-muted para-desc mb-0">Our platform reaches people all over the world, hereby we are trusted as the best platform for crypto trading.</p>

                            <ul class="list-unstyled text-muted mb-0 mt-3">
                                <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                                <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                                <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Create your own skin to match your brand</li>
                            </ul>

                            <div class="mt-4">
                                <NuxtLink to="#" class="btn btn-link primary fs-6">Read More <i class="mdi mdi-arrow-right align-middle"></i></NuxtLink>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-3">Cryptocurrency Market</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Our platform reaches people all over the world, hereby we are trusted as the best platform for crypto trading.</p>
                        </div>
                    </div>
                </div>
                <CryptoTable/>
            </div>

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-3">Become a Crypto Trader</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Our platform reaches people all over the world, hereby we are trusted as the best platform for crypto trading.</p>
                        </div>
                    </div>
                </div>

                <CryptoTrader/>
            </div>

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-3">Customer's Review</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Our platform reaches people all over the world, hereby we are trusted as the best platform for crypto trading.</p>
                        </div>
                    </div>
                </div>
                <ClientOnly>
                    <ClientTwo/>
                </ClientOnly>
            </div>

            <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-5 col-12">
                        <img :src="image1" class="img-fluid mx-auto d-block" alt="">
                    </div>

                    <div class="col-lg-7 col-md-7 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="section-title">
                            <div class="alert alert-light alert-pills text-dark" role="alert">
                                <span class="badge bg-primary rounded-pill me-1">Apps</span>
                                <span class="content">Download now <i class="mdi mdi-arrow-right align-middle"></i></span>
                            </div>
                            <h4 class="title mb-3">Available for your <br> Smartphones</h4>
                            <p class="text-muted para-desc mb-0">Our platform reaches people all over the world, hereby we are trusted as the best platform for crypto trading.</p>
                            <div class="my-4">
                                <NuxtLink to="#"><img :src="app" class="me-2" height="50" alt=""/></NuxtLink>
                                <NuxtLink to="#"><img :src="playstore" height="50" alt=""/></NuxtLink>
                            </div>

                            <div class="d-inline-block">
                                <div class="pt-4 d-flex align-items-center border-top">
                                    <i data-feather="smartphone" class="fea icon-md me-2 text-primary"></i>
                                    <div class="content">
                                        <h6 class="mb-0">Install app now on your cellphones</h6>
                                        <NuxtLink to="#" class="text-primary h6">Learn More <i class="mdi mdi-arrow-right"></i></NuxtLink>  
                                    </div>
                                </div>
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
    import bg from '~/assets/images/hero/bg-crypto.jpg'
    import coin1 from '~/assets/images/bitcoin.png'
    import coin2 from '~/assets/images/ethereum.png'
    import image1 from '~/assets/images/01.png'
    import app from '~/assets/images/app.png'
    import about from '~/assets/images/bitcoin.svg'
    import playstore from '~/assets/images/playstore.png'
    
    import NavLight from '~/components/navbar/nav-light.vue';
    import HeroSlider from '~/components/crypto/hero-slider.vue';
   
</script>
