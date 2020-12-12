@extends('layouts.site')

@section('content')

    <section class="site-section" id="next">
        <div class="container" id="suck">
            <div class="row no-gutters">
                <div class="col-md-12 header-margin">

                    @if(isset($saved_jobs) && $saved_jobs->count() > 0)
                        @foreach($saved_jobs as $job)
                            <ul class="job-listings mb-5">
                                <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">

                                    <div class="job-listing-logo">


                                        <a href="{{route('browse.one.job', $job->job_id)}}"> <img src="{{asset('storage/app/public/'. $job->pic)}}" alt="Image" class="img-thumbnail w-70 h-70 category-img"></a>
                                    </div>

                                    <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                                        <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                                            <h2 id="job_title">{{$job->job_title}}</h2>
                                            <strong>{{$job->company_name}}</strong>
                                        </div>
                                        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                                            <span class="icon-room"></span> {{$job->location}}, {{$job->region}}
                                        </div>
                                        <div class="job-listing-meta">
                                            <span class=" {{$job->job_type == 'full time' ? 'badge badge-success ': 'badge badge-danger'}}">{{$job->job_type}}</span>
                                        </div>
                                    </div>

                                </li>


                            </ul>

                        @endforeach

                    @else
                        <div class="alert alert-danger">
                            You Have Not Saved Any Jobs Yet
                        </div>
                    @endif

                    {!! $saved_jobs->links() !!}


                </div>
            </div>
        </div>
    </section>
