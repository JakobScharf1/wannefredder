<template>
    <div>
        <NftNavDark/>

        <section class="bg-half-170 overflow-hidden">
            <span class="modern-app-round top-50 start-50 translate-middle"></span>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="title-heading">
                            <h1 class="heading mb-3">Discover and collect <span class="text-gradient-primary">extraordinary</span> NFT <span class="text-gradient-primary">artworks</span></h1>
                            <p class="para-desc text-muted">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
                            <div class="mt-4 pt-2">
                                <NuxtLink to="/nft-explore" class="btn btn-primary me-1"><i class="mdi mdi-camera-outline align-middle"></i> Explore</NuxtLink>
                                <NuxtLink to="#" class="btn btn-soft-primary">Sell <i class="mdi mdi-arrow-right align-middle"></i></NuxtLink>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <ClientOnly>
                            <NftSlider/>
                        </ClientOnly>
                    </div>
                </div>
            </div>
        </section>
        <section class="section pt-0">
            <div class="container">
                <div class="row align-items-end mb-4 pb-2">
                    <div class="col-md-8">
                        <div class="section-title">
                            <h4 class="title mb-3">Explore Hot Products</h4>
                            <p class="text-muted mb-0">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="text-end d-md-block d-none">
                            <NuxtLink to="/nft-explore" class="btn btn-link primary text-dark">See More <i class="mdi mdi-arrow-right"></i></NuxtLink>
                        </div>
                    </div>
                </div>
                <ClientOnly>
                    <ExploreProduct/>
                </ClientOnly>

                <div class="row">
                    <div class="col">
                        <div class="text-center d-md-none d-block">
                            <NuxtLink to="/nft-explore" class="btn btn-link primary text-dark">See More <i class="mdi mdi-arrow-right"></i></NuxtLink>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-3">How we works? : Coral</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
                        </div>
                    </div>
                </div>
               <NftWork/>
            </div>
        </section>

        <NftCta/>

        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-3">Top Collections</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
                        </div>
                    </div>
                </div>

                <div class="row g-4">
                    <div v-for="(item, index) in nftData.slice(0,4)" :key="index" class="col-lg-3 col-md-6 col-12">
                        <div class="nft-item nft-collection rounded shadow position-relative overflow-hidden">
                            <div class="nft-image">
                                <img :src="item.image" class="img-fluid" alt="">
                            </div>

                            <div class="position-absolute bottom-0 start-0 end-0 bg-white p-4">
                                <div class="position-absolute top-0 start-50 translate-middle">
                                    <img :src="item.client" class="avatar avatar-small rounded-pill img-thumbnail shadow-md" alt="">
                                </div>

                                <div class="mt-4 text-center">
                                    <NuxtLink to="/nft-explore" class="text-dark link-title h5">{{item.tag}}</NuxtLink>
                                    
                                    <p class="text-muted mb-0 small">27 Items</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="position-relative">
                            <img :src="faqImg" class="img-fluid" alt="">
                            <div class="modern-app-round round-small"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                        <div class="section-title mb-4 ms-lg-3">
                            <h4 class="title mb-3">Frequently Asked Questions</h4>
                            <p class="text-muted para-desc mb-0">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
                        
                            <FaqOne/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-3">Blog Or News</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
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
    import { nftData } from '@/data/data';
 
    import faqImg from '@/assets/images/faqs.svg'
    import NftNavDark from '@/components/navbar/nft-nav-dark.vue';
    import ExploreProduct from '~/components/nft/explore-product.vue';
</script>
