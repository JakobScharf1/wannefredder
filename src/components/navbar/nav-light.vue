<template>
    <header id="topnav" class="defaultscroll sticky">
        <div class="container">
            <router-link class="logo" to="/">
                <span class="logo-light-mode">
                    <img :src="logoDark" class="l-dark" alt=""/>
                    <img :src="logoWhite" class="l-light" alt=""/>
                </span>
                <img :src="logoWhite" class="logo-dark-mode" alt=""/>
            </router-link>

            <div class="menu-extras">
                <div class="menu-item">
                    <router-link to="#" class="navbar-toggle" :class="toggle ? 'open' : ''" id="isToggle" @click="toggle = !toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </router-link>
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
                    <router-link to="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <div class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="settings" class="fea icon-sm"></i></div>
                    </router-link>
                </li>

                <li class="list-inline-item ps-1 mb-0">
                    <router-link to="#" class="btn btn-sm btn-primary">Join Now</router-link>
                </li>
            </ul>
    
            <div id="navigation" :style="{display : toggle ? 'block' : 'none'}">
                <ul class="navigation-menu nav-right nav-light">
                    <li class="has-submenu parent-menu-item" :class="['/','/index-saas','/index-consulting','/index-cryptocurrency','/index-digital-marketing','/index-finance','/index-it-solution','/index-hospital','/index-nft','/index-minimal-portfolio','/index-web-hosting','/index-yoga','/index-charity'].includes(current) ? 'active' : ''">
                        <router-link to="#" @click="submenu = submenu === '/index-item' ? '' : '/index-item'">Home</router-link><span class="menu-arrow"></span>
                        <ul class="submenu" :class="['/index-item'].includes(submenu) ? 'open' : ''">
                            <li :class="current === '/' ? 'active' : ''"><router-link to="/" class="sub-menu-item">Business</router-link></li>
                            <li :class="current === '/index-saas' ? 'active' : ''"><router-link to="/index-saas" class="sub-menu-item">Saas</router-link></li>
                            <li :class="current === '/index-consulting' ? 'active' : ''"><router-link to="/index-consulting" class="sub-menu-item">Consulting</router-link></li>
                            <li :class="current === '/index-cryptocurrency' ? 'active' : ''"><router-link to="/index-cryptocurrency" class="sub-menu-item">Cryptocurrency</router-link></li>
                            <li :class="current === '/index-digital-marketing' ? 'active' : ''"><router-link to="/index-digital-marketing" class="sub-menu-item">Digital Marketing</router-link></li>
                            <li :class="current === '/index-finance' ? 'active' : ''"><router-link to="/index-finance" class="sub-menu-item">Finance</router-link></li>
                            <li :class="current === '/index-it-solution' ? 'active' : ''"><router-link to="/index-it-solution" class="sub-menu-item">IT Solutions</router-link></li>
                            <li :class="current === '/index-hospital' ? 'active' : ''"><router-link to="/index-hospital" class="sub-menu-item">Hospital / Medical</router-link></li>
                            <li :class="current === '/index-nft' ? 'active' : ''"><router-link to="/index-nft" class="sub-menu-item">NFT Marketplace</router-link></li>
                            <li :class="current === '/index-minimal-portfolio' ? 'active' : ''"><router-link to="/index-minimal-portfolio" class="sub-menu-item">Minimal Portfolio</router-link></li>
                            <li :class="current === '/index-web-hosting' ? 'active' : ''"><router-link to="/index-web-hosting" class="sub-menu-item">Web Hosting</router-link></li>
                            <li :class="current === '/index-yoga' ? 'active' : ''"><router-link to="/index-yoga" class="sub-menu-item">Yoga</router-link></li>
                            <li :class="current === '/index-charity' ? 'active' : ''"><router-link to="/index-charity" class="sub-menu-item">Charity</router-link></li>
                        </ul>
                    </li>
            
                    <li :class="current === '/aboutus' ? 'active' : ''"><router-link to="/aboutus" class="sub-menu-item">About Us</router-link></li>

                    <li class="has-submenu parent-parent-menu-item" :class="['/services','/service-detail','/pricing','/team','/testimonial','/faqs','/nft-explore','/nft-detail','/collection','/wallet','/upload-item','/creators','/creator-profile','/profile-setting','/login','/signup','/reset-password','/lock-screen','/terms','/privacy','/comingsoon','/maintenance','/error'].includes(current)? 'active' : ''">
                        <router-link to="#" @click="submenu = submenu === '/page-item' ? '' : '/page-item'">Pages</router-link><span class="menu-arrow"></span>
                        <ul class="submenu" :class="['/page-item','/nft-item','/creator-item','/auth-item','/utility-item','/special-item'].includes(submenu) ? 'open' : ''">
                            <li :class="current === '/services' ? 'active' : ''"><router-link to="/services" class="sub-menu-item">Services</router-link></li>
                            <li :class="current === '/service-detail' ? 'active' : ''"><router-link to="/service-detail" class="sub-menu-item">Service Detail</router-link></li>
                            <li :class="current === '/pricing' ? 'active' : ''"><router-link to="/pricing" class="sub-menu-item">Pricing</router-link></li>
                            <li :class="current === '/team' ? 'active' : ''"><router-link to="/team" class="sub-menu-item">Team</router-link></li>
                            <li :class="current === '/testimonial' ? 'active' : ''"><router-link to="/testimonial" class="sub-menu-item">Testimonial</router-link></li>

                            <li :class="current === '/faqs' ? 'active' : ''"><router-link to="/faqs" class="sub-menu-item">FAQs</router-link></li>

                            <li class="has-submenu parent-menu-item" :class="['/nft-explore','/nft-detail','/collection','/wallet','/upload-item','/creators','/creator-profile','/profile-setting'].includes(current) ? 'active' : ''">
                                <router-link to="#" @click="submenu = submenu === '/nft-item' ? '' : '/nft-item'">NFT</router-link><span class="submenu-arrow"></span>
                                <ul class="submenu" :class="['/nft-item','/creator-item'].includes(submenu) ? 'open' : ''">
                                    <li :class="current === '/nft-explore' ? 'active' : ''"><router-link to="/nft-explore" class="sub-menu-item">NFT Explore</router-link></li>
                                    <li :class="current === '/nft-detail' ? 'active' : ''"><router-link to="/nft-detail" class="sub-menu-item">NFT Detail</router-link></li>
                                    <li :class="current === '/collection' ? 'active' : ''"><router-link to="/collection" class="sub-menu-item">Collection</router-link></li>
                                    <li :class="current === '/wallet' ? 'active' : ''"><router-link to="/wallet" class="sub-menu-item">Wallet</router-link></li>
                                    <li :class="current === '/upload-item' ? 'active' : ''"><router-link to="/upload-item" class="sub-menu-item">Upload Item</router-link></li>
                                    <li class="has-submenu child-menu-item" :class="['/creators','/creator-profile','/profile-setting'].includes(current) ? 'active' : ''">
                                        <router-link to="#" @click="submenu = submenu === '/creator-item' ? '' : '/creator-item'"> Creators </router-link><span class="submenu-arrow"></span>
                                        <ul class="submenu" :class="['/creator-item'].includes(submenu) ? 'open' : ''">
                                            <li :class="current === '/creators' ? 'active' : ''"><router-link to="/creators" class="sub-menu-item">Creators</router-link></li>
                                            <li :class="current === '/creator-profile' ? 'active' : ''"><router-link to="/creator-profile" class="sub-menu-item">Creator Profile</router-link></li>
                                            <li :class="current === '/profile-setting' ? 'active' : ''"><router-link to="/profile-setting" class="sub-menu-item">Profile Setting</router-link></li>
                                        </ul>  
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu parent-menu-item" :class="['/login','/signup','/reset-password','/lock-screen'].includes(current) ? 'active' : ''"><router-link to="#" @click="submenu = submenu === '/auth-item' ? '' : '/auth-item'"> Auth Pages </router-link><span class="submenu-arrow"></span>
                                <ul class="submenu" :class="['/auth-item'].includes(submenu) ? 'open' : ''">
                                    <li :class="current === '/login' ? 'active' : ''"><router-link to="/login" class="sub-menu-item"> Login</router-link></li>
                                    <li :class="current === '/signup' ? 'active' : ''"><router-link to="/signup" class="sub-menu-item"> Signup</router-link></li>
                                    <li :class="current === '/reset-password' ? 'active' : ''"><router-link to="/reset-password" class="sub-menu-item"> Forgot Password</router-link></li>
                                    <li :class="current === '/lock-screen' ? 'active' : ''"><router-link to="/lock-screen" class="sub-menu-item"> Lock Screen</router-link></li>
                                </ul> 
                            </li>

                            <li class="has-submenu parent-menu-item" :class="['/terms','/privacy'].includes(current)? 'active' : ''"><router-link to="#" @click="submenu = submenu === '/utility-item' ? '' : '/utility-item'"> Utility </router-link><span class="submenu-arrow"></span>
                                <ul class="submenu" :class="['/utility-item'].includes(submenu) ? 'open' : ''">
                                    <li :class="current === '/terms' ? 'active' : ''"><router-link to="/terms" class="sub-menu-item">Terms of Services</router-link></li>
                                    <li :class="current === '/privacy' ? 'active' : ''"><router-link to="/privacy" class="sub-menu-item">Privacy Policy</router-link></li>
                                </ul>  
                            </li>

                            <li class="has-submenu parent-menu-item" :class="['/comingsoon','/maintenance','/error'].includes(current)? 'active' : ''"><router-link to="#" @click="submenu = submenu === '/special-item' ? '' : '/special-item'"> Special </router-link><span class="submenu-arrow"></span>
                                <ul class="submenu" :class="['/special-item'].includes(submenu) ? 'open' : ''">
                                    <li :class="current === '/comingsoon' ? 'active' : ''"><router-link to="/comingsoon" class="sub-menu-item"> Coming Soon</router-link></li>
                                    <li :class="current === '/maintenance' ? 'active' : ''"><router-link to="/maintenance" class="sub-menu-item"> Maintenance</router-link></li>
                                    <li :class="current === '/error' ? 'active' : ''"><router-link to="/error" class="sub-menu-item"> 404! Error</router-link></li>
                                </ul> 
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu parent-parent-menu-item" :class="['/portfolio-masonry-two','/portfolio-masonry-three','/portfolio-masonry-four','/portfolio-masonry-five','/portfolio-masonry-six','/portfolio-creative-two','/portfolio-creative-three','/portfolio-creative-four','/portfolio-creative-five','/portfolio-creative-six','/portfolio-classic-two','/portfolio-classic-three','/portfolio-classic-four','/portfolio-classic-five','/portfolio-classic-six','/portfolio-modern-two','/portfolio-modern-three','/portfolio-modern-four','/portfolio-modern-five','/portfolio-modern-six','/portfolio-detail','/portfolio-detail-two'].includes(current) ? 'active' : ''">
                        <router-link to="#" @click="submenu = submenu === '/portfolio-item' ? '' : '/portfolio-item'">Portfolio</router-link><span class="menu-arrow"></span>
                        <ul class="submenu" :class="['/portfolio-item','/modern-item','/classic-item','/creative-item','/masonry-item'].includes(submenu) ? 'open' : ''">
                            <li class="has-submenu child-menu-item" :class="['/portfolio-modern-two','/portfolio-modern-three','/portfolio-modern-four','/portfolio-modern-five','/portfolio-modern-six'].includes(current) ? 'active' : ''"><router-link to="#" @click="submenu = submenu === '/modern-item' ? '' : '/modern-item'"> Modern</router-link><span class="submenu-arrow"></span>
                                <ul class="submenu" :class="['/modern-item'].includes(submenu) ? 'open' : ''">
                                    <li :class="current === '/portfolio-modern-two' ? 'active' : ''"><router-link to="/portfolio-modern-two" class="sub-menu-item">Two Column</router-link></li>
                                    <li :class="current === '/portfolio-modern-three' ? 'active' : ''"><router-link to="/portfolio-modern-three" class="sub-menu-item">Three Column</router-link></li>
                                    <li :class="current === '/portfolio-modern-four' ? 'active' : ''"><router-link to="/portfolio-modern-four" class="sub-menu-item">Four Column</router-link></li>
                                    <li :class="current === '/portfolio-modern-five' ? 'active' : ''"><router-link to="/portfolio-modern-five" class="sub-menu-item">Five Column</router-link></li>
                                    <li :class="current === '/portfolio-modern-six' ? 'active' : ''"><router-link to="/portfolio-modern-six" class="sub-menu-item">Six Column</router-link></li>
                                </ul>  
                            </li>
                    
                            <li class="has-submenu child-menu-item" :class="['/portfolio-classic-two','/portfolio-classic-three','/portfolio-classic-four','/portfolio-classic-five','/portfolio-classic-six'].includes(current) ? 'active' : ''"><router-link to="#" @click="submenu = submenu === '/classic-item' ? '' : '/classic-item'"> Classic</router-link><span class="submenu-arrow"></span>
                                <ul class="submenu" :class="['/classic-item'].includes(submenu) ? 'open' : ''">
                                    <li :class="current === '/portfolio-classic-two' ? 'active' : ''"><router-link to="/portfolio-classic-two" class="sub-menu-item">Two Column</router-link></li>
                                    <li :class="current === '/portfolio-classic-three' ? 'active' : ''"><router-link to="/portfolio-classic-three" class="sub-menu-item">Three Column</router-link></li>
                                    <li :class="current === '/portfolio-classic-four' ? 'active' : ''"><router-link to="/portfolio-classic-four" class="sub-menu-item">Four Column</router-link></li>
                                    <li :class="current === '/portfolio-classic-five' ? 'active' : ''"><router-link to="/portfolio-classic-five" class="sub-menu-item">Five Column</router-link></li>
                                    <li :class="current === '/portfolio-classic-six' ? 'active' : ''"><router-link to="/portfolio-classic-six" class="sub-menu-item">Six Column</router-link></li>
                                </ul>  
                            </li>
                    
                            <li class="has-submenu child-menu-item" :class="['/portfolio-creative-two','/portfolio-creative-three','/portfolio-creative-four','/portfolio-creative-five','/portfolio-creative-six'].includes(current) ? 'active' : ''"><router-link to="#" @click="submenu = submenu === '/creative-item' ? '' : '/creative-item'"> Creative</router-link><span class="submenu-arrow"></span>
                                <ul class="submenu" :class="['/creative-item'].includes(submenu) ? 'open' : ''">
                                    <li :class="current === '/portfolio-creative-two' ? 'active' : ''"><router-link to="/portfolio-creative-two" class="sub-menu-item">Two Column</router-link></li>
                                    <li :class="current === '/portfolio-creative-three' ? 'active' : ''"><router-link to="/portfolio-creative-three" class="sub-menu-item">Three Column</router-link></li>
                                    <li :class="current === '/portfolio-creative-four' ? 'active' : ''"><router-link to="/portfolio-creative-four" class="sub-menu-item">Four Column</router-link></li>
                                    <li :class="current === '/portfolio-creative-five' ? 'active' : ''"><router-link to="/portfolio-creative-five" class="sub-menu-item">Five Column</router-link></li>
                                    <li :class="current === '/portfolio-creative-six' ? 'active' : ''"><router-link to="/portfolio-creative-six" class="sub-menu-item">Six Column</router-link></li>
                                </ul>  
                            </li>
                    
                            <li class="has-submenu child-menu-item" :class="['/portfolio-masonry-two','/portfolio-masonry-three','/portfolio-masonry-four','/portfolio-masonry-five','/portfolio-masonry-six'].includes(current) ? 'active' : ''"><router-link to="#" @click="submenu = submenu === '/masonry-item' ? '' : '/masonry-item'"> Masonry</router-link><span class="submenu-arrow"></span>
                                <ul class="submenu" :class="['/masonry-item'].includes(submenu) ? 'open' : ''">
                                    <li :class="current === '/portfolio-masonry-two' ? 'active' : ''"><router-link to="/portfolio-masonry-two" class="sub-menu-item">Two Column</router-link></li>
                                    <li :class="current === '/portfolio-masonry-three' ? 'active' : ''"><router-link to="/portfolio-masonry-three" class="sub-menu-item">Three Column</router-link></li>
                                    <li :class="current === '/portfolio-masonry-four' ? 'active' : ''"><router-link to="/portfolio-masonry-four" class="sub-menu-item">Four Column</router-link></li>
                                    <li :class="current === '/portfolio-masonry-five' ? 'active' : ''"><router-link to="/portfolio-masonry-five" class="sub-menu-item">Five Column</router-link></li>
                                    <li :class="current === '/portfolio-masonry-six' ? 'active' : ''"><router-link to="/portfolio-masonry-six" class="sub-menu-item">Six Column</router-link></li>
                                </ul>  
                            </li>
                    
                            <li :class="current === '/portfolio-detail' ? 'active' : ''"><router-link to="/portfolio-detail" class="sub-menu-item">Portfolio Detail</router-link></li>
                            <li :class="current === '/portfolio-detail-two' ? 'active' : ''"><router-link to="/portfolio-detail-two" class="sub-menu-item">Portfolio Detail Two</router-link></li>
                        </ul>
                    </li>

                    <li class="has-submenu parent-parent-menu-item" :class="['/blogs','/blog-sidebar','/blog-standard-post','/blog-gallery-post','/blog-slider-post','/blog-link-post','/blog-story-post','/blog-youtube-post','/blog-html-video-post','/blog-audio-post','/blog-html-audio','/blog-blockquote-post','/blog-vimeo-post','/blog-left-sidebar-post'].includes(current) ? 'active' : ''">
                        <router-link to="#" @click="submenu = submenu === '/blog-item' ? '' : '/blog-item'">Blogs</router-link><span class="menu-arrow"></span>
                        <ul class="submenu" :class="['/blog-item','/blog-post-item'].includes(submenu) ? 'open' : ''">
                            <li :class="current === '/blogs' ? 'active' : ''"><router-link to="/blogs" class="sub-menu-item"> Blogs</router-link></li>
                            <li :class="current === '/blog-sidebar' ? 'active' : ''"><router-link to="/blog-sidebar" class="sub-menu-item"> Blog Sidebar</router-link></li>

                            <li class="has-submenu parent-menu-item" :class="['/blog-standard-post','/blog-gallery-post','/blog-slider-post','/blog-link-post','/blog-story-post','/blog-youtube-post','/blog-html-video-post','/blog-audio-post','/blog-html-audio','/blog-blockquote-post','/blog-vimeo-post','/blog-left-sidebar-post'].includes(current) ? 'active' : ''">
                                <router-link to="#" @click="submenu = submenu === '/blog-post-item' ? '' : '/blog-post-item'">Blog Posts</router-link><span class="submenu-arrow"></span>
                                <ul class="submenu" :class="['/blog-post-item'].includes(submenu) ? 'open' : ''">
                                    <li :class="current === '/blog-standard-post' ? 'active' : ''"><router-link to="/blog-standard-post" class="sub-menu-item">Standard Post </router-link></li>
                                    <li :class="current === '/blog-gallery-post' ? 'active' : ''"><router-link to="/blog-gallery-post" class="sub-menu-item">Gallery Post </router-link></li>
                                    <li :class="current === '/blog-slider-post' ? 'active' : ''"><router-link to="/blog-slider-post" class="sub-menu-item">Slider Post </router-link></li>
                                    <li :class="current === '/blog-link-post' ? 'active' : ''"><router-link to="/blog-link-post" class="sub-menu-item">Link Post </router-link></li>
                                    <li :class="current === '/blog-story-post' ? 'active' : ''"><router-link to="/blog-story-post" class="sub-menu-item">Story Post </router-link></li>
                                    <li :class="current === '/blog-youtube-post' ? 'active' : ''"><router-link to="/blog-youtube-post" class="sub-menu-item">Youtube Post </router-link></li>
                                    <li :class="current === '/blog-html-video-post' ? 'active' : ''"><router-link to="/blog-html-video-post" class="sub-menu-item">Html Video Post </router-link></li>
                                    <li :class="current === '/blog-audio-post' ? 'active' : ''"><router-link to="/blog-audio-post" class="sub-menu-item">Audio Post </router-link></li>
                                    <li :class="current === '/blog-html-audio' ? 'active' : ''"><router-link to="/blog-html-audio" class="sub-menu-item">Html Audio Post </router-link></li>
                                    <li :class="current === '/blog-blockquote-post' ? 'active' : ''"><router-link to="/blog-blockquote-post" class="sub-menu-item">Blockquote Post </router-link></li>
                                    <li :class="current === '/blog-vimeo-post' ? 'active' : ''"><router-link to="/blog-vimeo-post" class="sub-menu-item">Vimeo Post </router-link></li>
                                    <li :class="current === '/blog-left-sidebar-post' ? 'active' : ''"><router-link to="/blog-left-sidebar-post" class="sub-menu-item">Left Sidebar Post </router-link></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
            
                    <li :class="current === '/contactus' ? 'active' : ''"><router-link to="/contactus" class="sub-menu-item">Contact Us</router-link></li>
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
                                <span class="forgot-pass text-muted small mb-0"><router-link to="/reset-password" class="text-muted">Forgot password ?</router-link></span>
                            </div>
            
                            <button class="btn btn-primary w-100" type="submit">Sign in</button>

                            <div class="col-12 text-center mt-3">
                                <span><span class="text-muted me-2 small">Don't have an account ?</span> <router-link to="/signup" class="text-dark fw-semibold small">Sign Up</router-link></span>
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

