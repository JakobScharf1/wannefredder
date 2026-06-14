<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Exceptions\PageNotFoundException;

class Nft extends BaseController
{
    private $sliders = [
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

    public function details($slug = '')
    {
        $article = null;

        // Loop through sliders and match the slug
        foreach ($this->sliders as $item) {
            $slugifiedTitle = $this->create_slug($item['title']);
            if ($slugifiedTitle === $slug) {
                $article = $item;
                break;
            }
        }

        if ($article === null) {
            throw new PageNotFoundException();  // Show 404 if article not found
        }

        return view('nft-detail', ['article' => $article,'sliders' => $this->sliders]);
    }

    private function create_slug($title) {
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));
    }
}