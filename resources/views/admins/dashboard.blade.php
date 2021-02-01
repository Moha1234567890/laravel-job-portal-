@extends('layouts.admin')


@section('title')
    Admin Area
@endsection


@section('content')



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
                    var jobMonth = res.month;
                    var count = res.count;

                    console.log(res);

                    var chartdata = {
                        labels: jobMonth,
                        datasets: [
                            {
                                label: 'Number of Jobs this Month',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                barPercentage: '2px',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: count
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
                    labels: ['Applications Submitted', 'Saved Jobs', 'Unverified Jobs', 'Verified Jobs'],
                    datasets: [{
                        label: '# of Votes',
                        data: ['{{$num_apps}}', {{$num_saved_jobs}}, {{$jobsCountunver}}, {{$jobsCountver}}],
                        backgroundColor: [
                            '#ff6384',
                            '#4bc0c0',
                            '#ffcd56',
                            '#36a2eb',

                        ]
                    }]
                },
                options: {

                }
            });






















    </script>
@endsection

