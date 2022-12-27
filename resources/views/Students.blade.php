<!doctype html>
<html class="h-full bg-gray-100" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    @vite('resources/css/app.css')
</head>

<body class=" h-full">





    <div>
        @include('components.sidebar')
        <div class="flex flex-1 flex-col md:pr-64">
            @include('components.navbar')

            <main class="flex-1">
                <div class="py-6">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                        <h1 class="text-2xl font-semibold text-gray-900">Students</h1>
                    </div>
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                        <!-- Replace with your content -->
                        <div>
                            <div>

                                <form class="flex items-center gap-5">
                                    <label for="simple-search" class="sr-only">Search</label>
                                    <div class="relative w-full">
                                        <div
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 "
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input type="text" id="simple-search"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5   "
                                            placeholder="Search By ID" required>
                                    </div> <label for="simple-search" class="sr-only">Search</label>
                                    <div class="relative w-full">
                                        <div
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 "
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input type="text" id="simple-search"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5   "
                                            placeholder="Search By name" required>
                                    </div> <label for="simple-search" class="sr-only">Search</label>
                                    <div class="relative w-full">
                                        <div
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 "
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input type="text" id="simple-search"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5   "
                                            placeholder="Search By phone" required>
                                    </div>
                                    <button type="submit"
                                        class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                        <span class="sr-only">Search</span>
                                    </button>
                                </form>

                            </div>
                            <div class="p-5 m-5 rounded-xl bg-white">
                                <div class="flex justify-between items-center mb-5">
                                    <h1 class="text-xl font-bold">Students</h1>

                                    <div class="flex gap-5">
                                        <button type="button"
                                            class="inline-flex items-center rounded-xl border border-transparent bg-indigo-600 p-2 text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                            <!-- Heroicon name: outline/plus -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 4.5v15m7.5-7.5h-15" />
                                            </svg>
                                        </button>
                                        <button type="button"
                                            class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                            Download
                                            <!-- Heroicon name: mini/envelope -->
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="mr-3 -ml-1 h-5 w-5">
                                                <path fill-rule="evenodd"
                                                    d="M9.75 6.75h-3a3 3 0 00-3 3v7.5a3 3 0 003 3h7.5a3 3 0 003-3v-7.5a3 3 0 00-3-3h-3V1.5a.75.75 0 00-1.5 0v5.25zm0 0h1.5v5.69l1.72-1.72a.75.75 0 111.06 1.06l-3 3a.75.75 0 01-1.06 0l-3-3a.75.75 0 111.06-1.06l1.72 1.72V6.75z"
                                                    clip-rule="evenodd" />
                                                <path
                                                    d="M7.151 21.75a2.999 2.999 0 002.599 1.5h7.5a3 3 0 003-3v-7.5c0-1.11-.603-2.08-1.5-2.599v7.099a4.5 4.5 0 01-4.5 4.5H7.151z" />
                                            </svg>


                                        </button>
                                    </div>


                                </div>

                                <div class=" relative  sm:rounded-lg">
                                    <table class="w-full text-sm text-left text-gray-500 ">
                                        <thead
                                            class="text-xs text-gray-700 uppercase bg-gray-50  ">
                                            <tr>
                                                <th scope="col" class="p-4">
                                                    <div class="flex items-center">
                                                        <input id="checkbox-all-search" type="checkbox"
                                                            class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 ">
                                                        <label for="checkbox-all-search"
                                                            class="sr-only">checkbox</label>
                                                    </div>
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    ID
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    name
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    Mobile number
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    Address
                                                </th>
                                                <th scope="col" class="py-3 px-6">
Action                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr
                                                class="bg-white border-b   hover:bg-gray-50 ">
                                                <td class="p-4 w-4">
                                                    <div class="flex items-center">
                                                        <input id="checkbox-table-search-1" type="checkbox"
                                                            class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 ">
                                                        <label for="checkbox-table-search-1"
                                                            class="sr-only">checkbox</label>
                                                    </div>
                                                </td>
                                                <th scope="row"
                                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                                   120065465
                                                </th>
                                                <td class="py-4 px-6">
                                                    moahmmed
                                                </td>
                                                <td class="py-4 px-6">
                                                    0911111111
                                                </td>
                                                <td class="py-4 px-6">
                                                   Tripoli
                                                </td>
                                                <td class="py-4 px-6">
                                                    <a href="#"
                                                        class="font-medium text-blue-600  hover:underline">Edit</a>
                                                </td>
                                            </tr>                                            <tr
                                                class="bg-white border-b   hover:bg-gray-50 ">
                                                <td class="p-4 w-4">
                                                    <div class="flex items-center">
                                                        <input id="checkbox-table-search-1" type="checkbox"
                                                            class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 ">
                                                        <label for="checkbox-table-search-1"
                                                            class="sr-only">checkbox</label>
                                                    </div>
                                                </td>
                                                <th scope="row"
                                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                                   120065465
                                                </th>
                                                <td class="py-4 px-6">
                                                    moahmmed
                                                </td>
                                                <td class="py-4 px-6">
                                                    0911111111
                                                </td>
                                                <td class="py-4 px-6">
                                                   Tripoli
                                                </td>
                                                <td class="py-4 px-6">
                                                    <a href="#"
                                                        class="font-medium text-blue-600  hover:underline">Edit</a>
                                                </td>
                                            </tr>                                            <tr
                                                class="bg-white border-b   hover:bg-gray-50 ">
                                                <td class="p-4 w-4">
                                                    <div class="flex items-center">
                                                        <input id="checkbox-table-search-1" type="checkbox"
                                                            class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 ">
                                                        <label for="checkbox-table-search-1"
                                                            class="sr-only">checkbox</label>
                                                    </div>
                                                </td>
                                                <th scope="row"
                                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                                   120065465
                                                </th>
                                                <td class="py-4 px-6">
                                                    moahmmed
                                                </td>
                                                <td class="py-4 px-6">
                                                    0911111111
                                                </td>
                                                <td class="py-4 px-6">
                                                   Tripoli
                                                </td>
                                                <td class="py-4 px-6">
                                                    <a href="#"
                                                        class="font-medium text-blue-600  hover:underline">Edit</a>
                                                </td>
                                            </tr>                                            <tr
                                                class="bg-white border-b   hover:bg-gray-50 ">
                                                <td class="p-4 w-4">
                                                    <div class="flex items-center">
                                                        <input id="checkbox-table-search-1" type="checkbox"
                                                            class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 ">
                                                        <label for="checkbox-table-search-1"
                                                            class="sr-only">checkbox</label>
                                                    </div>
                                                </td>
                                                <th scope="row"
                                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                                   120065465
                                                </th>
                                                <td class="py-4 px-6">
                                                    moahmmed
                                                </td>
                                                <td class="py-4 px-6">
                                                    0911111111
                                                </td>
                                                <td class="py-4 px-6">
                                                   Tripoli
                                                </td>
                                                <td class="py-4 px-6">
                                                    <a href="#"
                                                        class="font-medium text-blue-600  hover:underline">Edit</a>
                                                </td>
                                            </tr>                                            <tr
                                                class="bg-white border-b   hover:bg-gray-50 ">
                                                <td class="p-4 w-4">
                                                    <div class="flex items-center">
                                                        <input id="checkbox-table-search-1" type="checkbox"
                                                            class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 ">
                                                        <label for="checkbox-table-search-1"
                                                            class="sr-only">checkbox</label>
                                                    </div>
                                                </td>
                                                <th scope="row"
                                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                                   120065465
                                                </th>
                                                <td class="py-4 px-6">
                                                    moahmmed
                                                </td>
                                                <td class="py-4 px-6">
                                                    0911111111
                                                </td>
                                                <td class="py-4 px-6">
                                                   Tripoli
                                                </td>
                                                <td class="py-4 px-6">
                                                    <a href="#"
                                                        class="font-medium text-blue-600  hover:underline">Edit</a>
                                                </td>
                                            </tr>                                            <tr
                                                class="bg-white border-b   hover:bg-gray-50 ">
                                                <td class="p-4 w-4">
                                                    <div class="flex items-center">
                                                        <input id="checkbox-table-search-1" type="checkbox"
                                                            class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 ">
                                                        <label for="checkbox-table-search-1"
                                                            class="sr-only">checkbox</label>
                                                    </div>
                                                </td>
                                                <th scope="row"
                                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                                   120065465
                                                </th>
                                                <td class="py-4 px-6">
                                                    moahmmed
                                                </td>
                                                <td class="py-4 px-6">
                                                    0911111111
                                                </td>
                                                <td class="py-4 px-6">
                                                   Tripoli
                                                </td>
                                                <td class="py-4 px-6">
                                                    <a href="#"
                                                        class="font-medium text-blue-600  hover:underline">Edit</a>
                                                </td>
                                            </tr>                                            <tr
                                                class="bg-white border-b   hover:bg-gray-50 ">
                                                <td class="p-4 w-4">
                                                    <div class="flex items-center">
                                                        <input id="checkbox-table-search-1" type="checkbox"
                                                            class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 ">
                                                        <label for="checkbox-table-search-1"
                                                            class="sr-only">checkbox</label>
                                                    </div>
                                                </td>
                                                <th scope="row"
                                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                                   120065465
                                                </th>
                                                <td class="py-4 px-6">
                                                    moahmmed
                                                </td>
                                                <td class="py-4 px-6">
                                                    0911111111
                                                </td>
                                                <td class="py-4 px-6">
                                                   Tripoli
                                                </td>
                                                <td class="py-4 px-6">
                                                    <a href="#"
                                                        class="font-medium text-blue-600  hover:underline">Edit</a>
                                                </td>
                                            </tr>                                            <tr
                                                class="bg-white border-b   hover:bg-gray-50 ">
                                                <td class="p-4 w-4">
                                                    <div class="flex items-center">
                                                        <input id="checkbox-table-search-1" type="checkbox"
                                                            class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 ">
                                                        <label for="checkbox-table-search-1"
                                                            class="sr-only">checkbox</label>
                                                    </div>
                                                </td>
                                                <th scope="row"
                                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                                   120065465
                                                </th>
                                                <td class="py-4 px-6">
                                                    moahmmed
                                                </td>
                                                <td class="py-4 px-6">
                                                    0911111111
                                                </td>
                                                <td class="py-4 px-6">
                                                   Tripoli
                                                </td>
                                                <td class="py-4 px-6">
                                                    <a href="#"
                                                        class="font-medium text-blue-600  hover:underline">Edit</a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <nav class="flex justify-between items-center pt-4" aria-label="Table navigation">
                                        <span class="text-sm font-normal text-gray-500 ">Showing
                                            <span class="font-semibold text-gray-900 ">1-10</span> of
                                            <span
                                                class="font-semibold text-gray-900 ">1000</span></span>
                                        <ul class="inline-flex items-center -space-x-px">
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700    ">
                                                    <span class="sr-only">Previous</span>
                                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700    ">1</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700    ">2</a>
                                            </li>
                                            <li>
                                                <a href="#" aria-current="page"
                                                    class="z-10 py-2 px-3 leading-tight text-blue-600 bg-blue-50 border border-blue-300 hover:bg-blue-100 hover:text-blue-700   ">3</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700    ">...</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700    ">100</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700    ">
                                                    <span class="sr-only">Next</span>
                                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>


                            </div>
                        </div>
                        <!-- /End replace -->
                    </div>
                </div>
            </main>
        </div>
    </div>


</html>
