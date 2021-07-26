@extends('layouts.site')


@section('title')
    Update your Profile


@endsection
@section('content')
    <section class="site-section" id="next">

                <div class="container bootstrap snippet">

                    <div class="row">
                        <div class="col-md-12 header-margin">
  
                            <section class="site-section" id="next">
                 
                                <div class="row">
                                    {{-- <div class="col-lg-6 profile-nav">
                                      <div class="mb-5 panel">
                                       

                                      </div>
                          
                                      
                          
                                    </div> --}}

                                    <div class="col-md-12">
                                      @if(isset($user) && $user->count() > 0)

                                        <div class="bg-light p-3 border rounded mb-4">
                                          <ul class="list-unstyled pl-3 mb-0" >

                                            <div class="user-heading round" align="center">
                                                {{-- <a href="#"> --}}
                                                    <ul  class="list-unstyled pl-3 mb-0">
                                                        <li >
                                                    <img class="pic-profile" src="{{asset('storage/'.$user->image)}}" alt="">
                                                {{-- </a> --}}
                                                        </li>
                                                    </ul>
                                                <h3 >{{ $user->name }}</h3>
                                                @if(!$user->cv == null)
                                                  @if($user->type == "Jobseeker") 
                                                    <div class="col-xs-6">
                                                    <a class="btn btn-lg btn-success" href="{{asset('storage/app/public/'.$user->cv)}}" download>{{__('messages.Download my CV')}}</a>
                                                    </div>
                                                  @else
                                                  
                                                  @endif
                                                @else
                                                    @if($user->type == "Company") 
                                                
                                                    @else
                                                    <div class="col-xs-6">
                                                        <h3>{{__('messages.No CV yet')}}</h3>
                                                    </div>


                                                    @endif
                                                @endif
                                            </div>
                                          </ul>
                                        </div>
                                    </div>  
                                  </div>
                                  <div class="row">  
                                    <div class="col-md-6">
                                      <div class="bg-light p-3 border rounded mb-4 mt-5" align="{{ __('messages.align') }}">
                                        <h3 class="text-primary">{{ __('messages.Gerneral Info') }}</h3>
                                        <ul class="list-unstyled  mb-0">
                                          <li class="mb-2"><strong class="text-black">{{ __('messages.Email') }}:</strong> {{$user->email}}</li>
                                          <li class="mb-2"><strong class="text-black">{{ __('messages.Job title') }}:</strong> {{$user->job_title}}</li>
                                          <li class="mb-2"><strong class="text-black">{{ __('messages.Mobile') }}:</strong> {{$user->mobile}}</li>
                                          <li class="mb-2"><strong class="text-black">{{ __('messages.location') }}:</strong> {{$user->location}}</li>
                                          {{-- <li class="mb-2"><strong class="text-black">Job Location:</strong> New ork City</li>
                                          <li class="mb-2"><strong class="text-black">Salary:</strong> $60k - $100k</li>
                                          <li class="mb-2"><strong class="text-black">Gender:</strong> Any</li>
                                          <li class="mb-2"><strong class="text-black">Application Deadline:</strong> April 28, 2019</li> --}}
                                        </ul>
                                      </div>
                                    </div>
                                      <div class="col-md-6">
                                        <div class="bg-light p-3 border rounded mb-4 mt-5" align="{{ __('messages.align') }}">
                                          <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">{{ __('messages.My Social Media') }}</h3>
                                            <div class="footer-social">
                                                <a href="{{ $user->twitter }}"  target="_blank"><i align="{{__('messages.align')}}" class="fab fa-twitter"></i></a>
                                                <a href="{{ $user->facebook }}" align="{{__('messages.align')}}" class="fab fa-facebook-f"></i></a>
                                                <a href="{{$user->linkedin}}"  target="_blank" ><i align="{{__('messages.align')}}" class="fab fa-linkedin"></i></a>
                    
                    
                    
                    
                                        </div>
                                        </div>
                                      </div>  
                                      @endif

                                  </div>
                                  <section class="our-services">
                                  <div class="row no-gutters">
                                    <div class="col-md-12">
                                      @if(isset($companyJobs) && $companyJobs->count() > 0)
                                            @if ($user->type == "Company") 
                                              @foreach($companyJobs as $job)
                                                  <div class="single-services">
                   
                  
                                                      <div class="services-ion">
                                                          <a href="{{route('browse.one.job', $job->id)}}"><img src="{{asset('assets/img/icon/services1.svg')}}" class="" alt=""></a>
                                                      </div>
                                                      <div class="services-cap">
                                                          <h5><a href="{{route('browse.one.job', $job->id)}}">{{ ucwords($job->jobtitle) }}</a></h5>
                                                          <strong>{{ ucwords($job->companyname) }}</strong>
                                                          <p>{{ strip_tags(substr($job->jobdesc, 0, 125)) }}
                                                          </p>
                                                          <h2> 
                                                              <span class="{{$job->jobtype == 'full time' ? 'badge badge-success ': 'badge badge-danger'}}">{{$job->jobtype}}</span>
                                                          </h2>
                                                         
                                                          {{-- <a href="#" class="more-btn">Browse Job</a> --}}
                                                      </div>
                                                     
                                                    
                                                  </div>
                                            @endforeach
                                          @else 
                                            <h1> you are a jobseeker</h1>
                                          @endif  
                                      @endif
                                  </div>
                                </section>
                                  </div>
                
                
        </section>
        </div>
      </div>
    </div>


  </section>

@endsection


