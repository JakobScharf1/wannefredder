import { Link } from 'react-router-dom'

import bg from '../../assets/images/hero/pages.jpg'

import { wallet } from '../../data/data'

import Footer from '../../components/footer'
import NftNavLight from '../../components/navbar/nft-nav-light'
import ScrollToTop from '../../components/scroll-to-top'

export default function Wallet() {
  return (
    <>
        <NftNavLight/>   

        <section className="bg-half-170 d-table w-100" style={{backgroundImage:`url(${bg})`, backgroundPosition:'center'}}>
            <div className="bg-overlay bg-gradient-overlay"></div>
            <div className="container">
                <div className="row mt-5 justify-content-center">
                    <div className="col-12">
                        <div className="title-heading text-center">
                            <h5 className="heading fw-semibold mb-0 sub-heading text-white title-dark">Wallets</h5>
                        </div>
                    </div>
                </div>

                <div className="position-middle-bottom">
                    <nav aria-label="breadcrumb" className="d-block">
                        <ul className="breadcrumb breadcrumb-muted mb-0 p-0">
                            <li className="breadcrumb-item"><Link to="/">Coral</Link></li>
                            <li className="breadcrumb-item active" aria-current="page">Wallet</li>
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
                    {wallet.map((item,index)=>( 
                        <div className="col-lg-3 col-md-4 col-sm-2 col-12" key={index}>
                            <div className="wallet position-relative overflow-hidden rounded shadow">
                                <div className="bg-gradient-primary p-4"></div>
                                <div className="position-relative">
                                    <div className="position-absolute top-0 start-50 translate-middle">
                                        <img src={item.image} className="avatar avatar-small rounded-pill shadow-sm p-2 bg-light" alt=""/>
                                    </div>
                                    
                                    <div className="content text-center p-4">
                                        <h5 className="mt-4 mb-0">{item.name}</h5>
                                        <p className="text-muted mt-3 mb-0">Learn about how to get the wallet and much more clicking <a href="javascript:void(0)" className="text-primary">here <i className="mdi mdi-arrow-right"></i></a></p>
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
