from django.urls import path
from . import views

app_name = 'App'

urlpatterns = [
    path("", views.index, name="index"),
    path("index-saas/", views.index_saas, name="index_saas"),
    path("index-consulting/", views.index_consulting, name="index_consulting"),
    path("index-cryptocurrency/", views.index_cryptocurrency, name="index_cryptocurrency"),
    path("index-digital-marketing/", views.index_digital_marketing, name="index_digital_marketing"),
    path("index-finance/", views.index_finance, name="index_finance"),
    path("index-it-solution/", views.index_it_solution, name="index_it_solution"),
    path("index-hospital/", views.index_hospital, name="index_hospital"),
    path("index-nft/", views.index_nft, name="index_nft"),
    path("index-minimal-portfolio/", views.index_minimal_portfolio, name="index_minimal_portfolio"),
    path("index-web-hosting/", views.index_web_hosting, name="index_web_hosting"),
    path("index-yoga/", views.index_yoga, name="index_yoga"),
    path("index-charity/", views.index_charity, name="index_charity"),
    
    path("aboutus/", views.aboutus, name="aboutus"),
    
    path("services/", views.services, name="services"),
    
    path("service-detail/", views.service_list_or_default, name="service_list_or_default"),
    path("service-detail/<slug:title>/", views.service_detail, name="service_detail"),
    
    path("pricing/", views.pricing, name="pricing"),
    path("team/", views.team, name="team"),
    path("testimonial/", views.testimonial, name="testimonial"),
    path("faqs/", views.faqs, name="faqs"),
    
    path("nft-explore/", views.nft_explore, name="nft_explore"),
    
    path("nft-detail/", views.nft_list_or_default, name="nft_list_or_default"),
    path("nft-detail/<slug:title>/", views.nft_detail, name="nft_detail"),
    
    path("collection/", views.collection, name="collection"),
    path("wallet/", views.wallet, name="wallet"),
    path("upload-item/", views.upload_item, name="upload_item"),
    
    path("creators/", views.creators, name="creators"),
    path("creator-profile/", views.creator_profile, name="creator_profile"),
    path("profile-setting/", views.profile_setting, name="profile_setting"),
    
    path("login/", views.login, name="login"),
    path("signup/", views.signup, name="signup"),
    path("reset-password/", views.reset_password, name="reset_password"),
    path("lock-screen/", views.lock_screen, name="lock_screen"),
    
    path("terms/", views.terms, name="terms"),
    path("privacy/", views.privacy, name="privacy"),
    
    path("comingsoon/", views.comingsoon, name="comingsoon"),
    path("maintenance/", views.maintenance, name="maintenance"),
    path("error/", views.error, name="error"),
    
    path("portfolio-modern-two/", views.portfolio_modern_two, name="portfolio_modern_two"),
    path("portfolio-modern-three/", views.portfolio_modern_three, name="portfolio_modern_three"),
    path("portfolio-modern-four/", views.portfolio_modern_four, name="portfolio_modern_four"),
    path("portfolio-modern-five/", views.portfolio_modern_five, name="portfolio_modern_five"),
    path("portfolio-modern-six/", views.portfolio_modern_six, name="portfolio_modern_six"),
    
    path("portfolio-classic-two/", views.portfolio_classic_two, name="portfolio_classic_two"),
    path("portfolio-classic-three/", views.portfolio_classic_three, name="portfolio_classic_three"),
    path("portfolio-classic-four/", views.portfolio_classic_four, name="portfolio_classic_four"),
    path("portfolio-classic-five/", views.portfolio_classic_five, name="portfolio_classic_five"),
    path("portfolio-classic-six/", views.portfolio_classic_six, name="portfolio_classic_six"),
    
    path("portfolio-creative-two/", views.portfolio_creative_two, name="portfolio_creative_two"),
    path("portfolio-creative-three/", views.portfolio_creative_three, name="portfolio_creative_three"),
    path("portfolio-creative-four/", views.portfolio_creative_four, name="portfolio_creative_four"),
    path("portfolio-creative-five/", views.portfolio_creative_five, name="portfolio_creative_five"),
    path("portfolio-creative-six/", views.portfolio_creative_six, name="portfolio_creative_six"),
    
    path("portfolio-masonry-two/", views.portfolio_masonry_two, name="portfolio_masonry_two"),
    path("portfolio-masonry-three/", views.portfolio_masonry_three, name="portfolio_masonry_three"),
    path("portfolio-masonry-four/", views.portfolio_masonry_four, name="portfolio_masonry_four"),
    path("portfolio-masonry-five/", views.portfolio_masonry_five, name="portfolio_masonry_five"),
    path("portfolio-masonry-six/", views.portfolio_masonry_six, name="portfolio_masonry_six"),
    
    path("portfolio-detail/", views.portfolio_list_or_default, name="portfolio_list_or_default"),
    path("portfolio-detail/<slug:title>/", views.portfolio_detail, name="portfolio_detail"),
    
    path("portfolio-detail-two/", views.portfolio2_list_or_default, name="portfolio2_list_or_default"),
    path("portfolio-detail-two/<slug:title>/", views.portfolio_detail_two, name="portfolio_detail_two"),
    
    path("blogs/", views.blogs, name="blogs"),
    path("blog-sidebar/", views.blog_sidebar, name="blog_sidebar"),
    
    path("blog-standard-post/", views.blog_list_or_default, name="blog_list_or_default"),
    path("blog-standard-post/<slug:title>/", views.blog_standard_post, name="blog_standard_post"),
    
    path("blog-gallery-post/", views.blog_gallery_post, name="blog_gallery_post"),
    path("blog-slider-post/", views.blog_slider_post, name="blog_slider_post"),
    path("blog-link-post/", views.blog_link_post, name="blog_link_post"),
    path("blog-story-post/", views.blog_story_post, name="blog_story_post"),
    path("blog-youtube-post/", views.blog_youtube_post, name="blog_youtube_post"),
    path("blog-html-video-post/", views.blog_html_video_post, name="blog_html_video_post"),
    path("blog-audio-post/", views.blog_audio_post, name="blog_audio_post"),
    path("blog-html-audio/", views.blog_html_audio, name="blog_html_audio"),
    path("blog-blockquote-post/", views.blog_blockquote_post, name="blog_blockquote_post"),
    path("blog-vimeo-post/", views.blog_vimeo_post, name="blog_vimeo_post"),
    path("blog-left-sidebar-post/", views.blog_left_sidebar_post, name="blog_left_sidebar_post"),
    
    path("contactus/", views.contactus, name="contactus"),
]