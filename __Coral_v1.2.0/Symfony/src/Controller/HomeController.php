<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    private function getServices(): array
    {
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

    private function getCounters(): array
    {
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

    private function getProjects(): array
    {
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

    private function getMinds(): array
    {
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

    private function getReview(): array
    {
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

    private function getBlogs(): array
    {
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

    private function getSliders(): array
    {
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

    private function getTables(): array
    {
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

    private function getTraders(): array
    {
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

    private function getPartners(): array
    {
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

    private function getCounters2(): array
    {
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

    private function getPortfolios(): array
    {
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

    private function getFeatures(): array
    {
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

    private function getTeams(): array
    {
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

    private function getSliders2(): array
    {
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

    private function getCollections(): array
    {
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

    private function getPortfolios2(): array
    {
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

    private function getHostings(): array
    {
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

    private function getCounters3(): array
    {
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

    private function getCounters4(): array
    {
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

    private function getNavs(): array
    {
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

    private function getMondays(): array
    {
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

    private function getCoaches(): array
    {
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

    private function getCauses(): array
    {
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

    private function getVolunteers(): array
    {
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

    private function getTeams2(): array
    {
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

    private function getReviews(): array
    {
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

    private function getReviews1(): array
    {
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

    private function getReviews2(): array
    {
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

    private function getWallets(): array
    {
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

    private function getCreators(): array
    {
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

    private function getPortfolios3(): array
    {
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

    private function getPortfolios4(): array
    {
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

    private function getPortfolios5(): array
    {
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

    private function getPortfolios6(): array
    {
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

    private function getPortfolios7(): array
    {
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

    private function getPortfolios8(): array
    {
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

    private function getPosts(): array
    {
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

    private function getTags(): array
    {
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

    private function getImages2(): array
    {
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

    
    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'services' => $this->getServices(),
            'counters' => $this->getCounters(),
            'projects' => $this->getProjects(),
            'minds' => $this->getMinds(),
            'review' => $this->getReview(),
            'blogs' => $this->getBlogs(),
        ]);
    }

    #[Route('/index-saas', name: 'app_index_saas')]
    public function indexSaas(): Response
    {
        return $this->render('index-saas.html.twig', [
            'services' => $this->getServices(),
            'review' => $this->getReview(),
            'blogs' => $this->getBlogs(),
        ]);
    }

    #[Route('/index-consulting', name: 'app_index_consulting')]
    public function indexConsulting(): Response
    {
        return $this->render('index-consulting.html.twig', [
            'services' => $this->getServices(),
            'review' => $this->getReview(),
            'minds' => $this->getMinds(),
            'blogs' => $this->getBlogs(),
        ]);
    }

    #[Route('/index-cryptocurrency', name: 'app_index_cryptocurrency')]
    public function indexCryptocurrency(): Response
    {
        return $this->render('index-cryptocurrency.html.twig', [
            'sliders' => $this->getSliders(),
            'tables' => $this->getTables(),
            'traders' => $this->getTraders(),
            'review' => $this->getReview(),
        ]);
    }

    #[Route('/index-digital-marketing', name: 'app_index_digital_marketing')]
    public function indexDigitalMarketing(): Response
    {
        return $this->render('index-digital-marketing.html.twig', [
            'partners' => $this->getPartners(),
            'counters2' => $this->getCounters2(),
            'services' => $this->getServices(),
            'review' => $this->getReview(),
            'portfolios' => $this->getPortfolios(),
            'minds' => $this->getMinds(),
            'blogs' => $this->getBlogs(),
        ]);
    }

    #[Route('/index-finance', name: 'app_index_finance')]
    public function indexFinance(): Response
    {
        return $this->render('index-finance.html.twig', [
            'features' => $this->getFeatures(),
            'review' => $this->getReview(),
            'blogs' => $this->getBlogs(),
        ]);
    }

    #[Route('/index-it-solution', name: 'app_index_it_solution')]
    public function indexItSolution(): Response
    {
        return $this->render('index-it-solution.html.twig', [
            'services' => $this->getServices(),
            'review' => $this->getReview(),
            'minds' => $this->getMinds(),
            'blogs' => $this->getBlogs(),
        ]);
    }

    #[Route('/index-hospital', name: 'app_index_hospital')]
    public function indexHospital(): Response
    {
        return $this->render('index-hospital.html.twig', [
            'services' => $this->getServices(),
            'review' => $this->getReview(),
            'teams' => $this->getTeams(),
            'blogs' => $this->getBlogs(),
        ]);
    }

    #[Route('/index-nft', name: 'app_index_nft')]
    public function indexNft(): Response
    {
        return $this->render('index-nft.html.twig', [
            'sliders2' => $this->getSliders2(),
            'services' => $this->getServices(),
            'collections' => $this->getCollections(),
            'blogs' => $this->getBlogs(),
        ]);
    }

    #[Route('/index-minimal-portfolio', name: 'app_index_minimal_portfolio')]
    public function indexMinimalPortfolio(): Response
    {
        return $this->render('index-minimal-portfolio.html.twig', [
            'portfolios2' => $this->getPortfolios2(),
        ]);
    }

    #[Route('/index-web-hosting', name: 'app_index_web_hosting')]
    public function indexWebHosting(): Response
    {
        return $this->render('index-web-hosting.html.twig', [
            'hostings' => $this->getHostings(),
            'counters3' => $this->getCounters3(),
            'review' => $this->getReview(),
        ]);
    }

    #[Route('/index-yoga', name: 'app_index_yoga')]
    public function indexYoga(): Response
    {
        return $this->render('index-yoga.html.twig', [
            'counters4' => $this->getCounters4(),
            'services' => $this->getServices(),
            'review' => $this->getReview(),
            'navs' => $this->getNavs(),
            'mondays' => $this->getMondays(),
            'coaches' => $this->getCoaches(),
            'blogs' => $this->getBlogs(),
        ]);
    }

    #[Route('/index-charity', name: 'app_index_charity')]
    public function indexCharity(): Response
    {
        return $this->render('index-charity.html.twig', [
            'causes' => $this->getCauses(),
            'review' => $this->getReview(),
            'services' => $this->getServices(),
            'volunteers' => $this->getVolunteers(),
            'blogs' => $this->getBlogs(),
        ]);
    }

    #[Route('/aboutus', name: 'app_aboutus')]
    public function aboutus(): Response
    {
        return $this->render('aboutus.html.twig', [
            'review' => $this->getReview(),
            'minds' => $this->getMinds(),
        ]);
    }

    #[Route('/services', name: 'app_services')]
    public function services(): Response
    {
        return $this->render('services.html.twig', [
            'services' => $this->getServices(),
            'review' => $this->getReview(),
            'minds' => $this->getMinds(),
        ]);
    }

    #[Route('/pricing', name: 'app_pricing')]
    public function pricing(): Response
    {
        return $this->render('pricing.html.twig');
    }

    #[Route('/team', name: 'app_team')]
    public function team(): Response
    {
        return $this->render('team.html.twig', [
            'teams2' => $this->getTeams2(),
        ]);
    }

    #[Route('/testimonial', name: 'app_testimonial')]
    public function testimonial(): Response
    {
        return $this->render('testimonial.html.twig', [
            'reviews' => $this->getReviews(),
            'reviews1' => $this->getReviews1(),
            'reviews2' => $this->getReviews2(),
        ]);
    }

    #[Route('/faqs', name: 'app_faqs')]
    public function faqs(): Response
    {
        return $this->render('faqs.html.twig');
    }

    #[Route('/nft-explore', name: 'app_nft_explore')]
    public function nftExplore(): Response
    {
        return $this->render('nft-explore.html.twig', [
            'sliders2' => $this->getSliders2(),
        ]);
    }

    #[Route('/collection', name: 'app_collection')]
    public function collection(): Response
    {
        return $this->render('collection.html.twig', [
            'collections' => $this->getCollections(),
        ]);
    }

    #[Route('/wallet', name: 'app_wallet')]
    public function wallet(): Response
    {
        return $this->render('wallet.html.twig', [
            'wallets' => $this->getWallets(),
        ]);
    }

    #[Route('/upload-item', name: 'app_upload_item')]
    public function uploadItem(): Response
    {
        return $this->render('upload-item.html.twig');
    }

    #[Route('/creators', name: 'app_creators')]
    public function creators(): Response
    {
        return $this->render('creators.html.twig', [
            'creators' => $this->getCreators(),
        ]);
    }

    #[Route('/creator-profile', name: 'app_creator_profile')]
    public function creatorProfile(): Response
    {
        return $this->render('creator-profile.html.twig', [
            'sliders2' => $this->getSliders2(),
        ]);
    }

    #[Route('/profile-setting', name: 'app_profile_setting')]
    public function profileSetting(): Response
    {
        return $this->render('profile-setting.html.twig');
    }

    #[Route('/login', name: 'app_login')]
    public function login(): Response
    {
        return $this->render('login.html.twig');
    }

    #[Route('/signup', name: 'app_signup')]
    public function signup(): Response
    {
        return $this->render('signup.html.twig');
    }

    #[Route('/reset-password', name: 'app_reset_password')]
    public function resetPassword(): Response
    {
        return $this->render('reset-password.html.twig');
    }

    #[Route('/lock-screen', name: 'app_lock_screen')]
    public function lockScreen(): Response
    {
        return $this->render('lock-screen.html.twig');
    }

    #[Route('/terms', name: 'app_terms')]
    public function terms(): Response
    {
        return $this->render('terms.html.twig');
    }

    #[Route('/privacy', name: 'app_privacy')]
    public function privacy(): Response
    {
        return $this->render('privacy.html.twig');
    }

    #[Route('/comingsoon', name: 'app_comingsoon')]
    public function comingsoon(): Response
    {
        return $this->render('comingsoon.html.twig');
    }

    #[Route('/maintenance', name: 'app_maintenance')]
    public function maintenance(): Response
    {
        return $this->render('maintenance.html.twig');
    }

    #[Route('/error', name: 'app_error')]
    public function error(): Response
    {
        return $this->render('error.html.twig');
    }

    #[Route('/portfolio-modern-two', name: 'app_portfolio_modern_two')]
    public function portfolioModernTwo(): Response
    {
        return $this->render('portfolio-modern-two.html.twig', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    #[Route('/portfolio-modern-three', name: 'app_portfolio_modern_three')]
    public function portfolioModernThree(): Response
    {
        return $this->render('portfolio-modern-three.html.twig', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    #[Route('/portfolio-modern-four', name: 'app_portfolio_modern_four')]
    public function portfolioModernFour(): Response
    {
        return $this->render('portfolio-modern-four.html.twig', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    #[Route('/portfolio-modern-five', name: 'app_portfolio_modern_five')]
    public function portfolioModernFive(): Response
    {
        return $this->render('portfolio-modern-five.html.twig', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    #[Route('/portfolio-modern-six', name: 'app_portfolio_modern_six')]
    public function portfolioModernSix(): Response
    {
        return $this->render('portfolio-modern-six.html.twig', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    #[Route('/portfolio-classic-two', name: 'app_portfolio_classic_two')]
    public function portfolioClassicTwo(): Response
    {
        return $this->render('portfolio-classic-two.html.twig', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    #[Route('/portfolio-classic-three', name: 'app_portfolio_classic_three')]
    public function portfolioClassicThree(): Response
    {
        return $this->render('portfolio-classic-three.html.twig', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    #[Route('/portfolio-classic-four', name: 'app_portfolio_classic_four')]
    public function portfolioClassicFour(): Response
    {
        return $this->render('portfolio-classic-four.html.twig', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    #[Route('/portfolio-classic-five', name: 'app_portfolio_classic_five')]
    public function portfolioClassicFive(): Response
    {
        return $this->render('portfolio-classic-five.html.twig', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    #[Route('/portfolio-classic-six', name: 'app_portfolio_classic_six')]
    public function portfolioClassicSix(): Response
    {
        return $this->render('portfolio-classic-six.html.twig', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    #[Route('/portfolio-creative-two', name: 'app_portfolio_creative_two')]
    public function portfolioCreativeTwo(): Response
    {
        return $this->render('portfolio-creative-two.html.twig', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    #[Route('/portfolio-creative-three', name: 'app_portfolio_creative_three')]
    public function portfolioCreativeThree(): Response
    {
        return $this->render('portfolio-creative-three.html.twig', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    #[Route('/portfolio-creative-four', name: 'app_portfolio_creative_four')]
    public function portfolioCreativeFour(): Response
    {
        return $this->render('portfolio-creative-four.html.twig', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    #[Route('/portfolio-creative-five', name: 'app_portfolio_creative_five')]
    public function portfolioCreativeFive(): Response
    {
        return $this->render('portfolio-creative-five.html.twig', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }

    #[Route('/portfolio-creative-six', name: 'app_portfolio_creative_six')]
    public function portfolioCreativeSix(): Response
    {
        return $this->render('portfolio-creative-six.html.twig', [
            'portfolios3' => $this->getPortfolios3(),
        ]);
    }
    
    #[Route('/portfolio-masonry-two', name: 'app_portfolio_masonry_two')]
    public function portfolioMasonryTwo(): Response
    {
        return $this->render('portfolio-masonry-two.html.twig', [
            'portfolios4' => $this->getPortfolios4(),
        ]);
    }

    #[Route('/portfolio-masonry-three', name: 'app_portfolio_masonry_three')]
    public function portfolioMasonryThree(): Response
    {
        return $this->render('portfolio-masonry-three.html.twig', [
            'portfolios5' => $this->getPortfolios5(),
        ]);
    }

    #[Route('/portfolio-masonry-four', name: 'app_portfolio_masonry_four')]
    public function portfolioMasonryFour(): Response
    {
        return $this->render('portfolio-masonry-four.html.twig', [
            'portfolios6' => $this->getPortfolios6(),
        ]);
    }

    #[Route('/portfolio-masonry-five', name: 'app_portfolio_masonry_five')]
    public function portfolioMasonryFive(): Response
    {
        return $this->render('portfolio-masonry-five.html.twig', [
            'portfolios7' => $this->getPortfolios7(),
        ]);
    }

    #[Route('/portfolio-masonry-six', name: 'app_portfolio_masonry_six')]
    public function portfolioMasonrySix(): Response
    {
        return $this->render('portfolio-masonry-six.html.twig', [
            'portfolios8' => $this->getPortfolios8(),
        ]);
    }

    #[Route('/blogs', name: 'app_blogs')]
    public function blogs(): Response
    {
        return $this->render('blogs.html.twig', [
            'blogs' => $this->getBlogs(),
        ]);
    }

    #[Route('/blog-sidebar', name: 'app_blog_sidebar')]
    public function blogSidebar(): Response
    {
        return $this->render('blog-sidebar.html.twig', [
            'blogs' => $this->getBlogs(),
            'posts' => $this->getPosts(),
            'tags' => $this->getTags(),
        ]);
    }

    #[Route('/blog-gallery-post', name: 'app_blog_gallery_post')]
    public function blogGalleryPost(): Response
    {
        return $this->render('blog-gallery-post.html.twig', [
            'images2' => $this->getImages2(),
            'posts' => $this->getPosts(),
            'tags' => $this->getTags(),
        ]);
    }

    #[Route('/blog-slider-post', name: 'app_blog_slider_post')]
    public function blogSliderPost(): Response
    {
        return $this->render('blog-slider-post.html.twig', [
            'posts' => $this->getPosts(),
            'tags' => $this->getTags(),
        ]);
    }

    #[Route('/blog-link-post', name: 'app_blog_link_post')]
    public function blogLinkPost(): Response
    {
        return $this->render('blog-link-post.html.twig', [
            'posts' => $this->getPosts(),
            'tags' => $this->getTags(),
        ]);
    }

    #[Route('/blog-story-post', name: 'app_blog_story_post')]
    public function blogStoryPost(): Response
    {
        return $this->render('blog-story-post.html.twig', [
            'posts' => $this->getPosts(),
            'tags' => $this->getTags(),
        ]);
    }

    #[Route('/blog-youtube-post', name: 'app_blog_youtube_post')]
    public function blogYoutubePost(): Response
    {
        return $this->render('blog-youtube-post.html.twig', [
            'posts' => $this->getPosts(),
            'tags' => $this->getTags(),
        ]);
    }

    #[Route('/blog-html-video-post', name: 'app_blog_html_video_post')]
    public function blogHtmlVideoPost(): Response
    {
        return $this->render('blog-html-video-post.html.twig', [
            'posts' => $this->getPosts(),
            'tags' => $this->getTags(),
        ]);
    }

    #[Route('/blog-audio-post', name: 'app_blog_audio_post')]
    public function blogAudioPost(): Response
    {
        return $this->render('blog-audio-post.html.twig', [
            'posts' => $this->getPosts(),
            'tags' => $this->getTags(),
        ]);
    }

    #[Route('/blog-html-audio', name: 'app_blog_html_audio')]
    public function blogHtmlAudio(): Response
    {
        return $this->render('blog-html-audio.html.twig', [
            'posts' => $this->getPosts(),
            'tags' => $this->getTags(),
        ]);
    }

    #[Route('/blog-blockquote-post', name: 'app_blog_blockquote_post')]
    public function blogBlockquotePost(): Response
    {
        return $this->render('blog-blockquote-post.html.twig', [
            'posts' => $this->getPosts(),
            'tags' => $this->getTags(),
        ]);
    }

    #[Route('/blog-vimeo-post', name: 'app_blog_vimeo_post')]
    public function blogVimeoPost(): Response
    {
        return $this->render('blog-vimeo-post.html.twig', [
            'posts' => $this->getPosts(),
            'tags' => $this->getTags(),
        ]);
    }

    #[Route('/blog-left-sidebar-post', name: 'app_blog_left_sidebar_post')]
    public function blogLeftSidebarPost(): Response
    {
        return $this->render('blog-left-sidebar-post.html.twig', [
            'posts' => $this->getPosts(),
            'tags' => $this->getTags(),
        ]);
    }

    #[Route('/contactus', name: 'app_contactus')]
    public function contactus(): Response
    {
        return $this->render('contactus.html.twig');
    }
}
