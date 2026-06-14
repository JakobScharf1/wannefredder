import React from 'react'
import { Link } from 'gatsby'

import bg from '../assets/images/hero/pages.jpg'
import favIcon from '../assets/images/favicon.ico'

import Footer from '../components/footer'
import ScrollToTop from '../components/scroll-to-top'
import NftNavLight from '../components/navbar/nft-nav-light'

import { creator } from '../data/data'

export default function Creators() {
  return (
    <>
        <NftNavLight/>

        <section className="bg-half-170 d-table w-100" style={{backgroundImage:`url(${bg})`, backgroundPosition:'center'}}>
            <div className="bg-overlay bg-gradient-overlay"></div>
            <div className="container">
                <div className="row mt-5 justify-content-center">
                    <div className="col-12">
                        <div className="title-heading text-center">
                            <h5 className="heading fw-semibold mb-0 sub-heading text-white title-dark">Creators</h5>
                        </div>
                    </div>
                </div>

                <div className="position-middle-bottom">
                    <nav aria-label="breadcrumb" className="d-block">
                        <ul className="breadcrumb breadcrumb-muted mb-0 p-0">
                            <li className="breadcrumb-item"><Link to="/">Coral</Link></li>
                            <li className="breadcrumb-item active" aria-current="page">Creators</li>
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
                    {creator.map((item,index)=>( 
                        <div className="col-lg-3 col-md-4 col-sm-6 col-12" key={index}>
                            <div className="position-relative rounded shadow overflow-hidden">
                                <div className="bg-gradient-primary p-4 pt-5"></div>
                                <div className="position-relative">
                                    <div className="position-absolute top-0 start-50 translate-middle">
                                        <img src={item.image} className="avatar avatar-small rounded-pill shadow-sm img-thumbnail bg-light" alt=""/>
                                    </div>
                                    <div className="content text-center p-4">
                                        <div className="mt-4">
                                            <Link to="/creator-profile" className="text-dark h6 link-title mb-0">{item.name}</Link>
                                        </div>
                                        <small className="text-muted">{item.title}</small>

                                        <div className="mt-3">
                                            <Link to="#" className="btn btn-sm btn-soft-primary">Follow</Link>
                                        </div>
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

export function Head() {
    return (
      <>
        <title>Coral - Gatsby Multipurpose Landing Template</title>
        <link href={favIcon} rel="shortcut icon"></link>
      </>
    )
}
