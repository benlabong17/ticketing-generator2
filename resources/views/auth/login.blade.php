@extends('layouts.login')

@section('title', 'LOGIN')

@section('styles')
@include('layouts.styles.form')
@endsection

@section('form')
<form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group row">
        <div class="col-xs-12">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-12">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
    </div>

    <div class="form-group text-center m-t-20">
        <div class="col-xs-12">
            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>

            @if (Route::has('password.request'))

            @endif
        </div>
    </div>

    <div class="form-group m-t-30 m-b-0">
        <div class="col-sm-7">
            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif
        </div>
        <div class="col-sm-5 text-right">
            <a href="{{ route('register') }}" class="text-muted">Create an account</a>
        </div>
    </div>
</form>
@endsection

@section('scripts')
@include('layouts.scripts.form')
@endsection