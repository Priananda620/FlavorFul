@extends('layout')
@section('content')

{{-- loggedin --}}
<div class="landing-container">
    <h1 class="welcome-message">Welcome back, User!</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="text-center">
                <i class="fas fa-utensils feature-icon"></i>
                <p class="feature-text">Discover New Recipes</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="text-center">
                <i class="fas fa-calendar-week feature-icon"></i>
                <p class="feature-text">Plan Your Meals</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="text-center">
                <i class="fas fa-chart-pie feature-icon"></i>
                <p class="feature-text">Track Nutrition</p>
            </div>
        </div>
    </div>
    <div class="text-center get-started-button">
        <a href="#" class="btn btn-success">Get Started</a>
    </div>

    <div class="row mt-4">
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="recipe-card position-relative rounded">
                <div class="position-absolute p-2 rounded-pill cursor-pointer heart-recipe">
                    <i class="fa-solid fa-heart text-white fs-3"></i>
                    {{-- <i class="fa-regular fa-heart color-accent-green fs-3"></i> --}}
                </div>
                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Recipe Image" class="recipe-image">
                <div class="recipe-details mt-2 d-flex justify-content-start flex-column flex-wrap w-100 px-2">
                    <h2 class="recipe-title m-0 w-fit-content">Delicious Pasta</h2>
                    <div class="recipe-stars w-fit-content">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
            <div class="recipe-card position-relative rounded">
                <div class="position-absolute p-2 rounded-pill cursor-pointer heart-recipe">
                    <i class="fa-solid fa-heart text-white fs-3"></i>
                    {{-- <i class="fa-regular fa-heart color-accent-green fs-3"></i> --}}
                </div>
                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Recipe Image" class="recipe-image">
                <div class="recipe-details mt-2 d-flex justify-content-start flex-column flex-wrap w-100 px-2">
                    <h2 class="recipe-title m-0 w-fit-content">Delicious Pasta</h2>
                    <div class="recipe-stars w-fit-content">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                
            </div>
        </div>


        <div class="col-md-6 col-lg-4 mb-4">
            <div class="recipe-card position-relative rounded">
                <div class="position-absolute p-2 rounded-pill cursor-pointer heart-recipe">
                    <i class="fa-solid fa-heart text-white fs-3"></i>
                    {{-- <i class="fa-regular fa-heart color-accent-green fs-3"></i> --}}
                </div>
                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Recipe Image" class="recipe-image">
                <div class="recipe-details mt-2 d-flex justify-content-start flex-column flex-wrap w-100 px-2">
                    <h2 class="recipe-title m-0 w-fit-content">Delicious Pasta</h2>
                    <div class="recipe-stars w-fit-content">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                
            </div>
        </div>


        <div class="col-md-6 col-lg-4 mb-4">
            <div class="recipe-card position-relative rounded">
                <div class="position-absolute p-2 rounded-pill cursor-pointer heart-recipe">
                    <i class="fa-solid fa-heart text-white fs-3"></i>
                    {{-- <i class="fa-regular fa-heart color-accent-green fs-3"></i> --}}
                </div>
                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Recipe Image" class="recipe-image">
                <div class="recipe-details mt-2 d-flex justify-content-start flex-column flex-wrap w-100 px-2">
                    <h2 class="recipe-title m-0 w-fit-content">Delicious Pasta</h2>
                    <div class="recipe-stars w-fit-content">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                
            </div>
        </div>


        <div class="col-md-6 col-lg-4 mb-4">
            <div class="recipe-card position-relative rounded">
                <div class="position-absolute p-2 rounded-pill cursor-pointer heart-recipe">
                    <i class="fa-solid fa-heart text-white fs-3"></i>
                    {{-- <i class="fa-regular fa-heart color-accent-green fs-3"></i> --}}
                </div>
                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Recipe Image" class="recipe-image">
                <div class="recipe-details mt-2 d-flex justify-content-start flex-column flex-wrap w-100 px-2">
                    <h2 class="recipe-title m-0 w-fit-content">Delicious Pasta</h2>
                    <div class="recipe-stars w-fit-content">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                
            </div>
        </div>

        <!-- Add more recipe cards as needed -->
    </div>
</div>

@endsection