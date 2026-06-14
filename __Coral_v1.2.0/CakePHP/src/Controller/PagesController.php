<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from templates/Pages/
 *
 * @link https://book.cakephp.org/5/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    /**
     * Displays a view
     *
     * @param string ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\View\Exception\MissingTemplateException When the view file could not
     *   be found and in debug mode.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found and not in debug mode.
     * @throws \Cake\View\Exception\MissingTemplateException In debug mode.
     */
    public function display(string ...$path): ?Response
    {
        if (!$path) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            return $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }

    public function index()
    {
        return $this->render('/pages/index');
    }

    public function indexSaas()
    {
        return $this->render('/pages/index-saas');
    }

    public function indexConsulting()
    {
        return $this->render('/pages/index-consulting');
    }

    public function indexCryptocurrency()
    {
        return $this->render('/pages/index-cryptocurrency');
    }

    public function indexDigitalMarketing()
    {
        return $this->render('/pages/index-digital-marketing');
    }

    public function indexFinance()
    {
        return $this->render('/pages/index-finance');
    }

    public function indexItSolution()
    {
        return $this->render('/pages/index-it-solution');
    }

    public function indexHospital()
    {
        return $this->render('/pages/index-hospital');
    }

    public function indexNft()
    {
        return $this->render('/pages/index-nft');
    }

    public function indexMinimalPortfolio()
    {
        return $this->render('/pages/index-minimal-portfolio');
    }

    public function indexWebHosting()
    {
        return $this->render('/pages/index-web-hosting');
    }

    public function indexYoga()
    {
        return $this->render('/pages/index-yoga');
    }

    public function indexCharity()
    {
        return $this->render('/pages/index-charity');
    }

    public function aboutus()
    {
        return $this->render('/pages/aboutus');
    }

    public function services()
    {
        return $this->render('/pages/services');
    }

    public function pricing()
    {
        return $this->render('/pages/pricing');
    }

    public function team()
    {
        return $this->render('/pages/team');
    }

    public function testimonial()
    {
        return $this->render('/pages/testimonial');
    }

    public function faqs()
    {
        return $this->render('/pages/faqs');
    }

    public function nftExplore()
    {
        return $this->render('/pages/nft-explore');
    }

    public function collection()
    {
        return $this->render('/pages/collection');
    }

    public function wallet()
    {
        return $this->render('/pages/wallet');
    }

    public function uploadItem()
    {
        return $this->render('/pages/upload-item');
    }

    public function creators()
    {
        return $this->render('/pages/creators');
    }

    public function creatorProfile()
    {
        return $this->render('/pages/creator-profile');
    }

    public function profileSetting()
    {
        return $this->render('/pages/profile-setting');
    }

    public function login()
    {
        $this->viewBuilder()->setLayout('no-header');
    }

    public function signup()
    {
        $this->viewBuilder()->setLayout('no-header');
    }

    public function resetPassword()
    {
        $this->viewBuilder()->setLayout('no-header');
        return $this->render('/pages/reset-password');
    }

    public function lockScreen()
    {
        $this->viewBuilder()->setLayout('no-header');
        return $this->render('/pages/lock-screen');
    }

    public function terms()
    {
        return $this->render('/pages/terms');
    }

    public function privacy()
    {
        return $this->render('/pages/privacy');
    }

    public function comingsoon()
    {
        $this->viewBuilder()->setLayout('no-header');
    }

    public function maintenance()
    {
        $this->viewBuilder()->setLayout('no-header');
    }

    public function error()
    {
        $this->viewBuilder()->setLayout('no-header');
    }

    public function portfolioModernTwo()
    {
        return $this->render('/pages/portfolio-modern-two');
    }
    
    public function portfolioModernThree()
    {
        return $this->render('/pages/portfolio-modern-three');
    }

    public function portfolioModernFour()
    {
        return $this->render('/pages/portfolio-modern-four');
    }

    public function portfolioModernFive()
    {
        return $this->render('/pages/portfolio-modern-five');
    }

    public function portfolioModernSix()
    {
        return $this->render('/pages/portfolio-modern-six');
    }

    public function portfolioClassicTwo()
    {
        return $this->render('/pages/portfolio-classic-two');
    }

    public function portfolioClassicThree()
    {
        return $this->render('/pages/portfolio-classic-three');
    }

    public function portfolioClassicFour()
    {
        return $this->render('/pages/portfolio-classic-four');
    }

    public function portfolioClassicFive()
    {
        return $this->render('/pages/portfolio-classic-five');
    }

    public function portfolioClassicSix()
    {
        return $this->render('/pages/portfolio-classic-six');
    }

    public function portfolioCreativeTwo()
    {
        return $this->render('/pages/portfolio-creative-two');
    }

    public function portfolioCreativeThree()
    {
        return $this->render('/pages/portfolio-creative-three');
    }

    public function portfolioCreativeFour()
    {
        return $this->render('/pages/portfolio-creative-four');
    }

    public function portfolioCreativeFive()
    {
        return $this->render('/pages/portfolio-creative-five');
    }

    public function portfolioCreativeSix()
    {
        return $this->render('/pages/portfolio-creative-six');
    }

    public function portfolioMasonryTwo()
    {
        return $this->render('/pages/portfolio-masonry-two');
    }

    public function portfolioMasonryThree()
    {
        return $this->render('/pages/portfolio-masonry-three');
    }

    public function portfolioMasonryFour()
    {
        return $this->render('/pages/portfolio-masonry-four');
    }

    public function portfolioMasonryFive()
    {
        return $this->render('/pages/portfolio-masonry-five');
    }

    public function portfolioMasonrySix()
    {
        return $this->render('/pages/portfolio-masonry-six');
    }

    public function blogs()
    {
        return $this->render('/pages/blogs');
    }

    public function blogSidebar()
    {
        return $this->render('/pages/blog-sidebar');
    }

    public function blogGalleryPost()
    {
        return $this->render('/pages/blog-gallery-post');
    }

    public function blogSliderPost()
    {
        return $this->render('/pages/blog-slider-post');
    }

    public function blogLinkPost()
    {
        return $this->render('/pages/blog-link-post');
    }

    public function blogStoryPost()
    {
        return $this->render('/pages/blog-story-post');
    }

    public function blogYoutubePost()
    {
        return $this->render('/pages/blog-youtube-post');
    }

    public function blogHtmlVideoPost()
    {
        return $this->render('/pages/blog-html-video-post');
    }

    public function blogAudioPost()
    {
        return $this->render('/pages/blog-audio-post');
    }

    public function blogHtmlAudio()
    {
        return $this->render('/pages/blog-html-audio');
    }
    
    public function blogBlockquotePost()
    {
        return $this->render('/pages/blog-blockquote-post');
    }

    public function blogVimeoPost()
    {
        return $this->render('/pages/blog-vimeo-post');
    }

    public function blogLeftSidebarPost()
    {
        return $this->render('/pages/blog-left-sidebar-post');
    }

    public function contactus()
    {
        return $this->render('/pages/contactus');
    }
}
