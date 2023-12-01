{{-- <header class="bg-light">
    <div class="container d-flex justify-content-between align-items-center py-3">
        <div class="logo">
            {!! file_get_contents('assets/logo.svg') !!}
        </div>
        <nav class="menu d-flex align-items-center">
        <ul class="list-unstyled d-flex mb-0 me-3">
            <li class="me-3"><a href="#">Home</a></li>
            <li class="me-3"><a href="#">About</a></li>
            <li class="me-3"><a href="#">Recipe</a></li>
        </ul>
        <div class="search-input">
            <input type="text" class="form-control" placeholder="Search...">
        </div>
        </nav>
    </div>
</header> --}}


<header class="bg-light position-sticky top-0 w-100" style="z-index: 100">
    <div class="container d-flex justify-content-between align-items-center py-3">
        <div class="logo">
            <a href="{{ url('/') }}">
                {!! file_get_contents('assets/logo.svg') !!}
            </a>

        </div>
        <nav class="d-flex align-items-center">
            @if (auth()->check())
                <div id="popup-menu" class="d-none position-fixed w-100 h-100 bg-danger start-0 top-0"
                    style="z-index: 10000">
                    <div class="container h-100 position-relative">
                        <div class="position-absolute end-0 top-0 mt-4">
                            <div class="toggle-popup-menu p-3 cursor-pointer">
                                {{-- <i class="fas fa-cross fs-1"></i> --}}
                                {{-- <i class="fa-solid fa-mosque fs-1"></i> --}}
                                <i class="fa-solid fa-star-and-crescent fs-1"></i>
                            </div>

                        </div>
                        <ul
                            class="w-100 w-md-75 w-lg-50 mx-auto h-100 px-lg-5 text-decoration-none list-unstyled d-flex flex-column align-items-center justify-content-center">
                            <li class="p-1 my-3 w-100">
                                <a
                                    class="btn btn-outline-warning border border-4 text-white px-5 py-2 w-100 fw-bold fs-1">Home</a>
                            </li>
                            <li class="p-1 my-3 w-100">
                                <a
                                    class="btn btn-outline-warning border border-4 text-white px-5 py-2 w-100 fw-bold fs-1">Explore</a>
                            </li>
                            <li class="p-1 my-3 w-100">
                                <a
                                    class="btn btn-outline-warning border border-4 text-white px-5 py-2 w-100 fw-bold fs-1">Recipe</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="toggle-popup-menu">
                    <i class="fa-solid fa-bars fs-3 fw-bold cursor-pointer p-1"></i>
                </div>
                <ul id="header-list-menu" class="list-unstyled d-flex mb-0 me-3">
                    <li class="me-3"><a href="{{url('/home')}}">Home</a></li>
                    <li class="me-3"><a href="{{url('/explore')}}">Explore</a></li>
                    <li class="me-3"><a href="{{url('/popular')}}">Popular</a></li>
                </ul>
                <div class="search-input">
                    <input type="text" class="form-control" placeholder="Search...">
                </div>
            @endif

            {{-- <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="User Avatar" class="rounded-circle ms-3" width="50" height="50"> --}}

            @auth()
                <div class="position-relative cursor-pointer">
                    {{-- {{auth()->user()->username}} --}}
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                        alt="User Avatar" class="rounded-circle ms-3" width="50" height="50" id="avatar">
                    <div class="position-absolute end-0 rounded" id="avatar-menu"
                        style="display: none; width: 10em;transform: translateY(.8em);z-index: 1">
                        <!-- Your popup menu content here -->
                        <div class="rounded" style="background: #ffa500">
                            <a class="p-3 d-block border-bottom text-center" href="{{ url('/profile') }}">My Account</a>
                            <a class="p-3 d-block border-bottom text-center" href="{{ url('/logout') }}">Logout</a>
                        </div>
                    </div>
                </div>
            @else
                <div class="ms-3">
                    <a class="btn btn-outline-primary rounded-pill px-3" href="{{ url('/login') }}">
                        Login
                    </a>
                    <a class="btn btn-primary rounded-pill px-3" href="{{ url('/register') }}">
                        Sign Up
                    </a>
                </div>
            @endauth

        </nav>

    </div>
</header>
