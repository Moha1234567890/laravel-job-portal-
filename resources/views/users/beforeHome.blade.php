@extends('layouts.site')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 header-margin">
  
            <section class="site-section" id="next">

            
                <div class="bg-light p-3 border rounded d-block mb-4">

                    <ul class="list-unstyled pl-3 mb-0" align="{{__('messages.align')}}">

                        <li class="mb-2"><strong class="text-black ">{{__('messages.Enter your cred')}}</strong></li>

                    </ul>

                </div>
                
                    

                        <form method="post"  action="{{route('store.more.info', Auth::user()->id)}}" class="form">
                            @csrf
                





                            {{-- <div class="form-group" align="{{__('messages.align')}}">
                                <label for="exampleFormControlSelect1">Example select</label>
                                <br>
                                <select align="{{__('messages.align')}}" name="type" id="job_category" class="form-control pull-{{__('messages.align')}}" id="exampleFormControlSelect1">
                                    
                                <option class="pull-{{__('messages.align')}}">1</option>
                                <option class="pull-{{__('messages.align')}}">2</option>
                        
                                </select>
                            </div> --}}
                            
                            <div class="form-group pull-{{__('messages.align')}}" align="{{__('messages.align')}}">
                                <label for="exampleFormControlSelect1">{{__('messages.Type')}}: </label>
                                <br>
        
        
                                <select class="form-control" name="type" align="{{__('messages.align')}}" >
        
                                    <optgroup label="Choose type">
                                        <option value="Jobseeker" class="pull-{{__('messages.align')}}">Jobseeker</option>
                                        <option value="Company" class="pull-{{__('messages.align')}}">Company</option>
        
                                    </optgroup>
        
                                </select>
                                <br>
    {{--     
        
                                @error('jobcategory')
                                <span class="text-danger">{{$message}} </span>
                                @enderror --}}
                            </div>
                            <br>
                            <br><br><br>
                            <div class="form-group" align="{{__('messages.align')}}">
                                <div class="col-xs-6">
                                    <label  ><h4>{{__('messages.Desc')}}</h4></label>
                                    <textarea name="user_desc" class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="12"></textarea>
                                
                                </div>
                            </div>

                            <br>


                            <div class="form-group" align="{{__('messages.align')}}">
                                <button class="btn btn-success"  type="submit">{{__('messages.Add')}}</button>
                            </div>
                        </form> 
                    

                        
                
        
        
            
        </section>
       </div>
    </div>
</div>



@endsection