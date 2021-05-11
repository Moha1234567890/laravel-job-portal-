@extends('layouts.site')

@section('title')
    {{ $url  ? ucwords($url) : "Category" }}

@endsection

@section('content')

    <section class="our-services" id="next">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12 header-margin">
                    @if(isset($category) && $category->count() > 0) 
                        
                    @foreach($category as $job)  
                <div class="single-services mb-5 hover-eff">
                   
                  
                    <div class="services-ion">
                        <a href="{{route('browse.one.job', $job->id)}}"><img src="{{asset('assets/img/icon/services1.svg')}}" class="" alt=""></a>
                    </div>
                    <div class="services-cap">
                        <h5><a href="{{route('browse.one.job', $job->id)}}">{{ ucwords($job->jobtitle) }}</a></h5>
                        <strong>{{ ucwords($job->companyname) }}</strong>
                        <p>{{ strip_tags(substr($job->jobdesc, 0, 125)) }}
                        </p>
                        <h2> 
                             <span class=" {{$job->jobtype == 'full time' ? 'badge badge-success ': 'badge badge-danger'}}">{{$job->jobtype}}</span>
                        </h2>
                       
                        {{-- <a href="#" class="more-btn">Browse Job</a> --}}
                    </div>
                   
                  
                </div>
                @endforeach
                @else
                    <div class="alert alert-danger" align="{{__('messages.align')}}">
                        {{__('messages.We have no records of this search')}}

                    </div>
               @endif

                        {!!  $category -> links() !!}
                </div>
            </div>
        </div>
    </section>




@endsection



