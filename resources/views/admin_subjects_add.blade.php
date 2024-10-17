@extends('layouts.main')

@section('content')


<!-- Main Content -->
<main class="flex-1 p-6">

 
    <!-- /top boxes -->

    <!-- subject section table-->

    <p class="md:text-2xl text-xl font-medium text-center">Add New Subject </p>

    <div class="max-w-3xl h-48 mx-auto shadow-lg md:mt-0 mt-4 rounded-md md:overflow-hidden overflow-scroll mt-8 p-4">
    <form action="{{ route('admin.dashboard.subjects.add') }}" method="POST">
        @csrf
        <div class="mb-4 mt-4">
            <label for="subject" class="block text-sm font-medium text-blue-700 mb-2 ">Subject Name</label>
            <input type="text" name="subject" id="subject" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="Enter subject name" required>
        </div>
        <div class="flex justify-end">
            <button type="submit" class="px-6 py-3 bg-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700">Add Subject</button>
        </div>
    </form>

       

    </div>
    
   
</main>

@endsection
