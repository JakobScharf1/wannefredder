<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/index-saas', 'Home::indexSaas');
$routes->get('/index-consulting', 'Home::indexConsulting');
$routes->get('/index-cryptocurrency', 'Home::indexCryptocurrency');
$routes->get('/index-digital-marketing', 'Home::indexDigitalMarketing');
$routes->get('/index-finance', 'Home::indexFinance');
$routes->get('/index-it-solution', 'Home::indexItSolution');
$routes->get('/index-hospital', 'Home::indexHospital');
$routes->get('/index-nft', 'Home::indexNft');
$routes->get('/index-minimal-portfolio', 'Home::indexMinimalPortfolio');
$routes->get('/index-web-hosting', 'Home::indexWebHosting');
$routes->get('/index-yoga', 'Home::indexYoga');
$routes->get('/index-charity', 'Home::indexCharity');

$routes->get('/aboutus', 'Home::aboutus');

$routes->get('/services', 'Home::services');

$routes->get('/service-detail', 'Home::serviceDetail');
$routes->get('service-detail/(:segment)', 'Service::details/$1');

$routes->get('/pricing', 'Home::pricing');
$routes->get('/team', 'Home::team');
$routes->get('/testimonial', 'Home::testimonial');
$routes->get('/faqs', 'Home::faqs');

$routes->get('/nft-explore', 'Home::nftExplore');

$routes->get('/nft-detail', 'Home::nftDetail');
$routes->get('nft-detail/(:segment)', 'Nft::details/$1');

$routes->get('/collection', 'Home::collection');
$routes->get('/wallet', 'Home::wallet');
$routes->get('/upload-item', 'Home::uploadItem');

$routes->get('/creators', 'Home::creators');
$routes->get('/creator-profile', 'Home::creatorProfile');
$routes->get('/profile-setting', 'Home::profileSetting');

$routes->get('/login', 'Home::login');
$routes->get('/signup', 'Home::signup');
$routes->get('/reset-password', 'Home::resetPassword');
$routes->get('/lock-screen', 'Home::lockScreen');

$routes->get('/terms', 'Home::terms');
$routes->get('/privacy', 'Home::privacy');

$routes->get('/comingsoon', 'Home::comingsoon');
$routes->get('/maintenance', 'Home::maintenance');
$routes->get('/error', 'Home::error');

$routes->get('/portfolio-modern-two', 'Home::portfolioModernTwo');
$routes->get('/portfolio-modern-three', 'Home::portfolioModernThree');
$routes->get('/portfolio-modern-four', 'Home::portfolioModernFour');
$routes->get('/portfolio-modern-five', 'Home::portfolioModernFive');
$routes->get('/portfolio-modern-six', 'Home::portfolioModernSix');

$routes->get('/portfolio-classic-two', 'Home::portfolioClassicTwo');
$routes->get('/portfolio-classic-three', 'Home::portfolioClassicThree');
$routes->get('/portfolio-classic-four', 'Home::portfolioClassicFour');
$routes->get('/portfolio-classic-five', 'Home::portfolioClassicFive');
$routes->get('/portfolio-classic-six', 'Home::portfolioClassicSix');

$routes->get('/portfolio-creative-two', 'Home::portfolioCreativeTwo');
$routes->get('/portfolio-creative-three', 'Home::portfolioCreativeThree');
$routes->get('/portfolio-creative-four', 'Home::portfolioCreativeFour');
$routes->get('/portfolio-creative-five', 'Home::portfolioCreativeFive');
$routes->get('/portfolio-creative-six', 'Home::portfolioCreativeSix');

$routes->get('/portfolio-masonry-two', 'Home::portfolioMasonryTwo');
$routes->get('/portfolio-masonry-three', 'Home::portfolioMasonryThree');
$routes->get('/portfolio-masonry-four', 'Home::portfolioMasonryFour');
$routes->get('/portfolio-masonry-five', 'Home::portfolioMasonryFive');
$routes->get('/portfolio-masonry-six', 'Home::portfolioMasonrySix');

$routes->get('/portfolio-detail', 'Home::portfolioDetail');
$routes->get('portfolio-detail/(:segment)', 'Portfolio::details/$1');

$routes->get('/portfolio-detail-two', 'Home::portfolioDetailTwo');
$routes->get('portfolio-detail-two/(:segment)', 'PortfolioTwo::details/$1');

$routes->get('/blogs', 'Home::blogs');
$routes->get('/blog-sidebar', 'Home::blogSidebar');

$routes->get('/blog-standard-post', 'Home::blogStandardPost');
$routes->get('blog-standard-post/(:segment)', 'Blog::details/$1');

$routes->get('/blog-gallery-post', 'Home::blogGalleryPost');
$routes->get('/blog-slider-post', 'Home::blogSliderPost');
$routes->get('/blog-link-post', 'Home::blogLinkPost');
$routes->get('/blog-story-post', 'Home::blogStoryPost');
$routes->get('/blog-youtube-post', 'Home::blogYoutubePost');
$routes->get('/blog-html-video-post', 'Home::blogHtmlVideoPost');
$routes->get('/blog-audio-post', 'Home::blogAudioPost');
$routes->get('/blog-html-audio', 'Home::blogHtmlAudio');
$routes->get('/blog-blockquote-post', 'Home::blogBlockquotePost');
$routes->get('/blog-vimeo-post', 'Home::blogVimeoPost');
$routes->get('/blog-left-sidebar-post', 'Home::blogLeftSidebarPost');

$routes->get('/contactus', 'Home::contactus');
