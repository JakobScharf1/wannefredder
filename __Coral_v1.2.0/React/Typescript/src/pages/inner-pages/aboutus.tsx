import { Link } from 'react-router-dom'
import bg from '../../assets/images/hero/pages.jpg'
import about1 from '../../assets/images/about/1.jpg'
import about2 from '../../assets/images/about/2.jpg'
import about3 from '../../assets/images/about/3.jpg'
import about4 from '../../assets/images/about/4.jpg'

import { counterData } from '../../data/data'

import CountUp from 'react-countup'

import Navlight from '../../components/navbar/navlight'
import VideoOne from '../../components/video/video-one'
import CtaThree from '../../components/cta/cta-three'
import TeamOne from '../../components/team/team-one'
import Footer from '../../components/footer'
import ScrollToTop from '../../components/scroll-to-top'
import type { IconType } from 'react-icons'

interface Counter{
    icon: IconType;
    title: string;
    value: number;
    symbol: string;
}

export default function AboutUs() {
  return (
    <>
        <Navlight/>

        <section className="bg-half-170 d-table w-100" style={{backgroundImage:`url(${bg})`, backgroundPosition:'center'}}>
            <div className="bg-overlay bg-gradient-overlay"></div>
            <div className="container">
                <div className="row mt-5 justify-content-center">
                    <div className="col-12">
                        <div className="title-heading text-center">
                            <h5 className="heading fw-semibold mb-0 sub-heading text-white title-dark">About Us</h5>
                        </div>
                    </div>
                </div>

                <div className="position-middle-bottom">
                    <nav aria-label="breadcrumb" className="d-block">
                        <ul className="breadcrumb breadcrumb-muted mb-0 p-0">
                            <li className="breadcrumb-item"><Link to="/">Coral</Link></li>
                            <li className="breadcrumb-item active" aria-current="page">About us</li>
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
                <div className="row align-items-center">
                    <div className="col-lg-5 col-md-6">
                        <div className="position-relative">
                            <div className="row align-items-end">
                                <div className="col-7">
                                    <img src={about1} className="img-fluid rounded" alt=""/>
                                </div>

                                <div className="col-5">
                                    <img src={about3} className="img-fluid rounded" alt=""/>
                                </div>
                            </div>

                            <div className="row align-items-start mt-4">
                                <div className="col-5">
                                    <img src={about4} className="img-fluid rounded" alt=""/>
                                </div>

                                <div className="col-7">
                                    <img src={about2} className="img-fluid rounded" alt=""/>
                                </div>
                            </div>
                            <VideoOne className="position-absolute top-50 start-50 translate-middle"/>

                            <div className="position-absolute top-50 start-50 translate-middle z-n1">
                                <div className="bg-primary rounded opacity-75 p-5"><div className="p-5 m-5"></div></div>
                            </div>
                        </div>
                    </div>

                    <div className="col-lg-7 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                        <div className="section-title ms-lg-5">
                            <h6 className="text-primary text-uppercase">What we do?</h6>
                            <h4 className="title mb-0">We create world-class <br/> digital products materials <br/> that communicate clearly.</h4>

                            <h5 className="mt-3">Qualified Team:</h5>
                            <p className="text-muted para-desc mb-0">As a leading college in Auckland, we look to engage with our student beyond the conventional design and development school relationship, becoming a partner to the people and companies we work with.</p>

                            <h5 className="mt-3">Global Offices:</h5>
                            <p className="text-muted para-desc mb-0">As a leading digital company in Auckland, we look to engage with our clients beyond the conventional relationship, becoming a partner to the people.</p>

                            <div className="mt-4">
                                <Link to="#" className="btn btn-link primary fs-6">Start A Project <i className="mdi mdi-arrow-right align-middle"></i></Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row align-items-center">
                    <div className="col-lg-7 col-md-6">
                        <div className="section-title">
                            <h6 className="text-primary text-uppercase">What we achieved?</h6>
                            <h4 className="title mb-3">Beyond Conventional <br/> Agencies.</h4>
                            <p className="text-muted para-desc mb-0">As a leading college in Auckland, we look to engage with our student beyond the conventional design and development school relationship, becoming a partner to the people and companies we work with.</p>
                        </div>
                    </div>

                    <div className="col-lg-5 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                        <div className="position-relative">
                            <div className="row">
                                {counterData.map((item:Counter,index:number)=>{
                                    let Icon = item.icon
                                    return( 
                                        <div className="col-6 mt-4" key={index}>
                                            <div className="p-4 rounded bg-white shadow-lg">
                                                <div className="counter-box text-center">
                                                    <div className="position-relative d-flex justify-content-center">
                                                        <Icon className="fea icon-lg mb-3 text-primary"/>
                                                        <div className="position-absolute top-0 translate-middle p-3 bg-soft-primary rounded-circle"></div>
                                                    </div>
                                                    <h3 className="mb-0 text-dark fw-semibold"><CountUp end={item.value}/>{item.symbol}</h3>
                                                    <h6 className="counter-head text-muted fw-medium mb-0">{item.title}</h6>
                                                </div>   
                                            </div>
                                        </div>
                                    )
                                })}
                            </div>

                            <div className="position-absolute top-50 start-50 translate-middle z-n1">
                                <div className="bg-primary rounded opacity-75 p-5"><div className="p-5"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <CtaThree/>

        <section className="section">
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Our Minds</h4>
                            <p className="text-muted para-desc mx-auto mb-0">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                        </div>
                    </div>
                </div>

                <TeamOne/>
            </div>
        </section>

        <Footer/>
        <ScrollToTop/>
    </>
  )
}
