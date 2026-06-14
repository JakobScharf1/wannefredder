<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortfolioTwoController extends Controller
{
    public function show($title)
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

        // Find the course by ID
        $item = collect($portfolios)->first(function ($portfolio) use ($title) {
            return Str::slug($portfolio['title']) === $title;
        });

        // If course not found, return 404 error
        if (!$item) {
            abort(404);
        }

        // Return the view and pass the course data to the view
        return view('portfolio-detail-two', compact('item'));
    }
}
