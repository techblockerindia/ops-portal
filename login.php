<?php include 'header.php'; ?>
<link href="style.css" rel="stylesheet">
<title>Login</title>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-center text-gray-800">Login</h2>

        <form action="#" method="POST">
            <input type="email" name="email" placeholder="Email" required class="w-full px-4 py-2 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
            <input type="password" name="password" placeholder="Password" required class="w-full px-4 py-2 mt-4 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
            <button type="submit" class="w-full py-2 mt-4 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700">Login</button>
        </form>

        <button id="google-login">Login with Google</button>

        <p class="text-sm text-center text-gray-600">Don't have an account? <a href="signup.php" class="text-indigo-600 hover:underline">Sign Up</a></p>
    </div>

    <script>
    document.getElementById('google-login').addEventListener('click', function () {
        window.location.href = 'google-login.php';
    });
</script>
</body>
<?php include 'footer.php'; ?>