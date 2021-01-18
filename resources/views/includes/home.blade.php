@extends('layouts.site')

@section('content')

    <!-- Hero Area Start-->
    <div class="slider-area">
        <div class="single-slider slider-height d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9">
                        <!-- Hero Caption -->
                        <div class="hero__caption">
                            <h1>Find your dream job.</h1>
                            <p>The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes. Placeholder text commonly used.</p>
                        </div>
                    </div>
                    <div class="col-xl-11 col-lg-12">
                        <!--Hero form -->
                        <form action="{{route('search')}}" method="GET" class="search-box">
                            <div class="input-form">
                                <input type="text" name="keyword" placeholder="Job title or keywords">
                                <!-- icon -->
                                <div class="icon">
                                    <i class="fas fa-pencil-alt"></i>
                                </div>

                            </div>

                            <div class="input-form2">
                                <input type="text"  name="state" placeholder="Where?">
                                <!-- icon -->
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="select-form">
                                <div class="select-itms">
                                    <select name="selectCate" id="select1">

                                        @foreach($getAllCats as $getAllCat)

                                          <option value="{{$getAllCat->name}}">{{$getAllCat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="">
                                <button class="btn btn-success" type="submit">perform  search</button>

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
                        <div class="popular-search text-center pt-30">

                            <ul>
                                <li><p>Popular search:</p></li>
                                @foreach($getSeaches as $getSearch)
                                <li><a href="{{route('browse.jobs.jobtitle', $getSearch->keyword)}}">#{{$getSearch->keyword}}</a></li>
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
                        <h2>Browse from over <span style="color:#367FFF ;"> 2000+</span> jobs</h2>
                        <p>The automated process starts as soon as your clothes go into the machine. The outcome is
                            gleaming clothes. Placeholder text commonly used.</p>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-12">
                <div>

                    @if(isset($randomJobs) && $randomJobs->count() > 0)
                        @foreach($randomJobs as $job)
                            <ul class="job-listings mb-5">
                                <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">

                                    <div class="job-listing-logo">

                                        <a href="{{route('browse.one.job', $job->id)}}"> <img src="{{asset('storage/'. $job->image)}}" alt="Image" class="img-thumbnail w-70 h-70 category-img"></a>
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
                        <div>none</div>
                    @endif


                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Our Services End -->
    <!--? About Area Start-->
    <section class="about-area fix">
        <!--Right Contents  -->
        <div class="about-img">
            <div class="info-man text-center">
                <div class="head-cap">
                    <h3>89027+</h3>
                </div>
                <p>Talented waiting for hire</p>
            </div>
        </div>
        <!-- left Contents -->
        <div class="about-details">
            <div class="right-caption">
                <!-- Section Tittle -->
                <div class="section-tittle mb-20">
                    <h2>Want to hire perfect person?</h2>
                </div>
                <div class="about-more">
                    <p class="mb-45 pera-bottom">The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes. Placeholder text commonly used. In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying.</p>
{{--                    <a href="#" class="btn">Browse Talents</a>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End-->
    <!--? Top Jobs Start -->
    <section class="top-jobs  section-padding40 fix">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-7 col-md-9">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <h2>Browse top jobs</h2>
                        <p>The automated process starts as soon as your clothes go into the machine. The outcome is
                            gleaming clothes. Placeholder text commonly used.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-md-12">
                    @if(isset($randomTopJobs) && $randomTopJobs->count() > 0)
                        @foreach($randomTopJobs as $job)
                            <ul class="job-listings mb-5">
                                <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">

                                    <div class="job-listing-logo">

                                        <a href="{{route('browse.one.job', $job->id)}}"> <img src="{{asset('storage/'. $job->image)}}" alt="Image" class="img-thumbnail w-70 h-70 category-img"></a>
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
                        <div>none</div>
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
{{--    <section class="wantToWork-area">--}}
{{--        <div class="container">--}}
{{--            <div class="wants-wrapper w-padding2">--}}
{{--                <div class="row align-items-center justify-content-between">--}}
{{--                    <div class="col-xl-7 col-lg-9 col-md-8">--}}
{{--                        <div class="wantToWork-caption wantToWork-caption2">--}}
{{--                            <h2>Start finding your dream job</h2>--}}
{{--                            <p>The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes placeholder text commonly used.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-xl-2 col-lg-3 ">--}}
{{--                        <a href="#" class="btn f-right wantToWork-btn">Browse Job</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Want To work End -->

@endsection
