@extends('layouts.backend')
@section('title', 'Dashboard | Category')

@section('contents')
    @component('components.dashboard')
        <div class="row">
            <div class="col-xl-6">
                <div class="card easion-card">
                    <div class="card-header">
                        <div class="easion-card-icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <div class="easion-card-title"> Bar Chart </div>
                        <div class="easion-card-menu">
                            <div class="dropdown show">
                                <a class="easion-card-menu-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body easion-card-body-chart">
                        <canvas id="easionChartjsBar"></canvas>
                        <script>
                            var ctx = document.getElementById("easionChartjsBar").getContext('2d');
                            var myChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                                    datasets: [{
                                        label: 'Blue',
                                        data: [12, 19, 3, 5, 2],
                                        backgroundColor: window.chartColors.primary,
                                        borderColor: 'transparent'
                                    }]
                                },
                                options: {
                                    legend: {
                                        display: false
                                    },
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                    }
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card easion-card">
                    <div class="card-header">
                        <div class="easion-card-icon">
                            <i class="fas fa-bell"></i>
                        </div>
                        <div class="easion-card-title"> Notifications </div>
                    </div>
                    <div class="card-body ">
                        <div class="notifications">
                            <a href="#!" class="notification">
                                <div class="notification-icon">
                                    <i class="fas fa-inbox"></i>
                                </div>
                                <div class="notification-text">New comment</div>
                                <span class="notification-time">21 days ago</span>
                            </a>
                            <a href="#!" class="notification">
                                <div class="notification-icon">
                                    <i class="fas fa-inbox"></i>
                                </div>
                                <div class="notification-text">New comment</div>
                                <span class="notification-time">21 days ago</span>
                            </a>
                            <a href="#!" class="notification">
                                <div class="notification-icon">
                                    <i class="fas fa-inbox"></i>
                                </div>
                                <div class="notification-text">New comment</div>
                                <span class="notification-time">21 days ago</span>
                            </a>
                            <div class="notifications-show-all">
                                <a href="#!">Show all</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endcomponent
@endsection
