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
    <?=view ('components/header')?>
    <div class="max-w-3xl mx-auto">
        <h1 class="text-3xl font-bold mb-6 text-center">Moodboard</h1>

        <!-- Color Palettes -->
        <section class="mb-10">
            <h2 class="text-xl font-semibold mb-4">Color Palettes</h2>
            <div class="grid grid-cols-3 gap-6">
                <!-- Palette 1 -->
                <div class="flex flex-col items-center"></div>
                    <div class="flex space-x-5 mb-5">
                        <div class="w-8 h-8 rounded bg-pink-400"></div>
                        <div class="w-8 h-8 rounded bg-yellow-300"></div>
                        <div class="w-8 h-8 rounded bg-black"></div>
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
                <div class="flex flex-col items-center gap-4">
    <!-- Rounded Logo -->
    <div class="p-2 bg-white shadow rounded-full">
        <img 
            src="<?= esc($src ?? 'https://dendenotakushop.com/cdn/shop/files/KuripanPlushieMatikanetannhauserUmamusume-PrettyDerby_0.jpg?v=1724820492') ?>" 
            alt="<?= esc($alt ?? 'Logo (rounded)') ?>" 
            class="w-32 h-32 object-cover rounded-full border-4 border-pink-300"
        >
    </div>
    <!-- Square Logo -->
    <div class="p-2 bg-white shadow rounded">
        <img 
            src="<?= esc($src ?? 'https://dendenotakushop.com/cdn/shop/files/KuripanPlushieMatikanetannhauserUmamusume-PrettyDerby_0.jpg?v=1724820492') ?>" 
            alt="<?= esc($alt ?? 'Logo (square)') ?>" 
            class="w-32 h-32 object-cover rounded-none border-4 border-pink-300"
        >
    </div>
</div>
            </div>
        </section>
        <!-- Button Examples -->
        <section class="mt-10">
            <h2 class="text-xl font-semibold mb-4">Button Examples</h2>
            <div class="flex flex-wrap gap-4 justify-center">
            <!-- Primary Button -->
            <?= view('components/buttons/primary') ?>
            <!-- Secondary Button -->
            <?= view('components/buttons/secondary')?>
            <!-- Success Button -->
            <?= view('components/buttons/tertiary')?> 
            <!-- Danger Button -->
            <?= view('components/buttons/fourth')?>
            </div>
        </section>
        <!-- Card Example -->
        <section>
            <h2 class="text-xl font-semibold mb-4">Sample Card</h2>
            <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
            <?= view("components/cards/mikuCard", ['name' => 'miku', 'img' => 'https://preview.redd.it/someone-please-tell-me-the-name-or-brand-of-these-dumb-baby-v0-mdyzk434thyc1.jpeg?width=640&crop=smart&auto=webp&s=ff622154f2ed8a079928df3eb97e7b187996df3b', 'desc' => 'Miku Dayo Miku Dayo Miku Dayo.']) ?>
            </div>
        </section>

        <section>
            <h2 class="text-xl font-semibold mb-4">Sample Card 2</h2>
            <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
            <?= view("components/cards/tetoCard", ['name' => 'kasane teto', 'img' => 'https://ae01.alicdn.com/kf/Se391c4a6ec514b95aede38073aeacae68.jpg', 'desc' => 'Teto Word of the day.']) ?>
            </div>
        </section>

        <section>
            <h2 class="text-xl font-semibold mb-4">Sample Card 3</h2>
            <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
            <?= view("components/cards/neruCard", ['name' => 'Akita Neru', 'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVU53oRERtxQu2dBFtnVWL7vJrbIESjQZAxw&s', 'desc' => 'Third Baka']) ?>
            </div>
        </section>
            </div>
    </div>
    <footer><?=view ('components/footer')?></footer>
</body>
</html>