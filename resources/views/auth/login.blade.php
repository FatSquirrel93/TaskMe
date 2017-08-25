@extends('layouts.auth')

@section('content')
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-8 col-md-offset-2">--}}
    {{--<div class="panel panel-default">--}}
    {{--<div class="panel-heading">Login</div>--}}
    {{--<div class="panel-body">--}}
    {{--<form class="form-horizontal" method="POST" action="{{ route('login') }}">--}}
    {{--{{ csrf_field() }}--}}

    {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
    {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>--}}

    {{--@if ($errors->has('email'))--}}
    {{--<span class="help-block">--}}
    {{--<strong>{{ $errors->first('email') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
    {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="password" type="password" class="form-control" name="password" required>--}}

    {{--@if ($errors->has('password'))--}}
    {{--<span class="help-block">--}}
    {{--<strong>{{ $errors->first('password') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
    {{--<div class="col-md-6 col-md-offset-4">--}}
    {{--<div class="checkbox">--}}
    {{--<label>--}}
    {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
    {{--</label>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
    {{--<div class="col-md-8 col-md-offset-4">--}}
    {{--<button type="submit" class="btn btn-primary">--}}
    {{--Login--}}
    {{--</button>--}}

    {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
    {{--Forgot Your Password?--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card-group mb-0">
                    <div class="card p-4">
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <h1>Login</h1>
                                <p class="text-muted">Sign In to your account</p>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif

                                <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="icon-user"></i>
                                </span>
                                    <input type="text" class="form-control" placeholder="Username" name="name"
                                           value="{{ old('name') }}" required autofocus>
                                </div>
                                <div class="input-group mb-4">
                                <span class="input-group-addon"><i class="icon-lock"></i>
                                </span>
                                    <input type="password" class="form-control" name="password" required
                                           placeholder="Password">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary px-4">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
