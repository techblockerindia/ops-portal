<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</head>
<body class="bg-gray-100">
  <header class="bg-white dark:bg-gray-900 shadow-lg sticky top-0 z-50">
    <nav class="container mx-auto px-6 py-4 flex items-center justify-between h-20">
      <!-- Logo -->
      <a href="index.php" class="text-2xl font-bold text-indigo-600 dark:text-indigo-400 transition duration-300 hover:text-indigo-700">
        BLOCKER INDIA
      </a>

      <!-- Desktop Menu -->
      <div class="hidden md:flex items-center space-x-6">
        <div class="relative group">
          <button class="px-4 py-2 text-gray-700 dark:text-gray-300 hover:text-indigo-600">Categories <i class="fas fa-chevron-down"></i></button>
          <div class="absolute left-0 w-48 bg-white shadow-lg rounded-lg hidden group-hover:block mt-2">
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Category 1</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Category 2</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Category 3</a>
          </div>
        </div>
        <a href="login.php" class="px-4 py-2 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 transition duration-300">Login</a>
        <a href="#" onclick="signOut();" class="px-4 py-2 text-gray-700 dark:text-gray-300 hover:text-red-600">Sign out</a>
        <button id="theme-toggle" class="text-gray-400 hover:text-indigo-600 transition duration-300 text-xl">
          <i class="fa-solid fa-moon"></i>
        </button>
      </div>

      <!-- Mobile Menu Button -->
      <button id="mobile-menu-button" class="md:hidden text-gray-600 hover:text-indigo-600 text-xl focus:outline-none">
        <i class="fa-solid fa-bars"></i>
      </button>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg py-4">
      <a href="#" class="block px-6 py-2 text-gray-700 hover:bg-gray-200">Categories</a>
      <a href="login.php" class="block px-6 py-2 text-gray-700 hover:bg-gray-200">Login</a>
      <a href="#" onclick="signOut();" class="block px-6 py-2 text-gray-700 hover:bg-gray-200">Sign out</a>
      <button id="theme-toggle-mobile" class="block px-6 py-2 text-gray-700 hover:bg-gray-200">Dark Mode</button>
    </div>
  </header>

  <script>
    // Mobile Menu Toggle
    document.getElementById("mobile-menu-button").addEventListener("click", function() {
      document.getElementById("mobile-menu").classList.toggle("hidden");
    });

    // Dark Mode Toggle
    document.getElementById("theme-toggle").addEventListener("click", function() {
      document.body.classList.toggle("dark");
    });
    document.getElementById("theme-toggle-mobile").addEventListener("click", function() {
      document.body.classList.toggle("dark");
    });

    // Google Sign Out
    function signOut() {
      console.log('User signed out.');
    }
  </script>
</body>
</html>