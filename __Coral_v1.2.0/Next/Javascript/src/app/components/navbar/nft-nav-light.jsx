'use client'
import { useEffect, useState } from 'react';
import Link from 'next/link';
import { usePathname } from 'next/navigation';

import { FiCopy, FiDollarSign, FiLogOut, FiSearch, FiSettings, FiUser } from 'react-icons/fi'
import { footerSocial } from '../../data/data';
import Image from 'next/image';

export default function NftNavLight() {
    let [submenu, setSubManu] = useState();
    let [toggle, setToggle] = useState(false);
    let [scrolling, setScrolling] = useState(false);

    let current = usePathname();

    useEffect(()=>{
        window.scrollTo(0, 0);

        const handleScroll = () => {
            const isScrolling = window.scrollY > 50;
            setScrolling(isScrolling);
        };
        window.addEventListener('scroll', handleScroll);

        return()=>{
            window.removeEventListener('scroll', handleScroll);
        }

    },[current])
  return (
    <>
        <header id="topnav" className={`defaultscroll sticky ${scrolling ? 'nav-sticky' : ''}`}>
            <div className="container">
                <Link className="logo" href="/">
                    <span className="logo-light-mode">
                        <Image src='/images/logo-dark.png' width={93} height={22} className="l-dark" alt=""/>
                        <Image src='/images/logo-white.png' width={93} height={22} className="l-light" alt=""/>
                    </span>
                    <Image src='/images/logo-white.png' width={93} height={22} className="logo-dark-mode" alt=""/>
                </Link>

                <div className="menu-extras">
                    <div className="menu-item">
                        <Link href="#" className={`navbar-toggle ${toggle ? 'open' : ''}`} id="isToggle" onClick={()=>setToggle(!toggle)}>
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
                                 <FiSearch className="fea icon-20 login-btn-primary"></FiSearch>
                                <FiSearch className="fea icon-20 text-white login-btn-light"></FiSearch>
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
                        <Link href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <div className="btn btn-sm btn-icon btn-pills btn-primary"><FiSettings className="fea icon-sm"/></div>
                        </Link>
                    </li>

                     <li className="list-inline-item ps-1 mb-0">
                        <div className="btn btn-sm btn-icon btn-pills btn-primary"><FiDollarSign className="fea icon-sm"/></div>
                    </li>

                    <li className="list-inline-item ps-1 mb-0">
                        <div className="dropdown dropdown-primary">
                            <button type="button" className="btn btn-pills dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><Image src='/images/team/1.jpg' width={45} height={45} className="rounded-pill avatar avatar-ex-small" alt=""/></button>
                            <div className="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 pb-3 pt-0 overflow-hidden rounded" style={{minWidth:'200px'}}>
                                <div className="position-relative">
                                    <div className="p-3">
                                        <div className="d-flex align-items-center mt-n4">
                                            <Image src='/images/team/1.jpg' width={45} height={45} className="rounded-pill avatar avatar-md-sm img-thumbnail shadow-md" alt=""/>
                                            <h6 className="text-dark fw-semibold mb-0 ms-1">Calvin Carlo</h6>
                                        </div>
                                        <div className="mt-3">
                                            <small className="text-start text-dark d-block fw-semibold">Wallet:</small>
                                            <div className="d-flex justify-content-between align-items-center">
                                                <small id="myPublicAddress" className="text-muted">qhutfvf0...hfteh45</small>
                                                <Link href="#" className="text-primary"><FiCopy className="fea icon-sm"/></Link>
                                            </div>
                                        </div>
                                        
                                        <div className="mt-2">
                                            <small className="text-dark fw-semibold">Balance: <span className="text-primary">0.00045ETH</span></small>
                                        </div>
                                    </div>
                                </div>
                                <div className="mt-2">
                                    <Link className="dropdown-item small fw-semibold text-dark d-flex align-items-center" href="/creator-profile"><span className="mb-0 d-inline-block me-1"><FiUser className="fea icon-sm me-1 align-middle"/></span> Profile</Link>
                                    <Link className="dropdown-item small fw-semibold text-dark d-flex align-items-center" href="/profile-setting"><span className="mb-0 d-inline-block me-1"><FiSettings  className="fea icon-sm me-1 align-middle"/></span> Settings</Link>
                                    <div className="dropdown-divider border-top"></div>
                                    <Link className="dropdown-item small fw-semibold text-dark d-flex align-items-center" href="/lock-screen"><span className="mb-0 d-inline-block me-1"><FiLogOut className="fea icon-sm me-1 align-middle"/></span> Logout</Link>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
        
                <div id="navigation" style={{display : toggle ? 'block' : 'none'}}>
                    <ul className={`navigation-menu nav-left nav-light`}>
                        <li className={`has-submenu parent-menu-item ${['/','/index-saas','/index-consulting','/index-cryptocurrency','/index-digital-marketing','/index-finance','/index-it-solution','/index-hospital','/index-nft','/index-minimal-portfolio','/index-web-hosting','/index-yoga','/index-charity'].includes(current) ? 'active' : ''}`}>
                            <Link href="#" onClick={()=>setSubManu(submenu === '/index-item' ? '' : '/index-item' )}>Home</Link><span className="menu-arrow"></span>
                            <ul className={`submenu ${['/index-item'].includes(submenu) ? 'open' : ''}`}>
                                <li className={`${current === '/' ? 'active' : ''}`}><Link href="/" className="sub-menu-item">Business</Link></li>
                                <li className={`${current === '/index-saas' ? 'active' : ''}`}><Link href="/index-saas" className="sub-menu-item">Saas</Link></li>
                                <li className={`${current === '/index-consulting' ? 'active' : ''}`}><Link href="/index-consulting" className="sub-menu-item">Consulting</Link></li>
                                <li className={`${current === '/index-cryptocurrency' ? 'active' : ''}`}><Link href="/index-cryptocurrency" className="sub-menu-item">Cryptocurrency</Link></li>
                                <li className={`${current === '/index-digital-marketing' ? 'active' : ''}`}><Link href="/index-digital-marketing" className="sub-menu-item">Digital Marketing</Link></li>
                                <li className={`${current === '/index-finance' ? 'active' : ''}`}><Link href="/index-finance" className="sub-menu-item">Finance</Link></li>
                                <li className={`${current === '/index-it-solution' ? 'active' : ''}`}><Link href="/index-it-solution" className="sub-menu-item">IT Solutions</Link></li>
                                <li className={`${current === '/index-hospital' ? 'active' : ''}`}><Link href="/index-hospital" className="sub-menu-item">Hospital / Medical</Link></li>
                                <li className={`${current === '/index-nft' ? 'active' : ''}`}><Link href="/index-nft" className="sub-menu-item">NFT Marketplace</Link></li>
                                <li className={`${current === '/index-minimal-portfolio' ? 'active' : ''}`}><Link href="/index-minimal-portfolio" className="sub-menu-item">Minimal Portfolio</Link></li>
                                <li className={`${current === '/index-web-hosting' ? 'active' : ''}`}><Link href="/index-web-hosting" className="sub-menu-item">Web Hosting</Link></li>
                                <li className={`${current === '/index-yoga' ? 'active' : ''}`}><Link href="/index-yoga" className="sub-menu-item">Yoga</Link></li>
                                <li className={`${current === '/index-charity' ? 'active' : ''}`}><Link href="/index-charity" className="sub-menu-item">Charity</Link></li>
                            </ul>
                        </li>
                
                        <li className={`${current === '/aboutus' ? 'active' : ''}`}><a href="/aboutus" className="sub-menu-item">About Us</a></li>

                        <li className={`has-submenu parent-parent-menu-item ${['/services','/service-detail','/pricing','/team','/testimonial','/faqs','/nft-explore','/nft-detail','/collection','/wallet','/upload-item','/creators', '/creator-profile', '/profile-setting','/login','/signup','/reset-password','/lock-screen','/terms','/privacy','/comingsoon','/maintenance','/error'].includes(current) ? 'active' : '' }`}>
                            <Link href="#" onClick={()=>setSubManu(submenu === '/page-item' ? '' : '/page-item' )}>Pages</Link><span className="menu-arrow"></span>
                            <ul className={`submenu ${['/page-item','/nft-item','/auth-item','/utility-item','/special-item'].includes(submenu) ? 'open' : ''}`}>
                                <li className={`${current === '/services' ? 'active' : ''}`}><Link href="/services" className="sub-menu-item">Services</Link></li>
                                <li className={`${current === '/service-detail' ? 'active' : ''}`}><Link href="/service-detail" className="sub-menu-item">Service Detail</Link></li>
                                <li className={`${current === '/pricing' ? 'active' : ''}`}><Link href="/pricing" className="sub-menu-item">Pricing</Link></li>
                                <li className={`${current === '/team' ? 'active' : ''}`}><Link href="/team" className="sub-menu-item">Team</Link></li>
                                <li className={`${current === '/testimonial' ? 'active' : ''}`}><Link href="/testimonial" className="sub-menu-item">Testimonial</Link></li>

                                <li className={`${current === '/faqs' ? 'active' : ''}`}><Link href="/faqs" className="sub-menu-item">FAQs</Link></li>

                                <li className={`has-submenu parent-menu-item ${['/nft-explore','/nft-detail','/collection','/wallet','/upload-item','/creators', '/creator-profile', '/profile-setting'].includes(current) ? 'active' : ''}`}>
                                    <Link href="#" onClick={()=>setSubManu(submenu === '/nft-item' ? '' : '/nft-item' )}>NFT</Link><span className="submenu-arrow"></span>
                                    <ul className={`submenu ${['/nft-item'].includes(submenu) ? 'open' : ''}`}>
                                        <li className={`${current === '/nft-explore' ? 'active' : ''}`}><Link href="/nft-explore" className="sub-menu-item">NFT Explore</Link></li>
                                        <li className={`${current === '/nft-detail' ? 'active' : ''}`}><Link href="/nft-detail" className="sub-menu-item">NFT Detail</Link></li>
                                        <li className={`${current === '/collection' ? 'active' : ''}`}><Link href="/collection" className="sub-menu-item">Collection</Link></li>
                                        <li className={`${current === '/wallet' ? 'active' : ''}`}><Link href="/wallet" className="sub-menu-item">Wallet</Link></li>
                                        <li className={`${current === '/upload-item' ? 'active' : ''}`}><Link href="/upload-item" className="sub-menu-item">Upload Item</Link></li>
                                        <li className={`has-submenu child-menu-item ${['/creators', '/creator-profile', '/profile-setting'].includes(current) ? 'active' : '' }`}>
                                            <Link href="#"> Creators </Link><span className="submenu-arrow"></span>
                                            <ul className="submenu">
                                                <li className={`${current === '/creators' ? 'active' : ''}`}><Link href="/creators" className="sub-menu-item">Creators</Link></li>
                                                <li className={`${current === '/creator-profile' ? 'active' : ''}`}><Link href="/creator-profile" className="sub-menu-item">Creator Profile</Link></li>
                                                <li className={`${current === '/profile-setting' ? 'active' : ''}`}><Link href="/profile-setting" className="sub-menu-item">Profile Setting</Link></li>
                                            </ul>  
                                        </li>
                                    </ul>
                                </li>

                                <li className={`has-submenu parent-menu-item ${['/login','/signup','/reset-password','/lock-screen'].includes(current) ? 'active' : ''}`}><Link href="#" onClick={()=>setSubManu(submenu === '/auth-item' ? '' : '/auth-item' )}> Auth Pages </Link><span className="submenu-arrow"></span>
                                    <ul className={`submenu ${['/auth-item'].includes(submenu) ? 'open' : ''}`}>
                                        <li className={`${current === '/login' ? 'active' : ''}`}><Link href="/login" className="sub-menu-item"> Login</Link></li>
                                        <li className={`${current === '/signup' ? 'active' : ''}`}><Link href="/signup" className="sub-menu-item"> Signup</Link></li>
                                        <li className={`${current === '/reset-password' ? 'active' : ''}`}><Link href="/reset-password" className="sub-menu-item"> Forgot Password</Link></li>
                                        <li className={`${current === '/lock-screen' ? 'active' : ''}`}><Link href="/lock-screen" className="sub-menu-item"> Lock Screen</Link></li>
                                    </ul> 
                                </li>

                                <li className={`has-submenu parent-menu-item ${['/terms','/privacy'].includes(current) ? 'active' : ''}`}><Link href="#" onClick={()=>setSubManu(submenu === '/utility-item' ? '' : '/utility-item' )}> Utility </Link><span className="submenu-arrow"></span>
                                    <ul className={`submenu ${['/utility-item'].includes(submenu) ? 'open' : ''}`}>
                                        <li className={`${current === '/terms' ? 'active' : ''}`}><Link href="/terms" className="sub-menu-item">Terms of Services</Link></li>
                                        <li className={`${current === '/privacy' ? 'active' : ''}`}><Link href="/privacy" className="sub-menu-item">Privacy Policy</Link></li>
                                    </ul>  
                                </li>

                                <li className={`has-submenu parent-menu-item ${['/comingsoon','/maintenance','/error'].includes(current) ? 'active' : ''}`}><Link href="#" onClick={()=>setSubManu(submenu === '/special-item' ? '' : '/special-item' )}> Special </Link><span className="submenu-arrow"></span>
                                    <ul className={`submenu ${['/special-item'].includes(submenu) ? 'open' : ''}`}>
                                        <li className={`${current === '/comingsoon' ? 'active' : ''}`}><Link href="/comingsoon" className="sub-menu-item"> Coming Soon</Link></li>
                                        <li className={`${current === '/maintenance' ? 'active' : ''}`}><Link href="/maintenance" className="sub-menu-item"> Maintenance</Link></li>
                                        <li className={`${current === '/error' ? 'active' : ''}`}><Link href="/error" className="sub-menu-item"> 404! Error</Link></li>
                                    </ul> 
                                </li>
                            </ul>
                        </li>

                        <li className={`has-submenu parent-parent-menu-item ${['/portfolio-detail','/portfolio-detail-two','/portfolio-modern-two','/portfolio-modern-three','/portfolio-modern-four','/portfolio-modern-five','/portfolio-modern-six','/portfolio-classic-two','/portfolio-classic-three','/portfolio-classic-four','/portfolio-classic-five','/portfolio-classic-six','/portfolio-creative-two','/portfolio-creative-three','/portfolio-creative-four','/portfolio-creative-five','/portfolio-creative-six','/portfolio-masonry-two','/portfolio-masonry-three','/portfolio-masonry-four','/portfolio-masonry-five','/portfolio-masonry-six'].includes(current) ? 'active' : ''}`}>
                            <Link href="#" onClick={()=>setSubManu(submenu === '/portfolio-item' ? '' : '/portfolio-item' )}>Portfolio</Link><span className="menu-arrow"></span>
                            <ul className={`submenu ${['/portfolio-item','/modern-item','/classic-item','/creative-item','/masonry-item'].includes(submenu) ? 'open' : ''}`}>
                                <li className={`has-submenu child-menu-item ${['/portfolio-modern-two','/portfolio-modern-three','/portfolio-modern-four','/portfolio-modern-five','/portfolio-modern-six'].includes(current) ? 'active' : ''}`}><Link href="#" onClick={()=>setSubManu(submenu === '/modern-item' ? '' : '/modern-item' )}> Modern</Link><span className="submenu-arrow"></span>
                                    <ul className={`submenu ${['/modern-item'].includes(submenu) ? 'open' : ''}`}>
                                        <li className={`${current === '/portfolio-modern-two' ? 'active' : ''}`}><Link href="/portfolio-modern-two" className="sub-menu-item">Two Column</Link></li>
                                        <li className={`${current === '/portfolio-modern-three' ? 'active' : ''}`}><Link href="/portfolio-modern-three" className="sub-menu-item">Three Column</Link></li>
                                        <li className={`${current === '/portfolio-modern-four' ? 'active' : ''}`}><Link href="/portfolio-modern-four" className="sub-menu-item">Four Column</Link></li>
                                        <li className={`${current === '/portfolio-modern-five' ? 'active' : ''}`}><Link href="/portfolio-modern-five" className="sub-menu-item">Five Column</Link></li>
                                        <li className={`${current === '/portfolio-modern-six' ? 'active' : ''}`}><Link href="/portfolio-modern-six" className="sub-menu-item">Six Column</Link></li>
                                    </ul>  
                                </li>
                        
                                <li className={`has-submenu child-menu-item ${['/portfolio-classic-two','/portfolio-classic-three','/portfolio-classic-four','/portfolio-classic-five','/portfolio-classic-six'].includes(current) ? 'active' : ''}`}><Link href="#" onClick={()=>setSubManu(submenu === '/classic-item' ? '' : '/classic-item' )}> Classic</Link><span className="submenu-arrow"></span>
                                    <ul className={`submenu ${['/classic-item'].includes(submenu) ? 'open' : ''}`}>
                                        <li className={`${current === '/portfolio-classic-two' ? 'active' : ''}`}><Link href="/portfolio-classic-two" className="sub-menu-item">Two Column</Link></li>
                                        <li className={`${current === '/portfolio-classic-three' ? 'active' : ''}`}><Link href="/portfolio-classic-three" className="sub-menu-item">Three Column</Link></li>
                                        <li className={`${current === '/portfolio-classic-four' ? 'active' : ''}`}><Link href="/portfolio-classic-four" className="sub-menu-item">Four Column</Link></li>
                                        <li className={`${current === '/portfolio-classic-five' ? 'active' : ''}`}><Link href="/portfolio-classic-five" className="sub-menu-item">Five Column</Link></li>
                                        <li className={`${current === '/portfolio-classic-six' ? 'active' : ''}`}><Link href="/portfolio-classic-six" className="sub-menu-item">Six Column</Link></li>
                                    </ul>  
                                </li>
                        
                                <li className={`has-submenu child-menu-item ${['/portfolio-creative-two','/portfolio-creative-three','/portfolio-creative-four','/portfolio-creative-five','/portfolio-creative-six'].includes(current) ? 'active' : ''}`}><Link href="#" onClick={()=>setSubManu(submenu === '/creative-item' ? '' : '/creative-item' )}> Creative</Link><span className="submenu-arrow"></span>
                                    <ul className={`submenu ${['/creative-item'].includes(submenu) ? 'open' : ''}`}>
                                        <li className={`${current === '/portfolio-creative-two' ? 'active' : ''}`}><Link href="/portfolio-creative-two" className="sub-menu-item">Two Column</Link></li>
                                        <li className={`${current === '/portfolio-creative-three' ? 'active' : ''}`}><Link href="/portfolio-creative-three" className="sub-menu-item">Three Column</Link></li>
                                        <li className={`${current === '/portfolio-creative-four' ? 'active' : ''}`}><Link href="/portfolio-creative-four" className="sub-menu-item">Four Column</Link></li>
                                        <li className={`${current === '/portfolio-creative-five' ? 'active' : ''}`}><Link href="/portfolio-creative-five" className="sub-menu-item">Five Column</Link></li>
                                        <li className={`${current === '/portfolio-creative-six' ? 'active' : ''}`}><Link href="/portfolio-creative-six" className="sub-menu-item">Six Column</Link></li>
                                    </ul>  
                                </li>
                        
                                <li className={`has-submenu child-menu-item ${['/portfolio-masonry-two','/portfolio-masonry-three','/portfolio-masonry-four','/portfolio-masonry-five','/portfolio-masonry-six'].includes(current) ? 'active' : ''}`}><Link href="#" onClick={()=>setSubManu(submenu === '/masonry-item' ? '' : '/masonry-item' )}> Masonry</Link><span className="submenu-arrow"></span>
                                    <ul className={`submenu ${['/masonry-item'].includes(submenu) ? 'open' : ''}`}>
                                        <li className={`${current === '/portfolio-masonry-two' ? 'active' : ''}`}><Link href="/portfolio-masonry-two" className="sub-menu-item">Two Column</Link></li>
                                        <li className={`${current === '/portfolio-masonry-three' ? 'active' : ''}`}><Link href="/portfolio-masonry-three" className="sub-menu-item">Three Column</Link></li>
                                        <li className={`${current === '/portfolio-masonry-four' ? 'active' : ''}`}><Link href="/portfolio-masonry-four" className="sub-menu-item">Four Column</Link></li>
                                        <li className={`${current === '/portfolio-masonry-five' ? 'active' : ''}`}><Link href="/portfolio-masonry-five" className="sub-menu-item">Five Column</Link></li>
                                        <li className={`${current === '/portfolio-masonry-six' ? 'active' : ''}`}><Link href="/portfolio-masonry-six" className="sub-menu-item">Six Column</Link></li>
                                    </ul>  
                                </li>
                        
                                <li className={`${current === '/portfolio-detail' ? 'active' : ''}`}><Link href="/portfolio-detail" className="sub-menu-item">Portfolio Detail</Link></li>
                                <li className={`${current === '/portfolio-detail-two' ? 'active' : ''}`}><Link href="/portfolio-detail-two" className="sub-menu-item">Portfolio Detail Two</Link></li>
                            </ul>
                        </li>

                        <li className={`has-submenu parent-parent-menu-item ${['/blogs','/blog-sidebar','/blog-standard-post','/blog-gallery-post','/blog-slider-post','/blog-link-post','/blog-story-post','/blog-youtube-post','/blog-html-video-post','/blog-audio-post','/blog-html-audio','/blog-blockquote-post','/blog-vimeo-post','/blog-left-sidebar-post'].includes(current) ? 'active' : ''}`}>
                            <Link href="#" onClick={()=>setSubManu(submenu === '/blog-item' ? '' : '/blog-item' )}>Blogs</Link><span className="menu-arrow"></span>
                            <ul className={`submenu ${['/blog-item', '/blog-post-item'].includes(submenu) ? 'open' : ''}`}>
                                <li className={`${current === '/blogs' ? 'active' : ''}`}><Link href="/blogs" className="sub-menu-item"> Blogs</Link></li>
                                <li className={`${current === '/blog-sidebar' ? 'active' : ''}`}><Link href="/blog-sidebar" className="sub-menu-item"> Blog Sidebar</Link></li>

                                <li className={`has-submenu parent-menu-item ${['/blog-standard-post','/blog-gallery-post','/blog-slider-post','/blog-link-post','/blog-story-post','/blog-youtube-post','/blog-html-video-post','/blog-audio-post','/blog-html-audio','/blog-blockquote-post','/blog-vimeo-post','/blog-left-sidebar-post'].includes(current) ? 'active' : ''}`}>
                                    <Link href="#" onClick={()=>setSubManu(submenu === '/blog-post-item' ? '' : '/blog-post-item' )}>Blog Posts</Link><span className="submenu-arrow"></span>
                                    <ul className={`submenu ${['/blog-post-item'].includes(submenu) ? 'open' : ''}`}>
                                        <li className={`${current === '/blog-standard-post' ? 'active' : ''}`}><Link href="/blog-standard-post" className="sub-menu-item">Standard Post </Link></li>
                                        <li className={`${current === '/blog-gallery-post' ? 'active' : ''}`}><Link href="/blog-gallery-post" className="sub-menu-item">Gallery Post </Link></li>
                                        <li className={`${current === '/blog-slider-post' ? 'active' : ''}`}><Link href="/blog-slider-post" className="sub-menu-item">Slider Post </Link></li>
                                        <li className={`${current === '/blog-link-post' ? 'active' : ''}`}><Link href="/blog-link-post" className="sub-menu-item">Link Post </Link></li>
                                        <li className={`${current === '/blog-story-post' ? 'active' : ''}`}><Link href="/blog-story-post" className="sub-menu-item">Story Post </Link></li>
                                        <li className={`${current === '/blog-youtube-post' ? 'active' : ''}`}><Link href="/blog-youtube-post" className="sub-menu-item">Youtube Post </Link></li>
                                        <li className={`${current === '/blog-html-video-post' ? 'active' : ''}`}><Link href="/blog-html-video-post" className="sub-menu-item">Html Video Post </Link></li>
                                        <li className={`${current === '/blog-audio-post' ? 'active' : ''}`}><Link href="/blog-audio-post" className="sub-menu-item">Audio Post </Link></li>
                                        <li className={`${current === '/blog-html-audio' ? 'active' : ''}`}><Link href="/blog-html-audio" className="sub-menu-item">Html Audio Post </Link></li>
                                        <li className={`${current === '/blog-blockquote-post' ? 'active' : ''}`}><Link href="/blog-blockquote-post" className="sub-menu-item">Blockquote Post </Link></li>
                                        <li className={`${current === '/blog-vimeo-post' ? 'active' : ''}`}><Link href="/blog-vimeo-post" className="sub-menu-item">Vimeo Post </Link></li>
                                        <li className={`${current === '/blog-left-sidebar-post' ? 'active' : ''}`}><Link href="/blog-left-sidebar-post" className="sub-menu-item">Left Sidebar Post </Link></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                
                        <li className={`${current === '/contactus' ? 'active' : ''}`}><Link href="/contactus" className="sub-menu-item">Contact Us</Link></li>
                    </ul>
                </div>
            </div>
        </header>

        <div className="offcanvas offcanvas-end shadow border-0" tabIndex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div className="offcanvas-header p-4 border-bottom">
                <h5 id="offcanvasRightLabel" className="mb-0">
                    <Image src='/images/logo-dark.png' width={93} height={22} className="light-version" alt=""/>
                    <Image src='/images/logo-light.png' width={93} height={22} className="dark-version" alt=""/>
                </h5>
                <button type="button" className="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i className="mdi mdi-close fs-4"></i></button>
            </div>
            <div className="offcanvas-body p-4">
                <div className="row">
                    <div className="col-12">
                        <img src='/images/contact.png' className="img-fluid" alt=""/>
                        <form>
                            <div className="my-3 text-center">
                                <h6 className="text-uppercase mb-0 fw-semibold">Sign In</h6>
                            </div>
                        
                            <div className="mb-3">
                                <label className="form-label fw-semibold">Your Email</label>
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
                                <span className="forgot-pass text-muted small mb-0"><Link href="/reset-password" className="text-muted">Forgot password ?</Link></span>
                            </div>
            
                            <button className="btn btn-primary w-100" type="submit">Sign in</button>

                            <div className="col-12 text-center mt-3">
                                <span><span className="text-muted me-2 small">Don't have an account ?</span> <Link href="/signup" className="text-dark fw-semibold small">Sign Up</Link></span>
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
                            <li className="list-inline-item" key={index} style={{margin:'0 2px'}}><Link href={item.link} target="_blank" className="rounded"><Icon className="fea icon-sm align-middle"/></Link></li>
                        )
                    })}
                </ul>
            </div>
        </div>
    </>
  )
}
