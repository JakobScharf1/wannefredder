import React from 'react'
import { Link } from 'gatsby'

import { FiArrowRightCircle, FiClock, FiMail, FiMapPin } from 'react-icons/fi'

import bg from '../assets/images/hero/bg-hosting.png'
import cta from '../assets/images/hero/pages.jpg'
import hero from '../assets/images/hero/hosting-hero.png'
import faqs from '../assets/images/faqs.png'
import about from '../assets/images/about.png'
import favIcon from '../assets/images/favicon.ico'

import NavlightTwo from '../components/navbar/navlight-two'
import FaqOne from '../components/faq/faq-one'
import Pricing from '../components/pricing'
import ClientTwo from '../components/client/client-two'
import CounterOne from '../components/counter/counter-one'
import HostingServices from '../components/services/hosting-services'
import Footer from '../components/footer'
import ScrollToTop from '../components/scroll-to-top'

export default function IndexWebHosting() {
  return (
    <>

        <div className="tagline bg-white shadow">
            <div className="container">                
                <div className="row">
                    <div className="col-12">
                        <div className="d-flex align-items-center justify-content-between">
                            <ul className="list-unstyled mb-0">
                                <li className="d-inline-flex align-items-center">
                                    <FiClock className="fea icon-sm text-primary"/>
                                    <span className="ms-2 text-muted">Mon-Sat: 9am to 6pm</span>
                                </li>
                                <li className="d-inline-flex align-items-center ms-2">
                                    <FiMapPin className="fea icon-sm text-primary"/>
                                    <span className="ms-2 text-muted">Houston, USA 485</span>
                                </li>
                            </ul>

                            <ul className="list-unstyled mb-0">
                                <li className="d-inline-flex align-items-center">
                                    <FiMail className="fea icon-sm text-primary"/>
                                    <Link to="mailto:contact@example.com" className="ms-2 text-muted link-title">contact@example.com</Link>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <NavlightTwo/>

        <section className="bg-half-170 bg-primary bg-gradient">
            <div className="bg-overlay bg-transparent" style={{backgroundImage:`url(${bg})`}}></div>
            <div className="container mt-5">
                <div className="row align-items-center">
                    <div className="col-lg-6 col-md-6">
                        <div className="title-heading">
                            <h1 className="display-4 text-white my-3">Get Web Hosting at just <span className="text-danger">$2.99/month</span>*</h1>
                            <p className="para-desc text-white-50">Select your hosting solution and we will help you narrow down our best high-speed options to fit your needs with Coral.</p>
                            
                            <div className="subscribe-form mt-4 py-2">
                                <form className="mx-auto">
                                    <input type="email" id="SubscribeEmail" className="border bg-white rounded-pill" style={{opacity: '0.85'}} required placeholder="Enter your email"/>
                                    <button type="submit" className="btn btn-pills btn-danger">Subscribe Now</button>
                                </form>
                            </div>

                            <span className="text-white-50">*3-day trial without credit card</span>
                        </div>
                    </div>

                    <div className="col-lg-6 col-md-6">
                        <div className="ms-lg-4">
                            <img src={hero} className="img-fluid" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section className="section">
            <div className="container">
                <HostingServices/>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row align-items-center">
                    <div className="col-lg-5 col-md-6">
                        <img src={about} className="img-fluid" alt=""/>
                    </div>

                    <div className="col-lg-7 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                        <div className="section-title ms-lg-5">
                            <h6 className="text-primary text-uppercase">About Us</h6>
                            <h4 className="title mb-3">About Coral Hosting</h4>

                            <p className="text-muted para-desc">Select your hosting solution and we will help you narrow down our best high-speed options to fit your needs with Coral.</p>
                            <p className="text-muted para-desc mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora facere commodi ex ipsum, optio vitae rerum quisquam ducimus eaque minima voluptas iste consequatur nostrum. Harum rem laudantium error quidem tempora.</p>

                            <ul className="list-unstyled text-muted mb-0 mt-3">
                                <li className="mb-1"><span className="text-primary h5 me-2"><i className="mdi mdi-check-circle-outline align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                                <li className="mb-1"><span className="text-primary h5 me-2"><i className="mdi mdi-check-circle-outline align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                                <li className="mb-1"><span className="text-primary h5 me-2"><i className="mdi mdi-check-circle-outline align-middle"></i></span>Create your own skin to match your brand</li>
                            </ul>

                            <div className="mt-4">
                                <Link to="" className="btn btn-link primary fs-6">Read More <i className="mdi mdi-arrow-right align-middle"></i></Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <CounterOne/>

            <div className="container-fluid mt-100 mt-60">
                <div className="rounded-3 position-relative overflow-hidden py-5 px-4" style={{backgroundImage:`url(${cta})`, backgroundAttachment:'fixed'}}>
                    <div className="bg-overlay bg-primary opacity-75"></div>
                    <div className="row py-md-5 py-4">
                        <div className="container">
                            <div className="row justify-content-center align-items-center g-4">
                                <div className="col-lg-6 col-md-6 col-12">
                                    <div className="section-title">
                                        <h6 className="text-white title-dark mb-3">Hosting Flash Sale</h6>
                                        <h2 className="text-white title-dark mb-0">Hosting Flash Sale Web Hosting, Domain Name and Hosting Center Solutions</h2>
                                    </div>
                                </div>

                                <div className="col-lg-6 col-md-6 col-12">
                                    <ul className="list-unstyled mb-0 ms-lg-5">
                                        <li className="text-white-50 my-2"><FiArrowRightCircle className="fea icon-ex-md me-1"/> Ultrafast Data Read/Write Speeds</li>
                                        <li className="text-white-50 my-2"><FiArrowRightCircle className="fea icon-ex-md me-1"/> Enterprise Grade Hardware</li>
                                        <li className="text-white-50 my-2"><FiArrowRightCircle className="fea icon-ex-md me-1"/> Highest Data Protection Reliability</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Client Stories</h4>
                            <p className="text-muted para-desc mx-auto mb-0">Select your hosting solution and we will help you narrow down our best high-speed options to fit your needs with Coral.</p>
                        </div>
                    </div>
                </div>

                <ClientTwo/>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Explore Our Hosting Pricing</h4>
                            <p className="text-muted para-desc mx-auto mb-0">Select your hosting solution and we will help you narrow down our best high-speed options to fit your needs with Coral.</p>
                        </div>
                    </div>
                </div>

                <Pricing/>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row align-items-center">
                    <div className="col-lg-6 col-md-6">
                        <div className="position-relative">
                            <img src={faqs} className="img-fluid" alt=""/>

                            <div className="modern-app-round round-small"></div>
                        </div>
                    </div>

                    <div className="col-lg-6 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                        <div className="section-title ms-lg-3">
                            <h4 className="title mb-3">Frequently Asked Questions</h4>
                            <p className="text-muted para-desc mb-0">Select your hosting solution and we will help you narrow down our best high-speed options to fit your needs with Coral.</p>
                            <FaqOne/>
                        </div>
                    </div>
                </div>
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