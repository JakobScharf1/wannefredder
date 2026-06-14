import Link from "next/link";
import Image from "next/image";

import Navlight from "./components/navbar/navlight";
import VideoOne from "./components/video/video-one";
import ServicesOne from "./components/services/services-one";
import CounterOne from "./components/counter/counter-one";
import CtaOne from "./components/cta/cta-one";
import PortfolioOne from "./components/portfolio/portfolio-one";
import TeamOne from "./components/team/team-one";
import ClientOne from "./components/client/client-one";
import BlogOne from "./components/blog/blog-one";
import Footer from "./components/footer";
import ScrollToTop from "./components/scroll-to-top";

export default function Home() {
  return (
    <>
      <Navlight/>
  
        <section className="bg-home d-flex align-items-center" style={{backgroundImage:`url('/images/hero/bg.jpg')`, backgroundPosition:'center'}}>
          <div className="bg-overlay bg-gradient-overlay"></div>
          <div className="container">
              <div className="row align-items-center">
                  <div className="col-lg-7 col-md-8 order-md-1 order-2">
                      <div className="title-heading">
                          <Image src='/images/logo-icon-80-white.png' width={56} height={56} className="d-md-block d-none" alt=""/>
                          <h1 className="heading text-white my-3">Making Your Business <br/> Profitable For Today</h1>
                          <p className="para-desc text-white-50">Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.</p>
                          <div className="mt-4">
                              <Link href="/services" className="btn btn-primary">Explore Features <i className="mdi mdi-arrow-right"></i></Link>
                          </div>
  
                          <div className="mt-4 d-flex align-items-center">
                              <ul className="list-unstyled mb-0">
                                  <li className="list-inline-item"><Image src='/images/team/1.jpg' width={45} height={45} className="avatar avatar-md-sm rounded-pill shadow img-thumbnail" alt=""/></li>
                                  <li className="list-inline-item ms-n24"><Image src='/images/team/2.jpg' width={45} height={45} className="avatar avatar-md-sm rounded-pill shadow img-thumbnail" alt=""/></li>
                                  <li className="list-inline-item ms-n24"><Image src='/images/team/3.jpg' width={45} height={45} className="avatar avatar-md-sm rounded-pill shadow img-thumbnail" alt=""/></li>
                                  <li className="list-inline-item ms-n24"><Image src='/images/team/4.jpg' width={45} height={45} className="avatar avatar-md-sm rounded-pill shadow img-thumbnail" alt=""/></li>
                              </ul>
  
                              <Link href="/contactus" className="text-white ms-3 fw-medium">Join Coral Community <i className="mdi mdi-arrow-right"></i></Link>
                          </div>
                      </div>
                  </div>
  
                  <div className="col-lg-5 col-md-4 order-md-2 order-1">
                      <VideoOne className="d-md-flex justify-content-center"/>
                  </div>
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
  
        <section className="section overflow-hidden">
          <div className="container">
              <ServicesOne/>
          </div>
  
          <div className="container mt-100 mt-60">
              <div className="row align-items-center">
                  <div className="col-lg-5 col-md-6">
                      <div className="position-relative">
                          <div className="row align-items-end">
                              <div className="col-7">
                                  <Image src='/images/about/1.jpg' width={0} height={0} sizes="100vh" style={{width:'100%', height:'auto'}} className="img-fluid rounded" alt=""/>
                              </div>
  
                              <div className="col-5">
                                  <Image src='/images/about/3.jpg' width={0} height={0} sizes="100vh" style={{width:'100%', height:'auto'}} className="img-fluid rounded" alt=""/>
                              </div>
                          </div>
  
                          <div className="row align-items-start mt-4">
                              <div className="col-5">
                                  <Image src='/images/about/4.jpg' width={0} height={0} sizes="100vh" style={{width:'100%', height:'auto'}} className="img-fluid rounded" alt=""/>
                              </div>
  
                              <div className="col-7">
                                  <Image src='/images/about/2.jpg' width={0} height={0} sizes="100vh" style={{width:'100%', height:'auto'}} className="img-fluid rounded" alt=""/>
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
                          <h4 className="title mb-3">Convert more visitors <br/> into customers.</h4>
  
                          <p className="text-muted para-desc mb-0">Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.</p>
                      
                          <ul className="list-unstyled text-muted mb-0 mt-3">
                              <li className="mb-1"><span className="text-primary h5 me-2"><i className="mdi mdi-check-circle-outline align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                              <li className="mb-1"><span className="text-primary h5 me-2"><i className="mdi mdi-check-circle-outline align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                              <li className="mb-1"><span className="text-primary h5 me-2"><i className="mdi mdi-check-circle-outline align-middle"></i></span>Create your own skin to match your brand</li>
                          </ul>
  
                          <div className="mt-4">
                              <Link href="/aboutus" className="btn btn-soft-primary">About Us <i className="mdi mdi-arrow-right align-middle"></i></Link>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  
          <CounterOne/>
        </section>
  
        <CtaOne/>
  
        <section className="section">
          <div className="container">
              <div className="row align-lg-items-center mb-4 pb-2">
                  <div className="col-lg-6 col-md-5">
                      <div className="section-title text-md-start text-center">
                          <h4 className="title mb-3 mb-md-0">Showcase your <br/> Stunning Projects</h4>
                      </div>
                  </div>
                  
                  <div className="col-lg-6 col-md-7">
                      <div className="text-md-start text-center">
                          <p className="text-muted para-desc mx-auto mb-0">Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.</p>
                      </div>
                  </div>
              </div>
              <PortfolioOne/>
          </div>
  
          <div className="container mt-100 mt-60">
              <div className="row justify-content-center">
                  <div className="col-12">
                      <div className="section-title text-center mb-4 pb-2">
                          <h4 className="title mb-3">Our Minds</h4>
                          <p className="text-muted para-desc mx-auto mb-0">Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.</p>
                      </div>
                  </div>
              </div>
              <TeamOne/>
          </div>
  
          <div className="container mt-100 mt-60">
              <div className="row align-items-center">
                  <div className="col-lg-6 col-md-6">
                      <div className="position-relative">
                          <Image src='/images/report-analysis-5-18.svg' width={0} height={0} sizes="100vw" style={{width:'100%', height:'auto'}} className="img-fluid" alt=""/>
                          <div className="modern-app-round round-small"></div>
                      </div>
                  </div>
  
                  <div className="col-lg-6 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                      <div className="section-title ms-lg-3">
                          <h4 className="title mb-3">Customer's Review</h4>
                          <p className="text-muted para-desc mb-0">Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.</p>
                          <div className="row">
                              <div className="col-12 mt-4">
                                  <ClientOne/>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  
          <div className="container mt-100 mt-60">
              <div className="row justify-content-center">
                  <div className="col-12">
                      <div className="section-title text-center mb-4 pb-2">
                          <h4 className="title mb-3">Blog Or News</h4>
                          <p className="text-muted para-desc mx-auto mb-0">Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.</p>
                      </div>
                  </div>
              </div>
              <BlogOne/>
          </div>
      </section>
  
      <Footer/>
  
      <ScrollToTop/>
    </>
  );
}
