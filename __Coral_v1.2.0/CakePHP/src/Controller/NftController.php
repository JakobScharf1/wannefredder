<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Nft Controller
 *
 */
class NftController extends AppController
{
    public function detail($slug = null)
    {
        $sliders = [
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
                'id' => 1, 
                'img' => 'assets/images/nft/1.jpg', 
                'img1' => 'assets/images/team/1.jpg', 
                'title' => 'Deep Sea Phantasy', 
                'title1' => '20.5 ETH', 
                'name' => "1 out of 12 items", 
            ],
            [
                'id' => 2, 
                'img' => 'assets/images/nft/2.jpg', 
                'img1' => 'assets/images/team/2.jpg', 
                'title' => 'Rainbow Style', 
                'title1' => '20.5 ETH', 
                'name' => "1 out of 12 items", 
            ],
            [
                'id' => 3, 
                'img' => 'assets/images/nft/3.jpg', 
                'img1' => 'assets/images/team/3.jpg', 
                'title' => 'USA Wordmation', 
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

        $article = ['title' => 'Deep Sea Phantasy']; // Default value

        if ($slug !== null) {
            foreach ($sliders as $item) {
                $slugifiedTitle = strtolower(str_replace(' ', '-', $item['title']));
                if ($slugifiedTitle === strtolower($slug)) {
                    $article = $item;
                    break;
                }
            }
        }

        $this->set(compact('article'));
        $this->render('/pages/nft-detail');
    }
}