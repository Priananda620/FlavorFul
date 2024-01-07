@extends('layout')
@section('content')
    <div class="container py-5">
        <div class="row">

            <div class="col-md-4">
                <h4 class="fw-bold">
                    Input Ingredients
                </h4>
                <div class="d-flex flex-column position-sticky" style="top: 5em;z-index:10000">
                    <!-- Search Filter -->
                    <div class="p-3 px-0">
                        <!-- Search input goes here -->
                        <div class="dropdown">
                            <input id="add-recipe-search" type="text" class="form-control dropdown-toggle"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                placeholder="Search...">
                            <ul class="dropdown-menu overflow-auto w-100" id="recipe-ingr-dropdown"
                                style="max-height: 50vh">
                                <!-- Dropdown items here -->
                                {{-- <li><a class="dropdown-item" href="#">Option 1</a></li>
                                <li><a class="dropdown-item" href="#">Option 2</a></li>
                                <li><a class="dropdown-item" href="#">Option 3</a></li> --}}

                                <li><a class="dropdown-item p-3">Start Typing...</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Category Badges Filter -->
                    <div class="p-3 px-0">
                        <!-- Category badge content goes here -->
                        <div class="d-flex flex-column" id="selected-recipe-container">

                            <div class="d-inline-flex align-items-center">
                                <h5 class="me-auto my-0">Selected</h5>
                                <i class="fa-solid fa-trash p-2 rounded cursor-pointer bg-info"
                                    id="remove-whole-recipe"></i>
                            </div>
                            <!-- Category badges go here -->
                            <div class="d-flex flex-wrap gap-1 mt-3" id="selected-chips-wrapper">
                                <span
                                    class="badge bg-secondary my-1 position-relative rounded-pill empty-recipe w-100">Select
                                    an Ingredient</span>
                            </div>

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
                    <div id="toggle-home-filter" class="rippleEffect btn bg-info d-inline-flex">
                        <div class=" me-5">
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

                <div id="home-filters" class="hide-scrollbar1 hide-scrollbar2 transition-height h-filter-active pe-5"
                    style="overflow-x: auto; white-space: nowrap; height: 0" propactive="true">
                    <!-- Meal Type Dropdown -->
                    <div class="d-inline-block w-50">
                        <button class="w-100 btn btn-secondary rounded dropdown-toggle" type="button" id="mealTypeDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </button>
                        <ul class="dropdown-menu w-inherit overflow-scroll" style="max-height: 40vh"
                            aria-labelledby="mealTypeDropdown">
                            <li><a class="dropdown-item p-3 px-4" href="#">breakfast</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">brunch</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">lunch</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">dinner</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">snack</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">teatime</a></li>
                        </ul>
                    </div>

                    <!-- Calorie Range Dropdown -->
                    <div class="d-inline-block w-50">
                        <button class="w-100 btn btn-secondary rounded dropdown-toggle" type="button"
                            id="calorieRangeDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            Calorie Range
                        </button>
                        <ul class="dropdown-menu w-inherit overflow-scroll" style="max-height: 40vh"
                            aria-labelledby="calorieRangeDropdown">
                            <li><a class="dropdown-item p-3 px-4" href="#">100 - 200 kcal</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">150 - 300 kcal</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">200 - 400 kcal</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">250 - 500 kcal</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">300 - 600 kcal</a></li>
                            <!-- Add more calorie range options as needed -->
                        </ul>
                    </div>

                    <!-- Health Dropdown -->
                    <div class="d-inline-block w-50">
                        <button class="w-100 btn btn-secondary rounded dropdown-toggle" type="button" id="healthDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dietary Restriction
                        </button>
                        <ul class="dropdown-menu w-inherit overflow-scroll" style="max-height: 40vh"
                            aria-labelledby="healthDropdown">
                            <li><a class="dropdown-item p-3 px-4" href="#">alcohol-cocktail</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">alcohol-free</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">celery-free</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">crustacean-free</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">dairy-free</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">DASH</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">egg-free</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">fish-free</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">fodmap-free</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">gluten-free</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">immuno-supportive</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">keto-friendly</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">kidney-friendly</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">kosher</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">low-fat-abs</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">low-potassium</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">low-sugar</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">lupine-free</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">Mediterranean</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">mollusk-free</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">mustard-free</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">no-oil-added</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">paleo</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">peanut-free</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">pescatarian</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">pork-free</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">red-meat-free</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">sesame-free</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">shellfish-free</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">soy-free</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">sugar-conscious</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">sulfite-free</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">tree-nut-free</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">vegan</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">vegetarian</a></li>
                            <li><a class="dropdown-item p-3 px-4" href="#">wheat-free</a></li>
                            <!-- Add more health options as needed -->
                        </ul>
                    </div>
                </div>

                <div class="pt-4" id="recipeSearch-cardContainer">
                    <!-- Card items go here -->
                    {{-- <div class="card mb-3 rounded skeleton-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="skeleton-image h-100"></div>
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
                    </div>



                    <div class="card mb-3 rounded">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                    class="img-fluid rounded h-100" alt="Image">
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
                    </div> --}}

                    <!-- Add more cards as needed -->
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            // Add a click event handler to the button
            // $(".card[recipeId]:not([recipeId=''])").on('click', function() {
            $('body').on('click', '.card[recipeId]:not([recipeId=""])', function(e) {
                window.location.href = 'recipe-details/' + $(this).attr('recipeId');
                console.log("CLICK");
            });

            $('#home-filters .dropdown-toggle').on('click', function() {
                var dropdownMenu = $(this).next('.dropdown-menu');
                var buttonWidth = $(this).outerWidth();
                dropdownMenu.css('width', buttonWidth);
            });

            $('.dropdown-item').on('click', function() {
                // Get the parent dropdown
                const parentDropdown = $(this).closest('.dropdown-menu');

                parentDropdown.data('selected', $(this).text())

                // Remove the "active" class from all items within the parent dropdown
                parentDropdown.find('.dropdown-item').removeClass('active');

                // Add the "active" class to the clicked item
                $(this).addClass('active');


                clearTimeout(debounceTimer);
                debounceTimer = setTimeout(fetchNewRecipes, debounceDelay);

            });

            console.log("ejonergeo")
            var selectedIngredients = []

            var currentRecipeMaxIdx = 15
            var stopTouching = false
            var maxReached = false


            parseGetIngrParameters()

            $(window).scroll(function() {
                // Check if the 3rd last card is visible in the viewport
                if (!stopTouching && !maxReached) {
                    const $thirdLastCard = $('#recipeSearch-cardContainer .card').eq(-3)
                    if (isElementInViewport($thirdLastCard)) {
                        console.log("Touching");
                        // Implement your lazy loading logic here
                        fetchNewRecipes(false)
                        stopTouching = true
                    }
                }

            });

            function isElementInViewport($element) {
                var windowHeight = $(window).height();
                var elementTop = $element.offset().top;
                var elementBottom = elementTop + $element.outerHeight();

                var viewportTop = $(window).scrollTop();
                var viewportBottom = viewportTop + windowHeight;

                return elementBottom > viewportTop && elementTop < viewportBottom;
            }

            function fetchNewRecipes(reload = true) {
                console.log("AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA")

                const labelArray = selectedIngredients.map(ingredient => ingredient.text);
                const cardContainer = $('#recipeSearch-cardContainer')
                const skeletonElement = `<div class="card mb-3 rounded skeleton-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="skeleton-image h-100"></div>
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
                    </div>`;
                const cardTemp = `<div class="rippleEffect card mb-3 rounded" recipeId="{recipeId}">
                        <div class="row g-0">
                            <div class="col-md-5 d-flex align-items-center">
                                <img src="{imageUrl}" class="img-fluid rounded h-100 w-100" alt="{recipeTitle2}">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body d-flex flex-column justify-content-between h-100">
                                    <h3 class="card-title fw-bold">{recipeTitle}</h3>
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <div class="d-flex flex-column">
                                                <h5>Time</h5>
                                                <p><i class="fa-regular fa-clock"></i>
                                                    &lt; {totalTime}mins </p>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex flex-column">
                                                <h5>Calories</h5>
                                                <p><i class="fa-solid fa-fire-flame-curved"></i> {totalCalories} kcal/100g</p>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex flex-column">
                                                <h5>Difficulty</h5>
                                                <div class="recipe-stars w-fit-content">
                                                    {totalDifficulties}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="scrollable-container overflow-auto hide-scrollbar1 hide-scrollbar2">
                                        <div class="d-flex flex-nowrap">
                                            {cautions}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`;

                let mealType = $('[aria-labelledby="mealTypeDropdown"]').data('selected') ? $(
                    '[aria-labelledby="mealTypeDropdown"]').data('selected') : null
                const dataCalorieAttribute = $('[aria-labelledby="calorieRangeDropdown"]').data('selected');
                const [min, max] = dataCalorieAttribute ? dataCalorieAttribute.trim().split('-').map(str =>
                    parseInt(str
                        .trim())) : [null, null];
                const calorieRange = {
                    min,
                    max
                };
                let health = $('[aria-labelledby="healthDropdown"]').data('selected') ? $(
                    '[aria-labelledby="healthDropdown"]').data('selected') : null

                // [
                //     "alcohol-cocktail",
                //     "alcohol-free",
                //     "celery-free",
                //     "crustacean-free",
                //     "dairy-free",
                //     "DASH",
                //     "egg-free",
                //     "fish-free",
                //     "fodmap-free",
                //     "gluten-free",
                //     "immuno-supportive",
                //     "keto-friendly",
                //     "kidney-friendly",
                //     "kosher",
                //     "low-fat-abs",
                //     "low-potassium",
                //     "low-sugar",
                //     "lupine-free",
                //     "Mediterranean",
                //     "mollusk-free",
                //     "mustard-free",
                //     "no-oil-added",
                //     "paleo",
                //     "peanut-free",
                //     "pescatarian",
                //     "pork-free",
                //     "red-meat-free",
                //     "sesame-free",
                //     "shellfish-free",
                //     "soy-free",
                //     "sugar-conscious",
                //     "sulfite-free",
                //     "tree-nut-free",
                //     "vegan",
                //     "vegetarian",
                //     "wheat-free"
                // ]

                // [
                //     "breakfast",
                //     "brunch",
                //     "lunch/dinner",
                //     "snack",
                //     "teatime"
                // ]
                let from, to;

                if (reload) {
                    from = 0
                    to = 15
                    currentRecipeMaxIdx = to
                    maxReached = false
                } else {
                    from = currentRecipeMaxIdx
                    to = currentRecipeMaxIdx + 15
                }

                $.ajax({
                    url: 'https://api.edamam.com/search',
                    method: 'GET',
                    data: (function() {
                        let requestData = {
                            app_id: '18f6495e',
                            app_key: '8bb396da11d4832a439ea25f315c827f',
                            q: labelArray.join('&'),
                            from: from,
                            to: to,
                            imageSize: 'LARGE',
                            time: '1+',
                        };

                        if (mealType) {
                            requestData.mealType = mealType;
                        }

                        if (calorieRange.min !== null && calorieRange.max !== null) {
                            // Add the calories property with the min-max range
                            requestData.calories = `${calorieRange.min}-${calorieRange.max}`;
                        }

                        if (health) {
                            requestData.health = health
                        }

                        return requestData;
                    })(),

                    success: function(data) {
                        console.log(data);

                        if (reload) {
                            cardContainer.empty()
                        } else {
                            cardContainer.find(".skeleton-card").remove();
                            currentRecipeMaxIdx = to
                        }

                        (() => {
                            let currentUrl = new URL(window.location.href);

                            if(mealType){
                                currentUrl.searchParams.set('mealType', mealType);
                            }

                            if(calorieRange.min !== null && calorieRange.max){
                                currentUrl.searchParams.set('calorieRange', `${calorieRange.min} - ${calorieRange.max} kcal `);
                            }

                            if(health){
                                currentUrl.searchParams.set('health', health);
                            }
                            
                            $('#mealTypeDropdown').html(mealType ? mealType.charAt(0).toUpperCase() + mealType.slice(1) + ' ' : 'Category ')

                            $('#calorieRangeDropdown').html(calorieRange.min !== null && calorieRange.max !== null ? `${calorieRange.min} - ${calorieRange.max} kcal ` : 'Calorie Range ')

                            $('#healthDropdown').html(health ? health+' ' : 'Dietary Restriction ')


                            history.pushState({}, '', currentUrl.toString());
                        })()

                        let cautionHTML = '';

                        for (let i = 0; i < data.hits.length; i++) {
                            let recipe = data.hits[i].recipe;
                            let recipeTitle = recipe.label;
                            let recipeImage = recipe.image;
                            let totalTime = recipe.totalTime;
                            let serving = recipe.yield > 0 ? recipe.yield : 1;
                            let calories = Math.round(Math.round(recipe.calories) / serving);
                            let cautions = recipe.cautions;

                            const maxCookingTime = 400; // Maximum cooking time in minutes
                            const maxNumIngredients = 20; // Maximum number of ingredients

                            // Normalize the values between 0 and 1
                            const normalizedCookingTime = Math.min(totalTime>maxCookingTime?maxCookingTime:totalTime / maxCookingTime, 1);
                            const normalizedNumIngredients = Math.min(recipe.ingredients.length>maxNumIngredients?maxNumIngredients:recipe.ingredients.length /
                                maxNumIngredients, 1);

                            // Set weights for each factor
                            const cookingTimeWeight = 0.6;
                            const numIngredientsWeight = 0.4;

                            // Combine the factors to calculate difficulty
                            let difficulty = (cookingTimeWeight * normalizedCookingTime +
                                numIngredientsWeight * normalizedNumIngredients) * 5;

                            // Ensure the difficulty is within the range of 1 to 5
                            difficulty = Math.round(difficulty);

                            // Ensure the difficulty is within the range of 1 to 5
                            difficulty = Math.max(1, Math.min(difficulty, 5));

                            const filledStars = new Array(Math.floor(difficulty + 1)).join(
                                '<i class="fas fa-star"></i>');
                            const emptyStars = new Array(Math.floor((5 - difficulty) + 1)).join(
                                '<i class="far fa-star"></i>');

                            // Combine filled and empty stars
                            const difficultyStarsHtml = filledStars + emptyStars;


                            let totalDifficulties = difficultyStarsHtml

                            let uri = recipe.uri;
                            const parts = uri.split("#recipe_");
                            let recipeId

                            if (parts.length === 2) {
                                recipeId = parts[1];
                            } else {
                                recipeId = "Pattern not found in the URL";
                            }

                            // Printing the extracted data for each recipe
                            console.log("Recipe Title:", recipeTitle);
                            console.log("Recipe Image:", recipeImage);
                            console.log("Total Time:", totalTime);
                            console.log("Calories:", calories);
                            cautions.forEach((caution) => {
                                console.log("Caution:", caution);
                                cautionHTML +=
                                    `<div class="me-2"><span class="badge bg-primary rounded-pill">${caution}</span></div>`;
                            });

                            // Add a separator for readability
                            console.log("---------------");

                            let temp = cardTemp

                            temp = temp.replace('{imageUrl}', recipeImage)
                            temp = temp.replace('{recipeTitle}', recipeTitle)
                            temp = temp.replace('{recipeTitle2}', recipeTitle)
                            temp = temp.replace('{totalTime}', totalTime)
                            temp = temp.replace('{totalCalories}', calories)
                            temp = temp.replace('{cautions}', cautionHTML)
                            temp = temp.replace('{recipeId}', recipeId)
                            temp = temp.replace('{totalDifficulties}', totalDifficulties)

                            const $temp2 = $(temp)
                            $temp2.data('recipeId', recipeId)

                            cardContainer.append($temp2)
                        }

                        if (data.hits.length === 0 && reload) {
                            cardContainer.append(`<div class="card mb-3 rounded border-0">
                        <div class="row g-0 justify-content-center">

                            <div class="col-md-4">
                                <img style="max-height: unset;" src="assets/illustration/undraw_barbecue_3x93.svg" class="img-fluid rounded h-100 w-100" alt="Image">
                            </div>
                        <h3 class="card-title fw-bold text-center mt-5">Not Found</h3></div>
                    </div>`)
                        } else if (data.hits.length === 0 && !reload) {
                            cardContainer.append(`<div class="card mb-3 rounded border-0">
                        <div class="row g-0 justify-content-center">
                        <h3 class="card-title fw-bold text-center mt-5">End Of Data</h3></div>
                    </div>`)
                            maxReached = true
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error('AJAX request failed:', textStatus, errorThrown);
                    },
                    complete: function() {
                        console.log("dsdasdsadDONE")
                        stopTouching = false
                    },
                    beforeSend: function() {
                        // This code will run before the request is sent
                        console.log('Sending request...');
                        if (reload) {
                            cardContainer.empty()
                        } else {
                            cardContainer.find(".skeleton-card").remove();
                        }
                        cardContainer.append(skeletonElement)
                        cardContainer.append(skeletonElement)
                        cardContainer.append(skeletonElement)
                    },
                });
            }
            fetchNewRecipes()

            function getFetchFood(params) {
                return function() {
                    return new Promise((resolve, reject) => {
                        fetchFoodAutoComplete(params)
                            .then(resolve)
                            .catch(reject);
                    });
                };
            }

            function fetchFoodAutoComplete(query) {
                console.log("BBBBBBBBBBBBBBBBBBBBBBB")

                const apiUrl = 'https://api.edamam.com/api/food-database/parser';

                const apiParams = {
                    app_id: '8cae9c2e',
                    app_key: 'cec4f5cf2b9f7696ac8cb0dca32d6769',
                    ingr: query
                };

                return new Promise((resolve, reject) => {
                    $.ajax({
                            url: apiUrl,
                            method: 'GET',
                            data: apiParams,
                        })
                        .done(function(data) {
                            const labels = data.hints.map(hint => ({
                                foodId: hint.food.foodId,
                                label: hint.food.label,
                                image: hint.food.image
                            }));

                            const uniqueLabelsSet = new Set();
                            const uniqueLabels = labels.filter(item => {
                                if (!uniqueLabelsSet.has(item.label)) {
                                    uniqueLabelsSet.add(item.label);
                                    return true; // Include the item in the filtered array (it's unique)
                                }
                                return false; // Skip the item (it's a duplicate)
                            });
                            resolve(uniqueLabels);
                        })
                        .fail(function(jqXHR, textStatus, errorThrown) {
                            console.error('AJAX request failed:', textStatus, errorThrown);
                            reject(errorThrown);
                        });
                });
            }




            function updateSelectedRecipe() {
                const selectedIngre = $('.selected-recipe');
                selectedIngredients = [];

                selectedIngre.each(function() {
                    const $element = $(this);
                    const innerHTML = $element.html();
                    const edamamId = $element.data('edamamId'); // Get the 'edamamId' from data attribute

                    selectedIngredients.push({
                        text: innerHTML,
                        edamamId: edamamId, // Store both the HTML and 'edamamId'
                    });
                });

                console.log(selectedIngredients);


                const params = selectedIngredients.map(ingredient =>
                    `${encodeURIComponent(ingredient.text)}=${encodeURIComponent(ingredient.edamamId)}`).join(
                    '&');

                // Get the current URL
                const currentUrl = window.location.href;

                // Remove existing 'ingr' parameter
                const baseUrl = currentUrl.split('?')[0];

                // Set the new URL with the updated parameters
                const newUrl = baseUrl + '?' + params;

                // Replace the current state with the new URL
                window.history.replaceState({}, document.title, newUrl);

                clearTimeout(debounceTimer);
                debounceTimer = setTimeout(fetchNewRecipes, debounceDelay);
            }

            function parseGetIngrParameters() {
                const urlParams = new URLSearchParams(window.location.search);
                selectedIngredients = [];

                for (const [key, value] of urlParams.entries()) {
                    if(key !== "health" && key !== "calorieRange" && key !== "mealType"){
                        selectedIngredients.push({
                            text: key, // Use the parameter key as the text
                            edamamId: value, // Use the parameter value as the edamamId
                        });
                    }

                    if(key === "health"){
                        $('[aria-labelledby="healthDropdown"]').data('selected', value)
                    }

                    if(key === "calorieRange"){
                        $('[aria-labelledby="calorieRangeDropdown"]').data('selected', value)
                    }

                    if(key === "mealType"){
                        $('[aria-labelledby="mealTypeDropdown"]').data('selected', value)
                    }

                }
                // updateSelectedRecipe();

                console.log(selectedIngredients)


                selectedIngredients.forEach(function(ingredient) {
                    const text = ingredient.text; // Get the 'text' attribute
                    const edamamId = ingredient.edamamId;

                    // console.log(`Text: ${text}, EdamamId: ${edamamId}`);

                    const template =
                        '<button class="btn btn-outline-primary rounded-pill px-3 selected-recipe"></button>';
                    const $element = $(template);

                    const removeEmpty = $('#selected-recipe-container .empty-recipe');
                    if (removeEmpty.length) {
                        removeEmpty.remove()
                    }

                    $element.data('edamamId', edamamId);
                    $element.text(text);

                    $('#selected-recipe-container > #selected-chips-wrapper').append($element);
                });




                // clearTimeout(debounceTimer);
                // debounceTimer = setTimeout(fetchNewRecipes, debounceDelay);
            }

            //remove singular recipe
            $('#selected-recipe-container').on('click', '.selected-recipe', function() {
                $(this).remove();
                if ($(".selected-recipe").length == 0 && $('.empty-recipe').length == 0) {
                    console.log("empty")

                    const newElement = $(
                        '<span class="badge bg-secondary my-1 rounded-pill position-relative empty-recipe w-100">Select an Ingredient</span>'
                    );

                    $('#selected-recipe-container > #selected-chips-wrapper').append(newElement);
                }

                updateSelectedRecipe()

            })

            $('#remove-whole-recipe').on('click', function() {
                $('.selected-recipe').remove()

                if ($(".selected-recipe").length == 0 && $('.empty-recipe').length == 0) {
                    console.log("empty")

                    const newElement = $(
                        '<span class="badge bg-secondary my-1 rounded-pill position-relative empty-recipe w-100">Select an Ingredient</span>'
                    );

                    $('#selected-recipe-container').append(newElement);
                }

                updateSelectedRecipe()

            })

            // $('#recipe-ingr-dropdown > li > .dropdown-item').each(function() {
            //     const edamamId = $(this).data('edamamId');
            //     console.log('edamamId:', edamamId);
            // });

            $('#recipe-ingr-dropdown').on('click', '.dropdown-item.cursor-pointer', function(e) {
                e.stopPropagation();
                console.log("Dsadsadsad")
                console.log($(this).data('edamamId'))


                const edamamIdToCheck = $(this).data('edamamId')
                const edamamTextToCheck = $(this).html()

                let edamamIdExists = false;
                let edamamTextExists = false;

                for (const ingredient of selectedIngredients) {
                    if (ingredient.edamamId === edamamIdToCheck) {
                        edamamIdExists = true;
                        break;
                    }

                    if (ingredient.text === edamamTextToCheck) {
                        edamamIdExists = true;
                        break;
                    }
                }

                if (!(edamamIdExists || edamamTextExists)) {
                    // const template =
                    //     '<span class="badge bg-primary my-1 position-relative selected-recipe"></span>';
                    const template =
                        '<button class="btn btn-outline-primary rounded-pill px-3 selected-recipe"></button>';
                    const $element = $(template);

                    const removeEmpty = $('#selected-recipe-container .empty-recipe');
                    if (removeEmpty.length) {
                        removeEmpty.remove()
                    }

                    $element.data('edamamId', $(this).data('edamamId'));
                    $element.text($(this).html());

                    $('#selected-recipe-container > #selected-chips-wrapper').append($element);




                    const dropdownToggle = $('.dropdown')
                    dropdownToggle.find('#add-recipe-search').removeClass('show')
                    dropdownToggle.find('ul').removeClass('show')
                    dropdownToggle.find('#add-recipe-search').attr('aria-expanded', 'false')


                    updateSelectedRecipe()
                } else {
                    if (edamamIdExists) {
                        alert("ALREADY EXIST (id)")
                    } else {
                        alert("ALREADY EXIST")
                    }
                }


            })

            $('#add-recipe-search').on('keyup', function(event) {
                // if (event.keyCode === 13) {
                //     console.log("22222222")



                //     updateSelectedRecipe()

                // } else {
                const ingrDropdown = $('#recipe-ingr-dropdown')
                const searchQ = $(this).val()

                if ((searchQ.length)) {

                    const skeletonLoading = '<div class="skeleton-info mx-3 rounded w-auto"></div>'
                    const skeletonLoading2 = '<div class="skeleton-info mx-3 rounded w-50 mb-3"></div>'

                    // '<li><a class="dropdown-item cursor-pointer p-3 text-truncate" href="#">Option 2</a></li>'


                    const skeletonInfoElements = ingrDropdown.find('.skeleton-info');

                    if (!skeletonInfoElements.length) {
                        ingrDropdown.empty()

                        ingrDropdown.append(skeletonLoading)
                        ingrDropdown.append(skeletonLoading)
                        ingrDropdown.append(skeletonLoading2)
                        ingrDropdown.append(skeletonLoading)
                        ingrDropdown.append(skeletonLoading)
                        ingrDropdown.append(skeletonLoading2)

                    }




                    clearTimeout(debounceTimer);
                    debounceTimer = setTimeout(async () => {
                        try {
                            const data = await getFetchFood(searchQ)();

                            console.log(data)

                            const ingrDropdown = $('#recipe-ingr-dropdown');
                            ingrDropdown.empty();

                            if (data.length) {
                                for (const item of data) {
                                    const foodId = item.foodId;
                                    const label = item.label;
                                    const img = item.image;

                                    const template =
                                        `<li class="d-inline-flex w-100 align-items-center p-2">
                                            <img src="" alt="" class="img-fluid rounded" style="width: 4em;">
                                            <a class="dropdown-item cursor-pointer p-3 text-truncate">{LABEL}</a></li>`;
                                    const $element = $(template);

                                    $element.find('a').data('edamamId', foodId);
                                    $element.find('a').text(label);
                                    $element.find('img').attr('src', img)
                                    $element.find('img').attr('alt', label)

                                    if ($('#add-recipe-search').val().length) {
                                        ingrDropdown.append($element);
                                    } else {
                                        ingrDropdown.empty();
                                        ingrDropdown.append(
                                            '<li><a class="dropdown-item p-3 text-truncate">Start Typing...</a></li>'
                                        );
                                        break;
                                    }
                                }
                            } else {
                                ingrDropdown.empty();
                                ingrDropdown.append(
                                    '<li><a class="dropdown-item p-3 text-truncate">Not Found</a></li>'
                                );
                            }

                            if (searchQ === $(this).val()) {
                                const template =
                                    '<li class="px-2 border-top pt-2">add yours <i class="fa-solid fa-plus"></i><a class="dropdown-item cursor-pointer p-3 text-truncate bg-info mt-2">{LABEL}</a></li>';
                                const $element = $(template);

                                $element.find('a').data('edamamId', "food_self_" + searchQ);
                                $element.find('a').text(searchQ);
                                ingrDropdown.append($element);
                            }


                        } catch (error) {
                            // Handle errors here
                            console.error(error);
                        }
                    }, debounceDelay);
                } else {
                    ingrDropdown.empty()
                    const template =
                        '<li><a class="dropdown-item p-3 text-truncate">{LABEL}</a></li>';
                    ingrDropdown.append(template.replace('{LABEL}', "Start Typing..."))
                }

                // }
            })
        })
    </script>
@endsection
