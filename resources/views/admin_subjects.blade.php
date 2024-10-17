@extends('layouts.main')

@section('content')


<!-- Main Content -->
<main class="flex-1 p-6">

    <!-- top boxes -->
    <div class="w-full grid lg:grid-cols-3 gap-4 pr-4">
        <div class="w-full shadow-lg shadow-blue-700/30 rounded-md p-4">
            <p>All Subjects</p>
            <div class="flex">
                <span class="text-2xl font-bold">18</span>
                <span class="text-2xl font-bold ml-auto">
                    <img src="/images/chart-line-up-svgrepo-com.svg" class="h-8 w-8" alt="" />
                </span>
            </div>
        </div>
       
       
    </div>

    <!-- /top boxes -->

    <!-- subject section table-->

    <div class="max-w-3xl mx-auto shadow-lg rounded-md overflow-hidden mt-8">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium uppercase">
                        Subject
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium uppercase">
                       Created
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium uppercase">
                        Video Content
                    </th>

                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium uppercase">
                        Text Content
                    </th>

                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium uppercase">
                        Audio Content
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-blue-100">
                    <td class="px-6 py-4 text-sm font-medium text-gray-900">
                        English
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                        2024-03-06
                    </td>

                    <td class="px-6 py-4 text-sm text-gray-900">
                        <p class="text-sm"> 322 </p>
                       
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                        <p class="text-sm"> 32 </p>
                       
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                        <p class="text-sm"> 32 </p>
                       
                    </td>
                    
                </tr>
                <tr class="bg-gray-100">
                    <td class="px-6 py-4 text-sm font-medium text-gray-900">
                        Mathematics
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                    2024-03-06
                    </td>

                    <td class="px-6 py-4 text-sm text-gray-900">
                   1078
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                   52
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                   52
                    </td>
                </tr>
                <tr class="bg-green-100">
                    <td class="px-6 py-4 text-sm font-medium text-gray-900">
                        C.R.K
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                    2024-03-06
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                    1006
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                    72
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                    72
                    </td>
                </tr>
                <tr class="bg-red-100">
                    <td class="px-6 py-4 text-sm font-medium text-gray-900">
                        Biology
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                    2024-03-06
                    </td>

                    <td class="px-6 py-4 text-sm text-gray-900">
                   870
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                   99
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                   99
                    </td>
                </tr>
                <tr class="bg-yellow-100">
                    <td class="px-6 py-4 text-sm font-medium text-gray-900">
                        Physics
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                    2024-03-06
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                    987
                    </td>

                    <td class="px-6 py-4 text-sm text-gray-900">
                    43
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                    43
                    </td>
                </tr>
                <tr class="bg-blue-200">
                    <td class="px-6 py-4 text-sm font-medium text-gray-900">
                        Chemistry
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                    2024-03-06
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                   1000
                    </td>

                    <td class="px-6 py-4 text-sm text-gray-900">
                   1000
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                   71
                    </td>
                </tr>
                <tr class="bg-gray-50">
                    <td class="px-6 py-4 text-sm font-medium text-gray-900">
                        Government
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                    2024-03-06
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                    290
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                    290
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                    290
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
   
</main>

@endsection
