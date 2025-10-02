<!-- app/Views/user/signUp.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up | Gappy's Plushies</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Custom color palette (matches login/landing) -->
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: '#F59E42', // Example: orange from landing/login
              accent: '#F7C873',  // Example: light yellow
              bg: '#FFF8F1',      // Example: soft background
              text: '#3B2F2F',    // Example: dark brown
            }
          }
        }
      }
    </script>
</head>
<body class="min-h-screen bg-bg flex flex-col items-center justify-center font-sans">
    <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8 border border-accent">
        <h1 class="text-3xl font-bold text-primary mb-2 text-center">Create Account</h1>
        <p class="text-text mb-6 text-center">Sign up to start your plushie adventure!</p>
        <form method="post" action="<?= site_url('user/store') ?>" class="space-y-5">
            <div>
                <label for="username" class="block text-text font-medium mb-1">Username</label>
                <input type="text" id="username" name="username" required
                    class="w-full px-4 py-2 border border-accent rounded-lg focus:outline-none focus:ring-2 focus:ring-primary bg-bg text-text">
            </div>
            <div>
                <label for="email" class="block text-text font-medium mb-1">Email</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-4 py-2 border border-accent rounded-lg focus:outline-none focus:ring-2 focus:ring-primary bg-bg text-text">
            </div>
            <div>
                <label for="password" class="block text-text font-medium mb-1">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-2 border border-accent rounded-lg focus:outline-none focus:ring-2 focus:ring-primary bg-bg text-text">
            </div>
            <div>
                <label for="confirm_password" class="block text-text font-medium mb-1">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required
                    class="w-full px-4 py-2 border border-accent rounded-lg focus:outline-none focus:ring-2 focus:ring-primary bg-bg text-text">
            </div>
            <button type="submit"
                class="w-full py-2 px-4 bg-primary text-white font-semibold rounded-lg shadow hover:bg-accent transition duration-150">
                Sign Up
            </button>
        </form>
        <div class="mt-6 text-center">
            <span class="text-text">Already have an account?</span>
            <a href="<?= site_url('user/login') ?>" class="text-primary font-semibold hover:underline">Log In</a>
        </div>
    </div>
</body>
</html>