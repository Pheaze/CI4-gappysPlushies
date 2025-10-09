<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Moodboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="moodboard.css" rel="stylesheet">
</head>
<body class="bg-gray-50 min-h-screen p-8">
    <div class="max-w-3xl mx-auto">
        <h1 class="text-3xl font-bold mb-6 text-center">Moodboard</h1>

        <!-- Color Palettes -->
        <section class="mb-10">
            <h2 class="text-xl font-semibold mb-4">Color Palettes</h2>
            <div class="grid grid-cols-3 gap-6">
                <!-- Palette 1 -->
                <div class="flex flex-col items-center">
                    <div class="flex space-x-2 mb-2">
                        <div class="w-8 h-8 rounded bg-pink-400"></div>
                        <div class="w-8 h-8 rounded bg-yellow-300"></div>
                        <div class="w-8 h-8 rounded bg-purple-300"></div>
                    </div>
                    <span class="text-xs text-gray-500">Playful</span>
                </div>
                <!-- Palette 2 -->
                <div class="flex flex-col items-center">
                    <div class="flex space-x-2 mb-2">
                        <div class="w-8 h-8 rounded bg-blue-700"></div>
                        <div class="w-8 h-8 rounded bg-blue-300"></div>
                        <div class="w-8 h-8 rounded bg-white border"></div>
                    </div>
                    <span class="text-xs text-gray-500">Calm</span>
                </div>
                <!-- Palette 3 -->
                <div class="flex flex-col items-center">
                    <div class="flex space-x-2 mb-2">
                        <div class="w-8 h-8 rounded bg-green-600"></div>
                        <div class="w-8 h-8 rounded bg-lime-300"></div>
                        <div class="w-8 h-8 rounded bg-gray-800"></div>
                    </div>
                    <span class="text-xs text-gray-500">Fresh</span>
                </div>
            </div>
        </section>

        <!-- Font Styles -->
        <section class="mb-10">
            <h2 class="text-xl font-semibold mb-4">Font Styles</h2>
            <div class="grid grid-cols-3 gap-6">
                <div class="flex flex-col items-center">
                    <span class="font-sans text-lg">Aa Bb Cc</span>
                    <span class="text-xs text-gray-500">Sans (Tailwind default)</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="font-serif text-lg">Aa Bb Cc</span>
                    <span class="text-xs text-gray-500">Serif</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="font-mono text-lg">Aa Bb Cc</span>
                    <span class="text-xs text-gray-500">Monospace</span>
                </div>
            </div>
        </section>

        <!-- Log Section -->
        <section class="mb-10">
            <h2 class="text-xl font-semibold mb-4">Logos</h2>
            <div class="flex space-x-8 justify-center">
                <!-- Circle Log -->
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full bg-yellow-700 flex items-center justify-center shadow">
                        <span class="text-white font-bold">Click</span>
                    </div>
                    <span class="text-xs text-gray-500 mt-2">Circle Logo</span>
                </div>
                <!-- Square Log -->
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 bg-yell
                    ow-900 flex items-center justify-center shadow">
                        <span class="text-white font-bold">Goes in</span>
                    </div>
                    <span class="text-xs text-gray-500 mt-2">Square Logo</span>
                </div>
            </div>
        </section>
        <!-- Button Examples -->
        <section class="mt-10">
            <h2 class="text-xl font-semibold mb-4">Button Examples</h2>
            <div class="flex flex-wrap gap-4 justify-center">
            <!-- Primary Button -->
            <button class="bg-blue-600 text-white px-5 py-2 rounded shadow hover:bg-blue-700 transition font-semibold">
                Primary
            </button>
            <!-- Secondary Button -->
            <button class="bg-gray-200 text-gray-800 px-5 py-2 rounded shadow hover:bg-gray-300 transition font-semibold">
                Secondary
            </button>
            <!-- Success Button -->
            <button class="bg-green-500 text-white px-5 py-2 rounded shadow hover:bg-green-600 transition font-semibold">
                Success
            </button>
            <!-- Danger Button -->
            <button class="bg-red-500 text-white px-5 py-2 rounded shadow hover:bg-red-600 transition font-semibold">
                Danger
            </button>
            </div>
        </section>
        <!-- Card Example -->
        <section>
            <h2 class="text-xl font-semibold mb-4">Sample Card</h2>
            <div class="bg-white rounded-lg shadow-md p-6 max-w-sm mx-auto">
                <img src ="data:image/jpeg;base64,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">
                <h3 class="font-serif text-xl mb-2">Miku</h3>
                <p class="font-sans text-gray-700 mb-4">Miku Dayo. Miku Dayo. Miku Dayo. Miku Dayo. Miku Dayo.</p>
                <button class="bg-pink-400 text-white px-4 py-2 rounded font-mono hover:bg-pink-500 transition">Add to Cart</button>
            </div>
        </section>
    </div>
</body>
</html>