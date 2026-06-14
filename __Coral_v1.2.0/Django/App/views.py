from django.shortcuts import render, get_object_or_404
from .models import Service
from .models import Blog
from .models import Nft
from .models import Portfolio
from .models import Portfolio2

# Create your views here.

def index(request):
    return render(request, 'pages/index.html')

def index_saas(request):
    return render(request, 'pages/index-saas.html')

def index_consulting(request):
    return render(request, 'pages/index-consulting.html')

def index_cryptocurrency(request):
    return render(request, 'pages/index-cryptocurrency.html')

def index_digital_marketing(request):
    return render(request, 'pages/index-digital-marketing.html')

def index_finance(request):
    return render(request, 'pages/index-finance.html')

def index_it_solution(request):
    return render(request, 'pages/index-it-solution.html')

def index_hospital(request):
    return render(request, 'pages/index-hospital.html')

def index_nft(request):
    return render(request, 'pages/index-nft.html')

def index_minimal_portfolio(request):
    return render(request, 'pages/index-minimal-portfolio.html')

def index_web_hosting(request):
    return render(request, 'pages/index-web-hosting.html')

def index_yoga(request):
    return render(request, 'pages/index-yoga.html')

def index_charity(request):
    return render(request, 'pages/index-charity.html')

def aboutus(request):
    return render(request, 'pages/aboutus.html')

def services(request):
    return render(request, 'pages/services.html')

def service_list_or_default(request):
    # Get services from the database
    services = Service.objects.all()  # or any filter you need
    return render(request,'pages/service-detail.html', {'services': services})

def service_detail(request, title):
    service = get_object_or_404(Service, slug=title)  # Match the service by title (or slug, depending on how your model is set up)
    return render(request, 'pages/service-detail.html', {'service': service})

def pricing(request):
    return render(request, 'pages/pricing.html')

def team(request):
    return render(request, 'pages/team.html')

def testimonial(request):
    return render(request, 'pages/testimonial.html')

def faqs(request):
    return render(request, 'pages/faqs.html')

def nft_explore(request):
    return render(request, 'pages/nft-explore.html')

def nft_list_or_default(request):
    # Get nfts from the database
    nfts = Nft.objects.all()  # or any filter you need
    return render(request,'pages/nft-detail.html', {'nfts': nfts})

def nft_detail(request, title):
    nft = get_object_or_404(Nft, slug=title)  # Match the nft by title (or slug, depending on how your model is set up)
    return render(request, 'pages/nft-detail.html', {'nft': nft})

def collection(request):
    return render(request, 'pages/collection.html')

def wallet(request):
    return render(request, 'pages/wallet.html')

def upload_item(request):
    return render(request, 'pages/upload-item.html')

def creators(request):
    return render(request, 'pages/creators.html')

def creator_profile(request):
    return render(request, 'pages/creator-profile.html')

def profile_setting(request):
    return render(request, 'pages/profile-setting.html')

def login(request):
    return render(request, 'pages/login.html')

def signup(request):
    return render(request, 'pages/signup.html')

def reset_password(request):
    return render(request, 'pages/reset-password.html')

def lock_screen(request):
    return render(request, 'pages/lock-screen.html')

def terms(request):
    return render(request, 'pages/terms.html')

def privacy(request):
    return render(request, 'pages/privacy.html')

def comingsoon(request):
    return render(request, 'pages/comingsoon.html')

def maintenance(request):
    return render(request, 'pages/maintenance.html')

def error(request):
    return render(request, 'pages/error.html')

def portfolio_modern_two(request):
    return render(request, 'pages/portfolio-modern-two.html')

def portfolio_modern_three(request):
    return render(request, 'pages/portfolio-modern-three.html')

def portfolio_modern_four(request):
    return render(request, 'pages/portfolio-modern-four.html')

def portfolio_modern_five(request):
    return render(request, 'pages/portfolio-modern-five.html')

def portfolio_modern_six(request):
    return render(request, 'pages/portfolio-modern-six.html')

def portfolio_classic_two(request):
    return render(request, 'pages/portfolio-classic-two.html')

def portfolio_classic_three(request):
    return render(request, 'pages/portfolio-classic-three.html')

def portfolio_classic_four(request):
    return render(request, 'pages/portfolio-classic-four.html')

def portfolio_classic_five(request):
    return render(request, 'pages/portfolio-classic-five.html')

def portfolio_classic_six(request):
    return render(request, 'pages/portfolio-classic-six.html')

def portfolio_creative_two(request):
    return render(request, 'pages/portfolio-creative-two.html')

def portfolio_creative_three(request):
    return render(request, 'pages/portfolio-creative-three.html')

def portfolio_creative_four(request):
    return render(request, 'pages/portfolio-creative-four.html')

def portfolio_creative_five(request):
    return render(request, 'pages/portfolio-creative-five.html')

def portfolio_creative_six(request):
    return render(request, 'pages/portfolio-creative-six.html')

def portfolio_masonry_two(request):
    return render(request, 'pages/portfolio-masonry-two.html')

def portfolio_masonry_three(request):
    return render(request, 'pages/portfolio-masonry-three.html')

def portfolio_masonry_four(request):
    return render(request, 'pages/portfolio-masonry-four.html')

def portfolio_masonry_five(request):
    return render(request, 'pages/portfolio-masonry-five.html')

def portfolio_masonry_six(request):
    return render(request, 'pages/portfolio-masonry-six.html')

def portfolio_list_or_default(request):
    # Get portfolios from the database
    portfolios = Portfolio.objects.all()  # or any filter you need
    return render(request,'pages/portfolio-detail.html', {'portfolios': portfolios})

def portfolio_detail(request, title):
    portfolio = get_object_or_404(Portfolio, slug=title)  # Match the portfolio by title (or slug, depending on how your model is set up)
    return render(request, 'pages/portfolio-detail.html', {'portfolio': portfolio})

def portfolio2_list_or_default(request):
    # Get portfolios2 from the database
    portfolios2 = Portfolio2.objects.all()  # or any filter you need
    return render(request,'pages/portfolio-detail-two.html', {'portfolios2': portfolios2})

def portfolio_detail_two(request, title):
    portfolio2 = get_object_or_404(Portfolio2, slug=title)  # Match the portfolio2 by title (or slug, depending on how your model is set up)
    return render(request, 'pages/portfolio-detail-two.html', {'portfolio2': portfolio2})

def blogs(request):
    return render(request, 'pages/blogs.html')

def blog_sidebar(request):
    return render(request, 'pages/blog-sidebar.html')

def blog_list_or_default(request):
    # Get blogs from the database
    blogs = Blog.objects.all()  # or any filter you need
    return render(request,'pages/blog-standard-post.html', {'blogs': blogs})

def blog_standard_post(request, title):
    blog = get_object_or_404(Blog, slug=title)  # Match the blog by title (or slug, depending on how your model is set up)
    return render(request, 'pages/blog-standard-post.html', {'blog': blog})

def blog_gallery_post(request):
    return render(request, 'pages/blog-gallery-post.html')

def blog_slider_post(request):
    return render(request, 'pages/blog-slider-post.html')

def blog_link_post(request):
    return render(request, 'pages/blog-link-post.html')

def blog_story_post(request):
    return render(request, 'pages/blog-story-post.html')

def blog_youtube_post(request):
    return render(request, 'pages/blog-youtube-post.html')

def blog_html_video_post(request):
    return render(request, 'pages/blog-html-video-post.html')

def blog_audio_post(request):
    return render(request, 'pages/blog-audio-post.html')

def blog_html_audio(request):
    return render(request, 'pages/blog-html-audio.html')

def blog_blockquote_post(request):
    return render(request, 'pages/blog-blockquote-post.html')

def blog_vimeo_post(request):
    return render(request, 'pages/blog-vimeo-post.html')

def blog_left_sidebar_post(request):
    return render(request, 'pages/blog-left-sidebar-post.html')

def contactus(request):
    return render(request, 'pages/contactus.html')