import React from 'react'
import Link from 'next/link'
import Image from 'next/image'

import Tagline from '../components/navbar/tagline'
import Navdark from '../components/navbar/navdark'
import ItBanner from '../components/banner/it-banner'
import ItCounter from '../components/counter/it-counter'
import VideoOne from '../components/video/video-one'
import CtaTwo from '../components/cta/cta-two'
import Pricing from '../components/pricing'
import TeamOne from '../components/team/team-one'
import FaqOne from '../components/faq/faq-one'
import BlogOne from '../components/blog/blog-one'
import Footer from '../components/footer'
import ScrollToTop from '../components/scroll-to-top'

import { servicesData } from '../data/data'
import { IconType } from 'react-icons'

interface ServicesData{
    icon: IconType;
    title: string;
    desc: string;
}

export default function IndexItSolution() {
  return (
    <>
        <Tagline/>

        <Navdark bg="" tagline="tagline-height" position="nav-left"/>  

        <ItBanner/>

        <section className="section">
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-lg-12">
                        <div className="features-absolute">
                            <div className="row align-items-center g-4">
                                {servicesData.slice(0,4).map((item:ServicesData,index:number)=>{
                                    let Icon = item.icon
                                    return(
                                        <div className="col-lg-3 col-md-6 col-12" key={index}>
                                            <div className="position-relative features bg-white text-center rounded shadow p-4 pt-5">
                                                <div className="position-relative d-flex justify-content-center">
                                                    <Icon className="fea icon-md text-primary z-1"/>
                                                    <div className="feature-icon bg-soft-primary position-absolute top-0 translate-middle"></div>
                                                </div>
                        
                                                <div className="mt-4">
                                                    <Link href="/service-detail" className="h5 text-dark link-title">{item.title}</Link>
                                                    <p className="text-muted mt-3">{item.desc}</p>
                                                    <Link href="/service-detail" className="text-primary">Learn More <i className="mdi mdi-arrow-right align-middle"></i></Link>
                                                </div>
                                            </div>
                                        </div>
                                    )
                                })}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row align-items-center">
                    <div className="col-lg-5 col-md-6">
                        <div className="position-relative">
                            <div className="row align-items-end">
                                <div className="col-7">
                                    <Image src='/images/about/1.jpg' width={0} height={0} sizes='100vw' style={{width:'100%', height:'auto'}} className="img-fluid rounded" alt=""/>
                                </div>

                                <div className="col-5">
                                    <Image src='/images/about/3.jpg' width={0} height={0} sizes='100vw' style={{width:'100%', height:'auto'}} className="img-fluid rounded" alt=""/>
                                </div>
                            </div>

                            <div className="row align-items-start mt-4">
                                <div className="col-5">
                                    <Image src='/images/about/4.jpg' width={0} height={0} sizes='100vw' style={{width:'100%', height:'auto'}} className="img-fluid rounded" alt=""/>
                                </div>

                                <div className="col-7">
                                    <Image src='/images/about/2.jpg' width={0} height={0} sizes='100vw' style={{width:'100%', height:'auto'}} className="img-fluid rounded" alt=""/>
                                </div>
                            </div>
                            <VideoOne className="position-absolute top-50 start-50 translate-middle"/>

                            <div className="position-absolute top-50 start-50 translate-middle z-n1">
                                <div className="bg-primary rounded opacity-75 p-5"><div className="p-5 m-5"></div></div>
                            </div>
                        </div>
                    </div>

                    <div className="col-lg-7 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                        <div className="section-title ms-lg-5">
                            <h6 className="text-primary text-uppercase">About Coral</h6>
                            <h4 className="title mb-3">We believe that every <br/> problem has a solution</h4>
                            <p className="text-muted para-desc mb-0">As a leading college in Auckland, we look to engage with our student beyond the conventional design and development school relationship, becoming a partner to the people and companies we work with.</p>

                            <ItCounter/>
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
                        <h4 className="title mb-3">Pricing Plans</h4>
                        <p className="text-muted para-desc mx-auto mb-0">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                    </div>
                </div>
            </div>
            <Pricing/>
        </div>

        <div className="container mt-100 mt-60">
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
                        <Image src='/images/faqs.svg' width={0} height={0} sizes='100vw' style={{width:'100%', height:'auto'}} className="img-fluid" alt=""/>
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
