@extends('layouts.admin')

@section('content')


            <div>
                <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
                <p>Welcome to JOBHUB Admin Area, You Are In</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="{{route('admins.dashboard')}}">Dashboard</a></li>

                <li><a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Charts</span></a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                    <div class="info">
                        <h4>Admins</h4>
                        <p><b>{{$adminsCount}}</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="widget-small info coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                    <div class="info">
                        <h4>users</h4>
                        <p><b>{{$usersCount}}</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
                    <div class="info">
                        <h4>Jobs</h4>
                        <p><b>{{$jobsCount}}</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
                    <div class="info">
                        <h4>Categories</h4>
                        <p><b>{{$catsCount}}</b></p>
                    </div>
                </div>
            </div>
        </div>

            </div>
        <div class="row">

            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Jobs</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
                    </div>
                </div>
            </div>


            <div class="col-md-6">
                    <div class="tile">
                        <h3 class="tile-title">Other Stats</h3>
                        <div class="embed-responsive embed-responsive-16by9">
                            <canvas class="embed-responsive-item" id="doughnutChartDemo"></canvas>
                        </div>
                    </div>
            </div>
        </div>







    @endsection

@section('charts')
    <script>




        var pie = [
            {
                value:  '{{$jobsCountver}}',
                color: "#46BFBD",
                highlight: "#5AD3D1",
                label: "verified jobs"
            },
            {
                value: '{{$jobsCountunver}}',
                color:"#F7464A",
                highlight: "#FF5A5E",
                label: "unverified jobs"
            }
        ];
        var doughnut = [

            {
                value: '{{$num_saved_jobs}}',
                color: "#46BFBD",
                highlight: "#5AD3D1",
                label: "Saved Jobs"
            },
            {
                value: '{{$num_apps}}',
                color: "#FDB45C",
                highlight: "#FFC870",
                label: "Applications Submitted"
            }
        ];






        var ctxp = $("#pieChartDemo").get(0).getContext("2d");
        var pieChart = new Chart(ctxp).Pie(pie);

        var ctxd = $("#doughnutChartDemo").get(0).getContext("2d");
        var doughnutChart = new Chart(ctxd).Doughnut(doughnut);





    </script>
    @endsection

