import { Link } from 'react-router-dom'

import bg from '../../assets/images/hero/bg-it.png'
import hero from '../../assets/images/hero.png'
import about1 from '../../assets/images/about/1.jpg'
import about2 from '../../assets/images/about/2.jpg'
import about3 from '../../assets/images/about/3.jpg'
import about4 from '../../assets/images/about/4.jpg'

import Navdark from '../../components/navbar/navdark'
import VideoTwo from '../../components/video/video-two'
import VideoOne from '../../components/video/video-one'
import CtaTwo from '../../components/cta/cta-two'
import TeamOne from '../../components/team/team-one'
import FaqOne from '../../components/faq/faq-one'
import faq from '../../assets/images/faqs.svg'
import BlogOne from '../../components/blog/blog-one'
import Pricing from '../../components/pricing'
import Footer from '../../components/footer'
import ScrollToTop from '../../components/scroll-to-top'

import CountUp from 'react-countup'
import { TypeAnimation } from 'react-type-animation';


import { counterData, servicesData } from '../../data/data'

import { FiClock, FiMail, FiMapPin } from 'react-icons/fi'

export default function IndexTtSolution() {
  return (
    <>
    <div className="tagline bg-white shadow">
        <div className="container">                
            <div className="row">
                <div className="col-12">
                    <div className="d-flex align-items-center justify-content-between">
                        <ul className="list-unstyled mb-0">
                            <li className="d-inline-flex align-items-center">
                                <FiClock className="fea icon-sm text-primary"/>
                                <span className="ms-2 text-muted">Mon-Sat: 9am to 6pm</span>
                            </li>
                            <li className="d-inline-flex align-items-center ms-2">
                                <FiMapPin className="fea icon-sm text-primary"/>
                                <span className="ms-2 text-muted">Houston, USA 485</span>
                            </li>
                        </ul>

                        <ul className="list-unstyled mb-0">
                            <li className="d-inline-flex align-items-center">
                                <FiMail className="fea icon-sm text-primary"/>
                                <Link to="mailto:contact@example.com" className="ms-2 text-muted link-title">contact@example.com</Link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <Navdark bg="" tagline="tagline-height" position="nav-left"/>   

    <section className="bg-half-120 pb-0 d-table w-100 bg-it overflow-hidden" style={{backgroundImage:`url(${bg})`, backgroundPosition:'center'}}>
        <div className="container">
            <div className="row align-items-center">
                <div className="col-lg-6 col-md-6 overflow-hidden">
                    <div className="title-heading mb-5">
                        <h6 className="text-primary">Welcome to Coral</h6>
                        <h1 className="heading fw-bold mb-3">IT Solutions & <br/>
                         <TypeAnimation
                            sequence={[
                                'Software',
                                1000,
                                'Application',
                                1000,
                                'Website',
                                1000,
                            ]}
                            wrapper="span"
                            speed={20}
                            repeat={Infinity}
                            cursor={false}
                            className="text-primary typewrite overflow-hidden"
                            /> <br/> Development</h1>
                        <p className="para-desc text-muted d-lg-block d-d-none d-block">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                        <div className="mt-4">
                            <Link to="/services" className="btn btn-primary m-1">Get Started <i className="mdi mdi-arrow-right"></i></Link>
                            <VideoTwo className=""/>
                        </div>
                    </div>
                </div>

                <div className="col-lg-6 col-md-6">
                    <img src={hero} className="img-fluid" alt=""/>
                </div>
            </div>
        </div>
    </section>

    <section className="section">
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-lg-12">
                    <div className="features-absolute">
                        <div className="row align-items-center g-4">
                            {servicesData.slice(0,4).map((item,index)=>{
                                let Icon = item.icon
                                return(
                                    <div className="col-lg-3 col-md-6 col-12" key={index}>
                                        <div className="position-relative features bg-white text-center rounded shadow p-4 pt-5">
                                            <div className="position-relative d-flex justify-content-center">
                                                <Icon className="fea icon-md text-primary z-1"/>
                                                <div className="feature-icon bg-soft-primary position-absolute top-0 translate-middle"></div>
                                            </div>
                    
                                            <div className="mt-4">
                                                <Link to="/service-detail" className="h5 text-dark link-title">{item.title}</Link>
                                                <p className="text-muted mt-3">{item.desc}</p>
                                                <Link to="/service-detail" className="text-primary">Learn More <i className="mdi mdi-arrow-right align-middle"></i></Link>
                                            </div>
                                        </div>
                                    </div>
                                )
                            })}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div className="container mt-100 mt-60">
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
                        <h6 className="text-primary text-uppercase">About Coral</h6>
                        <h4 className="title mb-3">We believe that every <br/> problem has a solution</h4>
                        <p className="text-muted para-desc mb-0">As a leading college in Auckland, we look to engage with our student beyond the conventional design and development school relationship, becoming a partner to the people and companies we work with.</p>

                        <div className="row">
                            {counterData.slice(0,3).map((item,index)=>{
                                let Icon = item.icon
                                return(
                                    <div className="col-lg-4 col-6 mt-4" key={index}>
                                        <div className="counter-box">
                                            <div className="position-relative">
                                                <Icon className="fea icon-lg mb-2 text-primary"/>
                                            </div>
                                            <h3 className="text-dark fw-semibold"><CountUp end={item.value}/>{item.symbol}</h3>
                                            <h6 className="counter-head text-muted fw-medium mb-0">{item.title}</h6>
                                        </div>   
                                    </div>
                                )
                            })}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <CtaTwo/>

    <section className="section">
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-12">
                    <div className="section-title text-center mb-4 pb-2">
                        <h4 className="title mb-3">Pricing Plans</h4>
                        <p className="text-muted para-desc mx-auto mb-0">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                    </div>
                </div>
            </div>
            <Pricing/>
        </div>

        <div className="container mt-100 mt-60">
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

        <div className="container mt-100 mt-60">
            <div className="row align-items-center">
                <div className="col-lg-6 col-md-6">
                    <div className="position-relative">
                        <img src={faq} className="img-fluid" alt=""/>
                        <div className="modern-app-round round-small"></div>
                    </div>
                </div>

                <div className="col-lg-6 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                    <div className="section-title mb-4 ms-lg-3">
                        <h4 className="title mb-3">Frequently Asked Questions</h4>
                        <p className="text-muted para-desc mb-0">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                        <FaqOne/>
                    </div>
                </div>
            </div>
        </div>

        <div className="container mt-100 mt-60">
            <div className="row justify-content-center">
                <div className="col-12">
                    <div className="section-title text-center mb-4 pb-2">
                        <h4 className="title mb-3">Blog Or News</h4>
                        <p className="text-muted para-desc mx-auto mb-0">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                    </div>
                </div>
            </div>
            <BlogOne/>
        </div>
    </section>

    <Footer/>

    <ScrollToTop/>
    </>
  )
}
