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
                <div id="chart-container">
                    <canvas width="204px" height="105px" id="graphCanvas"></canvas>
                </div>
           </div>
            <div class="col-md-6">
                <div id="chart-container">

            <canvas id="myChart3"></canvas>
                </div>
            </div>

        </div>




    @endsection

@section('charts')
    <script>









            $(document).ready(function () {
            $.ajax({
                url: "{{route('admins.dashboard.fetch')}}",

                success: function (res) {
                    var jobTitles = res.jobtitle;
                    var ids = res.ids;

                    console.log(res);

                    var chartdata = {
                        labels: jobTitles,
                        datasets: [
                            {
                                label: 'Student Marks',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                barPercentage: '2px',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: ids
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                }
            })
        })

            var myChart3 = document.getElementById('myChart3');
            var myChart3 = new Chart(myChart3, {
                type: 'pie',
                data: {
                    labels: ['Red', 'Green', 'Yellow', 'Grey', 'Blue'],
                    datasets: [{
                        label: '# of Votes',
                        data: [6, 8, 5, 2, 3],
                        backgroundColor: [
                            '#ff6384',
                            '#4bc0c0',
                            '#ffcd56',
                            '#c9cbcf',
                            '#36a2eb',
                        ]
                    }]
                },
                options: {

                }
            });






















    </script>
@endsection

