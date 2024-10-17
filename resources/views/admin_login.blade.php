@extends('layouts.app')

@section('content')
<body class="flex items-center justify-center min-h-screen bg-gray-100">
  <div class="w-full max-w-md p-8 space-y-3 rounded-lg shadow-md bg-white">
  <header class="p-4 bg-blue-600 text-white">
    <h1 class="text-3xl font-bold underline">
      Admin Panel Header
    </h1>
  </header>
    <h1 class="text-2xl font-bold text-center">Admin Login</h1>
    <form action="{{ route('admin.login_admin_user') }}" method="POST">
      @csrf
      <div class="mb-4">
        <label class="block mb-2 text-sm font-medium text-gray-600">Username</label>
        <input type="text" name="username" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
      </div>
      <div class="mb-4">
        <label class="block mb-2 text-sm font-medium text-gray-600">Password</label>
        <input type="password" name="password" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
      </div>
      <button type="submit" class="w-full px-4 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700">Login</button>
    </form>
  </div>
</body>
@endsection