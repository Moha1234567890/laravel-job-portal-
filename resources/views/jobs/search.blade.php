@extends('layouts.site')


@section('title')
    Search Results
@endsection
@section('content')
<section class="our-services" id="next">
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
              <div class="single-services mb-5 hover-eff">
                 
                
                  <div class="services-ion">
                      <a href="{{route('browse.one.job', $job->id)}}"><img src="{{asset('assets/img/icon/services1.svg')}}" class="" alt=""></a>
                  </div>
                  <div class="services-cap">
                      <h5><a href="{{route('browse.one.job', $job->id)}}">{{ ucwords($job->jobtitle) }}</a></h5>
                      <strong>{{ ucwords($job->company_name) }}</strong>
                      <p>{{ strip_tags(substr($job->jobdesc, 0, 125)) }}
                      </p>
                      <h2> 
                          <span class="{{$job->jobtype == 'full time' ? 'badge badge-success ': 'badge badge-danger'}}">{{$job->jobtype}}</span>
                      </h2>
                     
                      
                  </div>
                 
                
              </div>
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


