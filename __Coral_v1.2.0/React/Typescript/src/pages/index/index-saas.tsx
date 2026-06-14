import { Link } from 'react-router-dom'
import bg from '../../assets/images/hero/bg.png'
import hero from '../../assets/images/hero/hero.png'
import about1 from '../../assets/images/1.png'
import about2 from '../../assets/images/2.png'

import Navlight from '../../components/navbar/navlight'
import BlogOne from '../../components/blog/blog-one'
import ServicesTwo from '../../components/services/services-two'
import Footer from '../../components/footer'
import ScrollToTop from '../../components/scroll-to-top'
import ClientTwo from '../../components/client/client-two'

export default function IndexSaas() {
  return (
    <>
        <Navlight/>

        <section className="bg-hero d-table w-100 bg-dark overflow-hidden" style={{backgroundImage:`url(${bg})`, backgroundPosition:'center'}}>
            <div className="bg-overlay bg-gradient-overlay-2"></div>
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-lg-12 text-center">
                        <div className="title-heading margin-top-100">
                            <span className="badge bg-primary bg-gradient">Boost your creativity</span>
                            <h1 className="display-4 text-white my-3">The easy way to manage <br/> Product analytics</h1>
                            <p className="para-desc mx-auto text-muted">Explore our diverse industry solutions, meticulously crafted to meet unique demand. helps you be more.</p>
                            <div className="subscribe-form mt-4 pt-2">
                                <form className="mx-auto" action="index.html">
                                    <input type="email" id="SubscribeEmail" className="border bg-white rounded-pill" style={{opacity: '0.85' }}required placeholder="Type your email"/>
                                    <button type="submit" className="btn btn-pills btn-primary">Get Started</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section className="position-relative">
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-lg-10">
                        <div className="tilt-3d margin-absolute">
                            <div className="tilt-3d-trigger">
                                <div className="trigger"></div>
                                <div className="trigger"></div>
                                <div className="trigger"></div>
                                <div className="trigger"></div>
                                <div className="trigger"></div>
                                <div className="trigger"></div>
                                <div className="trigger"></div>
                                <div className="trigger"></div>
                                <div className="trigger"></div>
                                    
                                <div className="tilt-3d-image position-relative">
                                    <img src={hero} className="img-fluid rounded-4 border-primary" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section className="section overflow-hidden">
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">A powerful easy-to-use platform</h4>
                            <p className="text-muted para-desc mb-0 mx-auto">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                        </div>
                    </div>
                </div>
                <ServicesTwo/>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row g-4 align-items-center">
                    <div className="col-lg-6 col-md-6">
                        <div className="position-relative">
                            <img src={about1} className="img-fluid rounded-2" alt=""/>
                            <div className="modern-app-round round-small"></div>
                        </div>
                    </div>

                    <div className="col-lg-6 col-md-6">
                        <div className="section-title ms-lg-5">
                            <h4 className="title mb-3">Boost conversions, <br/> uncover opportunities</h4>
                            <p className="text-muted para-desc mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                        
                            <ul className="list-unstyled text-muted mb-0 mt-3">
                                <li className="mb-1"><span className="text-primary h5 me-2"><i className="mdi mdi-check-circle-outline align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                                <li className="mb-1"><span className="text-primary h5 me-2"><i className="mdi mdi-check-circle-outline align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                                <li className="mb-1"><span className="text-primary h5 me-2"><i className="mdi mdi-check-circle-outline align-middle"></i></span>Create your own skin to match your brand</li>
                            </ul>

                            <div className="mt-4">
                                <Link to="/aboutus" className="btn btn-soft-primary">About Us <i className="mdi mdi-arrow-right align-middle"></i></Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row g-4 align-items-center">
                    <div className="col-lg-6 col-md-6 order-1 order-md-2">
                        <div className="position-relative">
                            <img src={about2} className="img-fluid rounded-2" alt=""/>
                            <div className="modern-app-round round-small"></div>
                        </div>
                    </div>

                    <div className="col-lg-6 col-md-6 order-md-1 order-2">
                        <div className="section-title me-lg-5">
                            <h4 className="title mb-3">Optimize page layouts <br/> and refine your content</h4>
                            <p className="text-muted para-desc mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                        
                            <ul className="list-unstyled text-muted mb-0 mt-3">
                                <li className="mb-1"><span className="text-primary h5 me-2"><i className="mdi mdi-check-circle-outline align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                                <li className="mb-1"><span className="text-primary h5 me-2"><i className="mdi mdi-check-circle-outline align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                                <li className="mb-1"><span className="text-primary h5 me-2"><i className="mdi mdi-check-circle-outline align-middle"></i></span>Create your own skin to match your brand</li>
                            </ul>

                            <div className="mt-4">
                                <Link to="/aboutus" className="btn btn-soft-primary">About Us <i className="mdi mdi-arrow-right align-middle"></i></Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div className="container mt-100 mt-60">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="section-title text-center mb-4 pb-2">
                            <h4 className="title mb-3">Customer's Review</h4>
                            <p className="text-muted para-desc mx-auto mb-0">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
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
