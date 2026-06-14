import React from 'react'
import { Link } from 'gatsby'
import bg from '../assets/images/hero/pages.jpg'
import favIcon from '../assets/images/favicon.ico'

import Navlight from '../components/navbar/navlight'
import Footer from '../components/footer'
import ScrollToTop from '../components/scroll-to-top'

import { portfolioData } from '../data/data'


export default function PortfolioCreativeFive() {
  return (
    <>
    <Navlight/>
     
        <section className="bg-half-170 d-table w-100" style={{backgroundImage:`url(${bg})`, backgroundPosition:'center'}}>
            <div className="bg-overlay bg-gradient-overlay"></div>
            <div className="container">
                <div className="row mt-5 justify-content-center">
                    <div className="col-12">
                        <div className="title-heading text-center">
                            <h5 className="heading fw-semibold mb-0 sub-heading text-white title-dark">Portfolio</h5>
                        </div>
                    </div>
                </div>

                <div className="position-middle-bottom">
                    <nav aria-label="breadcrumb" className="d-block">
                        <ul className="breadcrumb breadcrumb-muted mb-0 p-0">
                            <li className="breadcrumb-item"><Link to="/">Coral</Link></li>
                            <li className="breadcrumb-item"><Link to="#">Portfolio</Link></li>
                            <li className="breadcrumb-item"><Link to="#">Creative</Link></li>
                            <li className="breadcrumb-item active" aria-current="page">Five Columns</li>
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
            <div className="container-fluid">
                <div className="row row-cols-lg-5 row-cols-md-3 row-cols-1 g-4">
                    {portfolioData.slice(0,10).map((item,index)=>( 
                        <div className="col" key={index}>
                            <div className="portfolio creative rounded shadow position-relative overflow-hidden">
                                <div className="position-relative overflow-hidden image">
                                    <img src={item.image} className="img-fluid" alt=""/>
                                    <div className="position-absolute start-0 end-0 top-0 bottom-0 overlay bg-dark"></div>
                                </div>
    
                                <div className="content position-absolute bottom-0 start-0 end-0 m-4">
                                    <Link to="#" className="text-white fs-5 fw-medium link-title">{item.title}</Link>
                                    <p className="text-white-50 mb-0">{item.desc}</p>
                                </div>
                            </div>
                        </div>
                    ))}
                </div>

                <div className="row">
                    <div className="col-12 mt-4">
                        <ul className="pagination justify-content-center mb-0">
                            <li className="page-item">
                                <Link className="page-link" to="#" aria-label="Previous">
                                    <span aria-hidden="true"><i className="mdi mdi-chevron-left align-middle fs-6"></i></span>
                                </Link>
                            </li>
                            <li className="page-item"><Link className="page-link" to="#">1</Link></li>
                            <li className="page-item active"><Link className="page-link" to="#">2</Link></li>
                            <li className="page-item"><Link className="page-link" to="#">3</Link></li>
                            <li className="page-item">
                                <Link className="page-link" to="#" aria-label="Next">
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

export function Head() {
    return (
      <>
        <title>Coral - Gatsby Multipurpose Landing Template</title>
        <link href={favIcon} rel="shortcut icon"></link>
      </>
    )
}
