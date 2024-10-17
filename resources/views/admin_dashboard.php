<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Slide-in Menu</title>
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
<body class="h-screen w-screen bg-gray-100 flex overflow-hidden">

    <!-- Sidebar (Slide-in Menu) -->
    <div id="sidebar" class="slide-in-menu fixed inset-y-0 left-0 w-64 bg-blue-600 text-white p-4 flex flex-col z-30">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-bold">Menu</h1>
            <button onclick="toggleMenu()" class="lg:hidden text-white focus:outline-none">
                ✖️
            </button>
        </div>
        <nav class="flex-1">
            <a href="#" class="block py-2 px-4 rounded hover:bg-blue-700">Home</a>
            <a href="#" class="block py-2 px-4 rounded hover:bg-blue-700">About</a>
            <a href="#" class="block py-2 px-4 rounded hover:bg-blue-700">Services</a>
            <a href="#" class="block py-2 px-4 rounded hover:bg-blue-700">Contact</a>
        </nav>
    </div>

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col">
        <!-- Header with Menu Toggle Button -->
        <header class="p-4 bg-white shadow flex items-center">
            <button onclick="toggleMenu()" class="text-blue-600 focus:outline-none lg:hidden">
                ☰
            </button>
            <h1 class="text-xl font-bold ml-4">Main Content</h1>
        </header>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <h2 class="text-2xl font-bold">Welcome to the Main Area</h2>
            <p>This is where the main content goes. You can add additional content, such as articles or other elements here.</p>
        </main>
    </div>

    <script>
        // JavaScript to toggle the slide-in menu
        const sidebar = document.getElementById('sidebar');
        
        function toggleMenu() {
            sidebar.classList.toggle('open');
        }
    </script>
</body>
</html>
