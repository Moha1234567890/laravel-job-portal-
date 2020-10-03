@extends('layouts.site')

@section('content')
    <section class="site-section" id="next">
<div class="container">
   <div class="row no-gutters">
    <div class="col-md-12 header-margin">

        @if(isset($getJobs) && $getJobs->count() > 0)
            @foreach($getJobs as $job)
                <ul class="job-listings mb-5">
                    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">

                        <div class="job-listing-logo">
                            {{--fix url bug--}}
                            <a href="{{route('browse.one.job', ['id' => $job->id, 'uid' => Auth::user()->id])}}"> <img src="https://www.kindpng.com/picc/m/78-786207_user-avatar-png-user-avatar-icon-png-transparent.png" alt="Image" class="img-thumbnail mw-100" style="width: 150px; height: 150px;"></a>
                        </div>

                        <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                            <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                                <h2>{{$job->jobtitle}}</h2>
                                <strong>{{$job->companyname}}</strong>
                            </div>
                            <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                                <span class="icon-room"></span> {{$job->location}}, {{$job->region}}
                            </div>
                            <div class="job-listing-meta">
                                <span class=" {{$job->jobtype == 'full time' ? 'badge badge-success ': 'badge badge-danger'}}">{{$job->jobtype}}</span>
                            </div>
                        </div>

                    </li>





                </ul>

            @endforeach
        @endif
    </div>
   </div>
</div>
    </section>

    @endsection


