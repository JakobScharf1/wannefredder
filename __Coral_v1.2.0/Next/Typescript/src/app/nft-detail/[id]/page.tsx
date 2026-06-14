import Link from 'next/link'
import Image from 'next/image'
import { use } from 'react'

import { FiShoppingCart, FiZap } from 'react-icons/fi'

import NftNav from '../../components/navbar/nft-nav'
import Footer from '../../components/footer'
import ScrollToTop from '../../components/scroll-to-top'
import { nftData } from '@/app/data/data'


export default function NftDetail({ params }:{ params:any }) {
    const { id }:any = use(params)

    let data:any = nftData.find((blog)=>blog.id === parseInt(id))
    
  return (
    <>
        <NftNav/>

        <section className="section mt-5 mt-lg-0">
            <div className="container">
                <div className="row g-4">
                    <div className="col-lg-5 col-md-6">
                        <div className="sticky-bar">
                            <Image src={data && data.image} width={0} height={0} sizes='100vw' style={{width:'100%', height:'auto'}} className="img-fluid rounded shadow" alt=""/>
                        </div>
                    </div>

                    <div className="col-lg-7 col-md-6">
                        <div className="title-heading">
                            <h4 className="h3 mb-0">{data && data.name}</h4>
                        </div>

                        <div className="row">
                            <div className="col-12 mt-4">
                                <h6>Current Bid</h6>
                                <h4 className="mb-0">4.85 ETH</h4>
                                <small className="mb-0 text-muted">$450.48USD</small>
                            </div>

                            <div className="col-12 mt-4">
                                <Link href="/nft-detail" className="btn btn-sm btn-primary me-1"><FiShoppingCart className="fea icon-sm align-middle me-1"/> Buy Now</Link>
                                <Link href="/nft-detail" className="btn btn-sm btn-primary"><FiZap className="fea icon-sm align-middle me-1"/> Bid Now</Link>
                            </div>
                        </div>

                        <p className="text-muted mt-4">Hey guys! New exploration about NFT Marketplace Web Design, this time I'm inspired by one of my favorite NFT website called Coral (with crypto payment)! What do you think?</p>
                        <p className="text-muted">What does it mean? Biomechanics is the study of the structure, function and motion of the mechanical aspects of biological systems, at any level from whole organisms to organs, cells and cell organelles, using the methods of mechanics. Biomechanics is a branch of biophysics.</p>
                        <h6>Owner</h6>

                        <div className="creators creator-primary d-flex align-items-center">
                            <div className="position-relative">
                                <Image src={data.client} width={45} height={45} className="avatar avatar-md-sm shadow-md rounded-pill" alt=""/>
                            </div>

                            <div className="ms-3">
                                <h6 className="mb-0"><Link href="/creators" className="text-dark name">@StreetBoy</Link></h6>
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
