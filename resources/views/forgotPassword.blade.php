@extends('layout')
@section('content')
<div class="vh-100 d-flex align-items-center mx-0">
    <div class="flex-column flex-md-row h-100 w-100 d-flex">
        <div class="w-100 w-md-50 d-flex align-items-center justify-content-center px-3 px-md-5 mt-5 mt-md-0">
            <div class="login-container p-4 border rounded shadow py-5 w-100 w-md-50" style="width: fit-content;">
                <h2 class="text-center mb-4" style="color: var(--fresh-green); font-weight: bold;">{{ app()->config['app.name'] }}</h2>
                <form class="login-form">
                    <div class="mb-2">
                        <input type="email" class="form-control" id="email" placeholder="Email" required="">
                    </div>
                    <button type="submit" class="btn btn-success btn-block w-100 mb-2">Reset Password</button>
                </form>
                <div class="text-center mt-3">
                    <a href="{{route('login')}}" class="text-primary">Remember your password? Login</a>
                </div>
            </div>
        </div>
        <div class="w-100 w-md-50 image-container h-100 mt-4 mt-md-0">
            
        </div>
    </div>
</div>


@endsection