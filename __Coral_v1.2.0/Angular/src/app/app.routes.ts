import { Routes } from '@angular/router';
import { IndexBusiness } from './page/index/index-business/index-business';
import { IndexSaas } from './page/index/index-saas/index-saas';
import { IndexConsulting } from './page/index/index-consulting/index-consulting';
import { IndexCryptocurrency } from './page/index/index-cryptocurrency/index-cryptocurrency';
import { IndexDigitalMarketing } from './page/index/index-digital-marketing/index-digital-marketing';
import { IndexFinance } from './page/index/index-finance/index-finance';
import { IndexItSolution } from './page/index/index-it-solution/index-it-solution';
import { IndexHospital } from './page/index/index-hospital/index-hospital';
import { IndexNft } from './page/index/index-nft/index-nft';
import { IndexMinimalPortfolio } from './page/index/index-minimal-portfolio/index-minimal-portfolio';
import { IndexWebHosting } from './page/index/index-web-hosting/index-web-hosting';
import { IndexYoga } from './page/index/index-yoga/index-yoga';
import { IndexCharity } from './page/index/index-charity/index-charity';
import { Aboutus } from './page/inner-page/aboutus/aboutus';
import { Services } from './page/inner-page/services/services';
import { ServiceDetail } from './page/inner-page/service-detail/service-detail';
import { Pricing } from './page/inner-page/pricing/pricing';
import { Team } from './page/inner-page/team/team';
import { Testimonial } from './page/inner-page/testimonial/testimonial';
import { Faqs } from './page/inner-page/faqs/faqs';
import { NftExplore } from './page/nft/nft-explore/nft-explore';
import { NftDetail } from './page/nft/nft-detail/nft-detail';
import { Collection } from './page/nft/collection/collection';
import { Wallet } from './page/nft/wallet/wallet';
import { UploadItem } from './page/nft/upload-item/upload-item';
import { Creators } from './page/nft/creators/creators';
import { CreatorProfile } from './page/nft/creator-profile/creator-profile';
import { ProfileSetting } from './page/nft/profile-setting/profile-setting';
import { Login } from './page/auth/login/login';
import { Signup } from './page/auth/signup/signup';
import { ResetPassword } from './page/auth/reset-password/reset-password';
import { LockScreen } from './page/auth/lock-screen/lock-screen';
import { Terms } from './page/utility/terms/terms';
import { Privacy } from './page/utility/privacy/privacy';
import { Comingsoon } from './page/special/comingsoon/comingsoon';
import { Maintenance } from './page/special/maintenance/maintenance';
import { Error } from './page/special/error/error';
import { PortfolioModernTwo } from './page/portfolio/modern/portfolio-modern-two/portfolio-modern-two';
import { PortfolioModernThree } from './page/portfolio/modern/portfolio-modern-three/portfolio-modern-three';
import { PortfolioModernFour } from './page/portfolio/modern/portfolio-modern-four/portfolio-modern-four';
import { PortfolioModernFive } from './page/portfolio/modern/portfolio-modern-five/portfolio-modern-five';
import { PortfolioModernSix } from './page/portfolio/modern/portfolio-modern-six/portfolio-modern-six';
import { PortfolioClassicSix } from './page/portfolio/classic/portfolio-classic-six/portfolio-classic-six';
import { PortfolioClassicTwo } from './page/portfolio/classic/portfolio-classic-two/portfolio-classic-two';
import { PortfolioClassicThree } from './page/portfolio/classic/portfolio-classic-three/portfolio-classic-three';
import { PortfolioClassicFour } from './page/portfolio/classic/portfolio-classic-four/portfolio-classic-four';
import { PortfolioClassicFive } from './page/portfolio/classic/portfolio-classic-five/portfolio-classic-five';
import { PortfolioCreativeTwo } from './page/portfolio/creative/portfolio-creative-two/portfolio-creative-two';
import { PortfolioCreativeThree } from './page/portfolio/creative/portfolio-creative-three/portfolio-creative-three';
import { PortfolioCreativeFour } from './page/portfolio/creative/portfolio-creative-four/portfolio-creative-four';
import { PortfolioCreativeFive } from './page/portfolio/creative/portfolio-creative-five/portfolio-creative-five';
import { PortfolioCreativeSix } from './page/portfolio/creative/portfolio-creative-six/portfolio-creative-six';
import { PortfolioMasonryTwo } from './page/portfolio/masonry/portfolio-masonry-two/portfolio-masonry-two';
import { PortfolioMasonryThree } from './page/portfolio/masonry/portfolio-masonry-three/portfolio-masonry-three';
import { PortfolioMasonryFour } from './page/portfolio/masonry/portfolio-masonry-four/portfolio-masonry-four';
import { PortfolioMasonryFive } from './page/portfolio/masonry/portfolio-masonry-five/portfolio-masonry-five';
import { PortfolioMasonrySix } from './page/portfolio/masonry/portfolio-masonry-six/portfolio-masonry-six';
import { PortfolioDetail } from './page/portfolio/portfolio-detail/portfolio-detail';
import { PortfolioDetailTwo } from './page/portfolio/portfolio-detail-two/portfolio-detail-two';
import { Blogs } from './page/blog/blogs/blogs';
import { BlogSidebar } from './page/blog/blog-sidebar/blog-sidebar';
import { BlogStandardPost } from './page/blog/blog-standard-post/blog-standard-post';
import { BlogGalleryPost } from './page/blog/blog-gallery-post/blog-gallery-post';
import { BlogSliderPost } from './page/blog/blog-slider-post/blog-slider-post';
import { BlogLinkPost } from './page/blog/blog-link-post/blog-link-post';
import { BlogStoryPost } from './page/blog/blog-story-post/blog-story-post';
import { BlogYoutubePost } from './page/blog/blog-youtube-post/blog-youtube-post';
import { BlogHtmlVideoPost } from './page/blog/blog-html-video-post/blog-html-video-post';
import { BlogAudioPost } from './page/blog/blog-audio-post/blog-audio-post';
import { BlogHtmlAudio } from './page/blog/blog-html-audio/blog-html-audio';
import { BlogBlockquotePost } from './page/blog/blog-blockquote-post/blog-blockquote-post';
import { BlogVimeoPost } from './page/blog/blog-vimeo-post/blog-vimeo-post';
import { BlogLeftSidebarPost } from './page/blog/blog-left-sidebar-post/blog-left-sidebar-post';
import { Contactus } from './page/inner-page/contactus/contactus';

export const routes: Routes = [
    {path:'', component:IndexBusiness},
    {path:'index-saas', component:IndexSaas},
    {path:'index-consulting', component:IndexConsulting},
    {path:'index-cryptocurrency', component:IndexCryptocurrency},
    {path:'index-digital-marketing', component:IndexDigitalMarketing},
    {path:'index-finance', component:IndexFinance},
    {path:'index-it-solution', component:IndexItSolution},
    {path:'index-hospital', component:IndexHospital},
    {path:'index-nft', component:IndexNft},
    {path:'index-minimal-portfolio', component:IndexMinimalPortfolio},
    {path:'index-web-hosting', component:IndexWebHosting},
    {path:'index-yoga', component:IndexYoga},
    {path:'index-charity', component:IndexCharity},
    {path:'aboutus', component:Aboutus},
    {path:'services', component:Services},
    {path:'service-detail', component:ServiceDetail},
    {path:'pricing', component:Pricing},
    {path:'team', component:Team},
    {path:'testimonial', component:Testimonial},
    {path:'faqs', component:Faqs},
    {path:'nft-explore', component:NftExplore},
    {path:'nft-detail', component:NftDetail},
    {path:'nft-detail/:id', component:NftDetail},
    {path:'collection', component:Collection},
    {path:'wallet', component:Wallet},
    {path:'upload-item', component:UploadItem},
    {path:'creators', component:Creators},
    {path:'creator-profile', component:CreatorProfile},
    {path:'profile-setting', component:ProfileSetting},
    {path:'login', component:Login},
    {path:'signup', component:Signup},
    {path:'reset-password', component:ResetPassword},
    {path:'lock-screen', component:LockScreen},
    {path:'terms', component:Terms},
    {path:'privacy', component:Privacy},
    {path:'comingsoon', component:Comingsoon},
    {path:'maintenance', component:Maintenance},
    {path:'error', component:Error},
    {path:'portfolio-modern-two', component:PortfolioModernTwo},
    {path:'portfolio-modern-three', component:PortfolioModernThree},
    {path:'portfolio-modern-four', component:PortfolioModernFour},
    {path:'portfolio-modern-five', component:PortfolioModernFive},
    {path:'portfolio-modern-six', component:PortfolioModernSix},
    {path:'portfolio-classic-two', component:PortfolioClassicTwo},
    {path:'portfolio-classic-three', component:PortfolioClassicThree},
    {path:'portfolio-classic-four', component:PortfolioClassicFour},
    {path:'portfolio-classic-five', component:PortfolioClassicFive},
    {path:'portfolio-classic-six', component:PortfolioClassicSix},
    {path:'portfolio-creative-two', component:PortfolioCreativeTwo},
    {path:'portfolio-creative-three', component:PortfolioCreativeThree},
    {path:'portfolio-creative-four', component:PortfolioCreativeFour},
    {path:'portfolio-creative-five', component:PortfolioCreativeFive},
    {path:'portfolio-creative-six', component:PortfolioCreativeSix},
    {path:'portfolio-masonry-two', component:PortfolioMasonryTwo},
    {path:'portfolio-masonry-three', component:PortfolioMasonryThree},
    {path:'portfolio-masonry-four', component:PortfolioMasonryFour},
    {path:'portfolio-masonry-five', component:PortfolioMasonryFive},
    {path:'portfolio-masonry-six', component:PortfolioMasonrySix},
    {path:'portfolio-detail', component:PortfolioDetail},
    {path:'portfolio-detail-two', component:PortfolioDetailTwo},
    {path:'blogs', component:Blogs},
    {path:'blog-sidebar', component:BlogSidebar},
    {path:'blog-standard-post', component:BlogStandardPost},
    {path:'blog-standard-post/:id', component:BlogStandardPost},
    {path:'blog-gallery-post', component:BlogGalleryPost},
    {path:'blog-slider-post', component:BlogSliderPost},
    {path:'blog-link-post', component:BlogLinkPost},
    {path:'blog-story-post', component:BlogStoryPost},
    {path:'blog-youtube-post', component:BlogYoutubePost},
    {path:'blog-html-video-post', component:BlogHtmlVideoPost},
    {path:'blog-audio-post', component:BlogAudioPost},
    {path:'blog-html-audio', component:BlogHtmlAudio},
    {path:'blog-blockquote-post', component:BlogBlockquotePost},
    {path:'blog-vimeo-post', component:BlogVimeoPost},
    {path:'blog-left-sidebar-post', component:BlogLeftSidebarPost},
    {path:'contactus', component:Contactus},
];
