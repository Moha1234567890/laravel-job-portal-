@extends('layouts.site')


@section('title')
    Browse Jobs by Categories
@endsection
@section('content')

    <section class="site-section services-section  block__62849 header-margin"  id="next-section">
        <div class="container">

            <div class="row">

                @if(isset($cats) && $cats->count() > 0)
                    @foreach($cats as $cat)
                <div class=" col-md-4 ">

                    <a href="{{route('browse.category.jobs',$cat->name)}}" class="text-center d-block">
                        <span class="fa fa-{{$cat->font}} fa-2x text-primary"  ><span class="icon-magnet d-block"></span></span>
                        <h3>{{$cat->name}}</h3>
                        <p>{{$cat->cat_desc}}</p>
                    </a>

                </div>
                    @endforeach
                    @endif


            </div>
        </div>
    </section>




@endsection



