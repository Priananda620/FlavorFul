@extends('layout')
@section('content')
    <div class="vh-100 d-flex align-items-center mx-0 pt-md-0 pt-5">
        <div class="flex-column flex-md-row h-100 w-100 d-flex">
            <div class="w-100 w-md-50 d-flex align-items-center justify-content-center px-3 px-md-5 mt-5 mt-md-0 mb-5 mb-md-0 h-100">
                <div id="login-container" class="container p-5 border rounded shadow py-5 w-100 w-sm-100 position-relative"
                    style="width: fit-content;max-width: 30em;">
                    <div class="alert-target position-absolute start-0 w-100 bottom-0" style="margin-bottom: 25rem;">
                    </div>
                   
                    <h2 class="text-center mb-5" style="color: var(--fresh-green); font-weight: bold;">
                        {{ app()->config['app.name'] }}</h2>
                    <form id="login-form" method="POST">
                        {{ csrf_field() }}
                        <div class="mb-2">
                            <input type="email" class="form-control" id="email" placeholder="Email" required name="email">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password"
                                required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block w-100 mb-2">Login</button>
                        <a type="button" href="{{ route('register') }}"
                            class="btn btn-outline-primary btn-block w-100">Register</a>
                    </form>
                    <div class="text-center mt-3">
                        <a href="{{ route('forgotPassword') }}" class="text-primary">Forgot password?</a>
                    </div>
                </div>
            </div>
            <div class="w-100 w-md-50 image-container h-50 mt-5 mt-md-0 h-md-100">

            </div>
        </div>
    </div>

    <script>
        $(document).ready(() => {
            $('#login-container form#login-form button[type="submit"]').click(function(e) { 
                e.preventDefault()               
                console.log("ffffffffffff")

                const form = document.querySelector('form#login-form');
                
                let formData = new FormData(form);
                
                const email = formData.get('email');
                const password = formData.get('password');
                const remember = formData.get('remember')? (formData.get('remember') === 'on' ? true : false ) : false;
                const csrf = formData.get('_token');

                console.log(email)
                console.log(password)
                console.log(remember)
                console.log(csrf)

                let jsonData = {
                    email: email,
                    password: password,
                    remember: remember
                };

                $.ajax({
                    url: "{{route('loginApi')}}",
                    method: 'POST',                                                            
                    data: JSON.stringify(jsonData),
                    contentType: 'application/json',
                    timeout: 5000,
                    success: function (response) {
                        console.log(response)                        
                        $.cookie('api_plain_token', response.token, { expires: 7, path: '/' });
                        $('#login-container form#login-form').submit();
                    },
                    error: function (xhr, status, error) {                                                                                                                                                                        


                        var response = JSON.parse(xhr.responseText);                                                                                                                                                                                                
                        
                        if (response.errors) {
                            const errorMessages = Object.values(response.errors).flat();
                            errorMessages.forEach(message => {
                                // pushToastMessage('info', message, 'info');
                                pushAlert(message, 'danger')
                            });
                        } else if (response.message) {
                            pushAlert(response.message, 'info')
                        } else if (response.error) {
                            pushAlert(response.error, 'danger')
                        } else {
                            pushAlert("Failed, check console", 'danger')
                            console.log(response)
                        }
                    },
                    beforeSend: function () {                        
                        $('.loading-overlay').show();
                    },
                    complete: function () {                                                                        

                        $(".loading-overlay").attr("style", "display: none !important");
                    },
                });

            })
        })
    </script>
@endsection
