<!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <a class="logo" href="index.php">
            <img src="<?php echo $static_url; ?>/images/logo-dark.png" class="logo-light-mode" alt="">
            <img src="<?php echo $static_url; ?>/images/logo-white.png" class="logo-dark-mode" alt="">
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
                        <i data-feather="search" class="fea icon-20"></i>
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
                    <button type="button" class="btn btn-pills dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo $static_url; ?>/images/team/1.jpg" class="rounded-pill avatar avatar-ex-small" alt=""></button>
                    <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 pb-3 pt-0 overflow-hidden rounded" style="min-width: 200px;">
                        <div class="position-relative">
                            <div class="p-3">
                                <div class="d-flex align-items-center mt-n4">
                                    <img src="<?php echo $static_url; ?>/images/team/1.jpg" class="rounded-pill avatar avatar-md-sm img-thumbnail shadow-md" alt="">
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
                            <a class="dropdown-item small fw-semibold text-dark d-flex align-items-center" href="creator-profile.php"><span class="mb-0 d-inline-block me-1"><i data-feather="user" class="fea icon-sm me-1 align-middle"></i></span> Profile</a>
                            <a class="dropdown-item small fw-semibold text-dark d-flex align-items-center" href="profile-setting.php"><span class="mb-0 d-inline-block me-1"><i data-feather="settings" class="fea icon-sm me-1 align-middle"></i></span> Settings</a>
                            <div class="dropdown-divider border-top"></div>
                            <a class="dropdown-item small fw-semibold text-dark d-flex align-items-center" href="lock-screen.php"><span class="mb-0 d-inline-block me-1"><i data-feather="log-out" class="fea icon-sm me-1 align-middle"></i></span> Logout</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <div id="navigation">
            <!-- Navigation Menu-->   
            <ul class="navigation-menu nav-left">
                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Home</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="index.php" class="sub-menu-item">Business</a></li>
                        <li><a href="index-saas.php" class="sub-menu-item">Saas</a></li>
                        <li><a href="index-consulting.php" class="sub-menu-item">Consulting</a></li>
                        <li><a href="index-cryptocurrency.php" class="sub-menu-item">Cryptocurrency</a></li>
                        <li><a href="index-digital-marketing.php" class="sub-menu-item">Digital Marketing</a></li>
                        <li><a href="index-finance.php" class="sub-menu-item">Finance</a></li>
                        <li><a href="index-it-solution.php" class="sub-menu-item">IT Solutions</a></li>
                        <li><a href="index-hospital.php" class="sub-menu-item">Hospital / Medical</a></li>
                        <li><a href="index-nft.php" class="sub-menu-item">NFT Marketplace</a></li>
                        <li><a href="index-minimal-portfolio.php" class="sub-menu-item">Minimal Portfolio</a></li>
                        <li><a href="index-web-hosting.php" class="sub-menu-item">Web Hosting</a></li>
                        <li><a href="index-yoga.php" class="sub-menu-item">Yoga</a></li>
                        <li><a href="index-charity.php" class="sub-menu-item">Charity</a></li>
                    </ul>
                </li>
        
                <li><a href="aboutus.php" class="sub-menu-item">About Us</a></li>
                
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="services.php" class="sub-menu-item">Services</a></li>
                        <li><a href="service-detail.php" class="sub-menu-item">Service Detail</a></li>
                        <li><a href="pricing.php" class="sub-menu-item">Pricing</a></li>
                        <li><a href="team.php" class="sub-menu-item">Team</a></li>
                        <li><a href="testimonial.php" class="sub-menu-item">Testimonial</a></li>

                        <li><a href="faqs.php" class="sub-menu-item">FAQs</a></li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">NFT</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="nft-explore.php" class="sub-menu-item">NFT Explore</a></li>
                                <li><a href="nft-detail.php" class="sub-menu-item">NFT Detail</a></li>
                                <li><a href="collection.php" class="sub-menu-item">Collection</a></li>
                                <li><a href="wallet.php" class="sub-menu-item">Wallet</a></li>
                                <li><a href="upload-item.php" class="sub-menu-item">Upload Item</a></li>
                                <li class="has-submenu child-menu-item">
                                    <a href="javascript:void(0)"> Creators </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="creators.php" class="sub-menu-item">Creators</a></li>
                                        <li><a href="creator-profile.php" class="sub-menu-item">Creator Profile</a></li>
                                        <li><a href="profile-setting.php" class="sub-menu-item">Profile Setting</a></li>
                                    </ul>  
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="login.php" class="sub-menu-item"> Login</a></li>
                                <li><a href="signup.php" class="sub-menu-item"> Signup</a></li>
                                <li><a href="reset-password.php" class="sub-menu-item"> Forgot Password</a></li>
                                <li><a href="lock-screen.php" class="sub-menu-item"> Lock Screen</a></li>
                            </ul> 
                        </li>

                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="terms.php" class="sub-menu-item">Terms of Services</a></li>
                                <li><a href="privacy.php" class="sub-menu-item">Privacy Policy</a></li>
                            </ul>  
                        </li>

                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="comingsoon.php" class="sub-menu-item"> Coming Soon</a></li>
                                <li><a href="maintenance.php" class="sub-menu-item"> Maintenance</a></li>
                                <li><a href="error.php" class="sub-menu-item"> 404! Error</a></li>
                            </ul> 
                        </li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Portfolio</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Modern</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="portfolio-modern-two.php" class="sub-menu-item">Two Column</a></li>
                                <li><a href="portfolio-modern-three.php" class="sub-menu-item">Three Column</a></li>
                                <li><a href="portfolio-modern-four.php" class="sub-menu-item">Four Column</a></li>
                                <li><a href="portfolio-modern-five.php" class="sub-menu-item">Five Column</a></li>
                                <li><a href="portfolio-modern-six.php" class="sub-menu-item">Six Column</a></li>
                            </ul>  
                        </li>
                
                        <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Classic</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="portfolio-classic-two.php" class="sub-menu-item">Two Column</a></li>
                                <li><a href="portfolio-classic-three.php" class="sub-menu-item">Three Column</a></li>
                                <li><a href="portfolio-classic-four.php" class="sub-menu-item">Four Column</a></li>
                                <li><a href="portfolio-classic-five.php" class="sub-menu-item">Five Column</a></li>
                                <li><a href="portfolio-classic-six.php" class="sub-menu-item">Six Column</a></li>
                            </ul>  
                        </li>
                
                        <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Creative</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="portfolio-creative-two.php" class="sub-menu-item">Two Column</a></li>
                                <li><a href="portfolio-creative-three.php" class="sub-menu-item">Three Column</a></li>
                                <li><a href="portfolio-creative-four.php" class="sub-menu-item">Four Column</a></li>
                                <li><a href="portfolio-creative-five.php" class="sub-menu-item">Five Column</a></li>
                                <li><a href="portfolio-creative-six.php" class="sub-menu-item">Six Column</a></li>
                            </ul>  
                        </li>
                
                        <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Masonry</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="portfolio-masonry-two.php" class="sub-menu-item">Two Column</a></li>
                                <li><a href="portfolio-masonry-three.php" class="sub-menu-item">Three Column</a></li>
                                <li><a href="portfolio-masonry-four.php" class="sub-menu-item">Four Column</a></li>
                                <li><a href="portfolio-masonry-five.php" class="sub-menu-item">Five Column</a></li>
                                <li><a href="portfolio-masonry-six.php" class="sub-menu-item">Six Column</a></li>
                            </ul>  
                        </li>
                
                        <li><a href="portfolio-detail.php" class="sub-menu-item">Portfolio Detail</a></li>
                        <li><a href="portfolio-detail-two.php" class="sub-menu-item">Portfolio Detail Two</a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Blogs</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="blogs.php" class="sub-menu-item"> Blogs</a></li>
                        <li><a href="blog-sidebar.php" class="sub-menu-item"> Blog Sidebar</a></li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Blog Posts</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="blog-standard-post.php" class="sub-menu-item">Standard Post </a></li>
                                <li><a href="blog-gallery-post.php" class="sub-menu-item">Gallery Post </a></li>
                                <li><a href="blog-slider-post.php" class="sub-menu-item">Slider Post </a></li>
                                <li><a href="blog-link-post.php" class="sub-menu-item">Link Post </a></li>
                                <li><a href="blog-story-post.php" class="sub-menu-item">Story Post </a></li>
                                <li><a href="blog-youtube-post.php" class="sub-menu-item">Youtube Post </a></li>
                                <li><a href="blog-html-video-post.php" class="sub-menu-item">Html Video Post </a></li>
                                <li><a href="blog-audio-post.php" class="sub-menu-item">Audio Post </a></li>
                                <li><a href="blog-html-audio.php" class="sub-menu-item">Html Audio Post </a></li>
                                <li><a href="blog-blockquote-post.php" class="sub-menu-item">Blockquote Post </a></li>
                                <li><a href="blog-vimeo-post.php" class="sub-menu-item">Vimeo Post </a></li>
                                <li><a href="blog-left-sidebar-post.php" class="sub-menu-item">Left Sidebar Post </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
        
                <li><a href="contactus.php" class="sub-menu-item">Contact Us</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div>
</header>
<!-- Navbar End -->