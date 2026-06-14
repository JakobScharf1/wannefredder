'use client'
import React from 'react'
import Link from 'next/link'
import dynamic from 'next/dynamic';

const TinySlider = dynamic(()=>import("tiny-slider-react"),{ssr:false})
import 'tiny-slider/dist/tiny-slider.css';

import { nftData } from '@/app/data/data';

import { FiShoppingCart, FiZap } from 'react-icons/fi';
import Image from 'next/image';

const settings = {
    items: 1,
    controls: false,
    mouseDrag: true,
    loop: true,
    rewind: true,
    autoplay: true,
    autoplayButtonOutput: false,
    autoplayTimeout: 3000,
    navPosition: "bottom",
    speed: 400,
    gutter: 0,
};

export default function NftBanner() {

  return (
        <section className="bg-half-170 overflow-hidden">
            <span className="modern-app-round top-50 start-50 translate-middle"></span>
            <div className="container">
                <div className="row align-items-center">
                    <div className="col-lg-7 col-md-6">
                        <div className="title-heading">
                            <h1 className="heading mb-3">Discover and collect <span className="text-gradient-primary">extraordinary</span> NFT <span className="text-gradient-primary">artworks</span></h1>
                            <p className="para-desc text-muted">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
                            <div className="mt-4 pt-2">
                                <Link href="/nft-explore" className="btn btn-primary me-1"><i className="mdi mdi-camera-outline align-middle"></i> Explore</Link>
                                <Link href="" className="btn btn-soft-primary">Sell <i className="mdi mdi-arrow-right align-middle"></i></Link>
                            </div>
                        </div>
                    </div>

                    <div className="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div className="position-relative">
                            <div className="tiny-single-item">
                                <TinySlider settings={settings}>
                                    {nftData.slice(0,3).map((item,index)=>( 
                                        <div className="tiny-slide" key={index}>
                                            <div className="m-2">
                                                <div className="nft-item p-4 rounded shadow bg-white">
                                                    <div className="position-relative">
                                                        <div className="nft-image position-relative overflow-hidden rounded shadow">
                                                            <Image src={item.image} width={0} height={0} sizes='100vw' style={{width:'100%', height:'auto'}} className="img-fluid" alt=""/>
                                                            <div className="bg-overlay bg-black"></div>
                                                            <div className="bid-button position-absolute top-50 translate-y-middle start-0 end-0 text-center">
                                                                <Link href={`/nft-detail/${item.id}`} className="btn btn-sm btn-primary me-1"><FiShoppingCart className="fea icon-sm align-middle me-1"/> Buy Now</Link>
                                                                <Link href={`/nft-detail/${item.id}`} className="btn btn-sm btn-primary"><FiZap className="fea icon-sm align-middle me-1"/> Bid Now</Link>
                                                            </div>
                                                        </div>
                
                                                        <div className="position-absolute top-0 start-0 m-3">
                                                            <Link href="/creator-profile"><Image src={item.client} width={45} height={45} className="avatar avatar-md-sm rounded-pill shadow img-thumbnail" alt=""/></Link>
                                                        </div>
                                                    </div>
                
                                                    <div className="content pt-4 position-relative">
                                                        <Link href={`/nft-detail/${item.id}`} className="text-dark link-title h6">{item.name}</Link>
                
                                                        <div className="d-flex justify-content-between mt-2">
                                                            <span className="rate text-primary">{item.value}</span>
                                                            <span className="text-dark">{item.item}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ))}
                                </TinySlider>
                            </div>
    
                            <div className="position-absolute top-0 start-0 translate-middle z-n1">
                                <p className="avatar avatar-small bg-gradient-primary rounded mb-0 spin-anything" style={{opacity: '0.1'}}></p>
                            </div>
    
                            <div className="position-absolute top-100 start-100 translate-middle z-n1">
                                <p className="avatar avatar-small bg-gradient-primary rounded-pill mb-0 zoom-in-out" style={{opacity: '0.1'}}></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  )
}
