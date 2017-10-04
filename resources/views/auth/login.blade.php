@extends('auth.default')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card-group mb-0">
            <div class="card p-4">
                <div class="card-body">
                    <h1>Login</h1>
                    <p class="text-muted">Sign In to your account</p>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        @if ($errors->has('email'))
                            <p class="form-text text-danger">
                                <strong>{{ $errors->first('email') }}</strong>
                            </p>
                        @endif                        
                        <div class="input-group mb-3">
<<<<<<< HEAD
                            <span class="input-group-addon"><i class="icon-user"></i>
                            </span>
=======
                            <span class="input-group-addon">@</span>
>>>>>>> 4243bb25a44e381be25109f4ffa28fecdb408ee3
                            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-addon"><i class="icon-lock"></i>
                            </span>
                            <input type="password" class="form-control" id="password" name="password" required  placeholder="Password">
                        </div>
                        @if ($errors->has('password'))
                            <p class="form-text text-danger">
                                <strong>{{ $errors->first('password') }}</strong>
                            </p>
                        @endif
                        <div class="input-group mb-4">
                            <label class="form-check-label">
                              <input type="checkbox" name="remember" class="form-check-input" {{ old('remember') ? 'checked' : '' }}>
                              Remember me
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary px-4">Login</button>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{ route('password.request') }}" class="btn btn-link px-0">Forgot password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                <div class="card-body text-center">
                    <div>
                        <h2>Sign up</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="btn btn-primary active mt-3">Register Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
