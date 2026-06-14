<script>
    import { Link } from "svelte-routing";
    import { onMount, onDestroy } from 'svelte';
    import * as feather from 'feather-icons'
    import logoDark from '../../assets/images/logo-dark.png'
    import logowhite from '../../assets/images/logo-white.png'
    import logoLight from '../../assets/images/logo-light.png'
    import contact from '../../assets/images/contact.png'
    import user from '../../assets/images/team/1.jpg'

    let current
    let openMenu
    let toggle = false
    let scroll = false

    const submenu = (item) => {
        openMenu = item
    }

        const handleScroll = () => {
        scroll = window.scrollY > 50;
    };


    onMount(() => {
        current = window.location.pathname;
        window.scrollTo({ top: 0, behavior: "smooth" })
        window.addEventListener('scroll', handleScroll);
        feather.replace()
    });

    onDestroy(() => {
        window.removeEventListener('scroll', handleScroll);
    });


    const toggleMenu = () =>{
        toggle = !toggle
    }
</script>

<header id="topnav" class={`defaultscroll sticky ${scroll ? 'nav-sticky' : ''}`}>
    <div class="container">
        <Link class="logo" to="/">
            <span class="logo-light-mode">
                <img src={logoDark} class="l-dark" alt="">
                <img src={logowhite} class="l-light" alt="">
            </span>
            <img src={logowhite} class="logo-dark-mode" alt="">
        </Link>

        <div class="menu-extras">
            <div class="menu-item">
                <!-- svelte-ignore a11y_no_static_element_interactions -->
                <!-- svelte-ignore a11y_click_events_have_key_events -->
                <a class={`navbar-toggle ${toggle ? 'open' : ''}`} id="isToggle" aria-label="link" on:click={toggleMenu}>
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>

        <ul class="buy-button list-inline mb-0">
            <li class="list-inline-item mb-0">
                <div class="dropdown">
                    <button type="button" class="dropdown-toggle btn btn-sm p-0 border-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="link">
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
                <a href="#!" data-bs-toggle="offcanvas" aria-label="link" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <div class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="settings" class="fea icon-sm"></i></div>
                </a>
            </li>

            <li class="list-inline-item ps-1 mb-0">
                <div class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="dollar-sign" class="fea icon-sm"></i></div>
            </li>

            <li class="list-inline-item ps-1 mb-0">
                <div class="dropdown dropdown-primary">
                    <button type="button" class="btn btn-pills dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src={user} class="rounded-pill avatar avatar-ex-small" alt=""></button>
                    <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 pb-3 pt-0 overflow-hidden rounded" style="min-width: 200px;">
                        <div class="position-relative">
                            <div class="p-3">
                                <div class="d-flex align-items-center mt-n4">
                                    <img src={user} class="rounded-pill avatar avatar-md-sm img-thumbnail shadow-md" alt="">
                                    <h6 class="text-dark fw-semibold mb-0 ms-1">Calvin Carlo</h6>
                                </div>
                                <div class="mt-3">
                                    <small class="text-start text-dark d-block fw-semibold">Wallet:</small>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small id="myPublicAddress" class="text-muted">qhutfvf0...hfteh45</small>
                                        <a href="#!" class="text-primary" aria-label="link"><span data-feather="copy" class="fea icon-sm"></span></a>
                                    </div>
                                </div>
                                
                                <div class="mt-2">
                                    <small class="text-dark fw-semibold">Balance: <span class="text-primary">0.00045ETH</span></small>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <Link class="dropdown-item small fw-semibold text-dark d-flex align-items-center" to="/creator-profile"><span class="mb-0 d-inline-block me-1"><i data-feather="user" class="fea icon-sm me-1 align-middle"></i></span> Profile</Link>
                            <Link class="dropdown-item small fw-semibold text-dark d-flex align-items-center" to="/profile-setting"><span class="mb-0 d-inline-block me-1"><i data-feather="settings" class="fea icon-sm me-1 align-middle"></i></span> Settings</Link>
                            <div class="dropdown-divider border-top"></div>
                            <Link class="dropdown-item small fw-semibold text-dark d-flex align-items-center" to="/lock-screen"><span class="mb-0 d-inline-block me-1"><i data-feather="log-out" class="fea icon-sm me-1 align-middle"></i></span> Logout</Link>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <div id="navigation" class={`${toggle ? 'd-block' : 'd-none'}`}>
            <ul class="navigation-menu nav-left nav-light">
                <li class={`has-submenu parent-menu-item ${['/','/index-saas','/index-consulting','/index-cryptocurrency','/index-digital-marketing','/index-finance','/index-it-solution','/index-hospital','/index-nft','/index-minimal-portfolio','/index-web-hosting','/index-yoga','/index-charity'].includes(current) ? 'active' : ''}`}>
                    <a href="#!" on:click={() => submenu('/index-item')}>Home</a><span class="menu-arrow"></span>
                    <ul class={`submenu ${['/index-item'].includes(openMenu) ? 'open' : ''}`}>
                        <li class={`${current === '/' ? 'active' : ''}`}><Link to="/" class="sub-menu-item">Business</Link></li>
                        <li class={`${current === '/index-saas' ? 'active' : ''}`}><Link to="/index-saas" class="sub-menu-item">Saas</Link></li>
                        <li class={`${current === '/index-consulting' ? 'active' : ''}`}><Link to="/index-consulting" class="sub-menu-item">Consulting</Link></li>
                        <li class={`${current === '/index-cryptocurrency' ? 'active' : ''}`}><Link to="/index-cryptocurrency" class="sub-menu-item">Cryptocurrency</Link></li>
                        <li class={`${current === '/index-digital-marketing' ? 'active' : ''}`}><Link to="/index-digital-marketing" class="sub-menu-item">Digital Marketing</Link></li>
                        <li class={`${current === '/index-finance' ? 'active' : ''}`}><Link to="/index-finance" class="sub-menu-item">Finance</Link></li>
                        <li class={`${current === '/index-it-solution' ? 'active' : ''}`}><Link to="/index-it-solution" class="sub-menu-item">IT Solutions</Link></li>
                        <li class={`${current === '/index-hospital' ? 'active' : ''}`}><Link to="/index-hospital" class="sub-menu-item">Hospital / Medical</Link></li>
                        <li class={`${current === '/index-nft' ? 'active' : ''}`}><Link to="/index-nft" class="sub-menu-item">NFT Marketplace</Link></li>
                        <li class={`${current === '/index-minimal-portfolio' ? 'active' : ''}`}><Link to="/index-minimal-portfolio" class="sub-menu-item">Minimal Portfolio</Link></li>
                        <li class={`${current === '/index-web-hosting' ? 'active' : ''}`}><Link to="/index-web-hosting" class="sub-menu-item">Web Hosting</Link></li>
                        <li class={`${current === '/index-yoga' ? 'active' : ''}`}><Link to="/index-yoga" class="sub-menu-item">Yoga</Link></li>
                        <li class={`${current === '/index-charity' ? 'active' : ''}`}><Link to="/index-charity" class="sub-menu-item">Charity</Link></li>
                    </ul>
                </li>
        
                <li class={`${current === '/aboutus' ? 'active' : ''}`}><Link to="/aboutus" class="sub-menu-item">About Us</Link></li>

                <li class={`has-submenu parent-parent-menu-item ${['/services','/service-detail','/pricing','/team','/testimonial','/faqs','/nft-explore','/nft-detail','/collection','/wallet','/upload-item','/creators','/creator-profile','/profile-setting','/login','/signup','/reset-password','/lock-screen','/terms','/privacy','/comingsoon','/maintenance','/error'].includes(current) ? 'active' : ''}`}>
                    <a href="#!" on:click={() => submenu('/page-item')}>Pages</a><span class="menu-arrow"></span>
                    <ul class={`submenu ${['/page-item','/nft-item','/creator-item','/auth-item','/utility-item','/special-item'].includes(openMenu) ? 'open' : ''}`}>
                        <li class={`${current === '/services' ? 'active' : ''}`}><Link to="/services" class="sub-menu-item">Services</Link></li>
                        <li class={`${current === '/service-detail' ? 'active' : ''}`}><Link to="/service-detail" class="sub-menu-item">Service Detail</Link></li>
                        <li class={`${current === '/pricing' ? 'active' : ''}`}><Link to="/pricing" class="sub-menu-item">Pricing</Link></li>
                        <li class={`${current === '/team' ? 'active' : ''}`}><Link to="/team" class="sub-menu-item">Team</Link></li>
                        <li class={`${current === '/testimonial' ? 'active' : ''}`}><Link to="/testimonial" class="sub-menu-item">Testimonial</Link></li>

                        <li class={`${current === '/faqs' ? 'active' : ''}`}><Link to="/faqs" class="sub-menu-item">FAQs</Link></li>

                        <li class={`has-submenu parent-menu-item ${['/nft-explore','/nft-detail','/collection','/wallet','/upload-item','/creators','/creator-profile','/profile-setting'].includes(current) ? 'active' : ''}`}>
                            <a href="#!" on:click={() => submenu('/nft-item')}>NFT</a><span class="submenu-arrow"></span>
                            <ul class={`submenu ${['/nft-item','/creator-item'].includes(openMenu) ? 'open' : ''}`}>
                                <li class={`${current === '/nft-explore' ? 'active' : ''}`}><Link to="/nft-explore" class="sub-menu-item">NFT Explore</Link></li>
                                <li class={`${current === '/nft-detail' ? 'active' : ''}`}><Link to="/nft-detail" class="sub-menu-item">NFT Detail</Link></li>
                                <li class={`${current === '/collection' ? 'active' : ''}`}><Link to="/collection" class="sub-menu-item">Collection</Link></li>
                                <li class={`${current === '/wallet' ? 'active' : ''}`}><Link to="/wallet" class="sub-menu-item">Wallet</Link></li>
                                <li class={`${current === '/upload-item' ? 'active' : ''}`}><Link to="/upload-item" class="sub-menu-item">Upload Item</Link></li>
                                <li class={`has-submenu child-menu-item ${['/creators','/creator-profile','/profile-setting'].includes(current) ? 'active' : ''}`}>
                                    <a href="#!" on:click={() => submenu('/creator-item')}> Creators </a><span class="submenu-arrow"></span>
                                    <ul class={`submenu ${['/creator-item'].includes(openMenu) ? 'open' : ''}`}>
                                        <li class={`${current === '/creators' ? 'active' : ''}`}><Link to="/creators" class="sub-menu-item">Creators</Link></li>
                                        <li class={`${current === '/creator-profile' ? 'active' : ''}`}><Link to="/creator-profile" class="sub-menu-item">Creator Profile</Link></li>
                                        <li class={`${current === '/profile-setting' ? 'active' : ''}`}><Link to="/profile-setting" class="sub-menu-item">Profile Setting</Link></li>
                                    </ul>  
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item"><a href="#!" on:click={() => submenu('/auth-item')}> Auth Pages </a><span class="submenu-arrow"></span>
                            <ul class={`submenu ${['/auth-item'].includes(openMenu) ? 'open' : ''}`}>
                                <li class={`${current === '/login' ? 'active' : ''}`}><Link to="/login" class="sub-menu-item"> Login</Link></li>
                                <li class={`${current === '/signup' ? 'active' : ''}`}><Link to="/signup" class="sub-menu-item"> Signup</Link></li>
                                <li class={`${current === '/reset-password' ? 'active' : ''}`}><Link to="/reset-password" class="sub-menu-item"> Forgot Password</Link></li>
                                <li class={`${current === '/lock-screen' ? 'active' : ''}`}><Link to="/lock-screen" class="sub-menu-item"> Lock Screen</Link></li>
                            </ul> 
                        </li>

                        <li class={`has-submenu parent-menu-item ${['/terms','/privacy'].includes(current) ? 'active' : ''}`}><a href="#!" on:click={() => submenu('/utility-item')}> Utility </a><span class="submenu-arrow"></span>
                            <ul class={`submenu ${['/utility-item'].includes(openMenu) ? 'open' : ''}`}>
                                <li class={`${current === '/terms' ? 'active' : ''}`}><Link to="/terms" class="sub-menu-item">Terms of Services</Link></li>
                                <li class={`${current === '/privacy' ? 'active' : ''}`}><Link to="/privacy" class="sub-menu-item">Privacy Policy</Link></li>
                            </ul>  
                        </li>

                        <li class={`has-submenu parent-menu-item `}><a href="#!" on:click={() => submenu('/special-item')}> Special </a><span class="submenu-arrow"></span>
                            <ul class={`submenu ${['/special-item'].includes(openMenu) ? 'open' : ''}`}>
                                <li class={`${current === '/comingsoon' ? 'active' : ''}`}><Link to="/comingsoon" class="sub-menu-item"> Coming Soon</Link></li>
                                <li class={`${current === '/maintenance' ? 'active' : ''}`}><Link to="/maintenance" class="sub-menu-item"> Maintenance</Link></li>
                                <li class={`${current === '/error' ? 'active' : ''}`}><Link to="/error" class="sub-menu-item"> 404! Error</Link></li>
                            </ul> 
                        </li>
                    </ul>
                </li>

                <li class={`has-submenu parent-parent-menu-item ${['/portfolio-masonry-two','/portfolio-masonry-three','/portfolio-masonry-four','/portfolio-masonry-five','/portfolio-masonry-six','/portfolio-creative-two','/portfolio-creative-three','/portfolio-creative-four','/portfolio-creative-five','/portfolio-creative-six','/portfolio-classic-two','/portfolio-classic-three','/portfolio-classic-four','/portfolio-classic-five','/portfolio-classic-six','/portfolio-modern-two','/portfolio-modern-three','/portfolio-modern-four','/portfolio-modern-five','/portfolio-modern-six','/portfolio-detail','/portfolio-detail-two'].includes(current) ? 'active' : ''}`}>
                    <a href="#!" on:click={() => submenu('/portfolio-item')}>Portfolio</a><span class="menu-arrow"></span>
                    <ul class={`submenu ${['/portfolio-item','/modern-item','/classic-item','/creative-item','/masonry-item'].includes(openMenu) ? 'open' : ''}`}>
                        <li class={`has-submenu child-menu-item ${['/portfolio-modern-two','/portfolio-modern-three','/portfolio-modern-four','/portfolio-modern-five','/portfolio-modern-six'].includes(current) ? 'active' : ''}`}><a href="#!" on:click={() => submenu('/modern-item')}> Modern</a><span class="submenu-arrow"></span>
                            <ul class={`submenu ${['/modern-item'].includes(openMenu) ? 'open' : ''}`}>
                                <li class={`${current === '/portfolio-modern-two' ? 'active' : ''}`}><Link to="/portfolio-modern-two" class="sub-menu-item">Two Column</Link></li>
                                <li class={`${current === '/portfolio-modern-three' ? 'active' : ''}`}><Link to="/portfolio-modern-three" class="sub-menu-item">Three Column</Link></li>
                                <li class={`${current === '/portfolio-modern-four' ? 'active' : ''}`}><Link to="/portfolio-modern-four" class="sub-menu-item">Four Column</Link></li>
                                <li class={`${current === '/portfolio-modern-five' ? 'active' : ''}`}><Link to="/portfolio-modern-five" class="sub-menu-item">Five Column</Link></li>
                                <li class={`${current === '/portfolio-modern-six' ? 'active' : ''}`}><Link to="/portfolio-modern-six" class="sub-menu-item">Six Column</Link></li>
                            </ul>  
                        </li>
                
                        <li class={`has-submenu child-menu-item ${['/portfolio-classic-two','/portfolio-classic-three','/portfolio-classic-four','/portfolio-classic-five','/portfolio-classic-six'].includes(current) ? 'active' : ''}`}><a href="#!" on:click={() => submenu('/classic-item')}> Classic</a><span class="submenu-arrow"></span>
                            <ul class={`submenu ${['/classic-item'].includes(openMenu) ? 'open' : ''}`}>
                                <li class={`${current === '/portfolio-classic-two' ? 'active' : ''}`}><Link to="/portfolio-classic-two" class="sub-menu-item">Two Column</Link></li>
                                <li class={`${current === '/portfolio-classic-three' ? 'active' : ''}`}><Link to="/portfolio-classic-three" class="sub-menu-item">Three Column</Link></li>
                                <li class={`${current === '/portfolio-classic-four' ? 'active' : ''}`}><Link to="/portfolio-classic-four" class="sub-menu-item">Four Column</Link></li>
                                <li class={`${current === '/portfolio-classic-five' ? 'active' : ''}`}><Link to="/portfolio-classic-five" class="sub-menu-item">Five Column</Link></li>
                                <li class={`${current === '/portfolio-classic-six' ? 'active' : ''}`}><Link to="/portfolio-classic-six" class="sub-menu-item">Six Column</Link></li>
                            </ul>  
                        </li>
                
                        <li class={`has-submenu child-menu-item ${['/portfolio-creative-two','/portfolio-creative-three','/portfolio-creative-four','/portfolio-creative-five','/portfolio-creative-six'].includes(current) ? 'active' : ''}`}><a href="#!" on:click={() => submenu('/creative-item')}> Creative</a><span class="submenu-arrow"></span>
                            <ul class={`submenu ${['/creative-item'].includes(openMenu) ? 'open' : ''}`}>
                                <li class={`${current === '/portfolio-creative-two' ? 'active' : ''}`}><Link to="/portfolio-creative-two" class="sub-menu-item">Two Column</Link></li>
                                <li class={`${current === '/portfolio-creative-three' ? 'active' : ''}`}><Link to="/portfolio-creative-three" class="sub-menu-item">Three Column</Link></li>
                                <li class={`${current === '/portfolio-creative-four' ? 'active' : ''}`}><Link to="/portfolio-creative-four" class="sub-menu-item">Four Column</Link></li>
                                <li class={`${current === '/portfolio-creative-five' ? 'active' : ''}`}><Link to="/portfolio-creative-five" class="sub-menu-item">Five Column</Link></li>
                                <li class={`${current === '/portfolio-creative-six' ? 'active' : ''}`}><Link to="/portfolio-creative-six" class="sub-menu-item">Six Column</Link></li>
                            </ul>  
                        </li>
                
                        <li class={`has-submenu child-menu-item ${['/portfolio-masonry-two','/portfolio-masonry-three','/portfolio-masonry-four','/portfolio-masonry-five','/portfolio-masonry-six'].includes(current) ? 'active' : ''}`}><a href="#!" on:click={() => submenu('/masonry-item')}> Masonry</a><span class="submenu-arrow"></span>
                            <ul class={`submenu ${['/masonry-item'].includes(openMenu) ? 'open' : ''}`}>
                                <li class={`${current === '/portfolio-masonry-two' ? 'active' : ''}`}><Link to="/portfolio-masonry-two" class="sub-menu-item">Two Column</Link></li>
                                <li class={`${current === '/portfolio-masonry-three' ? 'active' : ''}`}><Link to="/portfolio-masonry-three" class="sub-menu-item">Three Column</Link></li>
                                <li class={`${current === '/portfolio-masonry-four' ? 'active' : ''}`}><Link to="/portfolio-masonry-four" class="sub-menu-item">Four Column</Link></li>
                                <li class={`${current === '/portfolio-masonry-five' ? 'active' : ''}`}><Link to="/portfolio-masonry-five" class="sub-menu-item">Five Column</Link></li>
                                <li class={`${current === '/portfolio-masonry-six' ? 'active' : ''}`}><Link to="/portfolio-masonry-six" class="sub-menu-item">Six Column</Link></li>
                            </ul>  
                        </li>
                
                        <li class={`${current === '/portfolio-detail' ? 'active' : ''}`}><Link to="/portfolio-detail" class="sub-menu-item">Portfolio Detail</Link></li>
                        <li class={`${current === '/portfolio-detail-two' ? 'active' : ''}`}><Link to="/portfolio-detail-two" class="sub-menu-item">Portfolio Detail Two</Link></li>
                    </ul>
                </li>

                <li class={`has-submenu parent-parent-menu-item ${['/blog-sidebar','/blogs','/blog-standard-post','/blog-gallery-post','/blog-slider-post','/blog-link-post','/blog-story-post','/blog-youtube-post','/blog-html-video-post','/blog-audio-post','/blog-html-audio','/blog-blockquote-post','/blog-vimeo-post','/blog-left-sidebar-post'].includes(current) ? 'active' : ''}`}>
                    <a href="#!" on:click={() => submenu('/blog-item')}>Blogs</a><span class="menu-arrow"></span>
                    <ul class={`submenu ${['/blog-item','/blog-post-item'].includes(openMenu) ? 'open' : ''}`}>
                        <li class={`${current === '/blogs' ? 'active' : ''}`}><Link to="/blogs" class="sub-menu-item"> Blogs</Link></li>
                        <li class={`${current === '/blog-sidebar' ? 'active' : ''}`}><Link to="/blog-sidebar" class="sub-menu-item"> Blog Sidebar</Link></li>

                        <li class={`has-submenu parent-menu-item ${['/blog-standard-post','/blog-gallery-post','/blog-slider-post','/blog-link-post','/blog-story-post','/blog-youtube-post','/blog-html-video-post','/blog-audio-post','/blog-html-audio','/blog-blockquote-post','/blog-vimeo-post','/blog-left-sidebar-post'].includes(current) ? 'active' : ''}`}>
                            <a href="#!" on:click={() => submenu('/blog-post-item')}>Blog Posts</a><span class="submenu-arrow"></span>
                            <ul class={`submenu ${['/blog-post-item'].includes(openMenu) ? 'open' : ''}`}>
                                <li class={`${current === '/blog-standard-post' ? 'active' : ''}`}><Link to="/blog-standard-post" class="sub-menu-item">Standard Post </Link></li>
                                <li class={`${current === '/blog-gallery-post' ? 'active' : ''}`}><Link to="/blog-gallery-post" class="sub-menu-item">Gallery Post </Link></li>
                                <li class={`${current === '/blog-slider-post' ? 'active' : ''}`}><Link to="/blog-slider-post" class="sub-menu-item">Slider Post </Link></li>
                                <li class={`${current === '/blog-link-post' ? 'active' : ''}`}><Link to="/blog-link-post" class="sub-menu-item">Link Post </Link></li>
                                <li class={`${current === '/blog-story-post' ? 'active' : ''}`}><Link to="/blog-story-post" class="sub-menu-item">Story Post </Link></li>
                                <li class={`${current === '/blog-youtube-post' ? 'active' : ''}`}><Link to="/blog-youtube-post" class="sub-menu-item">Youtube Post </Link></li>
                                <li class={`${current === '/blog-html-video-post' ? 'active' : ''}`}><Link to="/blog-html-video-post" class="sub-menu-item">Html Video Post </Link></li>
                                <li class={`${current === '/blog-audio-post' ? 'active' : ''}`}><Link to="/blog-audio-post" class="sub-menu-item">Audio Post </Link></li>
                                <li class={`${current === '/blog-html-audio' ? 'active' : ''}`}><Link to="/blog-html-audio" class="sub-menu-item">Html Audio Post </Link></li>
                                <li class={`${current === '/blog-blockquote-post' ? 'active' : ''}`}><Link to="/blog-blockquote-post" class="sub-menu-item">Blockquote Post </Link></li>
                                <li class={`${current === '/blog-vimeo-post' ? 'active' : ''}`}><Link to="/blog-vimeo-post" class="sub-menu-item">Vimeo Post </Link></li>
                                <li class={`${current === '/blog-left-sidebar-post' ? 'active' : ''}`}><Link to="/blog-left-sidebar-post" class="sub-menu-item">Left Sidebar Post </Link></li>
                            </ul>
                        </li>
                    </ul>
                </li>
        
                <li class={`${current === '/contactus' ? 'active' : ''}`}><Link to="/contactus" class="sub-menu-item">Contact Us</Link></li>
            </ul>
        </div>
    </div>
</header>

<div class="offcanvas offcanvas-end shadow border-0" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header p-4 border-bottom">
        <h5 id="offcanvasRightLabel" class="mb-0">
            <img src={logoDark} class="light-version" alt="">
            <img src={logoLight} class="dark-version" alt="">
        </h5>
        <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i class="mdi mdi-close fs-4"></i></button>
    </div>
    <div class="offcanvas-body p-4">
        <div class="row">
            <div class="col-12">
                <img src={contact} class="img-fluid" alt="">
                <form>
                    <div class="my-3 text-center">
                        <h6 class="text-uppercase mb-0 fw-semibold">Sign In</h6>
                    </div>
                
                    <div class="mb-3">
                        <label class="form-label fw-semibold" for="mail">Your Email</label>
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
                        <span class="forgot-pass text-muted small mb-0"><a href="reset-password.html" class="text-muted">Forgot password ?</a></span>
                    </div>
    
                    <button class="btn btn-primary w-100" type="submit">Sign in</button>

                    <div class="col-12 text-center mt-3">
                        <span><span class="text-muted me-2 small">Don't have an account ?</span> <a href="signup.html" class="text-dark fw-semibold small">Sign Up</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="offcanvas-footer p-4 border-top text-center">
        <ul class="list-unstyled social-icon mb-0">
            <li class="list-inline-item me-1"><a href="https://dribbble.com/shreethemes" target="_blank" aria-label="link" class="rounded"><i data-feather="dribbble" class="fea icon-sm align-middle" title="dribbble"></i></a></li>
            <li class="list-inline-item me-1"><a href="http://linkedin.com/company/shreethemes" target="_blank" aria-label="link" class="rounded"><i data-feather="linkedin" class="fea icon-sm align-middle" title="Linkedin"></i></a></li>
            <li class="list-inline-item me-1"><a href="https://www.facebook.com/shreethemes" target="_blank" aria-label="link" class="rounded"><i data-feather="facebook" class="fea icon-sm align-middle" title="facebook"></i></a></li>
            <li class="list-inline-item me-1"><a href="https://www.instagram.com/shreethemes/" target="_blank" aria-label="link" class="rounded"><i data-feather="instagram" class="fea icon-sm align-middle" title="instagram"></i></a></li>
            <li class="list-inline-item me-1"><a href="https://twitter.com/shreethemes" target="_blank" aria-label="link" class="rounded"><i data-feather="twitter" class="fea icon-sm align-middle" title="twitter"></i></a></li>
        </ul>
    </div>
</div>