from flask import Blueprint, render_template
from slugify import slugify

main = Blueprint("main", __name__)

@main.context_processor
def inject_slugify():
    return {'slugify': slugify}

@main.route("/")
def index():
    return render_template("pages/index.html")


@main.route("/index-saas/")
def index_saas():
    return render_template("pages/index-saas.html")


@main.route("/index-consulting/")
def index_consulting():
    return render_template("pages/index-consulting.html")


@main.route("/index-cryptocurrency/")
def index_cryptocurrency():
    return render_template("pages/index-cryptocurrency.html")


@main.route("/index-digital-marketing/")
def index_digital_marketing():
    return render_template("pages/index-digital-marketing.html")


@main.route("/index-finance/")
def index_finance():
    return render_template("pages/index-finance.html")


@main.route("/index-it-solution/")
def index_it_solution():
    return render_template("pages/index-it-solution.html")


@main.route("/index-hospital/")
def index_hospital():
    return render_template("pages/index-hospital.html")


@main.route("/index-nft/")
def index_nft():
    return render_template("pages/index-nft.html")


@main.route("/index-minimal-portfolio/")
def index_minimal_portfolio():
    return render_template("pages/index-minimal-portfolio.html")


@main.route("/index-web-hosting/")
def index_web_hosting():
    return render_template("pages/index-web-hosting.html")


@main.route("/index-yoga/")
def index_yoga():
    return render_template("pages/index-yoga.html")


@main.route("/index-charity/")
def index_charity():
    return render_template("pages/index-charity.html")


@main.route("/aboutus/")
def aboutus():
    return render_template("pages/aboutus.html")


@main.route("/services/")
def services():
    return render_template("pages/services.html")


@main.route("/service-detail/")
def service_list_or_default():
    services = [
        {
            'id' : 1,
            'title' : 'Branding Strategy',
        }
    ]
    service = services[0]
    return render_template("pages/service-detail.html", service=service)


@main.route("/service-detail/<string:title>/")
def service_detail(title):
    services = [
        {
            'id' : 1,
            'icon' : 'aperture', 
            'title' : 'Branding Strategy',
            'desc' : 'Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.',
            'style' : 'col-lg-4 col-md-6 col-12',
        },
        {
            'id' : 2,
            'icon' : 'send', 
            'title' : 'Digital Solutions',
            'desc' : 'Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.',
            'style' : 'col-lg-4 col-md-6 col-12 mt-4 mt-md-0 pt-2 pt-md-0',
        },
        {
            'id' : 3,
            'icon' : 'users', 
            'title' : 'Social Media',
            'desc' : 'Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.',
            'style' : 'col-lg-4 col-md-6 col-12 mt-4 mt-lg-0 pt-2 pt-lg-0',
        },
        {
            'id' : 4,
            'icon' : 'star', 
            'title' : 'Insightful Analytics',
            'desc' : "Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.",
        },
        {
            'id' : 5,
            'icon' : 'bookmark', 
            'title' : 'Business Consultation',
            'desc' : "Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.",
        },
        {
            'id' : 6,
            'icon' : 'message-circle', 
            'title' : '24-7 Support',
            'desc' : "Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.",
        },
        {
            'id' : 7,
            'img' : '/static/assets/images/service/cardiology.svg',
            'title' : 'Cardiology',
            'desc' : 'Success needs hard work & quality work.',
        },
        {
            'id' : 8,
            'img' : '/static/assets/images/service/neurology.svg',
            'title' : 'Neurology',
            'desc' : 'Success needs hard work & quality work.',
        },
        {
            'id' : 9,
            'img' : '/static/assets/images/service/orthopaedic.svg',
            'title' : 'Orthopaedic',
            'desc' : 'Success needs hard work & quality work.',
        },
        {
            'id' : 10,
            'img' : '/static/assets/images/service/gynecology.svg',
            'title' : 'Gynecology',
            'desc' : 'Success needs hard work & quality work.',
        },
        {
            'id' : 11,
            'img' : '/static/assets/images/service/dermatology.svg',
            'title' : 'Dermatology',
            'desc' : 'Success needs hard work & quality work.',
        },
        {
            'id' : 12,
            'icon' : 'zap', 
            'title' : 'Create Item', 
            'desc' : "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
        },
        {
            'id' : 13,
            'icon' : 'bookmark', 
            'title' : 'Collect', 
            'desc' : "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
        },
        {
            'id' : 14,
            'icon' : 'target', 
            'title' : 'Sell Item', 
            'desc' : "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
        },
        {
            'id' : 15,
            'img' : '/static/assets/images/asana/ardha_padmasana.png',
            'title' : 'Ardha Padmasana', 
            'desc' : "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
        },
        {
            'id' : 16,
            'img' : '/static/assets/images/asana/bhujangasana.png',
            'title' : 'Bhujangasana', 
            'desc' : "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
        },
        {
            'id' : 17,
            'img' : '/static/assets/images/asana/halasana.png',
            'title' : 'Halasana', 
            'desc' : "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
        },
        {
            'id' : 18,
            'img' : '/static/assets/images/asana/natarajasana.png',
            'title' : 'Natarajasana', 
            'desc' : "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
        },
        {
            'id' : 19,
            'icon' : 'aperture',
            'title' : 'Breakfast Programme', 
            'desc' : "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
        },
        {
            'id' : 20,
            'icon' : 'send',
            'title' : 'Food Assistance', 
            'desc' : "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
        },
        {
            'id' : 21,
            'icon' : 'users',
            'title' : 'Social Works', 
            'desc' : "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
        }
    ]
    selected_service = next((service for service in services if slugify(service['title']) == title), None)

    if selected_service:
        return render_template('pages/service-detail.html', service=selected_service)
    else:
        return "service not found", 404


@main.route("/pricing/")
def pricing():
    return render_template("pages/pricing.html")


@main.route("/team/")
def team():
    return render_template("pages/team.html")


@main.route("/testimonial/")
def testimonial():
    return render_template("pages/testimonial.html")


@main.route("/faqs/")
def faqs():
    return render_template("pages/faqs.html")


@main.route("/nft-explore/")
def nft_explore():
    return render_template("pages/nft-explore.html")


@main.route("/nft-detail/")
def nft_list_or_default():
    nfts = [
        {
            'id' : 1, 
            'img' : '/static/assets/images/nft/1.jpg', 
            'title' : 'Deep Sea Phantasy', 
        }
    ]
    nft = nfts[0]
    return render_template("pages/nft-detail.html", nft=nft)


@main.route("/nft-detail/<string:title>/")
def nft_detail(title):
    nfts = [
        {
            'id' : 1, 
            'img' : '/static/assets/images/nft/1.jpg', 
            'img1' : '/static/assets/images/team/1.jpg', 
            'btn' : 'Buy Now', 
            'btn1' : 'Bid Now', 
            'title' : 'Deep Sea Phantasy', 
            'title1' : '20.5 ETH', 
            'name' : "1 out of 12 items", 
        },
        {
            'id' : 2, 
            'img' : '/static/assets/images/nft/2.jpg', 
            'img1' : '/static/assets/images/team/2.jpg', 
            'btn' : 'Buy Now', 
            'btn1' : 'Bid Now', 
            'title' : 'Rainbow Style', 
            'title1' : '20.5 ETH', 
            'name' : "1 out of 12 items", 
        },
        {
            'id' : 3, 
            'img' : '/static/assets/images/nft/3.jpg', 
            'img1' : '/static/assets/images/team/3.jpg', 
            'btn' : 'Buy Now', 
            'btn1' : 'Bid Now', 
            'title' : 'USA Wordmation', 
            'title1' : '20.5 ETH', 
            'name' : "1 out of 12 items", 
        },
        {
            'id' : 4, 
            'img' : '/static/assets/images/nft/4.jpg', 
            'img1' : '/static/assets/images/team/1.jpg', 
            'title' : 'Genuine Undead 3902', 
            'title1' : '20.5 ETH', 
            'name' : "1 out of 12 items", 
        },
        {
            'id' : 5, 
            'img' : '/static/assets/images/nft/5.jpg', 
            'img1' : '/static/assets/images/team/2.jpg', 
            'title' : 'Windchime 768', 
            'title1' : '20.5 ETH', 
            'name' : "1 out of 12 items", 
        },
        {
            'id' : 6, 
            'img' : '/static/assets/images/nft/6.jpg', 
            'img1' : '/static/assets/images/team/3.jpg', 
            'title' : 'Probably A Label 3277', 
            'title1' : '20.5 ETH', 
            'name' : "1 out of 12 items", 
        },
        {
            'id' : 7, 
            'img' : '/static/assets/images/nft/7.jpg', 
            'img1' : '/static/assets/images/team/4.jpg', 
            'title' : 'Probably A Label 1111', 
            'title1' : '20.5 ETH', 
            'name' : "1 out of 12 items", 
        },
        {
            'id' : 8, 
            'img' : '/static/assets/images/nft/8.jpg', 
            'img1' : '/static/assets/images/team/5.jpg', 
            'title' : 'Umber Arrow', 
            'title1' : '20.5 ETH', 
            'name' : "1 out of 12 items", 
        },
        {
            'id' : 9, 
            'img' : '/static/assets/images/nft/9.jpg', 
            'img1' : '/static/assets/images/team/6.jpg', 
            'title' : 'Probably A Label 650', 
            'title1' : '20.5 ETH', 
            'name' : "1 out of 12 items", 
        },
        {
            'id' : 10, 
            'img' : '/static/assets/images/nft/10.jpg', 
            'img1' : '/static/assets/images/team/7.jpg', 
            'title' : 'Looki-0147', 
            'title1' : '20.5 ETH', 
            'name' : "1 out of 12 items", 
        },
        {
            'id' : 11, 
            'img' : '/static/assets/images/nft/11.jpg', 
            'img1' : '/static/assets/images/team/8.jpg', 
            'title' : 'Poob 285', 
            'title1' : '20.5 ETH', 
            'name' : "1 out of 12 items", 
        },
        {
            'id' : 12, 
            'img' : '/static/assets/images/nft/12.jpg', 
            'img1' : '/static/assets/images/team/1.jpg', 
            'title' : 'Azuki 7421', 
            'title1' : '20.5 ETH', 
            'name' : "1 out of 12 items", 
        }
    ]
    selected_nft = next((nft for nft in nfts if slugify(nft['title']) == title), None)

    if selected_nft:
        return render_template('pages/nft-detail.html', nft=selected_nft)
    else:
        return "nft not found", 404


@main.route("/collection/")
def collection():
    return render_template("pages/collection.html")


@main.route("/wallet/")
def wallet():
    return render_template("pages/wallet.html")


@main.route("/upload-item/")
def upload_item():
    return render_template("pages/upload-item.html")


@main.route("/creators/")
def creators():
    return render_template("pages/creators.html")


@main.route("/creator-profile/")
def creator_profile():
    return render_template("pages/creator-profile.html")


@main.route("/profile-setting/")
def profile_setting():
    return render_template("pages/profile-setting.html")


@main.route("/login/")
def login():
    return render_template("pages/login.html")


@main.route("/signup/")
def signup():
    return render_template("pages/signup.html")


@main.route("/reset-password/")
def reset_password():
    return render_template("pages/reset-password.html")


@main.route("/lock-screen/")
def lock_screen():
    return render_template("pages/lock-screen.html")


@main.route("/terms/")
def terms():
    return render_template("pages/terms.html")


@main.route("/privacy/")
def privacy():
    return render_template("pages/privacy.html")


@main.route("/comingsoon/")
def comingsoon():
    return render_template("pages/comingsoon.html")


@main.route("/maintenance/")
def maintenance():
    return render_template("pages/maintenance.html")


@main.route("/error/")
def error():
    return render_template("pages/error.html")


@main.route("/portfolio-modern-two/")
def portfolio_modern_two():
    return render_template("pages/portfolio-modern-two.html")


@main.route("/portfolio-modern-three/")
def portfolio_modern_three():
    return render_template("pages/portfolio-modern-three.html")


@main.route("/portfolio-modern-four/")
def portfolio_modern_four():
    return render_template("pages/portfolio-modern-four.html")


@main.route("/portfolio-modern-five/")
def portfolio_modern_five():
    return render_template("pages/portfolio-modern-five.html")


@main.route("/portfolio-modern-six/")
def portfolio_modern_six():
    return render_template("pages/portfolio-modern-six.html")


@main.route("/portfolio-classic-two/")
def portfolio_classic_two():
    return render_template("pages/portfolio-classic-two.html")


@main.route("/portfolio-classic-three/")
def portfolio_classic_three():
    return render_template("pages/portfolio-classic-three.html")


@main.route("/portfolio-classic-four/")
def portfolio_classic_four():
    return render_template("pages/portfolio-classic-four.html")


@main.route("/portfolio-classic-five/")
def portfolio_classic_five():
    return render_template("pages/portfolio-classic-five.html")


@main.route("/portfolio-classic-six/")
def portfolio_classic_six():
    return render_template("pages/portfolio-classic-six.html")


@main.route("/portfolio-creative-two/")
def portfolio_creative_two():
    return render_template("pages/portfolio-creative-two.html")


@main.route("/portfolio-creative-three/")
def portfolio_creative_three():
    return render_template("pages/portfolio-creative-three.html")


@main.route("/portfolio-creative-four/")
def portfolio_creative_four():
    return render_template("pages/portfolio-creative-four.html")


@main.route("/portfolio-creative-five/")
def portfolio_creative_five():
    return render_template("pages/portfolio-creative-five.html")


@main.route("/portfolio-creative-six/")
def portfolio_creative_six():
    return render_template("pages/portfolio-creative-six.html")


@main.route("/portfolio-masonry-two/")
def portfolio_masonry_two():
    return render_template("pages/portfolio-masonry-two.html")


@main.route("/portfolio-masonry-three/")
def portfolio_masonry_three():
    return render_template("pages/portfolio-masonry-three.html")


@main.route("/portfolio-masonry-four/")
def portfolio_masonry_four():
    return render_template("pages/portfolio-masonry-four.html")


@main.route("/portfolio-masonry-five/")
def portfolio_masonry_five():
    return render_template("pages/portfolio-masonry-five.html")


@main.route("/portfolio-masonry-six/")
def portfolio_masonry_six():
    return render_template("pages/portfolio-masonry-six.html")


@main.route("/portfolio-detail/")
def portfolio_list_or_default():
    portfolios = [
        {
            'id' : 1,
            'title' : 'Web Design',
        }
    ]
    portfolio = portfolios[0]
    return render_template("pages/portfolio-detail.html", portfolio=portfolio)


@main.route("/portfolio-detail/<string:title>/")
def portfolio_detail(title):
    portfolios = [
        {
            'id' : 1,
            'img' : '/static/assets/images/portfolio/1.jpg',
            'title' : 'Artboard Studio',
            'name' : 'Custom Branding',
        },
        {
            'id' : 2,
            'img' : '/static/assets/images/portfolio/2.jpg',
            'title' : 'The Portrait',
            'name' : 'Custom Branding',
        },
        {
            'id' : 3,
            'img' : '/static/assets/images/portfolio/3.jpg',
            'title' : 'Villa in Dallas',
            'name' : 'Custom Branding',
        },
        {
            'id' : 4,
            'img' : '/static/assets/images/portfolio/4.jpg',
            'title' : 'Photo Retouching',
            'name' : 'Custom Branding',
        },
        {
            'id' : 5,
            'img' : '/static/assets/images/portfolio/5.jpg',
            'title' : 'The Cup of Coffee',
            'name' : 'Custom Branding',
        },
        {
            'id' : 6,
            'img' : '/static/assets/images/portfolio/6.jpg',
            'title' : 'The Pen and Books',
            'name' : 'Custom Branding',
        },
        {
            'id' : 7,
            'img' : '/static/assets/images/portfolio/7.jpg',
            'title' : 'Mercedez-Benz Coupe',
            'name' : 'Custom Branding',
        },
        {
            'id' : 8,
            'img' : '/static/assets/images/portfolio/8.jpg',
            'title' : 'Inspiration Board',
            'name' : 'Custom Branding',
        },
        {
            'id' : 9,
            'img' : '/static/assets/images/portfolio/9.jpg',
            'title' : 'The Cactus Plant',
            'name' : 'Custom Branding',
        },
        {
            'id' : 10,
            'img' : '/static/assets/images/portfolio/10.jpg',
            'title' : 'The Yellow Bag',
            'name' : 'Custom Branding',
        },
        {
            'id' : 11,
            'img' : '/static/assets/images/portfolio/11.jpg',
            'title' : 'The Teapot Table',
            'name' : 'Custom Branding',
        },
        {
            'id' : 12,
            'img' : '/static/assets/images/portfolio/12.jpg',
            'title' : 'The Orange',
            'name' : 'Custom Branding',
        }
    ]
    selected_portfolio = next((portfolio for portfolio in portfolios if slugify(portfolio['title']) == title), None)

    if selected_portfolio:
        return render_template('pages/portfolio-detail.html', portfolio=selected_portfolio)
    else:
        return "portfolio not found", 404


@main.route("/portfolio-detail-two/")
def portfolio2_list_or_default():
    portfolios2 = [
        {
            'id' : 1,
            'img' : '/static/assets/images/portfolio/1.jpg',
            'title' : 'Web Design',
        }
    ]
    portfolio2 = portfolios2[0]
    return render_template("pages/portfolio-detail-two.html", portfolio2=portfolio2)


@main.route("/portfolio-detail-two/<string:title>/")
def portfolio_detail_two(title):
    portfolios2 = [
        {
            'id' : 1,
            'img' : '/static/assets/images/portfolio/1.jpg',
            'title' : 'Artboard Studio',
            'name' : 'Custom Branding',
        },
        {
            'id' : 2,
            'img' : '/static/assets/images/projects/2.jpg',
            'title' : 'The Portrait',
            'name' : 'Custom Branding',
        },
        {
            'id' : 3,
            'img' : '/static/assets/images/projects/3.jpg',
            'title' : 'Villa in Dallas',
            'name' : 'Custom Branding',
        },
        {
            'id' : 4,
            'img' : '/static/assets/images/portfolio/4.jpg',
            'title' : 'Photo Retouching',
            'name' : 'Custom Branding',
        },
        {
            'id' : 5,
            'img' : '/static/assets/images/portfolio/5.jpg',
            'title' : 'The Cup of Coffee',
            'name' : 'Custom Branding',
        },
        {
            'id' : 6,
            'img' : '/static/assets/images/projects/6.jpg',
            'title' : 'The Pen and Books',
            'name' : 'Custom Branding',
        },
        {
            'id' : 7,
            'img' : '/static/assets/images/projects/7.jpg',
            'title' : 'Mercedez-Benz Coupe',
            'name' : 'Custom Branding',
        },
        {
            'id' : 8,
            'img' : '/static/assets/images/portfolio/8.jpg',
            'title' : 'Inspiration Board',
            'name' : 'Custom Branding',
        },
        {
            'id' : 9,
            'img' : '/static/assets/images/portfolio/9.jpg',
            'title' : 'The Cactus Plant',
            'name' : 'Custom Branding',
        },
        {
            'id' : 10,
            'img' : '/static/assets/images/projects/1.jpg',
            'title' : 'The Cactus Plants',
            'name' : 'Custom Branding',
        },
        {
            'id' : 11,
            'img' : '/static/assets/images/portfolio/6.jpg',
            'title' : 'The Yellow Bag',
            'name' : 'Custom Branding',
        },
        {
            'id' : 12,
            'img' : '/static/assets/images/portfolio/3.jpg',
            'title' : 'The Plant',
            'name' : 'Custom Branding',
        },
        {
            'id' : 13,
            'img' : '/static/assets/images/projects/4.jpg',
            'title' : 'The Bag',
            'name' : 'Custom Branding',
        }
    ]
    selected_portfolio2 = next((portfolio2 for portfolio2 in portfolios2 if slugify(portfolio2['title']) == title), None)

    if selected_portfolio2:
        return render_template('pages/portfolio-detail-two.html', portfolio2=selected_portfolio2)
    else:
        return "portfolio2 not found", 404


@main.route("/blogs/")
def blogs():
    return render_template("pages/blogs.html")


@main.route("/blog-sidebar/")
def blog_sidebar():
    return render_template("pages/blog-sidebar.html")


@main.route("/blog-standard-post/")
def blog_list_or_default():
    blogs = [
        {
            'id' : 1,
            'img' : '/static/assets/images/blog/1.jpg', 
            'name' : 'Coral',
            'title' : 'Utilizing mobile technology in the field',
        }
    ]
    blog = blogs[0]
    return render_template("pages/blog-standard-post.html", blog=blog)


@main.route("/blog-standard-post/<string:title>/")
def blog_standard_post(title):
    blogs = [
        {
            'id' : 1,
            'img' : '/static/assets/images/blog/1.jpg', 
            'name' : 'Coral', 
            'title' : 'Utilizing mobile technology in the field',
            'desc' : "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
        },
        {
            'id' : 2,
            'img' : '/static/assets/images/blog/2.jpg', 
            'name' : 'Coral', 
            'title' : 'Success Story Businessman in Harlem',
            'desc' : "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
        },
        {
            'id' : 3,
            'img' : '/static/assets/images/blog/3.jpg', 
            'name' : 'Coral', 
            'title' : 'How Does Marketing Automation Help Lead',
            'desc' : "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
        },
        {
            'id' : 4,
            'img' : '/static/assets/images/blog/4.jpg', 
            'name' : 'Coral', 
            'title' : "Working from home Lets get started",
            'desc' : "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
        },
        {
            'id' : 5,
            'img' : '/static/assets/images/blog/5.jpg', 
            'name' : 'Coral', 
            'title' : "The Ultimate Success Formula - How",
            'desc' : "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
        },
        {
            'id' : 6,
            'img' : '/static/assets/images/blog/6.jpg', 
            'name' : 'Coral', 
            'title' : "The Major Differences Between SEO - Local SEO",
            'desc' : "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
        },
        {
            'id' : 7,
            'img' : '/static/assets/images/blog/7.jpg', 
            'name' : 'Coral', 
            'title' : "Building intelligent transportation systems",
            'desc' : "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
        },
        {
            'id' : 8,
            'img' : '/static/assets/images/blog/8.jpg', 
            'name' : 'Coral', 
            'title' : "12 Questions to Ask Before Hiring a SEO Agency",
            'desc' : "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
        },
        {
            'id' : 9,
            'img' : '/static/assets/images/blog/9.jpg', 
            'name' : 'Coral', 
            'title' : "How a Social Media Audit Can Help You",
            'desc' : "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
        }
    ]
    selected_blog = next((blog for blog in blogs if slugify(blog['title']) == title), None)

    if selected_blog:
        return render_template('pages/blog-standard-post.html', blog=selected_blog)
    else:
        return "blog not found", 404


@main.route("/blog-gallery-post/")
def blog_gallery_post():
    return render_template("pages/blog-gallery-post.html")


@main.route("/blog-slider-post/")
def blog_slider_post():
    return render_template("pages/blog-slider-post.html")


@main.route("/blog-link-post/")
def blog_link_post():
    return render_template("pages/blog-link-post.html")


@main.route("/blog-story-post/")
def blog_story_post():
    return render_template("pages/blog-story-post.html")


@main.route("/blog-youtube-post/")
def blog_youtube_post():
    return render_template("pages/blog-youtube-post.html")


@main.route("/blog-html-video-post/")
def blog_html_video_post():
    return render_template("pages/blog-html-video-post.html")


@main.route("/blog-audio-post/")
def blog_audio_post():
    return render_template("pages/blog-audio-post.html")


@main.route("/blog-html-audio/")
def blog_html_audio():
    return render_template("pages/blog-html-audio.html")


@main.route("/blog-blockquote-post/")
def blog_blockquote_post():
    return render_template("pages/blog-blockquote-post.html")


@main.route("/blog-vimeo-post/")
def blog_vimeo_post():
    return render_template("pages/blog-vimeo-post.html")


@main.route("/blog-left-sidebar-post/")
def blog_left_sidebar_post():
    return render_template("pages/blog-left-sidebar-post.html")


@main.route("/contactus/")
def contactus():
    return render_template("pages/contactus.html")