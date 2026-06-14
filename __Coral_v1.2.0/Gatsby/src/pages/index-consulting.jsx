import React from 'react'
import { Link } from 'gatsby'

import bg from '../assets/images/hero/bg-consulting.png'
import about1 from '../assets/images/about/1.jpg'
import about2 from '../assets/images/about/2.jpg'
import about3 from '../assets/images/about/3.jpg'
import about4 from '../assets/images/about/4.jpg'
import about from '../assets/images/presentation-3-87.svg'
import faq from '../assets/images/faqs.svg'
import favIcon from '../assets/images/favicon.ico'

import Navdark from '../components/navbar/navdark'
import VideoOne from '../components/video/video-one'
import VideoTwo from '../components/video/video-two'
import ServicesThree from '../components/services/services-three'
import CtaTwo from '../components/cta/cta-two'
import TeamOne from '../components/team/team-one'
import FaqOne from '../components/faq/faq-one'
import BlogOne from '../components/blog/blog-one'
import Footer from '../components/footer'
import ScrollToTop from '../components/scroll-to-top'

export default function IndexConsulting() {
  return (
    <>
        <Navdark bg="" tagline="" position="nav-right"/>

        <section className="bg-half-170 d-table w-100">
            <div className="bg-overlay bg-soft-primary" style={{backgroundImage:`url(${bg})`, backgroundPosition:'bottom' , backgroundRepeat:'no-repeat'}}></div>
            <div className="container">
                <div className="row align-items-center">
                    <div className="col-lg-7 col-md-6">
                        <div className="title-heading">
                            <ul className="list-unstyled mb-0 h5 text-warning">
                                <li className="list-inline-item me-1"><span className="badge bg-white shadow text-dark fw-bold">Rating 4.5 of 5</span></li>
                                <li className="list-inline-item"><i className="mdi mdi-star"></i></li>
                                <li className="list-inline-item"><i className="mdi mdi-star"></i></li>
                                <li className="list-inline-item"><i className="mdi mdi-star"></i></li>
                                <li className="list-inline-item"><i className="mdi mdi-star"></i></li>
                                <li className="list-inline-item"><i className="mdi mdi-star-half-full"></i></li>
                            </ul>
                            <h1 className="heading my-3">Build a Anything <br/>Consulting Business.</h1>
                            <p className="para-desc text-muted">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                            <div className="mt-4 pt-2">
                                <Link to="/services" className="btn btn-primary m-1">Our Services</Link>
                                <VideoTwo className=""/>
                            </div>
                        </div>
                    </div>

                    <div className="col-lg-5 col-md-6">
                        <div className="position-relative">
                            <div className="position-relative mover z-1">
                                <div className="row align-items-end">
                                    <div className="col-7">
                                        <img src={about1} className="img-fluid rounded" alt=""/>
                                    </div>
    
                                    <div className="col-5">
                                        <img src={about3} className="img-fluid rounded" alt=""/>
                                    </div>
                                </div>
    
                                <div className="row align-items-start mt-4">
                                    <div className="col-5">
                                        <img src={about4} className="img-fluid rounded" alt=""/>
                                    </div>
    
                                    <div className="col-7">
                                        <img src={about2} className="img-fluid rounded" alt=""/>
                                    </div>
                                </div>
                                <VideoOne className="position-absolute top-50 start-50 translate-middle"/>
                            </div>

                            <div className="position-absolute top-50 start-50 translate-middle">
                                <div className="bg-primary rounded opacity-75 p-5"><div className="p-5 m-5"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  

        <section className="section">
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Our Features</h4>
                            <p className="text-muted para-desc mx-auto mb-0">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                        </div>
                    </div>
                </div>
                <ServicesThree/>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row g-4 align-items-center">
                    <div className="col-lg-6 col-md-6 order-1 order-md-2">
                        <div className="position-relative">
                            <img src={about} className="img-fluid" alt=""/>

                            <div className="modern-app-round round-small"></div>
                        </div>
                    </div>

                    <div className="col-lg-6 col-md-6 order-md-1 order-2">
                        <div className="section-title me-lg-5">
                            <h4 className="title mb-3">We create world-class digital <br/> products materials that <br/> communicate clearly.</h4>
                            <p className="text-muted para-desc mb-0">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                        
                            <ul className="list-unstyled text-muted mb-0 mt-3">
                                <li className="mb-1"><span className="text-primary h5 me-2"><i className="mdi mdi-check-circle-outline align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                                <li className="mb-1"><span className="text-primary h5 me-2"><i className="mdi mdi-check-circle-outline align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                                <li className="mb-1"><span className="text-primary h5 me-2"><i className="mdi mdi-check-circle-outline align-middle"></i></span>Create your own skin to match your brand</li>
                            </ul>

                            <div className="mt-4">
                                <Link to="/aboutus" className="btn btn-primary">About Us <i className="mdi mdi-arrow-right align-middle"></i></Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <CtaTwo/>

        <section className="section">
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Our Minds</h4>
                            <p className="text-muted para-desc mx-auto mb-0">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                        </div>
                    </div>
                </div>
                <TeamOne/>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row align-items-center">
                    <div className="col-lg-6 col-md-6">
                        <div className="position-relative">
                            <img src={faq} className="img-fluid" alt=""/>
                            <div className="modern-app-round round-small"></div>
                        </div>
                    </div>

                    <div className="col-lg-6 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                        <div className="section-title mb-4 ms-lg-3">
                            <h4 className="title mb-3">Frequently Asked Questions</h4>
                            <p className="text-muted para-desc mb-0">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                            <FaqOne/>
                        </div>
                    </div>
                </div>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Blog Or News</h4>
                            <p className="text-muted para-desc mx-auto mb-0">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
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

export function Head() {
    return (
      <>
        <title>Coral - Gatsby Multipurpose Landing Template</title>
        <link href={favIcon} rel="shortcut icon"></link>
      </>
    )
}