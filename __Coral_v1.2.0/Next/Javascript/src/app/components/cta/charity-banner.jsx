'use client'
import { useState, useEffect } from "react";
import Link from "next/link";
import VideoOne from "../video/video-one";

export default function CharityBanner() {
      const images = [
        '/images/hero/charity1.jpg',
        '/images/hero/charity2.jpg',
        '/images/hero/charity3.jpg',
      ];
      const [currentImageIndex, setCurrentImageIndex] = useState(0);

      useEffect(() => {
        const interval = setInterval(() => {
          setCurrentImageIndex((prevIndex) => 
            (prevIndex + 1) % images.length 
          );
        }, 5000);
    
        return () => clearInterval(interval);
      }, [images.length]);
  return (
    <section className="bg-half-260" id="home" style={{backgroundImage:`url(${images[currentImageIndex]})`}}>
        <div className="bg-overlay bg-gradient-overlay"></div>
        <div className="container">
            <div className="row align-items-center mt-5">
                <div className="col-lg-7 col-md-8 order-md-1 order-2">
                    <div className="title-heading">
                        <h1 className="heading text-white title-dark fw-bold mb-4 text-capitalize">Give a Helping Hand <br/> for Children</h1>
                        <p className="para-desc text-white-50">We value every human life placed in our hands and constantly work towards meeting the expectations of our patients.</p>
                        
                        <div className="mt-4 pt-2">
                            <Link href="#" className="btn btn-primary me-1">Enroll Today</Link>
                            <Link href="#" className="btn btn-soft-primary">Make a Donation</Link>
                        </div>
                    </div>
                </div>

                <div className="col-lg-5 col-md-4 order-md-2 order-1">
                    <VideoOne className="d-md-flex justify-content-center"/>
                </div>
            </div>
        </div>
    </section>
  )
}
