import { Link } from 'react-router-dom'

import bg from '../../assets/images/hero/pages.jpg'

import Navlight from '../../components/navbar/navlight'
import FaqOne from '../../components/faq/faq-one'
import PricingOne from '../../components/pricing'
import Footer from '../../components/footer'
import ScrollToTop from '../../components/scroll-to-top'

export default function Pricing() {
  return (
    <>
        <Navlight/>

        <section className="bg-half-170 d-table w-100" style={{backgroundImage:`url(${bg})`, backgroundPosition:'center'}}>
            <div className="bg-overlay bg-gradient-overlay"></div>
            <div className="container">
                <div className="row mt-5 justify-content-center">
                    <div className="col-12">
                        <div className="title-heading text-center">
                            <h5 className="heading fw-semibold mb-0 sub-heading text-white title-dark">Pricing Plans</h5>
                        </div>
                    </div>
                </div>

                <div className="position-middle-bottom">
                    <nav aria-label="breadcrumb" className="d-block">
                        <ul className="breadcrumb breadcrumb-muted mb-0 p-0">
                            <li className="breadcrumb-item"><Link to="/">Coral</Link></li>
                            <li className="breadcrumb-item active" aria-current="page">Pricing</li>
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
                <PricingOne/>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="mb-4 title">FAQs</h4>
                            <p className="para-desc mx-auto text-muted">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                        </div>
                    </div>
                </div>

                <div className="row justify-content-center">
                    <div className="col-lg-9 mt-4">
                        <FaqOne/>
                    </div>
                </div>
            </div>
        </section>

        <Footer/>

        <ScrollToTop/>
    </>
  )
}
