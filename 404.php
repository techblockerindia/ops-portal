<?php
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unauthorized Access</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="text-center p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-6xl font-bold text-red-600">404</h1>
        <h2 class="text-2xl font-semibold text-gray-800 mt-4">You Are Not Authorized</h2>
        <p class="text-gray-600 mt-2">Sorry, you don't have permission to access this page.</p>
        <a href="/login.php" class="mt-4 inline-block bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Go Home</a>
    </div>
</body>
</html>
