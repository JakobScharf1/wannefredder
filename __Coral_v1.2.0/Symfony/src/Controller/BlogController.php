<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController
{
    private array $blogs = [
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

    private array $posts = [
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

    private array $tags = [
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

    #[Route('/blog-standard-post/{slug?}', name: 'app_blog_standard_post')]
    public function details(string $slug = null): Response
    {
        $article = null;

        if ($slug) {
            foreach ($this->blogs as $item) {
                if ($this->slugify($item['title']) === $slug) {
                    $article = $item;
                    break;
                }
            }
        }

        return $this->render('blog-standard-post.html.twig', [
            'article' => $article ?? ['img' => '', 'title' => '', 'name' => ''],
            'blogs' => $this->blogs,
            'posts' => $this->posts,
            'tags' => $this->tags
        ]);
    }
    private function slugify(string $title): string
    {
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title), '-'));
    }
}