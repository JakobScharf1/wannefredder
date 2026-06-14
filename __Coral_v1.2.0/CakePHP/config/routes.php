<?php
/**
 * Routes configuration.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * It's loaded within the context of `Application::routes()` method which
 * receives a `RouteBuilder` instance `$routes` as method argument.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return function (RouteBuilder $routes): void {
    
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder): void {
        
        $builder->connect('/', ['controller' => 'Pages', 'action' => 'display', 'index']);

        $builder->connect('/index-saas', ['controller' => 'Pages', 'action' => 'indexSaas']);
        $builder->connect('/index-consulting', ['controller' => 'Pages', 'action' => 'indexConsulting']);
        $builder->connect('/index-cryptocurrency', ['controller' => 'Pages', 'action' => 'indexCryptocurrency']);
        $builder->connect('/index-digital-marketing', ['controller' => 'Pages', 'action' => 'indexDigitalMarketing']);
        $builder->connect('/index-finance', ['controller' => 'Pages', 'action' => 'indexFinance']);
        $builder->connect('/index-it-solution', ['controller' => 'Pages', 'action' => 'indexItSolution']);
        $builder->connect('/index-hospital', ['controller' => 'Pages', 'action' => 'indexHospital']);
        $builder->connect('/index-nft', ['controller' => 'Pages', 'action' => 'indexNft']);
        $builder->connect('/index-minimal-portfolio', ['controller' => 'Pages', 'action' => 'indexMinimalPortfolio']);
        $builder->connect('/index-web-hosting', ['controller' => 'Pages', 'action' => 'indexWebHosting']);
        $builder->connect('/index-yoga', ['controller' => 'Pages', 'action' => 'indexYoga']);
        $builder->connect('/index-charity', ['controller' => 'Pages', 'action' => 'indexCharity']);

        $builder->connect('/aboutus', ['controller' => 'Pages', 'action' => 'aboutus']);

        $builder->connect('/services', ['controller' => 'Pages', 'action' => 'services']);

        $builder->connect('/service-detail', ['controller' => 'Service', 'action' => 'detail']);
        
        $builder->connect('/service-detail/{slug}', 
            ['controller' => 'Service', 'action' => 'detail'], 
            ['pass' => ['slug'], 'slug' => '[a-z0-9\-]+']
        );

        $builder->connect('/pricing', ['controller' => 'Pages', 'action' => 'pricing']);
        $builder->connect('/team', ['controller' => 'Pages', 'action' => 'team']);
        $builder->connect('/testimonial', ['controller' => 'Pages', 'action' => 'testimonial']);
        $builder->connect('/faqs', ['controller' => 'Pages', 'action' => 'faqs']);

        $builder->connect('/nft-explore', ['controller' => 'Pages', 'action' => 'nftExplore']);

        $builder->connect('/nft-detail', ['controller' => 'Nft', 'action' => 'detail']);
        
        $builder->connect('/nft-detail/{slug}', 
            ['controller' => 'Nft', 'action' => 'detail'], 
            ['pass' => ['slug'], 'slug' => '[a-z0-9\-]+']
        );

        $builder->connect('/collection', ['controller' => 'Pages', 'action' => 'collection']);
        $builder->connect('/wallet', ['controller' => 'Pages', 'action' => 'wallet']);
        $builder->connect('/upload-item', ['controller' => 'Pages', 'action' => 'uploadItem']);

        $builder->connect('/creators', ['controller' => 'Pages', 'action' => 'creators']);
        $builder->connect('/creator-profile', ['controller' => 'Pages', 'action' => 'creatorProfile']);
        $builder->connect('/profile-setting', ['controller' => 'Pages', 'action' => 'profileSetting']);

        $builder->connect('/login', ['controller' => 'Pages', 'action' => 'login']);
        $builder->connect('/signup', ['controller' => 'Pages', 'action' => 'signup']);
        $builder->connect('/reset-password', ['controller' => 'Pages', 'action' => 'resetPassword']);
        $builder->connect('/lock-screen', ['controller' => 'Pages', 'action' => 'lockScreen']);

        $builder->connect('/terms', ['controller' => 'Pages', 'action' => 'terms']);
        $builder->connect('/privacy', ['controller' => 'Pages', 'action' => 'privacy']);

        $builder->connect('/comingsoon', ['controller' => 'Pages', 'action' => 'comingsoon']);
        $builder->connect('/maintenance', ['controller' => 'Pages', 'action' => 'maintenance']);
        $builder->connect('/error', ['controller' => 'Pages', 'action' => 'error']);

        $builder->connect('/portfolio-modern-two', ['controller' => 'Pages', 'action' => 'portfolioModernTwo']);
        $builder->connect('/portfolio-modern-three', ['controller' => 'Pages', 'action' => 'portfolioModernThree']);
        $builder->connect('/portfolio-modern-four', ['controller' => 'Pages', 'action' => 'portfolioModernFour']);
        $builder->connect('/portfolio-modern-five', ['controller' => 'Pages', 'action' => 'portfolioModernFive']);
        $builder->connect('/portfolio-modern-six', ['controller' => 'Pages', 'action' => 'portfolioModernSix']);

        $builder->connect('/portfolio-classic-two', ['controller' => 'Pages', 'action' => 'portfolioClassicTwo']);
        $builder->connect('/portfolio-classic-three', ['controller' => 'Pages', 'action' => 'portfolioClassicThree']);
        $builder->connect('/portfolio-classic-four', ['controller' => 'Pages', 'action' => 'portfolioClassicFour']);
        $builder->connect('/portfolio-classic-five', ['controller' => 'Pages', 'action' => 'portfolioClassicFive']);
        $builder->connect('/portfolio-classic-six', ['controller' => 'Pages', 'action' => 'portfolioClassicSix']);

        $builder->connect('/portfolio-creative-two', ['controller' => 'Pages', 'action' => 'portfolioCreativeTwo']);
        $builder->connect('/portfolio-creative-three', ['controller' => 'Pages', 'action' => 'portfolioCreativeThree']);
        $builder->connect('/portfolio-creative-four', ['controller' => 'Pages', 'action' => 'portfolioCreativeFour']);
        $builder->connect('/portfolio-creative-five', ['controller' => 'Pages', 'action' => 'portfolioCreativeFive']);
        $builder->connect('/portfolio-creative-six', ['controller' => 'Pages', 'action' => 'portfolioCreativeSix']);

        $builder->connect('/portfolio-masonry-two', ['controller' => 'Pages', 'action' => 'portfolioMasonryTwo']);
        $builder->connect('/portfolio-masonry-three', ['controller' => 'Pages', 'action' => 'portfolioMasonryThree']);
        $builder->connect('/portfolio-masonry-four', ['controller' => 'Pages', 'action' => 'portfolioMasonryFour']);
        $builder->connect('/portfolio-masonry-five', ['controller' => 'Pages', 'action' => 'portfolioMasonryFive']);
        $builder->connect('/portfolio-masonry-six', ['controller' => 'Pages', 'action' => 'portfolioMasonrySix']);

        $builder->connect('/portfolio-detail', ['controller' => 'Portfolio', 'action' => 'detail']);
        
        $builder->connect('/portfolio-detail/{slug}', 
            ['controller' => 'Portfolio', 'action' => 'detail'], 
            ['pass' => ['slug'], 'slug' => '[a-z0-9\-]+']
        );

        $builder->connect('/portfolio-detail-two', ['controller' => 'PortfolioTwo', 'action' => 'detail']);
        
        $builder->connect('/portfolio-detail-two/{slug}', 
            ['controller' => 'PortfolioTwo', 'action' => 'detail'], 
            ['pass' => ['slug'], 'slug' => '[a-z0-9\-]+']
        );

        $builder->connect('/blogs', ['controller' => 'Pages', 'action' => 'blogs']);
        $builder->connect('/blog-sidebar', ['controller' => 'Pages', 'action' => 'blogSidebar']);

        $builder->connect('/blog-standard-post', ['controller' => 'Blog', 'action' => 'detail']);
        
        $builder->connect('/blog-standard-post/{slug}', 
            ['controller' => 'Blog', 'action' => 'detail'], 
            ['pass' => ['slug'], 'slug' => '[a-z0-9\-]+']
        );

        $builder->connect('/blog-gallery-post', ['controller' => 'Pages', 'action' => 'blogGalleryPost']);
        $builder->connect('/blog-slider-post', ['controller' => 'Pages', 'action' => 'blogSliderPost']);
        $builder->connect('/blog-link-post', ['controller' => 'Pages', 'action' => 'blogLinkPost']);
        $builder->connect('/blog-story-post', ['controller' => 'Pages', 'action' => 'blogStoryPost']);
        $builder->connect('/blog-youtube-post', ['controller' => 'Pages', 'action' => 'blogYoutubePost']);
        $builder->connect('/blog-html-video-post', ['controller' => 'Pages', 'action' => 'blogHtmlVideoPost']);
        $builder->connect('/blog-audio-post', ['controller' => 'Pages', 'action' => 'blogAudioPost']);
        $builder->connect('/blog-html-audio', ['controller' => 'Pages', 'action' => 'blogHtmlAudio']);
        $builder->connect('/blog-blockquote-post', ['controller' => 'Pages', 'action' => 'blogBlockquotePost']);
        $builder->connect('/blog-vimeo-post', ['controller' => 'Pages', 'action' => 'blogVimeoPost']);
        $builder->connect('/blog-left-sidebar-post', ['controller' => 'Pages', 'action' => 'blogLeftSidebarPost']);

        $builder->connect('/contactus', ['controller' => 'Pages', 'action' => 'contactus']);
        $builder->connect('/contact/submit', ['controller' => 'Contact', 'action' => 'submit'], ['_method' => 'POST']);

        /*
         * ...and connect the rest of 'Pages' controller's URLs.
         */
        $builder->connect('/pages/*', 'Pages::display');

        $builder->fallbacks();
    });
};
