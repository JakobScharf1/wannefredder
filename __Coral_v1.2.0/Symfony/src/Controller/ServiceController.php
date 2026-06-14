<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ServiceController extends AbstractController
{
    private array $services = [
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

    private array $services2 = [
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

    #[Route('/service-detail/{slug?}', name: 'app_service_detail')]
    public function details(string $slug = null): Response
    {
        $article = null;

        if ($slug) {
            foreach ($this->services as $item) {
                if ($this->slugify($item['title']) === $slug) {
                    $article = $item;
                    break;
                }
            }
        }

        return $this->render('service-detail.html.twig', [
            'article' => $article ?? [ 'title' => ''],
            'services' => $this->services,
            'services2' => $this->services2
        ]);
    }
    private function slugify(string $title): string
    {
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title), '-'));
    }
}