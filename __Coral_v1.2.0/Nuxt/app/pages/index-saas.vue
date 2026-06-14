<template>
    <div>
        <NavLight/>
        <section class="bg-hero d-table w-100 bg-dark overflow-hidden" :style="{backgroundImage:`url(${bg})`, backgroundPosition:'center'}">
            <div class="bg-overlay bg-gradient-overlay-2"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="title-heading margin-top-100">
                            <span class="badge bg-primary bg-gradient">Boost your creativity</span>
                            <h1 class="display-4 text-white my-3">The easy way to manage <br> Product analytics</h1>
                            <p class="para-desc mx-auto text-muted">Explore our diverse industry solutions, meticulously crafted to meet unique demand. helps you be more.</p>
                            <div class="subscribe-form mt-4 pt-2">
                                <form class="mx-auto">
                                    <input type="email" id="SubscribeEmail" class="border bg-white rounded-pill" style="opacity: 0.85;" required placeholder="Type your email">
                                    <button type="submit" class="btn btn-pills btn-primary">Get Started</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="position-relative">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="tilt-3d margin-absolute">
                            <div class="tilt-3d-trigger">
                                <div class="trigger"></div>
                                <div class="trigger"></div>
                                <div class="trigger"></div>
                                <div class="trigger"></div>
                                <div class="trigger"></div>
                                <div class="trigger"></div>
                                <div class="trigger"></div>
                                <div class="trigger"></div>
                                <div class="trigger"></div>
                                    
                                <div class="tilt-3d-image position-relative">
                                    <img :src="hero" class="img-fluid rounded-4 border-primary" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section overflow-hidden">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-3">A powerful easy-to-use platform</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                        </div>
                    </div>
                </div>
                <SaasServices/>
            </div>

            <div class="container mt-100 mt-60">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="position-relative">
                            <img :src="about1" class="img-fluid rounded-2" alt="">

                            <div class="modern-app-round round-small"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="section-title ms-lg-5">
                            <h4 class="title mb-3">Boost conversions, <br> uncover opportunities</h4>
                            <p class="text-muted para-desc mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                        
                            <ul class="list-unstyled text-muted mb-0 mt-3">
                                <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                                <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                                <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Create your own skin to match your brand</li>
                            </ul>

                            <div class="mt-4">
                                <NuxtLink to="/aboutus" class="btn btn-soft-primary">About Us <i class="mdi mdi-arrow-right align-middle"></i></NuxtLink>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-100 mt-60">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 col-md-6 order-1 order-md-2">
                        <div class="position-relative">
                            <img :src="about2" class="img-fluid rounded-2" alt="">
                            <div class="modern-app-round round-small"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 order-md-1 order-2">
                        <div class="section-title me-lg-5">
                            <h4 class="title mb-3">Optimize page layouts <br> and refine your content</h4>
                            <p class="text-muted para-desc mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                        
                            <ul class="list-unstyled text-muted mb-0 mt-3">
                                <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                                <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                                <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Create your own skin to match your brand</li>
                            </ul>

                            <div class="mt-4">
                                <NuxtLink to="/aboutus" class="btn btn-soft-primary">About Us <i class="mdi mdi-arrow-right align-middle"></i></NuxtLink>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-3">Customer's Review</h4>
                            <p class="text-muted para-desc mx-auto mb-0">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                        </div>
                    </div>
                </div>
                <ClientOnly>
                    <ClientTwo/>
                </ClientOnly>
            </div>

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-3">Blog Or News</h4>
                            <p class="text-muted para-desc mx-auto mb-0">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                        </div>
                    </div>
                </div>
                <BlogOne/>
            </div>
        </section>

        <FooterOne/>

        <ScrollToTop/>
    </div>
</template>

<script setup>
    import bg from '~/assets/images/hero/bg.png'
    import hero from '~/assets/images/hero/hero.png'
    import about1 from '~/assets/images/1.png'
    import about2 from '~/assets/images/2.png'
    
    import NavLight from '~/components/navbar/nav-light.vue';
    import SaasServices from '~/components/services/saas-services.vue';
</script>
