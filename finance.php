<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Links</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Card Hover effect */
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        /* Link style */
        .link-hover {
            display: block;
            padding: 12px 18px;
            background-color: #fafafa;
            border-radius: 8px;
            color: #00796b;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            margin-bottom: 12px;
        }

        .link-hover:hover {
            background-color: #00796b;
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        /* Section Title */
        .section-title {
            background-color: #1D4ED8;
            color: white;
            padding: 12px;
            border-radius: 8px;
            font-size: 1.2rem;
            font-weight: 600;
        }

        /* Container for icon links */
        .icon-links {
            display: flex;
            flex-direction: column;
        }

        .icon-links a {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .icon-links i {
            font-size: 1.5rem;
            color: #1D4ED8;
        }

    </style>
</head>

<body class="bg-gray-50 p-6">

    <div class="container mx-auto">
        <!-- Page Header -->
        <h1 class="text-4xl font-bold text-center text-gray-900 mb-8">Finance Links</h1>

        <!-- Finance Links Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8">

            <!-- Finance Team Section -->
            <div class="card bg-white rounded-lg shadow-md p-6">
                <h2 class="section-title mb-4">Finance Team</h2>
                <div class="icon-links">
                    <a href="https://docs.google.com/spreadsheets/d/1nplau57CEw6acVzxWnnwFUSwQzM7itDan-SiQ-5DNHo/edit?usp=drive_link"
                        class="link-hover">
                        <i class="fa-brands fa-dropbox"></i> EOM Report
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/1_GD-jbZuaaO6r3kD7e78HPl8Nn899P1B11zhm8ppTCo/edit?usp=drive_link"
                        class="link-hover">
                        <i class="fa-brands fa-dropbox"></i></i> NET Term
                    </a>
                    <!-- Uncomment if needed -->
                    <!-- <a href="https://www.dropbox.com/scl/fo/klponecrxm31zkn58qatq/APwOCuy0GxoANkvVavqk8-s?rlkey=kumvwoo277upg85szft6gjr2t&st=nmthburm&dl=0" class="link-hover">
                        <i class="fas fa-chart-line"></i> Daily Sales Report
                    </a> -->
                </div>
            </div>

            <!-- VRT Team Section (Optional) -->
            <!-- <div class="card bg-white rounded-lg shadow-md p-6">
                <h2 class="section-title mb-4">VRT Team</h2>
                <div class="icon-links">
                    <a href="#" class="link-hover">
                        <i class="fas fa-link"></i> Link 1
                    </a>
                    <a href="#" class="link-hover">
                        <i class="fas fa-link"></i> Link 2
                    </a>
                    <a href="#" class="link-hover">
                        <i class="fas fa-link"></i> Link 3
                    </a>
                </div>
            </div> -->
            
        </div>
    </div>

</body>
<script disable-devtool-auto="" src="https://cdn.jsdelivr.net/npm/disable-devtool@latest"></script>
</html>
