@extends('auth.default')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card mx-4">
            <div class="card-body p-4">
                <h1>Register</h1>
                <p class="text-muted">Create your account</p>
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    <div class="input-group mb-3">
                        <span class="input-group-addon"><i class="icon-user"></i>
                        </span>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus id="name" placeholder="Your name">
                    </div>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <div class="input-group mb-3">
                        <span class="input-group-addon">@</span>
                        <input type="text" class="form-control" placeholder="Email" id="email" name="email" value="{{ old('email') }}" required>
                    </div>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <div class="input-group mb-3">
                        <span class="input-group-addon"><i class="icon-lock"></i>
                        </span>
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-addon"><i class="icon-lock"></i>
                        </span>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Repeat password">
                    </div>

                    <button type="submit" class="btn btn-block btn-success">Create Account</button>
                </form>
            </div>
            <!--
            <div class="card-footer p-4">
                <div class="row">
                    <div class="col-6">
                        <button class="btn btn-block btn-facebook" type="button">
                            <span>facebook</span>
                        </button>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-block btn-twitter" type="button">
                            <span>twitter</span>
                        </button>
                    </div>
                </div>
            </div>
            -->
        </div>
    </div>
</div>

@endsection
