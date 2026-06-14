import { useEffect } from 'react';
import { Link } from 'react-router-dom'

import { nftData } from '../../data/data'

import { FiShoppingCart, FiZap } from 'react-icons/fi'
import faq from '../../assets/images/faqs.svg'

import TinySlider from "tiny-slider-react";
import 'tiny-slider/dist/tiny-slider.css';

import NftNav from '../../components/navbar/nft-nav'
import NftAbout from '../../components/nft-about';
import NftCta from '../../components/cta/nft-cta';
import BlogOne from '../../components/blog/blog-one';
import FaqOne from '../../components/faq/faq-one';
import Footer from '../../components/footer'
import ScrollToTop from '../../components/scroll-to-top'


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



export default function IndexNft() {
    useEffect(() => {
       const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
       tooltipTriggerList.forEach(el => {
         new window.bootstrap.Tooltip(el);
       });
     }, []);
  return (
    <>
        <NftNav/>

        <section className="bg-half-170 overflow-hidden">
            <span className="modern-app-round top-50 start-50 translate-middle"></span>
            <div className="container">
                <div className="row align-items-center">
                    <div className="col-lg-7 col-md-6">
                        <div className="title-heading">
                            <h1 className="heading mb-3">Discover and collect <span className="text-gradient-primary">extraordinary</span> NFT <span className="text-gradient-primary">artworks</span></h1>
                            <p className="para-desc text-muted">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
                            <div className="mt-4 pt-2">
                                <Link to="/nft-explore" className="btn btn-primary me-1"><i className="mdi mdi-camera-outline align-middle"></i> Explore</Link>
                                <Link to="" className="btn btn-soft-primary">Sell <i className="mdi mdi-arrow-right align-middle"></i></Link>
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
                                                            <img src={item.image} className="img-fluid" alt=""/>
                                                            <div className="bg-overlay bg-black"></div>
                                                            <div className="bid-button position-absolute top-50 translate-y-middle start-0 end-0 text-center">
                                                                <Link to={`/nft-detail/${item.id}`} className="btn btn-sm btn-primary me-1"><FiShoppingCart className="fea icon-sm align-middle me-1"/> Buy Now</Link>
                                                                <Link to={`/nft-detail/${item.id}`} className="btn btn-sm btn-primary"><FiZap className="fea icon-sm align-middle me-1"/> Bid Now</Link>
                                                            </div>
                                                        </div>
                
                                                        <div className="position-absolute top-0 start-0 m-3">
                                                            <Link to="/creator-profile"><img src={item.client} className="avatar avatar-md-sm rounded-pill shadow img-thumbnail" alt=""/></Link>
                                                        </div>
                                                    </div>
                
                                                    <div className="content pt-4 position-relative">
                                                        <Link to={`/nft-detail/${item.id}`} className="text-dark link-title h6">{item.name}</Link>
                
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
                            <Link to="/nft-explore" className="btn btn-link primary text-dark">See More <i className="mdi mdi-arrow-right"></i></Link>
                        </div>
                    </div>
                </div>

                <div className="row g-4">
                    {nftData.slice(0,8).map((item,index)=>( 
                        <div className="col-lg-3 col-md-4 col-sm-6 col-12" key={index}>
                            <div className="nft-item p-4 rounded shadow bg-white">
                                <div className="position-relative">
                                    <div className="nft-image position-relative overflow-hidden rounded shadow">
                                        <img src={item.image} className="img-fluid" alt=""/>
                                        <div className="bg-overlay bg-black"></div>
                                        <div className="bid-button position-absolute bottom-0 start-0 end-0 text-center pb-3">
                                            <Link to={`/nft-detail/${item.id}`} className="btn btn-sm btn-icon btn-pills btn-primary me-1" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Buy Now"><FiShoppingCart className="fea icon-sm align-middle"/></Link>
                                            <Link to={`/nft-detail/${item.id}`} className="btn btn-sm btn-icon btn-pills btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Bid Now"><FiZap className="fea icon-sm align-middle"/></Link>
                                        </div>
                                    </div>

                                    <div className="position-absolute top-0 start-0 m-3">
                                        <Link to="/creator-profile"><img src={item.client} className="avatar avatar-md-sm rounded-pill shadow img-thumbnail" alt=""/></Link>
                                    </div>
                                </div>

                                <div className="content pt-4 position-relative">
                                    <Link to={`/nft-detail/${item.id}`} className="text-dark link-title h6">{item.name}</Link>

                                    <div className="d-flex justify-content-between mt-2">
                                        <span className="rate text-primary">{item.value}</span>
                                        <span className="text-dark">{item.item}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ))}
                </div>

                <div className="row">
                    <div className="col">
                        <div className="text-center d-md-none d-block">
                            <Link to="/nft-explore" className="btn btn-link primary text-dark">See More <i className="mdi mdi-arrow-right"></i></Link>
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
                                    <img src={item.image} className="img-fluid" alt=""/>
                                </div>

                                <div className="position-absolute bottom-0 start-0 end-0 bg-white p-4">
                                    <div className="position-absolute top-0 start-50 translate-middle">
                                        <img src={item.client} className="avatar avatar-small rounded-pill img-thumbnail shadow-md" alt=""/>
                                    </div>

                                    <div className="mt-4 text-center">
                                        <Link to="/nft-explore" className="text-dark link-title h5">{item.tag}</Link>
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
                            <img src={faq} className="img-fluid" alt=""/>
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
