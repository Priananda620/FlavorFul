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
                                {{-- <i class="fa-solid fa-star-and-crescent fs-1"></i> --}}
                                <i class="fa-regular fa-circle-xmark fs-1"></i>
                            </div>

                        </div>
                        <ul
                            class="w-100 w-md-75 w-lg-50 mx-auto h-100 px-lg-5 text-decoration-none list-unstyled d-flex flex-column align-items-center justify-content-center">
                            <li class="p-1 my-3 w-100">
                                <a href="{{ url('/home') }}"
                                    class="btn btn-outline-warning border border-4 text-white px-5 py-2 w-100 fw-bold fs-1">Home</a>
                            </li>
                            <li class="p-1 my-3 w-100">
                                <a href="{{ url('/explore') }}"
                                    class="btn btn-outline-warning border border-4 text-white px-5 py-2 w-100 fw-bold fs-1">Explore</a>
                            </li>
                            <li class="p-1 my-3 w-100">
                                <a href="{{ url('/popular') }}"
                                    class="btn btn-outline-warning border border-4 text-white px-5 py-2 w-100 fw-bold fs-1">Popular</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="toggle-popup-menu">
                    <i class="fa-solid fa-bars fs-3 fw-bold cursor-pointer p-1"></i>
                </div>
                <ul id="header-list-menu" class="list-unstyled d-flex mb-0 me-3">
                    <li class="me-3"><a href="{{ url('/home') }}">Home</a></li>
                    <li class="me-3"><a href="{{ url('/explore') }}">Explore</a></li>
                    <li class="me-3"><a href="{{ url('/popular') }}">Popular</a></li>
                </ul>
                <div class="search-input dropdown">
                    <input type="text" name="header-search" class="form-control" placeholder="Search...">
                    <ul class="dropdown-menu w-100"
                        style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 32px, 0px);max-height: 50vh;overflow: scroll;"
                        aria-labelledby="dropdownMenuButton1">

                    </ul>
                </div>
            @endif

            {{-- <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="User Avatar" class="rounded-circle ms-3" width="50" height="50"> --}}

            @auth()
                <div class="position-relative cursor-pointer">
                    {{-- {{auth()->user()->username}} --}}
                    <img src="{{ asset('assets/userAvatars/' . auth()->user()->avatarUrl) }}"
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

    <script>
        $(document).ready(() => {
            console.log("DSDDDSlLLLL")
            $('header .dropdown-menu').empty()
            $('input[name="header-search"]').on('focus', function() {
                $('header .dropdown-menu').addClass('active show')
                if (!$('header .dropdown-item[href]:not([href=""])').length) {
                    $('header .dropdown-menu').empty()
                    $('header .dropdown-menu').append(`<a class="dropdown-item px-2">
                                <div class="py-2 d-flex align-items-center">
                                    <p class="text-dark text-wrap py-1 w-100 text-center">Type something...</p>
                                </div>
                        </a>`)
                }
            })

            $('input[name="header-search"]').on('focusout', function() {
                setTimeout(() => {
                    $('header .dropdown-menu').removeClass('active show')
                    if (!$('header .dropdown-item[href]:not([href=""])').length) {
                        $('header .dropdown-menu').empty()
                    }
                }, 1000)

            })

            $('input[name="header-search"]').on('input', function() {

                clearTimeout(debounceTimer);
                const inputQ = $(this).val()
                console.log(inputQ)

                if (inputQ.length) {

                    $('header .dropdown-menu').empty()
                    debounceTimer = setTimeout(async () => {
                        $.ajax({
                            url: 'https://api.edamam.com/search',
                            method: 'GET',
                            data: (function() {
                                let requestData = {
                                    app_id: '18f6495e',
                                    app_key: '8bb396da11d4832a439ea25f315c827f',
                                    q: inputQ,
                                    from: 0,
                                    to: 20,
                                    imageSize: 'SMALL',
                                    time: '1+',
                                };

                                return requestData;
                            })(),

                            success: function(data) {
                                console.log(data);

                                $('header .dropdown-menu').addClass('active show')

                                const itemTemp = `<a class="dropdown-item px-2" href="{url}">
                            <div class="d-inline-flex flex-wrap">
                                <div class="p-2" style="width: 40%">
                                    <img style="width: 100%; min-width: 4rem"
                                        src="{image}">
                                </div>
                                <div class="py-2 d-flex align-items-center" style="width: 60%">
                                    <p class="text-dark text-wrap py-1">{recipeName}</p>
                                </div>
                            </div>
                        </a>`
                                $('header .dropdown-menu').empty()

                                if (!data.hits.length) {
                                    $('header .dropdown-menu').empty()
                                    $('header .dropdown-menu').append(`<a class="dropdown-item px-2">
                                <div class="py-2 d-flex align-items-center">
                                    <p class="text-dark text-wrap py-1 w-100 text-center">No Match...</p>
                                </div>
                        </a>`)
                                }

                                data.hits.forEach(object => {
                                    const recipe = object.recipe
                                    let tmp = itemTemp.replace('{url}',
                                            window.location.origin +
                                            '/recipe-details/' + recipe.uri
                                            .split('#')[1].split('_')[1])
                                        .replace('{image}', recipe.image)
                                        .replace('{recipeName}', recipe
                                            .label)
                                    console.log(recipe.label)

                                    $('header .dropdown-menu').append(tmp)
                                });

                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                console.error('AJAX request failed:', textStatus,
                                    errorThrown);
                            },
                            complete: function() {
                                console.log("dsdasdsadDONE")
                            },
                            beforeSend: function() {
                                $('header .dropdown-menu').removeClass(
                                    'active show')
                            },
                        });
                    }, 700)
                } else {
                    $('header .dropdown-menu').empty()
                    $('header .dropdown-menu').append(`<a class="dropdown-item px-2">
                                <div class="py-2 d-flex align-items-center">
                                    <p class="text-dark text-wrap py-1 w-100 text-center">Type something...</p>
                                </div>
                        </a>`)
                }
            })
        })
    </script>
</header>
