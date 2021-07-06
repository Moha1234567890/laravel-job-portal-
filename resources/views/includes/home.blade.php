@extends('layouts.site')

@section('title')
    Home
@endsection

@section('content')

    <!-- Hero Area Start-->
    <div class="slider-area">
        <div class="single-slider slider-height d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9">
                        <!-- Hero Caption -->
                        <div class="hero__caption">
                            <h1>{{__('messages.Find your dream job.')}}</h1>
                            <p>{{__('messages.The automated')}}</p>
                        </div>
                    </div>
                    <div class="col-xl-11 col-lg-12">
                        <!--Hero form -->
                        <form action="{{route('search')}}" method="GET" class="search-box">
                            <div class="input-form2">
                                <input type="text" name="keyword" placeholder="{{__('messages.Job title or keywords')}}">
                                <!-- icon -->
                                <div class="icon">
                                    <i class="fas fa-pencil-alt"></i>
                                </div>

                            </div>

                            <div class="input-form2">
                                <input type="text"  name="state" placeholder="{{__('messages.Where?')}}">
                                <!-- icon -->
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="select-form pull-{{__('messages.align')}}">
                                <div class="select-itms">
                                    <select name="selectCate" id="select1">

                                        @foreach($getAllCats as $getAllCat)

                                          <option value="{{$getAllCat->name}}">{{$getAllCat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="">
                                <button class="btn btn-success btn-height" type="submit">{{__('messages.perform  search')}}</button>

                            </div>
                        </form>
                        @error('keyword')
                        <span class="text-danger">{{$message}} </span>
                        @enderror

                        @error('state')
                        <span class="text-danger">{{$message}} </span>
                        @enderror

                        @error('selectCate')
                        <span class="text-danger">{{$message}} </span>
                        @enderror


                    </div>

                    <div class="col-lg-12">
                        <div class="popular-search text-center pt-30" align="{{__('messages.align')}}">

                            <ul>
                                <li><p>{{__('messages.Popular search')}}:</p></li>
                                @foreach($getSeaches as $getSearch)
                                <li><a href="{{route('browse.jobs.jobtitle', $getSearch->keyword)}}">{{$getSearch->keyword}}</a></li>
                               @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--Hero Area End-->
    <!--? Brand Area Start -->
    <div class="brand-area">
        <div class="container">
            <div class="brand-active brand-border pt-50 pb-40">
                <div class="single-brand">
                    <img src="{{asset('assets/img/gallery/brand1.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('assets/img/gallery/brand2.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('assets/img/gallery/brand3.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('assets/img/gallery/brand4.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('assets/img/gallery/brand2.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('assets/img/gallery/brand5.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('assets/img/gallery/brand4.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('assets/img/gallery/brand4.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Area End -->
    <!--? Our Services Start -->
    <section class="our-services  section-padding40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <h2>{{__('messages.Browse from over')}} <span style="color:#367FFF ;"> 2000+</span> {{__('messages.jobs')}}</h2>
                        <p>{{__('messages.The automated')}}</p>
                    </div>
                </div>
            </div>
            
                
          <div class="container">
            <div class="row no-gutters">
                

                    <div class="col-md-12 mb-5">
                        @if(isset($randomJobs) && $randomJobs->count() > 0) 
                        
                            @foreach($randomJobs as $job)  
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
                        @endif
                       
                </div>
            </div>
          </div>
               
    </section>
    <!-- Our Services End -->
    <!--? About Area Start-->
    <section class="about-area fix">
        {{-- <!--Right Contents  --}}
        <div class="about-img">
            <div class="info-man text-center">
                <div class="head-cap">
                    <h3>89027+</h3>
                </div>
              
            </div>
        </div> 
        <!-- left Contents -->
        <div class="about-details">
            <div class="right-caption">
                <!-- Section Tittle -->
                <div align="{{__('messages.align')}}" class="section-tittle mb-20">
                    <h2>{{__('messages.Want to hire perfect person?')}}</h2>
                </div>
                <div class="about-more">
                    <p class="mb-45 pera-bottom">{{__('messages.The automated')}}</p>
{{--                    <a href="#" class="btn">Browse Talents</a>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End-->
    <!--? Top Jobs Start -->
    <section class="our-services  section-padding40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <h2>{{__('messages.Browse top jobs')}} </h2>
                        <p>{{__('messages.The automated')}}</p>
                    </div>
                </div>
            </div>
            
                
          <div class="container">
            <div class="row no-gutters">
                

                    <div class="col-md-12 mb-5">
                        @if(isset($randomTopJobs) && $randomTopJobs->count() > 0) 
                        
                            @foreach($randomTopJobs as $job)  
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
                        @endif
                       
                </div>
            </div>
          </div>
               
    </section>
    <!-- Top Jobs End -->
    <!--? job Post Start -->
{{--    <section class="job-post  pt-top section-bg2">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6 ">--}}
{{--                    <div class="single-features mb-40 pt-60">--}}
{{--                        <div class="job-post-banner">--}}
{{--                            <img src="{{asset('assets/img/gallery/job-pos-banner1.png')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="features-caption">--}}
{{--                            <h3>Post a job</h3>--}}
{{--                            <p>The automated process starts as soon as your clothes go into.</p>--}}
{{--                            <a href="#" class="border-btn">Post a Job</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 ">--}}
{{--                    <div class="single-features  single-features2 mb-40 pt-60">--}}
{{--                        <div class="job-post-banner">--}}
{{--                            <img src="{{asset('assets/img/gallery/job-pos-banner2.png')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="features-caption">--}}
{{--                            <h3>Browse for job</h3>--}}
{{--                            <p>The automated process starts as soon as your clothes go into.</p>--}}
{{--                            <a href="#" class="border-btn">Browse Job</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- job Post End -->
{{--    <!--? Testimonial Area Start -->--}}
{{--    <section class="about-area2 testimonial-area fix">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class=" col-lg-6 col-md-9 col-sm-9">--}}
{{--                    <div class="about-caption">--}}
{{--                        <!-- Testimonial Start -->--}}
{{--                        <div class="h1-testimonial-active dot-style">--}}
{{--                            <!-- Single Testimonial -->--}}
{{--                            <div class="single-testimonial">--}}
{{--                                <div class="testimonial-caption">--}}
{{--                                    <img src="{{asset('assets/img/icon/quotes-sign.png')}}" alt="" class="quotes-sign">--}}
{{--                                    <p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfect replica;ition of thei designers ijtls intended csents your se.</p>--}}
{{--                                </div>--}}
{{--                                <!-- founder -->--}}
{{--                                <div class="testimonial-founder d-flex align-items-center">--}}
{{--                                    <div class="founder-img">--}}
{{--                                        <img src="{{asset('assets/img/icon/Homepage_testi.png')}}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="founder-text">--}}
{{--                                        <span>Robart Brown</span>--}}
{{--                                        <p>Creative designer at Colorlib</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- Single Testimonial -->--}}
{{--                            <div class="single-testimonial">--}}
{{--                                <div class="testimonial-caption">--}}
{{--                                    <img src="{{asset('assets/img/icon/quotes-sign.png')}}" alt="" class="quotes-sign">--}}
{{--                                    <p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfect replica;ition of thei designers ijtls intended csents your se.</p>--}}
{{--                                </div>--}}
{{--                                <!-- founder -->--}}
{{--                                <div class="testimonial-founder d-flex align-items-center">--}}
{{--                                    <div class="founder-img">--}}
{{--                                        <img src="{{asset('assets/img/icon/Homepage_testi.png')}}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="founder-text">--}}
{{--                                        <span>Robart Brown</span>--}}
{{--                                        <p>Creative designer at Colorlib</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Testimonial End -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- about-img -->--}}
{{--        <div class="about-img2 pt-20">--}}
{{--            <img src="{{asset('assets/img/gallery/testimonail.png')}}" alt="">--}}
{{--        </div>--}}
{{--    </section>--}}
    <!--? Testimonial Area End -->
    <!--? Want To work 01-->
    <section class="wantToWork-area">
            <div class="container">
                <div class="wants-wrapper w-padding2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-7 col-lg-9 col-md-8">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2>{{__('messages.Find your dream job.')}}</h2>
                                <p>{{__('messages.The automated')}}</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 ">
                            <a href="#" class="btn f-right wantToWork-btn">{{__('messages.Browse Job')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    <!-- Want To work End -->

@endsection
