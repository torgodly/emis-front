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
                        <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
                    </div>
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                        <!-- Replace with your content -->
                        <div>
                            <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
                                <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6 ">
                                    <dt class="truncate text-sm font-medium text-gray-500 " >Total 
                                        Students</dt>
                                    <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900 ">
                                        71,897</dd>
                                </div>

                                <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6 ">
                                    <dt class="truncate text-sm font-medium text-gray-500 ">Total
                                        Classes</dt>
                                    <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900 ">
                                        50</dd>
                                </div>

                                <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6 ">
                                    <dt class="truncate text-sm font-medium text-gray-500 ">Total
                                        Lessons</dt>
                                    <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900 ">
                                        30</dd>
                                </div>
                            </dl>
                        </div>
                        <div>
                            <div class="mt-5 md:flex gap-5">

                                <a href="#"
                                    class="block md:w-1/2  p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 ">
                                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 ">
                                        Number of Students</h5>
                                    <div id="chart">
                                        <apexchart type="bar" height="350" :options="chartOptions"
                                            :series="series"></apexchart>
                                    </div>
                                </a> <a href="#"
                                    class="block md:w-1/2  p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 ">
                                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 ">
                                        Overview</h5>
                                    <div id="chart-line">
                                        <apexchart type="bar" height="350" :options="chartOptions"
                                            :series="series"></apexchart>
                                    </div>
                                </a>

                            </div>
                            <div class="mt-5 md:flex  gap-5">

                                <a href="#"
                                    class="block md:w-1/2  p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 ">
                                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 ">
                                        Star Students</h5>

                                    <div class="overflow-x-auto relative">
                                        <table class="w-full text-sm text-left text-gray-500 ">
                                            <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                                                <tr>
                                                    <th scope="col" class="py-3 px-6">
                                                        ID
                                                    </th>
                                                    <th scope="col" class="py-3 px-6">
                                                        mark
                                                    </th>
                                                    <th scope="col" class="py-3 px-6">
                                                        Percentage
                                                    </th>
                                                    <th scope="col" class="py-3 px-6">
                                                        Year
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="bg-white border-b ">
                                                    <th scope="row"
                                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                                        John Smith
                                                    </th>
                                                    <td class="py-4 px-6">
                                                        1185
                                                    </td>
                                                    <td class="py-4 px-6">
                                                        98%
                                                    </td>
                                                    <td class="py-4 px-6">
                                                        2019 </td>
                                                </tr>
                                                <tr class="bg-white border-b ">
                                                    <th scope="row"
                                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                                        mohammed
                                                    </th>
                                                    <td class="py-4 px-6">
                                                        1511
                                                    </td>
                                                    <td class="py-4 px-6">
                                                        90%
                                                    </td>
                                                    <td class="py-4 px-6">
                                                        2020
                                                    </td>
                                                </tr>
                                                <tr class="bg-white ">
                                                    <th scope="row"
                                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                                        khaled
                                                    </th>
                                                    <td class="py-4 px-6">
                                                        1000
                                                    </td>
                                                    <td class="py-4 px-6">
                                                        80%
                                                    </td>
                                                    <td class="py-4 px-6">
                                                        2022
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>



                                </a> <a href="#"
                                    class="block md:w-1/2  p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 ">
                                    <h5 class="mb-3 text-xl font-bold tracking-tight text-gray-900 ">
                                        Activity</h5>
                                    <div class="flex justify-between mb-5 items-center">
                                        <div class="flex gap-3">
                                            <div class="p-2 bg-blue-200 w-fit rounded-xl">
                                                <img src="{{ asset('images/award-icon-01.svg') }}" alt=""
                                                    srcset="">
                                            </div>
                                            <div>
                                                <h1 class="font-bold text-sm">Participated in "Carrom"</h1>
                                                <h1 class=" text-xs text-gray-500">Justin Lee participated in "Carrom"
                                                </h1>
                                            </div>
                                        </div>
                                        <div>
                                            <span
                                                class="inline-flex items-center rounded-full bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800">2
                                                hours ago</span>
                                        </div>
                                    </div>
                                    <div class="flex justify-between mb-5 items-center">
                                        <div class="flex gap-3">
                                            <div class="p-2 bg-blue-200 w-fit rounded-xl">
                                                <img src="{{ asset('images/award-icon-02.svg') }}" alt=""
                                                    srcset="">
                                            </div>
                                            <div>
                                                <h1 class="font-bold text-sm">Internation conference in "St.John
                                                    School"
                                                </h1>
                                                <h1 class=" text-xs text-gray-500">Justin Leeattended internation
                                                    conference in "St.John School"

                                                </h1>
                                            </div>
                                        </div>
                                        <div>
                                            <span
                                                class="inline-flex items-center rounded-full bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800">2
                                                weeks ago</span>

                                        </div>
                                    </div>
                                    <div class="flex justify-between mb-5 items-center">
                                        <div class="flex gap-3">
                                            <div class="p-2 bg-blue-200 w-fit rounded-xl">
                                                <img src="{{ asset('images/award-icon-03.svg') }}" alt=""
                                                    srcset="">
                                            </div>
                                            <div>
                                                <h1 class="font-bold text-sm">Won 1st place in "Chess"
                                                </h1>
                                                <h1 class=" text-xs text-gray-500">John Doe won 1st place in "Chess"

                                                </h1>
                                            </div>
                                        </div>
                                        <div>
                                            <span
                                                class="inline-flex items-center rounded-full bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800">3
                                                days ago</span>

                                        </div>
                                    </div>
                                    <div class="flex justify-between mb-5 items-center">
                                        <div class="flex gap-3">
                                            <div class="p-2 bg-blue-200 w-fit rounded-xl">
                                                <img src="{{ asset('images/award-icon-01.svg') }}" alt=""
                                                    srcset="">
                                            </div>
                                            <div>
                                                <h1 class="font-bold text-sm">1st place in "Chess”</h1>
                                                <h1 class=" text-xs text-gray-500">John Doe won 1st place in "Chess"
                                                </h1>
                                            </div>
                                        </div>
                                        <div>
                                            <span
                                                class="inline-flex items-center rounded-full bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800">1
                                                day ago</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <!-- /End replace -->
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script>
        var optionsBar = {
            chart: {
                type: 'bar',
                height: 350,
                width: '100%',
                stacked: false,
                toolbar: {
                    show: false
                },
            },
            dataLabels: {
                enabled: false
            },
            plotOptions: {
                bar: {
                    columnWidth: '55%',
                    endingShape: 'rounded'
                },
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            series: [{
                name: "Boys",
                color: '#70C4CF',
                data: [420, 532, 516, 575, 519, 517, 454, 392, 262, 383, 446, 551],
            }, {
                name: "Girls",
                color: '#3D5EE1',
                data: [336, 612, 344, 647, 345, 563, 256, 344, 323, 300, 455, 456],
            }],
            labels: [2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020],
            xaxis: {
                labels: {
                    show: false
                },
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                },
            },
            yaxis: {
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    style: {
                        colors: '#777'
                    }
                }
            },
            title: {
                text: '',
                align: 'left',
                style: {
                    fontSize: '18px'
                }
            }

        }

        var chartBar = new ApexCharts(document.querySelector('#chart'), optionsBar);
        chartBar.render();

        var optionsBar = {
            chart: {
                type: 'radar',
                height: 350,
                width: '100%',
                stacked: false,
                toolbar: {
                    show: false
                },
            },
            dataLabels: {
                enabled: false
            },
            plotOptions: {
                bar: {
                    columnWidth: '55%',
                    endingShape: 'rounded'
                },
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            series: [{
                name: "Boys",
                color: '#70C4CF',
                data: [420, 532, 516, 575, 519, 517, 454, 392, 262, 383, 446, 551],
            }, {
                name: "Girls",
                color: '#3D5EE1',
                data: [336, 612, 344, 647, 345, 563, 256, 344, 323, 300, 455, 456],
            }],
            labels: [2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020],
            xaxis: {
                labels: {
                    show: false
                },
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                },
            },
            yaxis: {
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    style: {
                        colors: '#777'
                    }
                }
            },
            title: {
                text: '',
                align: 'left',
                style: {
                    fontSize: '18px'
                }
            }

        }

        var chartBar = new ApexCharts(document.querySelector('#chart-line'), optionsBar);
        chartBar.render();
    </script>

</html>
