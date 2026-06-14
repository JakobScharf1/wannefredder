<template>
    <footer class="bg-footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="py-5">
                        <div class="row">
                            <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                                <p>Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.</p>
                                <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                                    <li v-for="(item, index) in footerSocial" :key="index" class="list-inline-item me-1"><a :href="item.link" target="_blank" class="rounded"><i :data-feather="item.icon" class="fea icon-sm align-middle" title="dribbble"></i></a></li>
                                </ul>
                            </div>
                    
                            <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h6 class="footer-head text-uppercase small">Company</h6>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li v-for="(item, index) in footerLink1" :key="index"><NuxtLink :to="item.link" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> {{item.name}}</NuxtLink></li>
                                </ul>
                            </div>
                    
                            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h6 class="footer-head text-uppercase small">Usefull Links</h6>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li v-for="(item, index) in footerLink2" :key="index"><NuxtLink :to="item.link" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> {{item.name}}</NuxtLink></li>
                                </ul>
                            </div>

                            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h6 class="footer-head text-uppercase small">Newsletter</h6>
                                <p class="mt-4">Sign up and receive the latest tips via email.</p>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="foot-subscribe mb-3">
                                                <label class="form-label">Write your email <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <input type="email" name="email" id="submitsubscribe" class="form-control rounded" placeholder="Your email : " required>
                                                    <div class="position-absolute top-50 end-0 translate-middle-y">
                                                        <button type="submit" id="submitsubscribe" class="btn btn-sm btn-icon btn-soft-primary me-1">
                                                            <i data-feather="send" class="icons"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="py-5 footer-bar">
                        <div class="container text-center">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                    <div class="text-sm-start">
                                        <NuxtLink to="#" class="logo-footer">
                                            <img :src="logo" alt=""/>
                                        </NuxtLink>
                                    </div>
                                </div>
    
                                <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <ul class="list-unstyled footer-list terms-service text-sm-end mb-0">
                                        <li class="list-inline-item mb-0"><NuxtLink to="#" class="text-foot fw-medium me-2"><i class="mdi mdi-circle-small"></i> Privacy</NuxtLink></li>
                                        <li class="list-inline-item mb-0"><NuxtLink to="#" class="text-foot fw-medium me-2"><i class="mdi mdi-circle-small"></i> Terms</NuxtLink></li>
                                        <li class="list-inline-item mb-0"><NuxtLink to="#" class="text-foot fw-medium me-2"><i class="mdi mdi-circle-small"></i> FAQs</NuxtLink></li>
                                        <li class="list-inline-item mb-0"><NuxtLink to="#" class="text-foot fw-medium"><i class="mdi mdi-circle-small"></i> Contact</NuxtLink></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-4 footer-bar">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-sm-12">
                        <p class="mb-0">© {{year}} Coral. Design & Develop with <i class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<script setup>
    import { footerLink1, footerLink2, footerSocial } from '@/data/data';
    import { ref } from 'vue';
    import logo from '@/assets/images/logo-light.png'

    let year = ref(new Date().getFullYear())
</script>

