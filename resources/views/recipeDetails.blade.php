@extends('layout')
@section('content')
    <section style="height: 30em;" class="position-relative">
        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
            class="img-fluid h-100 w-100" alt="Image">
        <div class="position-absolute end-0 bottom-0 p-2 bg-light fs-1 d-inline-flex gap-2">
            <div class="cursor-pointer">
                <i class="fa-solid fa-bookmark"></i>
                {{-- <i class="fa-regular fa-bookmark"></i> --}}
            </div>

            <div class="cursor-pointer">
                <i class="fa-solid fa-heart"></i>
                {{-- <i class="fa-regular fa-heart"></i> --}}
            </div>

            <div class="cursor-pointer">
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
                        Pan Seared Garlic Butter Chicken Recipe
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
                            <li class="d-flex align-items-center my-3">
                                <div class="rounded-circle bg-primary text-white p-2 me-2 bullet-number text-center">1</div>
                                <div style="width: 70%;">chicken eggplant2
                                    eggplantchicken
                                    cumlesschicken eggplant</div>
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
                                    <h3>Calories <span class="float-end">1,125</span></h3>
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
                            <div class="col my-4">
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

                            </div>

                            <!-- Daily Value -->
                            <div class="col my-4">
                                <div class="col-md-12">
                                    <p class="text-secondary text-justify">* The % Daily Value (DV) tells you how much a nutrient in a serving of food contributes to a daily diet. 2,000 calories a day is used for a general nutrition advice.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="container mt-5 ">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 p-4 shadow rounded">
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
                              <input placeholder="Write Your Review..." type="review" class="form-control" id="exampleInputReview1" aria-describedby="reviewHelp">
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
                <div class="col-md-8 shadow rounded p-4">
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
                        <img src="https://cdn.britannica.com/36/123536-050-95CB0C6E/Variety-fruits-vegetables.jpg" width="30" class="comment-avatar rounded-circle mr-2">
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
                        <img src="https://cdn.britannica.com/36/123536-050-95CB0C6E/Variety-fruits-vegetables.jpg" width="30" class="comment-avatar rounded-circle mr-2">
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
@endsection
