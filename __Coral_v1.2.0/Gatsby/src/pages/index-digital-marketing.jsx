import React from 'react'
import { Link } from 'gatsby'

import bg from '../assets/images/hero/bg-squre.png'
import bg2 from '../assets/images/hero/bg-digital.jpg'
import about1 from '../assets/images/about/1.jpg'
import about2 from '../assets/images/about/2.jpg'
import about3 from '../assets/images/about/3.jpg'
import about4 from '../assets/images/about/4.jpg'
import faq from '../assets/images/faqs.svg'
import favIcon from '../assets/images/favicon.ico'

import CountUp from 'react-countup'

import Navdark from '../components/navbar/navdark'
import PartnerOne from '../components/partner-one'
import VideoOne from '../components/video/video-one'
import ServicesThree from '../components/services/services-three'
import CtaThree from '../components/cta/cta-three'
import BlogOne from '../components/blog/blog-one'
import TeamOne from '../components/team/team-one'
import FaqOne from '../components/faq/faq-one'
import ProjectTwo from '../components/portfolio/project-two'
import Footer from '../components/footer'
import ScrollToTop from '../components/scroll-to-top'

import { counterData } from '../data/data'

export default function IndexDigitalMarketing() {
  return (
    <>
        <Navdark bg="" tagline="" position="nav-right"/>

        <section className="bg-half-170 bg-soft-primary overflow-hidden" style={{backgroundImage:`url(${bg})`, backgroundPosition:'center'}}>
            <div className="container">
                <div className="row">
                    <div className="col-12">
                        <div className="title-heading">
                            <div className="row align-items-end">
                                <div className="col-lg-9 col-12">
                                    <div className="position-relative">
                                        <span className="clip-text clip-text-image text-uppercase fw-bold position-relative z-1 lh-base" style={{backgroundImage:`url(${bg2})`}}>Digital <br/> Marketing <br/> Agency.</span>

                                        <div className="position-absolute top-50 start-100 translate-middle">
                                            <div className="tilt-3d margin-absolute">
                                                <div className="tilt-3d-trigger">
                                                    <div className="trigger"></div>
                                                    <div className="trigger"></div>
                                                    <div className="trigger"></div>
                                                    <div className="trigger"></div>
                                                    <div className="trigger"></div>
                                                    <div className="trigger"></div>
                                                    <div className="trigger"></div>
                                                    <div className="trigger"></div>
                                                    <div className="trigger"></div>
                                                        
                                                    <div className="tilt-3d-image position-relative">
                                                        <img src={about1} className="avatar avatar-ex-large h-auto mover mb-5" alt=""/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div className="position-absolute top-100 start-0 translate-middle">
                                            <div className="tilt-3d margin-absolute">
                                                <div className="tilt-3d-trigger">
                                                    <div className="trigger"></div>
                                                    <div className="trigger"></div>
                                                    <div className="trigger"></div>
                                                    <div className="trigger"></div>
                                                    <div className="trigger"></div>
                                                    <div className="trigger"></div>
                                                    <div className="trigger"></div>
                                                    <div className="trigger"></div>
                                                    <div className="trigger"></div>
                                                        
                                                    <div className="tilt-3d-image position-relative">
                                                        <img src={about4} className="avatar avatar-ex-large h-auto mover-2 mt-5" alt=""/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                <div className="col-lg-3 col-12">
                                    <p className="text-muted para-desc mb-0">We're a full-service creative digital marketing agency, collaborating with brands all over the world.</p>
                                    
                                    <div className="mt-4">
                                        <Link to="#" className="btn btn-primary">Get Consultation <i className="mdi mdi-arrow-right"></i></Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  

        <section className="py-4 bg-primary">
            <div className="container">
                <div className="row">
                    <div className="col-12 my-2">
                        <div className="text-slider">
                            <PartnerOne/>
                        </div>
                    </div>
                </div>
            </div>
        </section> 

        <section className="section">
            <div className="container">
                <div className="row align-items-center g-5">
                    <div className="col-lg-2 order-lg-1 order-3">
                        <div className="row g-4">
                            {counterData.map((item, index)=>{
                                let Icon = item.icon
                                return(
                                    <div className="col-lg-12 col-md-4 col-6" key={index}>
                                        <div className="counter-box text-center">
                                            <div className="position-relative">
                                                <Icon className="fea icon-md mb-2 text-primary"/>
                                            </div>
                                            <h3 className="text-dark fw-semibold"><CountUp end={item.value}/>{item.symbol}</h3>
                                            <h6 className="counter-head text-muted fw-medium mb-0">{item.title}</h6>
                                        </div>    
                                    </div>
                                )
                            })}
                        </div>
                    </div>

                    <div className="col-lg-4 col-md-6 order-lg-2 order-1">
                        <div className="position-relative">
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

                            <div className="position-absolute top-50 start-50 translate-middle z-n1">
                                <div className="bg-primary rounded opacity-75 p-5"><div className="p-5 m-5"></div></div>
                            </div>
                        </div>
                    </div>

                    <div className="col-lg-6 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0 order-lg-3 order-2">
                        <div className="section-title ms-lg-4">
                            <h6 className="text-primary text-uppercase">What we are?</h6>
                            <h4 className="title mb-3">Coral is a business that <br/> provides services related <br/> to online marketing.</h4>

                            <p className="text-muted para-desc">We're a full-service creative digital marketing agency, collaborating with brands all over the world.</p>

                            <p className="text-muted para-desc mb-0">Our SEO experts optimize your website to rank higher on search engines, ensuring increased visibility and organic traffic. From keyword research to on-page optimization and link building, we employ the latest techniques improve your search engine rankings.</p>

                            <div className="mt-4">
                                <Link to="#" className="btn btn-primary">About Us <i className="mdi mdi-arrow-right"></i></Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Our services will make <br/> your product successful</h4>
                            <p className="text-muted para-desc mx-auto mb-0">We're a full-service creative digital marketing agency, collaborating with brands all over the world.</p>
                        </div>
                    </div>
                </div>
                <ServicesThree/>
            </div>
        </section>

        <CtaThree/>

        <section className="section">
            <div className="container">
                <div className="row align-lg-items-center mb-4 pb-2">
                    <div className="col-lg-6 col-md-5">
                        <div className="section-title text-md-start text-center">
                            <h4 className="title mb-3 mb-md-0">Our Portfolio</h4>
                        </div>
                    </div>
                    
                    <div className="col-lg-6 col-md-7">
                        <div className="text-md-start text-center">
                            <p className="text-muted para-desc mx-auto mb-0">We're a full-service creative digital marketing agency, collaborating with brands all over the world.</p>
                        </div>
                    </div>
                </div>
                <ProjectTwo/>
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
                        <div className="section-title ms-lg-3">
                            <h4 className="title mb-3">Frequently Asked Questions</h4>
                            <p className="text-muted para-desc mb-0">We're a full-service creative digital marketing agency, collaborating with brands all over the world.</p>
                            <FaqOne/>
                        </div>
                    </div>
                </div>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Our Minds</h4>
                            <p className="text-muted para-desc mx-auto mb-0">We're a full-service creative digital marketing agency, collaborating with brands all over the world.</p>
                        </div>
                    </div>
                </div>
                <TeamOne/>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Blog Or News</h4>
                            <p className="text-muted para-desc mx-auto mb-0">We're a full-service creative digital marketing agency, collaborating with brands all over the world.</p>
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

