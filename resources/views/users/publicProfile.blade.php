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

                                    <div class="col-md-12"  >
                                        <div class="bg-light p-3 border rounded mb-4">
                                          <ul class="list-unstyled pl-3 mb-0" >
                                            @if(isset($user) && $user->count() > 0)

                                            <div class="user-heading round">
                                                {{-- <a href="#"> --}}
                                                    <ul class="list-unstyled pl-3 mb-0"  align="{{__('messages.align')}}">
                                                        <li align="{{ __('messages.align') }}">
                                                    <img   class="pic-profile" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                                                {{-- </a> --}}
                                                        </li>
                                                    </ul>
                                                <h3 align="{{ __('messages.align') }}">{{ $user->name }}</h3>
                                            </div>
                                        @endif
                                          </ul>
                                        </div>
                                    <div class="col-lg-4">
                                      <div class="bg-light p-3 border rounded mb-4">
                                        <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
                                        <ul class="list-unstyled pl-3 mb-0">
                                          <li class="mb-2"><strong class="text-black">Published on:</strong> April 14, 2019</li>
                                          <li class="mb-2"><strong class="text-black">Vacancy:</strong> 20</li>
                                          <li class="mb-2"><strong class="text-black">Employment Status:</strong> Full-time</li>
                                          <li class="mb-2"><strong class="text-black">Experience:</strong> 2 to 3 year(s)</li>
                                          <li class="mb-2"><strong class="text-black">Job Location:</strong> New ork City</li>
                                          <li class="mb-2"><strong class="text-black">Salary:</strong> $60k - $100k</li>
                                          <li class="mb-2"><strong class="text-black">Gender:</strong> Any</li>
                                          <li class="mb-2"><strong class="text-black">Application Deadline:</strong> April 28, 2019</li>
                                        </ul>
                                      </div>
                          
                                      <div class="bg-light p-3 border rounded">
                                        <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Share</h3>
                                        <div class="px-3">
                                          <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-facebook"></span></a>
                                          <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
                                          <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
                                          <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-pinterest"></span></a>
                                        </div>
                                      </div>
                          
                                    </div>
                                  </div>
                
                
        </section>
        </div>
      </div>
    </div>


  </section>

@endsection


