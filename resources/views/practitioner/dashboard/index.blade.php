@extends("practitioner.layout.master")
@section('title')
    Dashboard
@endsection
@section('type')
    Admin
@endsection
@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 ">
            <li class="breadcrumb-item text-sm">
                <a class="opacity-7 text-dark" href="javascript:;">
                <span class="material-symbols-outlined">
                  dashboard
                  </span>
                </a>
            </li>
            <li class=" text-sm text-dark active px-1" aria-current="page">Dashboard</li>
        </ol>
    </nav>
@endsection
@section('style')
@endsection

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-12 position-relative z-index-2">
                <div class="row mb-4">
                    <div class="col-lg-4 col-md-6 col-sm-6 mt-sm-0 mt-4">
                        <div class="card  mb-2 p-2">
                            <div class=" mb-0 d-flex justify-content-between p-2  bg-transparent">
                                <div class="pt-1">
                                    <h6 class=" mb-0 text-capitalize font-weight-800">Veterinary Neurologists</h6>
                                    <p class="mb-0 text-start  font-weight-400 mt-3">237</p>
                                </div>
                                <div class="mb-0"><img alt="icon" src="{{ asset('portal/assets/img/Veterinary Neurologists.png') }}" style="width: 90px;"/></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mt-sm-0 mt-4">
                        <div class="card  mb-2 p-2">
                            <div class=" mb-0 d-flex justify-content-between p-2  bg-transparent">
                                <div class="pt-1">
                                    <h6 class=" mb-0 text-capitalize font-weight-800">Veterinary Practitioners</h6>
                                    <p class="mb-0 text-start  font-weight-400 mt-3">237</p>
                                </div>
                                <div class="mb-0"><img alt="icon" src="{{ asset('portal/assets/img/Veterinary Practitioners.png') }}" style="width: 90px;"/></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mt-lg-0 mt-4">
                        <div class="card  mb-2  p-2">
                            <div class=" mb-0 d-flex justify-content-between p-2  bg-transparent">
                                <div class="pt-1">
                                    <h6 class=" mb-0 text-capitalize font-weight-800">Onboarded Students</h6>
                                    <p class="mb-0 text-start  font-weight-400 mt-3">237</p>
                                </div>
                                <div class="mb-0"><img alt="icon" src="{{ asset('portal/assets/img/Onboarded Students.png') }}" style="width: 90px;"/></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mt-lg-0">
                        <div class="card p-2 mb-2 mt-4">
                            <div class=" mb-0 d-flex justify-content-between p-2  bg-transparent">

                                <div class="pt-1">
                                    <h6 class=" mb-0 text-capitalize font-weight-800">Consultations by Neurologists</h6>
                                    <p class="mb-0 text-start  font-weight-400 mt-3">297</p>

                                </div>
                                <div class="mb-0"><img alt="icon" src="{{ asset('portal/assets/img/Consultations by Neurologists.png') }}" style="width: 90px;"/></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mt-lg-0">
                        <div class="card mt-4 p-2 mb-2">
                            <div class=" mb-0 d-flex justify-content-between p-2  bg-transparent">
                                <div class="pt-1">
                                    <h6 class=" mb-0 text-capitalize font-weight-800">Consultations by Practitioners</h6>
                                    <p class="mb-0 text-start  font-weight-400 mt-3">297</p>
                                </div>
                                <div class="mb-0"><img alt="icon" src="{{ asset('portal/assets/img/Consultations by Practitioners.png') }}" style="width: 90px;"/></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mt-lg-0">
                        <div class="card mt-4 p-2 mb-2">
                            <div class=" mb-0 d-flex justify-content-between p-2  bg-transparent">
                                <div class="pt-1">
                                    <h6 class=" mb-0 text-capitalize font-weight-800">Total Payment</h6>
                                    <p class="mb-0 text-start  font-weight-400 mt-3">297</p>
                                </div>
                                <div class="mb-0"><img alt="icon" src="{{ asset('portal/assets/img/Total Payments.png') }}" style="width: 90px;"/></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-12 col-sm-6 mt-sm-0 mt-4">
                        <div class="card mb-2">
                            <div class="card-header pb-0 p-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-3">Analytics</h6>
                                </div>
                                <div class="d-flex flex-wrap">
                                    <p class=" mx-3 text-sm"><i class="fa fa-circle text-xs mx-auto" style="color: #344767;" aria-hidden="true"></i>Veterinary Neurologists</p>
                                    <p class=" mx-3 text-sm"><i class="fa fa-circle text-xs" style="color:#A85CF9;" aria-hidden="true"></i>Veterinary Practitioners</p>
                                    <p class=" mx-3 text-sm"><i class="fa fa-circle text-xs mx-auto" aria-hidden="true" style="color: #2E97A9;"></i> Onboarded Students</p>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <div class="chart">
                                    <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('portal/assets/js/plugins/chartjs.min.js') }}"></script>
    <script src="{{ asset('portal/assets/js/plugins/world.js') }}"></script>

    <script>
        var ctx1 = document.getElementById("chart-line").getContext("2d");


        // Line chart
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["6PM", "9PM", "11PM", "2AM", "4AM", "6AM", "8AM", "10AM", "12PM"],
                datasets: [{
                    label: "Facebook Ads",
                    tension: 0,
                    pointRadius: 5,
                    pointBackgroundColor: "68B95F",
                    pointBorderColor: "68B95F",
                    borderColor: "68B95F",
                    borderWidth: 4,
                    backgroundColor: "transparent",
                    fill: true,
                    data: [200, 100, 200, 190, 400, 350, 500, 450, 700],
                    maxBarThickness: 6
                },
                    {
                        label: "Google Ads",
                        tension: 0,
                        borderWidth: 0,
                        pointRadius: 5,
                        pointBackgroundColor: "#344767",
                        pointBorderColor: "#344767",
                        borderColor: "#344767",
                        borderWidth: 4,
                        backgroundColor: "transparent",
                        fill: true,
                        data: [100, 130, 40, 140, 150, 210, 30, 250, 280],
                        maxBarThickness: 6
                    },
                    {
                        label: "Google Ads",
                        tension: 0,
                        borderWidth: 0,
                        pointRadius: 5,
                        pointBackgroundColor: "#A85CF9",
                        pointBorderColor: "transparent",
                        borderColor: "#A85CF9",
                        borderWidth: 4,
                        backgroundColor: "transparent",
                        fill: true,
                        data: [190, 30, 90, 10, 50, 220, 10, 250, 280],
                        maxBarThickness: 6
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: '#c1c4ce5c'
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#9ca2b7',
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: true,
                            borderDash: [5, 5],
                            color: '#c1c4ce5c'
                        },
                        ticks: {
                            display: true,
                            color: '#9ca2b7',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
@endsection
