'use client'
import { useEffect } from 'react';
import Link from 'next/link';
import Image from 'next/image';

import NftNavLight from '../components/navbar/nft-nav-light'
import Footer from '../components/footer';
import ScrollToTop from '../components/scroll-to-top';

import { nftData } from '../data/data'

import { FiShoppingCart, FiZap } from 'react-icons/fi';

interface NftData{
    id: number;
    image: string;
    client: string;
    name: string;
    value: string;
    item: string;
    tag: string;
}

export default function NftExplore() {

    useEffect(() => {
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        tooltipTriggerList.forEach(el => {
            new window.bootstrap.Tooltip(el);
        });
    }, []);
  return (
    <>
        <NftNavLight/>

        <section className="bg-half-170 d-table w-100" style={{backgroundImage:`url('/images/hero/pages.jpg')`, backgroundPosition:'center'}}>
            <div className="bg-overlay bg-gradient-overlay"></div>
            <div className="container">
                <div className="row mt-5 justify-content-center">
                    <div className="col-12">
                        <div className="title-heading text-center">
                            <h5 className="heading fw-semibold mb-0 sub-heading text-white title-dark">Explore Items</h5>
                        </div>
                    </div>
                </div>

                <div className="position-middle-bottom">
                    <nav aria-label="breadcrumb" className="d-block">
                        <ul className="breadcrumb breadcrumb-muted mb-0 p-0">
                            <li className="breadcrumb-item"><Link href="/">Coral</Link></li>
                            <li className="breadcrumb-item active" aria-current="page">Explore</li>
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
                    {nftData.map((item:NftData,index:number)=>( 
                        <div className="col-lg-3 col-md-4 col-sm-6 col-12" key={index}>
                            <div className="nft-item p-4 rounded shadow bg-white">
                                <div className="position-relative">
                                    <div className="nft-image position-relative overflow-hidden rounded shadow">
                                        <Image src={item.image} width={0} height={0} sizes='100vw' style={{width:'100%', height:'auto'}} className="img-fluid" alt=""/>
                                        <div className="bg-overlay bg-black"></div>
                                        <div className="bid-button position-absolute bottom-0 start-0 end-0 text-center pb-3">
                                            <Link href={`/nft-detail/${item.id}`} className="btn btn-sm btn-icon btn-pills btn-primary me-1" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Buy Now"><FiShoppingCart className="fea icon-sm align-middle"/></Link>
                                            <Link href={`/nft-detail/${item.id}`} className="btn btn-sm btn-icon btn-pills btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Bid Now"><FiZap className="fea icon-sm align-middle"/></Link>
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
                    ))}
                </div>

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
