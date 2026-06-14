<script>
// @ts-nocheck


    import Swiper from 'swiper';
    import { Autoplay, EffectFade, Pagination} from 'swiper/modules';

    import Navlight from "../../components/navbar/navlight.svelte";
    import bg from '../../assets/images/hero/auth.jpg'
    import bg1 from '../../assets/images/hero/1.jpg'
    import bg2 from '../../assets/images/hero/2.jpg'
    import bg3 from '../../assets/images/hero/3.jpg'
    import about1 from '../../assets/images/about/hos1.jpg'
    import about2 from '../../assets/images/about/hos2.jpg'
    import { onMount } from 'svelte';
    import { hospitalServices } from '../../data/data';
    import { Link } from 'svelte-routing';
    import CtaTwo from '../../components/cta/cta-two.svelte';
    import DrTimetable from '../../components/dr-timetable.svelte';
    import BlogOne from '../../components/blog-one.svelte';
    import DrTeam from '../../components/team/dr-team.svelte';
    import Footer from '../../components/footer.svelte';

    import Tobii from 'tobii';

    let tobii;
    
    onMount(()=>{
        tobii = new Tobii();
         new Swiper('.swiper-container', {
            modules: [Autoplay, EffectFade,Pagination],
            slidesPerView: 1,
            spaceBetween: 0,
            autoplay: {
                delay: 1000,
                disableOnInteraction: false,
            },
            speed:3000,
            loop:true,
            
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            });
    })
</script>

<Navlight/>


<section class="swiper-slider-hero position-relative d-block vh-100" id="home">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide d-flex align-items-center overflow-hidden">
                <div class="slide-inner slide-bg-image d-flex align-items-center" style="background: url('{bg1}') center;" data-background="images/hero/1.jpg">
                    <div class="bg-overlay"></div>
                    <div class="container">
                        <div class="row justify-content-center mt-5">
                            <div class="col-12">
                                <div class="title-heading">
                                    <h1 class="heading text-white title-dark fw-bold mb-4 text-capitalize">Book your treatment <br> appointment</h1>
                                    <p class="para-desc text-white-50">We value every human life placed in our hands and constantly work towards meeting the expectations of our patients.</p>
                                    
                                    <div class="mt-4 pt-2">
                                        <a href="#!" class="btn btn-primary">Make Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide d-flex align-items-center overflow-hidden">
                <div class="slide-inner slide-bg-image d-flex align-items-center" style="background: url('{bg2}') center;" data-background="images/hero/2.jpg">
                    <div class="bg-overlay"></div>
                    <div class="container">
                        <div class="row justify-content-center mt-5">
                            <div class="col-12">
                                <div class="title-heading">
                                    <h1 class="heading text-white title-dark fw-bold mb-4 text-capitalize">Meet the <br> best Doctors</h1>
                                    <p class="para-desc text-white-50">We value every human life placed in our hands and constantly work towards meeting the expectations of our patients.</p>
                                    
                                    <div class="mt-4 pt-2">
                                        <a href="#!" class="btn btn-primary">Find a Doctor</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide d-flex align-items-center overflow-hidden">
                <div class="slide-inner slide-bg-image d-flex align-items-center" style="background: url('{bg3}') center;" data-background="images/hero/3.jpg">
                    <div class="bg-overlay"></div>
                    <div class="container">
                        <div class="row justify-content-center mt-5">
                            <div class="col-12">
                                <div class="title-heading">
                                    <h1 class="heading text-white title-dark fw-bold mb-4 text-capitalize">Most trusted health <br> partner for your life.</h1>
                                    <p class="para-desc text-white-50">We value every human life placed in our hands and constantly work towards meeting the expectations of our patients.</p>
                                    
                                    <div class="mt-4 pt-2">
                                        <a href="#!" class="btn btn-primary">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 mb-5 mb-md-0 pb-5 pb-md-4">
                <div class="position-relative">
                    <div class="me-lg-5 me-4">
                        <img src={about1} class="img-fluid rounded border border-4 shadow" alt="">
                    </div>
                    
                    <div class="position-absolute top-50 end-0">
                        <img src={about2} class="img-fluid h-auto rounded border border-4 shadow" width="250px" alt="">

                        <div class="position-absolute top-0 start-0 translate-middle">
                            <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" aria-label="link" class="avatar avatar-md-md rounded-pill shadow card d-flex justify-content-center align-items-center lightbox">
                                <i class="mdi mdi-play mdi-24px text-primary"></i>
                            </a>
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
                        <a href="#!" class="btn btn-soft-primary">Make Appointment</a>
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

        <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 g-4 mt-2">
            {#each hospitalServices as item}
                <div class="col">
                    <div class="position-relative features fea-medical text-center rounded shadow p-4">
                        <div class="position-relative d-flex justify-content-center">
                            <img src={item.image} class="avatar avatar-md-sm z-1" alt="">
                            <div class="feature-icon bg-soft-primary position-absolute top-50 start-50 translate-middle avatar avatar-small"></div>
                        </div>
    
                        <div class="mt-4">
                            <Link to="/service-detail" class="h5 text-dark link-title">{item.title}</Link>
                            <p class="text-muted mt-3">{item.desc}</p>
                            <Link to="/service-detail" class="text-primary">Read More <i class="mdi mdi-arrow-right align-middle"></i></Link>
                        </div>
                    </div>
                </div>
            {/each}
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-12 text-center">
                <Link to="/services" class="btn btn-link primary fs-6">See More Services <i class="mdi mdi-arrow-right"></i></Link>
            </div>
        </div>
    </div>
</section>

<CtaTwo/>

<DrTimetable/>

<section class="cta-video-section position-relative" style="background: url({bg}) center fixed;">
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
                                    <label class="form-label fw-semibold" for="name">Patient Name <span class="text-danger">*</span></label>
                                    <input name="name" id="name1" type="text" class="form-control" placeholder="Patient Name :">
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold" for="select">Departments</label>
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
                                    <label class="form-label fw-semibold" for="select">Doctor</label>
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
                                    <label class="form-label fw-semibold" for="email">Your Email <span class="text-danger">*</span></label>
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Your email :">
                                </div> 
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold" for="phone">Your Phone <span class="text-danger">*</span></label>
                                    <input name="phone" id="phone" type="tel" class="form-control" placeholder="Your Phone :">
                                </div> 
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold" for="date"> Date <span class="text-danger">*</span></label>
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
                                    <label class="form-label fw-semibold" for="comments">Comments <span class="text-danger">*</span></label>
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
        <DrTeam/>
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

<Footer/>