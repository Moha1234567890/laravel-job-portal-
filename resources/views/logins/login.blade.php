@extends('layouts.site')



@section('content')





    <main class="login-body main">
        <!-- Login Admin -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="login-form">
                <!-- logo-login -->
                <div class="logo-login">
                    <a href="{{route('home')}}"><img src="{{asset('assets/img/logo/loder.png')}}" alt=""></a>
                </div>
                <h2>{{__('messages.Log in')}}</h2>
                <div class="form-input" align="{{__('messages.align')}}">
                    <label for="name">{{__('messages.EmailP')}}</label>
                    <input id="email" placeholder="{{__('messages.EmailP')}}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-input" align="{{__('messages.align')}}">
                    <label for="name">{{__('messages.Password')}}</label>
                    <input id="password" type="password" placeholder="{{__('messages.Password')}}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-input pt-30">
                    <input type="submit" name="submit" value="{{__('messages.Log in')}}">
                </div>

                <!-- Forget Password -->

                @if (Route::has('password.request'))
{{--                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot Your Password?') }}--}}
{{--                    </a>--}}

            @endif
                <a href="{{route('register')}}" class="registration">{{__('messages.Registration')}}</a>

                <!-- Forget Password -->
            </div>
        </form>
        <!-- /end login form -->
    </main>
@endsection


