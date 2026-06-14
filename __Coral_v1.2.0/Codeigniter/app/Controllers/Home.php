<?php

namespace App\Controllers;

class Home extends BaseController
{
    private function getServices(){
        return [
            [
                'id' => 1,
                'icon' => 'aperture', 
                'title' => 'Branding Strategy',
                'desc' => 'Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.',
                'style' => 'col-lg-4 col-md-6 col-12',
            ],
            [
                'id' => 2,
                'icon' => 'send', 
                'title' => 'Digital Solutions',
                'desc' => 'Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.',
                'style' => 'col-lg-4 col-md-6 col-12 mt-4 mt-md-0 pt-2 pt-md-0',
            ],
            [
                'id' => 3,
                'icon' => 'users', 
                'title' => 'Social Media',
                'desc' => 'Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.',
                'style' => 'col-lg-4 col-md-6 col-12 mt-4 mt-lg-0 pt-2 pt-lg-0',
            ],
            [
                'id' => 4,
                'icon' => 'star', 
                'title' => 'Insightful Analytics',
                'desc' => "Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.",
            ],
            [
                'id' => 5,
                'icon' => 'bookmark', 
                'title' => 'Business Consultation',
                'desc' => "Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.",
            ],
            [
                'id' => 6,
                'icon' => 'message-circle', 
                'title' => '24-7 Support',
                'desc' => "Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.",
            ],
            [
                'id' => 7,
                'img' => 'assets/images/service/cardiology.svg',
                'title' => 'Cardiology',
                'desc' => 'Success needs hard work & quality work.',
            ],
            [
                'id' => 8,
                'img' => 'assets/images/service/neurology.svg',
                'title' => 'Neurology',
                'desc' => 'Success needs hard work & quality work.',
            ],
            [
                'id' => 9,
                'img' => 'assets/images/service/orthopaedic.svg',
                'title' => 'Orthopaedic',
                'desc' => 'Success needs hard work & quality work.',
            ],
            [
                'id' => 10,
                'img' => 'assets/images/service/gynecology.svg',
                'title' => 'Gynecology',
                'desc' => 'Success needs hard work & quality work.',
            ],
            [
                'id' => 11,
                'img' => 'assets/images/service/dermatology.svg',
                'title' => 'Dermatology',
                'desc' => 'Success needs hard work & quality work.',
            ],
            [
                'id' => 12,
                'icon' => 'zap', 
                'title' => 'Create Item', 
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
            ],
            [
                'id' => 13,
                'icon' => 'bookmark', 
                'title' => 'Collect', 
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
            ],
            [
                'id' => 14,
                'icon' => 'target', 
                'title' => 'Sell Item', 
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
            ],
            [
                'id' => 15,
                'img' => 'assets/images/asana/ardha_padmasana.png',
                'title' => 'Ardha Padmasana', 
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
            ],
            [
                'id' => 16,
                'img' => 'assets/images/asana/bhujangasana.png',
                'title' => 'Bhujangasana', 
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
            ],
            [
                'id' => 17,
                'img' => 'assets/images/asana/halasana.png',
                'title' => 'Halasana', 
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
            ],
            [
                'id' => 18,
                'img' => 'assets/images/asana/natarajasana.png',
                'title' => 'Natarajasana', 
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
            ],
            [
                'id' => 19,
                'icon' => 'aperture',
                'title' => 'Breakfast Programme', 
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
            ],
            [
                'id' => 20,
                'icon' => 'send',
                'title' => 'Food Assistance', 
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
            ],
            [
                'id' => 21,
                'icon' => 'users',
                'title' => 'Social Works', 
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
            ]
        ];
    }

    private function getCounters(){
        return [
            [
                'icon' => 'check-circle',
                'target' => '49',
                'number' => '1',
                'symbol' => '+',
                'title' => 'Project Completed',
            ],
            [
                'icon' => 'coffee',
                'target' => '2461',
                'number' => '1',
                'symbol' => '+',
                'title' => 'Cup of Coffee',
            ],
            [
                'icon' => 'user-check',
                'target' => '99',
                'number' => '1',
                'symbol' => '%',
                'title' => 'Client Satisfaction',
            ]
        ];
    }

    private function getProjects(){
        return [
            [
                'img' => 'assets/images/projects/1.jpg', 
                'title' => 'Artboard Studio',
                'name' => 'Custom Branding',
            ],
            [
                'img' => 'assets/images/projects/2.jpg', 
                'title' => 'The Portrait',
                'name' => 'Custom Branding',
            ],
            [
                'img' => 'assets/images/projects/3.jpg', 
                'title' => 'Villa in Dallas',
                'name' => 'Custom Branding',
            ],
            [
                'img' => 'assets/images/projects/4.jpg', 
                'title' => 'Photo Retouching',
                'name' => 'Custom Branding',
            ],
            [
                'img' => 'assets/images/projects/5.jpg', 
                'title' => 'Mercedez-Benz Coupe',
                'name' => 'Custom Branding',
            ],
            [
                'img' => 'assets/images/projects/6.jpg', 
                'title' => 'Inspiration Board',
                'name' => 'Custom Branding',
            ]
        ];
    }

    private function getMinds(){
        return [
            [
                'img' => 'assets/images/team/1.jpg', 
                'name' => 'Jack John',
                'title' => 'Founder & CEO',
            ],
            [
                'img' => 'assets/images/team/2.jpg', 
                'name' => 'Jeremiah Green',
                'title' => 'CTO',
            ],
            [
                'img' => 'assets/images/team/3.jpg', 
                'name' => 'Christin Vasquez',
                'title' => 'Developer',
            ],
            [
                'img' => 'assets/images/team/4.jpg', 
                'name' => 'Lillian Boldt',
                'title' => 'Product Manager',
            ]
        ];
    }

    private function getReview(){
        return [
            [
                'img' => 'assets/images/team/1.jpg', 
                'name' => 'Calvin Carlo',
                'title' => 'Manager',
                'title1' => 'Creativity',
                'desc' => "According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero Launch your campaign and benefit from our expertise.",
            ],
            [
                'img' => 'assets/images/team/2.jpg', 
                'name' => 'Carl Oliver',
                'title' => 'Manager',
                'title1' => 'Modern',
                'desc' => "I didn't know a thing about icon design until I read this book. Now I can create any icon I need in no time. Great resource!",
            ],
            [
                'img' => 'assets/images/team/3.jpg', 
                'name' => 'Barbara McIntosh',
                'title' => 'Manager',
                'title1' => 'Social Marketing',
                'desc' => "The best part about Coral is every time I pay my employees, my bank balance doesn't go down like it used to. Looking forward to spending this extra cash when I figure out why my card is being declined.",
            ],
            [
                'img' => 'assets/images/team/4.jpg', 
                'name' => 'Janisha Doll',
                'title' => 'Manager',
                'title1' => 'Digital Marketing',
                'desc' => "I used to have to remit tax to the EU and with Coral I somehow don't have to do that anymore. Nervous to travel there now though.",
            ],
            [
                'img' => 'assets/images/team/5.jpg', 
                'name' => 'Esther Howard',
                'title' => 'Manager',
                'title1' => 'SEO',
                'desc' => "There are so many things I had to do with my old software that I just don't do at all with Coral. Suspicious but I can't say I don't love it.",
            ],
            [
                'img' => 'assets/images/team/6.jpg', 
                'name' => 'Joshua William',
                'title' => 'Manager',
                'title1' => 'Classic',
                'desc' => "I'm trying to get a hold of someone in support, I'm in a lot of trouble right now and they are saying it has something to do with my books. Please get back to me right away.",
            ]
        ];
    }

    private function getBlogs(){
        return [
            [
                'id' => 1,
                'img' => 'assets/images/blog/1.jpg', 
                'name' => 'Coral', 
                'title' => 'Utilizing mobile technology in the field',
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
            ],
            [
                'id' => 2,
                'img' => 'assets/images/blog/2.jpg', 
                'name' => 'Coral', 
                'title' => 'Success Story Businessman in Harlem',
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
            ],
            [
                'id' => 3,
                'img' => 'assets/images/blog/3.jpg', 
                'name' => 'Coral', 
                'title' => 'How Does Marketing Automation Help Lead',
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
            ],
            [
                'id' => 4,
                'img' => 'assets/images/blog/4.jpg', 
                'name' => 'Coral', 
                'title' => "Working from home Lets get started",
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
            ],
            [
                'id' => 5,
                'img' => 'assets/images/blog/5.jpg', 
                'name' => 'Coral', 
                'title' => "The Ultimate Success Formula - How",
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
            ],
            [
                'id' => 6,
                'img' => 'assets/images/blog/6.jpg', 
                'name' => 'Coral', 
                'title' => "The Major Differences Between SEO - Local SEO",
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
            ],
            [
                'id' => 7,
                'img' => 'assets/images/blog/7.jpg', 
                'name' => 'Coral', 
                'title' => "Building intelligent transportation systems",
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
            ],
            [
                'id' => 8,
                'img' => 'assets/images/blog/8.jpg', 
                'name' => 'Coral', 
                'title' => "12 Questions to Ask Before Hiring a SEO Agency",
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
            ],
            [
                'id' => 9,
                'img' => 'assets/images/blog/9.jpg', 
                'name' => 'Coral', 
                'title' => "How a Social Media Audit Can Help You",
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
            ]
        ];
    }

    private function getSliders(){
        return [
            [
                'img' => 'assets/images/coin/Bitcoin-BTC.png', 
                'title' => 'Bitcoin (BTC)',
                'price' => '$45762',
                'percentage' => '5.25%',
                'class' => 'success',
            ],
            [
                'img' => 'assets/images/coin/Ethereum-ETH.png', 
                'title' => 'Ethereum (ETH)',
                'price' => '$45762',
                'percentage' => '5.25%',
                'class' => 'danger',
            ],
            [
                'img' => 'assets/images/coin/Avalanche-AVAX.png', 
                'title' => 'Avalanche (AVAX)',
                'price' => '$45762',
                'percentage' => '5.25%',
                'class' => 'success',
            ],
            [
                'img' => 'assets/images/coin/BNB-BNB.png', 
                'title' => 'BNB (BNB)',
                'price' => '$45762',
                'percentage' => '5.25%',
                'class' => 'success',
            ],
            [
                'img' => 'assets/images/coin/Cardano-ADA.png', 
                'title' => 'Cardano (ADA)',
                'price' => '$45762',
                'percentage' => '5.25%',
                'class' => 'danger',
            ],
            [
                'img' => 'assets/images/coin/Dai-DAI.png', 
                'title' => 'Dai (DAI)',
                'price' => '$45762',
                'percentage' => '5.25%',
                'class' => 'danger',
            ],
            [
                'img' => 'assets/images/coin/Polkadot-DOT.png', 
                'title' => 'Polkadot (DOT)',
                'price' => '$45762',
                'percentage' => '5.25%',
                'class' => 'success',
            ],
            [
                'img' => 'assets/images/coin/Shiba-Inu-SHIB.png', 
                'title' => 'Shiba Inu (SHIB)',
                'price' => '$45762',
                'percentage' => '5.25%',
                'class' => 'danger',
            ]
        ];
    }

    private function getTables(){
        return [
            [
                'img' => 'assets/images/coin/Bitcoin-BTC.png', 
                'title' => 'Bitcoin',
                'symbol' => 'BTC',
                'price' => '$34587',
                'percentage' => '-2.5%',
                'dollar' => '-$745',
                'marketcap' => '$725,354M',
                'btn' => 'Trade',
                'class' => 'text-danger',
            ],
            [
                'img' => 'assets/images/coin/Ethereum-ETH.png', 
                'title' => 'Ethereum',
                'symbol' => 'ETH',
                'price' => '$216',
                'percentage' => '+.264%',
                'dollar' => '+$.264',
                'marketcap' => '$11,100M',
                'btn' => 'Trade',
                'class' => 'text-success',
            ],
            [
                'img' => 'assets/images/coin/Avalanche-AVAX.png', 
                'title' => 'Avalanche',
                'symbol' => 'AVAX',
                'price' => '$452',
                'percentage' => '-1.9%',
                'dollar' => '-$1.9',
                'marketcap' => '$45,785M',
                'btn' => 'Trade',
                'class' => 'text-danger',
            ],
            [
                'img' => 'assets/images/coin/BNB-BNB.png', 
                'title' => 'BNB',
                'symbol' => 'BNB',
                'price' => '$154',
                'percentage' => '+1.05%',
                'dollar' => '+$1.05',
                'marketcap' => '$85,478M',
                'btn' => 'Trade',
                'class' => 'text-success',
            ],
            [
                'img' => 'assets/images/coin/Cardano-ADA.png', 
                'title' => 'Cardano',
                'symbol' => 'ADA',
                'price' => '$854',
                'percentage' => '+1.705%',
                'dollar' => '+$1.705',
                'marketcap' => '$112,452M',
                'btn' => 'Trade',
                'class' => 'text-success',
            ],
            [
                'img' => 'assets/images/coin/Dai-DAI.png', 
                'title' => 'Dai',
                'symbol' => 'DAI',
                'price' => '$548',
                'percentage' => '-3.2%',
                'dollar' => '-$3.2',
                'marketcap' => '$4,712M',
                'btn' => 'Trade',
                'class' => 'text-danger',
            ],
            [
                'img' => 'assets/images/coin/Polkadot-DOT.png', 
                'title' => 'Polkadot',
                'symbol' => 'DOT',
                'price' => '$965',
                'percentage' => '+1.465%',
                'dollar' => '+$1.465',
                'marketcap' => '$487,552M',
                'btn' => 'Trade',
                'class' => 'text-success',
            ],
            [
                'img' => 'assets/images/coin/Shiba-Inu-SHIB.png', 
                'title' => 'Shiba Inu',
                'symbol' => 'SHIB',
                'price' => '$4875',
                'percentage' => '-1.08%',
                'dollar' => '-$1.08',
                'marketcap' => '$55,221M',
                'btn' => 'Trade',
                'class' => 'text-danger',
            ]
        ];
    }

    private function getTraders(){
        return [
            [
                'img' => 'assets/images/cpu.svg', 
                'title' => 'Buy & Sell Crypto',
                'desc' => 'Buy or sell Bitcoin, Ethereum, and other crypto assets with your credit card, debit card, or bank account.',
                'btn' => 'Buy Bitcoin'
            ],
            [
                'img' => 'assets/images/analytics.svg', 
                'title' => 'Trade Assets',
                'desc' => 'Discover new and innovative crypto assets with over 200 spot trading pairs and 25 margin trading pairs.',
                'btn' => 'View Exchange'
            ],
            [
                'img' => 'assets/images/exchange.svg', 
                'title' => 'Hedge with Coral Futures',
                'desc' => 'Trade Bitcoin, Ethereum, and other perpetual with up to 100x leverage on Coral Futures.',
                'btn' => 'Trade Futures'
            ],
            [
                'img' => 'assets/images/money.svg', 
                'title' => 'Earn Rewards for Trading',
                'desc' => 'Never miss an opportunity for a little competition. Join our latest campaigns to earn rewards.',
                'btn' => 'Join Competition'
            ]
        ];
    }

    private function getPartners(){
        return [
            [
                'img' => 'assets/images/client/amazon.svg', 
            ],
            [
                'img' => 'assets/images/client/google.svg', 
            ],
            [
                'img' => 'assets/images/client/lenovo.svg', 
            ],
            [
                'img' => 'assets/images/client/paypal.svg', 
            ],
            [
                'img' => 'assets/images/client/shopify.svg', 
            ],
            [
                'img' => 'assets/images/client/spotify.svg', 
            ],
            [
                'img' => 'assets/images/client/amazon.svg', 
            ],
            [
                'img' => 'assets/images/client/google.svg', 
            ],
            [
                'img' => 'assets/images/client/lenovo.svg', 
            ],
            [
                'img' => 'assets/images/client/paypal.svg', 
            ],
            [
                'img' => 'assets/images/client/shopify.svg', 
            ],
            [
                'img' => 'assets/images/client/spotify.svg', 
            ]
        ];
    }

    private function getCounters2(){
        return [
            [
                'icon' => 'check-circle',
                'target' => '49',
                'number' => '1',
                'symbol' => '+',
                'title' => 'Project Completed',
            ],
            [
                'icon' => 'coffee',
                'target' => '2461',
                'number' => '1',
                'symbol' => '+',
                'title' => 'Cup of Coffee',
            ],
            [
                'icon' => 'user-check',
                'target' => '99',
                'number' => '1',
                'symbol' => '%',
                'title' => 'Client Satisfaction',
            ]
        ];
    }

    private function getPortfolios(){
        return [
            [
                'img' => 'assets/images/projects/1.jpg', 
                'title' => 'Artboard Studio',
                'name' => 'Custom Branding',
            ],
            [
                'img' => 'assets/images/projects/2.jpg', 
                'title' => 'The Portrait',
                'name' => 'Custom Branding',
            ],
            [
                'img' => 'assets/images/projects/3.jpg', 
                'title' => 'Villa in Dallas',
                'name' => 'Custom Branding',
            ],
            [
                'img' => 'assets/images/projects/4.jpg', 
                'title' => 'Photo Retouching',
                'name' => 'Custom Branding',
            ],
            [
                'img' => 'assets/images/projects/5.jpg', 
                'title' => 'Mercedez-Benz Coupe',
                'name' => 'Custom Branding',
            ],
            [
                'img' => 'assets/images/projects/6.jpg', 
                'title' => 'Inspiration Board',
                'name' => 'Custom Branding',
            ],
            [
                'img' => 'assets/images/projects/7.jpg', 
                'title' => 'Mercedez-Benz Coupe',
                'name' => 'Custom Branding',
            ],
            [
                'img' => 'assets/images/projects/8.jpg', 
                'title' => 'Inspiration Board',
                'name' => 'Custom Branding',
            ]
        ];
    }

    private function getFeatures(){
        return [
            [
                'icon' => 'aperture', 
                'title' => 'Branding Strategy',
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
            ],
            [
                'icon' => 'send', 
                'title' => 'Digital Solutions',
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
            ],
            [
                'icon' => 'users', 
                'title' => 'Social Media',
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
            ],
            [
                'icon' => 'star', 
                'title' => 'Insightful Analytics',
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
            ]
        ];
    }

    private function getTeams(){
        return [
            [
                'img' => 'assets/images/team/01.jpg',
                'name' => 'Jack John',
                'title' => 'Doctor',
            ],
            [
                'img' => 'assets/images/team/02.jpg',
                'name' => 'Jeremiah Green',
                'title' => 'Doctor',
            ],
            [
                'img' => 'assets/images/team/03.jpg',
                'name' => 'Christina Vasquez',
                'title' => 'Doctor',
            ],
            [
                'img' => 'assets/images/team/04.jpg',
                'name' => 'Lillian Boldt',
                'title' => 'Doctor',
            ]
        ];
    }

    private function getSliders2(){
        return [
            [
                'id' => 1, 
                'img' => 'assets/images/nft/1.jpg', 
                'img1' => 'assets/images/team/1.jpg', 
                'btn' => 'Buy Now', 
                'btn1' => 'Bid Now', 
                'title' => 'Deep Sea Phantasy', 
                'title1' => '20.5 ETH', 
                'name' => "1 out of 12 items", 
            ],
            [
                'id' => 2, 
                'img' => 'assets/images/nft/2.jpg', 
                'img1' => 'assets/images/team/2.jpg', 
                'btn' => 'Buy Now', 
                'btn1' => 'Bid Now', 
                'title' => 'Rainbow Style', 
                'title1' => '20.5 ETH', 
                'name' => "1 out of 12 items", 
            ],
            [
                'id' => 3, 
                'img' => 'assets/images/nft/3.jpg', 
                'img1' => 'assets/images/team/3.jpg', 
                'btn' => 'Buy Now', 
                'btn1' => 'Bid Now', 
                'title' => 'USA Wordmation', 
                'title1' => '20.5 ETH', 
                'name' => "1 out of 12 items", 
            ],
            [
                'id' => 4, 
                'img' => 'assets/images/nft/4.jpg', 
                'img1' => 'assets/images/team/1.jpg', 
                'title' => 'Genuine Undead 3902', 
                'title1' => '20.5 ETH', 
                'name' => "1 out of 12 items", 
            ],
            [
                'id' => 5, 
                'img' => 'assets/images/nft/5.jpg', 
                'img1' => 'assets/images/team/2.jpg', 
                'title' => 'Windchime 768', 
                'title1' => '20.5 ETH', 
                'name' => "1 out of 12 items", 
            ],
            [
                'id' => 6, 
                'img' => 'assets/images/nft/6.jpg', 
                'img1' => 'assets/images/team/3.jpg', 
                'title' => 'Probably A Label 3277', 
                'title1' => '20.5 ETH', 
                'name' => "1 out of 12 items", 
            ],
            [
                'id' => 7, 
                'img' => 'assets/images/nft/7.jpg', 
                'img1' => 'assets/images/team/4.jpg', 
                'title' => 'Probably A Label 1111', 
                'title1' => '20.5 ETH', 
                'name' => "1 out of 12 items", 
            ],
            [
                'id' => 8, 
                'img' => 'assets/images/nft/8.jpg', 
                'img1' => 'assets/images/team/5.jpg', 
                'title' => 'Umber Arrow', 
                'title1' => '20.5 ETH', 
                'name' => "1 out of 12 items", 
            ],
            [
                'id' => 9, 
                'img' => 'assets/images/nft/9.jpg', 
                'img1' => 'assets/images/team/6.jpg', 
                'title' => 'Probably A Label 650', 
                'title1' => '20.5 ETH', 
                'name' => "1 out of 12 items", 
            ],
            [
                'id' => 10, 
                'img' => 'assets/images/nft/10.jpg', 
                'img1' => 'assets/images/team/7.jpg', 
                'title' => 'Looki-0147', 
                'title1' => '20.5 ETH', 
                'name' => "1 out of 12 items", 
            ],
            [
                'id' => 11, 
                'img' => 'assets/images/nft/11.jpg', 
                'img1' => 'assets/images/team/8.jpg', 
                'title' => 'Poob 285', 
                'title1' => '20.5 ETH', 
                'name' => "1 out of 12 items", 
            ],
            [
                'id' => 12, 
                'img' => 'assets/images/nft/12.jpg', 
                'img1' => 'assets/images/team/1.jpg', 
                'title' => 'Azuki 7421', 
                'title1' => '20.5 ETH', 
                'name' => "1 out of 12 items", 
            ]
        ];
    }

    private function getCollections(){
        return [
            [
                'img' => 'assets/images/nft/4.jpg', 
                'img1' => 'assets/images/team/4.jpg', 
                'title' => 'Digital Arts', 
                'name' => "27 Items", 
            ],
            [
                'img' => 'assets/images/nft/1.jpg', 
                'img1' => 'assets/images/team/1.jpg', 
                'title' => 'Sports', 
                'name' => "27 Items", 
            ],
            [
                'img' => 'assets/images/nft/2.jpg', 
                'img1' => 'assets/images/team/2.jpg', 
                'title' => 'Photography', 
                'name' => "27 Items", 
            ],
            [
                'img' => 'assets/images/nft/3.jpg', 
                'img1' => 'assets/images/team/3.jpg', 
                'title' => 'Illustrations', 
                'name' => "27 Items", 
            ],
            [
                'img' => 'assets/images/nft/5.jpg', 
                'img1' => 'assets/images/team/5.jpg', 
                'title' => 'Animations', 
                'name' => "27 Items", 
            ],
            [
                'img' => 'assets/images/nft/6.jpg', 
                'img1' => 'assets/images/team/6.jpg', 
                'title' => 'Virtual Reality', 
                'name' => "27 Items", 
            ],
            [
                'img' => 'assets/images/nft/7.jpg', 
                'img1' => 'assets/images/team/7.jpg', 
                'title' => 'Digital Arts', 
                'name' => "27 Items", 
            ],
            [
                'img' => 'assets/images/nft/8.jpg', 
                'img1' => 'assets/images/team/8.jpg', 
                'title' => 'Sports', 
                'name' => "27 Items", 
            ],
            [
                'img' => 'assets/images/nft/9.jpg', 
                'img1' => 'assets/images/team/1.jpg', 
                'title' => 'Photography', 
                'name' => "27 Items", 
            ],
            [
                'img' => 'assets/images/nft/10.jpg', 
                'img1' => 'assets/images/team/2.jpg', 
                'title' => 'Illustrations', 
                'name' => "27 Items", 
            ],
            [
                'img' => 'assets/images/nft/11.jpg', 
                'img1' => 'assets/images/team/3.jpg', 
                'title' => 'Animations', 
                'name' => "27 Items", 
            ],
            [
                'img' => 'assets/images/nft/12.jpg', 
                'img1' => 'assets/images/team/4.jpg', 
                'title' => 'Virtual Reality', 
                'name' => "27 Items", 
            ]
        ];
    }

    private function getPortfolios2(){
        return [
            [
                'img' => 'assets/images/portfolio/1.jpg', 
                'title' => 'Artboard Studio', 
                'name' => 'Custom Branding', 
            ],
            [
                'img' => 'assets/images/projects/2.jpg', 
                'title' => 'The Portrait', 
                'name' => 'Custom Branding', 
            ],
            [
                'img' => 'assets/images/portfolio/4.jpg', 
                'title' => 'Photo Retouching', 
                'name' => 'Custom Branding', 
            ],
            [
                'img' => 'assets/images/projects/3.jpg', 
                'title' => 'Villa in Dallas', 
                'name' => 'Custom Branding', 
            ],
            [
                'img' => 'assets/images/projects/6.jpg', 
                'title' => 'The Pen and Books', 
                'name' => 'Custom Branding', 
            ],
            [
                'img' => 'assets/images/projects/7.jpg', 
                'title' => 'Mercedez-Benz Coupe', 
                'name' => 'Custom Branding', 
            ],
            [
                'img' => 'assets/images/portfolio/8.jpg', 
                'title' => 'Inspiration Board', 
                'name' => 'Custom Branding', 
            ],
            [
                'img' => 'assets/images/projects/1.jpg', 
                'title' => 'The Cup of Coffee', 
                'name' => 'Custom Branding', 
            ],
            [
                'img' => 'assets/images/portfolio/3.jpg', 
                'title' => 'The Cactus Plant', 
                'name' => 'Custom Branding', 
            ],
            [
                'img' => 'assets/images/projects/4.jpg', 
                'title' => 'The Yellow Bag', 
                'name' => 'Custom Branding', 
            ],
            [
                'img' => 'assets/images/portfolio/6.jpg', 
                'title' => 'The Teapot Table', 
                'name' => 'Custom Branding', 
            ],
            [
                'img' => 'assets/images/portfolio/5.jpg', 
                'title' => 'The Orange', 
                'name' => 'Custom Branding', 
            ]
        ];
    }

    private function getHostings(){
        return [
            [
                'img' => 'assets/images/hosting/1.png', 
                'title' => 'Shared Hosting', 
                'month' => 'Starting $2.99/month', 
            ],
            [
                'img' => 'assets/images/hosting/2.png', 
                'title' => 'VPS Hosting', 
                'month' => 'Starting $2.99/month', 
            ],
            [
                'img' => 'assets/images/hosting/3.png', 
                'title' => 'Dedicated Server', 
                'month' => 'Starting $2.99/month', 
            ],
            [
                'img' => 'assets/images/hosting/4.png', 
                'title' => 'Cloud Hosting', 
                'month' => 'Starting $2.99/month', 
            ],
            [
                'img' => 'assets/images/hosting/5.png', 
                'title' => 'Reseller Hosting', 
                'month' => 'Starting $2.99/month', 
            ]
        ];
    }

    private function getCounters3(){
        return [
            [
                'target' => '11124',
                'number' => '8054',
                'symbol' => '+',
                'title' => 'Customers',
            ],
            [
                'target' => '25',
                'number' => '1',
                'symbol' => '+',
                'title' => 'Awards',
            ],
            [
                'target' => '9',
                'number' => '1',
                'symbol' => '+',
                'title' => 'Countries',
            ]
        ];
    }

    private function getCounters4(){
        return [
            [
                'icon' => 'check-circle',
                'target' => '49',
                'number' => '1',
                'symbol' => '+',
                'title' => 'Yoga Courses',
            ],
            [
                'icon' => 'coffee',
                'target' => '2461',
                'number' => '1',
                'symbol' => '+',
                'title' => 'Cup of Coffee',
            ],
            [
                'icon' => 'user-check',
                'target' => '99',
                'number' => '1',
                'symbol' => '%',
                'title' => 'Client Satisfaction',
            ]
        ];
    }

    private function getNavs(){
        return [
            [
                'title' => 'Monday',
                'id' => 'mondayschedule',
                'link' => '#monday',
                'controls' => 'monday',
                'style' => 'nav-item',
                'class' => 'active',
            ],
            [
                'title' => 'Tuesday',
                'id' => 'tuesdayschedule',
                'link' => '#tuesday',
                'controls' => 'tuesday',
                'style' => 'nav-item mt-2',
                'class' => '',
            ],
            [
                'title' => 'Wednesday',
                'id' => 'wednesdayschedule',
                'link' => '#wednesday',
                'controls' => 'wednesday',
                'style' => 'nav-item mt-2',
                'class' => '',
            ],
            [
                'title' => 'Thursday',
                'id' => 'thursdayschedule',
                'link' => '#thursday',
                'controls' => 'thursday',
                'style' => 'nav-item mt-2',
                'class' => '',
            ],
            [
                'title' => 'Friday',
                'id' => 'fridayschedule',
                'link' => '#friday',
                'controls' => 'friday',
                'style' => 'nav-item mt-2',
                'class' => '',
            ],
            [
                'title' => 'Saturday',
                'id' => 'saturdayschedule',
                'link' => '#saturday',
                'controls' => 'saturday',
                'style' => 'nav-item mt-2',
                'class' => '',
            ]
        ];
    }

    private function getMondays(){
        return [
            [
                'img' => 'assets/images/team/yoga1.jpg', 
                'title' => 'Dhanurasana',
                'name' => '- Jack John',
                'time' => '8:00AM',
            ],
            [
                'img' => 'assets/images/team/yoga2.jpg', 
                'title' => 'Bhujangasana',
                'name' => '- Jeremiah Green',
                'time' => '9:00AM',
            ],
            [
                'img' => 'assets/images/team/yoga3.jpg', 
                'title' => 'Sirsasana',
                'name' => '- Christina Vasquez',
                'time' => '10:00AM',
            ],
            [
                'img' => 'assets/images/team/yoga4.jpg', 
                'title' => 'Padmasana',
                'name' => '- Lillian Boldt',
                'time' => '11:00AM',
            ],
            [
                'img' => 'assets/images/team/yoga1.jpg', 
                'title' => 'Utthita Parsvakonasana',
                'name' => '- Jack John',
                'time' => '12:00AM',
            ],
            [
                'img' => 'assets/images/team/yoga2.jpg', 
                'title' => 'Natarajasana',
                'name' => '- Jeremiah Green',
                'time' => '1:00PM',
            ],
            [
                'img' => 'assets/images/team/yoga3.jpg', 
                'title' => 'Halasana',
                'name' => '- Christina Vasquez',
                'time' => '2:00PM',
            ],
            [
                'img' => 'assets/images/team/yoga4.jpg', 
                'title' => 'Vajrasana',
                'name' => '- Lillian Boldt',
                'time' => '3:00PM',
            ]
        ];
    }

    private function getCoaches(){
        return [
            [
                'img' => 'assets/images/team/yoga1.jpg', 
                'name' => 'Jack John',
                'title' => 'Yoga Coach',
            ],
            [
                'img' => 'assets/images/team/yoga2.jpg', 
                'name' => 'Jeremiah Green',
                'title' => 'Yoga Coach',
            ],
            [
                'img' => 'assets/images/team/yoga3.jpg', 
                'name' => 'Christin Vasquez',
                'title' => 'Yoga Coach',
            ],
            [
                'img' => 'assets/images/team/yoga4.jpg', 
                'name' => 'Lillian Boldt',
                'title' => 'Yoga Coach',
            ]
        ];
    }

    private function getCauses(){
        return [
            [
                'img' => 'assets/images/cause/1.jpg', 
                'title' => 'Child Support',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'raised' => 'Raised 60% of $10000',
                'price' => '$ 6000',
                'price2' => '$ 10000',
            ],
            [
                'img' => 'assets/images/cause/2.jpg', 
                'title' => 'Clean Water',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'raised' => 'Raised 60% of $10000',
                'price' => '$ 6000',
                'price2' => '$ 10000',
            ],
            [
                'img' => 'assets/images/cause/3.jpg', 
                'title' => 'Help to Mothers',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'raised' => 'Raised 60% of $10000',
                'price' => '$ 6000',
                'price2' => '$ 10000',
            ],
            [
                'img' => 'assets/images/cause/4.jpg', 
                'title' => 'New School',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'raised' => 'Raised 60% of $10000',
                'price' => '$ 6000',
                'price2' => '$ 10000',
            ],
            [
                'img' => 'assets/images/cause/5.jpg', 
                'title' => 'Food for All',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'raised' => 'Raised 60% of $10000',
                'price' => '$ 6000',
                'price2' => '$ 10000',
            ],
            [
                'img' => 'assets/images/cause/6.jpg', 
                'title' => 'Water For All',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'raised' => 'Raised 60% of $10000',
                'price' => '$ 6000',
                'price2' => '$ 10000',
            ]
        ];
    }

    private function getVolunteers(){
        return [
            [
                'img' => 'assets/images/team/1.jpg', 
                'name' => 'Jack John',
                'title' => 'Volunteer',
            ],
            [
                'img' => 'assets/images/team/2.jpg', 
                'name' => 'Jeremiah Green',
                'title' => 'Volunteer',
            ],
            [
                'img' => 'assets/images/team/3.jpg', 
                'name' => 'Christin Vasquez',
                'title' => 'Volunteer',
            ],
            [
                'img' => 'assets/images/team/4.jpg', 
                'name' => 'Lillian Boldt',
                'title' => 'Volunteer',
            ]
        ];
    }

    private function getServices2(){
        return [
            [
                'id' => 1,
                'title' => 'Branding Strategy',
                'style' => '',
            ],
            [
                'id' => 2,
                'title' => 'Digital Solutions',
                'style' => 'mt-2',
            ],
            [
                'id' => 3,
                'title' => 'Social Media',
                'style' => 'mt-2',
            ],
            [
                'id' => 4,
                'title' => 'Insightful Analytics',
                'style' => 'mt-2',
            ],
            [
                'id' => 5,
                'title' => 'Business Consultation',
                'style' => 'mt-2',
            ],
            [
                'id' => 6,
                'title' => '24-7 Support',
                'style' => 'mt-2',
            ]
        ];
    }

    private function getTeams2(){
        return [
            [
                'img' => 'assets/images/team/1.jpg', 
                'name' => 'Jack John',
                'title' => 'Founder & CEO',
            ],
            [
                'img' => 'assets/images/team/2.jpg', 
                'name' => 'Jeremiah Green',
                'title' => 'CTO',
            ],
            [
                'img' => 'assets/images/team/3.jpg', 
                'name' => 'Christina Vasquez',
                'title' => 'Developer',
            ],
            [
                'img' => 'assets/images/team/4.jpg', 
                'name' => 'Lillian Boldt',
                'title' => 'Product Manager',
            ],
            [
                'img' => 'assets/images/team/5.jpg', 
                'name' => 'Krista John',
                'title' => 'Creative Director',
            ],
            [
                'img' => 'assets/images/team/6.jpg', 
                'name' => 'Ricky Peters',
                'title' => 'Market Researcher',
            ],
            [
                'img' => 'assets/images/team/7.jpg', 
                'name' => 'Roger Jackson',
                'title' => 'Marketing Expert',
            ],
            [
                'img' => 'assets/images/team/8.jpg', 
                'name' => 'Camille Smith',
                'title' => 'Director of HR',
            ]
        ];
    }

    private function getReviews(){
        return [
            [
                'img' => 'assets/images/team/1.jpg', 
                'name' => 'Calvin Carlo', 
                'title' => 'Manager', 
                'title1' => 'Creativity', 
                'desc' => "According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero Launch your campaign and benefit from our expertise.", 
                'style' => "col-12", 
            ],
            [
                'img' => 'assets/images/team/2.jpg', 
                'name' => 'Carl Oliver', 
                'title' => 'Manager', 
                'title1' => 'Modern', 
                'desc' => "I didn't know a thing about icon design until I read this book. Now I can create any icon I need in no time. Great resource!", 
                'style' => "col-12 mt-4", 
            ],
            [
                'img' => 'assets/images/team/3.jpg', 
                'name' => 'Barbara McIntosh', 
                'title' => 'Manager', 
                'title1' => 'Social Marketing', 
                'desc' => "The best part about Coral is every time I pay my employees, my bank balance doesn't go down like it used to. Looking forward to spending this extra cash when I figure out why my card is being declined.", 
                'style' => "col-12 mt-4",
            ]
        ];
    }

    private function getReviews1(){
        return [
            [
                'img' => 'assets/images/team/4.jpg', 
                'name' => 'Janisha Doll', 
                'title' => 'Manager', 
                'title1' => 'Digital Marketing', 
                'desc' => "I used to have to remit tax to the EU and with Coral I somehow don't have to do that anymore. Nervous to travel there now though.", 
                'style' => "col-12",
            ],
            [
                'img' => 'assets/images/team/5.jpg', 
                'name' => 'Esther Howard', 
                'title' => 'Manager', 
                'title1' => 'SEO', 
                'desc' => "There are so many things I had to do with my old software that I just don't do at all with Coral. Suspicious but I can't say I don't love it.", 
                'style' => "col-12 mt-4",
            ],
            [
                'img' => 'assets/images/team/6.jpg', 
                'name' => 'Joshua William', 
                'title' => 'Manager', 
                'title1' => 'Classic', 
                'desc' => "I'm trying to get a hold of someone in support, I'm in a lot of trouble right now and they are saying it has something to do with my books. Please get back to me right away.", 
                'style' => "col-12 mt-4",
            ]
        ];
    }

    private function getReviews2(){
        return [
            [
                'img' => 'assets/images/team/7.jpg', 
                'name' => 'Thomas Israel', 
                'title' => 'Manager', 
                'title1' => 'Features', 
                'desc' => "This is the fourth email I've sent to your support team. I am literally being held in jail for tax fraud. Please answer your damn emails, this is important.", 
                'style' => "col-md-6 col-lg-12",
            ],
            [
                'img' => 'assets/images/team/8.jpg', 
                'name' => 'Jill Webb', 
                'title' => 'Manager', 
                'title1' => 'Branding', 
                'desc' => "I used to have to remit tax to the EU and with Coral I somehow don't have to do that anymore. Nervous to travel there now though.", 
                'style' => "col-md-6 col-lg-12 mt-4",
            ],
            [
                'img' => 'assets/images/team/4.jpg', 
                'name' => 'Jennifer White', 
                'title' => 'Manager', 
                'title1' => 'Product Design', 
                'desc' => "The team is exceptional. Their passion for what they do is evident in the results they deliver. We're grateful to have them as a trusted partner in our journey.", 
                'style' => "col-md-6 col-lg-12 mt-4",
            ]
        ];
    }

    private function getWallets(){
        return [
            [
                'img' => 'assets/images/wallet/MetaMask_Fox.svg', 
                'title' => 'MetaMask', 
                'desc' => "Learn about how to get the wallet and much more clicking", 
            ],
            [
                'img' => 'assets/images/wallet/aave.svg', 
                'title' => 'Aave', 
                'desc' => "Learn about how to get the wallet and much more clicking", 
            ],
            [
                'img' => 'assets/images/wallet/Airswap.svg', 
                'title' => 'Airswap', 
                'desc' => "Learn about how to get the wallet and much more clicking", 
            ],
            [
                'img' => 'assets/images/wallet/Compound.svg', 
                'title' => 'Compound', 
                'desc' => "Learn about how to get the wallet and much more clicking", 
            ],
            [
                'img' => 'assets/images/wallet/ddexsvg.svg', 
                'title' => 'DDEX', 
                'desc' => "Learn about how to get the wallet and much more clicking", 
            ],
            [
                'img' => 'assets/images/wallet/defi-saver.svg', 
                'title' => 'Defi Saver', 
                'desc' => "Learn about how to get the wallet and much more clicking", 
            ],
            [
                'img' => 'assets/images/wallet/dYdX.svg', 
                'title' => 'DYDX', 
                'desc' => "Learn about how to get the wallet and much more clicking", 
            ],
            [
                'img' => 'assets/images/wallet/idex.svg', 
                'title' => 'IDEX', 
                'desc' => "Learn about how to get the wallet and much more clicking", 
            ],
            [
                'img' => 'assets/images/wallet/kyber.svg', 
                'title' => 'Kyber', 
                'desc' => "Learn about how to get the wallet and much more clicking", 
            ],
            [
                'img' => 'assets/images/wallet/maker.svg', 
                'title' => 'Maker', 
                'desc' => "Learn about how to get the wallet and much more clicking", 
            ],
            [
                'img' => 'assets/images/wallet/nuo.svg', 
                'title' => 'NUO', 
                'desc' => "Learn about how to get the wallet and much more clicking", 
            ],
            [
                'img' => 'assets/images/wallet/PoolTogether.svg', 
                'title' => 'PoolTogether', 
                'desc' => "Learn about how to get the wallet and much more clicking", 
            ],
            [
                'img' => 'assets/images/wallet/sablier.svg', 
                'title' => 'Sablier', 
                'desc' => "Learn about how to get the wallet and much more clicking", 
            ],
            [
                'img' => 'assets/images/wallet/set.svg', 
                'title' => 'Set', 
                'desc' => "Learn about how to get the wallet and much more clicking", 
            ],
            [
                'img' => 'assets/images/wallet/uniswap.svg', 
                'title' => 'Uniswap', 
                'desc' => "Learn about how to get the wallet and much more clicking", 
            ],
            [
                'img' => 'assets/images/wallet/zerion.svg', 
                'title' => 'Zerion', 
                'desc' => "Learn about how to get the wallet and much more clicking", 
            ]
        ];
    }

    private function getCreators(){
        return [
            [
                'img' => 'assets/images/team/1.jpg', 
                'name' => 'Steven Townsend', 
                'title' => "@StreetBoy", 
                'btn' => "Follow", 
            ],
            [
                'img' => 'assets/images/team/2.jpg', 
                'name' => 'Tiffany Betancourt', 
                'title' => "@CutieGirl", 
                'btn' => "Follow", 
            ],
            [
                'img' => 'assets/images/team/3.jpg', 
                'name' => 'Mari Harrington', 
                'title' => "@NorseQueen", 
                'btn' => "Follow", 
            ],
            [
                'img' => 'assets/images/team/4.jpg', 
                'name' => 'Floyd Glasgow', 
                'title' => "@BigBull", 
                'btn' => "Follow", 
            ],
            [
                'img' => 'assets/images/team/5.jpg', 
                'name' => 'Donna Schultz', 
                'title' => "@Angel", 
                'btn' => "Follow", 
            ],
            [
                'img' => 'assets/images/team/6.jpg', 
                'name' => 'Joshua Morris', 
                'title' => "@CrazyAnyone", 
                'btn' => "Follow", 
            ],
            [
                'img' => 'assets/images/team/7.jpg', 
                'name' => 'Carl Williams', 
                'title' => "@LooserBad", 
                'btn' => "Follow", 
            ],
            [
                'img' => 'assets/images/team/8.jpg', 
                'name' => 'Eugene Green', 
                'title' => "@KristyHoney", 
                'btn' => "Follow", 
            ]
        ];
    }

    private function getPortfolios3(){
        return [
            [
                'id' => 1,
                'img' => 'assets/images/portfolio/1.jpg',
                'title' => 'Artboard Studio',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 2,
                'img' => 'assets/images/portfolio/2.jpg',
                'title' => 'The Portrait',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 3,
                'img' => 'assets/images/portfolio/3.jpg',
                'title' => 'Villa in Dallas',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 4,
                'img' => 'assets/images/portfolio/4.jpg',
                'title' => 'Photo Retouching',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 5,
                'img' => 'assets/images/portfolio/5.jpg',
                'title' => 'The Cup of Coffee',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 6,
                'img' => 'assets/images/portfolio/6.jpg',
                'title' => 'The Pen and Books',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 7,
                'img' => 'assets/images/portfolio/7.jpg',
                'title' => 'Mercedez-Benz Coupe',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 8,
                'img' => 'assets/images/portfolio/8.jpg',
                'title' => 'Inspiration Board',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 9,
                'img' => 'assets/images/portfolio/9.jpg',
                'title' => 'The Cactus Plant',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 10,
                'img' => 'assets/images/portfolio/10.jpg',
                'title' => 'The Yellow Bag',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 11,
                'img' => 'assets/images/portfolio/11.jpg',
                'title' => 'The Teapot Table',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 12,
                'img' => 'assets/images/portfolio/12.jpg',
                'title' => 'The Orange',
                'name' => 'Custom Branding',
            ]
        ];
    }

    private function getPortfolios4(){
        return [
            [
                'id' => 1,
                'img' => 'assets/images/portfolio/1.jpg',
                'title' => 'Artboard Studio',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 2,
                'img' => 'assets/images/projects/2.jpg',
                'title' => 'The Portrait',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 3,
                'img' => 'assets/images/projects/3.jpg',
                'title' => 'Villa in Dallas',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 4,
                'img' => 'assets/images/portfolio/4.jpg',
                'title' => 'Photo Retouching',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 5,
                'img' => 'assets/images/portfolio/5.jpg',
                'title' => 'The Cup of Coffee',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 6,
                'img' => 'assets/images/projects/6.jpg',
                'title' => 'The Pen and Books',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 7,
                'img' => 'assets/images/projects/7.jpg',
                'title' => 'Mercedez-Benz Coupe',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 8,
                'img' => 'assets/images/portfolio/8.jpg',
                'title' => 'Inspiration Board',
                'name' => 'Custom Branding',
            ]
        ];
    }

    private function getPortfolios5(){
        return [
            [
                'id' => 1,
                'img' => 'assets/images/portfolio/1.jpg',
                'title' => 'Artboard Studio',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 2,
                'img' => 'assets/images/projects/2.jpg',
                'title' => 'The Portrait',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 4,
                'img' => 'assets/images/portfolio/4.jpg',
                'title' => 'Photo Retouching',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 3,
                'img' => 'assets/images/projects/3.jpg',
                'title' => 'Villa in Dallas',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 6,
                'img' => 'assets/images/projects/6.jpg',
                'title' => 'The Pen and Books',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 7,
                'img' => 'assets/images/projects/7.jpg',
                'title' => 'Mercedez-Benz Coupe',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 5,
                'img' => 'assets/images/portfolio/5.jpg',
                'title' => 'The Cup of Coffee',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 8,
                'img' => 'assets/images/portfolio/8.jpg',
                'title' => 'Inspiration Board',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 9,
                'img' => 'assets/images/portfolio/9.jpg',
                'title' => 'The Cactus Plant',
                'name' => 'Custom Branding',
            ]
        ];
    }

    private function getPortfolios6(){
        return [
            [
                'id' => 1,
                'img' => 'assets/images/portfolio/1.jpg',
                'title' => 'Artboard Studio',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 2,
                'img' => 'assets/images/projects/2.jpg',
                'title' => 'The Portrait',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 4,
                'img' => 'assets/images/portfolio/4.jpg',
                'title' => 'Photo Retouching',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 3,
                'img' => 'assets/images/projects/3.jpg',
                'title' => 'Villa in Dallas',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 6,
                'img' => 'assets/images/projects/6.jpg',
                'title' => 'The Pen and Books',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 7,
                'img' => 'assets/images/projects/7.jpg',
                'title' => 'Mercedez-Benz Coupe',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 8,
                'img' => 'assets/images/portfolio/8.jpg',
                'title' => 'Inspiration Board',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 5,
                'img' => 'assets/images/portfolio/5.jpg',
                'title' => 'The Cup of Coffee',
                'name' => 'Custom Branding',
            ]
        ];
    }

    private function getPortfolios7(){
        return [
            [
                'id' => 1,
                'img' => 'assets/images/portfolio/1.jpg',
                'title' => 'Artboard Studio',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 2,
                'img' => 'assets/images/projects/2.jpg',
                'title' => 'The Portrait',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 4,
                'img' => 'assets/images/portfolio/4.jpg',
                'title' => 'Photo Retouching',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 3,
                'img' => 'assets/images/projects/3.jpg',
                'title' => 'Villa in Dallas',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 6,
                'img' => 'assets/images/projects/6.jpg',
                'title' => 'The Pen and Books',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 7,
                'img' => 'assets/images/projects/7.jpg',
                'title' => 'Mercedez-Benz Coupe',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 8,
                'img' => 'assets/images/portfolio/8.jpg',
                'title' => 'Inspiration Board',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 5,
                'img' => 'assets/images/portfolio/5.jpg',
                'title' => 'The Cup of Coffee',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 10,
                'img' => 'assets/images/projects/1.jpg',
                'title' => 'The Cactus Plants',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 11,
                'img' => 'assets/images/portfolio/6.jpg',
                'title' => 'The Yellow Bag',
                'name' => 'Custom Branding',
            ]
        ];
    }

    private function getPortfolios8(){
        return [
            [
                'id' => 1,
                'img' => 'assets/images/portfolio/1.jpg',
                'title' => 'Artboard Studio',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 2,
                'img' => 'assets/images/projects/2.jpg',
                'title' => 'The Portrait',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 4,
                'img' => 'assets/images/portfolio/4.jpg',
                'title' => 'Photo Retouching',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 3,
                'img' => 'assets/images/projects/3.jpg',
                'title' => 'Villa in Dallas',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 6,
                'img' => 'assets/images/projects/6.jpg',
                'title' => 'The Pen and Books',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 7,
                'img' => 'assets/images/projects/7.jpg',
                'title' => 'Mercedez-Benz Coupe',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 8,
                'img' => 'assets/images/portfolio/8.jpg',
                'title' => 'Inspiration Board',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 10,
                'img' => 'assets/images/projects/1.jpg',
                'title' => 'The Cactus Plants',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 12,
                'img' => 'assets/images/portfolio/3.jpg',
                'title' => 'The Plant',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 13,
                'img' => 'assets/images/projects/4.jpg',
                'title' => 'The Bag',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 11,
                'img' => 'assets/images/portfolio/6.jpg',
                'title' => 'The Yellow Bag',
                'name' => 'Custom Branding',
            ],
            [
                'id' => 5,
                'img' => 'assets/images/portfolio/5.jpg',
                'title' => 'The Cup of Coffee',
                'name' => 'Custom Branding',
            ]
        ];
    }

    private function getImages(){
        return [
            [
                'img' => 'assets/images/projects/3.jpg', 
            ],
            [
                'img' => 'assets/images/portfolio/2.jpg', 
            ],
            [
                'img' => 'assets/images/projects/5.jpg', 
            ],
            [
                'img' => 'assets/images/projects/6.jpg', 
            ],
            [
                'img' => 'assets/images/projects/8.jpg', 
            ],
            [
                'img' => 'assets/images/portfolio/3.jpg', 
            ],
            [
                'img' => 'assets/images/portfolio/4.jpg', 
            ]
        ];
    }

    private function getPosts(){
        return [
            [
                'img' => 'assets/images/blog/1.jpg', 
                'title' => 'Consultant Business',
                'date' => '15th July 2025',
                'style' => '',
            ],
            [
                'img' => 'assets/images/blog/2.jpg', 
                'title' => 'Grow Your Business',
                'date' => '15th July 2025',
                'style' => 'mt-3',
            ],
            [
                'img' => 'assets/images/blog/3.jpg', 
                'title' => 'Look On The Glorious Balance',
                'date' => '15th July 2025',
                'style' => 'mt-3',
            ]
        ];
    }

    private function getTags(){
        return [
            [
                'title' => 'Business',
            ],
            [
                'title' => 'Finance',
            ],
            [
                'title' => 'Marketing',
            ],
            [
                'title' => 'Fashion',
            ],
            [
                'title' => 'Bride',
            ],
            [
                'title' => 'Lifestyle',
            ],
            [
                'title' => 'Travel',
            ],
            [
                'title' => 'Beauty',
            ],
            [
                'title' => 'Video',
            ],
            [
                'title' => 'Audio',
            ]
        ];
    }

    private function getImages2(){
        return [
            [
                'img' => 'assets/images/portfolio/1.jpg', 
            ],
            [
                'img' => 'assets/images/projects/3.jpg', 
            ],
            [
                'img' => 'assets/images/portfolio/2.jpg', 
            ],
            [
                'img' => 'assets/images/projects/5.jpg', 
            ],
            [
                'img' => 'assets/images/projects/6.jpg', 
            ],
            [
                'img' => 'assets/images/projects/8.jpg', 
            ],
            [
                'img' => 'assets/images/portfolio/3.jpg', 
            ],
            [
                'img' => 'assets/images/portfolio/4.jpg', 
            ]
        ];
    }

    private function getContacts(){
        return [
            [
                'icon' => 'phone', 
                'title' => 'Phone',
                'desc' => 'Start working with Coral that can provide everything',
                'desc1' => '',
                'link' => 'tel:+152534-468-854',
                'name' => '+152 534-468-854',
                'style' => 'col-md-4',
            ],
            [
                'icon' => 'mail', 
                'title' => 'Email',
                'desc' => 'Start working with Coral that can provide everything',
                'desc1' => '',
                'link' => 'mailto:contact@example.com',
                'name' => 'contact@example.com',
                'style' => 'col-md-4 mt-5 pt-2 mt-md-0 pt-md-0',
            ],
            [
                'icon' => 'map-pin', 
                'title' => 'Location',
                'desc' => 'C/54 Northwest Freeway, Suite 558,',
                'desc1' => 'Houston, USA 485',
                'link' => '',
                'name' => 'View on Google map',
                'style' => 'col-md-4 mt-5 pt-2 mt-md-0 pt-md-0',
            ]
        ];
    }


    public function index(): string
    {
        return view('index', [
            'services' => $this->getServices(),
            'counters' => $this->getCounters(),
            'projects' => $this->getProjects(),
            'minds' => $this->getMinds(),
            'review' => $this->getReview(),
            'blogs' => $this->getBlogs(),
        ]);
    }

    public function indexSaas(): string
    {
        return view('index-saas', [
            'services' => $this->getServices(),
            'review' => $this->getReview(),
            'blogs' => $this->getBlogs(),
        ]);
    }

    public function indexConsulting(): string
    {
        return view('index-consulting', [
            'services' => $this->getServices(),
            'review' => $this->getReview(),
            'minds' => $this->getMinds(),
            'blogs' => $this->getBlogs(),
        ]);
    }

    public function indexCryptocurrency(): string
    {
        return view('index-cryptocurrency', [
            'sliders' => $this->getSliders(),
            'tables' => $this->getTables(),
            'traders' => $this->getTraders(),
            'review' => $this->getReview(),
        ]);
    }

    public function indexDigitalMarketing(): string
    {
        return view('index-digital-marketing', [
            'partners' => $this->getPartners(),
            'counters2' => $this->getCounters2(),
            'services' => $this->getServices(),
            'review' => $this->getReview(),
            'portfolios' => $this->getPortfolios(),
            'minds' => $this->getMinds(),
            'blogs' => $this->getBlogs(),
        ]);
    }

    public function indexFinance(): string
    {
        return view('index-finance', [
            'features' => $this->getFeatures(),
            'review' => $this->getReview(),
            'blogs' => $this->getBlogs(),
        ]);
    }

    public function indexItSolution(): string
    {
        return view('index-it-solution', [
            'services' => $this->getServices(),
            'review' => $this->getReview(),
            'minds' => $this->getMinds(),
            'blogs' => $this->getBlogs(),
        ]);
    }

    public function indexHospital(): string
    {
        return view('index-hospital', [
            'services' => $this->getServices(),
            'review' => $this->getReview(),
            'teams' => $this->getTeams(),
            'blogs' => $this->getBlogs(),
        ]);
    }

    public function indexNft(): string
    {
        return view('index-nft', [
            'sliders2' => $this->getSliders2(),
            'services' => $this->getServices(),
            'collections' => $this->getCollections(),
            'blogs' => $this->getBlogs(),
        ]);
    }

    public function indexMinimalPortfolio(): string
    {
        return view('index-minimal-portfolio', [
            'portfolios2' => $this->getPortfolios2(),
        ]);
    }

    public function indexWebHosting(): string
    {
        return view('index-web-hosting', [
            'hostings' => $this->getHostings(),
            'counters3' => $this->getCounters3(),
            'review' => $this->getReview(),
        ]);
    }

    public function indexYoga(): string
    {
        return view('index-yoga', [
            'counters4' => $this->getCounters4(),
            'services' => $this->getServices(),
            'review' => $this->getReview(),
            'navs' => $this->getNavs(),
            'mondays' => $this->getMondays(),
            'coaches' => $this->getCoaches(),
            'blogs' => $this->getBlogs(),
        ]);
    }

    public function indexCharity(): string
    {
        return view('index-charity', [
            'causes' => $this->getCauses(),
            'review' => $this->getReview(),
            'services' => $this->getServices(),
            'volunteers' => $this->getVolunteers(),
            'blogs' => $this->getBlogs(),
        ]);
    }

    public function aboutus(): string
    {
        return view('aboutus', [
            'review' => $this->getReview(),
            'minds' => $this->getMinds(),
        ]);
    }

    public function services(): string
    {
        return view('services', [
            'services' => $this->getServices(),
            'review' => $this->getReview(),
            'minds' => $this->getMinds(),
        ]);
    }

    public function serviceDetail(): string
    {
        return view('service-detail', [
            'services2' => $this->getServices2(),
        ]);
    }

    public function pricing(): string
    {
        return view('pricing');
    }

    public function team(): string
    {
        return view('team', [
            'teams2' => $this->getTeams2(),
        ]);
    }

    public function testimonial(): string
    {
        return view('testimonial', [
            'reviews' => $this->getReviews(),
            'reviews1' => $this->getReviews1(),
            'reviews2' => $this->getReviews2(),
        ]);
    }

    public function faqs(): string
    {
        return view('faqs');
    }

    public function nftExplore(): string
    {
        return view('nft-explore', [
            'sliders2' => $this->getSliders2(),
        ]);
    }

    public function nftDetail(): string
    {
        return view('nft-detail');
    }

    public function collection(): string
    {
        return view('collection', [
            'collections' => $this->getCollections(),
        ]);
    }

    public function wallet(): string
    {
        return view('wallet', [
            'wallets' => $this->getWallets(),
        ]);
    }

    public function uploadItem(): string
    {
        return view('upload-item');
    }

    public function creators(): string
    {
        return view('creators', [
            'creators' => $this->getCreators(),
        ]);
    }

    public function creatorProfile(): string
    {
        return view('creator-profile', [
            'sliders2' => $this->getSliders2(),
        ]);
    }

    public function profileSetting(): string
    {
        return view('profile-setting');
    }

    public function login(): string
    {
        return view('login');
    }

    public function signup(): string
    {
        return view('signup');
    }

    public function resetPassword(): string
    {
        return view('reset-password');
    }

    public function lockScreen(): string
    {
        return view('lock-screen');
    }

    public function terms(): string
    {
        return view('terms');
    }

    public function privacy(): string
    {
        return view('privacy');
    }

    public function comingsoon(): string
    {
        return view('comingsoon');
    }

    public function maintenance(): string
    {
        return view('maintenance');
    }

    public function error(): string
    {
        return view('error');
    }

    public function portfolioModernTwo(): string
    {
        return view('portfolio-modern-two', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    public function portfolioModernThree(): string
    {
        return view('portfolio-modern-three', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    public function portfolioModernFour(): string
    {
        return view('portfolio-modern-four', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    public function portfolioModernFive(): string
    {
        return view('portfolio-modern-five', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    public function portfolioModernSix(): string
    {
        return view('portfolio-modern-six', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    public function portfolioClassicTwo(): string
    {
        return view('portfolio-classic-two', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    public function portfolioClassicThree(): string
    {
        return view('portfolio-classic-three', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    public function portfolioClassicFour(): string
    {
        return view('portfolio-classic-four', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    public function portfolioClassicFive(): string
    {
        return view('portfolio-classic-five', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    public function portfolioClassicSix(): string
    {
        return view('portfolio-classic-six', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    public function portfolioCreativeTwo(): string
    {
        return view('portfolio-creative-two', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    public function portfolioCreativeThree(): string
    {
        return view('portfolio-creative-three', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    public function portfolioCreativeFour(): string
    {
        return view('portfolio-creative-four', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    public function portfolioCreativeFive(): string
    {
        return view('portfolio-creative-five', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    public function portfolioCreativeSix(): string
    {
        return view('portfolio-creative-six', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    public function portfolioMasonryTwo(): string
    {
        return view('portfolio-masonry-two', [
            'portfolios4' => $this->getPortfolios4(),
        ]);
    }

    public function portfolioMasonryThree(): string
    {
        return view('portfolio-masonry-three', [
            'portfolios5' => $this->getPortfolios5(),
        ]);
    }

    public function portfolioMasonryFour(): string
    {
        return view('portfolio-masonry-four', [
            'portfolios6' => $this->getPortfolios6(),
        ]);
    }

    public function portfolioMasonryFive(): string
    {
        return view('portfolio-masonry-five', [
            'portfolios7' => $this->getPortfolios7(),
        ]);
    }

    public function portfolioMasonrySix(): string
    {
        return view('portfolio-masonry-six', [
            'portfolios8' => $this->getPortfolios8(),
        ]);
    }

    public function portfolioDetail(): string
    {
        return view('portfolio-detail');
    }

    public function portfolioDetailTwo(): string
    {
        return view('portfolio-detail-two', [
            'images' => $this->getImages(),
        ]);
    }
    
    public function blogs(): string
    {
        return view('blogs', [
            'blogs' => $this->getBlogs(),
        ]);
    }

    public function blogSidebar(): string
    {
        return view('blog-sidebar', [
            'blogs' => $this->getBlogs(),
            'posts' => $this->getPosts(),
            'tags' => $this->getTags(),
        ]);
    }

    public function blogStandardPost(): string
    {
        return view('blog-standard-post', [
            'posts' => $this->getPosts(),
            'tags' => $this->getTags(),
        ]);
    }

    public function blogGalleryPost(): string
    {
        return view('blog-gallery-post', [
            'images2' => $this->getImages2(),
            'posts' => $this->getPosts(),
            'tags' => $this->getTags(),
        ]);
    }

    public function blogSliderPost(): string
    {
        return view('blog-slider-post', [
            'posts' => $this->getPosts(),
            'tags' => $this->getTags(),
        ]);
    }

    public function blogLinkPost(): string
    {
        return view('blog-link-post', [
            'posts' => $this->getPosts(),
            'tags' => $this->getTags(),
        ]);
    }

    public function blogStoryPost(): string
    {
        return view('blog-story-post', [
            'posts' => $this->getPosts(),
            'tags' => $this->getTags(),
        ]);
    }

    public function blogYoutubePost(): string
    {
        return view('blog-youtube-post', [
            'posts' => $this->getPosts(),
            'tags' => $this->getTags(),
        ]);
    }

    public function blogHtmlVideoPost(): string
    {
        return view('blog-html-video-post', [
            'posts' => $this->getPosts(),
            'tags' => $this->getTags(),
        ]);
    }

    public function blogAudioPost(): string
    {
        return view('blog-audio-post', [
            'posts' => $this->getPosts(),
            'tags' => $this->getTags(),
        ]);
    }

    public function blogHtmlAudio(): string
    {
        return view('blog-html-audio', [
            'posts' => $this->getPosts(),
            'tags' => $this->getTags(),
        ]);
    }

    public function blogBlockquotePost(): string
    {
        return view('blog-blockquote-post', [
            'posts' => $this->getPosts(),
            'tags' => $this->getTags(),
        ]);
    }

    public function blogVimeoPost(): string
    {
        return view('blog-vimeo-post', [
            'posts' => $this->getPosts(),
            'tags' => $this->getTags(),
        ]);
    }

    public function blogLeftSidebarPost(): string
    {
        return view('blog-left-sidebar-post', [
            'posts' => $this->getPosts(),
            'tags' => $this->getTags(),
        ]);
    }

    public function contactus(): string
    {
        return view('contactus', [
            'contacts' => $this->getContacts(),
        ]);
    }
}