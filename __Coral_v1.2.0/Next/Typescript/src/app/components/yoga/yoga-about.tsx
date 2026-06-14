'use client'
import Link from 'next/link'

import { counterData } from '../../data/data'

import CountUp from 'react-countup'
import VideoOne from '../video/video-one'
import Image from 'next/image'
import { IconType } from 'react-icons'

interface Counter{
    icon: IconType;
    title: string;
    value: number;
    symbol: string;
}
export default function YogaAbout() {
  return (
    <>
    <div className="row align-items-center">
        <div className="col-md-6">
            <div className="position-relative">
                <div className="me-lg-5 me-4">
                    <Image src='/images/about/yoga3.jpg' width={0} height={0} sizes='100vw' style={{width:'100%', height:'auto'}} className="img-fluid rounded border border-4 shadow" alt=""/>
                </div>
                
                <div className="position-absolute top-50 end-0">
                    <Image src='/images/about/yoga2.jpg' width={0} height={0} sizes='100vw' style={{width:'auto', height:'180px'}} className="img-fluid avatar avatar-xl-large w-auto rounded border border-4 shadow" alt=""/>
                    <VideoOne className="position-absolute top-0 start-0 translate-middle"/>
                </div>
            </div> 
        </div>

        <div className="col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
            <div className="section-title ms-lg-4">
                <h4 className="title mb-3">Shape Your <br/> Perfect Body with Coral</h4>
                <p className="para-desc mx-auto text-muted mb-0">Yoga is a light, which once lit will never dim. The better your practice, the brighter your flame with Coral. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>

                <div className="mt-4">
                    <Link href="#schedule" className="btn btn-soft-primary">Check Schedule <i className="mdi mdi-arrow-right"></i></Link>
                </div>
                
                <div className="row">
                    {counterData.slice(0,3).map((item:Counter,index:number)=>{ 
                        let Icon = item.icon
                        return(
                            <div className="col-md-4 col-6 mt-4 pt-3" key={index}>
                                <div className="counter-box">
                                    <div className="position-relative">
                                        <Icon className="fea icon-lg mb-3 text-primary"/>
                                        <div className="position-absolute top-0 translate-middle p-3 bg-soft-primary rounded-circle"></div>
                                    </div>
                                    <h3 className="mb-0 text-dark fw-semibold"><CountUp end={item.value}/>{item.symbol}</h3>
                                    <h6 className="counter-head text-muted fw-medium mb-0">{item.title}</h6>
                                </div>    
                            </div>
                        )
                    })}
                </div>
            </div>
        </div>
    </div>
    </>
  )
}
