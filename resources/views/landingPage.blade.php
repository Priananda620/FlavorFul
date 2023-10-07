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
        <div class="container p-5 bg-light rounded">
            <div class="d-inline-flex justify-content-between align-items-center w-100">
                <h2 class="fw-bold text-start m-0">Search By Ingredients</h2>
                <div>
                    View All <i class="fa-solid fa-angle-right" style="transform: rotate(360deg) !important"></i>
                </div>
            </div>
            <div class="col my-4">
                <div class="overflow-auto hide-scrollbar1 hide-scrollbar2">
                    <div class="d-flex flex-row flex-nowrap gap-3">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                alt="" class="rounded-circle mb-2" width="50" height="50">
                            <div>
                                ingredient
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                alt="" class="rounded-circle mb-2" width="50" height="50">
                            <div>
                                ingredient
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                alt="" class="rounded-circle mb-2" width="50" height="50">
                            <div>
                                ingredient
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                alt="" class="rounded-circle mb-2" width="50" height="50">
                            <div>
                                ingredient
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                alt="" class="rounded-circle mb-2" width="50" height="50">
                            <div>
                                ingredient
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                alt="" class="rounded-circle mb-2" width="50" height="50">
                            <div>
                                ingredient
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                alt="" class="rounded-circle mb-2" width="50" height="50">
                            <div>
                                ingredient
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                alt="" class="rounded-circle mb-2" width="50" height="50">
                            <div>
                                ingredient
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                alt="" class="rounded-circle mb-2" width="50" height="50">
                            <div>
                                ingredient
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                alt="" class="rounded-circle mb-2" width="50" height="50">
                            <div>
                                ingredient
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                alt="" class="rounded-circle mb-2" width="50" height="50">
                            <div>
                                ingredient
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                alt="" class="rounded-circle mb-2" width="50" height="50">
                            <div>
                                ingredient
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                alt="" class="rounded-circle mb-2" width="50" height="50">
                            <div>
                                ingredient
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- <div class="text-center get-started-button">
        <a href="#" class="btn btn-success">Get Started</a>
    </div> --}}
    <section style="margin-top: -5em">

        <div class="container mt-5">
            <div class="row my-5">
                <h2 class="fw-bold my-4">
                    Breakfast
                </h2>
                <div class="col">
                    <div class="overflow-auto hide-scrollbar1 hide-scrollbar2">
                        <div class="d-flex flex-row flex-nowrap gap-2">
                            <div class="card mb-3 rounded col-3">
                                <div class="col g-0">
                                    <div class="row-md-4">
                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                            class="img-fluid rounded h-100" alt="Image">
                                    </div>
                                    <div class="row-md-8">
                                        <div class="card-body d-flex flex-column justify-content-between h-100">
                                            <h3 class="card-title fw-bold">Card Title</h3>
                                            <div class="d-flex flex-row my-3">
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
                            <div class="card mb-3 rounded col-3">
                                <div class="col g-0">
                                    <div class="row-md-4">
                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                            class="img-fluid rounded h-100" alt="Image">
                                    </div>
                                    <div class="row-md-8">
                                        <div class="card-body d-flex flex-column justify-content-between h-100">
                                            <h3 class="card-title fw-bold">Card Title</h3>
                                            <div class="d-flex flex-row my-3">
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
                            <div class="card mb-3 rounded col-3">
                                <div class="col g-0">
                                    <div class="row-md-4">
                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                            class="img-fluid rounded h-100" alt="Image">
                                    </div>
                                    <div class="row-md-8">
                                        <div class="card-body d-flex flex-column justify-content-between h-100">
                                            <h3 class="card-title fw-bold">Card Title</h3>
                                            <div class="d-flex flex-row my-3">
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
                            <div class="card mb-3 rounded col-3">
                                <div class="col g-0">
                                    <div class="row-md-4">
                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                            class="img-fluid rounded h-100" alt="Image">
                                    </div>
                                    <div class="row-md-8">
                                        <div class="card-body d-flex flex-column justify-content-between h-100">
                                            <h3 class="card-title fw-bold">Card Title</h3>
                                            <div class="d-flex flex-row my-3">
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
                            <div class="card mb-3 rounded col-3">
                                <div class="col g-0">
                                    <div class="row-md-4">
                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                            class="img-fluid rounded h-100" alt="Image">
                                    </div>
                                    <div class="row-md-8">
                                        <div class="card-body d-flex flex-column justify-content-between h-100">
                                            <h3 class="card-title fw-bold">Card Title</h3>
                                            <div class="d-flex flex-row my-3">
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
                    Breakfast
                </h2>
                <div class="col">
                    <div class="overflow-auto hide-scrollbar1 hide-scrollbar2">
                        <div class="d-flex flex-row flex-nowrap gap-2">
                            <div class="card mb-3 rounded col-3">
                                <div class="col g-0">
                                    <div class="row-md-4">
                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                            class="img-fluid rounded h-100" alt="Image">
                                    </div>
                                    <div class="row-md-8">
                                        <div class="card-body d-flex flex-column justify-content-between h-100">
                                            <h3 class="card-title fw-bold">Card Title</h3>
                                            <div class="d-flex flex-row my-3">
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
                            <div class="card mb-3 rounded col-3">
                                <div class="col g-0">
                                    <div class="row-md-4">
                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                            class="img-fluid rounded h-100" alt="Image">
                                    </div>
                                    <div class="row-md-8">
                                        <div class="card-body d-flex flex-column justify-content-between h-100">
                                            <h3 class="card-title fw-bold">Card Title</h3>
                                            <div class="d-flex flex-row my-3">
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
                            <div class="card mb-3 rounded col-3">
                                <div class="col g-0">
                                    <div class="row-md-4">
                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                            class="img-fluid rounded h-100" alt="Image">
                                    </div>
                                    <div class="row-md-8">
                                        <div class="card-body d-flex flex-column justify-content-between h-100">
                                            <h3 class="card-title fw-bold">Card Title</h3>
                                            <div class="d-flex flex-row my-3">
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
                            <div class="card mb-3 rounded col-3">
                                <div class="col g-0">
                                    <div class="row-md-4">
                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                            class="img-fluid rounded h-100" alt="Image">
                                    </div>
                                    <div class="row-md-8">
                                        <div class="card-body d-flex flex-column justify-content-between h-100">
                                            <h3 class="card-title fw-bold">Card Title</h3>
                                            <div class="d-flex flex-row my-3">
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
                            <div class="card mb-3 rounded col-3">
                                <div class="col g-0">
                                    <div class="row-md-4">
                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                            class="img-fluid rounded h-100" alt="Image">
                                    </div>
                                    <div class="row-md-8">
                                        <div class="card-body d-flex flex-column justify-content-between h-100">
                                            <h3 class="card-title fw-bold">Card Title</h3>
                                            <div class="d-flex flex-row my-3">
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
                    Breakfast
                </h2>
                <div class="col">
                    <div class="overflow-auto hide-scrollbar1 hide-scrollbar2">
                        <div class="d-flex flex-row flex-nowrap gap-2">
                            <div class="card mb-3 rounded col-3">
                                <div class="col g-0">
                                    <div class="row-md-4">
                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                            class="img-fluid rounded h-100" alt="Image">
                                    </div>
                                    <div class="row-md-8">
                                        <div class="card-body d-flex flex-column justify-content-between h-100">
                                            <h3 class="card-title fw-bold">Card Title</h3>
                                            <div class="d-flex flex-row my-3">
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
                            <div class="card mb-3 rounded col-3">
                                <div class="col g-0">
                                    <div class="row-md-4">
                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                            class="img-fluid rounded h-100" alt="Image">
                                    </div>
                                    <div class="row-md-8">
                                        <div class="card-body d-flex flex-column justify-content-between h-100">
                                            <h3 class="card-title fw-bold">Card Title</h3>
                                            <div class="d-flex flex-row my-3">
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
                            <div class="card mb-3 rounded col-3">
                                <div class="col g-0">
                                    <div class="row-md-4">
                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                            class="img-fluid rounded h-100" alt="Image">
                                    </div>
                                    <div class="row-md-8">
                                        <div class="card-body d-flex flex-column justify-content-between h-100">
                                            <h3 class="card-title fw-bold">Card Title</h3>
                                            <div class="d-flex flex-row my-3">
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
                            <div class="card mb-3 rounded col-3">
                                <div class="col g-0">
                                    <div class="row-md-4">
                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                            class="img-fluid rounded h-100" alt="Image">
                                    </div>
                                    <div class="row-md-8">
                                        <div class="card-body d-flex flex-column justify-content-between h-100">
                                            <h3 class="card-title fw-bold">Card Title</h3>
                                            <div class="d-flex flex-row my-3">
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
                            <div class="card mb-3 rounded col-3">
                                <div class="col g-0">
                                    <div class="row-md-4">
                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                            class="img-fluid rounded h-100" alt="Image">
                                    </div>
                                    <div class="row-md-8">
                                        <div class="card-body d-flex flex-column justify-content-between h-100">
                                            <h3 class="card-title fw-bold">Card Title</h3>
                                            <div class="d-flex flex-row my-3">
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
    </section>
@endsection
