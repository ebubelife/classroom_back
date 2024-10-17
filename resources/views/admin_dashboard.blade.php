@extends('layouts.main')

@section('content')


<!-- Main Content -->
<main class="flex-1 p-6">

    <!-- top boxes -->
    <div class="w-full grid lg:grid-cols-3 gap-4 pr-4">
        <div class="w-full shadow-lg shadow-blue-700/30 rounded-md p-4">
            <p>New Users Today</p>
            <div class="flex">
                <span class="text-2xl font-bold">100</span>
                <span class="text-2xl font-bold ml-auto">
                    <img src="/images/chart-line-up-svgrepo-com.svg" class="h-8 w-8" alt="" />
                </span>
            </div>
        </div>
        <div class="w-full p-4 shadow-lg shadow-blue-700/30 rounded-md">
            <p>Premium Users</p>
            <div class="flex">
                <span class="text-2xl font-bold">100</span>
                <span class="text-2xl font-bold ml-auto">
                    <img src="/images/chart-line-up-svgrepo-com.svg" class="h-8 w-8" alt="" />
                </span>
            </div>
        </div>
        <div class="w-full p-4 shadow-lg shadow-blue-700/30 rounded-md">
            <p>Active Classes</p>
            <p class="text-sm text-blue-600">Courses being watched by at least one user</p>
            <div class="flex">
                <span class="text-2xl font-bold">100</span>
                <span class="text-2xl font-bold ml-auto">
                    <img src="/images/chart-line-up-svgrepo-com.svg" class="h-8 w-8" alt="" />
                </span>
            </div>
        </div>
    </div>

    <!-- /top boxes -->

    <!-- second section grid-->
    <div class="grid lg:grid-cols-3 w-full mt-6 gap-6">
        <!-- Popular Content -->
        <div class="h-96 w-full border border-1 border-zinc-400 rounded-md p-2 overflow-y-scroll">
            <p class="font-medium">Popular Content</p>
            <p class="text-sm text-blue-500">Content with most number of opens</p>

            <!-- Example Content -->
            @for ($i = 0; $i < 5; $i++)
                <div class="w-full border-b border-1 flex border-blue-300 p-1 mt-4">
                    <img src="/images/man-doctor-protective-suit-mask-working-with-solutions-white_140725-93667.jpg" class="h-14 w-14 rounded-full" alt="" />
                    <div class="mt-2">
                        <p class="text-sm">Taxonomy & Classification of Plants</p>
                        <p class="text-xs text-blue-500">Biology - SS1 - First Term</p>
                        <p class="text-xs text-brown-500">Viewed By: 369</p>
                    </div>
                </div>
            @endfor
        </div>

        <!-- Active Users -->
        <div class="h-96 w-full border border-1 border-zinc-400 rounded-md p-2 overflow-y-scroll">
            <p class="font-medium">Active Users</p>
            <p class="text-sm text-blue-500">Users who have viewed the most number of videos</p>
        </div>

        <!-- Premium Users -->
        <div class="h-96 w-full border border-1 border-zinc-400 rounded-md p-2 overflow-y-scroll">
            <p class="font-medium">Premium Users</p>
            <p class="text-sm text-blue-500">Premium subscribers</p>
        </div>
    </div>
</main>

@endsection
