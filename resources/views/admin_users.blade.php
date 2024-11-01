@extends('layouts.main')

@section('content')

<!-- Main Content -->
<main class="flex-1 p-6">

    <!-- top boxes -->
    <div class="w-full grid lg:grid-cols-3 gap-4 pr-4">
        <div class="w-full shadow-lg shadow-blue-700/30 rounded-md p-4">
            <p>All Users</p>
            <div class="flex">
                <span class="text-2xl font-bold"> {{ $count }}</span> <!-- Example total count -->
                <span class="text-2xl font-bold ml-auto">
                    <img src="/images/youtube-round-svgrepo-com.svg" class="h-8 w-8" alt="" />
                </span>
            </div>
        </div>

      
    </div>

    <!-- /top boxes -->

    <!-- Videos Section Table -->
 
    <div class="w-full mx-auto shadow-lg rounded-md md:overflow-hidden overflow-scroll mt-8">
        
    @if($users->isEmpty())
            <p class="text-center mt-8 text-2xl">No users found.</p>
        @else
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium uppercase w-1/6">
                        NAME
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium uppercase">
                        EMAIL
                    </th>
                  
                  
                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium uppercase">
                        PLAN
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium uppercase">
                        CREATED
                    </th>
                  
                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium uppercase">
                        EMAIL_VERIFIED
                    </th>
                  

                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium uppercase">
                        ACTIONS
                    </th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr class="bg-blue-100 border border-b border-2 border-zinc-300">
                    <td class="px-6 py-4 text-sm font-medium text-gray-900">
                    {{  \Illuminate\Support\Str::upper($user->name) }}
                    </td>

                    <td class="px-6 py-4 text-sm font-medium text-gray-900">
                    {{ $user->email }}
                    </td>
                  
                   

                    <td class="px-6 py-4 text-sm ">
                    {{ \Illuminate\Support\Str::upper($user->plan) }}
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                        {{ $user->created_at->format('d-m-Y H:i:s') }}
                    </td>

                    <td class="px-6 py-4 text-sm text-gray-900">

                    @if($user->email_verified == 1)
                    <span class="text-green-500">Verified</span>
                    @else
                    <span class="text-red-500">Not Verified</span>
                    @endif
                   
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
