<?php
require 'db.php';

if (!isset($_SESSION['user_email'])) {
    header("Location: login.php");
    exit;
}

$user_role = $_SESSION['user_role'];

$categories = [
    "SUPER ADMIN" => [
        ["url" => "admin-dashboard.php", "name" => "Admin Dashboard", "icon" => "fas fa-user-shield"],
        ["url" => "procurement.php", "name" => "Procurement Team", "icon" => "fas fa-shopping-cart"]
    ],
    "OTC" => [
        ["url" => "reports/otc.php", "name" => "Operating Team Chennai", "icon" => "fas fa-list-check"]
    ],
    "PT" => [
        ["url" => "procurement.php", "name" => "Procurement Team", "icon" => "fas fa-shopping-cart"]
    ]
];

?>
<?php include 'header.php'; ?>
<title>Dashboard</title>

<section id="categories" class="container mx-auto py-16">
  <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Your Categories</h2>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php foreach ($categories[$user_role] as $category) : ?>
      <a href="<?= $category['url'] ?>" class="block bg-white rounded-lg shadow-lg hover:shadow-xl p-6 text-center transition hover:bg-blue-50">
        <i class="<?= $category['icon'] ?> fa-2x mb-4 text-blue-600"></i>
        <h3 class="text-xl font-semibold text-gray-700 mb-2"><?= $category['name'] ?></h3>
      </a>
    <?php endforeach; ?>
  </div>
</section>

<a href="logout.php" class="block mt-6 text-center text-red-600 hover:underline">Logout</a>

<?php include 'footer.php'; ?>
