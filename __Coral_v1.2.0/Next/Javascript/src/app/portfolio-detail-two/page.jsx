'use client'
import { useState } from 'react'
import Link from 'next/link'
import Image from 'next/image'

import Navlight from '../components/navbar/navlight'
import Footer from '../components/footer'
import ScrollToTop from '../components/scroll-to-top'

import { FiCamera } from 'react-icons/fi'

import { masonaryData } from '../data/data'

import { Lightbox } from "yet-another-react-lightbox";
import "yet-another-react-lightbox/styles.css";

export default function PortfolioDetailTwo() {
     let [open, setOpen] = useState(false);
    let [currentImageIndex, setCurrentImageIndex] = useState(0);

        let handleImageClick = (index) => {
        setCurrentImageIndex(index);
        setOpen(true);
    };
    
    const slides = masonaryData.map((item) => ({ src: item.image }));
  return (
    <>
        <Navlight/> 

        <section className="bg-half-170 d-table w-100" style={{backgroundImage:`url('/images/hero/pages.jpg')`, backgroundPosition:'center'}}>
            <div className="bg-overlay bg-gradient-overlay"></div>
            <div className="container">
                <div className="row mt-5 justify-content-center">
                    <div className="col-12">
                        <div className="title-heading text-center">
                            <h5 className="heading fw-semibold mb-0 sub-heading text-white title-dark">Artboard Studio</h5>
                        </div>
                    </div>
                </div>

                <div className="position-middle-bottom">
                    <nav aria-label="breadcrumb" className="d-block">
                        <ul className="breadcrumb breadcrumb-muted mb-0 p-0">
                            <li className="breadcrumb-item"><Link href="/">Coral</Link></li>
                            <li className="breadcrumb-item"><Link href="#">Portfolio</Link></li>
                            <li className="breadcrumb-item active" aria-current="page">Artboard Studio</li>
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
                <div id="grid" className="column-4 gap-2">
                    {masonaryData.slice(0,8).map((item,index)=>( 
                        <div className="mb-2" key={index}>
                            <div className="portfolio masonry rounded shadow position-relative overflow-hidden">
                                <div className="position-relative overflow-hidden image">
                                    <Image src={item.image} width={0} height={0} sizes='100vw' style={{width:'100%', height:'auto'}} className="img-fluid rounded shadow" alt=""/>
                                    <div className="position-absolute start-0 end-0 top-0 bottom-0 overlay rounded bg-black m-4"></div>
                                </div>

                                <div className="content">
                                    <div className="position-absolute top-50 start-50 translate-middle">
                                        <Link href="#" onClick={()=>handleImageClick(item.id - 1)} className="btn btn-sm btn-icon btn-pills btn-primary lightbox"><FiCamera className="fea icon-sm"/></Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ))}

                    <Lightbox
                        open={open}
                        index={currentImageIndex}
                        close={() => setOpen(false)}
                        slides={slides}
                    />
                </div>
                
                <div className="row mt-4 g-4">
                    <div className="col-lg-8 col-md-6">
                        <div className="section-title">
                            <h4 className="title mb-4">Project Description</h4>
    
                            <p className="text-muted">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words. This ancient dummy text is also incomprehensible, but it imitates the rhythm of most European languages in Latin script. The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout.</p>
                            <p className="text-muted mb-0">Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. If the fill text is intended to illustrate the characteristics of different typefaces, it sometimes makes sense to select texts containing the various letters and symbols specific to the output language.</p>
                        </div>
                    </div>

                    <div className="col-lg-4 col-md-6">
                        <div className="section-title sticky-bar">
                            <h4 className="title mb-4">Project Details</h4>

                            <dl className="row mb-0">
                                <dt className="col-md-4 fw-medium col-5">Client :</dt>
                                <dd className="col-md-8 col-7 text-muted">Calvin Carlo</dd>

                                <dt className="col-md-4 fw-medium col-5">Category :</dt>
                                <dd className="col-md-8 col-7 text-muted">Web Design</dd>

                                <dt className="col-md-4 fw-medium col-5">Date :</dt>
                                <dd className="col-md-8 col-7 text-muted">15th April 2025</dd>

                                <dt className="col-md-4 fw-medium col-5">Website :</dt>
                                <dd className="col-md-8 col-7 text-muted">www.yourdomain.com</dd>

                                <dt className="col-md-4 fw-medium col-5">Location :</dt>
                                <dd className="col-md-8 col-7 text-muted">3/2/64 Mongus Street, UK</dd>
                            </dl>
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
