<?php
session_start();
session_destroy();
?>
<?php include 'header.php'; ?>
<link href="style.css" rel="stylesheet">
<title>Logout</title>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="flex items-center justify-center w-full h-screen">
        <div class="logout-container w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-lg text-center">
            <h2 class="text-2xl font-bold text-gray-800">You have been logged out</h2>
            <p class="text-gray-600">Redirecting to login page in 10 seconds...</p>
        </div>
    </div>

    <script>
    setTimeout(function () {
        window.location.href = 'login.php';
    }, 10000);
    </script>
</body> 
<?php include 'footer.php'; ?>