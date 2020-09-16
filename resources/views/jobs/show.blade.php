@extends('layouts.site')

@section('content')
    <section class="section-hero overlay inner-page bg-image" style="background-image: url({{asset('assets/images/hero_1.jpg')}}); margin-top: 102px;
            padding-bottom: 200px;
            padding-top: 200px;
            margin-bottom:50px" id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-primary font-weight-bold">{{$job->jobtitle}}</h1>
                    <div class="custom-breadcrumbs">
                        <a class="text-primary" href="{{route('home')}}">Home</a> <span class="mx-2 slash">/</span>
                        <a class="text-primary" href="{{route('browse.jobs')}}">Jobs</a> <span class="mx-2 slash">/</span>
                        <span class="text-white"><strong>{{$job->jobtitle}}</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="site-section">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="d-flex align-items-center">
                        <div class="border p-2 d-inline-block mr-3 rounded">
                            <img src="{{asset('assets/images/job_logo_5.jpg')}}" alt="Image">
                        </div>
                        <div>
                            <h2>{{$job->jobtitle}}</h2>
                            <div>
                                <span class="ml-0 mr-2 mb-2"><span class="fa fa-briefcase fa-1x mr-2"></span>{{$job->companyname}}</span>
                                <span class="m-2"><span class="fa fa-map-marker  fa-1x mr-2"></span>{{$job->location}},{{$job->region}}</span>
                                <span class="m-2"><span class="fa fa-clock fa-1x mr-2"></span><span class="text-primary">{{$job->jobtype}}</span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-6">
                            <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-heart-o mr-2  text-danger"></span>Save</a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn btn-block btn-primary btn-md">Apply</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <figure class="mb-5"><img src="{{asset('assets/images/job_single_img_1.jpg')}}" alt="Image" class="img-fluid rounded"></figure>
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="fa fa-pencil fa-2x mr-3"></span>Job Description</h3>
                        <p>{{strip_tags($job->jobdesc)}})</p>

                    </div>
                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="fa fa-rocket fa-2x mr-3"></span>Responsibilities</h3>
                        <ul class="list-unstyled m-0 p-0">
                            {{strip_tags($job->respon)}}

                        </ul>
                    </div>

                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center  mb-4 text-primary"><span class="fa fa-book fa-2x mr-3"></span>Education + Experience</h3>
                        <ul class="list-unstyled m-0 p-0">
                           <li class="d-flex align-items-start mb-2"> {{strip_tags($job->edu)}} </li>

                        </ul>
                    </div>

                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="fa fa-apple fa-2x mr-3"></span>Other Benifits</h3>
                        <ul class="list-unstyled m-0 p-0">
                            {{strip_tags($job->ben)}}
                        </ul>
                    </div>

                    <div class="mb-5 form-group">
                        @if($job->email === Auth::user()->email)
                            <h3>you created this job</h3>
                        @else
                            <form action="{{route('apply.job')}}" class="form-group" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input  class="form-control form-control-lg" name="from" value="{{Auth::user()->email}}" placeholder="enter region"> from
                                <input  class="form-control form-control-lg" name="to" value="{{$job->email}}" placeholder="enter region"> to
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="subject" placeholder="why are you suitable for this job">



                                </div>
                               <div class="from-group">
                                   <input type="file" name="image" class="form-control">


                               </div>

                                <button class="btn btn-success" type="submit">appply</button>

                                <br>
                                <br>

                                <div class="row">
                                    {{--
                                    <div class="col-3 form-group">
                                        <input class="btn btn-success btn-md" class="btn btn-block btn-light btn-md" type="submit">Apply
                                    </div>
                                    <div class="col-3 form-group">
                                        <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-heart-o mr-2 text-danger"></span>Save it</a>
                                    </div> --}}

                                </div>


                            </form>
                        @endif
                    </div>



                </div>
                <div class="col-lg-4">
                    <div class="bg-light p-3 border rounded mb-4">
                        <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
                        <ul class="list-unstyled pl-3 mb-0">
                            <li class="mb-2"><strong class="text-black">Published on:</strong> {{$job->created_at}}</li>
                            <li class="mb-2"><strong class="text-black">vacancy:</strong> {{$job->vacancy}}</li>
                            <li class="mb-2"><strong class="text-black">Employment Status:</strong> {{$job->jobtype}}</li>
                            <li class="mb-2"><strong class="text-black">Experience:</strong> {{$job->ex}} year(s)</li>
                            <li class="mb-2"><strong class="text-black">Job Location:</strong> {{$job->location}}</li>
                            <li class="mb-2"><strong class="text-black">Salary:</strong> ${{$job->sal}}k</li>
                            <li class="mb-2"><strong class="text-black">Gender:</strong> {{$job->gender}}</li>
                            <li class="mb-2"><strong class="text-black">Application Deadline:</strong> April 28, 2019</li>
                        </ul>
                    </div>

                    <div class="bg-light p-3 border rounded">
                        <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Share</h3>
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection