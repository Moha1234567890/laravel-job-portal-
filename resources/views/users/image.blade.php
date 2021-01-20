@extends('layouts.site')

@section('content')
    <section class="site-section" id="next">

        <div class="container bootstrap snippet">

            <div class="row">
                <div class="col-md-3 header-margin text-center"><!--left col-->


                    <form class="form" action="{{route('profile.update.image', Auth::user()->id)}}" method="post" id="registrationForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group text-center">

                            <img src="{{asset('storage/'.$user->image)}}" class="w-100 h-70">
                            <label for="first_name"><h4>{{__('messages.Update Profile Picture')}}</h4></label>

                            <input type="file" class="text-center center-block file-upload d-block mb-3" name="image">
                            @error('image')
                            <span class="text-danger">{{$message}} </span>
                            @enderror


                        </div>



                        <div class="form-group">
                            <button class="btn btn-lg btn-success" type="submit">{{__('messages.Update')}}</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection