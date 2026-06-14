import { Link } from 'react-router-dom'

import bg from '../../assets/images/hero/auth.jpg'
import bg1 from '../../assets/images/hero/1.jpg'
import bg2 from '../../assets/images/hero/2.jpg'
import bg3 from '../../assets/images/hero/3.jpg'
import about1 from '../../assets/images/about/hos1.jpg'
import about2 from '../../assets/images/about/hos2.jpg'

import { Swiper, SwiperSlide } from 'swiper/react';
import { Autoplay } from 'swiper/modules';
import 'swiper/css';

import Navlight from '../../components/navbar/navlight'
import VideoOne from '../../components/video/video-one'
import HospitalServices from '../../components/services/hospital-services'
import CtaThree from '../../components/cta/cta-three'
import DrTable from '../../components/dr-table'
import BlogOne from '../../components/blog/blog-one'
import DrTeam from '../../components/team/dr-team'
import ScrollToTop from "../../components/scroll-to-top";
import Footer from "../../components/footer";

export default function IndexHospital() {
  return (
    <>
        <Navlight/>

        <section className="swiper-slider-hero position-relative d-block vh-100" id="home">
            <div className="swiper-container">
                <Swiper className="swiper-wrapper" 
                    speed={2000}
                    modules={[Autoplay, ]}  
                    autoplay={{
                        delay: 2500,
                        disableOnInteraction: false,
                    }}
                   >
                    <SwiperSlide className="swiper-slide d-flex align-items-center overflow-hidden">
                        <div className="slide-inner slide-bg-image d-flex align-items-center" style={{backgroundImage:`url(${bg1})`, backgroundPosition:'center'}}>
                            <div className="bg-overlay"></div>
                            <div className="container">
                                <div className="row justify-content-center mt-5">
                                    <div className="col-12">
                                        <div className="title-heading">
                                            <h1 className="heading text-white title-dark fw-bold mb-4 text-capitalize">Book your treatment <br/> appointment</h1>
                                            <p className="para-desc text-white-50">We value every human life placed in our hands and constantly work towards meeting the expectations of our patients.</p>
                                            
                                            <div className="mt-4 pt-2">
                                                <Link to="#" className="btn btn-primary">Make Appointment</Link>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </SwiperSlide> 

                    <SwiperSlide className="swiper-slide d-flex align-items-center overflow-hidden">
                        <div className="slide-inner slide-bg-image d-flex align-items-center" style={{backgroundImage:`url(${bg2})`, backgroundPosition:'center'}}>
                            <div className="bg-overlay"></div>
                            <div className="container">
                                <div className="row justify-content-center mt-5">
                                    <div className="col-12">
                                        <div className="title-heading">
                                            <h1 className="heading text-white title-dark fw-bold mb-4 text-capitalize">Meet the <br/> best Doctors</h1>
                                            <p className="para-desc text-white-50">We value every human life placed in our hands and constantly work towards meeting the expectations of our patients.</p>
                                            
                                            <div className="mt-4 pt-2">
                                                <Link to="#" className="btn btn-primary">Find a Doctor</Link>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </SwiperSlide> 

                    <SwiperSlide className="swiper-slide d-flex align-items-center overflow-hidden">
                        <div className="slide-inner slide-bg-image d-flex align-items-center" style={{backgroundImage:`url(${bg3})`, backgroundPosition:'center'}}>
                            <div className="bg-overlay"></div>
                            <div className="container">
                                <div className="row justify-content-center mt-5">
                                    <div className="col-12">
                                        <div className="title-heading">
                                            <h1 className="heading text-white title-dark fw-bold mb-4 text-capitalize">Most trusted health <br/> partner for your life.</h1>
                                            <p className="para-desc text-white-50">We value every human life placed in our hands and constantly work towards meeting the expectations of our patients.</p>
                                            
                                            <div className="mt-4 pt-2">
                                                <Link to="#" className="btn btn-primary">Contact Us</Link>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </SwiperSlide> 
                </Swiper>
            </div>
        </section>

        <section className="section">
            <div className="container">
                <div className="row align-items-center">
                    <div className="col-lg-5 col-md-6 mb-5 mb-md-0 pb-5 pb-md-4">
                        <div className="position-relative">
                            <div className="me-lg-5 me-4">
                                <img src={about1} className="img-fluid rounded border border-4 shadow" alt=""/>
                            </div>
                            
                            <div className="position-absolute top-50 end-0">
                                <img src={about2} className="img-fluid h-auto rounded border border-4 shadow" width="250px" alt=""/>
                                <VideoOne className="position-absolute top-0 start-0 translate-middle"/>
                            </div>
                        </div> 
                    </div>

                    <div className="col-lg-7 col-md-6 mt-4 mt-md-0 pt-4 pt-md-0">
                        <div className="section-title ms-lg-5">
                            <h6 className="text-primary small text-uppercase">Coral Healthcare</h6>
                            <h4 className="title my-3">Good Services And Better <br/> Health By Our Specialists</h4>
                            <p className="para-desc text-muted">We value every human life placed in our hands and constantly work towards meeting the expectations of our patients.</p>
                            <p className="para-desc text-muted">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words.</p>
                            <div className="mt-4">
                                <Link to="#" className="btn btn-soft-primary">Make Appointment</Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Services of Clinical Excellence</h4>
                            <p className="text-muted para-desc mx-auto mb-0">We value every human life placed in our hands and constantly work towards meeting the expectations of our patients.</p>
                        </div>
                    </div>
                </div>

                <HospitalServices/>

                <div className="row justify-content-center mt-4">
                    <div className="col-12 text-center">
                        <Link to="/services" className="btn btn-link primary fs-6">See More Services <i className="mdi mdi-arrow-right"></i></Link>
                    </div>
                </div>
            </div>
        </section>

        <CtaThree/>

        <DrTable/>

         <section className="cta-video-section position-relative" style={{backgroundImage:`url(${bg})`, backgroundPosition:'center', backgroundAttachment:'fixed'}}>
            <div className="bg-overlay"></div>
            <div className="container">
                <div className="row justify-content-end">
                    <div className="col-lg-5 col-md-6 col-sm-8 col-10">
                        <div className="position-relative z-1 p-4 rounded shadow bg-white">
                            <h4 className="mb-4">Book Your Appointment</h4>
                            <form>
                                <div className="row">
                                    <div className="col-lg-12">
                                        <div className="mb-3">
                                            <label className="form-label fw-semibold">Patient Name <span className="text-danger">*</span></label>
                                            <input name="name" id="name1" type="text" className="form-control" placeholder="Patient Name :"/>
                                        </div>
                                    </div>
                                    
                                    <div className="col-lg-6">
                                        <div className="mb-3">
                                            <label className="form-label fw-semibold">Departments</label>
                                            <select className="form-select form-control">
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
                                    
                                    <div className="col-lg-6">
                                        <div className="mb-3">
                                            <label className="form-label fw-semibold">Doctor</label>
                                            <select className="form-select form-control">
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

                                    <div className="col-lg-6">
                                        <div className="mb-3">
                                            <label className="form-label fw-semibold">Your Email <span className="text-danger">*</span></label>
                                            <input name="email" id="email" type="email" className="form-control" placeholder="Your email :"/>
                                        </div> 
                                    </div>

                                    <div className="col-lg-6">
                                        <div className="mb-3">
                                            <label className="form-label fw-semibold">Your Phone <span className="text-danger">*</span></label>
                                            <input name="phone" id="phone" type="tel" className="form-control" placeholder="Your Phone :"/>
                                        </div> 
                                    </div>

                                    <div className="col-lg-6">
                                        <div className="mb-3">
                                            <label className="form-label fw-semibold"> Date <span className="text-danger">*</span></label>
                                            <input name="date" type="text" className="form-control start" placeholder="Select date :"/>
                                        </div>
                                    </div>

                                    <div className="col-lg-6">
                                        <div className="mb-3">
                                            <label className="form-label fw-semibold" htmlFor="input-time">Time <span className="text-danger">*</span></label>
                                            <input name="time" type="text" className="form-control timepicker" id="input-time" placeholder="03:30 PM"/>
                                        </div> 
                                    </div>

                                    <div className="col-lg-12">
                                        <div className="mb-3">
                                            <label className="form-label fw-semibold">Comments <span className="text-danger">*</span></label>
                                            <textarea name="comments" id="comments" rows="4" className="form-control" placeholder="Your Message :"></textarea>
                                        </div>
                                    </div>

                                    <div className="col-lg-12">
                                        <div className="d-grid">
                                            <button type="submit" className="btn btn-primary">Book An Appointment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section className="section">
           <DrTeam/>
            <div className="container mt-100 mt-60">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Blog Or News</h4>
                            <p className="text-muted para-desc mx-auto mb-0">We value every human life placed in our hands and constantly work towards meeting the expectations of our patients.</p>
                        </div>
                    </div>
                </div>
                <BlogOne/>
            </div>
        </section>

        <Footer/>
        <ScrollToTop/>
    </>
  )
}
