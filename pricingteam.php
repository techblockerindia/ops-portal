<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing Links</title>
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
            background-color: #19d4bf;
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
        <h1 class="text-4xl font-bold text-center text-gray-900 mb-8">Pricing Links</h1>

        <!-- Finance Links Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8">

            <!-- Finance Team Section -->
            <div class="card bg-white rounded-lg shadow-md p-6">
                <h2 class="section-title mb-4">Pricing Team</h2>
                <div class="icon-links">
                    <a href="https://docs.google.com/spreadsheets/d/1pjrnZf8QmiIqFHXaMJizgOkGOmd7lznH0E9OvXHSaco/edit?usp=sharing_eil&ts=6734daac"
                        class="link-hover">
                        <i class="fa-regular fa-file-excel"></i> FBA Master Report
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/1SvEc9-ljZ30cP_CjRoWVpN2ZJzL6RP_rt1IqG2AyvuI/edit?usp=sharing_eil&ts=6734daac"
                        class="link-hover">
                        <i class="fa-regular fa-file-excel"></i></i> Amazon Pricing Error Action
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/1QnvoX-mUbLegeHEtp3Guo8B2MTSDErP0G0M2Q3vk180/edit?usp=sharing_eil&ts=6734daac"
                        class="link-hover">
                        <i class="fa-regular fa-file-excel"></i></i> Amazon Referral Fee Check by Pricing Team
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/1HioehPBPdi6s763ryKZTerPwLnQ1V5rIsN_GsoyZPp4/edit?usp=sharing_eil&ts=6734daac"
                        class="link-hover">
                        <i class="fa-regular fa-file-excel"></i></i> ChannelMax Vendor IDs
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/1O8nvv-o-KvfCVLyX7PJ2Pb3jwRDswewWhe1gdZNWOgk/edit?usp=sharing_eil&ts=6734daac"
                        class="link-hover">
                        <i class="fa-regular fa-file-excel"></i> Full Vendor Updates
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/15AIJpSCqRLBmlj3tsxldV-5XMJEPGI1QErqqTqOYg_I/edit?usp=sharing_eil&ts=6734daac"
                        class="link-hover">
                        <i class="fa-regular fa-file-excel"></i></i> New Vendor Price Verification- by Pricing Team
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/1EZl1vGuSAFhBvmHBfVLw9hbB3qcUmER9PUWAjh_fqug/edit?usp=sharing_eil&ts=6734daac"
                        class="link-hover">
                        <i class="fa-regular fa-file-excel"></i></i> BF/CM November Promotions
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/1SvEc9-ljZ30cP_CjRoWVpN2ZJzL6RP_rt1IqG2AyvuI/edit?usp=sharing_eil&ts=6734daac"
                        class="link-hover">
                        <i class="fa-regular fa-file-excel"></i></i> FBA Cost Price Module
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>
<script disable-devtool-auto="" src="https://cdn.jsdelivr.net/npm/disable-devtool@latest"></script>
</html>
