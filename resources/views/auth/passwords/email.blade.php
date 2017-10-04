@extends('auth.default')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card-group mb-0">
            <div class="card p-4">
                <div class="card-body">
                    <h1>Reset Password</h1>
                    <p class="text-muted">Sign In to your account</p>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        @if ($errors->has('email'))
                            <p class="form-text text-danger">
                                <strong>{{ $errors->first('email') }}</strong>
                            </p>
                        @endif                        
                        <div class="input-group mb-3">
                            <span class="input-group-addon">@</span>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary px-4">Send Password Reset Link</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
