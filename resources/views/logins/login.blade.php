@extends('layouts.site')



@section('content')





    <main class="login-body">
        <!-- Login Admin -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="login-form">
                <!-- logo-login -->
                <div class="logo-login">
                    <a href="{{route('home')}}"><img src="assets/img/logo/loder.png" alt=""></a>
                </div>
                <h2>Login Here</h2>
                <div class="form-input">
                    <label for="name">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-input">
                    <label for="name">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-input pt-30">
                    <input type="submit" name="submit" value="login">
                </div>

                <!-- Forget Password -->

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
            @endif
                <!-- Forget Password -->
                <a href="{{url('register')}}" class="registration">Registration</a>
            </div>
        </form>
        <!-- /end login form -->
    </main>
@endsection


