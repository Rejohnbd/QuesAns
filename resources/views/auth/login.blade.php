@extends('layouts.login')

@section('title', 'Login')

@section('content')
<div class="card-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="input-group mb-3">
            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="email">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
            @error('email')
            <div class="invalid-feedback disblock">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input-group mb-3">
            <input type="password" name="password" required autocomplete="current-password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
            @error('password')
            <div class="invalid-feedback disblock">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="row">
            <div class="col-8">
                <div class="icheck-primary">
                    <input type="checkbox" id="remember">
                    <label for="remember">
                        Remember Me
                    </label>
                </div>
            </div>
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
        </div>
    </form>
    {{-- <p class="mb-1">
        <a href="{{ route('password.request') }}">I forgot my password</a>
    </p> --}}
    <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
    </p>
</div>
@endsection