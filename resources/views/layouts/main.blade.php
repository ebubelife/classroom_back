<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
 
  @vite('resources/css/main.css')
  @vite('resources/js/main.js')
</head>
<body>
 
  
  <!-- Main content -->
  <div class="p1">




   <!-- Sidebar (Slide-in Menu) -->
   <div id="sidebar" class="slide-in-menu fixed inset-y-0 left-0 w-64 bg-blue-900 text-white p-4 flex flex-col z-30">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-bold">Admin - Classroom</h1>
            <button onclick="toggleMenu()" class="text-white text-2xl  focus:outline-none">
                <span class="text-white">✖️</span> 
            </button>
        </div>
        <nav class="flex-1 mt-8">
    <!-- Classes Item with Sub-menu -->
    <div class="mb-4">
        <button id="classes-toggle" class="block w-full text-left py-2 px-4 rounded hover:bg-blue-700 focus:outline-none flex items-center justify-between">
            Classes
            <span id="toggle-icon" class="ml-2 transform transition-transform">&#9660;</span> <!-- Down arrow icon -->
        </button>
        <div id="classes-submenu" class="ml-4 max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
              <a href="{{ route('admin.dashboard.videos') }}" class="block py-2 px-4 rounded hover:bg-blue-600">Videos</a>
            <a href="#" class="block py-2 px-4 rounded hover:bg-blue-600">Audio</a>
            <a href="#" class="block py-2 px-4 rounded hover:bg-blue-600">Docs</a>
        </div>
    </div>

    <a href="{{ route('admin.dashboard.users.all') }}" class="block py-2 px-4 rounded hover:bg-blue-700">Users</a>
    
    <!-- Other Main Items -->
    <a href="#" class="block py-2 px-4 rounded hover:bg-blue-700">Syllabuses</a>


    <a href="#" class="block py-2 px-4 rounded hover:bg-blue-700">News Updates</a>
</nav>


    </div>

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col ">
        <!-- Header with Menu Toggle Button -->
        <header class="p-4 bg-white shadow flex items-center w-screen">
            <button onclick="toggleMenu()" class="text-blue-600 focus:outline-none text-2xl ">
                ☰
            </button>
            <h1 class="text-xl font-bold ml-4">Classroom Reality Admin</h1>
        </header>

  


   


    @yield('content')
  </div>
</body>
</html>
