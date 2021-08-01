@extends('layouts.site')


@section('title')
    My Jobs


@endsection
@section('content')
    <section class="site-section" id="next">

        <div class="container bootstrap snippet header-margin">

            <div class="row">
                <div class="col-md-12">
                    @if(isset($applications) AND  $applications->count() > 0)
                      @foreach($applications as $apps)
                        <div class="bg-light p-3 border rounded d-block mb-4">

                            <ul class="list-unstyled pl-3 mb-0" align="{{__('messages.align')}}">

                                <li class="mb-2" align="{{__('messages.align')}}">
                                    <a class="" align="{{__('messages.align')}}" style="color: #3B74FF;" href="{{ route('profile.for.public',$apps->applicant_id)}}">{{ $apps->from_user }} </a>
                                   {{ __('messages.Sent you') }}                                                    
                                     <a class="" align="{{__('messages.align')}}" style="color: #3B74FF;" href="{{asset('storage/app/public/'.$apps->cv_user)}}" download>{{__('messages.An Application')}}</a>
                                    {{ __('messages.For') }} 
                                    <a class="" align="{{__('messages.align')}}" style="color: #3B74FF;" href="{{ route('browse.one.job', $apps->job_id_email) }}">
                                        {{ $apps->jobtitle }}</a>
                                </li>

                            </ul>

                        </div>
                        @endforeach
                    @else
                    <div class="alert alert-danger" align="{{__('messages.align')}}">
                        {{__("messages.Your jobs don't have any applications yet")}}

                    </div>
                      
                    @endif    
                </div>
            </div>
        </div>
    </section>
@endsection