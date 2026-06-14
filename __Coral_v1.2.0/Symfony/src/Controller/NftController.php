<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class NftController extends AbstractController
{
    private array $sliders = [
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

    #[Route('/nft-detail/{slug?}', name: 'app_nft_detail')]
    public function details(string $slug = null): Response
    {
        $article = null;

        if ($slug) {
            foreach ($this->sliders as $item) {
                if ($this->slugify($item['title']) === $slug) {
                    $article = $item;
                    break;
                }
            }
        }

        return $this->render('nft-detail.html.twig', [
            'article' => $article ?? ['img' => '', 'title' => ''],
            'sliders' => $this->sliders
        ]);
    }
    private function slugify(string $title): string
    {
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title), '-'));
    }
}