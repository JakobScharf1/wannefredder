<template>
    <footer class="bg-footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="py-5">
                        <div class="row">
                            <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                                <p>Die Bürgerzeitung - Von Wanfrieder:innen für Wanfrieder:innen</p>
                                <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                                    <li class="list-inline-item me-1"><a :href="'#'" target="_blank" class="rounded"><i class="fea fea-facebook icon-sm align-middle" title="facebook"></i></a></li>
                                </ul>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h6 class="footer-head text-uppercase small">Newsletter</h6>
                                <p class="mt-4">Jetzt für unseren Newsletter anmelden und keine Neuigkeiten mehr verpassen!</p>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="foot-subscribe mb-3">
                                                <label class="form-label">E-Mail eingeben <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <input type="email" name="email" id="submitsubscribe" class="form-control rounded" placeholder="Dein E-Mail-Adresse" required>
                                                    <div class="position-absolute top-50 end-0 translate-middle-y">
                                                        <button type="submit" id="submitsubscribe" class="btn btn-sm btn-icon btn-soft-primary me-1">
                                                            <i data-feather="send" class="fea icon-sm align-middle"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><router-link to="/ueber-uns" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> Über uns</router-link></li>
                                    <li><router-link to="/leitbild" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> Leitbild</router-link></li>
                                </ul>
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
                                        <router-link to="#" class="logo-footer">
                                            <img :src="logo" alt=""/>
                                        </router-link>
                                    </div>
                                </div>
    
                                <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <ul class="list-unstyled footer-list terms-service text-sm-end mb-0">
                                        <li class="list-inline-item mb-0"><router-link to="/datenschutz" class="text-foot fw-medium me-2">Datenschutz</router-link></li>
                                        <li class="list-inline-item mb-0"><router-link to="/impressum" class="text-foot fw-medium me-2"><i class="mdi mdi-circle-small"></i> Impressum</router-link></li>
                                        <li class="list-inline-item mb-0"><router-link to="/kontakt" class="text-foot fw-medium"><i class="mdi mdi-circle-small"></i> Kontakt</router-link></li>
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
                        <p class="mb-0">© {{year}} Brombeerland gUG | Alle Rechte vorbehalten | Aus Wanfried. Für Wanfried.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<script setup>
    import { ref } from 'vue';
    import logo from '@/assets/images/logo-light.png'

    let year = ref(new Date().getFullYear())
</script>

