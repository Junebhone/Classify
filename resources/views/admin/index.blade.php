<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>
    <style>
        @import url(https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css);
    </style>

    <div class="flex items-center justify-center px-5 py-5">
        <div class="w-full">
            <div class="-mx-2 flex-wrap md:flex">
                <div class="w-full md:w-1/2 px-2">
                    <div class="rounded-lg shadow-sm mb-4">
                        <div class="rounded-lg shadow-lg md:shadow-xl relative overflow-hidden">
                            <div class="px-3 pt-8 pb-10 text-center relative z-10">
                                <h4 class="text-sm uppercase text-gray-500 leading-tight">Users</h4>
                                <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">{{ count($user) }}
                                </h3>
                            </div>
                            <div class="absolute bottom-0 inset-x-0">
                                <canvas id="chart1" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-2">
                    <div class="rounded-lg shadow-sm mb-4">
                        <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                            <div class="px-3 pt-8 pb-10 text-center relative z-10">
                                <h4 class="text-sm uppercase text-gray-500 leading-tight">Listings</h4>
                                <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">{{ count($listings)
                                    }}</h3>

                            </div>
                            <div class="absolute bottom-0 inset-x-0">
                                <canvas id="chart2" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-2">
                    <div class="rounded-lg shadow-sm mb-4">
                        <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                            <div class="px-3 pt-8 pb-10 text-center relative z-10">
                                <h4 class="text-sm uppercase text-gray-500 leading-tight">Categories</h4>
                                <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">{{
                                    count($categories) }}</h3>
                            </div>
                            <div class="absolute bottom-0 inset-x-0">
                                <canvas id="chart3" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-2">
                    <div class="rounded-lg shadow-sm mb-4">
                        <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                            <div class="px-3 pt-8 pb-10 text-center relative z-10">
                                <h4 class="text-sm uppercase text-gray-500 leading-tight">SubCategories</h4>
                                <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">{{
                                    count($sub_categories) }}</h3>
                            </div>
                            <div class="absolute bottom-0 inset-x-0">
                                <canvas id="chart4" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-2">
                    <div class="rounded-lg shadow-sm mb-4">
                        <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                            <div class="px-3 pt-8 pb-10 text-center relative z-10">
                                <h4 class="text-sm uppercase text-gray-500 leading-tight">ChildCategories</h4>
                                <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">{{
                                    count($child_categories) }}</h3>
                            </div>
                            <div class="absolute bottom-0 inset-x-0">
                                <canvas id="chart5" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-2">
                    <div class="rounded-lg shadow-sm mb-4">
                        <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                            <div class="px-3 pt-8 pb-10 text-center relative z-10">
                                <h4 class="text-sm uppercase text-gray-500 leading-tight">Countries</h4>
                                <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">{{ count($countries)
                                    }}
                                </h3>
                            </div>
                            <div class="absolute bottom-0 inset-x-0">
                                <canvas id="chart6" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-2">
                    <div class="rounded-lg shadow-sm mb-4">
                        <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                            <div class="px-3 pt-8 pb-10 text-center relative z-10">
                                <h4 class="text-sm uppercase text-gray-500 leading-tight">States</h4>
                                <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">{{ count($states) }}
                                </h3>
                            </div>
                            <div class="absolute bottom-0 inset-x-0">
                                <canvas id="chart7" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-2">
                    <div class="rounded-lg shadow-sm mb-4">
                        <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                            <div class="px-3 pt-8 pb-10 text-center relative z-10">
                                <h4 class="text-sm uppercase text-gray-500 leading-tight">Cities</h4>
                                <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">{{ count($cities) }}
                                </h3>
                            </div>
                            <div class="absolute bottom-0 inset-x-0">
                                <canvas id="chart8" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script>
        const chartOptions = {
        maintainAspectRatio: false,
        legend: {
            display: false,
        },
        tooltips: {
            enabled: false,
        },
        elements: {
            point: {
                radius: 0
            },
        },
        scales: {
            xAxes: [{
                gridLines: false,
                scaleLabel: false,
                ticks: {
                    display: false
                }
            }],
            yAxes: [{
                gridLines: false,
                scaleLabel: false,
                ticks: {
                    display: false,
                    suggestedMin: 0,
                    suggestedMax: 10
                }
            }]
        }
    };
    //
    var ctx = document.getElementById('chart1').getContext('2d');
    var chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [1, 2, 1, 3, 5, 4, 7],
            datasets: [
                {
                    backgroundColor: "rgba(101, 116, 205, 0.1)",
                    borderColor: "rgba(101, 116, 205, 0.8)",
                    borderWidth: 2,
                    data: [1, 2, 1, 3, 5, 4, 7],
                },
            ],
        },
        options: chartOptions
    });
    //
    var ctx = document.getElementById('chart2').getContext('2d');
    var chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [2, 3, 2, 9, 7, 7, 4],
            datasets: [
                {
                    backgroundColor: "rgba(246, 109, 155, 0.1)",
                    borderColor: "rgba(246, 109, 155, 0.8)",
                    borderWidth: 2,
                    data: [2, 3, 2, 3, 7, 7, 4],
                },
            ],
        },
        options: chartOptions
    });
    //
    var ctx = document.getElementById('chart3').getContext('2d');
    var chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [2, 5, 1, 3, 2, 6, 7],
            datasets: [
                {
                    backgroundColor: "rgba(246, 153, 63, 0.1)",
                    borderColor: "rgba(246, 153, 63, 0.8)",
                    borderWidth: 2,
                    data: [2, 5, 1, 3, 2, 6, 7],
                },
            ],
        },
        options: chartOptions
    });
    var ctx = document.getElementById('chart4').getContext('2d');
    var chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [2, 5, 1, 3, 2, 6, 7],
            datasets: [
                {
                    backgroundColor: "rgba(104, 153, 63, 0.1)",
                    borderColor: "rgba(104, 153, 63, 0.8)",
                    borderWidth: 2,
                    data: [2, 5, 1, 3, 2, 6, 7],
                },
            ],
        },
        options: chartOptions
    });
    var ctx = document.getElementById('chart5').getContext('2d');
    var chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [2, 5, 1, 3, 2, 6, 7],
            datasets: [
                {
                    backgroundColor: "rgba(245, 211, 39, 0.1)",
                    borderColor: "rgba(245, 211, 39, 0.8)",
                    borderWidth: 2,
                    data: [2, 5, 1, 3, 2, 6, 7],
                },
            ],
        },
        options: chartOptions
    });
    var ctx = document.getElementById('chart6').getContext('2d');
    var chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [2, 5, 1, 3, 2, 6, 7],
            datasets: [
                {
                    backgroundColor: "rgba(0, 0, 0, 0.1)",
                    borderColor: "rgba(0, 0, 0, 0.8)",
                    borderWidth: 2,
                    data: [2, 5, 1, 3, 2, 6, 7],
                },
            ],
        },
        options: chartOptions
    });
    var ctx = document.getElementById('chart7').getContext('2d');
    var chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [2, 5, 1, 3, 2, 6, 7],
            datasets: [
                {
                    backgroundColor: "rgba(186, 0, 255, 0.1)",
                    borderColor: "rgba(186, 0, 255, 0.8)",
                    borderWidth: 2,
                    data: [2, 5, 1, 3, 2, 6, 7],
                },
            ],
        },
        options: chartOptions
    });
    var ctx = document.getElementById('chart8').getContext('2d');
    var chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [2, 5, 1, 3, 2, 6, 7],
            datasets: [
                {
                    backgroundColor: "rgba(256, 0, 0, 0.1)",
                    borderColor: "rgba(256, 0, 0, 0.8)",
                    borderWidth: 2,
                    data: [2, 5, 1, 3, 2, 6, 7],
                },
            ],
        },
        options: chartOptions
    });
    </script>
</x-admin-layout>