<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">
  <!-- Header Section -->
  <header class="bg-white dark:bg-gray-900 shadow-lg sticky top-0 z-50">
    <nav class="container mx-auto px-6 py-4 flex items-center justify-between h-20">
      <!-- Logo -->
      <div class="flex items-center">
        <a href="index.php" class="text-2xl font-bold text-indigo-600 dark:text-indigo-400 transition duration-300 hover:text-indigo-700">
          BLOCKER INDIA
        </a>
      </div>

      <!-- Main Navigation -->
      <div class="hidden md:flex items-center space-x-8">
        <a href="#features" class="text-lg text-gray-600 dark:text-gray-300 hover:text-indigo-600 transition duration-300">Features</a>
        <a href="#pricing" class="text-lg text-gray-600 dark:text-gray-300 hover:text-indigo-600 transition duration-300">Pricing</a>
        <a href="#contact" class="text-lg text-gray-600 dark:text-gray-300 hover:text-indigo-600 transition duration-300">Contact</a>
        
        <!-- Dark Mode Toggle -->
        <button class="focus:outline-none">
          <i class="fa-solid fa-moon text-gray-400 hover:text-indigo-600 transition duration-300 text-xl"></i>
        </button>
      </div>

      <!-- Mobile Menu Toggle -->
      <div class="md:hidden flex items-center">
        <button class="focus:outline-none">
          <i class="fa-solid fa-bars text-gray-600 hover:text-indigo-600 transition duration-300 text-xl"></i>
        </button>
      </div>
    </nav>
  </header>

  <!-- Hero Section -->
  <header class="bg-blue-600 text-white py-20">
    <div class="container mx-auto text-center">
      <h1 class="text-4xl font-bold mb-4">Welcome to Blocker Team Directory</h1>
    </div>
  </header>
