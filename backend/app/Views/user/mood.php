<?php

namespace App\Controllers;


class Mood extends Controller
{
    public function moodBoard()
    {
        // Data contract for moodboard view
        $data = [
            // Color palettes (hex codes matching landing page background)
            'palettes' => [
                [
                    'name' => 'Soft Plush',
                    'colors' => ['#F9FAFB', '#F3E8FF', '#A7F3D0', '#FDE68A'],
                ],
                [
                    'name' => 'Pastel Dream',
                    'colors' => ['#FEE2E2', '#C7D2FE', '#FBCFE8', '#BBF7D0'],
                ],
                [
                    'name' => 'Warm Hug',
                    'colors' => ['#FDE68A', '#FCA5A5', '#FDBA74', '#F3F4F6'],
                ],
            ],
            // Example card (product sample)
            'card' => [
                'title' => 'Gappy Plushie',
                'image' => '/images/gappy-plushie.png',
                'price' => '₱499',
                'description' => 'Handmade, ultra-soft plushie perfect for cuddles and gifts.',
            ],
            // Buttons (3 styles)
            'buttons' => [
                [
                    'label' => 'Shop Now',
                    'class' => 'bg-purple-400 text-white rounded px-4 py-2 hover:bg-purple-500',
                ],
                [
                    'label' => 'Learn More',
                    'class' => 'bg-yellow-300 text-gray-800 rounded px-4 py-2 hover:bg-yellow-400',
                ],
                [
                    'label' => 'Contact Us',
                    'class' => 'bg-pink-300 text-white rounded px-4 py-2 hover:bg-pink-400',
                ],
            ],
            // Fonts (Google Fonts links)
            'fonts' => [
                [
                    'name' => 'Quicksand',
                    'link' => 'https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap',
                ],
                [
                    'name' => 'Montserrat',
                    'link' => 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap',
                ],
            ],
            // Logo shapes (SVG markup)
            'logos' => [
                'square' => '<svg width="64" height="64" viewBox="0 0 64 64"><rect width="64" height="64" rx="12" fill="#F3E8FF"/><text x="50%" y="55%" text-anchor="middle" font-size="28" fill="#A7F3D0" font-family="Quicksand, sans-serif">GP</text></svg>',
                'circle' => '<svg width="64" height="64" viewBox="0 0 64 64"><circle cx="32" cy="32" r="32" fill="#FBCFE8"/><text x="50%" y="55%" text-anchor="middle" font-size="28" fill="#FCA5A5" font-family="Montserrat, sans-serif">GP</text></svg>',
            ],
        ];

        return view('moodboard', $data);
    }
}