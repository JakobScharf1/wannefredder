<template>
    <div>
        <NavLight/>

         <section class="swiper-slider-hero position-relative d-block vh-100" id="home">
            <div class="swiper-container">
                <swiper class="swiper-wrapper"  :modules="[Autoplay]" :autoplay="{ delay: 3000, disableOnInteraction: false }" :loop="true" :speed="3000">
                    <swiper-slide class="swiper-slide d-flex align-items-center overflow-hidden">
                        <div class="slide-inner slide-bg-image d-flex align-items-center" :style="{backgroundImage:`url(${bg1})`, backgroundPosition:'center'}">
                            <div class="bg-overlay"></div>
                            <div class="container">
                                <div class="row justify-content-center mt-5">
                                    <div class="col-12">
                                        <div class="title-heading">
                                            <h1 class="heading text-white title-dark fw-bold mb-4 text-capitalize">Book your treatment <br> appointment</h1>
                                            <p class="para-desc text-white-50">We value every human life placed in our hands and constantly work towards meeting the expectations of our patients.</p>
                                            
                                            <div class="mt-4 pt-2">
                                                <router-link to="#" class="btn btn-primary">Make Appointment</router-link>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </swiper-slide>

                    <swiper-slide class="swiper-slide d-flex align-items-center overflow-hidden">
                        <div class="slide-inner slide-bg-image d-flex align-items-center" :style="{backgroundImage:`url(${bg2})`, backgroundPosition:'center'}">
                            <div class="bg-overlay"></div>
                            <div class="container">
                                <div class="row justify-content-center mt-5">
                                    <div class="col-12">
                                        <div class="title-heading">
                                            <h1 class="heading text-white title-dark fw-bold mb-4 text-capitalize">Meet the <br> best Doctors</h1>
                                            <p class="para-desc text-white-50">We value every human life placed in our hands and constantly work towards meeting the expectations of our patients.</p>
                                            
                                            <div class="mt-4 pt-2">
                                                <router-link to="#" class="btn btn-primary">Find a Doctor</router-link>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </swiper-slide>

                    <swiper-slide class="swiper-slide d-flex align-items-center overflow-hidden">
                        <div class="slide-inner slide-bg-image d-flex align-items-center" :style="{backgroundImage:`url(${bg3})`, backgroundPosition:'center'}">
                            <div class="bg-overlay"></div>
                            <div class="container">
                                <div class="row justify-content-center mt-5">
                                    <div class="col-12">
                                        <div class="title-heading">
                                            <h1 class="heading text-white title-dark fw-bold mb-4 text-capitalize">Most trusted health <br> partner for your life.</h1>
                                            <p class="para-desc text-white-50">We value every human life placed in our hands and constantly work towards meeting the expectations of our patients.</p>
                                            
                                            <div class="mt-4 pt-2">
                                                <router-link to="#" class="btn btn-primary">Contact Us</router-link>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                </swiper>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6 mb-5 mb-md-0 pb-5 pb-md-4">
                        <div class="position-relative">
                            <div class="me-lg-5 me-4">
                                <img :src="abou1" class="img-fluid rounded border border-4 shadow" alt="">
                            </div>
                            
                            <div class="position-absolute top-50 end-0">
                                <img :src="abou2" class="img-fluid h-auto rounded border border-4 shadow" width="250px" alt="">

                                <div class="position-absolute top-0 start-0 translate-middle">
                                    <router-link to="#!" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="avatar avatar-md-md rounded-pill shadow card d-flex justify-content-center align-items-center lightbox">
                                        <i class="mdi mdi-play mdi-24px text-primary"></i>
                                    </router-link>
                                </div>
                            </div>
                        </div> 
                    </div>

                    <div class="col-lg-7 col-md-6 mt-4 mt-md-0 pt-4 pt-md-0">
                        <div class="section-title ms-lg-5">
                            <h6 class="text-primary small text-uppercase">Coral Healthcare</h6>
                            <h4 class="title my-3">Good Services And Better <br> Health By Our Specialists</h4>
                            <p class="para-desc text-muted">We value every human life placed in our hands and constantly work towards meeting the expectations of our patients.</p>
                            <p class="para-desc text-muted">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words.</p>
                            <div class="mt-4">
                                <router-link to="#" class="btn btn-soft-primary">Make Appointment</router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-3">Services of Clinical Excellence</h4>
                            <p class="text-muted para-desc mx-auto mb-0">We value every human life placed in our hands and constantly work towards meeting the expectations of our patients.</p>
                        </div>
                    </div>
                </div>

               <HospitalServices/>

                <div class="row justify-content-center mt-4">
                    <div class="col-12 text-center">
                        <router-link to="/services" class="btn btn-link primary fs-6">See More Services <i class="mdi mdi-arrow-right"></i></router-link>
                    </div>
                </div>
            </div>
        </section>

        <CtaTwo/>

        <HospitalTimetable/>

        <section class="cta-video-section position-relative" :style="{backgroundImage:`url(${bg})`, backgroundAttachment:'fixed'}">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-5 col-md-6 col-sm-8 col-10">
                        <div class="position-relative z-1 p-4 rounded shadow bg-white">
                            <h4 class="mb-4">Book Your Appointment</h4>
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">Patient Name <span class="text-danger">*</span></label>
                                            <input name="name" id="name1" type="text" class="form-control" placeholder="Patient Name :">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">Departments</label>
                                            <select class="form-select form-control">
                                                <option value="EY">Eye Care</option>
                                                <option value="GY">Gynecologist</option>
                                                <option value="PS">Psychotherapist</option>
                                                <option value="OR">Orthopedic</option>
                                                <option value="DE">Dentist</option>
                                                <option value="GA">Gastrologist</option>
                                                <option value="UR">Urologist</option>
                                                <option value="NE">Neurologist</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">Doctor</label>
                                            <select class="form-select form-control">
                                                <option value="CA">Dr. Calvin Carlo</option>
                                                <option value="CR">Dr. Cristino Murphy</option>
                                                <option value="AL">Dr. Alia Reddy</option>
                                                <option value="TO">Dr. Toni Kovar</option>
                                                <option value="JE">Dr. Jessica McFarlane</option>
                                                <option value="EL">Dr. Elsie Sherman</option>
                                                <option value="BE">Dr. Bertha Magers</option>
                                                <option value="LO">Dr. Louis Batey</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">Your Email <span class="text-danger">*</span></label>
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Your email :">
                                        </div> 
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">Your Phone <span class="text-danger">*</span></label>
                                            <input name="phone" id="phone" type="tel" class="form-control" placeholder="Your Phone :">
                                        </div> 
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold"> Date <span class="text-danger">*</span></label>
                                            <input name="date" type="text" class="form-control start" placeholder="Select date :">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold" for="input-time">Time <span class="text-danger">*</span></label>
                                            <input name="time" type="text" class="form-control timepicker" id="input-time" placeholder="03:30 PM">
                                        </div> 
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">Comments <span class="text-danger">*</span></label>
                                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your Message :"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary">Book An Appointment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-3">Doctor's Team</h4>
                            <p class="text-muted para-desc mx-auto mb-0">We value every human life placed in our hands and constantly work towards meeting the expectations of our patients.</p>
                        </div>
                    </div>
                </div>
                <HospitalTeam/>
            </div>

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-3">Blog Or News</h4>
                            <p class="text-muted para-desc mx-auto mb-0">We value every human life placed in our hands and constantly work towards meeting the expectations of our patients.</p>
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
    import { Swiper, SwiperSlide } from 'swiper/vue';
    import { Autoplay} from 'swiper/modules';
    import 'swiper/css';
    import bg1 from '@/assets/images/hero/1.jpg';
    import bg2 from '@/assets/images/hero/2.jpg';
    import bg3 from '@/assets/images/hero/3.jpg';
    import abou1 from '@/assets/images/about/hos1.jpg';
    import abou2 from '@/assets/images/about/hos2.jpg';
    import bg from '@/assets/images/hero/auth.jpg';
    import NavLight from '@/components/navbar/nav-light.vue';
import HospitalServices from '@/components/services/hospital-services.vue';
import CtaTwo from '@/components/cta/cta-two.vue';
import HospitalTimetable from '@/components/hospital-timetable.vue';
import HospitalTeam from '@/components/team/hospital-team.vue';
import BlogOne from '@/components/blog/blog-one.vue';
import FooterOne from '@/components/footer-one.vue';
import ScrollToTop from '@/components/scroll-to-top.vue';


</script>
