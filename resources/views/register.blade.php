@extends('layout')
@section('content')
<div class="vh-100 d-flex align-items-center mx-0">
    <div class="flex-column flex-md-row h-100 w-100 d-flex">
        <div class="w-100 w-md-50 d-flex align-items-center justify-content-center px-3 px-md-5 mt-5 mt-md-0">
            <div class="login-container p-4 border rounded shadow py-5 w-100 w-md-50" style="width: fit-content;">
                <h2 class="text-center mb-4" style="color: var(--fresh-green); font-weight: bold;">{{ app()->config['app.name'] }}</h2>
                <form class="login-form">
                    <div class="mb-2">
                        <input type="text" class="form-control" id="name" placeholder="Name" required="">
                    </div>
                    <div class="mb-2">
                        <input type="email" class="form-control" id="email" placeholder="Email" required="">
                    </div>
                    <div class="mb-3">
                        <label for="dietary_preference" class="form-label">Dietary Preference:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="dietary_preference" id="vegetarian" value="Vegetarian">
                            <label class="form-check-label" for="vegetarian">Vegetarian</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="dietary_preference" id="vegan" value="Vegan">
                            <label class="form-check-label" for="vegan">Vegan</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="dietary_preference" id="pescatarian" value="Pescatarian">
                            <label class="form-check-label" for="pescatarian">Pescatarian</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="health_goal" class="form-label">Health Goal:</label>
                        <select class="form-select" id="health_goal" required="">
                            <option value="" disabled selected>Select Health Goal</option>
                            <option value="Weight loss">Weight loss</option>
                            <option value="General health improvement">General health improvement</option>
                            <option value="Muscle building">Muscle building</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <input type="password" class="form-control" id="password" placeholder="Password" required="">
                    </div>
                    <div class="mb-2">
                        <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" required="">
                    </div>
                    <button type="submit" class="btn btn-success btn-block w-100 mb-2">Register</button>
                </form>
                <div class="text-center mt-3">
                    <a href="{{route('login')}}" class="text-primary">Already have an account? Login</a>
                </div>
            </div>
        </div>
        <div class="w-100 w-md-50 image-container h-100 mt-4 mt-md-0">
            
        </div>
    </div>
</div>


@endsection