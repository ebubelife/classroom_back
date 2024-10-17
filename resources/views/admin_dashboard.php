<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles for the slide-in menu */
        .slide-in-menu {
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }
        .slide-in-menu.open {
            transform: translateX(0);
        }
    </style>
</head>
<body class="bg-white h-screen flex overflow-hidden">

    <!-- Sidebar (Slide-in Menu) -->
    <div id="sidebar" class="slide-in-menu fixed inset-y-0 left-0 w-64 bg-blue-600 text-white p-4 flex flex-col z-30">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-bold">Admin Menu</h1>
            <button onclick="toggleMenu()" class="lg:hidden text-white focus:outline-none">
                ✖️
            </button>
        </div>
        <nav class="flex-1">
            <a href="#" class="block py-2 px-4 rounded hover:bg-blue-700">Dashboard</a>
            <a href="#" class="block py-2 px-4 rounded hover:bg-blue-700">Users</a>
            <a href="#" class="block py-2 px-4 rounded hover:bg-blue-700">Reports</a>
            <a href="#" class="block py-2 px-4 rounded hover:bg-blue-700">Settings</a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col lg:pl-64 transition-all">
        <!-- Header -->
        <header class="flex items-center justify-between p-4 bg-gray-100 shadow-lg">
            <button onclick="toggleMenu()" class="text-blue-600 lg:hidden focus:outline-none">
                ☰
            </button>
            <h1 class="text-xl font-bold text-blue-600">Admin Dashboard</h1>
        </header>

        <!-- Main Section -->
        <main class="flex-1 p-6 overflow-auto">
            <h2 class="text-2xl font-bold mb-4">Welcome to the Admin Panel</h2>
            <p>This is the main content area. Add your charts, tables, and other content here.</p>
        </main>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        
        function toggleMenu() {
            sidebar.classList.toggle('open');
        }
    </script>
</body>
</html>
