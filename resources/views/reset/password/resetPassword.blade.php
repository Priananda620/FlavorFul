@extends('layout')
@section('content')
    <div class="vh-100 d-flex align-items-center mx-0">
        <div class="flex-column flex-md-row h-100 w-100 d-flex">
            <div
                class="w-100 w-md-50 d-flex align-items-center justify-content-center px-3 px-md-5 mt-5 mt-md-0 mb-5 mb-md-0 h-100">
                <div class="container p-5 border rounded shadow py-5 w-100 w-sm-100 position-relative"
                    style="width: fit-content;">
                    <h2 class="text-center mb-4" style="color: var(--fresh-green); font-weight: bold;">
                        {{ app()->config['app.name'] }}</h2>
                    <form class="login-form" method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input id="email2" class="d-none" type="email" name="email" value="{{ $email ?? old('email') }}" required>
                            <input id="email" type="email" class="border-0 display-font-color form-control @error('email') is-invalid @enderror" value="{{ $email ?? old('email') }}" required disabled>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
            
                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('New Password') }}</label>
                            <input id="password" type="password" class="display-font-color form-control @error('password') is-invalid @enderror" name="password" required autofocus>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
            
                        <div class="">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="display-font-color form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required>
                            @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
            
                        <div class="d-inline-flex align-items-center justify-content-between mt-4">
                            <button type="submit" class="btn btn-success btn-block mb-2" style="width: 100%;">{{ __('Reset Password') }}</button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <a href="{{ route('login') }}" class="text-primary">Remember your password? Login</a>
                    </div>
                </div>
            </div>
            <div class="w-100 w-md-50 image-container h-50 mt-5 mt-md-0 h-md-100">

            </div>
        </div>
    </div>
@endsection
