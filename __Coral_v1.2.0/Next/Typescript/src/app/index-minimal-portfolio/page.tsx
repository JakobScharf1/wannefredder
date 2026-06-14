'use client'
import Link from 'next/link'
import Image from 'next/image';
import React, { useState } from 'react'

import Navdark from '../components/navbar/navdark'
import Footer from '../components/footer';
import ScrollToTop from '../components/scroll-to-top';

import { masonaryData } from '../data/data';

import { Lightbox } from "yet-another-react-lightbox";
import "yet-another-react-lightbox/styles.css";

import { FiCamera } from 'react-icons/fi';

interface Portfolio{
    id: number;
    image: string;
    title: string;
    name: string;
}

export default function IndexMinimalPortfolio() {
    let [open, setOpen] = useState<boolean>(false);
    let [isOpen, setIsOpen] = useState<boolean>(false);
    let [currentImageIndex, setCurrentImageIndex] = useState<number>(0);

     let handleImageClick = (index:number) => {
        setCurrentImageIndex(index);
        setOpen(true);
    };
    
    const slides = masonaryData.map((item) => ({ src: item.image }));

  return (
    <>
        <div id="boxed-layput" style={{backgroundImage:`url('/images/hero/bg-squre.png')`}}>
            <div className="boxed">
                <Navdark bg="boxed-home" position="nav-right" tagline=""/>

                <section className="section overflow-hidden">
                    <div className="container">
                        <div className="row align-items-center g-4">
                            <div className="col-lg-7 col-md-6 order-2 order-md-1">
                                <div className="title-heading">
                                    <h1 className="display-4 fw-bold mb-3">Discover top creative <br/> <span className="text-primary">talents</span> & <span className="text-primary">portfolios</span></h1>
                                    <p className="para-desc text-muted mb-0">An independent design agency based in Newyork.</p>
                                </div>
                            </div>

                            <div className="col-lg-5 col-md-6 order-1 order-md-2">
                                <div className="position-relative">
                                    <Image src='/images/logo-icon.png' width={0} height={0} sizes="100vw" style={{width:'100%', height:'auto'}} className="img-fluid opacity-25" alt=""/>
                                    <div className="position-absolute top-50 start-50 translate-middle">
                                        <Link href="#" onClick={() => setIsOpen(!isOpen)} className="avatar avatar-md-md rounded-pill shadow bg-primary d-flex justify-content-center align-items-center lightbox">
                                            <i className="mdi mdi-play mdi-24px text-white"></i>
                                        </Link>
                                    </div>

                                    {isOpen &&
                                        <div className="modal show d-block " tabIndex={-1} style={{ backgroundColor: '#00000099' }}>
                                            <div className="modal-dialog modal-dialog-centered modal-lg position-relative">
                                                <div className="modal-content">
                                                    <div className="modal-header py-2">
                                                        <button type="button" className="btn-close" aria-label="Close" onClick={() => setIsOpen(!isOpen)}></button>
                                                    </div>
                                                    <div className="modal-body p-2">
                                                        <div className="ratio ratio-16x9">
                                                            <iframe src="https://www.youtube.com/embed/yba7hPeTSjk?playlist=yba7hPeTSjk&loop=1" title="YouTube video" allowFullScreen ></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    }
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section className="section pt-1">
                    <div className="container">
                        <div className="column-4 gap-0" id="grid ">
                            {masonaryData.map((item:Portfolio,index:number)=>( 
                                <div className="" key={index}>
                                    <div className="portfolio masonry position-relative overflow-hidden">
                                        <div className="position-relative overflow-hidden image">
                                            <Image src={item.image} width={0} height={0} sizes="100vw" style={{width:'100%', height:'auto'}} className="img-fluid" alt=""/>
                                            <div className="position-absolute start-0 end-0 top-0 bottom-0 overlay rounded bg-black m-4"></div>
                                        </div>

                                        <div className="content">
                                            <div className="title-body p-3 position-absolute start-0 end-0 m-4">
                                                <Link href="#" className="link-title text-white fs-5 fw-medium">Artboard Studio</Link>
                                                <p className="text-white-50 mb-0">Custom Branding</p>
                                            </div>

                                            <div className="p-3 position-absolute top-0 end-0 m-4">
                                                <Link href="#" onClick={()=>handleImageClick(item.id - 1)} className="btn btn-sm btn-icon btn-pills btn-primary lightbox"><FiCamera className="fea icon-sm"/></Link>
                                            </div>
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
                            <div className="col">
                                <div className="mt-4 text-center">
                                    <Link href="#" className="btn btn-primary">See more works <i className="mdi mdi-arrow-right"></i></Link>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <Footer/>

                <ScrollToTop/>
            </div>
        </div>
    </>
  )
}
