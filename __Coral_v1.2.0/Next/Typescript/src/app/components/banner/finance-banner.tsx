'use client'
import Link from 'next/link';
import React, { useEffect, useState } from 'react'

export default function FinanceBanner() {
    const images:string[] = [
        '/images/hero/bg1.jpg',
        '/images/hero/bg2.jpg',
        '/images/hero/bg3.jpg',
      ];

    const [currentImageIndex, setCurrentImageIndex] = useState<number>(0); 
    
    useEffect(() => {
        const interval = setInterval(() => {
          setCurrentImageIndex((prevIndex) => 
            (prevIndex + 1) % images.length 
          );
        }, 5000);
    
        return () => clearInterval(interval);
      }, [images.length]);
      
  return (
        <section className="d-flex align-items-center bg-finance" style={{backgroundImage:`url(${images[currentImageIndex]})`}}>
            <div className="container position-relative z-1">
                <div className="row">
                    <div className="col-md-6 background">
                        <div className="title-heading pe-lg-5 pe-md-4">
                            <span className="badge bg-primary mb-2">Coral Finance</span>
                            <h1 className="heading fw-semibold text-capitalize mb-3">Maximize your <br/> <span className="border-animation position-relative">income and build</span> lasting wealth.</h1>
                            <p className="para-desc text-muted mb-0">Ensuring secure transactions and seamless financial experiences for our users globally.</p>
                        
                            <div>
                                <Link href="#" className="btn btn-primary me-1 mt-4">Get Started <i className="mdi mdi-arrow-right"></i></Link>
                                <Link href="#" className="btn btn-outline-primary mt-4">Learn More</Link>
                            </div>

                            <ul className="list-unstyled mt-3 text-muted mb-0">
                                <li className="list-inline-item me-4"><i className="mdi mdi-check text-primary me-2"></i>Hire experts</li>
                                <li className="list-inline-item me-4"><i className="mdi mdi-check text-primary me-2"></i>Avoid scams</li>
                                <li className="list-inline-item me-4"><i className="mdi mdi-check text-primary me-2"></i>Contingecy fees</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  )
}
