import React from 'react'
import { Link } from 'gatsby'
import { FiShoppingCart, FiZap } from 'react-icons/fi'

import nft from '../assets/images/nft/1.jpg'
import team1 from '../assets/images/team/1.jpg'
import favIcon from '../assets/images/favicon.ico'

import NftNav from '../components/navbar/nft-nav'
import Footer from '../components/footer'
import ScrollToTop from '../components/scroll-to-top'

import { nftData } from '../data/data'

export default function NftDetail({ params }) {
    let id = params.id
    let data  = nftData.find((item)=>item.id === parseInt(id));
  return (
    <>
        <NftNav/>

        <section className="section mt-5 mt-lg-0">
            <div className="container">
                <div className="row g-4">
                    <div className="col-lg-5 col-md-6">
                        <div className="sticky-bar">
                            <img src={data && data.image ? data.image : nft} className="img-fluid rounded shadow" alt=""/>
                        </div>
                    </div>

                    <div className="col-lg-7 col-md-6">
                        <div className="title-heading">
                            <h4 className="h3 mb-0">{data && data.name ? data.name : 'Deep Sea Phantasy'}</h4>
                        </div>

                        <div className="row">
                            <div className="col-12 mt-4">
                                <h6>Current Bid</h6>
                                <h4 className="mb-0">4.85 ETH</h4>
                                <small className="mb-0 text-muted">$450.48USD</small>
                            </div>

                            <div className="col-12 mt-4">
                                <Link to="/nft-detail" className="btn btn-sm btn-primary me-1"><FiShoppingCart className="fea icon-sm align-middle me-1"/> Buy Now</Link>
                                <Link to="/nft-detail" className="btn btn-sm btn-primary"><FiZap className="fea icon-sm align-middle me-1"/> Bid Now</Link>
                            </div>
                        </div>

                        <p className="text-muted mt-4">Hey guys! New exploration about NFT Marketplace Web Design, this time I'm inspired by one of my favorite NFT website called Coral (with crypto payment)! What do you think?</p>
                        <p className="text-muted">What does it mean? Biomechanics is the study of the structure, function and motion of the mechanical aspects of biological systems, at any level from whole organisms to organs, cells and cell organelles, using the methods of mechanics. Biomechanics is a branch of biophysics.</p>
                        <h6>Owner</h6>

                        <div className="creators creator-primary d-flex align-items-center">
                            <div className="position-relative">
                                <img src={data && data.client ? data.client : team1} className="avatar avatar-md-sm shadow-md rounded-pill" alt=""/>
                            </div>

                            <div className="ms-3">
                                <h6 className="mb-0"><Link to="/creators" className="text-dark name">@StreetBoy</Link></h6>
                            </div>
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

export function Head() {
    return (
      <>
        <title>Coral - Gatsby Multipurpose Landing Template</title>
        <link href={favIcon} rel="shortcut icon"></link>
      </>
    )
}

