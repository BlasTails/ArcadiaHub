@extends('layouts.app')
@section('content')
<header class="masthead">
    <div class="container">

        <div class="container d-flex h-100 align-items-center">

            <div class="mx-auto text-center">

                <div class="containerform" style="background-color:rgba(255, 255, 255, .9)">

                    <h1>{{ __('Login') }}</h1>
                    <p>Please Login in with your email and password</p>
                    <hr>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif

                            <label for="password">{{ __('Password') }}</label>
                            <input style="padding-top:8px;padding-bottom:9.600px;padding-right:0;padding-left:0"id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password">
                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('pas  sword') }}</strong>
                            </span>
                            @endif

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>



                            <div class="col-md-4 offset-md-4" style="padding-top:25px">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            @if (Route::has('password.request'))

                            <div class="col-md-4 offset-md-4" style="padding-top:25px">
                                <a  href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>

                            @endif

                        </form>
                    </div>

                </div>

            </div>

        </div>




    </div>
</header>
<!-- Footer  -->
<footer class="bg-black small text-center text-white-50">
    <div class="container">
        Copyright &copy; Your Website 2019
    </div>
</footer>
@endsection
