'use client'
import React from 'react'
import Link from 'next/link';

import { Swiper, SwiperSlide } from 'swiper/react';
import { Autoplay } from 'swiper/modules';
import 'swiper/css';

export default function HospitalBanner() {
  return (
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
                        <div className="slide-inner slide-bg-image d-flex align-items-center" style={{backgroundImage:`url('/images/hero/1.jpg')`, backgroundPosition:'center'}}>
                            <div className="bg-overlay"></div>
                            <div className="container">
                                <div className="row justify-content-center mt-5">
                                    <div className="col-12">
                                        <div className="title-heading">
                                            <h1 className="heading text-white title-dark fw-bold mb-4 text-capitalize">Book your treatment <br/> appointment</h1>
                                            <p className="para-desc text-white-50">We value every human life placed in our hands and constantly work towards meeting the expectations of our patients.</p>
                                            
                                            <div className="mt-4 pt-2">
                                                <Link href="#" className="btn btn-primary">Make Appointment</Link>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </SwiperSlide> 

                    <SwiperSlide className="swiper-slide d-flex align-items-center overflow-hidden">
                        <div className="slide-inner slide-bg-image d-flex align-items-center" style={{backgroundImage:`url('/images/hero/2.jpg')`, backgroundPosition:'center'}}>
                            <div className="bg-overlay"></div>
                            <div className="container">
                                <div className="row justify-content-center mt-5">
                                    <div className="col-12">
                                        <div className="title-heading">
                                            <h1 className="heading text-white title-dark fw-bold mb-4 text-capitalize">Meet the <br/> best Doctors</h1>
                                            <p className="para-desc text-white-50">We value every human life placed in our hands and constantly work towards meeting the expectations of our patients.</p>
                                            
                                            <div className="mt-4 pt-2">
                                                <Link href="#" className="btn btn-primary">Find a Doctor</Link>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </SwiperSlide> 

                    <SwiperSlide className="swiper-slide d-flex align-items-center overflow-hidden">
                        <div className="slide-inner slide-bg-image d-flex align-items-center" style={{backgroundImage:`url('/images/hero/3.jpg')`, backgroundPosition:'center'}}>
                            <div className="bg-overlay"></div>
                            <div className="container">
                                <div className="row justify-content-center mt-5">
                                    <div className="col-12">
                                        <div className="title-heading">
                                            <h1 className="heading text-white title-dark fw-bold mb-4 text-capitalize">Most trusted health <br/> partner for your life.</h1>
                                            <p className="para-desc text-white-50">We value every human life placed in our hands and constantly work towards meeting the expectations of our patients.</p>
                                            
                                            <div className="mt-4 pt-2">
                                                <Link href="#" className="btn btn-primary">Contact Us</Link>
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
  )
}
