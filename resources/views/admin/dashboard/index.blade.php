@extends("admin.layout.master")
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
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-lg-12 position-relative z-index-2">
                <div class="row mb-4">
                    <div class="col-lg-4 col-md-6 col-sm-6 mt-sm-0 mt-4">
                        <div class="card  mb-2 p-2">
                            <div class=" mb-0 d-flex justify-content-between p-2  bg-transparent">
                                <div class="pt-1">
                                    <h6 class=" mb-0 text-capitalize font-weight-800">Veterinary Neurologists</h6>
                                    <p class="mb-0 text-start  font-weight-400 mt-3">{{ $dashboardInfo['veterinary_neurologists'] ?? 0 }}</p>
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
                                    <p class="mb-0 text-start  font-weight-400 mt-3">{{ $dashboardInfo['veterinary_practitioners'] ?? 0 }}</p>
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
                                    <p class="mb-0 text-start  font-weight-400 mt-3">{{ $dashboardInfo['onboarded_students'] ?? 0 }}</p>
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
                                    <p class="mb-0 text-start  font-weight-400 mt-3">{{ $dashboardInfo['consultations_by_neurologists'] ?? 0 }}</p>

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
                                    <p class="mb-0 text-start  font-weight-400 mt-3">{{ $dashboardInfo['consultations_by_practitioners'] ?? 0 }}</p>
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
                                    <p class="mb-0 text-start  font-weight-400 mt-3">{{ number_format($dashboardInfo['total_payment'] ?? 0) }}</p>
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
                                    <h6 class="mb-0">Analytics</h6>
                                </div>
                                {{--<div class="d-flex flex-wrap">
                                    <p class=" mx-3 text-sm"><i class="fa fa-circle text-xs mx-auto" style="color: #344767;" aria-hidden="true"></i>Veterinary Neurologists</p>
                                    <p class=" mx-3 text-sm"><i class="fa fa-circle text-xs" style="color:#A85CF9;" aria-hidden="true"></i>Veterinary Practitioners</p>
                                    <p class=" mx-3 text-sm"><i class="fa fa-circle text-xs mx-auto" aria-hidden="true" style="color: #2E97A9;"></i> Onboarded Students</p>
                                </div>--}}
                            </div>
                            <div class="card-body p-3">
                                <div class="chart">
                                    <canvas id="chart-line" class="chart-canvas" height="450"></canvas>
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
        // Line chart
        var ctx1 = document.getElementById("chart-line").getContext("2d");
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                datasets: [
                    {
                        label: "Veterinary Neurologists",
                        tension: 0,
                        pointRadius: 5,
                        pointBackgroundColor: "#344767",
                        pointBorderColor: "#344767",
                        borderColor: "#344767",
                        borderWidth: 4,
                        backgroundColor: "transparent",
                        fill: true,
                        data: {!! json_encode(array_values($dashboardInfo['chat_veterinary_neurologists'])) ?? [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0] !!},
                        maxBarThickness: 6,
                        pointStyle: 'circle'
                    },
                    {
                        label: "Veterinary Practitioners",
                        tension: 0,
                        pointRadius: 5,
                        pointBackgroundColor: "#A85CF9",
                        pointBorderColor: "#A85CF9",
                        borderColor: "#A85CF9",
                        borderWidth: 4,
                        backgroundColor: "transparent",
                        fill: true,
                        data: {!! json_encode(array_values($dashboardInfo['chat_veterinary_practitioners'])) ?? [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0] !!},

                        maxBarThickness: 6
                    },
                    {
                        label: "Onboarded Students",
                        tension: 0,
                        pointRadius: 5,
                        pointBackgroundColor: "#2E97A9",
                        pointBorderColor: "#2E97A9",
                        borderColor: "#2E97A9",
                        borderWidth: 4,
                        backgroundColor: "transparent",
                        fill: true,
                        data: {!! json_encode(array_values($dashboardInfo['chat_onboarded_students'])) ?? [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0] !!},
                        maxBarThickness: 6
                    }
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        bottom: 30 // Adjust this value as needed
                    }
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Monthly Onboarding Data',
                        font: {
                            size: 14
                        }
                    },
                    legend: {
                        display: true,
                        position: 'top',
                        labels: {
                            usePointStyle: true,  // Use the point style for legend markers
                            pointStyle: 'circle', // Set the point style to circle
                            color: '#9ca2b7',
                            font: {
                                size: 12,
                                family: "Roboto",
                                weight: 500
                            },
                        }
                    },
                    tooltip: {
                        enabled: true,
                        mode: 'index',
                        intersect: false,
                    },
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
                            }
                        },
                        title: {
                            display: true,
                            text: 'Number of Onboarded Users',
                            color: '#9ca2b7',
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            }
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
                            }
                        },
                        title: {
                            display: true,
                            text: 'Months',
                            color: '#9ca2b7',
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            }
                        }
                    }
                }
            }
        });

        // Function to get all days of the current month with month name
        /*function getDaysInCurrentMonth() {
            const now = new Date();
            const year = now.getFullYear();
            const month = now.getMonth();
            const monthName = now.toLocaleString('default', { month: 'short' });
            const days = new Date(year, month + 1, 0).getDate();
            let labels = [];

            for (let day = 1; day <= days; day++) {
                labels.push(`${day} ${monthName}`);
            }

            return labels;
        }

        // Example data for the current month (Replace with your actual data)
        const neurologistsData = Array.from({ length: getDaysInCurrentMonth().length }, () => Math.floor(Math.random() * 100));
        const practitionersData = Array.from({ length: getDaysInCurrentMonth().length }, () => Math.floor(Math.random() * 100));
        const studentsData = Array.from({ length: getDaysInCurrentMonth().length }, () => Math.floor(Math.random() * 100));

        const ctx1 = document.getElementById('chart-line').getContext('2d');
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: getDaysInCurrentMonth(),
                datasets: [
                    {
                        label: "Veterinary Neurologists",
                        tension: 0,
                        pointRadius: 5,
                        pointBackgroundColor: "#344767",
                        pointBorderColor: "#344767",
                        borderColor: "#344767",
                        borderWidth: 4,
                        backgroundColor: "transparent",
                        fill: true,
                        data: neurologistsData,
                        maxBarThickness: 6,
                        pointStyle: 'circle'
                    },
                    {
                        label: "Veterinary Practitioners",
                        tension: 0,
                        pointRadius: 5,
                        pointBackgroundColor: "#A85CF9",
                        pointBorderColor: "#A85CF9",
                        borderColor: "#A85CF9",
                        borderWidth: 4,
                        backgroundColor: "transparent",
                        fill: true,
                        data: practitionersData,
                        maxBarThickness: 6
                    },
                    {
                        label: "Onboarded Students",
                        tension: 0,
                        pointRadius: 5,
                        pointBackgroundColor: "#2E97A9",
                        pointBorderColor: "#2E97A9",
                        borderColor: "#2E97A9",
                        borderWidth: 4,
                        backgroundColor: "transparent",
                        fill: true,
                        data: studentsData,
                        maxBarThickness: 6
                    }
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    title: {
                        display: true,
                        text: 'Daily Onboarding Data for the Current Month',
                        font: {
                            size: 18
                        }
                    },
                    legend: {
                        display: true,
                        position: 'top',
                        labels: {
                            color: '#9ca2b7',
                            font: {
                                size: 14,
                                family: "Roboto",
                                weight: 300
                            }
                        }
                    },
                    tooltip: {
                        enabled: true,
                        mode: 'index',
                        intersect: false,
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
                            }
                        },
                        title: {
                            display: true,
                            text: 'Number of Onboarded Users',
                            color: '#9ca2b7',
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            }
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
                            }
                        },
                        title: {
                            display: true,
                            text: 'Days',
                            color: '#9ca2b7',
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            }
                        }
                    }
                }
            }
        });
*/
    </script>
@endsection
