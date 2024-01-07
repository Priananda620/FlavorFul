@extends('layout')
@section('content')
    <section style="height: 30em;" class="position-relative">
        <img src="" class="img-fluid h-100 w-100 recipeDetails_image" alt="Image">
        <div class="position-absolute end-0 bottom-0 p-2 bg-light fs-1 d-inline-flex gap-2">
            <div class="cursor-pointer mx-2 toggleSave">
                {{-- <i class="fa-solid fa-bookmark"></i> --}}
                <i class="fa-regular fa-bookmark"></i>
            </div>

            <div class="cursor-pointer mx-2" id="like-recipe">
                {{-- <i class="fa-solid fa-heart"></i> --}}
                <i class="fa-regular fa-heart"></i>
                <span class="fs-3" style=""></span>
            </div>

            <div class="cursor-pointer mx-2" id="share-recipe">
                <i class="fa-solid fa-share-nodes" data-bs-toggle="popover-copy-link" data-bs-trigger="focus"
                    title="Copied To Clipboard" data-bs-content="Link to this recipe has been copied to clipboard"
                    data-bs-placement="top" tabindex="0" role="button"></i>
                {{-- <a  class="btn btn-lg btn-danger" >Dismissible popover</a> --}}
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="bg-white p-2 fw-bold rounded shadow recipeDetails_label"
                        style="transform: translateY(-1em);width: fit-content;max-width: 14em;">
                    </h1>

                    <div class="d-inline-flex mb-3" id="avg-rating">
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
                            <span>
                                5.0
                            </span>
                        </div>
                    </div>

                    <div class="mt-5 mb-4">
                        <h4 class="fw-bold">Ingredients</h4>
                    </div>

                    <div>
                        <ul class="list-unstyled recipeDetails_ingr">
                        </ul>
                    </div>

                    <div class="mt-5 mb-4">
                        <h4 class="fw-bold">Instructions</h4>
                    </div>

                    <div>
                        <ul class="list-unstyled" id="instructions" style="line-height: 1.3rem;text-align: justify;">
                            <li class="d-flex align-items-center my-3">
                                <div class="rounded-circle bg-primary text-white p-2 me-2 bullet-number text-center">1</div>
                                <div style="width: 70%;"><div class="spinner-grow my-2"
                                    style="width: 1rem; height: 1rem;animation-timing-function: cubic-bezier(.22,.61,.36,1) !important;"
                                    role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                                <div class="spinner-grow mx-2 my-2"
                                    style="width: 1rem; height: 1rem;animation-delay: .1s;animation-timing-function: cubic-bezier(.22,.61,.36,1) !important;"
                                    role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                                <div class="spinner-grow my-2"
                                    style="width: 1rem; height: 1rem;animation-delay: .2s;animation-timing-function: cubic-bezier(.22,.61,.36,1) !important;"
                                    role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div></div>
                            </li>
                            <li class="d-flex align-items-center my-3">
                                <div class="rounded-circle bg-primary text-white p-2 me-2 bullet-number text-center">2</div>
                                <div style="width: 70%;"><div class="spinner-grow my-2"
                                    style="width: 1rem; height: 1rem;animation-timing-function: cubic-bezier(.22,.61,.36,1) !important;"
                                    role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                                <div class="spinner-grow mx-2 my-2"
                                    style="width: 1rem; height: 1rem;animation-delay: .1s;animation-timing-function: cubic-bezier(.22,.61,.36,1) !important;"
                                    role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                                <div class="spinner-grow my-2"
                                    style="width: 1rem; height: 1rem;animation-delay: .2s;animation-timing-function: cubic-bezier(.22,.61,.36,1) !important;"
                                    role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div></div>
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
                                    <h3>Calories
                                        <span class="float-end recipeDetails_caloriesPerYield">
                                            {{-- {{ round(round($recipeData['calories']) / $recipeData['yield']) }} --}}
                                        </span>
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
                                        <p class="recipeDetails_totalNutrients_fatLabelQuantityUnit">
                                            {{-- {{ $recipeData['totalNutrients']['FAT']['label'] }}
                                            {{ number_format($recipeData['totalNutrients']['FAT']['quantity'], 2) }}{{ $recipeData['totalNutrients']['FAT']['unit'] }} --}}
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="recipeDetails_totalDaily_fatQuantityUnit">
                                            {{-- {{ number_format($recipeData['totalDaily']['FAT']['quantity'], 2) }}
                                            {{ $recipeData['totalDaily']['FAT']['unit'] }} --}}
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="ms-3 recipeDetails_totalNutrients_fasatLabelQuantityUnit">
                                            {{-- {{ $recipeData['totalNutrients']['FASAT']['label'] }}
                                            {{ number_format($recipeData['totalNutrients']['FASAT']['quantity'], 2) }}{{ $recipeData['totalNutrients']['FASAT']['unit'] }} --}}
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="recipeDetails_totalDaily_fasatQuantityUnit">
                                            {{-- {{ number_format($recipeData['totalDaily']['FASAT']['quantity'], 2) }}{{ $recipeData['totalDaily']['FASAT']['unit'] }} --}}
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="recipeDetails_totalNutrients_NALabelQuantityUnit">
                                            {{-- {{ $recipeData['totalNutrients']['NA']['label'] }}
                                            {{ number_format($recipeData['totalNutrients']['NA']['quantity'], 2) }}{{ $recipeData['totalNutrients']['NA']['unit'] }} --}}
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="recipeDetails_totalDaily_NAQuantityUnit">
                                            {{-- {{ number_format($recipeData['totalDaily']['NA']['quantity'], 2) }}{{ $recipeData['totalDaily']['NA']['unit'] }} --}}
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="recipeDetails_totalNutrients_CHOCDFLabelQuantityUnit">
                                            {{-- {{ $recipeData['totalNutrients']['CHOCDF']['label'] }}
                                            {{ number_format($recipeData['totalNutrients']['CHOCDF']['quantity'], 2) }}{{ $recipeData['totalNutrients']['CHOCDF']['unit'] }} --}}
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="recipeDetails_totalDaily_CHOCDFQuantityUnit">
                                            {{-- {{ number_format($recipeData['totalDaily']['CHOCDF']['quantity'], 2) }}{{ $recipeData['totalDaily']['CHOCDF']['unit'] }} --}}
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="ms-3 recipeDetails_totalNutrients_SUGARLabelQuantityUnit">
                                            {{-- {{ $recipeData['totalNutrients']['SUGAR']['label'] }}
                                            {{ number_format($recipeData['totalNutrients']['SUGAR']['quantity'], 2) }}{{ $recipeData['totalNutrients']['SUGAR']['unit'] }} --}}
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="recipeDetails_totalNutrients_PROCNTLabelQuantityUnit">
                                            {{-- {{ $recipeData['totalNutrients']['PROCNT']['label'] }}
                                            {{ number_format($recipeData['totalNutrients']['PROCNT']['quantity'], 2) }}{{ $recipeData['totalNutrients']['PROCNT']['unit'] }} --}}
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="recipeDetails_totalDaily_PROCNTQuantityUnit">
                                            {{-- {{ number_format($recipeData['totalDaily']['PROCNT']['quantity'], 2) }}{{ $recipeData['totalDaily']['PROCNT']['unit'] }} --}}
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


        <div class="container mt-5" id="comment-form">
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
                    <div class="d-flex align-items-center mb-3 justify-content-start">
                        <p class="mb-0">Your rating:
                        <div id="rating_numeric" class="ms-2">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <div class="invalid-feedback" id="rating_numeric">
                                Please provide a rating.
                            </div>
                        </div>
                        </p>


                    </div>

                    <div class="d-flex justify-content-center align-items-center mb-3">
                        <form class="w-100" novalidate>
                            <div class="mb-3">
                                {{-- <label for="exampleInputReview1" class="form-label">Write Your Review</label> --}}

                                <div>
                                    <textarea placeholder="Write Your Review..." type="text" class="form-control" name="comment_text"
                                        id="comment_text" aria-describedby="reviewHelp" required></textarea>
                                    <div class="invalid-feedback" id="comment_text">
                                        Please provide a valid comment.
                                    </div>
                                </div>

                                {{-- <div id="reviewHelp" class="form-text"></div> --}}
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5 mb-5">
            <div class="row d-flex justify-content-center ">
                <div class="col-md-10 shadow rounded p-4">
                    <div class="headings d-flex justify-content-between align-items-center mb-3">
                        <h5 class="fw-bold">Reviews</h5>
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
                    <div id="comment_wrapper">
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
                        {{-- <div class="card p-3 border-0">
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
                        </div> --}}
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
                                    class="img-fluid rounded recipeDetails_image shadow"
                                    style="width: 10em;max-width: 10em;height: 10em;" alt="Image">
                            </div>
                            <div class="d-flex flex-column justify-content-center mx-4 w-100">
                                <div
                                    class="fw-bold fs-2 mb-3 text-lg-start text-sm-center text-md-center text-center my-3 my-lg-2">
                                    Saved&nbsp;<i class="fa-solid fa-circle-check"></i>
                                </div>
                                <h4
                                    class="recipeDetails_label text-lg-start text-sm-center text-md-center text-center mb-3 mb-lg-2 w-lg-100 w-md-50 mx-auto">
                                    Recipe TitleRecipe TitleRecipe TitleRecipe TitleRecipe TitleRecipe TitleRecipe
                                    TitleRecipe Title
                                </h4>
                            </div>
                            <div class="d-flex align-items-center cursor-pointer toggleSave">
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
                            <div id="add-new-collection" type="button"
                                class="btn btn-primary btn-sm h-fit-content cursor-pointer">New Collection</div>
                        </div>
                        <div class="d-flex flex-column" id="collections-container">
                            <div>
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
                            </div>
                            {{-- 
                            <div class="d-inline-flex w-100 justify-content-between p-0 py-2 align-items-center">
                                <div class="d-flex flex-row align-items-center">
                                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                        class="img-fluid rounded" style="width: 5em; height: 5em" alt="Image">
                                    <div class="mx-3 fw-bold">Name Collection</div>
                                </div>
                                <div class="h-fit-content"><i class="fa-solid fa-plus fs-3 cursor-pointer"></i></div>
                            </div> --}}
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

            let apiToggle = false



            const recipeId = '{{ $recipeId }}'; // Replace with the actual recipe ID
            const requestHeaders = {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'Authorization': 'Bearer ' + $.cookie('api_plain_token')
            };

            const uri = 'http://www.edamam.com/ontologies/edamam.owl#recipe_' + recipeId;
            const url = 'https://api.edamam.com/api/recipes/v2/by-uri';
            const app_id = '18f6495e';
            const app_key = '8bb396da11d4832a439ea25f315c827f';

            $('#collectionModal').on('hide.bs.modal', function() {
                setTimeout(() => {
                    const collectionContainer = $('#collections-container')
                    collectionContainer.empty()
                }, 1000);

            });

            $('body').on('click', '.toggle-collection', function(e) {
                console.log("toggle-collectiontoggle-collectiontoggle-collection")

                const $currentElement = $(this)

                const collection_id = $(this).closest('.collection-item').data('collection_id')

                $.ajax({
                    url: window.location.origin + "/api/" + 'add/collection',
                    method: 'POST',
                    headers: requestHeaders,
                    data: JSON.stringify({
                        recipeId: 'recipe_' + recipeId,
                        collectionId: collection_id
                    }),
                    success: function(response) {
                        console.log(response);
                        getCollectionHandler()
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });

            $('#add-new-collection').on('click', function() {
                console.log("add-new-collection")
                const collectionContainer = $('#collections-container')

                const checkNewCollection = collectionContainer.find('#new-collection-item')

                if (checkNewCollection.length) {
                    checkNewCollection.addClass('border border-4 p-1')
                } else {
                    $checkOrAdd = $('<button>', {
                        class: 'btn btn-primary btn-sm h-fit-content cursor-pointer',
                        id: 'new-collection-save',
                        html: [
                            "save"
                        ]
                    })
                    let $form = $('<div>', {
                        class: 'input-group',
                        id: 'new-collection-form',
                        html: $('<input>', {
                            type: 'text',
                            'aria-label': 'Collection Name',
                            class: 'form-control',
                            placeholder: 'write new collection name'
                        })
                    });
                    let newImageUrl = $('.recipeDetails_image.shadow').attr('src')
                    let $newCollectionElement = $('<div>', {
                        id: 'new-collection-item',
                        class: 'd-inline-flex w-100 justify-content-between p-0 align-items-center overflow-hidden',
                        style: 'height: 0px; transition: height ease-in-out .2s',
                        html: [
                            $('<div>', {
                                class: 'd-flex flex-row align-items-center flex-grow-1',
                                html: [
                                    $('<img>', {
                                        class: 'img-fluid rounded',
                                        src: newImageUrl,
                                        style: 'width: 7em; height: 7em',
                                        alt: 'Image'
                                    }),
                                    $('<div>', {
                                        class: 'mx-3 fw-bold w-100',
                                        html: $form
                                    })
                                ]
                            }),
                            $checkOrAdd

                        ]
                    });
                    // py-2
                    $newCollectionElement.css('height', '0px');
                    collectionContainer.prepend($newCollectionElement)


                    setTimeout(() => {
                        $newCollectionElement.css('height', collectionContainer.find(
                            'div.collection-item:last-child').outerHeight(true))
                    }, 50);

                    setTimeout(() => {
                        $newCollectionElement.addClass('my-2 rounded')
                        $newCollectionElement.attr('style', '')
                    }, 250);
                }
            });

            $('body').on('click', '#new-collection-save', function(e) {
                const currentButton = $(this)
                const nameInputVal = $('#new-collection-form').find('input').val()
                console.log("new-collection-savenew-collection-savenew-collection-save")

                $.ajax({
                    url: window.location.origin + "/api/" + 'create/collections',
                    type: 'POST',
                    headers: requestHeaders,
                    data: JSON.stringify({
                        "recipeId": "recipe_" + recipeId,
                        "collectionName": nameInputVal
                    }),
                    success: function(data) {
                        getCollectionHandler()
                    },
                    error: function(xhr, status, error) {
                        alert(error)
                    },
                    beforeSend: function() {
                        currentButton.html(`
                        <div class="spinner-grow "
                                style="width: 1rem; height: 1rem;animation-timing-function: cubic-bezier(.22,.61,.36,1) !important;"
                                role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow mx-2 "
                                style="width: 1rem; height: 1rem;animation-delay: .1s;animation-timing-function: cubic-bezier(.22,.61,.36,1) !important;"
                                role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow "
                                style="width: 1rem; height: 1rem;animation-delay: .2s;animation-timing-function: cubic-bezier(.22,.61,.36,1) !important;"
                                role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        `)
                    },
                    complete: function() {
                        currentButton.html('save')
                    }
                });

            })

            $('#collectionModal').on('shown.bs.modal', function() {
                console.log("MODALLLLLLLLLLL")

                getCollectionHandler()

            });

            function getCollectionHandler() {
                const collectionContainer = $('#collections-container')

                $.ajax({
                    url: window.location.origin + "/api/" + 'get/collections',
                    type: 'GET',
                    data: {
                        offset: 0,
                        limit: 1000,
                        recipeId: "recipe_" + recipeId
                    },
                    headers: requestHeaders,
                    success: function(response) {
                        console.log(response);
                        collectionContainer.empty()

                        response.collections.forEach(collection => {
                            let $checkOrAdd
                            if (!collection.current_is_added) {
                                $checkOrAdd = $('<div>', {
                                    class: 'h-fit-content toggle-collection',
                                    html: [
                                        $('<i>', {
                                            class: 'fa-solid fa-plus fs-3 cursor-pointer'
                                        })
                                    ]
                                })
                            } else {
                                $checkOrAdd = $('<div>', {
                                    class: 'h-fit-content toggle-collection',
                                    html: [
                                        $('<i>', {
                                            class: 'fa-solid fa-square-check fs-3 cursor-pointer'
                                        })
                                    ]
                                })
                            }
                            const bgColor = '#f6f6f6';
                            const svg =
                                `<svg xmlns='http://www.w3.org/2000/svg' width='${170}' height='${170}'><rect width='100%' height='100%' fill='${bgColor}' /></svg>`;
                            const dataURI = 'data:image/svg+xml,' + encodeURIComponent(svg);

                            const $collectionImages = $('<div>', {
                                class: 'col',
                                style: 'width: 7em; height: 7em;',
                                html: [
                                    $('<div>', {
                                        class: 'd-flex flex-row h-50',
                                        html: [
                                            $('<img>', {
                                                src: collection
                                                    .collectionImages[
                                                        0] ? collection
                                                    .collectionImages[
                                                        0] : dataURI,
                                                alt: 'Image 2',
                                                class: 'w-50 rounded-top-left border-end border-1 border-bottom'
                                            }),
                                            $('<img>', {
                                                src: collection
                                                    .collectionImages[
                                                        1] ? collection
                                                    .collectionImages[
                                                        1] : dataURI,
                                                alt: 'Image 2',
                                                class: 'w-50 rounded-top-right border-start border-1 border-bottom'
                                            })
                                        ]
                                    }),
                                    $('<div>', {
                                        class: 'd-flex flex-row h-50',
                                        html: [
                                            $('<img>', {
                                                src: collection
                                                    .collectionImages[
                                                        2] ? collection
                                                    .collectionImages[
                                                        2] : dataURI,
                                                alt: 'Image 2',
                                                class: 'w-50 rounded-bottom-left border-end border-1 border-top'
                                            }),
                                            $('<img>', {
                                                src: collection
                                                    .collectionImages[
                                                        3] ? collection
                                                    .collectionImages[
                                                        3] : dataURI,
                                                alt: 'Image 2',
                                                class: 'w-50 rounded-bottom-right border-start border-1 border-top'
                                            })
                                        ]
                                    })
                                ]
                            });

                            const $collectionElement = $('<div>', {
                                class: 'd-inline-flex w-100 justify-content-between p-0 py-2 align-items-center collection-item',
                                html: [
                                    $('<div>', {
                                        class: 'd-flex flex-row align-items-center',
                                        html: [
                                            $collectionImages,
                                            $('<div>', {
                                                class: 'mx-3 fw-bold',
                                                text: collection
                                                    .name
                                            })
                                        ]
                                    }),
                                    $checkOrAdd

                                ]
                            });

                            $collectionElement.data('collection_id', collection.id)

                            collectionContainer.append($collectionElement)
                        });

                        // 
                    },
                    error: function(xhr, status, error) {
                        alert(error)
                    },
                    beforeSend: function() {
                        collectionContainer.html(`
                        <div>
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
                        </div>
                        `)
                    },
                    complete: function() {
                        // collectionContainer.empty()
                    }
                });
            }

            var recipeHasSaved
            var toggleSaveTimer = setTimeout(function() {}, 1000);;
            var isLongClick = false;

            $('.toggleSave').on('mousedown', function() {
                isLongClick = false;
                // console.log('MOUSEDOWNNNNNNNNNNN');

                toggleSaveTimer = setTimeout(function() {
                    // console.log('LONG CLOCKKKKKKKKKKKKKKKKKk');
                    if (recipeHasSaved) {
                        isLongClick = true;
                        $("#collectionModal").modal("show");
                    }

                }, 1000);
            });


            $('.toggleSave').on('mouseup', function() {
                clearTimeout(toggleSaveTimer);
                // console.log('MOUSEUPPP');
                if (!isLongClick) {
                    // console.log('Regular click detected');
                    toggleSaveHandler()
                }

            });

            function toggleSaveHandler() {
                const selectedElement = $(".toggleSave")
                const bookmarkIcon = selectedElement.find('i')
                const selfToggle = apiToggle

                $.ajax({
                    url: window.location.origin + "/api/" + 'toggle/saved-recipe',
                    type: 'POST',
                    headers: requestHeaders,
                    data: JSON.stringify({
                        "recipe_id": "recipe_" + recipeId,
                        "toggle": selfToggle
                        // ,"collection_id": 4
                    }),
                    success: function(response) {
                        if (response.status === "ok") {


                            bookmarkIcon.removeClass('fa-solid fa-regular')
                            bookmarkIcon.addClass(response.saveToggle ? 'fa-solid ' :
                                'fa-regular')



                            if (response.saveToggle) {
                                recipeHasSaved = true

                                bookmarkIcon.attr({
                                    'data-bs-toggle': 'popover',
                                    'data-bs-placement': 'top',
                                    'data-bs-trigger': 'hover focus',
                                    'data-bs-content': 'Long Click to Save to Collections'
                                });

                                bookmarkIcon.popover('enable');
                                // new bootstrap.Popover(popoverTriggerEl)
                            }

                            if (response.saveToggle && selfToggle) {
                                $("#collectionModal").modal("show");
                            } else if (!response.saveToggle) {
                                $("#collectionModal").modal("hide");
                                recipeHasSaved = false

                                bookmarkIcon.removeAttr(
                                    'data-bs-toggle data-bs-placement data-bs-trigger data-bs-content'
                                );
                                bookmarkIcon.popover('disable')
                            }
                        }
                    },
                    error: function(xhr, status, error) {
                        alert(error)
                    },
                    beforeSend: function() {
                        bookmarkIcon.attr('style', 'opacity: .5')
                    },
                    complete: function() {
                        bookmarkIcon.attr('style', '')
                    }
                });
            }


            function getComments(recipeId) {

                return new Promise((resolve, reject) => {
                    $.ajax({
                        url: window.location.origin + "/api/" + 'get/comments',
                        type: 'GET',
                        headers: requestHeaders,
                        data: {
                            edamamId: 'recipe_' + recipeId
                        },
                        success: function(response) {
                            console.log(response)


                            $('#comment_wrapper').empty()

                            if (response.total === 0) {
                                $('#comment_wrapper').html(`
                                    <div>No Reviews Yet</div>
                                `)
                            }
                            $('#avg-rating').find('div:nth-child(1)').html(
                                'Review by ' + response.comments.length + ' People')

                            $('#avg-rating').find('div.recipe-stars ').empty()
                            $('#avg-rating').find('div.recipe-stars ').append(new Array(
                                response.avg_rating + 1).join(
                                '<i class="fas fa-star"></i>'));
                            $('#avg-rating').find('div.recipe-stars ').append(new Array((5 -
                                response.avg_rating) + 1).join(
                                '<i class="far fa-star"></i>'));
                            $('#avg-rating').find('div.recipe-stars ').append('&nbsp;&nbsp;' +
                                response.avg_rating + '.0')

                            $('#comment_wrapper').prev('.headings').find('h5').html(
                                'Reviews (' + response.comments.length + ')')

                            response.comments.forEach(comment => {
                                console.log(comment.comment)
                                let $commentCard = $(
                                    `<div class="card p-3 border-0 my-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="user d-flex flex-row align-items-center">
                                            <img src="https://cdn.britannica.com/36/123536-050-95CB0C6E/Variety-fruits-vegetables.jpg" width="30" class="comment-avatar rounded-circle mr-2">
                                            <div class="ms-2 font-weight-bold">
                                                <span id='cmnt_usr'>james_olesenn</span>
                                                <div class="recipe-stars w-fit-content mt-2" id='cmnt_stars'>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div id='cmnt_daysAgo'>2 days ago</div>
                                    </div>
                                    <div class="action d-flex justify-content-between mt-4 align-items-center">
                                        <div id='cmnt_content' class="font-weight-bold">template</div>
                                    </div>
                                    <div class="action d-flex justify-content-between mt-4 align-items-center">
                                        <div class="d-inline-flex gap-2 align-items-center">
                                            <div class="cursor-pointer cmnt_heart">
                                                <i class="fa-regular fa-heart fs-2"></i>
                                            </div>
                                            <span id='cmnt_likes'>4 Likes</span>
                                        </div>
                                        <div class="cmnt_delete icons align-items-center cursor-pointer fs-4">
                                            <i class="fa-solid fa-trash"></i>
                                        </div>
                                    </div>
                                </div>`
                                );
                                $commentCard.find('#cmnt_content').text(comment
                                    .comment);
                                $commentCard.find('#cmnt_usr').text(comment.user
                                    .username);
                                $commentCard.find('#cmnt_daysAgo').text(comment
                                    .elapsed_time);
                                $commentCard.find('#cmnt_likes').text(comment
                                    .total_likes + ' likes');
                                // $commentCard.find('#cmnt_likes').text(comment.commentlike.length+' likes');
                                $commentCard.find('#cmnt_stars').empty();


                                // for (let i = 0; i < comment.rating; i++) {
                                //     $commentCard.find('#cmnt_stars').append(
                                //         '<i class="fas fa-star"></i>');
                                // }

                                $commentCard.find('#cmnt_stars').append(new Array(
                                    comment.rating + 1).join(
                                    '<i class="fas fa-star"></i>'));
                                $commentCard.find('#cmnt_stars').append(new Array((5 -
                                    comment.rating) + 1).join(
                                    '<i class="far fa-star"></i>'));



                                $commentCard.find('img').attr('src',
                                    '/assets/userAvatars/' + comment.user.avatarUrl);

                                $commentCard.data('commentId', comment.id)

                                if (!comment.user_owner) {
                                    $commentCard.find('.cmnt_delete').hide()
                                }

                                if (comment.user_is_liked) {
                                    $commentCard.find('.cmnt_heart').empty()
                                    $commentCard.find('.cmnt_heart').html(
                                        '<i class="fa-solid fa-heart fs-2"></i>')
                                }

                                $('#comment_wrapper').append($commentCard)


                            })

                            resolve(response);


                        },
                        error: function(xhr, status, error) {
                            // Handle errors here
                            console.error(error)
                            reject(error);
                        },
                        beforeSend: function() {
                            $('#comment_wrapper').empty()
                            $('#comment_wrapper').html(`
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
                        }
                    });

                })
            }

            getRecipeDetailsData()

            $('body').on('click', '.cmnt_delete', function(e) {
                // e.stopPropagation()
                console.log('DELLL')
                const comment_id = $(this).closest('.card').data('commentId')

                $.ajax({
                    url: window.location.origin + "/api/" + 'delete/comment',
                    type: 'POST', // Assuming it's a POST request based on the CURL example.
                    headers: requestHeaders,
                    data: JSON.stringify({
                        comment_id: comment_id
                    }),
                    success: function(data) {
                        getComments(recipeId)
                    },
                    error: function(xhr, status, error) {
                        if (xhr.status == 422) {
                            alert(error)
                        }
                    },
                    beforeSend: function() {
                        $(".loading-overlay").attr("style",
                            "display: unset !important")
                    },
                    complete: function() {
                        $(".loading-overlay").attr("style",
                            "display: none !important")
                    }
                });
            });

            $('#comment-form form').on('submit', function(e) {
                e.preventDefault()

                const form = document.querySelector('#comment-form form');;

                let formData = new FormData(form);

                let rating = $('#rating_numeric > .fas.fa-star').length

                $.ajax({
                    url: window.location.origin + "/api/" + 'add/comment',
                    type: 'POST', // Assuming it's a POST request based on the CURL example.
                    headers: requestHeaders,
                    data: JSON.stringify({
                        recipeId: 'recipe_' + recipeId,
                        comment_text: formData.get('comment_text'),
                        rating_numeric: rating
                    }),
                    success: function(data) {
                        getComments(recipeId)
                        $('#rating_numeric').removeClass('is-invalid')
                        $('#rating_numeric').html(new Array((5) + 1).join(
                            '<i class="far fa-star"></i>'));
                        $('#rating_numeric').append(`
                        <div class="invalid-feedback" id="rating_numeric">
                                Please provide a rating.
                            </div>
                        `)
                        $('#comment-form form').find('textarea').val('')
                        $('#star-rating button.active').removeClass('active')
                    },
                    error: function(xhr, status, error) {
                        var response = JSON.parse(xhr.responseText);

                        if (response.errors) {

                            for (const key in response.errors) {
                                if (response.errors.hasOwnProperty(key)) {
                                    const errorMessages = response.errors[key];
                                    console.log("Key:", key);
                                    console.log("Error Messages:", errorMessages);

                                    $('textarea#' + key).addClass('is-invalid')
                                    $('div#' + key).addClass('is-invalid')
                                }
                            }
                        }
                    },
                    beforeSend: function() {
                        $(".loading-overlay").attr("style",
                            "display: unset !important");
                        $('#comment-form form .is-invalid').removeClass('is-invalid')
                    },
                    complete: function() {
                        $(".loading-overlay").attr("style",
                            "display: none !important");
                    }
                });
            });

            $('body').on('click', '.cmnt_heart', commentHeartHandler);

            $('#like-recipe').on('click', recipeHeartHandler);

            function recipeHeartHandler() {
                const $clickedElement = $(this);

                if (!$clickedElement.data('isClicked')) {
                    $clickedElement.data('isClicked', true)
                    $clickedElement.attr('style', 'opacity: .5;')

                    $.ajax({
                        url: window.location.origin + "/api/" + 'toggle/recipe-like',
                        type: 'POST',
                        headers: requestHeaders,
                        data: JSON.stringify({
                            "recipeId": 'recipe_' + recipeId,
                            "toggle": apiToggle
                        }),
                        contentType: 'application/json',
                        success: function(response) {

                            $clickedElement.find('i').removeClass('fa-solid fa-regular')
                            $clickedElement.find('i').addClass(response.likeStatus ? 'fa-solid' :
                                'fa-regular')
                            $clickedElement.addClass('likeAnimation')

                            $clickedElement.find('span').html(response.totalLikes)

                            // $clickedElement.next('#cmnt_likes').html(response.totalLikes + ' likes')
                            setTimeout(function() {
                                $clickedElement.removeClass('likeAnimation')
                            }, 300);

                        },
                        error: function(xhr, status, error) {
                            alert(error)
                        },
                        complete: function() {
                            $clickedElement.data('isClicked', false);
                            $clickedElement.attr('style', '')
                        }
                    });
                }
            }

            function commentHeartHandler(e) {
                const $clickedElement = $(this);

                if (!$clickedElement.data('isClicked')) {
                    // Prevent multiple clicks within 2 seconds
                    $clickedElement.data('isClicked', true);
                    $clickedElement.attr('style', 'opacity: .5;')

                    console.log("HEARTTTTTTTTTT");

                    $.ajax({
                        url: window.location.origin + "/api/" + 'toggle/comment-like',
                        type: 'POST',
                        headers: requestHeaders,
                        data: JSON.stringify({
                            "commentId": $clickedElement.closest('.card').data('commentId')
                        }),
                        contentType: 'application/json',
                        success: function(response) {
                            // $clickedElement.find('i').toggleClass('fa-solid fa-regular');
                            $clickedElement.find('i').removeClass('fa-solid fa-regular')
                            $clickedElement.find('i').addClass(response.likeStatus ? 'fa-solid' :
                                'fa-regular')
                            $clickedElement.addClass('likeAnimation')

                            $clickedElement.next('#cmnt_likes').html(response.totalLikes + ' likes')
                            setTimeout(function() {
                                $clickedElement.removeClass('likeAnimation')
                            }, 300);

                        },
                        error: function(xhr, status, error) {
                            alert(error)
                        },
                        complete: function() {
                            $clickedElement.data('isClicked', false);
                            $clickedElement.attr('style', '')
                        }
                    });
                }
            }

            function insertRecipe(edamamId, recipeTitle, recipeImage) {
                // await delay(3000)

                return new Promise((resolve, reject) => {

                    $.ajax({
                        url: window.location.origin + "/api/" + 'add/recipe',
                        type: 'POST',
                        headers: requestHeaders,
                        data: JSON.stringify({
                            recipeId: edamamId,
                            recipeTitle: recipeTitle,
                            recipeImage: recipeImage
                        }),
                        success: function(response) {
                            console.log(response);
                            resolve(response);
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                            reject(error); // Reject the Promise on error
                        },
                        complete: function() {
                            console.log('WAITTTT1111111111111111')
                        }
                    });
                });
            }

            function getRecipeDetailsData() {
                $.ajax({
                    url: url,
                    type: 'GET',
                    data: {
                        app_id: app_id,
                        app_key: app_key,
                        uri: uri,
                        type: 'public'
                    },
                    beforeSend() {
                        $(".loading-overlay").attr("style", "");
                    },
                    complete(xhr, status) {
                        if (xhr.status !== 200) {
                            $(".loading-overlay").attr("style", "display: none !important");
                        }

                        if (xhr.status === 200) {

                        }

                    },
                    success: async function(responseData) {
                        // Handle the API response here
                        if (responseData.to > 0 && responseData.hits.length > 0) {
                            const recipeData = responseData.hits[0].recipe;
                            const uri = recipeData.uri;
                            const parts = uri.split("#");

                            console.log(parts.length)

                            if (parts.length === 2) {

                                const recipeIdExp = parts[1];
                                // Check if the recipeIdExp does not exist in your database
                                // If it doesn't exist, you can save it to your database
                                const Rd_label = $('.recipeDetails_label')

                                const Rd_image = $('.recipeDetails_image')


                                Rd_label.html(recipeData.label)
                                Rd_image.attr('src', recipeData.image)

                                insertRecipe(recipeIdExp, recipeData.label, recipeData.image)
                                    .then(async result => {
                                        console.log('WAITTTT22222')



                                        $('#like-recipe').click()
                                        // $(".toggleSave:first").click()
                                        toggleSaveHandler()

                                        apiToggle = true

                                        $('.recipeDetails_totalNutrients_fatLabelQuantityUnit')
                                            .html(
                                                recipeData
                                                .totalNutrients.FAT.label + ' ' + recipeData
                                                .totalNutrients
                                                .FAT
                                                .quantity.toFixed(2) + recipeData
                                                .totalNutrients
                                                .FAT
                                                .unit)

                                        $('.recipeDetails_totalNutrients_fasatLabelQuantityUnit')
                                            .html(
                                                recipeData
                                                .totalNutrients.FASAT.label + ' ' +
                                                recipeData
                                                .totalNutrients.FASAT
                                                .quantity.toFixed(2) + recipeData
                                                .totalNutrients
                                                .FASAT
                                                .unit)
                                        $('.recipeDetails_totalNutrients_NALabelQuantityUnit')
                                            .html(
                                                recipeData
                                                .totalNutrients.NA.label + ' ' + recipeData
                                                .totalNutrients
                                                .NA
                                                .quantity.toFixed(2) + recipeData
                                                .totalNutrients
                                                .NA.unit
                                            )

                                        $('.recipeDetails_totalNutrients_CHOCDFLabelQuantityUnit')
                                            .html(
                                                recipeData
                                                .totalNutrients.CHOCDF.label + ' ' +
                                                recipeData
                                                .totalNutrients
                                                .CHOCDF.quantity.toFixed(2) + recipeData
                                                .totalNutrients
                                                .CHOCDF.unit)
                                        $('.recipeDetails_totalNutrients_SUGARLabelQuantityUnit')
                                            .html(
                                                recipeData
                                                .totalNutrients.SUGAR.label + ' ' +
                                                recipeData
                                                .totalNutrients.SUGAR
                                                .quantity.toFixed(2) + recipeData
                                                .totalNutrients
                                                .SUGAR
                                                .unit)
                                        $('.recipeDetails_totalNutrients_PROCNTLabelQuantityUnit')
                                            .html(
                                                recipeData
                                                .totalNutrients.PROCNT.label + ' ' +
                                                recipeData
                                                .totalNutrients
                                                .PROCNT.quantity.toFixed(2) + recipeData
                                                .totalNutrients
                                                .PROCNT.unit)


                                        $('.recipeDetails_totalDaily_fatQuantityUnit').html(
                                            recipeData
                                            .totalDaily
                                            .FAT.quantity.toFixed(2) + recipeData
                                            .totalDaily
                                            .FAT
                                            .unit)

                                        $('.recipeDetails_totalDaily_fasatQuantityUnit')
                                            .html(
                                                recipeData
                                                .totalDaily
                                                .FASAT.quantity.toFixed(2) + recipeData
                                                .totalDaily.FASAT
                                                .unit)
                                        $('.recipeDetails_totalDaily_NAQuantityUnit').html(
                                            recipeData
                                            .totalDaily.NA
                                            .quantity.toFixed(2) + recipeData.totalDaily
                                            .NA
                                            .unit)

                                        $('.recipeDetails_totalDaily_CHOCDFQuantityUnit')
                                            .html(
                                                recipeData
                                                .totalDaily
                                                .CHOCDF.quantity.toFixed(2) + recipeData
                                                .totalDaily
                                                .CHOCDF
                                                .unit)
                                        $('.recipeDetails_totalDaily_PROCNTQuantityUnit')
                                            .html(
                                                recipeData
                                                .totalDaily
                                                .PROCNT.quantity.toFixed(2) + recipeData
                                                .totalDaily
                                                .PROCNT
                                                .unit)

                                        $('.recipeDetails_caloriesPerYield').html(Math
                                            .round(
                                                recipeData
                                                .calories /
                                                recipeData.yield))


                                        const ingredients = recipeData.ingredients;

                                        ingredients.forEach(function(ingredient, index) {
                                            const text = ingredient.text;
                                            const ingrParent = $(
                                                '.recipeDetails_ingr')

                                            const ingredientHtml =
                                                '<li class="d-flex align-items-center my-3">' +
                                                '<div class="rounded-circle bg-primary text-white p-2 me-2 bullet-number text-center">' +
                                                (index + 1) +
                                                // Increment index by 1
                                                '</div>' +
                                                '<div style="width: 70%;">' +
                                                text +
                                                '</div>' +
                                                '</li>';

                                            ingrParent.append(ingredientHtml)
                                        });

                                        ///////////////////////////////////////////////
                                        if (recipeData.instructionLines) {
                                            const instructionWrapper = $('#instructions')

                                            instructionWrapper.empty()

                                            const instructionItem = `<li class="d-flex align-items-center my-3">
                                                <div class="rounded-circle bg-primary text-white p-2 me-2 bullet-number text-center">{index}</div>
                                                <div style="width: 70%;">{instructionItem}</div>
                                            </li>`

                                            let temp = ''

                                            recipeData.instructionLines.forEach(function(
                                                instruction, index) {
                                                var temp = instructionItem
                                                    .replace('{index}', index + 1)
                                                    .replace('{instructionItem}',
                                                        instruction);

                                                instructionWrapper.append(temp)
                                                console.log(instruction)
                                            });
                                        } else {
                                            await getInstructions(recipeData.label, recipeData
                                                .ingredientLines)
                                        }
                                        /////////////////////////////////////////////////////

                                        await getComments(recipeId)

                                        setTimeout(function() {
                                            $(".loading-overlay").attr("style",
                                                "display: none !important");
                                        }, 2000);




                                    })
                                    .catch(error => {
                                        console.error('Error:', error);

                                        setTimeout(() => {
                                            window.location.href = '/home'
                                        }, 5000);

                                        alert(error)

                                        throw error;

                                    });
                            }

                        } else {
                            alert('recipe not found')
                            window.location.href = '/home'
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }


            function getInstructions(recipeName, ingredients) {
                return new Promise((resolve, reject) => {
                    ingredients = ingredients.join(', ');
                    const queryText =
                        `Recipe instructions in json.\n\nRecipe: ${recipeName}.\nIngredients: ${ingredients}\n\nWrite the instructions in JSON format. Per step per objects inside key "Instructions". Write the instructions in a good words, also please put what ingredients in each steps if possible (not a must). Avoid multiple steps in one step object (like do A and then do B), A and B must be on separate step. Avoid words like "enjoy". The instructions must only be command on how to cook/prepare the food/drinks. Response in JSON only. Write JSON in one line only. JSON format: '{"Instructions": [{"steps": "--steps here"},{"steps": "--steps here"},...]}`;

                    $.ajax({
                        url: 'https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent?key=AIzaSyDqkwSD0DlteP9j4i4Q3NB_dt_zfFrsaak',
                        type: 'POST',
                        contentType: 'application/json',
                        data: JSON.stringify({
                            "contents": [{
                                "parts": [{
                                    "text": queryText
                                }]
                            }]
                        }),
                        success: function(response) {
                            const text = response.candidates[0].content.parts[0].text;
                            const instructionsObject = JSON.parse(text);
                            console.log(JSON.stringify(instructionsObject));

                            const instructionWrapper = $('#instructions')

                            instructionWrapper.empty()

                            const instructionItem = `<li class="d-flex align-items-center my-3">
                                <div class="rounded-circle bg-primary text-white p-2 me-2 bullet-number text-center">{index}</div>
                                <div style="width: 70%;">{instructionItem}</div>
                            </li>`

                            let temp = ''

                            instructionsObject.Instructions.forEach(function(instruction,
                            index) {
                                var temp = instructionItem
                                    .replace('{index}', index + 1)
                                    .replace('{instructionItem}', instruction.steps);

                                instructionWrapper.append(temp)
                                console.log(instruction.steps)
                            });

                            resolve(response);
                        },
                        error: function(error) {
                            console.error(error);
                            reject(error);
                        },
                        complete: function() {

                        },
                        beforeSend: function() {

                        }
                    });
                })
            }


        });
    </script>
@endsection
