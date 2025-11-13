<?php
$session = session();
$userArr = $session->get('user');
?>


<header class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-6 flex items-center justify-between">
      <h1 class="text-3xl font-bold text-pink-600">Gappy's Plushies</h1>
      <nav>
        <a href="/" class="text-pink-500 hover:text-pink-700 px-4">Home</a>
        <?php if ($session->has('user')): ?>
        <a href="/mood" class="text-pink-500 hover:text-pink-700 px-4">Moodboard</a>
        <a href="/logout" class="text-pink-500 hover:text-pink-700 px-4">Logout</a>

        <?php if ($user = strtolower($userArr['type'] == 'user')): ?>
        <a href="/signUp" class="text-pink-500 hover:text-pink-700 px-4">Products</a>
        <a href="/road" class="text-pink-500 hover:text-pink-700 px-4">Roadmap</a>

        <?php elseif ($user = strtolower($userArr['type'] == 'admin')): ?>
        <a href="/dash" class="text-pink-500 hover:text-pink- 700 px-4">Dashboard</a>
        <a href="/prod" class="text-pink-500 hover:text-pink-700 px-4">Products</a>
        <a href="/order" class="text-pink-500 hover:text-pink-700 px-4">Orders</a>
        <?php endif; ?>

        <?php else: ?>
        <a href="/login" class="text-pink-500 hover:text-pink-700 px-4">Login</a>
        <a href="/signUp" class="text-pink-500 hover:text-pink-700 px-4">Sign Up</a>
        <a href="/mood" class="text-pink-500 hover:text-pink-700 px-4">Moodboard</a>
        <a href="/road" class="text-pink-500 hover:text-pink-700 px-4">Roadmap</a>
        <?php endif; ?>
      </nav>
    </div>
  </header>