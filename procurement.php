<?php include 'header.php'; ?>
<body class="bg-gray-50 p-6">

    <div class="container mx-auto">
        <!-- Page Header -->
        <h1 class="text-4xl font-bold text-center text-gray-900 mb-8">Procurement Links</h1>

        <!-- Finance Links Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8">

            <!-- Finance Team Section -->
            <div class="card bg-white rounded-lg shadow-md p-6">
                <h2 class="section-title mb-4">Procurement Team</h2>
                <div class="icon-links">
                    <a href="https://www.dropbox.com/home/BestSellers%20Report-Vendor%202024"
                        class="link-hover">
                        <i class="fa-brands fa-dropbox"></i> Best Sellers for Each vendors
                    </a>
                    <a href="https://www.dropbox.com/home/New%20Vendor%20report"
                        class="link-hover">
                        <i class="fa-brands fa-dropbox"></i></i> New Vendors
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/17XVKMGAQxh5BLkm7GNvoeGCr8AeoS_p7/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true"
                        class="link-hover">
                        <i class="fa-regular fa-file-excel"></i></i> Vendor Update
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/1ag6nXwLem-_UsFOznyhdpU8MAxDQqSQ_/edit?usp=drive_link&ouid=115218286106127955797&rtpof=true&sd=true"
                        class="link-hover">
                        <i class="fa-regular fa-file-excel"></i></i> Listing & QC Updates
                    </a>
                </div>
            </div>
            
        </div>
    </div>

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
            background-color: #4accbd;
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
            color: #222733;
        }

    </style>

</body>
<script disable-devtool-auto="" src="https://cdn.jsdelivr.net/npm/disable-devtool@latest"></script>

<?php include 'footer.php'; ?>