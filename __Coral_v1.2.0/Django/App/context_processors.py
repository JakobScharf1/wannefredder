# App/context_processors.py

# services data

def global_services(request):
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
    return {"services": services}


# counters data

def global_counters(request):
    counters = [
        {
            'icon' : 'check-circle',
            'target' : '49',
            'number' : '1',
            'symbol' : '+',
            'title' : 'Project Completed',
        },
        {
            'icon' : 'coffee',
            'target' : '2461',
            'number' : '1',
            'symbol' : '+',
            'title' : 'Cup of Coffee',
        },
        {
            'icon' : 'user-check',
            'target' : '99',
            'number' : '1',
            'symbol' : '%',
            'title' : 'Client Satisfaction',
        }
    ]
    return {"counters": counters}


# projects data

def global_projects(request):
    projects = [
        {
            'img' : '/static/assets/images/projects/1.jpg', 
            'title' : 'Artboard Studio',
            'name' : 'Custom Branding',
        },
        {
            'img' : '/static/assets/images/projects/2.jpg', 
            'title' : 'The Portrait',
            'name' : 'Custom Branding',
        },
        {
            'img' : '/static/assets/images/projects/3.jpg', 
            'title' : 'Villa in Dallas',
            'name' : 'Custom Branding',
        },
        {
            'img' : '/static/assets/images/projects/4.jpg', 
            'title' : 'Photo Retouching',
            'name' : 'Custom Branding',
        },
        {
            'img' : '/static/assets/images/projects/5.jpg', 
            'title' : 'Mercedez-Benz Coupe',
            'name' : 'Custom Branding',
        },
        {
            'img' : '/static/assets/images/projects/6.jpg', 
            'title' : 'Inspiration Board',
            'name' : 'Custom Branding',
        }
    ]
    return {"projects": projects}


# minds data

def global_minds(request):
    minds = [
        {
            'img' : '/static/assets/images/team/1.jpg', 
            'name' : 'Jack John',
            'title' : 'Founder & CEO',
        },
        {
            'img' : '/static/assets/images/team/2.jpg', 
            'name' : 'Jeremiah Green',
            'title' : 'CTO',
        },
        {
            'img' : '/static/assets/images/team/3.jpg', 
            'name' : 'Christin Vasquez',
            'title' : 'Developer',
        },
        {
            'img' : '/static/assets/images/team/4.jpg', 
            'name' : 'Lillian Boldt',
            'title' : 'Product Manager',
        }
    ]
    return {"minds": minds}


# review data

def global_review(request):
    review = [
        {
            'img' : '/static/assets/images/team/1.jpg', 
            'name' : 'Calvin Carlo',
            'title' : 'Manager',
            'title1' : 'Creativity',
            'desc' : "According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero Launch your campaign and benefit from our expertise.",
        },
        {
            'img' : '/static/assets/images/team/2.jpg', 
            'name' : 'Carl Oliver',
            'title' : 'Manager',
            'title1' : 'Modern',
            'desc' : "I didn't know a thing about icon design until I read this book. Now I can create any icon I need in no time. Great resource!",
        },
        {
            'img' : '/static/assets/images/team/3.jpg', 
            'name' : 'Barbara McIntosh',
            'title' : 'Manager',
            'title1' : 'Social Marketing',
            'desc' : "The best part about Coral is every time I pay my employees, my bank balance doesn't go down like it used to. Looking forward to spending this extra cash when I figure out why my card is being declined.",
        },
        {
            'img' : '/static/assets/images/team/4.jpg', 
            'name' : 'Janisha Doll',
            'title' : 'Manager',
            'title1' : 'Digital Marketing',
            'desc' : "I used to have to remit tax to the EU and with Coral I somehow don't have to do that anymore. Nervous to travel there now though.",
        },
        {
            'img' : '/static/assets/images/team/5.jpg', 
            'name' : 'Esther Howard',
            'title' : 'Manager',
            'title1' : 'SEO',
            'desc' : "There are so many things I had to do with my old software that I just don't do at all with Coral. Suspicious but I can't say I don't love it.",
        },
        {
            'img' : '/static/assets/images/team/6.jpg', 
            'name' : 'Joshua William',
            'title' : 'Manager',
            'title1' : 'Classic',
            'desc' : "I'm trying to get a hold of someone in support, I'm in a lot of trouble right now and they are saying it has something to do with my books. Please get back to me right away.",
        }
    ]
    return {"review": review}


# blogs data

def global_blogs(request):
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
    return {"blogs": blogs}


# sliders data

def global_sliders(request):
    sliders = [
        {
            'img' : '/static/assets/images/coin/Bitcoin-BTC.png', 
            'title' : 'Bitcoin (BTC)',
            'price' : '$45762',
            'percentage' : '5.25%',
            'class' : 'success',
        },
        {
            'img' : '/static/assets/images/coin/Ethereum-ETH.png', 
            'title' : 'Ethereum (ETH)',
            'price' : '$45762',
            'percentage' : '5.25%',
            'class' : 'danger',
        },
        {
            'img' : '/static/assets/images/coin/Avalanche-AVAX.png', 
            'title' : 'Avalanche (AVAX)',
            'price' : '$45762',
            'percentage' : '5.25%',
            'class' : 'success',
        },
        {
            'img' : '/static/assets/images/coin/BNB-BNB.png', 
            'title' : 'BNB (BNB)',
            'price' : '$45762',
            'percentage' : '5.25%',
            'class' : 'success',
        },
        {
            'img' : '/static/assets/images/coin/Cardano-ADA.png', 
            'title' : 'Cardano (ADA)',
            'price' : '$45762',
            'percentage' : '5.25%',
            'class' : 'danger',
        },
        {
            'img' : '/static/assets/images/coin/Dai-DAI.png', 
            'title' : 'Dai (DAI)',
            'price' : '$45762',
            'percentage' : '5.25%',
            'class' : 'danger',
        },
        {
            'img' : '/static/assets/images/coin/Polkadot-DOT.png', 
            'title' : 'Polkadot (DOT)',
            'price' : '$45762',
            'percentage' : '5.25%',
            'class' : 'success',
        },
        {
            'img' : '/static/assets/images/coin/Shiba-Inu-SHIB.png', 
            'title' : 'Shiba Inu (SHIB)',
            'price' : '$45762',
            'percentage' : '5.25%',
            'class' : 'danger',
        }
    ]
    return {"sliders": sliders}


# tables data

def global_tables(request):
    tables = [
        {
            'img' : '/static/assets/images/coin/Bitcoin-BTC.png', 
            'title' : 'Bitcoin',
            'symbol' : 'BTC',
            'price' : '$34587',
            'percentage' : '-2.5%',
            'dollar' : '-$745',
            'marketcap' : '$725,354M',
            'btn' : 'Trade',
            'class' : 'text-danger',
        },
        {
            'img' : '/static/assets/images/coin/Ethereum-ETH.png', 
            'title' : 'Ethereum',
            'symbol' : 'ETH',
            'price' : '$216',
            'percentage' : '+.264%',
            'dollar' : '+$.264',
            'marketcap' : '$11,100M',
            'btn' : 'Trade',
            'class' : 'text-success',
        },
        {
            'img' : '/static/assets/images/coin/Avalanche-AVAX.png', 
            'title' : 'Avalanche',
            'symbol' : 'AVAX',
            'price' : '$452',
            'percentage' : '-1.9%',
            'dollar' : '-$1.9',
            'marketcap' : '$45,785M',
            'btn' : 'Trade',
            'class' : 'text-danger',
        },
        {
            'img' : '/static/assets/images/coin/BNB-BNB.png', 
            'title' : 'BNB',
            'symbol' : 'BNB',
            'price' : '$154',
            'percentage' : '+1.05%',
            'dollar' : '+$1.05',
            'marketcap' : '$85,478M',
            'btn' : 'Trade',
            'class' : 'text-success',
        },
        {
            'img' : '/static/assets/images/coin/Cardano-ADA.png', 
            'title' : 'Cardano',
            'symbol' : 'ADA',
            'price' : '$854',
            'percentage' : '+1.705%',
            'dollar' : '+$1.705',
            'marketcap' : '$112,452M',
            'btn' : 'Trade',
            'class' : 'text-success',
        },
        {
            'img' : '/static/assets/images/coin/Dai-DAI.png', 
            'title' : 'Dai',
            'symbol' : 'DAI',
            'price' : '$548',
            'percentage' : '-3.2%',
            'dollar' : '-$3.2',
            'marketcap' : '$4,712M',
            'btn' : 'Trade',
            'class' : 'text-danger',
        },
        {
            'img' : '/static/assets/images/coin/Polkadot-DOT.png', 
            'title' : 'Polkadot',
            'symbol' : 'DOT',
            'price' : '$965',
            'percentage' : '+1.465%',
            'dollar' : '+$1.465',
            'marketcap' : '$487,552M',
            'btn' : 'Trade',
            'class' : 'text-success',
        },
        {
            'img' : '/static/assets/images/coin/Shiba-Inu-SHIB.png', 
            'title' : 'Shiba Inu',
            'symbol' : 'SHIB',
            'price' : '$4875',
            'percentage' : '-1.08%',
            'dollar' : '-$1.08',
            'marketcap' : '$55,221M',
            'btn' : 'Trade',
            'class' : 'text-danger',
        }
    ]
    return {"tables": tables}


# traders data

def global_traders(request):
    traders = [
        {
            'img' : '/static/assets/images/cpu.svg', 
            'title' : 'Buy & Sell Crypto',
            'desc' : 'Buy or sell Bitcoin, Ethereum, and other crypto assets with your credit card, debit card, or bank account.',
            'btn' : 'Buy Bitcoin'
        },
        {
            'img' : '/static/assets/images/analytics.svg', 
            'title' : 'Trade Assets',
            'desc' : 'Discover new and innovative crypto assets with over 200 spot trading pairs and 25 margin trading pairs.',
            'btn' : 'View Exchange'
        },
        {
            'img' : '/static/assets/images/exchange.svg', 
            'title' : 'Hedge with Coral Futures',
            'desc' : 'Trade Bitcoin, Ethereum, and other perpetual with up to 100x leverage on Coral Futures.',
            'btn' : 'Trade Futures'
        },
        {
            'img' : '/static/assets/images/money.svg', 
            'title' : 'Earn Rewards for Trading',
            'desc' : 'Never miss an opportunity for a little competition. Join our latest campaigns to earn rewards.',
            'btn' : 'Join Competition'
        }
    ]
    return {"traders": traders}


# partners data

def global_partners(request):
    partners = [
        {
            'img' : '/static/assets/images/client/amazon.svg', 
        },
        {
            'img' : '/static/assets/images/client/google.svg', 
        },
        {
            'img' : '/static/assets/images/client/lenovo.svg', 
        },
        {
            'img' : '/static/assets/images/client/paypal.svg', 
        },
        {
            'img' : '/static/assets/images/client/shopify.svg', 
        },
        {
            'img' : '/static/assets/images/client/spotify.svg', 
        },
        {
            'img' : '/static/assets/images/client/amazon.svg', 
        },
        {
            'img' : '/static/assets/images/client/google.svg', 
        },
        {
            'img' : '/static/assets/images/client/lenovo.svg', 
        },
        {
            'img' : '/static/assets/images/client/paypal.svg', 
        },
        {
            'img' : '/static/assets/images/client/shopify.svg', 
        },
        {
            'img' : '/static/assets/images/client/spotify.svg', 
        }
    ]
    return {"partners": partners}


# counters2 data

def global_counters2(request):
    counters2 = [
        {
            'icon' : 'check-circle',
            'target' : '49',
            'number' : '1',
            'symbol' : '+',
            'title' : 'Project Completed',
        },
        {
            'icon' : 'coffee',
            'target' : '2461',
            'number' : '1',
            'symbol' : '+',
            'title' : 'Cup of Coffee',
        },
        {
            'icon' : 'user-check',
            'target' : '99',
            'number' : '1',
            'symbol' : '%',
            'title' : 'Client Satisfaction',
        }
    ]
    return {"counters2": counters2}


# portfolios data

def global_portfolios(request):
    portfolios = [
        {
            'img' : '/static/assets/images/projects/1.jpg', 
            'title' : 'Artboard Studio',
            'name' : 'Custom Branding',
        },
        {
            'img' : '/static/assets/images/projects/2.jpg', 
            'title' : 'The Portrait',
            'name' : 'Custom Branding',
        },
        {
            'img' : '/static/assets/images/projects/3.jpg', 
            'title' : 'Villa in Dallas',
            'name' : 'Custom Branding',
        },
        {
            'img' : '/static/assets/images/projects/4.jpg', 
            'title' : 'Photo Retouching',
            'name' : 'Custom Branding',
        },
        {
            'img' : '/static/assets/images/projects/5.jpg', 
            'title' : 'Mercedez-Benz Coupe',
            'name' : 'Custom Branding',
        },
        {
            'img' : '/static/assets/images/projects/6.jpg', 
            'title' : 'Inspiration Board',
            'name' : 'Custom Branding',
        },
        {
            'img' : '/static/assets/images/projects/7.jpg', 
            'title' : 'Mercedez-Benz Coupe',
            'name' : 'Custom Branding',
        },
        {
            'img' : '/static/assets/images/projects/8.jpg', 
            'title' : 'Inspiration Board',
            'name' : 'Custom Branding',
        }
    ]
    return {"portfolios": portfolios}


# features data

def global_features(request):
    features = [
        {
            'icon' : 'aperture', 
            'title' : 'Branding Strategy',
            'desc' : "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
        },
        {
            'icon' : 'send', 
            'title' : 'Digital Solutions',
            'desc' : "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
        },
        {
            'icon' : 'users', 
            'title' : 'Social Media',
            'desc' : "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
        },
        {
            'icon' : 'star', 
            'title' : 'Insightful Analytics',
            'desc' : "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
        }
    ]
    return {"features": features}


# teams data

def global_teams(request):
    teams = [
        {
            'img' : '/static/assets/images/team/01.jpg',
            'name' : 'Jack John',
            'title' : 'Doctor',
        },
        {
            'img' : '/static/assets/images/team/02.jpg',
            'name' : 'Jeremiah Green',
            'title' : 'Doctor',
        },
        {
            'img' : '/static/assets/images/team/03.jpg',
            'name' : 'Christina Vasquez',
            'title' : 'Doctor',
        },
        {
            'img' : '/static/assets/images/team/04.jpg',
            'name' : 'Lillian Boldt',
            'title' : 'Doctor',
        }
    ]
    return {"teams": teams}


# sliders2 data

def global_sliders2(request):
    sliders2 = [
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
    return {"sliders2": sliders2}


# collections data

def global_collections(request):
    collections = [
        {
            'img' : '/static/assets/images/nft/4.jpg', 
            'img1' : '/static/assets/images/team/4.jpg', 
            'title' : 'Digital Arts', 
            'name' : "27 Items", 
        },
        {
            'img' : '/static/assets/images/nft/1.jpg', 
            'img1' : '/static/assets/images/team/1.jpg', 
            'title' : 'Sports', 
            'name' : "27 Items", 
        },
        {
            'img' : '/static/assets/images/nft/2.jpg', 
            'img1' : '/static/assets/images/team/2.jpg', 
            'title' : 'Photography', 
            'name' : "27 Items", 
        },
        {
            'img' : '/static/assets/images/nft/3.jpg', 
            'img1' : '/static/assets/images/team/3.jpg', 
            'title' : 'Illustrations', 
            'name' : "27 Items", 
        },
        {
            'img' : '/static/assets/images/nft/5.jpg', 
            'img1' : '/static/assets/images/team/5.jpg', 
            'title' : 'Animations', 
            'name' : "27 Items", 
        },
        {
            'img' : '/static/assets/images/nft/6.jpg', 
            'img1' : '/static/assets/images/team/6.jpg', 
            'title' : 'Virtual Reality', 
            'name' : "27 Items", 
        },
        {
            'img' : '/static/assets/images/nft/7.jpg', 
            'img1' : '/static/assets/images/team/7.jpg', 
            'title' : 'Digital Arts', 
            'name' : "27 Items", 
        },
        {
            'img' : '/static/assets/images/nft/8.jpg', 
            'img1' : '/static/assets/images/team/8.jpg', 
            'title' : 'Sports', 
            'name' : "27 Items", 
        },
        {
            'img' : '/static/assets/images/nft/9.jpg', 
            'img1' : '/static/assets/images/team/1.jpg', 
            'title' : 'Photography', 
            'name' : "27 Items", 
        },
        {
            'img' : '/static/assets/images/nft/10.jpg', 
            'img1' : '/static/assets/images/team/2.jpg', 
            'title' : 'Illustrations', 
            'name' : "27 Items", 
        },
        {
            'img' : '/static/assets/images/nft/11.jpg', 
            'img1' : '/static/assets/images/team/3.jpg', 
            'title' : 'Animations', 
            'name' : "27 Items", 
        },
        {
            'img' : '/static/assets/images/nft/12.jpg', 
            'img1' : '/static/assets/images/team/4.jpg', 
            'title' : 'Virtual Reality', 
            'name' : "27 Items", 
        }
    ]
    return {"collections": collections}


# portfolios2 data

def global_portfolios2(request):
    portfolios2 = [
        {
            'img' : '/static/assets/images/portfolio/1.jpg', 
            'title' : 'Artboard Studio', 
            'name' : 'Custom Branding', 
        },
        {
            'img' : '/static/assets/images/projects/2.jpg', 
            'title' : 'The Portrait', 
            'name' : 'Custom Branding', 
        },
        {
            'img' : '/static/assets/images/portfolio/4.jpg', 
            'title' : 'Photo Retouching', 
            'name' : 'Custom Branding', 
        },
        {
            'img' : '/static/assets/images/projects/3.jpg', 
            'title' : 'Villa in Dallas', 
            'name' : 'Custom Branding', 
        },
        {
            'img' : '/static/assets/images/projects/6.jpg', 
            'title' : 'The Pen and Books', 
            'name' : 'Custom Branding', 
        },
        {
            'img' : '/static/assets/images/projects/7.jpg', 
            'title' : 'Mercedez-Benz Coupe', 
            'name' : 'Custom Branding', 
        },
        {
            'img' : '/static/assets/images/portfolio/8.jpg', 
            'title' : 'Inspiration Board', 
            'name' : 'Custom Branding', 
        },
        {
            'img' : '/static/assets/images/projects/1.jpg', 
            'title' : 'The Cup of Coffee', 
            'name' : 'Custom Branding', 
        },
        {
            'img' : '/static/assets/images/portfolio/3.jpg', 
            'title' : 'The Cactus Plant', 
            'name' : 'Custom Branding', 
        },
        {
            'img' : '/static/assets/images/projects/4.jpg', 
            'title' : 'The Yellow Bag', 
            'name' : 'Custom Branding', 
        },
        {
            'img' : '/static/assets/images/portfolio/6.jpg', 
            'title' : 'The Teapot Table', 
            'name' : 'Custom Branding', 
        },
        {
            'img' : '/static/assets/images/portfolio/5.jpg', 
            'title' : 'The Orange', 
            'name' : 'Custom Branding', 
        }
    ]
    return {"portfolios2": portfolios2}


# hostings data

def global_hostings(request):
    hostings = [
        {
            'img' : '/static/assets/images/hosting/1.png', 
            'title' : 'Shared Hosting', 
            'month' : 'Starting $2.99/month', 
        },
        {
            'img' : '/static/assets/images/hosting/2.png', 
            'title' : 'VPS Hosting', 
            'month' : 'Starting $2.99/month', 
        },
        {
            'img' : '/static/assets/images/hosting/3.png', 
            'title' : 'Dedicated Server', 
            'month' : 'Starting $2.99/month', 
        },
        {
            'img' : '/static/assets/images/hosting/4.png', 
            'title' : 'Cloud Hosting', 
            'month' : 'Starting $2.99/month', 
        },
        {
            'img' : '/static/assets/images/hosting/5.png', 
            'title' : 'Reseller Hosting', 
            'month' : 'Starting $2.99/month', 
        }
    ]
    return {"hostings": hostings}


# counters3 data

def global_counters3(request):
    counters3 = [
        {
            'target' : '11124',
            'number' : '8054',
            'symbol' : '+',
            'title' : 'Customers',
        },
        {
            'target' : '25',
            'number' : '1',
            'symbol' : '+',
            'title' : 'Awards',
        },
        {
            'target' : '9',
            'number' : '1',
            'symbol' : '+',
            'title' : 'Countries',
        }
    ]
    return {"counters3": counters3}


# counters4 data

def global_counters4(request):
    counters4 = [
        {
            'icon' : 'check-circle',
            'target' : '49',
            'number' : '1',
            'symbol' : '+',
            'title' : 'Yoga Courses',
        },
        {
            'icon' : 'coffee',
            'target' : '2461',
            'number' : '1',
            'symbol' : '+',
            'title' : 'Cup of Coffee',
        },
        {
            'icon' : 'user-check',
            'target' : '99',
            'number' : '1',
            'symbol' : '%',
            'title' : 'Client Satisfaction',
        }
    ]
    return {"counters4": counters4}


# navs data

def global_navs(request):
    navs = [
        {
            'title' : 'Monday',
            'id' : 'mondayschedule',
            'link' : '#monday',
            'controls' : 'monday',
            'style' : 'nav-item',
            'class' : 'active',
        },
        {
            'title' : 'Tuesday',
            'id' : 'tuesdayschedule',
            'link' : '#tuesday',
            'controls' : 'tuesday',
            'style' : 'nav-item mt-2',
            'class' : '',
        },
        {
            'title' : 'Wednesday',
            'id' : 'wednesdayschedule',
            'link' : '#wednesday',
            'controls' : 'wednesday',
            'style' : 'nav-item mt-2',
            'class' : '',
        },
        {
            'title' : 'Thursday',
            'id' : 'thursdayschedule',
            'link' : '#thursday',
            'controls' : 'thursday',
            'style' : 'nav-item mt-2',
            'class' : '',
        },
        {
            'title' : 'Friday',
            'id' : 'fridayschedule',
            'link' : '#friday',
            'controls' : 'friday',
            'style' : 'nav-item mt-2',
            'class' : '',
        },
        {
            'title' : 'Saturday',
            'id' : 'saturdayschedule',
            'link' : '#saturday',
            'controls' : 'saturday',
            'style' : 'nav-item mt-2',
            'class' : '',
        }
    ]
    return {"navs": navs}


# mondays data

def global_mondays(request):
    mondays = [
        {
            'img' : '/static/assets/images/team/yoga1.jpg', 
            'title' : 'Dhanurasana',
            'name' : '- Jack John',
            'time' : '8:00AM',
        },
        {
            'img' : '/static/assets/images/team/yoga2.jpg', 
            'title' : 'Bhujangasana',
            'name' : '- Jeremiah Green',
            'time' : '9:00AM',
        },
        {
            'img' : '/static/assets/images/team/yoga3.jpg', 
            'title' : 'Sirsasana',
            'name' : '- Christina Vasquez',
            'time' : '10:00AM',
        },
        {
            'img' : '/static/assets/images/team/yoga4.jpg', 
            'title' : 'Padmasana',
            'name' : '- Lillian Boldt',
            'time' : '11:00AM',
        },
        {
            'img' : '/static/assets/images/team/yoga1.jpg', 
            'title' : 'Utthita Parsvakonasana',
            'name' : '- Jack John',
            'time' : '12:00AM',
        },
        {
            'img' : '/static/assets/images/team/yoga2.jpg', 
            'title' : 'Natarajasana',
            'name' : '- Jeremiah Green',
            'time' : '1:00PM',
        },
        {
            'img' : '/static/assets/images/team/yoga3.jpg', 
            'title' : 'Halasana',
            'name' : '- Christina Vasquez',
            'time' : '2:00PM',
        },
        {
            'img' : '/static/assets/images/team/yoga4.jpg', 
            'title' : 'Vajrasana',
            'name' : '- Lillian Boldt',
            'time' : '3:00PM',
        }
    ]
    return {"mondays": mondays}


# coaches data

def global_coaches(request):
    coaches = [
        {
            'img' : '/static/assets/images/team/yoga1.jpg', 
            'name' : 'Jack John',
            'title' : 'Yoga Coach',
        },
        {
            'img' : '/static/assets/images/team/yoga2.jpg', 
            'name' : 'Jeremiah Green',
            'title' : 'Yoga Coach',
        },
        {
            'img' : '/static/assets/images/team/yoga3.jpg', 
            'name' : 'Christin Vasquez',
            'title' : 'Yoga Coach',
        },
        {
            'img' : '/static/assets/images/team/yoga4.jpg', 
            'name' : 'Lillian Boldt',
            'title' : 'Yoga Coach',
        }
    ]
    return {"coaches": coaches}


# causes data

def global_causes(request):
    causes = [
        {
            'img' : '/static/assets/images/cause/1.jpg', 
            'title' : 'Child Support',
            'desc' : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'raised' : 'Raised 60% of $10000',
            'price' : '$ 6000',
            'price2' : '$ 10000',
        },
        {
            'img' : '/static/assets/images/cause/2.jpg', 
            'title' : 'Clean Water',
            'desc' : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'raised' : 'Raised 60% of $10000',
            'price' : '$ 6000',
            'price2' : '$ 10000',
        },
        {
            'img' : '/static/assets/images/cause/3.jpg', 
            'title' : 'Help to Mothers',
            'desc' : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'raised' : 'Raised 60% of $10000',
            'price' : '$ 6000',
            'price2' : '$ 10000',
        },
        {
            'img' : '/static/assets/images/cause/4.jpg', 
            'title' : 'New School',
            'desc' : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'raised' : 'Raised 60% of $10000',
            'price' : '$ 6000',
            'price2' : '$ 10000',
        },
        {
            'img' : '/static/assets/images/cause/5.jpg', 
            'title' : 'Food for All',
            'desc' : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'raised' : 'Raised 60% of $10000',
            'price' : '$ 6000',
            'price2' : '$ 10000',
        },
        {
            'img' : '/static/assets/images/cause/6.jpg', 
            'title' : 'Water For All',
            'desc' : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'raised' : 'Raised 60% of $10000',
            'price' : '$ 6000',
            'price2' : '$ 10000',
        }
    ]
    return {"causes": causes}


# volunteers data

def global_volunteers(request):
    volunteers = [
        {
            'img' : '/static/assets/images/team/1.jpg', 
            'name' : 'Jack John',
            'title' : 'Volunteer',
        },
        {
            'img' : '/static/assets/images/team/2.jpg', 
            'name' : 'Jeremiah Green',
            'title' : 'Volunteer',
        },
        {
            'img' : '/static/assets/images/team/3.jpg', 
            'name' : 'Christin Vasquez',
            'title' : 'Volunteer',
        },
        {
            'img' : '/static/assets/images/team/4.jpg', 
            'name' : 'Lillian Boldt',
            'title' : 'Volunteer',
        }
    ]
    return {"volunteers": volunteers}


# services2 data

def global_services2(request):
    services2 = [
        {
            'id' : 1,
            'title' : 'Branding Strategy',
            'style' : '',
        },
        {
            'id' : 2,
            'title' : 'Digital Solutions',
            'style' : 'mt-2',
        },
        {
            'id' : 3,
            'title' : 'Social Media',
            'style' : 'mt-2',
        },
        {
            'id' : 4,
            'title' : 'Insightful Analytics',
            'style' : 'mt-2',
        },
        {
            'id' : 5,
            'title' : 'Business Consultation',
            'style' : 'mt-2',
        },
        {
            'id' : 6,
            'title' : '24-7 Support',
            'style' : 'mt-2',
        }
    ]
    return {"services2": services2}


# teams2 data

def global_teams2(request):
    teams2 = [
        {
            'img' : '/static/assets/images/team/1.jpg', 
            'name' : 'Jack John',
            'title' : 'Founder & CEO',
        },
        {
            'img' : '/static/assets/images/team/2.jpg', 
            'name' : 'Jeremiah Green',
            'title' : 'CTO',
        },
        {
            'img' : '/static/assets/images/team/3.jpg', 
            'name' : 'Christina Vasquez',
            'title' : 'Developer',
        },
        {
            'img' : '/static/assets/images/team/4.jpg', 
            'name' : 'Lillian Boldt',
            'title' : 'Product Manager',
        },
        {
            'img' : '/static/assets/images/team/5.jpg', 
            'name' : 'Krista John',
            'title' : 'Creative Director',
        },
        {
            'img' : '/static/assets/images/team/6.jpg', 
            'name' : 'Ricky Peters',
            'title' : 'Market Researcher',
        },
        {
            'img' : '/static/assets/images/team/7.jpg', 
            'name' : 'Roger Jackson',
            'title' : 'Marketing Expert',
        },
        {
            'img' : '/static/assets/images/team/8.jpg', 
            'name' : 'Camille Smith',
            'title' : 'Director of HR',
        }
    ]
    return {"teams2": teams2}


# reviews data

def global_reviews(request):
    reviews = [
        {
            'img' : '/static/assets/images/team/1.jpg', 
            'name' : 'Calvin Carlo', 
            'title' : 'Manager', 
            'title1' : 'Creativity', 
            'desc' : "According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero Launch your campaign and benefit from our expertise.", 
            'style' : "col-12", 
        },
        {
            'img' : '/static/assets/images/team/2.jpg', 
            'name' : 'Carl Oliver', 
            'title' : 'Manager', 
            'title1' : 'Modern', 
            'desc' : "I didn't know a thing about icon design until I read this book. Now I can create any icon I need in no time. Great resource!", 
            'style' : "col-12 mt-4", 
        },
        {
            'img' : '/static/assets/images/team/3.jpg', 
            'name' : 'Barbara McIntosh', 
            'title' : 'Manager', 
            'title1' : 'Social Marketing', 
            'desc' : "The best part about Coral is every time I pay my employees, my bank balance doesn't go down like it used to. Looking forward to spending this extra cash when I figure out why my card is being declined.", 
            'style' : "col-12 mt-4",
        }
    ]
    return {"reviews": reviews}


# reviews1 data

def global_reviews1(request):
    reviews1 = [
        {
            'img' : '/static/assets/images/team/4.jpg', 
            'name' : 'Janisha Doll', 
            'title' : 'Manager', 
            'title1' : 'Digital Marketing', 
            'desc' : "I used to have to remit tax to the EU and with Coral I somehow don't have to do that anymore. Nervous to travel there now though.", 
            'style' : "col-12",
        },
        {
            'img' : '/static/assets/images/team/5.jpg', 
            'name' : 'Esther Howard', 
            'title' : 'Manager', 
            'title1' : 'SEO', 
            'desc' : "There are so many things I had to do with my old software that I just don't do at all with Coral. Suspicious but I can't say I don't love it.", 
            'style' : "col-12 mt-4",
        },
        {
            'img' : '/static/assets/images/team/6.jpg', 
            'name' : 'Joshua William', 
            'title' : 'Manager', 
            'title1' : 'Classic', 
            'desc' : "I'm trying to get a hold of someone in support, I'm in a lot of trouble right now and they are saying it has something to do with my books. Please get back to me right away.", 
            'style' : "col-12 mt-4",
        }
    ]
    return {"reviews1": reviews1}


# reviews2 data

def global_reviews2(request):
    reviews2 = [
        {
            'img' : '/static/assets/images/team/7.jpg', 
            'name' : 'Thomas Israel', 
            'title' : 'Manager', 
            'title1' : 'Features', 
            'desc' : "This is the fourth email I've sent to your support team. I am literally being held in jail for tax fraud. Please answer your damn emails, this is important.", 
            'style' : "col-md-6 col-lg-12",
        },
        {
            'img' : '/static/assets/images/team/8.jpg', 
            'name' : 'Jill Webb', 
            'title' : 'Manager', 
            'title1' : 'Branding', 
            'desc' : "I used to have to remit tax to the EU and with Coral I somehow don't have to do that anymore. Nervous to travel there now though.", 
            'style' : "col-md-6 col-lg-12 mt-4",
        },
        {
            'img' : '/static/assets/images/team/4.jpg', 
            'name' : 'Jennifer White', 
            'title' : 'Manager', 
            'title1' : 'Product Design', 
            'desc' : "The team is exceptional. Their passion for what they do is evident in the results they deliver. We're grateful to have them as a trusted partner in our journey.", 
            'style' : "col-md-6 col-lg-12 mt-4",
        }
    ]
    return {"reviews2": reviews2}


# wallets data

def global_wallets(request):
    wallets = [
        {
            'img' : '/static/assets/images/wallet/MetaMask_Fox.svg', 
            'title' : 'MetaMask', 
            'desc' : "Learn about how to get the wallet and much more clicking", 
        },
        {
            'img' : '/static/assets/images/wallet/aave.svg', 
            'title' : 'Aave', 
            'desc' : "Learn about how to get the wallet and much more clicking", 
        },
        {
            'img' : '/static/assets/images/wallet/Airswap.svg', 
            'title' : 'Airswap', 
            'desc' : "Learn about how to get the wallet and much more clicking", 
        },
        {
            'img' : '/static/assets/images/wallet/Compound.svg', 
            'title' : 'Compound', 
            'desc' : "Learn about how to get the wallet and much more clicking", 
        },
        {
            'img' : '/static/assets/images/wallet/ddexsvg.svg', 
            'title' : 'DDEX', 
            'desc' : "Learn about how to get the wallet and much more clicking", 
        },
        {
            'img' : '/static/assets/images/wallet/defi-saver.svg', 
            'title' : 'Defi Saver', 
            'desc' : "Learn about how to get the wallet and much more clicking", 
        },
        {
            'img' : '/static/assets/images/wallet/dYdX.svg', 
            'title' : 'DYDX', 
            'desc' : "Learn about how to get the wallet and much more clicking", 
        },
        {
            'img' : '/static/assets/images/wallet/idex.svg', 
            'title' : 'IDEX', 
            'desc' : "Learn about how to get the wallet and much more clicking", 
        },
        {
            'img' : '/static/assets/images/wallet/kyber.svg', 
            'title' : 'Kyber', 
            'desc' : "Learn about how to get the wallet and much more clicking", 
        },
        {
            'img' : '/static/assets/images/wallet/maker.svg', 
            'title' : 'Maker', 
            'desc' : "Learn about how to get the wallet and much more clicking", 
        },
        {
            'img' : '/static/assets/images/wallet/nuo.svg', 
            'title' : 'NUO', 
            'desc' : "Learn about how to get the wallet and much more clicking", 
        },
        {
            'img' : '/static/assets/images/wallet/PoolTogether.svg', 
            'title' : 'PoolTogether', 
            'desc' : "Learn about how to get the wallet and much more clicking", 
        },
        {
            'img' : '/static/assets/images/wallet/sablier.svg', 
            'title' : 'Sablier', 
            'desc' : "Learn about how to get the wallet and much more clicking", 
        },
        {
            'img' : '/static/assets/images/wallet/set.svg', 
            'title' : 'Set', 
            'desc' : "Learn about how to get the wallet and much more clicking", 
        },
        {
            'img' : '/static/assets/images/wallet/uniswap.svg', 
            'title' : 'Uniswap', 
            'desc' : "Learn about how to get the wallet and much more clicking", 
        },
        {
            'img' : '/static/assets/images/wallet/zerion.svg', 
            'title' : 'Zerion', 
            'desc' : "Learn about how to get the wallet and much more clicking", 
        }
    ]
    return {"wallets": wallets}


# creators data

def global_creators(request):
    creators = [
        {
            'img' : '/static/assets/images/team/1.jpg', 
            'name' : 'Steven Townsend', 
            'title' : "@StreetBoy", 
            'btn' : "Follow", 
        },
        {
            'img' : '/static/assets/images/team/2.jpg', 
            'name' : 'Tiffany Betancourt', 
            'title' : "@CutieGirl", 
            'btn' : "Follow", 
        },
        {
            'img' : '/static/assets/images/team/3.jpg', 
            'name' : 'Mari Harrington', 
            'title' : "@NorseQueen", 
            'btn' : "Follow", 
        },
        {
            'img' : '/static/assets/images/team/4.jpg', 
            'name' : 'Floyd Glasgow', 
            'title' : "@BigBull", 
            'btn' : "Follow", 
        },
        {
            'img' : '/static/assets/images/team/5.jpg', 
            'name' : 'Donna Schultz', 
            'title' : "@Angel", 
            'btn' : "Follow", 
        },
        {
            'img' : '/static/assets/images/team/6.jpg', 
            'name' : 'Joshua Morris', 
            'title' : "@CrazyAnyone", 
            'btn' : "Follow", 
        },
        {
            'img' : '/static/assets/images/team/7.jpg', 
            'name' : 'Carl Williams', 
            'title' : "@LooserBad", 
            'btn' : "Follow", 
        },
        {
            'img' : '/static/assets/images/team/8.jpg', 
            'name' : 'Eugene Green', 
            'title' : "@KristyHoney", 
            'btn' : "Follow", 
        }
    ]
    return {"creators": creators}


# portfolios3 data

def global_portfolios3(request):
    portfolios3 = [
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
    return {"portfolios3": portfolios3}


# portfolios4 data

def global_portfolios4(request):
    portfolios4 = [
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
        }
    ]
    return {"portfolios4": portfolios4}


# portfolios5 data

def global_portfolios5(request):
    portfolios5 = [
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
            'id' : 4,
            'img' : '/static/assets/images/portfolio/4.jpg',
            'title' : 'Photo Retouching',
            'name' : 'Custom Branding',
        },
        {
            'id' : 3,
            'img' : '/static/assets/images/projects/3.jpg',
            'title' : 'Villa in Dallas',
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
            'id' : 5,
            'img' : '/static/assets/images/portfolio/5.jpg',
            'title' : 'The Cup of Coffee',
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
        }
    ]
    return {"portfolios5": portfolios5}


# portfolios6 data

def global_portfolios6(request):
    portfolios6 = [
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
            'id' : 4,
            'img' : '/static/assets/images/portfolio/4.jpg',
            'title' : 'Photo Retouching',
            'name' : 'Custom Branding',
        },
        {
            'id' : 3,
            'img' : '/static/assets/images/projects/3.jpg',
            'title' : 'Villa in Dallas',
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
            'id' : 5,
            'img' : '/static/assets/images/portfolio/5.jpg',
            'title' : 'The Cup of Coffee',
            'name' : 'Custom Branding',
        }
    ]
    return {"portfolios6": portfolios6}


# portfolios7 data

def global_portfolios7(request):
    portfolios7 = [
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
            'id' : 4,
            'img' : '/static/assets/images/portfolio/4.jpg',
            'title' : 'Photo Retouching',
            'name' : 'Custom Branding',
        },
        {
            'id' : 3,
            'img' : '/static/assets/images/projects/3.jpg',
            'title' : 'Villa in Dallas',
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
            'id' : 5,
            'img' : '/static/assets/images/portfolio/5.jpg',
            'title' : 'The Cup of Coffee',
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
        }
    ]
    return {"portfolios7": portfolios7}


# portfolios8 data

def global_portfolios8(request):
    portfolios8 = [
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
            'id' : 4,
            'img' : '/static/assets/images/portfolio/4.jpg',
            'title' : 'Photo Retouching',
            'name' : 'Custom Branding',
        },
        {
            'id' : 3,
            'img' : '/static/assets/images/projects/3.jpg',
            'title' : 'Villa in Dallas',
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
            'id' : 10,
            'img' : '/static/assets/images/projects/1.jpg',
            'title' : 'The Cactus Plants',
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
        },
        {
            'id' : 11,
            'img' : '/static/assets/images/portfolio/6.jpg',
            'title' : 'The Yellow Bag',
            'name' : 'Custom Branding',
        },
        {
            'id' : 5,
            'img' : '/static/assets/images/portfolio/5.jpg',
            'title' : 'The Cup of Coffee',
            'name' : 'Custom Branding',
        }
    ]
    return {"portfolios8": portfolios8}


# images data

def global_images(request):
    images = [
        {
            'img' : '/static/assets/images/projects/3.jpg', 
        },
        {
            'img' : '/static/assets/images/portfolio/2.jpg', 
        },
        {
            'img' : '/static/assets/images/projects/5.jpg', 
        },
        {
            'img' : '/static/assets/images/projects/6.jpg', 
        },
        {
            'img' : '/static/assets/images/projects/8.jpg', 
        },
        {
            'img' : '/static/assets/images/portfolio/3.jpg', 
        },
        {
            'img' : '/static/assets/images/portfolio/4.jpg', 
        }
    ]
    return {"images": images}


# posts data

def global_posts(request):
    posts = [
        {
            'img' : '/static/assets/images/blog/1.jpg', 
            'title' : 'Consultant Business',
            'date' : '15th July 2025',
            'style' : '',
        },
        {
            'img' : '/static/assets/images/blog/2.jpg', 
            'title' : 'Grow Your Business',
            'date' : '15th July 2025',
            'style' : 'mt-3',
        },
        {
            'img' : '/static/assets/images/blog/3.jpg', 
            'title' : 'Look On The Glorious Balance',
            'date' : '15th July 2025',
            'style' : 'mt-3',
        }
    ]
    return {"posts": posts}


# tags data

def global_tags(request):
    tags = [
        {
            'title' : 'Business',
        },
        {
            'title' : 'Finance',
        },
        {
            'title' : 'Marketing',
        },
        {
            'title' : 'Fashion',
        },
        {
            'title' : 'Bride',
        },
        {
            'title' : 'Lifestyle',
        },
        {
            'title' : 'Travel',
        },
        {
            'title' : 'Beauty',
        },
        {
            'title' : 'Video',
        },
        {
            'title' : 'Audio',
        }
    ]
    return {"tags": tags}


# images2 data

def global_images2(request):
    images2 = [
        {
            'img' : '/static/assets/images/portfolio/1.jpg', 
        },
        {
            'img' : '/static/assets/images/projects/3.jpg', 
        },
        {
            'img' : '/static/assets/images/portfolio/2.jpg', 
        },
        {
            'img' : '/static/assets/images/projects/5.jpg', 
        },
        {
            'img' : '/static/assets/images/projects/6.jpg', 
        },
        {
            'img' : '/static/assets/images/projects/8.jpg', 
        },
        {
            'img' : '/static/assets/images/portfolio/3.jpg', 
        },
        {
            'img' : '/static/assets/images/portfolio/4.jpg', 
        }
    ]
    return {"images2": images2}


# contacts data

def global_contacts(request):
    contacts = [
        {
            'icon' : 'phone', 
            'title' : 'Phone',
            'desc' : 'Start working with Coral that can provide everything',
            'desc1' : '',
            'link' : 'tel:+152534-468-854',
            'name' : '+152 534-468-854',
            'style' : 'col-md-4',
        },
        {
            'icon' : 'mail', 
            'title' : 'Email',
            'desc' : 'Start working with Coral that can provide everything',
            'desc1' : '',
            'link' : 'mailto:contact@example.com',
            'name' : 'contact@example.com',
            'style' : 'col-md-4 mt-5 pt-2 mt-md-0 pt-md-0',
        },
        {
            'icon' : 'map-pin', 
            'title' : 'Location',
            'desc' : 'C/54 Northwest Freeway, Suite 558,',
            'desc1' : 'Houston, USA 485',
            'link' : '',
            'name' : 'View on Google map',
            'style' : 'col-md-4 mt-5 pt-2 mt-md-0 pt-md-0',
        }
    ]
    return {"contacts": contacts}



def site_config(request):
    """
    Provides site-wide configuration like site name, copyright info.
    """
    return {
        'site_name': 'Coral',
        'copyright_year': 2025,
    }