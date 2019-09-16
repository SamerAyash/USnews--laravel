@extends('master_layout.master')
@section('content')
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Login Section Start -->
        <div class="login--section pd--100-0 bg--overlay" data-bg-img="img/login-img/bg.jpg">
            <div class="container">
                <!-- Login Form Start -->
                <div class="login--form">
                    <div class="title">
                        <h1 class="h1">Login</h1>
                        <p>Login into account by fillup the below form</p>
                    </div>

                    <form  action="{{ route('login') }}"  method="POST" data-form="validate">
                        @csrf
                        <div class="form-group">
                            <label>
                                <span>Username or Email Address</span>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </label>
                        </div>

                        <div class="form-group">
                            <label>
                                <span>Password</span>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span>Remember me</span>
                            </label>
                        </div>

                        <button type="submit" class="btn btn-lg btn-block btn-primary">Log in</button>

                        <p class="help-block clearfix">
                            <a href="{{ route('password.request') }}" class="btn-link pull-left">Forgot Username or Password?</a>
                            <a href="{{route('register')}}" class="btn-link pull-right">Create An Account</a>
                        </p>
                    </form>
                </div>
                <!-- Login Form End -->
            </div>
        </div>
        <!-- Login Section End -->
    </div>
    @endsection