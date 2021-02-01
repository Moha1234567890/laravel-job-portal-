@extends('layouts.site')


@section('title')
    Register
@endsection

@section('content')





    <main class="login-body ">
        <!-- Login Admin -->
        <form class='main' method="POST" action="{{ route('register') }}">
            @csrf

            <div class="login-form main" >
                <!-- logo-login -->
                <div class="logo-login">
                    <a href="{{route('home')}}"><img src="{{asset('assets/img/logo/loder.png')}}" alt=""></a>
                </div>
                <h2>{{__('messages.Registration')}}</h2>

                <div class="form-input" align="{{__('messages.align')}}">
                    <label for="name">{{__('messages.Name')}}</label>
                    <input id="name" placeholder="{{__('messages.Name')}}" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-input" align="{{__('messages.align')}}">
                    <label for="name">{{__('messages.EmailP')}}</label>
                    <input id="email" placeholder="{{__('messages.EmailP')}}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-input" align="{{__('messages.align')}}">
                    <label for="name">{{__('messages.Password')}}</label>
                    <input id="password" placeholder="{{__('messages.Password')}}" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-input" align="{{__('messages.align')}}">
                    <label for="name">{{__('messages.Confirm Password')}}</label>
                    <input id="password-confirm" placeholder="{{__('messages.Confirm Password')}}" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="form-input pt-30">
                    <input type="submit" name="submit" value="{{__('messages.Registration')}}">
                </div>
                <!-- Forget Password -->
                <a href="{{route('login')}}" class="registration">{{__('messages.Log in')}}</a>
            </div>
        </form>
        <!-- /end login form -->
    </main>
@endsection


