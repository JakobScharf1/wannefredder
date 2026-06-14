<!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <a class="logo" href="<?= $this->Url->build('/'); ?>">
            <span class="logo-light-mode">
                <img src="<?= $this->Url->build('/assets/images/logo-dark.png'); ?>" class="l-dark" alt="">
                <img src="<?= $this->Url->build('/assets/images/logo-white.png'); ?>" class="l-light" alt="">
            </span>
            <img src="<?= $this->Url->build('/assets/images/logo-white.png'); ?>" class="logo-dark-mode" alt="">
        </a>

        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
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
                <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <div class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="settings" class="fea icon-sm"></i></div>
                </a>
            </li>

            <li class="list-inline-item ps-1 mb-0">
                <div class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="dollar-sign" class="fea icon-sm"></i></div>
            </li>

            <li class="list-inline-item ps-1 mb-0">
                <div class="dropdown dropdown-primary">
                    <button type="button" class="btn btn-pills dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= $this->Url->build('/assets/images/team/1.jpg'); ?>" class="rounded-pill avatar avatar-ex-small" alt=""></button>
                    <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 pb-3 pt-0 overflow-hidden rounded" style="min-width: 200px;">
                        <div class="position-relative">
                            <div class="p-3">
                                <div class="d-flex align-items-center mt-n4">
                                    <img src="<?= $this->Url->build('/assets/images/team/1.jpg'); ?>" class="rounded-pill avatar avatar-md-sm img-thumbnail shadow-md" alt="">
                                    <h6 class="text-dark fw-semibold mb-0 ms-1">Calvin Carlo</h6>
                                </div>
                                <div class="mt-3">
                                    <small class="text-start text-dark d-block fw-semibold">Wallet:</small>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small id="myPublicAddress" class="text-muted">qhutfvf0...hfteh45</small>
                                        <a href="" class="text-primary"><span data-feather="copy" class="fea icon-sm"></span></a>
                                    </div>
                                </div>
                                
                                <div class="mt-2">
                                    <small class="text-dark fw-semibold">Balance: <span class="text-primary">0.00045ETH</span></small>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <a class="dropdown-item small fw-semibold text-dark d-flex align-items-center" href="<?= $this->Url->build('/creator-profile'); ?>"><span class="mb-0 d-inline-block me-1"><i data-feather="user" class="fea icon-sm me-1 align-middle"></i></span> Profile</a>
                            <a class="dropdown-item small fw-semibold text-dark d-flex align-items-center" href="<?= $this->Url->build('/profile-setting'); ?>"><span class="mb-0 d-inline-block me-1"><i data-feather="settings" class="fea icon-sm me-1 align-middle"></i></span> Settings</a>
                            <div class="dropdown-divider border-top"></div>
                            <a class="dropdown-item small fw-semibold text-dark d-flex align-items-center" href="<?= $this->Url->build('/lock-screen'); ?>"><span class="mb-0 d-inline-block me-1"><i data-feather="log-out" class="fea icon-sm me-1 align-middle"></i></span> Logout</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <div id="navigation">
            <!-- Navigation Menu-->   
            <ul class="navigation-menu nav-left nav-light">
                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Home</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="<?= $this->Url->build('/'); ?>" class="sub-menu-item">Business</a></li>
                        <li><a href="<?= $this->Url->build('/index-saas'); ?>" class="sub-menu-item">Saas</a></li>
                        <li><a href="<?= $this->Url->build('/index-consulting'); ?>" class="sub-menu-item">Consulting</a></li>
                        <li><a href="<?= $this->Url->build('/index-cryptocurrency'); ?>" class="sub-menu-item">Cryptocurrency</a></li>
                        <li><a href="<?= $this->Url->build('/index-digital-marketing'); ?>" class="sub-menu-item">Digital Marketing</a></li>
                        <li><a href="<?= $this->Url->build('/index-finance'); ?>" class="sub-menu-item">Finance</a></li>
                        <li><a href="<?= $this->Url->build('/index-it-solution'); ?>" class="sub-menu-item">IT Solutions</a></li>
                        <li><a href="<?= $this->Url->build('/index-hospital'); ?>" class="sub-menu-item">Hospital / Medical</a></li>
                        <li><a href="<?= $this->Url->build('/index-nft'); ?>" class="sub-menu-item">NFT Marketplace</a></li>
                        <li><a href="<?= $this->Url->build('/index-minimal-portfolio'); ?>" class="sub-menu-item">Minimal Portfolio</a></li>
                        <li><a href="<?= $this->Url->build('/index-web-hosting'); ?>" class="sub-menu-item">Web Hosting</a></li>
                        <li><a href="<?= $this->Url->build('/index-yoga'); ?>" class="sub-menu-item">Yoga</a></li>
                        <li><a href="<?= $this->Url->build('/index-charity'); ?>" class="sub-menu-item">Charity</a></li>
                    </ul>
                </li>
        
                <li><a href="<?= $this->Url->build('/aboutus'); ?>" class="sub-menu-item">About Us</a></li>
                
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="<?= $this->Url->build('/services'); ?>" class="sub-menu-item">Services</a></li>
                        <li><a href="<?= $this->Url->build('/service-detail'); ?>" class="sub-menu-item">Service Detail</a></li>
                        <li><a href="<?= $this->Url->build('/pricing'); ?>" class="sub-menu-item">Pricing</a></li>
                        <li><a href="<?= $this->Url->build('/team'); ?>" class="sub-menu-item">Team</a></li>
                        <li><a href="<?= $this->Url->build('/testimonial'); ?>" class="sub-menu-item">Testimonial</a></li>

                        <li><a href="<?= $this->Url->build('/faqs'); ?>" class="sub-menu-item">FAQs</a></li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">NFT</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="<?= $this->Url->build('/nft-explore'); ?>" class="sub-menu-item">NFT Explore</a></li>
                                <li><a href="<?= $this->Url->build('/nft-detail'); ?>" class="sub-menu-item">NFT Detail</a></li>
                                <li><a href="<?= $this->Url->build('/collection'); ?>" class="sub-menu-item">Collection</a></li>
                                <li><a href="<?= $this->Url->build('/wallet'); ?>" class="sub-menu-item">Wallet</a></li>
                                <li><a href="<?= $this->Url->build('/upload-item'); ?>" class="sub-menu-item">Upload Item</a></li>
                                <li class="has-submenu child-menu-item">
                                    <a href="javascript:void(0)"> Creators </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="<?= $this->Url->build('/creators'); ?>" class="sub-menu-item">Creators</a></li>
                                        <li><a href="<?= $this->Url->build('/creator-profile'); ?>" class="sub-menu-item">Creator Profile</a></li>
                                        <li><a href="<?= $this->Url->build('/profile-setting'); ?>" class="sub-menu-item">Profile Setting</a></li>
                                    </ul>  
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="<?= $this->Url->build('/login'); ?>" class="sub-menu-item"> Login</a></li>
                                <li><a href="<?= $this->Url->build('/signup'); ?>" class="sub-menu-item"> Signup</a></li>
                                <li><a href="<?= $this->Url->build('/reset-password'); ?>" class="sub-menu-item"> Forgot Password</a></li>
                                <li><a href="<?= $this->Url->build('/lock-screen'); ?>" class="sub-menu-item"> Lock Screen</a></li>
                            </ul> 
                        </li>

                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="<?= $this->Url->build('/terms'); ?>" class="sub-menu-item">Terms of Services</a></li>
                                <li><a href="<?= $this->Url->build('/privacy'); ?>" class="sub-menu-item">Privacy Policy</a></li>
                            </ul>  
                        </li>

                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="<?= $this->Url->build('/comingsoon'); ?>" class="sub-menu-item"> Coming Soon</a></li>
                                <li><a href="<?= $this->Url->build('/maintenance'); ?>" class="sub-menu-item"> Maintenance</a></li>
                                <li><a href="<?= $this->Url->build('/error'); ?>" class="sub-menu-item"> 404! Error</a></li>
                            </ul> 
                        </li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Portfolio</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Modern</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="<?= $this->Url->build('/portfolio-modern-two'); ?>" class="sub-menu-item">Two Column</a></li>
                                <li><a href="<?= $this->Url->build('/portfolio-modern-three'); ?>" class="sub-menu-item">Three Column</a></li>
                                <li><a href="<?= $this->Url->build('/portfolio-modern-four'); ?>" class="sub-menu-item">Four Column</a></li>
                                <li><a href="<?= $this->Url->build('/portfolio-modern-five'); ?>" class="sub-menu-item">Five Column</a></li>
                                <li><a href="<?= $this->Url->build('/portfolio-modern-six'); ?>" class="sub-menu-item">Six Column</a></li>
                            </ul>  
                        </li>
                
                        <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Classic</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="<?= $this->Url->build('/portfolio-classic-two'); ?>" class="sub-menu-item">Two Column</a></li>
                                <li><a href="<?= $this->Url->build('/portfolio-classic-three'); ?>" class="sub-menu-item">Three Column</a></li>
                                <li><a href="<?= $this->Url->build('/portfolio-classic-four'); ?>" class="sub-menu-item">Four Column</a></li>
                                <li><a href="<?= $this->Url->build('/portfolio-classic-five'); ?>" class="sub-menu-item">Five Column</a></li>
                                <li><a href="<?= $this->Url->build('/portfolio-classic-six'); ?>" class="sub-menu-item">Six Column</a></li>
                            </ul>  
                        </li>
                
                        <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Creative</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="<?= $this->Url->build('/portfolio-creative-two'); ?>" class="sub-menu-item">Two Column</a></li>
                                <li><a href="<?= $this->Url->build('/portfolio-creative-three'); ?>" class="sub-menu-item">Three Column</a></li>
                                <li><a href="<?= $this->Url->build('/portfolio-creative-four'); ?>" class="sub-menu-item">Four Column</a></li>
                                <li><a href="<?= $this->Url->build('/portfolio-creative-five'); ?>" class="sub-menu-item">Five Column</a></li>
                                <li><a href="<?= $this->Url->build('/portfolio-creative-six'); ?>" class="sub-menu-item">Six Column</a></li>
                            </ul>  
                        </li>
                
                        <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Masonry</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="<?= $this->Url->build('/portfolio-masonry-two'); ?>" class="sub-menu-item">Two Column</a></li>
                                <li><a href="<?= $this->Url->build('/portfolio-masonry-three'); ?>" class="sub-menu-item">Three Column</a></li>
                                <li><a href="<?= $this->Url->build('/portfolio-masonry-four'); ?>" class="sub-menu-item">Four Column</a></li>
                                <li><a href="<?= $this->Url->build('/portfolio-masonry-five'); ?>" class="sub-menu-item">Five Column</a></li>
                                <li><a href="<?= $this->Url->build('/portfolio-masonry-six'); ?>" class="sub-menu-item">Six Column</a></li>
                            </ul>  
                        </li>
                
                        <li><a href="<?= $this->Url->build('/portfolio-detail'); ?>" class="sub-menu-item">Portfolio Detail</a></li>
                        <li><a href="<?= $this->Url->build('/portfolio-detail-two'); ?>" class="sub-menu-item">Portfolio Detail Two</a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Blogs</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="<?= $this->Url->build('/blogs'); ?>" class="sub-menu-item"> Blogs</a></li>
                        <li><a href="<?= $this->Url->build('/blog-sidebar'); ?>" class="sub-menu-item"> Blog Sidebar</a></li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Blog Posts</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="<?= $this->Url->build('/blog-standard-post'); ?>" class="sub-menu-item">Standard Post </a></li>
                                <li><a href="<?= $this->Url->build('/blog-gallery-post'); ?>" class="sub-menu-item">Gallery Post </a></li>
                                <li><a href="<?= $this->Url->build('/blog-slider-post'); ?>" class="sub-menu-item">Slider Post </a></li>
                                <li><a href="<?= $this->Url->build('/blog-link-post'); ?>" class="sub-menu-item">Link Post </a></li>
                                <li><a href="<?= $this->Url->build('/blog-story-post'); ?>" class="sub-menu-item">Story Post </a></li>
                                <li><a href="<?= $this->Url->build('/blog-youtube-post'); ?>" class="sub-menu-item">Youtube Post </a></li>
                                <li><a href="<?= $this->Url->build('/blog-html-video-post'); ?>" class="sub-menu-item">Html Video Post </a></li>
                                <li><a href="<?= $this->Url->build('/blog-audio-post'); ?>" class="sub-menu-item">Audio Post </a></li>
                                <li><a href="<?= $this->Url->build('/blog-html-audio'); ?>" class="sub-menu-item">Html Audio Post </a></li>
                                <li><a href="<?= $this->Url->build('/blog-blockquote-post'); ?>" class="sub-menu-item">Blockquote Post </a></li>
                                <li><a href="<?= $this->Url->build('/blog-vimeo-post'); ?>" class="sub-menu-item">Vimeo Post </a></li>
                                <li><a href="<?= $this->Url->build('/blog-left-sidebar-post'); ?>" class="sub-menu-item">Left Sidebar Post </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
        
                <li><a href="<?= $this->Url->build('/contactus'); ?>" class="sub-menu-item">Contact Us</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div>
</header>
<!-- Navbar End -->