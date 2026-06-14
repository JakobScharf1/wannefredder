<template>
    <header id="topnav" class="defaultscroll sticky tagline-height">
        <div class="container">
            <NuxtLink class="logo" to="/">
                <span class="logo-light-mode">
                    <img :src="logoDark" class="l-dark" alt=""/>
                    <img :src="logoWhite" class="l-light" alt=""/>
                </span>
                <img :src="logoWhite" class="logo-dark-mode" alt=""/>
            </NuxtLink>

            <div class="menu-extras">
                <div class="menu-item">
                    <NuxtLink to="#" class="navbar-toggle" :class="toggle ? 'open' : ''" id="isToggle" @click="toggle = !toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </NuxtLink>
                </div>
            </div>

            <ul class="buy-button list-inline mb-0">
                <li class="list-inline-item mb-0">
                    <div class="dropdown">
                        <button type="button" class="dropdown-toggle btn btn-sm p-0 border-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="search" class="fea icon-20 login-btn-primary"></i>
                            <i data-feather="search" class="fea icon-20 text-white login-btn-light"></i>
                        </button>
                        <div class="dropdown-menu dd-menu dropdown-menu-end bg-white rounded border-0 mt-3 p-0" style="width: 240px;">
                            <div class="search-bar">
                                <div id="itemSearch" class="menu-search mb-0">
                                    <form role="search" method="get" id="searchItemform" class="searchform">
                                        <input type="text" class="form-control rounded border" name="s" id="searchItem" placeholder="Search...">
                                        <input type="submit" id="searchItemsubmit" value="Search">
                                        <i data-feather="search" class="icons"></i>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="list-inline-item ps-1 mb-0">
                    <NuxtLink to="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <span class="login-btn-primary">
                            <span class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="settings" class="fea icon-sm"></i></span>
                        </span>
                        <span class="login-btn-light">
                            <span class="btn btn-sm btn-icon btn-pills btn-danger"><i data-feather="settings" class="fea icon-sm"></i></span>
                        </span>
                    </NuxtLink>
                </li>

                <li class="list-inline-item ps-1 mb-0">
                    <NuxtLink to="#" class="btn btn-sm btn-primary login-btn-primary">Shop Now</NuxtLink>
                    <NuxtLink to="#" class="btn btn-sm btn-danger login-btn-light">Shop Now</NuxtLink>
                </li>
            </ul>
    
            <div id="navigation" :style="{display : toggle ? 'block' : 'none'}">
                <ul class="navigation-menu nav-right nav-light">
                    <li class="has-submenu parent-menu-item" :class="['/','/index-saas','/index-consulting','/index-cryptocurrency','/index-digital-marketing','/index-finance','/index-it-solution','/index-hospital','/index-nft','/index-minimal-portfolio','/index-web-hosting','/index-yoga','/index-charity'].includes(current) ? 'active' : ''">
                        <NuxtLink to="#" @click="submenu = submenu === '/index-item' ? '' : '/index-item'">Home</NuxtLink><span class="menu-arrow"></span>
                        <ul class="submenu" :class="['/index-item'].includes(submenu) ? 'open' : ''">
                            <li :class="current === '/' ? 'active' : ''"><NuxtLink to="/" class="sub-menu-item">Business</NuxtLink></li>
                            <li :class="current === '/index-saas' ? 'active' : ''"><NuxtLink to="/index-saas" class="sub-menu-item">Saas</NuxtLink></li>
                            <li :class="current === '/index-consulting' ? 'active' : ''"><NuxtLink to="/index-consulting" class="sub-menu-item">Consulting</NuxtLink></li>
                            <li :class="current === '/index-cryptocurrency' ? 'active' : ''"><NuxtLink to="/index-cryptocurrency" class="sub-menu-item">Cryptocurrency</NuxtLink></li>
                            <li :class="current === '/index-digital-marketing' ? 'active' : ''"><NuxtLink to="/index-digital-marketing" class="sub-menu-item">Digital Marketing</NuxtLink></li>
                            <li :class="current === '/index-finance' ? 'active' : ''"><NuxtLink to="/index-finance" class="sub-menu-item">Finance</NuxtLink></li>
                            <li :class="current === '/index-it-solution' ? 'active' : ''"><NuxtLink to="/index-it-solution" class="sub-menu-item">IT Solutions</NuxtLink></li>
                            <li :class="current === '/index-hospital' ? 'active' : ''"><NuxtLink to="/index-hospital" class="sub-menu-item">Hospital / Medical</NuxtLink></li>
                            <li :class="current === '/index-nft' ? 'active' : ''"><NuxtLink to="/index-nft" class="sub-menu-item">NFT Marketplace</NuxtLink></li>
                            <li :class="current === '/index-minimal-portfolio' ? 'active' : ''"><NuxtLink to="/index-minimal-portfolio" class="sub-menu-item">Minimal Portfolio</NuxtLink></li>
                            <li :class="current === '/index-web-hosting' ? 'active' : ''"><NuxtLink to="/index-web-hosting" class="sub-menu-item">Web Hosting</NuxtLink></li>
                            <li :class="current === '/index-yoga' ? 'active' : ''"><NuxtLink to="/index-yoga" class="sub-menu-item">Yoga</NuxtLink></li>
                            <li :class="current === '/index-charity' ? 'active' : ''"><NuxtLink to="/index-charity" class="sub-menu-item">Charity</NuxtLink></li>
                        </ul>
                    </li>
            
                    <li :class="current === '/aboutus' ? 'active' : ''"><NuxtLink to="/aboutus" class="sub-menu-item">About Us</NuxtLink></li>

                    <li class="has-submenu parent-parent-menu-item" :class="['/services','/service-detail','/pricing','/team','/testimonial','/faqs','/nft-explore','/nft-detail','/collection','/wallet','/upload-item','/creators','/creator-profile','/profile-setting','/login','/signup','/reset-password','/lock-screen','/terms','/privacy','/comingsoon','/maintenance','/error'].includes(current)? 'active' : ''">
                        <NuxtLink to="#" @click="submenu = submenu === '/page-item' ? '' : '/page-item'">Pages</NuxtLink><span class="menu-arrow"></span>
                        <ul class="submenu" :class="['/page-item','/nft-item','/creator-item','/auth-item','/utility-item','/special-item'].includes(submenu) ? 'open' : ''">
                            <li :class="current === '/services' ? 'active' : ''"><NuxtLink to="/services" class="sub-menu-item">Services</NuxtLink></li>
                            <li :class="current === '/service-detail' ? 'active' : ''"><NuxtLink to="/service-detail" class="sub-menu-item">Service Detail</NuxtLink></li>
                            <li :class="current === '/pricing' ? 'active' : ''"><NuxtLink to="/pricing" class="sub-menu-item">Pricing</NuxtLink></li>
                            <li :class="current === '/team' ? 'active' : ''"><NuxtLink to="/team" class="sub-menu-item">Team</NuxtLink></li>
                            <li :class="current === '/testimonial' ? 'active' : ''"><NuxtLink to="/testimonial" class="sub-menu-item">Testimonial</NuxtLink></li>

                            <li :class="current === '/faqs' ? 'active' : ''"><NuxtLink to="/faqs" class="sub-menu-item">FAQs</NuxtLink></li>

                            <li class="has-submenu parent-menu-item" :class="['/nft-explore','/nft-detail','/collection','/wallet','/upload-item','/creators','/creator-profile','/profile-setting'].includes(current) ? 'active' : ''">
                                <NuxtLink to="#" @click="submenu = submenu === '/nft-item' ? '' : '/nft-item'">NFT</NuxtLink><span class="submenu-arrow"></span>
                                <ul class="submenu" :class="['/nft-item','/creator-item'].includes(submenu) ? 'open' : ''">
                                    <li :class="current === '/nft-explore' ? 'active' : ''"><NuxtLink to="/nft-explore" class="sub-menu-item">NFT Explore</NuxtLink></li>
                                    <li :class="current === '/nft-detail' ? 'active' : ''"><NuxtLink to="/nft-detail" class="sub-menu-item">NFT Detail</NuxtLink></li>
                                    <li :class="current === '/collection' ? 'active' : ''"><NuxtLink to="/collection" class="sub-menu-item">Collection</NuxtLink></li>
                                    <li :class="current === '/wallet' ? 'active' : ''"><NuxtLink to="/wallet" class="sub-menu-item">Wallet</NuxtLink></li>
                                    <li :class="current === '/upload-item' ? 'active' : ''"><NuxtLink to="/upload-item" class="sub-menu-item">Upload Item</NuxtLink></li>
                                    <li class="has-submenu child-menu-item" :class="['/creators','/creator-profile','/profile-setting'].includes(current) ? 'active' : ''">
                                        <NuxtLink to="#" @click="submenu = submenu === '/creator-item' ? '' : '/creator-item'"> Creators </NuxtLink><span class="submenu-arrow"></span>
                                        <ul class="submenu" :class="['/creator-item'].includes(submenu) ? 'open' : ''">
                                            <li :class="current === '/creators' ? 'active' : ''"><NuxtLink to="/creators" class="sub-menu-item">Creators</NuxtLink></li>
                                            <li :class="current === '/creator-profile' ? 'active' : ''"><NuxtLink to="/creator-profile" class="sub-menu-item">Creator Profile</NuxtLink></li>
                                            <li :class="current === '/profile-setting' ? 'active' : ''"><NuxtLink to="/profile-setting" class="sub-menu-item">Profile Setting</NuxtLink></li>
                                        </ul>  
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu parent-menu-item" :class="['/login','/signup','/reset-password','/lock-screen'].includes(current) ? 'active' : ''"><NuxtLink to="#" @click="submenu = submenu === '/auth-item' ? '' : '/auth-item'"> Auth Pages </NuxtLink><span class="submenu-arrow"></span>
                                <ul class="submenu" :class="['/auth-item'].includes(submenu) ? 'open' : ''">
                                    <li :class="current === '/login' ? 'active' : ''"><NuxtLink to="/login" class="sub-menu-item"> Login</NuxtLink></li>
                                    <li :class="current === '/signup' ? 'active' : ''"><NuxtLink to="/signup" class="sub-menu-item"> Signup</NuxtLink></li>
                                    <li :class="current === '/reset-password' ? 'active' : ''"><NuxtLink to="/reset-password" class="sub-menu-item"> Forgot Password</NuxtLink></li>
                                    <li :class="current === '/lock-screen' ? 'active' : ''"><NuxtLink to="/lock-screen" class="sub-menu-item"> Lock Screen</NuxtLink></li>
                                </ul> 
                            </li>

                            <li class="has-submenu parent-menu-item" :class="['/terms','/privacy'].includes(current)? 'active' : ''"><NuxtLink to="#" @click="submenu = submenu === '/utility-item' ? '' : '/utility-item'"> Utility </NuxtLink><span class="submenu-arrow"></span>
                                <ul class="submenu" :class="['/utility-item'].includes(submenu) ? 'open' : ''">
                                    <li :class="current === '/terms' ? 'active' : ''"><NuxtLink to="/terms" class="sub-menu-item">Terms of Services</NuxtLink></li>
                                    <li :class="current === '/privacy' ? 'active' : ''"><NuxtLink to="/privacy" class="sub-menu-item">Privacy Policy</NuxtLink></li>
                                </ul>  
                            </li>

                            <li class="has-submenu parent-menu-item" :class="['/comingsoon','/maintenance','/error'].includes(current)? 'active' : ''"><NuxtLink to="#" @click="submenu = submenu === '/special-item' ? '' : '/special-item'"> Special </NuxtLink><span class="submenu-arrow"></span>
                                <ul class="submenu" :class="['/special-item'].includes(submenu) ? 'open' : ''">
                                    <li :class="current === '/comingsoon' ? 'active' : ''"><NuxtLink to="/comingsoon" class="sub-menu-item"> Coming Soon</NuxtLink></li>
                                    <li :class="current === '/maintenance' ? 'active' : ''"><NuxtLink to="/maintenance" class="sub-menu-item"> Maintenance</NuxtLink></li>
                                    <li :class="current === '/error' ? 'active' : ''"><NuxtLink to="/error" class="sub-menu-item"> 404! Error</NuxtLink></li>
                                </ul> 
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu parent-parent-menu-item" :class="['/portfolio-masonry-two','/portfolio-masonry-three','/portfolio-masonry-four','/portfolio-masonry-five','/portfolio-masonry-six','/portfolio-creative-two','/portfolio-creative-three','/portfolio-creative-four','/portfolio-creative-five','/portfolio-creative-six','/portfolio-classic-two','/portfolio-classic-three','/portfolio-classic-four','/portfolio-classic-five','/portfolio-classic-six','/portfolio-modern-two','/portfolio-modern-three','/portfolio-modern-four','/portfolio-modern-five','/portfolio-modern-six','/portfolio-detail','/portfolio-detail-two'].includes(current) ? 'active' : ''">
                        <NuxtLink to="#" @click="submenu = submenu === '/portfolio-item' ? '' : '/portfolio-item'">Portfolio</NuxtLink><span class="menu-arrow"></span>
                        <ul class="submenu" :class="['/portfolio-item','/modern-item','/classic-item','/creative-item','/masonry-item'].includes(submenu) ? 'open' : ''">
                            <li class="has-submenu child-menu-item" :class="['/portfolio-modern-two','/portfolio-modern-three','/portfolio-modern-four','/portfolio-modern-five','/portfolio-modern-six'].includes(current) ? 'active' : ''"><NuxtLink to="#" @click="submenu = submenu === '/modern-item' ? '' : '/modern-item'"> Modern</NuxtLink><span class="submenu-arrow"></span>
                                <ul class="submenu" :class="['/modern-item'].includes(submenu) ? 'open' : ''">
                                    <li :class="current === '/portfolio-modern-two' ? 'active' : ''"><NuxtLink to="/portfolio-modern-two" class="sub-menu-item">Two Column</NuxtLink></li>
                                    <li :class="current === '/portfolio-modern-three' ? 'active' : ''"><NuxtLink to="/portfolio-modern-three" class="sub-menu-item">Three Column</NuxtLink></li>
                                    <li :class="current === '/portfolio-modern-four' ? 'active' : ''"><NuxtLink to="/portfolio-modern-four" class="sub-menu-item">Four Column</NuxtLink></li>
                                    <li :class="current === '/portfolio-modern-five' ? 'active' : ''"><NuxtLink to="/portfolio-modern-five" class="sub-menu-item">Five Column</NuxtLink></li>
                                    <li :class="current === '/portfolio-modern-six' ? 'active' : ''"><NuxtLink to="/portfolio-modern-six" class="sub-menu-item">Six Column</NuxtLink></li>
                                </ul>  
                            </li>
                    
                            <li class="has-submenu child-menu-item" :class="['/portfolio-classic-two','/portfolio-classic-three','/portfolio-classic-four','/portfolio-classic-five','/portfolio-classic-six'].includes(current) ? 'active' : ''"><NuxtLink to="#" @click="submenu = submenu === '/classic-item' ? '' : '/classic-item'"> Classic</NuxtLink><span class="submenu-arrow"></span>
                                <ul class="submenu" :class="['/classic-item'].includes(submenu) ? 'open' : ''">
                                    <li :class="current === '/portfolio-classic-two' ? 'active' : ''"><NuxtLink to="/portfolio-classic-two" class="sub-menu-item">Two Column</NuxtLink></li>
                                    <li :class="current === '/portfolio-classic-three' ? 'active' : ''"><NuxtLink to="/portfolio-classic-three" class="sub-menu-item">Three Column</NuxtLink></li>
                                    <li :class="current === '/portfolio-classic-four' ? 'active' : ''"><NuxtLink to="/portfolio-classic-four" class="sub-menu-item">Four Column</NuxtLink></li>
                                    <li :class="current === '/portfolio-classic-five' ? 'active' : ''"><NuxtLink to="/portfolio-classic-five" class="sub-menu-item">Five Column</NuxtLink></li>
                                    <li :class="current === '/portfolio-classic-six' ? 'active' : ''"><NuxtLink to="/portfolio-classic-six" class="sub-menu-item">Six Column</NuxtLink></li>
                                </ul>  
                            </li>
                    
                            <li class="has-submenu child-menu-item" :class="['/portfolio-creative-two','/portfolio-creative-three','/portfolio-creative-four','/portfolio-creative-five','/portfolio-creative-six'].includes(current) ? 'active' : ''"><NuxtLink to="#" @click="submenu = submenu === '/creative-item' ? '' : '/creative-item'"> Creative</NuxtLink><span class="submenu-arrow"></span>
                                <ul class="submenu" :class="['/creative-item'].includes(submenu) ? 'open' : ''">
                                    <li :class="current === '/portfolio-creative-two' ? 'active' : ''"><NuxtLink to="/portfolio-creative-two" class="sub-menu-item">Two Column</NuxtLink></li>
                                    <li :class="current === '/portfolio-creative-three' ? 'active' : ''"><NuxtLink to="/portfolio-creative-three" class="sub-menu-item">Three Column</NuxtLink></li>
                                    <li :class="current === '/portfolio-creative-four' ? 'active' : ''"><NuxtLink to="/portfolio-creative-four" class="sub-menu-item">Four Column</NuxtLink></li>
                                    <li :class="current === '/portfolio-creative-five' ? 'active' : ''"><NuxtLink to="/portfolio-creative-five" class="sub-menu-item">Five Column</NuxtLink></li>
                                    <li :class="current === '/portfolio-creative-six' ? 'active' : ''"><NuxtLink to="/portfolio-creative-six" class="sub-menu-item">Six Column</NuxtLink></li>
                                </ul>  
                            </li>
                    
                            <li class="has-submenu child-menu-item" :class="['/portfolio-masonry-two','/portfolio-masonry-three','/portfolio-masonry-four','/portfolio-masonry-five','/portfolio-masonry-six'].includes(current) ? 'active' : ''"><NuxtLink to="#" @click="submenu = submenu === '/masonry-item' ? '' : '/masonry-item'"> Masonry</NuxtLink><span class="submenu-arrow"></span>
                                <ul class="submenu" :class="['/masonry-item'].includes(submenu) ? 'open' : ''">
                                    <li :class="current === '/portfolio-masonry-two' ? 'active' : ''"><NuxtLink to="/portfolio-masonry-two" class="sub-menu-item">Two Column</NuxtLink></li>
                                    <li :class="current === '/portfolio-masonry-three' ? 'active' : ''"><NuxtLink to="/portfolio-masonry-three" class="sub-menu-item">Three Column</NuxtLink></li>
                                    <li :class="current === '/portfolio-masonry-four' ? 'active' : ''"><NuxtLink to="/portfolio-masonry-four" class="sub-menu-item">Four Column</NuxtLink></li>
                                    <li :class="current === '/portfolio-masonry-five' ? 'active' : ''"><NuxtLink to="/portfolio-masonry-five" class="sub-menu-item">Five Column</NuxtLink></li>
                                    <li :class="current === '/portfolio-masonry-six' ? 'active' : ''"><NuxtLink to="/portfolio-masonry-six" class="sub-menu-item">Six Column</NuxtLink></li>
                                </ul>  
                            </li>
                    
                            <li :class="current === '/portfolio-detail' ? 'active' : ''"><NuxtLink to="/portfolio-detail" class="sub-menu-item">Portfolio Detail</NuxtLink></li>
                            <li :class="current === '/portfolio-detail-two' ? 'active' : ''"><NuxtLink to="/portfolio-detail-two" class="sub-menu-item">Portfolio Detail Two</NuxtLink></li>
                        </ul>
                    </li>

                    <li class="has-submenu parent-parent-menu-item">
                        <NuxtLink to="#" @click="submenu = submenu === '/blog-item' ? '' : '/blog-item'">Blogs</NuxtLink><span class="menu-arrow"></span>
                        <ul class="submenu" :class="['/blog-item','/blog-post-item'].includes(submenu) ? 'open' : ''">
                            <li :class="current === '/blogs' ? 'active' : ''"><NuxtLink to="/blogs" class="sub-menu-item"> Blogs</NuxtLink></li>
                            <li :class="current === '/blog-sidebar' ? 'active' : ''"><NuxtLink to="/blog-sidebar" class="sub-menu-item"> Blog Sidebar</NuxtLink></li>

                            <li class="has-submenu parent-menu-item" :class="['/blog-standard-post','/blog-gallery-post','/blog-slider-post','/blog-link-post','/blog-story-post','/blog-youtube-post','/blog-html-video-post','/blog-audio-post','/blog-html-audio','/blog-blockquote-post','/blog-vimeo-post','/blog-left-sidebar-post'].includes(current) ? 'active' : ''">
                                <NuxtLink to="#" @click="submenu = submenu === '/blog-post-item' ? '' : '/blog-post-item'">Blog Posts</NuxtLink><span class="submenu-arrow"></span>
                                <ul class="submenu" :class="['/blog-post-item'].includes(submenu) ? 'open' : ''">
                                    <li :class="current === '/blog-standard-post' ? 'active' : ''"><NuxtLink to="/blog-standard-post" class="sub-menu-item">Standard Post </NuxtLink></li>
                                    <li :class="current === '/blog-gallery-post' ? 'active' : ''"><NuxtLink to="/blog-gallery-post" class="sub-menu-item">Gallery Post </NuxtLink></li>
                                    <li :class="current === '/blog-slider-post' ? 'active' : ''"><NuxtLink to="/blog-slider-post" class="sub-menu-item">Slider Post </NuxtLink></li>
                                    <li :class="current === '/blog-link-post' ? 'active' : ''"><NuxtLink to="/blog-link-post" class="sub-menu-item">Link Post </NuxtLink></li>
                                    <li :class="current === '/blog-story-post' ? 'active' : ''"><NuxtLink to="/blog-story-post" class="sub-menu-item">Story Post </NuxtLink></li>
                                    <li :class="current === '/blog-youtube-post' ? 'active' : ''"><NuxtLink to="/blog-youtube-post" class="sub-menu-item">Youtube Post </NuxtLink></li>
                                    <li :class="current === '/blog-html-video-post' ? 'active' : ''"><NuxtLink to="/blog-html-video-post" class="sub-menu-item">Html Video Post </NuxtLink></li>
                                    <li :class="current === '/blog-audio-post' ? 'active' : ''"><NuxtLink to="/blog-audio-post" class="sub-menu-item">Audio Post </NuxtLink></li>
                                    <li :class="current === '/blog-html-audio' ? 'active' : ''"><NuxtLink to="/blog-html-audio" class="sub-menu-item">Html Audio Post </NuxtLink></li>
                                    <li :class="current === '/blog-blockquote-post' ? 'active' : ''"><NuxtLink to="/blog-blockquote-post" class="sub-menu-item">Blockquote Post </NuxtLink></li>
                                    <li :class="current === '/blog-vimeo-post' ? 'active' : ''"><NuxtLink to="/blog-vimeo-post" class="sub-menu-item">Vimeo Post </NuxtLink></li>
                                    <li :class="current === '/blog-left-sidebar-post' ? 'active' : ''"><NuxtLink to="/blog-left-sidebar-post" class="sub-menu-item">Left Sidebar Post </NuxtLink></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
            
                    <li :class="current === '/contactus' ? 'active' : ''"><NuxtLink to="/contactus" class="sub-menu-item">Contact Us</NuxtLink></li>
                </ul>
            </div>
        </div>
         <div class="offcanvas offcanvas-end shadow border-0" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header p-4 border-bottom">
                <h5 id="offcanvasRightLabel" class="mb-0">
                    <img :src="logoDark" class="light-version" alt="">
                    <img :src="logoLight" class="dark-version" alt="">
                </h5>
                <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i class="mdi mdi-close fs-4"></i></button>
            </div>
            <div class="offcanvas-body p-4">
                <div class="row">
                    <div class="col-12">
                        <img :src="contact" class="img-fluid" alt="">
                        <form>
                            <div class="my-3 text-center">
                                <h6 class="text-uppercase mb-0 fw-semibold">Sign In</h6>
                            </div>
                        
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Your Email</label>
                                <input name="email" id="email" type="email" class="form-control" placeholder="example@website.com">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold" for="loginpass">Password</label>
                                <input type="password" class="form-control" id="loginpass" placeholder="Password">
                            </div>
                        
                            <div class="d-flex justify-content-between">
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-label form-check-label text-muted" for="flexCheckDefault">Remember me</label>
                                    </div>
                                </div>
                                <span class="forgot-pass text-muted small mb-0"><NuxtLink to="/reset-password" class="text-muted">Forgot password ?</NuxtLink></span>
                            </div>
            
                            <button class="btn btn-primary w-100" type="submit">Sign in</button>

                            <div class="col-12 text-center mt-3">
                                <span><span class="text-muted me-2 small">Don't have an account ?</span> <NuxtLink to="/signup" class="text-dark fw-semibold small">Sign Up</NuxtLink></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="offcanvas-footer p-4 border-top text-center">
                <ul class="list-unstyled social-icon mb-0">
                    <li class="list-inline-item me-1"><a href="https://dribbble.com/shreethemes" target="_blank" class="rounded"><i data-feather="dribbble" class="fea icon-sm align-middle" title="dribbble"></i></a></li>
                    <li class="list-inline-item me-1"><a href="http://linkedin.com/company/shreethemes" target="_blank" class="rounded"><i data-feather="linkedin" class="fea icon-sm align-middle" title="Linkedin"></i></a></li>
                    <li class="list-inline-item me-1"><a href="https://www.facebook.com/shreethemes" target="_blank" class="rounded"><i data-feather="facebook" class="fea icon-sm align-middle" title="facebook"></i></a></li>
                    <li class="list-inline-item me-1"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="rounded"><i data-feather="instagram" class="fea icon-sm align-middle" title="instagram"></i></a></li>
                    <li class="list-inline-item me-1"><a href="https://twitter.com/shreethemes" target="_blank" class="rounded"><i data-feather="twitter" class="fea icon-sm align-middle" title="twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </header>
</template>

<script setup>
    import { onMounted, onUnmounted, ref } from 'vue';

    import { useRoute } from 'vue-router';

    import feather from 'feather-icons';
    
    import logoDark from '@/assets/images/logo-dark.png'
    import logoWhite from '@/assets/images/logo-white.png'
    import logoLight from '@/assets/images/logo-light.png'
    import contact from '@/assets/images/contact.png'
    
    onMounted(()=>{
        feather.replace();
        window.scrollTo(0,0)
        window.addEventListener('scroll', handleScroll);
    })

    onUnmounted(() => {
        window.removeEventListener('scroll', handleScroll);
    });

    let route = useRoute();
    let current = ref(route.path)
    let toggle = ref(false);
    let submenu = ref('');

    const handleScroll = () => {
        const navbar = document.getElementById("topnav");
        if (window.scrollY >= 50) {
            navbar.classList.add("nav-sticky");
        } else {
            navbar.classList.remove("nav-sticky");
    }
}

</script>

