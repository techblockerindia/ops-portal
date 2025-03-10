<?php include '..//header.php'; ?>
<body class="bg-gray-100 font-sans">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <!-- <aside class="w-64 bg-gradient-to-b from-gray-900 to-gray-700 text-white p-5 shadow-lg">
            <h2 class="text-2xl font-bold text-center mb-6">Admin Panel</h2>
            <ul class="space-y-2">
                <li><a href="#" class="block px-4 py-3 bg-gray-800 hover:bg-gray-600 rounded transition">Dashboard</a></li>
                <li><a href="#" class="block px-4 py-3 hover:bg-gray-600 rounded transition">Users</a></li>
                <li><a href="#" class="block px-4 py-3 hover:bg-gray-600 rounded transition">Settings</a></li>
            </ul>
        </aside> -->
 
        <!-- Main Content -->
        <main class="flex-1 p-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-semibold text-gray-700">Dashboard</h1>
                <button class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600 transition">Add New</button>
            </div>
            
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="bg-white p-6 rounded-lg shadow-lg flex items-center">
                    <div class="bg-blue-500 text-white p-3 rounded-full">
                        📊
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-bold">Total Users</h3>
                        <p class="text-gray-500 text-sm">1</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg flex items-center">
                    <div class="bg-green-500 text-white p-3 rounded-full">
                        💰
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-bold">Revenue</h3>
                        <p class="text-gray-500 text-sm">$45</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg flex items-center">
                    <div class="bg-red-500 text-white p-3 rounded-full">
                        🚀
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-bold">New Users</h3>
                        <p class="text-gray-500 text-sm">1</p>
                    </div>
                </div>
            </div>
            
            <!-- Form Container -->
            <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                <h2 class="text-xl font-bold mb-4">User Registration</h2>
                <form action="#" method="POST" class="space-y-4">
                    <div>
                        <label class="block text-gray-700">Name</label>
                        <input type="text" class="w-full p-3 border border-gray-300 rounded" placeholder="Enter name">
                    </div>
                    <div>
                        <label class="block text-gray-700">Email</label>
                        <input type="email" class="w-full p-3 border border-gray-300 rounded" placeholder="Enter email">
                    </div>
                    <div>
                        <label class="block text-gray-700">Team</label>
                        <input type="text" class="w-full p-3 border border-gray-300 rounded" placeholder="Enter team name">
                    </div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600 transition">Register</button>
                </form>
            </div>
            
            <!-- Table -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <table class="w-full border-collapse border border-gray-300 rounded-lg overflow-hidden">
                    <thead>
                        <tr class="bg-blue-500 text-white">
                            <th class="border p-3 text-left">ID</th>
                            <th class="border p-3 text-left">Name</th>
                            <th class="border p-3 text-left">Email</th>
                            <th class="border p-3 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-100 transition">
                            <td class="border p-3">1</td>
                            <td class="border p-3">John Doe</td>
                            <td class="border p-3">john@example.com</td>
                            <td class="border p-3">
                                <button class="text-white bg-green-500 px-3 py-1 rounded hover:bg-green-600 transition">Edit</button>
                                <button class="text-white bg-red-500 px-3 py-1 rounded hover:bg-red-600 transition ml-2">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>
<?php include 'footer.php'; ?>