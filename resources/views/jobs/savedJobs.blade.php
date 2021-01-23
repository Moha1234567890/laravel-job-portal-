@extends('layouts.site')

@section('content')

    <section class="site-section" id="next">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12 header-margin">
                    @if(!$saved_jobs_counter == null)

                        <div class="bg-light p-3 border rounded d-block mb-4">

                            <ul class="list-unstyled pl-3 mb-0" align="{{__('messages.align')}}">

                                <li class="mb-2"><strong class="text-black ">{{__('messages.Number of Saved Jobs')}}</strong>     <span align="{{__('messages.align')}} == right ? left : right">: ({{$saved_jobs_counter}})</span></li>

                            </ul>

                        </div>
                    @endif

                    @if(isset($saved_jobs) && $saved_jobs->count() > 0)
                        @foreach($saved_jobs as $job)
                            <ul class="job-listings mb-5 hover-eff">
                                <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">

                                    <div class="job-listing-logo">
                                        {{--fix url bug--}}
                                        <a href="{{route('browse.one.job', $job->job_id)}}"> <img src="{{asset('storage/'.$job->pic)}}" alt="Image" class="img-thumbnail w-70 h-70 d-block mr-2 category-img" ></a>
                                    </div>

                                    <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                                        <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                                            <h2>{{$job->job_title}}</h2>
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
                            you have not saved any jobs yet
                        </div>

                    @endif

                    {!!  $saved_jobs -> links() !!}
                </div>
            </div>
        </div>
    </section>






@endsection



