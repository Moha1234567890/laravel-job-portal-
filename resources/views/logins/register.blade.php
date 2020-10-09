@extends('layouts.site')



@section('content')





    <main class="login-body" >
        <!-- Login Admin -->
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="login-form" >
                <!-- logo-login -->
                <div class="logo-login">
                    <a href="{{route('home')}}"><img src="assets/img/logo/loder.png" alt=""></a>
                </div>
                <h2>Registration Here</h2>

                <div class="form-input">
                    <label for="name">Full name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-input">
                    <label for="name">Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-input">
                    <label for="name">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-input">
                    <label for="name">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="form-input pt-30">
                    <input type="submit" name="submit" value="Registration">
                </div>
                <!-- Forget Password -->
                <a href="{{route('login')}}" class="registration">login</a>
            </div>
        </form>
        <!-- /end login form -->
    </main>
@endsection


