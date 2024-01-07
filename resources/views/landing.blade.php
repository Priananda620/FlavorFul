@extends('layout')
@section('content')
    <div
        style="z-index: -1;width: 1337px;height: 1337px;left: 890px;top: -410px;position: absolute;background: #F8FAFB;border-radius: 9999px">
    </div>
    <section id="hero-content">
        <div class="container">
            <div class="row justify-content-center align-items-center py-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="fw-bold" style="font-size: 3em">
                        Cooking<br>
                        With Your<br>
                        Ingredients<br>
                    </h1>
                    <p class="lh-base my-3 text-muted me-lg-5 pe-lg-5 mt-4">
                        Find recipes according to your available ingredients on our website!
                    </p>
                    <div class="d-flex flex-column flex-sm-row justify-content-lg-start justify-content-center mt-5 mt-lg-0">
                        <a class="btn btn-primary mb-2 mb-sm-0 me-sm-2 px-4 text-white" href="{{ url('/landing') }}">
                            Get Started
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center mt-5 mt-lg-0">
                    <img class="img-fluid" src="{{ asset('assets/illustration/illus_1.png') }}" style="max-width: 500px;">
                </div>
            </div>
        </div>
    </section>

    <section style="background: var(--secondary-foreground); margin-top: 10em">
        <div class="container">
            <div class="row justify-content-center align-items-center py-5">
                <div class="col-lg-6 text-center text-lg-start shadow pe-0 parallax" style="transform: translateY(-120px);">
                    <div class="position-relative text-white p-3 pe-5 left-overflow" style="background: #577051">
                        <div class="column">
                            <div class="row-md-4 my-3">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/illustration/food-plate-avatar/1-min.png') }}"
                                        alt="Avatar" class="rounded-circle avatar me-3">

                                    <div class="d-flex flex-column w-100">
                                        <span class="fw-bold fs-5 mb-2 text-start">Nutritional Analysis</span>
                                        <span class="text-light fs-6 text-start">Provides Comprehensive Nutritional Analysis for Every Recipe</span>

                                    </div>
                                    <i class="fa-solid fa-circle-check fs-2"></i>
                                </div>
                            </div>

                            <div class="row-md-4 my-3">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/illustration/food-plate-avatar/2-min.png') }}"
                                        alt="Avatar" class="rounded-circle avatar me-3">
                                    <div class="d-flex flex-column w-100">
                                        <span class="fw-bold fs-5 mb-2 text-start">Meal Recommendations</span>
                                        <span class="text-light fs-6 text-start">Produces Personalized Meal Recommendations</span>

                                    </div>
                                    <i class="fa-solid fa-circle-check fs-2"></i>
                                </div>
                            </div>

                            <!-- Add more col-md-4 blocks as needed -->
                        </div>
                    </div>
                    {{-- <div class="position-relative mt-4 left-overflow" style="background: white">

                </div> --}}
                    <div class="position-relative p-3 pe-5 left-overflow" style="background: white">
                        <h6 class="fw-bold mt-5">benefits from</h6>
                        <h4 class="fw-bold mb-5">
                            Based on Your Ingredients
                        </h4>
                        <div class="column">
                            <div class="row-md-4 mb-4">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/illustration/food-plate-avatar/3-min.png') }}"
                                        alt="Avatar" class="rounded-circle avatar me-3">

                                    <div class="d-flex flex-column w-100">
                                        <span class="fw-bold fs-5 mb-2 text-start">Personalized Suggestions</span>
                                        <span class="text-secondary fs-6 text-start">Obtain personalized suggestions based on your individual requirements and interests</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row-md-4 mb-4">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/illustration/food-plate-avatar/4-min.png') }}"
                                        alt="Avatar" class="rounded-circle avatar me-3">
                                    <div class="d-flex flex-column">
                                        <span class="fw-bold fs-5 mb-2 text-start">Nutritional Compositions</span>
                                        <span class="text-secondary fs-6 text-start">Find out more about the nutritional composition of items, portion sizes, and overall meal planning</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row-md-4 mb-4">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/illustration/food-plate-avatar/5-min.png') }}"
                                        alt="Avatar" class="rounded-circle avatar me-3">
                                    <div class="d-flex flex-column w-100">
                                        <span class="fw-bold fs-5 mb-2 text-start">Dietary Preferences</span>
                                        <span class="text-secondary fs-6 text-start">Personalize your dietary preferences</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Add more col-md-4 blocks as needed -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img class="img-fluid" src="{{ asset('assets/illustration/illus_3.png') }}" style="max-width: 500px;">
                </div>
            </div>
        </div>
    </section>

    <section style="background: var(--secondary-foreground)">
        <div class="text-center container mb-5">
            <h2 class="fw-bold">Popular Recipe</h2>
            <div class="text-secondary">Provide rceipe based on your dietry preference</div>
        </div>
        <div class="container" id="popular-container">
            <div class="row mt-4 justify-content-center">

                {{-- <div class="col-md-6 col-lg-3 mb-4">
                    <div
                        class="recipe-card position-relative rounded shadow-sm d-grid align-items-start h-100 align-content-start">
                        {{-- <div class="position-absolute p-2 rounded-pill cursor-pointer heart-recipe">
                        <i class="fa-solid fa-heart text-white fs-3"></i>
                    </div>
                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                    alt="Recipe Image" class="recipe-image">
                <div class="recipe-details d-flex justify-content-start flex-column flex-wrap w-100 p-4">
                    <div class="mb-2">
                        <span class="badge bg-light text-dark">
                            <i class="fa-solid fa-clock"></i>
                            60 mins
                        </span>
                        <span class="badge bg-light text-dark">
                            <div class="recipe-stars w-fit-content">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </span>
                    </div>
                    <h2 style="overflow: hidden; text-overflow: ellipsis;" class="recipe-title m-0 w-fit-content">
                        &amp; pumpkin &amp; pumpkin &amp; pumpkin &amp; pumpkin &amp; pumpkin &amp; pumpkin &amp;
                        pumpkin &amp; pumpkin &amp; pumpkin &amp; pumpkin &amp; pumpkin &amp; pumpkin &amp; pumpkin
                        &amp; pumpkin &amp; pumpkin &amp; pumpkin</h2>
                </div>
            </div>
        </div> --}}




        <!-- Add more recipe cards as needed -->
        </div>
        </div>
    </section>


    <section style="background: var(--secondary-foreground)" class="pt-5">
        <div class="container pt-5">
            <h2 class="text-center mb-5 fw-bold">
                Find Recipe By Category
            </h2>
            <div class="row" style="transform: translateY(8em);margin-top: -8em;">
                <div class="col-md-6 col-lg-3 mb-4 text-center">
                    <div class="recipe-card position-relative rounded shadow-sm p-4">

                        <img src="{{ asset('assets/illustration/food-plate-avatar/breakfasr-min.png') }}"
                            alt="Avatar" class="rounded-circle avatar" style="width: 10em: height: 10em">
                        <div class="recipe-details d-flex justify-content-start flex-column flex-wrap w-100">


                            <h2 class="recipe-title m-0 mt-3 mb-4">breakfast</h2>

                            <a href="/explore?mealType=breakfast" class="text-light btn btn-primary w-fit-content m-auto mt-3 px-5">
                                Explore
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-4 text-center">
                    <div class="recipe-card position-relative rounded shadow-sm p-4">

                        <img src="{{ asset('assets/illustration/food-plate-avatar/lunch-min.png') }}"
                            alt="Avatar" class="rounded-circle avatar" style="width: 10em: height: 10em">
                        <div class="recipe-details d-flex justify-content-start flex-column flex-wrap w-100">


                            <h2 class="recipe-title m-0 mt-3 mb-4">lunch</h2>

                            <a href="/explore?mealType=lunch" class="text-light btn btn-primary w-fit-content m-auto mt-3 px-5">
                                Explore
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-4 text-center">
                    <div class="recipe-card position-relative rounded shadow-sm p-4">

                        <img src="{{ asset('assets/illustration/food-plate-avatar/brunch-min.png') }}"
                            alt="Avatar" class="rounded-circle avatar" style="width: 10em: height: 10em">
                        <div class="recipe-details d-flex justify-content-start flex-column flex-wrap w-100">


                            <h2 class="recipe-title m-0 mt-3 mb-4">brunch</h2>

                            <a  href="/explore?mealType=brunch" class="text-light btn btn-primary w-fit-content m-auto mt-3 px-5">
                                Explore
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-4 text-center">
                    <div class="recipe-card position-relative rounded shadow-sm p-4">

                        <img src="{{ asset('assets/illustration/food-plate-avatar/dinner-min.png') }}"
                            alt="Avatar" class="rounded-circle avatar" style="width: 10em: height: 10em">
                        <div class="recipe-details d-flex justify-content-start flex-column flex-wrap w-100">


                            <h2 class="recipe-title m-0 mt-3 mb-4">dinner</h2>

                            <a  href="/explore?mealType=dinner"  class="text-light btn btn-primary w-fit-content m-auto mt-3 px-5">
                                Explore
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <div class="footer py-5">
        <div class="container" style="margin-top: 10em;">
            <div class="row">
                <div class="col-md-4">
                    <h5>About Us</h5>
                    <p>Discover a world of flavour at Flavorful! Unleash your culinary creativity with our diverse and easy-to-follow recipes. Join us in the joy of cooking and make every meal a delicious adventure. Happy cooking!</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{url('/home')}}">Home</a></li>
                        <li><a href="{{url('/explore')}}">Explore</a></li>
                        <li><a href="{{url('/popular')}}">Popular</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            {!! file_get_contents('assets/logo.svg') !!}
                        </a>
            
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <p>2023 Flavorful. Designed by self</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <ul class="list-unstyled d-flex">
                        <li class="me-3"><a href="#"><i class="bi bi-facebook"></i></a></li>
                        <li class="me-3"><a href="#"><i class="bi bi-twitter"></i></a></li>
                        <li class="me-3"><a href="#"><i class="bi bi-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(() => {
            $('body').on('click', '.card', function(e) {
                window.location.href = 'recipe-details/' + $(this).data('recipeId').split("recipe_")[1];
                console.log("CLICK");
            });

            let cardTemp = `
            <div class="col-md-6 col-lg-3 mb-4">
                            <div class="col g-0">
                                <div class="row-md-4">
                                    <img src="{image}"
                                        class="img-fluid rounded h-100 w-100" alt="{label}">
                                </div>
                                <div class="row-md-8">
                                    <div class="card-body d-flex flex-column justify-content-between h-100">
                                        <h3 class="card-title fw-bold line-clamp-2">{label}</h3>
                                        <div class="d-inline-flex mb-3" id="avg-rating">

                                            <div class="recipe-stars w-fit-content">
                                                {stars}
                                                <span class="ms-1">{rating}</span>
                                            </div>

                                            <div class="ms-2">({totalReview} Review)</div>
                                        </div>
                                        <div class="d-flex flex-row my-3">
                                            <div class="flex-grow-1">
                                                <div class="d-flex flex-row">
                                                    <div class="me-2">
                                                        <span class="badge bg-success rounded-pill fs-6">
                                                            <i class="fa-heart fa-solid me-2"></i><span
                                                                class="pe-2">{totalLike}</span>
                                                            <i class="fa-bookmark fa-solid ps-2 border-start border-2 border-secondary me-2"></i><span>{totalSaved}</span>
                                                        </span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-success rounded-pill fs-6">
                                                            <span class="me-2">{totalView}</span><i class="fa-solid fa-eye"></i>
                                                        </span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-success rounded-pill fs-6">
                                                            <span class="me-2">{totalScore}</span><i
                                                                class="fa-solid fa-fire-flame-curved"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
            `

            let skeletonCard = `<div class="col-md-6 col-lg-3 mb-4">
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

            const popularContainer = $('#popular-container > .row')

            const requestHeaders = {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'Authorization': 'Bearer ' + $.cookie('api_plain_token')
            };

            const getPopular = (() => {
                $.ajax({
                    url: window.location.origin + "/api/" + 'get/popular_recipe',
                    type: 'GET',
                    headers: requestHeaders,
                    success: function(response) {
                        popularContainer.empty()
                        popularContainer.empty()
                        popularContainer.empty()


                        const max = response.total > 4 ? 4 : response.total

                        $('html body section div.text-center.container.mb-5 h2.fw-bold').append(' (' + (max) + ')')

                        

                        for (let i = 0; i < max; i++) {
                            const recipe = response.recipes[i];
                            const recipeTitle = recipe.title;
                            const recipeImage = recipe.image;
                            const recipePopularityScore = recipe.popularity_score;
                            const recipeViewCount = recipe.view_count;
                            const recipe_like_count = recipe.recipe_like_count;
                            const saved_recipe_count = recipe.saved_recipe_count;
                            const totalReview = recipe.comment.length;

                            const totalRating = recipe.comment.reduce((sum, comment) => sum +
                                comment.rating, 0);
                            const avgRating = (totalRating / totalReview).toFixed(1);

                            let temp

                            temp = cardTemp


                            temp = temp.replace('{image}', recipeImage)
                            temp = temp.replaceAll('{label}', recipeTitle)
                            temp = temp.replace('{totalScore}', recipePopularityScore)
                            temp = temp.replace('{totalView}', recipeViewCount)
                            temp = temp.replace('{totalLike}', recipe_like_count)
                            temp = temp.replace('{totalSaved}', saved_recipe_count)
                            temp = temp.replace('{totalReview}', totalReview)
                            temp = temp.replace('{rating}', !isNaN(avgRating) ? avgRating :
                                '0.0')

                            const starsSolid = new Array((Math.round(avgRating) > 0 ? (Math
                                .round(avgRating)) : 0) + 1).join(
                                '<i class="fas fa-star"></i>')
                            const starsHollow = new Array((Math.round(avgRating) > 0 ? (5 - Math
                                .round(avgRating)) : 5) + 1).join(
                                '<i class="far fa-star"></i>')

                            temp = temp.replace('{stars}', starsSolid + starsHollow)

                            let $temp = $(temp)
                            $temp.data('recipeId', recipe.edamamId)

                            popularContainer.append($temp)

                        }

                    },
                    error: function(error) {
                        console.error(error);
                    },
                    beforeSend: function() {

                        popularContainer.empty()
                        popularContainer.append(
                            skeletonCard)
                        popularContainer.append(
                            skeletonCard)
                        popularContainer.append(
                            skeletonCard)
                        popularContainer.append(
                            skeletonCard)
                    },
                    complete: function() {}
                });

            })()
        })
    </script>
@endsection
