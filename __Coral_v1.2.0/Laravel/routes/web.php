<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\NftController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PortfolioTwoController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/index-saas', [HomeController::class, 'indexSaas']);
Route::get('/index-consulting', [HomeController::class, 'indexConsulting']);
Route::get('/index-cryptocurrency', [HomeController::class, 'indexCryptocurrency']);
Route::get('/index-digital-marketing', [HomeController::class, 'indexDigitalMarketing']);
Route::get('/index-finance', [HomeController::class, 'indexFinance']);
Route::get('/index-it-solution', [HomeController::class, 'indexItSolution']);
Route::get('/index-hospital', [HomeController::class, 'indexHospital']);
Route::get('/index-nft', [HomeController::class, 'indexNft']);
Route::get('/index-minimal-portfolio', [HomeController::class, 'indexMinimalPortfolio']);
Route::get('/index-web-hosting', [HomeController::class, 'indexWebHosting']);
Route::get('/index-yoga', [HomeController::class, 'indexYoga']);
Route::get('/index-charity', [HomeController::class, 'indexCharity']);

Route::get('/aboutus', [HomeController::class, 'aboutus']);

Route::get('/services', [HomeController::class, 'services']);

Route::get('/service-detail', [HomeController::class, 'serviceDetail']);
Route::get('/service-detail/{title}', [ServiceController::class, 'show'])->name('service-detail');

Route::get('/pricing', [HomeController::class, 'pricing']);
Route::get('/team', [HomeController::class, 'team']);
Route::get('/testimonial', [HomeController::class, 'testimonial']);
Route::get('/faqs', [HomeController::class, 'faqs']);

Route::get('/nft-explore', [HomeController::class, 'nftExplore']);

Route::get('/nft-detail', [HomeController::class, 'nftDetail']);
Route::get('/nft-detail/{title}', [NftController::class, 'show'])->name('nft-detail');

Route::get('/collection', [HomeController::class, 'collection']);
Route::get('/wallet', [HomeController::class, 'wallet']);
Route::get('/upload-item', [HomeController::class, 'uploadItem']);

Route::get('/creators', [HomeController::class, 'creators']);
Route::get('/creator-profile', [HomeController::class, 'creatorProfile']);
Route::get('/profile-setting', [HomeController::class, 'profileSetting']);

Route::get('/login', [HomeController::class, 'login']);
Route::get('/signup', [HomeController::class, 'signup']);
Route::get('/reset-password', [HomeController::class, 'resetPassword']);
Route::get('/lock-screen', [HomeController::class, 'lockScreen']);

Route::get('/terms', [HomeController::class, 'terms']);
Route::get('/privacy', [HomeController::class, 'privacy']);

Route::get('/comingsoon', [HomeController::class, 'comingsoon']);
Route::get('/maintenance', [HomeController::class, 'maintenance']);
Route::get('/error', [HomeController::class, 'error']);

Route::get('/portfolio-modern-two', [HomeController::class, 'portfolioModernTwo']);
Route::get('/portfolio-modern-three', [HomeController::class, 'portfolioModernThree']);
Route::get('/portfolio-modern-four', [HomeController::class, 'portfolioModernFour']);
Route::get('/portfolio-modern-five', [HomeController::class, 'portfolioModernFive']);
Route::get('/portfolio-modern-six', [HomeController::class, 'portfolioModernSix']);

Route::get('/portfolio-classic-two', [HomeController::class, 'portfolioClassicTwo']);
Route::get('/portfolio-classic-three', [HomeController::class, 'portfolioClassicThree']);
Route::get('/portfolio-classic-four', [HomeController::class, 'portfolioClassicFour']);
Route::get('/portfolio-classic-five', [HomeController::class, 'portfolioClassicFive']);
Route::get('/portfolio-classic-six', [HomeController::class, 'portfolioClassicSix']);

Route::get('/portfolio-creative-two', [HomeController::class, 'portfolioCreativeTwo']);
Route::get('/portfolio-creative-three', [HomeController::class, 'portfolioCreativeThree']);
Route::get('/portfolio-creative-four', [HomeController::class, 'portfolioCreativeFour']);
Route::get('/portfolio-creative-five', [HomeController::class, 'portfolioCreativeFive']);
Route::get('/portfolio-creative-six', [HomeController::class, 'portfolioCreativeSix']);

Route::get('/portfolio-masonry-two', [HomeController::class, 'portfolioMasonryTwo']);
Route::get('/portfolio-masonry-three', [HomeController::class, 'portfolioMasonryThree']);
Route::get('/portfolio-masonry-four', [HomeController::class, 'portfolioMasonryFour']);
Route::get('/portfolio-masonry-five', [HomeController::class, 'portfolioMasonryFive']);
Route::get('/portfolio-masonry-six', [HomeController::class, 'portfolioMasonrySix']);

Route::get('/portfolio-detail', [HomeController::class, 'portfolioDetail']);
Route::get('/portfolio-detail/{title}', [PortfolioController::class, 'show'])->name('portfolio-detail');

Route::get('/portfolio-detail-two', [HomeController::class, 'portfolioDetailTwo']);
Route::get('/portfolio-detail-two/{title}', [PortfolioTwoController::class, 'show'])->name('portfolio-detail-two');

Route::get('/blogs', [HomeController::class, 'blogs']);
Route::get('/blog-sidebar', [HomeController::class, 'blogSidebar']);

Route::get('/blog-standard-post', [HomeController::class, 'blogStandardPost']);
Route::get('/blog-standard-post/{title}', [BlogController::class, 'show'])->name('blog-standard-post');

Route::get('/blog-gallery-post', [HomeController::class, 'blogGalleryPost']);
Route::get('/blog-slider-post', [HomeController::class, 'blogSliderPost']);
Route::get('/blog-link-post', [HomeController::class, 'blogLinkPost']);
Route::get('/blog-story-post', [HomeController::class, 'blogStoryPost']);
Route::get('/blog-youtube-post', [HomeController::class, 'blogYoutubePost']);
Route::get('/blog-html-video-post', [HomeController::class, 'blogHtmlVideoPost']);
Route::get('/blog-audio-post', [HomeController::class, 'blogAudioPost']);
Route::get('/blog-html-audio', [HomeController::class, 'blogHtmlAudio']);
Route::get('/blog-blockquote-post', [HomeController::class, 'blogBlockquotePost']);
Route::get('/blog-vimeo-post', [HomeController::class, 'blogVimeoPost']);
Route::get('/blog-left-sidebar-post', [HomeController::class, 'blogLeftSidebarPost']);

Route::get('/contactus', [HomeController::class, 'contactus']);

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
