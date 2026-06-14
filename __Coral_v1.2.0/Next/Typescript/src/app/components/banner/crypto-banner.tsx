import React from 'react'
import Link from 'next/link'
import Image from 'next/image'

import VideoTwo from '../video/video-two'
import CryptoSlider from '../crypto/crypto-slider'

export default function CryptoBanner() {
  return (
        <section className="bg-half-260 position-relative overflow-hidden pb-5" style={{backgroundImage:`url('/images/hero/bg-crypto.jpg')`, backgroundPosition:'top', backgroundRepeat:'no-repeat'}}>
            <div className="bg-overlay bg-gradient-overlay"></div>
            <div className="container position-relative">
                <div className="row justify-content-center">
                    <div className="col-lg-12 text-center">
                        <div className="title-heading position-relative z-1 margin-top-100">
                            <h1 className="display-4 text-white title-dark lh-base mb-4">New Digital App for <br/> Cryptocurrency</h1>
                            <p className="para-desc mx-auto text-white-50">Our platform reaches people all over the world, hereby we are trusted as the best platform for crypto trading.</p>
                            <div className="mt-4 pt-2">
                                <Link href="/services" className="btn btn-lg btn-pills btn-primary m-1">Join Now</Link>
                                <VideoTwo className="text-white title-dark"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div className="position-absolute top-0 end-0 translate-middle-y">
                    <Image src='/images/bitcoin.png' width={140} height={140} className="avatar avatar-large mover" alt=""/>
                </div>

                <div className="position-absolute bottom-0 start-0">
                    <Image src='/images/ethereum.png' width={140} height={140} className="avatar avatar-large mover" alt=""/>
                </div>
            </div>

            <CryptoSlider/>
        </section>
  )
}
