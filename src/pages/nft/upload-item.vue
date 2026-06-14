<template>
    <div>
        <NftNavLight/>

        <section class="bg-half-170 d-table w-100" :style="{backgroundImage:`url(${bg})`, backgroundPosition:'center'}">
            <div class="bg-overlay bg-gradient-overlay"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="title-heading text-center">
                            <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Upload Item</h5>
                        </div>
                    </div>
                </div>

                <div class="position-middle-bottom">
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                            <li class="breadcrumb-item"><router-link to="/">Coral</router-link></li>
                            <li class="breadcrumb-item active" aria-current="page">Upload Item</li>
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
                <div class="row g-4">
                    <div class="col-lg-3 col-md-4 order-2 order-md-1">
                        <div class="rounded shadow overflow-hidden sticky-bar">
                            <div class="bg-gradient-primary p-4 pt-5"></div>
                            <div class="position-relative">
                                <div class="position-absolute top-0 start-50 translate-middle">
                                    <img :src="user" class="avatar avatar-small rounded-pill shadow-sm img-thumbnail bg-light" alt="">
                                </div>
                                <div class="content text-center p-4">
                                    <div class="mt-4">
                                        <h6 class="mb-0">Steven Townsend</h6>
                                        <small class="text-muted">@StreetBoy</small>

                                        <ul class="list-unstyled mb-0 mt-3" id="navmenu-nav">
                                            <li class="px-0">
                                                <router-link to="/creator-profile" class="d-flex align-items-center text-dark">
                                                    <i data-feather="user" class="fea icon-sm me-1 align-middle"></i>
                                                    <small class="d-block fw-semibold mb-0 ms-2">Profile</small>
                                                </router-link>
                                            </li>
                                            
                                            <li class="px-0 mt-2">
                                                <router-link to="/profile-setting" class="d-flex align-items-center text-dark">
                                                    <i data-feather="settings" class="fea icon-sm me-1 align-middle"></i>
                                                    <small class="d-block fw-semibold mb-0 ms-2">Settings</small>
                                                </router-link>
                                            </li>
                                            
                                            <li class="px-0 mt-2">
                                                <router-link to="/lock-screen" class="d-flex align-items-center text-dark">
                                                    <i data-feather="log-out" class="fea icon-sm me-1 align-middle"></i>
                                                    <small class="d-block fw-semibold mb-0 ms-2">Logout</small>
                                                </router-link>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-8 order-1 order-md-2">
                        <div class="rounded shadow p-4">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="d-grid">
                                        <p class="fw-semibold mb-4">Upload your ART here, Please click "Upload Image" Button.</p>
                                        <div v-if="image" class="preview-box d-block justify-content-center rounded shadow overflow-hidden bg-light text-muted p-2 text-center small"><img :src="image" alt="" class="w-100 h-auto"></div>

                                        <div v-else class="preview-box d-block justify-content-center rounded shadow overflow-hidden bg-light text-muted p-2 text-center small">Supports JPG, PNG and MP4 videos. Max file size : 10MB.</div>
                                        <input @change="handleChange($event)" type="file" id="input-file" name="input-file" accept="image/*"  hidden />
                                        <label class="btn-upload btn btn-sm btn-primary rounded mt-4" for="input-file">Upload Image</label>
                                    </div>
                                </div>
    
                                <div class="col-lg-7 mt-4 mt-lg-0">
                                    <div class="ms-lg-4">
                                        <form>
                                            <div class="row">
                                                <div class="col-12 mb-4">
                                                    <label class="form-label fw-semibold">Art Title <span class="text-danger">*</span></label>
                                                    <input name="name" id="name" type="text" class="form-control" placeholder="Title :">
                                                </div>

                                                <div class="col-12 mb-4">
                                                    <label class="form-label fw-semibold"> Description : </label>
                                                    <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Description :"></textarea>
                                                </div>
        
                                                <div class="col-md-6 mb-4">
                                                    <label class="form-label fw-semibold">Type :</label>
                                                    <select class="form-control">
                                                        <option>GIFs</option>
                                                        <option>Music</option>
                                                        <option>Video</option>
                                                        <option>Tech</option>
                                                    </select>
                                                </div>
        
                                                <div class="col-md-6 mb-4">
                                                    <label class="form-label fw-semibold"> Rate : </label>
                                                    <input name="time" type="text" class="form-control" id="time" value="0.004ETH">
                                                </div>

                                                <div class="col-12">
                                                    <h6>Auction :</h6>
                                                </div>

                                                <div class="col-md-6 mb-4">
                                                    <label class="form-label fw-semibold"> Starting Date : </label>
                                                    <input name="date" type="text" class="form-control start" placeholder="Select date :">
                                                </div>
                
                                                <div class="col-md-6 mb-4">
                                                    <label class="form-label fw-semibold"> Expiration date : </label>
                                                    <input name="date" type="text" class="form-control end" placeholder="Select date :">
                                                </div>
        
                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn-sm btn-primary rounded">Create Item</button>
                                                </div>
                                            </div>
                                        </form>
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
    import NftNavLight from '@/components/navbar/nft-nav-light.vue';
    import bg from '@/assets/images/hero/pages.jpg';
    import user from '@/assets/images/team/1.jpg';
    import { ref } from 'vue';
import FooterOne from '@/components/footer-one.vue';
import ScrollToTop from '@/components/scroll-to-top.vue';


    let image = ref()

    const handleChange = (e) =>{
        e.preventDefault();
        image.value = URL.createObjectURL(e.target.files[0])
    }

</script>
