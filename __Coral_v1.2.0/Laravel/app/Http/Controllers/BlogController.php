<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function show($title)
    {
        $blogs = [
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
                'title' => 'Success Story: Businessman in Harlem',
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
                'title' => "Working from home? Let's get started.",
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
            ],
            [
                'id' => 5,
                'img' => 'assets/images/blog/5.jpg', 
                'name' => 'Coral', 
                'title' => "The Ultimate Success Formula - How?",
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.",
            ],
            [
                'id' => 6,
                'img' => 'assets/images/blog/6.jpg', 
                'name' => 'Coral', 
                'title' => "The Major Differences Between SEO & Local SEO",
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

        // Find the course by ID
        $item = collect($blogs)->first(function ($blog) use ($title) {
            return Str::slug($blog['title']) === $title;
        });

        // If course not found, return 404 error
        if (!$item) {
            abort(404);
        }

        // Return the view and pass the course data to the view
        return view('blog-standard-post', compact('item'));
    }
}
