import { createRouter, createWebHistory } from 'vue-router'
import 'bootstrap/dist/css/bootstrap.min.css'
import '@/assets/scss/style.scss'
import '@mdi/font/css/materialdesignicons.min.css';
import IndexBusiness from '@/pages/index/index-business.vue'
import IndexSaas from '@/pages/index/index-saas.vue';
import IndexConsulting from '@/pages/index/index-consulting.vue';
import IndexCryptocurrency from '@/pages/index/index-cryptocurrency.vue';
import IndexDigitalMarketing from '@/pages/index/index-digital-marketing.vue';
import IndexFinance from '@/pages/index/index-finance.vue';
import IndexItSolution from '@/pages/index/index-it-solution.vue';
import IndexHospital from '@/pages/index/index-hospital.vue';
import IndexNft from '@/pages/index/index-nft.vue';
import IndexMinimalPortfolio from '@/pages/index/index-minimal-portfolio.vue';
import IndexWebHosting from '@/pages/index/index-web-hosting.vue';
import IndexYoga from '@/pages/index/index-yoga.vue';
import IndexCharity from '@/pages/index/index-charity.vue';
import Aboutus from '@/pages/inner-page/about-us.vue';
import ServicesPage from '@/pages/inner-page/services-page.vue';
import ServiceDetail from '@/pages/inner-page/service-detail.vue';
import PricingPage from '@/pages/inner-page/pricing-page.vue';
import TeamPage from '@/pages/inner-page/team-page.vue';
import TestimonialPage from '@/pages/inner-page/testimonial-page.vue';
import FaqsPage from '@/pages/inner-page/faqs-page.vue';
import NftExplore from '@/pages/nft/nft-explore.vue';
import NftDetail from '@/pages/nft/nft-detail.vue';
import CollectionPage from '@/pages/nft/collection-page.vue';
import WalletPage from '@/pages/nft/wallet-page.vue';
import UploadItem from '@/pages/nft/upload-item.vue';
import CreatorsPage from '@/pages/nft/creators-page.vue';
import CreatorProfile from '@/pages/nft/creator-profile.vue';
import ProfileSetting from '@/pages/nft/profile-setting.vue';
import LoginPage from '@/pages/auth/login-page.vue';
import SignupPage from '@/pages/auth/signup-page.vue';
import ResetPassword from '@/pages/auth/reset-password.vue';
import LockScreen from '@/pages/auth/lock-screen.vue';
import TermsPage from '@/pages/utility/terms-page.vue';
import PrivacyPage from '@/pages/utility/privacy-page.vue';
import ComingsoonPage from '@/pages/special/comingsoon-page.vue';
import MaintenancePage from '@/pages/special/maintenance-page.vue';
import ErrorPage from '@/pages/special/error-page.vue';
import PortfolioModernTwo from '@/pages/portfolio/modern/portfolio-modern-two.vue';
import PortfolioModernThree from '@/pages/portfolio/modern/portfolio-modern-three.vue';
import PortfolioModernFour from '@/pages/portfolio/modern/portfolio-modern-four.vue';
import PortfolioModernFive from '@/pages/portfolio/modern/portfolio-modern-five.vue';
import PortfolioModernSix from '@/pages/portfolio/modern/portfolio-modern-six.vue';
import PortfolioClassicTwo from '@/pages/portfolio/classic/portfolio-classic-two.vue';
import PortfolioClassicThree from '@/pages/portfolio/classic/portfolio-classic-three.vue';
import PortfolioClassicFour from '@/pages/portfolio/classic/portfolio-classic-four.vue';
import PortfolioClassicFive from '@/pages/portfolio/classic/portfolio-classic-five.vue';
import PortfolioClassicSix from '@/pages/portfolio/classic/portfolio-classic-six.vue';
import PortfolioCreativeTwo from '@/pages/portfolio/creative/portfolio-creative-two.vue';
import PortfolioCreativeThree from '@/pages/portfolio/creative/portfolio-creative-three.vue';
import PortfolioCreativeFour from '@/pages/portfolio/creative/portfolio-creative-four.vue';
import PortfolioCreativeFive from '@/pages/portfolio/creative/portfolio-creative-five.vue';
import PortfolioCreativeSix from '@/pages/portfolio/creative/portfolio-creative-six.vue';
import PortfolioMasonryTwo from '@/pages/portfolio/masonry/portfolio-masonry-two.vue';
import PortfolioMasonryThree from '@/pages/portfolio/masonry/portfolio-masonry-three.vue';
import PortfolioMasonryFour from '@/pages/portfolio/masonry/portfolio-masonry-four.vue';
import PortfolioMasonryFive from '@/pages/portfolio/masonry/portfolio-masonry-five.vue';
import PortfolioMasonrySix from '@/pages/portfolio/masonry/portfolio-masonry-six.vue';
import PortfolioDetail from '@/pages/portfolio/portfolio-detail.vue';
import PortfolioDetailTwo from '@/pages/portfolio/portfolio-detail-two.vue';
import BlogsPage from '@/pages/blog/blogs-page.vue';
import BlogSidebar from '@/pages/blog/blog-sidebar.vue';
import BlogStandardPost from '@/pages/blog/blog-standard-post.vue';
import BlogGalleryPost from '@/pages/blog/blog-gallery-post.vue';
import BlogSliderPost from '@/pages/blog/blog-slider-post.vue';
import BlogLinkPost from '@/pages/blog/blog-link-post.vue';
import BlogStoryPost from '@/pages/blog/blog-story-post.vue';
import BlogYoutubePost from '@/pages/blog/blog-youtube-post.vue';
import BlogHtmlVideoPost from '@/pages/blog/blog-html-video-post.vue';
import BlogAudioPost from '@/pages/blog/blog-audio-post.vue';
import BlogHtmlAudio from '@/pages/blog/blog-html-audio.vue';
import BlogBlockquotePost from '@/pages/blog/blog-blockquote-post.vue';
import BlogVimeoPost from '@/pages/blog/blog-vimeo-post.vue';
import BlogLeftSidebarPost from '@/pages/blog/blog-left-sidebar-post.vue';
import ContactUs from '@/pages/inner-page/contact-us.vue';

const routes = [
  { path: '/', name: 'home', component: IndexBusiness},
  { path: '/index-saas', name: 'index-saas', component: IndexSaas},
  { path: '/index-consulting', name: 'index-consulting', component: IndexConsulting},
  { path: '/index-cryptocurrency', name: 'index-cryptocurrency', component: IndexCryptocurrency},
  { path: '/index-digital-marketing', name: 'index-digital-marketing', component: IndexDigitalMarketing},
  { path: '/index-finance', name: 'index-finance', component: IndexFinance},
  { path: '/index-it-solution', name: 'index-it-solution', component: IndexItSolution},
  { path: '/index-hospital', name: 'index-hospital', component:IndexHospital},
  { path: '/index-nft', name: 'index-nft', component:IndexNft},
  { path: '/index-minimal-portfolio', name: 'index-minimal-portfolio', component:IndexMinimalPortfolio},
  { path: '/index-web-hosting', name: 'index-web-hosting', component:IndexWebHosting},
  { path: '/index-yoga', name: 'index-yoga', component:IndexYoga},
  { path: '/index-charity', name: 'index-charity', component:IndexCharity},
  { path: '/aboutus', name: 'aboutus', component:Aboutus},
  { path: '/services', name: 'services', component:ServicesPage},
  { path: '/service-detail', name: 'service-detail', component:ServiceDetail},
  { path: '/pricing', name: 'pricing', component:PricingPage},
  { path: '/team', name: 'team', component:TeamPage},
  { path: '/testimonial', name: 'testimonial', component:TestimonialPage},
  { path: '/faqs', name: 'faqs', component:FaqsPage},
  { path: '/nft-explore', name: 'nft-explore', component:NftExplore},
  { path: '/nft-detail', name: 'nft-detail', component:NftDetail},
  { path: '/nft-detail/:id', name: 'nft-detail-id', component:NftDetail},
  { path: '/collection', name: 'collection', component:CollectionPage},
  { path: '/wallet', name: 'wallet', component:WalletPage},
  { path: '/upload-item', name: 'upload-item', component:UploadItem},
  { path: '/creators', name: 'creators', component:CreatorsPage},
  { path: '/creator-profile', name: 'creator-profile', component:CreatorProfile},
  { path: '/profile-setting', name: 'profile-setting', component:ProfileSetting},
  { path: '/login', name: 'login', component:LoginPage},
  { path: '/signup', name: 'signup', component:SignupPage},
  { path: '/reset-password', name: 'reset-password', component:ResetPassword},
  { path: '/lock-screen', name: 'lock-screen', component:LockScreen},
  { path: '/terms', name: 'terms', component:TermsPage},
  { path: '/privacy', name: 'privacy', component:PrivacyPage},
  { path: '/comingsoon', name: 'comingsoon', component:ComingsoonPage},
  { path: '/maintenance', name: 'maintenance', component:MaintenancePage},
  { path: '/error', name: 'error', component:ErrorPage},
  { path: '/portfolio-modern-two', name: 'portfolio-modern-two', component:PortfolioModernTwo},
  { path: '/portfolio-modern-three', name: 'portfolio-modern-three', component:PortfolioModernThree},
  { path: '/portfolio-modern-four', name: 'portfolio-modern-four', component:PortfolioModernFour},
  { path: '/portfolio-modern-five', name: 'portfolio-modern-five', component:PortfolioModernFive},
  { path: '/portfolio-modern-six', name: 'portfolio-modern-six', component:PortfolioModernSix},
  { path: '/portfolio-classic-two', name: 'portfolio-classic-two', component:PortfolioClassicTwo},
  { path: '/portfolio-classic-three', name: 'portfolio-classic-three', component:PortfolioClassicThree},
  { path: '/portfolio-classic-four', name: 'portfolio-classic-four', component:PortfolioClassicFour},
  { path: '/portfolio-classic-five', name: 'portfolio-classic-five', component:PortfolioClassicFive},
  { path: '/portfolio-classic-six', name: 'portfolio-classic-six', component:PortfolioClassicSix},
  { path: '/portfolio-creative-two', name: 'portfolio-creative-two', component:PortfolioCreativeTwo},
  { path: '/portfolio-creative-three', name: 'portfolio-creative-three', component:PortfolioCreativeThree},
  { path: '/portfolio-creative-four', name: 'portfolio-creative-four', component:PortfolioCreativeFour},
  { path: '/portfolio-creative-five', name: 'portfolio-creative-five', component:PortfolioCreativeFive},
  { path: '/portfolio-creative-six', name: 'portfolio-creative-six', component:PortfolioCreativeSix},
  { path: '/portfolio-masonry-two', name: 'portfolio-masonry-two', component:PortfolioMasonryTwo},
  { path: '/portfolio-masonry-three', name: 'portfolio-masonry-three', component:PortfolioMasonryThree},
  { path: '/portfolio-masonry-four', name: 'portfolio-masonry-four', component:PortfolioMasonryFour},
  { path: '/portfolio-masonry-five', name: 'portfolio-masonry-five', component:PortfolioMasonryFive},
  { path: '/portfolio-masonry-six', name: 'portfolio-masonry-six', component:PortfolioMasonrySix},
  { path: '/portfolio-detail', name: 'portfolio-detail', component:PortfolioDetail},
  { path: '/portfolio-detail-two', name: 'portfolio-detail-two', component:PortfolioDetailTwo},
  { path: '/blogs', name: 'blogs', component:BlogsPage},
  { path: '/blog-sidebar', name: 'blog-sidebar', component:BlogSidebar},
  { path: '/blog-standard-post', name: 'blog-standard-post', component:BlogStandardPost},
  { path: '/blog-standard-post/:id', name: 'blog-standard-post/:id', component:BlogStandardPost},
  { path: '/blog-gallery-post', name: 'blog-gallery-post', component:BlogGalleryPost},
  { path: '/blog-slider-post', name: 'blog-slider-post', component:BlogSliderPost},
  { path: '/blog-link-post', name: 'blog-link-post', component:BlogLinkPost},
  { path: '/blog-story-post', name: 'blog-story-post', component:BlogStoryPost},
  { path: '/blog-youtube-post', name: 'blog-youtube-post', component:BlogYoutubePost},
  { path: '/blog-html-video-post', name: 'blog-html-video-post', component:BlogHtmlVideoPost},
  { path: '/blog-audio-post', name: 'blog-audio-post', component:BlogAudioPost},
  { path: '/blog-html-audio', name: 'blog-html-audio', component:BlogHtmlAudio},
  { path: '/blog-blockquote-post', name: 'blog-blockquote-post', component:BlogBlockquotePost},
  { path: '/blog-vimeo-post', name: 'blog-vimeo-post', component:BlogVimeoPost},
  { path: '/blog-left-sidebar-post', name: 'blog-left-sidebar-post', component:BlogLeftSidebarPost},
  { path: '/contactus', name: 'contactus', component:ContactUs},
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
