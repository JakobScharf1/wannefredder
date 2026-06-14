'use client'
import { useState } from 'react'
import Link from 'next/link'
import Image from 'next/image'

import Navlight from '../components/navbar/navlight'
import Footer from '../components/footer'
import ScrollToTop from '../components/scroll-to-top'

import { portfolioData } from '../data/data'

import { Lightbox } from "yet-another-react-lightbox";
import "yet-another-react-lightbox/styles.css";

export default function PortfolioClassicThree() {
    let [open, setOpen] = useState(false);
    let [currentImageIndex, setCurrentImageIndex] = useState(0);

        let handleImageClick = (index) => {
        setCurrentImageIndex(index);
        setOpen(true);
    };
    
    const slides = portfolioData.map((item) => ({ src: item.image }));
    
  return (
    <>
        <Navlight/>

        <section className="bg-half-170 d-table w-100" style={{backgroundImage:`url('/images/hero/pages.jpg')`, backgroundPosition:'center'}}>
            <div className="bg-overlay bg-gradient-overlay"></div>
            <div className="container">
                <div className="row mt-5 justify-content-center">
                    <div className="col-12">
                        <div className="title-heading text-center">
                            <h5 className="heading fw-semibold mb-0 sub-heading text-white title-dark">Portfolio</h5>
                        </div>
                    </div>
                </div>

                <div className="position-middle-bottom">
                    <nav aria-label="breadcrumb" className="d-block">
                        <ul className="breadcrumb breadcrumb-muted mb-0 p-0">
                            <li className="breadcrumb-item"><Link href="/">Coral</Link></li>
                            <li className="breadcrumb-item"><Link href="#">Portfolio</Link></li>
                            <li className="breadcrumb-item"><Link href="#">Classic</Link></li>
                            <li className="breadcrumb-item active" aria-current="page">Three Columns</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <div className="position-relative">
            <div className="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>

        <section className="section">
            <div className="container">
                <div className="row g-4">
                    {portfolioData.map((item,index)=>( 
                        <div className="col-lg-4 col-md-6" key={index}>
                            <div className="portfolio">
                                <Link href="#" className="lightbox" onClick={()=>handleImageClick(index)}><Image src={item.image} width={0} height={0} sizes='100vw' style={{width:'100%', height:'auto'}} className="img-fluid rounded shadow" alt=""/></Link>
    
                                <div className="content mt-3">
                                    <Link href="#" className="text-dark fs-5 fw-medium link-title">{item.title}</Link>
                                    <p className="text-muted mb-0">{item.desc}</p>
                                </div>
                            </div>
                        </div>
                    ))}
                </div>
                <Lightbox
                    open={open}
                    index={currentImageIndex}
                    close={() => setOpen(false)}
                    slides={slides}
                />

                <div className="row">
                    <div className="col-12 mt-4">
                        <ul className="pagination justify-content-center mb-0">
                            <li className="page-item">
                                <Link className="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i className="mdi mdi-chevron-left align-middle fs-6"></i></span>
                                </Link>
                            </li>
                            <li className="page-item"><Link className="page-link" href="#">1</Link></li>
                            <li className="page-item active"><Link className="page-link" href="#">2</Link></li>
                            <li className="page-item"><Link className="page-link" href="#">3</Link></li>
                            <li className="page-item">
                                <Link className="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i className="mdi mdi-chevron-right align-middle fs-6"></i></span>
                                </Link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <Footer/>

        <ScrollToTop/>
    </>
  )
}
