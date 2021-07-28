@extends('layouts.site')


@section('title')
    Update your Profile


@endsection
@section('content')
    <section class="site-section" id="next">

                <div class="container bootstrap snippet">

                    <div class="row">
                        <div class="col-md-3 header-margin"><!--left col-->

                                <div class="card" style="margin-bottom: 30px; ">


                                

                                        <form class="form" action="{{route('profile.update.cv', Auth::user()->id)}}" method="post" id="registrationForm" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group text-center">

                                                <img src="{{asset('storage/'.$user->image)}}" class="w-100 h-70">



                                            </div>
                                            @if($user->type == "Company")
                                            
                                            @else 


                                                <div class="form-group text-center" >

                                                    <label for="first_name"><h4>{{__('messages.my cv')}}</h4></label>



                                                    <input type="file"  class="text-center center-block file-upload d-block mb-3 margin-f-all" name="cv">
                                                    @error('cv')
                                                    <span class="text-danger">{{$message}} </span>
                                                    @enderror


                                                </div>

                                                <div class="form-group">
                                                    <button class="btn btn-lg btn-success text-center margin-f-all" type="submit">{{__('messages.Update')}}</button>
                                                </div>
                                            @endif

                                        </form>

                                </div>



                            <ul class="list-group ">
                                <li class="list-group-item pull-{{__('messages.align')}}" align="{{__('messages.align')}}">{{__('messages.Activity')}} <i class="fa fa-dashboard fa-1x"></i></li>
                                <li class="list-group-item pull-{{__('messages.align')}}"><span class="pull-{{__('messages.align')}}"><strong>{{__('messages. posted jobs')}}: </strong></span>{{$createdJobs}}</li>
                                <li class="list-group-item pull-{{__('messages.align')}}"><span class="pull-{{__('messages.align')}}"><strong>{{__('messages.applyed to jobs')}}: </strong></span> {{$applyedJobs}}</li>

                            </ul>

                            <div class="panel panel-default d-block mt-4">
                                <div class="panel-heading pull-{{__('messages.align')}}">{{__('messages.Social Media')}}</div>
                                <div class="panel-body " align="{{__('messages.align')}}">
                                    <br>

                                         <div class="footer-social">
                                            @if(!$user->twitter == '')

                                              <a href="{{$user->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a>
                                            @endif
                                            @if(!$user->facebook == '')

                                                    <a href="{{$user->facebook}}"  target="_blank"><i class="fab fa-facebook"></i></a>
                                            @endif
                                            @if(!$user->linkedin == '')

                                                    <a href="{{$user->linkedin}}" target="_blank"><i class="fab fa-linkedin"></i></a>
                                            @endif
                                            @if(!$user->link == '')

                                                    <a href="{{$user->link}}" target="_blank"><i class="fas fa-link"></i></a>
                                            @endif
                                        </div>

                                </div>
                            </div>

                        </div><!--/col-3-->      

                        <div class="col-sm-9 header-margin">


                            <div class="tab-content ">
                                <div class="tab-pane active" id="home">
                                    @if(Session::has('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{ Session::get('success') }}
                                        </div>
                                    @endif
                                    <hr>
                                    <form class="form" action="{{route('profile.update', Auth::user()->id)}}" method="post" id="registrationForm" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">





                                            <div class="col-xs-6" align="{{__('messages.align')}}">
                                                <label for="first_name"><h4>{{__('messages.Name')}}</h4></label>
                                                <input type="text" value="{{$user->name}}" class="form-control form-control-lg" name="name" id="first_name" placeholder="{{__('messages.Name')}}" title="enter your first name if any.">
                                                @error('name')
                                                <span class="text-danger">{{$message}} </span>
                                                @enderror
                                            </div>
                                        </div>





                                        <div class="form-group" align="{{__('messages.align')}}">
                                            <div class="col-xs-6">
                                                <label for="mobile"><h4>{{__('messages.Mobile')}}</h4></label>
                                                <input type="text" value="{{$user->mobile}}" class="form-control form-control-lg" name="mobile" id="mobile" placeholder="{{__('messages.Mobile')}}" title="enter your mobile number if any.">
                                                @error('mobile')
                                                <span class="text-danger">{{$message}} </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group" align="{{__('messages.align')}}">
                                            <div class="col-xs-6">
                                                <label for="mobile"><h4>{{__('messages.Job title')}}</h4></label>
                                                <input type="text" value="{{$user->job_title}}" class="form-control form-control-lg" name="job_title" id="mobile" placeholder="{{__('messages.Job title')}}" title="enter your job title if any.">
                                                @error('mobile')
                                                <span class="text-danger">{{$message}} </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group" align="{{__('messages.align')}}">

                                            <div class="col-xs-6">
                                                <label for="email"><h4>{{__('messages.Email')}}</h4></label>
                                                <input type="email" value="{{$user->email}}" class="form-control form-control-lg" name="email" id="email" placeholder="{{__('messages.Email')}}" title="enter your email.">
                                                @error('email')
                                                <span class="text-danger">{{$message}} </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group" align="{{__('messages.align')}}">

                                            <div class="col-xs-6">
                                                <label for="email"><h4>{{__('messages.based_location')}}</h4></label>
                                                <input type="text" value="{{$user->location}}" name="location" class="form-control form-control-lg" id="location" placeholder="{{__('messages.based_location')}}" title="enter a location">
                                                @error('location')
                                                <span class="text-danger">{{$message}} </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group" align="{{__('messages.align')}}">

                                            <div class="col-xs-6">
                                                <label for="email"><h4>{{__('messages.Facebook')}}</h4></label>
                                                <input type="text" value="{{$user->facebook}}" name="facebook" class="form-control form-control-lg" id="location" placeholder="{{__('messages.Facebook')}}" title="enter a location">

                                            </div>
                                        </div>
                                        <div class="form-group" align="{{__('messages.align')}}">

                                            <div class="col-xs-6">
                                                <label for="email"><h4>{{__('messages.Twitter')}}</h4></label>
                                                <input type="text" value="{{$user->twitter}}" name="twitter" class="form-control form-control-lg" id="location" placeholder="{{__('messages.Twitter')}}" title="enter a location">

                                            </div>
                                        </div>

                                        <div class="form-group" align="{{__('messages.align')}}">

                                            <div class="col-xs-6">
                                                <label for="email"><h4>{{__('messages.linkedin')}}</h4></label>
                                                <input type="text" value="{{$user->linkedin}}" name="linkedin" class="form-control form-control-lg" id="location" placeholder="{{__('messages.linkedin')}}" title="enter a location">

                                          
                                            </div>
                                        </div>

                                        <div class="form-group" align="{{__('messages.align')}}">

                                            <div class="col-xs-6">
                                                <label for="email"><h4>{{__('messages.Website')}}</h4></label>
                                                <input type="text" value="{{$user->link}}" name="link" class="form-control form-control-lg" id="location" placeholder="{{__('messages.Website')}}" title="enter a location">

                                            </div>
                                        </div>
                                        {{-- <div class="form-group pull-{{__('messages.align')}}" align="{{__('messages.align')}}">
                                            <label for="exampleFormControlSelect1">{{__('messages.Type')}}: </label>
                                            <br>
                    
                    
                                            {{-- <select class="form-control" name="type" align="{{__('messages.align')}}" >
                    
                                                <optgroup label="Choose type">
                                                    @if($user->type == "Jobseeker")
                                                        <option value="Jobseeker" selected="selected">Jobseeker</option>
                                                        <option value="Company" class="pull-{{__('messages.align')}}">Company</option>

                                                    @else
                                                        <option value="Jobseeker">Jobseeker</option>

                                                        <option value="Company" selected="selected" class="pull-{{__('messages.align')}}">Company</option>
                                                    @endif
                                                </optgroup>
                    
                                            </select> 
                                            <br>
               
                                        </div> --}}
                                        {{-- <br>
                                        <br><br><br> --}}
                                        <div class="form-group" align="{{__('messages.align')}}">
                                            <div class="col-xs-6">
                                                <label  ><h4>{{__('messages.Desc')}}: </h4></label>
                                                <textarea value="" name="user_desc" class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="5">{{$user->user_desc}}</textarea>
                                            
                                            </div>
                                        </div>
                                        <div class="form-group" align="{{__('messages.align')}}">

                                            @if($user->type == "Company") 

                                            @else

                                                @if(!$user->cv == null)

                                                    <div class="col-xs-6">
                                                    <a class="btn btn-lg btn-success" href="{{asset('storage/app/public/'.$user->cv)}}" download>{{__('messages.Download my CV')}}</a>
                                                    </div>
                                                @else
                                                    @if($user->type == "Company") 
                                                
                                                    @else
                                                    <div class="col-xs-6">
                                                        <h3>{{__('messages.if you uploaded your cv it will show up here')}}</h3>
                                                    </div>

                                                    @endif
                                                @endif
                                            @endif

                                        </div>
                                   


                                        <div class="form-group" align="{{__('messages.align')}}">
                                            <div class="col-xs-12">
                                                <br>
                                                <button class="btn btn-lg btn-success" type="submit">{{__('messages.save')}}</button>

                                            </div>
                                        </div>
                                    </form>
                                    <hr>

                                </div>
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
                  
                    </div><!--/col-9-->
                </div><!--/row-->
                    </div>
                </div>

                


    </section>

@endsection


