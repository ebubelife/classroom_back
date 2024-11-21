@extends('layouts.main')

@section('content')

<!-- Main Content -->
<main class="flex-1 p-6">

    <!-- top boxes -->
    <div class="w-full grid lg:grid-cols-3 gap-4 pr-4">
        <div class="w-full shadow-lg shadow-blue-700/30 rounded-md p-4">
            <p>All Videos</p>
            <div class="flex">
                <span class="text-2xl font-bold"> {{ $count }}</span> <!-- Example total count -->
                <span class="text-2xl font-bold ml-auto">
                    <img src="/images/youtube-round-svgrepo-com.svg" class="h-8 w-8" alt="" />
                </span>
            </div>
        </div>

        <a href="{{ route('admin.dashboard.videos.add') }}" class="bg-green-500 text-white hover:shadow-md hover:rounded-md md:p-0 p-4 md:rounded-0 rounded-md grid place-content-center md:shadow-0 shadow-md">Add New Video +</a>
    </div>

    <!-- /top boxes -->

    <!-- Videos Section Table -->
 
    <div class="w-full mx-auto shadow-lg rounded-md md:overflow-hidden overflow-scroll mt-8">
        
    @if($videos->isEmpty())
            <p class="text-center mt-8 text-2xl">No videos available.</p>
        @else
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium uppercase w-1/6">
                        Video Title
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium uppercase">
                        URL
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium uppercase">
                        Class
                    </th>

                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium uppercase">
                        Subject
                    </th>
                  
                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium uppercase">
                        Exam
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium uppercase">
                        Created
                    </th>
                  

                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium uppercase">
                        Details
                    </th>
                </tr>
            </thead>
            <tbody>
            @foreach($videos as $video)
                <tr class="bg-blue-100 border border-b border-2 border-zinc-300">
                    <td class="px-6 py-4 text-sm font-medium text-gray-900">
                    {{ $video->title }}
                    </td>
                    <td class="px-6 py-4 text-sm text-blue-700 underline">
                        <a href="{{ asset($video->url) }}" target="_blank">Watch Now</a>
                    </td>

                    <td class="px-6 py-4 text-sm ">
                    {{ \Illuminate\Support\Str::upper($video->class) }}
                    </td>

                    <td class="px-6 py-4 text-sm ">
                    {{ \Illuminate\Support\Str::upper($video->subject) }}
                    </td>
                   

                    <td class="px-6 py-4 text-sm ">
                    {{ \Illuminate\Support\Str::upper($video->exam) }}
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                        2024-03-06
                    </td>
                   

                    <td class="px-6 py-4 text-sm   font-medium">
                    <a href="https://example.com/videos/laravel-basics" class="text-red-500"  target="_blank">Delete</a>
                    <br>
                    <a href="https://example.com/videos/laravel-basics" class="text-blue-500" target="_blank">Edit</a>
                    </td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
    
</main>

@endsection
