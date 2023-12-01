@extends('layout')
@section('content')
    <div class="vh-100 d-flex align-items-center mx-0">
        <div class="flex-column flex-md-row h-100 w-100 d-flex">
            <div
                class="w-100 w-sm-100 d-flex justify-content-center px-3 px-md-4 px-lg-5 mt-5 mt-md-0 flex-column mx-md-4 mx-lg-5 py-5">
                <div class="container p-5 border rounded shadow py-5 w-100 w-sm-100 position-relative"
                    style="width: fit-content;max-width:30em">
                    <h2 class="text-center mb-4" style="color: var(--fresh-green); font-weight: bold;">
                        {{ app()->config['app.name'] }}</h2>
                    <form class="login-form" method="POST" action="{{ route('password.email') }}">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @csrf
                        <div class="mb-2">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus id="email" placeholder="Email" autocomplete="off">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success btn-block w-100 mb-2">Reset Password</button>
                    </form>
                    <div class="text-center mt-3">
                        <a href="{{ route('login') }}" class="text-primary">Remember your password? Login</a>
                    </div>
                </div>
            </div>
            <div class="w-100 w-sm-100 w-md-30 w-lg-100 image-container h-50 mt-5 mt-md-0 h-md-100">

            </div>
        </div>
    </div>
@endsection
