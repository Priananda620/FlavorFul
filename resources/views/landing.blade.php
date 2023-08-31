@extends('layout')
@section('content')

<div style="z-index: -1;width: 1337px;height: 1337px;left: 890px;top: -410px;position: absolute;background: #F8FAFB;border-radius: 9999px"></div>
<section id="hero-content">
    <div class="container">
      <div class="row justify-content-center align-items-center py-5">
        <div class="col-lg-6 text-center text-lg-start">
          <h1 class="fw-bold">
            Cooking<br>
            With Your<br> 
            Ingredients<br>
          </h1>
          <p class="lh-base my-3 text-muted me-lg-5 pe-lg-5 mt-4">
            Find recipes according to your available ingredients on our website!
          </p>
          <div class="d-flex flex-column flex-sm-row justify-content-lg-start justify-content-center mt-5 mt-lg-0">
            <button class="btn btn-primary mb-2 mb-sm-0 me-sm-2 px-4">
              SignUp
            </button>
            <button class="btn btn-outline-primary px-4">
              Login
            </button>
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
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Cat_August_2010-4.jpg/272px-Cat_August_2010-4.jpg"
                             alt="Avatar" class="rounded-circle avatar me-3">

                            <div class="d-flex flex-column">
                              <span class="fw-bold fs-5 mb-2">John Doe</span>
                              <span class="text-light fs-6">Web Developer</span>
                              
                            </div>
                            <i class="fa-solid fa-angle-up fa-angle-right ms-auto"></i>
                          </div>
                        </div>
                        
                        <div class="row-md-4 my-3">
                          <div class="d-flex align-items-center">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Cat_August_2010-4.jpg/272px-Cat_August_2010-4.jpg" 
                            alt="Avatar" class="rounded-circle avatar me-3">
                            <div class="d-flex flex-column">
                              <span class="fw-bold fs-5 mb-2">Jane Smith</span>
                              <span class="text-light fs-6">Graphic Designer</span>
                              
                            </div>
                            <i class="fa-solid fa-angle-up fa-angle-right ms-auto"></i>
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
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Cat_August_2010-4.jpg/272px-Cat_August_2010-4.jpg"
                             alt="Avatar" class="rounded-circle avatar me-3">

                            <div class="d-flex flex-column">
                              <span class="fw-bold fs-5 mb-2">John Doe</span>
                              <span class="text-secondary fs-6">Web Developer</span>            
                            </div>
                          </div>
                        </div>
                        
                        <div class="row-md-4 mb-4">
                          <div class="d-flex align-items-center">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Cat_August_2010-4.jpg/272px-Cat_August_2010-4.jpg" 
                            alt="Avatar" class="rounded-circle avatar me-3">
                            <div class="d-flex flex-column">
                              <span class="fw-bold fs-5 mb-2">Jane Smith</span>
                              <span class="text-secondary fs-6">Graphic Designer</span>
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
    <div class="container">
        <div class="row mt-4">

            <div class="col-md-6 col-lg-3 mb-4">
                <div class="recipe-card position-relative rounded shadow-sm d-grid align-items-start h-100 align-content-start">
                                        {{-- <div class="position-absolute p-2 rounded-pill cursor-pointer heart-recipe">
                        <i class="fa-solid fa-heart text-white fs-3"></i>
                    </div> --}}
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80" alt="Recipe Image" class="recipe-image">
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
                        <h2 style="overflow: hidden; text-overflow: ellipsis;" class="recipe-title m-0 w-fit-content"> &amp; pumpkin &amp; pumpkin &amp; pumpkin &amp; pumpkin &amp; pumpkin &amp; pumpkin &amp; pumpkin &amp; pumpkin &amp; pumpkin &amp; pumpkin &amp; pumpkin &amp; pumpkin &amp; pumpkin &amp; pumpkin &amp; pumpkin &amp; pumpkin</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="recipe-card position-relative rounded shadow-sm d-grid align-items-start h-100 align-content-start">
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80" alt="Recipe Image" class="recipe-image">
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
                        <h2 class="recipe-title m-0 w-fit-content"> &amp; pumpkin</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="recipe-card position-relative rounded shadow-sm d-grid align-items-start h-100 align-content-start">
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80" alt="Recipe Image" class="recipe-image">
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
                        <h2 class="recipe-title m-0 w-fit-content"> &amp; pumpkin</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="recipe-card position-relative rounded shadow-sm d-grid align-items-start h-100 align-content-start">
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80" alt="Recipe Image" class="recipe-image">
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
                        <h2 class="recipe-title m-0 w-fit-content"> &amp; pumpkin</h2>
                    </div>
                </div>
            </div>


            
    
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

                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Cat_August_2010-4.jpg/272px-Cat_August_2010-4.jpg" alt="Avatar" class="rounded-circle avatar" style="width: 10em: height: 10em">
                    <div class="recipe-details d-flex justify-content-start flex-column flex-wrap w-100">


                        <h2 class="recipe-title m-0 mt-3 mb-4">breakfast</h2>

                        <button class="btn btn-primary w-fit-content m-auto mt-3 px-5">
                            Select
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4 text-center">
                <div class="recipe-card position-relative rounded shadow-sm p-4">

                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Cat_August_2010-4.jpg/272px-Cat_August_2010-4.jpg" alt="Avatar" class="rounded-circle avatar" style="width: 10em: height: 10em">
                    <div class="recipe-details d-flex justify-content-start flex-column flex-wrap w-100">


                        <h2 class="recipe-title m-0 mt-3 mb-4">lunch</h2>

                        <button class="btn btn-primary w-fit-content m-auto mt-3 px-5">
                            Select
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4 text-center">
                <div class="recipe-card position-relative rounded shadow-sm p-4">

                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Cat_August_2010-4.jpg/272px-Cat_August_2010-4.jpg" alt="Avatar" class="rounded-circle avatar" style="width: 10em: height: 10em">
                    <div class="recipe-details d-flex justify-content-start flex-column flex-wrap w-100">


                        <h2 class="recipe-title m-0 mt-3 mb-4">brunch</h2>

                        <button class="btn btn-primary w-fit-content m-auto mt-3 px-5">
                            Select
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4 text-center">
                <div class="recipe-card position-relative rounded shadow-sm p-4">

                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Cat_August_2010-4.jpg/272px-Cat_August_2010-4.jpg" alt="Avatar" class="rounded-circle avatar" style="width: 10em: height: 10em">
                    <div class="recipe-details d-flex justify-content-start flex-column flex-wrap w-100">


                        <h2 class="recipe-title m-0 mt-3 mb-4">dinner</h2>

                        <button class="btn btn-primary w-fit-content m-auto mt-3 px-5">
                            Select
                        </button>
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
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla tristique sapien eu consequat.</p>
        </div>
        <div class="col-md-4">
          <h5>Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>Contact Us</h5>
          <address>
            1234 Street Name, City<br>
            Country, Postal Code<br>
            Phone: (123) 456-7890<br>
            Email: info@example.com
          </address>
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

@endsection