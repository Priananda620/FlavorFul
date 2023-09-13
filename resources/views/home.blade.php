@extends('layout')
@section('content')
    <div class="container py-5">
        <div class="row">

            <div class="col-md-4">
                <h4 class="fw-bold">
                    Input Ingredients
                </h4>
                <div class="d-flex flex-column">
                    <!-- Search Filter -->
                    <div class="p-3 px-0">
                        <!-- Search input goes here -->
                        <div class="dropdown">
                            <input type="text" class="form-control dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" placeholder="Search...">
                            <ul class="dropdown-menu">
                              <!-- Dropdown items here -->
                              <li><a class="dropdown-item" href="#">Option 1</a></li>
                              <li><a class="dropdown-item" href="#">Option 2</a></li>
                              <li><a class="dropdown-item" href="#">Option 3</a></li>
                            </ul>
                          </div>
                    </div>
                    <!-- Category Badges Filter -->
                    <div class="p-3 px-0">
                        <!-- Category badge content goes here -->
                        <div class="d-flex flex-column">
                            <h6>Selected</h6>
                            <!-- Category badges go here -->
                            <span class="badge bg-primary my-1 filter-delete position-relative">Category 1</span>
                            <span class="badge bg-primary my-1 filter-delete position-relative">Category 2</span>
                            <span class="badge bg-primary my-1 filter-delete position-relative">Category 3</span>
                            <!-- Add more categories as needed -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="d-flex flex-row justify-content-between align-items-center pb-4">
                    <h1 class="fw-bold">
                        Recipes
                    </h1>
                    <div id="toggle-home-filter" class="btn btn-info d-inline-flex">
                        <div class="me-5">
                            Filter
                        </div>
                        <div class="">
                            <div class="d-flex flex-row">
                                <div style="margin: 2px" class="p-0 d-flex">
                                    <i class="fa-solid fa-circle" style="font-size: .5em;"></i>
                                </div>
                                <div style="margin: 2px" class="p-0 d-flex">
                                    <i class="fa-solid fa-circle" style="font-size: .5em;"></i>
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div style="margin: 2px" class="p-0 d-flex">
                                    <i class="fa-solid fa-circle" style="font-size: .5em;"></i>
                                </div>
                                <div style="margin: 2px" class="p-0 d-flex">
                                    <i class="fa-solid fa-circle" style="font-size: .5em;"></i>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div id="home-filters" class="d-flex flex-row justify-content-between transition-height overflow-hidden"
                    propActive="false" style="height: 0px">
                    <div class="dropdown w-100 me-1">
                        <button class="btn btn-secondary rounded dropdown-toggle w-100" type="button"
                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Select Option
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Option 1</a></li>
                            <li><a class="dropdown-item" href="#">Option 2</a></li>
                            <li><a class="dropdown-item" href="#">Option 3</a></li>
                            <!-- Add more options as needed -->
                        </ul>
                    </div>
                    <div class="dropdown w-100 me-1">
                        <button class="btn btn-secondary rounded dropdown-toggle w-100" type="button"
                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Select Option
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Option 1</a></li>
                            <li><a class="dropdown-item" href="#">Option 2</a></li>
                            <li><a class="dropdown-item" href="#">Option 3</a></li>
                            <!-- Add more options as needed -->
                        </ul>
                    </div>
                    <div class="dropdown w-100 me-1">
                        <button class="btn btn-secondary rounded dropdown-toggle w-100" type="button"
                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Select Option
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Option 1</a></li>
                            <li><a class="dropdown-item" href="#">Option 2</a></li>
                            <li><a class="dropdown-item" href="#">Option 3</a></li>
                            <!-- Add more options as needed -->
                        </ul>
                    </div>
                    <div class="dropdown w-100">
                        <button class="btn btn-secondary rounded dropdown-toggle w-100" type="button"
                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Select Option
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Option 1</a></li>
                            <li><a class="dropdown-item" href="#">Option 2</a></li>
                            <li><a class="dropdown-item" href="#">Option 3</a></li>
                            <!-- Add more options as needed -->
                        </ul>
                    </div>

                </div>
                <div class="pt-4">
                    <!-- Card items go here -->
                    <div class="card mb-3 rounded skeleton-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="skeleton-image"></div>
                            </div>
                            <div class="col-md-8">
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
                                    </div><div class="d-flex">
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
                    </div>



                    <div class="card mb-3 rounded">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                    class="img-fluid rounded" alt="Image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body d-flex flex-column justify-content-between h-100">
                                    <h3 class="card-title fw-bold">Card Title</h3>
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <div class="d-flex flex-column">
                                                <h5>Time</h5>
                                                <p><i class="fa-regular fa-clock"></i> < 10mins </p>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex flex-column">
                                                <h5>Calories</h5>
                                                <p><i class="fa-solid fa-fire-flame-curved"></i> 154 kcal/100g</p>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex flex-column">
                                                <h5>Difficulty</h5>
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
                                    <div class="scrollable-container overflow-auto hide-scrollbar1 hide-scrollbar2">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 rounded">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                    class="img-fluid rounded" alt="Image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body d-flex flex-column justify-content-between h-100">
                                    <h3 class="card-title fw-bold">Card Title</h3>
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <div class="d-flex flex-column">
                                                <h5>Time</h5>
                                                <p><i class="fa-regular fa-clock"></i>
                                                    < 10mins </p>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex flex-column">
                                                <h5>Calories</h5>
                                                <p><i class="fa-solid fa-fire-flame-curved"></i>154 kcal/100g</p>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex flex-column">
                                                <h5>Difficulty</h5>
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
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <span class="badge bg-primary">Badge 1</span>
                                        </div>
                                        <div class="me-2">
                                            <span class="badge bg-secondary">Badge 2</span>
                                        </div>
                                        <div class="me-2">
                                            <span class="badge bg-success">Badge 3</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 rounded">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                    class="img-fluid rounded" alt="Image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body d-flex flex-column justify-content-between h-100">
                                    <h3 class="card-title fw-bold">Card Title</h3>
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <div class="d-flex flex-column">
                                                <h5>Time</h5>
                                                <p><i class="fa-regular fa-clock"></i>
                                                    < 10mins </p>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex flex-column">
                                                <h5>Calories</h5>
                                                <p><i class="fa-solid fa-fire-flame-curved"></i>154 kcal/100g</p>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex flex-column">
                                                <h5>Difficulty</h5>
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
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <span class="badge bg-primary">Badge 1</span>
                                        </div>
                                        <div class="me-2">
                                            <span class="badge bg-secondary">Badge 2</span>
                                        </div>
                                        <div class="me-2">
                                            <span class="badge bg-success">Badge 3</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 rounded">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                    class="img-fluid rounded" alt="Image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body d-flex flex-column justify-content-between h-100">
                                    <h3 class="card-title fw-bold">Card Title</h3>
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <div class="d-flex flex-column">
                                                <h5>Time</h5>
                                                <p><i class="fa-regular fa-clock"></i>
                                                    < 10mins </p>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex flex-column">
                                                <h5>Calories</h5>
                                                <p><i class="fa-solid fa-fire-flame-curved"></i>154 kcal/100g</p>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex flex-column">
                                                <h5>Difficulty</h5>
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
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <span class="badge bg-primary">Badge 1</span>
                                        </div>
                                        <div class="me-2">
                                            <span class="badge bg-secondary">Badge 2</span>
                                        </div>
                                        <div class="me-2">
                                            <span class="badge bg-success">Badge 3</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more cards as needed -->
                </div>
            </div>
        </div>
    </div>
@endsection
