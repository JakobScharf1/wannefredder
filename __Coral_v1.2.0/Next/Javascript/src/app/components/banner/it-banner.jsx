'use client'
import React from 'react'
import { TypeAnimation } from 'react-type-animation'
import VideoTwo from '../video/video-two'
import Link from 'next/link'
import Image from 'next/image'

export default function ItBanner() {
  return (
    <section className="bg-half-120 pb-0 d-table w-100 bg-it overflow-hidden" style={{backgroundImage:`url('/images/hero/bg-it.png')`, backgroundPosition:'center'}}>
        <div className="container">
            <div className="row align-items-center">
                <div className="col-lg-6 col-md-6 overflow-hidden">
                    <div className="title-heading mb-5">
                        <h6 className="text-primary">Welcome to Coral</h6>
                        <h1 className="heading fw-bold mb-3">IT Solutions & <br/>
                         <TypeAnimation
                            sequence={[
                                'Software',
                                1000,
                                'Application',
                                1000,
                                'Website',
                                1000,
                            ]}
                            wrapper="span"
                            speed={20}
                            repeat={Infinity}
                            cursor={false}
                            className="text-primary typewrite overflow-hidden"
                            /> <br/> Development</h1>
                        <p className="para-desc text-muted d-lg-block d-d-none d-block">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                        <div className="mt-4">
                            <Link href="/services" className="btn btn-primary m-1">Get Started <i className="mdi mdi-arrow-right"></i></Link>
                            <VideoTwo className=""/>
                        </div>
                    </div>
                </div>

                <div className="col-lg-6 col-md-6">
                    <Image src='/images/hero.png' width={0} height={0} sizes='100vw' style={{width:'100%', height:'auto'}} className="img-fluid" alt=""/>
                </div>
            </div>
        </div>
    </section>
  )
}
