<script>
// @ts-nocheck

    import { Router, Route, useLocation  } from "svelte-routing";
    import IndexBusiness from "./pages/index/index-business.svelte";

    import { onMount, tick } from 'svelte';
    import Tobii from 'tobii';
    import '../node_modules/tobii/dist/css/tobii.min.css';
    import ScrollToTop from "./components/scroll-to-top.svelte";
    import IndexSaas from "./pages/index/index-saas.svelte";
    import IndexConsulting from "./pages/index/index-consulting.svelte";
    import IndexCryptocurrency from "./pages/index/index-cryptocurrency.svelte";
    import IndexDigitalMarketing from "./pages/index/index-digital-marketing.svelte";
    import IndexFinance from "./pages/index/index-finance.svelte";
    import IndexItSolution from "./pages/index/index-it-solution.svelte";
    import IndexHospital from "./pages/index/index-hospital.svelte";
    import IndexNft from "./pages/index/index-nft.svelte";
    import IndexMinimalPortfolio from "./pages/index/index-minimal-portfolio.svelte";
    import IndexWebHosting from "./pages/index/index-web-hosting.svelte";
    import IndexYoga from "./pages/index/index-yoga.svelte";
    import IndexCharity from "./pages/index/index-charity.svelte";
    import Aboutus from "./pages/inner-pages/aboutus.svelte";
    import Services from "./pages/inner-pages/services.svelte";
    import ServiceDetail from "./pages/inner-pages/service-detail.svelte";
    import Pricing from "./pages/inner-pages/pricing.svelte";
    import Team from "./pages/inner-pages/team.svelte";
    import Testimonial from "./pages/inner-pages/testimonial.svelte";
    import Faqs from "./pages/inner-pages/faqs.svelte";
    import NftExplore from "./pages/nft/nft-explore.svelte";
    import NftDetail from "./pages/nft/nft-detail.svelte";
    import Collection from "./pages/nft/collection.svelte";
    import Wallet from "./pages/nft/wallet.svelte";
    import UploadItem from "./pages/nft/upload-item.svelte";
    import Creators from "./pages/nft/creators.svelte";
    import CreatorProfile from "./pages/nft/creator-profile.svelte";
    import ProfileSetting from "./pages/nft/profile-setting.svelte";
    import Login from "./pages/auth/login.svelte";
    import Signup from "./pages/auth/signup.svelte";
    import ResetPassword from "./pages/auth/reset-password.svelte";
    import LockScreen from "./pages/auth/lock-screen.svelte";
    import Terms from "./pages/utility/terms.svelte";
    import Privacy from "./pages/utility/privacy.svelte";
    import Comingsoon from "./pages/special/comingsoon.svelte";
    import Maintenance from "./pages/special/maintenance.svelte";
    import Error from "./pages/special/error.svelte";
    import PortfolioModernTwo from "./pages/portfolio/modern/portfolio-modern-two.svelte";
    import PortfolioModernThree from "./pages/portfolio/modern/portfolio-modern-three.svelte";
    import PortfolioModernFour from "./pages/portfolio/modern/portfolio-modern-four.svelte";
    import PortfolioModernFive from "./pages/portfolio/modern/portfolio-modern-five.svelte";
    import PortfolioModernSix from "./pages/portfolio/modern/portfolio-modern-six.svelte";
    import PortfolioClassicTwo from "./pages/portfolio/classic/portfolio-classic-two.svelte";
    import PortfolioClassicThree from "./pages/portfolio/classic/portfolio-classic-three.svelte";
    import PortfolioClassicFour from "./pages/portfolio/classic/portfolio-classic-four.svelte";
    import PortfolioClassicFive from "./pages/portfolio/classic/portfolio-classic-five.svelte";
    import PortfolioClassicSix from "./pages/portfolio/classic/portfolio-classic-six.svelte";
    import PortfolioCreativeTwo from "./pages/portfolio/creative/portfolio-creative-two.svelte";
    import PortfolioCreativeThree from "./pages/portfolio/creative/portfolio-creative-three.svelte";
    import PortfolioCreativeFour from "./pages/portfolio/creative/portfolio-creative-four.svelte";
    import PortfolioCreativeFive from "./pages/portfolio/creative/portfolio-creative-five.svelte";
    import PortfolioCreativeSix from "./pages/portfolio/creative/portfolio-creative-six.svelte";
    import PortfolioMasonryTwo from "./pages/portfolio/masonry/portfolio-masonry-two.svelte";
    import PortfolioMasonryThree from "./pages/portfolio/masonry/portfolio-masonry-three.svelte";
    import PortfolioMasonryFour from "./pages/portfolio/masonry/portfolio-masonry-four.svelte";
    import PortfolioMasonryFive from "./pages/portfolio/masonry/portfolio-masonry-five.svelte";
    import PortfolioMasonrySix from "./pages/portfolio/masonry/portfolio-masonry-six.svelte";
    import PortfolioDetail from "./pages/portfolio/portfolio-detail.svelte";
    import PortfolioDetailTwo from "./pages/portfolio/portfolio-detail-two.svelte";
    import Blogs from "./pages/blog/blogs.svelte";
    import BlogSidebar from "./pages/blog/blog-sidebar.svelte";
    import BlogStandardPost from "./pages/blog/blog-standard-post.svelte";
    import BlogGalleryPost from "./pages/blog/blog-gallery-post.svelte";
    import BlogSliderPost from "./pages/blog/blog-slider-post.svelte";
    import BlogLinkPost from "./pages/blog/blog-link-post.svelte";
    import BlogStoryPost from "./pages/blog/blog-story-post.svelte";
    import BlogYoutubePost from "./pages/blog/blog-youtube-post.svelte";
    import BlogHtmlVideoPost from "./pages/blog/blog-html-video-post.svelte";
    import BlogAudioPost from "./pages/blog/blog-audio-post.svelte";
    import BlogHtmlAudio from "./pages/blog/blog-html-audio.svelte";
    import BlogBlockquotePost from "./pages/blog/blog-blockquote-post.svelte";
    import BlogVimeoPost from "./pages/blog/blog-vimeo-post.svelte";
    import BlogLeftSidebarPost from "./pages/blog/blog-left-sidebar-post.svelte";
    import Contactus from "./pages/inner-pages/contactus.svelte";

    let tobii;

    onMount(() => {
        tobii = new Tobii();
    });

</script>

<main>
    <Router>
        <Route path="/"><IndexBusiness/></Route>
        <Route path="/index-saas"><IndexSaas/></Route>
        <Route path="/index-consulting"><IndexConsulting/></Route>
        <Route path="/index-cryptocurrency"><IndexCryptocurrency/></Route>
        <Route path="/index-digital-marketing"><IndexDigitalMarketing/></Route>
        <Route path="/index-finance"><IndexFinance/></Route>
        <Route path="/index-it-solution"><IndexItSolution/></Route>
        <Route path="/index-hospital"><IndexHospital/></Route>
        <Route path="/index-nft"><IndexNft/></Route>
        <Route path="/index-minimal-portfolio"><IndexMinimalPortfolio/></Route>
        <Route path="/index-web-hosting"><IndexWebHosting/></Route>
        <Route path="/index-yoga"><IndexYoga/></Route>
        <Route path="/index-charity"><IndexCharity/></Route>
        <Route path="/aboutus"><Aboutus/></Route>
        <Route path="/services"><Services/></Route>
        <Route path="/service-detail"><ServiceDetail/></Route>
        <Route path="/pricing"><Pricing/></Route>
        <Route path="/team"><Team/></Route>
        <Route path="/testimonial"><Testimonial/></Route>
        <Route path="/faqs"><Faqs/></Route>
        <Route path="/nft-explore"><NftExplore/></Route>
        <Route path="/nft-detail"><NftDetail/></Route>
        <Route path="/nft-detail/:id" let:params><NftDetail id={params.id}/></Route>
        <Route path="/collection"><Collection/></Route>
        <Route path="/wallet"><Wallet/></Route>
        <Route path="/upload-item"><UploadItem/></Route>
        <Route path="/creators"><Creators/></Route>
        <Route path="/creator-profile"><CreatorProfile/></Route>
        <Route path="/profile-setting"><ProfileSetting/></Route>
        <Route path="/login"><Login/></Route>
        <Route path="/signup"><Signup/></Route>
        <Route path="/reset-password"><ResetPassword/></Route>
        <Route path="/lock-screen"><LockScreen/></Route>
        <Route path="/terms"><Terms/></Route>
        <Route path="/privacy"><Privacy/></Route>
        <Route path="/comingsoon"><Comingsoon/></Route>
        <Route path="/maintenance"><Maintenance/></Route>
        <Route path="/error"><Error/></Route>
        <Route path="/portfolio-modern-two"><PortfolioModernTwo/></Route>
        <Route path="/portfolio-modern-three"><PortfolioModernThree/></Route>
        <Route path="/portfolio-modern-four"><PortfolioModernFour/></Route>
        <Route path="/portfolio-modern-five"><PortfolioModernFive/></Route>
        <Route path="/portfolio-modern-six"><PortfolioModernSix/></Route>
        <Route path="/portfolio-classic-two"><PortfolioClassicTwo/></Route>
        <Route path="/portfolio-classic-three"><PortfolioClassicThree/></Route>
        <Route path="/portfolio-classic-four"><PortfolioClassicFour/></Route>
        <Route path="/portfolio-classic-five"><PortfolioClassicFive/></Route>
        <Route path="/portfolio-classic-six"><PortfolioClassicSix/></Route>
        <Route path="/portfolio-creative-two"><PortfolioCreativeTwo/></Route>
        <Route path="/portfolio-creative-three"><PortfolioCreativeThree/></Route>
        <Route path="/portfolio-creative-four"><PortfolioCreativeFour/></Route>
        <Route path="/portfolio-creative-five"><PortfolioCreativeFive/></Route>
        <Route path="/portfolio-creative-six"><PortfolioCreativeSix/></Route>
        <Route path="/portfolio-masonry-two"><PortfolioMasonryTwo/></Route>
        <Route path="/portfolio-masonry-three"><PortfolioMasonryThree/></Route>
        <Route path="/portfolio-masonry-four"><PortfolioMasonryFour/></Route>
        <Route path="/portfolio-masonry-five"><PortfolioMasonryFive/></Route>
        <Route path="/portfolio-masonry-six"><PortfolioMasonrySix/></Route>
        <Route path="/portfolio-detail"><PortfolioDetail/></Route>
        <Route path="/portfolio-detail-two"><PortfolioDetailTwo/></Route>
        <Route path="/blogs"><Blogs/></Route>
        <Route path="/blog-sidebar"><BlogSidebar/></Route>
        <Route path="/blog-standard-post"><BlogStandardPost/></Route>
        <Route path="/blog-standard-post/:id" let:params><BlogStandardPost id={params.id}/></Route>
        <Route path="/blog-gallery-post"><BlogGalleryPost/></Route>
        <Route path="/blog-slider-post"><BlogSliderPost/></Route>
        <Route path="/blog-link-post"><BlogLinkPost/></Route>
        <Route path="/blog-story-post"><BlogStoryPost/></Route>
        <Route path="/blog-youtube-post"><BlogYoutubePost/></Route>
        <Route path="/blog-html-video-post"><BlogHtmlVideoPost/></Route>
        <Route path="/blog-audio-post"><BlogAudioPost/></Route>
        <Route path="/blog-html-audio"><BlogHtmlAudio/></Route>
        <Route path="/blog-blockquote-post"><BlogBlockquotePost/></Route>
        <Route path="/blog-vimeo-post"><BlogVimeoPost/></Route>
        <Route path="/blog-left-sidebar-post"><BlogLeftSidebarPost/></Route>
        <Route path="/contactus"><Contactus/></Route>
    </Router>
    
    <ScrollToTop/>

</main>

