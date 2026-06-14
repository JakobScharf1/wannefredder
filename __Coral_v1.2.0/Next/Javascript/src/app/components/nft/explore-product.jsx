'use client'
import React, { useEffect } from 'react'
import Link from 'next/link'
import Image from 'next/image';

import { nftData } from '@/app/data/data'
import { FiShoppingCart, FiZap } from 'react-icons/fi';

export default function ExploreProduct() {
    useEffect(() => {
       const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
       tooltipTriggerList.forEach(el => {
         new window.bootstrap.Tooltip(el);
       });
     }, []);
  return (
        <div className="row g-4">
            {nftData.slice(0,8).map((item,index)=>( 
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
  )
}
