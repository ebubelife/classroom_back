<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <style>
    /* Custom Style for Sliding Menu */
    #sidebar {
      transition: transform 0.3s ease;
      transform: translateX(-100%);
    }
    #sidebar.open {
      transform: translateX(0);
    }
  </style>
</head>
<body class="flex h-screen overflow-hidden bg-gray-100">
  <!-- Sidebar -->
  <div id="sidebar" class="fixed inset-y-0 left-0 w-64 bg-blue-900 text-white flex flex-col z-10">
    <div class="p-4 text-lg font-bold text-center">Admin Menu</div>
    <nav class="flex-1 p-4">
      <a href="#" class="block py-2.5 px-4 rounded hover:bg-blue-700">Dashboard</a>
      <a href="#" class="block py-2.5 px-4 rounded hover:bg-blue-700">Reports</a>
      <a href="#" class="block py-2.5 px-4 rounded hover:bg-blue-700">Users</a>
      <a href="#" class="block py-2.5 px-4 rounded hover:bg-blue-700">Settings</a>
    </nav>
  </div>
  
  <!-- Content -->
  <div class="flex flex-1 flex-col w-full overflow-y-auto">
    <!-- Header -->
    <header class="flex items-center justify-between p-4 bg-white shadow">
      <button onclick="toggleSidebar()" class="text-blue-900 focus:outline-none lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
      </button>
      <h1 class="text-xl font-bold text-blue-900">Admin Dashboard</h1>
    </header>

    <!-- Main Content -->
    <main class="p-6 space-y-6">
      <!-- Chart Section -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white p-4 rounded-lg shadow">
          <h2 class="mb-2 text-lg font-bold">Sales Overview</h2>
          <!-- Chart Placeholder -->
          <div class="h-40 bg-blue-100 rounded-md"></div>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
          <h2 class="mb-2 text-lg font-bold">User Growth</h2>
          <!-- Chart Placeholder -->
          <div class="h-40 bg-green-100 rounded-md"></div>
        </div>
      </div>
      
      <!-- Table Section -->
      <div class="bg-white p-4 rounded-lg shadow">
        <h2 class="mb-4 text-lg font-bold">Recent Activities</h2>
        <table class="w-full border">
          <thead>
            <tr>
              <th class="px-4 py-2 border">User</th>
              <th class="px-4 py-2 border">Action</th>
              <th class="px-4 py-2 border">Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="px-4 py-2 border">John Doe</td>
              <td class="px-4 py-2 border">Logged In</td>
              <td class="px-4 py-2 border">Oct 14, 2024</td>
            </tr>
            <tr>
              <td class="px-4 py-2 border">Jane Smith</td>
              <td class="px-4 py-2 border">Updated Profile</td>
              <td class="px-4 py-2 border">Oct 13, 2024</td>
            </tr>
            <!-- Add more rows as needed -->
          </tbody>
        </table>
      </div>
    </main>
  </div>

  <script>
    // JavaScript to toggle sidebar
    function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      sidebar.classList.toggle('open');
    }
  </script>
</body>
</html>
