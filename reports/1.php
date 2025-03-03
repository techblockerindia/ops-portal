<!DOCTYPE html>
<html lang="en" x-data="{ darkMode: false }" :class="{ 'dark': darkMode }">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blocker India Private Limited</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <!-- Custom CSS for animations and preloader -->
    <style>
        .animate-fade-in-down {
            animation: fade-in-down 1s ease-out;
        }

        .animate-fade-in-up {
            animation: fade-in-up 1s ease-out;
        }

        @keyframes fade-in-down {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Preloader styles */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #preloader.dark {
            background: #1a202c;
        }

        .loader {
            border: 8px solid #f3f3f3;
            border-top: 8px solid #6366F1;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Parallax background */
        .parallax-bg {
            background-image: url('img/blocker.svg');
            min-height: 500px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* Custom cursor */
        .custom-cursor {
            cursor: url('path-to-cursor-image.svg'), auto;
        }

        /* Gradient background */
        .hero-gradient {
            background: linear-gradient(45deg, #6366F1, #4F46E5);
            background-size: 200% 200%;
            animation: gradient-animation 5s ease infinite;
        }

        @keyframes gradient-animation {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Flip card */
        .flip-card {
            perspective: 1000px;
        }

        .flip-card-inner {
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            backface-visibility: hidden;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .flip-card-back {
            transform: rotateY(180deg);
        }
    </style>

    <!-- Preloader Script -->
    <script>
        window.addEventListener('load', function () {
            const preloader = document.getElementById('preloader');
            preloader.style.display = 'none';
        });
    </script>
</head>

<body class="transition duration-500 ease-in-out bg-gray-100 dark:bg-gray-900 dark:text-white">

    <!-- Preloader -->
    <div id="preloader" :class="{ 'dark': darkMode }">
        <div class="loader"></div>
    </div>

    <!-- Navbar -->
    <nav class="bg-white dark:bg-gray-800 py-4 shadow-lg transition duration-500">
        <div class="container mx-auto flex justify-between items-center px-6">
            <div class="text-2xl font-bold text-indigo-600 dark:text-indigo-400">BLOCKER INDIA</div>
            <div class="flex items-center space-x-4">
                <button @click="darkMode = !darkMode" class="focus:outline-none">
                    <template x-if="!darkMode">
                        <i class="fa-solid fa-moon text-gray-600 hover:text-indigo-600 transition text-xl"></i>
                    </template>
                    <template x-if="darkMode">
                        <i class="fa-solid fa-sun text-gray-300 hover:text-indigo-400 transition text-xl"></i>
                    </template>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-gradient container mx-auto mt-12 flex flex-col lg:flex-row items-center justify-between px-6">
        <div class="text-center lg:text-left lg:w-1/2">
            <h1 class="text-5xl font-bold leading-tight animate-fade-in-down">Chennai Team Reports</h1>
            <p class="text-gray-600 dark:text-gray-300 mt-4 animate-fade-in-up">
                We provide cutting-edge technology solutions to help your business thrive in the digital age.
            </p>
            <div class="mt-6">
                <a href="#features" class="bg-indigo-600 text-white py-3 px-8 rounded-full shadow-lg hover:bg-indigo-700 transition">Explore Now</a>
            </div>
        </div>
        <div class="mt-12 lg:mt-0 lg:w-1/2 animate-fade-in-up">
            <lottie-player src="https://assets.lottiefiles.com/datafiles/sample_animation.json" background="transparent" speed="1" loop autoplay></lottie-player>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="container mx-auto mt-16 px-6">
        <h2 class="text-3xl font-bold text-center animate-fade-in-down">Our Data Sheets</h2>
        <p class="text-gray-600 dark:text-gray-300 mt-2 text-center">Explore the amazing features</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
            <!-- Feature Cards -->
            <!-- Feature 1 -->
            <div class="flip-card bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition transform hover:-translate-y-2">
                <div class="flip-card-inner">
                    <div class="flip-card-front flex items-center justify-center">
                        <i class="fa-solid fa-cart-shopping text-indigo-600 dark:text-indigo-400 text-5xl"></i>
                    </div>
                    <div class="flip-card-back">
                        <h3 class="text-xl font-bold mt-6 text-center">Order Processing</h3>
                        <p class="text-gray-600 dark:text-gray-300 mt-4 text-center">Order Process Data Sheets</p>
                        <div class="mt-6 flex flex-col space-y-4">
                            <a href="https://docs.google.com/spreadsheets/d/1abBQgoKQne8MGNRf8RGhuHgP0kKP873KejDhllaHpbo" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Order Sheet</a>
                            <a href="https://docs.google.com/spreadsheets/d/11L3PlC2gq3rj-XNUNo46ykqRt4QBsoAh/edit?gid=1623457968#gid=1623457968" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Label Vendor Issue</a>
                            <a href="https://docs.google.com/spreadsheets/d/1MfvdYVW2-sjvxvTxLOv2BlnbAsvAZcnC/edit#gid=53354839" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Tracking and Delivery Shipment</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature 2 -->
            <!-- Similar feature cards here -->
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-indigo-600 dark:bg-gray-800 text-white py-8 mt-16">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Nirmal. All rights reserved.</p>
            <div class="mt-4 flex justify-center space-x-4">
                <a href="https://www.linkedin.com/in/nirmalkumar-palanismay/" target="_blank" class="hover:text-gray-300"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="https://www.instagram.com/nirmalkumar_palanisamy/" target="_blank" class="hover:text-gray-300"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button @click="window.scrollTo({ top: 0, behavior: 'smooth' })" class="fixed bottom-5 right-5 bg-indigo-600 p-4 rounded-full shadow-lg hover:bg-indigo-700 text-white transition"><i class="fa fa-arrow-up"></i></button>

</body>

</html>