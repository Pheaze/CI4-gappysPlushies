
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
  


<?= view('components/mapAsset', [
  'phases' => [
    ['title' => 'Design', 'description' => 'Landing Page', 'date' => '2025-09', 'status' => 'done'],
    ['title' => 'Development', 'description' => 'Login and Sign In', 'date' => '2025-09', 'status' => 'done'],
    ['title' => 'Testing', 'description' => 'Roadmap and Moodboard', 'date' => '2025-09', 'status' => 'done'],
    ['title' => 'Launch', 'description' => 'CRUD Capabilites', 'date' => '2025-10', 'status' => 'planned'],
  ]
]) ?>
</svg></li>


</body>
</html>