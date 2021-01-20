@extends('layouts.site')

@section('content')
    <section class="site-section" id="next">
        <div class="container">
           <div class="row no-gutters">
            <div class="col-md-12 header-margin">
              @if(!$getJobs_counter == null)

                <div class="bg-light p-3 border rounded d-block mb-4">

                        <ul class="list-unstyled pl-3 mb-0" align="{{__('messages.align')}}">

                               <li class="mb-2"><strong class="text-black">{{__('messages.Number of Searches')}}:</strong> <span align="{{__('messages.align')}} == right ? left : right">({{$getJobs_counter}})</span></li>

                        </ul>

                </div>
              @endif
              @if(isset($getJobs) && $getJobs->count() > 0 AND !$getJobs_counter == null )

                    @foreach($getJobs as $job)
                        <ul class="job-listings mb-5">
                            <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">

                                <div class="job-listing-logo">
                                    {{--fix url bug--}}
                                    <a href="{{route('browse.one.job', $job->id)}}"> <img src="{{asset('storage/'.$job->image)}}" alt="Image" class="img-thumbnail w-70 h-70 d-block mr-2 category-img" ></a>
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
              @else
                    <div class="alert alert-danger" align="{{__('messages.align')}}">
                        {{__('messages.We have no records of this search')}}

                    </div>
              @endif

                    {!!  $getJobs -> links() !!}
            </div>
           </div>
        </div>
    </section>

@endsection


