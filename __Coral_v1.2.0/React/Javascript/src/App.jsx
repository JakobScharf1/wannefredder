import { Route, Routes } from 'react-router-dom'
import IndexBusiness from './pages/index/index-business'
import IndexSaas from './pages/index/index-saas'
import IndexConsulting from './pages/index/index-consulting'
import IndexCryptocurrency from './pages/index/index-cryptocurrency'
import IndexDigitalMarketing from './pages/index/index-digital-marketing'
import IndexFinance from './pages/index/index-finance'
import IndexTtSolution from './pages/index/index-it-solution'
import IndexHospital from './pages/index/index-hospital'
import IndexNft from './pages/index/index-nft'
import IndexMinimalPortfolio from './pages/index/index-minimal-portfolio'
import IndexWebHosting from './pages/index/index-web-hosting'
import IndexYoga from './pages/index/index-yoga'
import IndexCharity from './pages/index/index-charity'
import AboutUs from './pages/inner-pages/aboutus'
import Services from './pages/inner-pages/services'
import ServiceDetail from './pages/inner-pages/service-detail'
import Pricing from './pages/inner-pages/pricing'
import Team from './pages/inner-pages/team'
import Testimonial from './pages/inner-pages/testimonial'
import Faqs from './pages/inner-pages/faqs'
import NftExplore from './pages/nft/nft-explore'
import NftDetail from './pages/nft/nft-detail'
import Collection from './pages/nft/collection'
import Wallet from './pages/nft/wallet'
import UploadItem from './pages/nft/upload-item'
import Creators from './pages/nft/creators'
import CreatorProfile from './pages/nft/creator-profile'
import ProfileSetting from './pages/nft/profile-setting'
import Login from './pages/auth/login'
import Signup from './pages/auth/signup'
import ResetPassword from './pages/auth/reset-password'
import LockScreen from './pages/auth/lock-screen'
import Terms from './pages/utility/terms'
import Privacy from './pages/utility/privacy'
import Comingsoon from './pages/special/comingsoon'
import Maintenance from './pages/special/maintenance'
import Error from './pages/special/error'
import PortfolioModernTwo from './pages/portfolio/modern/portfolio-modern-two'
import PortfolioModernThree from './pages/portfolio/modern/portfolio-modern-three'
import PortfolioModernFour from './pages/portfolio/modern/portfolio-modern-four'
import PortfolioModernFive from './pages/portfolio/modern/portfolio-modern-five'
import PortfolioModernSix from './pages/portfolio/modern/portfolio-modern-six'
import PortfolioClassicTwo from './pages/portfolio/classic/portfolio-classic-two'
import PortfolioClassicThree from './pages/portfolio/classic/portfolio-classic-three'
import PortfolioClassicFour from './pages/portfolio/classic/portfolio-classic-four'
import PortfolioClassicFive from './pages/portfolio/classic/portfolio-classic-five'
import PortfolioClassicSix from './pages/portfolio/classic/portfolio-classic-six'
import PortfolioCreativeTwo from './pages/portfolio/creative/portfolio-creative-two'
import PortfolioCreativeThree from './pages/portfolio/creative/portfolio-creative-three'
import PortfolioCreativeFour from './pages/portfolio/creative/portfolio-creative-four'
import PortfolioCreativeFive from './pages/portfolio/creative/portfolio-creative-five'
import PortfolioCreativeSix from './pages/portfolio/creative/portfolio-creative-six'
import PortfolioMasonryTwo from './pages/portfolio/masonry/portfolio-masonry-two'
import PortfolioMasonryThree from './pages/portfolio/masonry/portfolio-masonry-three'
import PortfolioMasonryFour from './pages/portfolio/masonry/portfolio-masonry-four'
import PortfolioMasonryFive from './pages/portfolio/masonry/portfolio-masonry-five'
import PortfolioMasonrySix from './pages/portfolio/masonry/portfolio-masonry-six'
import PortfolioDetail from './pages/portfolio/portfolio-detail'
import PortfolioDetailTwo from './pages/portfolio/portfolio-detail-two'
import Blogs from './pages/blog/blogs'
import BlogSidebar from './pages/blog/blog-sidebar'
import BlogStandardPost from './pages/blog/blog-standard-post'
import BlogGalleryPost from './pages/blog/blog-gallery-post'
import BlogSliderPost from './pages/blog/blog-slider-post'
import BlogLinkPost from './pages/blog/blog-link-post'
import BlogStoryPost from './pages/blog/blog-story-post'
import BlogYoutubePost from './pages/blog/blog-youtube-post'
import BlogHtmlVideoPost from './pages/blog/blog-html-video-post'
import BlogAudioPost from './pages/blog/blog-audio-post'
import BlogHtmlAudio from './pages/blog/blog-html-audio'
import BlogBlockquotePost from './pages/blog/blog-blockquote-post'
import BlogVimeoPost from './pages/blog/blog-vimeo-post'
import BlogLeftSidebarPost from './pages/blog/blog-left-sidebar-post'
import Contactus from './pages/inner-pages/contactus'

function App() {

  return (
    <>
      <Routes>
        <Route path='/' element={<IndexBusiness/>}/>
        <Route path='/index-saas' element={<IndexSaas/>}/>
        <Route path='/index-consulting' element={<IndexConsulting/>}/>
        <Route path='/index-cryptocurrency' element={<IndexCryptocurrency/>}/>
        <Route path='/index-digital-marketing' element={<IndexDigitalMarketing/>}/>
        <Route path='/index-finance' element={<IndexFinance/>}/>
        <Route path='/index-it-solution' element={<IndexTtSolution/>}/>
        <Route path='/index-hospital' element={<IndexHospital/>}/>
        <Route path='/index-nft' element={<IndexNft/>}/>
        <Route path='/index-minimal-portfolio' element={<IndexMinimalPortfolio/>}/>
        <Route path='/index-web-hosting' element={<IndexWebHosting/>}/>
        <Route path='/index-yoga' element={<IndexYoga/>}/>
        <Route path='/index-charity' element={<IndexCharity/>}/>

        <Route path='/aboutus' element={<AboutUs/>}/>
        <Route path='/services' element={<Services/>}/>
        <Route path='/service-detail' element={<ServiceDetail/>}/>
        <Route path='/pricing' element={<Pricing/>}/>
        <Route path='/team' element={<Team/>}/>
        <Route path='/testimonial' element={<Testimonial/>}/>
        <Route path='/faqs' element={<Faqs/>}/>

        <Route path='/nft-explore' element={<NftExplore/>}/>
        <Route path='/nft-detail' element={<NftDetail/>}/>
        <Route path='/nft-detail/:id' element={<NftDetail/>}/>
        <Route path='/collection' element={<Collection/>}/>
        <Route path='/wallet' element={<Wallet/>}/>
        <Route path='/upload-item' element={<UploadItem/>}/>
        <Route path='/creators' element={<Creators/>}/>
        <Route path='/creator-profile' element={<CreatorProfile/>}/>
        <Route path='/profile-setting' element={<ProfileSetting/>}/>

        <Route path='/login' element={<Login/>}/>
        <Route path='/signup' element={<Signup/>}/>
        <Route path='/reset-password' element={<ResetPassword/>}/>
        <Route path='/lock-screen' element={<LockScreen/>}/>

        <Route path='/terms' element={<Terms/>}/>
        <Route path='/privacy' element={<Privacy/>}/>

        <Route path='/comingsoon' element={<Comingsoon/>}/>
        <Route path='/maintenance' element={<Maintenance/>}/>
        <Route path='/error' element={<Error/>}/>

        <Route path='/portfolio-modern-two' element={<PortfolioModernTwo/>}/>
        <Route path='/portfolio-modern-three' element={<PortfolioModernThree/>}/>
        <Route path='/portfolio-modern-four' element={<PortfolioModernFour/>}/>
        <Route path='/portfolio-modern-five' element={<PortfolioModernFive/>}/>
        <Route path='/portfolio-modern-six' element={<PortfolioModernSix/>}/>

        <Route path='/portfolio-classic-two' element={<PortfolioClassicTwo/>}/>
        <Route path='/portfolio-classic-three' element={<PortfolioClassicThree/>}/>
        <Route path='/portfolio-classic-four' element={<PortfolioClassicFour/>}/>
        <Route path='/portfolio-classic-five' element={<PortfolioClassicFive/>}/>
        <Route path='/portfolio-classic-six' element={<PortfolioClassicSix/>}/>

        <Route path='/portfolio-creative-two' element={<PortfolioCreativeTwo/>}/>
        <Route path='/portfolio-creative-three' element={<PortfolioCreativeThree/>}/>
        <Route path='/portfolio-creative-four' element={<PortfolioCreativeFour/>}/>
        <Route path='/portfolio-creative-five' element={<PortfolioCreativeFive/>}/>
        <Route path='/portfolio-creative-six' element={<PortfolioCreativeSix/>}/>

        <Route path='/portfolio-masonry-two' element={<PortfolioMasonryTwo/>}/>
        <Route path='/portfolio-masonry-three' element={<PortfolioMasonryThree/>}/>
        <Route path='/portfolio-masonry-four' element={<PortfolioMasonryFour/>}/>
        <Route path='/portfolio-masonry-five' element={<PortfolioMasonryFive/>}/>
        <Route path='/portfolio-masonry-six' element={<PortfolioMasonrySix/>}/>

        <Route path='/portfolio-detail' element={<PortfolioDetail/>}/>
        <Route path='/portfolio-detail-two' element={<PortfolioDetailTwo/>}/>

        <Route path='/blogs' element={<Blogs/>}/>
        <Route path='/blog-sidebar' element={<BlogSidebar/>}/>
        <Route path='/blog-standard-post' element={<BlogStandardPost/>}/>
        <Route path='/blog-standard-post/:id' element={<BlogStandardPost/>}/>
        <Route path='/blog-gallery-post' element={<BlogGalleryPost/>}/>
        <Route path='/blog-slider-post' element={<BlogSliderPost/>}/>
        <Route path='/blog-link-post' element={<BlogLinkPost/>}/>
        <Route path='/blog-story-post' element={<BlogStoryPost/>}/>
        <Route path='/blog-youtube-post' element={<BlogYoutubePost/>}/>
        <Route path='/blog-html-video-post' element={<BlogHtmlVideoPost/>}/>
        <Route path='/blog-audio-post' element={<BlogAudioPost/>}/>
        <Route path='/blog-html-audio' element={<BlogHtmlAudio/>}/>
        <Route path='/blog-blockquote-post' element={<BlogBlockquotePost/>}/>
        <Route path='/blog-vimeo-post' element={<BlogVimeoPost/>}/>
        <Route path='/blog-left-sidebar-post' element={<BlogLeftSidebarPost/>}/>

        <Route path='/contactus' element={<Contactus/>}/>
      </Routes>
    </>
  )
}

export default App
