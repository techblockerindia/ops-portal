<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</head>
<body class="bg-gray-100">
  <!-- Header Section -->
  <header class="bg-white shadow-lg sticky top-0 z-50">
    <nav class="container mx-auto px-6 py-4 flex items-center justify-between h-20">
      <!-- Logo -->
      <a href="index.php" class="text-2xl font-bold text-indigo-600 transition duration-300 hover:text-indigo-700">
        BLOCKER INDIA
      </a>

      <!-- Desktop Menu -->
      <div class="hidden md:flex items-center space-x-6"> 
        <a href="../index.php" class="text-gray-700 hover:text-indigo-600 text-lg">Home</a>

        <!-- Categories Dropdown -->
        <div class="relative">
          <button id="desktop-dropdown-btn" class="text-gray-700 hover:text-indigo-600 flex items-center text-lg">
            Categories <i class="fas fa-chevron-down ml-2"></i>
          </button>
          <div id="desktop-dropdown-menu" class="absolute left-0 mt-2 w-56 bg-white shadow-lg rounded-lg hidden">
            <a href="../reports/otc.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Operating Team Chennai</a>
            <a href="procurement.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Procurement Team</a>
            <a href="vrt.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">VRT Team</a>
            <a href="marketplace.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Marketplace Team</a>
            <a href="finance.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Finance Team</a>
            <a href="pricingteam.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Pricing Team</a>
            <a href="businessIntelligence.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Business Intelligence</a>
          </div>
        </div>

        <a href="#" class="text-gray-700 hover:text-indigo-600 text-lg">Contact Us</a>

        <!-- Login Button (Initially Visible) -->
        <a href="login.php" id="login-btn" class="ml-6 px-5 py-2 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 transition duration-300 text-lg">
          Login
        </a>

        <!-- User Dropdown (Initially Hidden) -->
        <div id="user-menu" class="relative hidden">
          <button id="user-dropdown-btn" class="px-5 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition duration-300">
            <span id="user-name">User</span> <i class="fas fa-chevron-down ml-2"></i>
          </button>
          <div id="user-dropdown-menu" class="absolute right-0 mt-2 w-40 bg-white shadow-lg rounded-lg hidden">
            <a href="../admin/admin.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Admin</a>
            <a href="../logout.php" id="logout-btn" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Logout</a>
          </div>
        </div>
      </div>

      <!-- Mobile Menu Button -->
      <button id="mobile-menu-button" class="md:hidden text-gray-600 hover:text-indigo-600 text-xl focus:outline-none">
        <i class="fa-solid fa-bars"></i>
      </button>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg py-4">
      <a href="#" class="block px-6 py-2 text-gray-700 hover:bg-gray-200">Home</a>
      
      <!-- Mobile Dropdown -->
      <button id="mobile-dropdown-toggle" class="block px-6 py-2 text-gray-700 hover:bg-gray-200 w-full text-left">
        Categories <i class="fas fa-chevron-down float-right"></i>
      </button>
      <div id="mobile-dropdown" class="hidden bg-gray-100">
        <a href="../reports/otc.php" class="block px-6 py-2 text-gray-700 hover:bg-gray-200">Operating Team Chennai</a>
        <a href="procurement.php" class="block px-6 py-2 text-gray-700 hover:bg-gray-200">Procurement Team</a>
        <a href="vrt.php" class="block px-6 py-2 text-gray-700 hover:bg-gray-200">VRT Team</a>
        <a href="marketplace.php" class="block px-6 py-2 text-gray-700 hover:bg-gray-200">Marketplace Team</a>
        <a href="finance.php" class="block px-6 py-2 text-gray-700 hover:bg-gray-200">Finance Team</a>
        <a href="pricingteam.php" class="block px-6 py-2 text-gray-700 hover:bg-gray-200">Pricing Team</a>
        <a href="businessIntelligence.php" class="block px-6 py-2 text-gray-700 hover:bg-gray-200">Business Intelligence</a>
      </div>

      <a href="#" class="block px-6 py-2 text-gray-700 hover:bg-gray-200">Contact Us</a>

      <a href="login.php" id="mobile-login-btn" class="block px-6 py-2 text-white bg-indigo-600 hover:bg-indigo-700 text-center rounded-lg mx-4">
        Login
      </a>
    </div>
  </header>

  <script>
    // Mobile Menu Toggle
    document.getElementById("mobile-menu-button").addEventListener("click", function() {
      document.getElementById("mobile-menu").classList.toggle("hidden");
    });

    // Mobile Dropdown Toggle
    document.getElementById("mobile-dropdown-toggle").addEventListener("click", function() {
      document.getElementById("mobile-dropdown").classList.toggle("hidden");
    });

    // Desktop Dropdown Toggle
    document.getElementById("desktop-dropdown-btn").addEventListener("click", function(event) {
      event.stopPropagation();
      document.getElementById("desktop-dropdown-menu").classList.toggle("hidden");
    });

    // Close dropdown when clicking outside
    document.addEventListener("click", function(event) {
      var dropdown = document.getElementById("desktop-dropdown-menu");
      var button = document.getElementById("desktop-dropdown-btn");
      if (!button.contains(event.target) && !dropdown.contains(event.target)) {
        dropdown.classList.add("hidden");
      }
    });

    let isLoggedIn = false; 
    let userName = "NIRMAL";

    if (isLoggedIn) {
      document.getElementById("login-btn").classList.add("hidden");
      document.getElementById("user-menu").classList.remove("hidden");
      document.getElementById("user-name").innerText = userName;
    }

    // User Dropdown Toggle
    document.getElementById("user-dropdown-btn").addEventListener("click", function(event) {
      event.stopPropagation();
      document.getElementById("user-dropdown-menu").classList.toggle("hidden");
    });

    // Logout Functionality (For Demo)
    document.getElementById("logout-btn").addEventListener("click", function() {
      alert("Logging out...");
      location.reload();
    });
  </script>
</body>
</html>
