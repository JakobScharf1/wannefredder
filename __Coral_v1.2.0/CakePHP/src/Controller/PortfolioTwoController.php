<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PortfolioTwo Controller
 *
 */
class PortfolioTwoController extends AppController
{
    public function detail($slug = null)
    {
        $portfolios = [
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
            ],
            [
                'id' => 9,
                'img' => 'assets/images/portfolio/9.jpg',
                'title' => 'The Cactus Plant',
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
            ]
        ];

        $article = ['title' => 'Web Design']; // Default value

        if ($slug !== null) {
            foreach ($portfolios as $item) {
                $slugifiedTitle = strtolower(str_replace(' ', '-', $item['title']));
                if ($slugifiedTitle === strtolower($slug)) {
                    $article = $item;
                    break;
                }
            }
        }

        $this->set(compact('article'));
        $this->render('/pages/portfolio-detail-two');
    }
}