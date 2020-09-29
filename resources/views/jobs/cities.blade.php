@extends('layouts.site')

@section('content')

    <section class="site-section services-section  block__62849" style="margin-top: 152px;" id="next-section">
        <div class="container">

            <div class="row">

                @if(@isset($cities) && $cities->count() > 0)
                      @foreach($cities as $city)
                        <div class="col-md-4" >
                            <div class="alert alert-primary text-center text-capitalize bg-primary" role="alert">

                                <a href="{{route('browse.city.jobs', $city->region)}}" class=" text-light nounderline text-decoration-none">
                                    <i class="fa fa-bookmark">
                                        {{$city->region}}
                                    </i>
                                </a>
                            </div>
                        </div>

                      @endforeach
                @endif

            </div>
        </div>
    </section>




@endsection



