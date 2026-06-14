import React from 'react'
import Link from 'next/link'
import Image from 'next/image'

import Navdark from '../components/navbar/navdark'
import FinanceBanner from '../components/banner/finance-banner'
import CtaThree from '../components/cta/cta-three'
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

export default function IndexFinance() {
  return (
    <>
        <Navdark bg="bg-white" tagline="" position=""/>   

        <FinanceBanner/>

        <section className="bg-white py-5 border-top border-bottom">
            <div className="container">
                <div className="row align-items-center g-4">
                    {servicesData.slice(0,4).map((item:ServicesData,index:number)=>{
                        let Icon = item.icon
                        return(
                            <div className="col-lg-3 col-md-6" key={index}>
                                <div className="card rounded p-4 py-5 bg-primary position-relative overflow-hidden border-0">
                                    <Icon className="fea icon-md text-white z-1"/>
                                    <div className="card-body p-0 mt-4">
                                        <h5 className="text-white">{item.title}</h5>
                                        <p className="para text-white-50 mb-0">{item.desc}</p>
                                    </div>
                                </div>
                            </div>
                        )
                    })}
                </div>
            </div>
        </section>

        <section className="section">
            <div className="container">
                <div className="row align-items-center g-4">
                    <div className="col-lg-5 col-md-6">
                        <div className="rounded shadow bg-soft-primary p-4 pb-0">
                            <Image src='/images/1.jpg' width={0} height={0} sizes='100vw' style={{width:'100%', height:'auto'}} className="img-fluid rounded-top shadow" alt=""/>
                        </div>
                    </div>

                    <div className="col-lg-7 col-md-6">
                        <div className="section-title ms-lg-5">
                            <h4 className="title mb-3">Gain valuable insights. <br/> Fast data analytics</h4>
                            <p className="text-muted para-desc mb-0">Ensuring secure transactions and seamless financial experiences for our users globally.</p>
                        
                            <ul className="list-unstyled text-muted mb-0 mt-3">
                                <li className="mb-1"><span className="text-primary h5 me-2"><i className="mdi mdi-check-circle-outline align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                                <li className="mb-1"><span className="text-primary h5 me-2"><i className="mdi mdi-check-circle-outline align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                                <li className="mb-1"><span className="text-primary h5 me-2"><i className="mdi mdi-check-circle-outline align-middle"></i></span>Create your own skin to match your brand</li>
                            </ul>

                            <div className="mt-4">
                                <Link href="/aboutus" className="btn btn-soft-primary">About Us <i className="mdi mdi-arrow-right align-middle"></i></Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row align-items-center g-4">
                    <div className="col-lg-5 col-md-6 order-1 order-md-2">
                        <div className="rounded shadow bg-soft-primary p-4 pb-0">
                            <Image src='/images/2.jpg' width={0} height={0} sizes='100vw' style={{width:'100%', height:'auto'}} className="img-fluid rounded-top shadow" alt=""/>
                        </div>
                    </div>

                    <div className="col-lg-7 col-md-6 order-md-1 order-2">
                        <div className="section-title me-lg-5">
                            <h4 className="title mb-3">Review and manage <br/> team salaries</h4>
                            <p className="text-muted para-desc mb-0">Ensuring secure transactions and seamless financial experiences for our users globally.</p>
                        
                            <ul className="list-unstyled text-muted mb-0 mt-3">
                                <li className="mb-1"><span className="text-primary h5 me-2"><i className="mdi mdi-check-circle-outline align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                                <li className="mb-1"><span className="text-primary h5 me-2"><i className="mdi mdi-check-circle-outline align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                                <li className="mb-1"><span className="text-primary h5 me-2"><i className="mdi mdi-check-circle-outline align-middle"></i></span>Create your own skin to match your brand</li>
                            </ul>

                            <div className="mt-4">
                                <Link href="/aboutus" className="btn btn-soft-primary">About Us <i className="mdi mdi-arrow-right align-middle"></i></Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row align-items-center g-4">
                    <div className="col-lg-5 col-md-6">
                        <div className="rounded shadow bg-soft-primary p-4 pb-0">
                            <Image src='/images/3.jpg' width={0} height={0} sizes='100vw' style={{width:'100%', height:'auto'}} className="img-fluid rounded-top shadow" alt=""/>
                        </div>
                    </div>

                    <div className="col-lg-7 col-md-6">
                        <div className="section-title ms-lg-5">
                            <h4 className="title mb-3">In-depth financial <br/> performance analysis</h4>
                            <p className="text-muted para-desc mb-0">Ensuring secure transactions and seamless financial experiences for our users globally.</p>
                        
                            <ul className="list-unstyled text-muted mb-0 mt-3">
                                <li className="mb-1"><span className="text-primary h5 me-2"><i className="mdi mdi-check-circle-outline align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                                <li className="mb-1"><span className="text-primary h5 me-2"><i className="mdi mdi-check-circle-outline align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                                <li className="mb-1"><span className="text-primary h5 me-2"><i className="mdi mdi-check-circle-outline align-middle"></i></span>Create your own skin to match your brand</li>
                            </ul>

                            <div className="mt-4">
                                <Link href="/aboutus" className="btn btn-soft-primary">About Us <i className="mdi mdi-arrow-right align-middle"></i></Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <CtaThree/>

          <section className="section">
            <div className="container">
                <div className="row align-items-center">
                    <div className="col-lg-6 col-md-6">
                        <div className="section-title mb-md-0 mb-0 ms-lg-3">
                            <span className="badge bg-primary mb-2">FAQs</span>
                            <h4 className="title mb-3 mb-md-5 pb-md-4">Got a question? <br/> Get your answer</h4>
                            <p className="text-muted para-desc mb-0 mt-md-4">Ensuring secure transactions and seamless financial experiences for our users globally.</p>
                            <div className="mt-3 d-none d-md-block">
                                <Link href="#" className="btn btn-soft-primary">Contact Now <i className="mdi mdi-arrow-right"></i></Link>
                            </div>
                        </div>
                    </div>

                    <div className="col-lg-6 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                        <div className="ms-lg-3">                        
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
                            <p className="text-muted para-desc mx-auto mb-0">Ensuring secure transactions and seamless financial experiences for our users globally.</p>
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
