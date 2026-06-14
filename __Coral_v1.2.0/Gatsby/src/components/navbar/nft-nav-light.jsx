/*eslint-disable jsx-a11y/control-has-associated-label */
import React,{ useEffect, useState } from 'react';
import { Link } from 'gatsby';

import logoDark from '../../assets/images/logo-dark.png'
import logoWhite from '../../assets/images/logo-white.png'
import logoLight from '../../assets/images/logo-light.png'
import contact from '../../assets/images/contact.png'
import team from '../../assets/images/team/1.jpg'

import { FiCopy, FiDollarSign, FiLogOut, FiSearch, FiSettings, FiUser } from 'react-icons/fi'
import { footerSocial } from '../../data/data';

export default function NftNavLight() {
    let [manu, setManu] = useState();
    let [submenu, setSubManu] = useState();
    let [toggle, setToggle] = useState(false);
    let [scrolling, setScrolling] = useState(false);
    

    useEffect(() => {
        if (typeof window !== 'undefined') {
            setManu(window.location.pathname);
            window.scrollTo(0, 0);
    
            const handleScroll = () => {
            const isScrolling = window.scrollY > 50;
            setScrolling(isScrolling);
            };
            window.addEventListener('scroll', handleScroll);
    
            return () => {
            window.removeEventListener('scroll', handleScroll);
            };
        }
        }, []);
  return (
    <>
        <header id="topnav" className={`defaultscroll sticky ${scrolling ? 'nav-sticky' : ''}`}>
            <div className="container">
                <Link className="logo" to="/">
                    <span className="logo-light-mode">
                        <img src={logoDark} className="l-dark" alt=""/>
                        <img src={logoWhite} className="l-light" alt=""/>
                    </span>
                    <img src={logoWhite} className="logo-dark-mode" alt=""/>
                </Link>

                <div className="menu-extras">
                    <div className="menu-item">
                        <Link to="#" className={`navbar-toggle ${toggle ? 'open' : ''}`} id="isToggle" onClick={()=>setToggle(!toggle)}>
                            <div className="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </Link>
                    </div>
                </div>

                <ul className="buy-button list-inline mb-0">
                    <li className="list-inline-item mb-0">
                        <div className="dropdown">
                            <button type="button" className="dropdown-toggle btn btn-sm p-0 border-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <FiSearch className="fea icon-20"/>
                            </button>
                            <div className="dropdown-menu dd-menu dropdown-menu-end bg-white rounded border-0 mt-3 p-0" style={{width: '240px'}}>
                                <div className="search-bar">
                                    <div id="itemSearch" className="menu-search mb-0">
                                        <form role="search" method="get" id="searchItemform" className="searchform">
                                            <input type="text" className="form-control rounded border" name="s" id="searchItem" placeholder="Search..."/>
                                            <input type="submit" id="searchItemsubmit" value="Search"/>
                                            <FiSearch className="icons"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li className="list-inline-item ps-1 mb-0">
                        <Link to="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <div className="btn btn-sm btn-icon btn-pills btn-primary"><FiSettings className="fea icon-sm"/></div>
                        </Link>
                    </li>

                     <li className="list-inline-item ps-1 mb-0">
                        <div className="btn btn-sm btn-icon btn-pills btn-primary"><FiDollarSign className="fea icon-sm"/></div>
                    </li>

                    <li className="list-inline-item ps-1 mb-0">
                        <div className="dropdown dropdown-primary">
                            <button type="button" className="btn btn-pills dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src={team} className="rounded-pill avatar avatar-ex-small" alt=""/></button>
                            <div className="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 pb-3 pt-0 overflow-hidden rounded" style={{minWidth:'200px'}}>
                                <div className="position-relative">
                                    <div className="p-3">
                                        <div className="d-flex align-items-center mt-n4">
                                            <img src={team} className="rounded-pill avatar avatar-md-sm img-thumbnail shadow-md" alt=""/>
                                            <h6 className="text-dark fw-semibold mb-0 ms-1">Calvin Carlo</h6>
                                        </div>
                                        <div className="mt-3">
                                            <small className="text-start text-dark d-block fw-semibold">Wallet:</small>
                                            <div className="d-flex justify-content-between align-items-center">
                                                <small id="myPublicAddress" className="text-muted">qhutfvf0...hfteh45</small>
                                                <Link to="#" className="text-primary"><FiCopy className="fea icon-sm"/></Link>
                                            </div>
                                        </div>
                                        
                                        <div className="mt-2">
                                            <small className="text-dark fw-semibold">Balance: <span className="text-primary">0.00045ETH</span></small>
                                        </div>
                                    </div>
                                </div>
                                <div className="mt-2">
                                    <Link className="dropdown-item small fw-semibold text-dark d-flex align-items-center" to="/creator-profile"><span className="mb-0 d-inline-block me-1"><FiUser className="fea icon-sm me-1 align-middle"/></span> Profile</Link>
                                    <Link className="dropdown-item small fw-semibold text-dark d-flex align-items-center" to="/profile-setting"><span className="mb-0 d-inline-block me-1"><FiSettings  className="fea icon-sm me-1 align-middle"/></span> Settings</Link>
                                    <div className="dropdown-divider border-top"></div>
                                    <Link className="dropdown-item small fw-semibold text-dark d-flex align-items-center" to="/lock-screen"><span className="mb-0 d-inline-block me-1"><FiLogOut className="fea icon-sm me-1 align-middle"/></span> Logout</Link>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
        
                <div id="navigation" style={{display : toggle ? 'block' : 'none'}}>
                    <ul className={`navigation-menu nav-left nav-light`}>
                        <li className={`has-submenu parent-menu-item ${['/','/index-saas','/index-consulting','/index-cryptocurrency','/index-digital-marketing','/index-finance','/index-it-solution','/index-hospital','/index-nft','/index-minimal-portfolio','/index-web-hosting','/index-yoga','/index-charity'].includes(manu) ? 'active' : ''}`}>
                            <Link to="#" onClick={()=>setSubManu(submenu === '/index-item' ? '' : '/index-item' )}>Home</Link><span className="menu-arrow"></span>
                            <ul className={`submenu ${['/index-item'].includes(submenu) ? 'open' : ''}`}>
                                <li className={`${manu === '/' ? 'active' : ''}`}><Link to="/" className="sub-menu-item">Business</Link></li>
                                <li className={`${manu === '/index-saas' ? 'active' : ''}`}><Link to="/index-saas" className="sub-menu-item">Saas</Link></li>
                                <li className={`${manu === '/index-consulting' ? 'active' : ''}`}><Link to="/index-consulting" className="sub-menu-item">Consulting</Link></li>
                                <li className={`${manu === '/index-cryptocurrency' ? 'active' : ''}`}><Link to="/index-cryptocurrency" className="sub-menu-item">Cryptocurrency</Link></li>
                                <li className={`${manu === '/index-digital-marketing' ? 'active' : ''}`}><Link to="/index-digital-marketing" className="sub-menu-item">Digital Marketing</Link></li>
                                <li className={`${manu === '/index-finance' ? 'active' : ''}`}><Link to="/index-finance" className="sub-menu-item">Finance</Link></li>
                                <li className={`${manu === '/index-it-solution' ? 'active' : ''}`}><Link to="/index-it-solution" className="sub-menu-item">IT Solutions</Link></li>
                                <li className={`${manu === '/index-hospital' ? 'active' : ''}`}><Link to="/index-hospital" className="sub-menu-item">Hospital / Medical</Link></li>
                                <li className={`${manu === '/index-nft' ? 'active' : ''}`}><Link to="/index-nft" className="sub-menu-item">NFT Marketplace</Link></li>
                                <li className={`${manu === '/index-minimal-portfolio' ? 'active' : ''}`}><Link to="/index-minimal-portfolio" className="sub-menu-item">Minimal Portfolio</Link></li>
                                <li className={`${manu === '/index-web-hosting' ? 'active' : ''}`}><Link to="/index-web-hosting" className="sub-menu-item">Web Hosting</Link></li>
                                <li className={`${manu === '/index-yoga' ? 'active' : ''}`}><Link to="/index-yoga" className="sub-menu-item">Yoga</Link></li>
                                <li className={`${manu === '/index-charity' ? 'active' : ''}`}><Link to="/index-charity" className="sub-menu-item">Charity</Link></li>
                            </ul>
                        </li>
                
                        <li className={`${manu === '/aboutus' ? 'active' : ''}`}><a href="/aboutus" className="sub-menu-item">About Us</a></li>

                        <li className={`has-submenu parent-parent-menu-item ${['/services','/service-detail','/pricing','/team','/testimonial','/faqs','/nft-explore','/nft-detail','/collection','/wallet','/upload-item','/creators', '/creator-profile', '/profile-setting','/login','/signup','/reset-password','/lock-screen','/terms','/privacy','/comingsoon','/maintenance','/error'].includes(manu) ? 'active' : '' }`}>
                            <Link to="#" onClick={()=>setSubManu(submenu === '/page-item' ? '' : '/page-item' )}>Pages</Link><span className="menu-arrow"></span>
                            <ul className={`submenu ${['/page-item','/nft-item','/auth-item','/utility-item','/special-item'].includes(submenu) ? 'open' : ''}`}>
                                <li className={`${manu === '/services' ? 'active' : ''}`}><Link to="/services" className="sub-menu-item">Services</Link></li>
                                <li className={`${manu === '/service-detail' ? 'active' : ''}`}><Link to="/service-detail" className="sub-menu-item">Service Detail</Link></li>
                                <li className={`${manu === '/pricing' ? 'active' : ''}`}><Link to="/pricing" className="sub-menu-item">Pricing</Link></li>
                                <li className={`${manu === '/team' ? 'active' : ''}`}><Link to="/team" className="sub-menu-item">Team</Link></li>
                                <li className={`${manu === '/testimonial' ? 'active' : ''}`}><Link to="/testimonial" className="sub-menu-item">Testimonial</Link></li>

                                <li className={`${manu === '/faqs' ? 'active' : ''}`}><Link to="/faqs" className="sub-menu-item">FAQs</Link></li>

                                <li className={`has-submenu parent-menu-item ${['/nft-explore','/nft-detail','/collection','/wallet','/upload-item','/creators', '/creator-profile', '/profile-setting'].includes(manu) ? 'active' : ''}`}>
                                    <Link to="#" onClick={()=>setSubManu(submenu === '/nft-item' ? '' : '/nft-item' )}>NFT</Link><span className="submenu-arrow"></span>
                                    <ul className={`submenu ${['/nft-item'].includes(submenu) ? 'open' : ''}`}>
                                        <li className={`${manu === '/nft-explore' ? 'active' : ''}`}><Link to="/nft-explore" className="sub-menu-item">NFT Explore</Link></li>
                                        <li className={`${manu === '/nft-detail' ? 'active' : ''}`}><Link to="/nft-detail" className="sub-menu-item">NFT Detail</Link></li>
                                        <li className={`${manu === '/collection' ? 'active' : ''}`}><Link to="/collection" className="sub-menu-item">Collection</Link></li>
                                        <li className={`${manu === '/wallet' ? 'active' : ''}`}><Link to="/wallet" className="sub-menu-item">Wallet</Link></li>
                                        <li className={`${manu === '/upload-item' ? 'active' : ''}`}><Link to="/upload-item" className="sub-menu-item">Upload Item</Link></li>
                                        <li className={`has-submenu child-menu-item ${['/creators', '/creator-profile', '/profile-setting'].includes(manu) ? 'active' : '' }`}>
                                            <Link to="#"> Creators </Link><span className="submenu-arrow"></span>
                                            <ul className="submenu">
                                                <li className={`${manu === '/creators' ? 'active' : ''}`}><Link to="/creators" className="sub-menu-item">Creators</Link></li>
                                                <li className={`${manu === '/creator-profile' ? 'active' : ''}`}><Link to="/creator-profile" className="sub-menu-item">Creator Profile</Link></li>
                                                <li className={`${manu === '/profile-setting' ? 'active' : ''}`}><Link to="/profile-setting" className="sub-menu-item">Profile Setting</Link></li>
                                            </ul>  
                                        </li>
                                    </ul>
                                </li>

                                <li className={`has-submenu parent-menu-item ${['/login','/signup','/reset-password','/lock-screen'].includes(manu) ? 'active' : ''}`}><Link to="#" onClick={()=>setSubManu(submenu === '/auth-item' ? '' : '/auth-item' )}> Auth Pages </Link><span className="submenu-arrow"></span>
                                    <ul className={`submenu ${['/auth-item'].includes(submenu) ? 'open' : ''}`}>
                                        <li className={`${manu === '/login' ? 'active' : ''}`}><Link to="/login" className="sub-menu-item"> Login</Link></li>
                                        <li className={`${manu === '/signup' ? 'active' : ''}`}><Link to="/signup" className="sub-menu-item"> Signup</Link></li>
                                        <li className={`${manu === '/reset-password' ? 'active' : ''}`}><Link to="/reset-password" className="sub-menu-item"> Forgot Password</Link></li>
                                        <li className={`${manu === '/lock-screen' ? 'active' : ''}`}><Link to="/lock-screen" className="sub-menu-item"> Lock Screen</Link></li>
                                    </ul> 
                                </li>

                                <li className={`has-submenu parent-menu-item ${['/terms','/privacy'].includes(manu) ? 'active' : ''}`}><Link to="#" onClick={()=>setSubManu(submenu === '/utility-item' ? '' : '/utility-item' )}> Utility </Link><span className="submenu-arrow"></span>
                                    <ul className={`submenu ${['/utility-item'].includes(submenu) ? 'open' : ''}`}>
                                        <li className={`${manu === '/terms' ? 'active' : ''}`}><Link to="/terms" className="sub-menu-item">Terms of Services</Link></li>
                                        <li className={`${manu === '/privacy' ? 'active' : ''}`}><Link to="/privacy" className="sub-menu-item">Privacy Policy</Link></li>
                                    </ul>  
                                </li>

                                <li className={`has-submenu parent-menu-item ${['/comingsoon','/maintenance','/error'].includes(manu) ? 'active' : ''}`}><Link to="#" onClick={()=>setSubManu(submenu === '/special-item' ? '' : '/special-item' )}> Special </Link><span className="submenu-arrow"></span>
                                    <ul className={`submenu ${['/special-item'].includes(submenu) ? 'open' : ''}`}>
                                        <li className={`${manu === '/comingsoon' ? 'active' : ''}`}><Link to="/comingsoon" className="sub-menu-item"> Coming Soon</Link></li>
                                        <li className={`${manu === '/maintenance' ? 'active' : ''}`}><Link to="/maintenance" className="sub-menu-item"> Maintenance</Link></li>
                                        <li className={`${manu === '/error' ? 'active' : ''}`}><Link to="/error" className="sub-menu-item"> 404! Error</Link></li>
                                    </ul> 
                                </li>
                            </ul>
                        </li>

                        <li className={`has-submenu parent-parent-menu-item ${['/portfolio-detail','/portfolio-detail-two','/portfolio-modern-two','/portfolio-modern-three','/portfolio-modern-four','/portfolio-modern-five','/portfolio-modern-six','/portfolio-classic-two','/portfolio-classic-three','/portfolio-classic-four','/portfolio-classic-five','/portfolio-classic-six','/portfolio-creative-two','/portfolio-creative-three','/portfolio-creative-four','/portfolio-creative-five','/portfolio-creative-six','/portfolio-masonry-two','/portfolio-masonry-three','/portfolio-masonry-four','/portfolio-masonry-five','/portfolio-masonry-six'].includes(manu) ? 'active' : ''}`}>
                            <Link to="#" onClick={()=>setSubManu(submenu === '/portfolio-item' ? '' : '/portfolio-item' )}>Portfolio</Link><span className="menu-arrow"></span>
                            <ul className={`submenu ${['/portfolio-item','/modern-item','/classic-item','/creative-item','/masonry-item'].includes(submenu) ? 'open' : ''}`}>
                                <li className={`has-submenu child-menu-item ${['/portfolio-modern-two','/portfolio-modern-three','/portfolio-modern-four','/portfolio-modern-five','/portfolio-modern-six'].includes(manu) ? 'active' : ''}`}><Link to="#" onClick={()=>setSubManu(submenu === '/modern-item' ? '' : '/modern-item' )}> Modern</Link><span className="submenu-arrow"></span>
                                    <ul className={`submenu ${['/modern-item'].includes(submenu) ? 'open' : ''}`}>
                                        <li className={`${manu === '/portfolio-modern-two' ? 'active' : ''}`}><Link to="/portfolio-modern-two" className="sub-menu-item">Two Column</Link></li>
                                        <li className={`${manu === '/portfolio-modern-three' ? 'active' : ''}`}><Link to="/portfolio-modern-three" className="sub-menu-item">Three Column</Link></li>
                                        <li className={`${manu === '/portfolio-modern-four' ? 'active' : ''}`}><Link to="/portfolio-modern-four" className="sub-menu-item">Four Column</Link></li>
                                        <li className={`${manu === '/portfolio-modern-five' ? 'active' : ''}`}><Link to="/portfolio-modern-five" className="sub-menu-item">Five Column</Link></li>
                                        <li className={`${manu === '/portfolio-modern-six' ? 'active' : ''}`}><Link to="/portfolio-modern-six" className="sub-menu-item">Six Column</Link></li>
                                    </ul>  
                                </li>
                        
                                <li className={`has-submenu child-menu-item ${['/portfolio-classic-two','/portfolio-classic-three','/portfolio-classic-four','/portfolio-classic-five','/portfolio-classic-six'].includes(manu) ? 'active' : ''}`}><Link to="#" onClick={()=>setSubManu(submenu === '/classic-item' ? '' : '/classic-item' )}> Classic</Link><span className="submenu-arrow"></span>
                                    <ul className={`submenu ${['/classic-item'].includes(submenu) ? 'open' : ''}`}>
                                        <li className={`${manu === '/portfolio-classic-two' ? 'active' : ''}`}><Link to="/portfolio-classic-two" className="sub-menu-item">Two Column</Link></li>
                                        <li className={`${manu === '/portfolio-classic-three' ? 'active' : ''}`}><Link to="/portfolio-classic-three" className="sub-menu-item">Three Column</Link></li>
                                        <li className={`${manu === '/portfolio-classic-four' ? 'active' : ''}`}><Link to="/portfolio-classic-four" className="sub-menu-item">Four Column</Link></li>
                                        <li className={`${manu === '/portfolio-classic-five' ? 'active' : ''}`}><Link to="/portfolio-classic-five" className="sub-menu-item">Five Column</Link></li>
                                        <li className={`${manu === '/portfolio-classic-six' ? 'active' : ''}`}><Link to="/portfolio-classic-six" className="sub-menu-item">Six Column</Link></li>
                                    </ul>  
                                </li>
                        
                                <li className={`has-submenu child-menu-item ${['/portfolio-creative-two','/portfolio-creative-three','/portfolio-creative-four','/portfolio-creative-five','/portfolio-creative-six'].includes(manu) ? 'active' : ''}`}><Link to="#" onClick={()=>setSubManu(submenu === '/creative-item' ? '' : '/creative-item' )}> Creative</Link><span className="submenu-arrow"></span>
                                    <ul className={`submenu ${['/creative-item'].includes(submenu) ? 'open' : ''}`}>
                                        <li className={`${manu === '/portfolio-creative-two' ? 'active' : ''}`}><Link to="/portfolio-creative-two" className="sub-menu-item">Two Column</Link></li>
                                        <li className={`${manu === '/portfolio-creative-three' ? 'active' : ''}`}><Link to="/portfolio-creative-three" className="sub-menu-item">Three Column</Link></li>
                                        <li className={`${manu === '/portfolio-creative-four' ? 'active' : ''}`}><Link to="/portfolio-creative-four" className="sub-menu-item">Four Column</Link></li>
                                        <li className={`${manu === '/portfolio-creative-five' ? 'active' : ''}`}><Link to="/portfolio-creative-five" className="sub-menu-item">Five Column</Link></li>
                                        <li className={`${manu === '/portfolio-creative-six' ? 'active' : ''}`}><Link to="/portfolio-creative-six" className="sub-menu-item">Six Column</Link></li>
                                    </ul>  
                                </li>
                        
                                <li className={`has-submenu child-menu-item ${['/portfolio-masonry-two','/portfolio-masonry-three','/portfolio-masonry-four','/portfolio-masonry-five','/portfolio-masonry-six'].includes(manu) ? 'active' : ''}`}><Link to="#" onClick={()=>setSubManu(submenu === '/masonry-item' ? '' : '/masonry-item' )}> Masonry</Link><span className="submenu-arrow"></span>
                                    <ul className={`submenu ${['/masonry-item'].includes(submenu) ? 'open' : ''}`}>
                                        <li className={`${manu === '/portfolio-masonry-two' ? 'active' : ''}`}><Link to="/portfolio-masonry-two" className="sub-menu-item">Two Column</Link></li>
                                        <li className={`${manu === '/portfolio-masonry-three' ? 'active' : ''}`}><Link to="/portfolio-masonry-three" className="sub-menu-item">Three Column</Link></li>
                                        <li className={`${manu === '/portfolio-masonry-four' ? 'active' : ''}`}><Link to="/portfolio-masonry-four" className="sub-menu-item">Four Column</Link></li>
                                        <li className={`${manu === '/portfolio-masonry-five' ? 'active' : ''}`}><Link to="/portfolio-masonry-five" className="sub-menu-item">Five Column</Link></li>
                                        <li className={`${manu === '/portfolio-masonry-six' ? 'active' : ''}`}><Link to="/portfolio-masonry-six" className="sub-menu-item">Six Column</Link></li>
                                    </ul>  
                                </li>
                        
                                <li className={`${manu === '/portfolio-detail' ? 'active' : ''}`}><Link to="/portfolio-detail" className="sub-menu-item">Portfolio Detail</Link></li>
                                <li className={`${manu === '/portfolio-detail-two' ? 'active' : ''}`}><Link to="/portfolio-detail-two" className="sub-menu-item">Portfolio Detail Two</Link></li>
                            </ul>
                        </li>

                        <li className={`has-submenu parent-parent-menu-item ${['/blogs','/blog-sidebar','/blog-standard-post','/blog-gallery-post','/blog-slider-post','/blog-link-post','/blog-story-post','/blog-youtube-post','/blog-html-video-post','/blog-audio-post','/blog-html-audio','/blog-blockquote-post','/blog-vimeo-post','/blog-left-sidebar-post'].includes(manu) ? 'active' : ''}`}>
                            <Link to="#" onClick={()=>setSubManu(submenu === '/blog-item' ? '' : '/blog-item' )}>Blogs</Link><span className="menu-arrow"></span>
                            <ul className={`submenu ${['/blog-item', '/blog-post-item'].includes(submenu) ? 'open' : ''}`}>
                                <li className={`${manu === '/blogs' ? 'active' : ''}`}><Link to="/blogs" className="sub-menu-item"> Blogs</Link></li>
                                <li className={`${manu === '/blog-sidebar' ? 'active' : ''}`}><Link to="/blog-sidebar" className="sub-menu-item"> Blog Sidebar</Link></li>

                                <li className={`has-submenu parent-menu-item ${['/blog-standard-post','/blog-gallery-post','/blog-slider-post','/blog-link-post','/blog-story-post','/blog-youtube-post','/blog-html-video-post','/blog-audio-post','/blog-html-audio','/blog-blockquote-post','/blog-vimeo-post','/blog-left-sidebar-post'].includes(manu) ? 'active' : ''}`}>
                                    <Link to="#" onClick={()=>setSubManu(submenu === '/blog-post-item' ? '' : '/blog-post-item' )}>Blog Posts</Link><span className="submenu-arrow"></span>
                                    <ul className={`submenu ${['/blog-post-item'].includes(submenu) ? 'open' : ''}`}>
                                        <li className={`${manu === '/blog-standard-post' ? 'active' : ''}`}><Link to="/blog-standard-post" className="sub-menu-item">Standard Post </Link></li>
                                        <li className={`${manu === '/blog-gallery-post' ? 'active' : ''}`}><Link to="/blog-gallery-post" className="sub-menu-item">Gallery Post </Link></li>
                                        <li className={`${manu === '/blog-slider-post' ? 'active' : ''}`}><Link to="/blog-slider-post" className="sub-menu-item">Slider Post </Link></li>
                                        <li className={`${manu === '/blog-link-post' ? 'active' : ''}`}><Link to="/blog-link-post" className="sub-menu-item">Link Post </Link></li>
                                        <li className={`${manu === '/blog-story-post' ? 'active' : ''}`}><Link to="/blog-story-post" className="sub-menu-item">Story Post </Link></li>
                                        <li className={`${manu === '/blog-youtube-post' ? 'active' : ''}`}><Link to="/blog-youtube-post" className="sub-menu-item">Youtube Post </Link></li>
                                        <li className={`${manu === '/blog-html-video-post' ? 'active' : ''}`}><Link to="/blog-html-video-post" className="sub-menu-item">Html Video Post </Link></li>
                                        <li className={`${manu === '/blog-audio-post' ? 'active' : ''}`}><Link to="/blog-audio-post" className="sub-menu-item">Audio Post </Link></li>
                                        <li className={`${manu === '/blog-html-audio' ? 'active' : ''}`}><Link to="/blog-html-audio" className="sub-menu-item">Html Audio Post </Link></li>
                                        <li className={`${manu === '/blog-blockquote-post' ? 'active' : ''}`}><Link to="/blog-blockquote-post" className="sub-menu-item">Blockquote Post </Link></li>
                                        <li className={`${manu === '/blog-vimeo-post' ? 'active' : ''}`}><Link to="/blog-vimeo-post" className="sub-menu-item">Vimeo Post </Link></li>
                                        <li className={`${manu === '/blog-left-sidebar-post' ? 'active' : ''}`}><Link to="/blog-left-sidebar-post" className="sub-menu-item">Left Sidebar Post </Link></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                
                        <li className={`${manu === '/contactus' ? 'active' : ''}`}><Link to="/contactus" className="sub-menu-item">Contact Us</Link></li>
                    </ul>
                </div>
            </div>
        </header>

        <div className="offcanvas offcanvas-end shadow border-0" tabIndex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div className="offcanvas-header p-4 border-bottom">
                <h5 id="offcanvasRightLabel" className="mb-0">
                    <img src={logoDark} className="light-version" alt=""/>
                    <img src={logoLight} className="dark-version" alt=""/>
                </h5>
                <button type="button" className="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i className="mdi mdi-close fs-4"></i></button>
            </div>
            <div className="offcanvas-body p-4">
                <div className="row">
                    <div className="col-12">
                        <img src={contact} className="img-fluid" alt=""/>
                        <form>
                            <div className="my-3 text-center">
                                <h6 className="text-uppercase mb-0 fw-semibold">Sign In</h6>
                            </div>
                        
                            <div className="mb-3">
                                <label className="form-label fw-semibold" htmlFor='name'>Your Email</label>
                                <input name="email" id="email" type="email" className="form-control" placeholder="example@website.com"/>
                            </div>

                            <div className="mb-3">
                                <label className="form-label fw-semibold" htmlFor="loginpass">Password</label>
                                <input type="password" className="form-control" id="loginpass" placeholder="Password"/>
                            </div>
                        
                            <div className="d-flex justify-content-between">
                                <div className="mb-3">
                                    <div className="form-check">
                                        <input className="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                                        <label className="form-label form-check-label text-muted" htmlFor="flexCheckDefault">Remember me</label>
                                    </div>
                                </div>
                                <span className="forgot-pass text-muted small mb-0"><Link to="/reset-password" className="text-muted">Forgot password ?</Link></span>
                            </div>
            
                            <button className="btn btn-primary w-100" type="submit">Sign in</button>

                            <div className="col-12 text-center mt-3">
                                <span><span className="text-muted me-2 small">Don't have an account ?</span> <Link to="/signup" className="text-dark fw-semibold small">Sign Up</Link></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div className="offcanvas-footer p-4 border-top text-center">
                <ul className="list-unstyled social-icon mb-0">
                    {footerSocial.map((item,index)=>{
                        let Icon = item.icon
                        return(
                            <li className="list-inline-item" key={index} style={{margin:'0 2px'}}><Link to={item.link} target="_blank" className="rounded"><Icon className="fea icon-sm align-middle"/></Link></li>
                        )
                    })}
                </ul>
            </div>
        </div>
    </>
  )
}
