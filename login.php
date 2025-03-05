<?php include 'header.php'; ?>
<link href="style.css" rel="stylesheet">
<title>Login</title>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="flex items-center justify-center w-full h-screen">
        <div class="login-container w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-lg text-center">
            <h2 class="text-2xl font-bold text-gray-800">Login</h2>
            <button id="google-login" class="w-full py-2 mt-4 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700">Login with Google</button>
        </div>
    </div>

    <script>
    document.getElementById('google-login').addEventListener('click', function () {
        window.location.href = 'google-login.php';
    });
    </script>
</body>
<?php include 'footer.php'; ?>