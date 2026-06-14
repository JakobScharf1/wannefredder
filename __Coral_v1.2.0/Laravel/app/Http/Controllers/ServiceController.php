<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
   public function show($title)
    {
        $services = [
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
                'desc' => "We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.",
            ],
            [
                'id' => 5,
                'icon' => 'bookmark', 
                'title' => 'Business Consultation',
                'desc' => "We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.",
            ],
            [
                'id' => 6,
                'icon' => 'message-circle', 
                'title' => '24/7 Support',
                'desc' => "We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.",
            ],
            [
                'id' => 7,
                'img' => '/images/service/cardiology.svg',
                'title' => 'Cardiology',
                'desc' => 'Success needs hard work & quality work.',
            ],
            [
                'id' => 8,
                'img' => '/images/service/neurology.svg',
                'title' => 'Neurology',
                'desc' => 'Success needs hard work & quality work.',
            ],
            [
                'id' => 9,
                'img' => '/images/service/orthopaedic.svg',
                'title' => 'Orthopaedic',
                'desc' => 'Success needs hard work & quality work.',
            ],
            [
                'id' => 10,
                'img' => '/images/service/gynecology.svg',
                'title' => 'Gynecology',
                'desc' => 'Success needs hard work & quality work.',
            ],
            [
                'id' => 11,
                'img' => '/images/service/dermatology.svg',
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
                'img' => '/images/asana/ardha_padmasana.png',
                'title' => 'Ardha Padmasana', 
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
            ],
            [
                'id' => 16,
                'img' => '/images/asana/bhujangasana.png',
                'title' => 'Bhujangasana', 
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
            ],
            [
                'id' => 17,
                'img' => '/images/asana/halasana.png',
                'title' => 'Halasana', 
                'desc' => "Success needs hard work. Don't listen to these 'get rich quick' schemes.", 
            ],
            [
                'id' => 18,
                'img' => '/images/asana/natarajasana.png',
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

        // Find the course by ID
        $item = collect($services)->first(function ($service) use ($title) {
            return Str::slug($service['title']) === $title;
        });

        // If course not found, return 404 error
        if (!$item) {
            abort(404);
        }

        // Return the view and pass the course data to the view
        return view('service-detail', compact('item'));
    }
}
