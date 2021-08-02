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


             <div class="col-md-8">
            <form action="{{route('search')}}" method="POST">
                @csrf
                <h3>Search</h3>
                <div class="form-group pb-3">
                    <input type="text" name="mykeyword" class="form-control" value="{{ old('keyword', $selected_keyword) }}" placeholder="Search word here">
                </div>

                <div class="pb-3">
                    <h3>ex</h3>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="ex" value="ex_1_3"> 1 - 3
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="ex" value="ex_3_6"> 3 - 6
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="ex" value="ex_6_9"> 6 - 9
                        </label>
                    </div>
                    {{-- <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="price" value="price_3001_5000"> 9+
                        </label>
                    </div> --}}
                </div>

                <div class="pb-3">
                    <h3>Category</h3>
                    @foreach($categories as $category)
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="category" value="{{ $category->id }}" {{ isset($selected_category) && $selected_category == $category->id ? 'checked' : '' }}> {{ $category->name }}
                            </label>
                        </div>
                    @endforeach
                </div>

                {{-- <div class="pb-3">
                    <h3>Tags</h3>
                    @foreach($tags as $tag)
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="tags[]" value="{{ $tag->id }}" {{ isset($selected_tags) && in_array($tag->id, $selected_tags) ? 'checked' : '' }}> {{ $tag->name }}
                            </label>
                        </div>
                    @endforeach
                </div> --}} 
             



                <div class="form-group pb-3">
                    <button type="submit" class="btn btn-primary btn-block">Search</button>

                    <a href="" class="btn btn-danger btn-block">Reset</a>
                </div>
            </form>
            </div>
            </div>


           

        </div>
        </div>
    </section>

@endsection


