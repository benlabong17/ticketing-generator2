@extends('layouts.login')

@section('title', 'LOGIN')

@section('styles')
@include('layouts.styles.form')
@endsection

@section('form')
<form class="form-horizontal m-t-20" method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group">
        <div class="col-xs-12">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="username">

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-12">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-12">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-12">
            <div class="checkbox checkbox-primary">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="confirm password">
            </div>

        </div>
    </div>

    <div class="form-group text-center m-t-20">
        <div class="col-xs-12">
            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">{{ __('Register') }}</button>
        </div>
    </div>

    <div class="form-group m-t-30 m-b-0">
        <div class="col-sm-12 text-center">
            <a href="{{ route('login') }}" class="text-muted">Already have an account</a>
        </div>
    </div>
</form>
@endsection

@section('scripts')
@include('layouts.scripts.form')
@endsection