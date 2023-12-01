@extends('layout')
@section('content')
    <div class="d-flex align-items-center mx-0 vh-100">
        <div class="flex-column flex-md-row h-100 w-100 d-flex">
            <div
                class="container w-100 w-sm-100 d-flex justify-content-center px-3 px-md-4 px-lg-5 mt-5 mt-md-0 flex-column mx-md-4 mx-lg-5 py-5">
                <div style="max-width: 40em;"
                    class="container p-5 border rounded shadow py-5 w-100 w-sm-100 position-relative">
                    <div class="alert-target position-absolute start-0 w-100 bottom-0" style="margin-bottom: 46rem;">
                    </div>
                    <div class="mb-5">
                        <h2 style="color: var(--fresh-green); font-weight: bold;">{{ app()->config['app.name'] }}</h2>
                    </div>

                    <h1 class="mb-2 fw-bold">Create Account</h1>
                    <div id="register-container" class="p-4 border rounded py-5 w-100" style="width: fit-content;">
                        {{-- <h2 class="text-center mb-4" style="color: var(--fresh-green); font-weight: bold;">{{ app()->config['app.name'] }}</h2> --}}
                        <form id="register-form" class="needs-validation" method="POST" novalidate>
                            {{ csrf_field() }}
                            <div class="mb-3">
                                <label class="mb-2" for="username">Username:</label>
                                <input type="text" class="form-control" id="username" placeholder="username" required
                                    name="username">
                                <div class="invalid-feedback" id="username">
                                    Please provide a valid username.
                                </div>
                            </div>
                            <div class="mb-3">
                                {{-- <label class="mb-2" for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" required
                                    name="email"> --}}

                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required name="email" placeholder="Email">
                                <div class="invalid-feedback" id="email">
                                    Please provide a valid email.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2" for="password">Password:</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" required
                                    name="password">
                                <div class="invalid-feedback" id="password">
                                    Please provide a valid password.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2" for="confirm_password">Confirm Password:</label>
                                <input type="password" class="form-control" id="confirm_password"
                                    placeholder="Confirm Password" required name="confirm_password">
                                <div class="invalid-feedback" id="confirm_password">
                                    Please provide a valid password.
                                </div>
                            </div>




                            {{-- <div class="mb-3">
                            <label for="dietary_preference" class="form-label">Dietary Preference:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dietary_preference" id="vegetarian" value="Vegetarian">
                                <label class="form-check-label" for="vegetarian">Vegetarian</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dietary_preference" id="vegan" value="Vegan">
                                <label class="form-check-label" for="vegan">Vegan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dietary_preference" id="pescatarian" value="Pescatarian">
                                <label class="form-check-label" for="pescatarian">Pescatarian</label>
                            </div>
                        </div> --}}
                            {{-- <div class="mb-3">
                            <label for="health_goal" class="form-label">Health Goal:</label>
                            <select class="form-select" id="health_goal" required="">
                                <option value="" disabled selected>Select Health Goal</option>
                                <option value="Weight loss">Weight loss</option>
                                <option value="General health improvement">General health improvement</option>
                                <option value="Muscle building">Muscle building</option>
                            </select>
                        </div> --}}
                            <button type="submit" class="btn btn-primary btn-block w-100 mb-2">Register</button>
                        </form>
                        <div class="text-center mt-3">
                            <a href="{{ route('login') }}" class="text-primary">Already have an account? Login</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="w-100 w-sm-100 w-md-30 w-lg-100  image-container h-100 mt-4 mt-md-0">
                {{-- <div class="image-container position-sticky top-0 h-100 w-100">

            </div> --}}
            </div>
        </div>
    </div>
    <script>
        $(document).ready(() => {
            $('#register-container > form#register-form button[type="submit"]').click(function(e) {
                // if (!$(this).checkValidity()) {
                //     e.preventDefault()
                //     e.stopPropagation()
                //     return
                // }

                // $(this).addClass('was-validated');

                e.preventDefault()
                console.log("GGGGGGGGGGGGGGGGGGG")

                const form = document.querySelector('form#register-form');

                let formData = new FormData(form);


                const username = formData.get('username');
                const email = formData.get('email');
                const password = formData.get('password');
                const confirm_password = formData.get('confirm_password');
                const csrf = formData.get('_token');

                console.log(username)
                console.log(email)
                console.log(password)
                console.log(confirm_password)
                console.log(csrf)

                let validationFlag = false

                $(this).parent().find('input').removeClass('is-invalid')

                if (username == "") {
                    pushAlert("Username Cannot Be Empty", 'info')
                    $('input#username').addClass('is-invalid')
                    validationFlag = true
                }

                if (email == "") {
                    pushAlert("Email Cannot Be Empty", 'info')
                    $('input#email').addClass('is-invalid')
                    validationFlag = true
                }

                if (password == "") {
                    pushAlert("Password Cannot Be Empty", 'info')
                    $('input#password').addClass('is-invalid')
                    validationFlag = true
                }

                if (confirm_password == "") {
                    pushAlert("Password Cannot Be Empty", 'info')
                    $('input#confirm_password').addClass('is-invalid')
                    validationFlag = true
                }

                if (confirm_password !== password) {
                    $('input#confirm_password').addClass('is-invalid')
                    pushAlert("Password Did Not Match", 'info')
                    validationFlag = true
                }

                if (validationFlag) {
                    return
                }

                console.log("SDSDSADS")

                const remember = formData.get('remember')? (formData.get('remember') === 'on' ? true : false ) : false;

                let jsonData = {
                    username: username,
                    email: email,
                    password: password,
                    remember: remember
                };

                $.ajax({
                    url: "{{ route('registerApi') }}",
                    method: 'POST',
                    data: JSON.stringify(jsonData),
                    contentType: 'application/json',
                    timeout: 5000,
                    success: function(response) {
                        console.log(response)
                        $.cookie('api_plain_token', response.token, {
                            expires: 7,
                            path: '/'
                        });
                        $('#register-container > form#register-form button[type="submit"]').parent().submit();
                    },
                    error: function(xhr, status, error) {

                        var response = JSON.parse(xhr.responseText);

                        if (response.errors) {
                            // const errorMessages = Object.values(response.errors).flat();
                            // errorMessages.forEach(message => {
                            //     pushAlert(message, 'danger')
                            // });

                            for (const key in response.errors) {
                                if (response.errors.hasOwnProperty(key)) {
                                    const errorMessages = response.errors[key];
                                    console.log("Key:", key);
                                    console.log("Error Messages:", errorMessages);

                                    $('input#'+key).addClass('is-invalid')

                                    errorMessages.forEach(message => {
                                        pushAlert(message, 'danger');
                                    });
                                }
                            }
                        } else if (response.message) {
                            pushAlert(response.message, 'info')
                        } else if (response.error) {
                            pushAlert(response.error, 'danger')
                        } else {
                            pushAlert("Failed, check console", 'danger')
                            console.log(response)
                        }
                    },
                    beforeSend: function() {
                        $('.loading-overlay').show();
                    },
                    complete: function() {
                        $(".loading-overlay").attr("style", "display: none !important");
                    },
                });

            })
        })
    </script>
@endsection
