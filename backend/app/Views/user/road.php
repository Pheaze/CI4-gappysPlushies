
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gappy's Plushies - Road</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Tailwind CSS via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
<?=view ('components/header')?>


<?= view('components/mapAsset', [
  'phases' => [
    ['title' => 'Landing Page', 'description' => 'Browse the merch', 'date' => '2025-09', 'status' => 'done'],
    ['title' => 'Login and Sign in Page', 'description' => 'Get to know or Already known', 'date' => '2025-09', 'status' => 'done'],
    ['title' => 'Roadmap and Moodboard', 'description' => 'What to look at and forward to', 'date' => '2025-09', 'status' => 'done'],
    ['title' => 'CRUD', 'description' => 'CRUD Capabilites', 'date' => '2025-10', 'status' => 'planned'],
  ]
]) ?>
</svg></li>

<?=view ('components/footer')?>
</body>
</html>