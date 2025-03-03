<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace Links</title>
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
        <h1 class="text-4xl font-bold text-center text-gray-900 mb-8">Marketplace Links</h1>

        <!-- Marketplace Links Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8">

            <!-- AWW Account Section -->
            <div class="card bg-white rounded-lg shadow-md p-6">
                <h2 class="section-title mb-4">Marketplace Team</h2>
                <p class="mb-4 font-medium">POC : </p>
                <div class="icon-links">
                    <a href="https://docs.google.com/document/d/1qdfKw7Oig5FpU73l-DD8f1FJPq9j3vCsnHvCqNs6rV8/edit?tab=t.0" class="link-hover">
                        <i class="fas fa-file-alt"></i> Marketplace Overall
                    </a>
                </div>
            </div>

            <!-- Walmart Section -->
            <div class="card bg-white rounded-lg shadow-md p-6">
                <h2 class="section-title mb-4">Walmart</h2>
                <p class="mb-4 font-medium">POC : PRIYA GURUNG</p>
                <div class="icon-links">
                    <a href="https://docs.google.com/spreadsheets/u/0/d/1xHsk51NMWNX5mLOZygdy-SiEv9sQGqhfHEsQGZxY5H0/edit" class="link-hover">
                        <i class="fas fa-file-alt"></i> Automation (Automation Eseller to Marketplace)
                    </a>
                    <a href="https://docs.google.com/spreadsheets/u/0/d/1jD7QugqQllZRGcDEu3ANMtaxhJ-QFhXml_AdBBjsuMU/edit" class="link-hover">
                        <i class="fas fa-file-alt"></i> Walmart All Catalog File (Vendor Info on Listing)
                    </a>
                    <a href="https://docs.google.com/spreadsheets/u/0/d/1cGx0b4PZEpKfVI-3qqHa3bz8sj-shVLL/edit" class="link-hover">
                        <i class="fas fa-file-alt"></i> WFS Master File (WFS MR)
                    </a>
                    <a href="https://docs.google.com/spreadsheets/u/0/d/1nSMGpdai390pHI38bXeowY8WlxwtRcdrVzHz3P6vz14/edit" class="link-hover">
                        <i class="fas fa-file-alt"></i> Daily Work Report
                    </a>
                </div>
            </div>

            <!-- Private Label Section -->
            <div class="card bg-white rounded-lg shadow-md p-6">
                <h2 class="section-title mb-4">Private Label</h2>
                <p class="mb-4 font-medium">POC : Aranya Pradhan</p>
                <div class="icon-links">
                    <a href="https://docs.google.com/spreadsheets/d/1ngdgFQRC-15hWXnC4qnE5sE-zPeB5jklKhtBcuZsDks/edit?gid=0#gid=0" class="link-hover">
                        <i class="fas fa-file-alt"></i> Reprised File (Pricing Update)
                    </a>
                    <a href="https://docs.google.com/spreadsheets/u/0/d/1xHsk51NMWNX5mLOZygdy-SiEv9sQGqhfHEsQGZxY5H0/edit" class="link-hover">
                        <i class="fas fa-file-alt"></i> Automations (Eseller to Mktplc automation Check)
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/1EUwHiUuNQAl39G4KjQ82xJL4mh_h1lEHEReFD1JmwAY/edit?gid=0#gid=0" class="link-hover">
                        <i class="fas fa-file-alt"></i> Renewed Item Listings
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/1Mf8vbgqlj8DKq_GAUZEbUcBTrXUJ77SpgljVs9LBhfw/edit?gid=0#gid=0" class="link-hover">
                        <i class="fas fa-file-alt"></i> Brand and Product Type
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/10ZmeSCnizeSdMAXRlYywwAi9FhNcIfWTwvj0kITnPNc/edit?usp=sharing" class="link-hover">
                        <i class="fas fa-file-alt"></i> Warehouse Priority File
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/1-7H4p1xt2rFx2koaY0WEzIrflyTuXibwhrDYPQPn1us/edit?gid=0#gid=0" class="link-hover">
                        <i class="fas fa-file-alt"></i> Daily Work Report
                    </a>
                </div>
            </div>

            <!-- eBay Section -->
            <div class="card bg-white rounded-lg shadow-md p-6">
                <h2 class="section-title mb-4">eBay</h2>
                <p class="mb-4 font-medium">POC : Ronit Chhetri</p>
                <div class="icon-links">
                    <a href="https://docs.google.com/spreadsheets/d/15SLradFmOaNK55wOdo74So07TM5DbE85/edit?rtpof=true&sd=true" class="link-hover">
                        <i class="fas fa-file-alt"></i> Vendor and eBay Catalog File (Catalogue Blocker)
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/1xHsk51NMWNX5mLOZygdy-SiEv9sQGqhfHEsQGZxY5H0/edit?gid=1743935369#gid=1743935369" class="link-hover">
                        <i class="fas fa-file-alt"></i> Automation (Automation check Eseller to Blocker)
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/1F_ob1AtLWV9nIKMegNduMdButUcdZW1X5__pKBvnW0k/edit?usp=sharing" class="link-hover">
                        <i class="fas fa-file-alt"></i> Return File (Return Listing)
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/1cLTyn2cq9S90Zs9k8eKlgPIv5yJBpDyYYslRLnDau2E/edit?gid=0#gid=0" class="link-hover">
                        <i class="fas fa-file-alt"></i> FBA Master Data (MCAF MR listing)
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/1e2vEWAbV4jFAweZNax3arSm3sgDoU02M/edit?gid=938697446#gid=938697446" class="link-hover">
                        <i class="fas fa-file-alt"></i> Return Dropbox File
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/127l6GX3qMkWTJaQ0BqdMyRayXLwsNZSQGtmRMNvVG2k/edit?gid=0#gid=0" class="link-hover">
                        <i class="fas fa-file-alt"></i> Daily Work Report
                    </a>
                </div>
            </div>

            <!-- AWW Account Section -->
            <div class="card bg-white rounded-lg shadow-md p-6">
                <h2 class="section-title mb-4">AWW Account</h2>
                <div class="icon-links">
                    <a href="https://docs.google.com/spreadsheets/d/1xHsk51NMWNX5mLOZygdy-SiEv9sQGqhfHEsQGZxY5H0/edit?gid=1743935369#gid=1743935369" class="link-hover">
                        <i class="fas fa-file-alt"></i> Automation
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/15SLradFmOaNK55wOdo74So07TM5DbE85/edit?rtpof=true&sd=true" class="link-hover">
                        <i class="fas fa-file-alt"></i> Vendor File
                    </a>
                </div>
            </div>

            <!-- 3rd party Marketplaces Section -->
            <div class="card bg-white rounded-lg shadow-md p-6">
                <h2 class="section-title mb-4">3rd party Marketplaces</h2>
                <p class="mb-4 font-medium">POC : Aranya Pradhan</p>
                <div class="icon-links">
                    <a href="https://docs.google.com/spreadsheets/d/1xoGQ6hImkZvNx07FBeu1xyJLYLUEt7an8XBEb-LtCIg/edit?gid=0#gid=0" class="link-hover">
                        <i class="fas fa-file-alt"></i> Macy Catalogue
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/1iTeS_arZ0yQFdofupokUeILFwnLVbtysnQwb4ShaaTk/edit?gid=0#gid=0" class="link-hover">
                        <i class="fas fa-file-alt"></i> Khol’s Catalogue
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/1UgcjUADGOnKylAVk22XJI78xgMbEc_j5mjGVWTFk8Ak/edit?gid=0#gid=0" class="link-hover">
                        <i class="fas fa-file-alt"></i> NBC Universal Catalogue
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/11jbET5cikRMAVygBZGnn5GOcWlW07s_OlKd-F9rGFHA/edit?gid=0#gid=0" class="link-hover">
                        <i class="fas fa-file-alt"></i> Sears Catalogue
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/1OhnFIyh8V9fEq3DBYSMVztFj2M8qRoC2zDxQe5W-ND8/edit?gid=0#gid=0" class="link-hover">
                        <i class="fas fa-file-alt"></i> Shein Catalogue
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/18ZzcjJqHS1246sQcMuwXHjXgctslLee9qUCoDHUtaBU/edit?gid=0#gid=0" class="link-hover">
                        <i class="fas fa-file-alt"></i> PDS Catalogue
                    </a>
                </div>
            </div>

            <!-- AWW Account Section -->
            <div class="card bg-white rounded-lg shadow-md p-6">
                <h2 class="section-title mb-4">Websites</h2>
                <p class="mb-4 font-medium">POC : binay@amberww.com</p>
                <div class="icon-links">
                    <a href="https://docs.google.com/spreadsheets/d/1duDJCz_Es_6LR9UTfrRA7z6CLsZIYh_X0eNCetVuLcc/edit?gid=1552034896#gid=1552034896" class="link-hover">
                        <i class="fas fa-file-alt"></i> AmberSports
                    </a>
                </div>
            </div>

            <!-- Others Section -->
            <div class="card bg-white rounded-lg shadow-md p-6">
                <h2 class="section-title mb-4">Other</h2>
                <p class="mb-4 font-medium">POC : Aranya Pradhan</p>
                <div class="icon-links">
                    <a href="https://docs.google.com/spreadsheets/d/17W-w3eBBAR_Z2pXzx40iE5z12nO77T4Gz9uGVH5Vp_c/edit?gid=0#gid=0" class="link-hover">
                        <i class="fas fa-file-alt"></i> Marketplace Credentials Log
                    </a>
                    <a href="https://www.dropbox.com/search/personal?path=%2F&query=upc+2020&search_token=GkMiLTBiQAGqstC4%2B8ByRoC8FIcYM2os%2BiPjcyFANec%3D&typeahead_session_id=80744894786005740579483337505403" class="link-hover">
                        <i class="fa-brands fa-dropbox"></i> UPC Master Data
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/1Gi6R8iTtYvSxDansXe85Q0jQI8YGYvpuBi-ml0pOQaU/edit?gid=0#gid=0" class="link-hover">
                        <i class="fas fa-file-alt"></i> PL&WH items Listing Status   (WH/PL Listing status across MKTPLC)
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/15D6g7Xvxeki6ME0eoKpWlmkoaB8kplKyn3BjP3fyxAY/edit?gid=0#gid=0" class="link-hover">
                        <i class="fas fa-file-alt"></i> Campaign Catalogue  (Campaign SKU Ad Detail)
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/1PzwrP03dCsAKmOJiXOSsfHHWlrZK-_68DIyODUr22xI/edit?gid=0#gid=0" class="link-hover">
                        <i class="fas fa-file-alt"></i> Promotions and marketing For FBA   (FBA promotion and campaigns)
                    </a>
                    <a href="https://docs.google.com/spreadsheets/d/1RjlWFGvSxWVuZY70HTo-M7QnELhSaexs3L0LHWis0Gw/edit?gid=0#gid=0" class="link-hover">
                        <i class="fas fa-file-alt"></i> 3rd Party Marketplace Orders
                    </a>
                    <a href="https://docs.google.com/document/d/1DiQNmEXsOxkrRaeXvPZHkG0KqMCB0jTyswigeFs43v4/edit?tab=t.0" class="link-hover">
                        <i class="fas fa-file-alt"></i> Daily Work Report Overview
                    </a>
                </div>
            </div>

         </div>
     </div>
</body>
<script disable-devtool-auto="" src="https://cdn.jsdelivr.net/npm/disable-devtool@latest"></script>
</html>