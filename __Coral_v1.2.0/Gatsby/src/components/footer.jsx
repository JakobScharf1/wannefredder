import React from 'react'
import { Link } from 'gatsby'
import { footerLink1, footerLink2, footerSocial } from '../data/data'
import { FiSend } from 'react-icons/fi'
import logoLight from '../assets/images/logo-light.png'

export default function Footer() {
  return (
    <footer className="bg-footer">
        <div className="container">
            <div className="row">
                <div className="col-12">
                    <div className="py-5">
                        <div className="row">
                            <div className="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                                <p>Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.</p>
                                <ul className="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                                    {footerSocial.map((item,index)=>{
                                        let Icon = item.icon
                                        return(
                                            <li className="list-inline-item" key={index} style={{margin:'0 2px'}}><Link to={item.link} target="_blank" className="rounded"><Icon className="fea icon-sm align-middle" title="dribbble"/></Link></li>
                                        )
                                    })}
                                </ul>
                            </div>
                    
                            <div className="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h6 className="footer-head text-uppercase small">Company</h6>
                                <ul className="list-unstyled footer-list mt-4">
                                    {footerLink1.map((item,index)=>( 
                                        <li key={index}><Link to={item.link} className="text-foot"><i className="mdi mdi-chevron-right me-1"></i>{item.name}</Link></li>
                                    ))}
                                </ul>
                            </div>
                    
                            <div className="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h6 className="footer-head text-uppercase small">Usefull Links</h6>
                                <ul className="list-unstyled footer-list mt-4">
                                    {footerLink2.map((item,index)=>( 
                                        <li key={index}><Link to={item.link} className="text-foot"><i className="mdi mdi-chevron-right me-1"></i>{item.name}</Link></li>
                                    ))}
                                </ul>
                            </div>

                            <div className="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h6 className="footer-head text-uppercase small">Newsletter</h6>
                                <p className="mt-4">Sign up and receive the latest tips via email.</p>
                                <form>
                                    <div className="row">
                                        <div className="col-lg-12">
                                            <div className="foot-subscribe mb-3">
                                                <label className="form-label" htmlFor='email'>Write your email <span className="text-danger">*</span></label>
                                                <div className="form-icon position-relative">
                                                    <input type="email" name="email" id="submitsubscribe" className="form-control rounded" placeholder="Your email : " required/>
                                                    <div className="position-absolute top-50 end-0 translate-middle-y">
                                                        <button type="submit" id="submitsubscribe" className="btn btn-sm btn-icon btn-soft-primary me-1">
                                                            <FiSend className="icons"/>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div className="container">
            <div className="row">
                <div className="col-12">
                    <div className="py-5 footer-bar">
                        <div className="container text-center">
                            <div className="row align-items-center">
                                <div className="col-sm-6">
                                    <div className="text-sm-start">
                                        <Link to="#" className="logo-footer">
                                            <img src={logoLight} alt=""/>
                                        </Link>
                                    </div>
                                </div>
    
                                <div className="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <ul className="list-unstyled footer-list terms-service text-sm-end mb-0">
                                        <li className="list-inline-item mb-0"><Link to="#" className="text-foot fw-medium me-2"><i className="mdi mdi-circle-small"></i> Privacy</Link></li>
                                        <li className="list-inline-item mb-0"><Link to="#" className="text-foot fw-medium me-2"><i className="mdi mdi-circle-small"></i> Terms</Link></li>
                                        <li className="list-inline-item mb-0"><Link to="#" className="text-foot fw-medium me-2"><i className="mdi mdi-circle-small"></i> FAQs</Link></li>
                                        <li className="list-inline-item mb-0"><Link to="#" className="text-foot fw-medium"><i className="mdi mdi-circle-small"></i> Contact</Link></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div className="py-4 footer-bar">
            <div className="container text-center">
                <div className="row justify-content-center">
                    <div className="col-sm-12">
                        <p className="mb-0">© {new Date().getFullYear()} Coral. Design & Develop with <i className="mdi mdi-heart text-danger"></i> by <Link to="https://shreethemes.in/" target="_blank" className="text-reset">Shreethemes</Link>.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  )
}
