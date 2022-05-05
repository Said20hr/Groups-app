<x-layouts.client>
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-lg-6 col-12 d-flex ms-auto">
                <div class="dropleft ms-auto ms-3">
                    <button class="btn bg-gradient-dark dropdown-toggle" type="button" id="dropdownImport" data-bs-toggle="dropdown" aria-expanded="false">
                        Today
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownImport">
                        <li><a class="dropdown-item" href="javascript:;">Yesterday</a></li>
                        <li><a class="dropdown-item" href="javascript:;">Last 7 days</a></li>
                        <li><a class="dropdown-item" href="javascript:;">Last 30 days</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card border">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">{{__('My groups')}}</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        0
                                        <span class="text-success text-sm font-weight-bolder">+0%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md">
                                    <i class="ni ni-circle-08 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card border">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">{{__('New Subscribers')}}</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        0
                                        <span class="text-success text-sm font-weight-bolder">+0%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md">
                                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card border">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">{{__('Analytics')}}</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        0
                                        <span class="text-danger text-sm font-weight-bolder">0%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md">
                                    <i class="ni ni-watch-time text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card border">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">{{__('Win/Loss')}}</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        0
                                        <span class="text-success text-sm font-weight-bolder">0%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md">
                                    <i class="ni ni-image text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-7 col-md-12">
                <div class="card border">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">{{__('Traffic channels')}}</h6>
                        <div class="d-flex align-items-center">
                            <span class="badge badge-md badge-dot me-4">
                                <i class="bg-primary"></i>
                                <span class="text-dark text-xs">{{__('Organic search')}}</span>
                            </span>
                            <span class="badge badge-md badge-dot me-4">
                                <i class="bg-dark"></i>
                                <span class="text-dark text-xs">{{__('Referral')}}</span>
                            </span>
                            <span class="badge badge-md badge-dot me-4">
                                <i class="bg-info"></i>
                                <span class="text-dark text-xs">{{__('Social media')}}</span>
                            </span>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 mt-4 mt-lg-0">
                <div class="card border h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0">{{__('Referrals')}}</h6>
                            <button type="button" class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center ms-auto" data-bs-toggle="tooltip" data-bs-placement="bottom" title="See which websites are sending traffic to your website">
                                <i class="fas fa-info"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-12 col-12 text-center">
                                <div class="chart mt-5">
                                    <canvas id="chart-doughnut" class="chart-canvas" height="200"></canvas>
                                </div>
                                <a class="btn btn-sm bg-gradient-secondary mt-4">{{__('See all referrals')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-12">
                <div class="card h-100 border">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0">{{__('Social')}}</h6>
                            <button type="button" class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center ms-auto" data-bs-toggle="tooltip" data-bs-placement="bottom" title="See how much traffic do you get from social media">
                                <i class="fas fa-info"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                <div class="w-100">
                                    <div class="d-flex align-items-center mb-2">
                                        <a class="btn btn-twitter btn-simple mb-0 p-0" href="javascript:;">
                                            <i class="fab fa-telegram fa-lg"></i>
                                        </a>
                                        <span class="me-2 text-sm font-weight-bold text-capitalize ms-2">Telegram</span>
                                        <span class="ms-auto text-sm font-weight-bold">100%</span>
                                    </div>
                                    <div>
                                        <div class="progress progress-md">
                                            <div class="progress-bar bg-gradient-dark w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                <div class="w-100">
                                    <div class="d-flex align-items-center mb-2">
                                        <a class="btn btn-facebook btn-simple mb-0 p-0" href="javascript:;">
                                            <i class="fab fa-facebook fa-lg"></i>
                                        </a>
                                        <span class="me-2 text-sm font-weight-bold text-capitalize ms-2">Facebook</span>
                                        <span class="ms-auto text-sm font-weight-bold">80%</span>
                                    </div>
                                    <div>
                                        <div class="progress progress-md">
                                            <div class="progress-bar bg-gradient-dark w-80" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                <div class="w-100">
                                    <div class="d-flex align-items-center mb-2">
                                        <a class="btn btn-twitter btn-simple mb-0 p-0" href="javascript:;">
                                            <i class="fab fa-twitter fa-lg"></i>
                                        </a>
                                        <span class="me-2 text-sm font-weight-bold text-capitalize ms-2">Twitter</span>
                                        <span class="ms-auto text-sm font-weight-bold">40%</span>
                                    </div>
                                    <div>
                                        <div class="progress progress-md">
                                            <div class="progress-bar bg-gradient-dark w-40" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                <div class="w-100">
                                    <div class="d-flex align-items-center mb-2">
                                        <a class="btn btn-reddit btn-simple mb-0 p-0" href="javascript:;">
                                            <i class="fab fa-reddit fa-lg"></i>
                                        </a>
                                        <span class="me-2 text-sm font-weight-bold text-capitalize ms-2">Reddit</span>
                                        <span class="ms-auto text-sm font-weight-bold">30%</span>
                                    </div>
                                    <div>
                                        <div class="progress progress-md">
                                            <div class="progress-bar bg-gradient-dark w-30" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                <div class="w-100">
                                    <div class="d-flex align-items-center mb-2">
                                        <a class="btn btn-youtube btn-simple mb-0 p-0" href="javascript:;">
                                            <i class="fab fa-youtube fa-lg"></i>
                                        </a>
                                        <span class="me-2 text-sm font-weight-bold text-capitalize ms-2">Youtube</span>
                                        <span class="ms-auto text-sm font-weight-bold">25%</span>
                                    </div>
                                    <div>
                                        <div class="progress progress-md">
                                            <div class="progress-bar bg-gradient-dark w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                <div class="w-100">
                                    <div class="d-flex align-items-center mb-2">
                                        <a class="btn btn-slack btn-simple mb-0 p-0" href="javascript:;">
                                            <i class="fab fa-slack fa-lg"></i>
                                        </a>
                                        <span class="me-2 text-sm font-weight-bold text-capitalize ms-2">Slack</span>
                                        <span class="ms-auto text-sm font-weight-bold">15%</span>
                                    </div>
                                    <div>
                                        <div class="progress progress-md">
                                            <div class="progress-bar bg-gradient-dark w-15" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script src="{{asset('dashboards/assets/js/plugins/chartjs.min.js')}}"></script>
        <script>
            var ctx1 = document.getElementById("chart-line").getContext("2d");
            var ctx2 = document.getElementById("chart-doughnut").getContext("2d");

            var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

            gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
            gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
            gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

            var gradientStroke2 = ctx1.createLinearGradient(0, 230, 0, 50);

            gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
            gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
            gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

            // Line chart
            new Chart(ctx1, {
                type: "line",
                data: {
                    labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "Organic Search",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 2,
                        pointBackgroundColor: "#5e72e4",
                        borderColor: "#5e72e4",
                        borderWidth: 3,
                        backgroundColor: gradientStroke1,
                        data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                        maxBarThickness: 6
                    },
                        {
                            label: "Referral",
                            tension: 0.4,
                            borderWidth: 0,
                            pointRadius: 2,
                            pointBackgroundColor: "#3A416F",
                            borderColor: "#3A416F",
                            borderWidth: 3,
                            backgroundColor: gradientStroke2,
                            data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                            maxBarThickness: 6
                        },
                        {
                            label: "Direct",
                            tension: 0.4,
                            borderWidth: 0,
                            pointRadius: 2,
                            pointBackgroundColor: "#17c1e8",
                            borderColor: "#17c1e8",
                            borderWidth: 3,
                            backgroundColor: gradientStroke2,
                            data: [40, 80, 70, 90, 30, 90, 140, 130, 200],
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
                                borderDash: [5, 5]
                            },
                            ticks: {
                                display: true,
                                padding: 10,
                                color: '#9ca2b7'
                            }
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: true,
                                borderDash: [5, 5]
                            },
                            ticks: {
                                display: true,
                                color: '#9ca2b7',
                                padding: 10
                            }
                        },
                    },
                },
            });


            // Doughnut chart
            new Chart(ctx2, {
                type: "doughnut",
                data: {
                    labels: ['Creative Tim', 'Github', 'Bootsnipp', 'Dev.to', 'Codeinwp'],
                    datasets: [{
                        label: "Projects",
                        weight: 9,
                        cutout: 60,
                        tension: 0.9,
                        pointRadius: 2,
                        borderWidth: 2,
                        backgroundColor: ['#2152ff', '#3A416F', '#f53939', '#a8b8d8', '#5e72e4'],
                        data: [15, 20, 12, 60, 20],
                        fill: false
                    }],
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
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                            },
                            ticks: {
                                display: false
                            }
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                            },
                            ticks: {
                                display: false,
                            }
                        },
                    },
                },
            });
        </script>
        <script src="{{asset('dashboards/assets/js/plugins/chartjs.min.js')}}"></script>
        <script>
            var ctx1 = document.getElementById("chart-line").getContext("2d");
            var ctx2 = document.getElementById("chart-doughnut").getContext("2d");

            var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

            gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
            gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
            gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

            var gradientStroke2 = ctx1.createLinearGradient(0, 230, 0, 50);

            gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
            gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
            gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

            // Line chart
            new Chart(ctx1, {
                type: "line",
                data: {
                    labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "Organic Search",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 2,
                        pointBackgroundColor: "#5e72e4",
                        borderColor: "#5e72e4",
                        borderWidth: 3,
                        backgroundColor: gradientStroke1,
                        data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                        maxBarThickness: 6
                    },
                        {
                            label: "Referral",
                            tension: 0.4,
                            borderWidth: 0,
                            pointRadius: 2,
                            pointBackgroundColor: "#3A416F",
                            borderColor: "#3A416F",
                            borderWidth: 3,
                            backgroundColor: gradientStroke2,
                            data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                            maxBarThickness: 6
                        },
                        {
                            label: "Direct",
                            tension: 0.4,
                            borderWidth: 0,
                            pointRadius: 2,
                            pointBackgroundColor: "#17c1e8",
                            borderColor: "#17c1e8",
                            borderWidth: 3,
                            backgroundColor: gradientStroke2,
                            data: [40, 80, 70, 90, 30, 90, 140, 130, 200],
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
                                borderDash: [5, 5]
                            },
                            ticks: {
                                display: true,
                                padding: 10,
                                color: '#9ca2b7'
                            }
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: true,
                                borderDash: [5, 5]
                            },
                            ticks: {
                                display: true,
                                color: '#9ca2b7',
                                padding: 10
                            }
                        },
                    },
                },
            });


            // Doughnut chart
            new Chart(ctx2, {
                type: "doughnut",
                data: {
                    labels: ['Creative Tim', 'Github', 'Bootsnipp', 'Dev.to', 'Codeinwp'],
                    datasets: [{
                        label: "Projects",
                        weight: 9,
                        cutout: 60,
                        tension: 0.9,
                        pointRadius: 2,
                        borderWidth: 2,
                        backgroundColor: ['#2152ff', '#3A416F', '#f53939', '#a8b8d8', '#5e72e4'],
                        data: [15, 20, 12, 60, 20],
                        fill: false
                    }],
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
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                            },
                            ticks: {
                                display: false
                            }
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                            },
                            ticks: {
                                display: false,
                            }
                        },
                    },
                },
            });
        </script>
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>
        @endpush
</x-layouts.client>
