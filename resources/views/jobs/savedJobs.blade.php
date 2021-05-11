@extends('layouts.site')


@section('title')
    Your Saved Jobs
@endsection
@section('content')

<section class="our-services" id="next">
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
                <div class="single-services mb-5 hover-eff">
                   
                  
                    <div class="services-ion">
                        <a href="{{route('browse.one.job', $job->job_id)}}"><img src="{{asset('assets/img/icon/services1.svg')}}" class="" alt=""></a>
                    </div>
                    <div class="services-cap">
                        <h5><a href="{{route('browse.one.job', $job->job_id)}}">{{ ucwords($job->job_title) }}</a></h5>
                        <strong>{{ ucwords($job->company_name) }}</strong>
                        <p>{{ strip_tags(substr($job->job_desc, 0, 125)) }}
                        </p>
                        <h2> 
                            <span class="{{$job->job_type == 'full time' ? 'badge badge-success ': 'badge badge-danger'}}">{{$job->job_type}}</span>
                        </h2>
                       
                        {{-- <a href="#" class="more-btn">Browse Job</a> --}}
                    </div>
                   
                  
                </div>
                @endforeach
                @endif

                    {!!  $saved_jobs -> links() !!}
                </div>
            </div>
        </div>
    </section>






@endsection



