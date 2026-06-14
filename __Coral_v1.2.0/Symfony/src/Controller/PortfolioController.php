<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PortfolioController extends AbstractController
{
    private array $portfolios = [
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

    #[Route('/portfolio-detail/{slug?}', name: 'app_portfolio_detail')]
    public function details(string $slug = null): Response
    {
        $article = null;

        if ($slug) {
            foreach ($this->portfolios as $item) {
                if ($this->slugify($item['title']) === $slug) {
                    $article = $item;
                    break;
                }
            }
        }

        return $this->render('portfolio-detail.html.twig', [
            'article' => $article ?? ['img' => '', 'title' => ''],
            'portfolios' => $this->portfolios
        ]);
    }
    private function slugify(string $title): string
    {
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title), '-'));
    }
}