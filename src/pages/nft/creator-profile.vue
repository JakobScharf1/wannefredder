<template>
    <div>
        <NftNavDark/>

        <section class="section pb-0 position-relative mt-4 mt-lg-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col">
                        <img :src="bg" class="rounded shadow-sm img-fluid avatar avatar-ex-large w-100 object-fit-cover" alt="">
                        <div class="position-relative text-center">
                            <div class="position-absolute top-0 start-50 translate-middle">
                                <img :src="team" class="avatar avatar-small img-thumbnail rounded-pill shadow" alt="">
                            </div>
                        </div>

                        <div class="content text-center">
                            <h5 class="mb-3 mt-5">streetboyyy</h5>
                            <small class="text-muted px-2 py-1 rounded shadow">bhcedeh5sdijuj-husac4saiu <router-link to="#" class="text-primary h5 ms-1"><i data-feather="copy" class="fea icon-sm"></i></router-link></small>

                            <h6 class="mt-3 mb-0">Artist, UX / UI designer, and Entrepreneur</h6>

                            <div class="mt-4">
                                <router-link to="/profile-setting" class="btn btn-sm btn-outline-primary mx-1">Edit Profile</router-link>
                                <router-link to="/upload-item" class="btn btn-sm btn-icon btn-outline-primary mx-1"><i data-feather="upload" class="fea icon-sm"></i></router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


         <section class="section pt-5">
            <div class="container">
                <ExploreProduct/>
            </div>
        </section>

        <FooterOne/>

        <ScrollToTop/>
    </div>
</template>

<script setup>
import NftNavDark from '@/components/navbar/nft-nav-dark.vue';
import bg from '@/assets/images/blog/1.jpg'
import team from '@/assets/images/team/1.jpg'
import ExploreProduct from '@/components/nft/explore-product.vue';
import FooterOne from '@/components/footer-one.vue';
import ScrollToTop from '@/components/scroll-to-top.vue';


</script>
