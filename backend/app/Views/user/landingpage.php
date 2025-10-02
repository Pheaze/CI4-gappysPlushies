
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gappy's Plushies - Welcome!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Tailwind CSS via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-pink-100 to-yellow-50 min-h-screen flex flex-col">
  <!-- Header -->
  <header class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-6 flex items-center justify-between">
      <h1 class="text-3xl font-bold text-pink-600">Gappy's Plushies</h1>
      <nav>
        <a href="#shop" class="text-pink-500 hover:text-pink-700 px-4">Shop</a>
        <a href="#about" class="text-pink-500 hover:text-pink-700 px-4">About</a>
        <a href="#contact" class="text-pink-500 hover:text-pink-700 px-4">Contact</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="flex-1 flex flex-col items-center justify-center text-center py-16" id="shop">
    <img src="https://dendenotakushop.com/cdn/shop/files/KuripanPlushieMatikanetannhauserUmamusume-PrettyDerby_0.jpg?v=1724820492"
       alt="Cute Plushies"
       class="mx-auto rounded-full shadow-lg w-40 h-40 mb-6 object-cover">
    <h2 class="text-4xl font-extrabold text-pink-700 mb-4">Snuggle Up With Gappy's Plushies!</h2>
    <p class="text-lg text-gray-700 mb-8 max-w-xl mx-auto">
      Discover adorable, huggable plushies for every mood and moment. Handpicked for quality and cuteness!
    </p>
    <a href="/shop" class="bg-pink-500 text-white font-semibold px-8 py-3 rounded-full shadow hover:bg-pink-600 transition">
      Shop Now
    </a>
  </section>

  <!-- Featured Plushies -->
  <section class="container mx-auto px-4 py-12">
    <h3 class="text-2xl font-bold text-pink-600 mb-6 text-center">Featured Plushies</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
      <?php
      // Example featured items array
      $featured = [
        ['name' => 'miku', 'img' => 'https://preview.redd.it/someone-please-tell-me-the-name-or-brand-of-these-dumb-baby-v0-mdyzk434thyc1.jpeg?width=640&crop=smart&auto=webp&s=ff622154f2ed8a079928df3eb97e7b187996df3b', 'desc' => 'Miku Dayo Miku Dayo Miku Dayo.'],
        ['name' => 'kasane teto', 'img' => 'https://ae01.alicdn.com/kf/Se391c4a6ec514b95aede38073aeacae68.jpg', 'desc' => 'Teto Word of the day.'],
        ['name' => 'astolfo', 'img' => 'https://images.steamusercontent.com/ugc/1009311134773801268/E203DA9938236DBFAC6A286313092C352BA74A2F/?imw=637&imh=358&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true', 'desc' => 'Soft, squishy, and maybe a little haunted.'],
      ];
      foreach ($featured as $item): ?>
        <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
          <img src="<?= esc($item['img']) ?>" alt="<?= esc($item['name']) ?>" class="w-32 h-32 rounded-full mb-4 object-cover">
          <h4 class="text-lg font-bold text-pink-700 mb-2"><?= esc($item['name']) ?></h4>
          <p class="text-gray-600 mb-4"><?= esc($item['desc']) ?></p>
          <!--<a href="miku.php" class="bg-yellow-400 text-pink-800 px-4 py-2 rounded hover:bg-yellow-300 font-semibold transition">View Plushy</a>-->
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- About Section -->
  <section class="bg-pink-50 py-12" id="about">
    <div class="container mx-auto px-4 text-center">
      <h3 class="text-2xl font-bold text-pink-600 mb-4">About Gappy's Plushies</h3>
      <p class="text-gray-700 max-w-2xl mx-auto">
        Gappy's Plushies is a family-run store dedicated to bringing joy and comfort through our curated selection of plush toys. Every plushy is chosen for its quality, softness, and irresistible charm. Whether you're gifting a friend or treating yourself, we have the perfect snuggle buddy for you!
      </p>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-white shadow-inner mt-auto">
    <div class="container mx-auto px-4 py-6 text-center text-gray-500">
      &copy; <?= date('Y') ?> Gappy's Plushies. All rights reserved.
    </div>
  </footer>
</body>
</html>