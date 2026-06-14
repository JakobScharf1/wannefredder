import React from 'react'
import Link from 'next/link'
import Image from 'next/image'

import Navlight from '../components/navbar/navlight'
import CryptoBanner from '../components/banner/crypto-banner'
import CryptoTable from '../components/crypto/crypto-table'
import Trader from '../components/crypto/trader'
import ClientTwo from '../components/client/client-two'
import Footer from '../components/footer'
import ScrollToTop from '../components/scroll-to-top'

import { FiSmartphone } from 'react-icons/fi'

export default function IndexCryptocurrency() {
  return (
    <>
        <Navlight/>

        <CryptoBanner/>


        <section className="section">
            <div className="container">
                <div className="row align-items-center">
                    <div className="col-lg-5 col-md-6">
                        <Image src='/images/bitcoin.svg' width={0} height={0} sizes='100vw' style={{width:'100%', height:'auto'}} className="img-fluid" alt=""/>
                    </div>

                    <div className="col-lg-7 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                        <div className="section-title ms-lg-5">
                            <h4 className="title mb-3">Moving your Existing Solution <br/> for Cryptocurrency</h4>
                            <p className="text-muted para-desc mb-0">Our platform reaches people all over the world, hereby we are trusted as the best platform for crypto trading.</p>

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

            <div className="container mt-100 mt-60">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Cryptocurrency Market</h4>
                            <p className="text-muted para-desc mx-auto mb-0">Our platform reaches people all over the world, hereby we are trusted as the best platform for crypto trading.</p>
                        </div>
                    </div>
                </div>
                <CryptoTable/>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Become a Crypto Trader</h4>
                            <p className="text-muted para-desc mx-auto mb-0">Our platform reaches people all over the world, hereby we are trusted as the best platform for crypto trading.</p>
                        </div>
                    </div>
                </div>

                <Trader/>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Customer's Review</h4>
                            <p className="text-muted para-desc mx-auto mb-0">Our platform reaches people all over the world, hereby we are trusted as the best platform for crypto trading.</p>
                        </div>
                    </div>
                </div>

                <div className="row">
                    <div className="col-12 mt-4">
                        <ClientTwo/>
                    </div>
                </div>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row align-items-center">
                    <div className="col-lg-5 col-md-5 col-12">
                        <Image src='/images/01.png' width={0} height={0} sizes='100vw' style={{width:'100%', height:'auto'}} className="img-fluid mx-auto d-block" alt=""/>
                    </div>

                    <div className="col-lg-7 col-md-7 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div className="section-title">
                            <div className="alert alert-light alert-pills text-dark" role="alert">
                                <span className="badge bg-primary rounded-pill me-1">Apps</span>
                                <span className="content">Download now <i className="mdi mdi-arrow-right align-middle"></i></span>
                            </div>
                            <h4 className="title mb-3">Available for your <br/> Smartphones</h4>
                            <p className="text-muted para-desc mb-0">Our platform reaches people all over the world, hereby we are trusted as the best platform for crypto trading.</p>
                            <div className="my-4">
                                <Link href="#">
                                    <Image src='/images/app.png' width={168} height={50} className="me-2" alt=""/>
                                </Link>

                                <Link href="#">
                                    <Image src='/images/playstore.png' width={168} height={50} alt=""/>
                                </Link>
                            </div>

                            <div className="d-inline-block">
                                <div className="pt-4 d-flex align-items-center border-top">
                                    <FiSmartphone className="fea icon-md me-2 text-primary"/>
                                    <div className="content">
                                        <h6 className="mb-0">Install app now on your cellphones</h6>
                                        <Link href="#" className="text-primary h6">Learn More <i className="mdi mdi-arrow-right"></i></Link>  
                                    </div>
                                </div>
                            </div>
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
