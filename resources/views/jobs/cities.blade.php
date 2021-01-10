@extends('layouts.site')

@section('content')

    <section class="site-section services-section  block__62849 header-margin" id="next-section">
        <div class="container">

            <div class="row">

                @if(@isset($cities) && $cities->count() > 0)
                      @foreach($cities as $city)


                        <div class="col-md-4 mb-5 mt-3">

                            <a href="{{route('browse.city.jobs',$city->region)}}" class="text-center d-block">
                                <span class="fa fa-map-marker fa-2x text-primary"  ><span class="icon-magnet d-block"></span></span>
                                <h3>{{$city->region}}</h3>
                                <p>Continually brand virtual best practices with customer directed opportunities. Intrinsicly synergize top-line.</p>

                            </a>

                        </div>

                      @endforeach
                @endif

            </div>
        </div>
    </section>




@endsection



