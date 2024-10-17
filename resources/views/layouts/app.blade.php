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
  <div class="p-4">
    @yield('content')
  </div>
</body>
</html>
