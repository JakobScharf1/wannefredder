import React from 'react'
import Link from 'next/link'
import Image from 'next/image'

import Tagline from '../components/navbar/tagline'
import NavlightTwo from '../components/navbar/navlight-two'
import HostingServices from '../components/services/hosting-services'
import CounterOne from '../components/counter/counter-one'
import ClientTwo from '../components/client/client-two'
import Pricing from '../components/pricing'
import FaqOne from '../components/faq/faq-one'
import Footer from '../components/footer'
import ScrollToTop from '../components/scroll-to-top'

import { FiArrowRightCircle } from 'react-icons/fi'

export default function IndexWebHosting() {
  return (
    <>
        <Tagline/>
        <NavlightTwo/>

        <section className="bg-half-170 bg-primary bg-gradient">
            <div className="bg-overlay bg-transparent" style={{backgroundImage:`url('/images/hero/bg-hosting.png')`}}></div>
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
                            <Image src="/images/hero/hosting-hero.png" width={0} height={0} sizes="100vw" style={{width:'100%', height:'auto'}} className="img-fluid" alt=""/>
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
                        <Image src="/images/about.png" width={0} height={0} sizes='100vw' style={{width:'100%', height:'auto'}} className="img-fluid" alt=""/>
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
                                <Link href="#" className="btn btn-link primary fs-6">Read More <i className="mdi mdi-arrow-right align-middle"></i></Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <CounterOne/>

            <div className="container-fluid mt-100 mt-60">
                <div className="rounded-3 position-relative overflow-hidden py-5 px-4" style={{backgroundImage:`url('/images/hero/pages.jpg')`, backgroundAttachment:'fixed'}}>
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
                            <Image src="/images/faqs.png" width={0} height={0} sizes='100vw' style={{width:'100%', height:'auto'}} className="img-fluid" alt=""/>

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
