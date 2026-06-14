import React from 'react'
import Link from 'next/link'
import Image from 'next/image'

import Navlight from '../components/navbar/navlight'
import HospitalBanner from '../components/banner/hospital-banner'
import HospitalServices from '../components/services/hospital-services'
import VideoOne from '../components/video/video-one'
import CtaThree from '../components/cta/cta-three'
import DrTable from '../components/dr-table'
import DrTeam from '../components/team/dr-team'
import BlogOne from '../components/blog/blog-one'
import Footer from '../components/footer'
import ScrollToTop from '../components/scroll-to-top'

export default function IndexHospital() {
  return (
    <>
        <Navlight/>
        
        <HospitalBanner/>

        <section className="section">
            <div className="container">
                <div className="row align-items-center">
                    <div className="col-lg-5 col-md-6 mb-5 mb-md-0 pb-5 pb-md-4">
                        <div className="position-relative">
                            <div className="me-lg-5 me-4">
                                <Image src='/images/about/hos1.jpg' width={0} height={0} sizes='100vw' style={{width:'100%', height:'auto'}} className="img-fluid rounded border border-4 shadow" alt=""/>
                            </div>
                            
                            <div className="position-absolute top-50 end-0">
                                <Image src='/images/about/hos2.jpg' width={0} height={0} sizes='100vw' style={{width:'250px', height:'auto'}} className="img-fluid h-auto rounded border border-4 shadow" alt=""/>
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
                                <Link href="#" className="btn btn-soft-primary">Make Appointment</Link>
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
                        <Link href="/services" className="btn btn-link primary fs-6">See More Services <i className="mdi mdi-arrow-right"></i></Link>
                    </div>
                </div>
            </div>
        </section>

        <CtaThree/>

        <DrTable/>

        <section className="cta-video-section position-relative" style={{backgroundImage:`url('/images/hero/auth.jpg')`, backgroundPosition:'center', backgroundAttachment:'fixed'}}>
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
                                            <textarea name="comments" id="comments" rows={4} className="form-control" placeholder="Your Message :"></textarea>
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
