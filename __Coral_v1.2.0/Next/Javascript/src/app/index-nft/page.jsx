import React from 'react'
import Link from 'next/link'
import Image from 'next/image'

import NftNav from '../components/navbar/nft-nav'
import NftBanner from '../components/banner/nft-banner'
import ExploreProduct from '../components/nft/explore-product'
import NftAbout from '../components/nft-about'
import NftCta from '../components/cta/nft-cta'
import BlogOne from '../components/blog/blog-one'
import FaqOne from '../components/faq/faq-one'
import Footer from '../components/footer'
import ScrollToTop from '../components/scroll-to-top'

import { nftData } from '../data/data'

export default function IndexNft() {
  return (
    <>
        <NftNav/>  

        <NftBanner/>

        <section className="section pt-0">
            <div className="container">
                <div className="row align-items-end mb-4 pb-2">
                    <div className="col-md-8">
                        <div className="section-title">
                            <h4 className="title mb-3">Explore Hot Products</h4>
                            <p className="text-muted mb-0">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
                        </div>
                    </div>

                    <div className="col-md-4">
                        <div className="text-end d-md-block d-none">
                            <Link href="/nft-explore" className="btn btn-link primary text-dark">See More <i className="mdi mdi-arrow-right"></i></Link>
                        </div>
                    </div>
                </div>

                <ExploreProduct/>

                <div className="row">
                    <div className="col">
                        <div className="text-center d-md-none d-block">
                            <Link href="/nft-explore" className="btn btn-link primary text-dark">See More <i className="mdi mdi-arrow-right"></i></Link>
                        </div>
                    </div>
                </div>
            </div>

            <NftAbout/>
        </section> 

        <NftCta/>

        <section className="section">
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Top Collections</h4>
                            <p className="text-muted para-desc mb-0 mx-auto">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
                        </div>
                    </div>
                </div>

                <div className="row g-4">
                    {nftData.slice(4,8).map((item,index)=>(
                        <div className="col-lg-3 col-md-6 col-12" key={index}>
                            <div className="nft-item nft-collection rounded shadow position-relative overflow-hidden">
                                <div className="nft-image">
                                    <Image src={item.image} width={0} height={0} sizes="100vw" style={{width:'100%', height:'auto'}} className="img-fluid" alt=""/>
                                </div>

                                <div className="position-absolute bottom-0 start-0 end-0 bg-white p-4">
                                    <div className="position-absolute top-0 start-50 translate-middle">
                                        <Image src={item.client} width={65} height={65} className="avatar avatar-small rounded-pill img-thumbnail shadow-md" alt=""/>
                                    </div>

                                    <div className="mt-4 text-center">
                                        <Link href="/nft-explore" className="text-dark link-title h5">{item.tag}</Link>
                                        <p className="text-muted mb-0 small">27 Items</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ))}
                </div>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row align-items-center">
                    <div className="col-lg-6 col-md-6">
                        <div className="position-relative">
                            <Image src='/images/faqs.svg' width={0} height={0} sizes='100vw' style={{width:'100%', height:'auto'}} className="img-fluid" alt=""/>
                            <div className="modern-app-round round-small"></div>
                        </div>
                    </div>

                    <div className="col-lg-6 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                        <div className="section-title mb-4 ms-lg-3">
                            <h4 className="title mb-3">Frequently Asked Questions</h4>
                            <p className="text-muted para-desc mb-0">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
                            <FaqOne/>
                        </div>
                    </div>
                </div>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Blog Or News</h4>
                            <p className="text-muted para-desc mx-auto mb-0">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
                        </div>
                    </div>
                </div>
                <BlogOne/>
            </div>
        </section>

        <Footer/>

        <ScrollToTop/>
    </>
  )
}
