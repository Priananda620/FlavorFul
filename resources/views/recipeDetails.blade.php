@extends('layout')
@section('content')
    <section style="height: 30em;" class="position-relative">
        <img src="{{ $recipeData['image'] }}" class="img-fluid h-100 w-100" alt="Image">
        <div class="position-absolute end-0 bottom-0 p-2 bg-light fs-1 d-inline-flex gap-2">
            <div class="cursor-pointer mx-2" id="showSaveModal">
                {{-- <i class="fa-solid fa-bookmark"></i> --}}
                <i class="fa-regular fa-bookmark"></i>
            </div>

            <div class="cursor-pointer mx-2">
                {{-- <i class="fa-solid fa-heart"></i> --}}
                <i class="fa-regular fa-heart"></i>
            </div>

            <div class="cursor-pointer mx-2">
                <i class="fa-solid fa-share-nodes"></i>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="bg-white p-2 fw-bold rounded shadow"
                        style="transform: translateY(-1em);width: fit-content;max-width: 14em;">
                        {{ $recipeData['label'] }}
                    </h1>

                    <div class="d-inline-flex mb-3">
                        <div class="me-3">
                            Review by 1.000 People
                        </div>

                        <div class="recipe-stars w-fit-content">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            &nbsp;
                            5.0
                        </div>
                    </div>

                    <div class="mt-5 mb-4">
                        <h4 class="fw-bold">Ingredients</h4>
                    </div>

                    <div>
                        <ul class="list-unstyled">
                            @php
                                foreach ($recipeData['ingredients'] as $index => $ingredient) {
                                    $text = $ingredient['text'];
                                    // $quantity = $ingredient['quantity'];
                                    // $measure = $ingredient['measure'];
                                    // $food = $ingredient['food'];
                                    // $weight = $ingredient['weight'];
                                    // $foodCategory = $ingredient['foodCategory'];
                                    // $foodId = $ingredient['foodId'];
                                    // $image = $ingredient['image'];

                                    // echo "Ingredient Text: $text<br>";
                                    // echo "Quantity: $quantity<br>";
                                    // echo "Measure: $measure<br>";
                                    // echo "Food: $food<br>";
                                    // echo "Weight: $weight<br>";
                                    // echo "Food Category: $foodCategory<br>";
                                    // echo "Food ID: $foodId<br>";
                                    // echo "Image URL: $image<br>";

                                    $ingredientHtml =
                                        '<li class="d-flex align-items-center my-3">
                                            <div class="rounded-circle bg-primary text-white p-2 me-2 bullet-number text-center">' .
                                        ++$index .
                                        '</div>
                                            <div style="width: 70%;">' .
                                        $text .
                                        '</div>
                                        </li>';

                                    echo $ingredientHtml;
                                }

                            @endphp
                        </ul>
                    </div>

                    <div class="mt-5 mb-4">
                        <h4 class="fw-bold">Instructions</h4>
                    </div>

                    <div>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center my-3">
                                <div class="rounded-circle bg-primary text-white p-2 me-2 bullet-number text-center">1</div>
                                <div style="width: 70%;">chicken</div>
                            </li>
                            <li class="d-flex align-items-center my-3">
                                <div class="rounded-circle bg-primary text-white p-2 me-2 bullet-number text-center">2</div>
                                <div style="width: 70%;">chicken</div>
                            </li>
                            <li class="d-flex align-items-center my-3">
                                <div class="rounded-circle bg-primary text-white p-2 me-2 bullet-number text-center">3</div>
                                <div style="width: 70%;">chicken</div>
                            </li>
                            <li class="d-flex align-items-center my-3">
                                <div class="rounded-circle bg-primary text-white p-2 me-2 bullet-number text-center">1</div>
                                <div style="width: 70%;">chicken</div>
                            </li>
                            <li class="d-flex align-items-center my-3">
                                <div class="rounded-circle bg-primary text-white p-2 me-2 bullet-number text-center">2</div>
                                <div style="width: 70%;">chicken</div>
                            </li>
                            <li class="d-flex align-items-center my-3">
                                <div class="rounded-circle bg-primary text-white p-2 me-2 bullet-number text-center">3</div>
                                <div style="width: 70%;">chicken</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 my-5">
                    <div class="rounded shadow p-4">
                        <div class="nutrition-facts">
                            <h1 class="fw-bold">Nutrition Facts</h1>

                            <!-- Serving Size -->
                            <div class="col my-4">
                                <div class="row-md-6">
                                    <div class="fs-3 d-flex flex-row justify-content-between">
                                        <span>
                                            Serving Size
                                        </span>

                                        <span>1 Serving</span>
                                    </div>
                                </div>
                                <div class="row-md-6">
                                    <div class="progress mt-2" style="height: 1em">
                                        <div class="progress-bar" style="width: 0%"> </div>
                                    </div>
                                </div>
                                <div class="row-md-6">
                                    <p class="text-secondary mt-2">Amount per serving</p>
                                </div>
                            </div>

                            <!-- Calories -->
                            <div class="col my-4">
                                <div class="row-md-6">
                                    {{-- {{$recipeData['calories']}} --}}
                                    <h3>Calories <span
                                            class="float-end">{{ round(round($recipeData['calories']) / $recipeData['yield']) }}</span>
                                    </h3>
                                </div>
                                <div class="row-md-6">
                                    <div class="progress" style="height: 1em">
                                        <div class="progress-bar" style="width: 0%"> </div>
                                    </div>
                                </div>
                                <div class="row-md-6">
                                    <p class="text-secondary mt-2 text-end">% Daily Value</p>
                                </div>
                            </div>

                            <!-- Fat -->
                            {{-- <div class="col my-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Total Fat 26g</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>33%</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="ms-3">Saturated Fat 12g</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>60%</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Sodium 1,376mg</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>60%</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Total Carbs 128g</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>47%</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="ms-3">Total Sugars 40g</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p></p>
                                        <!-- This is empty because there's no percentage provided for Total Sugars -->
                                    </div>
                                    <div class="col-md-6">
                                        <p>Protein 102g</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>204%</p>
                                    </div>
                                </div>

                            </div> --}}

                            <div class="col my-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>{{ $recipeData['totalNutrients']['FAT']['label'] }}
                                            {{ number_format($recipeData['totalNutrients']['FAT']['quantity'], 2) }}{{ $recipeData['totalNutrients']['FAT']['unit'] }}
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ number_format($recipeData['totalDaily']['FAT']['quantity'], 2) }}{{ $recipeData['totalDaily']['FAT']['unit'] }}
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="ms-3">{{ $recipeData['totalNutrients']['FASAT']['label'] }}
                                            {{ number_format($recipeData['totalNutrients']['FASAT']['quantity'], 2) }}{{ $recipeData['totalNutrients']['FASAT']['unit'] }}
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ number_format($recipeData['totalDaily']['FASAT']['quantity'], 2) }}{{ $recipeData['totalDaily']['FASAT']['unit'] }}
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $recipeData['totalNutrients']['NA']['label'] }}
                                            {{ number_format($recipeData['totalNutrients']['NA']['quantity'], 2) }}{{ $recipeData['totalNutrients']['NA']['unit'] }}
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ number_format($recipeData['totalDaily']['NA']['quantity'], 2) }}{{ $recipeData['totalDaily']['NA']['unit'] }}
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $recipeData['totalNutrients']['CHOCDF']['label'] }}
                                            {{ number_format($recipeData['totalNutrients']['CHOCDF']['quantity'], 2) }}{{ $recipeData['totalNutrients']['CHOCDF']['unit'] }}
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ number_format($recipeData['totalDaily']['CHOCDF']['quantity'], 2) }}{{ $recipeData['totalDaily']['CHOCDF']['unit'] }}
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="ms-3">{{ $recipeData['totalNutrients']['SUGAR']['label'] }}
                                            {{ number_format($recipeData['totalNutrients']['SUGAR']['quantity'], 2) }}{{ $recipeData['totalNutrients']['SUGAR']['unit'] }}
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $recipeData['totalNutrients']['PROCNT']['label'] }}
                                            {{ number_format($recipeData['totalNutrients']['PROCNT']['quantity'], 2) }}{{ $recipeData['totalNutrients']['PROCNT']['unit'] }}
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ number_format($recipeData['totalDaily']['PROCNT']['quantity'], 2) }}{{ $recipeData['totalDaily']['PROCNT']['unit'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <!-- Daily Value -->
                            <div class="col my-4">
                                <div class="col-md-12">
                                    <p class="text-secondary text-justify">* The % Daily Value (DV) tells you how much a
                                        nutrient in a serving of food contributes to a daily diet. 2,000 calories a day is
                                        used for a general nutrition advice.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="container mt-5 ">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 p-4 shadow rounded">
                    <div class="headings d-flex justify-content-between align-items-center mb-3">
                        <h5 class="fw-bold">Leave a Review</h5>
                    </div>
                    <div class="mb-3">
                        <div class="btn-group d-flex justify-content-between align-items-center " id="star-rating">
                            <button type="button" class="btn btn-outline-warning" data-rating="1">1</button>
                            <button type="button" class="btn btn-outline-warning" data-rating="2">2</button>
                            <button type="button" class="btn btn-outline-warning" data-rating="3">3</button>
                            <button type="button" class="btn btn-outline-warning" data-rating="4">4</button>
                            <button type="button" class="btn btn-outline-warning" data-rating="5">5</button>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <p>Your rating: <span id="selected-rating">0</span> stars</p>
                    </div>

                    <div class="d-flex justify-content-center align-items-center mb-3">
                        <form class="w-100">
                            <div class="mb-3">
                                {{-- <label for="exampleInputReview1" class="form-label">Write Your Review</label> --}}

                                <textarea placeholder="Write Your Review..." type="review" class="form-control" id="exampleInputReview1"
                                    aria-describedby="reviewHelp"></textarea>
                                {{-- <div id="reviewHelp" class="form-text"></div> --}}
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5 ">
            <div class="row d-flex justify-content-center ">
                <div class="col-md-10 shadow rounded p-4">
                    <div class="headings d-flex justify-content-between align-items-center mb-3">
                        <h5 class="fw-bold">Comments</h5>
                        {{-- <div class="buttons">
                            <span class="badge bg-white d-flex flex-row align-items-center">
                                <span class="text-primary">Comments "ON"</span>
                                <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                </div>
                            </span>
                        </div> --}}
                    </div>
                    {{-- ------------ --}}
                    <div class="card p-3 border-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://cdn.britannica.com/36/123536-050-95CB0C6E/Variety-fruits-vegetables.jpg"
                                    width="30" class="comment-avatar rounded-circle mr-2">
                                <div class="ms-2 font-weight-bold">
                                    <span>james_olesenn</span>
                                    <div class="recipe-stars w-fit-content mt-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div>2 days ago</div>
                        </div>
                        <div class="action d-flex justify-content-between mt-3 align-items-center">
                            <div class="font-weight-bold">Hmm, This poster looks cool</div>
                        </div>
                        <div class="action d-flex justify-content-between mt-2 align-items-center">
                            <div class="d-inline-flex gap-2 align-items-center">
                                <div class="cursor-pointer">
                                    <i class="fa-regular fa-heart fs-4"></i>
                                    <i class="fa-solid fa-heart fs-4"></i>
                                </div>
                                <span>4 Likes</span>
                            </div>
                            <div class="icons align-items-center cursor-pointer fs-4">
                                <i class="fa-solid fa-trash"></i>
                            </div>
                        </div>
                    </div>

                    <div class="card p-3 border-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://cdn.britannica.com/36/123536-050-95CB0C6E/Variety-fruits-vegetables.jpg"
                                    width="30" class="comment-avatar rounded-circle mr-2">
                                <div class="ms-2 font-weight-bold">
                                    <span>james_olesenn</span>
                                    <div class="recipe-stars w-fit-content mt-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div>2 days ago</div>
                        </div>
                        <div class="action d-flex justify-content-between mt-3 align-items-center">
                            <div class="font-weight-bold">Hmm, This poster looks cool</div>
                        </div>
                        <div class="action d-flex justify-content-between mt-2 align-items-center">
                            <div class="d-inline-flex gap-2 align-items-center">
                                <div class="cursor-pointer">
                                    <i class="fa-regular fa-heart fs-4"></i>
                                    <i class="fa-solid fa-heart fs-4"></i>
                                </div>
                                <span>4 Likes</span>
                            </div>
                            <div class="icons align-items-center cursor-pointer fs-4">
                                <i class="fa-solid fa-trash"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <div class="modal fade" tabindex="-1" role="dialog" id="collectionModal" style="backdrop-filter: blur(4px)">
        <div role="document" style="" class="modal-dialog vw-100 vh-100 m-0 mw-100">
            <div class="p-0 position-absolute top-50 start-50 translate-middle container-sm modal-content">
                {{-- <div class="modal-header">
                    <h5 class="modal-title">Popup Modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Content for your modal goes here -->
                    <p>This is a popup modal example.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div> --}}

                <div class="col">
                    <div class="row bg-light p-5 rounded-top">
                        <div class=" d-flex flex-column flex-lg-row w-100 align-items-center">
                            <div>
                                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                    class="img-fluid rounded" style="width: 10em;max-width: 10em;height: 10em;"
                                    alt="Image">
                            </div>
                            <div class="d-flex flex-column justify-content-center mx-4">
                                <div
                                    class="fw-bold fs-2 mb-3 text-lg-start text-sm-center text-md-center text-center my-3 my-lg-2">
                                    Saved&nbsp;<i class="fa-solid fa-circle-check"></i>
                                </div>
                                <p
                                    class="text-lg-start text-sm-center text-md-center text-center mb-3 mb-lg-2 w-lg-100 w-md-50 mx-auto">
                                    Recipe TitleRecipe TitleRecipe TitleRecipe TitleRecipe TitleRecipe TitleRecipe
                                    TitleRecipe Title
                                </p>
                            </div>
                            <div class="d-flex align-items-center cursor-pointer">
                                <i class="fa-solid fa-bookmark fs-2"></i>
                            </div>
                        </div>

                    </div>
                    <div class="row bg-white p-5 pt-1 rounded-bottom"
                        style="max-height: 30vh; overflow: hidden; overflow-y: scroll">
                        <div class="d-inline-flex w-100 justify-content-between p-0 fw-bold pt-4 pb-2 align-items-center bg-white"
                            style="position: sticky;top: -1rem;">
                            <div class="h-fit-content">
                                Add to Collection
                            </div>
                            <div type="button" class="btn btn-primary btn-sm h-fit-content cursor-pointer">New Collection
                            </div>
                        </div>
                        <div class="d-inline-flex w-100 justify-content-between p-0 py-2 align-items-center">
                            <div class="d-flex flex-row align-items-center">
                                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                    class="img-fluid rounded" style="width: 5em; height: 5em" alt="Image">
                                <div class="mx-3 fw-bold">Name Collection</div>
                            </div>
                            <div>
                                <div class="h-fit-content"><i class="fa-solid fa-plus fs-3 cursor-pointer"></i></div>
                                <div class="h-fit-content"><i class="fa-solid fa-circle-notch fa-spin fs-2"></i></div>
                                <div class="h-fit-content"><i class="fa-regular fa-circle-check fs-2"></i></div>
                            </div>
                        </div>
                        <div class="d-inline-flex w-100 justify-content-between p-0 py-2 align-items-center">
                            <div class="d-flex flex-row align-items-center">
                                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                    class="img-fluid rounded" style="width: 5em; height: 5em" alt="Image">
                                <div class="mx-3 fw-bold">Name Collection</div>
                            </div>
                            <div class="h-fit-content"><i class="fa-solid fa-plus fs-3 cursor-pointer"></i></div>
                        </div>
                        <div class="d-inline-flex w-100 justify-content-between p-0 py-2 align-items-center">
                            <div class="d-flex flex-row align-items-center">
                                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                    class="img-fluid rounded" style="width: 5em; height: 5em" alt="Image">
                                <div class="mx-3 fw-bold">Name Collection</div>
                            </div>
                            <div class="h-fit-content"><i class="fa-solid fa-plus fs-3 cursor-pointer"></i></div>
                        </div>
                        <div class="d-inline-flex w-100 justify-content-between p-0 py-2 align-items-center">
                            <div class="d-flex flex-row align-items-center">
                                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                    class="img-fluid rounded" style="width: 5em; height: 5em" alt="Image">
                                <div class="mx-3 fw-bold">Name Collection</div>
                            </div>
                            <div class="h-fit-content"><i class="fa-solid fa-plus fs-3 cursor-pointer"></i></div>
                        </div>
                        <div class="d-inline-flex w-100 justify-content-between p-0 py-2 align-items-center">
                            <div class="d-flex flex-row align-items-center">
                                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                    class="img-fluid rounded" style="width: 5em; height: 5em" alt="Image">
                                <div class="mx-3 fw-bold">Name Collection</div>
                            </div>
                            <div class="h-fit-content"><i class="fa-solid fa-plus fs-3 cursor-pointer"></i></div>
                        </div>
                        <div class="d-inline-flex w-100 justify-content-between p-0 py-2 align-items-center">
                            <div class="d-flex flex-row align-items-center">
                                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                    class="img-fluid rounded" style="width: 5em; height: 5em" alt="Image">
                                <div class="mx-3 fw-bold">Name Collection</div>
                            </div>
                            <div class="h-fit-content"><i class="fa-solid fa-plus fs-3 cursor-pointer"></i></div>
                        </div>
                        <div class="d-inline-flex w-100 justify-content-between p-0 py-2 align-items-center">
                            <div class="d-flex flex-row align-items-center">
                                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                    class="img-fluid rounded" style="width: 5em; height: 5em" alt="Image">
                                <div class="mx-3 fw-bold">Name Collection</div>
                            </div>
                            <div class="h-fit-content"><i class="fa-solid fa-plus fs-3 cursor-pointer"></i></div>
                        </div>
                        <div class="d-inline-flex w-100 justify-content-between p-0 py-2 align-items-center">
                            <div class="d-flex flex-row align-items-center">
                                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                    class="img-fluid rounded" style="width: 5em; height: 5em" alt="Image">
                                <div class="mx-3 fw-bold">Name Collection</div>
                            </div>
                            <div class="h-fit-content"><i class="fa-solid fa-plus fs-3 cursor-pointer"></i></div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        {{-- <div class="w-100 h-100 position-absolute" >
            
        </div> --}}
    </div>

    <script>
        $(document).ready(function() {
            $("#showSaveModal").click(function() {
                $("#collectionModal").modal("show");
            });


        });
    </script>
@endsection
