import { Link } from 'react-router-dom'

import bg from '../../assets/images/hero/bg-crypto.jpg'
import coin1 from '../../assets/images/bitcoin.png'
import coin2 from '../../assets/images/ethereum.png'
import about from '../../assets/images/bitcoin.svg'
import image1 from '../../assets/images/01.png'
import app from '../../assets/images/app.png'
import playstore from '../../assets/images/playstore.png'

import Navlight from '../../components/navbar/navlight'
import VideoTwo from '../../components/video/video-two'
import CryptoSlider from '../../components/crypto/crypto-slider'
import ClientTwo from '../../components/client/client-two'
import CryptoTable from '../../components/crypto/crypto-table'
import Trader from '../../components/crypto/trader'
import Footer from '../../components/footer'
import ScrollToTop from '../../components/scroll-to-top'
import { FiSmartphone } from 'react-icons/fi'

export default function IndexCryptocurrency() {
  return (
    <>
        <Navlight/>   

         <section className="bg-half-260 position-relative overflow-hidden pb-5" style={{backgroundImage:`url(${bg})`, backgroundPosition:'top', backgroundRepeat:'no-repeat'}}>
            <div className="bg-overlay bg-gradient-overlay"></div>
            <div className="container position-relative">
                <div className="row justify-content-center">
                    <div className="col-lg-12 text-center">
                        <div className="title-heading position-relative z-1 margin-top-100">
                            <h1 className="display-4 text-white title-dark lh-base mb-4">New Digital App for <br/> Cryptocurrency</h1>
                            <p className="para-desc mx-auto text-white-50">Our platform reaches people all over the world, hereby we are trusted as the best platform for crypto trading.</p>
                            <div className="mt-4 pt-2">
                                <Link to="/services" className="btn btn-lg btn-pills btn-primary m-1">Join Now</Link>
                                <VideoTwo className="text-white title-dark"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div className="position-absolute top-0 end-0 translate-middle-y">
                    <img src={coin1} className="avatar avatar-large mover" alt=""/>
                </div>

                <div className="position-absolute bottom-0 start-0">
                    <img src={coin2} className="avatar avatar-large mover" alt=""/>
                </div>
            </div>

            <CryptoSlider/>
        </section>

        <section className="section">
            <div className="container">
                <div className="row align-items-center">
                    <div className="col-lg-5 col-md-6">
                        <img src={about} className="img-fluid" alt=""/>
                    </div>

                    <div className="col-lg-7 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                        <div className="section-title ms-lg-5">
                            <h4 className="title mb-3">Moving your Existing Solution <br/> for Cryptocurrency</h4>
                            <p className="text-muted para-desc mb-0">Our platform reaches people all over the world, hereby we are trusted as the best platform for crypto trading.</p>

                            <ul className="list-unstyled text-muted mb-0 mt-3">
                                <li className="mb-1"><span className="text-primary h5 me-2"><i className="mdi mdi-check-circle-outline align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                                <li className="mb-1"><span className="text-primary h5 me-2"><i className="mdi mdi-check-circle-outline align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                                <li className="mb-1"><span className="text-primary h5 me-2"><i className="mdi mdi-check-circle-outline align-middle"></i></span>Create your own skin to match your brand</li>
                            </ul>

                            <div className="mt-4">
                                <Link to="#" className="btn btn-link primary fs-6">Read More <i className="mdi mdi-arrow-right align-middle"></i></Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Cryptocurrency Market</h4>
                            <p className="text-muted para-desc mx-auto mb-0">Our platform reaches people all over the world, hereby we are trusted as the best platform for crypto trading.</p>
                        </div>
                    </div>
                </div>
                <CryptoTable/>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Become a Crypto Trader</h4>
                            <p className="text-muted para-desc mx-auto mb-0">Our platform reaches people all over the world, hereby we are trusted as the best platform for crypto trading.</p>
                        </div>
                    </div>
                </div>

                <Trader/>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Customer's Review</h4>
                            <p className="text-muted para-desc mx-auto mb-0">Our platform reaches people all over the world, hereby we are trusted as the best platform for crypto trading.</p>
                        </div>
                    </div>
                </div>

                <div className="row">
                    <div className="col-12 mt-4">
                        <ClientTwo/>
                    </div>
                </div>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row align-items-center">
                    <div className="col-lg-5 col-md-5 col-12">
                        <img src={image1} className="img-fluid mx-auto d-block" alt=""/>
                    </div>

                    <div className="col-lg-7 col-md-7 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div className="section-title">
                            <div className="alert alert-light alert-pills text-dark" role="alert">
                                <span className="badge bg-primary rounded-pill me-1">Apps</span>
                                <span className="content">Download now <i className="mdi mdi-arrow-right align-middle"></i></span>
                            </div>
                            <h4 className="title mb-3">Available for your <br/> Smartphones</h4>
                            <p className="text-muted para-desc mb-0">Our platform reaches people all over the world, hereby we are trusted as the best platform for crypto trading.</p>
                            <div className="my-4">
                                <Link to="#">
                                    <img src={app} className="me-2" height="50" alt=""/>
                                </Link>

                                <Link to="#">
                                    <img src={playstore} height="50" alt=""/>
                                </Link>
                            </div>

                            <div className="d-inline-block">
                                <div className="pt-4 d-flex align-items-center border-top">
                                    <FiSmartphone className="fea icon-md me-2 text-primary"/>
                                    <div className="content">
                                        <h6 className="mb-0">Install app now on your cellphones</h6>
                                        <Link to="#" className="text-primary h6">Learn More <i className="mdi mdi-arrow-right"></i></Link>  
                                    </div>
                                </div>
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
