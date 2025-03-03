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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.6.0/uicons-brands/css/uicons-brands.css">


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
            background: #1a202c; /* Tailwind's gray-900 color */
        }

        .loader {
            border: 8px solid #f3f3f3; /* Light gray */
            border-top: 8px solid #6366F1; /* Indigo-600 */
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
    <section class="container mx-auto mt-12 flex flex-col lg:flex-row items-center justify-between px-6">
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
            <!-- Replace with your actual image -->
            <img src="img/blocker.svg" alt="Hero Image">
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="container mx-auto mt-16 px-6">
        <h2 class="text-3xl font-bold text-center animate-fade-in-down">Our Data Sheets</h2>
        <p class="text-gray-600 dark:text-gray-300 mt-2 text-center">Explore the amazing features</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
            <!-- Feature Cards -->
            <!-- Feature 1 -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition transform hover:-translate-y-2">
                <div class="flex items-center justify-center">
                    <i class="fa-solid fa-cart-shopping text-indigo-600 dark:text-indigo-400 text-5xl"></i>
                </div>
                <h3 class="text-xl font-bold mt-6 text-center">Order Processing</h3>
                <p class="text-gray-600 dark:text-gray-300 mt-4 text-center">Order Process Data Sheets</p>
                <div class="mt-6 flex flex-col space-y-4">
                    <a href="https://docs.google.com/spreadsheets/d/1LJfg5S2JBMblEYa6RTnpqB0PVtT8sqcb/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Order acknowledge report</a>
                    <a href="https://docs.google.com/spreadsheets/d/1nE1lQ2_idN_PK8nR24undQDTtUzUkGrEXwIvKYbPjyc/edit?usp=drive_link" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Order mastersheet</a>
                    <a href="https://docs.google.com/spreadsheets/d/1zxnedtQbnjeWTkSoIVCrhac1veLCqOsV/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Cancellation hold-delivery delay report</a>
                    <a href="https://docs.google.com/spreadsheets/d/10wlj57L_2OhAWGgmuXn05Hq1-JLaN6ft/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Various order issues</a>
                    <a href="https://docs.google.com/spreadsheets/d/1vFm5c8VjlvGXMzLI0F9MSTHjxg3yTNKb/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Orders email check</a>
                </div>
            </div>
            <!-- Feature 2 -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition transform hover:-translate-y-2">
                <div class="flex items-center justify-center">
                    <i class="fa-solid fa-boxes-stacked text-indigo-600 dark:text-indigo-400 text-5xl"></i>
                </div>
                <h3 class="text-xl font-bold mt-6 text-center">Inventory Management</h3>
                <p class="text-gray-600 dark:text-gray-300 mt-4 text-center">Inventory Data Sheets</p>
                <div class="mt-6 flex flex-col space-y-4">
                    <a href="https://docs.google.com/spreadsheets/d/1kbdHMbNZ1uGxy_bPiQDf0uVL6jgltpni/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Vendor Status Report</a>
                    <a href="https://docs.google.com/spreadsheets/d/1d98jXJKiuBkpgPzOCzdlPX08RAg9EaCJ/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Automation Vendor Report</a>
                    <a href="https://docs.google.com/spreadsheets/d/1zs4Qi4oHZ9TN5SeJS_4X1UgkMWdH_KpE/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Custom Pricing Sales</a>
                    <a href="https://docs.google.com/spreadsheets/d/1NGQ8wCa4-OQh0booP30LmT49KbVKEsDe/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Eseller Issue</a>
                    <a href="https://docs.google.com/spreadsheets/d/1HTZP831x-fIpxlIQDW0M6vXUcCAvYSrH/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Vendor Issue Report</a>
                    <a href="https://docs.google.com/spreadsheets/d/16wZrmIzRS711hXDPMiMPnoH69kTKKvum/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">OOS Inactive Report</a>
                    <a href="https://docs.google.com/spreadsheets/d/1fXwD6BUB5BMdzuItzc2fwJne7M9JaAjs/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Vendor Holiday Closure</a>
                    <a href="https://docs.google.com/spreadsheets/d/1LsOHkNtZzgcoWU-JkZ6rqn2U2g6lo1ey/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">LTL SKU List</a>
                </div>
                
            </div>
            <!-- Feature 3 -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition transform hover:-translate-y-2">
                <div class="flex items-center justify-center">
                    <i class="fa-solid fa-headset text-indigo-600 dark:text-indigo-400 text-5xl"></i>
                </div>
                <h3 class="text-xl font-bold mt-6 text-center">Customer Care</h3>
                <p class="text-gray-600 dark:text-gray-300 mt-4 text-center">Customer Care Team Data</p>

                <div class="mt-6 flex flex-col space-y-4">
                    <a href="https://docs.google.com/spreadsheets/d/1JL1xRFKLi_Os2NYJeSd0hyfMSCBKdz_I/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Amazon 2nd Account CC</a>
                    <a href="https://docs.google.com/spreadsheets/d/1YAKwldCpP4FSVjN0m01v7gabSLod-Sqg/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Amazon Main Account Metrics</a>
                    <a href="https://docs.google.com/spreadsheets/d/15q_INrI0XB2eEvS7XW4MxluyXQsw7uRi/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Amazon Walmart Main Account CC</a>
                    <a href="https://docs.google.com/spreadsheets/d/1AVupN0r3kgCQl8692avxXZ6Zku18ldA8/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Carrier Claims</a>
                    <a href="https://docs.google.com/spreadsheets/d/10RJVDnR2qtXzkHnyCLp8U7mNe-glGT_5/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Cancellation and Refunds</a>
                    <a href="https://docs.google.com/spreadsheets/d/1FOSup41TR02sXdJW1xiUU6VrKsasazKo/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Default Message</a>
                    <a href="https://docs.google.com/spreadsheets/d/1P2ky5ekcQ5HXUAOwj80WKBo7syY9JMsy/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Return Report</a>
                    <a href="https://docs.google.com/spreadsheets/d/1PEHZnHukoKDxWY7ZfgIdEPpC_Mo1toG1/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Ebay CC</a>
                    <a href="https://docs.google.com/spreadsheets/d/16I8v0QClpQXwvCrzwuco7unr9IoKl08j/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Ebay Metrics</a>
                    <a href="https://docs.google.com/spreadsheets/d/1467AX9x2fYBl0-48kDE4sVrYthipe204/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">New Return Policy</a>
                    <a href="https://docs.google.com/spreadsheets/d/1rWRlGdtzrme8ttvDUHgQCrBrexB1-S5N/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">ODR Claims</a>
                    <a href="https://docs.google.com/spreadsheets/d/1e2vEWAbV4jFAweZNax3arSm3sgDoU02M/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Return Dashboard</a>
                    <a href="https://docs.google.com/spreadsheets/d/1rcU4JgBXIdTVP3PHxybtWWB5UI2PqFV_/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Walmart Metrics Report</a>
                </div>
            </div>
            <!-- Feature 4 -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition transform hover:-translate-y-2">
                <div class="flex items-center justify-center">
                    <i class="fa-solid fa-chart-line text-indigo-600 dark:text-indigo-400 text-5xl"></i>
                </div>
                <h3 class="text-xl font-bold mt-6 text-center">Sales</h3>
                <p class="text-gray-600 dark:text-gray-300 mt-4 text-center">Sales Data</p>
                <div class="mt-6 flex flex-col space-y-4">
                    <!-- Special Day Sale Report with static border and 'NEW' label -->
                    <div class="relative w-full">
                        <a href="https://docs.google.com/spreadsheets/d/16iH2ych15shgBoXgo9xjpiPaMG0tOhoO/edit?gid=1736045355#gid=1736045355" target="_blank" class="bg-yellow-500 text-white py-3 px-4 rounded-full text-center font-bold shadow-md w-full relative border-4 border-gradient hover:bg-yellow-600 hover:shadow-lg hover:border-yellow-400 transition duration-300 ease-in-out">
                            🌟 Special Day Sale Report
                            <span class="absolute top-1/2 right-[-40px] transform -translate-y-1/2 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded-l-lg">NEW</span>
                        </a>
                    </div>

                    <a href="https://docs.google.com/spreadsheets/d/1bkF5rLe1bgVH0ho5At5F66cA8VVqm-jn/edit?usp=sharing&ouid=111508838057600635006&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition w-full flex items-center justify-between">
                        <span>Amazon Main Account Consolidated Sale Report</span>
                        <i class="fa-brands fa-amazon text-white text-2xl ml-2"></i>
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/1TicI4kG_pqRxFrepIMLrvV2QSrWsvHha/edit?usp=sharing&ouid=111508838057600635006&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition w-full flex items-center justify-between">
                        <span>Amazon 2nd Account Consolidated Sale Report</span>
                        <i class="fa-brands fa-amazon text-white text-2xl ml-2"></i>
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/1D1pCLnGZtHz6XZN_DZUEF2-Zzdzn_BTG/edit?gid=1675844618#gid=1675844618" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition w-full flex items-center justify-between">
                        <span>Walmart Account Consolidated Sale Report</span>
                        <i class="fi fi-brands-walmart text-white text-2xl ml-2"></i>
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/1NXvOGX2gOg2nkcegb8Wb7OZjMGXRteh7/edit?gid=1746554838#gid=1746554838" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition w-full flex items-center justify-between">
                        <span>eBay Account Consolidated Sale Report</span>
                        <i class="fa-brands fa-ebay text-white text-2xl ml-2"></i>
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/1mOjoPR8TIfJ_aIDUE12ANpoCIw3ECwSe/edit?usp=sharing&ouid=111508838057600635006&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition w-full flex items-center justify-between">
                        <span>Amazon Main Account October Month Sale Report</span>
                        <i class="fa-brands fa-amazon text-white text-2xl ml-2"></i>
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/1FEpRKZ_rb5s6Y_tDSMMx6kRulUSdZpNI/edit?usp=sharing&ouid=111508838057600635006&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition w-full flex items-center justify-between">
                        <span>Amazon 2nd Account October Month Sale Report</span>
                        <i class="fa-brands fa-amazon text-white text-2xl ml-2"></i>
                    </a>
                    <a href="https://www.dropbox.com/scl/fi/obuumozljrfz222r86ox6/Walmart-October-Sales-Data-2024.xlsx?dl=0&rlkey=6gcfdq8vczgesiejx7u0wvzar" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition w-full flex items-center justify-between">
                        <span>Walmart Account October Month Sale Report</span>
                        <i class="fi fi-brands-walmart text-white text-2xl ml-2"></i>
                    </a>
                    <a href="https://www.dropbox.com/scl/fi/8vcyk8g8q55yl0s5or36l/eBAY-OCTOBER-SALE-DATA-2024.xlsx?dl=0&rlkey=ka43jbn41i3bsi9xhk1uvftzi" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition w-full flex items-center justify-between">
                        <span>eBay Account October Month Sale Report</span>
                        <i class="fa-brands fa-ebay text-white text-2xl ml-2"></i>
                    </a>

                </div>                 
            </div>
            
            <style>
                a.relative {
                    display: inline-flex;
                    align-items: center;
                    justify-content: space-between;
                }
            
                a.relative .absolute {
                    position: absolute;
                    top: 0;
                    right: -10px;
                }
            </style>
            
            
            
            <!-- Feature 5 -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg hover:shadow-xl transition transform hover:-translate-y-2">
                <div class="flex items-center justify-center">
                    <i class="fa-solid fa-gears text-indigo-600 dark:text-indigo-400 text-5xl"></i>
                </div>
                <h3 class="text-xl font-bold mt-6 text-center">Others</h3>
                <p class="text-gray-600 dark:text-gray-300 mt-4 text-center">Automation Data</p>
                <div class="mt-6 flex flex-col space-y-4">
                    <a href="https://docs.google.com/spreadsheets/d/1kCP_kRgCsHtKP1oTyHhsy6dkY4_jn98E/edit?usp=drive_link" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Automation</a>
                    <a href="https://docs.google.com/spreadsheets/d/1g2PGZrW8JI0U1DtjmKuQ1cqHy_UhtQ3S95a06MQ5ogc/edit?usp=sharing" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Rocket Shipping</a>
                    <a href="https://docs.google.com/spreadsheets/d/1L9ZsQTOpFgHtEEdcs6K5TErgXCGH_pQD/edit?usp=drive_link&ouid=117655739432175174616&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">New Return Policy</a>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg hover:shadow-xl transition transform hover:-translate-y-2">
                <div class="flex items-center justify-center">
                    <i class="fa-solid fa-truck-fast text-indigo-600 dark:text-indigo-400 text-5xl"></i>
                </div>
                <h3 class="text-xl font-bold mt-6 text-center">Tracking</h3>
                <p class="text-gray-600 dark:text-gray-300 mt-4 text-center">Tracking</p>
                <div class="mt-6 flex flex-col space-y-4">
                    <a href="https://docs.google.com/spreadsheets/d/1eLOzsdiHFxZ-3ij8GLhsf01eLnHA-GXwSplSJWWAbaE/edit?gid=284898507#gid=284898507" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Tracking dashboard</a>
                    <a href="https://docs.google.com/spreadsheets/d/1lF_5R19TzuoIPeh2uxZjJCR4_HkABCw2/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Order Follow Up Price Wise</a>
                    <a href="https://docs.google.com/spreadsheets/d/1g0Fmo--TKGO1Dw1w6tZq7mEPuBkzvEhX/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Fake ID Delivery Report</a>
                    <a href="https://docs.google.com/spreadsheets/d/1Nt8RCbYHCd1Oe_XqGxCuYPekAa2y1scj/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">Label Creation Order Follow Up</a>
                    <a href="https://docs.google.com/spreadsheets/d/1rwQSZV88l-Be7aYaKjVIF9i30ci5SfxG/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true" target="_blank" class="bg-indigo-600 text-white py-2 px-4 rounded-lg text-center hover:bg-indigo-700 transition">LTL Rocket Shipping</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- <footer class="bg-gradient-to-r from-purple-600 to-indigo-600 dark:bg-gray-900 text-white py-12 mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center space-y-4">
                <p class="text-lg font-semibold text-center">&copy; 2024 Crafted with Passion by Nirmal</p>
                <p class="text-sm text-center opacity-75">Last updated: 21-10-2024</p>
                <div class="mt-4 flex space-x-6">
                    <a href="https://www.linkedin.com/in/nirmalkumar-palanismay/" target="_blank" class="hover:scale-110 transition ease-in-out duration-300 text-pink-500" aria-label="LinkedIn Profile">
                        <i class="fab fa-linkedin fa-2x"></i>
                    </a>
                    <a href="https://www.instagram.com/nirmalkumar_palanisamy/" target="_blank" class="hover:scale-110 transition ease-in-out duration-300 text-pink-500" aria-label="Instagram Profile">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                    <a href="https://nirmal.tndev.in" target="_blank" class="hover:scale-110 transition ease-in-out duration-300 text-yellow-500" aria-label="developer Profile">
                        <i class="fa-solid fa-user"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer> -->
    

</body>
<script disable-devtool-auto="" src="https://cdn.jsdelivr.net/npm/disable-devtool@latest"></script>
</html>
