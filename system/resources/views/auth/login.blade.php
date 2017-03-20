@extends('layouts.app')

@section('content')
<div class="container user-form">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="panel panel-default get-form">
                <div class="panel-heading"><h4>Login</h4></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                                <div class="login-with">
                                    <h1 class="or-login">OR</h1>
                                    <a href="{{ url('social/login/redirect/facebook') }}" class="btn btn-default is-facebook"><span class="fa fa-facebook"></span> Login with Facebook</a>
                                    <a href="{{ url('social/login/redirect/github') }}" class="btn btn-default is-github"><span class="fa fa-github"></span> Login with Github</a>
                                    <a href="{{ url('social/login/redirect/google') }}" class="btn btn-default is-google"><span class="fa fa-google"></span> Login with Google</a>
                                    <a href="{{ url('social/login/redirect/linkedin') }}" class="btn btn-default is-linedin"><span class="fa fa-linkedin"></span> Login with Linkedin</a>
                                    <a href="{{ url('social/login/redirect/twitter') }}" class="btn btn-default is-twitter"><span class="fa fa-twitter"></span> Login with Twitter</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
