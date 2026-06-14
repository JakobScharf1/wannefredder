import { useEffect } from 'react'
import { Link } from 'react-router-dom'
import { FiCopy, FiShoppingCart, FiUpload, FiZap } from 'react-icons/fi'

import blog from '../../assets/images/blog/1.jpg'
import team from '../../assets/images/team/1.jpg'

import { nftData } from '../../data/data'

import NftNav from '../../components/navbar/nft-nav'
import Footer from '../../components/footer'
import ScrollToTop from '../../components/scroll-to-top'

export default function CreatorProfile() {
    useEffect(() => {
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        tooltipTriggerList.forEach(el => {
            new window.bootstrap.Tooltip(el);
        });
    }, []);
  return (
    <>
        <NftNav/>

        <section className="section pb-0 position-relative mt-4 mt-lg-0">
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col">
                        <img src={blog} className="rounded shadow-sm img-fluid avatar avatar-ex-large w-100 object-fit-cover" alt=""/>
                        <div className="position-relative text-center">
                            <div className="position-absolute top-0 start-50 translate-middle">
                                <img src={team} className="avatar avatar-small img-thumbnail rounded-pill shadow" alt=""/>
                            </div>
                        </div>

                        <div className="content text-center">
                            <h5 className="mb-3 mt-5">streetboyyy</h5>
                            <small className="text-muted px-2 py-1 rounded shadow">bhcedeh5sdijuj-husac4saiu <Link to="#" className="text-primary h5 ms-1"><FiCopy className="fea icon-sm"/></Link></small>

                            <h6 className="mt-3 mb-0">Artist, UX / UI designer, and Entrepreneur</h6>

                            <div className="mt-4">
                                <Link to="/profile-setting" className="btn btn-sm btn-outline-primary mx-1">Edit Profile</Link>
                                <Link to="/upload-item" className="btn btn-sm btn-icon btn-outline-primary mx-1"><FiUpload className="fea icon-sm"/></Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>   

        <section className="section pt-5">
            <div className="container">
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
            </div>
        </section>

        <Footer/>

        <ScrollToTop/>
    </>
  )
}
