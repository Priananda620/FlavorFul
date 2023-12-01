@extends('layout')
@section('content')
    {{-- loggedin --}}

    {{-- <h1 class="welcome-message">Welcome back, User!</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="text-center btn btn-primary w-100 h-100 text-white fw-bold py-3">
                <i class="fas fa-utensils feature-icon"></i>
                <p class="feature-text">Discover New Recipes</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="text-center btn btn-primary w-100 h-100 text-white fw-bold py-3">
                <i class="fas fa-calendar-week feature-icon"></i>
                <p class="feature-text">Plan Your Meals</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="text-center btn btn-primary w-100 h-100 text-white fw-bold py-3">
                <i class="fas fa-chart-pie feature-icon"></i>
                <p class="feature-text">Track Nutrition</p>
            </div>
        </div>
    </div> --}}

    <section style="height: 30em">
        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
            class="img-fluid h-100 w-100" alt="Image">
    </section>

    <section style="transform: translateY(-5em)">
        <div class="container p-5 bg-white rounded shadow w-100 w-md-70 overflow-hidden" style="height: auto">
            <div class="d-inline-flex justify-content-between align-items-center w-100">
                <h2 class="fw-bold text-start m-0">Search By Ingredients</h2>
                <div id="ingredient-expand-toggle" class="cursor-pointer rippleEffect p-2 rounded">
                    View More <i class="fa-solid fa-angle-right" style="transform: rotate(360deg) !important"></i>
                </div>
            </div>
            <div class="col my-3 mb-4">
                <div class="overflow-auto hide-scrollbar1 hide-scrollbar2">
                    <div class="d-flex flex-row flex-nowrap gap-1" id="ingredient-suggestion">
                        {{--  --}}
                        <div class="spinner-grow"
                            style="width: 1rem; height: 1rem;animation-timing-function: cubic-bezier(.22,.61,.36,1) !important;"
                            role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow mx-2"
                            style="width: 1rem; height: 1rem;animation-delay: .1s;animation-timing-function: cubic-bezier(.22,.61,.36,1) !important;"
                            role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow"
                            style="width: 1rem; height: 1rem;animation-delay: .2s;animation-timing-function: cubic-bezier(.22,.61,.36,1) !important;"
                            role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>


                    </div>


                </div>

            </div>
            <div class="d-flex justify-content-end">

                <button class="btn btn-primary px-4 text-white w-100 w-lg-unset disabled" id="ingr-explore">
                    Explore
                </button>
                <button class="btn btn-outline-primary px-4 text-white w-100 w-lg-unset ms-1" id="ingr-clear-selected">
                    Clear
                </button>
            </div>

        </div>
    </section>
    {{-- <div class="text-center get-started-button">
        <a href="#" class="btn btn-success">Get Started</a>
    </div> --}}
    <section style="margin-top: -5em">

        <div class="container mt-5" id="mealTypeCardsContainer">
            <div class="row my-5">
                <h2 class="fw-bold my-4">
                    Breakfast
                </h2>
                <div class="col">
                    <div class="overflow-auto hide-scrollbar1 hide-scrollbar2">
                        <div class="d-flex flex-row flex-nowrap gap-2">



                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <h2 class="fw-bold my-4">
                    Brunch
                </h2>
                <div class="col">
                    <div class="overflow-auto hide-scrollbar1 hide-scrollbar2">
                        <div class="d-flex flex-row flex-nowrap gap-2">
                            <div class="card mb-3 rounded col-3 w-sm-100 w-md-50 w-lg-30 w-100">
                                <div class="col g-0">
                                    <div class="row-md-4">
                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                            class="img-fluid rounded h-100" alt="Image">
                                    </div>
                                    <div class="row-md-8">
                                        <div class="card-body d-flex flex-column justify-content-between h-100">
                                            <h3 class="card-title fw-bold">Card Title</h3>
                                            <div class="d-flex flex-row my-3 mt-2">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex flex-column">
                                                        <div class="recipe-stars w-fit-content">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="d-flex flex-column">
                                                        <p class="m-0">
                                                            <i class="fa-regular fa-clock"></i>
                                                            <span>
                                                                &lt; 10mins</span>
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="overflow-auto hide-scrollbar1 hide-scrollbar2">
                                                <div class="d-flex flex-nowrap">
                                                    <div class="me-2">
                                                        <span class="badge bg-primary rounded-pill">Nut-Sensistive</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-secondary rounded-pill">Nut-Sensistive</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-success rounded-pill">Badge 3</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-primary rounded-pill">Badge 1</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-secondary rounded-pill">Badge 2</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-success rounded-pill">Badge 3</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-secondary rounded-pill">Badge 2</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-success rounded-pill">Badge 3</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <h2 class="fw-bold my-4">
                    Lunch
                </h2>
                <div class="col">
                    <div class="overflow-auto hide-scrollbar1 hide-scrollbar2">
                        <div class="d-flex flex-row flex-nowrap gap-2">
                            <div class="card mb-3 rounded col-3 w-sm-100 w-md-50 w-lg-30 w-100">
                                <div class="col g-0">
                                    <div class="row-md-4">
                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                            class="img-fluid rounded h-100" alt="Image">
                                    </div>
                                    <div class="row-md-8">
                                        <div class="card-body d-flex flex-column justify-content-between h-100">
                                            <h3 class="card-title fw-bold">Card Title</h3>
                                            <div class="d-flex flex-row my-3 mt-2">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex flex-column">
                                                        <div class="recipe-stars w-fit-content">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="d-flex flex-column">
                                                        <p class="m-0">
                                                            <i class="fa-regular fa-clock"></i>
                                                            <span>
                                                                &lt; 10mins</span>
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="overflow-auto hide-scrollbar1 hide-scrollbar2">
                                                <div class="d-flex flex-nowrap">
                                                    <div class="me-2">
                                                        <span class="badge bg-primary rounded-pill">Nut-Sensistive</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-secondary rounded-pill">Nut-Sensistive</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-success rounded-pill">Badge 3</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-primary rounded-pill">Badge 1</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-secondary rounded-pill">Badge 2</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-success rounded-pill">Badge 3</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-secondary rounded-pill">Badge 2</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-success rounded-pill">Badge 3</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <h2 class="fw-bold my-4">
                    Dinner
                </h2>
                <div class="col">
                    <div class="overflow-auto hide-scrollbar1 hide-scrollbar2">
                        <div class="d-flex flex-row flex-nowrap gap-2">
                            <div class="card mb-3 rounded col-3 w-sm-100 w-md-50 w-lg-30 w-100">
                                <div class="col g-0">
                                    <div class="row-md-4">
                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                            class="img-fluid rounded h-100" alt="Image">
                                    </div>
                                    <div class="row-md-8">
                                        <div class="card-body d-flex flex-column justify-content-between h-100">
                                            <h3 class="card-title fw-bold">Card Title</h3>
                                            <div class="d-flex flex-row my-3 mt-2">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex flex-column">
                                                        <div class="recipe-stars w-fit-content">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="d-flex flex-column">
                                                        <p class="m-0">
                                                            <i class="fa-regular fa-clock"></i>
                                                            <span>
                                                                &lt; 10mins</span>
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="overflow-auto hide-scrollbar1 hide-scrollbar2">
                                                <div class="d-flex flex-nowrap">
                                                    <div class="me-2">
                                                        <span class="badge bg-primary rounded-pill">Nut-Sensistive</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-secondary rounded-pill">Nut-Sensistive</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-success rounded-pill">Badge 3</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-primary rounded-pill">Badge 1</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-secondary rounded-pill">Badge 2</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-success rounded-pill">Badge 3</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-secondary rounded-pill">Badge 2</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-success rounded-pill">Badge 3</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <h2 class="fw-bold my-4">
                    Snack
                </h2>
                <div class="col">
                    <div class="overflow-auto hide-scrollbar1 hide-scrollbar2">
                        <div class="d-flex flex-row flex-nowrap gap-2">
                            <div class="card mb-3 rounded col-3 w-sm-100 w-md-50 w-lg-30 w-100">
                                <div class="col g-0">
                                    <div class="row-md-4">
                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                            class="img-fluid rounded h-100" alt="Image">
                                    </div>
                                    <div class="row-md-8">
                                        <div class="card-body d-flex flex-column justify-content-between h-100">
                                            <h3 class="card-title fw-bold">Card Title</h3>
                                            <div class="d-flex flex-row my-3 mt-2">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex flex-column">
                                                        <div class="recipe-stars w-fit-content">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="d-flex flex-column">
                                                        <p class="m-0">
                                                            <i class="fa-regular fa-clock"></i>
                                                            <span>
                                                                &lt; 10mins</span>
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="overflow-auto hide-scrollbar1 hide-scrollbar2">
                                                <div class="d-flex flex-nowrap">
                                                    <div class="me-2">
                                                        <span class="badge bg-primary rounded-pill">Nut-Sensistive</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-secondary rounded-pill">Nut-Sensistive</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-success rounded-pill">Badge 3</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-primary rounded-pill">Badge 1</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-secondary rounded-pill">Badge 2</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-success rounded-pill">Badge 3</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-secondary rounded-pill">Badge 2</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-success rounded-pill">Badge 3</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <h2 class="fw-bold my-4">
                    Tea Time
                </h2>
                <div class="col">
                    <div class="overflow-auto hide-scrollbar1 hide-scrollbar2">
                        <div class="d-flex flex-row flex-nowrap gap-2">
                            <div class="card mb-3 rounded col-3 w-sm-100 w-md-50 w-lg-30 w-100">
                                <div class="col g-0">
                                    <div class="row-md-4">
                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                            class="img-fluid rounded h-100" alt="Image">
                                    </div>
                                    <div class="row-md-8">
                                        <div class="card-body d-flex flex-column justify-content-between h-100">
                                            <h3 class="card-title fw-bold">Card Title</h3>
                                            <div class="d-flex flex-row my-3 mt-2">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex flex-column">
                                                        <div class="recipe-stars w-fit-content">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="d-flex flex-column">
                                                        <p class="m-0">
                                                            <i class="fa-regular fa-clock"></i>
                                                            <span>
                                                                &lt; 10mins</span>
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="overflow-auto hide-scrollbar1 hide-scrollbar2">
                                                <div class="d-flex flex-nowrap">
                                                    <div class="me-2">
                                                        <span class="badge bg-primary rounded-pill">Nut-Sensistive</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-secondary rounded-pill">Nut-Sensistive</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-success rounded-pill">Badge 3</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-primary rounded-pill">Badge 1</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-secondary rounded-pill">Badge 2</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-success rounded-pill">Badge 3</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-secondary rounded-pill">Badge 2</span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-success rounded-pill">Badge 3</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="container py-5">
            <div class="row mt-4">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="recipe-card position-relative rounded">
                        <div class="position-absolute p-2 rounded-pill cursor-pointer heart-recipe">
                            <i class="fa-solid fa-heart text-white fs-3"></i>
                            
                        </div>
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                            alt="Recipe Image" class="recipe-image">
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
                            
                        </div>
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                            alt="Recipe Image" class="recipe-image">
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
                            
                        </div>
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                            alt="Recipe Image" class="recipe-image">
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
                            
                        </div>
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                            alt="Recipe Image" class="recipe-image">
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
                            
                        </div>
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                            alt="Recipe Image" class="recipe-image">
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
            </div>
        </div> --}}
        <script>
            $(document).ready(function() {


                let displayed_ingredients = []

                const fetchRecipesAjax = (requestData) => {
                    return new Promise((resolve, reject) => {
                        $.ajax({
                            url: 'https://api.edamam.com/search',
                            method: 'GET',
                            data: requestData,

                            success: function(response) {
                                resolve(response);
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                console.error('AJAX request failed:', textStatus, errorThrown)
                                reject(errorThrown);
                            },
                            complete: function() {
                                console.log("dsdasdsadDONE")
                            },
                            beforeSend: function() {
                                console.log('Sending request...')
                            },
                        });
                    });
                }

                const loadRecipeCategories = async () => {
                    const skeletonLoadEl = `<div class="card mb-3 rounded col-3 w-sm-100 w-md-50 w-lg-30 w-100">
                                <div class="col g-0">
                                    <div class="row-md-4">
                                        <div class="skeleton-image h-100"></div>
                                    </div>
                                    <div class="row-md-8">
                                        <div class="card-body d-flex flex-column justify-content-between h-100">
                                            <div class="skeleton-title"></div>
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <div class="skeleton-info"></div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="skeleton-info"></div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="skeleton-info"></div>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-grow-1 me-2">
                                                    <div class="skeleton-info rounded-pill py-3"></div>
                                                </div>
                                                <div class="flex-grow-1 me-2">
                                                    <div class="skeleton-info rounded-pill py-3"></div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="skeleton-info rounded-pill py-3"></div>
                                                </div>
                                            </div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>`

                    const cardLayout = `<div class="card rippleEffect mb-3 rounded col-3 w-sm-100 w-md-50 w-lg-30 w-100" style="height: ;">
                                <div class="col g-0">
                                    <div class="row-md-4" style="height:18em">
                                        <img src="{imageUrl}"
                                            class="img-fluid rounded h-100 w-100" alt="{recipeTitle2}">
                                    </div>
                                    <div class="row-md-8" style="height:;">
                                        <div class="card-body d-flex flex-column justify-content-between h-100">
                                            <h3 class="card-title fw-bold mb-0 line-clamp-2">{recipeTitle}</h3>
                                            <div class="d-flex flex-row my-3 mt-2">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex flex-column">
                                                        <div class="recipe-stars w-fit-content">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="d-flex flex-column">
                                                        <p class="m-0">
                                                            <i class="fa-regular fa-clock"></i>
                                                            <span>
                                                                &lt; {totalTime}mins</span>
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="overflow-auto hide-scrollbar1 hide-scrollbar2">
                                                <div class="d-flex flex-nowrap">
                                                    {cautions}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>`
                    const container = $('#mealTypeCardsContainer')
                    const mealTimeEachContainer = container.find('.row > .col > div > div')
                    const mealTime = ['breakfast', 'brunch', 'lunch', 'dinner', 'snack', 'teatime']
                    const requestData = {
                        app_id: '18f6495e',
                        app_key: '8bb396da11d4832a439ea25f315c827f',
                        q: 'healthy',
                        from: 0,
                        to: 10,
                        mealType: 'breakfast',
                        imageSize: 'SMALL',
                        time: '1+',
                    };

                    const promises = mealTime.map((time, index) => {
                        const randFrom = Math.floor(Math.random() * (100 - 0 + 1)) + 0
                        const to = randFrom + 10

                        const requestDataForTime = {
                            ...requestData,
                            mealType: time,
                            from: randFrom,
                            to: to
                        };

                        const nthElement = mealTimeEachContainer.eq(index);
                        nthElement.empty()

                        nthElement.append(skeletonLoadEl)
                        nthElement.append(skeletonLoadEl)
                        nthElement.append(skeletonLoadEl)
                        nthElement.append(skeletonLoadEl)


                        return fetchRecipesAjax(requestDataForTime);
                    });

                    Promise.all(promises)
                        .then(resultsArray => {
                            resultsArray.forEach((results, index) => {
                                console.log(results.hits[0].recipe.label + " " + results.hits[0]
                                    .recipe
                                    .mealType[0]);
                                const nthElement = mealTimeEachContainer.eq(index);
                                nthElement.empty()

                                for (let i = 0; i < results.hits.length; i++) {
                                    let recipe = results.hits[i].recipe;
                                    let recipeTitle = recipe.label;
                                    let recipeImage = recipe.image;
                                    let totalTime = recipe.totalTime;
                                    let serving = recipe.yield > 0 ? recipe.yield : 1;
                                    let calories = Math.round(Math.round(recipe.calories) /
                                        serving);
                                    let cautions = recipe.cautions;
                                    let cautionHTML = '';
                                    cautions.forEach((caution) => {
                                        console.log("Caution:", caution);
                                        cautionHTML +=
                                            `<div class="me-2"><span class="badge bg-primary rounded-pill">${caution}</span></div>`;
                                    });


                                    let temp = cardLayout

                                    temp = temp.replace('{imageUrl}', recipeImage)
                                    temp = temp.replace('{recipeTitle}', recipeTitle)
                                    temp = temp.replace('{recipeTitle2}', recipeTitle)
                                    temp = temp.replace('{totalTime}', totalTime)
                                    // temp = temp.replace('{totalCalories}', calories)
                                    temp = temp.replace('{cautions}', cautionHTML)

                                    let $temp = $(temp)

                                    let uri = recipe.uri;
                                    const parts = uri.split("#recipe_");
                                    let recipeId

                                    if (parts.length === 2) {
                                        recipeId = parts[1];
                                    } else {
                                        recipeId = "Pattern not found in the URL";
                                    }
                                    $temp.data('recipeId', recipeId)
                                    // temp = temp.replace('{recipeId}', recipeId)
                                    // temp = temp.replace('{totalDifficulties}', totalDifficulties)


                                    nthElement.append($temp)
                                }

                            });

                            console.log("All requests completed successfully.");
                        }).catch(error => {
                            console.error('Error fetching data:', error);
                        });


                }

                loadRecipeCategories()


                const loadIngr = function() {
                    const randFrom = Math.floor(Math.random() * (100 - 0 + 1)) + 0
                    const to = randFrom + 5
                    const requestData = {
                        app_id: '18f6495e',
                        app_key: '8bb396da11d4832a439ea25f315c827f',
                        q: 'healthy',
                        from: randFrom,
                        to: to,
                        mealType: 'breakfast',
                        imageSize: 'SMALL',
                        time: '1+',
                    };

                    fetchRecipesAjax(requestData)
                        .then(data => {
                            console.log(data);

                            const suggestionContainer = $('#ingredient-suggestion')
                            suggestionContainer.find('.spinner-grow').remove()

                            for (let i = 0; i < data.hits.length; i++) {
                                let recipe = data.hits[i].recipe;

                                recipe.ingredients.forEach((ingredient, index) => {
                                    if (!displayed_ingredients.includes(ingredient.foodId)) {
                                        const $newIngr = $('<div>', {
                                            class: 'd-flex flex-column align-items-center justify-content-center cursor-pointer rippleEffect my-2',
                                            html: [
                                                $('<img>', {
                                                    src: ingredient.image,
                                                    alt: '',
                                                    class: 'rounded-circle mb-2',
                                                    style: 'background: var(--green-flavor);width: 50px;height: 50px'
                                                }),
                                                $('<div>', {
                                                    style: 'width: 100px;',
                                                    class: 'd-inline-block text-truncate text-center',
                                                    text: ingredient.food
                                                })
                                            ]
                                        });

                                        displayed_ingredients.push(ingredient.foodId)

                                        $newIngr.data('foodId', ingredient.foodId)
                                        $newIngr.data('foodText', ingredient.food)

                                        suggestionContainer.append($newIngr)
                                    }
                                })

                            }

                            const $loadMoreIcon = $('<div>', {
                                class: 'd-flex flex-column align-items-center justify-content-center cursor-pointer rippleEffect my-2',
                                id: 'load-more-ingr',
                                html: [
                                    $('<div>', {
                                        class: 'mb-3',
                                        html: [
                                            '<i class="fa-solid fa-arrows-rotate fs-1"></i>'
                                        ]
                                    }),
                                    $('<div>', {
                                        style: 'width: 100px;',
                                        class: 'd-inline-block text-truncate text-center',
                                        text: 'Load More'
                                    })
                                ]
                            });

                            suggestionContainer.append($loadMoreIcon)
                        })
                        .catch(error => {
                            alert(error)
                        })
                        .finally(() => {
                            console.log('DONEE PROMISE')
                        });
                }
                loadIngr()

                $('body').on('click', '#ingredient-suggestion > #load-more-ingr', function(e) {
                    const suggestionContainer = $('#ingredient-suggestion')
                    suggestionContainer.find('#load-more-ingr').remove()

                    suggestionContainer.append(`
                    <div class="spinner-grow my-5"
                            style="width: 1rem; height: 1rem;animation-timing-function: cubic-bezier(.22,.61,.36,1) !important;"
                            role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow mx-2 my-5"
                            style="width: 1rem; height: 1rem;animation-delay: .1s;animation-timing-function: cubic-bezier(.22,.61,.36,1) !important;"
                            role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow my-5"
                            style="width: 1rem; height: 1rem;animation-delay: .2s;animation-timing-function: cubic-bezier(.22,.61,.36,1) !important;"
                            role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    `)

                    loadIngr()


                })

                $('#ingredient-expand-toggle').on('click', function(e) {
                    const ingr_container = $('#ingredient-suggestion')

                    ingr_container.toggleClass('flex-nowrap' + ' ' + 'flex-wrap')

                    if (ingr_container.hasClass('flex-wrap')) {
                        $('#ingredient-expand-toggle').html('View Less');
                    } else {
                        $('#ingredient-expand-toggle').html(
                            'View More <i class="fa-solid fa-angle-right" style="transform: rotate(360deg) !important"></i>'
                        );
                    }

                });

                function updateButtonState() {
                    if ($('#ingredient-suggestion > .ingr-selected').length > 0) {
                        $('#ingr-explore').removeClass('disabled')
                    } else {
                        $('#ingr-explore').addClass('disabled')
                    }
                }

                $('#ingr-clear-selected').on('click', function(e) {
                    $('.ingr-selected').removeClass('ingr-selected');
                    updateButtonState()
                });



                $('body').on('click', '#ingredient-suggestion > div:not(#load-more-ingr)', function(e) {
                    // window.location.href = `home?${$(this).data('foodText')}=${$(this).data('foodId')}/`;
                    // console.log("CLICK");

                    $(this).toggleClass('ingr-selected')

                    updateButtonState()
                });

                $('#ingr-explore:not([disabled])').on('click', function() {
                    let concatenatedUrl = 'explore?'
                    $('#ingredient-suggestion > .ingr-selected').each(function() {
                        var element = $(this)
                        const foodText = element.data('foodText')
                        const foodId = element.data('foodId')

                        concatenatedUrl += foodText + '=' + foodId + '&';
                    });

                    window.location.href = concatenatedUrl
                })

                $('body').on('click', '.card', function(e) {
                    window.location.href = 'recipe-details/' + $(this).data('recipeId');
                    console.log('recipe-details/' + $(this).data('recipeId'));
                });
            });
        </script>
    </section>
@endsection
